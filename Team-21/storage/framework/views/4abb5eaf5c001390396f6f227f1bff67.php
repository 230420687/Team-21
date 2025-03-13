<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Preview</title>
  <link rel="stylesheet" href="<?php echo e(asset('/css/navbar2.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/dark-mode-styles/navbar-dark-mode.css')); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <header id="main-header">
    <div class="header-left">
      <a href="<?php echo e(url('/home')); ?>">
        <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Gadget Grads Logo" class="logo">
      </a>
      <div class="navbar-text">
        <h1 class="navbar-title">GADGET GRADS</h1>
        <p class="navbar-subtitle">Graduate with better tech!</p>
      </div>
    </div>

    <div class="search-container">
      <form class="search-form" action="<?php echo e(route('search')); ?>" method="GET">
        <input type="text" class="search-input" name="query" placeholder="Search for products..." required>
        <button class="search-button" type="submit">Search</button>
      </form>
    </div>

    <div class="icons">
      <div class="profile-dropdown">
        <a href="#" class="user-icon" title="My Profile">
          <img src="<?php echo e(asset('images/user-1.svg')); ?>" height="30" alt="User icon">
        </a>
        <div class="dropdown-content">
          <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(url('/profile')); ?>">My Profile</a>
            <a href="<?php echo e(url('/orders')); ?>">My Orders</a>
            <a href="<?php echo e(url('/settings')); ?>">Settings</a>
            <a href="<?php echo e(route('logout')); ?>" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
            </form>
          <?php else: ?>
            <a href="<?php echo e(route('login')); ?>">Login</a>
            <a href="<?php echo e(route('register')); ?>">Register</a>
          <?php endif; ?>
        </div>
      </div>
      <a href="<?php echo e(url('/wishlist')); ?>" class="wishlist-icon" title="Wishlist">
        <img src="<?php echo e(asset('images/heart.svg')); ?>" height="30" alt="Wishlist icon">
      </a>
      <a href="<?php echo e(url('/basket')); ?>" class="cart-icon" title="Basket">
        <img src="<?php echo e(asset('images/basket.svg')); ?>" height="30" alt="Basket icon">
      </a>
    </div>
  </header>

  <nav class="nav-bar">
    <ul>
      <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
      <li><a href="<?php echo e(url('/products')); ?>">Products</a></li>
      <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
      <li><a href="<?php echo e(url('/basket')); ?>">Basket</a></li>
      <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
      <li><a href="<?php echo e(url('/websitereviews')); ?>"> Review</a></li>

    </ul>
  </nav>

  <nav id="gadgetGrads">
    <div class="topnav">
      <a class="active" href="<?php echo e(url('Tablets')); ?>">Tablets</a>
      <a href="<?php echo e(url('Laptops')); ?>">Laptops</a>
      <a href="<?php echo e(url('Accessories')); ?>">Accessories</a>
      <a href="<?php echo e(url('Phones')); ?>">Phones</a>
      <a href="<?php echo e(url('Smartwatches')); ?>">Smartwatches</a>
    </div>
  </nav>
  <?php echo $__env->make('components.dark-mode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\Users\Salve\Team-21\Team-21\resources\views/components/navbar.blade.php ENDPATH**/ ?>