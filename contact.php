<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>WilTel</title>
  <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
<!--header-->
<header id="site-header" class="fixed-top" style="background-color: #fff">
  <!-- top header -->
  <section class="w3l-top-header">
    <div class="container">
      <div class="top-header-2">
        <div class="d-grid main-top">
          <div class="top-headers">
            <ul>
              <li>
                 <span style="color: #3B3663" class="fa fa-phone"></span><a style="color: #3B3663" href="tel:+254726178460">+254 720625454</a>
              </li>
            </ul>
          </div>
          <div class="top-headers">
            <ul >
              <li>
                <a style="color: #3B3663"href="#facebook"><span class="fa fa-facebook"></span></a>
              </li>
              <li>
                <a style="color: #3B3663" href="#twitter"><span class="fa fa-twitter"></span></a>
              </li>
              <li>
                <a style="color: #3B3663" href="#instagram"><span class="fa fa-instagram"></span></a>
              </li>
               <li class="mr-0">
                <a style="color: #3B3663" href="login.php"><span class="fa fa-lock"></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //top header -->
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke px-0 pt-lg-0">
     <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo.png" alt="logo" title="logo" style="width: 60%;margin-top: 3%" />
  </a>
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
          <li class="nav-item @@home__active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
           <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact Us  <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <!--/search-right-->
       
        <!--//search-right-->
       
      </div>
      <!-- toggle switch for light and dark theme -->
     
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->
<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3 my-lg-5">
            <h2 class="title pt-5 mx-5">We're here to help.</h2>
            <ul class="breadcrumbs-custom-path mt-3 text-center">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact us </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->
<!-- contact-form 2 -->
<section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="contact-grids d-grid">
            <div class="contact-left">
                <h3 class="mb-3">Contact Details</h3>
                <p>We have a dedicated support center for all of your support needs. We usually get back to you within
                    12-24 hours.</p>
                <div class="cont-details">
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Company Address</h6>
                            <p>Wiltel Company, P.O Box 1258-20200, Kericho</p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Call Us</h6>
                            <p><a href="tel:+1(21) 234 4567">+254 726178460</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-envelope-o"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Email Us</h6>
                            <p><a href="mailto:info@wiltel.co.ke" class="mail">info@wiltel.co.ke</a></p>
                        </div>
                    </div>
                    <div class="cont-top margin-up">
                        <div class="cont-left text-center">
                            <span class="fa fa-life-ring"></span>
                        </div>
                        <div class="cont-right">
                            <h6>Customer Support</h6>
                            <p><a href="mailto:info@support.com" class="mail">support@wiltel.co.ke</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <h3 class="mb-3">Registration Form</h3>
                <?php if(isset($_GET["successful"])){?>
                <div class="alert alert-success">
                    Registration Succesful!!
              </div>
                <?php } ?>
                 <?php if(isset($_GET["error"])){?>
                <div class="alert alert-danger">
                    Something went wrong,Please try again!!
              </div>
                <?php } ?>
                 <?php if(isset($_GET["captcha"])){?>
                <div class="alert alert-info">
                    Please check the captcha form
              </div>
                <?php } ?>
               
              <form action="process_data.php" method="post">
                  <div class="form-group">
                    
                    <input type="text" name="company" class="form-control"  placeholder="Enter company name" required>
                  </div>
                  <div class="form-group">
                
                    <input type="text" name="fullname" class="form-control"  placeholder="Enter contact person's name" required>
                  </div>
                   <div class="form-group">
                
                    <input type="number" name="phone" class="form-control"  placeholder="Enter  phone number" required>
                  </div>
                  <div class="form-group">
                    
                    <input type="email" name="email" class="form-control"  placeholder="Enter  Email Address" required>
                  </div>
                  <div class="form-group.required">
                  
                    <input type="text" name="location" class="form-control"  placeholder="Enter physical location" required>
                  </div>
                  <div class="form-group">
                    <select name="package" required class="form-control">
                        <option value="" selected>--Choose Internet Package--</option>
                        <option value="2mbps">2 mbps @ Ksh.2,000</option>
                        <option value="2mbps">3 mbps @ Ksh.2,500</option>
                        <option value="2mbps">5 mbps @ Ksh.3,000</option>
                        <option value="2mbps">6 mbps @ Ksh.4,000</option>
                        <option value="2mbps">7 mbps @ Ksh.5,000</option>
                        <option value="2mbps">10 mbps @ Ksh.7,000</option>
                        <option value="2mbps">15 mbps @ Ksh.10,000</option>
                        <option value="2mbps">20 mbps @ Ksh.15,000</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select name="payment_method" required class="form-control">
                        <option value="" selected>--Payment Method--</option>
                        <option value="M-PESA">M-PESA</option>
                        <option value="Cheque">Cheque</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                  
                    </select>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6Lenm6AcAAAAAEvoPyenN3ovMjtEqssFiYgESMYa"></div><br>

                 
                  <button type="submit" name="btnMessage" class="btn btn-primary">SUBMIT</button>
            </form>
                
            </div>
        </div>
</section>
<!-- /contact-form-2 -->
<?php include"footer.php"; ?>