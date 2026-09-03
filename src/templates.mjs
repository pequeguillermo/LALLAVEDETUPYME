import { principles, services, serviceUrl, site, team } from "./content.mjs";

const icons = {
  "estrategia-digital": '<svg viewBox="0 0 48 48" aria-hidden="true"><path d="M8 39 24 7l16 32-16-8-16 8Z"/><path d="M24 7v24"/></svg>',
  "diseno-web": '<svg viewBox="0 0 48 48" aria-hidden="true"><rect x="6" y="9" width="36" height="28" rx="2"/><path d="M6 17h36M13 13h.1M19 13h.1M12 24h10v7H12M27 24h9M27 30h7"/></svg>',
  "posicionamiento-seo": '<svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="21" cy="21" r="13"/><path d="m31 31 10 10M14 25l5-6 5 4 6-8"/></svg>',
  "publicidad-digital": '<svg viewBox="0 0 48 48" aria-hidden="true"><path d="M7 27V17l27-9v28L7 27Z"/><path d="M34 19c5 1 7 3 7 6s-2 5-7 6M13 29l3 11h8l-4-9"/></svg>',
  "redes-sociales": '<svg viewBox="0 0 48 48" aria-hidden="true"><circle cx="11" cy="24" r="5"/><circle cx="36" cy="11" r="5"/><circle cx="36" cy="37" r="5"/><path d="m15 22 16-8M15 27l16 8"/></svg>',
  "automatizacion-y-funnels": '<svg viewBox="0 0 48 48" aria-hidden="true"><path d="M6 8h36L29 23v12l-10 5V23L6 8Z"/><path d="M33 28a8 8 0 1 1-5 10M33 28v7h-7"/></svg>',
};

function header(path, landing = false) {
  const active = (prefix) => path.startsWith(prefix) ? ' aria-current="page"' : "";
  if (landing) return `
    <header class="site-header landing-header">
      <div class="container header-inner">
        <a class="brand" href="/" aria-label="La Llave de tu Pyme, inicio"><img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme"></a>
        <a class="text-link" href="/">Volver a la agencia <span aria-hidden="true">↗</span></a>
      </div>
    </header>`;
  return `
    <header class="site-header">
      <div class="container header-inner">
        <a class="brand" href="/" aria-label="La Llave de tu Pyme, inicio"><img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme"></a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-nav"><span></span><span></span><span class="sr-only">Abrir menú</span></button>
        <nav class="main-nav" id="main-nav" aria-label="Navegación principal">
          <a href="/servicios/"${active("/servicios/")}>Servicios</a>
          <a href="/nosotros/"${active("/nosotros/")}>Cómo trabajamos</a>
          <a href="/auditoria-marketing/"${active("/auditoria-marketing/")}>Mapa de oportunidades</a>
          <a href="https://lallavedetupyme.com/blog/">Ideas</a>
          <a href="/contacto/" class="nav-cta"${active("/contacto/")}>Abrir conversación</a>
        </nav>
      </div>
    </header>`;
}

function footer() {
  return `
    <footer class="site-footer">
      <div class="container footer-grid">
        <div class="footer-brand">
          <img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme">
          <p>Capacidad de agencia.<br>Ritmo de equipo interno.</p>
        </div>
        <div>
          <p class="footer-label">Servicios</p>
          ${services.map((service) => `<a href="${serviceUrl(service)}">${service.nav}</a>`).join("")}
        </div>
        <div>
          <p class="footer-label">Agencia</p>
          <a href="/nosotros/">Cómo trabajamos</a>
          <a href="/auditoria-marketing/">Mapa de oportunidades</a>
          <a href="https://lallavedetupyme.com/blog/">Ideas</a>
          <a href="/contacto/">Contacto</a>
        </div>
        <div class="footer-close">
          <p class="footer-label">Hay algo que mover</p>
          <p>No hace falta tener el briefing perfecto. Empezamos por una conversación clara.</p>
          <a class="text-link" href="/contacto/">Cuéntanos dónde estás <span aria-hidden="true">↗</span></a>
        </div>
      </div>
      <div class="container footer-bottom"><span>© ${new Date().getFullYear()} La Llave de tu Pyme</span><span>Marketing pensado y ejecutado cerca del negocio.</span></div>
    </footer>`;
}

function conversionFooter() {
  return `<footer class="conversion-footer"><div class="container"><img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme"><p>Capacidad de agencia. Ritmo de equipo interno.</p><span>© ${new Date().getFullYear()} La Llave de tu Pyme</span></div></footer>`;
}

