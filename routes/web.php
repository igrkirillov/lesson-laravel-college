<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController as GroupController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/groups', GroupController::class);
