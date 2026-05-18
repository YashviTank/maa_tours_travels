@extends('frontend.layout')

@section('title', 'Customer Reviews - MAA Tours and Travels')

@section('content')
<section class="reviews-hero" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%); padding: 80px 0; color: white; text-align: center;">
    <div class="container">
        <h1 style="font-size: 48px; margin-bottom: 20px; font-weight: 700;">Customer Reviews</h1>
        <p style="font-size: 18px; opacity: 0.9; max-width: 600px; margin: 0 auto;">Read what our happy travelers have to say about their experiences with MAA Tours</p>
    </div>
</section>

<section style="padding: 60px 0; background: #f9fafb;">
    <div class="container">
        <!-- Stats Section -->
        <div style="background: white; border-radius: 16px; padding: 40px; margin-bottom: 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
                <div>
                    <div style="font-size: 48px; font-weight: 700; color: #2563eb; margin-bottom: 10px;" id="total-reviews">0</div>
                    <div style="color: #6b7280; font-size: 16px;">Total Reviews</div>
                </div>
                <div>
                    <div style="font-size: 48px; font-weight: 700; color: #10b981; margin-bottom: 10px;" id="avg-rating">0.0</div>
                    <div style="color: #6b7280; font-size: 16px;">Average Rating</div>
                </div>
                <div>
                    <div style="font-size: 48px; font-weight: 700; color: #f59e0b; margin-bottom: 10px;">98%</div>
                    <div style="color: #6b7280; font-size: 16px;">Satisfaction Rate</div>
                </div>
            </div>
        </div>

        <!-- Reviews Grid -->
        <div id="reviews-container" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 30px;">
            <p style="text-align: center; padding: 40px; grid-column: 1 / -1;">Loading reviews...</p>
        </div>

        <!-- Write Review Button -->
        <div style="text-align: center; margin-top: 50px;">
            <button onclick="openReviewForm()" style="background: #2563eb; color: white; padding: 16px 40px; border-radius: 8px; border: none; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                Write a Review
            </button>
        </div>
    </div>
</section>

<!-- Review Form Modal -->
<div id="review-modal" style="display: none; position: fixed; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center;">
    <div style="background: white; border-radius: 16px; padding: 40px; max-width: 600px; width: 90%; max-height: 90vh; overflow-y: auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h2 style="font-size: 28px; font-weight: 700; color: #1f2937; margin: 0;">Write a Review</h2>
            <button onclick="closeReviewForm()" style="background: none; border: none; font-size: 28px; cursor: pointer; color: #6b7280;">&times;</button>
        </div>

        <form id="review-form" onsubmit="submitReview(event)">
            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: 500;">Your Name *</label>
                <input type="text" name="name" required style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 15px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: 500;">Email (optional)</label>
                <input type="email" name="email" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 15px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: 500;">Location (optional)</label>
                <input type="text" name="location" placeholder="e.g., Mumbai, India" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 15px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: 500;">Rating *</label>
                <div id="star-rating" style="display: flex; gap: 10px; font-size: 32px;">
                    <span class="star" data-rating="1" onclick="setRating(1)" style="cursor: pointer; color: #d1d5db;">★</span>
                    <span class="star" data-rating="2" onclick="setRating(2)" style="cursor: pointer; color: #d1d5db;">★</span>
                    <span class="star" data-rating="3" onclick="setRating(3)" style="cursor: pointer; color: #d1d5db;">★</span>
                    <span class="star" data-rating="4" onclick="setRating(4)" style="cursor: pointer; color: #d1d5db;">★</span>
                    <span class="star" data-rating="5" onclick="setRating(5)" style="cursor: pointer; color: #d1d5db;">★</span>
                </div>
                <input type="hidden" name="rating" id="rating-input" required>
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; margin-bottom: 8px; color: #374151; font-weight: 500;">Your Review *</label>
                <textarea name="review" required rows="5" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; font-size: 15px; resize: vertical;"></textarea>
            </div>

            <div style="display: flex; gap: 15px;">
                <button type="submit" style="flex: 1; background: #2563eb; color: white; padding: 14px; border-radius: 8px; border: none; font-size: 16px; font-weight: 600; cursor: pointer;">
                    Submit Review
                </button>
                <button type="button" onclick="closeReviewForm()" style="flex: 1; background: #f3f4f6; color: #374151; padding: 14px; border-radius: 8px; border: none; font-size: 16px; font-weight: 600; cursor: pointer;">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
