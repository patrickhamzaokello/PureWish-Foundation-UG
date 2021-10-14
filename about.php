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

  <style>
    .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      background-color: #f9f9fa;
      padding: 0px;
    }

    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 10px;
      /* border: none; */
      font-size: 20px;
      text-align: center;
    }

    .cards {
      max-width: 800px;
      margin: 0 auto;
      display: grid;
      grid-gap: 1rem;
      background-color: none;
      margin-bottom: 10%;
      padding: 10px;

    }

    .card {
      padding: 10px !important;
    }

    @media (min-width: 600px) {
      .cards {
        grid-template-columns: repeat(3, 2fr);
      }
    }

    @media only screen and (max-width:820px) {
      .cards {
        width: 300px;
      }
    }
  </style>

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
          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="projects.php" class="nav-link">Project</a></li>
          <li class="nav-item"><a href="sponsored.php" class="nav-link">Sponsor a Child</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
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

  <div class="hero-wrap" style="background-image: url('images/womenworkin.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="introtextleft container">

      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">

          <div class="companylogo">
            <!-- <img src="images/pwfuremove.png" alt=""> -->
            <!-- <p class="companyintrotext">Purewish Foundation Uganda (PFU) is an indigenous not for profit Christian Organization with a mission to empower and transform humanity to build for the future</p> -->

            <p class="sponsorchildtext">Sponsor a Child Mother for Vocational Training Skills for $150, for six Month Training</p>
            <p><a class="" href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank"><button class="donatebutton">Donate</button></a></p>

          </div>
          <!-- <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Purewish Foundation Uganda</h1> -->
          <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My Wish <a href="#">My Dream</a></p> -->

        </div>
      </div>
    </div>
  </div>


  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-about align-self-stretch" style="background-image: url(images/1.jpg); width: 100%;"></div>
        </div>
        <div class="col-md-6 pl-md-5 ftco-animate">
          <h2 class="mb-4">Purewish Foundation Uganda</h2>
          <p>Purewish Foundation Uganda (PFU) is an indigenous not for profit Christian Organization which was founded in 2014 and first registered as Community Based Organization with Lira district Local government in Uganda. PFU is making development work for the children, youth and women who are the most vulnerable populations and groups across Lira district.</p>
          <p>PFU core work is based on empowering communities to shape the destiny of their society and investing in Children, youths and women by ensuing that vulnerable children (orphans, street children and child-headed families) are supported through provision of quality education (school sponsorship and scholastics), youth vocational training skills (Tailoring/sewing cloth, making liquid detergent, craft bags and beads), youths and women entrepreneurship (Business startup training, business incubation and financing).</p>
        </div>
      </div>

  </section>
  <br>
  <hr class="line">

  <div class="container">
    <h3 class="heading">Our Objectives</h3>

    <ul>
      <li>To support communities to identify problems in their communities, formulate and implement activities to solve those problems and better manage their development results in a sustainable manner and spiritual development.</li>
      <li>To provide quality education to vulnerable children through educational sponsorship and vocational training skills to youths and women.</li>
      <li>To raise awareness about existing social challenges affecting women, youth, children, persons with disability and other vulnerable groups.</li>
      <li>To support Women and youth fight for poverty reduction and improve the quality of living through entrepreneurship. </li>
    </ul>
  </div>

  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <img class="mb-4 pl-md-5 ftco-animate" src="images/group.jpg" style="width: 100%; object-fit: cover;  height: 400px;" alt="">

        <div class="col-md-12 pl-md-5 ftco-animate">
          <h2 class="mb-4">Community Sensitization on Children's Rights</h2>
          <p>Our CEO with the community members of Barlonyo village where hundreds of people were killed in one night in the camps, Educating the community about child rights protection.</p>
        </div>

      </div>
    </div>
  </section>




  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-8 pl-md-5 ftco-animate">
          <h2 class="mb-4">History of Northern Uganda</h2>
          <p>For over 20 year, the insurgency of the Lord's Resistance Army (LRA), led by Joseph Kony, has produced great suffering in Northern Uganda, including some 1.7 million internally
            displaced persons (IDPs). People of northern Uganda required to leave their villages and enter government-run camps for internally displaced persons (IDPs).
            These camps were supposedly created for the safety of the people, but the camps were rife with disease and violence. At the height of the conflict, 1.7 million people lived in these camps across the region. The conditions were squalid and there was no way to make a living. Thus, a generation of Lango people were born and raised in criminal conditions.
            In a devastating massacre of civilians in the region of northern Uganda, Lord's Resistance Army (LRA) rebels, dressed like regular army soldiers and armed with assault rifles and artillery, attacked the Barlonyo camp, 26 km north of Lira town, and overpowered local militia posted there to protect it.
            The rebels burned many IDPs alive by setting fire to their thatched huts after ordering them into their homes at gunpoint. Other IDPs, who were trying to flee, were shot, bludgeoned or hacked to death by the rebels wielding clubs, machetes and AK-47s.
          </p>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="img img-about align-self-stretch" style="background-image: url(images/bar.jpg); width: 100%;"></div>
        </div>
      </div>
    </div>
  </section>

  
  <div class="center-image">
    <img src="images/icons/partners.png" style="display: grid; justify-content: center;" width="1000px" alt="">
  </div>




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
    <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank">
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

  <div class="givingwayscript">

    <div class="donateiconcentre">
      Donate
    </div>

  </div>

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