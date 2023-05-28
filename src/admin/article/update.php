<?php
    include '../connect.php';

    $id = $mysqli->real_escape_string($_POST['id']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $content = $mysqli->real_escape_string($_POST['content']);

    $query = "UPDATE article 
        SET title = '$title', content = '$content'
        WHERE id = $id";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>