let selectedRating = 0;

async function loadReviews() {
    try {
        const response = await fetch('/api/reviews');
        const result = await response.json();

        if (result.success && result.data) {
            const reviews = result.data;
            
            // Update stats
            document.getElementById('total-reviews').textContent = reviews.length;
            
            if (reviews.length > 0) {
                const avgRating = (reviews.reduce((sum, r) => sum + r.rating, 0) / reviews.length).toFixed(1);
                document.getElementById('avg-rating').textContent = avgRating;
            }

            // Display reviews
            displayReviews(reviews);
        } else {
            document.getElementById('reviews-container').innerHTML = '<p style="text-align: center; padding: 40px; grid-column: 1 / -1; color: #6b7280;">No reviews yet. Be the first to share your experience!</p>';
        }
    } catch (error) {
        console.error('Error loading reviews:', error);
        document.getElementById('reviews-container').innerHTML = '<p style="text-align: center; padding: 40px; grid-column: 1 / -1; color: #ef4444;">Failed to load reviews. Please try again later.</p>';
    }
}

function displayReviews(reviews) {
    const container = document.getElementById('reviews-container');
    
    if (reviews.length === 0) {
        container.innerHTML = '<p style="text-align: center; padding: 40px; grid-column: 1 / -1; color: #6b7280;">No reviews yet. Be the first to share your experience!</p>';
        return;
    }

    container.innerHTML = reviews.map(review => `
        <div style="background: white; border-radius: 12px; padding: 30px; box-shadow: 0 2px 15px rgba(0,0,0,0.08); transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(37,99,235,0.15)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 15px rgba(0,0,0,0.08)';">
            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 15px;">
                <div>
                    <h3 style="font-size: 18px; font-weight: 600; color: #1f2937; margin-bottom: 5px;">${review.name}</h3>
                    ${review.location ? `<p style="color: #6b7280; font-size: 14px; margin-bottom: 10px;">📍 ${review.location}</p>` : ''}
                </div>
                <div style="color: #f59e0b; font-size: 18px;">
                    ${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}
                </div>
            </div>
            
            <p style="color: #4b5563; line-height: 1.7; font-size: 15px; margin-bottom: 15px;">${review.review}</p>
            
            ${review.tour ? `<div style="background: #f3f4f6; padding: 10px 15px; border-radius: 6px; font-size: 13px; color: #6b7280;">
                Tour: <strong style="color: #1f2937;">${review.tour.title}</strong>
            </div>` : ''}
            
            <div style="margin-top: 15px; padding-top: 15px; border-top: 1px solid #e5e7eb; color: #9ca3af; font-size: 13px;">
                ${new Date(review.created_at).toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })}
            </div>
        </div>
    `).join('');
}

function openReviewForm() {
    document.getElementById('review-modal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeReviewForm() {
    document.getElementById('review-modal').style.display = 'none';
    document.body.style.overflow = 'auto';
    document.getElementById('review-form').reset();
    selectedRating = 0;
    updateStarDisplay();
}

function setRating(rating) {
    selectedRating = rating;
    document.getElementById('rating-input').value = rating;
    updateStarDisplay();
}

function updateStarDisplay() {
    const stars = document.querySelectorAll('.star');
    stars.forEach((star, index) => {
        if (index < selectedRating) {
            star.style.color = '#f59e0b';
        } else {
            star.style.color = '#d1d5db';
        }
    });
}

async function submitReview(event) {
    event.preventDefault();
    
    const formData = new FormData(event.target);
    const data = Object.fromEntries(formData.entries());
    
    if (!data.rating) {
        alert('Please select a rating');
        return;
    }

    try {
        const response = await fetch('/api/reviews', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const result = await response.json();

        if (result.success) {
            alert('Thank you for your review! It will be published after approval.');
            closeReviewForm();
            loadReviews();
        } else {
            console.error('API Error:', result);
            alert(result.message || 'Failed to submit review. Please try again.');
        }
    } catch (error) {
        console.error('Error submitting review:', error);
        alert('Failed to submit review. Error: ' + error.message);
    }
}

// Load reviews on page load
document.addEventListener('DOMContentLoaded', loadReviews);
</script>
@endpush
