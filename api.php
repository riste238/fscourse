<?php 
require 'config/init.php';

if(isset($_POST['email']) && !empty($_POST['email'])){

    $term = $_POST['email'];
    $sql = "SELECT u.email, p.suma, p.created_at
    FROM plakanja as p
    JOIN users as u 
    ON u.id = p.user_id
    WHERE u.role = 'student'
    AND u.email LIKE '%$term%'
    ORDER BY p.created_at DESC";
}
else if(isset($_POST['all'])){
    $sql = "SELECT u.email, p.suma, p.created_at
    FROM plakanja as p
    JOIN users as u 
    ON u.id = p.user_id
    WHERE u.role = 'student'
    ORDER BY p.created_at DESC";
}
else if(isset($_POST['user_email'])){
    $user_email = $_POST['user_email'];
     
    $sql = "SELECT u.email, p.suma, p.created_at
    FROM plakanja as p
    JOIN users as u 
    ON u.id = p.user_id
    WHERE u.role = 'student'
    AND u.email = '$user_email'
    ORDER BY p.created_at DESC";
}

$query = mysqli_query($db, $sql);
$plakanje = mysqli_fetch_all($query,MYSQLI_ASSOC);

echo json_encode($plakanje);
?>