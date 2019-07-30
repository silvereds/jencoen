<?php 
   session_start();
   include_once("Account.php");

   if(isset($_POST['user-password']) AND isset($_POST['password-to-update'])){
    
        if(password_exist($_POST['user-password'])){
            if($_POST['password-to-update'] == $_POST['confirm-password-to-update']){
                if(PasswordIsCorrect($_POST['password-to-update'])){
                    $pwd = htmlspecialchars($_POST['password-to-update']);
                    UpdatePwdClient($pwd,$_SESSION['id']);
                    echo "your new password have been saved succesfully";
                }else{
                    echo "verify that the minimun length of your new password : 8";
                }
            }else{
                echo "the new passwords are not equals";
            }
        }else{
            echo "password is not correct";
        }
   }