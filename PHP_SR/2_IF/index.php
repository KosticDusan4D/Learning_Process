<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF naredba grananja</title>
</head>
<body>
    <?php
    
        $a = 5;
        $b = 5;

        if ($a > $b)
        {
            echo "<p>A je vece od B</p>";
        }

        if ($a >= $b)
        {
            echo "<p>A je vece ili jednako B</p>";
        }

        if ($a == $b)
        {
            echo "<p>A je jednako B</p>";
        }

        $br1 = "3"; // Vrednost je 3, Tip je STRING
        $br2 = 3; // Vrednost je 3, Tip je INTEGER

    // POREDJENJE SAMO PO VREDNOSTI
        if ($br1 == $br2)
        {
            echo "<p>br1 == br2</p>";
        }

    // POREDJENJE PO TIPU I PO VREDNOSTI
        if ($br1 === $br2)
        {
            echo "<p>br1 === br2</p>";
        }

        if ("5" != 5)
        {
            echo "<p>Razliciti su</p>";
        }

        if ("5" !== 5)
        {
            echo "<p>Razliciti su</p>";
        }

    // IF - ELSE GRANANJE
        
        $x = 5;
        $y = 6;

        if ($x >= $y)
        {
            echo "<p>X je vece ili jednako Y</p>";
        }
        else
        {
            echo "<p>X je manje od Y</p>";
        }

    //Vezba
    
        $aa = 5;
        $bb = 5;

        if ($aa == $bb)
        {
            echo "<p>aa == bb</p>";
        }
        else
        {
            echo "<p>aa != bb</p>";
        }

    //Zadatak 1.
        
        $a = 10;
        $b = 17;

        if ($a > $b)
        {
            echo "<p>$a</p>";
        }
        else
        {
            echo "<p>$b</p>";
        }

    //Zatarak 2.

        $temp = -1;

        if ($temp >= 0)
        {
            echo "<p>Temperatura je u plusu</p>";
        }
        else
        {
            echo "<p>Temperatura je u minusu</p>";
        }

    //Zadatak 3.

        $pol = "zdw";
        if ($pol == "z")
        {
            echo "<p> <img src='slike/female.png' </p>";
        }
        else
        {
            echo "<p>  <img src='slike/male.jpg' </p>";
        }

    //Zadatak 4.
        
        $ampm = date("a");
        
        if ($ampm == "pm")
        {
            echo "<p> Proslo je 12 sati </p>";
        }
        else
        {
            echo "<p>Nije proslo 12 sati</p>";
        }

    //5. zadatak

        $trengod = date("Y");
        $godiste = 2000;

        if ($trengod - $godiste < 18)
        {
            echo "<p>Osoba nije punoletna</p>";
        }
        else
        {
            echo "<p>Osoba je punoletna</p>";
        }
        

    //6. zadatak

        $a = 11;
        $b = 19;
        $c = 15;

        if ($a > $b)
        {
            $pom = $a;
            $a = $b;
            $b = $pom;
        }
        //Posle ovog if-a u $a je sigurno manji broj nego u $b

        if ($a > $c)
        {
            $pom = $a;
            $a = $c;
            $c = $pom;
        }
        //Posle ovog if-a u $a je sigurno najmanji broj

        if($b > $c)
        {
            $pom = $b;
            $b = $c;
            $c = $pom;
        }
        //Posle ovog if-a $a < $b < $c

        echo "<p> $a < $b < $c </p>"


    ?>
</body>
</html>