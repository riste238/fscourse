<?php 
  require 'config/init.php';
  session_destroy();
  header("Location: index.php");
?>