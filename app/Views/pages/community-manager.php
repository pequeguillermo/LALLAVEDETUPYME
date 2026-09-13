<?php
$title = 'Community manager: redes activas desde 99 €/mes | La Llave';
$description = 'Mantenemos activas las redes de tu negocio. Publicación quincenal por 99 €/mes o semanal con difusión en grupos por 199 €/mes, más IVA. Contenido incluido.';
$canonical = 'https://lallavedetupyme.com/community-manager/';
$bodyClass = 'social-page';
$headerType = 'landing';
$landingCtaText = 'Activar mis redes';
$landingCtaHref = '#activar-redes';
$footerType = 'conversion';
$whatsappMessage = 'Hola, quiero información sobre los planes de community manager para mantener activas las redes de mi negocio.';
$headExtra = '<link rel="stylesheet" href="/community-manager.css?v=20260913-1">';
$schemaJson = json_encode([
    '@context' => 'https://schema.org', '@type' => 'Service',
    'name' => 'Community manager para pymes', 'url' => $canonical,
    'serviceType' => 'Mantenimiento y gestión de redes sociales', 'areaServed' => 'España',
    'provider' => ['@type' => 'Organization', 'name' => 'La Llave de tu Pyme', 'url' => 'https://lallavedetupyme.com/'],
    'offers' => [
        ['@type' => 'Offer', 'name' => 'Presencia · publicación cada 15 días', 'description' => '99 €/mes más IVA. Facebook e Instagram. Textos, diseño y publicación incluidos.'],
        ['@type' => 'Offer', 'name' => 'Impulso · publicación semanal y difusión en grupos', 'description' => '199 €/mes más IVA. Facebook e Instagram. Textos, diseño, publicación y búsqueda activa de grupos incluidos.'],
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <section class="social-hero">
    <div class="container social-hero-grid">
      <div class="social-hero-copy">
        <span class="eyebrow">Community manager para pequeños negocios</span>
        <h1>Tu negocio sigue.<br><em>Que tus redes<br>no se queden atrás.</em></h1>
        <p class="hero-lead">La última publicación no debería ser de hace seis meses. Nos encargamos del contenido y de publicar con constancia para que tus redes transmitan lo que tu negocio es: <strong>un negocio en marcha.</strong></p>
        <a class="button" href="#activar-redes">Quiero mis redes activas <span aria-hidden="true">↗</span></a>
        <p class="social-hero-note">Desde <strong>99 €/mes + IVA</strong> · Facebook e Instagram<br>Textos, diseño y publicación incluidos.</p>
      </div>
      <figure class="social-board" aria-label="Ejemplo de calendario de contenidos del plan semanal">
        <div class="social-board-top"><span>Tu marca, en movimiento</span><span class="social-live">Activa</span></div>
        <div class="social-board-title"><span>Un mes con<br><strong>algo que contar.</strong></span><span class="social-board-arrow" aria-hidden="true">↗</span></div>
        <div class="social-post-preview">
          <div class="social-preview-mark" aria-hidden="true">Tu<br><em>marca.</em></div>
          <div><span class="social-mini-label">Contenido de producto</span><strong>Eso que haces bien,<br>merece verse.</strong><span class="social-preview-line"></span><small>Diseño + texto + publicación</small></div>
        </div>
        <ol class="social-calendar">
          <li><span>SEM. 01</span><strong>Lo que te hace diferente</strong><i aria-hidden="true">✓</i></li>
          <li><span>SEM. 02</span><strong>Tu producto, explicado</strong><i aria-hidden="true">✓</i></li>
          <li><span>SEM. 03</span><strong>Un consejo que ayuda</strong><i aria-hidden="true">✓</i></li>
          <li><span>SEM. 04</span><strong>Una razón para elegirte</strong><i aria-hidden="true">✓</i></li>
        </ol>
        <figcaption>Ejemplo de planificación. Cada marca tiene su propia conversación.</figcaption>
      </figure>
    </div>
  </section>

  <div class="conversion-signal-strip social-signal"><div class="container"><span>Una presencia cuidada</span><i aria-hidden="true"></i><span>Un calendario que se cumple</span><i aria-hidden="true"></i><span>Una tarea menos para ti</span></div></div>

  <section class="section social-why">
    <div class="container social-section-intro"><div><span class="eyebrow">Antes de escribirte, van a mirarte</span><h2>Tus redes también<br>dicen <em>«seguimos aquí».</em></h2></div><p>Alguien oye hablar de ti, ve un anuncio o recibe una recomendación. Entra en tu perfil para conocerte. Lo que encuentra forma parte de su primera impresión.</p></div>
    <div class="container social-reasons">
      <article data-reveal><span>01 / Confianza</span><h3>Que se vea actividad.</h3><p>Un perfil actualizado permite ver qué haces y qué ofreces hoy. Evita que una buena primera impresión se quede en una publicación antigua.</p></article>
      <article data-reveal><span>02 / Recuerdo</span><h3>Que se acuerden de ti.</h3><p>Publicar con continuidad crea nuevas ocasiones para explicar tu producto y estar presente cuando alguien vuelva a necesitarlo.</p></article>
      <article data-reveal><span>03 / Tiempo</span><h3>Que no dependa de un hueco.</h3><p>Si publicar siempre queda para «cuando pueda», acaba sin hacerse. Ponemos un calendario y un equipo detrás para darle continuidad.</p></article>
    </div>
  </section>

  <section class="section social-plans" id="planes">
    <div class="container social-section-intro"><div><span class="eyebrow">Dos ritmos. Un negocio presente.</span><h2>Elige cuánto<br>quieres <em>mover tus redes.</em></h2></div><p>Para mantener el perfil al día o trabajar también la difusión. Ambos planes incluyen contenido para una marca, adaptado a Facebook e Instagram.</p></div>
    <div class="container social-plan-grid">
      <article class="social-plan">
        <div class="social-plan-heading"><span class="eyebrow">01 / Mantenimiento</span><h3>Presencia</h3><p>Para tener tus redes cuidadas y actualizadas.</p></div>
        <p class="social-price"><strong>99<span>€</span></strong><span>/mes <small>+ IVA</small></span></p>
        <p class="social-frequency">Una publicación cada 15 días</p>
        <ul>
          <li>Una pieza de contenido cada 15 días, adaptada y publicada en Facebook e Instagram.</li>
          <li>Redacción del texto y diseño de una imagen con la identidad de tu marca.</li>
          <li>Material del cliente o contenido creado por nosotros sobre su marca y producto.*</li>
          <li>Planificación, programación y revisión de las publicaciones.</li>
          <li>Una ronda de ajustes por pieza antes de publicar.</li>
        </ul>
        <p class="social-plan-scope">Centrado en mantenimiento. No incluye búsqueda ni difusión en grupos.</p>
        <a class="button social-button-outline" href="#activar-redes" data-social-plan="presencia">Quiero el plan Presencia <span aria-hidden="true">↗</span></a>
      </article>
      <article class="social-plan social-plan-featured">
        <div class="social-plan-ribbon">Para trabajar también la visibilidad <span aria-hidden="true">↗</span></div>
        <div class="social-plan-heading"><span class="eyebrow">02 / Constancia + difusión</span><h3>Impulso</h3><p>Para publicar más y buscar nuevas conversaciones.</p></div>
        <p class="social-price"><strong>199<span>€</span></strong><span>/mes <small>+ IVA</small></span></p>
        <p class="social-frequency">Una publicación cada semana</p>
        <ul>
          <li>Una pieza de contenido semanal, adaptada y publicada en Facebook e Instagram.</li>
          <li>Textos, diseño, planificación y una ronda de ajustes por pieza, como en Presencia.*</li>
          <li><strong>Búsqueda activa semanal de grupos de Facebook</strong> relacionados con tu sector, tu zona y tu público.</li>
          <li>Difusión en hasta 3 grupos relevantes por semana, cuando admitan publicaciones de marca y el contenido encaje.</li>
          <li>Resumen mensual de actividad, alcance e interacciones para orientar el siguiente contenido.</li>
        </ul>
        <p class="social-plan-scope">Crecimiento orgánico trabajado con criterio. Sin spam ni compra de seguidores.</p>
        <a class="button" href="#activar-redes" data-social-plan="impulso">Quiero el plan Impulso <span aria-hidden="true">↗</span></a>
      </article>
    </div>
    <div class="container social-plan-notes">
      <p><strong>El alcance, claro:</strong> una pieza es una idea con texto y una imagen estática, adaptada a los dos perfiles; no son dos contenidos diferentes. La frecuencia se mantiene aunque cambie el mes.</p>
      <p>Las tarifas no incluyen inversión ni gestión de anuncios, grabación de vídeos, sesiones de fotos, reels, atención diaria de mensajes o gestión de crisis. Si lo necesitas, lo valoramos aparte.</p>
      <p><strong>Sobre el crecimiento:</strong> buscamos oportunidades de visibilidad, pero el alcance y la admisión en grupos dependen de cada comunidad y plataforma. No garantizamos seguidores, contactos ni ventas.</p>
    </div>
  </section>

  <section class="section social-content">
    <div class="container social-section-intro"><div><span class="eyebrow">«Pero yo no tengo nada para publicar»</span><h2>Tú conoces tu negocio.<br><em>Nosotros le damos forma.</em></h2></div><p>El contenido está incluido en los dos planes. No necesitas llegar con los textos escritos ni convertirte en creador de contenido para mantener tus redes activas.</p></div>
    <div class="container social-content-paths">
      <article><span class="social-path-number">A</span><div><h3>Si tienes material, lo aprovechamos.</h3><p>Nos pasas fotos, novedades, productos o ideas. Seleccionamos el enfoque, redactamos el texto y lo adaptamos a una imagen coherente con tu marca.</p></div></article>
      <article><span class="social-path-number">B</span><div><h3>Si no lo tienes, lo creamos.</h3><p>Partimos de tu web, tu catálogo y lo que nos cuentes para crear contenidos sobre tu marca, tus productos y los temas que interesan a tus clientes. Diseños, consejos, usos del producto o respuestas a dudas habituales.</p></div></article>
    </div>
    <div class="container social-white-content" id="contenido-blanco"><span aria-hidden="true">*</span><p><strong>Siempre contenido blanco.</strong> Contenido útil, respetuoso y relacionado con tu actividad. Sin política, temas polarizantes, ataques a terceros ni mensajes pensados para provocar conflictos. Cuidamos el tono de tu marca y revisas las piezas antes de que salgan.</p></div>
  </section>

  <section class="section social-process">
    <div class="container social-section-intro"><div><span class="eyebrow">Un equipo al otro lado</span><h2>Del «tengo que publicar»<br>al <em>«ya está previsto».</em></h2></div><p>Un proceso sencillo para que tus redes tengan continuidad y tú sigas centrado en tu negocio.</p></div>
    <div class="container social-steps">
      <article><span>01</span><h3>Entendemos tu marca</h3><p>Qué vendes, a quién, cómo quieres comunicar y qué materiales tienes. Acordamos el plan y los accesos necesarios.</p></article>
      <article><span>02</span><h3>Preparamos y revisas</h3><p>Organizamos los temas y creamos las piezas. Las ves antes de publicar y ajustamos lo necesario dentro del plan.</p></article>
      <article><span>03</span><h3>Publicamos y seguimos</h3><p>Mantenemos el ritmo acordado. Con Impulso, buscamos además grupos afines y revisamos la actividad cada mes.</p></article>
    </div>
  </section>

  <section class="section social-faq">
    <div class="container social-faq-grid"><div><span class="eyebrow">Antes de empezar</span><h2>Las cosas,<br><em>claras.</em></h2></div><div class="faq-list">
      <details><summary>¿Qué plan encaja con mi negocio?<span aria-hidden="true">+</span></summary><p>Presencia encaja si buscas mantenimiento y una publicación cada 15 días. Impulso añade una publicación semanal, búsqueda activa y difusión en grupos de Facebook, además de un resumen mensual. Si dudas, revisamos tus perfiles contigo antes de elegir.</p></details>
      <details><summary>¿Tengo que crear yo los contenidos?<span aria-hidden="true">+</span></summary><p>No. Si tienes material propio, lo utilizamos. Si no, redactamos y diseñamos contenidos sobre tu marca, tu producto y tu sector a partir de la información que nos facilites. Para mostrar un producto real necesitamos fotos o recursos fieles a ese producto; no inventamos sus características, resultados ni testimonios.</p></details>
      <details><summary>¿En qué redes vais a publicar?<span aria-hidden="true">+</span></summary><p>Los dos planes cubren un perfil de Facebook y uno de Instagram de la misma marca. Adaptamos una misma pieza a ambos canales. Si necesitas LinkedIn, TikTok, otras redes o varias marcas, acordamos un alcance y presupuesto específicos.</p></details>
      <details><summary>¿Cómo funciona la difusión en grupos?<span aria-hidden="true">+</span></summary><p>En Impulso buscamos cada semana comunidades de Facebook afines a tu sector o zona. Compartimos en hasta 3 grupos por semana cuando permitan participar a la marca y acepten ese tipo de contenido. Respetamos sus normas y la aprobación de sus administradores. No publicamos en masa ni prometemos una cifra de crecimiento.</p></details>
      <details><summary>¿Responderéis mensajes y comentarios?<span aria-hidden="true">+</span></summary><p>Estos planes se centran en contenido, publicación y, en Impulso, difusión. La atención diaria de consultas, la moderación continua y la gestión de crisis no están incluidas. Si buscas esa cobertura, la definimos aparte.</p></details>
      <details><summary>¿Puedo revisar lo que vais a publicar?<span aria-hidden="true">+</span></summary><p>Sí. Acordamos el calendario y te pasamos las piezas antes de programarlas. Incluimos una ronda de ajustes por pieza. Para mantener la frecuencia necesitamos recibir a tiempo tu información y tu aprobación.</p></details>
      <details><summary>¿Enviar el formulario me compromete a contratar?<span aria-hidden="true">+</span></summary><p>No. Nos sirve para conocer tu negocio y confirmar qué plan encaja. Antes de empezar dejamos por escrito el alcance, las condiciones, los plazos y la facturación. Los precios indicados son mensuales y no incluyen IVA.</p></details>
    </div></div>
  </section>

  <section class="section social-contact">
    <div class="container social-contact-grid">
      <div><span class="eyebrow">Que la próxima publicación no se quede pendiente</span><h2>Tu negocio tiene<br>cosas que contar.<br><em>Vamos a publicarlas.</em></h2><p class="hero-lead">Cuéntanos a qué te dedicas. Revisamos tus redes y te ayudamos a elegir el ritmo que necesitas.</p><div class="social-contact-points"><p><span>01</span> Nos cuentas dónde estás.</p><p><span>02</span> Acordamos el plan y los contenidos.</p><p><span>03</span> Ponemos el calendario en marcha.</p></div><p class="social-contact-note">Solicitar información no implica contratar ni realizar ningún pago.</p></div>
      <form class="form-shell lead-form social-form" id="activar-redes" action="/enviar-contacto.php" method="post" data-contact-form data-social-form>
        <input type="hidden" name="origen" value="Community Manager">
        <input type="hidden" name="submission_token" value="<?= htmlspecialchars($_SESSION['form_token'], ENT_QUOTES, 'UTF-8') ?>">
        <?php foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'] as $utm): ?>
          <input type="hidden" name="<?= $utm ?>" value="<?= htmlspecialchars(is_string($_GET[$utm] ?? null) ? mb_substr($_GET[$utm], 0, 150) : '', ENT_QUOTES, 'UTF-8') ?>">
        <?php endforeach; ?>
        <label class="field-honeypot" aria-hidden="true">No rellenes este campo<input type="text" name="sitio_web" tabindex="-1" autocomplete="off"></label>
        <span class="eyebrow">Hablemos de tus redes</span><h3>Empieza por contarnos.</h3>
        <div class="form-row"><label>Tu nombre<input name="nombre" autocomplete="given-name" required maxlength="100" placeholder="¿Cómo te llamas?"></label><label>Tu negocio<input name="empresa" autocomplete="organization" required maxlength="150" placeholder="Nombre de tu marca"></label></div>
        <label>Correo electrónico<input type="email" name="email" autocomplete="email" required maxlength="190" placeholder="tu@empresa.com"></label>
        <label><span>Teléfono <small class="optional-label">Opcional</small></span><input type="tel" name="telefono" autocomplete="tel" maxlength="30" pattern="[0-9+\(\) .\-]{7,30}" placeholder="Por si prefieres que te llamemos"></label>
        <label>¿Qué plan te interesa?<select name="plan" id="social-plan" required><option value="" selected disabled>Elige un plan o déjanos orientarte</option><option value="presencia">Presencia · 99 €/mes + IVA · Quincenal</option><option value="impulso">Impulso · 199 €/mes + IVA · Semanal + grupos</option><option value="asesoramiento">No lo tengo claro, necesito orientación</option></select></label>
        <label><span>¿Qué vendes y cuáles son tus redes? <small class="optional-label">Opcional</small></span><textarea name="reto" rows="3" maxlength="3000" placeholder="Cuéntanos a qué te dedicas y déjanos el enlace o @usuario de tus perfiles."></textarea></label>
        <p class="privacy-summary"><strong>Protección de datos:</strong> Ideas Imaginativas tratará tus datos para responder a tu solicitud, con tu consentimiento. No los cederemos salvo obligación legal o proveedores necesarios. Puedes ejercer tus derechos en info@lallavedetupyme.com. <a href="/politica-de-privacidad/" target="_blank" rel="noopener">Más información</a>.</p>
        <label class="consent"><input type="checkbox" name="privacidad" value="1" required><span>He leído la información sobre protección de datos y acepto que me contacten para responder a esta solicitud.</span></label>
        <button class="button" type="submit">Quiero activar mis redes <span aria-hidden="true">↗</span></button>
        <p class="form-note">Primero hablamos de tu negocio. Tú decides el siguiente paso.</p>
        <div class="form-feedback" role="alert" aria-live="assertive" hidden></div>
      </form>
    </div>
  </section>
</main>
<?php require dirname(__DIR__) . '/partials/footer.php';
