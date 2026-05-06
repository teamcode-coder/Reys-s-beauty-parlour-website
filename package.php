<?php include('header.php'); ?>

<!-- PAGE HERO -->
<section class="page-hero" style="height: 350px;">
    <div class="container">
        <h1 style="font-size: 3.5rem;">Beauty Packages</h1>
        <p>Premium curated bundles for the ultimate transformation</p>
    </div>
</section>

<!-- PACKAGES GRID -->
<section class="packages-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Signature Bundles</h2>
            <p>Save more and enjoy a comprehensive beauty experience with our premium packages.</p>
        </div>
        
        <div class="packages-grid">
            <!-- PACKAGE 1 -->
            <div class="package-card">
                <div class="card-content">
                    <h3>Glow Up Package</h3>
                    <span class="price-tag">₹4,999</span>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Perfect for a quick refresh and vibrant look.</p>
                    <ul>
                        <li><i class="fas fa-star"></i> Professional Makeup</li>
                        <li><i class="fas fa-star"></i> Signature Hairdo</li>
                        <li><i class="fas fa-star"></i> Saree Draping</li>
                        <li><i class="fas fa-star"></i> Instant Glow Facial</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="booking.php?package=glow" class="btn btn-primary" style="width: 100%;">Book Package</a>
                </div>
            </div>

            <!-- PACKAGE 2 (FEATURED) -->
            <div class="package-card featured">
                <div class="featured-badge">Most Popular</div>
                <div class="card-content">
                    <h3>Royal Luxury</h3>
                    <span class="price-tag">₹9,999</span>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">The ultimate pampering experience for the queen in you.</p>
                    <ul>
                        <li><i class="fas fa-star"></i> Premium HD Makeup</li>
                        <li><i class="fas fa-star"></i> Advanced Hair Styling</li>
                        <li><i class="fas fa-star"></i> Designer Saree Draping</li>
                        <li><i class="fas fa-star"></i> Gold Facial Treatment</li>
                        <li><i class="fas fa-star"></i> Fresh Flowers Accessorizing</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="booking.php?package=royal" class="btn btn-primary" style="width: 100%;">Book Package</a>
                </div>
            </div>

            <!-- PACKAGE 3 -->
            <div class="package-card">
                <div class="card-content">
                    <h3>Bridal Radiance</h3>
                    <span class="price-tag">₹14,999</span>
                    <p style="margin-bottom: 20px; color: var(--text-muted);">Specially curated for your most special day.</p>
                    <ul>
                        <li><i class="fas fa-star"></i> Ultra HD Bridal Makeup</li>
                        <li><i class="fas fa-star"></i> Luxury Bridal Hairdo</li>
                        <li><i class="fas fa-star"></i> Professional Saree Draping</li>
                        <li><i class="fas fa-star"></i> Premium Skin Polishing</li>
                        <li><i class="fas fa-star"></i> Pre-Wedding Consultation</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="booking.php?package=bridal_pkg" class="btn btn-primary" style="width: 100%;">Book Package</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PACKAGE FAQ -->
<section style="padding: 100px 0; background: var(--white);">
    <div class="container">
        <div class="section-header">
            <h2>Package Benefits</h2>
            <p>Why our clients love our bundled services.</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-percent feature-icon"></i>
                <h3>Great Value</h3>
                <p>Save up to 30% compared to booking individual services separately.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-clock feature-icon"></i>
                <h3>Time Efficient</h3>
                <p>Enjoy multiple services in a single, coordinated session for maximum convenience.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-gem feature-icon"></i>
                <h3>Full Makeover</h3>
                <p>Our packages are designed to provide a holistic and balanced transformation.</p>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
