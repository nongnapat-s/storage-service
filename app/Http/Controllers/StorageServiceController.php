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
        if (!request()->get('app') || !request()->get('function')) return response('not allowed', 401);
        
        $now = Carbon::now();
        $year = $now->year;
        $month = $now->month;

        $function = request()->get('function');
        $app = request()->get('app');

        $app_folder = $app['app_name'] . '/' . ($app['year_folder'] ? $year . '/' : '') . ($app['month_folder'] ? $month . '/' : '');

        if ($function === 'public')
        {
            $path = '/public/'. $app_folder;
        }else {
            $path = $app_folder;
        }

        if(request()->hasFile('file')) {
            $file_path = request()->file('file')->store($path);

            $info = pathinfo($file_path);

            $file = new File;
            $file->app_id = $app['id'];
            $file->path = $info['dirname'];
            $file->name = $info['basename'];
            $file->type = $info['extension'];
            $file->size = Storage::size($file_path);
            $file->save();
            return back();
        }
        else    
            return 'no file';
    }
}
