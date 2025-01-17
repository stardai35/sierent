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

//  Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('/about');
// });
// Route::get('/tes', function () {
//     return view('/tes');
// });

// Route::get('/pembayaran', function () {
//     return view('/pembayaran.index');
// });

// home about
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');

//services
Route::get('pelayanan','PelayananController@index');

//Basket
Route::get('/baskets','BasketsController@index')->middleware('checkRole:admin,penjual,pembeli');
Route::get('/baskets/create','BasketsController@create')->middleware('checkRole:penjual');
Route::get('/baskets/{basket}','BasketsController@show')->middleware('checkRole:penjual,pembeli');
Route::post('/baskets','BasketsController@store')->middleware('checkRole:penjual');
Route::delete('/baskets/{basket}','BasketsController@destroy')->middleware('checkRole:penjual');
Route::get('/baskets/{basket}/edit','BasketsController@edit')->middleware('checkRole:penjual');
Route::patch('/baskets/{basket}','BasketsController@update')->middleware('checkRole:penjual');
Route::get('admin','BasketsController@admin')->middleware('checkRole:admin');
Route::get('penjual','BasketsController@penjual')->middleware('checkRole:penjual');


// barang
Route::get('/barangs','BarangsController@index')->middleware('checkRole:admin,penjual,pembeli');
Route::get('/barangs/create','BarangsController@create')->middleware('checkRole:pembeli');
Route::post('/barangs','BarangsController@store')->middleware('checkRole:penjual,pembeli');
Route::put('/barangs/updateqty/{id}','BarangsController@updateqty')->middleware('checkRole:penjual,pembeli');
// untuk hapus satu data
Route::delete('/barangs/{basket}','BarangsController@destroy')->middleware('checkRole:admin,penjual,pembeli');
// untuk hapus semua data alias refresh
// Route::get('/barangs/hapus/{user_id}', 'BarangsController@delete')->middleware('checkRole:pembeli');
// Route::get('/trash','BarangsController@trash')->middleware('auth');

// untuk pembayaran
Route::get('pembayaran','PembayaranController@index')->middleware('auth')->middleware('checkRole:pembeli');
// Route::get('pembayaran/create','PembayaranController@create')->middleware('auth');
// Route::post('pembayaran','PembayaranController@store')->middleware('auth');

/*transaksi online*/
// Route::get('/transaksionline', function () {
// return view('/transaksionline.index');
// });

Route::get('transaksionline','TransaksionlinesController@index')->middleware('checkRole:pembeli');
Route::get('transaksionline/edit/{id}','TransaksionlinesController@edit')->middleware('checkRole:pembeli');
Route::get('transaksionline/create','TransaksionlinesController@create')->middleware('checkRole:pembeli');
Route::post('transaksionline/store','TransaksionlinesController@store');
Route::put('transaksionline/update/{id}','TransaksionlinesController@update');
Route::get('datato','TransaksionlinesController@datato')->middleware('checkRole:admin,penjual');
Route::get('historytransaksionline/{id}','TransaksionlinesController@historytransaksionline')->middleware('checkRole:pembeli');
// batas cod dan transaksionlines
Route::get('cod','CodController@index')->middleware('checkRole:pembeli');
Route::get('cod/create','CodController@create')->middleware('checkRole:pembeli');
Route::post('cod/store','CodController@store');
Route::get('datacod','CodController@datacod')->middleware('checkRole:admin,penjual');
Route::get('cod/coddetails/{id}','CodController@coddetails');
Route::get('history','CodController@historycod')->middleware('checkRole:pembeli');


// konfirmasi
// Route::get('/konfirmasi','KonfirmasiController@index')->middleware('checkRole:admin,penjual');;
// Route::get('/konfirmasi/create','KonfirmasiController@create')->middleware('auth');
// Route::post('/konfirmasi','KonfirmasiController@store');

// template admin
Route::get('/tableadmin', function () {
return view('tableadmin.tableadmin');
});

Route::get('/data-table', function(){
    return view('tableadmin.data-table');
});
// 
//login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// data user
Route::get('user','UserController@index')->middleware('checkRole:admin');
Route::get('user/edit/{id}','UserController@edit');
Route::put('user/update/{id}','UserController@update');
// end data user

// edit password
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
// end edit password
