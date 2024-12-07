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
    return view('products',['products' => $products]);
});
Route::get('/productdesc', function(){

    return view('productdesc');
})->name("productdesc");
//Route for asc price
#Route::get('sortedprod', function(){
#    $products = DB::table('products')->get();
#    $products = $products->sortBy($sortby);
    #$products = $products::where('category_id',1)->get();
#    return view('sortedprod', ['products' => $products]);
#})->name("sortedprod");
Route::post('products', [ProductController::class, 'index']
)->name("products.index");



// Route for Laptops
Route::get('/Laptops', function(){
    $products = DB::table('products')->get();
    #$products = $products::where('category_id',1)->get();
    return view('Laptops', ['products' => $products]);
})->name("Laptops");
// Route for Smartwatches
Route::get('/Smartwatches', function(){
    $products = DB::table('products')->get();
    #$products = $products::where('category_id',1)->get();
    return view('Smartwatches', ['products' => $products]);
})->name("Smartwatches");
//Route for hpones
Route::get('/Phones', function(){
    $products = DB::table('products')->get();
    #$products = $products::where('category_id',1)->get();
    return view('Phones', ['products' => $products]);
})->name("Phones");
//Route for Tablets
Route::get('/Tablets', function(){
    $products = DB::table('products')->get();
    #$products = $products::where('category_id',1)->get();
    return view('Tablets', ['products' => $products]);
})->name("Tablets");
//Route for Accessories
Route::get('/Accessories', function(){
    $products = DB::table('products')->get();
    #$products = $products::where('category_id',1)->get();
    return view('Accessories', ['products' => $products]);
})->name("Accessories");

#Route::get('/Laptops', [ProductController::class, 'showlap']);
Route::get('/productdesc/{product_id}', [ProductController::class, 'show'] );

