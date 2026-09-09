<?php
$title = 'Contacto | La Llave de tu Pyme';
$description = 'Cuéntanos qué quieres mover en tu marketing. Empezamos por una conversación clara sobre tu negocio y el siguiente paso.';
$canonical = 'https://lallavedetupyme.com/contacto/';
$bodyClass = 'contact-page';
$schemaJson = '[{"@context":"https://schema.org","@type":"Organization","name":"La Llave de tu Pyme","url":"https://lallavedetupyme.com","logo":"https://lallavedetupyme.com/assets/logo-la-llave.png","description":"Agencia de marketing digital para pymes: estrategia, web, SEO, publicidad, contenidos y automatización bajo una misma dirección."},{"@context":"https://schema.org","@type":"WebPage","name":"Contacto | La Llave de tu Pyme","url":"https://lallavedetupyme.com/contacto/"}]';
require dirname(__DIR__) . '/partials/head.php';
require dirname(__DIR__) . '/partials/header.php';
?>
<main id="contenido">
    <section class="contact-hero"><div class="container contact-grid"><div><span class="eyebrow">Abramos la conversación</span><h1>No hace falta llegar con todas las respuestas.</h1><p class="hero-lead">Dinos qué quieres poner en marcha, qué te preocupa o qué lleva demasiado tiempo atascado. Empezaremos por entenderlo.</p><p><a class="text-link" href="mailto:info@lallavedetupyme.com">info@lallavedetupyme.com <span aria-hidden="true">↗</span></a></p><div class="contact-promises"><p><span>01</span>Te responderá una persona que entiende de estrategia y ejecución.</p><p><span>02</span>No recibirás un paquete automático antes de hablar.</p><p><span>03</span>Si no somos el equipo adecuado, te lo diremos con claridad.</p></div></div><div class="form-shell"><span class="form-index">Cuéntanos lo importante</span><form class="lead-form compact-form" action="/enviar-contacto.php" method="post" data-contact-form><input type="hidden" name="submission_token" value="<?= htmlspecialchars($_SESSION['form_token'], ENT_QUOTES, 'UTF-8') ?>">
    <input type="hidden" name="origen" value="Contacto">
    <label class="field-honeypot" aria-hidden="true">No rellenes este campo<input type="text" name="sitio_web" tabindex="-1" autocomplete="off"></label>
    <div class="form-row"><label>Tu nombre<input type="text" name="nombre" autocomplete="name" required placeholder="¿Cómo te llamas?"></label><label>Empresa<input type="text" name="empresa" autocomplete="organization" placeholder="¿Cuál es tu empresa?"></label></div>
    <div class="form-row"><label>Correo electrónico<input type="email" name="email" autocomplete="email" required placeholder="tu@empresa.com"></label><label>Teléfono o WhatsApp<input type="tel" name="telefono" autocomplete="tel" required placeholder="600 000 000"></label></div>
    
    <label>¿Qué quieres mover?<textarea name="reto" rows="4" required placeholder="Cuéntanos qué está pasando, qué has probado o qué necesitas poner en marcha."></textarea></label>
    <p class="privacy-summary"><strong>Protección de datos:</strong> Ideas Imaginativas tratará tus datos para responder a tu solicitud, con tu consentimiento. No los cederemos salvo obligación legal o proveedores necesarios. Puedes ejercer tus derechos escribiendo a info@lallavedetupyme.com. <a href="/politica-de-privacidad/" target="_blank">Más información</a>.</p>
    <label class="consent"><input type="checkbox" name="privacidad" value="1" required><span>He leído la información sobre protección de datos y acepto que me contacten para responder a esta solicitud.</span></label>
    <button class="button" type="submit">Abrir la conversación <span aria-hidden="true">↗</span></button>
    <p class="form-note">Te responderemos para entender el contexto. No añadiremos tu correo a una lista comercial.</p>
    <div class="form-feedback" role="alert" aria-live="assertive" hidden></div>
  </form></div></div></section></main>
<?php
require dirname(__DIR__) . '/partials/footer.php';
