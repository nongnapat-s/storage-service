<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ url('/css/bootstrap-4.3.1/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <title>@yield('title')</title>
    </head>
    <style>
        .blue {
            color : #F1C40F;
        }
    </style>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-archive"></i> Storage Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                @if(Auth::user())
                <li class="nav-item">
                    <button class="btn btn-outline" type="submit" ><i class="fa fa-user-circle-o"></i> {{ Auth::user()->email }}</button>
                </li>
                <li class="nav-item">
                    <form action="{{ url('/logout') }}" method="post" class="mb-0">
                        @csrf
                        <button class="btn btn-outline" type="submit" ><i class="fa fa-sign-out"></i> Sign out</button>
                    </form>
                </li>
                @endif 
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col-12 mt-4">         
            @yield('content')
        </div>
    </div>
    <footer>
        @yield('footer')
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>