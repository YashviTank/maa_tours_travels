@extends('frontend.layout')

@section('title', 'Contact Us - MAA Tours and Travels')

@section('content')
<section class="contact-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>Get in touch with us for any inquiries</p>
    </div>
</section>

<section class="contact-section" style="padding: 60px 0;">
    <div class="container">
        <div class="contact-info-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 60px;">
            <div class="info-card" style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div class="info-card-icon" style="width: 60px; height: 60px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 24px;">�</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px;">Visit Us</h4>
                <p style="color: #6b7280; line-height: 1.6;">F-12 Krishna Complex<br>Near Jai Ganesh Toyota<br>150ft Ring Road<br>Rajkot, Gujarat 360005<br>India</p>
            </div>
            <div class="info-card" style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div class="info-card-icon" style="width: 60px; height: 60px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 24px;">📞</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px;">Call Us</h4>
                <p style="color: #6b7280; line-height: 1.6;"><a href="tel:+919173157999" style="color: #2563eb; text-decoration: none;">+91 9173157999</a><br><a href="tel:+916354071777" style="color: #2563eb; text-decoration: none;">+91 6354071777</a></p>
            </div>
            <div class="info-card" style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div class="info-card-icon" style="width: 60px; height: 60px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 24px;">�</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px;">Email Us</h4>
                <p style="color: #6b7280; line-height: 1.6;"><a href="mailto:maatours79@gmail.com" style="color: #2563eb; text-decoration: none;">maatours79@gmail.com</a></p>
            </div>
            <div class="info-card" style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div class="info-card-icon" style="width: 60px; height: 60px; background: #2563eb; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: white; font-size: 24px;">🕐</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px;">Business Hours</h4>
                <p style="color: #6b7280; line-height: 1.6;">Monday - Friday: 9:00 AM - 6:00 PM<br><br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
            </div>
        </div>
        
        <div class="contact-form-wrapper" style="margin-top: 60px; background: #f9fafb; padding: 60px 0;">
            <div class="contact-form" style="max-width: 600px; margin: 0 auto; background: white; padding: 40px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                <h3 style="text-align: center; margin-bottom: 10px; color: #1f2937; font-size: 28px;">Send us a Message</h3>
                <p class="form-subtitle" style="text-align: center; color: #6b7280; margin-bottom: 30px;">We'd love to hear from you</p>
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

<section style="padding: 60px 0; background: white;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 50px; color: #1f2937; font-size: 32px;">Frequently Asked Questions</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <div style="background: #f9fafb; padding: 30px; border-radius: 10px;">
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">How do I book a tour?</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">You can book online through our website, call us directly, or visit our office. We'll guide you through the entire process.</p>
            </div>
            <div style="background: #f9fafb; padding: 30px; border-radius: 10px;">
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">What payment methods do you accept?</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">We accept all major credit cards, debit cards, bank transfers, and PayPal for your convenience.</p>
            </div>
            <div style="background: #f9fafb; padding: 30px; border-radius: 10px;">
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">Can I customize my tour?</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">Absolutely! We specialize in creating personalized itineraries tailored to your preferences and budget.</p>
            </div>
            <div style="background: #f9fafb; padding: 30px; border-radius: 10px;">
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">What is your cancellation policy?</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">Cancellations made 30+ days before departure receive a full refund. See our terms for complete details.</p>
            </div>
            <div style="background: #f9fafb; padding: 30px; border-radius: 10px;">
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">Do you provide travel insurance?</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">Yes, we offer comprehensive travel insurance options to protect your trip investment.</p>
            </div>
            <div style="background: #f9fafb; padding: 30px; border-radius: 10px;">
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">Are group discounts available?</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">Yes! We offer special rates for groups of 6 or more travelers. Contact us for details.</p>
            </div>
        </div>
    </div>
</section>

<section style="padding: 60px 0; background: #f9fafb;">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 50px; color: #1f2937; font-size: 32px;">Our Office</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
            <div style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div style="width: 60px; height: 60px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #2563eb; font-size: 28px;">🏢</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">Rajkot (Head Office)</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">F-12 Krishna Complex<br>Near Jai Ganesh Toyota<br>150ft Ring Road<br>Rajkot, Gujarat 360005<br><br>+91 9173157999<br>+91 6354071777</p>
            </div>
            <div style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div style="width: 60px; height: 60px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #2563eb; font-size: 28px;">📧</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">Email Support</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">General Inquiries:<br><a href="mailto:maatours79@gmail.com" style="color: #2563eb; text-decoration: none;">maatours79@gmail.com</a><br><br>Available 24/7 for your<br>travel needs</p>
            </div>
            <div style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div style="width: 60px; height: 60px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #2563eb; font-size: 28px;">🌐</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">Online</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">Visit our website:<br><a href="https://maatours.co.in" style="color: #2563eb; text-decoration: none;">maatours.co.in</a><br><br>Book tours and packages<br>online anytime</p>
            </div>
            <div style="background: white; padding: 40px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                <div style="width: 60px; height: 60px; background: #dbeafe; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #2563eb; font-size: 28px;">💬</div>
                <h4 style="margin-bottom: 15px; color: #1f2937; font-size: 18px; font-weight: 600;">Social Media</h4>
                <p style="color: #6b7280; line-height: 1.6; font-size: 14px;">Connect with us on social<br>media for updates and<br>special offers<br><br>Follow us for travel<br>inspiration</p>
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
