@extends('layouts.app')

@section('content')

<form method="post" action="/tasks">
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