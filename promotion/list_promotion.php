<?php 
include_once(__DIR__."\..\categorie\getInfosArticle.php");

function list_promo(){
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

  $donnees = array();
  $promo = array();
  $i = 0;
  $reponse=$connection->query("SELECT  *  FROM promotion"); 
  while($tab = $reponse->fetch(PDO::FETCH_NUM)){
    $donnees[0]=$tab[0]; 
    $donnees[1]=$tab[1];
    $donnees[2] = getInfosArticlesById($tab[0])[2] ;
    $donnees[3] = getInfosArticlesById($tab[0])[1] ;
    $promo[$i] = $donnees;
    $i++;        
  }
  $reponse->closeCursor();
  return $promo;

}
  ?>