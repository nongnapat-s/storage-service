<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppRegister;
use App\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
class StorageServiceController extends Controller
{
    public $app_name; 

    public function __construct()
    {
        $this->app_name = $this->middleware('storageServiceGuard');
    }
    
    public function upload()
    {
        if (!request()->input('app') || !request()->input('state')) return response('not allowed', 401);
        
        $now = Carbon::now();
        $year = $now->year;
        $month = $now->month;

        $state = request()->input('state');
        $app = request()->input('app');

        $app_folder = $app['app_name'] . '/' . ($app['year_folder'] ? $year . '/' : '') . ($app['month_folder'] ? $month . '/' : '');

        if ($state === 'public')
        {
            $path = '/public/'. $app_folder;
        }else {
            $path = $app_folder;
        }

        if(request()->hasFile('file')) {
            $file_path = request()->file('file')->store($path);

            $file_info = pathinfo($file_path);

            $file = new File;
            $file->app_id = $app['id'];
            $file->path = $file_info['dirname'];
            $file->name = $file_info['basename'];
            $file->type = $file_info['extension'];
            $file->size = Storage::size($file_path);
            $file->save();
            return ['reply_code' => 0 , 'reply_text' => 'OK', 'file_info' => $file_info];
        }
        else    
            return ['reply_code' => 1 , 'reply_text' => 'no file'];
    }
}
