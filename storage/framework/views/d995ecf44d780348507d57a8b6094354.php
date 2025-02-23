<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top Deals</title>
  <link rel="stylesheet" href="<?php echo e(asset('css/Home.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/Footer.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/navbar1.css')); ?>">


  </head>
  
<body>
  <main> 
    <div class="navbar">
    <header id="main-header">
      <a href="<?php echo e(url('/home')); ?>">
          <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Gadget Grads Logo" class="logo">
      </a>
      <h1>GADGET GRADS</h1>
      <h2>Graduate with better tech!</h2>
    
      <div class="searchnav">
          <!-- <input type="text" placeholder="Search products and brands" class="search-input"> -->
        <form action="<?php echo e(route('search')); ?>" method="GET">
            <input type="text"  class ="search-bar" name="query" placeholder="Search for products by name or description" required>
            <button  class="search-button" type="submit">Search</button>
        </form>
      </div>

    
      <div class="icons">
          <a href="<?php echo e(url('/nav')); ?>" class="user-icon" title="Sign in">
              <img src="<?php echo e(asset('images/user.svg')); ?>" alt="User Icon" height="30">
          </a>
          <a href="wishlist.html" class="wishlist-icon" title="Wishlist">
              <img src="<?php echo e(asset('images/heart.svg')); ?>" alt="Wishlist Icon" height="30">
          </a>
          <a href="<?php echo e(url('/basket')); ?>" class="cart-icon" title="Basket">
              <img src="<?php echo e(asset('images/basket.svg')); ?>" alt="Cart Icon" height="30">
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
                
    
            </ul>
    </nav>
    </div>
    
 
    
    <!-- Section1 -->
    <section class="TopDealsBanner">
      <!-- Call To Action Banner -->
      <div class="Cta">
        <img class="BigCTAimg" src="<?php echo e(asset('images/BigCTA.svg')); ?>" alt="Laptop Image" />
        <div class="PerformanceAndPortability">
          <span>Performance and Portability<br />All in one.</span>
          <span><br />Discover deals on new products</span>
        </div>
        <div class="linearGradient"></div>
        <div class="RecShopNow">
          <a href="<?php echo e(url('/products')); ?>">Shop Now</a>
        </div>
      </div>
    
      <!-- New Deals Section -->
      <a href= "<?php echo e(url('Laptops')); ?>">
      <div class="NewDeals">
      
        <img class="NewDealsimg" src="<?php echo e(asset('images/NewDeals.svg')); ?>" alt="Promotional Image" />
        <div class="NewInLaptops">
          <span>NEW IN</span>
          <span>Laptops</span>
        </div>
      
      </div>
      </a>
    </section>

    <!-- Section2 -->
    <section class="Page1">
      <header class="categories-header">
        <div class="view-all-wrapper">
          <div class="header-divider"></div>
          <a href="<?php echo e(url('/products')); ?>" class="view-all-link" tabindex="0">
            <span>View All</span>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2051de38d02724169611f7f1cd022f3331c9ebad77b0f14f89d88caf58bfebf9" alt=""class="view-all-icon" />
          </a>
        </div>
        <div class="title-wrapper">
          <h2 class="title-text">Shop From <span class="title-highlight">Top Categories</span></h2>
          <div class="title-underline"></div>
        </div>
      </header>
      
      <nav class="categories-grid">
        <ul class="items-container">

          <li class="category-item">
          <a href="<?php echo e(url('Laptops')); ?>">
            <div class="category-icon-wrapper"   >
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b85459064d1db8872cefa35ea0cb75b96611485a1034eab15cc15c903be0b1fb" alt="Laptop category" class="category-icon" />
            </div>
          </a>
            <span class="category-label">Laptops</span>
          </li>

          <li class="category-item">
          <a href="<?php echo e(url('Accessories')); ?>">
            <div class="category-icon-wrapper">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3d114d2700b095d1f92bbc9b95c57495e85029199addbf0145d81ecd56b6a580" alt="Accessories category" class="category-icon" />
            </div>
          </a>
            <span class="category-label">Accessories</span>
          </li>

          <li class="category-item">
          <a href="<?php echo e(url('Phones')); ?>">
            <div class="category-icon-wrapper" id="pulse">
            
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9df3deee2522870205eae632db86bcd0b4a51397fe4d6092b3a1ec1f52de2daf" alt="Mobile phones category" class="category-icon" />
            
            </div>
          </a>
            <span class="category-label">Phones</span>
          </li>

          <li class="category-item">
          <a href="<?php echo e(url('Smartwatches')); ?>">
            <div class="category-icon-wrapper">
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a8059aabbd907429b9b6314b4ba2b571f35b511efb624789dc7395c92463cfc7" alt="Smartwatches category" class="category-icon" />
            </div>
          </a>
            <span class="category-label">Smartwatches</span>

          </li>

          <li class="category-item">
          <a href="<?php echo e(url('Tablets')); ?>">
            <div class="category-icon-wrapper">
              <img src="<?php echo e(asset('images/Lenovo.svg')); ?>" alt="Headphones category" class="category-icon" />
            </div>
          </a>
            <span class="category-label">Tablets</span>
          </li>


          
        </ul>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2314d6563cca51d9ca6f3907fd34bcd6a3f0dd2e1cd77ba072e4dc5b00f2ad9a" alt="" class="arrow-icon" />
      </nav>
    </section>




    <section class="Page2">
      <!-- Header Section -->
      <header class="header-wrapper">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/57b4b4ba94735a809f4c6f717956d18a8d8fc1e0c510ccc35437ff97ab2bc572?placeholderIfAbsent=true&apiKey=3a437244a50945448f94b673144271db"
               alt="Banner"
               class="banner-image"
               loading="lazy">
          
          <div class="section-popular">
              <h2 class="section-popular">Popular Right Now</h2>
              <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cb869a391973a332dd739fbf7c4ac275ca22375a19af5dd6519748682a0063b0?placeholderIfAbsent=true&apiKey=3a437244a50945448f94b673144271db"
                   alt="Header icon"
                   class="header-icon"
                   loading="lazy">
          </div>
      </header>
  
      <!-- Products Grid Section -->
      <section class="products-grid">
          <!-- Product Card 1 -->
          <article class="product-card">
              <div class="product-image-placeholder" 
                   role="img" 
                   aria-label="Product image placeholder"><img src="<?php echo e(asset('images/2.jpg')); ?>" alt=""></div>
                   
              <h3 class="product-title">Apple Watch Series 10 - 42mm</h3>
              <p class="product-price">£399.00</p>
          </article>
  
          <!-- Product Card 2 -->
          <article class="product-card">
              <div class="product-image-placeholder" 
                   role="img" 
                   aria-label="Product image placeholder"><img src="<?php echo e(asset('images/4.jpg')); ?>" alt=""></div>
              <h3 class="product-title">Apple iPhone 16 Pro Max</h3>
              <p class="product-price">£1199.00</p>
          </article>
  
          <!-- Product Card 3 -->
          <article class="product-card">
            
              <div class="product-image-placeholder" 
                   role="img" 
                   aria-label="Product image placeholder"><img src="<?php echo e(asset('images/3.jpg')); ?>" alt=""></div>
              <h3 class="product-title">Apple 11" iPad Air(2024)</h3>
              <p class="product-price">£599.00</p>
           
          </article>
  
          <!-- Product Card 4 -->
          <article class="product-card">
              <div class="product-image-placeholder" 
                   role="img" 
                   aria-label="Product image placeholder"><img src="<?php echo e(asset('images/7.jpg')); ?>" alt=""></div>
              <h3 class="product-title">Lenovo Thinkpad IdeaPad Gaming</h3>
              <p class="product-price">£799.00</p>
          </article>
  
          <!-- Navigation Icon -->
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2f9608223079bcf7e5f7696e37a9660cc9ef78b37e9f6d990bd1eed11a9294be?placeholderIfAbsent=true&apiKey=3a437244a50945448f94b673144271db"
               alt="Navigation icon"
               class="navigation-icon"
               loading="lazy">
      </section>
  </section>
    

<!-- Add this right after your products section
<div id="footer-container"></div>

<iframe src="Footer.html" frameborder="0" width="100%"></iframe>-->


</main>

<script src="<?php echo e(asset('js/JavaScript_pop-up.js')); ?>"></script>
</body>
</html><?php /**PATH C:\Users\dilax\Team-21\Team-21\resources\views/home.blade.php ENDPATH**/ ?>