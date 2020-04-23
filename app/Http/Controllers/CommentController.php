<?php

namespace App\Http\Controllers;

use App\komentar;
use App\post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request) {
        $comment = new komentar();
        $comment -> user_id = $request -> user_id;
        $comment -> post_id = $request -> post_id;
        $comment -> comment = $request -> comment;
        $comment -> save();
        return redirect('home');
    }

    public function like($id) {
        post::find($id)->increment('likes');
        return redirect('home');
    }

    public function addpost() {
        return view('addpost');
    }

    public function create(Request $request) {
        $imagename = $request->file('image')->getClientOriginalName();
        $request['image']->move(base_path() . '/public/', $imagename);

        $post = new post();
        $post->user_id = $request->user_id;
        $post->caption = $request->caption;
        $post->image = $imagename;
        $post->likes = $request->likes;
        $post->save();
        return redirect('home');
    }
}