function whatsappButton(path) {
  const message = path === "/agencia-marketing-conversiones/"
    ? "Hola, quiero revisar por qué mis campañas no están convirtiendo como esperaba."
    : "Hola, quiero hablar sobre el marketing de mi empresa.";
  return `<a class="whatsapp-float" href="https://wa.me/34611458493?text=${encodeURIComponent(message)}" target="_blank" rel="noopener noreferrer" aria-label="Hablar con La Llave de tu Pyme por WhatsApp">
    <span class="whatsapp-icon" aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M16 4a11 11 0 0 0-9.5 16.5L5 27l6.7-1.4A11 11 0 1 0 16 4Z"/><path d="M12.2 10.4c.4-.3.8-.2 1 .3l1.1 2.5c.2.4.1.7-.2 1l-.8.8c1 2.1 2.5 3.6 4.7 4.6l.8-.9c.3-.3.7-.4 1-.2l2.4 1.2c.5.2.6.6.4 1-.6 1.5-1.8 2.3-3.3 2.2-5.3-.5-9.7-4.8-10.1-10.1-.1-1.1.8-2 3-2.4Z"/></svg></span>
    <span><small>Estamos al otro lado</small><strong><span class="wa-desktop-label">Hablemos por WhatsApp</span><span class="wa-mobile-label">WhatsApp</span></strong></span>
  </a>`;
}

function schemas(path, title, type, extra = {}) {
  const base = {
    "@context": "https://schema.org",
    "@type": type,
    name: title,
    url: `${site.url}${path}`,
    ...extra,
  };
  const organisation = {
    "@context": "https://schema.org",
    "@type": "Organization",
    name: site.name,
    url: site.url,
    logo: `${site.url}/assets/logo-la-llave.png`,
    description: site.description,
  };
  return `<script type="application/ld+json">${JSON.stringify([organisation, base])}</script>`;
}

export function shell({ path, title, description, body, pageClass = "", landing = false, minimalFooter = false, noindex = false, schemaType = "WebPage", schemaExtra = {} }) {
  const canonical = `${site.url}${path}`;
  return `<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>${title}</title>
  <meta name="description" content="${description}">
  ${noindex ? '<meta name="robots" content="noindex,follow">' : '<meta name="robots" content="index,follow">'}
  <link rel="canonical" href="${canonical}">
  <meta property="og:locale" content="es_ES">
  <meta property="og:type" content="website">
  <meta property="og:title" content="${title}">
  <meta property="og:description" content="${description}">
  <meta property="og:url" content="${canonical}">
  <meta property="og:image" content="${site.url}/assets/tierra.jpg">
  <meta name="theme-color" content="#080808">
  <link rel="icon" href="/assets/logo-la-llave.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="/styles.css?v=20260903-4">
  ${schemas(path, title, schemaType, schemaExtra)}
</head>
<body class="${pageClass}">
  <a class="skip-link" href="#contenido">Ir al contenido</a>
  <div class="grain" aria-hidden="true"></div>
  <div class="pointer-glow" aria-hidden="true"></div>
  ${header(path, landing)}
  <main id="contenido">${body}</main>
  ${minimalFooter ? conversionFooter() : footer()}
  ${whatsappButton(path)}
  <script src="/app.js?v=20260903-4" defer></script>
</body>
</html>`;
}

function serviceCards(limit) {
  const items = typeof limit === "number" ? services.slice(0, limit) : services;
  return `<div class="service-grid">${items.map((service) => `
    <a class="service-card" href="${serviceUrl(service)}" data-reveal>
      <span class="service-number">${service.number}</span>
      <span class="service-icon">${icons[service.slug]}</span>
      <h3>${service.name}</h3>
      <p>${service.line}</p>
      <span class="card-link">Ver servicio <span aria-hidden="true">↗</span></span>
    </a>`).join("")}</div>`;
}

function teamCards() {
  return `<div class="team-grid">${team.map((member, index) => `
    <article class="team-card" data-reveal>
      <div class="team-avatar"><img src="${member.image}" width="800" height="800" alt="Avatar ilustrado de ${member.name}" loading="lazy"></div>
      <div class="team-meta"><span>${String(index + 1).padStart(2, "0")}</span><div><h3>${member.name}</h3><p class="team-role">${member.role}</p></div></div>
      <p class="team-bio">${member.bio}</p>
    </article>`).join("")}</div>`;
}

function ctaBand() {
  return `<section class="section cta-section">
    <div class="container cta-panel" data-reveal>
      <div><span class="eyebrow">Sin formularios mentales</span><h2>No necesitas tenerlo todo claro para empezar.</h2></div>
      <div><p>Cuéntanos qué quieres mover, qué has probado y dónde notas el atasco. Nosotros ponemos las preguntas que faltan.</p><a class="button button-light" href="/contacto/">Abrir una conversación <span aria-hidden="true">↗</span></a></div>
    </div>
  </section>`;
}

export function homePage() {
  const body = `
    <section class="hero home-hero">
      <div class="hero-earth" aria-hidden="true"></div>
      <div class="hero-orbit orbit-one" aria-hidden="true"></div><div class="hero-orbit orbit-two" aria-hidden="true"></div>
      <div class="container hero-grid">
        <div class="hero-copy">
          <span class="eyebrow hero-kicker">Agencia de marketing para pymes que quieren avanzar</span>
          <h1>Capacidad de agencia.<br><em>Ritmo de equipo interno.</em></h1>
          <p class="hero-lead">Estrategia, web, SEO, campañas y automatización coordinadas por personas que están al otro lado cuando hay que decidir, corregir o poner algo en marcha.</p>
          <div class="hero-actions"><a class="button" href="/contacto/">Cuéntanos qué quieres mover <span aria-hidden="true">↗</span></a><a class="text-link" href="/servicios/">Ver todas las capacidades</a></div>
        </div>
        <div class="control-card" data-reveal>
          <div class="control-head"><span>Trabajo en curso</span><span class="live-dot">En movimiento</span></div>
          <div class="control-line"><span class="control-key">01</span><div><strong>Prioridad</strong><small>La siguiente decisión está clara</small></div><span class="status">Hoy</span></div>
          <div class="control-line"><span class="control-key">02</span><div><strong>Equipo</strong><small>La conversación sigue abierta</small></div><span class="status">Cerca</span></div>
          <div class="control-line"><span class="control-key">03</span><div><strong>Ejecución</strong><small>La estrategia sale del documento</small></div><span class="status">Activa</span></div>
          <p class="control-note">No aparecemos una vez al mes para leer un informe. Estamos dentro del contexto mientras el trabajo avanza.</p>
        </div>
      </div>
      <div class="scroll-cue"><span></span>Hay más debajo</div>
    </section>

    <section class="signal-strip" aria-label="Áreas de trabajo"><div class="signal-track">${[...services, ...services].map((service) => `<span>${service.name}<i></i></span>`).join("")}</div></section>

    <section class="section manifesto-section">
      <div class="container split-intro">
        <div><span class="eyebrow">Una agencia que no mira desde la barrera</span><h2>El marketing se mueve demasiado rápido para trabajar por tickets.</h2></div>
        <div class="large-copy"><p>Hay decisiones que no pueden esperar a la próxima reunión. Una campaña cambia. Una página se atasca. Aparece una idea que merece salir hoy.</p><p>Por eso trabajamos con una conversación abierta, prioridades visibles y capacidad real para ejecutar. <strong>Tu marketing mantiene el pulso.</strong></p></div>
      </div>
      <div class="container statement" data-reveal><span>Un equipo al otro lado.</span><span>Un plan siempre en marcha.</span></div>
    </section>

    <section class="studio-window" aria-label="Trabajo de estrategia en equipo">
      <div class="container studio-frame" data-reveal>
        <img src="/assets/trabajo-estrategia.jpg" width="1440" height="960" alt="Manos de un equipo trabajando sobre una estrategia digital" loading="lazy">
        <div class="studio-caption"><span>El contexto se comparte</span><p>Ideas, decisiones y ejecución alrededor de la misma mesa.</p></div>
      </div>
    </section>

    <section class="section services-section">
      <div class="container section-heading"><div><span class="eyebrow">Capacidades conectadas</span><h2>Todo empuja en la misma dirección.</h2></div><p>No vendemos piezas por catálogo. Elegimos y coordinamos las disciplinas que necesita el siguiente avance de tu negocio.</p></div>
      <div class="container">${serviceCards()}</div>
    </section>

    <section class="section pulse-section">
      <div class="container pulse-grid">
        <div class="pulse-visual" data-reveal><img src="/assets/bombilla.jpg" width="900" height="1200" alt="Filamento encendido en la oscuridad" loading="lazy"><div class="pulse-caption"><span>Idea</span><span>Decisión</span><span>Ejecución</span><span>Aprendizaje</span></div></div>
        <div class="pulse-copy"><span class="eyebrow">Lo que significa estar cerca</span><h2>No te dejamos a solas con una estrategia.</h2><p class="large-copy">Pensamos contigo, resolvemos contigo y mantenemos el hilo cuando el día a día cambia los planes.</p><ul class="check-list"><li>Hablamos en lenguaje de negocio, no en siglas para impresionar.</li><li>Sabes qué estamos moviendo y por qué.</li><li>Las decisiones no se esconden detrás de un informe.</li><li>Si algo no funciona, lo ponemos encima de la mesa y ajustamos.</li></ul><a class="text-link" href="/nosotros/">Así trabajamos contigo <span aria-hidden="true">↗</span></a></div>
      </div>
    </section>

    <section class="section method-section">
      <div class="container section-heading"><div><span class="eyebrow">Método sin teatro</span><h2>Cuatro movimientos. Ningún cajón.</h2></div><p>Una forma de trabajar diseñada para que las buenas decisiones terminen publicadas, activadas y medidas.</p></div>
      <div class="container method-grid">${principles.map((item) => `<article class="method-step" data-reveal><span>${item.number}</span><h3>${item.title}</h3><p>${item.text}</p></article>`).join("")}</div>
    </section>

    <section class="section audit-preview">
      <div class="container audit-grid">
        <div><span class="eyebrow">Primera conversación con algo útil encima de la mesa</span><h2>Veamos dónde está la siguiente palanca.</h2><p>No empezamos enseñándote un paquete. Empezamos leyendo tu situación y ordenando qué merece atención ahora.</p><a class="button" href="/auditoria-marketing/">Quiero mi mapa de oportunidades <span aria-hidden="true">↗</span></a></div>
        <div class="map-card" data-reveal><div class="map-axis"></div><span class="map-point p1">Mensaje</span><span class="map-point p2">Demanda</span><span class="map-point p3">Conversión</span><span class="map-point p4">Seguimiento</span><div class="map-core">Siguiente<br>movimiento</div></div>
      </div>
    </section>
    ${ctaBand()}`;
  return shell({ path: "/", title: "Agencia de marketing para pymes | La Llave de tu Pyme", description: "Estrategia, web, SEO, publicidad, contenidos y automatización con capacidad de agencia y ritmo de equipo interno.", body, pageClass: "home-page" });
}

