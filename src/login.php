<?php
    require_once('config.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    //database connection
    $con = new mysqli("localhost", "root", "", "naturedata");
    if($con->connect_error){
        die("Failed to connect: " . $con->connect_error);
    } else {
        $stmt = $con->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Successful login
            header("Location: home-page.php");
            exit;
        } else {
            // Failed login
            echo "Failed login";
        }
    }
    $stmt->close();
    $con->close();
?>
