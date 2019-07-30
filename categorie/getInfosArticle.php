<?php 
     include_once(__DIR__."\..\paramConnectToBBd.php");
     
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

     function getInfosArticlesById($id_prod){
        
         $connection = connect();
         $reponse=$connection->query("SELECT nom_prod,prix_HT,fichier_media,descriptions,id_prod FROM produit WHERE id_prod=$id_prod");
         if($tab = $reponse->fetch(PDO::FETCH_NUM)){
            $reponse->closeCursor();
            return $tab;
         }
    }

    function getIdOfArticlesOfWishlistOfuserById($id_user){

         $connection = connect();   
         $id = array();
         $i = 0;
         $reponse=$connection->query("SELECT  id_prod FROM wishlist WHERE id_client=$id_user");
         while($tab = $reponse->fetch(PDO::FETCH_NUM)){
            $id[$i] = $tab[0];
            $i++; 
         }
         $reponse->closeCursor();
         return $id;
    }
?>