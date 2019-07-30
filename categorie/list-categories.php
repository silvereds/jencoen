<?php
     //require_once("paramConnectToBBd.php");
     function loadCategorie($page){
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
    
         $reponse=$connection->query("SELECT * FROM cathegorie") ;
         if($page == "PRINCIPAL_PAGE"){
         while($tab=$reponse->fetch(PDO::FETCH_NUM)){
           
           echo '<li><a href="#load" onclick="list($(this))" name="'.$tab[0].'">'.$tab[1].'</a></li>';
            
         }
         
        }else{
          while($tab=$reponse->fetch(PDO::FETCH_NUM)){
        
            echo "<li><a href='../shop?id=$tab[0]'>$tab[1]</a></li>";
             
          }
        }
        $reponse->closeCursor();
      }
   ?>
   
    