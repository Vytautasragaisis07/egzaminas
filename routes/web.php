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
    return view('auth.login');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createAccount', 'RegisterController@FirstAccount');

Route::get('/logout', 'HomeController@atsijungti');

Route::get('/make_transfer', 'TransferController@makeTransfer');
Route::post('/store_transfer', 'TransferController@store_transfer');
Route::get('/transfer_summary', 'TransferController@Transfersummary');
