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
        $this->middleware('storageServiceGuard')->except('download');
    }
    public function __invoke(StorageServiceCaller $caller)
    {
        switch (request()->input('function')) {
            case 'upload':
                return $caller->upload();
            case 'download':
                return $caller->download();
            case 'put-file':
                return $caller->putFile();
            case 'delete-file':
                return $caller->deleteFile();
            case 'delete-folder':
                return $caller->deleteFolder();
            default:
                return response('error', 400);
        }
    }

    public function download($slug)
    {
        $file = File::where('slug', $slug)->first();
        return Storage::download($file->path . '/' . $file->name . '.' . $file->type);
    }
}
