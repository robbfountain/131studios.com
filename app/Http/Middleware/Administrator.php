<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Administrator
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

        if(! Auth::user()->hasRole('Administrator'))
        {
            abort(403,'Unauthorized Action');
        }

        return $next($request);
    }
}
