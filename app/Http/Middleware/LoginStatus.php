<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()){
            if(str_contains($request, "register") || str_contains($request, "login")){
                return redirect('/');
            }
                return $next($request);
        }
        elseif(str_contains($request, "register") || str_contains($request, "login")){
            return $next($request);
        }
        return redirect()->guest('login');
    }
}
