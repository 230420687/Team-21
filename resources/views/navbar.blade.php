<header id="main-header">
  <div class="header-left">
    <a href="{{ url('/home') }}">
      <img src="{{ asset('images/logo.png') }}" alt="Gadget Grads Logo" class="logo">
    </a>
    <div class="navbar-text">
      <p class="navbar-title">GADGET GRADS</p>
      <p class="navbar-subtitle">Graduate with better tech!</p>
    </div>
  </div>

  <div class="search-container">
    <form class="search-form" action="{{ route('search') }}" method="GET">
      <input type="text" class="search-input" name="query" placeholder="Search for products by name or description..." required>
      <button class="search-button" type="submit">Search</button>
    </form>
  </div>

  <div class="icons">
    <div class="profile-dropdown">
      <a href="#" class="user-icon" title="My Profile">
        <img src="{{ asset('images/user-1.svg') }}" height="30" alt="User icon">
      </a>
      <div class="dropdown-content">
        @auth
          <a href="{{ url('/profile') }}">My Profile</a>
          <a href="{{ url('/orders') }}">My Orders</a>
          <a href="{{ url('/settings') }}">Settings</a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        @else
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>
        @endauth
      </div>
    </div>
    <a href="{{ url('/wishlist') }}" class="wishlist-icon" title="Wishlist">
      <img src="{{ asset('images/heart.svg') }}" height="30" alt="Wishlist icon">
    </a>
    <a href="{{ url('/basket') }}" class="cart-icon" title="Basket">
      <img src="{{ asset('images/basket.svg') }}" height="30" alt="Basket icon">
    </a>
  </div>
</header>

