<?php 
   session_start();

   include_once("Account.php");
 

   if(isset($_POST['userNameLastname']) && isset($_POST['phone']) && isset($_POST['ville']) && isset($_POST['adresse'])){
        
       if(lengthUsernameIsCorrect($_POST['userNameLastname'])){
          
            if(NumberIsCorrect($_POST['phone'])){
                
               if( !phone_is_exist($_POST['phone'])){
                    
                     $idVille = getIdVille($_POST['ville']);
                     if($idVille == ''){

                        echo "le nom de la ville n'est pas correct";

                     }else{
                           
                              if(strlen($_POST['adresse']) < 1){
                                 echo "adresse incorrecte";
                              }else{
                                    $name = htmlspecialchars($_POST['userNameLastname']);

                                    $adresse = htmlspecialchars($_POST['adresse']);
                                    
                                    $phone = htmlspecialchars($_POST['phone']);

                                    $_SESSION['id'] = insertInfosClient($_SESSION['username'],$_SESSION['user-password'],$_SESSION['email'],$name,$phone,$idVille,$adresse);
                                    unset($_SESSION['username']);
                                    unset($_SESSION['user-password']);
                                    unset($_SESSION['email']);
                                    if($_SESSION['verrou']){
                                       echo  "checkout";
                                    }else{
                                       echo "userAccount";
                                    }
                                       
                                  }
                           }
                     
                     

               }else{
                       echo "votre numéro de téléphone est déjà attribué  ";
                    }
            }else{
                   echo "numéro de téléphone incorrect";
                }

      }else{
               echo "votre nom et prénom doit avoir minimun 6 caractères";
            }
        
         }
 

?>