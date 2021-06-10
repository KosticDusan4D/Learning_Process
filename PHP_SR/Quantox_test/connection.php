<?php

    // Connection to the database
    
    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $db = "quantox";

    $conn = new mysqli($servername, $username, $password, $db);

    if($conn->connect_error){
        die("Error connecting to database: ". $conn->connect_error);
    }

?>