<?php
    $username = "root"; 
    $password = "1234"; 
    $database = "natureData"; 
    $mysqli = new mysqli("localhost", $username, $password, $database); 

    $user_id = $mysqli->real_escape_string($_POST['id']);
    $first_name = $mysqli->real_escape_string($_POST['first_name']);
    $last_name = $mysqli->real_escape_string($_POST['last_name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $contact_number = $mysqli->real_escape_string($_POST['contact_number']);
    $in_mailing_list = (isset($_POST['in_mailing_list']))? 1:0;

    $query = "UPDATE user
        SET email = '$email', first_name = '$first_name', last_name = '$last_name', contact_number = '$contact_number', in_mailing_list = $in_mailing_list
        WHERE user_id = '$user_id'";

    $mysqli->query($query);
    $mysqli->close();

    header('Location: view.php');
    exit();
?>