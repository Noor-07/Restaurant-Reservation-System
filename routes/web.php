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

Route::get('/','HomeController@index')->name('welcome');
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');

Auth::routes();



Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){
Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
Route::resource('category','CategoryController');
Route::resource('item','ItemController');
Route::get('reservation','ReservationController@index')->name('reservation.index');
Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');

});
