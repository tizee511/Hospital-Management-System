<?php

namespace App\Http\Middleware;

use App\Providers\AppServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    
    public function handle(Request $request, Closure $next)
    {
        if (auth('web')->check()) {
            return redirect(AppServiceProvider::HOME);
        }

        if (auth('admin')->check()) {
            return redirect(AppServiceProvider::ADMIN);
        }
        return $next($request);
    }
}
