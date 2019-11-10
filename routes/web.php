<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    // use Illuminate\Support\Facades\Auth;
    // use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/post/comment', 'CommentController@comment')->name('post.comment');

Route::get('/post/likes/{id}', 'CommentController@like')->name('post.like');

Route::get('/user/profile', 'ProfileController@index')->name('profile');

Route::get('/user/profile/update', 'ProfileController@update')->name('update');

Route::get('/user/addpost', 'CommentController@addpost')->name('addpost');

Route::post('/user/createpost', 'CommentController@create')->name('create');