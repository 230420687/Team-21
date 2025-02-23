<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Login/Sign Up</title>

    <!-- Use Laravel's asset helper for CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/NavBar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/LoginPopUp.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/Home.css')); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-container">
                <!-- Use Laravel's asset helper for images -->
                <img src="<?php echo e(asset('images/GG_higher-resolution.png')); ?>" alt="Gadget Grads Logo">
                <div class="logo-text">
                    <h1>Gadget Grads</h1>
                    <p>Graduate with better tech!</p>
                </div>
            </div>
            <!-- searchbar -->
            <form action="<?php echo e(route('search')); ?>" method="GET">
                <input type="text"  class= "search-bar" name="query" placeholder="Search for products by name or description" required>
                <button  class = "search-button" type="submit">Search</button>
            </form>
            <!-- logout button -->
            <button id="login-btn" class="login-btn">Log In</button>
            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <button id="logout-btn" class="login-btn">Logout</button>
            </form>
        </div>
        <!-- nav-bar -->
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
    <main>
    </main>

    <!-- Login Pop-up -->
    <div id="auth-popup" class="auth-popup">
        <div class="auth-popup-content">
            <span class="close-btn">&times;</span>
            <div class="login-box">
                <h2 class="login-title">Login</h2>
                <p class="signup-text">New to Gadget Grads? <a href="#" id="signup-link" class="signup-link">Sign up here!</a></p>
                
                <!-- Display Errors -->
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('login.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="input-container">
                        <img src="<?php echo e(asset('images/mail.svg')); ?>" class="icon" alt="Email Icon">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-container">
                        <img src="<?php echo e(asset('images/lock-on.svg')); ?>" class="icon" alt="Password Icon">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-container">
                        <label for="user_type">User Type:</label>
                        <select id="user_type" name="user_type" required>
                            <option value="customer" <?php echo e(old('user_type') == 'customer' ? 'selected' : ''); ?>>Customer</option>
                            <option value="admin" <?php echo e(old('user_type') == 'admin' ? 'selected' : ''); ?>>Admin</option>
                        </select>
                        <?php $__errorArgs = ['user_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-container remember-me">
                        <input type="checkbox" id="remember-me" name="remember-me">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <a href="#" class="forgot-password" id="forgot-password-link">Forgot Password?</a>
                    <button type="submit" class="login-submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Sign Up Pop-up -->
    <div id="signup-popup" class="auth-popup">
        <div class="auth-popup-content">
            <span class="close-btn">&times;</span>
            <div class="login-box">
                <h2 class="login-title">Sign Up</h2>

                <!-- Display Errors -->
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('register.post')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="input-container">
                        <img src="<?php echo e(asset('images/user.svg')); ?>" class="icon" alt="Username Icon">
                        <label for="name">Username:</label>
                        <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-container">
                        <img src="<?php echo e(asset('images/mail.svg')); ?>" class="icon" alt="Email Icon">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="input-container">
                        <img src="<?php echo e(asset('images/lock-on.svg')); ?>" class="icon" alt="Password Icon">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="login-submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

        
  


    <!-- Use Laravel's asset helper for JavaScript -->
    <script src="<?php echo e(asset('js/JavaScript_pop-up.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\dilax\Team-21\Team-21\resources\views/signup.blade.php ENDPATH**/ ?>