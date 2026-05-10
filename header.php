<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reya's Beauty Lounge | Premium Beauty & Wellness</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container navbar-container">
            <?php
                if (file_exists(__DIR__ . '/images/logo.png')) {
                    $logoPath = 'images/logo.png';
                } elseif (file_exists(__DIR__ . '/images/reya logo.png')) {
                    $logoPath = 'images/reya logo.png';
                } else {
                    $logoPath = 'images/logo.jpeg';
                }
                $logoUrl = str_replace(' ', '%20', $logoPath);
            ?>
            <a href="home.php" class="navbar-logo">
                <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="Reya's Logo">
                <span class="logo-text">
                    <strong>REYA'S</strong>
                    <small>Beauty Lounge</small>
                </span>
            </a>

            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>

            <ul class="nav-links" id="nav-links">
                <li><a href="home.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><a href="service.php" class="nav-link">Services</a></li>
                <li><a href="package.php" class="nav-link">Packages</a></li>
                <li><a href="gallery.php" class="nav-link">Gallery</a></li>
                <li><a href="https://wa.me/919842048388?text=Hello%20Reya%2C%20I%20would%20like%20to%20book%20a%20service" class="nav-link nav-cta" target="_blank">Book Now</a></li>
            </ul>
        </div>
    </nav>

    <script>
        const hamburger = document.getElementById('hamburger');
        const navLinks = document.getElementById('nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>