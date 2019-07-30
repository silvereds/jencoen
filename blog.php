<?php session_start()?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oswan - eCommerce php5 Template</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce php5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <style type="text/css">
            .testimonial-active::before {
               background: #fff none repeat scroll 0 0;
               }
            .testimonial-active.owl-carousel .owl-nav div {
               color: #837676;
                
               background:white;
               padding:1em 1em 1em 1em;
            }
        </style>
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="header-area transparent-bar ptb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <a href="index.php"><img alt="" src="assets/img/logo/logo.png"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>WANT TO TALK WITH US  +01254 265 987</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="assets/img/icon-img/menu.png">
                                            <img class="s-close" alt="" src="assets/img/icon-img/menu-close.png">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="index.php">home</a></li>
                                                    <li class="active"><a href="about-us.php">about us </a></li>
                                                    <li><a href="shop.php?id=40">shop</a></li>
                                                    <li><a href="login-register.php">login</a></li>
                                                    <li><a href="#">pages</a>
                                                        <ul>
                                                            <li><a href="about-us.php">about us</a></li>
                                                            <li><a href="cart.php">cart page</a></li>
                                                            <li><a href="checkout.php">checkout</a></li>
                                                            <li><a href="wishlist.php">wishlist</a></li>
                                                            <li><a href="login-register.php">login</a></li>
                                                            <li><a href="contact.php">contact</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">blog</a>
                                                        <ul>
                                                            <li><a href="blog.php">blog</a></li>
                                                            <li><a href="blog-details.php">blog details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="contact.php">contact us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart cart-small-device">
                                  <?php include("cart\Cart.php") ?>
                                </div>
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="index.php">HOME</a></li>
                                             
                                            <li><a href="shop.php?id=40">shop</a></li>
                                            <li><a href="login-register.php">login</a></li>
                                            <li><a href="blog.php">BLOG</a></li>
                                            <li><a href="contact.php"> Contact us</a></li>
                                        </ul>
                                    </nav>                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart-wrapper">
                        <div class="header-cart">
                           <?php include("cart\Cart.php") ?>
                        </div>
                    </div>
                </div>
            </header>
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>blog sidebar</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>blog sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-area pt-120 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="product-sidebar-area pr-30">
                                <div class="sidebar-widget pb-55">
                                    <h3 class="sidebar-widget">Search Products</h3>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search Products...">
                                            <button><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget pb-50">
                                    <h3 class="sidebar-widget">by categories</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <?php           
                                                include_once("categorie/list-categories.php");
                                                loadCategorie("");  
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget pb-60">
                                    <h3 class="sidebar-widget">related post</h3>
                                    <div class="best-seller">
                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="#"><img src="assets/img/product/product-12.jpg" alt=""></a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="#">Minimal White Shoes</a></h3>
                                                <span>October 14, 2017</span>
                                            </div>
                                        </div>
                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="#"><img src="assets/img/product/product-13.jpg" alt=""></a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="#">Minimal White Shoes</a></h3>
                                                <span>October 25, 2017</span>
                                            </div>
                                        </div>
                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="#"><img src="assets/img/product/product-14.jpg" alt=""></a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="#">Minimal White Shoes</a></h3>
                                                <span>October 20, 2017</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="sidebar-widget mb-55">
                                    <h3 class="sidebar-widget">follow us </h3>
                                    <div class="blog-social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="icofont icofont-social-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="icofont icofont-social-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#">
                                                    <i class="icofont icofont-social-pinterest"></i>
                                                </a>
                                            </li>
                                            <li class="vimeo">
                                                <a href="#">
                                                    <i class="icofont icofont-social-vimeo"></i>
                                                </a>
                                            </li>
                                            <li class="tumblr">
                                                <a href="#">
                                                    <i class="icofont icofont-social-tumblr"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <div class="col-lg-8" >
                             
                                      
                            <div class="testimonial-area" style="background:white">
                                <div class="container"  style="background:white" style="border:1px solid blue">
                                     
                                    <div class="testimonial-active owl-carousel">
                                        <div class="single-testimonial">
                                            <div class="row"   style="background:white">
                                                <div class="col-lg-6 col-md-6" >
                                                    <div class="blog-hm-wrapper " >
                                                        <div class="blog-img" >
                                                            <a href="blog-details.php"  >
                                                                <img src="assets/img/blog/blog-hm-2.jpg" alt="image"  >
                                                            </a>
                                                            <div class="blog-date">
                                                                <h4>22 February, 2018</h4>
                                                            </div>
                                                            <div class="blog-hm-social">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="blog-hm-content">
                                                            <h3><a href="blog-details.html">Motorbike1 Racing at October</a></h3>
                                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6" >
                                                    <div class="blog-hm-wrapper " >
                                                        <div class="blog-img" >
                                                            <a href="blog-details.php"  >
                                                                <img src="assets/img/blog/blog-hm-2.jpg" alt="image"  >
                                                            </a>
                                                            <div class="blog-date">
                                                                <h4>22 February, 2018</h4>
                                                            </div>
                                                            <div class="blog-hm-social">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="blog-hm-content">
                                                            <h3><a href="blog-details.html">Motorbike2 Racing at October</a></h3>
                                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-testimonial">
                                            <div class="row">
                                                <div class= "col-lg-6 col-md-6" >
                                                    <div class="blog-hm-wrapper " >
                                                        <div class="blog-img" >
                                                            <a href="blog-details.php"  >
                                                                <img src="assets/img/blog/blog-hm-2.jpg" alt="image"  >
                                                            </a>
                                                            <div class="blog-date">
                                                                <h4>22 February, 2018</h4>
                                                            </div>
                                                            <div class="blog-hm-social">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="blog-hm-content">
                                                            <h3><a href="blog-details.html">Motorbike3 Racing at October</a></h3>
                                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6" >
                                                    <div class="blog-hm-wrapper " >
                                                        <div class="blog-img" >
                                                            <a href="blog-details.php"  >
                                                                <img src="assets/img/blog/blog-hm-2.jpg" alt="image"  >
                                                            </a>
                                                            <div class="blog-date">
                                                                <h4>22 February, 2018</h4>
                                                            </div>
                                                            <div class="blog-hm-social">
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="blog-hm-content">
                                                            <h3><a href="blog-details.html">Motorbike4 Racing at October</a></h3>
                                                            <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest qulity of motorcycle soucan sell here your motorcycle it quo </p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                      </div>   
                    </div>
                     
                </div>
            </div>
            <div class="newsletter-area">
                <div class="container">
                    <div class="newsletter-wrapper-all theme-bg-2">
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-12">
                                <div class="newsletter-img bg-img" style="background-image: url(assets/img/banner/newsletter-bg.png)">
                                    <img alt="image" src="assets/img/team/newsletter-img.png">
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-12">
                                <div class="newsletter-wrapper text-center">
                                    <div class="newsletter-title">
                                        <h3>Subscribe our newsletter</h3>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form action="#" method="post" id="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email here..." required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer-top pt-210 pb-98 theme-bg">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-logo">
                                        <a href="index.php">
                                            <img src="assets/img/logo/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-about">
                                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest ulity of motorcycle soucan sell here your motorcycle it quo </p>
                                        <div class="footer-support">
                                            <h5>FOR SUPPORT</h5>
                                            <span> 01245 658 698 (Toll Free)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30 pl-60">
                                    <div class="footer-widget-title">
                                        <h3>QUICK LINK</h3>
                                    </div>
                                    <div class="quick-links">
                                        <ul>
                                            <li><a href="about-us.php">About us</a></li>
                                            <li><a href="#">Service</a></li>
                                            <li><a href="#">Inventory</a></li>
                                            <li><a href="shop.php">Shop</a></li>
                                            <li><a href="blog-sidebar.php">Blog</a></li>
                                            <li><a href="#">Conditions</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>LATEST TWEET</h3>
                                    </div>
                                    <div class="food-widget-content pr-30">
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 
10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 
10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you 
10 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>CONTACT INFO</h3>
                                    </div>
                                    <div class="food-info-wrapper">
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Address</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>276 Jhilli Nogor, 4th folor, Momen Tower, Main Town, New Yourk</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Phone</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>+090 12568 369 987</p>
                                                <p>+090 12568 369 987</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Web</span>
                                            </div>
                                            <div class="food-info-content">
                                                <a href="#">info@oswanmega.com</a>
                                                <a href="#">www.oswanmega.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom ptb-35 black-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="copyright">
                                    <p>©Copyright, 2018 All Rights Reserved by <a href="https://freethemescloud.com/">Free themes Cloud</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="footer-payment-method">
                                    <a href="#"><img alt="" src="assets/img/icon-img/payment.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
        
        
		
		
		
		
		<!-- all js here -->
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="js/cart.js"></script>
    </body>
</html>
