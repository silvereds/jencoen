<?php
   session_start();

   if(isset($_SESSION['idClient'])){
       echo "IS_CONNECTED";
   }
   $_SESSION['verrou'] = true;
?>