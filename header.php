<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
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
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  />
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
  <script>
  window.addEventListener("load", () => {
    document.querySelectorAll(".feature").forEach(el => {
      el.classList.add("animate");
    });
  });
</script>

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


    .btn-primary:hover {
      background-color: #0b5ed7;
      border-color: #0b5ed7;
    }

    .pricing-card {
  background: #f4f4f4;
overflow: hidden;
  padding-bottom: 1.5rem;
  text-align: center;
  overflow: hidden;
  height: 100%;
}

.pricing-header {
  background: #3b1c59;
  color: #fff;
  padding: 0.75rem;
  font-weight: 600;
}

.pricing-image {
  padding: 1rem;
}

.pricing-image img {
  max-height: 140px;
  object-fit: contain;
}

.speed {
  font-weight: 700;
  color: #3b1c59;
}

.users {
  font-size: 0.9rem;
  color: #555;
}

.price {
  color: #ff8c00;
  font-size: 1.6rem;
  font-weight: 700;
  margin: 0.75rem 0;
}

.price span {
  font-size: 0.8rem;
}

.buy-btn {
  background: #3b1c59;
  color: #fff;
  font-weight: 600;
  border-radius: 8px;
}

.buy-btn:hover {
  background: #2c1344;
}

    .hover-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .hover-card:hover {
      transform: scale(1.05);
    
    }
    .whatsapp-float {
    position: fixed;
    width: 35px;
    height: 35px;
    bottom:20px;   
    left: 10px;    
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
      color: #106eea ;
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
/* Center the toggle */
    .tab-toggle {
      display: flex;
      justify-content: center;
      margin-bottom: 0.1 rem;
    }

    .nav-pills {
      background: #ffffff;
      border-radius: 50px;
      padding: 0.35rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    }

    .nav-pills .nav-link {
      border-radius: 50px;
      padding: 0.6rem 1.75rem;
      font-weight: 600;
      color: #555;
    }

    .nav-pills .nav-link.active {
      background-color: #106eea ;
      color: #ffffff;
    }
    


    .plan-card {
      background-color: #fff;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      overflow: hidden;
      width: 100%;
      display: flex;
      flex-direction: column;
      text-align: center;

    }

    .plan-header {
      background: #106eea;
      color: #ffffff;
      font-weight: 600;
      padding: 0.20rem;
    }

    .plan-image {
      padding: 1.5rem;
    
      margin-top:20px;
    }

    .plan-image img {
      max-height: 160px;
      width: 100%;
      object-fit: contain;
    }

    .plan-body {
      padding: 0 1rem;
      flex: 1; /* KEY FIX */
      
    }

    .plan-speed {
      font-size: 1.6rem;
      font-weight: 700;
      color:#106eea ;
      margin-top: 0.5rem;
    }

    .plan-users {
      color: #666;
      font-size: 0.95rem;
      margin-bottom: 1rem;
    }

    .plan-features {
      background: #ffffff;
      padding: 1rem;
      border-radius: 12px;
      border: 1px solid #e6e6e6;
      font-size: 0.9rem;
      margin-bottom: 1rem;
      color:#106eea ;
    }

    .plan-price {
      font-size: 1.8rem;
      font-weight: 700;
      color: #ffb703;
      margin-bottom: 1rem;
    }

    .plan-price span {
      font-size: 0.85rem;
      font-weight: 400;
    }

    /* BUTTON FIX */
  .plan-footer {
  padding-top: 0.5rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  padding-right: 1rem;
}

@media (min-width: 768px) {
  .plan-footer {
    padding-left: 3rem;
    padding-right: 3rem;
  }
}

@media (min-width: 1200px) {
  .plan-footer {
    padding-left: 6.75rem;
    padding-right: 6.75rem;
  }
}


    .plan-btn {
      background: #106eea ;
      color: #ffffff;
      font-weight: 600;
      border-radius: 10px;
      padding: 0.75rem;
      width: 100%;
    }

    .plan-btn:hover {
      background: #0b5ed7;
      color: #ffffff;
    }

    .features {
  display: flex;
  flex-direction: column;
  gap: 18px;
  width: 300px;
}

.feature {
  display: flex;
  align-items: center;
  padding: 14px 20px;
  border-radius: 999px;
  color: white;
  font-weight: 600;
  font-size: 18px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

.icon-banner {
  width: 42px;
  height: 42px;
  background: white;
  color: #333;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 14px;
  font-size: 18px;
}

/* Color Variants */
.dark {
  background: linear-gradient(135deg, #1f1f1f, #3a3a3a);
}

.blue {
  background: linear-gradient(135deg, #0a2a73, #0f4ccf);
}

.yellow {
  background: linear-gradient(135deg, #ffb703, #ffcb3c);
  color: #fff;
}

.sky {
  background: linear-gradient(135deg, #1e88ff, #4db2ff);
}

/* Icon Colors */
.lightning { color: #f7b500; }
.lock { color: #0a2a73; }
.money { color: #ffb703; }
.data { color: #1e88ff; }

#snow {
  position: fixed;
  top: 0;
  left: 0;
  pointer-events: none;
}
    
.glow {
  text-shadow: 0 0 6px rgba(255, 215, 0, 0.7);
}

.feature {
  opacity: 0;
  transform: rotate(-20deg) translateY(25px);
  animation: featureRotateIn 0.6s ease-out forwards;
}

/* Stagger timing */
.feature:nth-child(1) { animation-delay: 0.25s; }
.feature:nth-child(2) { animation-delay: 0.5s; }
.feature:nth-child(3) { animation-delay: 0.65s; }
.feature:nth-child(4) { animation-delay: 0.8s; }

@keyframes featureRotateIn {
  to {
    opacity: 1;
    transform: rotate(0deg) translateY(0);
  }
}

  </style>
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="#">info@wiltel.co.ke</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+254 720625454</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <div class="branding d-flex align-items-cSente">

      <div class="container img-fluid position-relative d-flex align-items-center justify-content-between ">
        <a href="index.php" class="logo d-flex align-items-center">
          
          <img src="assets/img/logo2.png"  alt="logo"> 
        
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>
            <li><a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">About</a></li>
            <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">Contact</a></li>
            <li><a href="faq.php" class="<?= ($currentPage == 'faq.php') ? 'active' : '' ?>">FAQs</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>