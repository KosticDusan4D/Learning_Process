<?php
    $pol = $_GET["pol"];
    function pol($pol){
        if($pol == "m"){
            return "<span class='muski'>Muski</span>";
        }
        elseif($pol == "z"){
            return "<span class='zenski'>Zenski</span>";
        }
        elseif($pol == "d"){
            return "<span class='drugo'>Drugo</span>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz podataka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Uneli ste podatke:</h2>

    <?php
        echo "Ime i prezime: " . $_GET["imePrezime"];
        echo "<br>";
        echo "E-mail: " . $_GET["email"];
        echo "<br>";
        echo "Biografija: " . $_GET["bio"];
        echo "<br>";
        echo "Pol: " . pol($pol);
        echo "<br>";

        $znanje = $_GET["znanje"]; // Vraca niz cekiranih vrednosti u checkbox-u gde je name="znanje"
        echo "<p>Znanje:</p>";
        echo "<ul>";
            foreach($znanje as $z){
                echo "<li>$z</li>";
            }
        echo "</ul>";
    ?>

    <p>Kliknite <a href="index.php">ovde</a> za povratak na pocetnu.</p>
</body>
</html>