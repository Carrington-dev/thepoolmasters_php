<!DOCTYPE html>
<html lang="en">
<?php include 'includes/details.php';?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo "$company"; ?> | Pool Service Company</title>
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

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
          <div class="container">
            <h2>Welcome to <?php echo "$company"; ?></h2>
            <p>With over 10 years of experience, we offer reliable services in Pretoria and Johannesburg meeting our client’s expectations.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
          <div class="container">
            <h2>Our Aim</h2>
            <p>With a hands-on approach we aim to make sure that it’s a satisfied overall customer experience.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
          <div class="container">
            <h2>Our Aim</h2>
            <p>With a hands-on approach we aim to make sure that it’s a satisfied overall customer experience.</p>
            <a href="#about" class="btn-get-started">Read More</a>
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-heartbeat icon"></i></div>
              <h4><a href="" class="stretched-link">Our Focus</a></h4>
              <p>Our focus is on Building, Renovating, Repairing and maintaining swimming pools.  </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-pills icon"></i></div>
              <h4><a href="" class="stretched-link">Many years in this game</a></h4>
              <p>With over 10 years of experience, we offer reliable services in Pretoria and Johannesburg meeting our client’s expectations.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-thermometer icon"></i></div>
              <h4><a href="" class="stretched-link">Bring you joy</a></h4>
              <p>We provide a much-needed escape from the heat and a welcome means of refreshment for hundreds of families in and around the Gauteng and Limpopo area.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="fas fa-dna icon"></i></div>
              <h4><a href="" class="stretched-link">Our Goals</a></h4>
              <p>With a hands-on approach we aim to make sure that it’s a satisfied overall customer experience.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>In an emergency? Need help now?</h3>
              <p>Get in Touch For Your Pool Installation, Pool Repair
              & Pool Maintenance Requirements</p>
              <a class="cta-btn" href="#appointment">Book Us Now</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
        <p>
        We offer high quality pool Installation and maintenance solutions.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Home of Quality and Excellent Workmanship.
            Professional local pool installations.</h3>
            <p class="fst-italic">
              Pool Masters is a company which offer all your construction needs at the best prices. We believe that renovations is important to increase the lifestyle and the value of your home.


            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Pool repairs and Renovations Randburg, Pretoria, Centurion and Johannesburg
              </span></li>
              <li><i class="bi bi-check2-all"></i> <span>We offer high quality pool Installation and maintenance solutions.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>We offer wide range of other products and services to enhance your swimming and leisure experience from pool heat pumps and complete solar heating systems..</span></li>
            </ul>
            <p>We renovate in greater depth, concrete and Fibreglass pools, Spas as well as fishponds. Enhance the beauty and functionality of your backyard oasis with our pool renovation services in Pretoria and Centurion areas


            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
  
      <section id="stats" class="stats section">
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="fas fa-user-md flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Employees</p>
                </div>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="far fa-hospital flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Departments</p>
                </div>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="fas fa-flask flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Pool Shop Partners</p>
                </div>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item d-flex align-items-center w-100 h-100">
                <i class="fas fa-award flex-shrink-0"></i>
                <div>
                  <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Clients</p>
                </div>
              </div>
            </div><!-- End Stats Item -->
  
          </div>
  
        </div>
  
      </section>
     
    <!-- /Stats Section -->

    <?php 
      // <!-- Appointment Section -->
      // <section id="appointment" class="appointment section light-background">

      //   <!-- Section Title -->
      //   <div class="container section-title" data-aos="fade-up">
      //     <h2>MAKE AN APPOINTMENT</h2>
      //     <p>Pool repairs and Renovations Randburg, Pretoria, Centurion and Johannesburg, call us now, we'll be quick to answer</p>
      //   </div><!-- End Section Title -->

      //   <div class="container" data-aos="fade-up" data-aos-delay="100">

      //     <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
      //       <div class="row">
      //         <div class="col-md-4 form-group">
      //           <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
      //         </div>
      //         <div class="col-md-4 form-group mt-3 mt-md-0">
      //           <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
      //         </div>
      //         <div class="col-md-4 form-group mt-3 mt-md-0">
      //           <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
      //         </div>
      //       </div>
      //       <div class="row">
      //         <div class="col-md-4 form-group mt-3">
      //           <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required="">
      //         </div>
      //         <div class="col-md-4 form-group mt-3">
      //           <select name="department" id="department" class="form-select" required="">
      //             <option value="">Select Department</option>
      //             <option value="Department 1">Department 1</option>
      //             <option value="Department 2">Department 2</option>
      //             <option value="Department 3">Department 3</option>
      //           </select>
      //         </div>
      //         <div class="col-md-4 form-group mt-3">
      //           <select name="doctor" id="doctor" class="form-select" required="">
      //             <option value="">Select Doctor</option>
      //             <option value="Doctor 1">Doctor 1</option>
      //             <option value="Doctor 2">Doctor 2</option>
      //             <option value="Doctor 3">Doctor 3</option>
      //           </select>
      //         </div>
      //       </div>

      //       <div class="form-group mt-3">
      //         <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
      //       </div>
      //       <div class="mt-3">
      //         <div class="loading">Loading</div>
      //         <div class="error-message"></div>
      //         <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
      //         <div class="text-center"><button type="submit">Make an Appointment</button></div>
      //       </div>
      //     </form>

      //   </div>

      // </section><!-- /Appointment Section -->
    
      // <section id="tabs" class="tabs section">
      
      //   <!-- Section Title -->
      //   <div class="container section-title" data-aos="fade-up">
      //     <h2>Departments</h2>
      //     <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      //   </div><!-- End Section Title -->
      
      //   <div class="container" data-aos="fade-up" data-aos-delay="100">
      
      //     <div class="row">
      //       <div class="col-lg-3">
      //         <ul class="nav nav-tabs flex-column">
      //           <li class="nav-item">
      //             <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">Cardiology</a>
      //           </li>
      //           <li class="nav-item">
      //             <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Neurology</a>
      //           </li>
      //           <li class="nav-item">
      //             <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">Hepatology</a>
      //           </li>
      //           <li class="nav-item">
      //             <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">Pediatrics</a>
      //           </li>
      //           <li class="nav-item">
      //             <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">Ophthalmologists</a>
      //           </li>
      //         </ul>
      //       </div>
      //       <div class="col-lg-9 mt-4 mt-lg-0">
      //         <div class="tab-content">
      //           <div class="tab-pane active show" id="tabs-tab-1">
      //             <div class="row">
      //               <div class="col-lg-8 details order-2 order-lg-1">
      //                 <h3>Cardiology</h3>
      //                 <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
      //                 <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
      //               </div>
      //               <div class="col-lg-4 text-center order-1 order-lg-2">
      //                 <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
      //               </div>
      //             </div>
      //           </div>
      //           <div class="tab-pane" id="tabs-tab-2">
      //             <div class="row">
      //               <div class="col-lg-8 details order-2 order-lg-1">
      //                 <h3>Neurology</h3>
      //                 <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
      //                 <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
      //               </div>
      //               <div class="col-lg-4 text-center order-1 order-lg-2">
      //                 <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
      //               </div>
      //             </div>
      //           </div>
      //           <div class="tab-pane" id="tabs-tab-3">
      //             <div class="row">
      //               <div class="col-lg-8 details order-2 order-lg-1">
      //                 <h3>Hepatology</h3>
      //                 <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
      //                 <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
      //               </div>
      //               <div class="col-lg-4 text-center order-1 order-lg-2">
      //                 <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
      //               </div>
      //             </div>
      //           </div>
      //           <div class="tab-pane" id="tabs-tab-4">
      //             <div class="row">
      //               <div class="col-lg-8 details order-2 order-lg-1">
      //                 <h3>Pediatrics</h3>
      //                 <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
      //                 <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
      //               </div>
      //               <div class="col-lg-4 text-center order-1 order-lg-2">
      //                 <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
      //               </div>
      //             </div>
      //           </div>
      //           <div class="tab-pane" id="tabs-tab-5">
      //             <div class="row">
      //               <div class="col-lg-8 details order-2 order-lg-1">
      //                 <h3>Ophthalmologists</h3>
      //                 <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
      //                 <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
      //               </div>
      //               <div class="col-lg-4 text-center order-1 order-lg-2">
      //                 <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
      //               </div>
      //             </div>
      //           </div>
      //         </div>
      //       </div>
      //     </div>
      
      //   </div>
      
      // </section><!-- /Tabs Section -->
      // <!-- Tabs Section -->
      // <!-- Testimonials Section -->
      // <section id="testimonials" class="testimonials section">
      
      //   <!-- Section Title -->
      //   <div class="container section-title" data-aos="fade-up">
      //     <h2>Testimonials</h2>
      //     <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      //   </div><!-- End Section Title -->
      
      //   <div class="container" data-aos="fade-up" data-aos-delay="100">
      
      //     <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
      //       <script type="application/json" class="swiper-config">
      //         {
      //           "loop": true,
      //           "speed": 600,
      //           "autoplay": {
      //             "delay": 5000
      //           },
      //           "slidesPerView": "auto",
      //           "pagination": {
      //             "el": ".swiper-pagination",
      //             "type": "bullets",
      //             "clickable": true
      //           },
      //           "breakpoints": {
      //             "320": {
      //               "slidesPerView": 1,
      //               "spaceBetween": 40
      //             },
      //             "1200": {
      //               "slidesPerView": 3,
      //               "spaceBetween": 20
      //             }
      //           }
      //         }
      //       </script>
      //       <div class="swiper-wrapper">
      
      //         <div class="swiper-slide">
      //           <div class="testimonial-item" "="">
      //         <p>
      //           <i class=" bi bi-quote quote-icon-left"></i>
      //             <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
      //             <i class="bi bi-quote quote-icon-right"></i>
      //             </p>
      //             <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
      //             <h3>Saul Goodman</h3>
      //             <h4>Ceo &amp; Founder</h4>
      //           </div>
      //         </div><!-- End testimonial item -->
      
      //         <div class="swiper-slide">
      //           <div class="testimonial-item">
      //             <p>
      //               <i class="bi bi-quote quote-icon-left"></i>
      //               <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
      //               <i class="bi bi-quote quote-icon-right"></i>
      //             </p>
      //             <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
      //             <h3>Sara Wilsson</h3>
      //             <h4>Designer</h4>
      //           </div>
      //         </div><!-- End testimonial item -->
      
      //         <div class="swiper-slide">
      //           <div class="testimonial-item">
      //             <p>
      //               <i class="bi bi-quote quote-icon-left"></i>
      //               <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
      //               <i class="bi bi-quote quote-icon-right"></i>
      //             </p>
      //             <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
      //             <h3>Jena Karlis</h3>
      //             <h4>Store Owner</h4>
      //           </div>
      //         </div><!-- End testimonial item -->
      
      //         <div class="swiper-slide">
      //           <div class="testimonial-item">
      //             <p>
      //               <i class="bi bi-quote quote-icon-left"></i>
      //               <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
      //               <i class="bi bi-quote quote-icon-right"></i>
      //             </p>
      //             <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
      //             <h3>Matt Brandon</h3>
      //             <h4>Freelancer</h4>
      //           </div>
      //         </div><!-- End testimonial item -->
      
      //         <div class="swiper-slide">
      //           <div class="testimonial-item">
      //             <p>
      //               <i class="bi bi-quote quote-icon-left"></i>
      //               <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
      //               <i class="bi bi-quote quote-icon-right"></i>
      //             </p>
      //             <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
      //             <h3>John Larson</h3>
      //             <h4>Entrepreneur</h4>
      //           </div>
      //         </div><!-- End testimonial item -->
      
      //       </div>
      //       <div class="swiper-pagination"></div>
      //     </div>
      
      //   </div>
      
      // </section><!-- /Testimonials Section -->
    ?>




    

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