<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth('web')->check()) {
            return redirect()->intended(route('dashboard.user',true));
        }

        if (auth('admin')->check()) {
            return redirect()->intended(route('dashboard.admin',true));
        }
        return $next($request);
    }
}
