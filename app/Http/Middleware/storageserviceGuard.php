<?php

namespace App\Http\Middleware;

use Closure;
use App\AppRegister;
use Illuminate\Support\Facades\Hash;
class storageserviceGuard
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
        if (
            // token is required
            !$request->header('token') || 
            // secret is required
            !$request->header('secret'))
            
            return response('incomplete request', 400);

        // validate token and secret
        $app = AppRegister::where('token', $request->header('token'))->first();
        if (!$app || !Hash::check($request->header('secret'), $app['secret']))return response('not allowed', 401);

        $request->merge([ 'app_id' => $app->id, 'app_name' => $app->app_name ]); // merge app_id and app_name to request

        return $next($request);
    }
}


           