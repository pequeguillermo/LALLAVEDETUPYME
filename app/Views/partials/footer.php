<?php

declare(strict_types=1);

/**
 * Plantilla genérica de pie de página (<footer>, WhatsApp y cierre)
 *
 * Variables esperadas:
 * @var string|null $footerType Tipo de pie ('standard' [defecto], 'conversion', 'minimal', 'none')
 * @var bool|null $showWhatsapp Si se debe mostrar el botón flotante de WhatsApp (por defecto true, false para 404)
 */

$type = $footerType ?? 'standard';
$displayWhatsapp = $showWhatsapp ?? ($type !== 'none');
?>
<?php if ($type === 'conversion'): ?>
  <footer class="conversion-footer">
    <div class="container">
      <img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme">
      <a class="footer-email" href="mailto:info@lallavedetupyme.com">info@lallavedetupyme.com</a>
      <span class="footer-legal"><a href="/aviso-legal/">Aviso legal</a><a href="/politica-de-privacidad/">Privacidad</a><a href="/politica-de-cookies/">Cookies</a></span>
    </div>
  </footer>
<?php elseif ($type === 'minimal'): ?>
  <footer class="site-footer">
    <div class="container footer-bottom">
      <span>© 2026 La Llave de tu Pyme</span>
      <span class="footer-legal"><a href="/aviso-legal/">Aviso legal</a><a href="/politica-de-privacidad/">Privacidad</a><a href="/politica-de-cookies/">Cookies</a></span>
    </div>
  </footer>
<?php elseif ($type !== 'none'): ?>
  <footer class="site-footer">
    <div class="container footer-grid">
      <div class="footer-brand">
        <img src="/assets/logo-la-llave.png" width="168" height="64" alt="La Llave de tu Pyme">
        <p>Capacidad de agencia.<br>Ritmo de equipo interno.</p>
        <a class="footer-email" href="mailto:info@lallavedetupyme.com">info@lallavedetupyme.com</a>
      </div>
      <div>
        <p class="footer-label">Servicios</p>
        <a href="/servicios/estrategia-digital/">Estrategia digital</a>
        <a href="/servicios/diseno-web/">Diseño web</a>
        <a href="/servicios/posicionamiento-seo/">Posicionamiento SEO</a>
        <a href="/servicios/publicidad-digital/">Publicidad digital</a>
        <a href="/servicios/redes-sociales/">Redes y contenidos</a>
        <a href="/servicios/automatizacion-y-funnels/">Automatización y funnels</a>
      </div>
      <div>
        <p class="footer-label">Agencia</p>
        <a href="/nosotros/">Cómo trabajamos</a>
        <a href="/auditoria-marketing/">Mapa de oportunidades</a>
        <a href="/agencia-marketing-conversiones/">Landing de conversión</a>
        <a href="/blog/">Ideas</a>
        <a href="/contacto/">Contacto</a>
      </div>
      <div class="footer-close">
        <p class="footer-label">Hay algo que mover</p>
        <p>No hace falta tener el briefing perfecto. Empezamos por una conversación clara.</p>
        <a class="text-link" href="/contacto/">Cuéntanos dónde estás <span aria-hidden="true">↗</span></a>
      </div>
    </div>
    <div class="container footer-bottom">
      <span>© 2026 La Llave de tu Pyme</span>
      <span class="footer-legal"><a href="/aviso-legal/">Aviso legal</a><a href="/politica-de-privacidad/">Privacidad</a><a href="/politica-de-cookies/">Cookies</a></span>
    </div>
  </footer>
<?php endif; ?>

<?php if ($displayWhatsapp): ?>
  <a class="whatsapp-float" href="https://wa.me/34611458493?text=Hola%2C%20quiero%20hablar%20sobre%20el%20marketing%20de%20mi%20empresa." target="_blank" rel="noopener noreferrer" aria-label="Hablar con La Llave de tu Pyme por WhatsApp">
    <span class="whatsapp-icon" aria-hidden="true"><svg viewBox="0 0 32 32"><path d="M16 4a11 11 0 0 0-9.5 16.5L5 27l6.7-1.4A11 11 0 1 0 16 4Z"/><path d="M12.2 10.4c.4-.3.8-.2 1 .3l1.1 2.5c.2.4.1.7-.2 1l-.8.8c1 2.1 2.5 3.6 4.7 4.6l.8-.9c.3-.3.7-.4 1-.2l2.4 1.2c.5.2.6.6.4 1-.6 1.5-1.8 2.3-3.3 2.2-5.3-.5-9.7-4.8-10.1-10.1-.1-1.1.8-2 3-2.4Z"/></svg></span>
    <span><small>Estamos al otro lado</small><strong><span class="wa-desktop-label">Hablemos por WhatsApp</span><span class="wa-mobile-label">WhatsApp</span></strong></span>
  </a>
<?php endif; ?>

<?php if ($type !== 'none'): ?>
  <script src="/app.js?v=20260904-2" defer></script>
<?php endif; ?>
</body>
</html>
