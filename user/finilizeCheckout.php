<?php 
    session_start();
    include_once("Account.php");
   
   function buildOrder(){
        $order="";
        $total = 0 ;
        $nbArticles = count($_SESSION['idDesArticles']);

        for($i = 0 ; $i < $nbArticles ; $i++){
            $total = $total + $_SESSION['prix'][$i]*$_SESSION['qte'][$i];
            if($i == 0){
                $order = $_SESSION['idDesArticles'][$i].".".$_SESSION['qte'][$i];
            }else{
                $order = $order.",".$_SESSION['idDesArticles'][$i].".".$_SESSION['qte'][$i];
            }
        }
        return $order;
    }

    function TotalOrder(){
        $total = 0 ;
        $nbArticles = count($_SESSION['idDesArticles']);

        for($i = 0 ; $i < $nbArticles ; $i++){
            $total = $total + $_SESSION['prix'][$i]*$_SESSION['qte'][$i];
        }
        return $total + $total*5/100 +1000;
    }

    $useOtherAdresseState = 0;               
    insertCommande(buildOrder(),$_SESSION['id'],$_POST['order-note'],$_POST['idMode'],TotalOrder(),$useOtherAdresseState);
     
    $_SESSION['idDesArticles'] = array();
    $_SESSION['libelle'] = array();
    $_SESSION['image'] = array();
    $_SESSION['qte'] = array();
    $_SESSION ['prix'] = array();
    $_SESSION['verrou'] = false;
    
?>