export function servicesPage() {
  const body = `
    <section class="page-hero services-hero"><div class="container page-hero-grid"><div><span class="eyebrow">Servicios de marketing digital</span><h1>No necesitas más canales.<br><em>Necesitas que se entiendan.</em></h1></div><div><p class="hero-lead">Reunimos estrategia, creatividad, tecnología y captación para resolver el siguiente problema del negocio, no para llenar una propuesta de líneas.</p><a class="button" href="/contacto/">Ordenar mis prioridades <span aria-hidden="true">↗</span></a></div></div></section>
    <section class="section services-catalogue"><div class="container">${serviceCards()}</div></section>
    <section class="section connection-section"><div class="container connection-grid"><div><span class="eyebrow">Una sola dirección</span><h2>La web habla con las campañas. El SEO habla con el contenido. Los datos vuelven a la estrategia.</h2></div><div class="connection-visual" data-reveal><img src="/assets/servicios-conectados.jpg" width="1440" height="960" alt="Sistema visual que conecta web, búsqueda, publicidad y automatización" loading="lazy"><div class="connection-legend"><span>Descubrir</span><span>Convencer</span><span>Convertir</span><span>Aprender</span></div></div></div></section>
    <section class="section fit-section"><div class="container split-intro"><div><span class="eyebrow">Cómo elegimos</span><h2>El servicio correcto es el que desbloquea lo siguiente.</h2></div><div class="large-copy"><p>Puede que necesites una web. O puede que la web esté bien y el problema sea el mensaje, la demanda o el seguimiento.</p><p>Antes de recomendar una disciplina, buscamos el cuello de botella. Después formamos el equipo alrededor de esa prioridad.</p><a class="text-link" href="/auditoria-marketing/">Trazar mi mapa de oportunidades <span aria-hidden="true">↗</span></a></div></div></section>
    ${ctaBand()}`;
  return shell({ path: "/servicios/", title: "Servicios de marketing digital para pymes | La Llave", description: "Estrategia digital, diseño web, SEO, publicidad, redes sociales y automatización coordinados bajo una misma dirección.", body });
}

