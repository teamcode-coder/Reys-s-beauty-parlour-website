<?php
include('header.php');
include('db.php');
$galleryItems = queryAll('SELECT * FROM gallery ORDER BY id DESC');
if (empty($galleryItems)) {
    $galleryItems = [
        [
            'id' => 1,
            'title' => 'Luxury Makeover',
            'description' => 'A complete makeover using premium bridal and event styling services.',
            'image_url' => 'images/banner2.jpg'
        ],
        [
            'id' => 2,
            'title' => 'Relax & Rejuvenate',
            'description' => 'Soft-toned beauty styling paired with calm, rejuvenating care.',
            'image_url' => 'images/banner3.jpg'
        ],
        [
            'id' => 3,
            'title' => 'Bridal Elegance',
            'description' => 'Timeless bridal looks created with rich textures and subtle shimmer.',
            'image_url' => 'images/banner1.jpg'
        ]
    ];
}
?>

<!-- PAGE HERO -->
<section class="page-hero gallery-hero">
    <div class="container">
        <h1>Gallery</h1>
        <p>A curated showcase of our beauty transformations and premium experiences.</p>
    </div>
</section>

<section class="gallery-section">
    <div class="container">
        <div class="section-header">
            <h2>Our Gallery</h2>
            <p>Explore recent looks, styling stories, and the beautifully crafted results of our services.</p>
        </div>

        <div class="gallery-grid">
            <?php foreach ($galleryItems as $item): ?>
                <div class="gallery-card">
                    <div class="gallery-image">
                        <img src="<?php echo htmlspecialchars($item['image_url']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                    </div>
                    <div class="gallery-details">
                        <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                        <p><?php echo htmlspecialchars($item['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
