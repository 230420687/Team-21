<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;



//return search bar form
Route::get('/searchbar', function(){
    return view('search.form');
});

//return search value
Route::get('/search', [SearchController::class, 'search'])->name('search');

//return the main page
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

//return basket view
Route::get('/basket', function(){
    return view('basket');
});


//return about view
Route::get('/about',  function(){
    return view('about');
});


//return checkout view 
Route::get('/checkout2', function(){
    return view('checkout2');
});


//checkout form
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.show');
Route::post('/checkout', [CheckoutController::class, 'verifyCheckout'])->name('checkout.verify');

//routes for the contact form
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');



// Basket routes
// Route::middleware('auth')->group(function () {
//     Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');
//     Route::post('/basket/add/{productId}', [BasketController::class, 'add'])->name('basket.add');
//     Route::post('/basket/update/{id}', [BasketController::class, 'updateQuantity'])->name('basket.update');
//     Route::delete('/basket/remove/{id}', [BasketController::class, 'remove'])->name('basket.remove');
//     Route::delete('/basket/clear', [BasketController::class, 'clear'])->name('basket.clear');


