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
		 <link rel = "stylesheet"  href="<?php echo e(asset('/css/Tablet.css')); ?>" > 
	</head>


    <body>
        <header id = "main-header">
          <a href="Home.html"><img src ="Images/logo.png" alt="Gadget Grads Logo" class="logo" width="98" height="48"></a>
        <h1>GADGET GRADS</h1>
        <h2>Graduate with better tech!</h2>

        <div class = "searchnav">

            <!-- <input type="text" class="search-bar" placeholder="Search products and brands" aria-label="Search"> -->
            <form action="<?php echo e(route('search')); ?>" method="GET">
                <input type="text"  class= "search-bar" name="query" placeholder="Search for products by name or description" required>
                <button  class = "search-button" type="submit">Search</button>
            </form>
        </div>

      </div>
      <div class="icons">
          <a href="<?php echo e(url('/nav')); ?>" class="user-icon" title="Sign in"><img src="images\user-1.svg" height="30"></a>
          <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="images\heart.svg" height="30"></a>
          <a href="<?php echo e(url('/basket')); ?>" class="cart-icon" title="Basket"><img src=" images\basket.svg" height="30"></a>
      </div>
  </header>
  <!-- nav bar -->
  <nav class="nav-bar">
            <ul>
                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/products')); ?>">Products</a></li>
                <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                <li><a href="<?php echo e(url('/basket')); ?>">Basket</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
                
    
            </ul>
        </nav>
      <!-- categories nav bar -->

        <nav id = "gadgetGrads">
        <div class="topnav">
      <a class="active" href= "<?php echo e(url('Tablets')); ?>">Tablets</a>
      <a href= "<?php echo e(url('Laptops')); ?>">Laptops</a>
      <a href= "<?php echo e(url('Accessories')); ?>">Accessories</a>
      <a href="<?php echo e(url('Phones')); ?>">Phones</a>
      <a href="<?php echo e(url('Smartwatches')); ?>">Smartwatches</a>
    </div>
</nav>  

<!-- sort function -->
<div class="sort-section">
  <label for="sort">Sort by:</label>
  <form method="POST" action="/productssort">
  <?php echo csrf_field(); ?>
  <select id="sort" name="sort">
    <option <?php echo e(request()->sortby); ?> value="default">Default</option>
    <option <?php echo e(request()->sortby); ?> value="priceasc">Price: Low to High</option>
    <option <?php echo e(request()->sortby); ?> value="pricedesc">Price: High to Low</option>
    <option <?php echo e(request()->sortby); ?> value="nameasc">Name: A to Z</option>
    <option <?php echo e(request()->sortby); ?> value="namedesc">Name: Z to A</option>
  </select>
  <button type="submit">Sort!</button>
</form>
</div>

<!-- product display -->
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class = "product-section">
  <div class="product">
   <img src= "Images\<?php echo e($product->img_id); ?>.jpg" alt="Product" class="iPadAir">
   <div class ="product-info">
    <h3 class="product-title"> <?php echo e($product->product_name); ?></h3>  
    <p class ="product-price"><?php echo e($product->product_price); ?></p>
    <div class="product-buttons">
      <!-- view button -->
  <button class="view-button" type = "submit" id="viewprod" onclick="window.location='<?php echo e(url('productdesc',$product->product_id)); ?>'">View Product</button>
  
    <!-- Add to Basket -->
    <div class="card-footer text-center">
        <?php if(Auth::check()): ?>
          <form method="POST" action="<?php echo e(route('basket.add')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id" value="<?php echo e($product->product_id); ?>">
            <input type="hidden" name="quantity" value="1">
            <button type="submit" class="add-button btn-primary">Add to Basket</button>
          </form>
        <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Log in to Add to Basket</a>
        <?php endif; ?>
    </div>
</div>
</div>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</header>
</body>
</html><?php /**PATH C:\xampp\htdocs\testproj\resources\views/products.blade.php ENDPATH**/ ?>