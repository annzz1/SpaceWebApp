<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SPACE</title>
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
<body>
<section>
<div class="main-video-news">
    <video autoplay loop>
        <source src="images\earth.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </div>
</section>
<section class="about-us-container">
    <h2>Have a question?</h2>
    <div class="line"></div>
    <p>Contact Us via Email, Phone or visit our Office.</p>
</section>
<section>
    <div class="contact-us">
        <div class="contact-us-bars">
            <h3>Address</h3>
            <p>
                Space Telescope Science Institute<br>
                Office of Public Outreach<br>
               
                    3700 San Martin Drive<br>
                    Baltimore, MD 21218
            
            </p>
            
        </div>
        <div class="contact-us-bars">
            <h3>Phone</h3>
            <ul>
                <li><a href="tel:+995555123456">Georgia +995 (555) 12-34-56</a></li>
                <li><a href="tel:+14045556789">USA (404) 555-6789</a></li>
                <li><a href="tel:+4915112345678">Germany 0151 / 12345678</a></li>
                <li><a href="tel:+818012345678">Japan 080-1234-5678</a></li>
            </ul>
        </div>
        <div class="contact-us-bars">
            <h3>Email</h3>
            <ul>
                <li><a href="mailto:contact@spacetravelco.com">contact@spacetravelco.com</a></li>
                <li><a href="mailto:info@spacetechnologies.org">info@spacetechnologies.org</a></li>
                <li><a href="mailto:support@spaceexplorationcorp.net">support@spaceexplorationcorp.net</a></li>
            </ul>
            
        </div>
    </div>
</section>
<footer class="footer">
      <div class="footer-left">
        <h2>The SPACE. WE ARE BEYOND COMPANY.</h2>
        <h3>TBILISI</h3>
      </div>
      <div class="footer-middle">
        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <div class="footer-right">
        <div>
          <h3>LONDON</h3>
          <a href="mailto:buenosaires@weareimpero.com"
            >buenosaires@weareimpero.com</a
          >
          <a href="tel:+541167997949">+54 11 6799 7949</a>
        </div>
        <div>
          <h3>WANT TO TRAVEL IN SPACE WITH SPACE?</h3>
          <a href="#">SIGN UP FOR OUR NEWSLETTER</a>
        </div>
      </div>
    </footer>
</body>
</html>