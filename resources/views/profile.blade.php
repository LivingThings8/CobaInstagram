@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="../../{{ Auth::user()->avatar }}" alt="" width="200px" height="200px" style="border-radius: 100%;">
        </div>
        <div class="col-7">
            <h3><b>{{ Auth::user()->name }}</b></h3>
            <br>
            <a href="{{ route('update') }}">Edit Profile</a>
            <br>
            <p>{{ $count }} <b>Posts</b></p>
            <b>{{ Auth::user()->title }}</b>
            <br>
            <p>{{ Auth::user()->description }}</p>
            <a href="{{ Auth::user()->url }}">{{ Auth::user()->url }}</a>
        </div>
        <div class="col-2">
            <a href="{{ route('addpost') }}">Add New Post</a>
        </div>
    </div>
    <br>
    <br>

    <div class="row">
    @foreach($post as $posts)
        <div class="col-4">
            <img src="../{{ $posts->image }}" alt="" width="300px" height="300px">
        </div>
        @endforeach
    </div>
</div>
@endsection
