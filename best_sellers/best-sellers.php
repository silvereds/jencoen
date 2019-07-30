<?php 
   include_once(__DIR__."\..\categorie\getInfosArticle.php");
   
   function getNbVenteArticleBy($id){
        $connection = connect();
        $nb = 0 ;
        $id = "#".$id."#";
        $response = $connection->query("SELECT ids_articles FROM commande");
        while($tab = $response->fetch(PDO::FETCH_NUM)){
            $art = explode(",",$tab[0]);
            $count = count($art);
            for($i=0 ;$i < $count ;$i++){
              if(preg_match($id,$art[$i])){
                  $nb = $nb +(integer)explode(".",$art[$i])[1];
              }
            }
             
        }
        $response->closeCursor();
        return $nb;
    }
 

    function getTheThirdSellers(){
        $connection = connect();
        $response = $connection->query("SELECT id_prod FROM produit");
        $id = array();
        $i = 0;
        
        while($tab = $response->fetch(PDO::FETCH_NUM)){

            $id[$i][0]=$tab[0];
            $id[$i][1]=getNbVenteArticleBy($tab[0]);
            $i++;

        }
       
        $response->closeCursor();
        $count = count($id);
        $i = 0;
        while($i<$count){
               
              for($j=0 ; $j < $count-1 ; $j++){
                  if($id[$j][1] > $id[$j+1][1]){
                    $second = $id[$j+1];
                    $id[$j+1] = $id[$j];
                    $id[$j] = $second;
                  }
                   
              }

              $i++;
        }
      
        $final = array();
        
        $final[0] = $id[$count-1];
        if($count-2 >= 0){
            $final[1] = $id[$count-2]; 
        }
        if($count-3 >= 0){
            $final[2] = $id[$count-3]; 
        }
          
        
         

    
        return  $final;
    }

    function getTheThirdBestArticle(){
        $art = array();
        $tab = getTheThirdSellers();
        $count = count($tab);
        for($j=0 ; $j < $count ; $j++){
            $art[$j] = getInfosArticlesById($tab[$j][0]);
        }
        return $art;
    }
    
      
     

?>