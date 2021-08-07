<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

//Route::name('root_path')->get('/', App\Http\Controllers\EventsController::class);

Route::get('/', 'App\Http\Controllers\EventsController@index')->name('home');

Route::resource('events', App\Http\Controllers\EventsController::class);