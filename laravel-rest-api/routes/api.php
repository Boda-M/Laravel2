<?php

use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::post('/users/login', [UsersController::class, 'login']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/users', function (Request $request) {return $request->user(); })->middleware('auth:sanctum');