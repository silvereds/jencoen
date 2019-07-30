<?php
   //include_once("GestionArticles.php");


   $hauteur = 
    $source = imagecreatefrompng("im1.png");  
  
    $destination = imagecreatetruecolor($largeur,$hauteur);  

    $largeur_source = imagesx($source);
    $hauteur_source = imagesy($source);
    $largeur = imagesx($destination);
    $hauteur = imagesy($destination);
  
     
    imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur, $hauteur, $largeur_source, $hauteur_source);
 
     
    unlink($name);
    imagejpeg($destination,$name);
    
 

/*function fileToUPloadIsCorrect($files){
      
    if($files['error'] == 0){
          
          if($files['size'] <= 3000000){
                if(in_array(pathinfo($files['name'])['extension'],array('jpeg','jpg','gif','png','JPEG','JPG','GIF','PNG'))){
                    
                   if(imageExist($files['name'])){

                    return "un fichier image ayant le nom du fichier que vous avez selectionnée existe dans le systeme changer le nom de l'image à selectionnée";     
                     
                   }else{

                        return "";
                  
                    }
                }else{
                   return "ce type de fichier est non autorisé. choisir une image d'extension jpeg jpg,gif ou png";
                }
                   
          }else{
                return "la taille du fichier image doit etre inferieur ou egal a 3Mo";
          }
       }else{
          return " fichier trop volumineux";
       }
}*/
 
?>