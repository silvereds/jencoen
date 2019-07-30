<?php 
  session_start();
  if(isset($_GET['remember']) AND isset($_GET['pseudo']) AND $_GET['remember'] == "true") setcookie('pseudo-infos',$_GET['pseudo'],time()+25920000); 
  if(isset($_SESSION['id'])){
    include_once("..\user\getInfosUser.php");
    $infos = getInfosUserById($_SESSION['id']);
    $secondAdresseIsExist = false;
    $secondAdress = getSecondAdressUserById($_SESSION['id']);
    if(count($secondAdress) > 0 ){
        $secondAdresseIsExist = true; 
    }
  }else{
    header('Location: ..\login-register');
  }
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
                                                    <li><a href="../">home</a></li>
                                                    <li><a href="../about-us">about us </a></li>
                                                    <li><a href="../shop">shop</a></li>
                                                    <!--
                                                    <li><a href="blog.php">BLOG</a></li>
                                                    -->
                                                    <li class="active"><a href="../login-register">login</a></li>
                                                     
                                                     
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
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(../assets/img/font-site/fond.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2> Bienvenu <?php if(isset($_COOKIE['pseudo-infos']))echo $_COOKIE['pseudo-infos']?></h2>
                        <ul>
                            <li>
                                <a href="../">home</a>
                            </li>
                            <li>Mon compte</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- checkout-area start -->
            <div class="checkout-area pt-10 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-10">
                            <a class="btn-style cr-btn pull-right" href="../?disconnect=''" style="border-radius:50px">
                                <span style="color:white">deconnexion</span>
                            </a>
                        </div>
                        <div class="col-md-12 mt-10">
                            <div class="coupon-accordion">
                                <h3><span ><a href="../wishlist"> ma wishlist</a></span></h3>
                                <!-- ACCORDION START -->
                                <h3><span id="showlogin">mes informations personnelles</span></h3>
                                <div id="checkout-login" class="coupon-content" style="border:none">
                                    <div class="coupon-info">
                                        <p class="coupon-text"> </p>
                                        
                                            <div class="checkbox-form"  >	
                                                   					
                                                 
                                                <div class="row"  >
                                                    <div class="col-md-12">
                                                       <form action="#" id="form1" class="row " style="background:#e4e4da">
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label> Nom et prénom  <span class="required">*</span></label>										
                                                                    <input type="text"   value="<?php if(isset($infos))echo $infos[0] ?>" 
                                                                    name="NameLastname"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label> Pseudonyme <span class="required">*</span></label>										
                                                                    <input type="text"   value="<?php if(isset($infos))echo $infos[5] ?>"
                                                                    name="Username"/>
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Addresse <span class="required">*</span></label>
                                                                    <input type="text"  value="<?php if(isset($infos))echo $infos[3] ?>"
                                                                    name="adresse"/>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Ville <span class="required">*</span></label>
                                                                    <input type="text" value="<?php if(isset($infos))echo $infos[4] ?>"
                                                                    name="ville"/>
                                                                    
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Email <span class="required">*</span></label>										
                                                                    <input type="email" value="<?php if(isset($infos))echo $infos[1] ?>"
                                                                    name="mail"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Phone  <span class="required">*</span></label>										
                                                                    <input type="text" value="<?php if(isset($infos))echo $infos[2] ?>"
                                                                    name="phone" />
                                                                </div>
                                                            </div>
                                                    </form>
                                                    </div>
                                                    
                                                    <div class="col-md-12" style="margin-top:1em">

                                                        <!-- save infos of first adress-->
                                                        <div class="row">
                                                             
                                                            <div class="checkout-form-list create-acc col-md-3">
                                                                <a class="btn-style cr-btn" href="#!" id="save-first-adresse">
                                                                    <span style="color:white">enregistrer</span>
                                                                </a>	
                                                                
                                                            </div>
                                                            <div class="checkout-form-list create-acc col-md-9 alert alert-info" id="state-save-first-adresse" hidden="true">	
                                                                 
                                                            </div>
                                                        </div>
                                                        <!--/save infos of first adress-->

                                                        <!--save infos of new password-->
                                                        <div class="checkout-form-list create-acc">	
                                                            <input id="cpassword" type="checkbox"/>
                                                            <label>changer mon mot de passe?</label>
                                                        </div>
                                                        <form id="form2"  action="#" class="row" hidden="true" style="background:#748f9e">
                                                            <div class="col-md-6" >
                                                                <div class="checkout-form-list">
                                                                    <label>ancirn mot de passe  <span class="required">*</span></label>										
                                                                    <input type="password" name="user-password"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Nouveau mot de passe  <span class="required">*</span></label>										
                                                                    <input type="password" name="password-to-update"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label> Confirmer  Nouveau mot de passe <span class="required">*</span></label>										
                                                                    <input type="password" name="confirm-password-to-update"/>
                                                                </div>
                                                            </div>

                                                            

                                                            <div class="row col-md-12"  id="controls-password">
                                                                <div class="checkout-form-list create-acc col-md-6">
                                                                    <a class="btn-style cr-btn" href="#!" id="save-newPassword">
                                                                        <span style="color:white">enregistrer le Nouveau mot de passe</span>
                                                                    </a>	
                                                                    
                                                                </div>
                                                                <div class="checkout-form-list create-acc col-md-6 alert alert-info" id="state-save-newPassword" hidden="true">	
                                                                    
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!--//save infos of new password-->								
                                                </div>
                                                <div class="different-address">
                                                    <div class="ship-different-title" style="border:none">
                                                        <h3 >
                                                            <label>Infos sur votre 2eme  addresse?</label>
                                                            <input id="ship-box" type="checkbox" />
                                                        </h3>
                                                    </div>
                                                    <div id="ship-box-info" class="row">
                                                         
                                                        <form id="form3" action="#" class="row" style="background:#d5efe4"> 
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Nom et prénom <span class="required">*</span></label>										
                                                                    <input type="text" value="<?php if($secondAdresseIsExist)echo $secondAdress[0]  ?>" name="Name"/>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Addresse <span class="required">*</span></label>
                                                                    <input type="text" value="<?php if($secondAdresseIsExist)echo $secondAdress[4] ?>" name="adresse"/>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Ville<span class="required">*</span></label>
                                                                    <input type="text" value="<?php if($secondAdresseIsExist)echo $secondAdress[3] ?>" name="ville"/>
                                                                </div>
                                                            </div>
                                                        
                                                            
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Email <span class="required">*</span></label>										
                                                                    <input type="email" value="<?php if($secondAdresseIsExist)echo $secondAdress[1] ?>" name="mail"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="checkout-form-list">
                                                                    <label>Phone  <span class="required">*</span></label>										
                                                                    <input type="text" value="<?php if($secondAdresseIsExist)echo $secondAdress[2] ?>" name="phone"/>
                                                                </div>
                                                            </div>
                                                        
                                                            <div    id="controls-second-adress" class="row col-md-12">
                                                                    <div class="checkout-form-list create-acc col-md-3">
                                                                        <a class="btn-style cr-btn" href="#!" id="save-second-adress">
                                                                            <span style="color:white">enregistrer</span>
                                                                        </a>	
                                                                        
                                                                    </div>
                                                                    <div class="checkout-form-list create-acc col-md-8 alert alert-info" id="state-save-second-adress" hidden="true">	
                                                                        
                                                                    </div>
                                                            </div>	
                                                        </form>							
                                                    </div>
                                                    
                                                </div>													
                                            </div>

                                       <!-- </form>-->
                                    </div>
                                </div>
                                <!-- ACCORDION END -->	
                                <!-- ACCORDION START -->
                                <h3><span id="showcoupon"><i class="zmdi zmdi-favorite"></i>historique de mes commandes</span></h3>
                                   <div id="checkout_coupon" class="coupon-checkout-content">
                                        <div class="row">
                                            <div class="col-md-3"><label>choisir date  <span class="required">*</span></label></div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">										
                                                    <input type="date" id="date"/>
                                                </div>
                                            </div>
                                            <div class="checkout-form-list create-acc col-md-3">
                                                <a class="btn-style cr-btn" href="#!" id="show-order">
                                                    <span style="color:white">afficher les détails</span>
                                                </a>	                   
                                            </div>
                                        </div>
                                        <div class="row" id="order-of-selected-date"  ></div>
                                    </div>
                                </div>
                            </div>
                                <!-- ACCORDION END -->	
                            							
                            </div>
                        </div>
                    </div>
</div>
                                       
                        
            </div>
            <!-- checkout-area end -->	
            <?php include_once "../footer.php"?>
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
        <script src="../js/userAccount.js"></script>
        
    </body>
</html>
