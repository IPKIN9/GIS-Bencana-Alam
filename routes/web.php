<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');


Route::prefix('JenisBahaya')->group(function () {
    Route::get('/index', 'Dashboard\JenisBahayaController@index')->name('JenisBahaya.index');   
    Route::post('/insert', 'Dashboard\JenisBahayaController@insert')->name('JenisBahaya.insert');   
    Route::get('edit/{id}','Dashboard\JenisBahayaController@edit');


});
// Isi di sini


// 
Route::get('/contoh', function () {
    return view('copy_this.table');
})->name('table.index');
