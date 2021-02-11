<?php
    // Kreiranje objekata konekcije

    require_once "connection.php";
        //INT UNSIGNED znaci da je opseg pomeren samo na pozitivne brojeve
    $q = "CREATE TABLE pacijenti(
        id INT UNSIGNED,
        ime VARCHAR(50),
        prezime VARCHAR(150),
        visina SMALLINT UNSIGNED,
        tezina FLOAT UNSIGNED,
        PRIMARY KEY (id)
        );";

    $resultOfQuery = $conn->query($q);
    
    if($resultOfQuery){
        echo "<p>Tabela pacijenti je uspesno dodata u bazu!</p>";
    }
    else{
        echo "Error: " . $q . "<br>" . $conn->error;
    }

?>