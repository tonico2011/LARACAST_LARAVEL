@extends('layout')

@section('content')
    <h1>My {{ $foo }} First Website</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection