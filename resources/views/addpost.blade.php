@extends('layouts.app')

@section('content')
<div class="container" style="width: 60%;">
    <h1>Add New Post</h1>
    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="form-group">
            <label for="caption">Post Caption</label>
            <input type="text" name="caption" class="form-control" placeholder="Caption">
        </div>
        <div class="form-group">
            <label for="file">Post Image</label>
            <input type="file" name="image" class="form-control-file">
        </div>
        <input type="hidden" name="likes" value="0">
        <button type="submit" class="btn btn-primary">Add New Post</button>
    </form>
</div>
@endsection