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
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
         
    </head>
    <body>
        <div class="wrapper">
            <!-- header start -->
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
                                                    <li><a href="#load">shop</a></li>
                                                    <li><a href="login-register.php">login</a></li>
                                                    <li><a href="blog.php">BLOG</a></li>
                                                    <li><a href="contact.php">contact us</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart cart-small-device" id="cartContentSmallDevice">
                                    
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
                        <div class="header-cart" id="cartContent"> 
                            <?php include("cart\Cart.php") ?>
                        </div>
                    </div>
                </div>
            </header>
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/banner/banner-4.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>wishlist</h2>
                        <ul>
                            <li>
                                <a href="index.php">home</a>
                            </li>
                            <li>
                                <a href="userAccount.php">Account</a>
                            </li>
                            <li>wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-cart-area fluid-padding-3 pt-120 pb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">products</th>
                                            <th class="product-price">products name</th>
                                            <th class="product-name">price</th>
                                             
                                            <th class="product-quantity">add to cart</th>
                                            <th class="product-subtotal">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                             include_once("user\listArticlesOfWishlist.php");
                                             if(isset($_SESSION['id'])){
                                                listArticlesOfWishlist($_SESSION['id']);
                                             }else{
                                                 header("Location : userAccount.php");
                                             }
                                         ?>
                                    </tbody>
                                </table>
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
        <!-- modal animated-->
        <div class="modal fade" id="cartAnimated" tabindex="-1" role="dialog" aria-hidden="true">
    
                <div class="modal-dialog   " role="document" >
                    <div class="modal-content" >
                        
                        <div class="modal-header" style="background-color:#89989e;">
                            <p class="heading lead">Cart</p>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">   
                         
                            <div class="col-md-12" style="text-align:center">
                                <h4 id="infos-addArticle"></h4>  
                            </div>  
                            <div class="col-md-12" style="text-align:center">
                                <h4><i class="fa fa-shopping-cart fa-4x mb-3 animated rotateIn"></i></h4> 
                            </div> 
                            <div class="col-md-12" style="text-align:center">
                                <h4 id="infos-cart-total"></h4>  
                            </div>   
                            <div class="shopping-cart-btn col-md-12 row">
                                    <div class="col-md-4"></div>
                                    <div class=" col-md-4">
                                        <a class="btn-style cr-btn" href="cart.php">click here to visualize your cart</a>
                                    </div>
                                    <div class="col-md-4"></div>
                            </div>
                           
                        </div>
                        <div class="modal-footer justify-content-center">

                             
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal animated-->
            <div class="modal fade" id="cartBlock" tabindex="-1" role="dialog" aria-hidden="true">
                
                <div class="modal-dialog modal-sm" role="document" >
                    <div class="modal-content">
                        
                        <div class="modal-header" style="background-color:#89989e;">
                            <p class="heading lead">Cart</p>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">   
                         
                            <div class="col-md-12" style="text-align:center">
                                <h4>cart  blocked finalize or delete your order</h4>  
                            </div>   
                        </div>
                        <div class="modal-footer justify-content-center">

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- modal animated-->
        <div class="modal fade" id="modal-wishlist">
          
          <div class="modal-dialog modal-sm" role="document" >
                   <div class="modal-content">
                       
                       <div class="modal-header" style="background-color:#89989e;">
                           <p class="heading lead">Forgot Password</p>

                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true" class="white-text">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body row">   
                        
                           <div class="col-md-12" style="text-align:center">
                                   <h4 style="text-align:center" id="wishlist-info">
                                   enter email adress of your account
                                   </h4> 
   
                           </div>   
                       </div>
                       <div class="modal-footer justify-content-center">
                           <div class="update-cart">
                             <button class="btn-style cr-btn" data-dismiss="modal">Fermer</button>
                           </div>
                       </div>
                   </div>
               </div>
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
        <script src="js/wishlist.js"></script>
    </body>
</html>
