<?php

use App\Http\Middleware\BlockDesktopAccess;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(BlockDesktopAccess::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

$app->usePublicPath(realpath(base_path('public_html')));

return $app;
