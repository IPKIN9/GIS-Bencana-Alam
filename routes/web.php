<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');
Route::prefix('kelas')->group(function () {
    Route::get('/index','Dashboard\KelasController@index')->name('kelas.index');
    Route::post('/insert','Dashboard\KelasController@insert')->name('kelas.insert');
    Route::get('edit/{id}','Dashboard\KelasController@edit');
    Route::post('update/{id}','Dashboard\KelasController@update');
    Route::delete('delete/{id}','Dashboard\KelasController@delete');
});
Route::prefix('JenisBahaya')->group(function () {
    Route::get('/index', 'Dashboard\JenisBahayaController@index')->name('JenisBahaya.index');   
    Route::post('/insert', 'Dashboard\JenisBahayaController@insert')->name('JenisBahaya.insert');   
    Route::get('edit/{id}','Dashboard\JenisBahayaController@edit');
    Route::post('update/{id}', 'Dashboard\JenisBahayaController@update');
    Route::delete('delete/{id}', 'Dashboard\JenisBahayaController@delete');
}); 
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
