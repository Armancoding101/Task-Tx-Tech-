<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/connections', function () {
    return "This is the connections page";
});

Route::get('/{name}', function ($name) {
    return "This is the profile page for ".$name;
});

/*
Route::get('/post/{id}/{name}', function ($id, $name) {
    return "This is post number ".$id." ".$name;
});

Route::get('/admin/posts/example', array('as'=>'admin.home' ,function () {
    $url = route('admin.home');
    return "The url is ".$url;
}));
*/



Route::auth();

Route::get('/home', 'HomeController@index');
