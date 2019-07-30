<?php
  session_start();

  include_once("getNamePriceArticle.php");
   
   

  function ajouterArticle($libelleProduit,$qteProduit,$prixProduit,$id,$image){
    //Si le panier existe

    if(! $_SESSION['verrou']){
         
        //Si le produit existe déjà on ajoute seulement la quantité

        $positionProduit = array_search($id,$_SESSION['idDesArticles']);
        if($positionProduit !== false){

        $_SESSION['qte'][$positionProduit] += $qteProduit ;

        }else{

            //Sinon on ajoute le produit
            
            array_push( $_SESSION['libelle'],$libelleProduit);
            array_push( $_SESSION['qte'],$qteProduit);
            array_push( $_SESSION['prix'],$prixProduit);
            array_push( $_SESSION['image'],$image);
            array_push( $_SESSION['idDesArticles'],$id);
        }
        
        $total = 0;
        $nbArticle = count($_SESSION['idDesArticles']);
        for($i=0; $i < $nbArticle;$i++){ 
            $total = $total + $_SESSION['prix'][$i]*$_SESSION['qte'][$i];
        }
       
         echo $total."+".$nbArticle;
?>
            
 
<?php 
        
    } 
  }

  if(isset($_POST['idArticle']) && isset($_POST['qte'])){
     
    $idArticle = (integer)$_POST['idArticle'];

    $infos = getPriceNameArticle($idArticle);
    ajouterArticle($infos[0],$_POST['qte'],$infos[1],$_POST['idArticle'],$infos[2]);
  }
?>