<?php

//Auth::loginUsingId(2);

Route::get('document/{document}', 'DocumentsController@show');

Route::get('/', function () {
    return view('welcome');
});


Route::get('lessons', 'LessonsController@index');

Route::get('register', 'RegistersController@create');
Route::post('register', 'RegistersController@store');
Route::get('/logout', 'Auth\LoginController@logout');
Route::auth();

Route::get('/home', 'HomeController@index');
