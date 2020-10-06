<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('book', [BookController::class, 'index']);
Route::post('token', [AuthController::class, 'requestToken']);
