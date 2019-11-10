<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\post;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $posts = post::get();
        return view('profile', ['post' => $posts]);
    }

    public function profile() {
        return view('profile');
    }

    public function update() {
        return view('edit');
    }
}
