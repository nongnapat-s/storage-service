@extends('layouts.app')
@section('title','Register Application To Storage Service')
@section('content')

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>

                @endforeach
        </div>
    @endif
   <!-- {{$apps}} -->
    <h2>Register Application To Storage Service</h2>
    <form action="{{url('/saveRegisterApp')}}" method="post" >
        <input class="form-check-input @error('type') is-invalid @enderror" type="hidden" name="_token" value="{{ csrf_token()}}" >
        <div class="form-group">
            <label for="appName">Application Name:</label>
            <input type="text" name="app_name" class="form-control" id="app_name" aria-describedby="appNameHelp" value="{{old('app_name' )}}" placeholder="Application Name">
            <!-- <small id="appNameHelp" class="form-text text-muted">กรุณาระบุชื่อระบบ</small> -->
        </div>
        <div class="form-group">
            <label for="appSecret">Application Secret:</label>
            <input type="text" name="secret" class="form-control" id="appSecret" placeholder="Application Secret">
        </div>
        <div class="form-group">
            <label for="appSecret">-Select File Type Public:</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="public_type_file[]" class="form-check-input" id="pdf" value="pdf">
            <label class="form-check-label" for="pdf">PDF</label>
        </div>
        <div class="form-check form-check-inline">
             <input type="checkbox" name="public_type_file[]" class="form-check-input" id="jpg" value="jpg">
             <label class="form-check-label" for="jpg">JPG/JPEG</label>
        </div>
        <div class="form-check form-check-inline">
             <input type="checkbox" name="public_type_file[]" class="form-check-input" id="png" value="png">
             <label class="form-check-label" for="png">PNG</label>
        </div>
        <div class="form-check form-check-inline">
             <input type="checkbox" name="public_type_file[]" class="form-check-input" id="gif" value="gif">
             <label class="form-check-label" for="gif">GIF</label>
        </div>
        <br><br>
        <div class="form-group">
            <label for="appSecret">-Select File Type Private:</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="private_type_file[]" class="form-check-input" id="pdf" value="pdf">
            <label class="form-check-label" for="pdf">PDF</label>
        </div>
        <div class="form-check form-check-inline">
             <input type="checkbox" name="private_type_file[]" class="form-check-input" id="jpg" value="jpg">
             <label class="form-check-label" for="jpg">JPG/JPEG</label>
        </div>
        <div class="form-check form-check-inline">
             <input type="checkbox" name="private_type_file[]" class="form-check-input" id="png" value="png">
             <label class="form-check-label" for="png">PNG</label>
        </div>
        <div class="form-check form-check-inline">
             <input type="checkbox" name="private_type_file[]" class="form-check-input" id="gif" value="gif">
             <label class="form-check-label" for="gif">GIF</label>
        </div>
        <br><br>
        <div class="form-group">
            <label for="maxSize">Maximum File Size(mb):</label>
            <input type="text" name="size" class="form-control" id="maxSize" name="maxSize" placeholder="5">
        </div>
        <div class="form-group">
            <label for="appFileFloder">Select Sub Floder:</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="checkbox" name="year_folder" class="form-check-input" id="floderYear" value="1">
            <label class="form-check-label" for="floderYear">YEAR</label>
        </div>
        <div class="form-check form-check-inline">
             <input type="checkbox" name="month_folder" class="form-check-input" id="floderMonth" value="1">
             <label class="form-check-label" for="floderMonth">MONTH</label>
        </div>
     
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div>
    <table class="table table-striped">
    <thead>
      <tr>
            <th>#</th>
            <th>Application Name</th>
            <th>Secret</th>
            <th>Token</th>
            <th>Regis Date</th>
      </tr>
    </thead>
    <tbody id="myTable">
    @foreach($apps as $app)
        <tr>
            <td>{{$app->id}}</td>
            <td>{{$app->app_name}}</td>
            <td>{{$app->secret}}</td>
            <td>{{$app->token}}</td>
            <td>{{$app->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
  </table>
  </div>
@endsection