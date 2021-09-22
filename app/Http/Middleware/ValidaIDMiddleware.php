<?php

namespace App\Http\Middleware;

use Closure;

class ValidaIDMiddleware
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

        if (in_array($request->id, [2,6,9]))
        {
            return redirect('api/reports');
        }

        return $next($request);
    }
}
