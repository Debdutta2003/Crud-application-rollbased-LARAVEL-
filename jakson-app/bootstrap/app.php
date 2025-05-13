<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\CustomAuthMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware) {
        $middleware->alias([
            'custom.auth' => \App\Http\Middleware\CustomAuthMiddleware::class,
            'role' => \App\Http\Middleware\RoleMiddleware::class
        ]);
    })
    ->withExceptions(function ($exceptions) {
        // Handle exceptions
    })
    ->create();




