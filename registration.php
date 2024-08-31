<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registration Page</title>
</head>
<header>
      <div class="header">
        <h1 class="logo">
          <img src="images/moon-no-bg.png" alt="Logo" />
          <a href="index.php">SPACE</a>
        </h1>
        <nav class="navbar">
          <ul class="nav-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="nav-menu-item"><a href="login.php">Sign In</a></li>
            <li class="nav-menu-item">
              <a href="registration.php">Sign Up</a>
            </li>
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
        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </header>

<body class="registerbody">
    <section>
        <div class="registration-container">
            <h2>Welcome to Space!</h2>
            <?php
            session_start();
            if (isset($_SESSION['errors'])) {
                echo '<div class="errors">';
                foreach ($_SESSION['errors'] as $error) {
                    echo '<p>' . $error . '</p>';
                }
                echo '</div>';
                unset($_SESSION['errors']);
            }
            $fullName = isset($_SESSION['formData']['fullName']) ? $_SESSION['formData']['fullName'] : '';
            $UName = isset($_SESSION['formData']['UName']) ? $_SESSION['formData']['UName'] : '';
            $email = isset($_SESSION['formData']['email']) ? $_SESSION['formData']['email'] : '';
            unset($_SESSION['formData']);
            ?>
         <form action="registerAction.php" method="post" enctype="multipart/form-data">
    <input type="text" name="fullName" id="fullName" placeholder="Full Name" value="<?php echo htmlspecialchars($fullName); ?>" required>
    <input type="text" name="UName" id="UName" placeholder="User Name" value="<?php echo htmlspecialchars($UName); ?>" required>
    <input type="email" name="email" id="email" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
    <select name="role" id="role" required>
        <option value="">Select Role</option>
        <option value="admin">admin</option>
        <option value="user">user</option>
    </select>
    <input type="file" name="image" id="image">
    <input type="submit" class="btn" value="Sign Up" name="signUp">
</form>
        </div>
    </section>
    <script src="./js/index.js"></script>
</body>
</html>
