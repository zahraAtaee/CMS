<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        dd(Auth::guard('web')->user()->level=='admin'); authentication use Guard professional
        if (auth()->check()){
            if (auth()->user()->isAdmin()){

                return $next($request);
            }
        }
        return redirect('/');

    }
}
