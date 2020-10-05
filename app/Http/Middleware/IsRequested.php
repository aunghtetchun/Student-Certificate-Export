<?php

namespace App\Http\Middleware;

use App\Access;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsRequested
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

        return $next($request);
    }
}
