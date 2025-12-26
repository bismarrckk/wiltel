<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>wiltel</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Updated: Dec 05 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .icon {
      width: 70px;
      height: 70px;
      color: #0b63ce;
      margin-bottom: 1rem;
    }

    .service-title {
      font-weight: 700;
    }

    .service-desc {
      color: #555;
    }

    .plan-card {
      max-width: 360px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      color:#106eea;
    }
      .plan-card2 {
    
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      color:#106eea;
    }

    .plan-badge {
      border: 5px solid #106eea;
      ;
      color: var(--primary);
      font-weight: 700;
      font-size: 22px;
      border-radius: 8px;
      display: inline-block;
      padding: 8px 18px;
      position: relative;
    }

    .plan-badge span {
      font-size: 14px;
      vertical-align: super;
    }

    .plan-badge::after {
      content: "UNLIMITED";
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      bottom: -22px;
      background: #106eea;
      color: #fff;
      font-size: 12px;
      padding: 4px 10px;
      border-radius: 6px;
      letter-spacing: 1px;
      
    }

    .plan-title {
      color: var(--primary);
      font-weight: 700;
    }

    .price {
      color: var(--primary);
      font-weight: 600;
    }

    .price strong {
      font-size: 44px;
      font-weight: 800;
    }

    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
      border-radius: 10px;
      padding: 12px 28px;
      font-weight: 600;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
      border-color: #0b5ed7;
    }


    .hover-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .hover-card:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(16, 110, 234, 0.3);
    }
    .whatsapp-float {
    position: fixed;
    width: 35px;
    height: 35px;
    bottom:20px;   /* Distance from bottom */
    left: 10px;    /* Distance from right */
    background-color: #25d366;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    z-index: 100;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s;
}

.whatsapp-float:hover {
    transform: scale(1.1);
}

.whatsapp-float img {
    width: 25px;
    height: 25px;
}
.feature-card {
      border-radius: 16px;
      color: #fff;
      padding: 2rem;
      height: 100%;
      position: relative;
      overflow: hidden;
    }

    .feature-card img {
      max-width: 100%;
      border-radius: 12px;
    }

    .badge-title {
      background: #fff;
      color: #106eea;
      font-weight: 600;
      border-radius: 8px;
      padding: 0.4rem 0.8rem;
      display: inline-block;
      margin-bottom: 1rem;
    }

    .bg-speed {
      background: linear-gradient(135deg, #7a003c, #b4005c);
    }

    .bg-reliability {
      background: #3b1c59;
    }

    .bg-support {
      
      color: #fff;
    }

    .bg-fibre {
      background: #6f9f8d;
    }

  </style>
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="info@wiltel.co.ke">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 720625454</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cSente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="faq.php">FAQs</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>