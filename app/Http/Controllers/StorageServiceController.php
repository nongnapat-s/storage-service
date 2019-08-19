<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AppRegister;
use Illuminate\Support\Facades\Hash;
class StorageServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('storageServiceGuard');
    }
    public function upload()
    {
        return 'OK';
    }
}
