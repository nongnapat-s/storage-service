<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppRegister;
use App\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Contracts\StorageServiceCaller;

class StorageServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('storageServiceGuard'); 
    }
    public function __invoke(StorageServiceCaller $caller)
    {
        return $caller->upload(request()->all());
    }

    public function download($slug)
    {
        $file = File::where('slug', $slug)->first();
        return Storage::download($file->path . '/' . $file->name);
    }

    public function delete()
    {
        $file = File::where('slug', request()->input('slug'))->first();
        Storage::delete($file->path . '/' . $file->name);
        $file->deleted = true;
        $file->update();
        return ['reply_code' => 0 , 'reply_text' => 'OK'];
    }
}
