<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Purewish Foundation Uganda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <!-- <img src="images/pwfu.jpg" class="logoedit" alt=""> -->
    <div class="nav-color container">
      <a class="navbar-brand componayname" href="index.php">Purewish</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="projects.php" class="nav-link">Project</a></li>
          <li class="nav-item"><a href="sponsored.php" class="nav-link">Sponsor a Child</a></li>
          <li class="nav-item active"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="team.php" class="nav-link">Team</a></li>


          <?php if (isset($_SESSION['login_user'])) { ?>
            <li class="nav-item"><a href="index.php" class="nav-link"><?php echo $_SESSION['login_user']; ?></a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
          <?php  } else { ?>
            <li class="nav-item"><a href="login.php" class="nav-link">Register / Login</a></li>

          <?php } ?>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/childrenclass.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <!-- <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Gallery</span></p> -->
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Gallery</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-gallery">
    <div class="container">
      <div class="d-md-flex">
        <a href="images/a2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/a2.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/acan.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/acan.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>

        <a href="images/cause6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/cause6.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/bar.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/bar.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>

      </div>
      <div class="d-md-flex">
        <a href="images/about.png" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/about.png);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>

        <a href="images/a3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/a3.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/a4.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/a4.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/a5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/a5.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
      <div class="d-md-flex">
        <a href="images/projects/1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/projects/1.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/projects/ps.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/projects/ps.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>

        <a href="images/a5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/a5.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
        <a href="images/a6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/a6.jpg);">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
        </a>
      </div>
    </div>
  </section>



  <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About Us</h2>
            <p>Purewish Foundation Uganda (PFU) is an indigenous not for profit Christian Organization which was founded in 2014 and first registered as CBO with Lira district Local government in Uganda.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="https://twitter.com/Purewish2014" target="_blank"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/purewishfoundationuganda/" target="_blank"><span class="icon-facebook"></span></a></li>
              <!-- <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Site Links</h2>
            <ul class="list-unstyled">
              <li><a href="index.php" class="py-2 d-block">Home</a></li>
              <li><a href="about.php" class="py-2 d-block">About</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Plot 29, Soroti Road, Lira City, Uganda</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256 0394010416</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@pwfu.org</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | Made by <a href="https://kakebe.com/" target="_blank">KaKebe Technologies .Ltd</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>


   <div class="givingwayscript">
  <a  href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank">
    <div class="donateiconcentre">
      Donate
    </div>
  </a>

  </div>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>