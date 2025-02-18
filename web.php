<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerDetailsController;
use App\Http\Controllers\SalesReportController;



Route::get('/', function(){
    return redirect('/nav');
});

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

//Route for logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

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







// Basket Page
Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');

// Add Product to Basket
Route::post('/basket/add', [BasketController::class, 'add'])->name('basket.add');

// Update Product Quantity in Basket
Route::put('/basket/{item}', [BasketController::class, 'update'])->name('basket.update');

// Remove Product from Basket
Route::delete('/basket/{item}', [BasketController::class, 'remove'])->name('basket.remove');

// Clear Basket
Route::delete('/basket/clear', [BasketController::class, 'clear'])->name('basket.clear');


Route::get('/home',  function(){
    return view('home');
});



Route::get('/products', function(){
    $products = DB::table('products')->get();
    return view('products',['products' => $products]);
});
Route::get('/productdesc', function(){

    return view('productdesc');
})->name("productdesc");

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

Route::post('/productssort',function() {
    $products = DB::table('products')->get();
    $sortby = request('sort');
    echo $sortby;
    if($sortby == 'priceasc'){
        $productsorted = $products->sortBy('product_price');
    }
    if($sortby == 'pricedesc'){
        $productsorted  = $products->sortByDesc('product_price');
    }
    if($sortby == 'nameasc'){
        $productsorted  = $products->sortBy('product_name');
    }
    if($sortby == 'namedesc'){
        $productsorted  = $products->sortByDesc('product_name');
    }
    if($sortby == 'default'){
        $productsorted = $products;
    }

    return view('products', ['products' => $productsorted ]);
});
#Route::get('/Laptops', [ProductController::class, 'showlap']);
Route::get('/productdesc/{product_id}', [ProductController::class, 'show'] );


//Display the form for details to be updated
Route::get('edit', [CustomerDetailsController::class, 'edit'])->name('edit');

//The actual updating of the form
Route::post('update', [CustomerDetailsController::class, 'update'])->name('update');

//Deletes the customer's data from the database
Route::post('delete', [CustomerDetailsController::class, 'delete'])->name('delete');

//Displays the sale report to the admin
Route::get('/sales-report', [SalesReportController::class, 'report']);

