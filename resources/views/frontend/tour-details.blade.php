@extends('frontend.layout')

@section('title', 'Tour Details - MAA Tours and Travels')

@section('content')
<section id="tour-hero" style="background-size: cover; background-position: center; min-height: 400px; display: flex; align-items: center; position: relative; background-image: url('https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=1600');">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7));"></div>
    <div class="container" style="position: relative; z-index: 1; color: white;">
        <h1 id="tour-title" style="font-size: 48px; margin-bottom: 20px; font-weight: 700;">Loading...</h1>
        <div style="display: flex; gap: 30px; flex-wrap: wrap; font-size: 16px;">
            <div id="tour-location" style="display: flex; align-items: center; gap: 8px;">
                <span>📍</span>
                <span>Loading...</span>
            </div>
            <div id="tour-duration" style="display: flex; align-items: center; gap: 8px;">
                <span>🕐</span>
                <span>Loading...</span>
            </div>
            <div id="tour-rating" style="display: flex; align-items: center; gap: 8px;">
                <span>⭐</span>
                <span>Loading...</span>
            </div>
        </div>
    </div>
</section>

<section style="padding: 60px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px;">
            <!-- Main Content -->
            <div>
                <!-- Tour Overview -->
                <div style="margin-bottom: 50px;">
                    <h2 style="font-size: 32px; margin-bottom: 20px; color: #1f2937; font-weight: 600;">Tour Overview</h2>
                    <div id="tour-overview" style="color: #4b5563; line-height: 1.8; font-size: 16px;">
                        <p>Loading tour details...</p>
                    </div>
                </div>

                <!-- Tour Highlights -->
                <div style="margin-bottom: 50px;">
                    <h2 style="font-size: 32px; margin-bottom: 20px; color: #1f2937; font-weight: 600;">Tour Highlights</h2>
                    <div id="tour-highlights" style="display: grid; gap: 12px;">
                        <p>Loading highlights...</p>
                    </div>
                </div>

                <!-- Detailed Itinerary -->
                <div style="margin-bottom: 50px;">
                    <h2 style="font-size: 32px; margin-bottom: 20px; color: #1f2937; font-weight: 600;">Detailed Itinerary</h2>
                    <div id="tour-itinerary" style="color: #4b5563; line-height: 1.8;">
                        <p>Loading itinerary...</p>
                    </div>
                </div>

                <!-- Inclusions -->
                <div style="margin-bottom: 50px;">
                    <h2 style="font-size: 32px; margin-bottom: 20px; color: #1f2937; font-weight: 600;">What's Included</h2>
                    <div id="tour-inclusions" style="display: grid; gap: 12px;">
                        <p>Loading inclusions...</p>
                    </div>
                </div>

                <!-- Exclusions -->
                <div style="margin-bottom: 50px;">
                    <h2 style="font-size: 32px; margin-bottom: 20px; color: #1f2937; font-weight: 600;">What's Not Included</h2>
                    <div id="tour-exclusions" style="display: grid; gap: 12px;">
                        <p>Loading exclusions...</p>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div>
                <div style="background: white; border-radius: 12px; padding: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); position: sticky; top: 20px;">
                    <div style="margin-bottom: 25px; padding-bottom: 25px; border-bottom: 2px solid #e5e7eb;">
                        <div style="color: #6b7280; font-size: 14px; margin-bottom: 8px;">Starting from</div>
                        <div id="tour-price" style="color: #2563eb; font-size: 42px; font-weight: 700;">₹0</div>
                        <div style="color: #6b7280; font-size: 13px; margin-top: 5px;">per person</div>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <h3 style="font-size: 18px; margin-bottom: 15px; color: #1f2937; font-weight: 600;">Quick Info</h3>
                        <div style="display: grid; gap: 12px;">
                            <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #f3f4f6;">
                                <span style="color: #6b7280;">Duration</span>
                                <span id="sidebar-duration" style="color: #1f2937; font-weight: 500;">-</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #f3f4f6;">
                                <span style="color: #6b7280;">Category</span>
                                <span id="sidebar-category" style="color: #1f2937; font-weight: 500;">-</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 10px 0;">
                                <span style="color: #6b7280;">Group Size</span>
                                <span style="color: #1f2937; font-weight: 500;">2-15 people</span>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('booking') }}" style="display: block; background: #2563eb; color: white; text-align: center; padding: 16px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 16px; transition: all 0.3s ease; margin-bottom: 15px;">
                        Book Now
                    </a>

                    <a href="{{ route('contact') }}" style="display: block; background: white; color: #2563eb; text-align: center; padding: 16px; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 16px; border: 2px solid #2563eb; transition: all 0.3s ease;">
                        Contact Us
                    </a>

                    <div style="margin-top: 25px; padding-top: 25px; border-top: 2px solid #e5e7eb;">
                        <h4 style="font-size: 16px; margin-bottom: 15px; color: #1f2937; font-weight: 600;">Need Help?</h4>
                        <div style="color: #6b7280; font-size: 14px; line-height: 1.6;">
                            <p style="margin-bottom: 10px;">📞 +91 9173157999</p>
                            <p style="margin-bottom: 10px;">📞 +91 6354071777</p>
                            <p>📧 maatours79@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.highlight-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 12px;
    background: #f9fafb;
    border-radius: 8px;
    color: #374151;
    font-size: 15px;
}

.highlight-item::before {
    content: '✓';
    color: #10b981;
    font-weight: bold;
    font-size: 18px;
    flex-shrink: 0;
}

.inclusion-item, .exclusion-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 10px;
    color: #374151;
    font-size: 15px;
}

