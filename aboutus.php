<?php
session_start();
?>

<html>

  <head>
    <title> About | Softskill trainne </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="include/css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="include/css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body style="background-image:linear-gradient(to right,peachpuff,papayawhip)">

  


    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">SoftSkill-Trainne</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php

 if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Book </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">

              <li> <a href="customersignup.php"> User Sign-up</a></li>
               <li> <a href="customerlogin.php"> User Login</a></li>
</ul>

<?php
}
?>
    </nav>

    <div class="container-fluid" style="margin-top:80px;" >

        <div class="row">
            <div class="col-lg-6 col-sm-12 text-center mb-5">
                <img src="images/abt.png" class="img-thumbnail " >
            </div>

            <div class="col-lg-6 col-sm-12">
                <h3 class="text-center text-primary">WHO ARE WE ?</h3>
                <hr class="w-50 mx-auto">
                <p>
                    &emsp;&emsp;&emsp;Rather than what your employees know in a professional capacity, soft skills focus on who people are, as opposed to what they are. Soft skills serve to represent your approach to life and work. Simply put, soft skills are interpersonal skills hardwired to an individual?s personality, and they characterize how you interact with other people in the workplace.
                    Soft skills are basically the people skills, personality skills, and communication abilities your workforce needs for the long-term success of your organization. After all, almost every job requires employees to engage with others, either inside or outside of your organization.</p>
                <p>&emsp;For many organizations, hard skills are usually top of the list when it comes to hiring. That is, they?ll look for skills that are specific to the job itself, and the training or experience needed to perform the job well. While the importance of relevant education, training, and job experience cannot be understated, in this post, we?re going to focus on soft skills training.</p>
            </div>


        </div>
    </div>
   </body>
</html>