<?php

    //Prikaz brojeva od 1 do 5 preko WHILE petlje
    $i = 1; //inicijalizacija brojaca
    while($i <= 5) // Uslov
    {
        //blok naredbi
        echo "<p>$i</p>";
        $i++; // korekcija brojaca
    }

    echo "<hr>";

    //Prikaz brojeva od 1 do 5 preko for petlje
    for($i = 1; $i <= 5; $i++) // (Inicijalizacija; uslov; korekcija)
    {
        echo "<p>$i</p>";
    }

    echo "<hr>";

    // Tablica mnozenja brojem 9 preko WHILE petlje
    $i = 1;
    while ($i <= 9)
    {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
        $i++;
    }

    echo "<hr>";

    // Tablica mnozenja brojem 9 preko FOR petlje

    for ($i = 1; $i <= 9; $i++)
    {
        $p = 9 * $i;
        echo "<p>9 x $i = $p</p>";
    }

    // Pocevsi od 1 paralelno ispisivati svaki sledeci i svaki drugi broj sve dok neki od njih ne bude  veci od 10

    //Preko WHILE 
    $i = 1;
    $j = 1;
    while($i <= 10 && $j <= 10)
    {
        echo "<p>$i $j</p>";
        $i++;
        $j += 2;
    }

    echo "<hr>";

    //Preko FOR
    for($i = 1, $j = 1; $i <= 10 && $j <= 10; $i++, $j+=2)
    {
        echo "<p>$i $j</p>";
    }

    echo "<hr>";    


    //1. ZADATAK Ispisati brojeve od 1 do 20.
    for($i = 1; $i <= 20; $i++)
    {
        echo "$i ";
    }

    echo "<hr>";

    // 2. ZADATAK Ispisati brojeve od 20 do 1.
    for($i = 20; $i >= 1; $i--)
    {
        echo "$i ";
    }

    echo "<hr>";

    //3. ZADATAK Ispisati parne brojeve od 1 do 20.
    for($i = 2; $i <= 20; $i+=2)
    {
        echo "$i ";
    }

    echo "<hr>";

    // 4. ZADATAK Ispisati dvostruku vrednost brojeva  od 5 do 15.
    for($j = 5; $j <= 15; $j++)
    {
        $p = $j*2;
        echo "$p ";
    }

    echo "<hr>";

    //5. ZADATAK Odrediti sumu brojeva od 1 do 100.

//Bolje je bilo izvaditi zbir izvan
    for ($k = 1, $zbir = 0; $k <= 100; $k++)
    {
        $zbir = $zbir + $k;
    }
    echo "$zbir";

    echo "<hr>";

    //6. ZADATAK Odrediti sumu brojeva od 1 do $n.

    for ($k = 1, $zbir = 0, $n = 10; $k <= $n; $k++)
    {
        $zbir = $zbir + $k;
    }
    echo "$zbir";

    echo "<hr>";

    //7. ZADATAK Odrediti sumu brojeva od $n do $m.

//Bolje je izvaditi promenljive izvan FOR-a, a u for $n da se izjednaci sa $i pa da se tako racuna kako bi moglo da se ispise
    for ($n = 5, $zbir = 0, $m = 9; $n <= $m; $n++)
    {
        $zbir += $n;
    }
    echo "$zbir";

    echo "<hr>";

    //8. ZADATAK Odrediti proizvod brojeva od $n do $m.

//Bolje je izvaditi promenljive izvan FOR-a, a u for $n da se izjednaci sa $i pa da se tako racuna kako bi moglo da se ispise
    for ($n = 2, $proizvod = 1, $m = 6; $n <= $m; $n++)
    {
        $proizvod = $proizvod * $n;
    }
    echo "$proizvod";

    echo "<hr>";

    //9. ZADATAK Odrediti sumu kvadrata brojeva od n do m

