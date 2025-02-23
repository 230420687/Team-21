<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character set and viewport settings for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Basket</title>
    <!-- Links to external CSS stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('css/NavBar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/LoginPopUp.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Basket.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/PaymentMethods.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/RemoveItem.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
    <!-- Link to Google Fonts for custom font -->
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<header>
        <div class="header-content">
        <div class="logo-container">
                <a href="index.html" class="logo">
                    <img src="<?php echo e(asset('images/GG_higher-resolution.png')); ?>" alt="Logo" height="50">
                </a>
                <div class="site-info">
                    <h1 class="title">GADGET GRADS</h1>
                    <h2 class="subheading">Graduate with better tech!</h2>
                </div>

            </div>
            <div class="icons">
                <a href="<?php echo e(url('/nav')); ?>" class="user-icon" title="Sign in"><img src="<?php echo e(asset('images/user.svg')); ?>" height="30"></a>
                <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="<?php echo e(asset('images/heart.svg')); ?>" height="30"></a>
                <a href="<?php echo e(url('/basket')); ?>"class="cart-icon" title="Basket"><img src="<?php echo e(asset('images/basket.svg')); ?>" height="30"></a>
        </div>      
        </div>
        <!-- Navigation bar with links to various sections -->
        <nav class="nav-bar">
            <ul>
                <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                <li><a href="<?php echo e(url('/products')); ?>">Products</a></li>
                <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                <li><a href="<?php echo e(url('/basket')); ?>">Basket</a></li>
                <li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
            </ul>
        </nav>
    </header>
<body>
    <div class="container my-5">
        <!-- Basket Header -->
        <h2 class="mb-4">Your Basket (<span id="item-count-header"><?php echo e(count($basketItems)); ?></span> <span id="item-label">items</span>)</h2>
        
        <!-- Basket Content -->
        <div class="basket-content">
            <div class="basket-container">
                <!-- Loop through basket items -->
                <?php $total = 0; ?>
                <?php $__currentLoopData = $basketItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="basket-item mb-4 p-3 border rounded">
                    <div class="product-info d-flex align-items-start">
                        <!-- Product image -->
                        <img src="Images\<?php echo e($item->product->img_id); ?>.jpg" alt="Product Image" class="product-image me-3">
                        
                        <!-- Product Details -->
                        <div class="product-details">
                            <!-- Name and Price -->
                            <div class="product-name fw-bold"><?php echo e($item->product->product_name); ?></div>
                            <div class="product-details-row d-flex align-items-center">
                                <div class="quantity-section me-3">
                                    <label for="quantity">Quantity:</label>
                                    <form action="<?php echo e(route('basket.update', $item->id)); ?>" method="POST" class="d-inline-block">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <input type="number" name="quantity" value="<?php echo e($item->quantity); ?>" min="1" class="quantity form-control d-inline-block" style="width: 70px;">
                                        <button type="submit" class="btn btn-sm btn-primary ms-2">Update</button>
                                    </form>
                                </div>
                                
                                <!-- Remove link -->
                                <form action="<?php echo e(route('basket.remove', $item->id)); ?>" method="POST" class="d-inline-block">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <a href="#" class="remove-link text-danger" onclick="this.closest('form').submit()">Remove item</a>
                                </form>
                                
                                <!-- Price -->
                                <div class="price ms-auto">£<?php echo e(number_format($item->product->product_price, 2)); ?></div>
                            </div>

                            <!-- Delivery/Collection Information -->
                            <div class="availability white-box mt-3">
                                <p>You can choose your delivery or collection preferences at checkout</p>
                                <div class="availability-item d-flex align-items-center">
                                    <img src="<?php echo e(asset('images/truck.svg')); ?>" alt="Delivery Icon" class="availability-icon me-2">
                                    <span>Delivery available</span>
                                </div>
                                <div class="availability-item d-flex align-items-center">
                                    <img src="<?php echo e(asset('images/shop.svg')); ?>" alt="Collection Icon" class="availability-icon me-2">
                                    <span>Collection unavailable</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $total += $item->product->product_price * $item->quantity; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Total Box -->
            <div class="total-box-container mt-5">
                <div class="total-box p-4 border rounded">
                    <!-- Payment Options -->
                    <div class="payment-options mb-3">
                        <label>
                            <input type="checkbox" class="payment-checkbox"> Card/Paypal
                        </label>
                        <label>
                            <input type="checkbox" class="payment-checkbox"> Spread the cost
                        </label>
                    </div>

                    <!-- Payment Details -->
                    <div class="payment-details">
                        <p>Make monthly payments</p>
                        <ul>
                            <li id="monthly-payment">From £<?php echo e(number_format($total / 36, 2)); ?> for 36 months</li>
                        </ul>
                        <p>Or buy now, pay later</p>
                        <ul>
                            <li id="buy-later-date">Pay as much as you'd like for 12 months, settle in full by (date) and pay no interest</li>
                        </ul>
                    </div>
                    <p>Total: £<span id="basket-total"><?php echo e(number_format($total, 2)); ?></span></p>

                    <!-- Checkout Button -->
                    <a href="<?php echo e(url('/checkout2')); ?>" class="btn btn-success w-100 mt-3">Proceed to Checkout</a>

                    <!-- Payment Icons -->
                    <p class="text-center mt-3">Pay securely with</p>
                    <div class="payment-icons d-flex justify-content-center">
                        <img src="<?php echo e(asset('images/Maestro.svg')); ?>" alt="Maestro" class="me-2">
                        <img src="<?php echo e(asset('images/MasterCard.svg')); ?>" alt="MasterCard" class="me-2">
                        <img src="<?php echo e(asset('images/Visa.svg')); ?>" alt="Visa" class="me-2">
                        <img src="<?php echo e(asset('images/PayPal.svg')); ?>" alt="PayPal">
                    </div>

                    <!-- Continue Shopping -->
                    <a href="<?php echo e(url('/nav')); ?>" class="continue-shopping d-block text-center mt-3">Continue shopping</a>

                    <!-- Disclaimer -->
                    <div class="disclaimer mt-4">
                        <p><strong>Illustrative example:</strong> Credit amount £579.00. Pay 36 monthly payments of £23.46. Total amount payable £844.56. The interest rate for this purchase is 19.9%.</p>
                        <p><strong>Representative example:</strong> Rate of interest 19.9% (variable). 19.9% APR representative (variable). Assumed Credit Limit £1,200.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Remove Item Popup -->
        <div id="remove-popup" class="popup d-none">
            <div class="popup-content">
                <p>Are you sure you want to remove this item?</p>
                <button onclick="removeItem()" class="btn btn-danger">Yes</button>
                <button onclick="closePopup()" class="btn btn-secondary">No</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/Basket.js')); ?>"></script>
    <script src="<?php echo e(asset('js/PaymentMethods.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\testproj\resources\views/basket.blade.php ENDPATH**/ ?>