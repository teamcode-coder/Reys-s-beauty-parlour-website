<?php
require_once '../db.php';
$editId = isset($_GET['edit']) ? intval($_GET['edit']) : 0;
$package = $editId ? queryOne("SELECT * FROM packages WHERE id = $editId") : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = escape(trim($_POST['title']));
    $price = escape(trim($_POST['price']));
    $description = escape(trim($_POST['description']));
    $features = escape(trim($_POST['features']));

    if ($editId) {
        executeQuery("UPDATE packages SET title = '$title', price = '$price', description = '$description', features = '$features' WHERE id = $editId");
    } else {
        executeQuery("INSERT INTO packages (title, price, description, features) VALUES ('$title', '$price', '$description', '$features')");
    }

    header('Location: manage_packages.php');
    exit;
}

if (isset($_GET['delete'])) {
    $deleteId = intval($_GET['delete']);
    executeQuery("DELETE FROM packages WHERE id = $deleteId");
    header('Location: manage_packages.php');
    exit;
}

$packages = queryAll('SELECT * FROM packages ORDER BY id DESC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Packages - Reya's Beauty Lounge</title>
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
                    <h2><?php echo $package ? 'Edit Package' : 'Add New Package'; ?></h2>
                </div>
                <form class="banner-form" method="POST">
                    <label>
                        Package Name
                        <input type="text" name="title" value="<?php echo htmlspecialchars($package['title'] ?? ''); ?>" placeholder="Enter package name" required>
                    </label>
                    <label>
                        Price
                        <input type="text" name="price" value="<?php echo htmlspecialchars($package['price'] ?? ''); ?>" placeholder="Enter package price" required>
                    </label>
                    <label>
                        Description
                        <textarea name="description" rows="3" placeholder="Enter package details"><?php echo htmlspecialchars($package['description'] ?? ''); ?></textarea>
                    </label>
                    <label>
                        Feature Highlights
                        <textarea name="features" rows="3" placeholder="Comma-separated features"><?php echo htmlspecialchars($package['features'] ?? ''); ?></textarea>
                    </label>
                    <button type="submit" class="btn-primary"><?php echo $package ? 'Update Package' : 'Save Package'; ?></button>
                </form>
            </div>

            <div class="banner-table-card">
                <div class="table-header">
                    <h2>Package List</h2>
                </div>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>PACKAGE</th>
                                <th>PRICE</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($packages as $row): ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                                    <td><?php echo htmlspecialchars($row['price']); ?></td>
                                    <td>
                                        <a class="btn-action btn-edit" href="manage_packages.php?edit=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="btn-action btn-delete" href="manage_packages.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this package?');">Delete</a>
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
