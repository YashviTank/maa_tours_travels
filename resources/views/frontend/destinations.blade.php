@extends('frontend.layout')

@section('title', 'Destinations - MAA Tours and Travels')

@section('content')
<section class="destinations-hero">
    <div class="container">
        <h1>Explore Destinations</h1>
        <p>Discover amazing places around the world</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="destinations-grid" id="destinations-container">
            <p style="text-align: center; padding: 40px;">Loading destinations...</p>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
async function loadDestinations() {
    try {
        const response = await fetch('/api/tours');
        const data = await response.json();
        
        if (data.success && data.data.length > 0) {
            const container = document.getElementById('destinations-container');
            container.innerHTML = data.data.map(tour => `
                <div class="destination-card">
                    <div class="destination-image" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)), url('${tour.image_url}');">
                        <div class="destination-badge">${tour.category || 'Popular'}</div>
                    </div>
                    <div class="destination-content">
                        <h3>${tour.destination}</h3>
                        <p>${tour.overview || tour.description}</p>
                        <div class="destination-footer">
                            <span class="price">From ₹${Number(tour.price).toLocaleString()}</span>
                            <a href="{{ route('tours') }}" class="btn-link">Explore →</a>
                        </div>
                    </div>
                </div>
            `).join('');
        }
    } catch (error) {
        console.error('Error loading destinations:', error);
    }
}

document.addEventListener('DOMContentLoaded', loadDestinations);
</script>
@endpush
