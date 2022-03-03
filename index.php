<?php
require 'config/init.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $error = [];
   if(isset($_POST['email']) && !empty($_POST['email'])){
      $email = $_POST['email'];
   }
   else {
       $email_error = 'Email is required.';
       $error[] = $email_error;
   }
   
   if(isset($_POST['password'])&& !empty($_POST['password'])){
    $password = $_POST['password'];
 }
 else {
     $password_error = 'Password is required.';
     $error[] = $password_error;
 }
   
 if(count($error) === 0){
     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
     $query = mysqli_query($db,$sql);

    if(mysqli_num_rows($query) === 1){
        $user = mysqli_fetch_assoc($query);
       
        $_SESSION['id'] = $user['id'];
        $_SESSION['role'] = $user['role'];

        if(($user['role'] === 'user') || ($user['role'] === 'admin') ){
            header("Location: user.php");
        }
        else {
            header("Location: index.php");
        }
    }
 }

}
require 'views/index.view.php';
?>

