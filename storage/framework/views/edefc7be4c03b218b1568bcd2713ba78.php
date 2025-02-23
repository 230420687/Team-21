<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Login/Sign Up</title>


    <link rel="stylesheet" href="<?php echo e(asset('css/NavBar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/LoginPopUp.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
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
            <form action="<?php echo e(route('search')); ?>" method="GET">
                <input type="text"  class= "search-bar" name="query" placeholder="Search for products by name or description" required>
                <button  class = "search-button" type="submit">Search</button>
            </form>
            
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/product')); ?>">Products</a></li>
                <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                <li><a href="<?php echo e(url('/basket')); ?>">Basket</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
                
    
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
        <div class="icons">
                <a href="<?php echo e(url('/nav')); ?>" class="user-icon" title="Sign in"><img src="<?php echo e(asset('images/user.svg')); ?>" height="30"></a>
                <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="<?php echo e(asset('images/heart.svg')); ?>" height="30"></a>
                <a href="<?php echo e(url('/basket')); ?>"class="cart-icon" title="Basket"><img src="<?php echo e(asset('images/basket.svg')); ?>" height="30"></a>
        </div>
    </header>
    <main>
   
<div class="container">
    <h1 class="my-4">Products</h1>


    <?php if($products->isEmpty()): ?>
        <p>No products available.</p>
    <?php else: ?>
        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Product Image -->
                        <img src="<?php echo e(asset($product->image)); ?>" class="card-img-top" alt="<?php echo e($product->name); ?>">

                        <!-- Product Details -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($product->name); ?></h5>
                            <p class="card-text"><?php echo e(Str::limit($product->description, 100)); ?></p>
                            <h6>$<?php echo e(number_format($product->price, 2)); ?></h6>
                        </div>

                        <!-- Add to Basket -->
                        <div class="card-footer text-center">
                            <?php if(Auth::check()): ?>
                            <form method="POST" action="<?php echo e(route('basket.add')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-primary">Add to Basket</button>
                            </form>
                            <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Log in to Add to Basket</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>




    </main>

   

    
    <script src="<?php echo e(asset('js/JavaScript_pop-up.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\dilax\Team-21\Team-21\resources\views/productlisting.blade.php ENDPATH**/ ?>