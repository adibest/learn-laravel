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
    return view('layout.index');
});

Route::get('/home', function () {
	return view('depan.rumah');
});

Route::get('/salam', 'BlogController@ucapan');

Route::get('/universitas', function () {
	return view('universitas.index');
});

Route::get('/mahasantri', function () {
	return view('mahasantri.index');
});