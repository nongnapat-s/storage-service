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
        if(!Auth::user()) return route('login');

        $user = UserList::where('email', Auth::user()->email)->first();
        if($user->role !== 'Admin') return response('not allow',401);

        return $next($request);
    }
}
