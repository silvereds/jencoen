<?php
include_once("Account.php");

if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['subject']) AND isset($_POST['message'])){
    insertMessageUser($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);
}

?>