<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Add this line to import HomeController
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;


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

Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');

Route::get('/cart', [CartController::class, 'index'])->name('cart')->middleware('auth');

Route::get('/showproduct', [AdminController::class, 'showproduct'])->name('showproduct');

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct'])->name('deleteproduct');

Route::get('/updateview/{id}', [AdminController::class, 'updateview'])->name('updateview');

Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct'])->name('updateproduct');

Route::post('/product/{id}', [CartController::class, 'product'])->name('product');

Route::post('/cart/{id}', [CartController::class, 'cart']);

Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');

Route::delete('/cart/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');




