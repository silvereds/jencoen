<?php
  session_start();

  include_once(__DIR__."\..\user\Account.php");

  function setNewPassword($mail,$pwd){
    $email = htmlspecialchars($mail);

    $dsn="mysql:host=".HOST.";dbname=electronic";
    $user = USER;
    $pass = PASS;
    try{
        $connection = new PDO($dsn,$user,$pass);
        }
        catch(Exception $e)
        {
        die('Erreur : '.$e->getMessage());
        }    
    
     
    
        $reponse=$connection->exec("UPDATE clients SET  pwd ='$pwd' WHERE email=\"$mail\""); 
}

if(isset($_POST['code']) AND isset($_POST['new_pwd1']) AND isset($_POST['new_pwd2'])){
    if($_POST['code'] == $_SESSION['code']){
        if($_POST['new_pwd1'] == $_POST['new_pwd2']){

            if(PasswordIsCorrect($_POST['new_pwd2'] )){

                setNewPassword($_SESSION['mail'] , $_POST['new_pwd2']);

                if($_SESSION['verrou']){
                    echo  "checkout.php";
                 }else{
                    echo "userAccount.php";
                 }
                 unset($_SESSION['mail']);
                 unset($_SESSION['code']);

            }else{
                "votre mot de passe doit avoir au minimum 8 caractères";
            }
        }else{
             echo "les mots de passe saisis ne sont pas identiques";
        }
    }else{
        echo "code incorrecte";
    }
}
?>