<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');

// Isi di sini


// 

Route::prefix('kelas')->group(function () {
    Route::get('/index','Dashboard\KelasController@index')->name('kelas.index');
    Route::post('/insert','Dashboard\KelasController@insert')->name('kelas.insert');
    Route::get('edit/{id}','Dashboard\KelasController@edit');
    Route::post('update/{id}','Dashboard\KelasController@update');
    Route::delete('delete/{id}','Dashboard\KelasController@delete');
});
Route::prefix('contoh')->group(function () {
    Route::get('/index', 'Dashboard\ContohController@index')->name('contoh.index');
    Route::post('/insert', 'Dashboard\ContohController@insert')->name('contoh.insert');
    Route::get('edit/{id}', 'Dashboard\ContohController@edit');
    Route::post('update/{id}', 'Dashboard\ContohController@update');
    Route::delete('delete/{id}', 'Dashboard\ContohController@delete');
});
