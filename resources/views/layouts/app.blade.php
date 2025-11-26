<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple the Brand - Laravel</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&family=Work+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- Font Awesome CDN (Added this line) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Link to our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>

    <!-- Announcement Bar -->
    <div class="announcement-bar">
        Black Week is Live - Up to 60% Off
    </div>

    <!-- Header -->
    <header id="main-header">
        <nav class="nav-container">
            <!-- Mobile Menu Icon -->
            <div class="menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            
            <a href="{{ route('home') }}" class="logo">Simple Brand</a>

            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('hydrocarbon') }}">Hydrocarbon</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li> <!-- Updated Link -->
            </ul>

            <div class="icons">
                <!-- Search Icon (Your request) -->
                <i class="fa-solid fa-magnifying-glass"></i>
                
                <!-- User Icon (Regular/Outline style for minimalism) -->
                <i class="fa-regular fa-user"></i>
                
                <!-- Bag/Cart Icon -->
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
        </nav>
    </header>

    <!-- Main Content Injection Point -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-grid">
            <div class="footer-col">
                <h4>Shop</h4>
                <ul>
                    <li>New in</li>
                    <li>Bestsellers</li>
                    <li>Dresses</li>
                    <li>Tops</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Information</h4>
                <ul>
                    <li>Our Story</li>
                    <li>Shipping Policy</li>
                    <li>Returns</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Mission</h4>
                <p class="footer-text">Building a wardrobe for the fashion-conscious ambitious woman with timeless items.</p>
            </div>
            <div class="footer-col">
                <h4>Newsletter</h4>
                <p class="footer-text">Get 10% off your first order.</p>
                <input type="email" placeholder="Your email" class="newsletter-input">
            </div>
        </div>
        <div class="copyright">
            © {{ date('Y') }} Simple the Brand Laravel Clone.
        </div>
    </footer>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>