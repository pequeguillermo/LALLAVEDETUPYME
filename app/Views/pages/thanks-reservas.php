<?php
declare(strict_types=1);
$title = 'Solicitud del sistema de reservas | La Llave de tu Pyme';
$description = 'Información sobre tu solicitud del sistema de reservas para restaurantes.';
$robots = 'noindex,nofollow';
$canonical = 'https://lallavedetupyme.com/sistema-reservas-restaurantes/gracias/';
$bodyClass = 'reservas-page';
$headerType = 'landing';
$landingCtaText = 'Volver a la promoción';
$landingCtaHref = '/sistema-reservas-restaurantes/';
$footerType = 'conversion';
$showWhatsapp = false;
$confirmation = $_SESSION['confirmation'] ?? null;
$confirmed = is_array($confirmation)
    && ($confirmation['destination'] ?? '') === '/sistema-reservas-restaurantes/gracias/'
    && ($confirmation['expires'] ?? 0) >= time();
if ($confirmed) unset($_SESSION['confirmation']);
$headExtra = '<link rel="stylesheet" href="/reservas.css?v=20261111-1">';
if ($confirmed) $headExtra .= '<script type="application/json" id="confirmed-lead">' . json_encode($confirmation, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . '</script>';
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido"><section class="reservas-thanks"><div class="container">
  <p class="reservas-product-label">Sistema de reservas para restaurantes</p>
  <h1><?= $confirmed ? 'Hemos recibido tu solicitud' : 'Solicitud de información sobre reservas' ?></h1>
  <p><?= $confirmed ? 'Gracias por interesarte en nuestra promoción de 25 €/mes + IVA de por vida. Contactaremos contigo para enseñarte el sistema, conocer tu restaurante y explicarte la integración y la opción de web gratis.' : 'Para conocer el sistema y solicitar la promoción, completa el formulario de la página del producto.' ?></p>
  <p><?= $confirmed ? 'No se ha realizado ningún cobro. Antes de contratar confirmaremos contigo el alcance y las condiciones.' : 'Si ya has enviado tu solicitud correctamente, no necesitas repetirla.' ?></p>
  <a class="reservas-button" href="/sistema-reservas-restaurantes/<?= $confirmed ? '' : '#solicitar-promocion' ?>">Volver a la promoción</a>
</div></section></main>
<?php require dirname(__DIR__) . '/partials/footer.php';
