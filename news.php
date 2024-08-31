<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>News</title>
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
<body class="news-body">
        <div class="main-video-news">
            <video autoplay loop>
                <source src="images/Marsvid.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
           
          </div>
          <main>
            <div class="news-bar">
              <div class="newsinside-bar">
                <div class="newsinside-bar-img">
                  <img src="images\heic2017a.jpg" alt="saturn">
                </div>
                <div class="newsinside-bar-text">
                  <h3>Strange planets: ‘Puffy Jupiter' among new worlds found beyond our solar system</h3>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="newsinside-bar">
                <div class="newsinside-bar-img">
                  <img src="images\northlighting.png" alt="saturn">
                </div>
                <div class="newsinside-bar-text">
                  <h3>How auroras on Earth, Saturn and Jupiter could help forecast risky space weather</h3>
                  <a href="#">Read More</a>
                </div>
              </div>
              <div class="newsinside-bar">
                <div class="newsinside-bar-img">
                  <img src="images\earth.png" alt="saturn">
                </div>
                <div class="newsinside-bar-text">
                  <h3>A New Deep Learning Algorithm Can Find Earth 2.0. Are we ready for huge changes?
                  </h3>
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
        </div>
            <div class="article">
                <img src="images\astronaut.png" alt="Article Image">
              <div class="article-content">
                <h2>NASA's James Webb Space Telescope Launch Delayed </h2>
              <p>The James Webb Space Telescope (JWST), NASA's ambitious successor to the Hubble Space Telescope, has faced numerous delays and challenges. Originally scheduled for launch in 2014, technical issues and budget overruns pushed the launch date to December 2021. The JWST aims to study every phase in the history of our Universe, from the first galaxies formed after the Big Bang to the formation of stars and planetary systems. It will operate primarily in the infrared range, providing unprecedented insights into the early universe and the formation of stars and planetary systems.</p>
              </div>
            </div>
        
            <div class="article">
                <img src="images\saturn.jpg" alt="Article Image">
              <div class="article-content">
                <h2>China's Saturn Rover Mission</h2>
               <p>China's Tianwen-1 mission made history in May 2021 by successfully landing its Zhurong rover on Mars, making China the second country to achieve a soft landing and rover deployment on the Red Planet. The rover is equipped with various scientific instruments to study the Martian surface, atmosphere, and search for signs of water and ancient life. Tianwen-1, which consists of an orbiter, lander, and rover, represents a significant milestone in China's rapidly advancing space program.</p>
              </div>
            </div>
            <div class="article">
                <img src="images\spaceship.jpg" alt="Article Image">
              <div class="article-content">
                <h2>SpaceX's Starship Prototypes</h2>
               <p>SpaceX, under the leadership of Elon Musk, is developing the Starship spacecraft with the goal of enabling human exploration and colonization of Mars. Starship is designed to be a fully reusable spacecraft capable of carrying large numbers of passengers and cargo to destinations beyond Earth, including Mars. Despite several explosive setbacks during prototype testing, SpaceX has made significant progress with successful high-altitude test flights and continues to refine the design and technology for future missions.</p>
              </div>
            </div>
            <div class="article">
                <img src="images\heic2007a.jpg" alt="Article Image">
              <div class="article-content">
                <h2>Black Hole Collision Detected</h2>
                <p>In June 2021, scientists using the Laser Interferometer Gravitational-Wave Observatory (LIGO) and Virgo observatories detected gravitational waves from the collision of two black holes located approximately 7 billion light-years from Earth. This event, known as a binary black hole merger, confirmed predictions made by Albert Einstein's theory of general relativity and provided new insights into the behavior and properties of black holes in distant galaxies. It marked another milestone in the emerging field of gravitational wave astronomy.</p>
              </div>
            </div>
            <div class="article">
                <img src="images\pexels-spacex-23793.jpg" alt="Article Image">
              <div class="article-content">
                <h2>ESA's Hera Mission to Asteroid Didymos</h2><br>
                <p>The European Space Agency's (ESA) Hera mission is part of the AIDA (Asteroid Impact & Deflection Assessment) collaboration with NASA's DART (Double Asteroid Redirect Test) mission. Hera aims to study the effects of DART's impact on the binary asteroid system Didymos and its moonlet Dimorphos. This mission will provide valuable insights into planetary defense strategies against potential asteroid impacts on Earth.</p>
              </div>
            </div>
            <div class="article">
                <img src="images\NCTRO.png" alt="Article Image">
              <div class="article-content">
                <h2>NSTGRO 2024</h2>
                <p>NSTGRO Homepage Claire LesslerUniversity of ChicagoPrecision Spectroscopic Calibration and Next-Generation Millimeter-Wave Spectrometers Miron LiuUniversity of MichiganDevelopment of a Magnetically Shielded Hall Thruster without Pole Erosion Ashley MaldonadoToro University of Southern CaliforniaOptimizing heterogeneous nanostructured materials for space applications Camille McDonnellUniversity.</p>
              
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