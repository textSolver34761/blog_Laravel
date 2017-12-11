<?php

namespace App\Http\Middleware;

use Closure;

class IP
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
        if($request->ip() == '82.66.99.115'){
            return $next($request);
        }
        return response('Unauthorized','401');
    }
}
