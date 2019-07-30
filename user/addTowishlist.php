<?php
   session_start();
   include_once("Account.php");
 
  if(isset($_SESSION['id']) AND isset($_POST['id_article'])){
    
     $idArt = (integer)$_POST['id_article'];
     
     addToWishlist($_SESSION['id'],$idArt);
    
  }else{
     echo "please create account or connect to do this action";
  }
?>