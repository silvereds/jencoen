<?php 
  session_start();
  
  if(isset($_GET['disconnect'])){
      if(isset($_SESSION['id']))unset($_SESSION['id']);
  }
  
  if(!isset($_SESSION['idDesArticles'])){
    
    $_SESSION['idDesArticles'] = array();
    $_SESSION['libelle'] = array();
    $_SESSION['image'] = array();
    $_SESSION['qte'] = array();
    $_SESSION ['prix'] = array();
    $_SESSION['verrou'] = false;
  }
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SDI-ecommerce - eCommerce php5 Template</title>
        <meta name="description" content="Live Preview Of SDI-ecommerce eCommerce php5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/chosen.min.css">
        <link rel="stylesheet" href="assets/css/icofont.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
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
                                    <a href="index.php"><img alt="" src="assets/img/logo/logo.000.jpg"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>VOUS POUVEZ PARLEZ AVEC NOUS  +237 693 265 987</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="assets/img/icon-img/menu.png">
                                            <img class="s-close" alt="" src="assets/img/icon-img/menu-close.png">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="/">home</a></li>
                                                    <li class="active"><a href="about-us">about us </a></li>
                                                    <li><a href="shop">shop</a></li>
                                                    <!--
                                                    <li><a href="blog.php">BLOG</a></li>
                                                    -->
                                                    <li><a href="login-register">login</a></li>
                                                     
                                                     
                                                    <li><a href="contact">contact us</a></li>
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
                                            <li><a href="/">HOME</a></li>
                                          
                                            <li><a href="shop">shop</a></li>
                                            <!--
                                            <li><a href="blog.php">BLOG</a></li>
                                            -->
                                            <li><a href="login-register">login</a></li>
                                            <li><a href="contact"> Contact us</a></li>
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
            <div class="slider-area" >
            <div class="slider-active owl-carousel">
            
                    <div class="single-slider slider-1" style="background-image: url(assets/img/banner/slider-bg.jpg);background-position: 50% -78.3px;">
                        <div  class="container pb-10">
                            sdi-ecommerçe en partenaria avec
                            <img src="assets/img/banner/orange.png" class="image-responsive">
                            &
                            <img src="assets/img/banner/mtn.png" class="image-responsive">
                         </div>
                        <div class="container">
                        
                            <div class="slider-content slider-animated-2">
                                <div class="slider-img text-center">
                                    
                                    <img class="animated" src="assets/img/font-site/bitcoin0.jpg" alt="slider images" style="opacity:0.1">
                                    
                                    
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">SDI E-COMMERCE</h6>
                                    <img class="animated" src="assets/img/icon-img/bike.png" alt="slider images">
                                </div>
                                <h2 class="animated">BIENVENU</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: url(assets/img/banner/slider-bg.jpg)">
                        <div class="container">
                            <div class="slider-content slider-animated-2">
                                <div class="slider-img text-center">
                                    <img class="animated" src="assets/img/font-site/buy0.jpg" alt="slider images">
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">SDI E-COMMERCE</h6>
                                    <img class="animated" src="assets/img/icon-img/bike.png" alt="slider images">
                                </div>
                                <h2 class="animated">BIENVENU</h2>
                            </div>
                        </div>
                    </div>
                    <div class="single-slider slider-1" style="background-image: url(assets/img/banner/slider-bg.jpg)">
                        <div class="container">
                            <div class="slider-content slider-animated-1">
                                <div class="slider-img text-center">
                                    
                                 
                                    <img class="animated" src="assets/img/font-site/buy0.jpg" alt="slider images">
 
                                </div>
                                <div class="slider-text-img">
                                    <h6 class="animated">SDI E-COMMERCE</h6>
                                    <img class="animated" src="assets/img/icon-img/bike.png" alt="slider images">
                                </div>
                                <h2 class="animated">BIENVENU</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-social">
                    <ul>
                        <li class="facebook"><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>

                    </ul>
                    <div>decouvrez les offres de la semaine<br>maintenant </div>
                </div>
                <div class="language-currency-wrapper">
                    <div class="language-currency">
                        <div class="language">
                            <select class="select-header orderby">
                                <option value="">FRANCAIS</option>
                                
                                
                            </select>
                        </div>
                        <div class="currency">
                            <select class="select-header orderby">
                                <option value="">FCFA</option>
                                
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overview-area pt-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content">
                                <h1><span>SDI-ecommerce</span>  </h1>
                                <h2><span>LA MEILLEUR BOUTIQUE EN LIGNE A VOTRE DISPOSITON</span></h2>
                                <p><span>SDI-ecommerce</span> la meilleur boutique en ligne met à votre disposition une game varriée de produits à bon prix;
                                achétez  vos produits maintenant et faites vous livrez en moins de 2 jours</p>
                                <div class="question-area">
                                    <h4>POUR PLUS DE QUESTIONS? </h4>
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
                                <img class="tilter" src="assets/img/banner/logo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="product-area pb-100" style="background:rgb(251, 250, 243)">
                <div class="container" >
                    <div class="section-title text-left mb-10 pt-10 row">
                        
                        <h3 class="col-md-6"><span>Decouvrez Nos Catégories</span></h3>
                    </div>
                
            
                <div class="tab-content jump row">
                
                            <?php 
                                  include("categorie\list-categorie-in-home.php");
                                  $cat = loadCategorie();
                                  $nb = 0;
                                  if(isset($cat[1])){
                                      $nb = $cat[1];
                                  }
                                
                                  for($i = 0 ; $i < $nb+1 ; $i++){              
                            ?>
                    
                                    <div class="product-wrapper-bundle col-md-2 col-xs-10">
                                        <div class="product-wrapper" style="border-radius:100px">
                                            <div class="product-img">
                                                <a href="shop.php?id=<?php echo $cat[0][$i][0] ?>">
                                                    <img src="admin/administrators/build/images/upload/<?php echo $cat[0][$i][2] ?>" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2019</li>
                                                        <li>SDI</li>
                                                        <li>E-COMMERCE</li>
                                                        <li>2</li>
                                                    </ul>
                                                </div>
                                                <div class="product-content-wrapper" style="background:rgba(255, 255, 255, 0.4)">
                                                    <div class="product-title-spreed" >
                                                        <h4 ><a href="product-details.php"><?php echo $cat[0][$i][1] ?></a></h4> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                             <?php      
                                }
                             ?>
                          
                     
                    </div>
                </div>
                </div>
            
            <div class="latest-product-area pt-205 pb-145 bg-img" style="background-image: url(assets/img/font-site/fond.jpg)">
                <div class="container-fluid">
                    <div class="latest-product-slider owl-carousel">
                        <?php 
                            include("promotion\list_promotion.php");
                            $promo_list = list_promo();
                            $nbInPromo = count($promo_list); 
                            for($k = 0 ; $k < $nbInPromo ; $k++){

                            
                        ?>
                        <div class="single-latest-product slider-animated-2">
                            <div class="row">
                                <div class="col-lg-7 col-md-12 col-12">
                                    <div class="latest-product-img">
                                        <img class="animated" src="../admin/administrators/build/images/upload/<?php echo $promo_list[$k][2] ?>" alt="image"  height="400px">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-12">
                                    <div class="latest-product-content">
                                        <h2 class="animated">DECOUVREZ LES DERNIERES OFFRES <br> SUR LES ARTICLES </h2>
                                        <p class="animated"><span>SDI-ecommerce</span> le grand marché en ligne </p>
                                        <div class="latest-price">
                                            <h3 class="animated">MAINTENANT A <span><?php echo $promo_list[$k][3] ?> FCFA</span></h3>
                                            <span class="animated"><?php echo $promo_list[$k][1] ?>% DE REDUCTION</span>
                                        </div>
                                        <div class="latext-btn">
                                            <a class="animated" href="product-details.php?id=<?php echo $promo_list[$k][0] ?>">J'ACHETE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="background:#f6f5f3 none repeat scroll 0 0">
                <?php
                    if($nb>0){
                        for($i = 0 ; $i < $nb+1 ; $i++){
                            $prod = getArticlesCategorieById($cat[0][$i][0]);
                            $nb_articles = count($prod);
                ?>
                            <div class="row ptb-10 pt-10">
                                <div class="container row col-md-12 ptb-15 pt-10" style="background:white">
                                    <div class="col-md-8">
                                        <span style="font-size:19px;padding-left:1em" class="text-uppercase">   
                                        <?php echo $cat[0][$i][1] ?>  <i class="fa fa-thumbs-up fa-2x" style="color:#ffb52f"></i></span>  <span style="padding-left:1em"><?php echo $cat[0][$i][3] ?></span>
                                    </div>
                                   
                                    <div class="col-md-4">
                                    <span class="pull-right"><a href="shop?id=<?php echo $cat[0][$i][0] ?>" class="btn-style cr-btn">voir plus  <i class="fa fa-arrow-circle-right"></i></a></span>
                                    </div>
                                </div> 
                                <?php
                                    for($j = 0 ; $j < $nb_articles ; $j++){
                                ?>
                                    <div class="product-wrapper-bundle col-md-2 col-xs-10 pt-10">
                                        <div class="product-wrapper" style="background:#f9f6f0 none repeat scroll 0 0;box-shadow:0 0px 0px 0px">
                                            <div class="product-img">
                                                
                                                <a href="product-details?id=<?php echo $prod[$j][0] ?>">
                                                    <img src="admin/administrators/build/images/upload/<?php echo $prod[$j][2] ?>" alt="">
                                                </a>
                                                <div class="product-item-dec">
                                                    <ul>
                                                        <li>2019</li>
                                                        <li>SDI</li>
                                                        <li>E-COMMERCE</li>
                                                        <li>2</li>
                                                    </ul>
                                                </div>
                                                <div class="" style="background:rgba(255, 255, 255,1)">
                                                    <div class="product-title-spreed" >
                                                        <h4 style="color:#127084"><a href="product-details"><?php echo $prod[$j][1] ?></a></h4> 
                                                        <h4 style="color:#127084"><?php echo $prod[$j][3] ?> FCFA</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                        
                                <?php
                                    }
                                ?>
                            </div>
                            <?php
                            }
                            ?>
                <?php
                 }   
                ?>
            </div>
            <div class="accessories-area pt-12 pb-100">
                <div class="container-fluid">
                    <div class="section-title section-fluid text-center mb-60">
                        <h2>MEILLEURES VENTES</h2>
                        <p><span>SDI-ecommerce</span>
                          le geant de l'ecommerce a votre service . itech, habillement ,
                          etc tous à votre disposition et à bon prix. 
                      </p>
                    </div>
                    <div class="accessories-wrapper">
                        <div class="product-accessories-active owl-carousel">
                        <?php 
                         
                        include("best_sellers\best-sellers.php");
                        $tab = getTheThirdBestArticle() ;
                        //print_r($tab);
                        $nb_art = count($tab);
                         
                         
                        for($i = 0; $i<$nb_art; $i++){?>
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="../product-details?id=<?php echo $tab[$i][4] ?>">
                                    <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i][2] ?>" alt="" class="image-responsive">
                                    </a>
            
                                    <div class="product-content-wrapper-2" style="background:rgba(200,200,200,0.5)">
                                        <div class="product-title-price-2 text-center">
                                            <span>Price: <?php echo $tab[$i][1] ?>  fcfa</span>
                                            <h4><a href="product-details.php"><?php echo $tab[$i][0] ?></a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>     
                        </div>
                    </div>
                </div>
            </div>
           
            
            
           <?php include_once "footer.php" ?>
		
		
		
		
		
		
		
		
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
