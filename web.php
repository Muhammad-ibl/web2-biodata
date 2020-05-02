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

Route::get('inputbiodata','BiodataController@created');
Route::post('savecreate','BiodataController@savecreate');
Route::get('daftarbiodata','BiodataController@read');
Route::get('editbiodata/{id}','BiodataController@update');
Route::post('update','BiodataController@saveupdate');
Route::get('hapus/{id}','BiodataController@delete');

