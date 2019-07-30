<?php
  session_start();
  if(isset($_POST['idArticle'])){
   $id = array();
   $libelle = array();
   $prix = array();
   $qte = array();
   $image = array();
   $nbArticle = count($_SESSION['idDesArticles']);
   for($i = 0 ; $i < $nbArticle ; $i++){
      if($_SESSION['idDesArticles'][$i] !== $_POST['idArticle']){
        array_push($id,$_SESSION['idDesArticles'][$i]);
        array_push($libelle,$_SESSION['libelle'][$i]);
        array_push($prix,$_SESSION ['prix'][$i]);
        array_push($qte,$_SESSION['qte'][$i]);
        array_push($image,$_SESSION['image'][$i]);
      }
   }
   $_SESSION['idDesArticles'] = $id;
   $_SESSION['libelle'] = $libelle;
   $_SESSION ['prix'] = $prix;
   $_SESSION['qte'] = $qte;
   $_SESSION['image'] = $image;
   unset($id);
   unset($libelle);
   unset($prix);
   unset($qte);
   unset($image);
  }
?>