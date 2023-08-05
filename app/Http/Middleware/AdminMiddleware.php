<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\VersionUpdater\Checker;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
             if(Auth::user()->role_as == '1') //1 is for Admin & 0 for normal user
            {
            return $next($request);
            }
            else
            {
            return redirect('/home')->with('status', 'Access Dined Login with Admin login credentials');
            }
        }
    else
    {
        return redirect('/login')->with('status', 'Login Please');
    }
}
}