
<!DOCTYPE html>
<html lang="en">

@extends('layouts.head')

<body>
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>AR Home Hub</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="{{route('wel')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <!-- <li><a href="team.html">Team</a></li> -->
          <li><a href="blog.html">Blog</a></li>
        
          <li><a href="{{route('contact_us')}}">Contact Us</a></li>
          <li><a href="{{route('login')}}">LogIn</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>AR Home Hub</span></h2>
          <p class="animate__animated animate__fadeInUp"> A warm greeting to visitors, inviting them to explore your AR-powered home appliance experience.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>ApplianceAR</span></h2>
          <p class="animate__animated animate__fadeInUp">Explore high-quality 3D models of appliances from all angles for a detailed view.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>HomeARZone</span></h2>
          <p class="animate__animated animate__fadeInUp">Place appliances in your space and move around to find the perfect spot.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Step into Your Dream Home</a></h4>
              <p class="description"> Experience seamless integration with your device's camera for a smooth AR experience.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Try Before You Buy</a></h4>
              <p class="description">Share AR experiences with friends and family to get their opinions.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Bring Your Home to Life</a></h4>
              <p class="description">Buy directly from the AR experience with a simple click or tap.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Visualize Your Home Upgrades</a></h4>
              <p class="description">Access a growing library of appliances with regular updates and additions.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">AR View</a></h4>
              <p class="description">Showcase a selection of popular home appliances available on your platform, such as refrigerators, ovens, washing machines, etc. Include brief descriptions and high-quality images of each appliance.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">AR Wave</a></h4>
              <p class="description">A brief description of  website, highlighting its focus on using augmented reality technology to enhance the shopping experience for home appliances.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>Use augmented reality to see how appliances look and fit in your home before purchasing. Explore high-quality 3D models of appliances from all angles for a detailed view. Place appliances in your space and move around to find the perfect spot.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Discover Your Perfect Appliance in Augmented Reality.</h3>
            <p class="fst-italic">
            Engage in a fully immersive shopping experience where you can interact with virtual 3D models of appliances in your own space using augmented reality technology.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Make Informed Decisions with AR Home Hub's Virtual Showroom.</li>
              <li><i class="bi bi-check"></i> Shop Smarter, Shop AR: Your Home Appliance Destination.</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  @extends('layouts.footer')

</body>

</html>