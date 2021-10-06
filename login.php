<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 

   $myuseremail = mysqli_real_escape_string($db, $_POST['useremail']);
   $mypassword = mysqli_real_escape_string($db, $_POST['password']);

   $sql = "SELECT id FROM users WHERE email = '$myuseremail' and password = '$mypassword'";
   $result = mysqli_query($db, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
   $active = $row['active'];

   $count = mysqli_num_rows($result);

   // If result matched $myusername and $mypassword, table row must be 1 row

   if ($count == 1) {
      $_SESSION['login_user'] = $myuseremail;

      header("location: sponsored.php");
   } else {
      $error = "Your Login Name or Password is invalid";
   }
}
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
   <style type="text/css">
      .inputbox {
         width: 100%;
         color: #000 !important;
         background: #fdfffe !important;
         border: none;
         border: 1px solid #e8f0fe;
         box-sizing: border-box;
         padding: 12px 20px;
         margin-bottom: 5px;
      }

      .labeltext {
         margin: 0;
         padding: 0;
         color: #333;
         font-size: smaller;
      }

      .inputsubmit {
         padding: 8px 20px;
         width: 100%;
         background: #ad1f26;
         border: 1px solid #ad1f26;
         color: white;
         margin-top: 1em;
      }

      .newtopwf {
         text-transform: uppercase;
         text-align: center;
         color: #000;
      }

      .newsignup {
         color: #ad1f26;
      }

      .logintext {
         font-size: 23px;
         text-align: center;
         font-weight: bold;
         color: #242020;
      }


      .registerlogin {
         padding: 9px;
         margin: 1em 0;
         width: 100%;
         border: 2px solid black;
         background: #050914;
         color: white;
      }



      .remberme {
         font-size: 13px;
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
               <li class="nav-item"><a href="sponsored.php" class="nav-link">Sponsor a Child</a></li>
               <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>



               <?php if (isset($_SESSION['login_user'])) { ?>
                  <li class="nav-item"><a href="index.php" class="nav-link"><?php echo $_SESSION['login_user']; ?></a></li>
                  <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
               <?php  } else { ?>
                  <li class="nav-item active"><a href="login.php" class="nav-link">Login</a></li>

               <?php } ?>

            </ul>
         </div>
      </div>
   </nav>
   

   <section class="ftco-section">
      <div class="container">
         <div class="row d-flex">
            <div class="col-md-5 d-flex mb-2">
               <div class="loginpagesite align-self-stretch">
                  <div style=" border: solid 1px #333; height: 100%;">

                     <div class="formbox" style="margin: 20px;">
                     
                        <form action="" method="post">

                           <p class="logintext">Account Log in</p>

                           <p class="newtopwf">New to PureWish <a href="register.php"><span class="newsignup">Create Account</span></a></p>

                           <label for="useremailid" class="labeltext">Email</label>
                           <input id="useremailid" type="email" name="useremail" class="inputbox" placeholder="Email address" required />
                           <p style="font-size:11px; color:#cc0000; "><?php echo $error; ?></p>
                           <label for="userpasswordid" class="labeltext">Password</label>
                           <input id="userpasswordid" type="password" name="password" class="inputbox" placeholder="Password" required />


                           <input class="inputsubmit" type="submit" value=" LOG IN " /><br />

                        </form>

                        <a href="register.php"><button class="registerlogin">Create Account</button></a>

                     </div>

                  </div>

               </div>
            </div>
            <div class="col-md-7 pl-md-5">
               <img src="images/pwfuremove.png" alt="">
               <h2 class="mb-4">Purewish Foundation Uganda</h2>
               <p>Purewish Foundation Uganda (PFU) is an indigenous not for profit Christian Organization which was founded in 2014 and first registered as Community Based Organization with Lira district Local government in Uganda. PFU is making development work for the children, youth and women who are the most vulnerable populations and groups across Lira district.</p>
               <p>PFU core work is based on empowering communities to shape the destiny of their society and investing in Children, youths and women by ensuing that vulnerable children (orphans, street children and child-headed families) are supported through provision of quality education (school sponsorship and scholastics), youth vocational training skills (Tailoring/sewing cloth, making liquid detergent, craft bags and beads), youths and women entrepreneurship (Business startup training, business incubation and financing).</p>
            </div>
         </div>
      </div>
   </section>

</body>

</html>