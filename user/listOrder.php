<?php 
 session_start();

 include_once("OrderOfUser.php");
  
  if(isset($_POST['date'])){
     
      $total_infos = getOrderUserById($_SESSION['id'],$_POST['date']);
     
    
    $adresse = $total_infos[1];
    $total_mode = $total_infos[2];
    
?>
<div class="product-cart-area fluid-padding-3 pt-10 pb-130">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <?php 
                               $nb_commandes = count($total_mode);
                               if($nb_commandes >0 )$all_articles = $total_infos[0];
                               for($j = 0; $j < $nb_commandes;$j++){
                          ?>
                                 
                            <div class="row" style="border-bottom: 1px solid #d8d8d8;color: #444;font-size: 15px;margin: 20px 0 20px;padding-bottom: 10px;text-transform: uppercase;
                              background: #f2f2f2 none repeat scroll 0 0;">
                               <div class="col-md-6">
                                   <span>commande Numéro <?php  echo $j+1 ?></span>
                               </div>
                               <div class="col-md-6">
                                    <a class="btn-style cr-btn float-right mt-2" href="#!" onclick="goTofacture($(this))" name="<?php echo $j+1?>">
                                        <span style="color:white">consulter votre facture</span>
                                    </a>
                                </div>
                            </div>
                            <div class="table-content table-responsive" id="block<?php echo $j+1?>">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">produits</th>
                                            <th class="product-price">nom produits</th>
                                            <th class="product-name">prix</th>
                                            <th class="product-price">quantité</th>
                                            <th class="product-quantity">total</th>
                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                        $nb_articles = count($all_articles[$j]);
                                        //print_r($all_articles[$j]);  
                                        //echo "<br>";
                                        for($i = 0 ; $i < $nb_articles ; $i++){
                                            if($all_articles[$j][$i][0][2] == ""){

                                      ?>
                                          <tr>
                                              <td class="product-thumbnail">
                                                  
                                              </td>
                                              <td class="product-name">
                                                   
                                              </td>
                                              <td class="product-price"><span class="amount">l'article de cette ligne n'est plus présente en stock </span></td>
                                              <td class="product-quantity">
                                                <span class="amount"></span>
                                              </td>
                                                   
                                              <td class="product-subtotal"></td>
                                              
                                          </tr>
                                      <?php
                                            
                                            }else{

                                            
                                          
                                      ?>
                                        
                                          <tr>
                                              <td class="product-thumbnail">
                                                  <a href="#"><img src="../admin/administrators/build/images/upload/<?php echo $all_articles[$j][$i][0][2] ?>" alt="" height="20px" width="20px"></a>
                                              </td>
                                              <td class="product-name">
                                                  <a href="#"><?php echo $all_articles[$j][$i][0][0] ?></a>
                                              </td>
                                              <td class="product-price"><span class="amount"><?php echo $all_articles[$j][$i][0][1] ?> fcfa</span></td>
                                              <td class="product-quantity">
                                                <span class="amount"><?php echo $all_articles[$j][$i][1] ?>  </span>
                                              </td>
                                                   
                                              <td class="product-subtotal"><?php echo $all_articles[$j][$i][1]*$all_articles[$j][$i][0][1] ?> fcfa</td>
                                              
                                          </tr>
                                      <?php
                                            }
                                      }
                                      ?> 
                                    </tbody>
                                </table>
                            </div>
                            <div class="row" style="border-bottom: 1px solid #d8d8d8;color: #444;font-size: 15px;margin: 20px 0 20px;padding-bottom: 10px;text-transform: uppercase;
                              background: #dadbd3 none repeat scroll 0 0;" id="billings-adress">
                                  <div class="col-md-6"  >
                                    <span><?php echo  $adresse[$j][0]?></span><br>
                                    <span><?php echo  $adresse[$j][1] ?></span><br>
                                  </div>
                                  <div class="col-md-6">
                                    <span> billing adress: <?php echo  $adresse[$j][3]?></span><br>
                                    <span> city: <?php
                                        
                                          if((integer)$adresse[$j][2] == 0){echo $adresse[$j][2] ;}else{
                                            echo  getCityById($adresse[$j][2]); 
                                          }
                                          ?>
                                    </span><br>
                                    <span> payment mode :<?php echo  $total_mode[$j][1]?></span><br>
                                    <span> order total :<?php echo  $total_mode[$j][0]?> fcfa</span><br>
                                  </div>
                            </div>

                          <?php
                            }
                            if($j == 0){

                                echo "<h5 class='text-center'>no order at this date</h5>";
                            }
                          ?>
                        </div>
                    </div>
                </div>
                
            </div>
    
 
 
 
<?php
  }
?>