<?php

namespace App\Http\Controllers;

use App\AppRegister;
use App\File;
use App\Services\StorageService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageServiceController extends Controller
{
    protected $states = [
        'public',
        'local'
    ];

    public function __construct()
    {
        $this->middleware('storageServiceGuard')->except('show');
    }
  
    public function store()
    {
        if  ( !request()->file('file') || 
              !request()->input('state') || 
              !in_array(request()->input('state'), $this->states)
            ) return response('incomplete request', 400);

        return (new StorageService)->upload();
    }

    public function show($slug)
    {
        $file = File::where('slug', $slug)->first();
        return Storage::download($file->path . '/' . $file->name . '.' . $file->type);
    }

    public function update()
    {
        if (!request()->file('file') || !request()->input('slug')) return response('incomplete request', 400);
        
        return (new StorageService)->update();
    }

    public function deleteFile()
    {
        if(!request()->input('slug')) return response('incomplete request', 400);

        return (new StorageService)->deleteFile();
    }

    public function deleteFolder()
    {
        if(!request()->input('folder') || !request()->input('state')) return response('incomplete request', 400);
        
        return (new StorageService)->deleteFolder();
    }
}
