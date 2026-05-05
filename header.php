<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reya's Beauty Lounge - Professional Beauty & Salon Services</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<!-- PROFESSIONAL NAVBAR -->
<nav class="navbar">
    <div class="navbar-container">
        <!-- LOGO -->
        <div class="navbar-logo">
            <img src="images/parlour1.png" alt="Reya's Logo" class="logo-img">
            <span class="logo-text">Reya's Beauty Lounge</span>
        </div>

        <!-- HAMBURGER MENU -->
        <div class="hamburger" id="hamburger">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </div>

        <!-- NAV LINKS -->
        <ul class="nav-links" id="navLinks">
            <li><a href="home.php" class="nav-link">Home</a></li>
            <li><a href="service.php" class="nav-link">Services</a></li>
            <li><a href="package.php" class="nav-link">Packages</a></li>
            <li><a href="about.php" class="nav-link">About Us</a></li>
            <li><a href="booking.php" class="nav-link nav-cta">Book Now</a></li>
            <li><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    // Mobile menu toggle
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    });

    // Close menu when link clicked
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>