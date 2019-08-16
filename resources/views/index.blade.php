@extends('layouts.app')
@section('title','Register Application To Storage Service')
@section('content')
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

 

  
    <!-- {{$apps}} -->
    <h2>Register Application To Storage Service</h2> <hr/>
    <form  class="needs-validation" action="{{url('/store')}}" method="post"  novalidate>
        <input class="form-check-input @error('type') is-invalid @enderror" type="hidden" name="_token" value="{{ csrf_token()}}" >

        <div class="form-group">
            <label class="font-weight-bold" for="app_name">Application name :</label>
            <input type="text" name="app_name" class="form-control" id="app_name" aria-describedby="appNameHelp" value="{{old('app_name' )}}" placeholder="Application Name" required/>
            <!-- <small id="appNameHelp" class="form-text text-muted">กรุณาระบุชื่อระบบ</small> -->
            <div class="invalid-feedback">
               Please provide application name
            </div>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="appSecret">Application secret :</label>
            <input type="password" name="secret" class="form-control" id="appSecret" placeholder="Application Secret" required/>
            <div class="invalid-feedback">
               Please provide application secret
            </div>
        </div>

        @if (Session::get('status')['file_type'] != 'undefined')
                  <div >
                    <font color="red">
                     {{Session::get('status')['file_type'] }}
                     </font>
                     </div> 
                @endif
        <div class="form-group">
            <label class="font-weight-bold" for="appSecret">Accept file type in public :</label>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="public_type_file[]" class="form-check-input" id="public_pdf" value="pdf" >
                <label class="form-check-label" for="public_pdf">PDF</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="public_type_file[]" class="form-check-input" id="public_jpg" value="jpg" >
                <label class="form-check-label" for="public_jpg">JPG/JPEG</label>
            </div>
            <div class="form-check form-check-inline">
             <input type="checkbox" name="public_type_file[]" class="form-check-input" id="public_png" value="png" >
             <label class="form-check-label" for="public_png">PNG</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="public_type_file[]" class="form-check-input" id="public_gif" value="gif" >
                <label class="form-check-label" for="public_gif">GIF</label>
            </div>
        </div>
            <div class="form-group">
                <label class="font-weight-bold"for="appSecret">Accept file type in private :</label>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="private_type_file[]" class="form-check-input" id="private_pdf" value="pdf" >
                <label class="form-check-label" for="private_pdf">PDF</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="private_type_file[]" class="form-check-input" id="private_jpg" value="jpg" >
                <label class="form-check-label" for="private_jpg">JPG/JPEG</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="private_type_file[]" class="form-check-input" id="private_png" value="png" >
                <label class="form-check-label" for="private_png">PNG</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="private_type_file[]" class="form-check-input" id="private_gif" value="gif" >
                <label class="form-check-label" for="private_gif">GIF</label>
            </div>
        
              
               
        </div>
        
        
        
           
          
        
        <div class="form-group">
            <label class="font-weight-bold" for="maxSize">Maximum file size (mb):</label>
            <input type="text" name="size" class="form-control" id="maxSize" name="maxSize" value="5" required/>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="appFileFolder">Select sub folder:</label>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="year_folder" class="form-check-input" id="folderYear" value="1">
                <label class="form-check-label" for="folderYear">YEAR</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="checkbox" name="month_folder" class="form-check-input" id="folderMonth" value="1">
                <label class="form-check-label" for="folderMonth">MONTH</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <div>
    <table class="table table-striped">
    <thead>
      <tr>
            <th>#</th>
            <th>Application Name</th>
            <th>Token</th>
            <th>Regis Date</th>
      </tr>
    </thead>
    <tbody id="myTable">
    @foreach($apps as $app)
        <tr>
            <td>{{$app->id}}</td>
            <td>{{$app->app_name}}</td>
            <td>{{$app->token}}</td>
            <td>{{$app->created_at}}</td>
        </tr>
    @endforeach
    </tbody>
  </table>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
  </div>
@endsection