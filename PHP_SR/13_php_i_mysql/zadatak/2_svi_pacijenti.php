<?php
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Svi pacijenti</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <div>
        <a href="index.php">Povratak na Index stranu</a>
    </div>
    <br>
    <section>
        <?php
            $q = "SELECT * FROM pacijenti ORDER BY visina DESC";
            $result = $conn->query($q);
            if($result->num_rows){
                echo "<table class='tabela'>";
                echo "<tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Tezina</th>
                    <th>Datum rodjenja</th>
                </tr>";
                foreach($result as $row){
                    echo "<tr class='red_slova'>";
                    echo "<td>" . $row['ime'] . "</td>";
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
    <br>
    <section>
        <?php
            $q = "SELECT * FROM pacijenti ORDER BY tezina DESC";
            $result = $conn->query($q);
            if($result->num_rows){
                echo "<table class='tabela'>";
                echo "<tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Tezina</th>
                    <th>Datum rodjenja</th>
                </tr>";
                foreach($result as $row){
                    echo "<tr class='red_slova'>";
                    echo "<td>" . $row['ime'] . "</td>";
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
    <br>
    <section>
        <?php
            $q = "SELECT * FROM pacijenti ORDER BY datum_rodjenja DESC";
            $result = $conn->query($q);
            if($result->num_rows){
                echo "<table class='tabela'>";
                echo "<tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Tezina</th>
                    <th>Datum rodjenja</th>
                </tr>";
                foreach($result as $row){
                    echo "<tr class='red_slova'>";
                    echo "<td>" . $row['ime'] . "</td>";
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