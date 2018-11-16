@extends('layout')

@section('title', 'Wall')

@section('content')

    {!! $scripting !!}

    <div class="title m-b-md">
        Wall of fame! {{ $name }}
    </div>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task  }}</li>
        @endforeach
    </ul>

@endsection