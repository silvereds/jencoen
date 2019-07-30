<?php
     require_once(__DIR__."\..\paramConnectToBBd.php");



     function getImageProductById($id){
            
        $dsn="mysql:host=".HOST.";dbname=electronic";
        $user = USER;
        $pass = PASS;
        try{
             $connection = new PDO($dsn,$user,$pass);
           
            } catch(Exception $e){
                  die('Erreur : '.$e->getMessage());
            } 
     
        $reponse  = $connection->query("SELECT fichier_media FROM produit WHERE id_cath=$id");
        if($tab=$reponse->fetch(PDO::FETCH_NUM)){
            $reponse->closeCursor();
            return $tab[0];  
        }
        $reponse->closeCursor();
     }

     function loadCategorie(){
   
             
        $dsn="mysql:host=".HOST.";dbname=electronic";
        $user = USER;
        $pass = PASS;
        try{
             $connection = new PDO($dsn,$user,$pass);
            
            } catch(Exception $e){
                  die('Erreur : '.$e->getMessage());
            } 
     
        $reponse  = $connection->query("SELECT id_cath,nom_cath,description FROM cathegorie") ;
        $cat = array();
        $unit = array();
        $i = 0;
        while($tab=$reponse->fetch(PDO::FETCH_NUM)){
            $unit[0] = $tab[0];
            $unit[1] = $tab[1];
            $unit[2] = getImageProductById($tab[0]);
            $unit[3] = $tab[2];
            $cat[$i] = $unit;
            $i++;
         }
         
        $total_info = array();
        $total_info[0] = $cat;
        $total_info[1] = $i-1;
        $reponse->closeCursor();

        return $total_info;
      }

      function getArticlesCategorieById($id){
       
             
        $dsn="mysql:host=".HOST.";dbname=electronic";
        $user = USER;
        $pass = PASS;
        try{
             $connection = new PDO($dsn,$user,$pass);
            
            } catch(Exception $e){
                  die('Erreur : '.$e->getMessage());
            } 
     
        $reponse  = $connection->query("SELECT id_prod,nom_prod,fichier_media,prix_HT FROM produit WHERE id_cath=$id");
        $prod = array();
        $i = 0 ;
        while($tab = $reponse->fetch(PDO::FETCH_NUM)){
           $prod[$i] = $tab;
           $i++;
        }
        $reponse->closeCursor();
        return $prod;
      }
   ?>
   
    