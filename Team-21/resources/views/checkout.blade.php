<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Gadget Grads</title>
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <header class="header">
            <div class="logo-container">
                <a href="index.html" class="logo">
                    <img src="{{asset('images/GG_higher-resolution.png')}}" alt="Logo" height="50">
                </a>
                <div class="site-info">
                    <h1 class="title">GADGET GRADS</h1>
                    <h2 class="subheading">Graduate with better tech!</h2>
               
                </div>
                <div class="search-container">
                    <img src="{{asset('images/search.svg')}}" alt="Search Icon" class="search-icon">
                    <input type="text" class="search-bar" placeholder="Search products and brands" aria-label="Search">
                </div>
                

            </div>
            <div class="icons">
                <a href="profile.html" class="user-icon" title="Sign in"><img src="{{asset('images/user.svg')}}" height="30"></a>
                <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="{{asset('images/heart.svg')}}" height="30"></a>
                <a href="cart.html" class="cart-icon" title="Basket"><img src="{{asset('images/basket.svg')}}" height="30"></a>
            </div>
        </header>

       
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
        </div>
    </header>

    <div class="checkout-container">
        <h3>Checkout</h3>
        <form id="checkoutForm" method="POST" action="{{route('checkout.verify')}}">
           @csrf
            <div class="form-group">
                <input type="text" id="fullName" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <input type="email" id="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="tel" id="phone" placeholder="Phone Number" required>
            </div>

            
            <div class="form-group">
                <input type="text" id="address" placeholder="Address" required>
            </div>

            <div class="form-group">
                <input type="text" id="city" placeholder="City" required>
            </div>

            <div class="form-group">
                <input type="text" id="zip" placeholder="Zip Code" required>
            </div>

           
            <div class="form-group">
                <input type="text" id="cardName" placeholder="Name on Card" required>
            </div>

            <div class="form-group">
                <input type="text" id="cardNumber" placeholder="Card Number" required>
            </div>

            <div class="form-group">
                <input type="month" id="expiryDate" required>
            </div>

            <div class="form-group">
                <input type="text" id="cvv" placeholder="CVV" required>
            </div>

            
            <button type="submit" class="checkout-button">Place Order</button>
        </form>
    </div>

    <footer>
    <ul>
                <li><a href="{{url('/nav')}}">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                
    
    </ul>
    </footer>

    <!-- <script src="{{asset('js/checkout.js')}}"></script> -->
</body>
</html>