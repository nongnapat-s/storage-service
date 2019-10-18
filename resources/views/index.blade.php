@extends('layouts.app')
@section('title','Register Application To Storage Service')
@section('content')
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
    <h3>Register Application to Storage Service</h3>
    <a href="">Documentation</a>
    <hr class="mt-2"/>
    <form action="{{ url('/store') }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token()}}" >
        <input type="hidden" name="email" value="{{Auth::user()->email}}" >
        <div class="form-group">
            <input 
                type="text" 
                class="form-control" 
                name="app_name" 
                placeholder="App name" required />
        </div>
        <div class="form-group">
            <input 
                type="password" 
                class="form-control" 
                name="secret" 
                placeholder="Secret" required />
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Create</button>
    </form>
    <hr>
    @foreach($apps as $app)
    <div class="card mt-3">
        <div class="card-body">
            <h4>
                <form action="{{ url('delete/'. $app->id ) }}" method="POST" style="margin-bottom:0px;">
                    @csrf
                    <input type="hidden" name="_method" value="delete"/>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button> <i style=" font-size: 15px;" class="fa fa-ellipsis-v"></i>
                    <span class="badge badge-pill badge-secondary">App name : <span class="font-italic blue">{{ $app->app_name }}</span></span>
                    <span class="badge badge-pill badge-secondary">Token : <span class="font-italic blue">{{ $app->token }}</span></span>
                </form>
            </h4>
        </div>
    </div>
    @endforeach
  </div>
@endsection