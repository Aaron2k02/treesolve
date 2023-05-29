<?php
    include '../connect.php';

    $user_id = $mysqli->real_escape_string($_POST['user_id']);
    $forum_title = $mysqli->real_escape_string($_POST['forum_title']);
    $forum_content = $mysqli->real_escape_string($_POST['forum_content']);
    $forum_image_path = $mysqli->real_escape_string($_POST['forum_image_path']);
    

    $query = "INSERT INTO forum
        VALUES (DEFAULT, $user_id, '$forum_title', '$forum_content', '$forum_image_path')";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>