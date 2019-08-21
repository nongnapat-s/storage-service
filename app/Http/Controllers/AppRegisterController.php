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
    public function index()
    {
       // $apps = AppRegister::all();
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
        $continue = true;
        while($continue)
        {
            $token = Str::random(60);
            $duplicate = AppRegister::where('token', $token)->first();
            if($duplicate === null)
            {
                $continue = false;
            }
        }

        $checkUserList = UserList::where('email', $request->email)->first();
        if($checkUserList === null)
        {
            return redirect()->back()->with('error','Not Permission your Email');
        }

        $register_app = AppRegister::create(request()->all()+ ['user_id' => \Auth::id()]);
        $register_app->token = $token;
        $register_app->save();

        return redirect()->back()->with('success','Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}