<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;

class AdminAuthenticate extends Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo(Request $request)
    {
        if ($request->expectsJson()) {
            return null;
        }

        return $request->is('admin/*') || $request->is('admin')
            ? '/admin-login'
            : '/login';
    }
}
