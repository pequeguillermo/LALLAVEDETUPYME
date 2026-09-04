# La Llave de tu Pyme

Web PHP sencilla con estructura MVC, preparada para Plesk y publicación directa mediante FTP. No utiliza Node.js, Composer, Docker ni procesos de compilación.

## Estructura

- `app/Controllers/`: resolución de las peticiones.
- `app/Models/`: mapa de rutas públicas.
- `app/Services/`: envío del formulario.
- `app/Views/pages/`: páginas HTML editables directamente.
- `config/`: configuración del destinatario y transporte de correo.
- `public/`: raíz web, recursos, `index.php`, sitemaps y robots.

## Desarrollo local

Requiere PHP 8.1 o superior. Desde la raíz del proyecto:

```bash
php -S 127.0.0.1:4173 -t public public/index.php
```

La web queda disponible en `http://127.0.0.1:4173`.

## Publicación en Plesk

La estructura recomendada es:

```text
/public_html/
├── app/
├── config/
├── storage/
└── public/       ← raíz documental del dominio
```

Para la primera publicación:

1. Subir el contenido de `produccion/` mediante FTP a `/public_html/`, sin crear un nivel adicional `/public_html/produccion/`. El resultado debe incluir `/public_html/app/`, `/public_html/config/` y `/public_html/public/`. `storage/` se crea automáticamente cuando hace falta.
2. Configurar en Plesk la raíz documental del dominio como `/public_html/public`.
3. Eliminar o renombrar el `index.html` de bienvenida que Plesk haya creado dentro de `/public_html/public/` y comprobar que allí existen `index.php` y `.htaccess`.
4. Utilizar PHP 8.1 o superior.
5. Verificar que la función PHP `mail()` está habilitada y que `info@lallavedetupyme.com` recibe una prueba real.
6. Abrir el dominio y comprobar portada, rutas, recursos, formulario, HTTPS, `robots.txt`, `sitemap-index.xml` y `llms.txt`.

Si Plesk despliega el repositorio desde Git, el destino del despliegue es `/public_html`; `/public_html/public` se reserva como raíz documental del dominio.

No hay que ejecutar ningún comando en producción. Los cambios posteriores se editan directamente en `app/Views/pages/` o `public/`, se versionan con GitHub Desktop y Plesk los publica.

## Carpeta `produccion/`

`produccion/` es el respaldo manual siempre listo para FTP. Contiene una copia exacta de `app/`, `config/` y `public/`, más un archivo breve de instrucciones. Puedes copiar directamente su contenido dentro de `/public_html/`.

Después de cualquier cambio que afecte a la web, actualiza el paquete desde la raíz del proyecto:

```powershell
powershell.exe -NoProfile -ExecutionPolicy Bypass -File .\actualizar-produccion.ps1
```

El script vuelve a crear la carpeta para eliminar archivos obsoletos, excluye `config/private.php`, secretos y registros, y comprueba que las carpetas obligatorias existen.

## Formularios, analítica y privacidad

- Los tres formularios envían a `info@lallavedetupyme.com` mediante el correo local de Plesk.
- En local no se envían mensajes: se guarda una captura de prueba en `storage/logs/`, fuera de la raíz pública y excluida de Git.
- El éxito redirige a `/gracias/`; la página es `noindex` y no forma parte del sitemap.
- La etiqueta `GT-WRGZMMBM` sólo se carga después de aceptar la analítica.
- El evento `generate_lead` sólo se genera tras una respuesta correcta del servidor.
- Aviso legal, privacidad y cookies utilizan los datos de IDEAS IMAGINATIVAS, CIF B82221730, y el correo `info@lallavedetupyme.com`.

## Blog nuevo y retirada del anterior

- `/blog/` abre una portada nueva, sin artículos inventados y con `noindex` mientras esté vacía.
- Las URLs históricas de artículos con formato `/AAAA/MM/DD/slug/` responden con una redirección permanente `301` a la portada.
- La regla existe tanto en `.htaccess` como en el router PHP, por lo que funciona con Apache/Plesk y con el servidor local.
- Los futuros artículos deben publicarse bajo `/blog/` para no coincidir con el patrón retirado.

Antes de sustituir WordPress conviene conservar una copia completa de sus archivos y base de datos, aunque el contenido antiguo no vaya a publicarse.
