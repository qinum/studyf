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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/einnahmen', function () {
    return view('einnahmen');
});
Route::get('/statistik', function () {
    return view('statistic');
});
Route::get('/ausgaben', function () {
    return view('ausgaben');
});
Route::get('/impressum', function () {
        return view('impressum');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/benutzer/{name}', function($name){
   return 'Hallo ' .$name;
});
Route::get('/hallo', 'MeinController@halloSagen');

Route::get('blade', function () {
    return view('index2');
});

Route::get('statistik', function () {
    return view('statistik');
});

Route::get('registration', function () {
    return view('registration');
});

Route::get('login', function () {
    return view('login');
});

Route::get('testBlade', function () {
    return view('index2');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
