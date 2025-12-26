
<?php include "header.php" ?>
  <main class="main">

    <!-- Hero Section -->
    
      <section class="hero d-flex align-items-start align-items-lg-center">
      <div class="container-fluid">
  <div class="row gx-0">
    
    <div class="col-lg-3  order-lg-1  flex-column justify-content-center" data-aos="zoom-out">
            <h1 style="color:#fff"class="glow">Power your business with WilTel’s high-quality fiber internet.</h1>
            <p style="color:#2c2c2c">Experience lightning-fast connectivity and take your digital presence to the next level with our high-speed fiber internet</p>
            <div style="margin-top:5px">
              <a href="contact.php" class="btn-get-started">Get Started</a>
              
            </div>
          </div>

    <div class="col-lg-6 order-2 order-lg-1 p-0 align-items-center" data-aos="fade-up" style="text-align:center;" >
      
      <img src="assets/img/banner2v2cropped.png"
           alt="Promo banner"
           class="img-fluid w-100" style=" margin-top:10px">
           
    </div>

   <div class="col-12 col-lg-3 order-2 order-lg-1 p-0 d-flex justify-content-center text-center"
     data-aos="fade-up">
    <div class="features">
    <div class="feature dark">
      <span class="icon-banner lightning">
        <i class="fa-solid fa-bolt"></i>
      </span>
      <span class="text">99% uptime</span>
    </div>

    <div class="feature blue">
      <span class="icon-banner lock">
        <i class="fa-solid fa-lock"></i>
      </span>
      <span class="text">Secure & Reliable</span>
    </div>

    <div class="feature yellow">
      <span class="icon-banner money">
        <i class="fa-solid fa-sack-dollar"></i>
      </span>
      <span class="text">Affordable</span>
    </div>

    <div class="feature sky">
      <span class="icon-banner data">
        <i class="fa-solid fa-signal"></i>
      </span>
      <span class="text">Unlimited Data</span>
    </div>
  </div>
  </div>
        
  </div>
</div>


    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section py-2 text-center">

      <div class="container">
        <h2 class="text-primary fw-bold mb-5">Our Services</h2>

        <div class="row g-4 justify-content-center">

          <!-- Home Internet -->
          <div class="col-12 col-md-6 col-lg-3 " data-aos="fade-up">
            <div class="service-card">
              <div class="icon mx-auto">
                <svg viewBox="0 0 24 24" fill="currentColor" class="w-100 h-100">
                  <path d="M12 3l9 8h-3v9h-5v-6H11v6H6v-9H3z" />
                </svg>
              </div>
              <h5 class="service-title">Home Internet</h5>
              <p class="service-desc">Unlimited broadband for all your online engagements.</p>
            </div>
          </div>

          <!-- Business Internet -->
          <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up">
            <div class="service-card">
              <div class="icon mx-auto">
                <svg viewBox="0 0 24 24" fill="currentColor" class="w-100 h-100">
                  <path
                    d="M10 2h4a2 2 0 012 2v2h4a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h4V4a2 2 0 012-2zm0 4h4V4h-4v2z" />
                </svg>
              </div>
              <h5 class="service-title">Business Internet</h5>
              <p class="service-desc">Stable, high-speed business connections.</p>
            </div>
          </div>

          <!-- Enterprise Solutions -->
          <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up">
            <div class="service-card">
              <div class="icon mx-auto">
                <svg viewBox="0 0 24 24" fill="currentColor" class="w-100 h-100">
                  <path d="M10 2h4v4h-4V2zm-6 6h4v4H4V8zm12 0h4v4h-4V8zM10 14h4v4h-4v-4z" />
                </svg>
              </div>
              <h5 class="service-title">Enterprise Solutions</h5>
              <p class="service-desc">Business-Focused Custom Software Solutions</p>
            </div>
          </div>

          <!-- CCTV Services -->
          <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up">
            <div class="service-card">
              <div class="icon mx-auto">
                <!-- CCTV Camera Icon -->
                <svg viewBox="0 0 24 24" fill="currentColor" class="w-100 h-100">
                  <path d="M2 7l10-4 10 4v4l-10 4-10-4V7zm10 6.5l8-3.2V8l-8 3.2V13.5zM4 10.3l6 2.4v2.3l-6-2.4v-2.3z" />
                  <path d="M14 15h2v4h-2z" />
                </svg>
              </div>
              <h5 class="service-title">CCTV Services</h5>
              <p class="service-desc">24/7 surveillance and security solutions.</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- /Featured Services Section -->
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
      <h2>Plans</h2>
         <p><span>Check Out our</span> <span class="description-title">Plans</span></p>
      </div><!-- End Section Title -->
        
<div class="container py-2">

  <!-- TOGGLE TABS -->
  <div class="tab-toggle">
    <ul class="nav nav-pills" id="toggleTabs" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active"
                id="monthly-tab"
                data-bs-toggle="pill"
                data-bs-target="#monthly"
                type="button"
                role="tab">
          Home
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link"
                id="yearly-tab"
                data-bs-toggle="pill"
                data-bs-target="#yearly"
                type="button"
                role="tab">
          Business
        </button>
      </li>
    </ul>
  </div>


  <div class="tab-content text-center">

    <div class="tab-pane fade show active" id="monthly" role="tabpanel">
    
      
