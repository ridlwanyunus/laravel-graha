<?php

namespace App\Http\Middleware;

use Closure;

class HakAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rulename)
    {
        if(auth()->check() && !auth()->user()->hasRule($rulename))
        {
            return "Can not access admin pages.";
        }
        return $next($request);
    }
}
