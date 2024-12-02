<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Add this line to import HomeController
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AdminController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']); 

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [AdminController::class, 'product']);

