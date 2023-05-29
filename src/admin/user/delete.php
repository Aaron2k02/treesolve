<?php
    $username = "root"; 
    $password = "1234"; 
    $database = "natureData"; 
    $mysqli = new mysqli("localhost", $username, $password, $database); 

    $user_id = $mysqli->real_escape_string($_GET['id']);

    $query = "DELETE FROM user WHERE user_id = '$user_id'";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>