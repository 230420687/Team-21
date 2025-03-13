<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Products</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('/css/navbar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/ProductListing.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('/css/dark-mode-styles/ProductListing-dark-mode.css')); ?>">
</head>

<body>
  <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <div class="product-section">
      <div class="product">
        <img src="<?php echo e(asset('images/'.$product->img_id.'.jpg')); ?>" alt="Product" class="iPadAir">
        <div class="product-info">
          <h3 class="product-title"><?php echo e($product->product_name); ?></h3>
          <p class="product-price">£<?php echo e($product->product_price); ?></p>
          
          <!-- Low stock alert message -->
          <?php if(isset($product->stock_quantity) && $product->stock_quantity <= 5 && $product->stock_quantity > 0): ?>
            <p class="text-warning">Hurry! Only <?php echo e($product->stock_quantity); ?> left in stock.</p>
          <?php elseif(isset($product->stock_quantity) && $product->stock_quantity == 0): ?>
            <p class="text-danger">Out of stock</p>
          <?php endif; ?>
          
          <div class="product-buttons">
            <!-- view button -->
            <button class="view-button" type="submit" id="viewprod" onclick="window.location='<?php echo e(url('productdesc', $product->product_id)); ?>'">View Product</button>
            
            <!-- Add to Basket -->
            <div class="card-footer text-center">
              <?php if(Auth::check() && $product->stock_quantity > 0): ?>
                <form method="POST" action="<?php echo e(route('basket.add')); ?>">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="product_id" value="<?php echo e($product->product_id); ?>">
                  <input type="hidden" name="quantity" value="1">
                  <button type="submit" class="add-button btn-primary">Add to Basket</button>
                </form>
              <?php elseif($product->stock_quantity == 0): ?>
                <class="btn btn-primary">Out of Stock</a>
              <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Log in to Add to Basket</a>
              <?php endif; ?>
            </div>

            <!-- Add to Wishlist -->
            <div class="card-footer text-center">
              <?php if(Auth::check()): ?>
                <form method="POST" action="<?php echo e(route('wishlist.add')); ?>">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="product_id" value="<?php echo e($product->product_id); ?>">
                  <input type="hidden" name="quantity" value="1">
                  <button type="submit" class="add-button btn-primary">Add to Wishlist</button>
                </form>
              <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Log in to Add to Wishlist</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\Users\Salve\Team-21\Team-21\resources\views/products.blade.php ENDPATH**/ ?>