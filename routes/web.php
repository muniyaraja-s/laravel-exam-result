<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// frontend routes
Route::get('/', function () {
    return view('index');
});
Route::post('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'homeindex']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register/submit', [AuthController::class, 'doRegister']);
Route::post('login/submit', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);

// backend private routes
Route::middleware('customer')->group(function () {
    Route::resource('dashboard', DashboardController::class);
});