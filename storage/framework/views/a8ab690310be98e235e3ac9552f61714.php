<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Gadget Grads</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/NavBar.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <header class="header">
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
        </header>
        
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

    <div class="checkout-container">
        <h3>Checkout</h3>
        <form id="checkoutForm" method="POST" action="<?php echo e(route('checkout.verify')); ?>">
           <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="text" id="fullName" name="fullName" value="<?php echo e(old('fullName')); ?>" placeholder="Full Name" required>
                <?php $__errorArgs = ['fullName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="tel" id="phone" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Phone Number" required>
                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="text" id="address" name="address" value="<?php echo e(old('address')); ?>" placeholder="Address" required>
                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="text" id="city" name="city" value="<?php echo e(old('city')); ?>" placeholder="City" required>
                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="text" id="zip" name="zip" value="<?php echo e(old('zip')); ?>" placeholder="Zip Code" required>
                <?php $__errorArgs = ['zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="text" id="cardName" name="cardName" value="<?php echo e(old('cardName')); ?>" placeholder="Name on Card" required>
                <?php $__errorArgs = ['cardName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="text" id="cardNumber" name="cardNumber" value="<?php echo e(old('cardNumber')); ?>" placeholder="Card Number" required>
                <?php $__errorArgs = ['cardNumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="month" id="expiryDate" name="expiryDate" value="<?php echo e(old('expiryDate')); ?>" required>
                <?php $__errorArgs = ['expiryDate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <input type="text" id="cvv" name="cvv" value="<?php echo e(old('cvv')); ?>" placeholder="CVV" required>
                <?php $__errorArgs = ['cvv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="error-message"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="checkout-button">Place Order</button>
        </form>
    </div>

    
</body>
</html><?php /**PATH C:\Users\dilax\Team-21\Team-21\resources\views/checkout2.blade.php ENDPATH**/ ?>