<?php
require_once '../db.php';
$bannerCount = queryOne('SELECT COUNT(*) AS total FROM banners')['total'] ?? 0;
$galleryCount = queryOne('SELECT COUNT(*) AS total FROM gallery')['total'] ?? 0;
$packageCount = queryOne('SELECT COUNT(*) AS total FROM packages')['total'] ?? 0;
$serviceCount = queryOne('SELECT COUNT(*) AS total FROM services')['total'] ?? 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Reya's Beauty Lounge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-shell">
        <header class="dashboard-header">
            <div>
                <span class="status-pill">Welcome back</span>
                <h1>Reya's Admin Panel</h1>
                <p>Manage banners, gallery, packages, and services from one secure dashboard.</p>
            </div>
            <a href="login.php" class="btn-logout">Logout</a>
        </header>

        <section class="overview-grid">
            <article class="stat-card">
                <span class="stat-label">TOTAL BANNERS</span>
                <strong><?php echo $bannerCount; ?></strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">GALLERY ITEMS</span>
                <strong><?php echo $galleryCount; ?></strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">PACKAGES</span>
                <strong><?php echo $packageCount; ?></strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">SERVICES</span>
                <strong><?php echo $serviceCount; ?></strong>
            </article>
        </section>

        <section class="manage-grid">
            <a href="manage_banner.php" class="manage-card">
                <h2>Manage Banners</h2>
                <p>Edit homepage slides and banner text.</p>
            </a>
            <a href="manage_gallery.php" class="manage-card">
                <h2>Manage Gallery</h2>
                <p>Add, edit, or remove gallery images and videos.</p>
            </a>
            <a href="manage_packages.php" class="manage-card">
                <h2>Manage Packages</h2>
                <p>Update package details and pricing.</p>
            </a>
            <a href="manage_services.php" class="manage-card">
                <h2>Manage Services</h2>
                <p>Manage service descriptions and feature lists.</p>
            </a>
        </section>
    </div>
</body>
</html>
