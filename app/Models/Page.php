<?php

declare(strict_types=1);

namespace App\Models;

final class Page
{
    private const ROUTES = [
        '/' => 'home.php',
        '/servicios/' => 'services.php',
        '/servicios/estrategia-digital/' => 'service-strategy.php',
        '/servicios/diseno-web/' => 'service-web.php',
        '/servicios/posicionamiento-seo/' => 'service-seo.php',
        '/servicios/publicidad-digital/' => 'service-ads.php',
        '/servicios/redes-sociales/' => 'service-social.php',
        '/servicios/automatizacion-y-funnels/' => 'service-automation.php',
        '/auditoria-marketing/' => 'audit.php',
        '/agencia-marketing-conversiones/' => 'conversion.php',
        '/blog/' => 'blog.php',
        '/nosotros/' => 'about.php',
        '/contacto/' => 'contact.php',
        '/aviso-legal/' => 'legal.php',
        '/politica-de-privacidad/' => 'privacy.php',
        '/politica-de-cookies/' => 'cookies.php',
        '/gracias/' => 'thanks.php',
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
