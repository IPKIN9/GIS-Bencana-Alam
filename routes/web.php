<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');


Route::prefix('JenisBahaya')->group(function () {
    Route::get('/index', 'Dashboard\JenisBahayaController@index')->name('JenisBahaya.index');   
    Route::post('/insert', 'Dashboard\JenisBahayaController@insert')->name('JenisBahaya.insert');   
    Route::get('edit/{id}','Dashboard\JenisBahayaController@edit');
    Route::post('update/{id}', 'Dashboard\JenisBahayaController@update');
    Route::delete('delete/{id}', 'Dashboard\JenisBahayaController@delete');


});

Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');

Route::prefix('contoh')->group(function () {
    Route::get('/index', 'Dashboard\ContohController@index')->name('contoh.index');
    Route::post('/insert', 'Dashboard\ContohController@insert')->name('contoh.insert');
    Route::get('edit/{id}', 'Dashboard\ContohController@edit');
    Route::post('update/{id}', 'Dashboard\ContohController@update');
    Route::delete('delete/{id}', 'Dashboard\ContohController@delete');
});
