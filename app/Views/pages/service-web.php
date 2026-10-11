<?php

declare(strict_types=1);

$title = 'Desarrollo web para pymes: Web corporativa, Tienda online y Landing page | La Llave';
$description = 'Soluciones de desarrollo web para pymes desde 150€: Web corporativa (desde 400€), Comercio electrónico (desde 800€) y Landing page (desde 150€), todas con opción de hosting profesional con IP española.';
$canonical = 'https://lallavedetupyme.com/servicios/desarrollo-web/';
$schemaJson = '[{"@context":"https://schema.org","@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com","logo":"https://lallavedetupyme.com/assets/logo-la-llave.png","description":"Agencia de marketing digital para pymes: estrategia, desarrollo web, hosting, SEO, publicidad y automatización."},{"@context":"https://schema.org","@type":"Service","name":"Diseño y desarrollo web para pymes | La Llave de tu Pyme","url":"https://lallavedetupyme.com/servicios/desarrollo-web/","serviceType":"Diseño y desarrollo web profesional","provider":{"@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com"},"areaServed":"España","hasOfferCatalog":{"@type":"OfferCatalog","name":"Modelos de desarrollo web","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Web Corporativa"},"price":"400","priceCurrency":"EUR"},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Comercio Electrónico"},"price":"800","priceCurrency":"EUR"},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Landing Page de Captación"},"price":"150","priceCurrency":"EUR"}]}}]';

