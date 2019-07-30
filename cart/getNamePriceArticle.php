<?php
     require_once(__DIR__."\..\paramConnectToBBd.php");
     function getPriceNameArticle($idArticle){
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
         
         $reponse=$connection->query("SELECT nom_prod,prix_HT,fichier_media FROM produit WHERE id_prod=$idArticle") ;
         
         if($tab=$reponse->fetch(PDO::FETCH_NUM)){
           $reponse->closeCursor();
           return $tab;
            
         }
      }
   ?>