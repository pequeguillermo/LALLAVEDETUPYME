<?php
declare(strict_types=1);
namespace App\Services;
use PDO;
final class ConversionWorker
{
    public function __construct(private readonly ConversionStore $store, private readonly string $lockPath) {}
    public function run(callable $send, bool $validateOnly = false): int
    {
        $lock = fopen($this->lockPath, 'c');
        if (!$lock || !flock($lock, LOCK_EX | LOCK_NB)) return 0;
        try {
            $db = $this->store->db;
            $db->exec('INSERT OR REPLACE INTO worker_health(id,heartbeat) VALUES(1,' . time() . ')');
            $q = $db->prepare("SELECT * FROM submissions WHERE status='pending' AND attempts<5 AND next_attempt<=? ORDER BY timestamp_ms LIMIT 20");
            $q->execute([time()]);
            $rows = $q->fetchAll(PDO::FETCH_ASSOC);
            foreach ($rows as $row) {
                $event = json_decode($row['event'], true, 512, JSON_THROW_ON_ERROR);
                if ((int) $row['timestamp_ms'] < (time() - 7 * 86400) * 1000) {
                    $db->prepare("UPDATE submissions SET status='failed', result='expired' WHERE token=?")->execute([$row['token']]);
                    continue;
                }
                // Reservar el intento antes de HTTP: una caída también consume el límite.
                $attempt = (int) $row['attempts'] + 1;
                $db->prepare('UPDATE submissions SET attempts=?, next_attempt=? WHERE token=?')
                    ->execute([$attempt, time() + min(3600, 60 * (2 ** ($attempt - 1))), $row['token']]);
                try {
                    $result = ['ok'=>true];
                    if (!$row['validated'] || $validateOnly) {
                        $result = $send($event, true);
                        if ($result['ok']) $db->prepare('UPDATE submissions SET validated=1 WHERE token=?')->execute([$row['token']]);
                    }
                    if ($result['ok'] && !$validateOnly) $result = $send($event, false);
                } catch (\Throwable) {
                    $result = ['ok'=>false, 'retry'=>true, 'http'=>0, 'result'=>'worker_error'];
                }
                $status = $result['ok'] ? ($validateOnly ? 'pending' : 'sent') : (($result['retry'] && $attempt < 5) ? 'pending' : 'failed');
                $db->prepare('UPDATE submissions SET status=?, http_code=?, result=? WHERE token=?')
                    ->execute([$status, $result['http'], $result['result'], $row['token']]);
                $db->exec('INSERT OR REPLACE INTO worker_health(id,heartbeat) VALUES(1,' . time() . ')');
                // Solo metadatos técnicos; nunca el cuerpo de la API.
                echo json_encode(['id'=>$row['id'], 'attempt'=>$attempt, 'status'=>$status, 'http'=>$result['http'], 'result'=>$result['result']]) . PHP_EOL;
            }
            $db->exec("UPDATE submissions SET status='failed', result='attempts_exhausted' WHERE status='pending' AND attempts>=5");
            return count($rows);
        } finally {
            flock($lock, LOCK_UN);
            fclose($lock);
        }
    }
}
