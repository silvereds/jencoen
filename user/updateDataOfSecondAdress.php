<?php 
   session_start();
   include_once("Account.php");
 

   if(isset($_POST['Name']) && isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['ville']) && isset($_POST['adresse'])){
        
       if(strlen($_POST['Name'])<=0  || strlen($_POST['ville'])<=0 || strlen($_POST['adresse'])<=0){
           
        echo "fill all the field in different adresse form";
            
      }else{
             if(Email_is_correct($_POST['mail'])){
                if(NumberIsCorrect($_POST['phone'])){
                    $name = $_POST['Name'];
                    $useOtherAdresseState = 1;
                    insertNewAdresse($_SESSION['id'],$name,$_POST['mail'],$_POST['phone'],$_POST['ville'],$_POST['adresse']);
                    echo "a new adress has been save successfully";
                }else{

                    echo "invalide phone number please fill valid phone number  in different adresse form"; 
                }

             }else{
                 echo "invalide email please fill valid email  in different adresse form";
             }  
          }
        
   }
 

?>