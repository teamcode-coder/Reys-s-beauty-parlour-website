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
                <strong>3</strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">GALLERY ITEMS</span>
                <strong>3</strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">PACKAGES</span>
                <strong>8</strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">SERVICES</span>
                <strong>3</strong>
            </article>
        </section>

        <section class="manage-grid">
            <article class="manage-card">
                <h2>Manage Banners</h2>
                <p>Edit homepage slides and banner text.</p>
            </article>
            <article class="manage-card">
                <h2>Manage Gallery</h2>
                <p>Add, edit, or remove gallery images and videos.</p>
            </article>
            <article class="manage-card">
                <h2>Manage Packages</h2>
                <p>Update package details and pricing.</p>
            </article>
            <article class="manage-card">
                <h2>Manage Services</h2>
                <p>Manage service descriptions and feature lists.</p>
            </article>
        </section>
    </div>
</body>
</html>
