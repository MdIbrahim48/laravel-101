<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next , $age,$name)
    {
        echo "I am a middleware $age $name";
        echo "<br>";
        return $next($request);
    }
}
