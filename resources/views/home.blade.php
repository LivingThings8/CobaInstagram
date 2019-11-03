@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-8">
            <div class="card my-3">
                <div class="card-header">
                    <img src="{{ $post->avatar }}" alt="Foto" height="50px" class="rounded-circle">
                    {{ $post->name }}
                </div>

                <div class="card-body text-center">
                    <img src="{{ $post->image }}" alt="Foto-Konten" style="height: 300px;">
                </div>

                <div class="card-footer">
                    <p><b>{{ $post->email }}</b></p>
                    <p>{{ $post->caption }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection