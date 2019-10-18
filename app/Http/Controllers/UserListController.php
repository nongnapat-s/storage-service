<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserList;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        return $this->middleware('adminOnly');
    }
    
    public function index()
    {
        $users = UserList::all();
        return view('user-list.index')->with(['users' => $users]);
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

        $request->validate([
            'email' => 'unique:user_lists',
        ]);
        
        $userList=\App\UserList::create($request->all());
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
        // $user_list = DB::table('user_lists')->where('id',$id)->first();
        $users = UserList::all();
        $user_selected = UserList::where('id',$id)->first();
        if(empty($user_selected)){
         
             return "Not Found user_list id=".$id;
          }
      //  return $user_list;
        return  view('/user-list/index')->with(['users'=> $users,'user_selected'=>$user_selected] );
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
          //return $request ->all();
          $user_selected =  UserList::find($id);
          if(empty($user_selected)){
            // return "Not Found Task=".$id;
             return redirect()->back()->with('success','Not Found');
         }
          $user_selected->update($request->all());
         
          return redirect()->back()->with('success','Update Detail Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_list = UserList::find($id);
        $user_list->delete();

       // $user_list = new \App\Task();
       $users = UserList::all();
      
       return redirect()->route('user-list');
    }
}
