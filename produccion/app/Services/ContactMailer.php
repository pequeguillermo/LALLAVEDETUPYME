<?php

declare(strict_types=1);

namespace App\Services;

use RuntimeException;

final class ContactMailer
{
    /** @param array<string, mixed> $config */
    public function __construct(private readonly array $config, private readonly string $logPath)
    {
    }

    public function send(string $subject, string $html, string $replyTo): void
    {
        $recipient = (string) ($this->config['recipient'] ?? '');
        $fromEmail = (string) ($this->config['from_email'] ?? '');
        $fromName = (string) ($this->config['from_name'] ?? 'Formulario web');

        if (!filter_var($recipient, FILTER_VALIDATE_EMAIL) || !filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
            throw new RuntimeException('La configuración de correo no es válida.');
        }

        if (($this->config['transport'] ?? 'mail') === 'log') {
            $directory = dirname($this->logPath);
            if (!is_dir($directory) && !mkdir($directory, 0750, true) && !is_dir($directory)) {
                throw new RuntimeException('No se ha podido crear el registro local.');
            }
            $entry = sprintf("[%s] %s\nPara: %s\nResponder a: %s\n%s\n\n", date(DATE_ATOM), $subject, $recipient, $replyTo, strip_tags($html));
            if (file_put_contents($this->logPath, $entry, FILE_APPEND | LOCK_EX) === false) {
                throw new RuntimeException('No se ha podido escribir el registro local.');
            }
            return;
        }

        $safeFromName = str_replace(["\r", "\n"], '', $fromName);
        $safeReplyTo = str_replace(["\r", "\n"], '', $replyTo);
        $headers = [
            'MIME-Version: 1.0',
            'Content-Type: text/html; charset=UTF-8',
            'Content-Transfer-Encoding: 8bit',
            'From: ' . $safeFromName . ' <' . $fromEmail . '>',
            'Reply-To: <' . $safeReplyTo . '>',
            'X-Mailer: PHP/' . PHP_VERSION,
        ];

        if (!mail($recipient, $this->encodeHeader($subject), $html, implode("\r\n", $headers))) {
            throw new RuntimeException('El servidor no ha aceptado el mensaje.');
        }
    }

    private function encodeHeader(string $value): string
    {
        return '=?UTF-8?B?' . base64_encode($value) . '?=';
    }
}
