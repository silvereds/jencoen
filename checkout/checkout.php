<?php 
  session_start();
  if(isset($_GET['remember']) AND isset($_GET['pseudo']) AND $_GET['remember'] == "true") setcookie('pseudo-infos',$_GET['pseudo'],time()+25920000) 
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
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/img/font-site/credit-card.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>checkout page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>checkout page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- checkout-area start -->
            <?php
                include_once("user\getInfosUser.php");
                $secondAdresseIsExist = false;
                if(isset($_SESSION['id']) AND count($_SESSION['idDesArticles']) > 0 AND $_SESSION['verrou']){
                    $infos = getInfosUserById($_SESSION['id']);
                    $secondAdress = getSecondAdressUserById($_SESSION['id']);
                    if(count($secondAdress) > 0 ){
                        $secondAdresseIsExist = true; 
                    }
            ?>
            <div class="checkout-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="coupon-accordion">
                                
                                <!-- ACCORDION START -->
                                <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                                <div id="checkout_coupon" class="coupon-checkout-content">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input type="text" placeholder="Coupon code" />
                                                <input type="submit" value="Apply Coupon" />
                                            </p>
                                        </form>
                                    </div>
                                </div>
                                <!-- ACCORDION END -->						
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <form action="#" id="other-adresse">
                                <div class="checkbox-form">						
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                         
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label> Name and LastName<span class="required">*</span></label>										
                                                <input type="text" placeholder="" value="<?php echo $infos[0] ?>"  disabled/>
                                            </div>
                                        </div>
                 
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" value="<?php echo $infos[3] ?>"  disabled/>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" value="<?php echo $infos[4] ?>"  disabled/>
                                            </div>
                                        </div>
                                       
                                        
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>										
                                                <input type="email" value="<?php echo $infos[1] ?>"  disabled/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>										
                                                <input type="text" value="<?php echo $infos[2] ?>"  disabled/>
                                            </div>
                                        </div>
                                       							
                                    </div>
                                    <div class="different-address">
                                        <div class="ship-different-title">
                                            <h3>
                                                <label>Ship to a different address?</label>
                                                <input id="ship-box" type="checkbox" />
                                            </h3>
                                        </div>
                                        <div id="ship-box-info" class="row">
                                                     
                                                    <div class="col-md-12">
                                                        <div class="checkout-form-list">
                                                            <label> Name <span class="required">*</span></label>										
                                                            <input type="text"   name="First Name"
                                                            value="<?php if($secondAdresseIsExist)echo $secondAdress[0]  ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="checkout-form-list">
                                                            <label>Last Name <span class="required">*</span></label>										
                                                            <input type="text"   mame="Last Name"/>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <div class="checkout-form-list">
                                                            <label>Address <span class="required">*</span></label>
                                                            <input type="text" placeholder="ex : akwa nord"  name="adresse" value="<?php if($secondAdresseIsExist)echo $secondAdress[4] ?>"/>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-12">
                                                        <div class="checkout-form-list">
                                                            <label>Town / City <span class="required">*</span></label>
                                                            <input type="text" placeholder="ex : yaoundé"  name="ille" value="<?php if($secondAdresseIsExist)echo $secondAdress[3] ?>"/>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-md-12">
                                                        <div class="checkout-form-list">
                                                            <label>Email Address <span class="required">*</span></label>										
                                                            <input type="email" value="<?php if($secondAdresseIsExist)echo $secondAdress[1] ?>" name="mail"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="checkout-form-list">
                                                            <label>Phone  <span class="required">*</span></label>										
                                                            <input type="text" placeholder="ex:6 79 67 78 90" name="phone" 
                                                            value="<?php if($secondAdresseIsExist)echo $secondAdress[2] ?>"/>
                                                        </div>
                                                    </div>
                                       							
                                        </div>
                                        <div class="order-notes">
                                            <div class="checkout-form-list mrg-nn">
                                                <label>Order Notes</label>
                                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                            </div>									
                                        </div>
                                    </div>													
                                </div>
                            </form>
                        </div>	
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>							
                                        </thead>
                                        <tbody>
                                            <?php 
                                              $total = 0 ;
                                              for($i = 0 ; $i < count($_SESSION['libelle']) ; $i++){
                                                
                                                $total = $total + $_SESSION['prix'][$i]*$_SESSION['qte'][$i];
                                            ?>
                                                    <tr class="cart_item">
                                                        <td class="product-name">
                                                          <?php echo htmlspecialchars($_SESSION['libelle'][$i]) ?>
                                                          <strong class="product-quantity">
                                                           × <?php echo htmlspecialchars($_SESSION['qte'][$i]) ?>
                                                          </strong>
                                                        </td>
                                                        <td class="product-total">
                                                            <span class="amount">
                                                              <?php echo $_SESSION['prix'][$i]*$_SESSION['qte'][$i] ?> fcfa
                                                            </span>
                                                        </td>
                                                    </tr>
                                              <?php
                                               }
                                              
                                              ?>
                                             
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount"><?php echo $total ?> Fcfa</span></td>
                                            </tr>
                                            <tr class="cart-subtotal">
                                                <th>Tax</th>
                                                <td><span class="amount"><?php echo $total*5/100 ?> Fcfa</span></td>
                                            </tr>
                                            <tr class="cart-subtotal">
                                                <th>Tax driving</th>
                                                <td><span class="amount"><?php echo "1000" ?> Fcfa</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount"><?php echo $total + $total*5/100 +1000 ?> Fcfa</span></strong>
                                                </td>
                                            </tr>								
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method mt-40">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="faq">
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">
                                                    <a  class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-1" onclick="mode($(this))" id="mode0">
                                                     Orange Money<img src="assets/img/font-site/85dc3d3758c7b322196efd4c849348a1418b3e53.jpeg" width="40px" height="5px" />
                                                    </a></h5>
                                                </div>
                                                <div id="payment-1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Disabled</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-2" onclick="mode($(this))" id="mode1">
                                                     Mobile Monney<img src="assets/img/font-site/mobile-money.jpg" width="40px" height="5px"/></a></h5>
                                                </div>
                                                <div id="payment-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Disabled</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title">
                                                    <a data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#payment-0" onclick="mode($(this))" id="mode2">
                                                     Payement à la livraison</a></h5>
                                                </div>
                                                <div id="payment-0" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>rassurer vous d'avoir le montant total de la commande dans vos compte orange money ou mtn 
                                                        mobile money lorsque nos livreurs arriverons il vous donnerons un numéro pour un transfert 
                                                        d'argent du montant considéré.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Place order" id="finalizeButtonCheckout"/>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="ignore  order" id="delete-order"/>
                                        </div>
                                        <br>
                                        <div class="alert alert-warning" id="infos-order" hidden="true">
                                             
                                        </div>								
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
               }else{

            ?>
                <script> window.location.href = "shop.php" </script>
            <?php     
                     
               }
            ?>
            <!-- checkout-area end -->
            <br><br><br><br>	
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
                                                <div class="mc-news" aria-hidden="true">
                                                  <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                                </div>
                                                <div class="clear">
                                                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                </div>
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
        <div class="modal fade" id="state-order" tabindex="-1" role="dialog" aria-hidden="true">
                
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
                                <h4 style="text-align:center">
                                   your order has been saved with success<br>
                                   your must visualize history order and print the facture in private space<br>
                                </h4>  
                            </div>   
                        </div>
                        <div class="modal-footer justify-content-center">
                          
                              
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
        <script>
                var modeId = parseInt("2");

                function mode(mode){
                    modeId = parseInt("2");

                    if(mode.attr('id').length == 5 && (mode.attr('id')[4] == '0' || mode.attr('id')[4] == '1' || mode.attr('id')[4] == '2')){
                        modeId = parseInt(mode.attr('id')[4])
                    }
                    //alert(modeId)
                }

                $("#finalizeButtonCheckout").click(function(e){

                    if($("#ship-box")[0].checked){
                            var adresse = $("#ship-box-info input")
                            
                                data = 'Name='+adresse[0].value+'& Lastname='+adresse[1].value+'&adresse='+adresse[2].value+'&ville='+adresse[3].value+'& mail='+adresse[4].value+'&phone='+adresse[5].value
                                data = data+'& order-note='+ $("#checkout-mess").val()+'&idMode='+modeId
                            
                            $.ajax({
                                url : 'user/verifyDataOfOtherAddresse.php',
                                type : 'post',
                                data: data,
                                dataType : 'html',
                                success : function(htmlData,statut){
                                    
                                    if(htmlData == ""){
                                        $("#state-order").modal("show")
                                    }else{
                                        
                                        $("#infos-order").attr('hidden',false)
                                        $("#infos-order").html(htmlData);
                                    }
                                },
                                error : function(resultat, statut, erreur){
                                alert('<span>erreur de connection au serveur recommencez...</span>'); 
                                }
                            })
                        }else{
                            $.ajax({
                                url : 'user/finilizeCheckout.php',
                                type : 'post',
                                data: 'order-note='+$("#checkout-mess").val()+'&idMode='+modeId,
                                dataType : 'html',
                                success : function(htmlData,statut){
                                    
                                    if(htmlData == ""){
                                        $("#state-order").modal("show")
                                        
                                    }else{
                                        
                                        $("#infos-order").attr('hidden',false)
                                        $("#infos-order").html(htmlData);
                                    }
                                },
                                error : function(resultat, statut, erreur){
                                    $("#infos-order").html('<span>erreur de connection au serveur recommencez...</span>'); 
                                }

                            })
                        }
                  })


                  $("#state-order").on("hidden.bs.modal",function(){
                    window.location.href="userAccount.php"
                  })

                  $("#delete-order").click(function(){
                    $.ajax({
                                url : 'cart/emptyCart.php',
                                type : 'post',
                                dataType : 'html',
                                success : function(htmlData,statut){
                                    window.location.href="userAccount.php"
                                },
                                error : function(resultat, statut, erreur){
                                  alert('<span>erreur de connection au serveur recommencez...</span>'); 
                                }

                            })
                  })
        </script>
    </body>
</html>
