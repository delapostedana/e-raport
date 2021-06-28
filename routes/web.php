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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/eskul', 'EskulController@eskul');
Route::get('/eskul/add', 'EskulController@eskulTambah');
Route::post('/proses', 'EskulController@prosesTambah');
Route::get('/eskul/edit/{id}', 'EskulController@eskulEdit');
Route::post('/eskul/update', 'EskulController@update');
Route::get('/eskul/hapus/{id}', 'EskulController@eskulHapus');

Route::get('/hafalan', 'HafalanController@hafalan');
Route::get('/hafalan/add', 'HafalanController@hafalanTambah');
Route::post('/proses', 'HafalanController@prosesTambah');
Route::get('/hafalan/edit/{id}', 'HafalanController@hafalanEdit');
Route::post('/hafalan/update', 'HafalanController@update');
Route::get('/hafalan/hapus/{id}', 'HafalanController@hafalanHapus');



