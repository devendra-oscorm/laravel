<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }

        if (Auth::guard('admin')->user()->role !== 'admin') {
            return redirect()->route('admin.login')->withErrors(['error' => 'You are not authorized as admin.']);
        }

        return $next($request);
    }
}