<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/searchbar', function(){
    return view('search.form');
});

Route::get('/search', [SearchController::class, 'search'])->name('search');

