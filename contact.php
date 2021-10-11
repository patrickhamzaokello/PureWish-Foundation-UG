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
    
    <link rel="shortcut icon" type="image/x-icon" href="images/pwfu.jpg">
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
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>



          <?php if(isset($_SESSION['login_user'])){ ?>
            <li class="nav-item"><a href="index.php" class="nav-link"><?php echo $_SESSION['login_user']; ?></a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        <?php  } else {?>
          <li class="nav-item"><a href="login.php" class="nav-link">Register / Login</a></li>

          <?php }?>

        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
 

    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Plot 29, Soroti Road, Lira City, Uganda</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://+256394010416">+256394010416</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@pwfu.org</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website:</span> <a href="#">www.pwfu.org</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Do you have any questions?</h4>
            <form id="mycontact" action="processcontacts.php" method="POST">
            <div class="contactmessagediv"></div>
              <div class="form-group">
                <input type="text" id="contactname" name="contactname" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" id="contactemail" name="contactemail" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" id="contactsubject" name="contactsubject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea  id="contactmessage" name="contactmessage" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 pl-md-5">
               <img src="images/pwfuremove.png" alt="">
               <h2 class="mb-4">Purewish Foundation Uganda</h2>
               <p>Purewish Foundation Uganda (PFU) is an indigenous not for profit Christian Organization which was founded in 2014 and first registered as Community Based Organization with Lira district Local government in Uganda. PFU is making development work for the children, youth and women who are the most vulnerable populations and groups across Lira district.</p>
            </div>
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="processcontactss.js"></script>
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
  <script src="js/main.js"></script>
    
  </body>
</html>