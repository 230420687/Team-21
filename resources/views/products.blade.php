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
	</head>


    <body>
        <header id = "main-header">
          <a href="Home.html"><img src ="Images/logo.png" alt="Gadget Grads Logo" class="logo" width="98" height="48"></a>
        <h1>GADGET GRADS</h1>
        <h2>Graduate with better tech!</h2>

        <div class = "searchnav">
          <input type="text" placeholder="Search products and brands"class="search-input"/>
        </div>

      </div>
      <div class="icons">
          <a href="profile.html" class="user-icon" title="Sign in"><img src="images\user-1.svg" height="30"></a>
          <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="images\heart.svg" height="30"></a>
          <a href="cart.html" class="cart-icon" title="Basket"><img src=" images\basket.svg" height="30"></a>
      </div>
  </header>

        <nav id = "gadgetGrads">
        <div class="topnav">
      <a class="active" href= "{{url('Tablets')}}">Tablets</a>
      <a href= "{{url('Laptops')}}">Laptops</a>
      <a href= "{{url('Accessories')}}">Accessories</a>
      <a href="{{url('Phones')}}">Phones</a>
      <a href="{{url('Smartwatches')}}">Smartwatches</a>
    </div>
</nav>  

<div class="sort-section">
  <label for="sort">Sort by:</label>
  <select id="sort" name="sort">
    <option {{request()->default}} value="default">Default</option>
    <option {{request()->lowtohigh}} value="price-low-to-high">Price: Low to High</option>
    <option {{request()->hightolow}} value="price-high-to-low">Price: High to Low</option>
    <option {{request()->atoz}} value="name-a-to-z">Name: A to Z</option>
    <option {{request()->ztoa}} value="name-z-to-a">Name: Z to A</option>
  </select>
</div>

@foreach ($products as $product)
<div class = "product-section">
  <div class="product">
   <img src= "Images\{{$product->img_id}}.jpg" alt="Product" class="iPadAir">
   <div class ="product-info">
    <h3 class="product-title"> {{$product->product_name}}</h3>  
    <p class ="product-price">{{$product->product_price}}</p>
    <div class="product-buttons">
  <button class="view-button" type = "submit" id="viewprod" onclick="window.location='{{url('productdesc',$product->product_id)}}'">View Product</button>
    <button class="add-button" id="addbask">Add to Basket</button>
</div>
</div>
</div>
</div>
@endforeach

</header>
</body>
</html>