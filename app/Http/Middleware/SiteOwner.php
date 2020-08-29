<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SiteOwner
{
    protected $owners = [
        'robb@131studios.com',
    ];

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->route('index');
        }

        if (in_array(Auth::user()->email, $this->owners)) {
            return $next($request);
        }

        return redirect()->route('index');
    }
}
