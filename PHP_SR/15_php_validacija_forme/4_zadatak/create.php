<?php
    require_once "connection.php";

    $q = "CREATE TABLE IF NOT EXISTS polaznici(
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        ime VARCHAR(60),
        email VARCHAR(45),
        bio TEXT(300),
        pol CHAR(1),
        PRIMARY KEY (id)
    );";

if($conn->query($q)){
    echo "Uspesno je izvrsen upit";
}
else{
    echo "Error: " . $q. "<br>" . $conn->error;
}
?>