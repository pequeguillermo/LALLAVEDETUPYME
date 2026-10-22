<?php

declare(strict_types=1);

$title = 'Web corporativa para pymes desde 400€ | La Llave de tu Pyme';
$description = 'Diseño y desarrollo de páginas web corporativas para pymes y profesionales desde 400€. Imagen solvente, captación de clientes y opción de hosting profesional con IP española.';
$canonical = 'https://lallavedetupyme.com/servicios/desarrollo-web/web-corporativa/';
$schemaJson = '[{"@context":"https://schema.org","@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com","logo":"https://lallavedetupyme.com/assets/logo-la-llave.png","description":"Agencia de marketing digital para pymes: estrategia, desarrollo web, hosting, SEO, publicidad y automatización."},{"@context":"https://schema.org","@type":"Service","name":"Desarrollo de Web Corporativa para Pymes","url":"https://lallavedetupyme.com/servicios/desarrollo-web/web-corporativa/","serviceType":"Diseño y desarrollo de sitios web corporativos","provider":{"@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com"},"areaServed":"España","offers":{"@type":"Offer","price":"400","priceCurrency":"EUR","priceSpecification":{"@type":"UnitPriceSpecification","price":"400","priceCurrency":"EUR","valueAddedTaxIncluded":false}}}]';

