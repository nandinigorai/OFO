<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="theme-color" content="#FFBC0D" />
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <title> Guest Signup | Food Away </title>
   </head>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
   <link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
   <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
   <link rel="stylesheet" type = "text/css" href ="css/main.css">
   <script type="text/javascript" src="js/jquery.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <body class="bg-customer">
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
               <a class="navbar-brand" href="index.php">Food Away</a>
            </div>
            <div class="collapse navbar-collapse " id="myNavbar">
               <ul class="nav navbar-nav">
                  <li  ><a href="index.php">Home</a></li>
                  <li><a href="aboutus.php">About</a></li>
                  <li><a href="contactus.php">Contact Us</a></li>
               </ul>
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
            </div>
         </div>
      </nav>
      <div class="container" style="margin-top: 4%; margin-bottom: 2%;">
      <div class="col-md-5 col-md-offset-4 customerlogin-padd">
         <div class="panel panel-primary">
            <div class="panel-heading"> Create Account </div>
            <div class="panel-body">
               <form role="form" action="customer_registered_success.php" method="POST">
                  <div class="row">
                     <div class="form-group col-xs-6">
                        <label for="fullname">Full Name: </label>
                        <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
                     </div>
                     <div class="form-group col-xs-6">
                        <label for="username">Username: </label>
                        <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
                     </div>
                     <div class="form-group col-xs-6">
                        <label for="email">Email: </label>
                        <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
                     </div>
                     <div class="form-group col-xs-6">
                        <label for="contact">Contact: </label>
                        <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
                     </div>
                     <div class="form-group col-xs-6">
                        <label for="address">Address: </label>
                        <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
                     </div>
                     <div class="form-group col-xs-6">
                        <label for="password">Password: </label>
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                     </div>
                     <div class="form-group col-xs-12">
                        <button class="btn btn-order btn-lg" type="submit">Submit</button>
                        <label style="margin-left: 5px;">or</label> 
                        <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label>
                     </div>
               </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>