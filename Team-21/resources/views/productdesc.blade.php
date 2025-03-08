<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
	<title> Tablet Page </title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
		 <link rel = "stylesheet"  href="{{ asset('/css/Tablet.css') }}" > 
     <link rel = "stylesheet"  href="{{ asset('/css/UserReview.css') }}" > 
     <link rel = "stylesheet"  href="{{ asset('/css/Product.css') }}" > 
     

	</head>


    <body>
      <!-- logo -->
        <header id = "main-header">
          <a href="Home.html"><img src ="/Images/logo.png" alt="Gadget Grads Logo" class="logo" width="98" height="48"></a>
        <h1>GADGET GRADS</h1>
        <h2>Graduate with better tech!</h2>


 <!-- icons -->
      <div class="icons">
          <a href="{{url('/nav')}}" class="user-icon" title="Sign in"><img src="images\user.svg" height="30"></a>
          <a href="{{url('/wishlist')}}" class="wishlist-icon" title="Wishlist"><img src="{{asset('images/heart.svg')}}" height="30"></a>
          <a href="{{url('/basket')}}" class="cart-icon" title="Basket"><img src=" images\basket.svg" height="30"></a>
      </div>
  </header>
  <!-- nav bar -->
  <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/products')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                
    
            </ul>
        </nav>
<!-- categories nav-bar -->
        <nav id = "gadgetGrads">
        <div class="topnav">
        <a class="active" href= "{{url('Tablets')}}">Tablets</a>
      <a href= "{{url('Laptops')}}">Laptops</a>
      <a href= "{{url('Accessories')}}">Accessories</a>
      <a href="{{url('Phones')}}">Phones</a>
      <a href="{{url('Smartwatches')}}">Smartwatches</a>
    </div>
</nav>  
<!-- sort -->
<div class="sort-section">

</div>
<div class="product-container">
        <img id="product-image" src="/Images\{{$product->img_id}}.jpg" alt="Product Image">
        <div id="zoom-result"></div>
        <script src="{{asset('js/Product.js')}}"></script>
</div>
<img src= "/Images\{{$product->img_id}}.jpg" alt="Product" class="iPadAir">
<h3 class="product-title"> {{$product->product_name}}</h3>
<p class ="product-price">{{$product->product_price}}</p>
<p class ="product-title">{{$product->product_description}}</p>

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

    <!-- Add to Wishlist -->
    <div class="card-footer text-center">
        @if(Auth::check())
          <form method="POST" action="{{ route('wishlist.add') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->product_id }}">
            <input type="hidden" name="quantity" value="1">
            <button type="submit" class="add-button btn-primary">Add to Wishlist</button>
          </form>
        @else
          <a href="{{ route('login') }}" class="btn btn-primary">Log in to Add to Wishlist</a>
        @endif
    </div>


    <!-- Display the reviews -->
<h3>Customer Reviews</h3>
@if ($product->reviews->count() > 0)
    @foreach ($product->reviews as $review)
        <div>
            <strong>User {{ $review->user->email }}</strong>
            <p>Rating: ⭐ {{ $review->rating }} / 5</p>
            <p>{{ $review->review }}</p>
            <hr>
        </div>
    @endforeach
@else
    <p>No reviews yet. Be the first to leave a review!</p>
@endif




        <!-- User Review Section -->
        <div class="review-section">
            <h3>Leave a Review</h3>
            <form action="{{ route('reviews.store', $product->product_id) }}" method="POST" class="review-form">
                @csrf
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 stars">★</label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 stars">★</label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 stars">★</label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 stars">★</label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 star">★</label>
                </div>
                <textarea name="review" placeholder="Write your review here..." required></textarea>
                <button type="submit">Submit Review</button>
            </form>
        </div>

</header>
</body>
</html>