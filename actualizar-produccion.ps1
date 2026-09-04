$ErrorActionPreference = 'Stop'

$projectRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
$productionRoot = Join-Path $projectRoot 'produccion'
$expectedProductionRoot = [System.IO.Path]::GetFullPath((Join-Path $projectRoot 'produccion'))
$resolvedProductionRoot = [System.IO.Path]::GetFullPath($productionRoot)

if ($resolvedProductionRoot -ne $expectedProductionRoot -or $resolvedProductionRoot -eq [System.IO.Path]::GetPathRoot($resolvedProductionRoot)) {
    throw 'La ruta de producción no es segura.'
}

if (Test-Path -LiteralPath $productionRoot) {
    Remove-Item -LiteralPath $productionRoot -Recurse -Force
}

New-Item -ItemType Directory -Path $productionRoot | Out-Null

foreach ($directory in @('app', 'config', 'public')) {
    $source = Join-Path $projectRoot $directory
    if (-not (Test-Path -LiteralPath $source -PathType Container)) {
        throw "Falta la carpeta obligatoria: $directory"
    }
    Copy-Item -LiteralPath $source -Destination (Join-Path $productionRoot $directory) -Recurse
}

$privateConfig = Join-Path $productionRoot 'config\private.php'
if (Test-Path -LiteralPath $privateConfig) {
    Remove-Item -LiteralPath $privateConfig -Force
}

$forbiddenNames = @('project.md', '.env', '.git')
$forbidden = Get-ChildItem -LiteralPath $productionRoot -Force -Recurse | Where-Object {
    $_.Name -in $forbiddenNames -or $_.Name -like '*.log'
}
if ($forbidden) {
    throw 'El paquete contiene archivos que no deben llegar a producción.'
}

$readme = @'
PAQUETE MANUAL PARA PLESK

1. Copia EL CONTENIDO de esta carpeta dentro de /public_html/. No subas la carpeta produccion como un nivel adicional.
2. La estructura final debe contener /public_html/app, /public_html/config y /public_html/public.
3. La raíz documental del dominio debe apuntar a /public_html/public.
4. Elimina o renombra el index.html de bienvenida que Plesk haya dejado dentro de /public_html/public.
5. Comprueba que /public_html/public/index.php y /public_html/public/.htaccess existen. Activa la visualización y transferencia de archivos ocultos para no perder .htaccess.
6. Si despliegas desde Git, usa /public_html como destino del repositorio; /public_html/public es sólo la raíz documental del dominio.
7. Usa PHP 8.1 o superior.
8. Después de subir, prueba la portada, una URL interna y el formulario.

Este paquete no contiene secretos, registros locales ni project.md.
'@
Set-Content -LiteralPath (Join-Path $productionRoot 'LEEME-PRODUCCION.txt') -Value $readme -Encoding UTF8

$files = Get-ChildItem -LiteralPath $productionRoot -File -Recurse
Write-Output "Producción actualizada: $($files.Count) archivos en $productionRoot"
