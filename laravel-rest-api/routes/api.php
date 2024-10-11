<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users/login', [UsersController::class, 'login']);

Route::get('/users', function (Request $request) {return $request->user(); })->middleware('auth:sanctum');