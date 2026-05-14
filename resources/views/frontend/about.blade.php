@extends('frontend.layout')

@section('title', 'About Us - MAA Tours and Travels')

@section('content')
<section class="about-hero">
    <div class="container">
        <h1>About MAA Tours</h1>
        <p>Your trusted partner in creating unforgettable travel experiences</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>Founded in 2010, MAA Tours and Travels has been dedicated to making travel dreams come true for thousands of satisfied customers. What started as a small travel agency has grown into a leading travel company, offering comprehensive travel solutions worldwide.</p>
                <p>We believe that travel is not just about visiting places, but about creating memories, experiencing cultures, and connecting with people. Our mission is to provide exceptional travel experiences that exceed expectations and create lasting memories.</p>
                <p>With over a decade of experience in the travel industry, we have built strong relationships with hotels, airlines, and local tour operators around the globe, ensuring you get the best value and service.</p>
            </div>
            <div class="about-image" style="background-image: url('https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800');"></div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <h2 class="section-title">Our Achievements</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">50K+</div>
                <div class="stat-label">Happy Travelers</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">100+</div>
                <div class="stat-label">Destinations</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">15+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">98%</div>
                <div class="stat-label">Satisfaction Rate</div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="about-content">
            <div class="about-image" style="background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=800');"></div>
            <div class="about-text">
                <h2>Our Mission & Vision</h2>
                <p><strong>Mission:</strong> To provide exceptional travel experiences that inspire, educate, and create lasting memories while maintaining the highest standards of customer service and satisfaction.</p>
                <p><strong>Vision:</strong> To be the world's most trusted and preferred travel partner, known for innovation, reliability, and creating transformative travel experiences.</p>
                <p><strong>Values:</strong> We are committed to integrity, excellence, customer satisfaction, sustainability, and cultural respect in everything we do.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <h2 class="section-title">Why Choose MAA Tours?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">✈️</div>
                <h3>Expert Planning</h3>
                <p>Our experienced team meticulously plans every detail of your journey to ensure a seamless experience.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💎</div>
                <h3>Premium Quality</h3>
                <p>We partner with the best hotels, airlines, and service providers to deliver premium experiences.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌟</div>
                <h3>24/7 Support</h3>
                <p>Round-the-clock customer support to assist you before, during, and after your trip.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Customized Tours</h3>
                <p>Tailor-made itineraries designed to match your preferences, interests, and budget.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🏆</div>
                <h3>Award Winning</h3>
                <p>Recognized with multiple industry awards for excellence in travel services.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌱</div>
                <h3>Sustainable Travel</h3>
                <p>Committed to responsible tourism and minimizing environmental impact.</p>
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Start Your Adventure?</h2>
            <p>Let us help you plan your perfect getaway</p>
            <a href="{{ route('contact') }}" class="btn btn-light">Contact Us Today</a>
        </div>
    </div>
</section>
@endsection
