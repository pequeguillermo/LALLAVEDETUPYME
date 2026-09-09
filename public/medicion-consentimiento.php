<?php
declare(strict_types=1);
require dirname(__DIR__) . '/app/bootstrap.php';
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') { http_response_code(405); exit; }
if (!is_string($_POST['token'] ?? null) || !hash_equals($_SESSION['form_token'], $_POST['token'])) { http_response_code(419); exit; }
if (($_POST['choice'] ?? '') !== 'reject') { http_response_code(422); exit; }
unset($_SESSION['confirmation']);
try {
    $config = require dirname(__DIR__) . '/config/app.php';
    $store = new App\Services\ConversionStore($config['openai_ads']['database']);
    $lock = fopen(dirname($config['openai_ads']['database']) . '/worker.lock', 'c');
    if (!$lock || !flock($lock, LOCK_EX)) throw new RuntimeException('Cola ocupada.');
    try {
        $q = $store->db->prepare("UPDATE submissions SET status='unmeasured', event=NULL WHERE token=? AND status IN ('pending','local','failed')");
        foreach ($_SESSION['submission_tokens'] ?? [] as $token) $q->execute([$token]);
    } finally { flock($lock, LOCK_UN); fclose($lock); }
    http_response_code(204);
} catch (Throwable) { http_response_code(503); }
