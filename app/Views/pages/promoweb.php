<?php

declare(strict_types=1);

$title = 'Diseño web para pymes por 400 € + IVA | La Llave de tu Pyme';
$description = 'Diseño web para pymes y autónomos por 400 € + IVA, con hosting incluido durante 6 meses. Después, 150 €/año. Pide información sin compromiso.';
$canonical = 'https://lallavedetupyme.com/promoweb/';
$bodyClass = 'promoweb-page';
$headerType = 'landing';
$landingCtaText = 'Pedir información';
$landingCtaHref = '#pedir-web';
$footerType = 'conversion';
$whatsappMessage = 'Hola, vengo del anuncio de la web para pymes a 400€ con hosting gratis 6 meses y quiero información.';
$headExtra = '<link rel="stylesheet" href="/promoweb.css?v=20261022-1">';

$schemaJson = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Desarrollo Web Profesional para Pymes',
    'url' => $canonical,
    'serviceType' => 'Diseño y desarrollo web con SEO técnico Jarvis',
    'areaServed' => 'España',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'La Llave de tu Pyme',
        'url' => 'https://lallavedetupyme.com/',
        'telephone' => '+34 611 458 493',
        'email' => 'info@lallavedetupyme.com'
    ],
    'offers' => [
        [
            '@type' => 'Offer',
            'name' => 'Pack Desarrollo Web Pyme + Hosting Gratis 6 Meses',
            'price' => '400',
            'priceCurrency' => 'EUR',
            'description' => 'Desarrollo web completo, responsive, con hosting gratis 6 meses y configuración técnica con Jarvis (Search Console + GA4). Renovación hosting posterior a 150 €/año (precio habitual 200 €/año).'
        ]
    ]
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);

