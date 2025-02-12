<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Phones Page</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/Tablet.css') }}">
</head>

<body>
  <!-- logo -->
  <header id="main-header">
    <a href="{{url('/home')}}">
      <img src="{{ asset('images/logo.png') }}" alt="Gadget Grads Logo" class="logo" width="98" height="48">
    </a>
    <h1>GADGET GRADS</h1>
    <h2>Graduate with better tech!</h2>

    <!-- icons -->
    <div class="icons">
      <a href="{{url('/nav')}}" class="user-icon" title="Sign in">
        <img src="{{ asset('images/user-1.svg') }}" height="30" alt="User icon">
      </a>
      <a href="{{url('/wishlist')}}" class="wishlist-icon" title="Wishlist">
        <img src="images/heart.svg" height="30" alt="Wishlist icon">
      </a>
      <a href="{{url('/basket')}}" class="cart-icon" title="Basket">
        <img src="images/basket.svg" height="30" alt="Basket icon">
      </a>
    </div>

    <!-- nav-bar -->
    <nav class="nav-bar">
      <ul>
        <li><a href="{{url('/home')}}">Home</a></li>
        <li><a href="{{url('/products')}}">Products</a></li>
        <li><a href="{{url('/about')}}">About Us</a></li>
        <li><a href="{{url('/basket')}}">Basket</a></li>
        <li><a href="{{url('/contact')}}">Contact Us</a></li>
      </ul>
    </nav>

    <!-- categories nav -->
    <div class="topnav">
      <a href="{{url('Tablets')}}">Tablets</a>
      <a href="{{url('Laptops')}}">Laptops</a>
      <a href="{{url('Accessories')}}">Accessories</a>
      <a class="active" href="{{url('Phones')}}">Phones</a>
      <a href="{{url('Smartwatches')}}">Smartwatches</a>
    </div>

    <!-- sort -->
    <div class="sort-section">
      <label for="sort">Sort by:</label>
      <form method="POST" action="/productssort">
        @csrf
        <select id="sort" name="sort">
          <option {{request()->sortby}} value="default">Default</option>
          <option {{request()->sortby}} value="priceasc">Price: Low to High</option>
          <option {{request()->sortby}} value="pricedesc">Price: High to Low</option>
          <option {{request()->sortby}} value="nameasc">Name: A to Z</option>
          <option {{request()->sortby}} value="namedesc">Name: Z to A</option>
        </select>
        <button type="submit">Sort!</button>
      </form>
    </div>

    <!-- product display -->
    @foreach ($products as $product)
      @if ($product->category_id == 4)
        <div class="product-section">
          <div class="product">
            <img src="Images/{{$product->img_id}}.jpg" alt="{{$product->product_name}}" class="iPadAir">
            <div class="product-info">
              <h3 class="product-title">{{$product->product_name}}</h3>
              <p class="product-price">£{{$product->product_price}}</p>
              <div class="product-buttons">
                <button class="view-button" type="submit" onclick="window.location='{{url('productdesc',$product->product_id)}}'">
                  View Product
                </button>
                <!-- Add to Basket -->
                <div class="card-footer text-center">
                  @if(Auth::check())
                    <form method="POST" action="{{ route('basket.add') }}">
                      @csrf
                      <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                      <input type="hidden" name="quantity" value="1">
                      <button type="submit" class="add-button btn-primary">Add to Basket</button>
                    </form>
                  @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Log in to Add to Basket</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  </header>
</body>
</html>