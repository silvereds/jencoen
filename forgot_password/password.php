<?php
    include_once(__DIR__."\..\user\Account.php"); 
    
    function createCode(){
        $tab = range(0,9);
        srand(time());
        shuffle($tab);
        return $tab[0]."".$tab[1]."".$tab[3]."".$tab[4];
    }

    if(isset($_POST['mail'])){
        if(Email_is_correct($_POST['mail']) AND email_is_exist($_POST['mail'])){
         // $pass = getPasswordOfEmail($_POST['mail']); 
            $code = createCode();
            if(mail($_POST['mail'],"JENCOEN",$code)){
                echo "OK"; 
                $_SESSION['code'] = $code;
                $_SESSION['mail'] = $_POST['mail'];
            }else{
                echo "problème verifier votre connection internet";
            }
        }else{
              echo "email incorrect";
        }
    }
?>