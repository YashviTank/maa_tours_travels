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
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        console.log('Destinations API response:', data);
        
        if (data.success && data.data && data.data.length > 0) {
            const container = document.getElementById('destinations-container');
            container.innerHTML = data.data.map(tour => `
                <div class="destination-card">
                    <div class="destination-image" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)), url('${tour.image_url || 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800'}');">
                        <div class="destination-badge">${tour.category || 'Popular'}</div>
                    </div>
                    <div class="destination-content">
                        <h3>${tour.destination || tour.title}</h3>
                        <p>${(tour.overview || tour.description || 'Explore this amazing destination').substring(0, 120)}...</p>
                        <div class="destination-footer">
                            <span class="price">From ₹${Number(tour.price || 0).toLocaleString()}</span>
                            <a href="{{ route('tours') }}" class="btn-link">Explore →</a>
                        </div>
                    </div>
                </div>
            `).join('');
        } else {
            document.getElementById('destinations-container').innerHTML = '<p style="text-align: center; padding: 40px;">No destinations available at the moment.</p>';
        }
    } catch (error) {
        console.error('Error loading destinations:', error);
        document.getElementById('destinations-container').innerHTML = `
            <div style="text-align: center; padding: 40px;">
                <p style="color: red; margin-bottom: 10px;">Error loading destinations: ${error.message}</p>
                <p style="color: #6b7280;">Please contact us for available destinations.</p>
            </div>
        `;
    }
}

document.addEventListener('DOMContentLoaded', loadDestinations);
</script>
@endpush
