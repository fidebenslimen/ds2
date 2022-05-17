<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Fitness Park</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   </head>
   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
         <div class="header">
 <div class="container-fluid">
     <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
    <div class="full">
  <div class="center-desk">
<div class="logo">
  <img src="images/logo.png" alt="#" />
    </div>
     </div>
  </div>
    </div>
 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
  <nav class="navigation navbar navbar-expand-md navbar-dark ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExample04">
     
      <ul class="navbar-nav mr-auto">
  <li class="nav-item">
    <a class="nav-link" href="#">acceuil</a>
  </li>
     <li class="nav-item">
    <a class="nav-link" href="login.php">activite</a>
   </li>
     <li class="nav-item">
   <a class="nav-link" href="login.php">offres</a>
    </li>
<li class="nav-item">
  <a class="nav-link" href="planning.html">planning</a>
 </li>
  </ul>
<div class="sign_btn"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
   </div>
 </nav>
  </div>
  </div>
   </div>
</div>
 </header>
 <section class="banner_main">
     <div class="container-fluid">
    <div class="row d_flex">
   <div class="col-md-6">
    <div class="text-bg">
    <div class="padding_lert">
 <h1>FITNESS PARK</h1>
 <span>ACCEUIL </span>
   <p>Train with  confidence at the tunisian's favourite gym</p>
  <a class="read_more" href="#">Read More</a>
  </div>
  </div>
 </div>
 <div class="col-md-6">
 <div class="text-img">
 <figure><img src="images/toy_img.png" alt="#"/></figure>
  </div>
 </div>
  </div>
   </div>
      </section>
      
 <div class="Features">
<div class="container">
  <div class="row">
 <div class="col-md-12">
 <div class="titlepage">
<h2>Our Features Classes</h2>
<span>CHECKOUT OUR FITNESS CLASSES</span>
 </div>
</div>
 </div>
 <div class="row">
  <div class="col-md-4">
 <div class="Our_box">
 <i><img src="icon/icon1.png" alt="#"/></i>
   <h4>HEAVY WEIGHT <br>CLASSES</h4>
 </div>
   </div>
 <div class="col-md-4">
 <div class="Our_box">
 <i><img src="icon/icon2.png" alt="#"/></i>
 <h4>BODY BUILDING <br>CLASSES</h4>
  </div>
</div>
 <div class="col-md-4">
  <div class="Our_box">
  <i><img src="icon/icon3.png" alt="#"/></i>
 <h4>WEIGHT LOSS <br>CLASSES</h4>
</div>
 </div>
 <div class="col-md-12">
  <a class="read_more" href="#">Read More</a>
</div>
  </div>
</div>
</div>
<div class="discount">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="titlepage">
<h2>FITNESS CLASSES THIS SUMMER. PAY NOW AND GET 25% DISCOUNT</h2>
<a class="read_more">Read More</a>
</div>
</div>
 </div>
</div>
</div>
<div class="request">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="titlepage">
 <h2>In case you want to join us </h2>
<span>The land of fitness, est la
   Première chaîne de clubs de fitness
   en Tunisie avec 10 clubs répartis
   sur le Grand Tunis et Sousse</span>
 </div>
</div>
<?php 
                if(isset($_GET['reg_err']))
                {
 $err = htmlspecialchars($_GET['reg_err']);

  switch($err)
 {
case 'success':
  ?>
 <div class="alert alert-success">
<strong>Succès</strong> inscription réussie !
 </div>
 <?php
 break;
 case 'email':
?>
<div class="alert alert-danger">
     <strong>Erreur</strong> email non valide
</div>
<?php
break;
 case 'email_length':
?>
 <div class="alert alert-danger">
 <strong>Erreur</strong> email trop long
</div>
<?php 
break;
 case 'name_length':
?>
 <div class="alert alert-danger">
<strong>Erreur</strong> name trop long
 </div>
  <?php 
    case 'already':
?>
<div class="alert alert-danger">
   <strong>Erreur</strong> compte deja existant
  </div>
  <?php 
 }
  }
                ?>
<form class="form" id="main_form" action="inscription.php" methode="POST">
   <input class="contactus"  type="text" placeholder="name" name="name"><br>
   <input  class="contactus"  type="text" placeholder="phone" name="phone"><br>
   <input class="contactus" type="email" placeholder="email" name="email"><br>
   <input class="contactus" type="password" placeholder="password"><br><br>
   <button class="send_btn">SIGN IN </button>

</form>
<div class="col-md-8">
<div class="back_img">
<figure><img src="images/img.jpg" alt="#"/></figure>
</div>
</div>
</div>
</div>
</div>
<div class="people">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="titlepage">
<h2> know about us </h2>
</div>
</div>
 </div>
 <div class="row">
   <div class="col-md-12">
    <div id="myCarousel" class="carousel slide people_Carousel " data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
<div class="carousel-inner">
<div class="carousel-item active">
   <div class="container">
<div class="carousel-caption ">
<div class="row">
 <div class="col-md-8 offset-md-2">
 <div class="test_box">
<h4>join Fitness Park now</h4>
<p> BUILD DISCIPLINE. BUILD A LEGACY. BUILD EVERY SINGLE DAY WITH A MEMBERSHIP TO Fitness Park. GET THE AMENITIES, WORKOUTS, EQUIPMENT AND PERSONAL TRAINING AT THE BEST PRICE..</p>
</div>
</div>
</div>
 </div>
</div>
</div>
<div class="carousel-item">
 <div class="container">
 <div class="carousel-caption">
 <div class="row">
 <div class="col-md-8 offset-md-2">
 <div class="test_box">
<h4>Our Gym is Your Gym</h4>
  <p>Kick your feet up! With a gym designed around you, we think you’ll love it here.</p>
</div>
</div>
</div>
</div>
  </div>
  </div>
 <div class="carousel-item">
  <div class="container">
 <div class="carousel-caption">
  <div class="row">
 <div class="col-md-8 offset-md-2">
<div class="test_box">
 <h4>Energy is for Everyone</h4>
<p>Believe in the power of a motivating group fitness community.Goals are Made to be Crushed
   Train with our experts to drive your results.</p>
  </div>
  </div>
</div>
  </div>
  </div>
  </div>
</div>
 <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
 </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
 </a>
  </div>
  </div>
   </div>
 </div>
 </div>
 <footer>
  <div class="footer">
<div class="container">
<div class="row">
 <div class="col-md-8 offset-md-2">
   <div class="cont">
  <h3> <span class="multi">Rqueste  </span> <br> a call back</h3>
  <p>if you need anything or there's something you need to know don't hesitate to contact us </p>
  </div>
  <form class="bottom_form">
     <input class="enter" placeholder="Enter your message" type="text" name="Enter your message">
  <button class="sub_btn">send</button>
    </form>
 </div>
 </div>
  </div>
 <div class="copyright">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
 <p>© 2022 All Rights Reserved. </p>
</div>
</div>
</div>
 </div>
 </div>
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
     
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

