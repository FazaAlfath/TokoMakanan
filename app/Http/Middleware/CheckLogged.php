<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckLogged
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
        if(request()->session()->has('user-logged')){
            return $next($request);
        }

        return redirect('/');
    }
}
