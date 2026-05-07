<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Reya's Beauty Lounge</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-page">
        <header class="admin-brand">
            <a href="../home.php" class="brand-link">
                <img src="../images/logo.jpeg" alt="Reya's Logo">
                <div>
                    <span class="brand-title">Reya's Beauty Lounge</span>
                </div>
            </a>
        </header>

        <main class="login-wrapper">
            <div class="login-card">
                <span class="badge">ADMIN PANEL</span>
                <h1>Sign in to your dashboard</h1>
                <p>Securely manage banners, gallery, packages and services.</p>

                <form class="auth-form" action="dashboard.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="admin" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="password-wrapper">
                            <input id="password" name="password" type="password" placeholder="Enter password" required>
                            <button type="button" class="toggle-password">Show</button>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Login</button>
                </form>
            </div>
        </main>
    </div>

    <script>
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.querySelector('#password');

        togglePassword.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            togglePassword.textContent = isPassword ? 'Hide' : 'Show';
        });
    </script>
</body>
</html>
