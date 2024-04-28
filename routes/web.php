<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ClientController@logging')->name('logging');
Route::post('/login', 'App\Http\Controllers\ClientController@login')->name('login');
Route::post('/test','App\Http\Controllers\ClientController@loginrombongan')->name("test");