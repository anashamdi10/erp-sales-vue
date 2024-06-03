<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                //write code for redirect both for admin or front in case login alerady done   
                if ($request->is('admin/') || $request->is('admin/dashboard/*')) {
                    //redirect Backend
                    return route('admin.dashboard');
                } else {
                    //redirect front end  in case there is front
                    //  return redirect(RouteServiceProvider::HOME);
                    return route('admin.dashboard');
                }
            }
        }
        return $next($request);
    }
}
