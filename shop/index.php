<?php 
  session_start();
 
  if(!isset($_SESSION['idDesArticles'])){
    $_SESSION['idDesArticles'] = array();
    $_SESSION['libelle'] = array();
    $_SESSION['image'] = array();
    $_SESSION['qte'] = array();
    $_SESSION ['prix'] = array();
    $_SESSION['verrou'] = false;
  }
  require_once("..\paramConnectToBBd.php");
?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>JENCOEN - eCommerce</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce php5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="../assets/css/chosen.min.css">
        <link rel="stylesheet" href="../assets/css/jquery-ui.css">
        <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="../assets/css/themify-icons.css">
        <link rel="stylesheet" href="../assets/css/icofont.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/bundle.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <style type="text/css">
           .modal {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 1050;
                display: none;
                width: 100%;
                height: 100%;
                overflow: hidden;
                outline: 0;
            }
            
        </style>
    </head>
    <body >
        <div class="wrapper">
            <!-- header start -->
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
                                                     
                                                    <li><a href="#!">shop</a></li>
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
                                            
                                            <li><a href="#!">shop</a></li>
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
                        <h2>Shop Page</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Shop page</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shop-wrapper fluid-padding-2 pt-120 pb-150" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="product-sidebar-area pr-60">
                                <div class="sidebar-widget pb-55">
                                    <h3 class="sidebar-widget">Search Products</h3>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="search" placeholder="rechercher un article...">
                                            <button onclick="search()"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar-widget pb-50">
                                    <h3 class="sidebar-widget">by categories</h3>
                                    <div class="widget-categories">
                                        <ul>
                                            <?php           
                                                include("../categorie/list-categories.php");
                                                loadCategorie("PRINCIPAL_PAGE");  
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar-widget mb-55">
                                <img src="../assets/img/font-site/cart.gif" height="250px">
                                <!--
                                    <h3 class="sidebar-widget">by price</h3>
                                    <div class="price_filter mr-60">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <label>price : </label>
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                            </div>
                                            <button type="button">Filter</button> 
                                        </div>
                                    </div>
                                -->
                                </div>
                                <div class="sidebar-widget mb-55">
                                  
                                </div>
                                <div class="sidebar-widget mb-45">
                                    
                                </div>
                                <div class="sidebar-widget mb-55">
                                   
                                </div>
                                <div class="sidebar-widget">
                                    <h3 class="sidebar-widget">best seller</h3>
                                    <div class="best-seller">
                                    <?php 
                         
                                        include("..\best_sellers\best-sellers.php");
                                        $tab = getTheThirdBestArticle() ;
                                        
                                        $nb_art = count($tab);
                                        
                                        
                                        for($i = 0; $i<$nb_art; $i++){?>

                                        <div class="single-best-seller">
                                            <div class="best-seller-img">
                                                <a href="product-details.php?id=<?php echo $tab[$i][4] ?>">
                                                     <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i][2] ?>" alt="" width="100px" height="100px">
                                                </a>
                                            </div>
                                            <div class="best-seller-text">
                                                <h3><a href="product-details.php?id=<?php echo $tab[$i][4] ?>"><?php echo $tab[$i][0] ?></a></h3>
                                                <span><?php echo $tab[$i][1] ?>  fcfa</span>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="shop-topbar-wrapper  row">
                            
                                <div class="grid-list-options col-md-2">
                                    <ul class="view-mode">
                                        <li class="active"><a href="#product-grid" data-view="product-grid"><i class="ti-layout-grid2"></i></a></li>
                                        <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
                                      
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <div class="shop-product-sorting nav">
                                        <a class="active" data-toggle="tab" href="#new-product">ARTICLES</a>  
                                    </div>
                                    <!--
                                    <ul class="view-mode">
                                        <li><a href="#product-list" data-view="product-list">CATEGORIE</a></li>
                                    </ul>-->
                                </div>
                                <div class="product-sorting col-md-6 row" >
                                     
                                        <div class="sorting sorting-bg-1 col-md-6">
                                            <form class="form-inline">
                                              
                                                <select class="select" id="input-sort">
                                                    <option value="">Default softing </option>
                                                    <option value="ASC">Price (Low &gt; High)</option>
                                                    <option value="DESC">Price (High &gt; Low)</option>>
                                                </select>
                                            </form>    
                                        </div>
                                        <div class="sorting sorting-bg-1 col-md-6">
                                            <form>   
                                            
                                                <select class="select" id="input-limit">
                                                     
                                                     
                                                    <option value="6">06</option>
                                                    <option value="9">09</option>
                                                </select>
                                            </form>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="grid-list-product-wrapper tab-content">

                                <div id="new-product" class="product-grid product-view tab-pane active">
                                    <div class="row" id="load">

                                    </div>
                                </div>
                                <div class="paginations text-center mt-20">
                                    <ul  id="pagination"></ul>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once "../footer.php"?>

            <!-- modal detail -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="icofont icofont-close" aria-hidden="true"></span>
                </button>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="qwick-view-left">
                                <div class="quick-view-learg-img">
                                    <div class="quick-view-tab-content tab-content">
                                        <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                            <img src="../assets/img/quick-view/l1.jpg" alt="" width="320px" height="380px">
                                        </div>
                                        <div class="tab-pane fade" id="modal2" role="tabpanel">
                                            <img src="../assets/img/quick-view/l2.jpg" alt="" width="320px" height="380px">
                                        </div>
                                        <div class="tab-pane fade" id="modal3" role="tabpanel">
                                            <img src="../assets/img/quick-view/l3.jpg" alt="" width="320px" height="380px">
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-list nav" role="tablist">
                                    <a class="active" href="#modal1" data-toggle="tab" role="tab" id="modal11">
                                        <img src="../assets/img/quick-view/s1.jpg" alt="" width="100px" height="112px">
                                    </a>
                                    <a href="#modal2" data-toggle="tab" role="tab" id="modal22">
                                        <img src="../assets/img/quick-view/s2.jpg" alt="" width="100px" height="112px">
                                    </a>
                                    <a href="#modal3" data-toggle="tab" role="tab" id="modal33">
                                        <img src="../assets/img/quick-view/s3.jpg" alt="" width="100px" height="112px">
                                    </a>
                                </div>
                            </div>
                            <div class="qwick-view-right">
                                <div class="qwick-view-content">
                                    <h3 id="title">Aeri Carbon Helmet</h3>
                                    <div class="price">
                                        <span class="new" id="price">$90.00</span>
                                         
                                    </div>
                                    <div class="rating-number">
                                        <div class="quick-view-rating">
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                            <i class="fa fa-star reting-color"></i>
                                        </div>
                                    </div>
                                    <p id="pub">  </p>
                                    <div class="quick-view-select">
                                        
                                    </div>
                                    <div class="quickview-plus-minus">
                                        <div class="cart-plus-minus">
											<input type="text" value="2" name="qtybutton" class="cart-plus-minus-box" id="qteArticle">
										</div>
                                        <div class="quickview-btn-cart">
                                            <a class="btn-style" href="#!" id="cart" name="" onclick="addTocartWithQte($(this))">add to cart</a>
                                        </div>
                                        <div class="quickview-btn-wishlist">
                                            <a class="btn-hover" href="#!" id="wishlist" onclick="addToWishlistInModal($(this))" ><i class="icofont icofont-heart-alt" ></i></a>
                                        </div>
                                        

                                    </div>
                                    <div class="quickview-btn-wishlist" id="animateInModalDetailsProduct">
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
         <!-- modal animated-->
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
        
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script> 
        <script src="../js/loadProduct.js"></script>
        <script src="../js/cart.js"></script>
         
        <script>
           function search(){
               window.location.href = "../search?name="+$("input[type=search]").val();
           }
        </script>
