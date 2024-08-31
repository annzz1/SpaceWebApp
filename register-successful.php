<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registration Page</title>
</head>
<body>
    <header class="header">
        <h1 class="logo">
            <img src="images/moon-no-bg.png" alt="Logo">
            <a href="index.php">SPACE</a>
        </h1>
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
        <div class="auth-links">
            <?php if(isset($_SESSION['UserName'])): ?>
                <div id="user-profile">
                    <span onclick="toggleUserMenu()">Hello, <?php echo htmlspecialchars($_SESSION['UserName']); ?></span>
                    <div id="user-menu" style="display: none;">
                        <?php if($_SESSION['UserRole'] === 'admin'): ?>
                            <a href="admin.php">Admin</a>
                        <?php endif; ?>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <div id="sign-in"><a href="login.php">Sign In</a></div>
                <div id="sign-up"><a href="registration.php">Sign Up</a></div>
            <?php endif; ?>
        </div>
    </header>
    <div class="success">
        <h1>You Have Successfully Signed up!</h1>
        <p><a href="login.php">Click here to sign in</a></p>
    </div>
</body>
</html>