//Bolje je izvaditi promenljive izvan FOR-a, a u for $n da se izjednaci sa $i pa da se tako racuna kako bi moglo da se ispise

    for ($n = 3, $suma = 0, $m = 5; $n <= $m; $n++)
    {
        $suma = $suma + $n * $n;
    }
    echo "$suma";

    echo "<hr>";

    //Primer tj varijacija na 9. zadatak: Odrediti kvadrat sume brojeva od $n do $m.
    $n = 3;
    $m = 5;
    $suma = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $suma += $i;
    }
    $kvadrat = $suma**2;
    echo "<p>Kvadrat sume brojeva od $n do $m je: $kvadrat</p>";

    echo "<hr>";

    // 10. ZADATAK Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom prikazati naizmenično ukupno $n sličica.

    // prvo prikazujemo prve 3 slicice
    
    /*
    for($i = 1; $i <= 3; $i++)
    {
        echo "<img src ='slike/$i.png'>";
    }
    */

    //resenje zadatka na 1. nacin
    /*
    $n = 8;
    for($i = 1; $i <= $n; $i++)
    {
        if($i % 3 == 1)
        {
            echo "<img src ='slike/1.png'>";
        }
        elseif($i % 3 == 2)
        {
            echo "<img src ='slike/2.png'>";
        }
        else
        {
            echo "<img src ='slike/3.png'>";
        }
    }
    */

    //NAJBOLJE RESENJE 10. ZADATKA
    $n = 8;
    for($i = 1; $i <= $n; $i++)
    {
        $broj = $i % 3 + 1;
        echo "<img src ='slike/$broj.png'>";
    }

    echo "<hr>";

    //11. ZADATAK Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30.

    $suma = 0;
    for($i = 1; $i <= 30; $i++)
    {
        if($i % 9 == 0)
        {
            $suma += $i;
        }
        
    }
    echo $suma;

    echo "<hr>";

    //12. ZADATAK Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. 22, 33, 44, 55, 66, 77, 88, 99

    $proizvod = 1;
    for($i = 20; $i <= 100; $i++)
    {
        if($i % 11 == 0)
        {
            $proizvod *= $i;
        }
        
    }
    echo $proizvod;

    echo "<hr>";

    //13. ZADATAK Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150.
    
    $br = 0;
    for($i = 5; $i <= 150; $i++)
    {
        if ($i % 13 == 0)
        {
            $br++;
        }

    }
    echo $br;

    echo "<hr>";

    //14. ZADATAK Ispisati aritmetičku sredinu brojeva od $n do $m.
    //1. nacin
    $n = 5;
    $m = 10;
    $suma = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $suma += $i;
    }
    $artm = $suma / ($i - $n);
    echo "Aritmeticka sredina brojeva od $n do $m je $artm.";

    echo "<hr>";

    //2. nacin
    $n = 5;
    $m = 10;
    $suma = 0;
    $uk = 0;
    for($i = $n; $i <= $m; $i++)
    {
        $suma += $i;
        $uk++;
    }
    $artm = $suma / $uk;
    echo "Aritmeticka sredina brojeva od $n do $m je $artm.";

    echo "<hr>";

    //15. ZADATAK Prebrojati koliko brojeva od $n do $m je pozitivno, a koliko njih je negativno.

    $n = -5;
    $m = 7;
    $poz = 0;
    $neg = 0;

    for($i = $n; $i <= $m; $i++)
    {
        if($i >= 0)
        {
            $poz++;
        }
        else
        {
            $neg++;
        }
    }
    echo "Izmedju brojeva $n i $m, pozitivnih je $poz, a negativnih je $neg.";

    echo "<hr>";

    //16. Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.
    
    $n = 5;
    $m = 50;
    $deljivi = 0;

    for($i = $n; $i <= $m; $i++)
    {
        if($i%3==0 || $i%5==0)
        {
            $deljivi++;
        }
        
    }
    echo "Od $n do $m broj brojeva deljivih sa 3 i 5 je $deljivi. ";

    echo "<hr>";

    //17. ZADATAK Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.

    $n = 11;
    $m = 25;
    $suma = 0;
    $br = 0;

    for($i = $n; $i <= $m; $i++)
    {
        if($i%10==4 && $i%2==0)//$i%2==0 je suvisno jer ako se zavrsava na 4 je svakako paran
        {
            $suma += $i;
            $br++;
        }
    }
    echo "Suma je $suma i broj im je $br.";

    echo "<hr>";

    //18. ZADATAK Ispisati brojeve od $n do $m, koji su deljivi sa $a.

    $n = 10;
    $m = 150;
    $a = 16;

    for($i = $n; $i <= $m; $i++)
    {
        if($i % $a == 0)
        {
            echo "$i ";
        }
    }

    echo "<hr>";

    //19. ZADATAK Ispisati brojeve od $n do $m koji nisu deljivi sa $a.

    $n = 10;
    $m = 20;
    $a = 7;

    for($i = $n; $i <= $m; $i++)
    {
        if($i % $a > 0)
        {
            echo "$i ";
        }
    }

    echo "<hr>";
    
    //20. Odrediti sumu brojeva od $n do $m koji nisu deljivi brojem $a.

    $n = 10;
    $m = 20;
    $a = 7;
    $suma = 0;

    for($i = $n; $i <= $m; $i++)
    {
        if($i % $a > 0)
        {
            $suma += $i;
        }
    }
    echo "Suma je $suma";


    echo "<hr>";

    //21. ZADATAK Odrediti proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu brojem $b.

    $n = 10;
    $m = 30;
    $a = 7;
    $b = 6;
    $proizvod = 1;

    for($i = $n; $i <= $m; $i++)
    {
        if($i%$a==0 && $i%$b>0)
        {
            $proizvod *= $i;
        }
    }
    echo "Proizvod je $proizvod";


?>