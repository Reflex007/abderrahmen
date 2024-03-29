
<?php
include "../Entites/livraison.php" ;
include "../Core/livraisonC.php" ;
  //require 'connect.php';
  $livraisonC = new PDO('mysql:host=localhost;dbname=web_esprit', 'root', '');
  $livraison1C = $livraisonC->prepare('SELECT id,nom,prenom,Pays,tel,date_livraison,email,adresse FROM livraison ORDER BY id ASC ');
  $executeIsOK = $livraison1C->execute();
  $listelivraison= $livraison1C->fetchAll();

 ?> 

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Kimolu">
  
  <meta name="author" content="Themefisher.com">

  <title>Kimolu</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  
  <!-- Revolution Slider -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css">

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/navigation.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">
<!-- Start Top Header Bar -->
<section class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="contact-number">
          <i class="tf-ion-ios-telephone"></i>
          <span>+21670686500</span>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
        <!-- Site Logo -->
        <div class="logo text-center">
          <a href="index.html">
            <!-- replace logo here -->
            <img src="images/logo.png" alt="website main logo" /> 
          </a>
        </div>
      </div>
      <div class="col-md-4 col-xs-12 col-sm-4">
      <!-- Cart -->
      <ul class="top-menu text-right list-inline">
            <!-- Search -->
            <li class="dropdown search dropdown-slide">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Search</a>
              <ul class="dropdown-menu search-dropdown">
                <li><form action="post"><input type="search" class="form-control" placeholder="Search..."></form></li>
              </ul>
            </li><!-- / Search -->

            <!-- Languages -->
            <li class="commonSelect">
              <select class="form-control">
                    <option>EN</option>
                    <option>DE</option>
                    <option>FR</option>
                    <option>ES</option>
                </select>
            </li><!-- / Languages -->

          </ul><!-- / .nav .navbar-nav .navbar-right -->
      </div>
    </div>
  </div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
  <nav class="navbar navigation">
      <div class="container">
        <div class="navbar-header">
          <h2 class="menu-title">Main Menu</h2>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div><!-- / .navbar-header -->

        <!-- Navbar Links -->
        <div id="navbar" class="navbar-collapse collapse text-center">
          <ul class="nav navbar-nav">

            <!-- Home -->
            <li class="dropdown ">
              <a href="index.html">Home</a>
            </li><!-- / Home -->


            <!-- Elements -->
            <li class="dropdown dropdown-slide">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="tf-ion-ios-arrow-down"></span></a>
              <div class="dropdown-menu">
                <div class="row">
                  <!-- Basic -->
                  <div class="col-lg-6 col-md-6 mb-sm-3">
                    <ul>
              <li class="dropdown-header">Pages</li>
              <li role="separator" class="divider"></li>
              <li><a href="shop.html">shop</a></li>
              <li><a href="checkout.html">Checkout</a></li>
                    </ul>
                  </div>
          </div><!-- / .row -->
              </div><!-- / .dropdown-menu -->
            </li><!-- / Elements -->


            <!-- Pages -->
            <li class="dropdown full-width dropdown-slide">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="tf-ion-ios-arrow-down"></span></a>
              <div class="dropdown-menu">
                  <div class="row">

                    <!-- Introduction -->
                    <div class="col-sm-3 col-xs-12">
                      <ul>
                <li class="dropdown-header">Introduction</li>
                <li role="separator" class="divider"></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="faq.html">FAQ</a></li>
                      </ul>
                    </div>

                    <!-- Contact -->
                    <div class="col-sm-3 col-xs-12">
                      <ul>
                <li class="dropdown-header">Dashboard</li>
                <li role="separator" class="divider"></li>
                <li><a href="dashboard.html">User Interface</a></li>
                <li><a href="order.html">Orders</a></li>
                <li><a href="address.html">Address</a></li>
                <li><a href="profile-details.html">Profile Details</a></li>
                      </ul>
                    </div>

                    <!-- Utility -->
                    <div class="col-sm-3 col-xs-12">
                      <ul>
                <li class="dropdown-header">Utility</li>
                <li role="separator" class="divider"></li>
                <li><a href="login.html">Login Page</a></li>
                <li><a href="signin.html">Signin Page</a></li>
                <li><a href="forget-password.html">Forget Password</a></li>
                      </ul>
                    </div>

                    <!-- Mega Menu -->
                    <div class="col-sm-3 col-xs-12">
                      <a href="shop.html">
                        <img class="img-responsive" src="images/logo.png" alt="menu image" />
                      </a>
                    </div>
                  </div><!-- / .row -->
              </div><!-- / .dropdown-menu -->
            </li><!-- / Pages -->
      <!-- Shop -->
          </ul><!-- / .nav .navbar-nav -->

          </div><!--/.navbar-collapse -->
      </div><!-- / .container -->
  </nav>
</section>

<section class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content">
          <h1 class="page-name"> Votre livraison</h1>
        </div>
      </div>
    </div>
  </div>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <i class="fa fa-globe"></i> Liste des livraison
          <small class="pull-right"></small>
        </h2>
      </div>
</section>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col"> id</th>
      <th scope="col">nom</th>
      <th scope="col">prenom</th>
      <th scope="col">Pays</th>
      <th scope="col">tel</th>
      <th scope="col">date_livraison</th>
      <th scope="col">email</th>
      <th scope="col">adresse</th>

    </tr>
  </thead>
  <tbody>
          <?PHP
foreach($listelivraison as $row)
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['Pays']; ?></td>
  <td><?PHP echo $row['tel']; ?></td>
  <td><?PHP echo $row['date_livraison']; ?></td>
  <td><?PHP echo $row['email']; ?></td>
  <td><?PHP echo $row['adresse']; ?></td>
  <td> 
  </td>
                
  </tr>

    </tbody>
</table>

 <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="https://code.jquery.com/jquery-git.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed-js/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/count-down/jquery.countdown.min.js"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- Revolution Slider -->
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="plugins/revolution-slider/assets/warning.js"></script>  



    <!-- Custom js -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBItRd4sQ_aXlQG_fvEzsxvuYyaWnJKETk&callback=initMap"></script>

    <script src="js/script.js"></script>
    


  </body>
  </html>
  </html>
