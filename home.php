<?php
include('header.php');
include('db.php');
$banners = queryAll('SELECT * FROM banners ORDER BY id DESC');
if (empty($banners)) {
    $banners = [
        [
            'id' => 0,
            'title' => 'Reveal Your Natural Radiance',
            'subtitle' => 'Premium beauty treatments and wellness services tailored for your unique glow. Experience luxury at Reya\'s Beauty Lounge.',
            'button_text' => 'Book Appointment',
            'button_url' => 'https://wa.me/919842048388?text=Hello%20Reya,%20I%20would%20like%20to%20book%20a%20service',
            'image_url' => 'images/hero_premium.png'
        ]
    ];
}
?>

<!-- HERO -->
<section class="hero">
    <div class="slides">
        <?php foreach ($banners as $banner): ?>
            <div class="slide" style="background-image: url('<?php echo htmlspecialchars($banner['image_url']); ?>');">
                <div class="slide-inner">
                    <span class="hero-badge">Premium Experience</span>
                    <h1><?php echo htmlspecialchars($banner['title']); ?></h1>
                    <p><?php echo htmlspecialchars($banner['subtitle']); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo htmlspecialchars($banner['button_url']); ?>" class="btn btn-primary" target="_blank"><?php echo htmlspecialchars($banner['button_text']); ?></a>
                        <a href="service.php" class="btn btn-outline">Explore Services</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php if (count($banners) > 1): ?>
        <div class="slider-arrows">
            <button class="slider-arrow prev" type="button"><i class="fas fa-chevron-left"></i></button>
            <button class="slider-arrow next" type="button"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="slider-controls">
            <?php foreach ($banners as $index => $banner): ?>
                <button class="slider-control<?php echo $index === 0 ? ' active' : ''; ?>" data-slide="<?php echo $index; ?>"></button>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<!-- WHY CHOOSE US -->
<section class="features">
    <div class="container">
        <div class="section-header">
            <h2>Why Choose Us</h2>
            <p>We combine expertise with premium products to deliver an unmatched beauty experience.</p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-certificate"></i></div>
                <h3>Certified Experts</h3>
                <p>Our team consists of highly trained professionals with years of industry experience.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-award"></i></div>
                <h3>Premium Products</h3>
                <p>We exclusively use high-end, skin-friendly products for all our treatments.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-heart"></i></div>
                <h3>Personalized Care</h3>
                <p>Every service is customized to meet your specific beauty goals and preferences.</p>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section style="padding: 100px 0; background: rgba(139,92,246,0.12); color: var(--text-dark); text-align: center;">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Ready for a Transformation?</h2>
        <p style="font-size: 1.1rem; margin-bottom: 30px;">Step into a world of beauty and relaxation today.</p>
        <a href="https://wa.me/919842048388?text=Hello%20Reya,%20I%20would%20like%20to%20book%20a%20service" class="btn btn-primary" target="_blank">Make an Appointment</a>
    </div>
</section>

<script>
    const controls = document.querySelectorAll('.slider-control');
    const slides = document.querySelectorAll('.slide');
    const prevButton = document.querySelector('.slider-arrow.prev');
    const nextButton = document.querySelector('.slider-arrow.next');
    let currentSlide = 0;

    function setSlide(index) {
        if (!slides.length) return;
        const slidesWrapper = document.querySelector('.slides');
        currentSlide = (index + slides.length) % slides.length;
        slidesWrapper.style.transform = `translateX(-${currentSlide * 100}%)`;
        controls.forEach((button, btnIndex) => {
            button.classList.toggle('active', btnIndex === currentSlide);
        });
    }

    if (slides.length) {
        setSlide(0);
    }

    controls.forEach((button) => {
        button.addEventListener('click', () => {
            setSlide(parseInt(button.dataset.slide, 10));
        });
    });

    if (prevButton) {
        prevButton.addEventListener('click', () => {
            setSlide(currentSlide - 1);
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            setSlide(currentSlide + 1);
        });
    }

    if (slides.length > 1) {
        setInterval(() => {
            setSlide(currentSlide + 1);
        }, 7000);
    }
</script>

<?php include('footer.php'); ?>
