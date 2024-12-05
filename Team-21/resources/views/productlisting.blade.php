<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Login/Sign Up</title>


    <link rel="stylesheet" href="{{ asset('css/NavBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/LoginPopUp.css') }}">
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-container">
               
                <img src="{{ asset('images/GG_higher-resolution.png') }}" alt="Gadget Grads Logo">
                <div class="logo-text">
                    <h1>Gadget Grads</h1>
                    <p>Graduate with better tech!</p>
                </div>
            </div>
            <input type="text" class="search-bar" placeholder="Search products and brands" aria-label="Search">
            <button id="login-btn" class="login-btn">Log In</button>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/nav')}}">Home</a></li>
                <li><a href="{{url('/product')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                
    
            </ul>
        </nav>
        <nav>
            <div class="navbar">
                <a href="laptops.html">Laptops</a>
                <a href="accessories.html">Accessories</a>
                <a href="phones.html">Phones</a>
                <a href="smart-watch.html">Smart Watch</a>
                <a href="tablets-ipads.html">Tablets/iPads</a>
                <a href="deals.html">Deals</a>
            </div>
        </nav>
    </header>
    <main>
   
<div class="container">
    <h1 class="my-4">Products</h1>


    @if($products->isEmpty())
        <p>No products available.</p>
    @else
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Product Image -->
                        <img src="{{ asset($product->image)}}" class="card-img-top" alt="{{ $product->name }}">

                        <!-- Product Details -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <h6>${{ number_format($product->price, 2) }}</h6>
                        </div>

                        <!-- Add to Basket -->
                        <div class="card-footer text-center">
                            @if(Auth::check())
                            <form method="POST" action="{{ route('basket.add') }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-primary">Add to Basket</button>
                            </form>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Log in to Add to Basket</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>




    </main>

   

    
    <script src="{{ asset('js/JavaScript_pop-up.js') }}"></script>
</body>
</html>