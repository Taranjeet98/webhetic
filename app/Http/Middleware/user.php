<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user
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
        if(!Auth::check())
        {
        	return redirect()->route('login');
        }

        if(Auth::user()->user_type == 0)
        {
        	return $next($request);
        }
        if(Auth::user()->user_type == 1)
        {
            return redirect()->route('login');
        }
        //return $next($request);
    }
}
