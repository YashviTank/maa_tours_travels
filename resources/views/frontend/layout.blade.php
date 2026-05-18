<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'MAA Tours and Travels - Explore the World')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <img src="{{ asset('images/maa logo.png') }}" alt="MAA Tours">
                </div>
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                    <li><a href="{{ route('destinations') }}" class="{{ request()->routeIs('destinations') ? 'active' : '' }}">Destinations</a></li>
                    <li><a href="{{ route('tours') }}" class="{{ request()->routeIs('tours') ? 'active' : '' }}">Tours</a></li>
                    <li><a href="{{ route('reviews') }}" class="{{ request()->routeIs('reviews') ? 'active' : '' }}">Reviews</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    <li><a href="{{ route('booking') }}" class="btn-primary">Book Now</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>MAA Tours</h3>
                    <p>Your trusted travel partner for unforgettable adventures around the world.</p>
                    <div class="social-links">
                        <a href="#" class="social-link">Facebook</a>
                        <a href="#" class="social-link">Instagram</a>
                        <a href="#" class="social-link">Twitter</a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('destinations') }}">Destinations</a></li>
                        <li><a href="{{ route('tours') }}">Tour Packages</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Flight Booking</a></li>
                        <li><a href="#">Hotel Reservation</a></li>
                        <li><a href="#">Travel Insurance</a></li>
                        <li><a href="#">Visa Assistance</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>📧 maatours79@gmail.com</li>
                        <li>📞 +91 9173157999</li>
                        <li>📞 +91 6354071777</li>
                        <li>📍 F-12 Krishna Complex, Near Jai Ganesh Toyota, 150ft Ring Road, Rajkot, Gujarat 360005</li>
                        <li>🌐 maatours.co.in</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 MAA Tours and Travels. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>
