<?php

namespace App\Http\Middleware;

use Closure;
use App\AppRegister;
use Illuminate\Support\Facades\Hash;
class uploadGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public $attributes;

    public function handle($request, Closure $next)
    {
        \Log::info(pathinfo($request->dirname));
        if (!$request->header('token') || 
            !$request->header('secret') || 
            !$request->has('file') || 
            !$request->has('state'))
                return response('incomplete request', 400);
        
        $app = AppRegister::where('token', $request->header('token'))->first();

        if (!$app || !Hash::check($request->header('secret'), $app['secret']))
        {
            return response('not allowed', 401);
        }

        $request->merge([
            'app' => $app,
            'state' => $request->state,
        ]);

        return $next($request);
    }
}
