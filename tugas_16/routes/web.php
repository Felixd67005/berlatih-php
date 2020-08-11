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

Route::get('/', function(){
    return view('welcome');
});

// jika ingin memberi nama pada route lakukan :
//Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::put('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
Route::delete('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');

// jika ingin melihat daftar route lakukan:
//$php artisan route:list

// membuat route menggunakan resource
Route::resource('asks', 'PertanyaanResController');