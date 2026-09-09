<?php
declare(strict_types=1);
namespace App\Services;
final class OpenAiAdsTracker
{
    public function __construct(private readonly array $config) {}
    public static function event(string $id, int $timestamp, string $email, ?string $oppref, ?string $obref): array
    {
        $e = ['id'=>$id, 'type'=>'registration_completed', 'timestamp_ms'=>$timestamp,
            'action_source'=>'web', 'source_url'=>'https://lallavedetupyme.com/gracias/', 'data'=>['type'=>'customer_action']];
        if ($oppref !== null && $oppref !== '') $e['oppref'] = $oppref;
        if ($obref !== null && $obref !== '') $e['user']['obref'] = $obref;
        if (trim($email) !== '') $e['user']['emails_sha256'] = [hash('sha256', mb_strtolower(trim($email), 'UTF-8'))];
        return $e;
    }
    public function configured(): bool
    {
        $key = trim((string) ($this->config['api_key'] ?? ''));
        return $key !== '' && !str_contains($key, 'REEMPLAZAR') && $key !== '<API-KEY>';
    }
    public function send(array $event, bool $validateOnly): array
    {
        if (!$this->configured()) return ['ok'=>false, 'retry'=>false, 'http'=>0, 'result'=>'missing_key'];
        $ch = curl_init('https://bzr.openai.com/v1/events?pid=' . rawurlencode($this->config['pixel_id']));
        curl_setopt_array($ch, [CURLOPT_POST=>true,
            CURLOPT_POSTFIELDS=>json_encode(['validate_only'=>$validateOnly, 'events'=>[$event]], JSON_THROW_ON_ERROR),
            CURLOPT_HTTPHEADER=>['Authorization: Bearer '.$this->config['api_key'], 'Content-Type: application/json'],
            CURLOPT_RETURNTRANSFER=>true, CURLOPT_TIMEOUT=>10, CURLOPT_CONNECTTIMEOUT=>3,
            CURLOPT_SSL_VERIFYPEER=>true, CURLOPT_SSL_VERIFYHOST=>2]);
        $body = curl_exec($ch);
        $http = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_errno($ch);
        curl_close($ch);
        $ok = $error === 0 && $http >= 200 && $http < 300;
        $decoded = is_string($body) ? json_decode($body, true) : null;
        if (is_array($decoded) && (!empty($decoded['error']) || !empty($decoded['errors']) || ($decoded['success'] ?? true) === false)) $ok = false;
        // No registrar cuerpos, cabeceras, referencias ni hashes personales.
        return ['ok'=>$ok, 'retry'=>$error !== 0 || $http === 429 || $http === 408 || $http >= 500,
            'http'=>$http, 'result'=>$ok ? ($validateOnly ? 'validated' : 'accepted') : ($error ? 'transport_error' : 'api_rejected')];
    }
}
