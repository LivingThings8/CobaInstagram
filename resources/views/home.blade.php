@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-8">
            <div class="card my-3">
                <div class="card-header">
                    <img src="{{ $post->users['avatar'] }}" alt="Foto" height="50px" class="rounded-circle">
                    {{ $post->users['name'] }}
                </div>

                <div class="card-body text-center">
                    <img src="{{ $post->image }}" alt="Foto-Konten" style="height: 300px;">
                </div>

                <div class="card-footer">
                    <a class="far fa-heart" href="{{ route('post.like', ['id' => $post->id]) }}"></a>
                    <i class="far fa-comment"></i>
                    <p><b>{{ $post->likes }} Likes</b></p>

                    <p style="display: inline;"><b style="display: inline;">{{ $post->users['email'] }}</b></p>
                    <p style="display: inline;">{{ $post->caption }}</p>
                    
                    @foreach($post->comment as $komen)
                    <br>{{ $komen->user['name'] }} : {{ $komen['comment'] }}
                    @endforeach
                    <form action="{{ route('post.comment') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="comment" placeholder="Komentar">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection