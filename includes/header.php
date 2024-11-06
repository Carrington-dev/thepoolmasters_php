<header id="header" class="header sticky-top">

<div class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="d-none d-md-flex align-items-center">
      <i class="bi bi-clock me-1"></i> Monday - Saturday, 8AM to 10PM
    </div>
    <div class="d-flex align-items-center">
      <i class="bi bi-phone me-1"></i> Call us now <?php echo "$tel"; ?>
    </div>
  </div>
</div><!-- End Top Bar -->

<div class="branding d-flex align-items-center">

  <div class="container position-relative d-flex align-items-center justify-content-end">
    <a href="/" class="logo d-flex align-items-center me-auto">
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <!-- Uncomment the line below if you also wish to use a text logo -->
      <h1 class="sitename"><?php echo "$company"; ?></h1> 
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <!-- <li><a href="#doctors">Doctors</a></li> -->
        
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <a class="cta-btn" href="index.php#appointment">Make an Appointment</a>

  </div>

</div>

</header>