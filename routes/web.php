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

Auth::routes();

Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::group(
	[
		'namespace' => 'Song',
		'as' => 'song.'
	], function () {

	Route::get('song', 'SongController@index')->name('index');
	Route::get('song/create', 'SongController@create')->name('create');
	Route::get('song/{song}', 'SongController@show')->name('show');
	Route::get('song/{song}/edit', 'SongController@edit')->name('edit');

	Route::post('song/create', 'SongController@store')->name('store');
	Route::patch('song/{song}', 'SongController@update')->name('update');

	Route::delete('song/delete/{id}/', 'SongController@destroy')->name('destroy');

});