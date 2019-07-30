<?php
 include_once("show_detail.php");
 if(isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['comment']) AND isset($_POST['id_prod'])){
     if(strlen($_POST['nom']) <6 ){
         echo "nom incorrect minimun 6 caractères";
     }else{
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$_POST['email'])){
            if(strlen($_POST['comment']) <=0 ){
                echo "laisser un commentaire";
            }else{
                $connection = connect();
                $nom = htmlspecialchars($_POST['nom']);
                $email = htmlspecialchars($_POST['email']);
                $comment = htmlspecialchars($_POST['comment']);
                $id = (integer)$_POST['id_prod'];
                $reponse = $connection->query("SELECT * FROM produit WHERE id_prod=$id");
                if($tab = $reponse->fetch()){
                    $connection->exec("INSERT INTO review VALUES($id,'$nom','$email','$comment',NOW())");
                    echo "ok";
                }else{
                    echo "erreur";
                }
                $reponse->closeCursor();  
            }
        }else{
              echo "email incorrect";
        }
     }
 }
?>