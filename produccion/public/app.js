const analyticsId = "GT-WRGZMMBM";
const consentStorageKey = "llave_cookie_consent";
const leadStorageKey = "llave_form_success";

function readConsent() {
  try { return window.localStorage.getItem(consentStorageKey); }
  catch { return null; }
}

function storeConsent(value) {
  try { window.localStorage.setItem(consentStorageKey, value); }
  catch { /* La navegación sigue funcionando aunque el almacenamiento esté bloqueado. */ }
}

function trackConfirmedLead() {
  if (window.location.pathname !== "/gracias/") return;
  try {
    if (window.sessionStorage.getItem(leadStorageKey) !== "1") return;
    window.gtag?.("event", "generate_lead", { form_destination: "contacto_web" });
    window.sessionStorage.removeItem(leadStorageKey);
  } catch { /* No bloqueamos la confirmación si el navegador limita el almacenamiento. */ }
}

function loadAnalytics() {
  if (document.querySelector(`script[data-analytics-id="${analyticsId}"]`)) {
    trackConfirmedLead();
    return;
  }
  window.dataLayer = window.dataLayer || [];
  window.gtag = function gtag() { window.dataLayer.push(arguments); };
  window.gtag("js", new Date());
  window.gtag("config", analyticsId, { anonymize_ip: true });
  const script = document.createElement("script");
  script.async = true;
  script.src = `https://www.googletagmanager.com/gtag/js?id=${encodeURIComponent(analyticsId)}`;
  script.dataset.analyticsId = analyticsId;
  document.head.appendChild(script);
  trackConfirmedLead();
}

function showCookieNotice() {
  if (document.querySelector(".cookie-notice")) return;
  const notice = document.createElement("section");
  notice.className = "cookie-notice";
  notice.setAttribute("aria-label", "Preferencias de cookies");
  notice.innerHTML = `<div><strong>Tu elección, sin letra pequeña.</strong><p>Usamos analítica sólo si la aceptas para saber qué páginas ayudan a generar conversaciones. Puedes continuar sin ella.</p><a href="/politica-de-cookies/">Ver política de cookies</a></div><div class="cookie-actions"><button type="button" data-cookie-choice="reject">Rechazar</button><button type="button" data-cookie-choice="accept">Aceptar</button></div>`;
  document.body.appendChild(notice);
  notice.querySelectorAll("[data-cookie-choice]").forEach((button) => {
    button.addEventListener("click", () => {
      const choice = button.dataset.cookieChoice;
      storeConsent(choice);
      notice.remove();
      if (choice === "accept") loadAnalytics();
    });
  });
}

if (readConsent() === "accept") loadAnalytics();
else if (readConsent() !== "reject") showCookieNotice();

document.querySelectorAll("[data-cookie-settings]").forEach((button) => {
  button.addEventListener("click", () => {
    try { window.localStorage.removeItem(consentStorageKey); } catch { /* Sin efecto. */ }
    showCookieNotice();
  });
});

const navToggle = document.querySelector(".nav-toggle");
const mainNav = document.querySelector(".main-nav");

navToggle?.addEventListener("click", () => {
  const open = navToggle.getAttribute("aria-expanded") !== "true";
  navToggle.setAttribute("aria-expanded", String(open));
  mainNav?.classList.toggle("is-open", open);
});

mainNav?.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    navToggle?.setAttribute("aria-expanded", "false");
    mainNav.classList.remove("is-open");
  });
});

const revealElements = document.querySelectorAll("[data-reveal]");
if ("IntersectionObserver" in window && !window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add("is-visible");
      observer.unobserve(entry.target);
    });
  }, { threshold: 0.12 });
  revealElements.forEach((element) => revealObserver.observe(element));
} else {
  revealElements.forEach((element) => element.classList.add("is-visible"));
}

const pointerGlow = document.querySelector(".pointer-glow");
if (pointerGlow && window.matchMedia("(pointer: fine)").matches) {
  window.addEventListener("pointermove", (event) => {
    pointerGlow.style.left = `${event.clientX}px`;
    pointerGlow.style.top = `${event.clientY}px`;
  }, { passive: true });
} else if (pointerGlow) {
  pointerGlow.remove();
}

document.querySelectorAll("[data-contact-form]").forEach((form) => {
  const feedback = form.querySelector(".form-feedback");
  const submitButton = form.querySelector('button[type="submit"]');
  const originalButtonContent = submitButton?.innerHTML;

  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    const fields = [...form.querySelectorAll("input, textarea, select")];
    fields.forEach((field) => {
      if (field.checkValidity()) field.removeAttribute("aria-invalid");
      else field.setAttribute("aria-invalid", "true");
    });
    const firstInvalid = fields.find((field) => !field.checkValidity());
    if (firstInvalid) {
      firstInvalid.focus();
      return;
    }

    if (feedback) {
      feedback.hidden = true;
      feedback.classList.remove("is-error");
    }
    if (submitButton) {
      submitButton.disabled = true;
      submitButton.textContent = "Enviando…";
    }

    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: new FormData(form),
        headers: { Accept: "application/json" },
      });
      const data = await response.json().catch(() => ({}));
      if (!response.ok) throw new Error(data.message || "No hemos podido enviar tu solicitud.");
      try { window.sessionStorage.setItem(leadStorageKey, "1"); } catch { /* Sin efecto. */ }
      window.location.assign("/gracias/");
    } catch (error) {
      if (feedback) {
        feedback.textContent = error instanceof Error ? error.message : "No hemos podido enviar tu solicitud.";
        feedback.classList.add("is-error");
        feedback.hidden = false;
        feedback.scrollIntoView({ behavior: "smooth", block: "nearest" });
      }
      if (submitButton) {
        submitButton.disabled = false;
        submitButton.innerHTML = originalButtonContent;
      }
    }
  });
  form.addEventListener("input", (event) => {
    event.target.removeAttribute("aria-invalid");
    if (feedback) feedback.hidden = true;
  });
});

const conversionForm = document.querySelector(".conversion-page #diagnostico");
if (conversionForm && "IntersectionObserver" in window) {
  const formObserver = new IntersectionObserver(([entry]) => {
    document.body.classList.toggle("form-in-view", entry.isIntersecting);
  }, { threshold: 0.08 });
  formObserver.observe(conversionForm);
}
