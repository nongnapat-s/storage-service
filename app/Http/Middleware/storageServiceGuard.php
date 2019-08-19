<?php

namespace App\Http\Middleware;

use Closure;
use App\AppRegister;
use Illuminate\Support\Facades\Hash;
class storageServiceGuard
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
        if (!request()->has('token') || 
            !request()->has('secret') || 
            !request()->has('file') || 
            !request()->has('function'))
                return response('incomplete request', 400);
        
        $app = AppRegister::where('token', $request->token)->first();

        if (!$app || !Hash::check($request->secret, $app['secret']))
        {
            return response('not allowed', 401);
        }

        $request->merge([
            'app' => $app,
            'funciton' => request()->has('function'),
        ]);

        return $next($request);
    }
}