export function servicePage(service) {
  const related = services.filter((item) => item.slug !== service.slug).slice(0, 3);
  const body = `
    <section class="page-hero service-hero"><div class="container service-hero-grid"><div><a class="back-link" href="/servicios/">← Todos los servicios</a><span class="eyebrow">${service.number} / ${service.name}</span><h1>${service.hero}</h1><p class="hero-lead">${service.intro}</p><a class="button" href="/contacto/">Hablar de este reto <span aria-hidden="true">↗</span></a></div><div class="service-hero-icon">${icons[service.slug]}<span>${service.number}</span></div></div></section>
    <section class="section service-problem"><div class="container split-intro"><div><span class="eyebrow">El punto de partida</span><h2>Primero entendemos qué está frenando el avance.</h2></div><div class="large-copy"><p>${service.problem}</p><p class="service-fit"><strong>Encaja contigo si:</strong> ${service.fit}</p></div></div></section>
    <section class="section deliverables-section"><div class="container section-heading"><div><span class="eyebrow">Qué ponemos en juego</span><h2>Una capacidad completa, ajustada al problema.</h2></div><p>No todas las fases necesitan el mismo peso. Definimos el alcance después de entender la situación.</p></div><div class="container deliverable-grid">${service.deliverables.map((item, index) => `<article data-reveal><span>${String(index + 1).padStart(2, "0")}</span><h3>${item}</h3></article>`).join("")}</div></section>
    <section class="section outcome-section"><div class="container outcome-panel"><div><span class="eyebrow">Lo que debería cambiar</span><h2>El trabajo se mide por el movimiento que produce.</h2></div><ul>${service.outcomes.map((item) => `<li>${item}</li>`).join("")}</ul></div></section>
    <section class="section working-section"><div class="container section-heading"><div><span class="eyebrow">Cómo avanzamos</span><h2>Con contexto, criterio y conversación.</h2></div></div><div class="container method-grid">${principles.map((item) => `<article class="method-step" data-reveal><span>${item.number}</span><h3>${item.title}</h3><p>${item.text}</p></article>`).join("")}</div></section>
    <section class="section related-section"><div class="container section-heading"><div><span class="eyebrow">Capacidades que suelen conectar</span><h2>Ningún canal trabaja solo.</h2></div></div><div class="container service-grid compact">${related.map((item) => `<a class="service-card" href="${serviceUrl(item)}"><span class="service-number">${item.number}</span><h3>${item.name}</h3><p>${item.line}</p><span class="card-link">Ver servicio ↗</span></a>`).join("")}</div></section>
    ${ctaBand()}`;
  return shell({ path: serviceUrl(service), title: `${service.name} para pymes | La Llave de tu Pyme`, description: `${service.name} para pymes: estrategia y ejecución conectadas con objetivos de negocio, decisiones claras y seguimiento continuo.`, body, schemaType: "Service", schemaExtra: { serviceType: service.name, provider: { "@type": "Organization", name: site.name, url: site.url }, areaServed: "España" } });
}

function leadForm(compact = false, options = {}) {
  const buttonLabel = options.buttonLabel ?? (compact ? "Abrir la conversación" : "Solicitar mi mapa inicial");
  const questionLabel = options.questionLabel ?? "¿Qué quieres mover?";
  const questionPlaceholder = options.questionPlaceholder ?? "Cuéntanos qué está pasando, qué has probado o qué necesitas poner en marcha.";
  return `<form class="lead-form${compact ? " compact-form" : ""}" data-demo-form novalidate>
    <div class="form-row"><label>Tu nombre<input type="text" name="nombre" autocomplete="name" required placeholder="¿Cómo te llamas?"></label><label>Empresa<input type="text" name="empresa" autocomplete="organization" placeholder="¿Cuál es tu empresa?"></label></div>
    <div class="form-row"><label>Correo electrónico<input type="email" name="email" autocomplete="email" required placeholder="tu@empresa.com"></label><label>Teléfono o WhatsApp<input type="tel" name="telefono" autocomplete="tel" required placeholder="600 000 000"></label></div>
    ${compact ? "" : '<label>Página web<input type="url" name="web" autocomplete="url" placeholder="https://tuempresa.com"></label>'}
    <label>${questionLabel}<textarea name="reto" rows="4" required placeholder="${questionPlaceholder}"></textarea></label>
    <label class="consent"><input type="checkbox" name="privacidad" required><span>He leído la información sobre el uso de mis datos y acepto que me contacten para responder a esta solicitud.</span></label>
    <button class="button" type="submit">${buttonLabel} <span aria-hidden="true">↗</span></button>
    <p class="form-note">En esta propuesta local no se envían datos. El formulario queda preparado para conectar el sistema real.</p>
    <div class="form-success" role="status" aria-live="polite" hidden><strong>La estructura funciona.</strong><span>En la web publicada, este punto se conectará con vuestro canal real de contacto.</span></div>
  </form>`;
}

