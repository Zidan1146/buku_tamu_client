<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logging', 'App\Http\Controllers\ClientController@logging')->name('logging');
Route::post('/login', 'App\Http\Controllers\ClientController@logging')->name('login');