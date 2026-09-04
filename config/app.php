<?php

declare(strict_types=1);

$host = strtolower((string) preg_replace('/:\d+$/', '', (string) ($_SERVER['HTTP_HOST'] ?? '')));
$isLocal = in_array($host, ['localhost', '127.0.0.1', '::1'], true);

$config = [
    'name' => 'La Llave de tu Pyme',
    'production_url' => 'https://lallavedetupyme.com',
    'phone' => '+34 611 458 493',
    'contact_email' => 'info@lallavedetupyme.com',
    'mail' => [
        'transport' => $isLocal ? 'log' : 'mail',
        'recipient' => 'info@lallavedetupyme.com',
        'from_email' => 'info@lallavedetupyme.com',
        'from_name' => 'Formulario web · La Llave de tu Pyme',
    ],
];

$privateFile = __DIR__ . '/private.php';
if (is_file($privateFile)) {
    $private = require $privateFile;
    if (is_array($private)) {
        $config = array_replace_recursive($config, $private);
    }
}

return $config;
