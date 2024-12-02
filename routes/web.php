<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
#Route::get('/products', function () {
#    return view('products');
#});


Route::get('/products', function(){
    $products = DB::table('products')->get();
    return view('products',[
    'products' => $products]);
});

