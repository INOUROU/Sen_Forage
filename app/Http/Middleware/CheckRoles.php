<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if (! $request->user()->hasAnyRole($rolesArray)) {
            return redirect()->route('home')->with(
                ['permission'=>"Action non autorisee"]
            );
        }

        return $next($request);
    }
}