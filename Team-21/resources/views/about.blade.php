<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gadget Grads - Login/Sign Up</title>
    <link rel="stylesheet" href="{{asset('css/NavBar.css')}}">
    <link rel="stylesheet" href="{{asset('css/AboutUs.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo-container">
               
                <img src="{{ asset('images/GG_higher-resolution.png') }}" alt="Gadget Grads Logo">
                <div class="logo-text">
                    <h1>Gadget Grads</h1>
                    <p>Graduate with better tech!</p>
                </div>
            </div>
            <input type="text" class="search-bar" placeholder="Search products and brands" aria-label="Search">
            <button id="login-btn" class="login-btn">Log In</button>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="{{url('/nav')}}">Home</a></li>
                <li><a href="{{url('/product')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About Us</a></li>
                <li><a href="{{url('/basket')}}">Basket</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                
    
            </ul>
        </nav>
    </header>
    <main>
        <section class="about-us">
            <h2>About Us</h2>
            <p>Welcome to Gadget Grads, your one-stop online store dedicated to students who are passionate about technology. Founded by students, for students, we aim to provide the best tech solutions to aid in your academic journey and beyond.</p>
        
            <h3>Our Mission</h3>
            <p>Our mission is to empower students by offering affordable, high-quality technology. From laptops to tablets and more, we ensure you have the tools you need to succeed in your studies and everyday life. We believe that every student deserves access to the latest technology without breaking the bank.</p>
        
            <h3>How We Provide Discounts</h3>
            <p>At Gadget Grads, we leverage strong partnerships with trusted brands to secure bulk purchases of high-quality tech products. This allows us to obtain these items at lower costs, which we then pass on to our customers as significant discounts. By maintaining low operating costs and focusing on efficient logistics, we ensure that students can access the latest technology at prices that won't break the bank.</p>
        
            <h3>Our Values</h3>
            <p>At Gadget Grads, we work closely with reputable brands to bring you products at discounted prices. We bulk-purchase these items and pass on the savings to you. Moreover, we are committed to giving back 25% of our earnings are donated to charity, supporting various causes and communities.</p>
        
            <h3>The Symbolism of Our Logo</h3>
            <p>Our logo features twin mountain peaks, symbolizing the journey of academic growth and achievement. These peaks represent the challenges and progress in education, aiming for new heights of excellence and personal growth. They also signify unity and support, reminding us that no one climbs alone. Lastly, the enduring presence of mountains reflects the lasting value and strength of education.</p>

            <p><strong>Gadget Grads</strong>Graduate with better tech!</p>
        </section>    
    </main>
</body>
</html>
