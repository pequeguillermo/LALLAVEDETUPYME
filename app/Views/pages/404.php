<?php
$title = 'Página no encontrada | La Llave de tu Pyme';
$robots = 'noindex,follow';
$headerType = 'none';
$footerType = 'none';
$showWhatsapp = false;
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
    <section class="thanks-section">
      <div class="thanks-key" aria-hidden="true">404</div>
      <div class="container">
        <span class="eyebrow">Esta ruta no abre ninguna puerta</span>
        <h1>La página que buscas no está aquí.</h1>
        <p class="hero-lead">Puedes volver al inicio y continuar desde allí.</p>
        <a class="button" href="/">Volver al inicio <span aria-hidden="true">↗</span></a>
      </div>
    </section>
  </main>
<?php
require dirname(__DIR__) . '/partials/footer.php';
