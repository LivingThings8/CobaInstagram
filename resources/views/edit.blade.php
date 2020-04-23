@extends('layouts.app')

@section('content')
<div class="container" style="width: 60%;">
    <h1>Edit Profile</h1>
    <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ Auth::user()->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="{{ Auth::user()->description }}">
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" name="url" class="form-control" value="{{ Auth::user()->url }}">
        </div>
        <div class="form-group">
            <label for="file">Profile Image</label>
            <input type="file" name="image" class="form-control-file" value="{{ Auth::user()->avatar }}">
        </div>
        <button type="submit" class="btn btn-primary">Save Profile</button>
    </form>
</div>
@endsection
