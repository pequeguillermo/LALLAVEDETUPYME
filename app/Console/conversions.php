<?php
declare(strict_types=1);
if (PHP_SAPI !== 'cli') { http_response_code(404); exit; }
require dirname(__DIR__) . '/bootstrap.php';
$config = require dirname(__DIR__, 2) . '/config/app.php';
try {
    $store = new App\Services\ConversionStore($config['openai_ads']['database']);
    $tracker = new App\Services\OpenAiAdsTracker($config['openai_ads']);
    if (in_array('--status', $argv, true)) {
        $heartbeat = (int) $store->db->query('SELECT COALESCE(MAX(heartbeat),0) FROM worker_health')->fetchColumn();
        echo json_encode(['key_configured'=>$tracker->configured(), 'heartbeat'=>$heartbeat,
            'healthy'=>$heartbeat > time()-180,
            'jobs'=>$store->db->query('SELECT status,COUNT(*) AS total FROM submissions GROUP BY status')->fetchAll(PDO::FETCH_ASSOC)]) . PHP_EOL;
        exit($heartbeat > time()-180 && $tracker->configured() ? 0 : 1);
    }
    if (!$tracker->configured()) { fwrite(STDERR, "Falta OPENAI_ADS_CONVERSIONS_API_KEY. No se han enviado eventos.\n"); exit(2); }
    if (in_array('--validate-schema', $argv, true)) {
        $event = App\Services\OpenAiAdsTracker::event(App\Services\ConversionStore::uuid(), (int) floor(microtime(true) * 1000), '', null, null);
        $result = $tracker->send($event, true);
        echo json_encode($result) . PHP_EOL;
        exit($result['ok'] ? 0 : 1);
    }
    $worker = new App\Services\ConversionWorker($store, dirname($config['openai_ads']['database']) . '/worker.lock');
    $worker->run([$tracker, 'send'], in_array('--validate-only', $argv, true));
} catch (Throwable) {
    fwrite(STDERR, "No se ha podido ejecutar la cola. Revisa extensiones PHP y permisos de storage.\n");
    exit(1);
}
