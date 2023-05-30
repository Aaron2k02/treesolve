<?php
    include '../connect.php';

    $id = $mysqli->real_escape_string($_POST['id']);
    $species = $mysqli->real_escape_string($_POST['species']);
    $location= $mysqli->real_escape_string($_POST['location']);
    $soil_type = $mysqli->real_escape_string($_POST['soil_type']);
    $characteristic = $mysqli->real_escape_string($_POST['characteristic']);
    $benefits = $mysqli->real_escape_string($_POST['benefits']);
    $image_path = $mysqli->real_escape_string($_POST['image_path']);


    $query = "UPDATE tree
        SET species = '$species', location = '$location', soil_type = '$soil_type', characteristic = '$characteristic', benefits = '$benefits', image_path = '$image_path'
        WHERE id = $id";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>