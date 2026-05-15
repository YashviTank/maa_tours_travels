@extends('frontend.layout')

@section('title', 'Our Tours - MAA Tours and Travels')

@section('content')
<section class="tours-hero">
    <div class="container">
        <h1>Our Tour Packages</h1>
        <p>Discover amazing destinations with our carefully curated tour packages</p>
    </div>
</section>

<section style="padding: 40px 0;">
    <div class="container">
        <div class="filter-bar" style="background: #f3f4f6; padding: 30px; border-radius: 10px; margin-bottom: 40px; text-align: center;">
            <button class="filter-btn active" data-category="all" style="background: #2563eb; color: white; border: 2px solid #2563eb; padding: 12px 30px; border-radius: 8px; margin: 5px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">All Tours</button>
            <button class="filter-btn" data-category="adventure" style="background: white; color: #2563eb; border: 2px solid #2563eb; padding: 12px 30px; border-radius: 8px; margin: 5px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">Adventure</button>
            <button class="filter-btn" data-category="beach" style="background: white; color: #2563eb; border: 2px solid #2563eb; padding: 12px 30px; border-radius: 8px; margin: 5px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">Beach</button>
            <button class="filter-btn" data-category="cultural" style="background: white; color: #2563eb; border: 2px solid #2563eb; padding: 12px 30px; border-radius: 8px; margin: 5px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">Cultural</button>
            <button class="filter-btn" data-category="luxury" style="background: white; color: #2563eb; border: 2px solid #2563eb; padding: 12px 30px; border-radius: 8px; margin: 5px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">Luxury</button>
            <button class="filter-btn" data-category="family" style="background: white; color: #2563eb; border: 2px solid #2563eb; padding: 12px 30px; border-radius: 8px; margin: 5px; cursor: pointer; font-weight: 500; transition: all 0.3s ease;">Family</button>
        </div>
        
        <div id="tours-container">
            <p style="text-align: center; padding: 40px;">Loading tours...</p>
        </div>
    </div>
</section>

<section style="padding: 60px 0; background: #f9fafb;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 50px; color: #1f2937; font-size: 36px; font-weight: 700;">Special Offers</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <div style="background: white; padding: 40px 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(37,99,235,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                <div style="font-size: 60px; margin-bottom: 20px;">🎁</div>
                <h3 style="font-size: 20px; margin-bottom: 15px; color: #1f2937; font-weight: 600;">Early Bird Discount</h3>
                <p style="color: #6b7280; line-height: 1.6; font-size: 15px;">Book 3 months in advance and save up to 20% on selected packages.</p>
            </div>
            
            <div style="background: white; padding: 40px 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(37,99,235,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                <div style="font-size: 60px; margin-bottom: 20px;">👨‍👩‍👧‍👦</div>
                <h3 style="font-size: 20px; margin-bottom: 15px; color: #1f2937; font-weight: 600;">Group Discounts</h3>
                <p style="color: #6b7280; line-height: 1.6; font-size: 15px;">Travel with 6+ people and get special group rates and benefits.</p>
            </div>
            
            <div style="background: white; padding: 40px 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(37,99,235,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                <div style="font-size: 60px; margin-bottom: 20px;">💑</div>
                <h3 style="font-size: 20px; margin-bottom: 15px; color: #1f2937; font-weight: 600;">Honeymoon Special</h3>
                <p style="color: #6b7280; line-height: 1.6; font-size: 15px;">Exclusive honeymoon packages with romantic extras and upgrades.</p>
            </div>
            
            <div style="background: white; padding: 40px 30px; border-radius: 12px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 8px 30px rgba(37,99,235,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
                <div style="font-size: 60px; margin-bottom: 20px;">🎂</div>
                <h3 style="font-size: 20px; margin-bottom: 15px; color: #1f2937; font-weight: 600;">Birthday Surprise</h3>
                <p style="color: #6b7280; line-height: 1.6; font-size: 15px;">Celebrate your birthday on tour with special treats and arrangements.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.filter-btn:hover {
    background: #2563eb !important;
    color: white !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
}

.filter-btn.active {
    background: #2563eb !important;
    color: white !important;
}

.tour-card-new {
    background: white;
    border-radius: 0;
    overflow: hidden;
    box-shadow: none;
    transition: all 0.3s ease;
    cursor: pointer;
    display: grid;
    grid-template-columns: 350px 1fr;
    border-bottom: 1px solid #e5e7eb;
    margin-bottom: 0;
}

.tour-card-new:last-child {
    border-bottom: none;
}

.tour-card-new:hover {
    background: #fafbfc;
}

.tour-card-new .tour-image-wrapper {
    position: relative;
    height: 100%;
    min-height: 280px;
    background-size: cover;
    background-position: center;
}

.tour-card-new .tour-duration-badge {
    position: absolute;
    bottom: 15px;
    left: 15px;
    background: rgba(0,0,0,0.75);
    color: white;
    padding: 6px 14px;
    border-radius: 4px;
    font-size: 13px;
    font-weight: 500;
}

