<?php 
      session_start();
      $update = array();
            $nbArticle = count($_SESSION['idDesArticles']);
            $total = 0;
            for($i=0; $i<$nbArticle;$i++){ 
               $total = $total + $_SESSION['prix'][$i]*$_SESSION['qte'][$i];
            }
            $update[0] = $total;
            $update[1] = $nbArticle;
            $data = json_decode($update);
            print($data);
?>