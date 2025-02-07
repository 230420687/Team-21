<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Gadget Grads</title>
    <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
    <link rel="stylesheet" href="{{asset('css/NavBar.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!-- logo and header -->
        <header class="header">
            <div class="logo-container">
                <a href="index.html" class="logo">
                    <img src="{{asset('images/GG_higher-resolution.png')}}" alt="Logo" height="50">
                </a>
                <div class="site-info">
                    <h1 class="title">GADGET GRADS</h1>
                    <h2 class="subheading">Graduate with better tech!</h2>
                </div>

            </div>
            <!-- icons -->
            <div class="icons">
                <a href="{{url('/nav')}}" class="user-icon" title="Sign in"><img src="{{asset('images/user.svg')}}" height="30"></a>
                <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="{{asset('images/heart.svg')}}" height="30"></a>
                <a href="{{url('/basket')}}"class="cart-icon" title="Basket"><img src="{{asset('images/basket.svg')}}" height="30"></a>
        </div>
        </header>
        <!-- nav bar -->
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
        <!-- Form for updating details -->
        <form action="{{ route('update') }}" method="POST">
            @csrf
           
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}" required>
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror

            <!-- Email Field -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror

            <!-- Phone Number Field -->
            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}" required>
            @error('phone')
                <p class="error-message">{{ $message }}</p>
            @enderror

            <!-- Submit Button -->
            <button type="submit">Update Details</button>
        </form>

        <!-- Delete Account Form -->
        <h2>Delete Your Account</h2>
        <form action="{{ route('delete') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
            @csrf

            <!-- Password Confirmation -->
            <label for="password">Confirm Your Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror

            <button type="submit" class="delete-button">Delete Account</button>
        </form>
    </div>
</body>
</html>
