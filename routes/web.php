<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/logging', 'ClientController@login')->name('logging');
Route::post('/login', 'ClientController@logging')->name('login');