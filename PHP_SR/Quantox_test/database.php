<?php
    require_once "connection.php";

    // PHP script used to construct table
    
    $query = "CREATE TABLE users(
        id INT UNSIGNED AUTO_INCREMENT,
        email VARCHAR(50) UNIQUE NOT NULL,
        username VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    )ENGINE = InnoDB;";

    if($conn->query($query)){
        echo "Query is executed successfully!";
    }
    else{
        echo "Error: " . $query. "<br>" . $conn->error;
    }
?>