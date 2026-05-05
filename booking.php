<?php include('header.php'); ?>

<!-- BOOKING PAGE -->
<section class="booking-page">
    <div class="booking-container">
        <div class="booking-info">
            <h2>Book Your Appointment</h2>
            <p>Schedule your beauty services with Reya's Beauty Lounge. Our expert team is ready to make you look and feel amazing!</p>
        </div>

        <form class="booking-form" method="POST" action="process_booking.php">
            <!-- FULL NAME -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <!-- EMAIL & PHONE -->
            <div class="form-row">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
            </div>

            <!-- SERVICE SELECTION -->
            <div class="form-group">
                <label for="service">Select Service</label>
                <select id="service" name="service" required>
                    <option value="">-- Choose a Service --</option>
                    <option value="Facial">Beauty Boost - Facial</option>
                    <option value="Threading">Beauty Boost - Threading</option>
                    <option value="Waxing">Beauty Boost - Waxing</option>
                    <option value="Pedicure">Beauty Boost - Pedicure</option>
                    <option value="Manicure">Beauty Boost - Manicure</option>
                    <option value="Hair Cut">Hair Services - Hair Cut</option>
                    <option value="Hair Smoothing">Hair Services - Hair Smoothing</option>
                    <option value="Hair Botox">Hair Services - Hair Botox</option>
                    <option value="Hair Coloring">Hair Services - Hair Coloring</option>
                    <option value="Bridal Makeup">Bridal Makeup</option>
                    <option value="Party Makeup">Party Makeup</option>
                    <option value="Full Body Massage">Relaxation - Full Body Massage</option>
                    <option value="Hair Spa">Relaxation - Hair Spa</option>
                    <option value="Other">Other - Please specify in message</option>
                </select>
            </div>

            <!-- PACKAGE SELECTION -->
            <div class="form-group">
                <label for="package">Select Package (Optional)</label>
                <select id="package" name="package">
                    <option value="">-- Choose a Package --</option>
                    <option value="Glow Up Package">Glow Up Package (₹3K - ₹5K)</option>
                    <option value="Glamour Package">Glamour Package (₹3K)</option>
                    <option value="Royal Luxury Package">Royal Luxury Package (₹5K)</option>
                    <option value="Sassy Siren Package">Sassy Siren Package (₹5K)</option>
                    <option value="Bridal Radiance">Bridal Radiance Package (₹7K)</option>
                    <option value="Gold Standard HD">Gold Standard HD Package (₹10K)</option>
                    <option value="Elegance HD">Elegance HD Package (₹15K)</option>
                    <option value="Diamond Luxury">Diamond Luxury Package (₹20K)</option>
                </select>
            </div>

            <!-- DATE & TIME -->
            <div class="form-row">
                <div class="form-group">
                    <label for="date">Preferred Date</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Preferred Time</label>
                    <input type="time" id="time" name="time" required>
                </div>
            </div>

            <!-- NUMBER OF PEOPLE -->
            <div class="form-group">
                <label for="people">Number of People</label>
                <input type="number" id="people" name="people" min="1" max="10" value="1" required>
            </div>

            <!-- SPECIAL REQUESTS -->
            <div class="form-group">
                <label for="message">Special Requests or Notes</label>
                <textarea id="message" name="message" placeholder="Any special requests or preferences? (Optional)"></textarea>
            </div>

            <!-- PRIVACY NOTICE -->
            <div class="form-group">
                <label style="display: flex; align-items: center; gap: 10px;">
                    <input type="checkbox" name="privacy" required>
                    <span>I agree to receive booking confirmations and updates via email or phone</span>
                </label>
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" class="btn-primary" style="width: 100%; padding: 14px; font-size: 16px; border: none; cursor: pointer;">
                Confirm Booking
            </button>
        </form>

        <!-- BOOKING INFO SECTION -->
        <div style="margin-top: 60px; padding: 40px; background: #f8f9fa; border-radius: 15px; text-align: center;">
            <h3 style="color: #1a1a1a; margin-bottom: 20px;">Can't Book Online?</h3>
            <p style="color: #666; margin-bottom: 20px;">Call us directly or visit our salon for personalized service</p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="tel:9842048388" class="btn-primary" style="text-decoration: none; display: inline-block;">📞 Call Us</a>
                <a href="https://wa.me/919842048388" target="_blank" class="btn-primary" style="text-decoration: none; display: inline-block; background: #25D366;">💬 WhatsApp Us</a>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
