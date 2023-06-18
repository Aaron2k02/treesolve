<?php
    require_once('connect.php');
    
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    //database connection
    if($mysqli->connect_error){
        die("Failed to connect: " . $mysqli->connect_error);
    } else {
        $stmt = $mysqli->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows == 1) {
            // Successful login
            $_SESSION['logged_in'] = true;
            header("Location: home-page-in-session.php");
            exit;
        } else {
            // Failed login
            echo "Failed login";
        }
    }
    $stmt->close();
    $mysqli->close();
?>
