<?php
include('header.php');
include('db.php');
$services = queryAll('SELECT * FROM services ORDER BY id DESC');
if (empty($services)) {
    $services = [
        [
            'id' => 1,
            'title' => 'Facial Therapy',
            'description' => 'Deep cleansing and rejuvenation treatments for all skin types.',
            'image_url' => 'images/parlour1.png'
        ],
        [
            'id' => 2,
            'title' => 'Hair Artistry',
            'description' => 'Professional hair care, styling, and treatments by expert artists.',
            'image_url' => 'images/parlour.png'
        ],
        [
            'id' => 3,
            'title' => 'Professional Makeup',
            'description' => "Look your absolute best for any occasion with our artist's touch.",
            'image_url' => 'images/beuty parlour.png',
        ]
    ];
}
?>

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
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <div class="card-img">
                        <img src="<?php echo htmlspecialchars($service['image_url']); ?>" alt="<?php echo htmlspecialchars($service['title']); ?>">
                    </div>
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                        <p style="margin-bottom: 20px; color: var(--text-muted);"><?php echo htmlspecialchars($service['description']); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="https://wa.me/919842048388?text=Hello%20Reya,%20I%20would%20like%20to%20book%20the%20<?php echo rawurlencode($service['title']); ?>" class="btn btn-outline" style="width: 100%;" target="_blank">Book This Service</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
