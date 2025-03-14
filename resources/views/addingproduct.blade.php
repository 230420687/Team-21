<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">

  <title>Checkout | Gadget Grads</title>
  <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
  <link rel="stylesheet" href="{{asset('css/NavBar.css')}}">
  <link rel="stylesheet" href="{{asset('css/Addingproduct.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lobster&display=swap" rel="stylesheet">
</head>


<header>
  <!-- logo and header -->
  <header class="header">
    <div class="logo-container">
      <a href="index.html" class="logo">
        <img src="{{asset('images/GG_higher-resolution.png')}}" alt="Logo" height="50">
      </a>
      <div class="site-info">
        <h1 class="title">GADGET GRADS</h1>
        <h2 class="subheading">Graduate with better tech!</h2>
      </div>

    </div>
    <!-- icons -->
    <!-- <div class="icons">
                <a href="{{url('/nav')}}" class="user-icon" title="Sign in"><img src="{{asset('images/user.svg')}}" height="30"></a>
                <a href="{{url('/wishlist')}}" class="wishlist-icon" title="Wishlist"><img src="{{asset('images/heart.svg')}}" height="30"></a>
                <a href="{{url('/basket')}}"class="cart-icon" title="Basket"><img src="{{asset('images/basket.svg')}}" height="30"></a>
        </div> -->
  </header>
  <!-- nav bar -->
  <!-- <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/products')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
            </ul>
        </nav> -->

</header>

<body>
  <!-- adding form -->

  <div class="form-container">
    <h2>Stock Inventory</h2>
    <form id="managementForm" method="POST" action="{{ route('products.store') }}">
      @csrf
      <div class="form-group">
        <label for="product-name">Product Name</label>
        <input type="text" id="product-name" name="product_name" value="{{ old('product_name') }}" required>
        @error('product_name')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="product-description">Product Description</label>
        <input type="text" id="product-description" name="product_description" value="{{ old('product_description') }}" required>
        @error('product_description')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="product-price">Product Price</label>
        <input type="number" id="product-price" name="product_price" value="{{ old('product_price') }}" required min="0" step="0.01">
        @error('product_price')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="stock-quantity">Stock Quantity</label>
        <input type="number" id="stock-quantity" name="stock_quantity" value="{{ old('stock_quantity') }}" required min="0" step="1">
        @error('stock_quantity')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>

      <div class="form-group">
        <label for="category">Category</label>
        <select id="category" name="category_id" required>
          <option value="">Select a category</option>
          <option value="6" {{ old('category') == 'Accessories' ? 'selected' : '' }}>Accessories</option>
          <option value="4" {{ old('category') == 'Phones' ? 'selected' : '' }}>Phones</option>
          <option value="1" {{ old('category') == 'Laptops' ? 'selected' : '' }}>Laptops</option>
          <option value="3" {{ old('category') == 'Tablets' ? 'selected' : '' }}>Tablets</option>
          <option value="2" {{ old('category') == 'Smartwatches' ? 'selected' : '' }}>Smartwatches</option>
        </select>
        @error('category_id')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>


      <div class="form-group">
        <label for="image-id">Image id</label>
        <input type="number" id="image-id" name="img_id" value="{{ old('stock_quantity') }}" required>
        @error('img_id')
        <p class="error-message">{{ $message }}</p>
        @enderror
      </div>





      <div class="form-buttons">
        <button type="submit">Add</button>

      </div>
    </form>
  </div>

</body>

</html>