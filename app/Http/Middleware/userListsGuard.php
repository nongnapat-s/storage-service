<?php

namespace App\Http\Middleware;

use Closure;

class userListsGuard
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
        \Log::info(request()->all());
        // return response('Not Allow',404);
        return $next($request);
    }
}
