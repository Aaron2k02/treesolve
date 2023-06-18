<?php
    $con= mysqli_connect('localhost', 'root', '1234', 'naturedata');
 
    // Check connection
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>