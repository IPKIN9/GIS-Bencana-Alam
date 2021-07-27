<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');

Route::prefix('contoh')->group(function () {
    Route::get('/index', 'Dashboard\ContohController@index')->name('contoh.index');
});
