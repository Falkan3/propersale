<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use \App\User;

//index route
Route::get('/', function () {
    $data = User::all();
    return view('welcome',['data' => $data]);
});

Auth::routes();
//route removing registration
//Route::any('/auth/register','HomeController@index');

Route::get('/home', 'HomeController@index');
Route::get('/parallax', 'MainController@parallax');
