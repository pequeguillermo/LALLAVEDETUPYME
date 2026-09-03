import { existsSync, readFileSync, readdirSync, statSync } from "node:fs";
import path from "node:path";
import { fileURLToPath } from "node:url";

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), "..", "dist");
if (!existsSync(root)) throw new Error("Compila el sitio antes de comprobarlo.");

function walk(directory) {
  return readdirSync(directory).flatMap((name) => {
    const target = path.join(directory, name);
    return statSync(target).isDirectory() ? walk(target) : [target];
  });
}

const htmlFiles = walk(root).filter((file) => file.endsWith(".html"));
const failures = [];
for (const file of htmlFiles) {
  const html = readFileSync(file, "utf8");
  const relative = path.relative(root, file);
  const h1s = html.match(/<h1[\s>]/g) ?? [];
  if (h1s.length !== 1) failures.push(`${relative}: contiene ${h1s.length} H1.`);
  if (!/<html lang="es">/.test(html)) failures.push(`${relative}: falta lang=es.`);
  if (!/<meta name="description" content="[^"]+">/.test(html)) failures.push(`${relative}: falta descripción.`);
  if (!/<link rel="canonical" href="https:\/\/lallavedetupyme\.com\//.test(html)) failures.push(`${relative}: falta canonical.`);
  if (/atención personalizada|100\s*%\s*personalizad/i.test(html)) failures.push(`${relative}: contiene una expresión de marca descartada.`);

  for (const match of html.matchAll(/(?:href|src)="(\/[^"]+)"/g)) {
    const url = match[1].split("#")[0].split("?")[0];
    if (!url || url === "/") continue;
    let target = path.resolve(root, `.${url}`);
    if (url.endsWith("/")) target = path.join(target, "index.html");
    if (!existsSync(target)) failures.push(`${relative}: el recurso ${url} no existe.`);
  }
}

const sitemap = readFileSync(path.join(root, "sitemap.xml"), "utf8");
if (sitemap.includes("/gracias/")) failures.push("sitemap.xml incluye la página de gracias.");
if (!readFileSync(path.join(root, "gracias", "index.html"), "utf8").includes('content="noindex,follow"')) failures.push("La página de gracias no está en noindex.");

if (failures.length) throw new Error(`Comprobación fallida:\n- ${failures.join("\n- ")}`);
console.log(`Comprobación correcta: ${htmlFiles.length} páginas, enlaces internos, recursos, canonicals, H1 y noindex verificados.`);
