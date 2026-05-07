<?php
require_once '../db.php';
$editId = isset($_GET['edit']) ? intval($_GET['edit']) : 0;
$banner = $editId ? queryOne("SELECT * FROM banners WHERE id = $editId") : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = escape(trim($_POST['title']));
    $subtitle = escape(trim($_POST['subtitle']));
    $buttonText = escape(trim($_POST['button_text']));
    $buttonUrl = escape(trim($_POST['button_url']));
    $imageUrl = escape(trim($_POST['image_url']));
    $uploaded = uploadImage($_FILES['image_file'] ?? []);
    if ($uploaded) {
        $imageUrl = escape($uploaded);
    }

    if ($editId) {
        executeQuery("UPDATE banners SET title = '$title', subtitle = '$subtitle', button_text = '$buttonText', button_url = '$buttonUrl', image_url = '$imageUrl' WHERE id = $editId");
    } else {
        executeQuery("INSERT INTO banners (title, subtitle, button_text, button_url, image_url) VALUES ('$title', '$subtitle', '$buttonText', '$buttonUrl', '$imageUrl')");
    }

    header('Location: manage_banner.php');
    exit;
}

if (isset($_GET['delete'])) {
    $deleteId = intval($_GET['delete']);
    executeQuery("DELETE FROM banners WHERE id = $deleteId");
    header('Location: manage_banner.php');
    exit;
}

$banners = queryAll('SELECT * FROM banners ORDER BY id DESC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Banners - Reya's Beauty Lounge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-shell">
        <header class="banner-header">
            <div class="banner-actions">
                <a href="dashboard.php" class="btn-secondary">Back to Dashboard</a>
                <a href="login.php" class="btn-secondary">Logout</a>
            </div>
        </header>

        <section class="banner-management">
            <div class="banner-form-card">
                <div class="card-title">
                    <h2><?php echo $banner ? 'Edit Banner Slide' : 'Keep your homepage slider fresh with modern text and visuals.'; ?></h2>
                </div>
                <form class="banner-form" method="POST" enctype="multipart/form-data">
                    <label>
                        Slide Title
                        <input type="text" name="title" value="<?php echo htmlspecialchars($banner['title'] ?? ''); ?>" placeholder="Enter slide title" required>
                    </label>
                    <label>
                        Subtitle Text
                        <textarea name="subtitle" rows="3" placeholder="Enter subtitle text"><?php echo htmlspecialchars($banner['subtitle'] ?? ''); ?></textarea>
                    </label>
                    <label>
                        Button Text
                        <input type="text" name="button_text" value="<?php echo htmlspecialchars($banner['button_text'] ?? 'Book Now'); ?>" placeholder="Button text">
                    </label>
                    <label>
                        Button URL
                        <input type="text" name="button_url" value="<?php echo htmlspecialchars($banner['button_url'] ?? 'https://wa.me/919842048388?text=Hello%20Reya'); ?>" placeholder="Button URL">
                    </label>
                    <label>
                        Image URL
                        <input type="text" name="image_url" value="<?php echo htmlspecialchars($banner['image_url'] ?? ''); ?>" placeholder="Image URL">
                    </label>
                    <label class="file-upload">
                        Upload Image
                        <input type="file" name="image_file" accept="image/*">
                    </label>
                    <button type="submit" class="btn-primary"><?php echo $banner ? 'Update Slide' : 'Add Slide'; ?></button>
                </form>
            </div>

            <div class="banner-table-card">
                <div class="table-header">
                    <h2>Banner Slides</h2>
                </div>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TITLE</th>
                                <th>IMAGE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($banners as $item): ?>
                                <tr>
                                    <td><?php echo $item['id']; ?></td>
                                    <td><?php echo htmlspecialchars($item['title']); ?></td>
                                    <td><img src="../<?php echo htmlspecialchars($item['image_url']); ?>" alt="Banner"></td>
                                    <td>
                                        <a class="btn-action btn-edit" href="manage_banner.php?edit=<?php echo $item['id']; ?>">Edit</a>
                                        <a class="btn-action btn-delete" href="manage_banner.php?delete=<?php echo $item['id']; ?>" onclick="return confirm('Delete this banner?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
