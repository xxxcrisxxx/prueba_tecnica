<?php

use App\Http\Controllers\private\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/dashboard/users', UsersController::class)->names('users');
