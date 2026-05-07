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
            <a href="home.php" class="navbar-logo">
                <img src="images/logo.jpeg" alt="Reya's Logo" style="position: absolute; width: 50px; left: 20px; height: 50px;">
                <span class="logo-text">REYA'S</span>
            </a>

            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>

            <ul class="nav-links" id="nav-links">
                <li><a href="home.php" class="nav-link">Home</a></li>
                <li><a href="about.php" class="nav-link">About</a></li>
                <li><a href="service.php" class="nav-link">Services</a></li>
                <li><a href="package.php" class="nav-link">Packages</a></li>
                <li><a href="booking.php" class="nav-link nav-cta">Book Now</a></li>
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