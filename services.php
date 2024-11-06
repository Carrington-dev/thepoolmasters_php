<!DOCTYPE html>
<html lang="en">
<?php include 'includes/details.php';
  	  $page = "Services";
  ?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo "$company"; ?> | <?php echo "$page"; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

<?php include 'includes/header.php';?>


  <main class="main">
    <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current"><?php echo "$page"; ?></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
    

    
    <?php 
    
      // <!-- Features Section -->
      // <section id="features" class="features section">

      //   <div class="container">

      //     <div class="row justify-content-around gy-4">
      //       <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="assets/img/features.jpg" alt=""></div>

      //       <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      //         <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
      //         <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

      //         <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
      //           <i class="fa-solid fa-hand-holding-medical flex-shrink-0"></i>
      //           <div>
      //             <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
      //             <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
      //           </div>
      //         </div><!-- End Icon Box -->

      //         <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
      //           <i class="fa-solid fa-suitcase-medical flex-shrink-0"></i>
      //           <div>
      //             <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
      //             <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
      //           </div>
      //         </div><!-- End Icon Box -->

      //         <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
      //           <i class="fa-solid fa-staff-snake flex-shrink-0"></i>
      //           <div>
      //             <h4><a href="" class="stretched-link">Dine Pad</a></h4>
      //             <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
      //           </div>
      //         </div><!-- End Icon Box -->

      //         <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
      //           <i class="fa-solid fa-lungs flex-shrink-0"></i>
      //           <div>
      //             <h4><a href="" class="stretched-link">Tride clov</a></h4>
      //             <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
      //           </div>
      //         </div><!-- End Icon Box -->

      //       </div>
      //     </div>

      //   </div>

      // </section><!-- /Features Section -->
    ?>

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>We offer a wide range of pool services and construction services</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Pool Cleaning Services
                </h3>
              </a>
              <p>
                 Regular pool cleaning and chemical balancing is essential if you want to enjoy a clean and healthy swimming pool.

              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-pills"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Pool Lighting
                </h3>
              </a>
              <p>
                
                New Led Lights, New Suction and return Lines, New weir replacement, Pump & Filter replacements, New coping, Water features, Chlorinators
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-hospital-user"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Pool Maintenance
                </h3>
              </a>
              <p>
                Having a swimming pool requires maintenance and upkeep. If you don’t have time to do it yourself, one of our trusted swimming pool professionals will assist you.
                </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-dna"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Fibre Lining
                </h3>
              </a>
              <p>
              Gunite Pools, Marbelite Pools, Existing Fibre Pools, Koi ponds, Any pool surface that is damaged or leaks, Reduction of larger pools & completing with Fibre Lining
              </p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-wheelchair"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Plumbing</h3>
              </a>
              <p>

              <?php echo "$company"; ?> is equipped to meet all your plumbing needs. We provide the highest quality services at competitive prices with prompt, professional and friendly service.
              </p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-notes-medical"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Painting</h3>
              </a>
              <p>
                
                Painting of your steel palisades, gates, doors, decks, thatch timber, garage doors, window frames, galvanized gutters and down pipes, etc. makes it rust/corrosion and your wood
                </p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

  </main>

  <?php include 'includes/footer.php';?>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>