require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <section class="page-hero service-hero">
    <div class="container service-hero-grid">
      <div>
        <a class="back-link" href="/servicios/desarrollo-web/">← Volver a Desarrollo Web</a>
        <span class="eyebrow">Desarrollo Web / Solución 01</span>
        <h1>Diseño de webs corporativas para pymes</h1>
        <p class="hero-lead">Diseño y desarrollo a medida desde 400€ + IVA para empresas, despachos y profesionales que necesitan reflejar su nivel real, explicar su propuesta con claridad y convertir visitantes en clientes potenciales.</p>

        <div class="subpage-badge-row">
          <span class="subpage-pill subpage-pill-price">Desde 400€ + IVA · Pago único</span>
          <span class="subpage-pill subpage-pill-hosting">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              <path d="M9 12l2 2 4-4"/>
            </svg>
            Posibilidad de hosting profesional con IP española
          </span>
        </div>

        <div class="hero-actions">
          <a class="button" href="/contacto/">Solicitar propuesta para mi web <span aria-hidden="true">↗</span></a>
          <a class="text-link" href="#incluye">Ver qué incluye ↓</a>
        </div>
      </div>
      <div class="service-hero-icon">
        <svg viewBox="0 0 48 48" aria-hidden="true">
          <rect x="6" y="9" width="36" height="28" rx="2"/>
          <path d="M6 17h36M13 13h.1M19 13h.1M12 24h10v7H12M27 24h9M27 30h7"/>
        </svg>
        <span>400€</span>
      </div>
    </div>
  </section>

  <section class="section service-problem">
    <div class="container split-intro">
      <div>
        <span class="eyebrow">El punto de partida</span>
        <h2>Una web anticuada o descuidada te hace perder clientes antes de la primera reunión.</h2>
      </div>
      <div class="large-copy">
        <p>Cuando un potencial cliente busca tus servicios, tu página web es tu carta de presentación principal. Si tarda en cargar, se ve descolocada en el móvil o parece una plantilla genérica de hace diez años, la duda se instala en su cabeza y se marcha a la competencia.</p>
        <p>Creamos webs corporativas pensadas para transmitir solidez desde el primer segundo: estructura lógica, jerarquía visual impecable, textos que conectan con la necesidad del cliente y llamadas a la acción que hacen avanzar la conversación.</p>
        <p class="service-fit"><strong>Encaja contigo si:</strong> Eres una pyme, estudio, clínica, despacho o profesional independiente que necesita renovar una web obsoleta o lanzar una presencia digital de máximo nivel sin inflar los costes.</p>
      </div>
    </div>
  </section>

  <section class="section deliverables-section" id="incluye">
    <div class="container section-heading">
      <div>
        <span class="eyebrow">Qué incluye el proyecto</span>
        <h2>Una web completa y lista para trabajar. Sin costes ocultos.</h2>
      </div>
      <p>Entregamos proyectos cerrados, llave en mano y 100% de tu propiedad.</p>
    </div>
    <div class="container deliverable-grid">
      <article data-reveal>
        <span>01</span>
        <h3>Arquitectura a medida de 5 a 7 páginas</h3>
        <p>Estructura estratégica: Portada, Servicios detallados, Quiénes somos, Casos de éxito / Testimonios y Contacto directo.</p>
      </article>
      <article data-reveal>
        <span>02</span>
        <h3>Diseño responsive exclusivo</h3>
        <p>Diseño visual adaptado a tu identidad de marca, optimizado para una lectura perfecta en móviles, tablets y pantallas de escritorio.</p>
      </article>
      <article data-reveal>
        <span>03</span>
        <h3>Copywriting y propuesta de valor</h3>
        <p>Orientamos los textos para responder con claridad a qué haces, por qué confiar en ti y cómo empezar a trabajar contigo.</p>
      </article>
      <article data-reveal>
        <span>04</span>
        <h3>Velocidad y código limpio</h3>
        <p>Tiempo de carga inferior a 1 segundo. Desarrollado con estándares modernos, sin constructores pesados que ralenticen tu web.</p>
      </article>
      <article data-reveal>
        <span>05</span>
        <h3>Formularios seguros y RGPD</h3>
        <p>Formularios con validación en servidor, protección antispam invisible (honeypot), textos legales y aviso inmediato a tu buzón.</p>
      </article>
      <article data-reveal>
        <span>06</span>
        <h3>SEO técnico y datos estructurados</h3>
        <p>Etiquetas Schema.org (Organization, Service), metadatos Open Graph, sitemaps XML y configuración para una rápida indexación en Google.</p>
      </article>
    </div>
  </section>

  <!-- MÓDULO DESTACADO DE HOSTING -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="subpage-hosting-feature-box" data-reveal>
        <div>
          <span class="eyebrow" style="color: var(--blue);">Infraestructura recomendada</span>
          <h3>Posibilidad de hosting profesional para tu web corporativa</h3>
          <p>Una web rápida y segura no puede descansar en un servidor masivo y lento. Te ofrecemos la opción de alojarla en nuestro entorno de alta velocidad optimizado para pymes, con recursos holgados y soporte técnico directo en España.</p>
          <div style="margin-top: 24px;">
            <a class="button button-light" href="/servicios/hosting-para-pymes/">Ver detalles de nuestro hosting <span aria-hidden="true">↗</span></a>
          </div>
        </div>
        <div>
          <ul class="subpage-hosting-perks">
            <li>
              <strong>Velocidad SEO</strong>
              IP 100% española con latencia mínima (&lt;0.2s).
            </li>
            <li>
              <strong>Tranquilidad total</strong>
              Copias de seguridad diarias desubicadas en centro externo.
            </li>
            <li>
              <strong>Disponibilidad 99.9%</strong>
              Servidores NVMe sobredimensionados sin caídas.
            </li>
            <li>
              <strong>Seguridad activa</strong>
              Certificados SSL automáticos y cortafuegos WAF.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="section working-section">
    <div class="container section-heading">
      <div>
        <span class="eyebrow">Metodología ágil</span>
        <h2>Del briefing al lanzamiento en 4 pasos.</h2>
      </div>
    </div>
    <div class="container method-grid">
      <article class="method-step" data-reveal>
        <span>01</span>
        <h3>Definición y mapa de contenidos</h3>
        <p>Analizamos tus servicios, tu público y tus objetivos para acordar la estructura y los textos principales.</p>
      </article>
      <article class="method-step" data-reveal>
        <span>02</span>
        <h3>Diseño y maquetación</h3>
        <p>Damos vida a la interfaz con la identidad corporativa de tu negocio, cuidando cada detalle visual y tipográfico.</p>
      </article>
      <article class="method-step" data-reveal>
        <span>03</span>
        <h3>Pruebas y optimización</h3>
        <p>Comprobamos rendimiento, formularios, navegación en teléfonos y cumplimiento técnico de SEO y privacidad.</p>
      </article>
      <article class="method-step" data-reveal>
        <span>04</span>
        <h3>Lanzamiento y entrega</h3>
        <p>Publicamos tu web en tu dominio, conectamos la analítica y te entregamos los accesos completos sin ataduras.</p>
      </article>
    </div>
  </section>

  <section class="section faq-section">
    <div class="container">
      <div class="section-heading">
        <div>
          <span class="eyebrow">Dudas habituales</span>
          <h2>Preguntas frecuentes sobre la web corporativa</h2>
        </div>
      </div>
      <div class="faq-list">
        <details>
          <summary>¿La web será 100% de mi propiedad? <span>+</span></summary>
          <p>Sí, absolutamente. La web es tuya, el dominio es tuyo y no existen comisiones ni cuotas mensuales forzosas por el desarrollo. Te entregamos todos los accesos al finalizar el proyecto.</p>
        </details>
        <details>
          <summary>¿Cómo funciona la posibilidad de hosting? <span>+</span></summary>
          <p>Es totalmente opcional. Si ya dispones de alojamiento web, podemos instalar tu web en tu propio servidor. Si prefieres no preocuparte por configuraciones, mantenimiento o copias de seguridad, te ofrecemos nuestro hosting profesional con IP española y discos NVMe de alta velocidad.</p>
        </details>
        <details>
          <summary>¿Podré actualizar los textos y fotos yo mismo? <span>+</span></summary>
          <p>Sí. Diseñamos la web de forma modular y limpia para que puedas realizar cambios sencillos de contenidos o contar con nosotros si necesitas un mantenimiento asistido continuo.</p>
        </details>
        <details>
          <summary>¿Cuánto tiempo se tarda en tener la web lista? <span>+</span></summary>
          <p>El plazo habitual de desarrollo para una web corporativa completa oscila entre 7 y 14 días laborables desde la recepción del material y los contenidos base.</p>
        </details>
      </div>
    </div>
  </section>

  <section class="section related-section">
    <div class="container section-heading">
      <div>
        <span class="eyebrow">Otras soluciones de desarrollo</span>
        <h2>¿Buscas otro modelo web?</h2>
      </div>
    </div>
    <div class="container service-grid compact">
      <a class="service-card" href="/servicios/desarrollo-web/comercio-electronico/">
        <span class="service-number">02</span>
        <h3>Comercio electrónico</h3>
        <p>Tienda online completa desde 800€ con pasarelas de pago y sin comisiones de venta.</p>
        <span class="card-link">Ver tienda online ↗</span>
      </a>
      <a class="service-card" href="/servicios/desarrollo-web/landing-page/">
        <span class="service-number">03</span>
        <h3>Landing page</h3>
        <p>Página de captación directa desde 150€ para rentabilizar tus campañas de publicidad.</p>
        <span class="card-link">Ver landing page ↗</span>
      </a>
      <a class="service-card" href="/servicios/hosting-para-pymes/">
        <span class="service-number">07</span>
        <h3>Hosting para pymes</h3>
        <p>Alojamiento de alta velocidad con IP española, copias desubicadas y sin caídas.</p>
        <span class="card-link">Ver hosting ↗</span>
      </a>
    </div>
  </section>

  <section class="section cta-section">
    <div class="container cta-panel" data-reveal>
      <div>
        <span class="eyebrow">Empezar hoy</span>
        <h2>¿Listo para darle a tu negocio la web que se merece?</h2>
      </div>
      <div>
        <p>Cuéntanos qué actividad realizas y qué objetivos tienes. Te responderemos rápidamente con una propuesta clara y sin letra pequeña.</p>
        <a class="button button-light" href="/contacto/">Solicitar presupuesto para mi web <span aria-hidden="true">↗</span></a>
      </div>
    </div>
  </section>
</main>
<?php
require dirname(__DIR__) . '/partials/footer.php';
