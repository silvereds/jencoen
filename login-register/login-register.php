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
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bundle.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body style="background-image: url(assets/img/font-site/fond.jpg)">
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
                                                    <li><a href="shop.php">shop</a></li>
                                                    <!--
                                                    <li><a href="blog.php">BLOG</a></li>
                                                    -->
                                                    <li><a href="login-register.php">login</a></li>
                                                     
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
                                           
                                            <li><a href="shop.php">shop</a></li>
                                            <!--
                                            <li><a href="blog.php">BLOG</a></li>
                                            -->
                                            <li><a href="login-register.php">login</a></li>
                                             
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
            <div class="breadcrumb-area pt-255 pb-170" style="">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2><i class="fa fa-user fa-3x"></i> Mon Compte</h2>
                        <ul>
                            <li>
                                <a href="index.php">Accueil</a>
                            </li>
                            <li>Connexion</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="login-register-area ptb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active text-white" data-toggle="tab" href="#lg1">
                                        <h4> connexion </h4>
                                    </a>
                                    <a data-toggle="tab" href="#lg2" >
                                        <h4> créer un compte </h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form action="#" method="post" id="login-form">
                                                   
                                                    
                                                    <input type="text" name="user-name-connexion" placeholder="Username"
                                                     value="<?php if(isset($_COOKIE['pseudo-infos']))echo $_COOKIE['pseudo-infos']?>" class="peudoValue">

                                                    <input type="password" name="user-password" placeholder="Password">
                                                    
                                                    <div class="button-box">
                                                        <div class="login-toggle-btn">
                                                            <input type="checkbox" id="remenber" checked>
                                                            <label class="text-white">Se Souvenir de moi</label>
                                                            <a href="#" data-toggle="modal" href="remote.html" data-target="#password-forget"
                                                            class="text-white">Mot de Passe oublié?</a>
                                                        </div>
                                                        <button type="submit" class="btn-style cr-btn"><span>Connexion</span></button><br><br>
                                                        <div class="alert alert-info" id="infos-connexion" hidden="true"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="lg2" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form action="#" method="post"  id="register-form">
                                                    <input type="text" name="user-name-register" placeholder="Username"
                                                    value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username'] ?>">

                                                    <input type="password" name="user-password1" placeholder="Password"
                                                    value="<?php if(isset($_SESSION['user-password'])) echo $_SESSION['user-password'] ?>">

                                                    <input type="password" name="user-password2" placeholder="comfirm  Password"
                                                    value="<?php if(isset($_SESSION['user-password'])) echo $_SESSION['user-password'] ?>">

                                                    <input name="user-email" placeholder="email" type="email" 
                                                     value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>">

                                                    <div class="button-box">
                                                        <button type="submit" class="btn-style cr-btn"><span>Next</span></button><br><br>
                                                        <div class="alert alert-warning" id="infos-creation-compte" hidden="true"></div>
                                                    </div>
                                                </form>
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
                                               <!--real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
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
        
        <div class="modal fade" id="password-forget">
          
           <div class="modal-dialog modal-sm" role="document" >
                    <div class="modal-content">
                        
                        <div class="modal-header" style="background-color:#89989e;">
                            <p class="heading lead">Mot de passe oublié?</p>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">   
                         
                            <div class="col-md-12" style="text-align:center">
                                <form action="#" id="forgot-password">
                                    <h4 style="text-align:center">
                                     saisir votre adresse email
                                    </h4> 
                                    <input type="email"   name="mail"/> <br>
                                    <div class="row" style="margin-top:1em">
                                        <div class="update-cart col-md-3">
                                            <button class="btn-style cr-btn float-left" type="submit"><span>envoyer</span></button>
                                        </div>
                                        <div class="update-cart col-md-9" id="infos-password"></div>
                                    </div>
                                </form>
                                <br>
                                <form action="#" id="update-password" hidden="true">
                                    
                                    <input type="text"   name="code" placeholder= "votre code"/> <br> <br> 
                                    <input type="password"   name="new_pwd1" placeholder="nouveau mot de passe"/> <br> <br>
                                    <input type="password"   name="new_pwd2" placeholder="confirmer le nouveau mot de passe"/> <br> <br>
                                    <div class="row" style="margin-top:1em">
                                        <div class="update-cart col-md-3">
                                            <button class="btn-style cr-btn float-left" type="submit"><span>envoyer</span></button>
                                        </div>
                                        <div class="update-cart col-md-9" id="infos-password-update"></div>
                                    </div>
                                </form>
                                
                                
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
        <script src="js/cart.js"></script>
        <script src="js/login-register.js"></script>
        <?php
            if(isset($_SESSION['id'])  AND $_SESSION['verrou']){
        ?>
            <script>window.location.href=checkout.php;alert()</script>
        <?php
        }
        ?>
    </body>
</html>