export function auditPage() {
  const faqs = [
    ["¿Es una propuesta comercial disfrazada?", "No. La primera lectura sirve para ordenar la situación y señalar qué moveríamos antes. Si podemos ayudar a ejecutarlo, te explicaremos cómo; si no, también lo diremos."],
    ["¿Tengo que preparar documentación?", "No necesitas un briefing perfecto. Una web, algo de contexto y una conversación honesta suelen ser suficientes para empezar."],
    ["¿Qué áreas podéis revisar?", "Mensaje, web, visibilidad orgánica, campañas, contenidos, recorrido de contacto y continuidad comercial, siempre en función del contexto disponible."],
    ["¿Qué ocurre después?", "Te devolvemos una lectura ordenada: qué vemos, qué priorizaríamos y qué información falta para tomar una decisión mejor."],
  ];
  const body = `
    <section class="audit-hero"><div class="audit-glow" aria-hidden="true"></div><div class="container audit-landing-grid"><div><span class="eyebrow">Mapa inicial de oportunidades</span><h1>Antes de invertir más, encuentra dónde se escapa el avance.</h1><p class="hero-lead">Leemos tu situación, conectamos las piezas y te decimos qué moveríamos primero. Sin una propuesta prefabricada esperando detrás.</p><ul class="hero-checks"><li>Una lectura de negocio, no una lista automática.</li><li>Prioridades explicadas en lenguaje claro.</li><li>Una conversación con personas que pueden ejecutar.</li></ul></div><div class="form-shell"><span class="form-index">01 / Cuéntanos dónde estás</span>${leadForm()}</div></div></section>
    <section class="section what-you-get"><div class="container section-heading"><div><span class="eyebrow">Qué te llevas de esta primera lectura</span><h2>Claridad para decidir el siguiente movimiento.</h2></div><p>No prometemos una auditoría enciclopédica sin contexto. Buscamos una lectura útil que permita decidir.</p></div><div class="container benefit-grid"><article><span>01</span><h3>El cuello de botella</h3><p>Una hipótesis clara sobre el punto que está limitando ahora el rendimiento del conjunto.</p></article><article><span>02</span><h3>Las prioridades</h3><p>Qué abordaríamos primero, qué puede esperar y qué dato necesitamos antes de actuar.</p></article><article><span>03</span><h3>La ruta posible</h3><p>Una secuencia razonable para pasar del diagnóstico a la ejecución sin abrir diez frentes.</p></article></div></section>
    <section class="section map-process"><div class="container split-intro"><div><span class="eyebrow">Cómo ocurre</span><h2>Una conversación. Una lectura. Un siguiente paso.</h2></div><ol class="number-list"><li><span>01</span><div><h3>Nos das contexto</h3><p>Negocio, objetivos, acciones actuales y el punto que más te preocupa.</p></div></li><li><span>02</span><div><h3>Revisamos las señales</h3><p>Mensaje, recorrido, visibilidad, captación y continuidad, según lo que aplique.</p></div></li><li><span>03</span><div><h3>Lo ponemos en orden contigo</h3><p>Te explicamos la lectura, contrastamos dudas y acordamos qué tiene sentido mover.</p></div></li></ol></div></section>
    <section class="section faq-section"><div class="container"><span class="eyebrow">Preguntas antes de empezar</span><h2>Lo que quizá quieras saber.</h2><div class="faq-list">${faqs.map(([q, a]) => `<details><summary>${q}<span>+</span></summary><p>${a}</p></details>`).join("")}</div></div></section>`;
  return shell({ path: "/auditoria-marketing/", title: "Mapa de oportunidades de marketing para pymes | La Llave", description: "Detecta qué está frenando tu marketing y qué mover primero con una lectura estratégica inicial, clara y conectada con tu negocio.", body, pageClass: "audit-page", landing: true });
}

