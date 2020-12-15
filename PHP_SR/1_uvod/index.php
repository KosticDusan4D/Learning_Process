<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php 
            echo "zdravo";
            echo "<br>";
            $a = 5; //promenljiva $a dobija vrednost 5
            echo $a;
            echo "<br>";
            $dan = "utorak"; //promenaljiva $dan dobija vrednost "utorak"
            echo $dan;
            echo "<br>";
            $a = 3;
            echo $a;
            echo "<br>";
            $a = "Dusan";
            echo $a;
            $i1 = 6;
            $i2 = 5.5;
            echo "<br>";
            $b = 2 + 5;
            echo $b;
            echo "<br>";
            $c = $b - 3; //desna strana: $b - 3 = 7-3 = 4, promenljiva $c dobija vrednost 4
            echo $c;
            echo "<br>";
            $b = $b + 1; //Desna strana: $b +1 = 7+1 = 8, promenjljiva b dobija vrednost 8
            echo $b;
            echo "<br>";
            $b = $b * 2; //Dupliranje vrednosti promenljive
            echo $b;
        ?>
    </p>

    <p>
        <?php 
        //Zadatak 1
            $h = 17;
            $m = 7;
            $god = $h * 60 + $m;
            echo $god;
        // Zadatak 2
            $sati = date('G');
            $minuti = date('i');
            echo "<br>";
            $ukupnoMinuti = $sati * 60 + $minuti;
            echo $ukupnoMinuti;

            echo "<br>";
            echo date('G');
        ?>
    </p>

    <br>
    <br>

    <p>
        <?php
    //Zadatak 3
        echo "KUSUR    ";
        $cena = 1545;
        $nov = 2000;
        $kusur = $nov - $cena;
        echo $kusur;
        echo "<br>";
        echo "<br>";
    //Zadatak 4
        echo "Euri u dinare   ";
        $evri = 50;
        $kurs = 117.58;
        $dinari = $evri * $kurs;
        echo $dinari;
        echo "<br>";
        echo "<br>";
    //Zadatak 5
        echo "Dinari u evre    ";
        $dinari1 = 10000;
        $kurs1 = 117.58;
        $evri1 = $dinari1 / $kurs1;
        echo $evri1;
        echo "<br>";
        echo "<br>";
    //Zadatak 6
        echo " 50 Evra u dolare    ";
        $evri2 = 50;
        $kursdin = 117.58;
        $evrizbir = $evri2 * $kursdin;
        $dolar = $evrizbir / 96.73;
        echo $dolar;
        echo "<br>";
        echo "<br>";
    //Zadatak 7
        echo "50 dolara u evre    ";
        $dol = 50;
        $kursdindol = 96.73;
        $dolarizbir = $dol * $kursdindol;
        $evro3 = $dolarizbir / 117.58;
        echo $evro3;
        echo "<br>";
        echo "<br>";
    //Zadatak 8
        echo "30 stepeni Celzijusa u Farenhajte    ";
        $cel = 30;
        $F = $cel * 1.8 + 32;
        echo $F;
        echo "<br>";
        echo "<br>";

        ?>
    </p>
</body>
</html>