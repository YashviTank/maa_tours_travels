@extends('frontend.layout')

@section('title', 'MAA Tours and Travels - Explore the World')

@section('content')
<section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">Discover Your Next Adventure</h1>
        <p class="hero-subtitle">Explore breathtaking destinations around the world with MAA Tours</p>
        <div class="hero-buttons">
            <a href="{{ route('tours') }}" class="btn btn-primary">Explore Tours</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <h2 class="section-title">Why Choose MAA Tours?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>Global Destinations</h3>
                <p>Access to over 100+ destinations worldwide with carefully curated travel experiences.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>Best Prices</h3>
                <p>Competitive pricing with no hidden fees. Get the best value for your travel budget.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3>Safe & Secure</h3>
                <p>Your safety is our priority. Travel with confidence and peace of mind.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⭐</div>
                <h3>Expert Guides</h3>
                <p>Professional tour guides with extensive local knowledge and experience.</p>
            </div>
        </div>
    </div>
</section>

<section class="destinations">
    <div class="container">
        <h2 class="section-title">Popular Destinations</h2>
        <p class="section-subtitle">Discover the most sought-after travel destinations</p>
        <div class="destinations-grid" id="popular-tours">
            <p style="text-align: center; padding: 40px;">Loading tours...</p>
        </div>
        <div class="text-center">
            <a href="{{ route('destinations') }}" class="btn btn-primary">View All Destinations</a>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Start Your Journey?</h2>
            <p>Book your dream vacation today and create memories that last a lifetime</p>
            <a href="{{ route('booking') }}" class="btn btn-light">Book Your Trip Now</a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
async function loadPopularTours() {
    try {
        const response = await fetch('/api/tours');
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        console.log('Popular tours API response:', data);
        
        if (data.success && data.data && data.data.length > 0) {
            const container = document.getElementById('popular-tours');
            container.innerHTML = data.data.slice(0, 3).map(tour => `
                <div class="destination-card">
                    <div class="destination-image" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)), url('${tour.image_url || 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800'}');">
                        ${tour.category === 'adventure' ? '<div class="destination-badge">Popular</div>' : ''}
                    </div>
                    <div class="destination-content">
                        <h3>${tour.title || tour.destination}</h3>
                        <p>${(tour.description || 'Explore this amazing destination').substring(0, 100)}...</p>
                        <div class="destination-footer">
                            <span class="price">From ₹${Number(tour.price || 0).toLocaleString()}</span>
                            <a href="{{ route('tours') }}" class="btn-link">View Details →</a>
                        </div>
                    </div>
                </div>
            `).join('');
        } else {
            document.getElementById('popular-tours').innerHTML = '<p style="text-align: center; padding: 40px;">No tours available at the moment.</p>';
        }
    } catch (error) {
        console.error('Error loading tours:', error);
        document.getElementById('popular-tours').innerHTML = '<p style="text-align: center; padding: 40px; color: #6b7280;">Unable to load tours at this time.</p>';
    }
}

document.addEventListener('DOMContentLoaded', loadPopularTours);
</script>
@endpush
