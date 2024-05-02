<?php
use App\Http\Middleware\masuk;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('masuk');
})->name('login');
Route::post('/aksi', 'App\Http\Controllers\ClientController@aksi')->name('aksi');

Route::get('/logging', 'App\Http\Controllers\ClientController@logging')->name('logging')->middleware(masuk::class);
Route::post('/login', 'App\Http\Controllers\ClientController@login')->name('loginaction')->middleware(masuk::class);