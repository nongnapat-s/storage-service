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
                    
        return response((new StorageService)->upload(),200);
    }

    public function show($slug)
    {
        $file = File::where('slug', $slug)->first();
        
        if (!$file || $file->deleted) return ['reply_code' => 2, 'reply_text' => 'no current file in storage'];
        
        return Storage::download($file->path . '/' . $file->name . '.' . $file->type);
    }

    public function update()
    {
        if (!request()->file('file') || !request()->input('slug')) return response('incomplete request', 400);
        
        return response((new StorageService)->update(),200);
    }

    public function deleteFile()
    {
        if(!request()->input('slug')) return response('incomplete request', 400);

        return response((new StorageService)->deleteFile(), 200);
    }

    public function deleteFolder()
    {
        if(!request()->input('folder') || !request()->input('state')) return response('incomplete request', 400);
        
        return response((new StorageService)->deleteFolder(),200);
    }
}
