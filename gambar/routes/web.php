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

Route::group(['prefix' => 'gambar', 'middleware' => 'auth'], function() {
	Route::get('/','GambarController@index');
    Route::get('/add','GambarController@create');
	Route::post('/add','GambarController@store');
	// Route::get('/edit/{id}','GambarController@show');
	// Route::post('/edit','GambarController@update');
	// Route::get('/delete/{id}','GambarController@destroy');
});

