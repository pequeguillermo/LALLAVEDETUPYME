<?php

declare(strict_types=1);

$title = 'Web Profesional para Pymes 400 € · Hosting 6 Meses Gratis | La Llave';
$description = 'Desarrollo web profesional para pymes y autónomos por sólo 400 €. Incluye hosting gratis 6 meses (luego 150 €/año, antes 200 €) y configuración SEO técnico de élite con Jarvis.';
$canonical = 'https://lallavedetupyme.com/promoweb/';
$bodyClass = 'promoweb-page';
$headerType = 'landing';
$landingCtaText = 'Quiero mi web por 400 €';
$landingCtaHref = '#pedir-web';
$footerType = 'conversion';
$whatsappMessage = 'Hola, vengo del anuncio de la web para pymes a 400€ con hosting gratis 6 meses y quiero información.';
$headExtra = '<link rel="stylesheet" href="/promoweb.css?v=20261001-1">';

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
        <span class="promoweb-badge-pulse">Campaña Exclusiva Pymes y Autónomos</span>
        <h1>Tu web profesional por 400 €.<br><em>Rápida, a medida y lista para captar clientes.</em></h1>
        <p class="hero-lead">Olvídate de presupuestos inflados de 2.000 € o de webs baratas de 300 € que parecen plantillas rotas. Creamos la web de tu negocio con diseño moderno, <strong>hosting profesional GRATIS durante 6 meses</strong> y la configuración técnica de <strong>Jarvis</strong> para que Google te encuentre desde el primer día.</p>
        
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
          <a class="button" href="#pedir-web">Quiero mi web por 400 € <span aria-hidden="true">→</span></a>
          <a class="text-link" href="https://wa.me/34611458493?text=<?= rawurlencode($whatsappMessage) ?>" target="_blank" rel="noopener noreferrer">Prefiero preguntar por WhatsApp <span aria-hidden="true">↗</span></a>
        </div>

        <div class="promoweb-guarantee-note">
          <span><i>✓</i> 100% de tu propiedad</span>
          <span><i>✓</i> Sin permanencias</span>
          <span><i>✓</i> Entrega en 10-15 días</span>
        </div>
      </div>

      <!-- VISUAL BOARD / JARVIS PREVIEW -->
      <figure class="promoweb-board" aria-label="Panel de control técnico y rendimiento garantizado con Jarvis">
        <div class="promoweb-board-header">
          <div class="board-window-dots">
            <span></span><span></span><span></span>
          </div>
          <span class="board-jarvis-badge">Configuración Jarvis Activa</span>
        </div>

        <div class="board-metrics-grid">
          <div class="board-metric-card">
            <span class="board-metric-label">Google PageSpeed</span>
            <span class="board-metric-val score-good">99 / 100</span>
            <small>Carga ultrarrápida &lt; 0.8s</small>
          </div>
          <div class="board-metric-card">
            <span class="board-metric-label">Google Search Console</span>
            <span class="board-metric-val score-good">Indexada</span>
            <small>Sitemap enviado y verificado</small>
          </div>
          <div class="board-metric-card">
            <span class="board-metric-label">Medición GA4</span>
            <span class="board-metric-val">100% Activa</span>
            <small>Llamadas, WhatsApp y Leads</small>
          </div>
          <div class="board-metric-card">
            <span class="board-metric-label">Seguridad SSL</span>
            <span class="board-metric-val score-good">HTTPS A+</span>
            <small>Certificado seguro incluido</small>
          </div>
        </div>

        <ul class="board-jarvis-checklist">
          <li>
            <span>Estructura semántica Schema.org para Google</span>
            <span class="status-ok"><i>✓</i> Optimizado</span>
          </li>
          <li>
            <span>Formularios conectados y blindados contra spam</span>
            <span class="status-ok"><i>✓</i> Verificado</span>
          </li>
          <li>
            <span>Hosting SSD de alta velocidad incluido</span>
            <span class="status-ok"><i>✓</i> 6 meses gratis</span>
          </li>
        </ul>
      </figure>
    </div>
  </section>

  <!-- SIGNAL STRIP -->
  <div class="promoweb-signal">
    <div class="container">
      <span>Entrega en <strong>10 a 15 días</strong></span>
      <i aria-hidden="true"></i>
      <span>Hosting profesional <strong>6 meses gratis</strong></span>
      <i aria-hidden="true"></i>
      <span>SEO Técnico verificado con <strong>Jarvis</strong></span>
      <i aria-hidden="true"></i>
      <span>La web es <strong>100% tuya</strong></span>
    </div>
  </div>

  <!-- PAIN POINTS SECTION -->
  <section class="promoweb-pains">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">La realidad del mercado</span>
        <h2>¿Por qué tantas webs de pymes<br><em>acaban siendo dinero tirado?</em></h2>
        <p>Si ya has buscado presupuestos o has tenido malas experiencias antes, seguro que reconoces estas 4 trampas:</p>
      </div>

      <div class="pains-grid">
        <article class="pain-card">
          <span class="pain-badge">Trampa 01</span>
          <h3>La plantilla rota de 300 €</h3>
          <p>Te instalan un WordPress prediseñado con 30 plugins lentos. Al mes falla, la web tarda 7 segundos en cargar y tus clientes se van antes de ver a qué te dedicas.</p>
        </article>

        <article class="pain-card">
          <span class="pain-badge">Trampa 02</span>
          <h3>La web "ciega" en Google</h3>
          <p>Te entregan un diseño bonito pero nadie configura Google Search Console ni Analytics. Eres totalmente invisible en internet y no tienes ni idea de cuánta gente te contacta.</p>
        </article>

        <article class="pain-card">
          <span class="pain-badge">Trampa 03</span>
          <h3>Presupuestos de 2.000 € o atascos</h3>
          <p>Agencias que te piden cifras desorbitadas o te meten en trámites burocráticos de 6 meses para entregarte una web básica donde eres un número de expediente más.</p>
        </article>

        <article class="pain-card">
          <span class="pain-badge">Trampa 04</span>
          <h3>Costes ocultos y secuestro</h3>
          <p>Empresas que te ofrecen la web "barata" pero te clavan 80 €/mes en mantenimiento obligatorio, o no te dan las claves del servidor si decides marcharte.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- THE JARVIS DIFFERENCE -->
  <section class="promoweb-jarvis" id="diferencia-jarvis">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">El factor diferenciador</span>
        <h2>No te damos una web a ciegas.<br><em>La entregamos configurada con Jarvis.</em></h2>
        <p>Cualquiera puede diseñar una web con colores bonitos. Nosotros nos aseguramos de que esté técnicamente construida para que Google la entienda y convierta visitas en llamadas.</p>
      </div>

      <div class="jarvis-lead-banner">
        <div class="jarvis-banner-icon">J</div>
        <div class="jarvis-banner-copy">
          <h3>¿Qué hace Jarvis por la web de tu negocio?</h3>
          <p>Jarvis es nuestro motor de auditoría y supervisión técnica directa con las APIs de Google. En lugar de dejarte la web abandonada al terminar el diseño, aplicamos un protocolo exhaustivo de puesta a punto para que tu web arranque con ventaja competitiva.</p>
        </div>
      </div>

      <div class="jarvis-pillars-grid">
        <article class="jarvis-pillar">
          <span class="pillar-number">Pilar 01</span>
          <h4>Google Search Console impecable</h4>
          <p>Configuramos y verificamos tu propiedad en Search Console. Generamos y enviamos tus sitemaps XML, solicitamos la indexación prioritaria y aseguramos que Google rastree tus páginas sin errores 404.</p>
          <ul class="jarvis-pillar-details">
            <li>Verificación directa DNS y propiedad limpia</li>
            <li>Sitemap XML dinámico enviado a Google</li>
            <li>Monitorización de estado de rastreo</li>
          </ul>
        </article>

        <article class="jarvis-pillar">
          <span class="pillar-number">Pilar 02</span>
          <h4>Google Analytics 4 (GA4) con medición real</h4>
          <p>Instalamos y calibramos GA4 con medición de eventos de conversión: sabrás exactamente cuántas personas hacen clic para llamarte, cuántas abren WhatsApp y cuántas rellenan tu formulario.</p>
          <ul class="jarvis-pillar-details">
            <li>Eventos de conversión: llamadas y WhatsApp</li>
            <li>Seguimiento de formularios sin duplicados</li>
            <li>Consentimiento RGPD integrado de serie</li>
          </ul>
        </article>

        <article class="jarvis-pillar">
          <span class="pillar-number">Pilar 03</span>
          <h4>SEO Técnico on-page y Schema.org</h4>
          <p>Estructuramos tu código HTML5 semántico con datos estructurados Schema (LocalBusiness / Organization / Service). Google entenderá tu dirección, tu teléfono, tus servicios y tu horario sin confusiones.</p>
          <ul class="jarvis-pillar-details">
            <li>Marcado Schema.org enriquecido</li>
            <li>Etiquetas Open Graph para redes sociales</li>
            <li>Jerarquía limpia de encabezados (H1, H2, H3)</li>
          </ul>
        </article>

        <article class="jarvis-pillar">
          <span class="pillar-number">Pilar 04</span>
          <h4>Velocidad Core Web Vitals al máximo</h4>
          <p>Cero código basura ni maquetadores pesados. Tu web cargará en menos de 1 segundo en móviles y ordenadores, superando a tu competencia directa en los requisitos de experiencia de usuario de Google.</p>
          <ul class="jarvis-pillar-details">
            <li>Puntuaciones PageSpeed de 95-100</li>
            <li>Imágenes optimizadas de última generación</li>
            <li>Experiencia móvil impecable y fluida</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE -->
  <section class="promoweb-compare">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Comparativa honesta</span>
        <h2>Compara lo que te dan otros<br><em>frente a lo que te damos en La Llave</em></h2>
      </div>

      <div class="table-wrapper">
        <table class="compare-table">
          <thead>
            <tr>
              <th>Concepto</th>
              <th>Webs baratas (300-500 €)</th>
              <th>Agencias grandes (1.500-3.000 €)</th>
              <th class="col-highlight">La Llave de tu Pyme (400 €)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Precio desarrollo</strong></td>
              <td>300 € – 500 €</td>
              <td>1.500 € – 3.000 €</td>
              <td class="col-highlight"><strong>400 €</strong> (precio cerrado)</td>
            </tr>
            <tr>
              <td><strong>Hosting</strong></td>
              <td class="compare-bad">No incluido (o te cobran aparte)</td>
              <td>Incluido 1 año (luego 250 €+/año)</td>
              <td class="col-highlight"><span class="compare-good">GRATIS 6 meses</span> · Luego 150 €/año (<s>200 €</s>)</td>
            </tr>
            <tr>
              <td><strong>SEO Técnico (GSC + GA4)</strong></td>
              <td class="compare-bad">Inexistente (web "a ciegas")</td>
              <td>Servicio extra (+300 €)</td>
              <td class="col-highlight"><span class="compare-good">Incluido con Jarvis</span></td>
            </tr>
            <tr>
              <td><strong>Velocidad y optimización</strong></td>
              <td class="compare-bad">Lenta (plantillas sobrecargadas)</td>
              <td>Buena</td>
              <td class="col-highlight"><span class="compare-good">Ultrarrápida (&lt;1s Core Web Vitals)</span></td>
            </tr>
            <tr>
              <td><strong>Propiedad del código</strong></td>
              <td class="compare-bad">A menudo secuestrado</td>
              <td>Tuya</td>
              <td class="col-highlight"><span class="compare-good">100% de tu propiedad sin ataduras</span></td>
            </tr>
            <tr>
              <td><strong>Plazo de entrega</strong></td>
              <td>Indefinido o abandonado</td>
              <td>30 a 90 días</td>
              <td class="col-highlight"><strong>10 a 15 días laborables</strong></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- THE PACK BREAKDOWN -->
  <section class="promoweb-pack" id="que-incluye">
    <div class="container">
      <div class="pack-card">
        <span class="pack-ribbon">Oferta Limitada Campaña</span>
        
        <div class="pack-header">
          <div>
            <span class="eyebrow" style="color:var(--orange-hot);">Todo lo que necesitas para tu negocio</span>
            <h2 style="margin:0 0 10px; font-size:clamp(2rem, 3.5vw, 3rem);">Pack Web Pyme Profesional</h2>
            <p style="color:var(--paper-muted); margin:0; font-size:1.05rem;">Sin costes sorpresa. Sin permanencias. Llave en mano.</p>
          </div>
          <div class="pack-pricing-box">
            <div class="pack-price-big">400 €<small>+ IVA</small></div>
            <div class="pack-hosting-banner">Hosting GRATIS 6 meses · luego 150 €/año (<s>200 €/año</s>)</div>
          </div>
        </div>

        <div class="pack-features-grid">
          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>Diseño moderno y adaptado a tu marca</strong>
              <p>Estructura pensada para transmitir confianza, explicar tus servicios y convertir visitas en clientes.</p>
            </div>
          </div>

          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>Hosting profesional rápido GRATIS durante 6 meses</strong>
              <p>Servidor optimizado en Europa con discos NVMe, copias de seguridad automáticas y soporte técnico.</p>
            </div>
          </div>

          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>Configuración Google Search Console completa</strong>
              <p>Envío de sitemap, verificación limpia e indexación acelerada para que comiences a posicionar.</p>
            </div>
          </div>

          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>Google Analytics 4 con medición de contactos</strong>
              <p>Sabrás con certeza quién hace clic en tu teléfono, quién escribe por WhatsApp y quién envía formularios.</p>
            </div>
          </div>

          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>100% Responsive en móviles y tablets</strong>
              <p>Verificada en múltiples resoluciones para que tus clientes naveguen cómodamente desde el móvil.</p>
            </div>
          </div>

          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>Botón flotante de WhatsApp y llamada directa</strong>
              <p>Tus clientes potenciales podrán contactarte con un solo toque desde cualquier página.</p>
            </div>
          </div>

          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>Formulario inteligente anti-spam</strong>
              <p>Protegido contra bots sin molestos captchas de semáforos que espanten a tus usuarios.</p>
            </div>
          </div>

          <div class="pack-feature-item">
            <span class="pack-check">✓</span>
            <div>
              <strong>Seguridad SSL (HTTPS) y textos legales RGPD</strong>
              <p>Candado verde en el navegador y páginas de aviso legal, privacidad y cookies configuradas.</p>
            </div>
          </div>
        </div>

        <div style="text-align:center;">
          <a class="button" href="#pedir-web" style="font-size:1.15rem; padding:18px 36px;">Quiero mi web por 400 € con hosting gratis <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS SECTION -->
  <section class="promoweb-process">
    <div class="container">
      <div class="section-head">
        <span class="eyebrow">Sin complicaciones para ti</span>
        <h2>¿Cómo es el proceso?<br><em>Fácil, directo y en 3 pasos</em></h2>
        <p>No te marearemos con términos técnicos incomprensibles ni peticiones infinitas de materiales.</p>
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
          <h3>Jarvis + Lanzamiento</h3>
          <p>Activamos tu hosting gratis 6 meses, conectamos Google Search Console, calibramos Analytics 4 y publicamos tu web lista para recibir clientes.</p>
        </article>
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
          <summary>¿Por qué Jarvis marca la diferencia frente a otros diseñadores?<span aria-hidden="true">+</span></summary>
          <p>La inmensa mayoría de diseñadores crean una web y se desentienden de Google. Con Jarvis, configuramos técnicamente Search Console para verificar que Google rastree tus páginas, vinculamos Google Analytics 4 para que midas llamadas y WhatsApps reales, y estructuramos el código con datos Schema para que destaques en tu sector.</p>
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
  <section class="promoweb-contact" id="pedir-web">
    <div class="container contact-grid">
      <div class="contact-copy">
        <span class="eyebrow" style="color:var(--orange-hot);">Empieza hoy mismo</span>
        <h2>Tu negocio merece<br>una web que <em>venda de verdad.</em></h2>
        <p class="hero-lead">Rellena el formulario en 1 minuto. Te contactamos en menos de 24 horas laborables para revisar tu caso y poner en marcha tu web por 400 € con hosting gratuito 6 meses.</p>

        <ul class="contact-perks-list">
          <li><i>✓</i> <strong>Precio cerrado:</strong> 400 € + IVA sin costes sorpresa.</li>
          <li><i>✓</i> <strong>Hosting incluido:</strong> 6 meses gratis (luego 150 €/año, antes 200 €).</li>
          <li><i>✓</i> <strong>Pack Jarvis:</strong> Search Console + Analytics 4 + SEO técnico.</li>
          <li><i>✓</i> <strong>Sin ataduras:</strong> Web 100% de tu propiedad.</li>
        </ul>

        <div style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08); padding:18px 22px; border-radius:12px; font-size:0.88rem; color:var(--paper-muted);">
          <strong style="color:#fff; display:block; margin-bottom:4px;">¿Prefieres hablar directamente?</strong>
          Llámanos o escríbenos por WhatsApp al <a href="https://wa.me/34611458493?text=<?= rawurlencode($whatsappMessage) ?>" target="_blank" rel="noopener noreferrer" style="color:var(--orange-hot); font-weight:700;">+34 611 458 493</a>.
        </div>
      </div>

      <div class="contact-card-box">
        <span class="eyebrow">Solicitud de proyecto web</span>
        <h3>Pide tu web profesional</h3>

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
              <span>Nombre de tu negocio o empresa *</span>
              <input type="text" name="empresa" autocomplete="organization" required maxlength="150" placeholder="Ej. Reformas García / Clínica Dental">
            </label>
          </div>

          <div class="form-row">
            <label>
              <span>Teléfono de contacto *</span>
              <input type="tel" name="telefono" autocomplete="tel" required maxlength="30" pattern="[0-9+\(\) .\-]{7,30}" placeholder="Ej. 612 345 678">
            </label>
            <label>
              <span>Correo electrónico *</span>
              <input type="email" name="email" autocomplete="email" required maxlength="190" placeholder="tu@empresa.com">
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

          <p class="privacy-summary">
            <strong>Protección de datos:</strong> La Llave de tu Pyme (Ideas Imaginativas) tratará tus datos para responder a tu solicitud web con tu consentimiento. No se cederán a terceros salvo obligación legal. Puedes ejercer tus derechos en info@lallavedetupyme.com. <a href="/politica-de-privacidad/" target="_blank" rel="noopener">Política de Privacidad</a>.
          </p>

          <label class="consent">
            <input type="checkbox" name="privacidad" value="1" required>
            <span>Acepto la política de privacidad y autorizo a que me contacten para informarme sobre la creación de mi página web.</span>
          </label>

          <button class="button" type="submit">
            Quiero mi web por 400 € con hosting gratis <span aria-hidden="true">→</span>
          </button>

          <div class="form-security-seal">
            <svg viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            <span>Solicitud sin compromiso ni cobro inmediato · Respuesta en 24h</span>
          </div>

          <div class="form-feedback" role="alert" aria-live="assertive" hidden></div>
        </form>
      </div>
    </div>
  </section>
</main>
<?php
require dirname(__DIR__) . '/partials/footer.php';