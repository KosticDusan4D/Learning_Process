<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        // Ispisati brojeve 0, 1, 2, 3, 4 (Pocetni primer sa prezentacije)
        $i = 0;

        while($i < 5)
        {
            echo "<p>$i</p>";
            $i++;
        }

        echo "<p>KRAJ PETLJE</p>";

        $j = -2;
        while($j < 5)
        {
            echo "<p>$j</p>";
            $j++;
        }
        echo "<p>Vrednost promenljive j nakon 1. petlje je $j</p>";
        echo "<hr>";

        while($j <= 10)
        {
            echo "<p>$j</p>";
            $j++;
        }
        echo "<p>Vrednost promenljive j nakon 2. petlje je $j</p>";

        //EKVIVALENTI IZRAZI SU
        $i++;
        $i = $i + 1;
        $i += 1; //Ovako se sazima da bude skraceno a u principu je iznad

        $i = $i +2;
        $i += 2;

        $i--;
        $i = $i = 1;
        $i -= 1;

        //PRIMER
        $i = $i + 2 + $j;
        $i += 2 + $j;

        //1. ZADATAK a)
        $a = 1;
        
        while($a <= 20)
        {
            echo "$a ";
            $a++;
        }
        echo "<hr>";

        //1. ZADATAK b)
        $a = 1;
        
        while($a <= 20)
        {
            echo "<p>$a</p>";
            $a++;
        }
        echo "<hr>";

        //2. ZADATAK Ispisati brojeve od 20 do 1.

        $a = 20;

        while($a>=1)
        {
            echo " $a ";
            $a--;
        }
        echo "<hr>";

        //3. ZADATAK Ispisati parne brojeve od 1 do 20

        $a = 2;

        while($a<=20)
        {
            echo " $a ";
            $a+=2;
        }
        echo "<hr>";

        //4. ZADATAK Kreirati n paragrafa sa proizvoljnim tekstom i naizmenično ih obojiti u tri različite boje

        //1. nacin
        $n = 7;
        $par = 0;

        while($par < $n)
        {
            if($par%3==0)
            {
                echo "<p style='color: red'>Neki tekst $par...</p>";
            }
            elseif ($par%3==1)
            {
                echo "<p style='color: green'>Neki tekst $par...</p>";
            }
            else
            {
                echo "<p style='color: blue'>Neki tekst $par...</p>";
            }
            $par++;
        }
        echo "<hr>";

        //2. nacin - za skracivanje pisanja u if, nije obavezno ali fino resenje da se manji kucanje

        $n = 7;
        $par = 0;

        while($par < $n)
        {   
            echo "<p style='color:";

            if($par%3==0)
            {
                echo "red";
            }
            elseif ($par%3==1)
            {
                echo "green";
            }
            else
            {
                echo "blue";
            }

            echo "'>Neki tekst $par...</p>";

            $par++;
        }
        echo "<hr>";

        //3. nacin Dodatno skracivanje pisanja u ovom nacinu

        $n = 7;
        $par = 0;

        while($par < $n)
        {   
            $boja = "blue";

            if($par%3==0)
            {
                $boja = "red";
            }
            elseif ($par%3==1)
            {
                $boja = "green";
            }

            echo "<p style='color: $boja'>Neki tekst $par...</p>";

            $par++;
        }
        echo "<hr>";

        //5. ZADATAK Kreirati n proizvoljnih slika i staviti im naizmenično dva različita okvira
        //1. nacin
        $n = 4;
        $k = 0;

        while($k < $n)
        {
            if($k % 2 == 0)
            {
                echo "<img src='php.png' class='zeleniOkvir'>";
            }
            else
            {
                echo "<img src='php.png' class='plaviOkvir'>";
            }

            $k++;
        }

        echo "<hr>";

        //2. nacin
        $n = 4;
        $k = 0;

        while($k < $n)
        {
            $klasa = "plaviOkvir";
            if($k % 2 == 0)
            {
                $klasa = "zeleniOkvir";
            }
            
            echo "<img src='php.png' class='$klasa'>";

            $k++;
        }

        echo "<hr>";

        //6. ZADATAK Odrediti sumu brojeva od 1 do 100

        $br = 1;
        $suma = 0;

        while($br <=100)
        {
            // $suma = $suma + $br;
            $suma += $br;
            $br++;
        }

        echo "<p>Suma je: $suma</p>";

        echo "<hr>";

        //9. ZADATAK Odrediti proizvod brojeva od n do m

        $n = 2;
        $m = 6;
        $p = 1;

        while($n <= $m)
        {
            // $p = $p * $n;
            $p *= $n;
            $n++;
        }

        echo "<p>Proizvod brojeva od 2 do $m je $p</p>";
        echo "<hr>";

        //7. ZADATAK Odrediti sumu brojeva od 1 do n

        $br = 1;
        $n = 10000;
        $suma = 0;

        while($br <= $n)
        {
            // $suma = $suma + $br;
            $suma += $br;
            $br++;
        }

        echo "<p>Suma je: $suma</p>";

        echo "<hr>";

        //8. ZADATAK Odrediti sumu brojeva od n do m

        $n = 10;
        $m = 15;
        $suma = 0;

        while($n <= $m)
        {
            // $suma = $suma + $br;
            $suma += $n;
            $n++;
        }

        echo "<p>Suma je: $suma</p>";

        echo "<hr>";

        //10. ZADATAK Odrediti sumu kvadrata parnih i sumu kubova neparnih brojeva od n do m

        $sumaKv = 0;
        $sumaKub = 0;
        $n = 3;
        $m = 7;

        while ($n <= $m)
        {
            if($n % 2 == 0)
            {
                // $sumaKv = $sumaKv + $n * $n;
                $sumaKv += $n**2;
            }
            else
            {
                // $sumaKub = $sumaKv + $n * $n * $n;
                $sumaKub += $n**3;
            }
            $n++;
        }

        echo "<p>Suma kvadrata je: $sumaKv <br> Suma kubova je: $sumaKub</p><hr>";

        //11. ZADATAK Odrediti sa koliko brojeva je deljiv uneti broj k

        $k = 12;
        $d = 1;
        $deljiv = 0; 

        while ($d <= $k)
        {
            if($k % $d == 0)
            {
                $deljiv++;
            }
            $d++;
        }
        echo "<p>$deljiv</p><hr>";

        //12. ZADATAK Odrediti da li je dati prirodan broj n prost. Broj je prost ako je deljiv samo sa jedan i sa samim sobom.

        //1. NACIN
        $n = 12;
        $br = 1;
        $deljivi = 0;

        while ($br <= $n)
        {
            if($n % $br == 0)
            {
                $deljivi++;
            }
            $br++;
        }

        if ($deljivi == 2)
        {
            echo "<p>Broj je prost</p>";
        }
        else
        {
            echo "<p>Broj nije prost</p>";
        }

        //2. NACIN
        $n = 3;
        $br = 2;
        $prost = true; //ovo je flag, koji se koristi da bi se pokazalo nesto

        while($br <= $n/2)
        {
            if($n % $br == 0)
            {
                $prost = false;
                break; //Prvi put kad ispuni uslov prekida dalje ispitivanje
            }
            $br++;
        }
        if($prost == true)//Moze i bez ==true jer je vec definisano da je true
        {
            echo "<p>Broj je prost</p>";
        }
        else
        {
            echo "<p>Broj nije prost</p>";
        }

    ?>
    
</body>
</html>