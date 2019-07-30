<?php 
    include_once(__DIR__."\..\paramConnectToBBd.php");

    function connect(){
        $dsn="mysql:host=".HOST.";dbname=electronic";
        $user = USER;
        $pass = PASS;
        try{
            $connection = new PDO($dsn,$user,$pass);
            return $connection;
            }
            catch(Exception $e)
            {
            die('Erreur : '.$e->getMessage());
            } 
    }

    function username_exist($username){

        $username = htmlspecialchars($username);
        $connection = connect();
        $reponse=$connection->query("SELECT id_client  FROM clients WHERE pseudo=\"$username\""); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return true;  

            }else{
                $reponse->closeCursor();
                return false; 
            }
    }

    function username_toUpdate_exist($username,$id){

        $username = htmlspecialchars($username);
        $connection = connect();
        $reponse=$connection->query("SELECT id_client  FROM clients WHERE pseudo=\"$username\" AND id_client !=$id"); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return true;  

            }else{
                $reponse->closeCursor();
                return false; 
            }
    }
    
    function password_exist($password){

        $password = htmlspecialchars($password);
        $password = sha1($password);
        $connection = connect();
            $reponse=$connection->query("SELECT id_client  FROM clients WHERE pwd=\"$password\""); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return true;  

            }else{
                $reponse->closeCursor();
                return false; 
            }
            

    }

    function email_is_exist($email){
        $email = htmlspecialchars($email);
        $connection = connect();
        $reponse=$connection->query("SELECT id_client  FROM clients WHERE email=\"$email\""); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return true;  

            }else{
                $reponse->closeCursor();
                return false; 
            }
            

    }

    function email_toUpdate_is_exist($email,$id){
        $email = htmlspecialchars($email);
        $connection = connect();
        $reponse=$connection->query("SELECT id_client  FROM clients WHERE email=\"$email\" AND id_client !=$id"); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return true;  

            }else{
                $reponse->closeCursor();
                return false; 
            }
    }


    function phone_is_exist($phone){

        $phone = htmlspecialchars($phone);
        $connection = connect();
        $reponse=$connection->query("SELECT id_client  FROM clients WHERE telephone=\"$phone\""); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return true;  

            }else{

                $reponse->closeCursor();
                return false;

            }        
    }

    function phone_toUpdate_is_exist($phone,$id){

        $phone = htmlspecialchars($phone);

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
        
         
        
            $reponse=$connection->query("SELECT id_client  FROM clients WHERE telephone=\"$phone\" AND id_client !=$id"); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return true;  

            }else{

                $reponse->closeCursor();
                return false;

            }
            
    }

    function getIdVille($ville){
       
        $ville = htmlspecialchars($ville);
        $connection = connect();
        $reponse=$connection->query("SELECT id_ville  FROM villes WHERE nom_ville=\"$ville\""); 

            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return $tab[0];  

            }else{
                $reponse->closeCursor();
                return ''; 
            }
            

    }

    function lengthUsernameIsCorrect($username){
        if(strlen($username) < 6){
                    return false;
        }else{
                    return true;
        }
      
    }

        
    function PasswordIsCorrect($pwd){
        if(strlen($pwd) < 8){
            return false;
        }else{
            return true;
        }

    }

    function Email_is_correct($email){
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$email)){
            return true;
        }else{
            return false;
        }
    
    }

    function insertInfosClient($username,$pwd,$email,$name,$phone,$idVille,$adresse){
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $pwd = htmlspecialchars($pwd);
        $pwd = sha1($pwd);
        $connection = connect();   
            $id=1;
            $connection->exec("INSERT INTO clients VALUES(NULL,'$username','$email','$pwd','$name','$phone',$idVille,'$adresse')");
             
            $reponse = $connection->query("SELECT id_client  FROM clients WHERE pseudo=\"$username\"");

            if($tab = $reponse->fetch()){
                
                $reponse->closeCursor();
                return $tab[0]; 
            }
             
    }


    function NumberIsCorrect($Number){
        $Number = htmlspecialchars($Number);

        if (preg_match("#^6([-. ]?[0-9]{2}){4}$#",$Number)){
            return true;
        }else{
            return false;
        }
    }

    function getIdUserByUsername($username){
        $username = htmlspecialchars($username);
        $connection = connect();
        $reponse=$connection->query("SELECT id_client  FROM clients WHERE pseudo=\"$username\""); 
            if($tab = $reponse->fetch()){

                $reponse->closeCursor();
                return $tab[0];  
            } 

    }

