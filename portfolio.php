<?php
  include("connection.php");
          $index=$connection->prepare("SELECT COUNT(id) FROM event");
        $index->execute();
        $tab2=$index->fetchAll();
        
        $index2=$connection->prepare("SELECT id FROM `event` WHERE 1");
        $index2->execute();
        $tab3=$index2->fetchAll();
        


        $counter = $tab2[0][0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MangAfrik - Evenements</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.php"><img src="assets/img/favicon.png">Mang'Afrik Agency</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">

        <ul>
          <li><a href="index.php">Accueil</a></li>

          <li><a href="about.html">A Propos</a>
          </li>

          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.php">Evenements</a></li>
          <li class="active"><a href="pricing.html">Prouduits</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>

      </nav><!-- .nav-menu -->

      <a href="index.php" class="get-started-btn ml-auto">A Venir</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Evenements</h2>
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li>Evenements</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Activit??s</h2>
          <p>D??couvrez nos activit??s</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Tout</li>
              <li data-filter=".Mark">MAMARK</li>
              <li data-filter=".part">PARTENAIRES</li>
              <li data-filter=".clit">Clients</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

         <!--  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap"> -->
              <?php for ($i=0; $i <= $counter-1; $i++) { 
                  // code...
                  $req=$connection->prepare("SELECT * from event where id=? limit 1");
                  $req->setFetchMode(PDO::FETCH_ASSOC);
                  $req->execute(array($tab3[$i][0]));
                  $tab=$req->fetchAll();
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item <?php echo $tab[0]['categorie']?>">
                    <div class="portfolio-wrap">
                    <img src="export-event.php?id=<?php echo $tab3[$i][0] ?>" class="img-fluid" alt=""/>
                    <div class="portfolio-info">
                      <h4><?php echo $tab[0]["titre"]?></h4>
                      <p><?php echo $tab[0]["description"]?></p>
                    <div class="portfolio-links">
                  <a href="export-event.php?id=<?php echo $tab3[$i][0] ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-search-alt"></i></a>
                 <!--  <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                </div>
              </div>
            </div>
          </div>
                  <?php
                  }
              ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>MangAfrik</h3>
              <p>
                Fret Areoport, DOUALA<br><br>
                <strong>Phone:</strong> +237 676 547 259<br>
                <strong>Email:</strong> mangaafrik@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/MangAfrikAgency" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.instagram.com/mangafrikagency/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/company/mangafrikagency/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens plus utilis??s</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.html">A Propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Services</a></li>
             
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container container-footer">
      <div class="copyright">
        &copy; Copyright <strong><span>MangAfrik</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>