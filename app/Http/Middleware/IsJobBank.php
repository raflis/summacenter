<?php

namespace App\Http\Middleware;

use Closure, Auth;
use Illuminate\Http\Request;

class IsJobBank
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->guest()):
            return redirect()->route('bolsa.trabajo');
        else:
            if(Auth::user()->role == "0" || Auth::user()->role =="2" || Auth::user()->role == "3"):
                return $next($request);
            else:
                return redirect()->route('bolsa.trabajo');
            endif;
        endif;
    }
}
