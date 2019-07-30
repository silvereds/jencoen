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
                                                    <li class="active"><a href="../about-us">about us </a></li>
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
            <div class="breadcrumb-area pt-255 pb-170"  style="background-image: url(../assets/img/font-site/fond.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        
                        <ul>
                            <li>
                                <a href="#">Accueil</a>
                            </li>
                            <li>Mon Panier</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="product-cart-area pt-20 pb-130">
                <div class="container" style="background:rgb(255,255,255)">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-content table-responsive">
                                <table id="tableOfArt">
                                    <thead>
                                        <tr>
                                            <th class="product-name">produits</th>
                                            <th class="product-price">nom produits</th>
                                            <th class="product-name">prix</th>
                                            <th class="product-price">quantité</th>
                                            <th class="product-quantity">total</th>
                                            <th class="product-subtotal">supprimer</th>
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
                                                <td class="text-center"><h2>Panier Vide <br> <img src="../assets/img/font-site/cart.gif"></h2></td>
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
                                        <span>continuer le shopping</span>
                                    </a>
                                </div>
                                <div class="update-checkout-cart">
                                    <div class="update-cart">
                                        <button class="btn-style cr-btn" onclick="updateCart()"><span>mise à jour</span></button>
                                    </div>
                                    <div class="update-cart">
                                        <a class="btn-style cr-btn" href="#!" id="checkout">
                                            <span>commander</span>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-12" id="infos-update-cart" style='text-align:center'></div>
                    
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <div class="discount-code">
                                <h4>entrer votre code promotionnel</h4>
                                <div class="coupon">
                                    <input type="text">
                                    <input class="cart-submit" type="submit" value="enter">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="shop-total">
                                <h3> total panier</h3>
                                <ul>
                                    <li>
                                        total
                                        <span><?php echo $total ?> fcfa</span>
                                    </li>
                                    <li class="order-total">
                                        frais de transport
                                        <span>1000  fcfa</span>
                                    </li>
                                    <li>
                                        order total
                                        <span><?php echo $total +1000?> fcfa</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="continue-shopping-btn text-center">
                                <a href="../shop?#load">continuer le shopping</a>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>
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
        <script>
            $("#checkout").click(function(){
                
                if(nbArticles > 0){

                    $.ajax({
                            url : '../user/verifyIfclientIsConnect.php',
                            type : 'post',
                            dataType : 'html',
                            success : function(htmlData,statut){
                                if(htmlData == "IS_CONNECTED"){

                                    document.location.href="../checkout"

                                }else{

                                    document.location.href="../login-register"
                                    
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
