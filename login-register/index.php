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
    <body style="background-image: url(../assets/img/font-site/fond.jpg)">
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
                                                    <li><a href="../">home</a></li>
                                                    <li class="active"><a href="/about-us">about us </a></li>
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
                                            <li><a href="../">HOME</a></li>
                                           
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
            <div class="breadcrumb-area pt-100" style="">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2><i class="fa fa-user fa-3x"></i> Connexion</h2>
                        
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
            <?php include_once "../footer.php"?>
            
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
        <script src="../js/cart.js"></script>
        <script src="../js/login-register.js"></script>
        <?php
            if(isset($_SESSION['id'])  AND $_SESSION['verrou']){
        ?>
            <script>window.location.href="../checkout"</script>
        <?php
        }
        ?>
    </body>
</html>
