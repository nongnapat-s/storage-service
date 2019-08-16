<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $apps = \App\Apps::all();
        return view('index')->with(['apps'=>$apps]);
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
        $validate = [
            'app_name' => 'required',
            'secret' => 'required',
            'size' => 'required|max:2'
        
           
        ];

        $errorMsg = [
            'app_name.required' => 'กรุณาระบุชื่อระบบงาน(Application Name)',
            'secret.required' => 'กรุณาระบุรหัสลับสำหรับระบบงาน(Application Secret)',
            'size.required' => 'กรุณาระบุขนาดไฟล์ใหญ่ที่สุด',

          
        ];

        $request->validate($validate,$errorMsg);

      //  $token =  Str::random(60);
       
       //return([$request->all()]);
       
        $app=\App\Apps::create($request->all()+ ['token' => Str::random(60)]);
       

        //return view('saveRegisterApp');
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
