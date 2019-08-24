<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\UserList;
class adminOnly
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
        $user = UserList::where('email', Auth::user()->email)->first();
        if(!Auth::user() || $user->role !== 'Admin') return response('not allow',401);
        return $next($request);
    }
}
