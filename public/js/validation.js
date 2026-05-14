// jQuery Validation for MAA Tours Website

$(document).ready(function() {
    
    // Custom validation methods
    $.validator.addMethod("phoneNumber", function(value, element) {
        return this.optional(element) || /^[\d\s\-\+\(\)]+$/.test(value);
    }, "Please enter a valid phone number");

    $.validator.addMethod("cardNumber", function(value, element) {
        return this.optional(element) || /^[\d\s]{13,19}$/.test(value.replace(/\s/g, ''));
    }, "Please enter a valid card number");

    $.validator.addMethod("expiryDate", function(value, element) {
        return this.optional(element) || /^(0[1-9]|1[0-2])\/\d{2}$/.test(value);
    }, "Please enter date in MM/YY format");

    $.validator.addMethod("cvvNumber", function(value, element) {
        return this.optional(element) || /^\d{3,4}$/.test(value);
    }, "Please enter a valid CVV");

    $.validator.addMethod("futureDate", function(value, element) {
        if (!value) return true;
        var today = new Date();
        today.setHours(0, 0, 0, 0);
        var selectedDate = new Date(value);
        return selectedDate >= today;
    }, "Please select a future date");

    $.validator.addMethod("returnAfterDeparture", function(value, element) {
        var departureDate = $('#departure').val();
        if (!value || !departureDate) return true;
        return new Date(value) > new Date(departureDate);
    }, "Return date must be after departure date");

    // Booking Form Validation
    if ($('form').closest('.booking-container').length > 0) {
        $('form').validate({
            rules: {
                destination: {
                    required: true
                },
                package: {
                    required: true
                },
                departure: {
                    required: true,
                    futureDate: true
                },
                return: {
                    required: true,
                    futureDate: true,
                    returnAfterDeparture: true
                },
                adults: {
                    required: true,
                    min: 1,
                    max: 10,
                    digits: true
                },
                children: {
                    min: 0,
                    max: 10,
                    digits: true
                },
                accommodation: {
                    required: true
                },
                firstname: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                lastname: {
                    required: true,
                    minlength: 2,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneNumber: true,
                    minlength: 10
                },
                address: {
                    required: true,
                    minlength: 5
                },
                city: {
                    required: true,
                    minlength: 2
                },
                country: {
                    required: true
                },
                passport: {
                    minlength: 6,
                    maxlength: 20
                },
                'payment-method': {
                    required: true
                },
                'card-name': {
                    required: true,
                    minlength: 3
                },
                'card-number': {
                    required: true,
                    cardNumber: true
                },
                expiry: {
                    required: true,
                    expiryDate: true
                },
                cvv: {
                    required: true,
                    cvvNumber: true
                },
                terms: {
                    required: true
                }
            },
            messages: {
                destination: {
                    required: "Please select a destination"
                },
                package: {
                    required: "Please select a tour package"
                },
                departure: {
                    required: "Please select a departure date"
                },
                return: {
                    required: "Please select a return date"
                },
                adults: {
                    required: "Please enter number of adults",
                    min: "At least 1 adult is required",
                    max: "Maximum 10 adults allowed"
                },
                children: {
                    max: "Maximum 10 children allowed"
                },
                accommodation: {
                    required: "Please select accommodation preference"
                },
                firstname: {
                    required: "Please enter your first name",
                    minlength: "First name must be at least 2 characters",
                    maxlength: "First name cannot exceed 50 characters"
                },
                lastname: {
                    required: "Please enter your last name",
                    minlength: "Last name must be at least 2 characters",
                    maxlength: "Last name cannot exceed 50 characters"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                phone: {
                    required: "Please enter your phone number",
                    minlength: "Phone number must be at least 10 digits"
                },
                address: {
                    required: "Please enter your address",
                    minlength: "Address must be at least 5 characters"
                },
                city: {
                    required: "Please enter your city",
                    minlength: "City name must be at least 2 characters"
                },
                country: {
                    required: "Please select your country"
                },
                'payment-method': {
                    required: "Please select a payment method"
                },
                'card-name': {
                    required: "Please enter cardholder name",
                    minlength: "Name must be at least 3 characters"
                },
                'card-number': {
                    required: "Please enter card number"
                },
                expiry: {
                    required: "Please enter expiry date"
                },
                cvv: {
                    required: "Please enter CVV"
                },
                terms: {
                    required: "You must agree to the terms and conditions"
                }
            },
            errorElement: 'span',
            errorClass: 'error-message',
            errorPlacement: function(error, element) {
                if (element.attr("type") == "checkbox") {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function(element) {
                $(element).addClass('error-input');
            },
            unhighlight: function(element) {
                $(element).removeClass('error-input');
            },
            submitHandler: function(form) {
                // Show success message
                alert('Booking submitted successfully! We will contact you shortly.');
                // You can add AJAX submission here
                // form.submit();
            }
        });
    }

    // Contact Form Validation
    if ($('form').closest('.contact-form').length > 0) {
        $('form').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3,
                    maxlength: 100
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    phoneNumber: true,
                    minlength: 10
                },
                subject: {
                    required: true
                },
                message: {
                    required: true,
                    minlength: 10,
                    maxlength: 1000
                }
            },
            messages: {
                name: {
                    required: "Please enter your full name",
                    minlength: "Name must be at least 3 characters",
                    maxlength: "Name cannot exceed 100 characters"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                phone: {
                    minlength: "Phone number must be at least 10 digits"
                },
                subject: {
                    required: "Please select a subject"
                },
                message: {
                    required: "Please enter your message",
                    minlength: "Message must be at least 10 characters",
                    maxlength: "Message cannot exceed 1000 characters"
                }
            },
            errorElement: 'span',
            errorClass: 'error-message',
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            highlight: function(element) {
                $(element).addClass('error-input');
            },
            unhighlight: function(element) {
                $(element).removeClass('error-input');
            },
            submitHandler: function(form) {
                // Show success message
                alert('Message sent successfully! We will get back to you soon.');
                // You can add AJAX submission here
                // form.submit();
            }
        });
    }

    // Card number formatting
    $('#card-number').on('input', function() {
        var value = $(this).val().replace(/\s/g, '');
        var formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
        $(this).val(formattedValue);
    });

    // Expiry date formatting
    $('#expiry').on('input', function() {
        var value = $(this).val().replace(/\D/g, '');
        if (value.length >= 2) {
            value = value.substring(0, 2) + '/' + value.substring(2, 4);
        }
        $(this).val(value);
    });

    // CVV - only numbers
    $('#cvv').on('input', function() {
        $(this).val($(this).val().replace(/\D/g, ''));
    });

    // Phone number formatting
    $('input[type="tel"]').on('input', function() {
        $(this).val($(this).val().replace(/[^\d\s\-\+\(\)]/g, ''));
    });

});
