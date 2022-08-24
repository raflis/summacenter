<?php

namespace App\Http\Middleware;

use Closure, Auth;
use Illuminate\Http\Request;

class IsUser
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
        if(Auth::user()->role == "0" || Auth::user()->role == "1"):
            return $next($request);
        else:
            return redirect()->route('login.index');
        endif;
    }
}
