<?php

namespace App\Http\Middleware;

use Closure;
use App\AppRegister;
use Illuminate\Support\Facades\Hash;
class storageserviceGuard
{

    protected $functions = [
        'upload',
        'put-file',
        'delete-file',
        'delete-folder'
    ];

    protected $states = [
        'public',
        'local'
    ];

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
            !$request->header('secret') ||
            // function is required or validate function 
            (!$request->input('function') || !in_array($request->input('function'), $this->functions)) || 
            // if function's value is 'upload' and then file and state is required or validate state
            ($request->input('function') === 'upload' && (!$request->file('file') || (!$request->input('state') || !in_array($request->input('state'), $this->states))) ) ||
            // if function's value is 'put-file' and then file and slug id required
            ($request->input('function') === 'put-file' && (!$request->file('file') || !$request->input('slug'))) ||
            // if function's value is 'delete-file' and then slug is required
            ($request->input('function') === 'delete-file' && (!$request->input('slug'))) ||
            // if function's value is 'delete-folder' and then folder and state is required
            ($request->input('function') === 'delete-folder' && (!$request->input('folder') || !$request->input('state'))))
            
            return response('incomplete request', 400);
        
        // validate token and secret
        $app = AppRegister::where('token', $request->header('token'))->first();
        if (!$app || !Hash::check($request->header('secret'), $app['secret']))return response('not allowed', 401);


        $request->merge([ 'app_id' => $app->id, 'app_name' => $app->app_name ]); // merge app_id and app_name to request

        return $next($request);
    }
}
