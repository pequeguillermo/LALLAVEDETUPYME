<?php

declare(strict_types=1);

use App\Services\ContactMailer;
use App\Services\OpenAiAdsTracker;
use App\Services\ConversionStore;
require_once dirname(__DIR__) . '/app/bootstrap.php';

header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');

$wantsJson = str_contains(strtolower((string) ($_SERVER['HTTP_ACCEPT'] ?? '')), 'application/json');

function respond(int $status, string $message, bool $wantsJson): never
{
    http_response_code($status);
    if ($wantsJson) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['message' => $message], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    } elseif ($status >= 200 && $status < 300) {
        header('Location: /gracias/', true, 303);
    } else {
        header('Content-Type: text/html; charset=utf-8');
        echo '<!doctype html><html lang="es"><meta charset="utf-8"><meta name="viewport" content="width=device-width"><title>No se ha podido enviar</title><body><main><h1>No se ha podido enviar</h1><p>'
            . htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')
            . '</p><p><a href="javascript:history.back()">Volver al formulario</a></p></main></body></html>';
    }
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    respond(405, 'Método no permitido.', $wantsJson);
}

if (!empty($_POST['sitio_web'] ?? '')) {
    respond(200, 'Solicitud recibida.', $wantsJson);
}

$rawToken = is_string($_POST['submission_token'] ?? null) ? $_POST['submission_token'] : '';
$token = hash('sha256', session_id() . ':' . $rawToken);
$config = require dirname(__DIR__) . '/config/app.php';
try {
    $store = new ConversionStore($config['openai_ads']['database']);
    $previous = $store->find($token);
    if ($previous !== null && !in_array($previous['status'], ['receiving', 'mail_failed'], true)) {
        respond(200, 'Solicitud ya recibida.', $wantsJson);
    }
    if ($previous !== null && $previous['status'] === 'receiving') {
        respond(409, 'Tu solicitud está guardada y pendiente de confirmar. Escríbenos si no recibes respuesta.', $wantsJson);
    }
} catch (Throwable) {
    respond(503, 'No hemos podido guardar tu solicitud. Inténtalo de nuevo en unos minutos.', $wantsJson);
}
if ($rawToken === '' || !hash_equals($_SESSION['form_token'], $rawToken)) {
    respond(419, 'La sesión del formulario ha caducado. Recarga la página.', $wantsJson);
}
$lastSubmission = (int) ($_SESSION['last_contact_submission'] ?? 0);
if ($lastSubmission > 0 && time() - $lastSubmission < 30) {
    respond(429, 'Espera unos segundos antes de enviar otra solicitud.', $wantsJson);
}
foreach ($_POST as $field) {
    if (!is_string($field)) respond(422, 'El formulario no es válido.', $wantsJson);
}
$value = static fn (string $key): string => trim((string) ($_POST[$key] ?? ''));
$name = $value('nombre');
$company = $value('empresa');
$email = $value('email');
$phone = $value('telefono');
$website = $value('web');
$blocker = $value('bloqueo');
$challenge = $value('reto');
$origin = $value('origen');

if ($name === '' || $email === '' || ($challenge === '' && $blocker === '') || empty($_POST['privacidad'])) {
    respond(422, 'Revisa los campos obligatorios y acepta la política de privacidad.', $wantsJson);
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(422, 'Introduce un correo electrónico válido.', $wantsJson);
}
if ($phone !== '' && !preg_match('/^[0-9+() .-]{7,30}$/', $phone)) {
    respond(422, 'Introduce un teléfono válido.', $wantsJson);
}
if ($website !== '' && !filter_var($website, FILTER_VALIDATE_URL)) {
    respond(422, 'Introduce una dirección web completa, por ejemplo https://tuempresa.com.', $wantsJson);
}

$limits = [
    'nombre' => [$name, 100],
    'empresa' => [$company, 150],
    'email' => [$email, 190],
    'telefono' => [$phone, 30],
    'web' => [$website, 300],
    'bloqueo' => [$blocker, 180],
    'reto' => [$challenge, 3000],
    'origen' => [$origin, 120],
];
foreach ($limits as [$field, $limit]) {
    if (strlen($field) > $limit) {
        respond(422, 'Alguno de los campos es demasiado largo.', $wantsJson);
    }
}

