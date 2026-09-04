<?php

declare(strict_types=1);

$requestedPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
if (PHP_SAPI === 'cli-server' && is_string($requestedPath)) {
    $staticFile = __DIR__ . $requestedPath;
    if ($requestedPath !== '/' && is_file($staticFile)) {
        return false;
    }
}

require_once dirname(__DIR__) . '/app/Models/Page.php';
require_once dirname(__DIR__) . '/app/Controllers/SiteController.php';

$controller = new App\Controllers\SiteController(dirname(__DIR__) . '/app/Views/pages');
$controller->handle($_SERVER['REQUEST_URI'] ?? '/');
