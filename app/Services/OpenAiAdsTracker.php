<?php

declare(strict_types=1);

namespace App\Services;

use Throwable;

final class OpenAiAdsTracker
{
    /** @param array<string, mixed> $config */
    public function __construct(
        private readonly array $config,
        private readonly string $logPath
    ) {
    }

    /**
     * Envía el evento de conversión registration_completed a la API de OpenAI Ads (CAPI)
     */
    public function trackRegistrationCompleted(string $sourceUrl, ?string $eventId = null): bool
    {
        $pixelId = (string) ($this->config['pixel_id'] ?? '2atj5meVpvtJ5kCtqhG3yX');
        $apiKey = trim((string) ($this->config['api_key'] ?? ''));
        $endpoint = (string) ($this->config['endpoint'] ?? 'https://bzr.openai.com/v1/events');

        $id = $eventId ?: $this->generateEventId();
        $timestampMs = (int) round(microtime(true) * 1000);

        $payload = [
            'validate_only' => false,
            'events' => [
                [
                    'id' => $id,
                    'type' => 'registration_completed',
                    'timestamp_ms' => $timestampMs,
                    'source_url' => $sourceUrl,
                    'action_source' => 'web',
                    'data' => [
                        'type' => 'customer_action',
                    ],
                ],
            ],
        ];

        $jsonPayload = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        if ($jsonPayload === false) {
            return false;
        }

        // Si no hay API Key definida todavía, dejamos constancia en log sin fallar
        if ($apiKey === '' || $apiKey === '<API-KEY>') {
            $this->logEvent('SIMULADO (API Key pendiente de configurar en config/private.php)', $payload);
            return true;
        }

        try {
            $url = $endpoint . (str_contains($endpoint, '?') ? '&' : '?') . 'pid=' . urlencode($pixelId);

            $ch = curl_init($url);
            if ($ch === false) {
                $this->logEvent('ERROR: no se pudo inicializar cURL', $payload);
                return false;
            }

            curl_setopt_array($ch, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $jsonPayload,
                CURLOPT_HTTPHEADER => [
                    'Authorization: Bearer ' . $apiKey,
                    'Content-Type: application/json',
                ],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 6,
                CURLOPT_CONNECTTIMEOUT => 3,
                CURLOPT_SSL_VERIFYPEER => true,
            ]);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curlError = curl_error($ch);
            curl_close($ch);

            if ($curlError !== '' || $httpCode < 200 || $httpCode >= 300) {
                $this->logEvent(
                    "ERROR HTTP $httpCode: $curlError | Respuesta: " . (is_string($response) ? $response : ''),
                    $payload
                );
                return false;
            }

            $this->logEvent("ÉXITO HTTP $httpCode | Respuesta: " . (is_string($response) ? $response : ''), $payload);
            return true;
        } catch (Throwable $e) {
            $this->logEvent('EXCEPCIÓN: ' . $e->getMessage(), $payload);
            return false;
        }
    }

    private function generateEventId(): string
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff), mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
        );
    }

    /** @param array<string, mixed> $payload */
    private function logEvent(string $status, array $payload): void
    {
        $directory = dirname($this->logPath);
        if (!is_dir($directory) && !mkdir($directory, 0750, true) && !is_dir($directory)) {
            return;
        }

        $entry = sprintf(
            "[%s] OpenAI Ads API: %s\nPayload: %s\n\n",
            date(DATE_ATOM),
            $status,
            json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
        );
        @file_put_contents($this->logPath, $entry, FILE_APPEND | LOCK_EX);
    }
}
