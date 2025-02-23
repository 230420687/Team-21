<link rel="stylesheet" href="<?php echo e(asset('css/contact_page.css')); ?>">
<script src="<?php echo e(asset('js/chatbot.js')); ?>"></script>
<!DOCTYPE html>
<html lang="en"></html>
<html>
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo e(asset('css/contact_page.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/NavBar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/checkout.css')); ?>">
  <script src="<?php echo e(asset('js/chatbot.js')); ?>"></script>
  <title>Contact Page</title>
</head>
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
  
    <div class="container">
       
        <img
          src="<?php echo e(asset('images/image-asset.gif')); ?>"
          alt="email image">
          
          
        <div class="container-text">
          
           
        <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <!-- <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul> -->
      </div>
    <?php endif; ?>

    <!-- Contact Form -->
    <form action="<?php echo e(route('contact.submit')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <h2>Contact Form:</h2>

      <!-- Name Field -->
      <label for="name">Your Name:</label><br>
      <input 
        type="text" 
        id="name" 
        name="name" 
        placeholder="Enter your name" 
        value="<?php echo e(old('name')); ?>">
      <br>
      <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error"><?php echo e($message); ?></span><br>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <!-- Email Field -->
      <label for="email">Your Email Address:</label><br>
      <input 
        type="email" 
        id="email" 
        name="email" 
        placeholder="Enter your email address" 
        value="<?php echo e(old('email')); ?>">
      <br>
      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error"><?php echo e($message); ?></span><br>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <!-- Subject Field -->
      <label for="subject">Subject:</label><br>
      <input 
        type="text" 
        id="subject" 
        name="subject" 
        placeholder="Enter subject" 
        value="<?php echo e(old('subject')); ?>">
      <br>
      <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error"><?php echo e($message); ?></span><br>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <!-- Department Select -->
      <label for="pwho">Do you know who you want to speak to?</label><br>
      <select 
        id="pwho" 
        name="pwho" 
        title="Select the department or person you want to contact">
        <option value="" disabled selected>-- Select a Department --</option>
        <option value="hr" <?php echo e(old('pwho') == 'hr' ? 'selected' : ''); ?>>HR</option>
        <option value="admin" <?php echo e(old('pwho') == 'admin' ? 'selected' : ''); ?>>Admin Team</option>
        <option value="services" <?php echo e(old('pwho') == 'services' ? 'selected' : ''); ?>>Customer Services</option>
        <option value="management" <?php echo e(old('pwho') == 'management' ? 'selected' : ''); ?>>Stock Management</option>
        <option value="ceo" <?php echo e(old('pwho') == 'ceo' ? 'selected' : ''); ?>>CEO</option>
        <option value="nsure" <?php echo e(old('pwho') == 'nsure' ? 'selected' : ''); ?>>Not Sure</option>
      </select>
      <br>
      <?php $__errorArgs = ['pwho'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error"><?php echo e($message); ?></span><br>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <!-- Message Field -->
      <label for="ymessage">Type Your Message:</label><br>
      <textarea 
        id="ymessage" 
        name="message" 
        placeholder="Write your message here..."><?php echo e(old('message')); ?></textarea>
      <br>
      <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error"><?php echo e($message); ?></span><br>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

      <!-- Submit Button -->
      <input type="submit" value="Submit">
    </form>
        </div>
      </div>
      <div class="chat-container">
        <div class="chat-display" id="chat-display"></div>
        <div class="chat-input">
          <input type="text" id="user-input" placeholder="Say hello...">
          <button id="send-button">Send</button>
        </div>
      
</body>
</html><?php /**PATH C:\Users\dilax\Team-21\Team-21\resources\views/contact.blade.php ENDPATH**/ ?>