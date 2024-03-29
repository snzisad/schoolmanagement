<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if($guard=='student'){
                return redirect('/home');
            }
            else if(Auth::user()->user_type=='admin'){
                return redirect('/dashboard');
            }
            else if(Auth::user()->user_type=='teacher'){
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
