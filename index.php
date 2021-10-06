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
  <link rel="stylesheet" type="text/css" href="boot/font/flaticon.css">
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
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="projects.php" class="nav-link">Project</a></li>
          <li class="nav-item"><a href="sponsored.php" class="nav-link">Sponsor a Child</a></li>
          <li class="nav-item"><a href="gallery.php" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>



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

  <div class="hero-wrap" style="background-image: url('images/bcccccc.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="introtextleft container">

      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">

          <div class="companylogo">
            <img src="images/pwfuremove.png" alt="">
            <p class="companyintrotext">Purewish Foundation Uganda (PFU) is an indigenous not for profit Christian Organization with a mission to empower and transform humanity to build for the future</p>

            <p class="sponsorchildtext">Sponsor a child for $50 for a Month</p>
            <p><a class="" href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank"><button class="donatebutton">Donate</button></a></p>

          </div>
          <!-- <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Purewish Foundation Uganda</h1> -->
          <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">My Wish <a href="#">My Dream</a></p> -->

        </div>
      </div>
    </div>
  </div>

  <section class="ftco-counter ftco-intro" id="section-counter">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-1 align-items-stretch">
            <div class="text">
              <span id="white-text">Served Over</span>
              <p class="textcounted"><strong class="number" id="white-text" data-number="200">0</strong></p>
              <span id="white-text">Children & Women in Uganda</span>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate middle-home">
          <div class="block-18 color-2 align-items-stretch">
            <div class="text">
              <h3 class="mb-4" id="white-text">You too can!</h3>
              <p id="white-text">You have not lived until you have done something for someone who can never repay you.</p>
              <p class="textcounted"><a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 color-3 align-items-stretch">
            <div class="text">
              <h3 class="mb-4" id="white-text">Be a Volunteer</h3>
              <p id="white-text">Alone we can do so little; together we can do so much. Teamwork begins by us and here</p>
              <p class="textcounted"><a href="#" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-3 py-4 d-block">
            <!-- <span class="flaticon-donation"></span> -->
            <div class="gridcenter icon d-flex mb-3"></span>
              <img src="images/binoculars.svg" height="70px" alt="">
            </div>
            <div class="gridcenter media-body">
              <h3 class="gridcenter heading">Our Vision</h3>
              <p class="gridcenter">To actively engage in empowering and Spiritual mentorship to children, youths and women for global change and leading sustainable development..</p>
            </div>
          </div>
        </div>


        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6  services p-3 py-4 d-block">
            <div class="gridcenter icon d-flex mb-3">
              <img src="images/target.svg" height="70px" alt="">
            </div>
            <div class="gridcenter media-body">
              <h3 class="gridcenter heading">Our Mission</h3>
              <p class="gridcenter">To empower and transform humanity to build for the future</p>

              <div class="gridcenter media-body">
                <h3 class="gridcenter heading">Our Core Values</h3>
                <ul class="centerlist">
                  <li>Stewardship</li>
                  <li>Accountability</li>
                  <li>Mentorship, Innovation and Creativity</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6  services p-3 py-4 d-block">
            <div class="gridcenter icon d-flex mb-3">
              <img src="images/handshake.svg" height="70px" alt="">
            </div>
            <div class="gridcenter media-body">
              <h3 class="gridcenter heading">Our Mandate</h3>
              <p class="gridcenter">PFU is a youth led and focused NGO registered with Government of Uganda and mandated to raise the generation of children, youth and women who are academically, spiritually and economically empowered to lead their communities to fight poverty, ignorance and mind change.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="ftco-section bg-light">
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-5 heading-section ftco-animate text-center">
          <h2 class="mb-4">Our Projects</h2>
          <p>Offering amazing projects which is bringing lots of transformation in the lives of the vulnerable children,
            youths and women around the communities of Northern Uganda.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ftco-animate">
          <div class="carousel-cause owl-carousel">
            <div class="item">
              <div class="cause-entry">
                <a href="projects.html" class="img" style="background-image: url(images/cause2.JPG);"></a>
                <div class="text p-3 p-md-4">
                  <h5><a href="projects.html">Providing education to the orphans.</a></h5>
                  <p> </p>
                  <!-- <span class="donation-time mb-3 d-block">Last donatio n 1w ago</span> -->
                  <!-- <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div> -->
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="projects.html" class="img" style="background-image: url(images/projects/cause5.JPG);"></a>
                <div class="text p-3 p-md-4">
                  <h5><a href="projects.html">Supporting Vulnarable Women</a></h5>
                  <p> </p>
                  <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span> -->
                  <!-- <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div> -->
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="projects.html" class="img" style="background-image: url(images/1.JPG);"></a>
                <div class="text p-3 p-md-4">
                  <h5><a href="projects.html">Supporting vulnerable children </a></h5>
                  <p> </p>
                  <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span> -->
                  <!-- <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div> -->
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
            </div>
            <div class="item">
              <div class="cause-entry">
                <a href="projects.html" class="img" style="background-image: url(images/cause1.JPG);"></a>
                <div class="text p-3 p-md-4">
                  <h5><a href="projects.html">Vocational Trainings skills.</a></h5>
                  <p> </p>
                  <!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span> -->
                  <!-- <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div> -->
                  <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section phone">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Testimonies</h2>
          <p>Meet a few of the Testimonies we have to tell because of your supports.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <!-- <span class="position">Keving recived brand new sewing machine after completing her traing for 6 month.</span> <br><br> -->
            <img src="images/a6.jpg" class="md-2" height="200px" width="200px" alt=""> <br>
            <div class="d-flex mb-5">
              <div>
                <h3><a href="#">Kevin</a></h3>
                <p><b>She</b> received a brand new sewing machine after completing her traing for 6 month.</p>
                <!-- <span class="position"></span> -->
                <div class="text">
                  <p>She is a teenage single mother who was living on the streets of Lira with her child. Our social worker identified and
                    recruited her into tailoring training program. She now owns a new sewing machine and making money for her livelihood.
                  </p>
                  <!-- <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <!-- <span class="position">Keving recived brand new sewing machine after completing her traing for 6 month.</span> <br><br> -->
            <img src="images/testimony1.JPG" class="md-2" height="200px" width="280px" alt=""> <br>
            <div class="d-flex mb-5">
              <div>
                <h3><a href="#">Joan</a></h3>
                <p>A widow, a mother of four kids and one of the beneficiaries of women economic empowerment, after two weeks of business start up training.</p>
                <!-- <span class="position"></span> -->
                <div class="text">
                  <p>Joan and her fellow recieved a low interest loan for business start up. Today she owns a rice business, her life and her
                    house has greatly changed from this business.
                  </p>
                  <!-- <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
          <div class="staff">
            <!-- <span class="position">Keving recived brand new sewing machine after completing her traing for 6 month.</span> <br><br> -->
            <img src="images/testimonial2.jpg" class="md-2" height="200px" width="280px" alt=""> <br>
            <div class="d-flex mb-5">
              <div>
                <h3><a href="#">Morris Owiny</a></h3>
                <p> An orphan we met who had dropped out from primary four. </p>
                <!-- <span class="position"></span> -->
                <div class="text">
                  <p> After our social worker met him, we enrolled him in the school sponsorship program and right now he is in Senior Three
                    and performing so well academically. He is a very bright boy and very happy and has a promising future.
                  </p>
                  <!-- <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="ftco-gallery">
    <div class="d-md-flex">
      <a href="images/front/1.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/front/1.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/front/2.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/front/2.JPG);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/front/3.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/front/3.JPG);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/blog2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/blog2.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
    </div>
    <div class="d-md-flex">
      <a href="images/2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/2.jpg);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/front/6.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/front/6.JPG);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/front/7.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/front/7.JPG);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
      <a href="images/front/8.JPG" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(images/front/8.JPG);">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="icon-search"></span>
        </div>
      </a>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <h2 class="mb-4">Sponsor a Child</h2>
          <p>
          <p>Here are some of the few kids that needs sponsors.</p>
          </p>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20" style="background-image: url('images/acan.jpg');">
            </a>
            <div class="text p-4 d-block">
              <h3 class="heading mt-3"><a href="#">Acen Fiona</a></h3>
              <p>Acen Fiona is a 13 year old girl very outstanding and intelligent.</p>

            </div>

          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="sponsored.html" class="block-20" style="background-image: url('images/morris.jpg');">
            </a>
            <div class="text p-4 d-block">
              <h3 class="heading mt-3"><a href="#">Morris </a></h3>
              <p>Morris is bright, happy and very determined young boy. </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="sponsored.html" class="block-20" style="background-image: url('images/akellosarah.jpg');">
            </a>
            <div class="text p-4 d-block">
              <h3 class="heading mt-3"><a href="#">Akello Sarah</a></h3>
              <p>Sarah is a 10 year old girl in Primary Three. She loves playing games.</p>
            </div>
            <!-- <input type="button" name="" value="Click for More" id=""> -->
          </div>
        </div>
      </div>
      <a class="buttonclass" href="sponsored.html"><button class="viewmorebtn"> View More Details</button></a>
    </div>
  </section>
  <div class="container">
    <div class="center-image" style="margin-top: 2em;">
      <img src="images/icons/partners.png" style="display: grid; justify-content: center; height: 100%;
        width: 100%;" width="1000px" alt="">
    </div>
  </div>


  <section class="ftco-section-3 img" style="background-image: url(images/cause6.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row d-md-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-2 align-self-stretch" style="background-image: url(images/cause6.jpg);"></div>
        </div>
        <div class="col-md-6 volunteer pl-md-5 ftco-animate">
          <h3 class="mb-3">Be a volunteer</h3>
          <form id="myform" action="processvolunteers.php" class="volunter-form" method="POST">
            <div class="messagediv"></div>
            <div class="form-group">
              <input type="text" id="volname" name="volname" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" id="volemail" name="volemail" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <textarea id="volmessage" name="volmessage" id="" cols="30" rows="3" required class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
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

    <div class="donateiconcentre">
      Donate
    </div>

  </div>





  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="processvolunteerss.js"></script>

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