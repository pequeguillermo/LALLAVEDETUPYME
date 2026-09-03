import { cpSync, mkdirSync, rmSync, writeFileSync } from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";
import { services } from "../src/content.mjs";
import { aboutPage, auditPage, contactPage, conversionLandingPage, homePage, servicePage, servicesPage, thanksPage } from "../src/templates.mjs";

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), "..");
const output = path.resolve(root, "dist");
if (path.dirname(output) !== root || path.basename(output) !== "dist") {
  throw new Error("La carpeta de salida no es segura.");
}
rmSync(output, { recursive: true, force: true });
mkdirSync(output, { recursive: true });
cpSync(path.join(root, "public"), output, { recursive: true });

const pages = [
  { route: "/", html: homePage(), indexable: true },
  { route: "/servicios/", html: servicesPage(), indexable: true },
  ...services.map((service) => ({ route: `/servicios/${service.slug}/`, html: servicePage(service), indexable: true })),
  { route: "/auditoria-marketing/", html: auditPage(), indexable: true },
  { route: "/agencia-marketing-conversiones/", html: conversionLandingPage(), indexable: true },
  { route: "/nosotros/", html: aboutPage(), indexable: true },
  { route: "/contacto/", html: contactPage(), indexable: true },
  { route: "/gracias/", html: thanksPage(), indexable: false },
];

for (const page of pages) {
  const directory = page.route === "/" ? output : path.join(output, page.route.slice(1));
  mkdirSync(directory, { recursive: true });
  writeFileSync(path.join(directory, "index.html"), page.html, "utf8");
}

const sitemap = `<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
${pages.filter((page) => page.indexable).map((page) => `  <url><loc>https://lallavedetupyme.com${page.route}</loc></url>`).join("\n")}
</urlset>
`;
writeFileSync(path.join(output, "sitemap.xml"), sitemap, "utf8");

console.log(`Sitio compilado: ${pages.length} páginas, ${pages.filter((page) => page.indexable).length} indexables.`);
