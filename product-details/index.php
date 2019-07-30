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
        <link rel="stylesheet" href="../assets/css/easyzoom.css">
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
                                <div class="header-cart cart-small-device" id="cartContentSmallDevice">
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
                        <div class="header-cart" id="cartContent">
                          <?php include("..\cart\Cart.php") ?>
                        </div>
                    </div>
                </div>
            </header>
            <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(../assets/img/font-site/fond.jpg)">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>product details </h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>product details </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php
             if(isset($_GET['id'])){
             include_once("..\detail_product\show_detail.php") ; 
             ProductDetail($_GET['id']);  
            }
            ?>
            <?php include_once "../footer.php"?>
            
                   <!-- modal animated-->
            <div class="modal fade" id="cartAnimated" tabindex="-1" role="dialog" aria-hidden="true">
                
                <div class="modal-dialog   " role="document" >
                    <div class="modal-content" >
                        
                        <div class="modal-header" style="background-color:#89989e;">
                            <p class="heading lead">Panier</p>

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
                                        <a class="btn-style cr-btn" href="../panier">Mon Panier</a>
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
                            <p class="heading lead">Panier</p>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">   
                         
                            <div class="col-md-12" style="text-align:center">
                                <h4>votre panier est verrouillé finaliser la commande que vous avez initialiser ou annuler cette commande</h4>  
                            </div>   
                        </div>
                        <div class="modal-footer justify-content-center">

                             
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        </div>   
        <div class="modal fade" id="modal-wishlist">
          
          <div class="modal-dialog modal-sm" role="document" >
                   <div class="modal-content">
                       
                       <div class="modal-header" style="background-color:#89989e;">
                           <p class="heading lead">wishlist</p>

                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true" class="white-text">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body row">   
                        
                           <div class="col-md-12" style="text-align:center">
                                   <h4 style="text-align:center" id="wishlist-info">
                                    
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
        <script src="../assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="../assets/js/popper.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/isotope.pkgd.min.js"></script>
        <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/waypoints.min.js"></script>
        <script src="../js/product-details.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>
        <script>
            $("#form-avis").submit(function(e){
                e.preventDefault();
                var form_comment = $(this).serialize();
                form_comment = form_comment+'&id_prod='+$(this).attr('name');
                var date = new Date();
                var bloc = '<div class="single-comment-wrapper mt-35">\
                                        <div class="blog-comment-img">\
                                        <i class="fa fa-user fa-3x"></i>\
                                        </div>\
                                        <div class="blog-comment-content">\
                                            <h4>'+$("#nameComment").val()+'</h4>\
                                            <span>'+date.toString()+ '</span>\
                                            <p>'+$("#textareaComment").val()+'</p>\
                                        </div>\
                                    </div>'
                
                
                $.ajax({
                        url : '../detail_product/saveComments.php',
                        type : 'post',
                        data: form_comment,
                        dataType : 'html',
                        success : function(htmlData,statut){    
                          
                        if(htmlData == "ok"){ 
                            $(".blog-comment-wrapper").append(bloc)
                            $("#textareaComment").val("")
                            $(".blog-comment-wrapper").focus();

                        }else{
                            alert(htmlData);  
                            
                        } 
                        },
                        error : function(resultat, statut, erreur){
                            $("#load").html('<span>erreur de connection au serveur recommencez...</span>'); 
                        }
                    })

            })
        </script>

        
    </body>
</html>