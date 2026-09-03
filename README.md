# La Llave de tu Pyme

Propuesta estática de la nueva web de la agencia, preparada para revisión local y despliegue mediante Coolify.

## Desarrollo local

Requiere Node.js 22 o superior.

```bash
npm run build
npm start
```

La web queda disponible en `http://localhost:4173`.

## Comprobaciones

```bash
npm run check
```

La comprobación valida páginas, H1, metadatos, canonicals, enlaces internos, recursos y la exclusión de la página de gracias del índice.

## Despliegue en Coolify

El repositorio incluye un `Dockerfile` que compila el sitio y lo sirve con Node. En Coolify puede desplegarse directamente desde el repositorio de GitHub usando el puerto `4173`.

Antes de publicar deben conectarse los formularios al canal real de captación e incorporarse los textos legales con los datos fiscales correctos de la empresa.
