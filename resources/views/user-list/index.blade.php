@extends('layouts.app')
@section('title','Register Application To Storage Service')
@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif  
    @if($message = Session::get('error'))
        <div class="alert alert-danger">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif  
    <h2>User List</h2> <hr/>
    <form action="{{url('/user-list/store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <div class="form-group">
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['app_name']) ? 'is-invalid' : ''}}" 
                name="email" 
                placeholder="Email" required/>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="role">Role :</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="admin" name="role" value="Admin">
                <label class="custom-control-label" for="admin">Admin</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="user" name="role" value="User">
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
                <button type="button" class="btn btn-info"><i class="fa fa-wrench"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
@endsection