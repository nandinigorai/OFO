<?php
   session_start();
   ?>
<html>
   <head>
      <title> About | Food Away </title>
   </head>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
   <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
   <link rel="stylesheet" type = "text/css" href ="css/index.css">
   <link rel="stylesheet" type = "text/css" href ="css/main.css">
     <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <body id="">
      <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
      </button>
      <script type="text/javascript">
         window.onscroll = function()
         {
           scrollFunction()
         };
         
         function scrollFunction()
         {
           if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             document.getElementById("myBtn").style.display = "block";
           } else {
             document.getElementById("myBtn").style.display = "none";
           }
         }
         
         function topFunction() {
           document.body.scrollTop = 0;
           document.documentElement.scrollTop = 0;
         }
      </script>
      <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="index.php">FOOD AWAY</a>
            </div>
            <div class="collapse navbar-collapse " id="myNavbar">
               <ul class="nav navbar-nav">
                  <li  ><a href="index.php">Home</a></li>
                  <li class="active"><a href="aboutus.php">About Us</a></li>
                  <li><a href="contactus.php">Contact Us</a></li>
               </ul>
               <?php
                  if(isset($_SESSION['login_user1'])){
                  
                  ?>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
                  <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
                  <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
               </ul>
               <?php
                  }
                  else if (isset($_SESSION['login_user2'])) {
                    ?>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
                  <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
                  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                     (<?php
                        if(isset($_SESSION["cart"])){
                        $count = count($_SESSION["cart"]);
                        echo "$count";
                        }
                        else
                          echo "0";
                        ?>)
                     </a>
                  </li>
                  <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
               </ul>
               <?php
                  }
                  else {
                  
                    ?>
               <ul class="nav navbar-nav navbar-right">
                  <li>
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                     <ul class="dropdown-menu">
                        <li> <a href="customersignup.php"> User Sign-up</a></li>
                        <li> <a href="managersignup.php"> Manager Sign-up</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li> <a href="customerlogin.php"> User Login</a></li>
                        <li> <a href="managerlogin.php"> Manager Login</a></li>
                     </ul>
                  </li>
               </ul>
               <?php
                  }
                  ?>
            </div>
         </div>
      </nav>
      <section class="inner-padd">
         <div class="container clearfix">
            <div class="row clearfix">
               <div class="col-md-12">
                  <div class="inner-heading">
                     <h3>About Us </h3>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="aboutus_padd">
        <div class="container clearfix">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                  <div class="heading-about">
                    <h2>ABOUT OUR HISTORY</h2>
                  </div>
                  <div class="aboutus-content">
                    <p>We provide you with daily self-made bread, sourdough pizza, roasted fish-meat-vegetables and many more. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Praesent non nunc turpis. Cras vel pretium ligula, ut lacinia lorem. Sed porttitor efficitur arcu, eu vehicula augue suscipit a. Sed vitae est vel elit vulputate sollicitudin. Donec vel est dui. Morbi at diam euismod, tincidunt ante eu, convallis quam. In vitae viverra sem. Vivamus vestibulum velit eu dolor dignissim, ac suscipit velit vehicula. Donec eleifend sem massa, et euismod orci tempus ut. Integer non semper turpis, sit amet elementum velit.</p>
                  </div>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="img-about">
                  <img src="images/2.10-maharaja-mac-veg.png" class="img-responsive">

                </div>
              </div>
            </div>
        </div>

      </section>


   </body>
</html>