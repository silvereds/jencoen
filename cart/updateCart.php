<?php
  session_start();
  if(isset($_POST)){
        $nbArticle = count($_SESSION['idDesArticles']);
        $zero =false;
        $qte = array();
        for($i = 0; $i < $nbArticle ; $i++){
            if(isset($_POST["input".$i])){
                $qte[$i] = (integer)$_POST["input".$i];
                if($qte[$i] == 0)$zero = true;
                
            }
        }
        if(!$zero){
            for($i = 0; $i < $nbArticle ; $i++){
                    $_SESSION['qte'][$i] = $qte[$i];
                    
                }
        }else{
            echo "verify that the value of all the field are the numbers different of 0";
        }
    }  

  ?>