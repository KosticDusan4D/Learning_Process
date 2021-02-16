<?php
    // Kreiranje objekata konekcije

    $servername = "localhost";
    $username = "admin";
    $password = "admin123";
    $db = "bolnica"; //database

    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
        die("Error connecting to database: ". $conn->connect_error);
    }
   

?>