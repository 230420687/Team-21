<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Login/Sign Up</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/NavBar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/AboutUs.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Tablet.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-container">
               
                <img src="<?php echo e(asset('images/GG_higher-resolution.png')); ?>" alt="Gadget Grads Logo">
                <div class="logo-text">
                    <h1>Gadget Grads</h1>
                    <p>Graduate with better tech!</p>
                </div>
            </div>

        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/products')); ?>">Products</a></li>
                <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                <li><a href="<?php echo e(url('/basket')); ?>">Basket</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
                
    
            </ul>
        </nav>
        <div class="icons">
                <a href="<?php echo e(url('/nav')); ?>" class="user-icon" title="Sign in"><img src="<?php echo e(asset('images/user.svg')); ?>" height="30"></a>
                <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="<?php echo e(asset('images/heart.svg')); ?>" height="30"></a>
                <a href="<?php echo e(url('/basket')); ?>"class="cart-icon" title="Basket"><img src="<?php echo e(asset('images/basket.svg')); ?>" height="30"></a>
        </div>
    </header>
<body>
    <h1>Search Results for "<?php echo e($query); ?>"</h1>

    <?php if($products->isEmpty()): ?>
        <p>No products found matching your search criteria</p>
    <?php else: ?>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = "product-section">
            <div class="product">
            <img src= "Images\<?php echo e($product->img_id); ?>.jpg" alt="Product" class="iPadAir">
            <div class ="product-info">
                <h3 class="product-title"> <?php echo e($product->product_name); ?></h3>  
                <p class ="product-price"><?php echo e($product->product_price); ?></p>
                <div class="product-buttons">
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
    <?php endif; ?>
    
</body>
</html><?php /**PATH C:\Users\dilax\Team-21\Team-21\resources\views/search/results.blade.php ENDPATH**/ ?>