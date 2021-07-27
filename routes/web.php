<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Dashboard\DashboardController@index')->name('home.index');
Route::get('/JenisBahaya', 'Dashboard\JenisBahayaController@index')->name('JenisBahaya.index');

// Isi di sini


// 
Route::get('/contoh', function () {
    return view('copy_this.table');
})->name('table.index');