export function conversionLandingPage() {
  const faqs = [
    ["¿Vais a mirar solo las campañas?", "No. Una campaña puede atraer la atención correcta y perderla después. Revisamos el mensaje del anuncio, la página, la medición y el camino hasta el contacto."],
    ["¿Necesito cambiar mi web?", "No necesariamente. Primero identificamos si la fricción está en la propuesta, el recorrido, la página, la campaña o la medición. Solo recomendamos cambiar lo que tenga una razón clara."],
    ["¿Podéis trabajar con campañas que ya están activas?", "Sí. Partimos de lo que existe, de los datos disponibles y de las decisiones tomadas hasta ahora. No hace falta apagarlo todo para empezar a entenderlo."],
    ["¿Qué recibiré después de hablar?", "Una primera lectura de las posibles fugas, las señales que conviene revisar y el orden en el que abordaríamos las mejoras."],
  ];
  const pains = [
    ["01", "El panel parece sano", "Hay clics, impresiones y movimiento, pero cuesta relacionarlos con oportunidades que el equipo comercial valore."],
    ["02", "La web no remata", "El anuncio despierta interés y la página obliga a interpretar demasiado: qué ofrecéis, para quién y por qué actuar ahora."],
    ["03", "Los contactos no encajan", "El volumen llega, pero la intención, el momento o las expectativas no coinciden con lo que el negocio necesita."],
    ["04", "Cada pieza cuenta una historia", "Campañas, web, analítica y comunicación se revisan por separado. Nadie responde del recorrido completo."],
  ];
  const body = `
    <section class="conversion-hero"><div class="container conversion-hero-grid"><div class="conversion-copy"><span class="eyebrow">Diagnóstico de conversión para campañas</span><h1>Hay campañas. Hay visitas. Hay métricas. <em>¿Dónde están las oportunidades?</em></h1><p class="hero-lead">Cuando la inversión se mueve pero el negocio no lo nota, mirar solo la cuenta publicitaria no basta. Conectamos anuncio, mensaje, web, medición y seguimiento para localizar dónde se rompe el interés.</p><a class="button" href="#diagnostico">Quiero localizar las fugas <span aria-hidden="true">↓</span></a><p class="hero-proof">Una lectura completa del recorrido. Sin empezar vendiéndote más inversión.</p></div><figure class="conversion-visual" data-reveal><img src="/assets/landing-conversiones.jpg" width="1440" height="960" alt="Recorrido digital con distintos puntos de contacto y una ruta de conversión destacada"><figcaption><span>Tráfico</span><i></i><span>Interés</span><i></i><span>Contacto</span></figcaption></figure></div></section>

    <section class="section pain-section"><div class="container section-heading"><div><span class="eyebrow">Cuando hacer más ya no es la respuesta</span><h2>La actividad puede esconder una desconexión.</h2></div><p>Si los informes enseñan movimiento pero tú sigues sin tener claro qué está funcionando, el problema no es falta de datos. Es falta de una lectura común.</p></div><div class="container pain-grid">${pains.map(([number, title, text]) => `<article data-reveal><span>${number}</span><h3>${title}</h3><p>${text}</p></article>`).join("")}</div></section>

    <section class="section journey-section"><div class="container split-intro"><div><span class="eyebrow">Una conversión no pertenece a un solo canal</span><h2>No optimizamos una casilla. Revisamos el recorrido.</h2></div><div class="large-copy"><p>El anuncio puede prometer una cosa y la página explicar otra. La web puede convencer y el formulario pedir demasiado. El contacto puede llegar y perderse después.</p><p>Buscamos la desconexión entre piezas para que cada mejora tenga un motivo y una señal que observar.</p></div></div><div class="container journey-line" data-reveal><span>Anuncio<small>La promesa</small></span><i></i><span>Página<small>El argumento</small></span><i></i><span>Contacto<small>La acción</small></span><i></i><span>Seguimiento<small>La continuidad</small></span></div></section>

    <section class="section together-section"><div class="container together-grid"><div class="together-image" data-reveal><img src="/assets/trabajo-estrategia.jpg" width="1440" height="960" alt="Equipo trabajando conjuntamente sobre una estrategia de captación" loading="lazy"></div><div><span class="eyebrow">Una responsabilidad compartida</span><h2>Cuando algo no convierte, no te enviamos de un proveedor a otro.</h2><p class="large-copy">Ponemos campañas, mensaje, web y medición en la misma conversación. Así una mala señal se convierte en una decisión, no en una cadena de correos.</p><ul class="check-list"><li>Prioridades explicadas en lenguaje de negocio.</li><li>Cambios conectados con una hipótesis.</li><li>Ejecución y medición bajo la misma dirección.</li><li>Conversación abierta mientras el trabajo avanza.</li></ul></div></div></section>

    <section class="section conversion-offer" id="diagnostico"><div class="container offer-grid"><div><span class="eyebrow">Mapa inicial de fugas de conversión</span><h2>Descubre qué está frenando el siguiente contacto.</h2><p class="hero-lead">Cuéntanos qué estás invirtiendo, qué resultados ves y dónde empieza la duda. Revisaremos el contexto antes de recomendar más campañas, otra web o cualquier cambio.</p><div class="offer-points"><p><span>01</span>Lectura del recorrido completo</p><p><span>02</span>Hipótesis sobre la fuga principal</p><p><span>03</span>Orden de actuación razonable</p></div></div><div class="form-shell"><span class="form-index">Empecemos por los datos que ya tienes</span>${leadForm(false, { buttonLabel: "Quiero localizar mis fugas", questionLabel: "¿Qué no está convirtiendo como esperabas?", questionPlaceholder: "Cuéntanos qué campañas tienes activas, qué ocurre en la web y qué resultados te están preocupando." })}</div></div></section>

    <section class="section faq-section"><div class="container"><span class="eyebrow">Antes de abrir la conversación</span><h2>Preguntas razonables.</h2><div class="faq-list">${faqs.map(([q, a]) => `<details><summary>${q}<span>+</span></summary><p>${a}</p></details>`).join("")}</div></div></section>`;
  return shell({ path: "/agencia-marketing-conversiones/", title: "Mejora las conversiones de tus campañas | La Llave", description: "Detecta por qué tus campañas, tu web o tu medición no se traducen en oportunidades y qué deberías corregir primero.", body, pageClass: "conversion-page", landing: true, minimalFooter: true });
}

