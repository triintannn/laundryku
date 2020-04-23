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

Route::get('/admin','AdminController@index');

Route::get('/admin/outlet','OutletController@index');
Route::get('/admin/outlet/form','OutletController@tambah');
Route::post('/admin/outlet/store','OutletController@store');
Route::get('/admin/outlet/edit/{id}','OutletController@edit');
Route::patch('/admin/outlet/{id}','OutletController@update');
Route::get('/admin/outlet/hapus/{id}','OutletController@hapus');

Route::get('/admin/laporan','LaporanController@index');

Route::get('/admin/laundry','LaundryController@index');

Route::get('/admin/members','MembersController@index');

Route::get('/admin/transaksi','TransaksiController@index');

Route::get('/admin/users','UsersController@index');
Route::get('/admin/users/form','UsersController@tambah');