<?php

namespace Masoud\Time\Middlewares;

use Closure;

class CheckTime
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
        dd('ok');
        return $next($request);
    }
}
