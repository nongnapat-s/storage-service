@extends('layouts.app')
@section('title','Register Application To Storage Service')
@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif  
    @if($message = Session::get('error'))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @endif  
<h2>User List</h2> <hr/>
<form action="{{url('/storeUserList')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <div class="form-group">
            <label class="font-weight-bold" for="app_name">Email :</label>
            <input 
                type="text" 
                class="form-control {{ !empty(Session::get('status')['app_name']) ? 'is-invalid' : ''}}" 
                name="email" 
                placeholder="email" required/>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection