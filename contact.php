<?php include 'header.php'; ?>

  <div class="contact-container">

    <header class="contact-header">
        <h1 class="contact-title">We're Here To Help You Grow</h1>
        <p class="contact-subtitle">Reach out for event registration, collaboration, mentoring or support.</p>
    </header>

    <div class="contact-content-wrapper">

        <!-- Contact Information -->
        <div class="contact-info-box">

            <div class="contact-info-item">
                <div class="contact-info-icon">📩</div>
                <div class="contact-info-details">
                    <h3>Email</h3>
                    <p><a href="mailto:hello@example.com">hello@example.com</a></p>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-info-icon">📱</div>
                <div class="contact-info-details">
                    <h3>Phone & WhatsApp</h3>
                    <p><a href="tel:+1234567890">+1 (234) 567-890</a></p>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-info-icon">📍</div>
                <div class="contact-info-details">
                    <h3>Location</h3>
                    <p>123 Business Street<br>New York, NY 10001</p>
                </div>
            </div>

        </div>

        <!-- Contact Form -->
        <div class="contact-form-box">
            <form id="contactForm">

                <div class="form-field">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-field">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-field">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-field">
                    <label>Contact For</label>
                    <div class="checkbox-options">

                        <label class="checkbox-option">
                            <input type="checkbox" name="contact_for" value="Event Bookings">
                            <span>Event Bookings</span>
                        </label>

                        <label class="checkbox-option">
                            <input type="checkbox" name="contact_for" value="Partnerships">
                            <span>Partnerships</span>
                        </label>

                        <label class="checkbox-option">
                            <input type="checkbox" name="contact_for" value="Collaborations">
                            <span>Collaborations</span>
                        </label>

                        <label class="checkbox-option">
                            <input type="checkbox" name="contact_for" value="Retreats">
                            <span>Retreats</span>
                        </label>

                        <label class="checkbox-option">
                            <input type="checkbox" name="contact_for" value="Speaking Opportunities">
                            <span>Speaking Opportunities</span>
                        </label>

                        <label class="checkbox-option">
                            <input type="checkbox" name="contact_for" value="Media Enquiries">
                            <span>Media Enquiries</span>
                        </label>

                    </div>
                </div>

                <div class="form-field">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <button type="submit" class="contact-submit-btn">Send Message</button>

            </form>
        </div>

    </div>
</div>


<!-- EmailJS Library -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script>
    (function() {
        emailjs.init("J_NJn0m-hM_XMVbUC");  
    })();
</script>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const selectedOptions = Array.from(
        document.querySelectorAll("input[name='contact_for']:checked")
    ).map(item => item.value).join(", ");

    const templateParams = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        contact_for: selectedOptions,
        message: document.getElementById("message").value
    };

    emailjs.send("service_7khbqv2", "template_5asdasz", templateParams)
        .then(function(response) {
            alert("Thank you! Your message has been sent successfully.");
            document.getElementById("contactForm").reset();
        }, function(error) {
            alert("Oops! Something went wrong. Please check console.");
            console.error("EmailJS Error:", error);
        });
});
</script>


    <?php include 'footer.php'; ?>