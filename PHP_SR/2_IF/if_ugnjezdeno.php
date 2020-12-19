<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ugnjezdeno grananje</title>
</head>
<body>

    <div>
        Zdravo kako si?
    </div>

    <div>
        Ucim PHP
        <?php
            echo ":)"
        ?>
    </div>

    <p>Ovo je prvi paragraf</p>

    <article>
    Da li je broj 3 paran?
    <?php
        $br = 3;
        if($br % 2 == 0)
        {
            echo "Broj $br je paran broj";
        }
        else
        {
            echo "Broj $br nije paran broj";
        }
    ?>
    </article>

    <?php
        $boja = "purple";

        echo "<p style='color: $boja'>Neki tekst</p>";
    
    ?>

</body>
</html>