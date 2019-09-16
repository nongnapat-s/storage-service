<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\AppRegister;
use App\UserList;

class AppRegisterController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $apps = DB::table('app_registers')
                    ->where('user_id',\Auth::id())
                    ->get();
        return view('index')->with([ 'apps' => $apps ]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // validate  app name
        $request->validate([
            'app_name' => 'required|alpha|unique:app_registers'
        ]);

        $continue = true;
        while($continue)
        {
            $token = Str::random(60);
            $duplicate_token = AppRegister::where('token', $token)->first();
            if($duplicate_token === null)
            {
                $continue = false;
            }
        }

        $checkUserList = UserList::where('email', $request->email)->first();
        if($checkUserList === null)
        {
            return redirect()->back()->with('error','Not Permission your Email');
        }

        $register_app = AppRegister::create(request()->all() + ['token' => $token , 'user_id' => \Auth::id()] );

        return redirect()->back()->with('success','Create Successfully');
    }

    public function destroy($id)
    {
        AppRegister::destroy($id);
        return redirect()->back()->with('success','Delete Successfully');
    }
}