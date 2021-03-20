<?php
   session_start();
   ?>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="theme-color" content="#FFBC0D" />
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <title> Contact | Food Away </title>
   </head>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
   <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
   <link rel="stylesheet" type = "text/css" href ="css/index.css">
   <link rel="stylesheet" type = "text/css" href ="css/main.css">
     <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <body>
      <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
      </button>
      <script type="text/javascript">
         window.onscroll = function()
         {
           scrollFunction()
         };
         
         function scrollFunction(){
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
                  <li class="" ><a href="index.php">Home</a></li>
                  <li><a href="aboutus.php">About Us</a></li>
                  <li class="active" ><a href="contactus.php">Contact Us</a></li>
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
                     <h3>Contact Us </h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="aboutus_padd">
         <div class="container" >
            <div class="row reservation-content">
               <div class="card">
                  <div class="card-body">
                     <div class="col-md-5">
                      <div class="conatct_info">
                        <div class="opening-time">
                          <h3>Our Time<br>
                            <span>Open Hour</span>

                            <h4 class="openning-days mt-50 mb-15">monday - friday</h4>
                            <p>7AM - 11AM (Breakfast)</p>
                            <p class="mt-10">11AM - 10PM (lunch - dinner)</p>
                            <h4 class="openning-days mt-30 mb-15">saturday - sunday</h4>
                            <p>8AM - 1PM (Breakfast)</p>
                            <p class="mt-10">1PM - 9PM (lunch - dinner)</p>
                            <p class="mt-30">+34 535 8350 35</p>
                          </h3>


                        </div>
                      </div>
                     </div>
                     <div class="col-md-7">
                        <div class="form-area">
                           <form method="post" action="" class="row">
                              <div class="col-md-12">
                                 <h3> Contact Form</h3>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                    <span class="help-block">
                                       <p id="characterLeft" class="help-block">Max Character length : 140 </p>
                                    </span>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-order btn-lg pull-left"/>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php
         if (isset($_POST['submit'])){
         require 'connection.php';
         $conn = Connect();
         
         $Name = $conn->real_escape_string($_POST['name']);
         $Email_Id = $conn->real_escape_string($_POST['email']);
         $Mobile_No = $conn->real_escape_string($_POST['mobile']);
         $Subject = $conn->real_escape_string($_POST['subject']);
         $Message = $conn->real_escape_string($_POST['message']);
         
         $query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
         $success = $conn->query($query);
         
         if (!$success){
           die("Couldnt enter data: ".$conn->error);
         }
         
         $conn->close();
         }
         ?>
   </body>
</html>