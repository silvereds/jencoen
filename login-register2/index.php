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
                                                    <li><a href="/">home</a></li>
                                                    <li class="active"><a href="../about-us">about us </a></li>
                                                    <li><a href="shop.php">shop</a></li>
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
            <div class="breadcrumb-area pt-200" style=" ">
                <div class="container-fluid">
                    <div class="breadcrumb-content text-center">
                        <h2>login  register step2</h2>
                        
                    </div>
                </div>
            </div>
            <div class="login-register-area ptb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                              
                                    
                                   
                                        <h4 class="text-center" style="color:#ffb52f">  register step2 </h4><br>
                                  
                                  
                                 
                                     
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form  method="post" action="<?= $_SERVER["PHP_SELF"] ?>" id="register-form2">
                                                    
                                                    <?php 
                                                        if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['user-password'])){
                                                    ?>
                                                            <h5 style="color:#787878"><?php echo $_SESSION['username'] ?></h5>
                                                            <h5 style="color:#787878"><?php echo $_SESSION['email'] ?></h5><br>
                                                    <?php
                                                        }else{
                                                    ?>
                                                       <script> document.location.href="../login-register" </script>
                                                    <?php
                                                        }
                                                    ?>
                                                   
                                                    <input type="text" name="userNameLastname" placeholder="nom et prénom">
                                                    
                                                    <input type="text" name="phone" placeholder="téléphone ex:675454545" >
                                                    <p style="color:white">ville de residence</p>
                                                    <select  name="ville" placeholder="city">
                                                       <option>yaounde</option>
                                                       <option>douala</option>
                                                       <option>baffoussam</option>
                                                       <option>dschang</option>
                                                       <option>kribi</option>
                                                       <option>buea</option>
                                                       <option>bamenda</option>
                                                       <option>maroua</option>
                                                       <option>bertoua</option>
                                                       <option>ngaoundéré</option>
                                                    </select><br><br><br>
                                                    <input type="text" name="adresse" placeholder="adresse ex:akwa(douala);bastos(yaounde)">
                                                    <div class="button-box">
                                                        <button type="submit" class="btn-style cr-btn"><span>Register</span></button><br><br>
                                                        <div class="alert alert-warning" id="infos-creation-compte-step2"  hidden="true"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once "../footer.php" ?>
            
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
             $("#register-form2").submit(function(e){
                e.preventDefault();
                var formRegister2 = $(this).serialize();
                
                $.ajax({
                    url : '../user/verifyDataUser2.php',
                    type : 'post',
                    data:formRegister2,
                    dataType : 'html',
                    success : function(htmlData,statut){
                        
                        if(htmlData == "checkout" || htmlData == "userAccount"){
                            document.location.href="../"+htmlData;
                        }else{
                             
                            $("#infos-creation-compte-step2").attr('hidden',false)
                            $("#infos-creation-compte-step2").html(htmlData);
                        }
                    },
                    error : function(resultat, statut, erreur){
                    alert('<span>erreur de connection au serveur recommencez...</span>'); 
                    }
                })
            })
        </script>
    </body>
</html>
