<?php
$year = date('Y');
ob_start();
require_once "config.php";
session_start();
ob_end_flush();
?><!DOCTYPE HTML>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SRET BANK</title>
  <meta content="" name="description">

  <meta content="" name="keywords">


  <link href="../basic banking system/assets/img/faviconbank.png" rel="icon">
  <link href="../basic banking system/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="../basic banking system/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../basic banking system/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../basic banking system/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../basic banking system/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../basic banking system/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../basic banking system/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="../basic banking system/assets/css/style.css" rel="stylesheet">


</head>

<body>


  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <span>SRET BANK</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="./index.php">Home</a></li>
          <li><a class="nav-link" href="./users.php">Users</a></li>
          <li><a class="nav-link" href="./history.php">Transaction</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>


  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-down">"Get The Money You Need, <br>Whenever You Need" <br>
          <h2 data-aos="fade-down" data-aos-delay="400">SRET BANK</h2>
          <div data-aos="fade-down" data-aos-delay="400">
            <div class="text-down text-lg-start">
              <a href="../basic banking system/users.php"> <button> GET STARTED </button></a>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-in" data-aos-delay="400">
          <img src="../basic banking system/images/Bank.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="../basic banking system/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="../basic banking system/assets/vendor/aos/aos.js"></script>
  <script src="../basic banking system/assets/vendor/php-email-form/validate.js"></script>
  <script src="../basic banking system/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../basic banking system/assets/vendor/purecounter/purecounter.js"></script>
  <script src="../basic banking system/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../basic banking system/assets/vendor/glightbox/js/glightbox.min.js"></script>

  <script src="../basic banking system/assets/js/main.js"></script>

</body>

</html>