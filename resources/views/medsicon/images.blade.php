@extends('layouts.app')

@section('title', "Consult's Images")

@section('content')
    <ul>
        @if(isset($directories))
            @foreach ($directories as $index => $directory)
            <li>
                <a href="{{ url('medsicon/images?directory=' . $directory) }}" style="color:#5DADE2;">{{ $directory}}</a>
            </li>
            @endforeach
        @endif

        @if(isset($imagePaths)) 
            @foreach ($imagePaths as $index => $imagePath)
                <li>
                    <a href="{{ url('medsicon/images?imagePath=' . $imagePath) }}" style="color:#5DADE2;">{{ $imagePath }}</a>
                </li>
            @endforeach
        @endif

        @if(isset($files)) 
            @foreach ($files as $index => $file)
                <li>
                    @if (date('Y-m-d') === date('Y-m-d', $file['lastModified']))
                        <a href="" style="color:#E74C3C;">{{ $file['file']  . ' => ' . $file['date'] }} </a>
                    @else
                        <a href="" style="color:#5DADE2;">{{ $file['file']  . ' => ' . $file['date'] }} </a>
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
@endsection