@extends('layouts.app')

@section('content')
<div class="container" style="width: 60%;">
    <h1>Edit Profile</h1>
    <form>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" class="form-control">
        </div>
        <div class="form-group">
            <label for="file">Profile Image</label>
            <input type="file" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Save Profile</button>
    </form>
</div>
@endsection