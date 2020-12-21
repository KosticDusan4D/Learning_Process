<?php

    $br1 = -5;
    $br2 = 6;
    $br3 = 7;

    // && (Logicko i) - kada imamo, svi izrazi moraju biti tacni da bi izlaz bio true
    // true && true = true - Jedino je true kad su oba true
    // false && true = false
    // false && false = false
    if($br1>=0 && $br2>=0)
    {
        echo "Brojevi $br1 i $br2 su neneagativni";
    }

    // || (Logicko ili) - samo jedan je dovoljno da bude tacan da bi izraz bio tacan

    if($br1 >=0 || $br2>0 || $br3>=0)
    {
        echo "Makar jedan od brojeva $br1, $br2 ili $br3 je nenegativan";
    }

    //Zadatak-primer Godina je prestupna ako je deljiva sa 4 i pri tome nije deljiva sa 100, ili ako je deljiva sa 400

    $god = 1996;
    //Za 1994:(false && true) || false = false || false = false
    //Za 1996:(true & true) || false = true || false = true
    if( ($god%4==0 && $god%100!=0) || $god%400==0 )
    {
        echo "Godina $god je prestupna";
    }
    else
    {
        echo "Godina $god je prosta";
    }

    //22. ZADATAK Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 stepeni Celzijusovih  i veća od 40 stepeni Celzijusovih.

    $temp = 27;

    if ($temp<-15 || $temp>40)
    {
        echo "<p>Ekstremna temperatura</p>";
    }
    else
    {
        echo "<p>Nije ekstremna temperatura</p>";
    }

?>