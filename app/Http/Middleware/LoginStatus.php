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
        // If authenticated, load intended URL
        if (auth()->check()){
            // If URL point to login/register, return to homepage
            if(str_contains($request, "register") || str_contains($request, "login") || str_contains($request, "save_user")){
                return redirect('/');
            }
                return $next($request);
        }
        // If URL point to login/register, load intended URL
        elseif(str_contains($request, "register") || str_contains($request, "login") || str_contains($request, "save_user")){
            return $next($request);
        }
        // else redirect to login page
        return redirect()->guest('login');
    }
}
