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

  <title>MangAfrik - Index</title>
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
          <li class="active"><a href="index.php">Acceuil</a></li>

          <li><a href="about.html">A Propos</a>
          </li>

          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.php">Evenements</a></li>
          <li><a href="pricing.html">Prouduits</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.html">Contacts</a></li>
        </ul>

      </nav><!-- .nav-menu -->

      <a href="index.php" class="get-started-btn ml-auto">A Venir</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/ACCEUIL.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Bienvenue ?? <span>Mang'Afrik Agency</h2>
              <p class="animate__animated animate__fadeInUp">Nous sommes une ressource au service des entreprises et autres institutions. Nous sommes sp??cialis??s
dans la promotion de marque, des produits et des services ?? l?????chelle nationale et internationale. Notre
expertise en gestion ??v??nementielle commerciale, nous offre un statut avant-gardiste.</p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/DIGITALE.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Digital</h2>
              <p class="animate__animated animate__fadeInUp">El??ment majeur de la communication de nos jours, Forte de notre exp??rience en strat??gies digitales, 
nous proposons des services afin d???accroitre votre notori??t?? sur les plateformes digitales les plus 
utilis??es et d???am??liorer votre image aupr??s de vos consommateurs cibles.
</p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/EVENEMENTIEL.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Evenementiels</h2>
              <p class="animate__animated animate__fadeInUp">Notre expertise en gestion ??v??nementielle, strat??gie de promotion et en planification d???approche 
commerciale, nous donne un statut avant-gardiste. Choisissez l???excellence l???organisation, la gestion et la 
planification de vos ??v??nements professionnels, culturels, sociaux, ou sportifs.
</p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Nos Atouts           <h3>Nos atouts en communication sont de v??ritables maillons de la chaine de satisfaction pour votre 
            entreprise et ses attentes Parmi ceux-ci nous avons :
</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <ul>
             <li><i class="ri-check-double-line"></i> Nous sommes cr??atifs dans nos strat??gies,
             </li>
              <li><i class="ri-check-double-line"></i> Nous sommes innovants dans nos gestions de projets,
              </li>
              <li><i class="ri-check-double-line"></i> Nous sommes constants dans la maitrise de nos proc??d??s,
              </li>
              <li><i class="ri-check-double-line"></i> Nous sommes pragmatiques dans notre gestion relationnelle et manag??riale,
              </li>
              <li><i class="ri-check-double-line"></i> Nous avons une forte capacit?? d?????coute, de compr??hension et de proposition,
              </li>
              <li><i class="ri-check-double-line"></i> Nous avons la capacit?? de travailler en les deux langues nationales (fran??ais et anglais),
              </li>
              <li><i class="ri-check-double-line"></i> La capacit?? de travailler en les deux langues nationales (fran??ais et anglais),
              </li>
              <li><i class="ri-check-double-line"></i> Nous avons plus de cinq (5) ans d???exp??riences en communication marketing, ??v??nementielle et digitale,
              </li>
              <li><i class="ri-check-double-line"></i> Nous avons de l???expertise en strat??gie digitale et campagne promotionnelle.
              </li>
            </ul>
            <p class="font-italic">
              Permettez-nous de parler de vous! 
              MANG???AFRIK, l???Excellence et rien d???autre!
            </p>
            <!-- <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <div class="container">
       <div class="section-title">
            <h2>Nos Partenaires</h2>
          </div>
    </div>
    <section id="clients" class="clients section-bg">
      
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Decouvrez les services que nous offrons</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i><img src="assets/img/1-gestion-d'image.png"></i>
              <h4><a href="#">Gestion d???image</a></h4>
              <p>Nous cr??ons des sites internet, des logos et des chartes graphiques, du contenu pour vos plateformes 
nous g??rons vos m??dias sociaux en vous apportant en plus du Conseil et de l?????ducation sur l???outil digital.
</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
           <div class="icon-box">
              <i><img src="assets/img/6-Event-Marketing.png"></i>
              <h4><a href="#">Event Marketing</a></h4>
              <p>Nous mettons en place la communication pr?? ??v??nement, pendant l?????v??nement et post ??v??nement, 
nous ??tablissons et g??rons la logistique ad??quate adapt??e et nous ??laborons un budget sculpt?? pour 
selon votre besoin.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i><img src="assets/img/3-Gestion-Ev??nementiel.png"></i>
              <h4><a href="#">Gestion ??v??nementielle</a></h4>
              <p>Nous g??rons vos ??v??nements professionnels, sociaux, sportifs et culturels. Une excellence qualitative 
dans l???organisation et la planification de vos ??v??nements dans le d??tail afin de r??colter une satisfaction 
in??dite de vos convives.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
             <i><img src="assets/img/4-A&AP.png"></i>
              <h4><a href="#">Activation et Animation promotionnelle</a></h4>
              <p>Nous r??pertorions les points de ventes cibles et ad??quats pour votre produit, nous d??terminons avec 
vous la dur??e de votre campagne en fonction des objectifs ?? atteindre ?? l???issue de celle-ci.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
             <div class="icon-box">
              <i><img src="assets/img/2-gestion-campagne.png"></i>
              <h4><a href="#">Gestion de campagne</a></h4>
              <p>Nous planifions et g??rons vos sorties m??diatiques, vos campagne de sensibilisation et nous cr??ons des 
concepts STREET MARKETING pour vos produits et services.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i><img src="assets/img/5-Distribution.png"></i>
              <h4><a href="#">Distribution</a></h4>
              <p>Nous distribuons les produits locaux, consommables et non consommables, ?? l?????chelle nationale et 
internationale par le biais du Carrefour des Affaires Panafricaines et la Chambre de Commerce Qu??bec-Afrique.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

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
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Acceuil</a></li>
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