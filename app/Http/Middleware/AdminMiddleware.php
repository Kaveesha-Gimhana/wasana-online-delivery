<?php

/* namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. check logged in
        if (!Auth::check()) {
            return redirect()->route('admin.login')
                ->with('error', 'Please login first.');
        }

        $user = Auth::user();

        // 2. check admin role
        if ($user->role === 'admin') {
            return $next($request);
        }

        // 3. not admin → logout
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
            ->with('error', 'Access denied: Admin only area.');
    }
} */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // ❌ not logged in
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        // ❌ logged in but not admin
        if (Auth::user()->role !== 'admin') {
            Auth::logout();
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}