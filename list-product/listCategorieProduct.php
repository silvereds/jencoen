 <?php          require_once(__DIR__."/../paramConnectToBBd.php");
                $dsn="mysql:host=".HOST.";dbname=electronic";
                $user = USER;
                $pass = PASS;
                try{
                    $connection = new PDO($dsn,$user,$pass);
                    }
                    catch(Exception $e)
                    {
                    die('Erreur : '.$e->getMessage());
                    }    
                
                $nb=$connection->query("SELECT COUNT(id_prod) as nbArt FROM produit WHERE id_cath=40") ;
                if($nb1 = $nb->fetch()){
                $reponse=$connection->query("SELECT id_prod,nom_prod,prix_HT,tva,fichier_media  FROM produit WHERE id_cath=40") ;
                //affiche/4
                   
                  $j = 0;
                  
                  while($j < round($nb1['nbArt'] / 2)){ 
                  ?>
                    

                        <!--Indicators-->
                        <ol class="carousel-indicators">
                          <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                          <li data-target="#multi-item-example" data-slide-to="1"></li>
                          <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                          <!--First slide-->
                          <div class="item active">
                      <?php
                      $i = 0;
                      
                      while($i<2 AND $tab = $reponse->fetch()){
                      
                      ?>
<!--
                      <div class="row">
                          <div class="col-md-12" style="padding:1em 1em 1em 1em">
                            <div class="product-thumb">
                              <div class="image product-imageblock"> 
                                <a href="product_detail_page.php"> 
                                  <img data-name="product_image" src="<?php //echo "./../admin/administrators/build/images/upload/$tab[4]"?>" alt="iPod Classic" title="iPod Classic" class="img-responsive"> 
                                  <img src="<?php //echo //"./../admin/administrators/build/images/upload/$tab[4]"?>" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a>
                                <div class="button-group text-center">
                                  <div class="wishlist"><a href="#" id="<?php //echo "w".$tab[0] ?>"><span>wishlist</span></a></div>
                                  <div class="quickview"><a href="#" id="<?php //echo "q".$tab[0] ?>"><span>Quick View</span></a></div>
                                  
                                  <div class="add-to-cart"><a href="#" id="<?php //echo "ad".$tab[0] ?>"><span>Add to cart</span></a></div>
                                </div>
                              </div>
                              <div class="caption product-detail text-center">
                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
                                <h6 data-name="product_name" class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem"><?php //echo $tab[1] ?></a></h6>
                                <span class="price"><span class="amount"><span class="currencySymbol">$</span><?php //echo $tab[2]+($tab[2]*$tab[3]/100)?></span>
                                </span>
                              </div>
                            </div>    
                          </div>
                      </div> 
                      -->
                      <div class="col-md-4">
                     
                     <!-- Grid column -->
                    
                       <!-- Card -->
                       <div class="card card-cascade wider card-ecommerce">
                         <!-- Card image -->
                         <div class="view view-cascade overlay">
                           <img src="<?php echo "./../admin/administrators/build/images/upload/$tab[4]"?>" class="card-img-top" alt="sample photo">
                           <a>
                             <div class="mask rgba-white-slight"></div>
                           </a>
                         </div>
                         <!-- Card image -->
                         <!-- Card content -->
                         <div class="card-body card-body-cascade text-center">
                           <!-- Category & Title -->
                           <a href="" class="text-muted">
                             <h5>Photography</h5>
                           </a>
                           <h4 class="card-title">
                             <strong>
                               <a href=""><?php echo $tab[1] ?></a>
                             </strong>
                           </h4>
                           <!-- Description -->
                           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima veniam elit.</p>
                           <!-- Card footer -->
                           <div class="card-footer px-1">
                             <span class="float-left font-weight-bold">
                               <strong>fcfa<?php echo $tab[2]+($tab[2]*$tab[3]/100)?></strong>
                             </span>
                             <span class="float-right">
                               <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                                 <i class="fa fa-eye grey-text ml-3"></i>
                               </a>
                               <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                 <i class="fa fa-heart grey-text ml-3"></i>
                               </a>
                             </span>
                           </div>
                         </div>
                         <!-- Card content -->
                       </div>
                       <!-- Card -->
                     
                     <!-- Grid column -->
                     </div>
                      <?php 
                          $i++;
                         }
                        ?>
                    </div>
                  </div>
                
                 <?php
                   $j++; 
                  }
                  
                  $reponse->closeCursor();
                }
                $nb->closeCursor();
              
              ?>
