<?php
    $con= mysqli_connect('localhost', 'root', '', 'naturedata');
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>