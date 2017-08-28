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

Route::auth();

Route::group(['prefix' => 'kelurahan', 'middleware' => 'auth'], function() {
	Route::get('/','KelurahanController@index');
	Route::get('/add','KelurahanController@create');
	Route::post('/add','KelurahanController@store');
	Route::get('/edit/{id}','KelurahanController@show');
	Route::post('/edit','KelurahanController@update');
	Route::get('/delete/{id}','KelurahanController@destroy');
});

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'pasien', 'middleware' => 'auth'], function() {
	Route::get('/', 'PasienController@index');
	Route::get('/add', 'PasienController@create');
	Route::post('/add', 'PasienController@store');
	Route::get('/edit/{id}', 'PasienController@show');
	Route::post('/edit', 'PasienController@update');
	Route::get('/delete/{id}', 'PasienController@destroy');

});