<?php
 if(isset($_POST['id'])){
  $id = (integer)$_POST['id'];
  
  require_once(__DIR__."\..\paramConnectToBBd.php");

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
  
    $donnees =array();
   
    $reponse=$connection->query("SELECT nom_prod,prix_HT,descriptions  FROM produit WHERE id_prod=$id "); 
    if($tab = $reponse->fetch()){
       $donnees[0]=$tab;    
           
    }
    $reponse->closeCursor();
    print json_encode(array('data'=>$donnees)); 
    exit;
  }
 ?>
  
 