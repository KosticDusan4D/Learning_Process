<?php
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prezimena 2</title>
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
            $q = "SELECT DISTINCT prezime AS 'prezime'
            FROM pacijenti ORDER BY prezime";
            $result = $conn->query($q);
            if($result->num_rows){
                foreach($result as $row){
                    echo "<a href='#". $row['prezime']. "'>". $row['prezime']. "</a>";
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
                    $prezime = $row['prezime'];
                    //Prikazi sve pacijente cije prezime pocinje na $prvoSlovo
                    echo "<h3 class='center' id='$prezime'>$prezime</h3>";
                    echo "<table class='tabela'>";
                    echo "<tr>
                    <th id='text_left'>Ime</th>
                    <th>Prezime</th>
                    <th>Visina</th>
                    <th>Tezina</th>
                    <th>Datum rodjenja</th>
                    </tr>";
                    $q2 = "SELECT *, (SELECT AVG(visina) FROM pacijenti WHERE prezime LIKE '%$prezime%') AS 'prosVis', tezina, (SELECT AVG(tezina) FROM pacijenti WHERE prezime LIKE '%$prezime%') AS 'prosTez'
                    FROM pacijenti WHERE prezime LIKE '%$prezime%' ORDER BY ime;";
                    $sviPacijenti = $conn->query($q2);
                    $sumaVis1 = 0;
                    $sumaTez1 = 0;
                    $brojPac = 0;
                    foreach($sviPacijenti as $pac){
                        $sumaVis1 += $pac['visina'];
                        $sumaTez1 += $pac['tezina'];
                        $brojPac++;
                        $prosVis1 = $pac['prosVis'];
                        $prosTez1 = $pac['prosTez'];
                        echo "<tr class='red_slova'>";
                        echo "<td id='text_left'>" . $pac['ime'] . "</td>";
                        echo "<td>" . $pac['prezime'] . "</td>";
                        echo "<td>" . $pac['visina'] . "cm</td>";
                        echo "<td>" . $pac['tezina'] . "kg</td>";
                        echo "<td>" . $pac['datum_rodjenja'] . "</td>";
                        echo "</tr>";
                    }
                    $prosVis = $pac['prosVis'];
                    $prosTez = $pac['prosTez'];
                    $prosVis1 = $sumaVis1 / $brojPac;
                    $prosTez1 = $sumaTez1 / $brojPac;
                    echo "<tr><td colspan='5'>Query: Prosecna visina: $prosVis | Prosecna tezina: $prosTez</td></tr>";
                    echo "<tr><td colspan='5'>PHP: Prosecna visina: $prosVis1 | Prosecna tezina: $prosTez1</td></tr>";
                    echo "</table>";
                }
                
            }
        ?>   
    </div>
</body>
</html>