function insertNewAdresse($idUser,$name,$mail,$phone,$ville,$adresse){
        $name = htmlspecialchars($name);
        $mail = htmlspecialchars($mail);
        $ville = htmlspecialchars($ville);
        $ville = htmlspecialchars($ville);
        $connection = connect();
        $reponse =  $connection->query("SELECT NomClient FROM secondadresse WHERE id_client=$idUser");

        if($tab = $reponse->fetch()){  
            $connection->exec("DELETE FROM secondadresse WHERE id_client=$idUser");
        }
        $connection->exec("INSERT INTO secondadresse VALUES($idUser,'$name','$mail','$phone','$ville','$adresse')"); 
       }


function insertCommande($commande,$idUser,$orderNote,$mode,$total,$useOtherAdresseState){
            $connection = connect();
             
            $connection->exec("INSERT INTO commande VALUES(NULL,'$commande','$orderNote',$useOtherAdresseState)");

            $reponse = $connection->query("SELECT id_com FROM commande ORDER BY id_com DESC");
            if($tab = $reponse->fetch()){ 
                $connection->exec("INSERT INTO com_client VALUES($idUser,$tab[0],CURDATE())");
                
                $connection->exec("INSERT INTO facture VALUES(NULL,$mode,$total,$tab[0])");
            }

       }

       
function UpdateInfosClient($username,$email,$NameLastname,$phone,$idVille,$adresse,$id){
        $connection = connect();
        $connection->exec("UPDATE clients SET pseudo='$username',email='$email',nom_prenom='$NameLastname',telephone='$phone',id_ville=$idVille,adresse='$adresse' WHERE id_client=$id");
        return true;
    }

function UpdatePwdClient($pwd,$id){
        $connection = connect();
        
        $pwd = sha1($pwd);
        $connection->exec("UPDATE clients SET pwd='$pwd' WHERE id_client=$id");    
    }

function addToWishlist($idUser,$idArt){
        $connection = connect();
        $reponse1 = $connection->query("SELECT * FROM wishlist WHERE id_prod=$idArt AND id_client=$idUser");
        $reponse2 = $connection->query("SELECT nom_prod FROM produit WHERE id_prod=$idArt");
        if($tab2 = $reponse2->fetch()){
            if(!$tab1 = $reponse1->fetch()){
                $connection->exec("INSERT INTO wishlist VALUES($idUser,$idArt)");
            }else{
                
                    echo "IN_WISHLIST";
                }
        }else{

            echo "error";

        }
        $reponse1->closeCursor(); 
        $reponse2->closeCursor();  
    }
    
function DeleteOfWishlist($idArt,$idUser){
        $connection = connect();
        $connection->exec("DELETE FROM wishlist WHERE id_prod=$idArt AND id_client=$idUser");         
    }


function insertMessageUser($name,$email,$subject,$msg){
       if(strlen($name) > 0 AND  strlen($subject) > 0 AND strlen($msg) > 0){
            if(Email_is_correct($email)){
                $connection = connect();
                $name = htmlspecialchars($name);
                $email = htmlspecialchars($email);
                $subject = htmlspecialchars($subject);
                $msg = htmlspecialchars($msg);
                $connection->exec("INSERT INTO message_user VALUES(\"$name\",\"$email\",\"$subject\",\"$msg\")");
                echo "ok";
            }else{
                  echo "email incorrect";
            }
       }else{
           echo "remplir tous les champs";
       }

    }
?>