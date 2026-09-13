<?php
$title = 'Gracias por dar el paso con tus redes | La Llave';
$description = 'El siguiente paso para mantener activas las redes de tu negocio.';
$robots = 'noindex,nofollow';
$canonical = 'https://lallavedetupyme.com/gracias-community-manager/';
$bodyClass = 'social-page social-thanks-page';
$confirmation = $_SESSION['confirmation'] ?? null;
$confirmed = is_array($confirmation)
    && ($confirmation['destination'] ?? '') === '/gracias-community-manager/'
    && ($confirmation['expires'] ?? 0) >= time();
if ($confirmed) unset($_SESSION['confirmation']);
$headExtra = '<link rel="stylesheet" href="/community-manager.css?v=20260913-1">';
if ($confirmed) {
    $headExtra .= '<script type="application/json" id="confirmed-lead">'
        . json_encode($confirmation, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . '</script>';
}
$headerType = 'landing';
$landingCtaText = 'Volver a los planes';
$landingCtaHref = '/community-manager/#planes';
$footerType = 'conversion';
$showWhatsapp = false;
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <section class="social-thanks">
    <div class="container">
      <span class="social-thanks-symbol" aria-hidden="true"><?= $confirmed ? '✓' : '↗' ?></span>
      <span class="eyebrow"><?= $confirmed ? 'Solicitud recibida correctamente' : 'El siguiente paso para tus redes' ?></span>
      <h1><?= $confirmed ? 'Gracias por dar el paso.<br><em>Ahora nos toca a nosotros.</em>' : 'Tus redes tienen<br><em>mucho que contar.</em>' ?></h1>
      <p class="hero-lead"><?= $confirmed ? 'Ya tenemos tu solicitud de community manager. Revisaremos la información de tu negocio y te contactaremos para concretar el plan y resolver tus dudas.' : 'Si ya nos has enviado el formulario, no necesitas repetirlo. Si todavía no lo has hecho, cuéntanos qué necesita tu negocio y hablamos.' ?></p>
      <?php if ($confirmed): ?>
        <div class="social-thanks-next"><span>¿Qué ocurre ahora?</span><p><strong>Revisamos tu negocio.</strong> Después hablamos contigo para acordar el contenido, el ritmo de publicación y cómo empezar.</p><small>No se ha realizado ningún cobro ni se ha activado una contratación.</small></div>
        <a class="button" href="https://wa.me/34611458493?text=Hola%2C%20acabo%20de%20solicitar%20informaci%C3%B3n%20sobre%20community%20manager%20en%20vuestra%20web." target="_blank" rel="noopener noreferrer">Prefiero hablar por WhatsApp <span aria-hidden="true">↗</span></a>
        <a class="social-thanks-back" href="/community-manager/">Volver a ver los planes</a>
      <?php else: ?>
        <a class="button" href="/community-manager/#activar-redes">Consultar los planes <span aria-hidden="true">↗</span></a>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php require dirname(__DIR__) . '/partials/footer.php';
