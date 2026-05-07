<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'reyas_beauty';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS);
if ($mysqli->connect_error) {
    die('Database connection failed: ' . $mysqli->connect_error);
}

$dbExists = $mysqli->select_db($DB_NAME);

if (!$dbExists) {
    $createDbQuery = "CREATE DATABASE IF NOT EXISTS `$DB_NAME` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
    if ($mysqli->query($createDbQuery)) {
        $mysqli->select_db($DB_NAME);
    } else {
        die('Failed to create database: ' . $mysqli->error);
    }
}

$mysqli->set_charset('utf8mb4');

$createTables = [
    "CREATE TABLE IF NOT EXISTS banners (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        subtitle TEXT,
        button_text VARCHAR(150) DEFAULT 'Book Now',
        button_url VARCHAR(255) DEFAULT 'https://wa.me/919842048388?text=Hello%20Reya',
        image_url VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

    "CREATE TABLE IF NOT EXISTS gallery (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        image_url VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

    "CREATE TABLE IF NOT EXISTS packages (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        price VARCHAR(100) NOT NULL,
        description TEXT,
        features TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

    "CREATE TABLE IF NOT EXISTS services (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        description TEXT,
        image_url VARCHAR(255) NOT NULL,
        button_text VARCHAR(150) DEFAULT 'Book This Service',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4"
];

foreach ($createTables as $query) {
    $mysqli->query($query);
}

function queryAll($sql) {
    global $mysqli;
    $result = $mysqli->query($sql);
    $rows = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    return $rows;
}

function queryOne($sql) {
    global $mysqli;
    $result = $mysqli->query($sql);
    return $result ? $result->fetch_assoc() : null;
}

function executeQuery($sql) {
    global $mysqli;
    return $mysqli->query($sql);
}

function escape($value) {
    global $mysqli;
    return $mysqli->real_escape_string($value);
}

function uploadImage($file) {
    if (empty($file['tmp_name'])) {
        return '';
    }

    $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowedTypes)) {
        return '';
    }

    $imagesDir = __DIR__ . '/images';
    if (!is_dir($imagesDir)) {
        mkdir($imagesDir, 0755, true);
    }

    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
    $filename = 'upload_' . time() . '_' . rand(1000, 9999) . '.' . $extension;
    $destination = $imagesDir . '/' . $filename;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        return 'images/' . $filename;
    }

    return '';
}

function seedDefaultContent() {
    if (!queryOne('SELECT id FROM banners LIMIT 1')) {
        executeQuery("INSERT INTO banners (title, subtitle, button_text, button_url, image_url) VALUES
            ('Makeup kit', 'Glow with confidence in every frame', 'Book Now', 'https://wa.me/919842048388?text=I%20would%20like%20to%20book%20the%20Makeup%20kit%20package', 'images/banner1.jpg'),
            ('Luxury Makeover Services', 'Luxury services for every special occasion', 'Book Now', 'https://wa.me/919842048388?text=I%20would%20like%20to%20book%20a%20Luxury%20Makeover', 'images/banner2.jpg'),
            ('Relax & Rejuvenate', 'A calming beauty experience for body and soul', 'Book Now', 'https://wa.me/919842048388?text=I%20would%20like%20to%20book%20Relax%20%26%20Rejuvenate', 'images/banner3.jpg')");
    }

    if (!queryOne('SELECT id FROM gallery LIMIT 1')) {
        executeQuery("INSERT INTO gallery (title, description, image_url) VALUES
            ('Luxury Makeover', 'A complete makeover using premium bridal and event styling services.', 'images/banner2.jpg'),
            ('Relax & Rejuvenate', 'Soft-toned beauty styling paired with calm, rejuvenating care.', 'images/banner3.jpg'),
            ('Bridal Elegance', 'Timeless bridal looks created with rich textures and subtle shimmer.', 'images/banner1.jpg')");
    }

    if (!queryOne('SELECT id FROM packages LIMIT 1')) {
        executeQuery("INSERT INTO packages (title, price, description, features) VALUES
            ('Glow Up Package', '₹4,999', 'A refreshing package for a radiant glow and easy elegance.', 'Professional Makeup,Signature Hairdo,Saree Draping,Instant Glow Facial'),
            ('Royal Luxury', '₹9,999', 'Premium pampering with high-end products and expert artistry.', 'Premium HD Makeup,Advanced Hair Styling,Designer Saree Draping,Gold Facial Treatment,Fresh Flowers Accessorizing'),
            ('Bridal Radiance', '₹14,999', 'Complete bridal experience designed for your special day.', 'Ultra HD Bridal Makeup,Luxury Bridal Hairdo,Professional Saree Draping,Premium Skin Polishing,Pre-Wedding Consultation')");
    }

    if (!queryOne('SELECT id FROM services LIMIT 1')) {
        executeQuery("INSERT INTO services (title, description, image_url) VALUES
            ('Facial Therapy', 'Deep cleansing and rejuvenation treatments for all skin types.', 'images/parlour1.png'),
            ('Hair Artistry', 'Professional hair styling, cutting, and color services by our experts.', 'images/parlour.png'),
            ('Professional Makeup', 'Create a flawless look for parties, events, and weddings.', 'images/beuty parlour.png')");
    }
}

seedDefaultContent();
