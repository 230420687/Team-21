<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top Deals</title>
  <link rel="stylesheet" href="{{asset('css/Home.css')}}">
  <link rel="stylesheet" href="{{asset('css/Footer.css')}}">
  <link rel="stylesheet" href="{{asset('css/navbar1.css')}}">
  <link rel = "stylesheet"  href="{{ asset('/css/Profile.css') }}" > 


  </head>
  
<body>
  <main> 
    <div class="navbar">
    <header id="main-header">
      <a href="{{url('/home')}}">
          <img src="{{asset('images/logo.png')}}" alt="Gadget Grads Logo" class="logo">
      </a>
      <h1>GADGET GRADS</h1>
      <h2>Graduate with better tech!</h2>
    
      <div class="searchnav">
          <!-- <input type="text" placeholder="Search products and brands" class="search-input"> -->
        <form action="{{route('search')}}" method="GET">
            <input type="text"  class ="search-bar" name="query" placeholder="Search for products by name or description" required>
            <button  class="search-button" type="submit">Search</button>
        </form>
      </div>

    
      <div class="icons">
          <a href="{{url('/nav')}}" class="user-icon" title="Sign in">
              <img src="{{asset('images/user.svg')}}" alt="User Icon" height="30">
          </a>
          <a href="wishlist.html" class="wishlist-icon" title="Wishlist">
              <img src="{{asset('images/heart.svg')}}" alt="Wishlist Icon" height="30">
          </a>
          <a href="{{url('/basket')}}" class="cart-icon" title="Basket">
              <img src="{{asset('images/basket.svg')}}" alt="Cart Icon" height="30">
          </a>
      </div>
    </header>
    
    <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/products')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                
    
            </ul>
    </nav>
    </div>
    <h3><div>Welcome {{auth()->user()->name}}!</div></h3>
    <h4>My Orders</h4>
    @foreach ($orders as $order)
    <h4>order id: {{$order->order_id}} user id: {{$order->user_id}}</h4>
    <h4>items: each item name in order, price, picture</h4>
    next to item a return button (only for delivered)
    @endforeach

</body>

 </html>
   