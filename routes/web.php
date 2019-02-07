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

Route::middleware(['auth', 'Pelanggan'])->group(function(){
	Route::name('user.')->group(function(){
		Route::get('/beranda', 'HomeController@index')->name('beranda');	
		});
});

Route::middleware(['auth', 'Admin'])->group(function(){
	Route::name('admin.')->group(function(){
		});
});