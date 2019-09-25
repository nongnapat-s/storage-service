@extends('layouts.app')
@section('title','Register Application To Storage Service')
@section('content') 

@if (isset($users))
    <!-- {{$users}} -->
@endif
<br>
@if (isset($user_selected))
    <!-- {{"selectd=".$user_selected}} -->
   
@endif
    @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="fa fa-check-circle"></i> Success </strong>  
            {{ $message }}
        </div>
    @endif  

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong><i class="fa fa-exclamation-circle"></i> Errors </strong>  
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif
    
    <h2>User List</h2> <hr/>
    @if (isset($user_selected))
         <form action="{{url('/user-list/update',$user_selected->id)}}" method="post" enctype="multipart/form-data" >  
        <input type="hidden" name="_method" value="PUT">
    @else
        <form action="{{url('/user-list/store')}}" method="post" enctype="multipart/form-data"  >
    @endif
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <div class="form-group">
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['app_name']) ? 'is-invalid' : ''}}" 
                name="email" 
                value="{{old('email' , isset($user_selected) ? $user_selected->email : '' )}}"
                placeholder="Email" required/>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="role">Role :</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="admin" name="role" value="Admin" {{old('role',isset($user_selected) ? $user_selected->role :'')== 'Admin' ? 'checked':''  }} required/>
                <label class="custom-control-label" for="admin">Admin</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="user" name="role" value="User" {{old('role',isset($user_selected) ? $user_selected->role :'')== 'User' ? 'checked':''  }} required/>
                <label class="custom-control-label" for="user">User</label>
            </div> 
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Create</button>
    </form>
    <table class="table table-bordered table-hover">
    <thead>
      <tr>
            <th class="text-center">#</th>
            <th>Email</th>
            <th>Role</th>
            <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $index => $user)
        <tr>
            <td class="text-center">{{$index + 1}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td class="text-center">
            <form action="{{url('/user-list/edit',$user->id)}}" method="get">  
                    <button type="submit" class="btn btn-info"><i class="fa fa-wrench"></i></button>
                </form>
                <form action="{{url('/user-list/delete',$user->id)}}" method="get">  
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection