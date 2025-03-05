<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character set and viewport settings for responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Wishlist</title>
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
                <a href="index.html" class="logo">
                    <img src="{{asset('images/GG_higher-resolution.png')}}" alt="Logo" height="50">
                </a>
                <div class="site-info">
                    <h1 class="title">GADGET GRADS</h1>
                    <h2 class="subheading">Graduate with better tech!</h2>
                </div>
            </div>
            <div class="icons">
                <a href="{{url('/nav')}}" class="user-icon" title="Sign in"><img src="{{asset('images/user.svg')}}" height="30"></a>
                <a href="{{url('/wishlist')}}" class="wishlist-icon" title="Wishlist"><img src="{{asset('images/heart.svg')}}" height="30"></a>
                <a href="{{url('/basket')}}" class="cart-icon" title="Basket"><img src="{{asset('images/basket.svg')}}" height="30"></a>
        </div>      
        </div>
        <!-- Navigation bar with links to various sections -->
        <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/products')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
            </ul>
        </nav>
    </header>

<main>
    <div class="container my-5">
        <!-- Wishlist Header -->
        <h2 class="mb-4">Your Wishlist (<span id="item-count-header">{{ count($wishListItems) }}</span> <span id="item-label">items</span>)</h2>
        
        <!-- Wishlist Content -->
        <div class="wishlist-content">
            <div class="wishlist-container">
                <!-- Loop through wishlist items -->
                @php $total = 0; @endphp
                @foreach($wishListItems as $item)
                <div class="wishlist-item mb-4 p-3 border rounded">
                    <div class="product-info d-flex align-items-start">
                        <!-- Product image -->
                        <img src="Images\{{$item->product->img_id}}.jpg" alt="Product Image" class="product-image me-3">
                        
                        <!-- Product Details -->
                        <div class="product-details">
                            <div class="product-name fw-bold">{{ $item->product->product_name }}</div>
                            <div class="product-details-row d-flex align-items-center">
                                <div class="quantity-section me-3">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" value="{{ $item->quantity }}" min="1" class="quantity form-control d-inline-block" style="width: 70px;">
                                </div>
                                <!-- Remove link -->
                                <form action="{{ route('wishlist.remove', $item->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <a href="#" class="remove-link text-danger" onclick="this.closest('form').submit()">Remove item</a>
                                </form>
                                <!-- Price -->
                                <div class="price ms-auto">£{{ number_format($item->product->product_price, 2) }}</div>
                            </div>

                            <!-- Availability Information -->
                            <div class="availability white-box mt-3">
                                <p>You can choose your delivery or collection preferences at checkout</p>
                                <div class="availability-item d-flex align-items-center">
                                    <img src="{{asset('images/truck.svg')}}" alt="Delivery Icon" class="availability-icon me-2">
                                    <span>Delivery available</span>
                                </div>
                                <div class="availability-item d-flex align-items-center">
                                    <img src="{{asset('images/shop.svg')}}" alt="Collection Icon" class="availability-icon me-2">
                                    <span>Collection unavailable</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php $total += $item->product->product_price * $item->quantity; @endphp
                @endforeach
            </div>

            <!-- Total Box -->
            <div class="total-box-container mt-5">
                <div class="total-box p-4 border rounded">
                    <p>Total: £<span id="wishlist-total">{{ number_format($total, 2) }}</span></p>
                    <!-- Button to go to basket -->
                    <a href="{{ url('/basket') }}" class="btn btn-success w-100 mt-3">Go to Basket</a>
                    <!-- Continue shopping link -->
                    <a href="{{ url('/home') }}" class="continue-shopping d-block text-center mt-3">Continue shopping</a>
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
</main>

<!-- External JavaScript files -->
<script src="{{asset('js/Wishlist.js')}}"></script>
<script src="{{asset('js/TotalBox.js')}}"></script>
</body>
</html>