<?php
    include '../connect.php';
    $id = $mysqli->real_escape_string($_GET['id']);

    $query = "DELETE FROM article WHERE id = '$id'";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>