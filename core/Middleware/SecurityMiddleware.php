<?php

namespace Core\Middleware;

class SecurityMiddleware
{
    public function handle($request, $next)
    {
        header('X-Content-Type-Options: nosniff');
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
        header('X-Frame-Options: DENY');
        return $next($request);
    }
}
