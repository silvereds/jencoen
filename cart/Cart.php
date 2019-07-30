<?php 
      
            $nbArticle = count($_SESSION['idDesArticles']);
            $total = 0;
            for($i=0; $i<$nbArticle;$i++){ 
               $total = $total + $_SESSION['prix'][$i]*$_SESSION['qte'][$i];
            }
?>
             <button class="icon-cart" id="buttonTocart" style="background-color:#cec9c2">
                    <i class="ti-shopping-cart"></i>
                    <span class="count-style"><?php  echo $nbArticle ?></span>
                    <span class="count-price-add"><?php  echo $total ?>  FCFA</span>
            </button>
<?php
