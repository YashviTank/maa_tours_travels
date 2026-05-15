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
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        console.log('Tours API response:', data);
        
        if (data.success && data.data && data.data.length > 0) {
            const container = document.getElementById('tours-container');
            container.innerHTML = data.data.map(tour => `
                <div class="tour-card">
                    <div class="tour-image" style="background-image: url('${tour.image_url || 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800'}');">
                        <div class="tour-duration">${tour.duration || '7 Days'}</div>
                    </div>
                    <div class="tour-content">
                        <h3>${tour.title}</h3>
                        <div class="tour-location">📍 ${tour.destination}</div>
                        <p>${tour.description ? tour.description.substring(0, 150) + '...' : 'Explore this amazing destination with our expert guides.'}</p>
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
        } else if (data.success && (!data.data || data.data.length === 0)) {
            document.getElementById('tours-container').innerHTML = '<p style="text-align: center; padding: 40px;">No tours available at the moment. Please check back soon!</p>';
        } else {
            document.getElementById('tours-container').innerHTML = '<p style="text-align: center; padding: 40px; color: orange;">Unable to load tours. Please contact us for available packages.</p>';
        }
    } catch (error) {
        console.error('Error loading tours:', error);
        document.getElementById('tours-container').innerHTML = `
            <div style="text-align: center; padding: 40px;">
                <p style="color: red; margin-bottom: 10px;">Error loading tours: ${error.message}</p>
                <p style="color: #6b7280;">Please contact us at <a href="tel:+919173157999" style="color: #2563eb;">+91 9173157999</a> for available tour packages.</p>
            </div>
        `;
    }
}

document.addEventListener('DOMContentLoaded', loadAllTours);
</script>
@endpush
