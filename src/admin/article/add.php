<?php
    include '../connect.php';

    $title = $mysqli->real_escape_string($_POST['title']);
    $content = $mysqli->real_escape_string($_POST['content']);
    
    $query = "INSERT INTO article
        VALUES (DEFAULT, '$title', '$content')";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>