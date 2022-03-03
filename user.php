<?php  
require 'config/init.php';
checkLogin();

$sql = "SELECT * FROM users WHERE role = 'student'";
$query = mysqli_query($db,$sql);

$tablestudent = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql = "SELECT u.email, p.suma, p.created_at 
        FROM plakanja as p
        JOIN users as u
        ON p.user_id = u.id 
        WHERE u.role = 'student'
        ORDER BY p.created_at DESC";

$query = mysqli_query($db, $sql);
$plakanja = mysqli_fetch_all($query, MYSQLI_ASSOC);

$sql = "SELECT SUM(suma) as zbir FROM plakanja";
$query = mysqli_query($db, $sql);
$total = mysqli_fetch_assoc($query);

require 'views/user.view.php';

?>

