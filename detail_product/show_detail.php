<?php
     require_once(__DIR__."\..\paramConnectToBBd.php");

     function connect(){
        $dsn="mysql:host=".HOST.";dbname=electronic";
        $user = USER;
        $pass = PASS;
        
        try{
            $connection = new PDO($dsn,$user,$pass);
            return $connection;
            }
            catch(Exception $e)
            {
            die('Erreur : '.$e->getMessage());
            }  
     }


     function ProductDetail($id){
        $connection = connect();
        $id = (integer)$id ;
        $link = array();
        $reponse=$connection->query("SELECT * FROM produit WHERE id_prod=$id") ;
        $categorie=$connection->query("SELECT * FROM cathegorie");
        if($tab=$reponse->fetch(PDO::FETCH_NUM)){
            $sameCategorie = $connection->query("SELECT id_prod,fichier_media,nom_prod,prix_HT,descriptions FROM produit WHERE id_cath=$tab[1] AND id_prod !=$id") ;
            $avis = $connection->query("SELECT  COUNT(*) AS nb_avis FROM review WHERE id_prod=$id");
            $reviews = $connection->query("SELECT  nom,avis,date_avis FROM review WHERE id_prod=$id");
?>

        <div class="product-details-area fluid-padding-3 ptb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-img-content">
                                <div class="product-details-tab mr-40">
                                    <div class="product-details-large tab-content">
                                        <?php for($i=0 ; $i<4 ; $i++){
                                            if($i  == 0){ 
                                        ?>
                                                <div class="tab-pane active" id="pro-details<?php echo $i ?>">
                                                    <div class="easyzoom easyzoom--overlay">
                                                        <a href="../admin/administrators/build/images/upload/<?php echo $tab[5]?>" width="1200px" height="1125px">
                                                            <img src="../admin/administrators/build/images/upload/<?php echo $tab[5] ?>" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                        <?php
                                            }else{
                                             
                                        ?>
                                        <div class="tab-pane" id="pro-details<?php echo $i ?>">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a href="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]?>" width="1200px" height="1125px">
                                                    <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                        
                                    </div>
                                    <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                                       
                                        <?php for($i=0 ; $i<4 ; $i++){
                                            if($i  == 0){
                                        ?>
                                                    <a class="active" href="#pro-details<?php echo $i ?>">
                                                        <img src="../admin/administrators/build/images/upload/<?php echo $tab[5] //$link[$i][1]?>" alt="">
                                                    </a>
                                        <?php
                                            }else{
                                             
                                        ?>
                                                    <a class="active" href="#pro-details<?php echo $i ?>">
                                                        <img src="../admin/administrators/build/images/upload/<?php echo $tab[$i+6]//$link[$i][1]?>" alt="">
                                                    </a>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details-content">
                                <h2 id="nameArticle"><?php echo $tab[2]?></h2>
                                <div class="quick-view-rating">
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <i class="fa fa-star reting-color"></i>
                                    <span> ( 01 Customer Review )</span>
                                </div>
                                <div class="product-price">
                                    <span><?php echo $tab[3]?>fcfa</span>
                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Description Produit</h5>
                                    <p><?php echo $tab[6] ?></p>
                                </div>
                                <div class="product-color">
                                    <h5 class="pd-sub-title">Option Produit</h5>
                                    
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
                                    <h5 class="pd-sub-title">Partagez</h5>
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
                        <br>
                        <br>
                        <div class="blog-comment-wrapper" >
                        <?php $review = $avis->fetch()
                             
                        ?>
                        <div class="row" style="background:#f2f2ea;margin-top:2em;padding:2em 2em 2em 2em;font-size:10px">
                         
                        <h4 class="blog-dec-title" style="width:100%">avis : <?php echo $review['nb_avis']?></h4>
                        <div class="col-md-6">
                                    
                        <?php
                               
                               while($comment = $reviews->fetch()){
                        ?>
                                    <div class="single-comment-wrapper mt-35 col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <div class="blog-comment-img">
                                            <i class="fa fa-user fa-3x"></i>
                                            
                                        </div>
                                        <div class="blog-comment-content">
                                            <h4><?php echo $comment[0]?></h4>
                                            <span><?php echo $comment[2]?> </span>
                                            <p><?php echo $comment[1]?></p>
                                             
                                        </div>
                                    </div><br>
                        <?php
                               }
                        
                        
                        ?>
                        
                        </div>
                        </div>
                        </div>
                        <div class="blog-reply-wrapper mt-70 row">
                            
                            <form action="#!" id="form-avis" name="<?php echo $id ?>" class="col-md-6" >
                                <label class="control-label">votre avis sur l'article</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="text" placeholder="Votre nom" name="nom" id="nameComment">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="leave-form">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-leave">
                                            <textarea placeholder="Massage" name="comment" id="textareaComment" height="2em"></textarea>
                                            <input type="submit" value="POSTER">
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-6" style="border:1px solid">cvcvcvcv</div>
                        </div>
                    </div>
                   
                       
                            
            <div class="row col-md-12" style="padding-top:5em;margin-left: 0px;background:rgb(250,250,250)"">  
            <div class="col-md-10"><h4 class="text-uppercase pb-40 text-center">produits similaires</h4></div> <br><br>       
            <?php 
                            $j=0;
                            while($productOfSameCategorie = $sameCategorie->fetch(PDO::FETCH_NUM) AND $j<=3){
                                //print_r($productOfSameCategorie);
                          ?>
                           
                            <div class="product-width col-md-3 col-xs-4 col-lg-3" style="box-shadow:0px 0px 0px 0px">
                                <div class="product-wrapper mb-35" style="box-shadow:0px 0px 0px 0px">
                                    <div class="product-img">
                                        <a href="../product-details?id=<?php echo $productOfSameCategorie[0] ?>">
                                            <img src="../admin/administrators/build/images/upload/<?php echo $productOfSameCategorie[1] ?>" alt="" class="image-responsive img-rounded">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2019</li>
                                                <li>JENCOEN</li>
                                                <li>SDI</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="product-content-wrapper" style="background:rgba(249, 249, 249, 0.66)">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.php"><?php echo $productOfSameCategorie[2] ?></a></h4>
                                                <span>6600 RPM</span>
                                            </div>
                                            <div class="product-price">
                                                <span><?php echo $productOfSameCategorie[3] ?>fcfa</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                          <?php
                                $j++;
                             }
                          ?>
                           </div> 
                           </div>
                </div>
            </div>
    <?php 
      $avis->closeCursor();
      $reviews->closeCursor();
      $sameCategorie->closeCursor();
    }
    $reponse->closeCursor();
    $categorie->closeCursor();
  }

  function getIdProductByName($name){
    $connection = connect();
    $ok = false;
    $reponse=$connection->query("SELECT id_prod,nom_prod FROM produit");

    while($tab = $reponse->fetch(PDO::FETCH_NUM)){
        if(strcasecmp($name,$tab[1]) == 0){
            $reponse->closeCursor();
            $ok = true;
            return $tab[0];

        }
       
  }
  if(!$ok){
      return "";
  }
}
?>