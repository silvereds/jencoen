<?php
 include_once(__DIR__."\..\paramConnectToBBd.php");
 
 function getInfosUserById($id){
 
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
    
     
        $infos = array();

        $reponse = $connection->query("SELECT nom_prenom,telephone,adresse,id_ville,email,pseudo  FROM clients WHERE id_client=$id"); 

        if($tab = $reponse->fetch()){
            $infos[0] = $tab[0];
            $infos[1] = $tab[4];
            $infos[2] = $tab[1];
            $infos[3] = $tab[2];
            $infos[5] = $tab[5];
            

            $ville = $connection->query("SELECT nom_ville  FROM villes WHERE id_ville=$tab[3]");

            if($nomVille = $ville->fetch()){
                $ville->closeCursor();
                $infos[4] = $nomVille[0];
            } 

            $reponse->closeCursor();
            return $infos;  

        }
 }

 function getSecondAdressUserById($id){
 
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
    
     
         
        $infos = array();

        $reponse = $connection->query("SELECT NomClient,Email,Phone,ville,adresseClient  FROM secondadresse WHERE id_client=$id"); 

        if($tab = $reponse->fetch()){
            $reponse->closeCursor();
             $infos[0] = $tab[0];
             $infos[1] = $tab[1]; 
             $infos[2] = $tab[2]; 
             $infos[3] = $tab[3]; 
             $infos[4] = $tab[4];  
             return $infos;    
        } 
 }
?>