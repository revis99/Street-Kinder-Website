<?php 
     $mysql = new mysqli('localhost','root','','streetkinder'); 
     $userid = $_GET['id'];

     $delete = $mysql->query("DELETE FROM `users` WHERE `id`='$user'");


    
     $mysql->close();
    
     header("Location: ".$_SERVER['HTTP_REFERER']);
?>