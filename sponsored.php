<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Purewish Foundation Uganda</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="shortcut icon" type="image/x-icon" href="images/pwfu.jpg" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />

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
      @media only screen and (max-width: 820px) {
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
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="projects.php" class="nav-link">Project</a></li>
          <li class="nav-item active"><a href="sponsored.php" class="nav-link">Sponsor a Child</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>



          <?php if(isset($_SESSION['login_user'])){ ?>
            <li class="nav-item"><a href="index.php" class="nav-link"><?php echo $login_session; ?></a></li>
          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
        <?php  } else {?>
          <li class="nav-item"><a href="login.php" class="nav-link">Register / Login</a></li>

          <?php }?>

        </ul>
      </div>
    </div>
  </nav>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-7 attensionbox pl-md-5 ftco-animate">
            <h2 class="mb-1">About Child Sponsorship</h2>
            
            <h5 class="mb-2">How are our children assessed and identified?</h5>
            <p>
              Our work has always been focused on the most vulnerable children
              and families living in Northern region of Uganda where many
              children and families suffered as the result of war. We only work
              with those who are the poorest of the poor and at the lowest
              levels of the community. The selection process is very strict,
              with two different social workers assessing the same family. A
              manager will then also conduct check-up visits to ensure
            </p>

            <h5 class="mb-2">What does child sponsorship include?</h5>
            <ul>
              <li>School tuition.</li>
              <li>Basic medical care</li>
              <li>School uniform</li>
              <li>Personal child and family support</li>
              <li>Meals in school</li>
            </ul>

            <h5 class="mb-2">What do you receive as a sponsor?</h5>
            <ul>
              <li>A photograph and profile of your child</li>
              <li>A Christmas card from your child</li>
              <li>Regular updates on your child’s.</li>
              <li>Updates on Purewish Foundation Uganda and our work</li>
            </ul>
          </div>

          <div class="col-md-5 pl-md-5 ftco-animate">
          <h2 class="mb-1">Sponsor Other Projects</h2>
            
            <h5 class="mb-2">Youth and Women Entrepreneurship</h5>
            <p>
            The Youth and Women Entrepreneurship Project is economic empowerment strategy based on the two pillars
of skills development and livelihood support. The project targets and unemployed youths and women of Uganda.
            </p>
            <p style="font-weight: 500; color:#000">Your Donation of $300 will give a loan with minimal interest rate to a youth or a single mother</p>
            <a href="donte"><button class="donatespon">Donate</button></a>

            <h5 class="mb-2">Vocational Skills Training</h5>
            <p>
            This project offers training to youths and women in the region with hands on skills like tailoring/cloth sewing, making shoes,
liquid detergent, craft bags and beads to self-sustainability.
            </p>

            <p style="font-weight: 500; color:#000">Donate $150 for six months training per person</p>
            <a href="donte"><button class="donatespon">Donate</button></a>


          </div>

          <!-- <div class="col-md-4 d-flex ftco-animate">
          <div class="img img-about align-self-stretch" style="background-image: url(images/bar.jpg); width: 100%;"></div>
        </div> -->
        </div>
      </div>

      <div class="container">
        <h2 class="mb-1 make-center pt-4 mt-2">Sponsor a child in school for $50 Monthly</h2>
        <p class="make-center">
          Invest in a child, give a child a future
        </p>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/acan.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Acen Fiona</h4>
                <p class="card-text">Age: 14 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/akellosarah.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Akello Sarah</h4>
                <p class="card-text">Age: 11 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/morris.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Acai Morris</h4>
                <p class="card-text">Age: 13 Gender: Male</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/beatrice.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Agwalo Beatrice</h4>
                <p class="card-text">Age: 12 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/atuuharriet.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Atuu Harriet</h4>
                <p class="card-text">Age: 15 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/cindrella.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Cindrella </h4>
                <p class="card-text">Age: 14 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/elisabeth.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Elizabeth</h4>
                <p class="card-text">Age: 13 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/fortunate.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Fortunate</h4>
                <p class="card-text">Age: 10 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/ojedekizito.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Ojede Kizito</h4>
                <p class="card-text">Age: 14 Gender: Male</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/ojok.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Ojok Norman</h4>
                <p class="card-text">Age: 15 Gender: Male</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/okelloemmanuel.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Okello Emmanuel</h4>
                <p class="card-text">Age: 13 Gender: Male</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/owinymorris.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Owiny Morris</h4>
                <p class="card-text">Age: 16 Gender: Male</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/oyugiaaron.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Oyugi Aaron</h4>
                <p class="card-text">Age: 15 Gender: Male</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/romano.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Romano</h4>
                <p class="card-text">Age: 12 Gender: Male</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/oliver.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Acipa Oliver</h4>
                <p class="card-text">Age: 13 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
  
          <div class="col imgspan">
            <div class="card shadow-sm">
              <img src="images/alumnancy.jpg" height="280px"  width="290px" alt="">
              <div class="card-body">
                <h4>Alum Nancy</h4>
                <p class="card-text">Age: 14 Gender: Female</p>
                <a href="#sponsorsection" class="btn btn-primary my-2">Send Us a Message</a>
                <a href="https://www.givingway.com/donate/purewish-foundation-uganda" target="_blank" class="btn btn-primary my-2">Donate</a>
                <div class="d-flex justify-content-between align-items-center">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row block-9" id="sponsorsection">
          <div class="col-md-6 pr-md-5"> <br>
            <h4 class="mb-4">Enter Child Details</h4>
            <p>Please, fill this form to sponsor a child.</p>
            <form action="#">
              <div class="form-group">
                <input type="text" name="childname" class="form-control" placeholder="Child`s Name">
              </div>
              <div class="form-group">
                <input type="text" name="" class="form-control" placeholder="Sponsor`s Name">
              </div>
              <div class="form-group">
                <input type="text" name="" class="form-control" placeholder="Sponsor`s Email">
              </div>
              <div class="form-group">
                <input type="text" name="" class="form-control" placeholder="Amount in $">
              </div>
              
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Sponsor" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
  
        </div>

      </div>

    </section>

    <div class="center-image">
      <img
        src="images/icons/partners.png"
        style="display: grid; justify-content: center"
        width="1000px"
        alt=""
      />
    </div>

    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>
                Purewish Foundation Uganda (PFU) is an indigenous not for profit
                Christian Organization with a mission to empower and transform
                humanity to build for the future
              </p>
              <ul
                class="
                  ftco-footer-social
                  list-unstyled
                  float-md-left float-lft
                  mt-5
                "
              >
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a
                  class="blog-img mr-4"
                  style="background-image: url(images/projects/4.JPG)"
                ></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#"
                      >Training girls who dropped out of school with basic
                      skills</a
                    >
                  </h3>
                  <div class="meta">
                    <!-- <div><a href="#"><span class="icon-calendar"></span> September 12, 2021</a></div> -->
                    <!-- <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
                  </div>
                </div>
              </div>

              <div class="block-21 mb-4 d-flex">
                <a
                  class="blog-img mr-4"
                  style="background-image: url(images/1.jpg)"
                ></a>
                <div class="text">
                  <h3 class="heading">
                    <a href="#"
                      >Joining hands with Covid Task force to help Vulnarable
                      families
                    </a>
                  </h3>
                  <div class="meta">
                    <!-- <div><a href="#"><span class="icon-calendar"></span> July 12, 2021</a></div> -->
                    <!-- <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.html" class="py-2 d-block">Home</a></li>
                <li><a href="about.html" class="py-2 d-block">About</a></li>
                <li>
                  <a href=.html" class="py-2 d-block"
                    >Sponsor a Child</a
                  >
                </li>
                <!-- <li><a href="blog.html" class="py-2 d-block">Blog</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text"
                      >Plot 29, Soroti Road, Lira City, Uganda</span
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-phone"></span
                      ><span class="text">+256 394 010 416</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-envelope"></span
                      ><span class="text">info@pwfu.org</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All rights reserved | Made by
              <a href="https://kakebe.com/" target="_blank"
                >KaKebe Technologies .Ltd</a
              >
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
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
