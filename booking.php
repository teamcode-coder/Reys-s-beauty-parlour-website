<?php include('header.php'); ?>

<?php
// Pre-select service or package from URL parameters
$selected_service = isset($_GET['service']) ? $_GET['service'] : '';
$selected_package = isset($_GET['package']) ? $_GET['package'] : '';
?>

<!-- PAGE HERO -->
<section class="page-hero" style="height: 300px;">
    <div class="container">
        <h1 style="font-size: 3rem;">Book Appointment</h1>
        <p>Schedule your professional beauty session</p>
    </div>
</section>

<!-- BOOKING FORM -->
<section class="booking-section">
    <div class="container">
        <div class="booking-container">
            <div class="section-header">
                <h2>Secure Your Slot</h2>
                <p>Fill out the form below and we'll confirm your appointment within 2 hours.</p>
            </div>
            
            <form action="#" method="POST" class="booking-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="+91 98765 43210" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com">
                </div>
                
                <div class="form-group">
                    <label for="date">Preferred Date</label>
                    <input type="date" id="date" name="date" required>
                </div>
                
                <div class="form-group">
                    <label for="service">Select Service</label>
                    <select id="service" name="service">
                        <option value="">Choose a Service</option>
                        <option value="facial" <?php echo ($selected_service == 'facial') ? 'selected' : ''; ?>>Facial Treatment</option>
                        <option value="hair" <?php echo ($selected_service == 'hair') ? 'selected' : ''; ?>>Hair Styling</option>
                        <option value="makeup" <?php echo ($selected_service == 'makeup') ? 'selected' : ''; ?>>Professional Makeup</option>
                        <option value="bridal" <?php echo ($selected_service == 'bridal') ? 'selected' : ''; ?>>Bridal Session</option>
                        <option value="spa" <?php echo ($selected_service == 'spa') ? 'selected' : ''; ?>>Body Wellness/Spa</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="package">Select Package</label>
                    <select id="package" name="package">
                        <option value="">Choose a Package (Optional)</option>
                        <option value="glow" <?php echo ($selected_package == 'glow') ? 'selected' : ''; ?>>Glow Up Package</option>
                        <option value="royal" <?php echo ($selected_package == 'royal') ? 'selected' : ''; ?>>Royal Luxury Package</option>
                        <option value="bridal_pkg" <?php echo ($selected_package == 'bridal_pkg') ? 'selected' : ''; ?>>Bridal Radiance</option>
                        <option value="diamond" <?php echo ($selected_package == 'diamond') ? 'selected' : ''; ?>>Diamond Luxury</option>
                    </select>
                </div>
                
                <div class="form-group full-width">
                    <label for="message">Special Requests</label>
                    <textarea id="message" name="message" rows="4" placeholder="Any specific requirements or preferences?"></textarea>
                </div>
                
                <div class="form-group full-width" style="text-align: center; margin-top: 20px;">
                    <button type="submit" class="btn btn-primary" style="width: 200px;">Confirm Booking</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
