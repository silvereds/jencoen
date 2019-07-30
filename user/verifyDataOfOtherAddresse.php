<?php 
   session_start();
   include_once("Account.php");
   $total = 0 ;

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

   if(isset($_POST['Name']) && isset($_POST['mail']) && isset($_POST['Lastname']) && isset($_POST['phone']) && isset($_POST['ville']) && isset($_POST['adresse']) && isset($_POST['order-note']) && isset($_POST['idMode'])){
        
       if(strlen($_POST['Name'])<=0 || strlen($_POST['Lastname'])<=0 || strlen($_POST['ville'])<=0 || strlen($_POST['adresse'])<=0){
           
        echo "fill all the field in different adresse form";
            
      }else{
             if(Email_is_correct($_POST['mail'])){
                if(NumberIsCorrect($_POST['phone'])){
                    $name = $_POST['Lastname']." ".$_POST['Name'];
                    $useOtherAdresseState = 1;
                    insertNewAdresse($_SESSION['id'],$name,$_POST['mail'],$_POST['phone'],$_POST['ville'],$_POST['adresse']);
                    
                    insertCommande(buildOrder(),$_SESSION['id'],$_POST['order-note'],$_POST['idMode'],TotalOrder(),$useOtherAdresseState);
                     
                    $_SESSION['idDesArticles'] = array();
                    $_SESSION['libelle'] = array();
                    $_SESSION['image'] = array();
                    $_SESSION['qte'] = array();
                    $_SESSION ['prix'] = array();
                    $_SESSION['verrou'] = false;
                }else{

                    echo "invalide phone number please fill valid phone number  in different adresse form"; 
                }

             }else{
                 echo "invalide email please fill valid email  in different adresse form";
             }  
          }
        
   }
 

?>