<?php
declare(strict_types=1);

$title = 'Sistema de reservas para restaurantes: 25 €/mes + IVA | La Llave';
$description = 'Reservas online, gestión de comensales y club de clientes para restaurantes. Promoción: 25 €/mes + IVA de por vida. Si no tienes web, te la hacemos gratis.';
$canonical = 'https://lallavedetupyme.com/sistema-reservas-restaurantes/';
$ogImage = 'https://lallavedetupyme.com/assets/reservas-restaurantes.png';
$bodyClass = 'reservas-page';
$headerType = 'landing';
$landingCtaText = 'Quiero la promoción';
$landingCtaHref = '#solicitar-promocion';
$footerType = 'conversion';
$showWhatsapp = false;
$headExtra = '<link rel="stylesheet" href="/reservas.css?v=20261111-2">';
$schemaJson = json_encode([
    '@context' => 'https://schema.org', '@type' => 'Service',
    'name' => 'Sistema de reservas online para restaurantes', 'url' => $canonical,
    'serviceType' => 'Reservas online y club de clientes para restaurantes', 'areaServed' => 'España',
    'provider' => ['@type' => 'Organization', 'name' => 'La Llave de tu Pyme', 'url' => 'https://lallavedetupyme.com/'],
    'offers' => ['@type' => 'Offer', 'name' => 'Promoción de reservas para restaurantes', 'price' => '25', 'priceCurrency' => 'EUR',
        'description' => '25 €/mes + IVA de por vida para quienes contraten durante la promoción. Precio habitual: 50 €/mes + IVA. Si no tienes web, creación gratis y hosting gratis el primer año; después, hosting 100 €/año. La cuota del sistema se abona por separado.'],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <section class="reservas-hero">
    <div class="container reservas-hero-grid">
      <div class="reservas-hero-copy">
        <p class="reservas-product-label"><span aria-hidden="true">✳</span> Reservas + club de clientes</p>
        <h1>Sistema de reservas online para restaurantes</h1>
        <p class="reservas-lead">Tus clientes reservan en tu web. Tú organizas las reservas, los comensales y los horarios desde un mismo panel.</p>
        <div class="reservas-price-line">
          <div><span class="reservas-old-price">Antes <s>50 €/mes</s></span><strong class="reservas-price">25 €<small>/mes + IVA</small></strong></div>
          <span class="reservas-lifetime">De por vida<br><small>si contratas ahora la promoción</small></span>
        </div>
        <a class="reservas-button" href="#solicitar-promocion">Quiero la promoción</a>
        <p class="reservas-hero-note">¿Aún no tienes web? <a href="#web-gratis">Te la hacemos gratis, con hosting incluido el primer año.</a></p>
        <div class="reservas-compatibility"><span>Para WordPress</span><span>Para webs de código propio</span></div>
      </div>
      <figure class="reservas-demo">
        <div class="reservas-demo-top"><span class="reservas-demo-brand">Tu restaurante</span><span>Panel de gestión</span></div>
        <div class="reservas-demo-nav"><strong>Reservas</strong><span>Club de clientes</span><span>Promociones</span></div>
        <div class="reservas-demo-body">
          <div class="reservas-demo-title"><div><small>Organiza el servicio</small><h2>Tu próxima mesa,<br>en su sitio.</h2></div><span class="reservas-calendar-icon" aria-hidden="true">11<small>nov</small></span></div>
          <div class="reservas-demo-summary"><div><span>Reservas</span><strong>3</strong></div><div><span>Comensales</span><strong>12</strong></div><div><span>Espacios</span><strong>Sala y terraza</strong></div></div>
          <div class="reservas-demo-table" aria-label="Ejemplo de reservas ficticias">
            <div class="reservas-demo-table-head"><span>Hora</span><span>Reserva</span><span>Estado</span></div>
            <div><strong>13:30</strong><span>4 personas<small>Sala · Reserva de ejemplo</small></span><span class="reservas-state">Confirmada</span></div>
            <div><strong>14:00</strong><span>2 personas<small>Terraza · Reserva de ejemplo</small></span><span class="reservas-state">Confirmada</span></div>
            <div><strong>14:30</strong><span>6 personas<small>Sala · Reserva de ejemplo</small></span><span class="reservas-state reservas-state-pending">Pendiente</span></div>
          </div>
          <div class="reservas-demo-club"><span class="reservas-club-icon" aria-hidden="true">✳</span><div><strong>Haz sitio a quienes vuelven</strong><span>Club de clientes, preferencias y promociones.</span></div></div>
        </div>
        <figcaption>Vista ilustrativa con datos de ejemplo. Sin información de clientes.</figcaption>
      </figure>
    </div>
  </section>

  <section class="reservas-benefits reservas-section" aria-labelledby="reservas-funciones">
    <div class="container">
      <div class="reservas-section-intro"><h2 id="reservas-funciones">De la primera reserva<br>a la próxima visita.</h2><p>Un sistema pensado para el día a día de restaurantes, bares y negocios de hostelería que trabajan con reservas de mesa.</p></div>
      <div class="reservas-feature-grid">
        <article><span class="reservas-feature-symbol" aria-hidden="true">↳</span><h3>Reservas desde tu web</h3><p>Fecha, hora, adultos, niños y necesidades especiales. Recibe las reservas online y añade también las que llegan por teléfono o en persona.</p></article>
        <article><span class="reservas-feature-symbol" aria-hidden="true">▦</span><h3>El servicio, organizado</h3><p>Consulta, modifica, confirma o cancela reservas. Configura horarios, cierres y excepciones para adaptar la disponibilidad a tu negocio.</p></article>
        <article><span class="reservas-feature-symbol" aria-hidden="true">✳</span><h3>Un club para tus clientes</h3><p>Registro de socios, tarjeta con QR y preferencias. Prepara promociones con fechas y horarios para dar continuidad a la relación con tus clientes.</p></article>
      </div>
    </div>
  </section>

  <section class="reservas-integration reservas-section" aria-labelledby="reservas-integracion">
    <div class="container reservas-integration-grid">
      <div><p class="reservas-small-label">La tecnología se adapta a tu negocio</p><h2 id="reservas-integracion">WordPress o código propio.<br>Las reservas, en tu web.</h2><p>No necesitas cambiar de web para empezar a hablar. Revisamos cómo incorporar el formulario de reservas y el club de clientes a tu proyecto.</p><a class="reservas-text-link" href="#solicitar-promocion">Cuéntanos qué web tienes</a></div>
      <div class="reservas-integration-options"><article><span aria-hidden="true" class="reservas-wp">W</span><div><h3>Integración con WordPress</h3><p>Formularios de reservas y de alta en el club integrados en las páginas de tu restaurante.</p></div></article><article><span aria-hidden="true" class="reservas-code">&lt;/&gt;</span><div><h3>Integración con webs de código propio</h3><p>Conectamos tu web con el sistema de reservas. Revisamos contigo la implementación según la tecnología que utilices.</p></div></article></div>
    </div>
  </section>

  <section class="reservas-case reservas-section" aria-labelledby="reservas-ejemplo">
    <div class="container reservas-case-grid">
      <div><p class="reservas-small-label">Un proyecto que puedes ver</p><h2 id="reservas-ejemplo">Así se vive<br>en Sagaretxe.</h2><p>Las reservas de mesa y el club de clientes forman parte de la web de esta sidrería vasca en Madrid. Explora sus páginas públicas y ve cómo se presenta al cliente.</p><p class="reservas-muted">Son páginas de un negocio real: puedes verlas sin enviar reservas ni registrarte.</p></div>
      <div class="reservas-case-links"><a href="https://sagaretxe.net/reservas/" target="_blank" rel="noopener noreferrer"><span class="reservas-case-type">Reservas online</span><strong>De elegir la fecha<br>a reservar mesa.</strong><span>Ver las reservas de Sagaretxe <span aria-hidden="true">↗</span></span></a><a href="https://sagaretxe.net/club-sagaretxe/" target="_blank" rel="noopener noreferrer"><span class="reservas-case-type">Club de clientes</span><strong>Una forma de<br>seguir en contacto.</strong><span>Conocer el Club Sagaretxe <span aria-hidden="true">↗</span></span></a></div>
    </div>
  </section>

  <section class="reservas-web-offer reservas-section" id="web-gratis" aria-labelledby="reservas-web">
    <div class="container reservas-web-grid"><div><p class="reservas-small-label">Promoción exclusiva al contratar el sistema</p><h2 id="reservas-web">¿No tienes web?<br>Te la hacemos gratis.</h2><p>Tu restaurante también merece un lugar donde presentarse y recibir reservas. Si todavía no tienes web, la creamos gratis con esta promoción.</p><a class="reservas-button" href="#solicitar-promocion">Quiero las reservas y mi web</a></div><div class="reservas-web-breakdown"><div><span>Creación de tu web<small>Para negocios que aún no tienen una</small></span><strong>Gratis</strong></div><div><span>Hosting, primer año<small>Incluido con la promoción</small></span><strong>Gratis</strong></div><div><span>Hosting, desde el segundo año</span><strong>100 €<small>/año</small></strong></div><p>La renovación del hosting es independiente de la cuota de 25 €/mes + IVA del sistema de reservas. Antes de contratar, acordamos contigo el alcance de la web y las condiciones.</p></div></div>
  </section>

  <section class="reservas-contact reservas-section" id="solicitar-promocion" aria-labelledby="reservas-contacto">
    <div class="container reservas-contact-grid"><div class="reservas-contact-copy"><p class="reservas-small-label">Ahora es un buen momento para empezar</p><h2 id="reservas-contacto">Tu próxima reserva<br>empieza aquí.</h2><p>Déjanos tus datos. Te enseñamos el sistema y revisamos cómo encaja en tu restaurante, tengas web o estés empezando desde cero.</p><div class="reservas-contact-price"><s>50 €/mes</s><strong>25 €/mes <small>+ IVA</small></strong><span>De por vida si contratas ahora la promoción.</span></div><p>Enviar el formulario es una solicitud de información. No supone contratar ni realizar ningún pago.</p><a class="reservas-text-link" href="https://wa.me/34611458493?text=<?= rawurlencode('Hola, quiero información sobre la promoción del sistema de reservas para restaurantes a 25 €/mes + IVA de por vida.') ?>" target="_blank" rel="noopener noreferrer">Prefiero hablar por WhatsApp</a></div>
      <div class="reservas-form-box"><h3>Quiero la promoción</h3><p>Solo necesitamos tu nombre y un correo para responderte.</p><form action="/enviar-contacto.php" method="post" data-contact-form class="reservas-form">
        <input type="hidden" name="origen" value="Reservas Restaurantes">
        <input type="hidden" name="submission_token" value="<?= htmlspecialchars($_SESSION['form_token'], ENT_QUOTES, 'UTF-8') ?>">
        <?php foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid'] as $utm): ?>
        <input type="hidden" name="<?= $utm ?>" value="<?= htmlspecialchars(is_string($_GET[$utm] ?? null) ? mb_substr($_GET[$utm], 0, 150) : '', ENT_QUOTES, 'UTF-8') ?>">
        <?php endforeach; ?>
        <label class="field-honeypot" aria-hidden="true" hidden>No rellenes este campo<input type="text" name="sitio_web" tabindex="-1" autocomplete="off"></label>
        <div class="reservas-form-row"><label>Tu nombre *<input type="text" name="nombre" autocomplete="name" maxlength="100" required></label><label>Correo electrónico *<input type="email" name="email" autocomplete="email" maxlength="190" required></label></div>
        <div class="reservas-form-row"><label>Nombre del restaurante <small>Opcional</small><input type="text" name="empresa" autocomplete="organization" maxlength="150"></label><label>Teléfono <small>Opcional</small><input type="tel" name="telefono" autocomplete="tel" maxlength="30" pattern="[0-9+\(\) .\-]{7,30}"></label></div>
        <label>¿Ya tienes web?<select name="situacion_web"><option value="">Selecciona una opción (opcional)</option value="Sí, ya tengo web">Sí, ya tengo web</option><option value="No, quiero la web gratis">No, quiero la web gratis</option><option value="Estoy preparando una web">Estoy preparando una web</option></select></label>
        <label>¿Qué necesitas? <small>Opcional</small><textarea name="reto" rows="3" maxlength="3000" placeholder="Cuéntanos cómo gestionas las reservas o qué te gustaría conocer."></textarea></label>
        <p class="reservas-form-privacy">La Llave de tu Pyme (Ideas Imaginativas) tratará tus datos para responder a esta solicitud con tu consentimiento. No se cederán a terceros salvo obligación legal. Puedes ejercer tus derechos en info@lallavedetupyme.com. <a href="/politica-de-privacidad/" target="_blank" rel="noopener">Más información sobre privacidad</a>.</p>
        <label class="reservas-consent"><input type="checkbox" name="privacidad" value="1" required><span>He leído la <a href="/politica-de-privacidad/" target="_blank" rel="noopener">política de privacidad</a> y acepto que me contacten sobre el sistema de reservas y esta promoción.</span></label>
        <button class="reservas-button" type="submit">Solicitar la promoción</button><p class="reservas-form-note">Sin pago al enviar. Hablamos contigo antes de contratar.</p><div class="form-feedback" role="alert" aria-live="assertive" hidden></div>
      </form></div>
    </div>
  </section>

  <section class="reservas-faq reservas-section" aria-labelledby="reservas-dudas"><div class="container reservas-faq-grid"><h2 id="reservas-dudas">Antes de<br>reservar tu sitio.</h2><div>
    <details><summary>¿Los 25 €/mes son solo durante unos meses?</summary><p>No. Si contratas ahora la promoción, el precio del sistema es de 25 €/mes + IVA de por vida. El precio habitual es de 50 €/mes + IVA. No es una cuota de bienvenida que pase automáticamente a 50 €.</p></details>
    <details><summary>¿Funciona si ya tengo una web?</summary><p>Sí. Tenemos integración con WordPress y también con webs de código propio. Revisamos tu web para definir cómo incorporar las reservas y el club de clientes.</p></details>
    <details><summary>¿Qué incluye la promoción si no tengo web?</summary><p>Si tu negocio todavía no tiene web y contratas el sistema con esta promoción, te la hacemos gratis e incluimos el hosting durante un año. Antes de empezar acordamos contigo el alcance de la web.</p></details>
    <details><summary>¿Qué pagaré por el hosting después del primer año?</summary><p>Desde el segundo año, el hosting cuesta 100 €/año. Es un concepto independiente de los 25 €/mes + IVA del sistema de reservas; no sustituye a la cuota mensual.</p></details>
    <details><summary>¿Puedo ver un ejemplo antes de decidir?</summary><p>Sí. Puedes visitar las páginas públicas de <a href="https://sagaretxe.net/reservas/" target="_blank" rel="noopener noreferrer">reservas de Sagaretxe</a> y del <a href="https://sagaretxe.net/club-sagaretxe/" target="_blank" rel="noopener noreferrer">Club Sagaretxe</a>. Si quieres conocer la gestión por dentro, solicítanos una demostración.</p></details>
    <details><summary>¿Me comprometo a algo al enviar el formulario?</summary><p>No. Nos estás pidiendo información. Te enseñamos el sistema y confirmamos contigo el alcance y las condiciones antes de contratar.</p></details>
  </div></div></section>
</main>
<?php require dirname(__DIR__) . '/partials/footer.php';
