<?php
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikaz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $q = "SELECT * FROM polaznici;";
        $result = $conn->query($q);
        if($result->num_rows){
            foreach($result as $row){
                echo "<ul>";
                echo "<li>" . $row['ime'] ."</li>";
                echo "<li>" . $row['email'] ."</li>";
                echo "<li>" . $row['bio'] ."</li>";
                $pol = $row['pol'];
                if($pol == "m"){
                    echo "<li class='muski'>Muski</li>";
                }
                elseif($pol == "z"){
                    echo "<li class='zenski'>Zenski</li>";
                }
                elseif($pol == "d"){
                    echo "<li class='drugo'>Drugo</li>";
                }
                echo "</ul>";
            }
        }
        else{
            echo "<p class='error'></p>";
        }
    ?>
</body>
</html>