<?php

declare(strict_types=1);

$title = 'Servicios de marketing digital y hosting para pymes | La Llave';
$description = 'Estrategia digital, diseño web, hosting profesional, SEO, publicidad, redes sociales y automatización bajo una misma dirección.';
$canonical = 'https://lallavedetupyme.com/servicios/';
$schemaJson = '[{"@context":"https://schema.org","@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com","logo":"https://lallavedetupyme.com/assets/logo-la-llave.png","description":"Agencia de marketing digital para pymes: estrategia, web, hosting, SEO, publicidad, contenidos y automatización bajo una misma dirección."},{"@context":"https://schema.org","@type":"WebPage","name":"Servicios de marketing digital y hosting para pymes | La Llave","url":"https://lallavedetupyme.com/servicios/"}]';

require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
  <section class="page-hero services-hero">
    <div class="container page-hero-grid">
      <div>
        <span class="eyebrow">Servicios de marketing y tecnología</span>
        <h1>No necesitas más canales.<br><em>Necesitas que se entiendan.</em></h1>
      </div>
      <div>
        <p class="hero-lead">Reunimos estrategia, creatividad, infraestructura y captación para resolver el siguiente problema del negocio, no para llenar una propuesta de líneas.</p>
        <a class="button" href="/contacto/">Ordenar mis prioridades <span aria-hidden="true">↗</span></a>
      </div>
    </div>
  </section>

  <section class="section services-catalogue">
    <div class="container">
      <div class="service-grid">
        <a class="service-card" href="/servicios/estrategia-digital/" data-reveal>
          <span class="service-number">01</span>
          <span class="service-icon"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M8 39 24 7l16 32-16-8-16 8Z"/><path d="M24 7v24"/></svg></span>
          <h3>Estrategia digital</h3>
          <p>Primero decidimos qué merece tu tiempo y tu inversión.</p>
          <span class="card-link">Ver servicio <span aria-hidden="true">↗</span></span>
        </a>

        <a class="service-card" href="/servicios/diseno-web/" data-reveal>
          <span class="service-number">02</span>
          <span class="service-icon"><svg viewBox="0 0 48 48" aria-hidden="true"><rect x="6" y="9" width="36" height="28" rx="2"/><path d="M6 17h36M13 13h.1M19 13h.1M12 24h10v7H12M27 24h9M27 30h7"/></svg></span>
          <h3>Diseño y desarrollo web</h3>
          <p>Una web que explica, orienta y convierte.</p>
          <span class="card-link">Ver servicio <span aria-hidden="true">↗</span></span>
        </a>

        <a class="service-card" href="/servicios/posicionamiento-seo/" data-reveal>
          <span class="service-number">03</span>
          <span class="service-icon"><svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="21" cy="21" r="13"/><path d="m31 31 10 10M14 25l5-6 5 4 6-8"/></svg></span>
          <h3>Posicionamiento SEO</h3>
          <p>Visibilidad donde ya existe una intención de búsqueda.</p>
          <span class="card-link">Ver servicio <span aria-hidden="true">↗</span></span>
        </a>

        <a class="service-card" href="/servicios/publicidad-digital/" data-reveal>
          <span class="service-number">04</span>
          <span class="service-icon"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M7 27V17l27-9v28L7 27Z"/><path d="M34 19c5 1 7 3 7 6s-2 5-7 6M13 29l3 11h8l-4-9"/></svg></span>
          <h3>Publicidad digital</h3>
          <p>Campañas con intención, contexto y una página preparada para recibirlas.</p>
          <span class="card-link">Ver servicio <span aria-hidden="true">↗</span></span>
        </a>

        <a class="service-card" href="/servicios/redes-sociales/" data-reveal>
          <span class="service-number">05</span>
          <span class="service-icon"><svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="11" cy="24" r="5"/><circle cx="36" cy="11" r="5"/><circle cx="36" cy="37" r="5"/><path d="m15 22 16-8M15 27l16 8"/></svg></span>
          <h3>Redes sociales y contenidos</h3>
          <p>Una voz reconocible y un criterio para decidir qué contar.</p>
          <span class="card-link">Ver servicio <span aria-hidden="true">↗</span></span>
        </a>

        <a class="service-card" href="/servicios/automatizacion-y-funnels/" data-reveal>
          <span class="service-number">06</span>
          <span class="service-icon"><svg viewBox="0 0 48 48" aria-hidden="true"><path d="M6 8h36L29 23v12l-10 5V23L6 8Z"/><path d="M33 28a8 8 0 1 1-5 10M33 28v7h-7"/></svg></span>
          <h3>Automatización y funnels</h3>
          <p>Menos pasos manuales. Más continuidad entre interés y decisión.</p>
          <span class="card-link">Ver servicio <span aria-hidden="true">↗</span></span>
        </a>

        <!-- 07 HOSTING PARA PYMES: OCUPA LAS TRES COLUMNAS CON FORMATO ESTRUCTURADO -->
        <a class="service-card service-card-full" href="/servicios/hosting-para-pymes/" data-reveal>
          <div class="service-full-top">
            <div class="service-full-header-info">
              <div class="service-full-meta">
                <span class="service-number">07</span>
                <span class="service-badge-pill">Infraestructura Crítica</span>
              </div>
              <div class="service-full-title-row">
                <span class="service-icon" aria-hidden="true">
                  <svg viewBox="0 0 48 48" aria-hidden="true">
                    <rect x="6" y="8" width="36" height="12" rx="2"/>
                    <rect x="6" y="24" width="36" height="12" rx="2"/>
                    <circle cx="12" cy="14" r="1.5"/>
                    <circle cx="17" cy="14" r="1.5"/>
                    <circle cx="12" cy="30" r="1.5"/>
                    <circle cx="17" cy="30" r="1.5"/>
                    <path d="M30 14h8M30 30h8M24 38v4M16 42h16"/>
                  </svg>
                </span>
                <div>
                  <h3>Hosting para pymes</h3>
                  <p>La base donde descansa tu negocio: servidores de alto rendimiento optimizados para que tu web vuele y nunca deje de responder.</p>
                </div>
              </div>
            </div>
            <div class="service-full-action">
              <span class="service-full-button">Ver servicio y características <span aria-hidden="true">↗</span></span>
            </div>
          </div>

          <div class="service-full-pillars">
            <div class="service-pillar-card">
              <div class="pillar-head">
                <span class="pillar-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20M2 12h20"/>
                  </svg>
                </span>
                <strong>IP 100% Española</strong>
              </div>
              <p>Centro de datos nacional con latencia ultrabaja (&lt;0.2s) y máxima prioridad para SEO local en Google.</p>
            </div>

            <div class="service-pillar-card">
              <div class="pillar-head">
                <span class="pillar-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <path d="M9 12l2 2 4-4"/>
                  </svg>
                </span>
                <strong>Copias diarias y desubicadas</strong>
              </div>
              <p>Backups redundantes cada noche enviados cifrados a un centro de datos externo para recuperación inmediata.</p>
            </div>

            <div class="service-pillar-card">
              <div class="pillar-head">
                <span class="pillar-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                  </svg>
                </span>
                <strong>Sobredimensionados y sin caídas</strong>
              </div>
              <p>Recursos holgados de RAM y CPU en discos NVMe con disponibilidad del 99.9% ante picos de visitas.</p>
            </div>
          </div>
        </a>a>
      </div>
    </div>
  </section>

  <section class="section connection-section">
    <div class="container connection-grid">
      <div>
        <span class="eyebrow">Una sola dirección</span>
        <h2>La web habla con las campañas. El SEO habla con el contenido. Los datos vuelven a la estrategia.</h2>
      </div>
      <div class="connection-visual" data-reveal>
        <img src="/assets/servicios-conectados.jpg" width="1440" height="960" alt="Sistema visual que conecta web, búsqueda, publicidad y automatización" loading="lazy">
        <div class="connection-legend">
          <span>Descubrir</span>
          <span>Convencer</span>
          <span>Convertir</span>
          <span>Aprender</span>
        </div>
      </div>
    </div>
  </section>

  <section class="section fit-section">
    <div class="container split-intro">
      <div>
        <span class="eyebrow">Cómo elegimos</span>
        <h2>El servicio correcto es el que desbloquea lo siguiente.</h2>
      </div>
      <div class="large-copy">
        <p>Puede que necesites una web. O puede que la web esté bien y el problema sea el mensaje, la demanda o el seguimiento.</p>
        <p>Antes de recomendar una disciplina, buscamos el cuello de botella. Después formamos el equipo alrededor de esa prioridad.</p>
        <a class="text-link" href="/auditoria-marketing/">Trazar mi mapa de oportunidades <span aria-hidden="true">↗</span></a>
      </div>
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