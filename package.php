<?php
include('header.php');
include('db.php');
$packages = queryAll('SELECT * FROM packages ORDER BY id DESC');
if (empty($packages)) {
    $packages = [
        [
            'id' => 1,
            'title' => 'Glow Up Package',
            'price' => '?4,999',
            'description' => 'Perfect for a quick refresh and vibrant look.',
            'features' => 'Professional Makeup,Signature Hairdo,Saree Draping,Instant Glow Facial'
        ],
        [
            'id' => 2,
            'title' => 'Royal Luxury',
            'price' => '?9,999',
            'description' => 'The ultimate pampering experience for the queen in you.',
            'features' => 'Premium HD Makeup,Advanced Hair Styling,Designer Saree Draping,Gold Facial Treatment,Fresh Flowers Accessorizing'
        ],
        [
            'id' => 3,
            'title' => 'Bridal Radiance',
            'price' => '?14,999',
            'description' => 'Specially curated for your most special day.',
            'features' => 'Ultra HD Bridal Makeup,Luxury Bridal Hairdo,Professional Saree Draping,Premium Skin Polishing,Pre-Wedding Consultation'
        ]
    ];
}
?>

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
            <?php foreach ($packages as $package): ?>
                <div class="package-card<?php echo strpos($package['features'], 'Royal') !== false ? ' featured' : ''; ?>">
                    <?php if (strpos($package['features'], 'Royal') !== false): ?>
                        <div class="featured-badge">Most Popular</div>
                    <?php endif; ?>
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($package['title']); ?></h3>
                        <span class="price-tag"><?php echo htmlspecialchars($package['price']); ?></span>
                        <p style="margin-bottom: 20px; color: var(--text-muted);"><?php echo htmlspecialchars($package['description']); ?></p>
                        <?php if (!empty(trim($package['features']))): ?>
                            <ul>
                                <?php foreach (explode(',', $package['features']) as $feature): ?>
                                    <?php if (trim($feature)): ?>
                                        <li><i class="fas fa-star"></i> <?php echo htmlspecialchars(trim($feature)); ?></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer">
                        <a href="https://wa.me/919842048388?text=Hello%20Reya,%20I%20would%20like%20to%20book%20the%20<?php echo rawurlencode($package['title']); ?>" class="btn btn-primary" style="width: 100%;" target="_blank">Book Package</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
