<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BasketController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/searchbar', function(){
    return view('search.form');
});

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/nav', function(){
    return view('signup');
});

// Show the login form
Route::get('/login', function () {
    return view('signup');  // Using 'signup' as the view for login
})->name('login');

// Process the login request
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Show the registration form
Route::get('/register', function () {
    return view('signup');  // Show 'signup' for the registration view
})->name('register');

// Process the registration request
Route::post('/register', [RegistrationController::class, 'register'])->name('register.post');

// For logout (optional if needed)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/basket', function(){
    return view('basket');
});


// Basket routes
// Route::middleware('auth')->group(function () {
//     Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');
//     Route::post('/basket/add/{productId}', [BasketController::class, 'add'])->name('basket.add');
//     Route::post('/basket/update/{id}', [BasketController::class, 'updateQuantity'])->name('basket.update');
//     Route::delete('/basket/remove/{id}', [BasketController::class, 'remove'])->name('basket.remove');
//     Route::delete('/basket/clear', [BasketController::class, 'clear'])->name('basket.clear');


