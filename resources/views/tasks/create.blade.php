@extends('layout.master')

@section('content')


@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<form method="post" action="{{ url('/tasks') }}">
    {{ csrf_field() }}

    <div class="form-group">
    <label for="body">Body:</label>
    <textarea  rows="10"  class="form-control" id="body" name="body" placeholder="Type post here..."></textarea>
    </div>

    @include('validation.errors')

    <input type="submit" class="btn btn-primary" value="Publish">
</form>



@endsection