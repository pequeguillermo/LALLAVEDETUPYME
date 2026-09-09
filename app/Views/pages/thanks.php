<?php
$title = 'Gracias | La Llave de tu Pyme';
$description = 'Confirmación de contacto con La Llave de tu Pyme.';
$robots = 'noindex,follow';
$canonical = 'https://lallavedetupyme.com/gracias/';
$schemaJson = '[{"@context":"https://schema.org","@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com","logo":"https://lallavedetupyme.com/assets/logo-la-llave.png","description":"Agencia de marketing digital para pymes: estrategia, web, SEO, publicidad, contenidos y automatización bajo una misma dirección."},{"@context":"https://schema.org","@type":"WebPage","name":"Gracias | La Llave de tu Pyme","url":"https://lallavedetupyme.com/gracias/"}]';
$confirmation = $_SESSION['confirmation'] ?? null;
unset($_SESSION['confirmation']);
$confirmed = is_array($confirmation) && ($confirmation['expires'] ?? 0) >= time();
$headExtra = $confirmed
    ? '<script type="application/json" id="confirmed-lead">' . json_encode($confirmation, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . '</script>'
    : '';
$headerType = 'landing';
$landingCtaText = 'Volver al inicio';
$landingCtaHref = '/';
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido"><section class="thanks-section"><div class="thanks-key" aria-hidden="true">⌁</div><div class="container"><span class="eyebrow"><?= $confirmed ? 'Solicitud recibida' : 'Contacto' ?></span><h1><?= $confirmed ? 'Gracias. Ya tenemos por dónde empezar.' : 'Hablemos de tu negocio.' ?></h1><p class="hero-lead"><?= $confirmed ? 'Tu mensaje ha llegado correctamente. Revisaremos el contexto y te responderemos para decidir el siguiente paso.' : 'Si quieres enviarnos una consulta, utiliza nuestro formulario de contacto.' ?></p><a class="button" href="/">Volver al inicio <span aria-hidden="true">↗</span></a></div></section></main>
<?php
require dirname(__DIR__) . '/partials/footer.php';
