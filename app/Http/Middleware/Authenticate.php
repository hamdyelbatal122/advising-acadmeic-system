<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null) : Response
    {
  
        if ($request->route()->named('student.*') && !Auth::guard('student')->check()) {
            // User is not authenticated, redirect to login page
            return redirect()->route('student.login');
        } elseif ($request->route()->named('admin.*') && !Auth::guard('admin')->check()) {
            // User is not authenticated, redirect to login page
            return redirect()->route('admin.login');
        }

        return $next($request);
    
    }
}