require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <!-- HERO SECTION -->
  <section class="promoweb-hero">
    <div class="container promoweb-hero-grid">
      <div class="promoweb-hero-copy">
        <span class="promoweb-badge-pulse">Para pymes y autónomos</span>
        <h1>Diseño web para pymes <br><em>por 400 € + IVA</em></h1>
        <p class="hero-lead">Una web para presentar tus servicios y recibir consultas de tus clientes. Diseño adaptado al móvil, formulario y WhatsApp, con <strong>hosting incluido durante 6 meses</strong>.</p>

        <div class="promoweb-hero-offer">
          <div class="hero-offer-tag">
            <span class="amount">400 €</span>
            <span class="sub">+ IVA · Pago único</span>
          </div>
          <div class="hero-hosting-tag">
            <strong>Hosting 6 meses GRATIS</strong>
            <span>Posteriormente 150 €/año (<s>200 €/año</s>)</span>
          </div>
        </div>

        <div class="promoweb-hero-actions">
          <a class="button" href="#pedir-web">Pedir información sin compromiso <span aria-hidden="true">→</span></a>
          <a class="text-link" href="https://wa.me/34611458493?text=<?= rawurlencode($whatsappMessage) ?>" target="_blank" rel="noopener noreferrer">Prefiero preguntar por WhatsApp <span aria-hidden="true">↗</span></a>
        </div>

        <div class="promoweb-guarantee-note">
          <span><i>✓</i> 100% de tu propiedad</span>
          <span><i>✓</i> Sin permanencias</span>
          <span><i>✓</i> Entrega en 10–15 días laborables</span>
        </div>
      </div>

      <!-- FORMULARIO: solicitud sin compromiso junto a la oferta -->
      <div class="contact-card-box hero-contact-card" id="pedir-web">
        <span class="eyebrow">400 € + IVA · Sin compromiso</span>
        <h2>Pide información sobre tu web</h2>
        <p class="form-intro">Déjanos tu nombre y correo. Revisaremos contigo lo que necesitas antes de contratar.</p>

        <form class="promoweb-form lead-form" action="/enviar-contacto.php" method="post" data-contact-form>
          <input type="hidden" name="origen" value="PromoWeb">
          <input type="hidden" name="submission_token" value="<?= htmlspecialchars($_SESSION['form_token'], ENT_QUOTES, 'UTF-8') ?>">

          <?php foreach (['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'gclid'] as $utm): ?>
            <input type="hidden" name="<?= $utm ?>" value="<?= htmlspecialchars(is_string($_GET[$utm] ?? null) ? mb_substr($_GET[$utm], 0, 150) : '', ENT_QUOTES, 'UTF-8') ?>">
          <?php endforeach; ?>

          <!-- Honeypot -->
          <label class="field-honeypot" aria-hidden="true" style="display:none;">
            No rellenes este campo
            <input type="text" name="sitio_web" tabindex="-1" autocomplete="off">
          </label>

          <div class="form-row">
            <label>
              <span>Tu nombre *</span>
              <input type="text" name="nombre" autocomplete="given-name" required maxlength="100" placeholder="Ej. Carlos García">
            </label>
            <label>
              <span>Correo electrónico *</span>
              <input type="email" name="email" autocomplete="email" required maxlength="190" placeholder="tu@empresa.com">
            </label>
          </div>

          <details class="form-optional-details">
            <summary>Añadir información del proyecto (opcional)</summary>
          <div class="form-row">
            <label>
              <span>Teléfono o WhatsApp <small class="optional-label">Opcional</small></span>
              <input type="tel" name="telefono" autocomplete="tel" maxlength="30" pattern="[0-9+\(\) .\-]{7,30}" placeholder="Si prefieres que te llamemos">
            </label>
            <label>
              <span>Nombre del negocio <small class="optional-label">Opcional</small></span>
              <input type="text" name="empresa" autocomplete="organization" maxlength="150" placeholder="Ej. Reformas García">
            </label>
          </div>
          <label>
            <span>Web actual <small class="optional-label">Opcional (si ya tienes una y quieres renovarla)</small></span>
            <input type="url" name="web" autocomplete="url" maxlength="300" placeholder="https://tuwebactual.com">
          </label>

          <label>
            <span>¿A qué te dedicas o qué necesitas en tu web? <small class="optional-label">Opcional</small></span>
            <textarea name="reto" rows="3" maxlength="3000" placeholder="Cuéntanos brevemente tu sector, tus servicios principales o dudas que tengas..."></textarea>
          </label>

          </details>

          <p class="privacy-summary">
            <strong>Protección de datos:</strong> La Llave de tu Pyme (Ideas Imaginativas) tratará tus datos para responder a tu solicitud web con tu consentimiento. No se cederán a terceros salvo obligación legal. Puedes ejercer tus derechos en info@lallavedetupyme.com. <a href="/politica-de-privacidad/" target="_blank" rel="noopener">Política de Privacidad</a>.
          </p>

          <label class="consent">
            <input type="checkbox" name="privacidad" value="1" required>
            <span>Acepto la política de privacidad y autorizo a que me contacten para informarme sobre la creación de mi página web.</span>
          </label>

          <button class="button" type="submit">
            Pedir información sobre mi web <span aria-hidden="true">→</span>
          </button>

          <div class="form-security-seal">
            <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            <span>Sin pago al enviar · Te respondemos en 24 horas laborables</span>
          </div>

          <div class="form-feedback" role="alert" aria-live="assertive" hidden></div>
        </form>
      </div>
    </div>
  </section>

  <!-- SIGNAL STRIP -->
  <div class="promoweb-signal">
    <div class="container">
      <span>Entrega en <strong>10 a 15 días laborables</strong></span>
      <i aria-hidden="true"></i>
      <span>Hosting profesional <strong>6 meses gratis</strong></span>
      <i aria-hidden="true"></i>
      <span>Formulario y <strong>WhatsApp</strong></span>
      <i aria-hidden="true"></i>
      <span>La web es <strong>100% tuya</strong></span>
    </div>
  </div>

  <!-- PAIN POINTS SECTION -->
  <section class="promoweb-pains">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Una web al servicio de tu negocio</span>
        <h2>Explica lo que haces.<br><em>Facilita que te contacten.</em></h2>
        <p>Una página clara para que tus clientes entiendan tus servicios y sepan cómo dar el siguiente paso.</p>
      </div>
      <div class="pains-grid">
        <article class="pain-card"><span class="pain-badge">01</span><h3>Presenta tus servicios</h3><p>Organizamos la información de tu negocio con un diseño adaptado a tu marca y textos fáciles de entender.</p></article>
        <article class="pain-card"><span class="pain-badge">02</span><h3>Se adapta al móvil</h3><p>Tus clientes podrán consultar tu web y encontrar la forma de contactar desde su teléfono.</p></article>
        <article class="pain-card"><span class="pain-badge">03</span><h3>Contacto a un clic</h3><p>Formulario, teléfono y WhatsApp visibles para quien quiera preguntarte por tus servicios.</p></article>
        <article class="pain-card"><span class="pain-badge">04</span><h3>Condiciones claras</h3><p>400 € + IVA por la web y hosting incluido durante 6 meses. Después, 150 €/año. Revisamos contigo el alcance antes de contratar.</p></article>
      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE -->
  <section class="promoweb-compare">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">La oferta, punto por punto</span>
        <h2>Qué incluye tu web<br><em>y cuáles son sus condiciones</em></h2>
      </div>
      <div class="table-wrapper">
        <table class="compare-table offer-table">
          <thead><tr><th scope="col">Concepto</th><th scope="col" class="col-highlight">Pack Web Pyme</th></tr></thead>
          <tbody>
            <tr><th scope="row">Diseño y desarrollo</th><td class="col-highlight"><strong>400 € + IVA</strong> · Pago único</td></tr>
            <tr><th scope="row">Hosting</th><td class="col-highlight">Incluido durante 6 meses; después, 150 €/año</td></tr>
            <tr><th scope="row">Configuración inicial</th><td class="col-highlight">SEO técnico, Search Console y medición con Analytics</td></tr>
            <tr><th scope="row">Móvil y rendimiento</th><td class="col-highlight">Diseño adaptable y optimización de imágenes y código</td></tr>
            <tr><th scope="row">Propiedad de la web</th><td class="col-highlight">Tuya y sin permanencia</td></tr>
            <tr><th scope="row">Plazo orientativo</th><td class="col-highlight">10–15 días laborables desde que acordamos la información del proyecto</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="promoweb-pack" id="que-incluye">
    <div class="container">
      <div class="pack-card">
        <span class="pack-ribbon">Web en propiedad · 400 € + IVA</span>
        <div class="section-head">
          <span class="eyebrow">Lo que vas a recibir</span>
          <h2>Tu negocio, tus servicios<br><em>y una forma clara de contactar.</em></h2>
          <p>Acordamos contigo las secciones, los materiales y el alcance antes de empezar.</p>
        </div>
        <div class="pack-features-grid">
          <div class="pack-feature-item"><span class="pack-check">✓</span><div><strong>Diseño adaptado a tu negocio</strong><p>Presentación de tu empresa y de sus servicios con una estructura que puedas revisar antes de publicar.</p></div></div>
          <div class="pack-feature-item"><span class="pack-check">✓</span><div><strong>Lista para móvil y ordenador</strong><p>Revisamos la navegación y la lectura en distintos tamaños de pantalla.</p></div></div>
          <div class="pack-feature-item"><span class="pack-check">✓</span><div><strong>Formulario, WhatsApp y teléfono</strong><p>Formas de contacto visibles para las personas que quieran preguntarte por tus servicios.</p></div></div>
          <div class="pack-feature-item"><span class="pack-check">✓</span><div><strong>Hosting durante 6 meses</strong><p>Después, 150 €/año. La web es tuya y puedes llevarla a otro alojamiento sin permanencia.</p></div></div>
        </div>
        <div class="pack-action"><a class="button" href="#pedir-web">Consultar mi proyecto <span aria-hidden="true">→</span></a></div>
      </div>
    </div>
  </section>

  <!-- PROCESS SECTION -->
  <section class="promoweb-process">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Sin complicaciones para ti</span>
        <h2>¿Cómo es el proceso?<br><em>Fácil, directo y en 3 pasos</em></h2>
        <p>Primero concretamos lo que necesitas. Después te mostramos el diseño y acordamos la publicación.</p>
      </div>

      <div class="process-steps-grid">
        <article class="process-step-card">
          <span class="process-step-num">01</span>
          <h3>Nos cuentas tu negocio</h3>
          <p>Rellenas el formulario o hablamos por teléfono/WhatsApp. Nos dices a qué te dedicas, tus servicios principales y qué estilo te gusta.</p>
        </article>

        <article class="process-step-card">
          <span class="process-step-num">02</span>
          <h3>Diseño y desarrollo ágil</h3>
          <p>Creamos tu web con diseño personalizado, redactamos y estructuramos las secciones clave y te la mostramos antes de publicar para afinar detalles.</p>
        </article>

        <article class="process-step-card">
          <span class="process-step-num">03</span>
          <h3>Revisamos y publicamos</h3>
          <p>Comprobamos la web contigo, activamos el alojamiento y publicamos la versión acordada. Dejamos configurada la medición inicial de contactos.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="promoweb-jarvis promoweb-measurement" id="configuracion-inicial">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">También cuidamos la puesta en marcha</span>
        <h2>Preparada para buscadores<br><em>y para medir las consultas.</em></h2>
        <p>Incluimos la configuración SEO técnica inicial, Google Search Console y Google Analytics 4. Con nuestra herramienta Jarvis revisamos esa configuración. La medición respeta la elección de cookies de cada visitante.</p>
      </div>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="promoweb-faq" id="preguntas-frecuentes">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Transparencia absoluta</span>
        <h2>Preguntas frecuentes<br><em>Las cosas claras desde el principio</em></h2>
      </div>

      <div class="faq-accordion">
        <details>
          <summary>¿Qué pasa después de los 6 meses de hosting gratis?<span aria-hidden="true">+</span></summary>
          <p>Durante los 6 primeros meses el alojamiento web es 100% gratuito. Después, tienes una tarifa especial de cliente de sólo <strong>150 € al año</strong> (precio habitual de catálogo <s>200 € al año</s>) que incluye servidor rápido SSD, copias de seguridad automáticas y soporte. Si en algún momento prefieres llevarte tu web a otro hosting, te entregamos todos tus archivos sin coste ni penalización.</p>
        </details>

        <details>
          <summary>¿La página web es de mi propiedad?<span aria-hidden="true">+</span></summary>
          <p><strong>Sí, al 100%.</strong> El diseño, el código y los contenidos son exclusivamente tuyos. No trabajamos con modelos de alquiler donde te quedas sin web si te vas. Tú eres el dueño de tu activo digital.</p>
        </details>

        <details>
          <summary>¿Qué incluye la configuración inicial de buscadores y medición?<span aria-hidden="true">+</span></summary>
          <p>Con Jarvis revisamos el rastreo en Search Console, la configuración de Analytics y la estructura técnica de la web. Los formularios confirmados se distinguen de los clics en teléfono o WhatsApp. Esta configuración no garantiza posiciones en Google ni un número de clientes.</p>
        </details>

        <details>
          <summary>¿Cuánto tiempo se tarda en tener la web lista?<span aria-hidden="true">+</span></summary>
          <p>Normalmente entre <strong>10 y 15 días laborables</strong> desde que acordamos la información básica de tu negocio. Si ya tienes logotipo o fotos, genial; si no, nosotros nos encargamos de seleccionar recursos de calidad.</p>
        </details>

        <details>
          <summary>¿Y si ya tengo una web antigua y quiero renovarla?<span aria-hidden="true">+</span></summary>
          <p>Es el caso más habitual. Analizamos lo que tienes, mantenemos tu dominio actual, creamos la nueva versión mucho más rápida y moderna, y cuidamos las redirecciones para que no pierdas antigüedad ni posicionamiento previo.</p>
        </details>

        <details>
          <summary>¿Rellenar el formulario me compromete a pagar algo?<span aria-hidden="true">+</span></summary>
          <p><strong>En absoluto.</strong> Enviar el formulario sirve para que conozcamos tu proyecto, revisemos tu caso y te presentemos la propuesta detallada. No se realiza ningún cobro hasta que tú decidas arrancar formalmente.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- LEAD FORM SECTION -->
  <section class="promoweb-contact">
    <div class="container contact-grid contact-closing">
      <div class="contact-copy">
        <span class="eyebrow" style="color:var(--orange-hot);">Empieza hoy mismo</span>
        <h2>Hablemos de la web<br><em>que necesita tu negocio.</em></h2>
        <p class="hero-lead">Cuéntanos a qué se dedica tu negocio y revisaremos contigo el alcance de la web. La solicitud es gratuita y no implica contratar el servicio.</p>

        <a class="button" href="#pedir-web">Pedir información sin compromiso <span aria-hidden="true">→</span></a>

        <ul class="contact-perks-list">
          <li><i>✓</i> <strong>Precio cerrado:</strong> 400 € + IVA sin costes sorpresa.</li>
          <li><i>✓</i> <strong>Hosting incluido:</strong> 6 meses gratis (luego 150 €/año, antes 200 €).</li>
          <li><i>✓</i> <strong>Puesta en marcha:</strong> configuración de buscadores y medición de consultas.</li>
          <li><i>✓</i> <strong>Sin ataduras:</strong> Web 100% de tu propiedad.</li>
        </ul>

        <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08); padding:18px 22px; border-radius:12px; font-size:0.88rem; color:var(--paper-muted);">
          <strong style="color:#fff; display:block; margin-bottom:4px;">¿Prefieres hablar directamente?</strong>
          Llámanos o escríbenos por WhatsApp al <a href="https://wa.me/34611458493?text=<?= rawurlencode($whatsappMessage) ?>" target="_blank" rel="noopener noreferrer" style="color:var(--orange-hot); font-weight:700;">+34 611 458 493</a>.
        </div>
      </div>


    </div>
  </section>
</main>
<?php
require dirname(__DIR__) . '/partials/footer.php';