require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <section class="page-hero service-hero">
    <div class="container service-hero-grid">
      <div>
        <a class="back-link" href="/servicios/">← Todos los servicios</a>
        <span class="eyebrow">02 / Diseño y desarrollo web</span>
        <h1>Tu web debe hacer avanzar la conversación</h1>
        <p class="hero-lead">Desarrollamos soluciones web pensadas para el negocio: páginas corporativas para ganar solvencia, tiendas online para vender sin comisiones y landing pages de captación directa. Cada una con su propia arquitectura y con posibilidad de hosting profesional ultrarrápido.</p>
        <div class="hero-actions">
          <a class="button" href="#modelos">Ver soluciones y tarifas <span aria-hidden="true">↓</span></a>
          <a class="text-link" href="/contacto/">Hablar de mi proyecto <span aria-hidden="true">↗</span></a>
        </div>
      </div>
      <div class="service-hero-icon">
        <svg viewBox="0 0 48 48" aria-hidden="true">
          <rect x="6" y="9" width="36" height="28" rx="2"/>
          <path d="M6 17h36M13 13h.1M19 13h.1M12 24h10v7H12M27 24h9M27 30h7"/>
        </svg>
        <span>02</span>
      </div>
    </div>
  </section>

  <!-- SECCIÓN DESTACADA: TRES MODELOS DE DESARROLLO WEB -->
  <section class="section web-solutions-section" id="modelos">
    <div class="container web-solutions-intro">
      <div class="section-heading">
        <div>
          <span class="eyebrow">Soluciones especializadas</span>
          <h2>Tres formatos adaptados<br><em>a la etapa de tu negocio.</em></h2>
        </div>
        <p>Precios cerrados, sin sorpresas ni costes ocultos. Elige el alcance que necesitas hoy con la tranquilidad de contar con código limpio, alta velocidad y posibilidad de hosting profesional.</p>
      </div>
    </div>

    <div class="container web-solutions-grid">
      <!-- 01 WEB CORPORATIVA -->
      <article class="web-solution-card" data-reveal>
        <span class="solution-badge-ribbon">01 / Presencia &amp; Solvencia</span>
        <div class="solution-title-group">
          <h3>Web corporativa</h3>
          <p>La cara digital de tu empresa: diseñada a medida para transmitir confianza, explicar tu propuesta de valor y atraer contactos cualificados.</p>
        </div>
        <div class="solution-price-box">
          <div class="price-amount">desde 400<span>€</span> <small>+ IVA</small></div>
          <span class="price-subtext">Pago único cerrado · Llave en mano</span>
        </div>
        <div class="solution-hosting-banner">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
            <line x1="6" y1="6" x2="6.01" y2="6"/>
            <line x1="6" y1="18" x2="6.01" y2="18"/>
          </svg>
          <div>
            <strong>Posibilidad de hosting profesional</strong>
            <p>Servidor NVMe con IP española, copias de seguridad diarias desubicadas y soporte técnico.</p>
          </div>
        </div>
        <ul class="solution-bullets">
          <li>Arquitectura a medida de 5 a 7 páginas de servicio</li>
          <li>Diseño responsive adaptado a tu identidad</li>
          <li>Velocidad de carga instantánea (&lt; 1s) sin plugins lentos</li>
          <li>Formularios seguros con antispam y RGPD</li>
          <li>SEO técnico on-page y marcado Schema.org</li>
        </ul>
        <div class="solution-action">
          <a class="button" href="/servicios/desarrollo-web/web-corporativa/">Ver página y alcance <span aria-hidden="true">↗</span></a>
        </div>
      </article>

      <!-- 02 COMERCIO ELECTRÓNICO -->
      <article class="web-solution-card featured" data-reveal>
        <span class="solution-badge-ribbon">02 / Venta online 24/7</span>
        <div class="solution-title-group">
          <h3>Comercio electrónico</h3>
          <p>Vende tus productos o servicios en piloto automático, sin comisiones por pedido y con un proceso de pago ágil y seguro.</p>
        </div>
        <div class="solution-price-box">
          <div class="price-amount">desde 800<span>€</span> <small>+ IVA</small></div>
          <span class="price-subtext">Tienda completa · Sin comisiones de venta</span>
        </div>
        <div class="solution-hosting-banner">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
            <line x1="6" y1="6" x2="6.01" y2="6"/>
            <line x1="6" y1="18" x2="6.01" y2="18"/>
          </svg>
          <div>
            <strong>Posibilidad de hosting e-commerce</strong>
            <p>Recursos sobredimensionados para absorber tráfico concurrente, caché avanzada y SSL seguro.</p>
          </div>
        </div>
        <ul class="solution-bullets">
          <li>Catálogo completo organizado por categorías</li>
          <li>Pasarelas de pago Redsys, Bizum, Stripe y PayPal</li>
          <li>Gestión sencilla de stock, pedidos e impuestos</li>
          <li>Checkout optimizado para reducir carritos abandonados</li>
          <li>Optimización para móviles y fichas de producto SEO</li>
        </ul>
        <div class="solution-action">
          <a class="button" href="/servicios/desarrollo-web/comercio-electronico/">Ver página y alcance <span aria-hidden="true">↗</span></a>
        </div>
      </article>

      <!-- 03 LANDING PAGE -->
      <article class="web-solution-card" data-reveal>
        <span class="solution-badge-ribbon">03 / Conversión directa</span>
        <div class="solution-title-group">
          <h3>Landing page</h3>
          <p>Específicamente pensada para campañas de publicidad o lanzamientos: una sola propuesta y un recorrido claro para captar contactos.</p>
        </div>
        <div class="solution-price-box">
          <div class="price-amount">desde 150<span>€</span> <small>+ IVA</small></div>
          <span class="price-subtext">Optimizada para Google Ads &amp; Meta</span>
        </div>
        <div class="solution-hosting-banner">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
            <line x1="6" y1="6" x2="6.01" y2="6"/>
            <line x1="6" y1="18" x2="6.01" y2="18"/>
          </svg>
          <div>
            <strong>Posibilidad de hosting para campañas</strong>
            <p>Latencia mínima en España que maximiza tu Quality Score en Google Ads y Meta sin caídas.</p>
          </div>
        </div>
        <ul class="solution-bullets">
          <li>Estructura probada CRO (Conversion Rate Optimization)</li>
          <li>Copy persuasivo centrado en problema y solución</li>
          <li>Formulario ágil sin fricción + botón directo WhatsApp</li>
          <li>Carga ultrarrápida (&lt; 0.8s) en dispositivos móviles</li>
          <li>Medición y píxeles listos para atribución de anuncios</li>
        </ul>
        <div class="solution-action">
          <a class="button" href="/servicios/desarrollo-web/landing-page/">Ver página y alcance <span aria-hidden="true">↗</span></a>
        </div>
      </article>
    </div>

    <!-- BANNER DE HOSTING PROFESIONAL -->
    <div class="container">
      <div class="web-hosting-cross-card" data-reveal>
        <div class="cross-info">
          <div class="cross-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              <path d="M9 12l2 2 4-4"/>
            </svg>
          </div>
          <div>
            <h4>¿Quieres la máxima velocidad y despreocuparte de servidores?</h4>
            <p>Todos nuestros desarrollos cuentan con la opción de incorporar <strong>Hosting profesional para pymes</strong>: centro de datos en España con latencia récord (&lt;0.2s), copias de seguridad automáticas diarias enviadas a una ubicación externa y recursos holgados sin caídas.</p>
          </div>
        </div>
        <div class="cross-btn">
          <a class="button button-light" href="/servicios/hosting-para-pymes/">Conocer nuestro hosting <span aria-hidden="true">↗</span></a>
        </div>
      </div>
    </div>
  </section>

  <section class="section service-problem">
    <div class="container split-intro">
      <div>
        <span class="eyebrow">El punto de partida</span>
        <h2>Primero entendemos qué está frenando el avance.</h2>
      </div>
      <div class="large-copy">
        <p>Una web puede ser bonita y seguir sin ayudar al negocio. Trabajamos el mensaje, la arquitectura, el diseño y la medición como una sola pieza para que no haya distancia entre lo que prometes y lo que el usuario encuentra.</p>
        <p class="service-fit"><strong>Encaja contigo si:</strong> Para negocios que necesitan una web nueva o quieren dejar atrás una presencia digital que ya no representa su nivel real.</p>
      </div>
    </div>
  </section>

  <section class="section deliverables-section">
    <div class="container section-heading">
      <div>
        <span class="eyebrow">Qué ponemos en juego</span>
        <h2>Una capacidad completa, ajustada al problema.</h2>
      </div>
      <p>No todas las fases necesitan el mismo peso. Definimos el alcance después de entender la situación.</p>
    </div>
    <div class="container deliverable-grid">
      <article data-reveal>
        <span>01</span>
        <h3>Arquitectura y mapa de contenidos</h3>
      </article>
      <article data-reveal>
        <span>02</span>
        <h3>Copy y propuesta de valor</h3>
      </article>
      <article data-reveal>
        <span>03</span>
        <h3>Diseño responsive</h3>
      </article>
      <article data-reveal>
        <span>04</span>
        <h3>Desarrollo y optimización</h3>
      </article>
      <article data-reveal>
        <span>05</span>
        <h3>Formularios y medición</h3>
      </article>
      <article data-reveal>
        <span>06</span>
        <h3>SEO técnico de lanzamiento</h3>
      </article>
    </div>
  </section>

  <section class="section outcome-section">
    <div class="container outcome-panel">
      <div>
        <span class="eyebrow">Lo que debería cambiar</span>
        <h2>El trabajo se mide por el movimiento que produce.</h2>
      </div>
      <ul>
        <li>Explicar mejor lo que haces</li>
        <li>Reducir fricción antes del contacto</li>
        <li>Convertir la web en un activo comercial</li>
      </ul>
    </div>
  </section>

  <section class="section working-section">
    <div class="container section-heading">
      <div>
        <span class="eyebrow">Cómo avanzamos</span>
        <h2>Con contexto, criterio y conversación.</h2>
      </div>
    </div>
    <div class="container method-grid">
      <article class="method-step" data-reveal>
        <span>01</span>
        <h3>Entramos en el contexto</h3>
        <p>Antes de proponer, entendemos qué vendes, cómo decides y dónde se atasca hoy el crecimiento.</p>
      </article>
      <article class="method-step" data-reveal>
        <span>02</span>
        <h3>Ponemos orden</h3>
        <p>Convertimos ideas, urgencias y datos en una lista de prioridades que todo el mundo puede entender.</p>
      </article>
      <article class="method-step" data-reveal>
        <span>03</span>
        <h3>Hacemos que ocurra</h3>
        <p>La estrategia no se queda en una presentación. Diseñamos, escribimos, configuramos, publicamos y medimos.</p>
      </article>
      <article class="method-step" data-reveal>
        <span>04</span>
        <h3>Seguimos cerca</h3>
        <p>No desaparecemos entre reuniones. Si hay que decidir, corregir o aprovechar una oportunidad, abrimos la conversación.</p>
      </article>
    </div>
  </section>

  <section class="section related-section">
    <div class="container section-heading">
      <div>
        <span class="eyebrow">Capacidades que suelen conectar</span>
        <h2>Ningún canal trabaja solo.</h2>
      </div>
    </div>
    <div class="container service-grid compact">
      <a class="service-card" href="/servicios/estrategia-digital/">
        <span class="service-number">01</span>
        <h3>Estrategia digital</h3>
        <p>Primero decidimos qué merece tu tiempo y tu inversión.</p>
        <span class="card-link">Ver servicio ↗</span>
      </a>
      <a class="service-card" href="/servicios/posicionamiento-seo/">
        <span class="service-number">03</span>
        <h3>Posicionamiento SEO</h3>
        <p>Visibilidad donde ya existe una intención de búsqueda.</p>
        <span class="card-link">Ver servicio ↗</span>
      </a>
      <a class="service-card" href="/servicios/hosting-para-pymes/">
        <span class="service-number">07</span>
        <h3>Hosting para pymes</h3>
        <p>Servidores con IP española, copias diarias desubicadas y sin caídas.</p>
        <span class="card-link">Ver servicio ↗</span>
      </a>
    </div>
  </section>

  <section class="section cta-section">
    <div class="container cta-panel" data-reveal>
      <div>
        <span class="eyebrow">Sin formularios mentales</span>
        <h2>No necesitas tenerlo todo claro para empezar.</h2>
      </div>
      <div>
        <p>Cuéntanos qué quieres mover, qué has probado y dónde notas el atasco. Nosotros ponemos las preguntas que faltan.</p>
        <a class="button button-light" href="/contacto/">Abrir una conversación <span aria-hidden="true">↗</span></a>
      </div>
    </div>
  </section>
</main>
<?php
require dirname(__DIR__) . '/partials/footer.php';
