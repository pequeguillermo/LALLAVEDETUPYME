<?php

declare(strict_types=1);

$title = '¡Solicitud Recibida! Tu Web Profesional por 400 € | La Llave';
$description = 'Hemos recibido tu solicitud para la web de tu negocio por 400 € con hosting gratis 6 meses y configuración Jarvis.';
$robots = 'noindex,nofollow';
$canonical = 'https://lallavedetupyme.com/promoweb/gracias/';
$bodyClass = 'promoweb-page promoweb-thanks-page';

$confirmation = $_SESSION['confirmation'] ?? null;
$confirmed = is_array($confirmation)
    && in_array($confirmation['destination'] ?? '', ['/promoweb/gracias/', '/gracias-promoweb/'], true)
    && ($confirmation['expires'] ?? 0) >= time();
if ($confirmed) {
    unset($_SESSION['confirmation']);
}

$googleAdsTransactionId = $confirmed && !empty($confirmation['eventId']) ? (string)$confirmation['eventId'] : '';

$headExtra = '<link rel="stylesheet" href="/promoweb.css?v=20261001-1">' . "\n"
    . '<!-- Event snippet for Compra conversion page -->' . "\n"
    . '<script>' . "\n"
    . '  window.dataLayer = window.dataLayer || [];' . "\n"
    . '  function gtag(){dataLayer.push(arguments);}' . "\n"
    . '  gtag(\'event\', \'conversion\', {' . "\n"
    . '      \'send_to\': \'AW-18055513085/-oH8CK_WwJMcEP2HxaFD\',' . "\n"
    . '      \'value\': 1.0,' . "\n"
    . '      \'currency\': \'EUR\',' . "\n"
    . '      \'transaction_id\': ' . json_encode($googleAdsTransactionId) . "\n"
    . '  });' . "\n"
    . '</script>';

if ($confirmed) {
    $headExtra .= "\n" . '<script type="application/json" id="confirmed-lead">'
        . json_encode($confirmation, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . '</script>';
}

$headerType = 'landing';
$landingCtaText = 'Volver a la oferta';
$landingCtaHref = '/promoweb/';
$footerType = 'conversion';
$showWhatsapp = false;

require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <section class="promoweb-thanks">
    <div class="container">
      <div class="thanks-box">
        <span class="thanks-symbol" aria-hidden="true"><?= $confirmed ? '✓' : '↗' ?></span>
        <span class="eyebrow" style="color:var(--orange-hot); font:700 0.8rem var(--display); text-transform:uppercase; letter-spacing:0.08em; display:block; margin-bottom:10px;">
          <?= $confirmed ? 'Solicitud Recibida Correctamente' : 'El Siguiente Paso para tu Web' ?>
        </span>
        
        <h1>
          <?= $confirmed ? '¡Gracias por dar el paso!<br><em>Ahora nos toca a nosotros.</em>' : 'Una web profesional<br><em>para hacer crecer tu pyme.</em>' ?>
        </h1>
        
        <p class="thanks-lead">
          <?= $confirmed ? 'Hemos recibido tus datos correctamente para la oferta de <strong>desarrollo web por 400 € con 6 meses de hosting gratis y configuración Jarvis</strong>. Revisaremos tu negocio y te contactaremos en menos de 24 horas laborables.' : 'Si ya nos has enviado el formulario, no necesitas repetirlo. Tu solicitud ya está registrada y te contactaremos muy pronto.' ?>
        </p>

        <?php if ($confirmed): ?>
          <div class="thanks-steps-box">
            <span>¿Qué ocurre ahora?</span>
            <p><strong>1. Análisis inicial:</strong> Analizamos tu sector, tu competencia y la información de tu negocio para preparar la estructura ideal.</p>
            <p><strong>2. Contacto directo:</strong> Te llamamos o escribimos para confirmar los detalles, resolver tus dudas y arrancar el diseño.</p>
            <small>Tranquilo: no se ha realizado ningún cobro automático ni hay permanencias.</small>
          </div>

          <div class="thanks-actions">
            <a class="button" href="https://wa.me/34611458493?text=Hola%2C%20acabo%20de%20enviar%20el%20formulario%20de%20la%20web%20a%20400%E2%82%AC%20y%20quiero%20comentar%20mi%20proyecto." target="_blank" rel="noopener noreferrer">
              Prefiero comentar mi proyecto por WhatsApp <span aria-hidden="true">↗</span>
            </a>
            <a class="thanks-back-link" href="/promoweb/">Volver a ver los detalles de la oferta</a>
          </div>
        <?php else: ?>
          <div class="thanks-actions">
            <a class="button" href="/promoweb/#pedir-web">
              Pedir mi web por 400 € <span aria-hidden="true">→</span>
            </a>
            <a class="thanks-back-link" href="/">Ir a la página principal</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php
require dirname(__DIR__) . '/partials/footer.php';