<?php include('header.php'); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="height: 350px;">
    <div class="container">
        <h1 style="font-size: 3.5rem;">Our Services</h1>
        <p>Curated beauty treatments for your every need</p>
    </div>
</section>

<!-- SERVICES GRID -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2>Luxury Treatments</h2>
            <p>Experience the perfect blend of science and art in our professional services.</p>
        </div>
        
        <div class="services-grid">
            <!-- SERVICE 1 -->
            <div class="service-card">
                <div class="card-img">
                    <img src="images/parlour1.png" alt="Facial Treatment">
                </div>
                <div class="card-content">
                    <h3>Facial Therapy</h3>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Deep cleansing and rejuvenation treatments for all skin types.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Advanced Hydration Facial</li>
                        <li><i class="fas fa-check"></i> Anti-Aging Solution</li>
                        <li><i class="fas fa-check"></i> Brightening Treatment</li>
                        <li><i class="fas fa-check"></i> Organic Herbal Facial</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="booking.php?service=facial" class="btn btn-outline" style="width: 100%;">Book This Service</a>
                </div>
            </div>

            <!-- SERVICE 2 -->
            <div class="service-card">
                <div class="card-img">
                    <img src="images/parlour.png" alt="Hair Styling">
                </div>
                <div class="card-content">
                    <h3>Hair Artistry</h3>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Professional hair care, styling, and treatments by expert artists.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Signature Haircuts</li>
                        <li><i class="fas fa-check"></i> Keratin Treatment</li>
                        <li><i class="fas fa-check"></i> Global Coloring</li>
                        <li><i class="fas fa-check"></i> Scalp Therapy</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="booking.php?service=hair" class="btn btn-outline" style="width: 100%;">Book This Service</a>
                </div>
            </div>

            <!-- SERVICE 3 -->
            <div class="service-card">
                <div class="card-img">
                    <img src="images/beuty parlour.png" alt="Makeup Services">
                </div>
                <div class="card-content">
                    <h3>Professional Makeup</h3>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Look your absolute best for any occasion with our artist's touch.</p>
                    <ul>
                        <li><i class="fas fa-check"></i> Occasion Makeup</li>
                        <li><i class="fas fa-check"></i> HD Bridal Makeup</li>
                        <li><i class="fas fa-check"></i> Editorial Looks</li>
                        <li><i class="fas fa-check"></i> Makeup Workshops</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="booking.php?service=makeup" class="btn btn-outline" style="width: 100%;">Book This Service</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
