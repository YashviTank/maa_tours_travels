@extends('frontend.layout')

@section('title', 'Contact Us - MAA Tours and Travels')

@section('content')
<section class="contact-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with us for any inquiries</p>
    </div>
</section>

<section class="contact-section">
    <div class="container">
        <div class="contact-info-grid">
            <div class="info-card">
                <div class="info-card-icon">📧</div>
                <h4>Email</h4>
                <p><a href="mailto:maatours79@gmail.com">maatours79@gmail.com</a></p>
            </div>
            <div class="info-card">
                <div class="info-card-icon">📞</div>
                <h4>Phone</h4>
                <p>+91 9173157999<br>+91 6354071777</p>
            </div>
            <div class="info-card">
                <div class="info-card-icon">📍</div>
                <h4>Address</h4>
                <p>F-12 Krishna Complex<br>Near Jai Ganesh Toyota<br>150ft Ring Road<br>Rajkot, Gujarat 360005</p>
            </div>
        </div>
        
        <div class="contact-form-wrapper">
            <div class="contact-form">
                <h3>Send us a Message</h3>
                <p class="form-subtitle">We'd love to hear from you</p>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">Send Message</button>
                    <div id="formMessage" style="margin-top: 15px;"></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.getElementById('contactForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        phone: document.getElementById('phone').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value,
    };
    
    try {
        const response = await fetch('/api/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        });
        
        const data = await response.json();
        const messageDiv = document.getElementById('formMessage');
        
        if (data.success) {
            messageDiv.innerHTML = '<div class="alert alert-success">Message sent successfully! We will get back to you soon.</div>';
            document.getElementById('contactForm').reset();
        } else {
            messageDiv.innerHTML = '<div class="alert alert-error">Error sending message. Please try again.</div>';
        }
    } catch (error) {
        document.getElementById('formMessage').innerHTML = '<div class="alert alert-error">Error sending message. Please try again.</div>';
    }
});
</script>
@endpush
