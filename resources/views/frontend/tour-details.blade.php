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
                    <div id="tour-itinerary" style="display: grid; gap: 15px;">
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
    gap: 10px;
    padding: 8px 0;
    color: #374151;
    font-size: 15px;
    line-height: 1.6;
}

.inclusion-item::before {
    content: '✓';
    color: #10b981;
    font-weight: bold;
    font-size: 16px;
    flex-shrink: 0;
    margin-top: 2px;
}

.exclusion-item::before {
    content: '✗';
    color: #ef4444;
    font-weight: bold;
    font-size: 16px;
    flex-shrink: 0;
    margin-top: 2px;
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
            
            // Update itinerary with expandable day cards
            if (tour.itinerary) {
                const itineraryLines = tour.itinerary.split('\n').filter(line => line.trim());
                let itineraryHTML = '';
                let currentDay = null;
                let dayContent = [];
                
                itineraryLines.forEach((line, index) => {
                    const dayMatch = line.match(/^Day\s*(\d+)/i);
                    if (dayMatch) {
                        if (currentDay) {
                            itineraryHTML += createItineraryDay(currentDay, dayContent.join('<br>'));
                        }
                        currentDay = { number: dayMatch[1], title: line.replace(/^Day\s*\d+\s*[:-]?\s*/i, '').trim() };
                        dayContent = [];
                    } else if (currentDay && line.trim()) {
                        dayContent.push(line.trim());
                    }
                });
                
                if (currentDay) {
                    itineraryHTML += createItineraryDay(currentDay, dayContent.join('<br>'));
                }
                
                document.getElementById('tour-itinerary').innerHTML = itineraryHTML || '<p>Detailed day-by-day itinerary will be provided upon booking.</p>';
            } else {
                // Default itinerary example
                document.getElementById('tour-itinerary').innerHTML = `
                    ${createItineraryDay({number: '1', title: 'Arrival in Srinagar', badge: 'Arrival Day'}, 'Morning: Arrive at Srinagar Airport. Our representative will meet you and transfer you to your hotel/houseboat.\n\nAfternoon: Check-in and freshen up. Enjoy lunch at the hotel.\n\nEvening: Take a relaxing Shikara ride on the famous Dal Lake. Visit the floating vegetable market and enjoy the sunset over the lake.\n\nNight: Dinner and overnight stay at houseboat/hotel in Srinagar.\n\nMeals: Lunch, Dinner')}
                    ${createItineraryDay({number: '2', title: 'Srinagar Local Sightseeing', badge: 'Sightseeing Day'}, 'Morning: After breakfast, proceed for a full day sightseeing tour of Srinagar. Visit the famous Mughal Gardens - Nishat Bagh, Shalimar Bagh, and Chashme Shahi.\n\nAfternoon: Visit Shankaracharya Temple situated on a hilltop offering panoramic views of Srinagar city. Enjoy lunch at a local restaurant.\n\nEvening: Explore the local markets and shop for Kashmiri handicrafts, Pashmina shawls, and dry fruits.\n\nNight: Return to hotel. Dinner and overnight stay.\n\nMeals: Breakfast, Dinner')}
                    ${createItineraryDay({number: '3', title: 'Srinagar to Gulmarg', badge: 'Adventure Day'}, 'Morning: After breakfast, drive to Gulmarg (approx 2 hours). Known as the "Meadow of Flowers", Gulmarg is famous for its scenic beauty.\n\nAfternoon: Take the Gondola cable car ride (at your own cost) to Khilanmarg and Apharwat Peak. Enjoy breathtaking views of snow-capped mountains. Optional activities include horse riding and photography.\n\nEvening: Return to Srinagar. Evening at leisure.\n\nNight: Dinner and overnight stay at hotel.\n\nMeals: Breakfast, Dinner')}
                    ${createItineraryDay({number: '4', title: 'Srinagar to Pahalgam', badge: 'Scenic Day'}, 'Morning: After breakfast, check out and drive to Pahalgam (approx 3 hours), the "Valley of Shepherds". En route, visit Saffron fields and Awantipora ruins.\n\nAfternoon: Arrive in Pahalgam and check in to hotel. After lunch, explore Betaab Valley and Aru Valley, famous for their stunning landscapes.\n\nEvening: Enjoy a riverside walk along the Lidder River. Optional activities include horse riding to Baisaran Valley.\n\nNight: Dinner and overnight stay at Pahalgam hotel.\n\nMeals: Breakfast, Dinner')}
                    ${createItineraryDay({number: '5', title: 'Pahalgam to Srinagar', badge: 'Leisure Day'}, 'Morning: After breakfast, day at leisure in Pahalgam. You can opt for activities like trekking, fishing, or visit Chandanwari (at your own cost).\n\nAfternoon: Check out and drive back to Srinagar. Enjoy lunch en route.\n\nEvening: Arrive in Srinagar. Evening free for shopping or relaxation.\n\nNight: Dinner and overnight stay at hotel.\n\nMeals: Breakfast, Dinner')}
                    ${createItineraryDay({number: '6', title: 'Departure from Srinagar', badge: 'Departure Day'}, 'Morning: After breakfast, check out from hotel. Our representative will transfer you to Srinagar Airport for your onward journey.\n\nAfternoon: Depart with beautiful memories of Kashmir.\n\nMeals: Breakfast')}
                `;
            }
            
            // Update inclusions
            if (tour.inclusions) {
                const inclusionsArray = tour.inclusions.split('\n').filter(i => i.trim());
                document.getElementById('tour-inclusions').innerHTML = inclusionsArray.map(inclusion => 
                    `<div class="inclusion-item">${inclusion.replace(/^[•\-✓]\s*/, '')}</div>`
                ).join('');
            } else {
                document.getElementById('tour-inclusions').innerHTML = `
                    <div class="inclusion-item">Accommodation for 6 nights (3 nights in Srinagar, 2 nights in Pahalgam, 1 night houseboat)</div>
                    <div class="inclusion-item">Daily breakfast, lunch, and dinner</div>
                    <div class="inclusion-item">All transfers and sightseeing by private vehicle</div>
                    <div class="inclusion-item">Shikara ride on Dal Lake</div>
                    <div class="inclusion-item">All toll taxes, parking fees, and driver allowances</div>
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
                    <div class="exclusion-item">Airfare to and from Srinagar</div>
                    <div class="exclusion-item">Gulmarg Gondola tickets</div>
                    <div class="exclusion-item">Horse riding and pony rides</div>
                    <div class="exclusion-item">Travel insurance</div>
                    <div class="exclusion-item">Any adventure activities not mentioned in inclusions</div>
                    <div class="exclusion-item">Tips and gratuities</div>
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

function createItineraryDay(day, content) {
    const dayId = `day-${day.number}`;
    
    // Parse content for time-based sections and meals
    let parsedContent = content;
    let mealsInfo = '';
    
    // Extract meals information if present
    const mealsMatch = content.match(/Meals?:\s*([^\n]+)/i);
    if (mealsMatch) {
        mealsInfo = mealsMatch[1].trim();
        parsedContent = content.replace(/Meals?:\s*[^\n]+/i, '').trim();
    }
    
    // Format time-based sections (Morning, Afternoon, Evening, Night)
    parsedContent = parsedContent
        .replace(/(Morning|Afternoon|Evening|Night):/gi, '<strong style="color: #1f2937; font-weight: 600;">$1:</strong>')
        .replace(/\n/g, '<br>');
    
    return `
        <div class="itinerary-day" style="background: white; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden; margin-bottom: 15px;">
            <div class="itinerary-header" onclick="toggleDay('${dayId}')" style="background: #2563eb; color: white; padding: 20px 25px; cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: all 0.3s ease;">
                <div style="flex: 1;">
                    <span style="font-weight: 700; font-size: 18px;">Day ${day.number}: ${day.title}</span>
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <span style="background: rgba(255,255,255,0.2); padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 500;">${day.badge || 'Tour Day'}</span>
                    <span class="toggle-icon" id="${dayId}-icon" style="font-size: 20px; transition: transform 0.3s ease;">▼</span>
                </div>
            </div>
            <div class="itinerary-content" id="${dayId}" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease;">
                <div style="padding: 30px; color: #4b5563; line-height: 1.8; font-size: 15px;">
                    ${parsedContent}
                    ${mealsInfo ? `<div style="background: #fef3c7; border-left: 4px solid #f59e0b; padding: 15px 20px; margin-top: 20px; border-radius: 4px;">
                        <span style="font-size: 18px; margin-right: 8px;">🍽️</span>
                        <strong style="color: #1f2937;">Meals:</strong> ${mealsInfo}
                    </div>` : ''}
                </div>
            </div>
        </div>
    `;
}

function toggleDay(dayId) {
    const content = document.getElementById(dayId);
    const icon = document.getElementById(dayId + '-icon');
    
    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        content.style.maxHeight = '0';
        icon.style.transform = 'rotate(0deg)';
    } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.style.transform = 'rotate(180deg)';
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
