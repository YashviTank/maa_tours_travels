@extends('frontend.layout')

@section('title', 'Our Tours - MAA Tours and Travels')

@section('content')
<section class="tours-hero">
    <div class="container">
        <h1>Our Tour Packages</h1>
        <p>Explore our carefully curated tour packages for unforgettable experiences</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="destinations-grid" id="tours-container">
            <p style="text-align: center; padding: 40px;">Loading tours...</p>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
async function loadAllTours() {
    try {
        const response = await fetch('/api/tours');
        const data = await response.json();
        
        if (data.success && data.data.length > 0) {
            const container = document.getElementById('tours-container');
            container.innerHTML = data.data.map(tour => `
                <div class="tour-card">
                    <div class="tour-image" style="background-image: url('${tour.image_url}');">
                        <div class="tour-duration">${tour.duration}</div>
                    </div>
                    <div class="tour-content">
                        <h3>${tour.title}</h3>
                        <div class="tour-location">📍 ${tour.destination}</div>
                        <p>${tour.description.substring(0, 150)}...</p>
                        <div class="tour-features">
                            <div class="tour-feature">✈️ Flights Included</div>
                            <div class="tour-feature">🏨 Hotels</div>
                            <div class="tour-feature">🍽️ Meals</div>
                        </div>
                        <div class="tour-footer">
                            <div class="tour-price">
                                <span class="label">Starting from</span>
                                <span class="amount">₹${Number(tour.price).toLocaleString()}</span>
                            </div>
                            <a href="{{ route('booking') }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            `).join('');
        } else {
            document.getElementById('tours-container').innerHTML = '<p style="text-align: center; padding: 40px;">No tours available at the moment.</p>';
        }
    } catch (error) {
        console.error('Error loading tours:', error);
        document.getElementById('tours-container').innerHTML = '<p style="text-align: center; padding: 40px; color: red;">Error loading tours. Please try again later.</p>';
    }
}

document.addEventListener('DOMContentLoaded', loadAllTours);
</script>
@endpush
