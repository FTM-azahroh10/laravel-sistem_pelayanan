<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            return redirect('/login');
        } else if (auth()->user()->role == 'mahasiswa') {
            return redirect('/dashboard');
        } else if (auth()->user()->role == 'superadmin') {
            return redirect('/dashboard-superadmin');
        }
        return $next($request);
    }
}
