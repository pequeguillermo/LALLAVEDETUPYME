<?php

declare(strict_types=1);

/**
 * Plantilla genérica de cabecera visual (<header>)
 *
 * Variables esperadas:
 * @var string|null $headerType Tipo de cabecera ('standard' [defecto], 'landing', 'minimal', 'none')
 * @var string|null $landingCtaText Texto del CTA en cabecera landing
 * @var string|null $landingCtaHref Enlace del CTA en cabecera landing
 */

$type = $headerType ?? 'standard';

if ($type === 'none') {
    return;
}
?>
<?php if ($type === 'landing'): ?>
  <header class="site-header landing-header">
    <div class="container header-inner">
      <a class="brand" href="/" aria-label="La Llave de tu Pyme, inicio"><img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme"></a>
      <a class="landing-header-cta" href="<?= htmlspecialchars($landingCtaHref ?? '#diagnostico', ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($landingCtaText ?? 'Revisar mi caso', ENT_QUOTES, 'UTF-8') ?> <span aria-hidden="true"><?= str_starts_with($landingCtaHref ?? '#', '#') ? '↓' : '↗' ?></span></a>
    </div>
  </header>
<?php elseif ($type === 'minimal'): ?>
  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="/" aria-label="La Llave de tu Pyme, inicio"><img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme"></a>
      <a class="nav-cta" href="/contacto/">Abrir conversación</a>
    </div>
  </header>
<?php else: ?>
  <header class="site-header">
    <div class="container header-inner">
      <a class="brand" href="/" aria-label="La Llave de tu Pyme, inicio"><img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme"></a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span class="sr-only">Abrir menú</span></button>
      <nav class="main-nav" id="main-nav" aria-label="Navegación principal">
        <a href="/servicios/">Servicios</a>
        <a href="/nosotros/">Cómo trabajamos</a>
        <a href="/auditoria-marketing/">Mapa de oportunidades</a>
        <a href="/blog/">Ideas</a>
        <a href="/contacto/" class="nav-cta">Abrir conversación</a>
      </nav>
    </div>
  </header>
<?php endif; ?>
