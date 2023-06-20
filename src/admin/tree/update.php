<?php
    include '../connect.php';

    $image_path = 'NULL';
    if(isset($_FILES['image'])) {
        $file = $_FILES['image'];
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $maxFileSize = 2 * 1024 * 1024;
                                                
        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($extension, $allowedExtensions)) {
            echo "Invalid file extension. Allowed extensions: " . implode(', ', $allowedExtensions);
            exit;
        }
        else if ($file['size'] > $maxFileSize) {
            echo "File size exceeds the limit of 2MB.";
            exit;
        } else {
            $targetDirectory = 'uploads/';
            $image_path = $targetDirectory . basename($file['name']);
            move_uploaded_file($file['tmp_name'], '../../'.$targetFilePath);
        }
    }

    $id = $mysqli->real_escape_string($_POST['id']);
    $species = $mysqli->real_escape_string($_POST['species']);
    $location= $mysqli->real_escape_string($_POST['location']);
    $soil_type = $mysqli->real_escape_string($_POST['soil_type']);
    $characteristic = $mysqli->real_escape_string($_POST['characteristic']);
    $benefits = $mysqli->real_escape_string($_POST['benefits']);

    $query = "UPDATE tree
        SET species = '$species', location = '$location', soil_type = '$soil_type', characteristic = '$characteristic', benefits = '$benefits', image_path = '$image_path'
        WHERE id = $id";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>