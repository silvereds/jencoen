<?php 
   session_start();

   include_once("Account.php");

   function verifyMailAndUserName($mail,$username){
        if(lengthUsernameIsCorrect($username)){
            if(username_toUpdate_exist($username, $_SESSION['id'])){
                return "change this username";
            }else{
                if(Email_is_correct($mail)){
                     
                    if(email_toUpdate_is_exist($mail, $_SESSION['id'])){
                        return "change email it's use by other user";
                    }else{
                        return "OK";
                    }

                }else{
                    return "email is invalide";
                }
            }
        }else{
            return "username is invalide ; minimun length:6";
        }
   }

   if(isset($_POST['NameLastname']) && isset($_POST['Username'])&& isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['ville']) && isset($_POST['adresse'])){
        
       if(lengthUsernameIsCorrect($_POST['Username']) || strlen($_POST['NameLastname']) < 0 ){
          
            if(NumberIsCorrect($_POST['phone'])){
                
               if( !phone_toUpdate_is_exist($_POST['phone'], $_SESSION['id'])){
                    
                     $idVille = getIdVille($_POST['ville']);

                     if($idVille == ''){

                        echo "name of city isn't correct use one of this city : yaounde;douala;baffoussam;dschang;kribi;buea;bamenda;maroua;bertoua;ngaoundéré";

                     }else{
                           
                              if(strlen($_POST['adresse']) < 1){
                                 echo "adresse isn't correct";
                              }else{
                                     
                                    if(verifyMailAndUserName($_POST['mail'],$_POST['Username']) == "OK"){
                                        $name = htmlspecialchars($_POST['NameLastname']);
                                        $username =htmlspecialchars($_POST['Username']);
                                        $adresse = htmlspecialchars($_POST['adresse']);
                                        $mail = htmlspecialchars($_POST['mail']);
                                        $phone = htmlspecialchars($_POST['phone']);
                                        
                                        UpdateInfosClient($username,$mail,$name,$phone,$idVille,$adresse,$_SESSION['id']);
                                        echo "your new personnal information saved successfully";
                                    }else{
                                        echo verifyMailAndUserName($_POST['mail'],$_POST['Username']);
                                    }   
                                  }
                           }
                     
                     

               }else{
                       echo "your phone number is already using change it  ";
                    }
            }else{
                   echo "phone number isn't correct";
                }

      }else{
               echo "fill all the field and verify that minimun length of username is  8";
            }
        
         }
 

?>