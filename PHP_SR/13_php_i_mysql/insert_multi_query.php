<?php

    require_once "connection.php";

    /*
    $q = "
        INSERT INTO pacijenti VALUES (6, 'Sava', 'Petkovic', 178, 88);
        INSERT INTO pacijenti VALUES (7, 'Milena', 'Mitic', 190, 88);
        UPDATE pacijenti SET prezime = 'Petronijevic' WHERE id = 3;
    ";
    */
//IZNAD je jedan nacin, a ISPOD je drugi nacin. U drugom nacinu je primenjeno nadovezivanje stringova
    $q = "INSERT INTO pacijenti VALUES (6, 'Sava', 'Petkovic', 178, 88);";
    $q .= "INSERT INTO pacijenti VALUES (7, 'Milena', 'Mitic', 190, 88);";
    $q .= "UPDATE pacijenti SET prezime = 'Petronijevic' WHERE id = 3;";

    if($conn->multi_query($q)){
        echo "<p>Uspesno je izvrsen niz upita</p>";
    }
    else{
        echo "Error: " . $q. "<br>" . $conn->error;
    }

?>