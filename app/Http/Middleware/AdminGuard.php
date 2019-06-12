<?php

namespace App\Http\Middleware;

use Closure;

class AdminGuard
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
        if (!session()->has('user')) {
            return redirect()->route('home');
        } elseif (session()->get('user')->role_id != 1) {
            return redirect()->route('home');
        } else {
            return $next($request);
        }

//        return redirect('home');
    }
}
