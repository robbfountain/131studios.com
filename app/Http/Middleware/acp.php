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
        if(!Auth::check()) return redirect('/admin/login');

        if(!$request->user()->hasPermission('Access Admin Panel'))
        {
           abort(403, 'Unauthorized Action');
        }
        return $next($request);
    }
}
