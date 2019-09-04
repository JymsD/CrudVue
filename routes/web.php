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

Route::post('/departure/create', [
	'use' => 'DepartureController@create',
	'as' => 'departurecreate',
	]);

Route::get('/allQuery', 'QueryController@allQuery')->name('allQuery');
