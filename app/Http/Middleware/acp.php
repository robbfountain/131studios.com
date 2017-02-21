<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class acp
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
        if(!Auth::check())
        {
            return redirect('/login');
        }

        if(!$request->user()->hasRole('Administrator') && !$request->user()->hasRole('Administrators'))
        {
            return redirect('/login');
        }
        return $next($request);
    }
}
