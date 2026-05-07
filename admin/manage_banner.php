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
                    <h2>Keep your homepage slider fresh with modern text and visuals.</h2>
                </div>
                <form class="banner-form">
                    <label>
                        Slide Title
                        <input type="text" placeholder="Enter slide title">
                    </label>
                    <label>
                        Subtitle Text
                        <textarea rows="3" placeholder="Enter subtitle text"></textarea>
                    </label>
                    <div class="field-row">
                        <label>
                            Button Text
                            <input type="text" placeholder="Button text">
                        </label>
                        <label>
                            Button URL
                            <input type="text" placeholder="Button URL">
                        </label>
                    </div>
                    <label>
                        Image URL
                        <input type="text" placeholder="Image URL">
                    </label>
                    <label class="file-upload">
                        Upload Image
                        <input type="file">
                    </label>
                    <button type="submit" class="btn-primary">Add Slide</button>
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
                            <tr>
                                <td>2</td>
                                <td>Luxury Makeover Services</td>
                                <td><img src="../images/banner2.jpg" alt="Banner"></td>
                                <td>
                                    <a class="btn-action btn-edit" href="#">Edit</a>
                                    <a class="btn-action btn-delete" href="#">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Relax & Rejuvenate</td>
                                <td><img src="../images/banner3.jpg" alt="Banner"></td>
                                <td>
                                    <a class="btn-action btn-edit" href="#">Edit</a>
                                    <a class="btn-action btn-delete" href="#">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Makeup kit</td>
                                <td><img src="../images/banner1.jpg" alt="Banner"></td>
                                <td>
                                    <a class="btn-action btn-edit" href="#">Edit</a>
                                    <a class="btn-action btn-delete" href="#">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
