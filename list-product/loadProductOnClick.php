 <?php
 if(isset($_POST['id']) && isset($_POST['order'])){
  $id = (integer)$_POST['id'];
  $order = htmlspecialchars($_POST['order']); 
  require_once(__DIR__."\..\paramConnectToBBd.php");
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
  
    $donnees =array();
    $i = 0;
    $reponse=$connection->query("SELECT id_prod,nom_prod,prix_HT,fichier_media,descriptions,im1,im2,im3  FROM produit WHERE id_cath=$id ORDER BY prix_HT $order"); 
    while($tab = $reponse->fetch()){
       $donnees[$i]=$tab;    
       $i++;     
    }
    $reponse->closeCursor();
    print json_encode(array('data'=>$donnees)); 
    exit;
  }
 ?>
  
 