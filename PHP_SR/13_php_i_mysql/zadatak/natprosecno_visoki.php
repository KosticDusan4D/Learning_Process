<?php
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natprosecno visoki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <div>
        <a href="index.php">Povratak na Index stranu</a>
    </div>
    <section>   
        <?php
            $q = "SELECT *
            FROM pacijenti
            WHERE visina < (SELECT AVG(visina) FROM pacijenti);";
            $result = $conn->query($q);
            if($result->num_rows){
                echo "<table class='tabela'>";
                echo "<tr>
                    <th id='text_left'>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Tezina</th>
                    <th>Datum rodjenja</th>
                </tr>";
                foreach($result as $row){
                    echo "<tr class='red_slova'>";
                    echo "<td id='text_left'>" . $row['ime'] . "</td>";
                    echo "<td>" . $row['prezime'] . "</td>";
                    echo "<td>" . $row['visina'] . "cm</td>";
                    echo "<td>" . $row['tezina'] . "kg</td>";
                    echo "<td>" . $row['datum_rodjenja'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
            else{
                echo "<p class='info'>Trenutno u bazi nemate pacijente</p>";
            }
        ?>
    </section>
</body>
</html>