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

     <link rel = "stylesheet"  href="<?php echo e(asset('/css/UserReview.css')); ?>" > 
     <link rel = "stylesheet"  href="<?php echo e(asset('/css/Product.css')); ?>" > 
     

	</head>


    <body>
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="product-container">
        <img id="product-image" src="/Images\<?php echo e($product->img_id); ?>.jpg" alt="Product Image">
        <div id="zoom-result"></div>
        <script src="<?php echo e(asset('js/Product.js')); ?>"></script>
</div>

<h3 class="product-title"> <?php echo e($product->product_name); ?></h3>
<p class ="product-price">£<?php echo e($product->product_price); ?></p>
<p class ="product-title"><?php echo e($product->product_description); ?></p>

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


    <!-- Display the reviews -->
<h3>Customer Reviews</h3>
<?php if($product->reviews->count() > 0): ?>
    <?php $__currentLoopData = $product->reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <strong>User <?php echo e($review->user->email); ?></strong>
            <p>Rating: ⭐ <?php echo e($review->rating); ?> / 5</p>
            <p><?php echo e($review->review); ?></p>
            <hr>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p>No reviews yet. Be the first to leave a review!</p>
<?php endif; ?>




        <!-- User Review Section -->
        <div class="review-section">
            <h3>Leave a Review</h3>
            <form action="<?php echo e(route('reviews.store', $product->product_id)); ?>" method="POST" class="review-form">
                <?php echo csrf_field(); ?>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5" title="5 stars">★</label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4" title="4 stars">★</label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3" title="3 stars">★</label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2" title="2 stars">★</label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1" title="1 star">★</label>
                </div>
                <textarea name="review" placeholder="Write your review here..." required></textarea>
                <button type="submit">Submit Review</button>
            </form>
        </div>

</header>
</body>
</html><?php /**PATH C:\Users\Salve\Team-21\Team-21\resources\views//productdesc.blade.php ENDPATH**/ ?>