.tour-card-new .tour-body {
    padding: 30px 35px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.tour-card-new h3 {
    margin: 0 0 8px 0;
    color: #1f2937;
    font-size: 24px;
    font-weight: 600;
}

.tour-card-new .location {
    color: #6b7280;
    margin-bottom: 12px;
    font-size: 14px;
}

.tour-card-new .description {
    color: #4b5563;
    line-height: 1.7;
    margin-bottom: 18px;
    font-size: 15px;
}

.tour-card-new .tour-amenities {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 25px;
}

.tour-card-new .amenity {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #6b7280;
    font-size: 14px;
}

.tour-card-new .tour-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: auto;
}

.tour-card-new .price-section {
    display: flex;
    flex-direction: column;
}

.tour-card-new .price-label {
    color: #6b7280;
    font-size: 13px;
    margin-bottom: 5px;
}

.tour-card-new .price-amount {
    color: #2563eb;
    font-size: 32px;
    font-weight: 700;
}

.tour-card-new .view-details-btn {
    background: #2563eb;
    color: white;
    padding: 12px 32px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-block;
    font-size: 15px;
}

.tour-card-new .view-details-btn:hover {
    background: #1d4ed8;
}

@media (max-width: 968px) {
    .tour-card-new {
        grid-template-columns: 1fr;
    }
    .tour-card-new .tour-image-wrapper {
        min-height: 250px;
    }
}
</style>
@endpush

@push('scripts')
<script>
let allTours = [];
let currentFilter = 'all';

async function loadAllTours() {
    try {
        const response = await fetch('/api/tours');
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        console.log('Tours API response:', data);
        
        if (data.success && data.data && data.data.length > 0) {
            allTours = data.data;
            displayTours(allTours);
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

function displayTours(tours) {
    const container = document.getElementById('tours-container');
    
    if (tours.length === 0) {
        container.innerHTML = '<p style="text-align: center; padding: 40px;">No tours found in this category.</p>';
        return;
    }
    
    container.innerHTML = tours.map(tour => `
        <div class="tour-card-new" onclick="window.location.href='/tour/${tour.id}'" style="display: grid !important; grid-template-columns: 350px 1fr !important; border: 1px solid #e5e7eb; background: white; cursor: pointer; transition: all 0.3s ease; margin-bottom: 20px; border-radius: 8px; overflow: hidden;">
            <div class="tour-image-wrapper" style="background-image: url('${tour.image_url || 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=800'}'); position: relative; height: 100%; min-height: 280px; background-size: cover; background-position: center;">
                <div class="tour-duration-badge" style="position: absolute; bottom: 15px; left: 15px; background: rgba(0,0,0,0.75); color: white; padding: 6px 14px; border-radius: 4px; font-size: 13px; font-weight: 500;">${tour.duration || '7 Days / 6 Nights'}</div>
            </div>
            <div class="tour-body" style="padding: 30px 35px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <h3 style="margin: 0 0 8px 0; color: #1f2937; font-size: 24px; font-weight: 600;">${tour.title}</h3>
                    <div class="location" style="color: #6b7280; margin-bottom: 12px; font-size: 14px;">📍 ${tour.destination}</div>
                    <p class="description" style="color: #4b5563; line-height: 1.7; margin-bottom: 18px; font-size: 15px;">${tour.description ? tour.description.substring(0, 180) + '...' : 'Discover the breathtaking beauty with our expertly curated tour package. Experience stunning landscapes, rich culture, and unforgettable adventures.'}</p>
                    
                    <div class="tour-amenities" style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 25px;">
                        <div class="amenity" style="display: flex; align-items: center; gap: 6px; color: #6b7280; font-size: 14px;">✈️ Flights Included</div>
                        <div class="amenity" style="display: flex; align-items: center; gap: 6px; color: #6b7280; font-size: 14px;">🏨 Houseboat & Hotels</div>
                        <div class="amenity" style="display: flex; align-items: center; gap: 6px; color: #6b7280; font-size: 14px;">🍽️ All Meals</div>
                        <div class="amenity" style="display: flex; align-items: center; gap: 6px; color: #6b7280; font-size: 14px;">🚗 Gondola Ride</div>
                    </div>
                </div>
                
                <div class="tour-bottom" style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
                    <div class="price-section" style="display: flex; flex-direction: column;">
                        <span class="price-label" style="color: #6b7280; font-size: 13px; margin-bottom: 5px;">Starting from</span>
                        <span class="price-amount" style="color: #2563eb; font-size: 32px; font-weight: 700;">₹${Number(tour.price || 0).toLocaleString()}</span>
                    </div>
                    <a href="/tour/${tour.id}" class="view-details-btn" onclick="event.stopPropagation();" style="background: #2563eb; color: white; padding: 12px 32px; border-radius: 6px; text-decoration: none; font-weight: 500; transition: all 0.3s ease; display: inline-block; font-size: 15px;">View Details</a>
                </div>
            </div>
        </div>
    `).join('');
}

function filterTours(category) {
    currentFilter = category;
    
    // Update active button
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    event.target.classList.add('active');
    
    // Filter tours
    if (category === 'all') {
        displayTours(allTours);
    } else {
        const filtered = allTours.filter(tour => 
            tour.category && tour.category.toLowerCase() === category.toLowerCase()
        );
        displayTours(filtered);
    }
}

// Add click handlers to filter buttons
document.addEventListener('DOMContentLoaded', function() {
    loadAllTours();
    
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            filterTours(this.dataset.category);
        });
    });
});
</script>
@endpush
