<?php
    include '../connect.php';
    $forum_id = $mysqli->real_escape_string($_GET['id']);

    $query = "DELETE FROM forum WHERE forum_id = '$forum_id'";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>