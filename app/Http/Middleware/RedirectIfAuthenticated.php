<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Debugbar;

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
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }
        // Debugbar::info($request);
        Debugbar::info($guard,'helloworld');

        switch ($guard) {
            case 'admin':
                Debugbar::info('Go to admin dashboard');
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin.dashboard');
                }
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    Debugbar::info('default');
                    return redirect('/home');
                }
                break;
        }

        return $next($request);
    }
}
