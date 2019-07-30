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
            <div class="breadcrumb-area pt-255 pb-170"  style="background-image: url(assets/img/font-site/fond.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>Cart page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Cart page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-cart-area pt-120 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">
                                <table id="tableOfArt">
                                    <thead>
                                        <tr>
                                            <th class="product-name">products</th>
                                            <th class="product-price">products name</th>
                                            <th class="product-name">price</th>
                                            <th class="product-price">quantity</th>
                                            <th class="product-quantity">total</th>
                                            <th class="product-subtotal">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                             $nbArticle = count($_SESSION['idDesArticles']);

                                             $total = 0;
                                             echo "<script> var nbArticles = parseInt(\"$nbArticle\")</script>";
                                             if($nbArticle <= 0){
                                        ?>
                                              <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="text-center"><h2>Panier Vide <br> <img src="assets/img/font-site/cart.gif"></h2></td>
                                                <td></td>
                                              </tr>   
                                        <?php   
                                             }else{
                                                   
                                                   for($i = 0 ; $i < $nbArticle ; $i++){
                                                     $total = $total + $_SESSION['prix'][$i]*$_SESSION['qte'][$i];  
                                             
                                        ?>
                                                    <tr id="tr<?php echo $_SESSION['idDesArticles'][$i] ?>">
                                                        <td class="product-thumbnail">
                                                            <a href="#"><img src="../admin/administrators/build/images/upload/<?php echo $_SESSION['image'][$i]?>" width="120px" height="150px" alt=""></a>
                                                        </td>
                                                        <td class="product-name">
                                                            <a href="#!"><?php echo htmlspecialchars($_SESSION['libelle'][$i]) ?></a>
                                                        </td>
                                                        <td class="product-price"><span class="amount"><?php echo htmlspecialchars($_SESSION['prix'][$i])?> fcfa</span></td>
                                                        <td class="product-quantity">
                                                            <div class="quantity-range">
                                                                <input class="input-text qty text" type="number" step="1" min="0" value="<?php echo htmlspecialchars($_SESSION['qte'][$i]) ?>" 
                                                                title="Qty" size="4" id="input<?php echo $_SESSION['idDesArticles'][$i] ?>">
                                                            </div>
                                                        </td>
                                                        <td class="product-subtotal"><?php echo $_SESSION['prix'][$i]*$_SESSION['qte'][$i] ?> fcfa</td>
                                                        <td class="product-cart-icon product-subtotal"><a href="#!" onclick="deleteOfCart($(this))" name="<?php echo $_SESSION['idDesArticles'][$i] ?>"><i class="ti-trash"></i></a></td>
                                                    </tr>
                                        <?php 
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cart-shiping-update">
                                <div class="cart-shipping">
                                    <a class="btn-style cr-btn" href="shop.php">
                                        <span>continue shopping</span>
                                    </a>
                                </div>
                                <div class="update-checkout-cart">
                                    <div class="update-cart">
                                        <button class="btn-style cr-btn" onclick="updateCart()"><span>update</span></button>
                                    </div>
                                    <div class="update-cart">
                                        <a class="btn-style cr-btn" href="#!" id="checkout">
                                            <span>checkout</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-12" id="infos-update-cart" style='text-align:center'></div>
                    <?php /*
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <div class="discount-code">
                                <h4>enter your discount code</h4>
                                <div class="coupon">
                                    <input type="text">
                                    <input class="cart-submit" type="submit" value="enter">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="shop-total">
                                <h3>cart total</h3>
                                <ul>
                                    <li>
                                        sub total
                                        <span><?php echo $total ?> fcfa</span>
                                    </li>
                                    <li>
                                        tva
                                        <span><?php echo  $total*5/100 ?> fcfa</span>
                                    </li>
                                    <li class="order-total">
                                        tax driving
                                        <span>1000</span> fcfa
                                    </li>
                                    <li>
                                        order total
                                        <span><?php echo $total + $total*5/100 +1000?> fcfa</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-btn text-center mb-15">
                                <a href="#">payment</a>
                            </div>
                            <div class="continue-shopping-btn text-center">
                                <a href="shop.php?id=40">continue shopping</a>
                            </div>
                        </div>
                    </div>
                     */?>
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
        <script>
            $("#checkout").click(function(){
                
                if(nbArticles > 0){

                    $.ajax({
                            url : 'user/verifyIfclientIsConnect.php',
                            type : 'post',
                            dataType : 'html',
                            success : function(htmlData,statut){
                                if(htmlData == "IS_CONNECTED"){

                                    document.location.href="checkout.php"

                                }else{

                                    document.location.href="login-register.php"
                                    
                                }
                            },
                            error : function(resultat, statut, erreur){
                                $("#infos-update-cart").html("<p style='text-align:center;font-size:19px'>error occured please rebegin</p>") 
                            }
                        })
                }else{
                    $("#infos-update-cart").html("<p style='text-align:center;font-size:19px'>your cart is empty</p>")
                }
            })    
        </script>
    </body>
</html>