export function aboutPage() {
  const body = `
    <section class="page-hero about-hero"><div class="container page-hero-grid"><div><span class="eyebrow">Cómo trabajamos</span><h1>No somos un proveedor al que poner en copia.</h1></div><div><p class="hero-lead">Nos metemos en el contexto, hacemos preguntas, tomamos responsabilidad sobre el trabajo y mantenemos abierta la conversación mientras las decisiones avanzan.</p><a class="button" href="/contacto/">Conocernos trabajando <span aria-hidden="true">↗</span></a></div></div></section>
    <section class="section belief-section"><div class="container belief-grid"><div class="belief-image" data-reveal><img src="/assets/tierra.jpg" alt="La Tierra vista desde el espacio" width="1800" height="1000" loading="lazy"></div><div><span class="eyebrow">Nuestra forma de verlo</span><h2>El marketing no ocurre fuera del negocio.</h2><p class="large-copy">Ocurre en sus decisiones, en sus límites, en las conversaciones con clientes y en todo lo que cambia mientras el plan estaba escrito.</p><p>Por eso necesitamos estar cerca del contexto. No para multiplicar reuniones, sino para decidir mejor y ejecutar antes.</p></div></div></section>
    <section class="section team-section"><div class="container section-heading"><div><span class="eyebrow">El equipo al otro lado</span><h2>Especialistas distintos. Una conversación compartida.</h2></div><p>No encadenamos departamentos que trabajan a ciegas. Estrategia, diseño, contenidos, captación y tecnología comparten el contexto antes de mover su pieza.</p></div><div class="container">${teamCards()}</div></section>
    <section class="section principles-section"><div class="container section-heading"><div><span class="eyebrow">Principios de trabajo</span><h2>Lo que puedes esperar al otro lado.</h2></div></div><div class="container method-grid">${principles.map((item) => `<article class="method-step" data-reveal><span>${item.number}</span><h3>${item.title}</h3><p>${item.text}</p></article>`).join("")}</div></section>
    <section class="section no-list-section"><div class="container no-list-grid"><div><span class="eyebrow">También importa lo que no hacemos</span><h2>Sin humo. Sin distancia. Sin piloto automático.</h2></div><ul class="cross-list"><li>No llenamos calendarios con tareas que nadie puede relacionar con un objetivo.</li><li>No convertimos una duda en una cadena de tickets.</li><li>No escondemos una mala señal hasta el informe del mes.</li><li>No recomendamos un canal porque venga dentro del paquete.</li></ul></div></section>
    <section class="section agency-scale"><div class="container statement"><span>Profundidad para pensar.</span><span>Manos para ejecutar.</span><span>Cercanía para decidir.</span></div></section>
    ${ctaBand()}`;
  return shell({ path: "/nosotros/", title: "Cómo trabajamos | La Llave de tu Pyme", description: "Una agencia que trabaja dentro del contexto: estrategia, ejecución y conversación continua para que el marketing avance.", body });
}

export function contactPage() {
  const body = `
    <section class="contact-hero"><div class="container contact-grid"><div><span class="eyebrow">Abramos la conversación</span><h1>No hace falta llegar con todas las respuestas.</h1><p class="hero-lead">Dinos qué quieres poner en marcha, qué te preocupa o qué lleva demasiado tiempo atascado. Empezaremos por entenderlo.</p><div class="contact-promises"><p><span>01</span>Te responderá una persona que entiende de estrategia y ejecución.</p><p><span>02</span>No recibirás un paquete automático antes de hablar.</p><p><span>03</span>Si no somos el equipo adecuado, te lo diremos con claridad.</p></div></div><div class="form-shell"><span class="form-index">Cuéntanos lo importante</span>${leadForm(true)}</div></div></section>`;
  return shell({ path: "/contacto/", title: "Contacto | La Llave de tu Pyme", description: "Cuéntanos qué quieres mover en tu marketing. Empezamos por una conversación clara sobre tu negocio y el siguiente paso.", body, pageClass: "contact-page" });
}

export function thanksPage() {
  const body = `<section class="thanks-section"><div class="thanks-key" aria-hidden="true">⌁</div><div class="container"><span class="eyebrow">Conversación abierta</span><h1>Gracias. Ya tenemos por dónde empezar.</h1><p class="hero-lead">En la versión publicada, este mensaje confirmará que la solicitud ha llegado correctamente.</p><a class="button" href="/">Volver al inicio <span aria-hidden="true">↗</span></a></div></section>`;
  return shell({ path: "/gracias/", title: "Gracias | La Llave de tu Pyme", description: "Confirmación de contacto con La Llave de tu Pyme.", body, noindex: true, landing: true });
}
