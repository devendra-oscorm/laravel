<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

Authenticate::redirectUsing(function ($request) {
    return $request->is('admin/*') || $request->is('admin')
        ? '/admin-login'
        : '/login';
});

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
 ->withMiddleware(function ($middleware) {

    $middleware->alias([
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ]);

})
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
