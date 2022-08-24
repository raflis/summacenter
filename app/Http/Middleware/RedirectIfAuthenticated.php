<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($guard == "user" && Auth::guard($guard)->check()) {
                return redirect()->route('profile.index'); 
            }

            if ($guard == "jobbank" && Auth::guard($guard)->check()) {
                if(Auth::guard("jobbank")->user()->role == 2):
                    return redirect()->route('bolsa.trabajo.perfil.postulante');
                endif;
                if(Auth::guard("jobbank")->user()->role == 3):
                    return redirect()->route('bolsa.trabajo.perfil.empresa');
                endif;
            }

            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
