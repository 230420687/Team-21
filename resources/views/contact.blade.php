<link rel="stylesheet" href="{{asset('css/contact_page.css')}}">
<script src="{{asset('js/chatbot.js')}}"></script>
<!DOCTYPE html>
<html lang="en"></html>
<html>
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/contact_page.css')}}">
  <link rel="stylesheet" href="{{asset('css/NavBar.css')}}">
  <link rel="stylesheet" href="{{asset('css/checkout.css')}}">
  <script src="{{asset('js/chatbot.js')}}"></script>
  <title>Contact Page</title>
</head>
<header>
<div class="header-content">
            <div class="logo-container">
               
                <img src="{{ asset('images/GG_higher-resolution.png') }}" alt="Gadget Grads Logo">
                <div class="logo-text">
                    <h1>Gadget Grads</h1>
                    <p>Graduate with better tech!</p>
                </div>
            </div>
            

            

        </div>




        <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/products')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                
    
            </ul>

        </nav>


        
        <div class="icons">
                <a href="{{url('/nav')}}" class="user-icon" title="Sign in"><img src="{{asset('images/user.svg')}}" height="30"></a>
                <a href="wishlist.html" class="wishlist-icon" title="Wishlist"><img src="{{asset('images/heart.svg')}}" height="30"></a>
                <a href="{{url('/basket')}}"class="cart-icon" title="Basket"><img src="{{asset('images/basket.svg')}}" height="30"></a>
        </div> 

        
</header>

<body>
  
    <div class="container">
       
        <img
          src="{{asset('images/image-asset.gif')}}"
          alt="email image">
          
          
        <div class="container-text">
          
           
        @if($errors->any())
      <div class="alert alert-danger">
        <!-- <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul> -->
      </div>
    @endif

    <!-- Contact Form -->
    <form action="{{ route('contact.submit') }}" method="POST">
      @csrf
      <h2>Contact Form:</h2>

      <!-- Name Field -->
      <label for="name">Your Name:</label><br>
      <input 
        type="text" 
        id="name" 
        name="name" 
        placeholder="Enter your name" 
        value="{{ old('name') }}">
      <br>
      @error('name')
        <span class="error">{{ $message }}</span><br>
      @enderror

      <!-- Email Field -->
      <label for="email">Your Email Address:</label><br>
      <input 
        type="email" 
        id="email" 
        name="email" 
        placeholder="Enter your email address" 
        value="{{ old('email') }}">
      <br>
      @error('email')
        <span class="error">{{ $message }}</span><br>
      @enderror

      <!-- Subject Field -->
      <label for="subject">Subject:</label><br>
      <input 
        type="text" 
        id="subject" 
        name="subject" 
        placeholder="Enter subject" 
        value="{{ old('subject') }}">
      <br>
      @error('subject')
        <span class="error">{{ $message }}</span><br>
      @enderror

      <!-- Department Select -->
      <label for="pwho">Do you know who you want to speak to?</label><br>
      <select 
        id="pwho" 
        name="pwho" 
        title="Select the department or person you want to contact">
        <option value="" disabled selected>-- Select a Department --</option>
        <option value="hr" {{ old('pwho') == 'hr' ? 'selected' : '' }}>HR</option>
        <option value="admin" {{ old('pwho') == 'admin' ? 'selected' : '' }}>Admin Team</option>
        <option value="services" {{ old('pwho') == 'services' ? 'selected' : '' }}>Customer Services</option>
        <option value="management" {{ old('pwho') == 'management' ? 'selected' : '' }}>Stock Management</option>
        <option value="ceo" {{ old('pwho') == 'ceo' ? 'selected' : '' }}>CEO</option>
        <option value="nsure" {{ old('pwho') == 'nsure' ? 'selected' : '' }}>Not Sure</option>
      </select>
      <br>
      @error('pwho')
        <span class="error">{{ $message }}</span><br>
      @enderror

      <!-- Message Field -->
      <label for="ymessage">Type Your Message:</label><br>
      <textarea 
        id="ymessage" 
        name="message" 
        placeholder="Write your message here...">{{ old('message') }}</textarea>
      <br>
      @error('message')
        <span class="error">{{ $message }}</span><br>
      @enderror

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
</html>