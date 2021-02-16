<?php
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tabela, .tabela th, .tabela td{
            border: 2px solid red;
            border-collapse: collapse;
            padding: 5px;
        }
        .tabela tr:first-child{
            background-color: cyan;
        }
        .info{
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        // Prikazati sve pacijente u tabeli
        $q = "SELECT * FROM pacijenti";
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
    <br>
    <br>
    <hr>
    <br>
    <br>
    <?php
        $q = "SELECT * FROM pacijenti;";
        $result = $conn->query($q);
        if($result->num_rows){
            echo "<ol>";
            foreach($result as $red){
                echo "
                <li>
                    <ul>
                        <li>"."Ime i prezime: ".$red['ime']." ".$red['prezime']."</li>"
                        . 
                        "<li>"."Darum rodjenja: ".$red['datum_rodjenja']."</li>"
                        . 
                        "<li>"."Visina: ".$red['visina']."cm"."</li>"
                        . 
                        "<li>"."Tezina: ".$red['tezina']."kg"."</li>
                    </ul>
                    <br>
                </li>
                ";
            }
            echo "</ol>";
        }
    ?>
</body>
</html>