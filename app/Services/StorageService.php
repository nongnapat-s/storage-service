<?php 

namespace App\Services;

use App\Contracts\StorageServiceCaller;
use Illuminate\Support\Facades\Storage;
use App\File;

class StorageService implements StorageServiceCaller {

    public function upload() {
        
        $now = \Carbon\Carbon::now();
        // create sub path
        $path = request()->input('app_name') // app's name path
                .(request()->input('state') === 'public' ? '/public': '')  // local or public path
                .((request()->input('sub_path') ? '/'. request()->input('sub_path') : '') . '/') // sub path by client
                .$now->year . '/' . $now->month;  // year and month path;

        if(request()->hasFile('file')) {

            // store file 
            $file_path = request()->file('file')->store($path);

            // get file path infomation
            $file_info = pathinfo($file_path);
            
            // create file
            $data = [ 
                'app_id' => request()->input('app_id'),
                'path' => $file_info['dirname'],
                'name' => $file_info['filename'],
                'type' => $file_info['extension'],
                'size' => Storage::size($file_path),
                'url' => request()->input('state') === 'public' ? Storage::url($file_path) : null,
            ];

            $file = File::create($data);
            return $file;
        }
        else    
            return ['reply_code' => 1 , 'reply_text' => 'no file'];
    }

    public function download() {

    }

    public function putFile() {

    }
    public function deleteFile() {
        
    }
    public function deleteFolder() {

    }
    
}