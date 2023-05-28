<?php
    include '../connect.php';
    $tree_id = $mysqli->real_escape_string($_GET['id']);

    $query = "DELETE FROM tree WHERE id = '$tree_id'";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>