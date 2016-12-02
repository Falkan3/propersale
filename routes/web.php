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

//Index route
Route::get('/', 'MainController@index');
Route::get('/lp', 'MainController@landingpage');

Route::post('/mail', 'MainController@mail');

Route::group(['prefix' => 'att'], function () {
    Route::group(['prefix' => 'informacje'], function () {
        Route::get('/', 'MainController@informacje');
    });
    Route::group(['prefix' => 'prywatnosc'], function () {
        Route::get('/', 'MainController@prywatnosc');
    });
    Route::group(['prefix' => 'regulamin'], function () {
        Route::get('/', 'MainController@regulamin');
    });
    Route::group(['prefix' => 'cookies'], function () {
        Route::get('/', 'MainController@cookies');
    });
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/delete/{id}', 'ContactController@deleteContact');
    Route::get('/validate/{id}', 'ContactController@validateContact');
    Route::get('/invalidate/{id}', 'ContactController@invalidateContact');
});




/*
Route::get('/', function () {
    $data = User::all();
    return view('welcome',['data' => $data]);
});
*/

Auth::routes();
//route removing registration
//Route::any('/auth/register','HomeController@index');

Route::get('/home', 'HomeController@index');
//Route::get('/parallax', 'MainController@parallax');
