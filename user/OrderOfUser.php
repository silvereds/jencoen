<?php 
include_once(__DIR__."\..\paramConnectToBBd.php");
 

function connect(){
    $dsn="mysql:host=".HOST.";dbname=electronic";
    $user = USER;
    $pass = PASS;
    try{
        $connection = new PDO($dsn,$user,$pass);
        return $connection;
    }catch(Exception $e){

        die('Erreur : '.$e->getMessage());

    }
}

function getNamePriceArticleById($id){
    $connection = connect();      
    $reponse =  $connection->query("SELECT nom_prod,prix_HT,fichier_media FROM produit WHERE id_prod=$id");
    if($tab = $reponse->fetch()){  
        $reponse->closeCursor();
        return $tab;  
    }
}

function getTotalAndPaymentModeOrderById($id){
    $total_mode = array();
    $connection = connect();       
    $reponse =  $connection->query("SELECT montant_total,id_mode FROM facture WHERE id_com=$id");

    if($tab = $reponse->fetch()){  
        
        $total_mode[0] = $tab[0];
        $reponse2 =  $connection->query("SELECT mode FROM mode WHERE id_mode=$tab[1] ");
        if($tab2 = $reponse2->fetch()){
            $total_mode[1] = $tab2[0];
        } 
        $reponse2->closeCursor(); 
    }
    $reponse->closeCursor();

    return $total_mode;
}

function getAdress($arg,$id_client){
    $connection = connect();
    if($arg == "0"){
        
        $reponse =  $connection->query("SELECT nom_prenom,telephone,id_ville,adresse FROM clients WHERE id_client=$id_client");
        if($tab = $reponse->fetch()) return $tab;

    }else{
        
        $reponse =  $connection->query("SELECT NomClient,Phone,ville,adresseClient FROM secondadresse WHERE id_client=$id_client"); 
        if($tab = $reponse->fetch()) return $tab; 
    } 
}

function getInfosOrderById($id){
          
    $connection = connect(); 
     
     
    $reponse =  $connection->query("SELECT ids_articles,order_note,other_adresse FROM commande WHERE id_com=$id");
     
    if($tab = $reponse->fetch()){  
        $reponse->closeCursor();
        return $tab;  
    }
}

function getCityById($id){
          
    $connection = connect(); 
 
        $reponse =  $connection->query("SELECT nom_ville FROM villes WHERE id_ville=$id");
        
        if($tab = $reponse->fetch()){  
            $reponse->closeCursor();
            return $tab[0];  
        }
    
}

function getOrderUserById($idUser,$date){
        $total_infos = array();
        $infos_order = array();
        $articles = array();
        $adress = array();
        $infos_articles = array();
        $connection = connect() ;
        $total_mode = array();
        $idUser = (integer)$idUser;
        $id_com = array(); 
        $reponse1 =  $connection->query("SELECT id_com FROM com_client WHERE id_client=$idUser AND date_com='$date'");
        $j = 0;
        while($tab = $reponse1->fetch()){
           $total_mode[$j] = getTotalAndPaymentModeOrderById($tab[0]);  
           $infos_order = getInfosOrderById($tab[0]);
           $adress[$j] = getAdress($infos_order[2],$idUser);
            $id_com[$j] = $tab[0];
           $articles = explode(',',$infos_order[0]);
           
           for($i = 0 ;$i < count($articles) ; $i++){
               $info = explode(".",$articles[$i]);
               
               $infos_art = getNamePriceArticleById((integer)$info[0]);
               $infos_total_art = array();
               $infos_total_art[0] = $infos_art;
               $infos_total_art[1] = $info[1];

               $infos_articles[$i] = $infos_total_art;

           }
           $total_infos[0][$j] = $infos_articles;
           $j++;   
        }
         //$total_infos[0] = $infos_articles;
         $total_infos[1] = $adress;
         $total_infos[2] = $total_mode;
         $total_infos[3] = $id_com;
         return $total_infos;
       }

    
?>