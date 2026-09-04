<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Page;

final class SiteController
{
    public function __construct(private readonly string $viewsPath)
    {
    }

    public function handle(string $requestUri): void
    {
        $path = parse_url($requestUri, PHP_URL_PATH);
        $path = is_string($path) ? rawurldecode($path) : '/';
        $path = '/' . ltrim(preg_replace('#/+#', '/', $path) ?? '/', '/');

        // El blog anterior usaba URLs /AAAA/MM/DD/slug/. Todo ese contenido se retira
        // por decisión editorial y se redirige permanentemente a la portada.
        if (preg_match('#^/(?:19|20)\d{2}/\d{2}/\d{2}/[^/]+/?$#', $path) === 1) {
            header('Location: /', true, 301);
            return;
        }

        if ($path !== '/' && !str_ends_with($path, '/')) {
            $canonicalPath = $path . '/';
            if (Page::viewFor($canonicalPath) !== null) {
                header('Location: ' . $canonicalPath, true, 301);
                return;
            }
        }

        $view = Page::viewFor($path);
        if ($view === null) {
            http_response_code(404);
            $view = '404.html';
        }

        $target = $this->viewsPath . DIRECTORY_SEPARATOR . $view;
        if (!is_file($target)) {
            http_response_code(500);
            header('Content-Type: text/plain; charset=utf-8');
            echo 'No se ha podido cargar la página.';
            return;
        }

        header('Content-Type: text/html; charset=utf-8');
        header('X-Content-Type-Options: nosniff');
        header('Referrer-Policy: strict-origin-when-cross-origin');
        readfile($target);
    }
}
