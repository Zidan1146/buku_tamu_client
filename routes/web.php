<?php

use App\Http\Controllers\ErrorController;
use App\Http\Middleware\CheckIp;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ClientController@logging')->name('logging');
Route::post('/login', 'App\Http\Controllers\ClientController@login')->name('login')->middleware(CheckIp::class);

Route::get('/error', ErrorController::class)->name('error.page');