<?php
        if(isset($_GET['id'])){
        ?>
            <script>
                var id = parseInt(<?php echo $_GET["id"] ?>); 
                $.ajax({
                    url : '../list-product/loadProductOnClick.php',
                    type : 'post',
                    data:  'id='+id+'& order='+$("#input-sort").val(),
                    dataType : 'json',
                    success : function(phpData,statut){
                        
                        data = JSON.stringify(phpData)
                        data = JSON.parse(data)
                        if(data.data.length != 0){
                            product = data.data;
                            listArticles($("#input-limit").val())
                        }  
                        
                    },
                    error : function(resultat, statut, erreur){
                        $("#load").php('<span>erreur de connection au serveur recommencez...</span>'); 
                    }
                })

                $("#exampleModal").on("hidden.bs.modal",function(){
                    $("#animateInModalDetailsProduct").html("")
                })
            </script>
        <?php
                }else{
                    $connection = connect();     

                    $reponse=$connection->query("SELECT id_cath FROM cathegorie") ;
            
                    if($tab=$reponse->fetch(PDO::FETCH_NUM)){
                        $reponse->closeCursor();
                        $id = $tab[0];
                    }
                    
            ?>
            <script>
                var id = parseInt(<?php echo $id ?>); 
                $.ajax({
                    url : '../list-product/loadProductOnClick.php',
                    type : 'post',
                    data:  'id='+id+'& order='+$("#input-sort").val(),
                    dataType : 'json',
                    success : function(phpData,statut){
                        
                        data = JSON.stringify(phpData)
                        data = JSON.parse(data)
                        if(data.data.length != 0){
                            product = data.data;
                            listArticles($("#input-limit").val())
                        }  
                        
                    },
                    error : function(resultat, statut, erreur){
                        $("#load").php('<span>erreur de connection au serveur recommencez...</span>'); 
                    }
                })
            </script>
            <?php

        }
        
        
        ?>

</body>
</html>
