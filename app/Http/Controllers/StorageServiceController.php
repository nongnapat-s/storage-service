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
    
    public function upload()
    {
        if (!request()->input('app') || !request()->input('state')) return response('not allowed', 401);
        
        $now = Carbon::now();
        $storage_path = $now->year . '/' . $now->month;
        $sub_path = request()->input('sub_path') ? '/'. request()->input('sub_path') . '/' : '/';

        $state = request()->input('state');
        $app = request()->input('app');

        $app_folder = $app['app_name'] . $sub_path . $storage_path;

        if ($state === 'public')
        {
            $path = '/public/'. $app_folder;
        }else {
            $path = $app_folder;
        }

        if(request()->hasFile('file')) {
            $file_path = request()->file('file')->store($path);
            $file_info = pathinfo($file_path);
            $url = $state === 'public' ? Storage::url($file_path) : null;

            $file = new File;
            $file->app_id = $app['id'];
            $file->path = $file_info['dirname'];
            $file->name = $file_info['basename'];
            $file->type = $file_info['extension'];
            $file->size = Storage::size($file_path);
            $file->save();
            
            return ['reply_code' => 0 , 'reply_text' => 'OK', 'file' => $file, 'url' => $url];
        }
        else    
            return ['reply_code' => 1 , 'reply_text' => 'no file'];
    }

    public function download()
    {
        $file = File::find(request()->input('id'));
        return Storage::download($file->path . '/' . $file->name);
    }

    public function delete()
    {
        $file = File::find(request()->input('id'));
        Storage::delete($file->path . '/' . $file->name);
        return ['reply_code' => 0 , 'reply_text' => 'OK'];
    }
}
