<?php
    require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacija forme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $ime = $email = $bio = $pol = "";
        $imeErr = $emailErr = $bioErr = "";
        $prikazi = true;

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(empty($_POST['imePrezime'])){
                $prikazi = false;
                $imeErr = "Morate uneti ime i prezime";
            }
            else{
                $ime = $_POST['imePrezime'];
            }

            if(empty($_POST['email'])){
                $prikazi = false;
                $emailErr = "Morate uneti E-mail";
            }
            else{
                $email = $_POST['email'];
            }

            if(empty($_POST['bio'])){
                $prikazi = false;
                $bioErr = "Morate uneti biografiju";
            }
            else{
                $bio = $_POST['bio'];
            }
            $pol = $_POST['pol'];
        }
    ?>

    <form action="#" method="post">
        <p>
            <label for="">Ime i prezime:</label>
            <input type="text" name="imePrezime" id="" value="<?php echo $ime; ?>">
            <span class="error">* <?php echo $imeErr; ?></span>
        </p>

        <p>
            <label for="">E-mail:</label>
            <input type="email" name="email" id="" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr; ?></span>
        </p>

        <p>
            <label for="">Biografija:</label>
            <textarea name="bio" id="" cols="30" rows="10"><?php echo $bio; ?></textarea>
            <span class="error">* <?php echo $bioErr; ?></span>
        </p>

        <p>
            <label for="">Pol:</label>
            <input type="radio" name="pol" id="" value="z">Zenski
            <input type="radio" name="pol" id="" value="m">Muski
            <input type="radio" name="pol" id="" value="d" checked>Drugo
        </p>

        <p>
            <!-- Treba pisati i name za dugmice zbog navigacije kasnije u bazi -->
            <input type="submit" name="submit" value="Posalji">
            <input type="reset" name="reset" value="Resetuj">
        </p>
    </form>

    <?php
        if($prikazi){
            echo "<h2> Uneli ste podatke: </h2>";
            echo "<p>Ime i prezime: " . $ime . "</p>";
            echo "<p>E-mail: " . $email . "</p>";
            echo "<p>Biografija: " . $bio . "</p>";

            $q = "INSERT INTO polaznici(ime, email, bio, pol) VALUES
            ('$ime', '$email', '$bio', '$pol')
            ;";
            if($conn->query($q)){
                echo "<p class='success'>Uspesno je izvrsen unos</p>";
            }
            else{
                echo "Error: " . $q. "<br>" . $conn->error;
            }
        } 
    ?>
</body>
</html>