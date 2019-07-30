<?php 
   session_start();

   include_once("Account.php");

   if(isset($_POST['user-name-register']) && isset($_POST['user-password1']) && isset($_POST['user-password2']) && isset($_POST['user-email'])){
       if(lengthUsernameIsCorrect($_POST['user-name-register'])){
         if( ! username_exist($_POST['user-name-register'])){
            if(PasswordIsCorrect($_POST['user-password1'])){

               if($_POST['user-password1'] !== $_POST['user-password2']){
                  echo "les mots de passe saisis ne sont pas identiques";
               }else{
                  if(Email_is_correct($_POST['user-email'])){

                     if(email_is_exist($_POST['user-email'])){

                        echo "cet email est déjà attribuer";
                        
                     }else{
                            $_SESSION['username'] = htmlspecialchars($_POST['user-name-register']);
                            $_SESSION['email'] = htmlspecialchars($_POST['user-email']);
                            $_SESSION['user-password'] = $_POST['user-password1'];
                     }
                  }else{
                     echo "email  invalide";
                  }
               }

            }else{
               echo "votre mot de passe doit contenir minimun  8 caractères";
            }
         }else{
            echo "changer de pseudonyme";
         }


       }else{
          echo "pseudonyme invalide; minimun 6 caractères";
       }
   }
?>