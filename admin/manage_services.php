<?php
require_once '../db.php';
$editId = isset($_GET['edit']) ? intval($_GET['edit']) : 0;
$service = $editId ? queryOne("SELECT * FROM services WHERE id = $editId") : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = escape(trim($_POST['title']));
    $description = escape(trim($_POST['description']));
    $imageUrl = escape(trim($_POST['image_url']));
    $uploaded = uploadImage($_FILES['image_file'] ?? []);
    if ($uploaded) {
        $imageUrl = escape($uploaded);
    }

    if ($editId) {
        executeQuery("UPDATE services SET title = '$title', description = '$description', image_url = '$imageUrl' WHERE id = $editId");
    } else {
        executeQuery("INSERT INTO services (title, description, image_url) VALUES ('$title', '$description', '$imageUrl')");
    }

    header('Location: manage_services.php');
    exit;
}

if (isset($_GET['delete'])) {
    $deleteId = intval($_GET['delete']);
    executeQuery("DELETE FROM services WHERE id = $deleteId");
    header('Location: manage_services.php');
    exit;
}

$services = queryAll('SELECT * FROM services ORDER BY id DESC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Services - Reya's Beauty Lounge</title>
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
                    <h2><?php echo $service ? 'Edit Service' : 'Add New Service'; ?></h2>
                </div>
                <form class="banner-form" method="POST" enctype="multipart/form-data">
                    <label>
                        Service Name
                        <input type="text" name="title" value="<?php echo htmlspecialchars($service['title'] ?? ''); ?>" placeholder="Enter service name" required>
                    </label>
                    <label>
                        Description
                        <textarea name="description" rows="3" placeholder="Enter service description"><?php echo htmlspecialchars($service['description'] ?? ''); ?></textarea>
                    </label>
                    <label>
                        Image URL
                        <input type="text" name="image_url" value="<?php echo htmlspecialchars($service['image_url'] ?? ''); ?>" placeholder="Image URL">
                    </label>
                    <label class="file-upload">
                        Upload Image
                        <input type="file" name="image_file" accept="image/*">
                    </label>
                    <button type="submit" class="btn-primary"><?php echo $service ? 'Update Service' : 'Save Service'; ?></button>
                </form>
            </div>

            <div class="banner-table-card">
                <div class="table-header">
                    <h2>Services List</h2>
                </div>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>SERVICE</th>
                                <th>IMAGE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($services as $row): ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                                    <td><img src="../<?php echo htmlspecialchars($row['image_url']); ?>" alt="Service"></td>
                                    <td>
                                        <a class="btn-action btn-edit" href="manage_services.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="btn-action btn-delete" href="manage_services.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this service?');">Delete</a>
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