$safe = static fn (string $text): string => htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$row = static fn (string $label, string $text): string => $text === '' ? '' : '<p><strong>' . $label . ':</strong> ' . $safe($text) . '</p>';
$html = '<!doctype html><html lang="es"><body style="margin:0;background:#f3f0e9;font-family:Arial,sans-serif;color:#101010">'
    . '<div style="max-width:680px;margin:30px auto;background:#fff;border:1px solid #ded8cc">'
    . '<div style="background:#080808;color:#fff;padding:24px 30px"><h1 style="margin:0;font-size:22px">Nueva solicitud desde La Llave de tu Pyme</h1></div>'
    . '<div style="padding:28px 30px">'
    . $row('Nombre', $name) . $row('Empresa', $company) . $row('Correo', $email) . $row('Teléfono', $phone)
    . $row('Web', $website) . $row('Bloqueo principal', $blocker) . $row('Origen', $origin)
    . '<p><strong>Fecha:</strong> ' . date('d/m/Y H:i') . '</p>'
    . ($challenge === '' ? '' : '<h2 style="font-size:17px;margin-top:25px">Contexto</h2><div style="background:#fff4ec;border-left:4px solid #ff5c1a;padding:16px;white-space:pre-wrap">' . $safe($challenge) . '</div>')
    . '<p style="font-size:12px;color:#666;margin-top:25px">La persona ha aceptado la política de privacidad para recibir respuesta a esta solicitud.</p>'
    . '</div></div></body></html>';

$consented = ($_POST['measurement_consent'] ?? '') === 'accept'
    && ($_COOKIE['llave_cookie_consent'] ?? '') === 'accept';
$reference = static fn (mixed $v): ?string => is_string($v) && $v !== '' && strlen($v) <= 4096 && mb_check_encoding($v, 'UTF-8') ? $v : null;
$id = $previous['id'] ?? ConversionStore::uuid();
$timestamp = $previous ? (int) $previous['timestamp_ms'] : (int) floor(microtime(true) * 1000);
$event = $consented ? OpenAiAdsTracker::event($id, $timestamp, $email,
    $reference($_POST['oppref'] ?? null), $reference($_COOKIE['__obref'] ?? null)) : null;
try {
    if ($previous === null) {
        $store->save($token, compact('name', 'company', 'email', 'phone', 'website', 'blocker', 'challenge', 'origin'), $event, $id, $timestamp);
    } else {
        // Un fallo explícito de correo permite reintentar con el mismo UUID y fecha.
        $q = $store->db->prepare("UPDATE submissions SET status='receiving', event=? WHERE token=?");
        $q->execute([$event ? json_encode($event, JSON_THROW_ON_ERROR) : null, $token]);
    }
} catch (Throwable) {
    respond(503, 'No hemos podido guardar tu solicitud. Inténtalo de nuevo.', $wantsJson);
}
try {
    $mailer = new ContactMailer($config['mail'] ?? [], dirname(__DIR__) . '/storage/logs/contactos-local.log');
    $mailer->send('Nueva solicitud web · ' . $name, $html, $email);
} catch (Throwable) {
    $q = $store->db->prepare("UPDATE submissions SET status='mail_failed' WHERE token=?");
    $q->execute([$token]);
    respond(502, 'No hemos podido enviar tu solicitud ahora. Inténtalo de nuevo o escríbenos por WhatsApp al +34 611 458 493.', $wantsJson);
}
try {
    $store->confirm($token, ($config['mail']['transport'] ?? '') === 'log');
} catch (Throwable) {
    // El contacto ya está persistido y el correo aceptado; nunca reenviar automáticamente.
    $consented = false;
    error_log('Formulario: confirmación persistente pendiente de revisión.');
}
$_SESSION['last_contact_submission'] = time();
$_SESSION['submission_tokens'][] = $token;
$_SESSION['confirmation'] = ['eventId' => $id, 'consented' => $consented, 'expires' => time() + 600];
$_SESSION['form_token'] = bin2hex(random_bytes(32));
respond(200, 'Gracias. Hemos recibido tu solicitud.', $wantsJson);