.inclusion-item::before {
    content: '✓';
    color: #10b981;
    font-weight: bold;
    font-size: 18px;
    flex-shrink: 0;
}

.exclusion-item::before {
    content: '✗';
    color: #ef4444;
    font-weight: bold;
    font-size: 18px;
    flex-shrink: 0;
}

@media (max-width: 768px) {
    section > .container > div {
        grid-template-columns: 1fr !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
const tourId = {!! json_encode($tourId) !!};

async function loadTourDetails() {
    try {
        const response = await fetch(`/api/tour/${tourId}`);
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const result = await response.json();
        console.log('Tour details:', result);
        
        if (result.success && result.data) {
            const tour = result.data;
            
            // Update hero section
            document.getElementById('tour-title').textContent = tour.title || 'Tour Package';
            document.getElementById('tour-location').innerHTML = `<span>📍</span><span>${tour.destination || 'India'}</span>`;
            document.getElementById('tour-duration').innerHTML = `<span>🕐</span><span>${tour.duration || '7 Days / 6 Nights'}</span>`;
            document.getElementById('tour-rating').innerHTML = `<span>⭐</span><span>${tour.rating || '4.8'}/5 (${tour.reviews || '267'} Reviews)</span>`;
            
            // Update hero background if image exists
            if (tour.image_url) {
                document.getElementById('tour-hero').style.backgroundImage = `url('${tour.image_url}')`;
            }
            
            // Update overview
            document.getElementById('tour-overview').innerHTML = `<p>${tour.overview || tour.description || 'Experience an unforgettable journey with our carefully curated tour package.'}</p>`;
            
            // Update highlights
            if (tour.highlights) {
                const highlightsArray = tour.highlights.split('\n').filter(h => h.trim());
                document.getElementById('tour-highlights').innerHTML = highlightsArray.map(highlight => 
                    `<div class="highlight-item">${highlight.replace(/^[•\-✓]\s*/, '')}</div>`
                ).join('');
            } else {
                document.getElementById('tour-highlights').innerHTML = `
                    <div class="highlight-item">Shimla Mall Road and Ridge</div>
                    <div class="highlight-item">Manali's Rohtang Pass (subject to permit)</div>
                    <div class="highlight-item">Solang Valley adventure activities</div>
                    <div class="highlight-item">Paragliding at Bir Billing</div>
                    <div class="highlight-item">Dharamshala Dalai Lama Temple</div>
                `;
            }
            
            // Update itinerary
            if (tour.itinerary) {
                document.getElementById('tour-itinerary').innerHTML = `<p style="white-space: pre-line;">${tour.itinerary}</p>`;
            } else {
                document.getElementById('tour-itinerary').innerHTML = `<p>Detailed day-by-day itinerary will be provided upon booking. Contact us for more information.</p>`;
            }
            
            // Update inclusions
            if (tour.inclusions) {
                const inclusionsArray = tour.inclusions.split('\n').filter(i => i.trim());
                document.getElementById('tour-inclusions').innerHTML = inclusionsArray.map(inclusion => 
                    `<div class="inclusion-item">${inclusion.replace(/^[•\-✓]\s*/, '')}</div>`
                ).join('');
            } else {
                document.getElementById('tour-inclusions').innerHTML = `
                    <div class="inclusion-item">Accommodation in hotels/houseboats</div>
                    <div class="inclusion-item">Daily breakfast and dinner</div>
                    <div class="inclusion-item">All transfers and sightseeing by private vehicle</div>
                    <div class="inclusion-item">Professional tour guide</div>
                    <div class="inclusion-item">All applicable taxes</div>
                `;
            }
            
            // Update exclusions
            if (tour.exclusions) {
                const exclusionsArray = tour.exclusions.split('\n').filter(e => e.trim());
                document.getElementById('tour-exclusions').innerHTML = exclusionsArray.map(exclusion => 
                    `<div class="exclusion-item">${exclusion.replace(/^[•\-✗]\s*/, '')}</div>`
                ).join('');
            } else {
                document.getElementById('tour-exclusions').innerHTML = `
                    <div class="exclusion-item">Airfare/train tickets to starting point</div>
                    <div class="exclusion-item">Lunch and snacks</div>
                    <div class="exclusion-item">Personal expenses and tips</div>
                    <div class="exclusion-item">Travel insurance</div>
                    <div class="exclusion-item">Any activities not mentioned in inclusions</div>
                `;
            }
            
            // Update sidebar
            document.getElementById('tour-price').textContent = `₹${Number(tour.price || 0).toLocaleString()}`;
            document.getElementById('sidebar-duration').textContent = tour.duration || '7 Days / 6 Nights';
            document.getElementById('sidebar-category').textContent = tour.category ? tour.category.charAt(0).toUpperCase() + tour.category.slice(1) : 'Adventure';
            
        } else {
            showError('Tour not found');
        }
    } catch (error) {
        console.error('Error loading tour details:', error);
        showError(error.message);
    }
}

function showError(message) {
    document.querySelector('.container').innerHTML = `
        <div style="text-align: center; padding: 60px 20px;">
            <h2 style="color: #ef4444; margin-bottom: 15px;">Unable to Load Tour</h2>
            <p style="color: #6b7280; margin-bottom: 25px;">${message}</p>
            <a href="{{ route('tours') }}" style="display: inline-block; background: #2563eb; color: white; padding: 12px 30px; border-radius: 8px; text-decoration: none; font-weight: 500;">
                Back to Tours
            </a>
        </div>
    `;
}

document.addEventListener('DOMContentLoaded', loadTourDetails);
</script>
@endpush
