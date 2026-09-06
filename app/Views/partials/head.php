<?php

declare(strict_types=1);

/**
 * Plantilla genérica de cabecera técnica (<head> y apertura de body)
 *
 * Variables esperadas:
 * @var string $title Título de la página
 * @var string|null $description Meta descripción
 * @var string|null $robots Directiva de indexación (por defecto 'index,follow')
 * @var string|null $canonical URL canónica
 * @var string|null $ogImage Imagen para Open Graph
 * @var string|null $schemaJson JSON-LD estructurado
 * @var string|null $headExtra Código adicional para el head (ej: eventos específicos de conversión)
 * @var string|null $bodyClass Clases para la etiqueta body
 */

$metaRobots = $robots ?? 'index,follow';
$canonicalUrl = $canonical ?? 'https://lallavedetupyme.com/';
$imageOg = $ogImage ?? 'https://lallavedetupyme.com/assets/tierra.jpg';
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
<?php if (!empty($description)): ?>
  <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
  <meta name="robots" content="<?= htmlspecialchars($metaRobots, ENT_QUOTES, 'UTF-8') ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:locale" content="es_ES">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
<?php if (!empty($description)): ?>
  <meta property="og:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
<?php endif; ?>
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="<?= htmlspecialchars($imageOg, ENT_QUOTES, 'UTF-8') ?>">
  <meta name="theme-color" content="#080808">
  <link rel="icon" href="/assets/logo-la-llave.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="/styles.css?v=20260904-7">
<?php if (!empty($schemaJson)): ?>
  <script type="application/ld+json"><?= $schemaJson ?></script>
<?php endif; ?>

  <!-- Píxeles y analítica globales -->
  <!-- OpenAI / ChatGPT Ads Pixel -->
  <script>!function(w,d,s,u){if(w.oaiq)return;var q=function(){q.q.push(arguments)};q.q=[];w.oaiq=q;var j=d.createElement(s);j.async=1;j.src=u;var f=d.getElementsByTagName(s)[0];f.parentNode.insertBefore(j,f)}(window,document,"script","https://bzrcdn.openai.com/sdk/oaiq.min.js");oaiq("init",{pixelId:"2atj5meVpvtJ5kCtqhG3yX",debug:true});</script>
<?= $headExtra ?? '' ?>
</head>
<body class="<?= htmlspecialchars($bodyClass ?? '', ENT_QUOTES, 'UTF-8') ?>">
  <a class="skip-link" href="#contenido">Ir al contenido</a>
  <div class="grain" aria-hidden="true"></div>
  <div class="pointer-glow" aria-hidden="true"></div>
