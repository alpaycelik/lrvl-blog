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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'MakaleController@index');
Route::get('makale/{slug}', 'MakaleController@makaleDetay');
Route::get('makale-ekle', 'MakaleController@yeniMakale');
Route::post('makale-ekle', 'MakaleController@makaleEkle');
Route::get('makale-duzenle/{id}', 'MakaleController@makaleDuzenle');
Route::post('makale-duzenle/{id}', 'MakaleController@makaleGuncelle');
