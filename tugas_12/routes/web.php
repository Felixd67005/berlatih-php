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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome/{nama}', function ($nama) {
  return view('welcome', ["nama" => $nama]);
});
*/

Route::get('/','HomeController@home');

Route::get('/register', function () {
    return view('form');
});

Route::post('/welcome', 'AuthController@form_post');

