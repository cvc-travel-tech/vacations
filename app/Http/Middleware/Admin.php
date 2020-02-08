<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed               

     */
    public function handle($request, Closure $next, $guard = null)
    {

   if(auth()->user()->status  == 'Admin' ){

     return $next($request);
    
   }


    return redirect('/');


        // if (Auth::guard($guard)->check()) {
        //     // return redirect('/backend');
        //     return $next($request);
        // } else {
        //     return redirect('/backend/login');
        // }
    }
}
