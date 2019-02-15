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
	Route::prefix('user')->group(function(){
		Route::name('user.')->group(function(){
			Route::get('/beranda', 'UserController@index')->name('beranda');
			Route::get('/laporan', 'UserController@laporan')->name('laporan');

			Route::post('/beranda', 'UserController@pesan')->name('pesan');
		});
	});
});

Route::middleware(['auth', 'Admin'])->group(function(){
	Route::prefix('admin')->group(function(){
		Route::name('admin.')->group(function(){
			Route::get('/beranda', 'AdminController@index')->name('beranda');
			Route::get('/users', 'AdminController@users')->name('users');
			Route::get('/kasir', 'AdminController@kasir')->name('kasir');
			Route::get('/tambah', 'AdminController@masakan')->name('tambah');
			Route::get('/laporan', 'AdminController@laporan')->name('laporan');
			Route::get('/pembayaran/{id}', 'AdminController@pembayaran')->name('pembayaran');
			Route::get('/export', 'AdminController@exportPdf')->name('report');

			Route::post('/tambah', 'AdminController@tambahMasakan')->name('tambahMasakan');
			Route::post('/hapus', 'AdminController@hapusUser')->name('hapusUser');
			Route::post('/laporan', 'AdminController@keLaporan')->name('keProses');
		});
	});
});