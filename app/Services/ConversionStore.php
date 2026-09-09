<?php
declare(strict_types=1);
namespace App\Services;
use PDO;
use RuntimeException;
final class ConversionStore
{
    public readonly PDO $db;
    public function __construct(string $path)
    {
        if (!is_dir(dirname($path)) && !mkdir(dirname($path), 0700, true) && !is_dir(dirname($path))) throw new RuntimeException('No se puede guardar la solicitud.');
        $this->db = new PDO('sqlite:' . $path, null, null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        @chmod($path, 0600);
        $this->db->exec('PRAGMA busy_timeout=5000');
        $this->db->exec("CREATE TABLE IF NOT EXISTS submissions (
            token TEXT PRIMARY KEY, id TEXT UNIQUE NOT NULL, timestamp_ms INTEGER NOT NULL,
            contact TEXT NOT NULL, event TEXT, status TEXT NOT NULL DEFAULT 'receiving',
            attempts INTEGER NOT NULL DEFAULT 0, next_attempt INTEGER NOT NULL DEFAULT 0,
            validated INTEGER NOT NULL DEFAULT 0, http_code INTEGER, result TEXT
        )");
        $this->db->exec('CREATE TABLE IF NOT EXISTS worker_health (id INTEGER PRIMARY KEY, heartbeat INTEGER NOT NULL)');
    }
    public static function uuid(): string
    {
        $b = random_bytes(16);
        $b[6] = chr((ord($b[6]) & 15) | 64);
        $b[8] = chr((ord($b[8]) & 63) | 128);
        $h = bin2hex($b);
        return substr($h,0,8).'-'.substr($h,8,4).'-'.substr($h,12,4).'-'.substr($h,16,4).'-'.substr($h,20);
    }
    public function find(string $token): ?array
    {
        $q = $this->db->prepare('SELECT * FROM submissions WHERE token=?');
        $q->execute([$token]);
        return $q->fetch(PDO::FETCH_ASSOC) ?: null;
    }
    public function save(string $token, array $contact, ?array $event, string $id, int $timestamp): void
    {
        $q = $this->db->prepare('INSERT INTO submissions(token,id,timestamp_ms,contact,event) VALUES(?,?,?,?,?)');
        $q->execute([$token, $id, $timestamp, json_encode($contact, JSON_THROW_ON_ERROR), $event ? json_encode($event, JSON_THROW_ON_ERROR) : null]);
    }
    public function confirm(string $token, bool $local): void
    {
        $this->db->beginTransaction();
        try {
            $q = $this->db->prepare("UPDATE submissions SET status=CASE WHEN event IS NULL THEN 'unmeasured' WHEN ? THEN 'local' ELSE 'pending' END WHERE token=? AND status='receiving'");
            $q->execute([(int) $local, $token]);
            $this->db->commit();
        } catch (\Throwable $e) {
            $this->db->rollBack();
            throw $e;
        }
    }
}
