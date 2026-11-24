<?php

use App\Http\Middleware\AuthenticateUser;
use App\Http\Middleware\SecurityHeaders;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // PHP-FPM is only reachable through the private Compose Nginx service.
        // Trust that immediate proxy so Request::ip() uses the client address
        // forwarded by the host Nginx instead of the Docker bridge address.
        $middleware->trustProxies(at: '*');

        $middleware->append(SecurityHeaders::class);

        $middleware->alias([
            'auth.user' => AuthenticateUser::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
