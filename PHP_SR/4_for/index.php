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





?>