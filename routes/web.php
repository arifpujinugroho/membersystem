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

Route::get('/', 'GuestController@Index')->name('home');
Route::post('/masuk', 'GuestController@Masuk');
Route::get('/keluar', 'GuestController@Keluar');
Route::post('/daftar', 'GuestController@Daftar');
Route::get('/datainstansi', 'GuestController@DataInstansi');
Route::post('/tambahinstansi', 'GuestController@TambahInstansi');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard','AuthController@Dashboard');
    Route::post('/uploadbukti','AuthController@UploadBukti');

    Route::get('/anggota','AuthController@Anggota');
    Route::get('/dataanggota','AuthController@DataAnggota');
    Route::get('/accanggota','AuthController@AccAnggota');
    Route::get('/resetanggota','AuthController@ResetAnggota');
    Route::get('/kartu','AuthController@Kartu');
});

