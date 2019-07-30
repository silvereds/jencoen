<?php 
  session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oswan - eCommerce php5 Template</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce php5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/chosen.min.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/icofont.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bundle.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="header-area transparent-bar ptb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <a href="index.php"><img alt="" src="../assets/img/logo/logo.png"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>WANT TO TALK WITH US  +01254 265 987</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="../assets/img/icon-img/menu.png">
                                            <img class="s-close" alt="" src="../assets/img/icon-img/menu-close.png">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="/">home</a></li>
                                                    <li class="active"><a href="#">about us </a></li>
                                                    <li><a href="../shop">shop</a></li>
                                                    <!--
                                                    <li><a href="blog.php">BLOG</a></li>
                                                    -->
                                                    <li><a href="../login-register">login</a></li>
                                                     
                                                     
                                                    <li><a href="../contact">contact us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart cart-small-device">
                                  <?php include("..\cart\Cart.php") ?>
                                </div>
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="/">HOME</a></li>
                                            <li><a href="../shop">shop</a></li>
                                            <!--
                                            <li><a href="blog.php">BLOG</a></li>
                                            -->
                                            <li><a href="../login-register">login</a></li>
                                            <li><a href="../contact"> Contact us</a></li>
                                        </ul>
                                    </nav>                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart-wrapper">
                        <div class="header-cart">
                        <?php include("..\cart\Cart.php") ?>
                        </div>
                    </div>
                </div>
            </header>
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(../assets/img/font-site/fond.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>About Us</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-us-area pt-125 pb-125">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content">
                                <h1><span>OSWAN</span> WORLD MOST </h1>
                                <h2>LATGEST <span>MOTORCYCLE STORE</span></h2>
                                <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest            qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam </p>
                                <div class="question-area">
                                    <h4>HAVE ANY QUESTION? </h4>
                                    <div class="question-contact">
                                        <div class="question-icon">
                                            <i class="icofont icofont-phone"></i>
                                        </div>
                                        <div class="question-content-number">
                                            <h6> 01245 658 698</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-img">
                                <img class="tilter" src="../assets/img/banner/banner-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-area pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services orange mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="../assets/img/icon-img/3.png">
                                </div>
                                <div class="services-text">
                                    <h5>FREE SHIPPING</h5>
                                    <p>Free shipping on all order</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services yellow mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="../assets/img/icon-img/4.png">
                                </div>
                                <div class="services-text">
                                    <h5>ONLINE SUPPORT</h5>
                                    <p>Online support 24 hours a day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services purple mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="../assets/img/icon-img/5.png">
                                </div>
                                <div class="services-text">
                                    <h5>MONEY RETURN</h5>
                                    <p>Back guarantee under 5 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-services sky mb-30 text-center">
                                <div class="services-icon">
                                    <img alt="" src="../assets/img/icon-img/6.png">
                                </div>
                                <div class="services-text">
                                    <h5>MEMBER DISCOUNT</h5>
                                    <p>Onevery order over $150</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-area">
                <div class="container">
                    <div class="section-title-2 section-title-position">
                        <h2>OUR CLIENTS REVIEW</h2>
                    </div>
                    <div class="testimonial-active owl-carousel">
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="../assets/img/team/testimonial-1.jpg">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest  qulity of motorcycle also you can sell here your motorcycle it quo minus iduod maxie placeat facere possimus, omnis voluptas assumenda est, omnis dolor llendus. Temporibus autem quibusdam quoten</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>Rayed Ayash Hisham</h4>
                                            <span>COO, ASEKHA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial">
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="testimonial-img pl-75">
                                        <img alt="image" src="../assets/img/team/testimonial-2.png">
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="testimonial-content">
                                        <div class="testimonial-dec">
                                            <p><span>OSWAN</span> Lorem ipsum dolor sit amet, consectetur adipisicing , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat. Duis dolor in reprehenderit.</p>
                                        </div>
                                        <div class="name-designation">
                                            <h4>James Momen Nirob</h4>
                                            <span>CEO, ASEKHA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-area pt-120 pb-95">
                <div class="container">
                    <div class="section-title text-center mb-60">
                        <h2>Team Member</h2>
                        <p>
                            <span>OSWAN</span>
                            the most latgest bike store in the wold can serve you latest qulity of motorcycle also you can sell here your motorcycle
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="../assets/img/team/1.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Zoe Jones</h4>
                                    <span>Founder </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="../assets/img/team/2.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Sienna Nguyen</h4>
                                    <span>Manager </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="../assets/img/team/3.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Liam Ryan</h4>
                                    <span>Director </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="team-wrapper mb-30">
                                <div class="team-img">
                                    <img src="../assets/img/team/4.jpg" alt="">
                                </div>
                                <div class="team-content">
                                    <h4>Charlotte Taylor</h4>
                                    <span>Chairmen </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
              include_once("../footer.php");
            ?>
            
        </div>
        
        
        
		
		
		
		
		
		<!-- all js here -->
        <script src="../assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/isotope.pkgd.min.js"></script>
        <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/waypoints.min.js"></script>
        
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        <script src="js/cart.js"></script>
    </body>
</html>
