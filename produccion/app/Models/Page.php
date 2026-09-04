<?php

declare(strict_types=1);

namespace App\Models;

final class Page
{
    private const ROUTES = [
        '/' => 'home.html',
        '/servicios/' => 'services.html',
        '/servicios/estrategia-digital/' => 'service-strategy.html',
        '/servicios/diseno-web/' => 'service-web.html',
        '/servicios/posicionamiento-seo/' => 'service-seo.html',
        '/servicios/publicidad-digital/' => 'service-ads.html',
        '/servicios/redes-sociales/' => 'service-social.html',
        '/servicios/automatizacion-y-funnels/' => 'service-automation.html',
        '/auditoria-marketing/' => 'audit.html',
        '/agencia-marketing-conversiones/' => 'conversion.html',
        '/blog/' => 'blog.html',
        '/nosotros/' => 'about.html',
        '/contacto/' => 'contact.html',
        '/aviso-legal/' => 'legal.html',
        '/politica-de-privacidad/' => 'privacy.html',
        '/politica-de-cookies/' => 'cookies.html',
        '/gracias/' => 'thanks.html',
    ];

    public static function viewFor(string $path): ?string
    {
        return self::ROUTES[$path] ?? null;
    }

    /** @return list<string> */
    public static function routes(): array
    {
        return array_keys(self::ROUTES);
    }
}
