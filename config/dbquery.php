<?php 
 function checkLogin(){
     if(!isset($_SESSION['id'])){
      header("Location: index.php");
     };
 };
 
 function isAdmin(){
     return $_SESSION['role'] === 'admin';
 }
?>