<div class="container py-2">
  <div class="row g-4">

   
    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up"   >
      <div class="plan-card">
        <div class="plan-header">Lite</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/price.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">6 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> <b> </b></b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
               Unlimited internet supply of up to 6 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.1,500 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
         <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
       
      </div>
      </div>
    </div>


    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Starter</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature44.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">10 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> <b> </b></b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 10 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.2,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Basic</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature47.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">16 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> <b> </b></b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 16 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.3,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Standard</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature41.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">20 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> <b> </b></b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 20 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.3,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Bronze</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature42.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">40 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> <b> </b></b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 40 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.4,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Gold</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature50.png" alt="Plan">
        </div> 
              
        <div class="plan-body">
          <div class="plan-speed">60 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> <b> </b></b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
               Unlimited internet supply of up to 60 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.5,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
    </div>

    <div class="tab-pane fade" id="yearly" role="tabpanel">
    
      
<div class="container py-5">
   <div class="row g-4">

   
    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up" >
      <div class="plan-card">
        <div class="plan-header">Basic</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature40.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">16 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b>fiber</b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
               Unlimited internet supply of up to 16 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.2,500 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Standard</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature46.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">20 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted  <b> fiber</b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 20 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.3,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Bronze</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature1.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">40 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> fiber</b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 40 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.4000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Silver</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature49.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">50 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> fiber</b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 50 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.5,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Gold</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature48.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">80 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> fiber</b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 80 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.8,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4 hover-card" data-aos="fade-up">
      <div class="plan-card">
        <div class="plan-header">Platinum</div>
        <div style="background-color: #eeeeee;">
        <div class="plan-image">
          <img src="assets/img/feature43.png" alt="Plan">
        </div>

        <div class="plan-body">
          <div class="plan-speed">120 Mbps</div>
          <div class="plan-users">Enjoy 30 days of uninterrupted <b> fiber</b> internet</div>

          <div class="plan-features row mx-0">
            <div class="col-8">
              Unlimited internet supply of up to 120 Mbps
            </div>
            <div class="col-4 border-start">
              24/7 Support
            </div>
          </div>

          <div class="plan-price">
            Ksh.10,000 <span>/Month</span>
          </div>
        </div>

        <div class="plan-footer">
          <a href="contact.php" class="btn plan-btn">
            PICK THIS PLAN
          </a>
        </div>
      </div>
      </div>
    </div>
  </div>

</div>
    </div>

  </div>

</div>
 

    </section>
    
       
    <!-- Pricing Section for fiber -->

    <!-- /Pricing Section -->

    <!-- About Section -->

    <!-- Skills -->


    <!-- Stats Section -->

    <!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Features</h2>
        <p><span>Check Out our</span> <span class="description-title">Features</span></p>
      </div><!-- End Section Title -->

     
<div class="container py-2">
  <div class="row g-4">

    <!-- Extraordinary Speed -->
    <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <div class="feature-card bg-speed h-100" style="background:url('assets/img/feature2.png') center/cover no-repeat; height:300px;">
        <span class="badge-title">Blazing-Fast Connectivity</span>
        <p>Experience ultra-fast Wiltel Fiber,<br>
             delivering lightning-quick speeds <br>
             and 
            rock-solid reliability </p>
        
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-12 col-lg-6">
      <div class="row g-4">

        <!-- Reliability -->
        <div class="col-12" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-card bg-reliability">
            <div class="row align-items-center">
              <div class="col-md-6">
                <span class="badge-title">Uninterrupted Performance</span>
                <p>Enjoy always-on internet that works 24/7,delivering stable,un-interrupted connectivity</p>
              </div>
              <div class="col-md-6">
                <img src="assets/img/feature4.jpg" alt="Reliability">
              </div>
            </div>
          </div>
        </div>

        <!-- Support + Pricing -->
        <div class="col-12 col-md-6 "  data-aos=fade-up data-aos-delay="100" style="background:url('assets/img/feature8.jpg')">
          <div class="feature-card bg-support h-100">
            <span class="badge-title">Security</span>
            <p>We put privacy and security first, so you can enjoy our services</p>
          </div>
        </div>

        <div class="col-12 col-md-6"  data-aos="fade-up"  style="background:url('assets/img/feature7.jpeg')">
          <div class="feature-card bg-price h-100">
            <span class="badge-title">Affordability</span>
            <p>Get more for less no data caps-stream,work and browse without limits </p>
          </div>
        
        </div>
     <div class="col-12" data-aos=fade-up data-aos-delay="100" style="background:url('bg.jpg')">
      <div class="feature-card bg-fibre">
        <div class="row align-items-center">
          <div class="col-md-4">
            <img src="assets/img/feature5.jpg" alt="Fibre">
          </div>
          <div class="col-md-8" style="margin-top: 10px;">
            <span class="badge-title">24/7 Support</span> 
            <p>Our support team is available 24/7,ready to help whenever you need us.</p>
          </div>
        </div>
      </div>
    </div>

      </div>
   
    </div>

    <!-- fiber Powered -->
   

  </div>
</div>
 
       
        </div>

      </div>

    </section>
    <!-- /Services Section -->
        <section id="stats" class="stats section" style="margin-bottom:30px">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 light-backround" >

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center light-backround">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1400" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-map"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Coverage areas</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-briefcase"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="207" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Businesses connected</p>
            </div>
          </div><!-- End Stats Item -->

        </div>
      </div><!-- End Stats Item -->

      </div>

      </div>

    </section>
  </main>
  
 

 <?php include "footer.php" ?>