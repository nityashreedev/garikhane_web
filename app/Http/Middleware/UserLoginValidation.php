<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserLoginValidation
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
//        if(isset(Auth::user()->userRoles[0]->role_name) && Auth::user()->userRoles[0]->role_name != 'Admin') {
//            Auth::logout();
//            Session::flush();
//            echo "Access Denied";
//            exit();
//        }
        return $next($request);
    }
}
