<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\post;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $posts = Post::where('user_id', auth()->user()->id)->get();
        $user_post = auth()->user()->id;
        $count =  Post::where('user_id', $user_post)->count();
        return view('profile', ['post' => $posts], ['count' => $count]);
    }

    public function profile() {
        return view('profile');
    }

    public function update() {
        return view('edit');
    }

    public function save(Request $request) {
        $imagename = $request->file('image')->getClientOriginalName();
        $request['image']->move(base_path() . '/public/', $imagename);

        $user = User::find($request->user_id);
        $user->title = $request->title;
        $user->description = $request->description;
        $user->url = $request->url;
        $user->avatar = $imagename;
        $user->save();

        $posts = post::get();
        $count = post::all()->count();
        return view('profile', ['post' => $posts], ['count' => $count]);
    }
}
