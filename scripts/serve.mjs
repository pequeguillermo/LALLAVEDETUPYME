import { createReadStream, existsSync, statSync } from "node:fs";
import { createServer } from "node:http";
import path from "node:path";
import { fileURLToPath } from "node:url";

const root = path.resolve(path.dirname(fileURLToPath(import.meta.url)), "..", "dist");
const portValue = Number(process.env.PORT ?? "4173");
const port = Number.isInteger(portValue) && portValue > 0 && portValue < 65536 ? portValue : 4173;
const mime = {
  ".css": "text/css; charset=utf-8",
  ".html": "text/html; charset=utf-8",
  ".jpg": "image/jpeg",
  ".js": "text/javascript; charset=utf-8",
  ".json": "application/json; charset=utf-8",
  ".png": "image/png",
  ".txt": "text/plain; charset=utf-8",
  ".webmanifest": "application/manifest+json",
  ".xml": "application/xml; charset=utf-8",
};

createServer((request, response) => {
  const pathname = decodeURIComponent(new URL(request.url ?? "/", `http://${request.headers.host ?? "localhost"}`).pathname);
  let target = path.resolve(root, `.${pathname}`);
  if (!target.startsWith(`${root}${path.sep}`) && target !== root) {
    response.writeHead(403).end("Acceso no permitido.");
    return;
  }
  if (existsSync(target) && statSync(target).isDirectory()) target = path.join(target, "index.html");
  if (!existsSync(target) && !path.extname(target)) target = path.join(target, "index.html");
  if (!existsSync(target) || !statSync(target).isFile()) {
    response.writeHead(404, { "Content-Type": "text/plain; charset=utf-8" }).end("Página no encontrada.");
    return;
  }
  response.writeHead(200, {
    "Content-Type": mime[path.extname(target)] ?? "application/octet-stream",
    "Cache-Control": path.extname(target) === ".html" ? "no-cache" : "public, max-age=3600",
  });
  createReadStream(target).pipe(response);
}).listen(port, "0.0.0.0", () => {
  console.log(`La Llave de tu Pyme disponible en http://localhost:${port}`);
});
