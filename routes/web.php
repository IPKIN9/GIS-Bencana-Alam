<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');

// Isi di sini


// 

Route::prefix('contactus')->group(function () {
    Route::get('/index','Dashboard\ContactusController@index')->name('contactus.index');
    Route::post('/insert','Dashboard\ContactusController@insert')->name('contactus.insert');
    Route::get('edit/{id}','Dashboard\ContactusController@edit');
    Route::post('update/{id}','Dashboard\ContactusController@update');
    Route::delete('delete/{id}','Dashboard\ContactusController@delete');
});
Route::prefix('contoh')->group(function () {
    Route::get('/index', 'Dashboard\ContohController@index')->name('contoh.index');
    Route::post('/insert', 'Dashboard\ContohController@insert')->name('contoh.insert');
    Route::get('edit/{id}', 'Dashboard\ContohController@edit');
    Route::post('update/{id}', 'Dashboard\ContohController@update');
    Route::delete('delete/{id}', 'Dashboard\ContohController@delete');
});
