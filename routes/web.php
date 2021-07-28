<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');
Route::prefix('kecamatan')->group(function() {
    Route::get('/index','Dashboard\KecamatanController@index')->name('kecamatan.index');
    Route::post('/insert', 'Dashboard\KecamatanController@insert')->name('kecamatan.insert');
    Route::get('edit/{id}', 'Dashboard\KecamatanController@edit');
    Route::post('update/{id}', 'Dashboard\KecamatanController@update');
    Route::delete('delete/{id}', 'Dashboard\KecamatanController@delete');
    });

Route::prefix('contoh')->group(function () {
    Route::get('/index', 'Dashboard\ContohController@index')->name('contoh.index');
    Route::post('/insert', 'Dashboard\ContohController@insert')->name('contoh.insert');
    Route::get('edit/{id}', 'Dashboard\ContohController@edit');
    Route::post('update/{id}', 'Dashboard\ContohController@update');
    Route::delete('delete/{id}', 'Dashboard\ContohController@delete');
});
