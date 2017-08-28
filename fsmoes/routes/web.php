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
    return view('home');
});


Auth::routes();

Route::get('/dashboard', 'HomeController@index');


Route::group(['prefix' => 'artikel', 'middleware' => 'auth'], function() {
	Route::get('/','artikelController@index');
    Route::get('/add','artikelController@create');
	Route::post('/add','artikelController@store');
	// Route::get('/edit/{id}','artikelController@show');
	// Route::post('/edit','artikelController@update');
	// Route::get('/delete/{id}','artikelController@destroy');
});


Route::group(['middleware'=>'Auth'],function(){


	

});
