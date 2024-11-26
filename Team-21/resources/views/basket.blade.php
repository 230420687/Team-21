<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character set and viewport settings for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Basket</title>
    <!-- Links to external CSS stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/NavBar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/LoginPopUp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Basket.css') }}">
    <link rel="stylesheet" href="{{ asset('css/PaymentMethods.css') }}">
    <link rel="stylesheet" href="{{ asset('css/RemoveItem.css') }}">
    <!-- Link to Google Fonts for custom font -->
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-container">
                <!-- Logo and tagline for the website -->
                <img src="{{asset('images/GG_higher-resolution.png')}}" alt="Gadget Grads Logo">
                <div class="logo-text">
                    <h1>Gadget Grads</h1>
                    <p>Graduate with better tech!</p>
                </div>
            </div>
            <div class="search-container">
                <!-- Search bar for searching products -->
                <img src="{{asset('images/search.svg')}}" alt="Search Icon" class="search-icon">
                <input type="text" class="search-bar" placeholder="Search products and brands" aria-label="Search">
            </div>
            <div class="icon-container">
                <!-- Icons for user login, wishlist, and basket -->
                <button id="login-btn" class="icon-btn"><img src="{{asset('images/user.svg')}}" alt="User Icon"></button>
                <img src="{{asset('images/heart.svg')}}" alt="Wishlist Icon" class="icon">
                <a href="Basket.html">
                    <img src="{{asset('images/basket.svg')}}" alt="Basket Icon" class="icon">
                </a>
            </div>            
        </div>
        <!-- Navigation bar with links to various sections -->
        <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/nav')}}">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Main content area for the basket -->
        <h2>Your Basket (<span id="item-count-header">0</span> <span id="item-label">items</span>)</h2>
        <div class="basket-content">
            <div class="basket-container">
                <div class="basket-item">
                    <div class="product-info">
                        <!-- Product image and details -->
                        <img src="{{asset('images/Laptop.svg')}}" alt="Product Image" class="product-image">
                        <div class="product-details">
                            <div class="product-name">Product Name</div>
                            <div class="product-details-row">
                                <div class="quantity-section">
                                    <!-- Quantity input for products -->
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="1" min="1" class="quantity">
                                </div>
                                <!-- Link to remove item from basket -->
                                <a href="#" class="remove-link" onclick="showRemovePopup(this)">Remove item</a>
                                <div class="price">£10.00</div>
                            </div>
                            <!-- Availability information for delivery and collection -->
                            <div class="availability white-box">
                                <p>You can choose your delivery or collection preferences at checkout</p>
                                <div class="availability-item">
                                    <img src="{{asset('images/truck.svg')}}" alt="Delivery Icon" class="availability-icon">
                                    <span>Delivery available</span>
                                </div>
                                <div class="availability-item">
                                    <img src="{{asset('images/shop.svg')}}" alt="Collection Icon" class="availability-icon">
                                    <span>Collection unavailable</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="total-box-container">
                <div class="total-box">
                    <!-- Payment options and total price -->
                    <div class="payment-options">
                        <label>
                            <input type="checkbox" class="payment-checkbox"> Card/Paypal
                        </label>
                        <label>
                            <input type="checkbox" class="payment-checkbox"> Spread the cost
                        </label>
                    </div>
                    <div class="payment-details">
                        <p>Make monthly payments</p>
                        <ul>
                            <li id="monthly-payment">From £0.00 for 36 months</li>
                        </ul>
                        <p>Or buy now, pay later</p>
                        <ul>
                            <li id="buy-later-date">Pay as much as you'd like for 12 months, settle in full by (date) and pay no interest</li>
                        </ul>
                    </div>
                    <p>Total: £<span id="basket-total">10.00</span></p>
                    <!-- Button to proceed to checkout -->
                    <button class="checkout-btn">Proceed to Checkout</button>
                    <p>Pay securely with</p>
                    <!-- Payment method icons -->
                    <div class="payment-icons">
                        <img src="{{ asset('images/Maestro.svg') }}" alt="Maestro">
                        <img src="{{ asset('images/MasterCard.svg') }}" alt="MasterCard">
                        <img src="{{ asset('images/Visa.svg') }}" alt="Visa">
                        <img src="{{ asset('images/PayPal.svg') }}" alt="PayPal">
                    </div>
                    <!-- Link to continue shopping -->
                    <a href="{{ url('/nav')}}" class="continue-shopping">Continue shopping</a>
                    <!-- Disclaimer with illustrative and representative examples -->
                    <div class="disclaimer">
                        <p><strong>Illustrative example:</strong> Credit amount £579.00. Pay 36 monthly payments of £23.46. Total amount payable £844.56. The interest rate for this purchase is 19.9%.</p>
                        <p><strong>Representative example:</strong> Rate of interest 19.9% (variable). 19.9% APR representative (variable). Assumed Credit Limit £1,200.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Remove Item Popup -->
        <div id="remove-popup" class="popup">
            <div class="popup-content">
                <p>Are you sure you want to remove this item?</p>
                <!-- Buttons to confirm or cancel item removal -->
                <button onclick="removeItem()">Yes</button>
                <button onclick="closePopup()">No</button>
            </div>
        </div>
    </main>
    <!-- External JavaScript files for basket and payment methods functionalities -->
    <script src="{{asset('js/Basket.js')}}"></script>
    <script src="{{asset('js/PaymentMethods.js')}}"></script>
</body>
</html>
