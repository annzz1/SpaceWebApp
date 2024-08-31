<?php 
session_start(); 
include("connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>SPACE</title>
    <script>
    function toggleUserMenu() {
        var userMenu = document.getElementById("user-menu");
        userMenu.style.display = userMenu.style.display === "none" ? "block" : "none";
    }
    </script>
</head>
<body>
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
    <main>
        <div class="slider">
            <section class="slide">
                <img src="images/main_image_star-forming_region_carina_nircam_final-5mb.jpeg" alt="Image 1">
                <div class="slide-text">THE DREAM IS ALIVE.</div>
            </section>
            <section class="slide">
                <img src="images/heic0506b.jpg" alt="Image 2">
                <div class="slide-text text-1">THE STARS DON'T LOOK BIGGER, BUT THEY DO LOOK BRIGHTER.</div>
            </section>
            <section class="slide">
                <img src="images/heic2007a.jpg" alt="Image 3">
                <div class="slide-text text-2">BEYOND THE LIMITS.</div>
            </section>
            <section class="slide">
                <img src="images/heic0406a.jpg" alt="Image 4">
                <div class="slide-text text-3">EXPLORE THE UNKNOWN.</div>
            </section>
        </div>

        <section class="newspage-container">
            <h2>Remember Who We Are.</h2>
            <div class="line"></div>
        </section>

        <div class="about-bar">
            <div class="newsinside-bar">
                <div class="newsinside-bar-about-img">
                    <img src="images/old1.png" alt="oldresearchers">
                </div>
            </div>
            <div class="newsinside-bar">
                <div class="newsinside-bar-about-img">
                    <img src="images/old2.jpg" alt="oldspaceship">
                </div>
            </div>
            <div class="newsinside-bar">
                <div class="newsinside-bar-about-img">
                    <img src="images/old3.jpg" alt="MenBuildingSpaceShip">
                </div>
            </div>
        </div>

        <div class="info-bar">
            <video autoplay loop>
                <source src="images/SpaceVide.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="text-overlay">Join Us. <br> Be Part of the Future.</div>
        </div>
    </main>
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
    <script src="./js/index.js"></script>
</body>
</html>
