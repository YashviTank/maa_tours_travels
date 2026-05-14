@extends('frontend.layout')

@section('title', 'Book Your Tour - MAA Tours and Travels')

@section('content')
<section class="booking-hero">
    <div class="container">
        <h1>Book Your Tour</h1>
        <p>Fill in the details below to book your dream vacation</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="booking-container">
            <form id="bookingForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="tour_id">Select Tour</label>
                        <select id="tour_id" name="tour_id">
                            <option value="">Loading tours...</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="phone">Phone *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="travel_date">Travel Date *</label>
                        <input type="date" id="travel_date" name="travel_date" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="adults">Adults *</label>
                        <input type="number" id="adults" name="adults" value="1" min="1" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="children">Children</label>
                        <input type="number" id="children" name="children" value="0" min="0">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="message">Special Requests</label>
                    <textarea id="message" name="message" rows="4"></textarea>
                </div>
                
                <div class="form-group">
                    <label>Total Amount: <span id="totalAmount">₹0</span></label>
                </div>
                
                <button type="submit" class="btn btn-primary btn-large">Submit Booking</button>
                <div id="bookingMessage" style="margin-top: 15px;"></div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
let tours = [];

async function loadTours() {
    try {
        const response = await fetch('/api/tours');
        const data = await response.json();
        
        if (data.success) {
            tours = data.data;
            const select = document.getElementById('tour_id');
            select.innerHTML = '<option value="">Select a tour</option>' + 
                tours.map(tour => `<option value="${tour.id}" data-price="${tour.price}">${tour.title} - ₹${Number(tour.price).toLocaleString()}</option>`).join('');
        }
    } catch (error) {
        console.error('Error loading tours:', error);
    }
}

document.getElementById('tour_id').addEventListener('change', calculateTotal);
document.getElementById('adults').addEventListener('input', calculateTotal);
document.getElementById('children').addEventListener('input', calculateTotal);

function calculateTotal() {
    const select = document.getElementById('tour_id');
    const selectedOption = select.options[select.selectedIndex];
    const price = parseFloat(selectedOption.dataset.price || 0);
    const adults = parseInt(document.getElementById('adults').value || 0);
    const children = parseInt(document.getElementById('children').value || 0);
    
    const total = price * (adults + children * 0.7);
    document.getElementById('totalAmount').textContent = '₹' + total.toLocaleString();
}

document.getElementById('bookingForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const formData = {
        tour_id: document.getElementById('tour_id').value || null,
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        travel_date: document.getElementById('travel_date').value,
        adults: parseInt(document.getElementById('adults').value),
        children: parseInt(document.getElementById('children').value),
        message: document.getElementById('message').value,
        total_amount: parseFloat(document.getElementById('totalAmount').textContent.replace('₹', '').replace(',', ''))
    };
    
    try {
        const response = await fetch('/api/booking', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        });
        
        const data = await response.json();
        const messageDiv = document.getElementById('bookingMessage');
        
        if (data.success) {
            messageDiv.innerHTML = '<div class="alert alert-success">Booking submitted successfully! We will contact you soon. Booking ID: #' + data.booking_id + '</div>';
            document.getElementById('bookingForm').reset();
            document.getElementById('totalAmount').textContent = '₹0';
        } else {
            messageDiv.innerHTML = '<div class="alert alert-error">Error submitting booking. Please try again.</div>';
        }
    } catch (error) {
        document.getElementById('bookingMessage').innerHTML = '<div class="alert alert-error">Error submitting booking. Please try again.</div>';
    }
});

document.addEventListener('DOMContentLoaded', loadTours);
</script>
@endpush
