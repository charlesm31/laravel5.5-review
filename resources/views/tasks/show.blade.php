@extends('layouts.app')

@section('content')

    <h1>{{ $task->body }}</h1>

    <ul class="list-group">
        @foreach($task->comments as $comment)
           <li class="list-group-item">{{ $comment->body }} <span class="pull-right"> {{ $comment->created_at->diffForHumans() }}</span></li>
        @endforeach
    </p>
    
    <form method="post" action="/tasks/{{ $task->id }}/comments">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="body">Body:</label>
        <textarea  rows="10"  class="form-control" id="body" name="body" placeholder="Type post here..."></textarea>
    </div>

    @include('validation.errors')
    @include('validation.success')

    <input type="submit" class="btn btn-primary" value="Publish">
</form>

@endsection

