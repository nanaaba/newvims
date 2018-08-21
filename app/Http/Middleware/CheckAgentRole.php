<?php

namespace App\Http\Middleware;

use Closure;

class CheckAgentRole {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {


        if (checkAgentRole()) {
            return $next($request);
        }

        return redirect('/');
    }

}
