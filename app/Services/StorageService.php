<?php 

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\File;

class StorageService {

    public function upload() {
        if(!request()->hasFile('file')) return ['reply_code' => 1, 'reply_text' => 'no file']; //check request has file

        $now = \Carbon\Carbon::now();
        // create sub path
        $path = (request()->input('state') === 'public' ? 'public/': '')  // local or public path
                .request()->input('app_name') // app's name path
                .((request()->input('sub_path') ? '/'. request()->input('sub_path') : '') . '/') // sub path by client
                .$now->year . '/' . $now->month;  // year and month path;

        // store file 
        $file_path = request()->file('file')->store($path);

        // get file path infomation
        $file_info = pathinfo($file_path);
        
        // create file
        $data = [ 
            'app_id' => request()->input('app_id'),
            'path' => $file_info['dirname'],
            'state' => request()->input('state'),
            'name' => $file_info['filename'],
            'type' => $file_info['extension'],
            'size' => Storage::size($file_path),
            'url' => request()->input('state') === 'public' ? Storage::url($file_path) : null,
        ];

        $file = File::create($data);
        return $file;
    }

    public function update() {
        if(!request()->hasFile('file')) return ['reply_code' => 1, 'reply_text' => 'no file'];  //check request has file

        $file = File::where('slug', request()->input('slug'))->first(); 

        if (!$file || Storage::delete($file->path . '/' . $file->name . '.' . $file->type) === false)
            return ['reply_code' => 2, 'reply_text' => 'no current file in storage'];
        // store new file 
        $file_path = request()->file('file')->store($file->path);

        // get file path infomation
        $file_info = pathinfo($file_path);

        // prepare data for updating
        $data = [ 
            'app_id' => request()->input('app_id'),
            'name' => $file_info['filename'],
            'type' => $file_info['extension'],
            'size' => Storage::size($file_path),
            'url' => $file->state === 'public' ? Storage::url($file_path) : null,
        ];

        $file->update($data); // update data 
        return $file;
    }

    public function deleteFile() {
        $file = File::where('slug', request()->input('slug'))->first();

        if(!$file || $file->deleted) return ['reply_code' => 1, 'reply_text' => 'no file'];

        if(!$file->app_id !== request()->input('app_id')) return ['reply_code' => 3, 'reply_text' => "Don't have permission to delete file"];

        if (Storage::delete($file->path . '/' . $file->name . '.' . $file->type) === false)
            return ['reply_code' => 2, 'reply_text' => 'no current file in storage'];

        $file->deleted = true;  //update deleted
        $file->update();    

        return ['reply_code' => 0, 'reply_text' => 'OK'];
    }

    public function deleteFolder() {
        $path = (request()->input('state') === 'public' ? 'public/': '/') . request()->input('app_name') . request()->folder;

        if (Storage::deleteDirectory($path) === false) return ['reply_code' => 3, 'reply_text' => 'no folder'];

        return ['reply_code' => 0, 'reply_text' => 'OK'];
    }
    
}