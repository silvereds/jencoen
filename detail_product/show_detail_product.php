<?php 
  require_once(__DIR__."\..\paramConnectToBBd.php");
  function ProductDetail($id){
    $dsn="mysql:host=".HOST.";dbname=electronic";
    $user = USER;
    $pass = PASS;
    $id = (integer)$id ;
    try{
        $connection = new PDO($dsn,$user,$pass);
        }
        catch(Exception $e)
        {
        die('Erreur : '.$e->getMessage());
        }    
     $link = array();
     $reponse=$connection->query("SELECT * FROM produit WHERE id_prod=$id") ;
     $categorie=$connection->query("SELECT * FROM cathegorie") ;
     if($tab=$reponse->fetch(PDO::FETCH_NUM)){
        $sameCategorie = $connection->query("SELECT id_prod,fichier_media,nom_prod,prix_HT,descriptions FROM produit WHERE id_cath=$tab[1]") ;
       ?>
                <div class="product-details-area fluid-padding-3 ptb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    <div class="product-details-large tab-content">
                                        
                                        <?php 
                                            $i=1;
                                            while($productOfSameCategorie = $sameCategorie->fetch(PDO::FETCH_NUM)){
                                            $link[$i] = $productOfSameCategorie;    
                                            if($productOfSameCategorie[0] == $id){
                                                 
                                        ?>
                                         
                                            <div class="tab-pane active" id="pro-details<?php echo $i ?>">
                                                <div class="easyzoom easyzoom--overlay">
                                                    <a href="../admin/administrators/build/images/upload/<?php  echo $tab[$i+6]//$productOfSameCategorie[1]?>">
                                                        <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]//echo $productOfSameCategorie[1]?>" alt=""
                                                        height="586" width="660">
                                                    </a>
                                                </div>
                                            </div>
                                        <?php 

                                            }else{

                                        ?>
                                                <div class="tab-pane" id="pro-details<?php echo $i ?>">
                                                    <div class="easyzoom easyzoom--overlay">
                                                        <a href="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]//echo $productOfSameCategorie[1]?>">
                                                            <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]//echo $productOfSameCategorie[1]?>" alt=""
                                                            height="586" width="660px">
                                                        </a>
                                                    </div>
                                                </div>

                                        <?php 

                                               }
                                                    $i++;
                                                }
                                        ?>  
                                         
                                    </div>
                                    <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                                        <?php 
                                            $i=1;
                                            //count($link) onclick='showDetail(<?php echo "\"$infos\"" 
                                            while($i <= 2){
                                                 
                                                $infos = $link[$i][0];
                                                 
                                                if($i == $id){
                                        ?>
                                        <a class="active" href="#pro-details<?php echo $i ?>">
                                            <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]//$link[$i][1]?>" alt="" name="<?php echo $link[$i][0]?>"
                                              >
                                        </a>
                                        <?php 
                                                }else{
                                        ?>
                                         <a   href="#pro-details<?php echo $i ?>" >
                                        <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]//$link[$i][1]?>" alt="" name="<?php echo $link[$i][0]?>"
                                         >
                                        </a>
                                        <?php
                                        }
                                             $i++;
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-content">
                                <h2 id="nameArticle"> <?php echo $tab[2]?></h2>
                                <div class="quick-view-rating">
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <span> ( 01 Customer Review )</span>
                                </div>
                                <div class="product-price">
                                    <span id="priceArticle"><?php echo $tab[3]?>fcfa</span>
                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Product Overview</h5>
                                    <p id="pubArticle"><?php echo $tab[6] ?></p>
                                </div>
                                <div class="product-color">
                                    <h5 class="pd-sub-title">Product settings</h5>
                                    
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="2" name="qtybutton" class="cart-plus-minus-box" id="qteArticle">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style cr-btn" href="#!" name="<?php echo $tab[0] ?>" id="addToCart" onclick="addTocartWithQte($(this))"><span>add to cart</span></a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover cr-btn" href="#!" name="<?php echo $tab[0] ?>" id="addToWishlist" onclick="addToWishlist($(this))"><span><i class="icofont icofont-heart-alt"></i></span></a>
                                    </div>
                                </div>
                                <div class="product-categories">
                                    <h5 class="pd-sub-title">Categories</h5>
                                    <ul>
                                       <?php 
                                            while($cat = $categorie->fetch()){
                                       ?>
                                        <li>
                                            <a href="shop.php?id=<?php echo $cat[0]  ?>"><?php echo $cat[1] ?> ,</a>
                                        </li>
                                        <?php 
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div class="product-share">
                                    <h5 class="pd-sub-title">Share</h5>
                                    <ul>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php 
      $sameCategorie->closeCursor();
    }
    $reponse->closeCursor();
    $categorie->closeCursor();
  }
?>