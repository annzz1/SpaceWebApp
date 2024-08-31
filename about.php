<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>About the Telescope</title>
   
</head>
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
<body class="aboutbody">
<main>
    <section class="about-us-container">
        <h2>about the SPACE</h2>
        <div class="line"></div>
        <p>SPACE is a leading space exploration company dedicated to pushing the boundaries of human knowledge and capability. Founded by a team of visionary scientists, engineers, and space enthusiasts, our mission is to explore, understand, and share the wonders of the cosmos.Our vision is to be at the forefront of space exploration, continually pushing the limits of what is possible. We envision a future where humanity not only travels to other planets but also lives and thrives in space. By exploring the far reaches of the cosmos, we aim to uncover the secrets of our universe and bring the benefits of space technology to all people on Earth.SPACE, we recognize that the exploration of space is a global endeavor. Collaboration with international partners enhances our capabilities, broadens our perspective, and accelerates our mission to understand the universe. Our partnerships span across various countries and organizations, fostering a spirit of cooperation and shared ambition in the quest for knowledge.International collaboration is at the heart of our mission at SPACE. </p>
        <a id ="contactbutton" href="contact.php">Contact Us For More Information</a>
       
    </section>
    <div class="about-bar">
        <div class="newsinside-bar">
          <div class="newsinside-bar-about-img">
            <img src="images\working-together.png" alt="saturn">
          </div>
          
        </div>
        <div class="newsinside-bar">
          <div class="newsinside-bar-about-img">
            <img src="images\soccerball.png" alt="saturn">
          </div>
          
        </div>
        <div class="newsinside-bar">
          <div class="newsinside-bar-about-img">
            <img src="images\spaceship.jpg" alt="saturn">
          </div>
          
        </div>
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
                <a href="mailto:buenosaires@weareimpero.com">buenosaires@weareimpero.com</a>
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
