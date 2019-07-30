<?php
   session_start();
   include_once("Account.php");
 
  if(isset($_SESSION['id']) AND isset($_POST['id_article'])){
    
     $idArt = (integer)$_POST['id_article'];
     
     DeleteOfWishlist($idArt,$_SESSION['id']);
  }
?>