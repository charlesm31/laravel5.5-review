@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tasks Lists</h1>

    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item"><a href="/tasks/{{$task->id}}">{{ $task->body }}</a></li>
        @endforeach
    </ul>
</div>

@endsection
