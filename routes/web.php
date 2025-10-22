<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Homepage - Customer Catalog 
Route::get('/', function () {
    return view('customer.catalog');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/equipment', function () {
    return view('admin.equipment');
})->middleware(['auth', 'verified'])->name('equipment');


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
