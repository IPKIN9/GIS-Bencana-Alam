<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Web\WebController@index')->name('web.index');
Route::get('/about_us', 'Web\WebController@about')->name('web.about');
Route::get('/maps', 'Web\WebController@maps')->name('web.maps');
Route::get('search/{id}', 'Web\WebController@search');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('home.index');
    Route::prefix('kelas')->group(function () {
        Route::get('/index', 'Dashboard\KelasController@index')->name('kelas.index');
        Route::post('/insert', 'Dashboard\KelasController@insert')->name('kelas.insert');
        Route::get('edit/{id}', 'Dashboard\KelasController@edit');
        Route::post('update/{id}', 'Dashboard\KelasController@update');
        Route::delete('delete/{id}', 'Dashboard\KelasController@delete');
    });
    Route::prefix('kecamatan')->group(function () {
        Route::get('/index', 'Dashboard\KecamatanController@index')->name('kecamatan.index');
        Route::post('/insert', 'Dashboard\KecamatanController@insert')->name('kecamatan.insert');
        Route::get('edit/{id}', 'Dashboard\KecamatanController@edit');
        Route::post('update/{id}', 'Dashboard\KecamatanController@update');
        Route::delete('delete/{id}', 'Dashboard\KecamatanController@delete');
    });
    Route::prefix('JenisBahaya')->group(function () {
        Route::get('/index', 'Dashboard\JenisBahayaController@index')->name('JenisBahaya.index');
        Route::post('/insert', 'Dashboard\JenisBahayaController@insert')->name('JenisBahaya.insert');
        Route::get('edit/{id}', 'Dashboard\JenisBahayaController@edit');
        Route::post('update/{id}', 'Dashboard\JenisBahayaController@update');
        Route::delete('delete/{id}', 'Dashboard\JenisBahayaController@delete');
    });
    Route::prefix('contactus')->group(function () {
        Route::get('/index', 'Dashboard\ContactusController@index')->name('contactus.index');
        Route::post('/insert', 'Dashboard\ContactusController@insert')->name('contactus.insert');
        Route::get('edit/{id}', 'Dashboard\ContactusController@edit');
        Route::post('update/{id}', 'Dashboard\ContactusController@update');
        Route::delete('delete/{id}', 'Dashboard\ContactusController@delete');
    });
    Route::prefix('webdescription')->group(function () {
        Route::get('/index', 'Dashboard\WebDescriptionController@index')->name('webdescription.index');
        Route::post('/insert', 'Dashboard\WebDescriptionController@insert')->name('webdescription.insert');
        Route::get('edit/{id}', 'Dashboard\WebDescriptionController@edit');
        Route::post('update/{id}', 'Dashboard\WebDescriptionController@update');
        Route::delete('delete/{id}', 'Dashboard\WebDescriptionController@delete');
    });
    Route::prefix('kabupaten')->group(function () {
        Route::get('/index', 'Dashboard\KabupatenController@index')->name('kabupaten.index');
        Route::post('/insert', 'Dashboard\KabupatenController@insert')->name('kabupaten.insert');
        Route::get('edit/{id}', 'Dashboard\KabupatenController@edit');
        Route::post('update/{id}', 'Dashboard\KabupatenController@update');
        Route::delete('delete/{id}', 'Dashboard\KabupatenController@delete');
    });
    Route::prefix('contoh')->group(function () {
        Route::get('/index', 'Dashboard\ContohController@index')->name('contoh.index');
        Route::post('/insert', 'Dashboard\ContohController@insert')->name('contoh.insert');
        Route::get('edit/{id}', 'Dashboard\ContohController@edit');
        Route::post('update/{id}', 'Dashboard\ContohController@update');
        Route::delete('delete/{id}', 'Dashboard\ContohController@delete');
    });
    Route::prefix('kasus')->group(function () {
        Route::get('/index', 'Dashboard\KasusController@index')->name('kasus.index');
        Route::get('search/{id}', 'Dashboard\KasusController@search');
        Route::post('/insert', 'Dashboard\KasusController@insert')->name('kasus.insert');
        Route::post('detail/post', 'Dashboard\KasusController@bahaya_insert');
        Route::delete('delete/detail/{id}', 'Dashboard\KasusController@delete_detail');
        Route::get('edit/{id}', 'Dashboard\KasusController@edit');
        Route::post('update/{id}', 'Dashboard\KasusController@update');
        Route::delete('delete/{id}', 'Dashboard\KasusController@delete');
    });
});

Route::prefix('auth')->group(function () {
    Route::get('/index', 'Auth\RegisterController@index')->name('register.index');
    Route::post('/insert', 'Auth\RegisterController@insert')->name('register.insert');
    Route::get('/login', 'Auth\AuthController@index')->name('login');
    Route::post('/dashauth', 'Auth\AuthController@login')->name('authlogin');
});

Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
