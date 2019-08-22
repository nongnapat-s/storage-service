<?php

namespace App\Http\Middleware;

use Closure;
use App\AppRegister;
use Illuminate\Support\Facades\Hash;
class downloadAndDeleteGuard
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
        if (!$request->header('token') || 
        !$request->header('secret') || 
        !$request->has('id'))
            return response('incomplete request', 400);
        
        $app = AppRegister::where('token', $request->header('token'))->first();

        if (!$app || !Hash::check($request->header('secret'), $app['secret']))
        {
            return response('not allowed', 401);
        }

        $request->merge([
            'app' => $app,
            'id' => $request->id,
        ]);

        return $next($request);
    }
}
