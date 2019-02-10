<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param string $rol
     * @return mixed
     */
    public function handle($request, Closure $next, $admin)
    {
        if (! $request->user()->hasRole($admin)) {
            return redirect('/');
            }
        return $next($request);
    }
}
