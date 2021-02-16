<?php
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prezimena po slovu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <div>
        <a href="index.php">Povratak na Index stranu</a>
    </div>
    <br>
    <br>
    <br>
    <section>   
    <?php
            $q = "SELECT DISTINCT LEFT(prezime, 1) AS 'slovo'
            FROM pacijenti ORDER BY prezime";
            $result = $conn->query($q);
            if($result->num_rows){
                foreach($result as $row){
                    echo "<a href='#". $row['slovo']. "'>". $row['slovo']. "</a>";
                }
            }
            else{
                echo "Trenutno u bazi nemate pacijenata";
            }
        ?>
    </section>
    <div>
        <?php
            if($result->num_rows){
                foreach($result as $row){
                    $prvoSlovo = $row['slovo'];
                    //Prikazi sve pacijente cije prezime pocinje na $prvoSlovo
                    echo "<h3 id='$prvoSlovo'>$prvoSlovo</h3>";
                    echo "<table class='tabela'>";
                    echo "<tr>
                    <th id='text_left'>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Tezina</th>
                    <th>Datum rodjenja</th>
                    </tr>";
                    $q2 = "SELECT * FROM pacijenti WHERE prezime LIKE'" . $prvoSlovo . "%' ORDER BY ime";
                    $sviPacijenti = $conn->query($q2);
                    foreach($sviPacijenti as $pac){
                        echo "<tr class='red_slova'>";
                        echo "<td id='text_left'>" . $pac['ime'] . "</td>";
                        echo "<td>" . $pac['prezime'] . "</td>";
                        echo "<td>" . $pac['visina'] . "cm</td>";
                        echo "<td>" . $pac['tezina'] . "kg</td>";
                        echo "<td>" . $pac['datum_rodjenja'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                
            }
        ?>   
    </div>
</body>
</html>