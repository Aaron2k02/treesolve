<?php
    include '../connect.php';

    $forum_id = $mysqli->real_escape_string($_POST['forum_id']);
    $user_id = $mysqli->real_escape_string($_POST['user_id']);
    $forum_title = $mysqli->real_escape_string($_POST['forum_title']);
    $forum_content = $mysqli->real_escape_string($_POST['forum_content']);
    $forum_image_path = $mysqli->real_escape_string($_POST['forum_image_path']);
    

    $query = "UPDATE forum 
        SET user_id = $user_id, forum_title = '$forum_title', forum_content = '$forum_content', forum_image_path = '$forum_image_path'
        WHERE forum_id = $forum_id";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>