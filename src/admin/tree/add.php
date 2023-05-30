<?php
    include '../connect.php';

    $id = $mysqli->real_escape_string($_POST['id']);
    $species = $mysqli->real_escape_string($_POST['species']);
    $location= $mysqli->real_escape_string($_POST['location']);
    $soil_type = $mysqli->real_escape_string($_POST['soil_type']);
    $characteristic = $mysqli->real_escape_string($_POST['characteristic']);
    $benefits = $mysqli->real_escape_string($_POST['benefits']);
    $image_path = $mysqli->real_escape_string($_POST['image_path']);


    $query = "INSERT INTO tree
        VALUES (DEFAULT, '$species', '$location', '$soil_type', '$characteristic', '$benefits', '$image_path')";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>