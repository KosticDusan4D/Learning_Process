<?php

    require_once "connection.php";

    $q = "SELECT * FROM pacijenti";
    $result = $conn->query($q);

    if($result->num_rows){//Ispitujemo da li postoje redovi kao rezultat SELECT upita
        //$result->fetch_assoc()// Ova metoda vraca tekuci red kao asocijativni niz

        while($red = $result->fetch_assoc()){
            echo "<p>";
            echo $red['ime'] . ", ";
            echo $red['prezime'] . ", ";
            echo $red['visina'] . "cm, ";
            echo $red['tezina'] . "kg, ";
            echo $red['datum_rodjenja'] . ", ";
            echo "</p>";
        }
    }
    else{
        echo "<p>Trenutno ne postoje pacijenti u bazi!</p>";
    }

?>