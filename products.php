<?php

?>

<!doctype html>
<html>
  <head>
    <title>Home | Nike Business</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.min.css">
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="container">
        <div class="row nav-container ">
          <div class="nav-logo col-lg-2">
            <img class="logo" src="/images/nike_swoosh.svg" alt="">
          </div>
          <!-- NAVIGATION -->
          <ul class="header-nav col-lg-10">
            <a href="index.php" class="nav-item"><li>orders</li></a>
            <a href="#" class="nav-item"><li>products</li></a>
            <a href="#" class="nav-item"><li>create order</li></a>
            <a href="#" class="nav-item"><li>invoices</li></a>
            <!-- Log In Form -->
            <?php if(isset($_SESSION['logged_in'])) : ?>
                <?php $user = unserialize($_SESSION['user']); ?>
                <!-- <h1>Hello, <?php echo $user->username; ?>!</h1> -->
                <a class="nav-item" href="profile.php"><li>Profile</li></a>
                <a class="nav-item" href="logout.php"><li>Log Out</li></a>
            <?php else : ?>
                <!-- <h1>You are not logged in.</h1> -->
                <a class="nav-item" href="login.php"><li>Log In</li></a>
                <a class="nav-item" href="register-user.php"><li href="register-user.php">Register</li></a>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </header>

    <!-- HERO SECTION -->
    <section>
      <div class="container">
        <!-- HERO IMAGE -->
        <div class="row">
          <div class="hero-image products-image col-lg-12">
          </div>
        </div>
        <!-- HERO BORDER -->
        <div class="row">
          <div class="hero-border col-lg-6 col-md-4"></div>
        </div>
        <!-- HERO HEADING -->
        <div class="row">
          <div class="hero-heading-container col-lg-6">
            <h2 class="hero-heading">shop by</h2>
          </div>
        </div>
      </div>
      <!-- HERO BG BAR -->
      <div class="hero-bar products-bar"></div>
    </section>

    <!-- CATEGORY SECTION -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <a href="item.php"><div class="category-container col-lg-12">
            <div class="row">
              <div class="col-lg-5 col-lg-offset-1">
                <img src="/images/shoe.jpg" alt="">
              </div>
              <div class="category-heading-ctn col-lg-5 col-lg-offset-1">
                <div class="row">
                  <div class="category-heading col-md-12">
                    <h2>lastest <br> shoes <br>
                    <img class="product-arrow" src="/images/arrow.svg" alt="">
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div></a>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-5 copyright-text">
            <p>All content from Nike.com - Used for Educational purposes</p>
          </div>
          <div class="col-md-2 footer-logo-ctn">
            <img class="footer-logo" src="/images/white_nike_swoosh.svg" alt="">
          </div>
          <div class="col-md-5 footer-social">
            <img class="footer-social-icon" src="/images/instagram.svg" alt="">
            <img class="footer-social-icon" src="/images/twitter.svg" alt="">
            <img class="footer-social-icon" src="/images/facebook.svg" alt="">
          </div>
        </div>
      </div>
    </footer>

    <script src="js/index.min.js" charset="utf-8"></script>
  </body>
</html>
