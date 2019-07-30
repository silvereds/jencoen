<?php 
   session_start();
    
   include_once("Account.php");

    if(isset($_POST['user-name-connexion']) && isset($_POST['user-password'])){
      if(username_exist($_POST['user-name-connexion'])){

        if(password_exist($_POST['user-password'])){

            $_SESSION['id'] = getIdUserByUsername($_POST['user-name-connexion']);

            if($_SESSION['verrou']){
                echo  "checkout";
             }else{
                echo "userAccount";
             }
             
        }else{

          echo "mot de passe incorrect";
        }
     
    }else{

       echo "pseudo incorrect";
    }
}
?>