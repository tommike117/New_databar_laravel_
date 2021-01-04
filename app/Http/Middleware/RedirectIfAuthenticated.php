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
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check())
            {
                // return $next($request);
                return redirect('/admin/manage'); 
            }

        }
        // $user = $request->user();
        // if ($user && $user->status == 'admin')
        // {

        //     return $next($request);
        // }

        // abort(403, 'You can\'t login');
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

    }
}
