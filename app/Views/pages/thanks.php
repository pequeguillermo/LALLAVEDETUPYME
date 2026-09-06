<?php
$title = 'Gracias | La Llave de tu Pyme';
$description = 'Confirmación de contacto con La Llave de tu Pyme.';
$robots = 'noindex,follow';
$canonical = 'https://lallavedetupyme.com/gracias/';
$schemaJson = '[{"@context":"https://schema.org","@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com","logo":"https://lallavedetupyme.com/assets/logo-la-llave.png","description":"Agencia de marketing digital para pymes: estrategia, web, SEO, publicidad, contenidos y automatización bajo una misma dirección."},{"@context":"https://schema.org","@type":"WebPage","name":"Gracias | La Llave de tu Pyme","url":"https://lallavedetupyme.com/gracias/"}]';
$headExtra = <<<'HEAD_EXTRA'
  <!-- Evento de conversiÃ³n OpenAI / ChatGPT Ads -->
  <script>
    oaiq("measure", "registration_completed", { type: "customer_action" });
  </script>
HEAD_EXTRA;
$headerType = 'landing';
$landingCtaText = 'Volver al inicio';
$landingCtaHref = '/';
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido"><section class="thanks-section"><div class="thanks-key" aria-hidden="true">⌁</div><div class="container"><span class="eyebrow">Solicitud recibida</span><h1>Gracias. Ya tenemos por dónde empezar.</h1><p class="hero-lead">Tu mensaje ha llegado correctamente. Revisaremos el contexto y te responderemos para decidir el siguiente paso.</p><a class="button" href="/">Volver al inicio <span aria-hidden="true">↗</span></a></div></section></main>
<?php
require dirname(__DIR__) . '/partials/footer.php';
