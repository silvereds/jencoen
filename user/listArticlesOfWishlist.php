<?php 
  include_once(__DIR__."\..\categorie\getInfosArticle.php");
  function listArticlesOfWishlist($id_user){
    $idarticles = getIdOfArticlesOfWishlistOfuserById($id_user);
     
    $nb = count($idarticles);
     
    for($i =0 ;$i < $nb; $i++){
         
        $infos = getInfosArticlesById($idarticles[$i]);
?>
        <tr id="tr<?php echo  $idarticles[$i] ?>">
            <td class="product-thumbnail">
                <a href="#"><img src="../../admin/administrators/build/images/upload/<?php echo  $infos[2] ?>" alt=""
                height="50px" width="50px"></a>
            </td>
            <td class="product-name">
                <a href="#"><?php echo  $infos[0] ?></a>
            </td>
            <td class="product-price"><span class="amount"><?php echo  $infos[1] ?> fcfa</span></td>
             
            <td class="product-subtotal">
                <a href="#!" onclick="addTocart($(this))" name="<?php echo  $idarticles[$i] ?>">
                   <i class="ti-shopping-cart"></i>
                </a>
            </td>
            <td class="product-cart-icon product-subtotal">
                <a href="#!" onclick="deleteOfwishlist($(this))" name="<?php echo  $idarticles[$i] ?>"><i class="ti-trash"></i>
                </a>
            </td>
        </tr>
<?php
    }
  }
  
  ?>