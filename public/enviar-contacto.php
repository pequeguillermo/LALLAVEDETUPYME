<?php

declare(strict_types=1);

use App\Services\ContactMailer;
use App\Services\OpenAiAdsTracker;

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

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_name('llave_contacto');
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'secure' => !empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off',
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

if (!empty($_POST['sitio_web'] ?? '')) {
    respond(200, 'Solicitud recibida.', $wantsJson);
}

$lastSubmission = (int) ($_SESSION['last_contact_submission'] ?? 0);
if ($lastSubmission > 0 && time() - $lastSubmission < 30) {
    respond(429, 'Espera unos segundos antes de enviar otra solicitud.', $wantsJson);
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

$config = require dirname(__DIR__) . '/config/app.php';
require dirname(__DIR__) . '/app/Services/ContactMailer.php';

try {
    $mailer = new ContactMailer($config['mail'] ?? [], dirname(__DIR__) . '/storage/logs/contactos-local.log');
    $mailer->send('Nueva solicitud web · ' . $name, $html, $email);
    $_SESSION['last_contact_submission'] = time();
} catch (Throwable $exception) {
    $logDirectory = dirname(__DIR__) . '/storage/logs';
    if (!is_dir($logDirectory)) {
        @mkdir($logDirectory, 0750, true);
    }
    @error_log('[' . date(DATE_ATOM) . '] Formulario: ' . $exception->getMessage() . PHP_EOL, 3, $logDirectory . '/mail-errors.log');
    respond(502, 'No hemos podido enviar tu solicitud ahora. Inténtalo de nuevo o escríbenos por WhatsApp al +34 611 458 493.', $wantsJson);
}

require dirname(__DIR__) . '/app/Services/OpenAiAdsTracker.php';

try {
    $openAiTracker = new OpenAiAdsTracker(
        $config['openai_ads'] ?? [],
        dirname(__DIR__) . '/storage/logs/openai-events.log'
    );
    $sourceUrl = (string) ($_SERVER['HTTP_REFERER'] ?? ($config['production_url'] . '/contacto/'));
    $openAiTracker->trackRegistrationCompleted($sourceUrl);
} catch (Throwable) {
    // La analítica de servidor no debe impedir la respuesta al usuario.
}

respond(200, 'Gracias. Hemos recibido tu solicitud.', $wantsJson);
