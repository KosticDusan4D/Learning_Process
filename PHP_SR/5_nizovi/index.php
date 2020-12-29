<?php

    //Bez nizova:
    $cars1 = "Volvo";
    $cars2 = "BMW";
    $cars3 = "Toyota";

    //SA NIZOVIMA:
    $cars = array("Volvo", "BMW", "Toyota");
    // Elementi niza: "Volvo", "BMW", "Toyota"
    // Indeksni elementi: 0, 1, 2

    echo $cars1;
    echo "<br>";
    var_dump($cars1); // var_dump uglavnom sluzi za debugging i informacije
    echo "<br>";
    var_dump($cars);

    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";

    echo "<hr>";

    $cars[5] = "Audi";
    $cars[1] = "Peugeot";
    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";
    // echo "<p>$cars[3]</p>"; // Elementi niza kojima nije dodeljen index (vrednost) je besmisleno pristupati jer izbacuje gresku
    // echo "<p>$cars[4]</p>";
    echo "<p>$cars[5]</p>";

    //Kreiranje niza polaznika - Primer
    $polaznici = array();
    $polaznici [] = "Marko";
    $polaznici [] = "Marija";
    $polaznici [] = "Ivana";
    $polaznici [] = "Goran";
    $polaznici [] = "Vladan";
    var_dump($polaznici);

    $duzina = count($polaznici); //vraca broj elemenata niza
    for($i = 0; $i < $duzina; $i++)
    {
        echo "<p>$polaznici[$i]</p>";
    }

    echo "<hr>";

    //1. ZADATAK Ispisati sve elemente niza od 5 stringova.
    echo "<p style='font-weight: bold;'>1. zadatak</p>";

    $mobtel = array ("Samsung", "iPhone", "Xiaomi", "Huawei", "Motorola");
    $duzina = count($mobtel);
    
    for($i = 0; $i < $duzina; $i++)
    {
        echo "<p>$mobtel[$i]</p>";
    }

    echo "<hr>";

    //2. ZADATAK Odrediti zbir elemenata celobrojnog niza.
    echo "<p style='font-weight: bold;'>2. zadatak</p>";

    $niz = array(1, 5, 13, 19, 22, 39);
    $duzina = count($niz);
    $suma = 0;

    for ($i = 0; $i < $duzina; $i++)
    {
        $suma += $niz[$i];
    }
    echo $suma;

    echo "<hr>";

    //3. ZADATAK Odrediti srednju vrednost elemenata celobrojnog niza.
    echo "<p style='font-weight: bold;'>3. zadatak</p>";
    
    $niz = array(1, 5, 13, 19, 22, 39);
    $duzina = count($niz);
    $suma = 0;

    for ($i = 0; $i < $duzina; $i++)
    {
        $suma += $niz[$i];
    }
    
    if($duzina == 0)
    {
        echo "<p>Srednja vrednosti niza jednaka je: 0.</p>";
    }
    else
    {
        $sredVred = $suma / $duzina;
        echo "<p>Srednja vrednosti niza jednaka je: $sredVred.</p>";
    }

    echo "<hr>";

    //4. ZADATAK Odrediti maksimalnu vrednost u celobrojnom nizu.
    echo "<p style='font-weight: bold;'>4. zadatak</p>";
                // kostimo stari niz ranije definisan iznad
    $maks = $niz[0];
    for($i = 1; $i < count($niz); $i++)
    {
        if($niz[$i] > $maks)
        {
            $maks = $niz[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza je $maks.</p>";

                echo "<hr>";

    $niz2 = array(5, 14, 1, 8, 14, 8, 1, 14, 7);
    // 4.1 Odrediti PRVO pojavljivanje maksimalne vrednosti
    $maks = $niz2[0];
    for($i = 1; $i < count($niz2); $i++)
    {
        if($niz2[$i] > $maks)
        {
            $maks = $niz2[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza je $maks.</p>";

                echo "<hr>";    

    // 4.2 Odrediti POSLEDNJE pojavljivanje maksimalne vrednosti
    $maks = $niz2[0];
    for($i = 1; $i < count($niz2); $i++)
    {
        if($niz2[$i] >= $maks)
        {
            $maks = $niz2[$i];
        }
    }
    echo "<p>Maksimalna vrednost niza je $maks.</p>";

                echo "<hr>";

    // 5. ZADATAK Odrediti minimalnu vrednost u celobrojnom nizu.
    echo "<p style='font-weight: bold;'>5. zadatak</p>";

    $min = $niz2[0];
    for ($i = 1; $i < count($niz2); $i++)
    {
        if($niz2[$i] < $min)
        {
            $min = $niz2[$i];
        }
    }
    echo "<p>Minimalna vrednost niza je $min.</p>";

                echo "<hr>";

    // 6. ZADATAK Odrediti indeks najvećeg elementa celobrojnog niza.
    echo "<p style='font-weight: bold;'>6. zadatak</p>";

    $niz = array(1, 5, 13, 50, 19, 22, 39);
    $indeks = 0;
    $maks = $niz[0];
    for ($i = 1; $i < count($niz); $i++)
    {
        if($niz[$i] > $maks)
        {
            $maks = $niz[$i];
            $indeks = $i;
        }
    }
    echo "<p>Indeks najveceg elementa niza je $indeks.</p>";

                echo "<hr>";

    // 7. ZADATAK Odrediti broj elemenata celobrojnog niza koji su veći od srednje vrednosti.
    echo "<p style='font-weight: bold;'>7. zadatak</p>";

    $niz = array(1, 5, 13, 19, 22, 39);
    $duzina = count($niz);
    $suma = 0;
    $indeks1 = 0;

    for ($i = 0; $i < $duzina; $i++)
    {
        $suma += $niz[$i];
    }
    
    if($duzina == 0)
    {
        echo "<p>Srednja vrednosti niza jednaka je: 0.</p>";
    }
    else
    {
        $sredVred = $suma / $duzina;
    }

    for ($i = 0; $i < $duzina; $i++)
    {
        if($niz[$i] > $sredVred)
        {
            $indeks1++;
        }
    }
    echo "<p>Broj elemenata cija je vrednost veca od srednje vrednosti je $indeks1.</p>";

                echo "<hr>";

    // 8. ZADATAK Izračunati zbir pozitivnih elemenata celobrojnog niza.
    echo "<p style='font-weight: bold;'>8. zadatak</p>";

    $niz = array(1, -5, 13, 19, -22, 39);
    $suma = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if($niz[$i] > 0)
        {
            $suma += $niz[$i];
        }
    }
    echo "<p>Suma pozitivnih elemenata niza je $suma.</p>";

                echo "<hr>";

    // 8.1 Izracunati srednju vrednost pozitivnih elemenata celobrojnog niza.

    $zbir = 0;
    $broj = 0;
    for ($i = 0; $i < count($niz); $i++)
    {
        if($niz[$i] > 0)
        {
            $zbir += $niz[$i];
            $broj++;
        }
    }
    if ($broj > 0)
    {
        $srvr = $zbir / $broj;
    }
    else
    {
        $srvr = 0;
    }
    echo "<p>Srednja vrednost pozitivnih elemenata niza je $srvr.</p>";

                echo "<hr>";

    // 9. ZADATAK Odrediti broj parnih elemenata u celobrojnom nizu.
    echo "<p style='font-weight: bold;'>9. zadatak</p>";

    $niz = array(1, -5, 13, 19, -22, 39, 40, 55, 38);
    $parni = 0;
    
    for ($i = 0; $i < count($niz); $i++)
    {
        if($niz[$i] % 2 == 0)
        {
            $parni++;
        }
    }
    echo "<p>Broj parnih elemenata u nizu je $parni.</p>";

                echo "<hr>";

    // 10. ZADATAK Izračunati sumu elemenata u nizu sa parnim indeksom.
    echo "<p style='font-weight: bold;'>10. zadatak</p>";

        // 1. varijanta
    $niz = array(1, -5, 13, 19, -22, 39, 40, 55, 38);
    $suma = 0;

    for ($i = 0; $i < count($niz); $i++)
    {
        if($i % 2 == 0)
        {
            $suma += $niz[$i];
        }
    }
    echo "<p>Suma elemenata sa parnim indeksom je $suma.</p>";

                echo "<hr>";

        // 2. varijanta // menjamo brojac da se povecava za 2 i samim tim su parni
    $niz = array(1, -5, 13, 19, -22, 39, 40, 55, 38);
    $suma = 0;

    for ($i = 0; $i < count($niz); $i+=2)
    {
        $suma += $niz[$i];
    }
    echo "<p>Suma elemenata sa parnim indeksom je $suma.</p>";

                echo "<hr>";

    // 11. ZADATAK Promeniti znak svakom elementu celobrojnog niza.
    echo "<p style='font-weight: bold;'>11. zadatak</p>";

    $niz = array(1, -5, 13, 19, -22, 39, 40, 55, 38);
    
    for($i = 0; $i < count($niz); $i++)
    {
        $niz[$i] *=-1;
        echo "$niz[$i], ";
    }

                echo "<hr>";

    // 12. ZADATAK Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.
    echo "<p style='font-weight: bold;'>12. zadatak</p>";

    $niz = array(1, -5, 13, 19, -22, 39, 40, 55, 38);
    
    for($i = 0; $i < count($niz); $i+=2)
    {
        if ($niz[$i] % 2 != 0)
        {
        $niz[$i] *=-1;
        }
    }
    print_r($niz); //var_export slicno radi

                echo "<hr>";
    
    // 13. ZADATAK Odrediti broj parnih elemenata sa neparnim indeksom.
    echo "<p style='font-weight: bold;'>13. zadatak</p>";
    
    $niz = array(1, -5, 13, 19, -22, 39, 40, 55, 38, 60, 3, 8);
    $parni = 0;
    
    for ($i = 1; $i < count($niz); $i +=2)
    {
        if ($niz[$i] % 2 == 0)
        {
            $parni++;
        }
    }
    echo "<p>Broj parnih elemenata sa neparnim indeksom je $parni.</p>";

                echo "<hr>";

    // 14. ZADATAK Ispisati dužinu svakog elementa u nizu stringova.
    echo "<p style='font-weight: bold;'>14. zadatak</p>";

    $imena = array ("Andjelija", "Milos", "Goran", "Ilija", "Dalibor","Ivana", "Kristina");

    echo "<p> Duzine stringova u nizu su: ";
    for ($i = 0; $i < count($imena); $i++)
    {
        $duzina = strlen($imena[$i]);
        echo $duzina . "&nbsp";
    }
    echo "</p>";

                echo "<hr>";

    // 15. ZADATAK Odrediti element u nizu stringova sa maksimalnom dužinom.
    echo "<p style='font-weight: bold;'>15. zadatak</p>";

    $maxDuzina = strlen($imena[0]);
    $stringMaxDuzine = $imena[0];

    for($i = 1; $i < count($imena); $i++)
    {
        if(strlen($imena[$i]) > $maxDuzina)
        {
            $maxDuzina = strlen($imena[$i]);
            $stringMaxDuzine = $imena[$i];
        }
    }
    echo "<p>String sa maksimalnom duzinom je: $stringMaxDuzine</p>";

                echo "<hr>";

    //16. ZADATAK Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu.
    echo "<p style='font-weight: bold;'>16. zadatak</p>";

    $duzina = count($imena);
    $suma = 0;
    $broj = 0;

    for($i = 0; $i < $duzina; $i++)
    {
        $suma += strlen($imena[$i]);
    }
    $srvr = $suma / $duzina;

    for($i = 0; $i < $duzina; $i++)
    {
        if(strlen($imena[$i]) > $srvr)
        {
            $broj++;
        }
    }
    echo "<p>Broj elemenata niza stringova koji imaju vecu duzinu od prosecne je: $broj.</p>";
    
                echo "<hr>";

    //17. ZADATAK Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.
    echo "<p style='font-weight: bold;'>17. zadatak</p>";

    /*
    strpos($str1, $str2) - Funkcija koja "trazi" $str2 unutar $str1.
    Rezultat koji se vraca:
    1) Ako se $str2 nalazi u $str1 tada funkcija vraca POZICIJU prvog pojavljivanja
    (0, 1, 2, 3, 4,....) - NEKI CEO BROJ
    2) Ako se $str2 ne nalazi u $str1, tada funkcija vraca FALSE - LOGICKU VREDNOST
    
    Kako pitati da li se u stringu $str pojavljuje karakter "a"?
    if(strpos($str, 'a') !== false)
    */
    /* PRIMER
    if (strpos ("Ponedeljak", "P") !== false)
    {
        echo "Nalazi se string 'P'";
    }
    */

    // 17. ZADATAK

    $brojSadrziA = 0;

    for($i = 0; $i < count($imena); $i++)
    {
        $ime = $imena[$i];
        if(strpos($ime, "a") !== false)
        {
            $brojSadrziA++;
        }
    }
    echo "<p>Broj imena koja sadrze slovo 'a' je: $brojSadrziA</p>";

                echo "<hr>";

    // 18. ZADATAK Odrediti broj elemenata u nizu stringova koji počinju na slovo 'a' ili 'A'.
    echo "<p style='font-weight: bold;'>18. zadatak</p>";

    $brojPocinjuA = 0;

    for($i = 0; $i < count($imena); $i++)
    {
        $ime = $imena[$i];
        // if(strpos($ime, 'a') === 0 || strpos($ime, 'A') === 0)
        if($imena[$i][0] == 'a' || $imena[$i][0] == 'A')
        //moze oba resenja
        {
            $brojPocinjuA++;
        }
    }
    echo "<p>Broj imena koja pocinju na slovo 'A' ili 'a' je: $brojPocinjuA</p>";

                echo "<hr>";

    // 19. ZADATAK Na osnovu celobrojnog niza $a[0], $a[1], … formirati niz $b[0], $b[1], ... koji sadrži samo pozitivne brojeve.
    echo "<p style='font-weight: bold;'>19. zadatak</p>";

    $a = array(1, 2, 3, 4, 11, 15, -5, -6, -7, -8);
    $b = array();
    $broj = 0;
   

    for ($i = 0; $i < count($a); $i++)
    {
        if($a[$i] > 0)
        {
            $b[$broj++] = $a[$i]; // bolje kao Stefan bez $broj $b[] = $a[$i];
        }
    }
    echo "<p>";
    echo implode(" ,", $b);
    echo "</p>";
    var_dump($b);

                echo "<hr>";

    /*20. ZADATAK Dati su nizovi 
    $a[0], $a[1], …, $a[n - 1] i  
    $b[0], $b[1], …, $b[n - 1]. 
    Formirati niz $c[0], $c[1], …, $c[2n – 1] čiji su elementi 
    $a[0], $b[0], $a[1], $b[1], …, $a[n - 1], $b[n - 1].   */
    echo "<p style='font-weight: bold;'>20. zadatak</p>";
    

    // MOJE LOSE RESENJE
    $a = array(-5, 10, 15, 20, 25, 32, 45);
    $b = array(6, 11, 16, 21, 26, 41, 57);
    $c = array();
    $n = 3;
    $broj = 0;

    for ($i = 0; $i < count($a); $i+=2)
    {
        if($a[$i] > 0 )
        {
            $c[($n - $broj++)] = $a[$i];
        }
    }

    for ($i = 1; $i < count($a); $i+=2)
    {
        if($b[$i] > 0 )
        {
            $c[($n - $broj++)] = $b[$i];
        }
    }

    echo "<p>";
    echo implode(" ,", $c);
    echo "</p>";
    var_dump($c);

    echo "<hr>";

    //RESENJE STEFANOVO DOBRO

    $a = array(-5, 10, 15, 20, 25, 32, 45);
    $b = array(6, 11, 16, 21, 26, 41, 57);
    $c = array();
    
    for ($i = 0; $i < count($a); $i++)
    {
        $c[] = $a[$i];
        $c[] = $b[$i];
    }

    //20. 1 KADA SU RAZLICITE DUZINE NIZOVI

    $a = array(-5, 10, 15, 20, 25, 32, 45, 55, 61, 71);
    $b = array(6, 11, 16, 21, 26, 41, 57);
    $c = array();
    $n = count($a);
    $m = count ($b);

    if($n < $m)
    {
        $k = $n;
    }
    else
    {
        $k = $m;
    }
    
    for ($i = 0; $i < $k; $i++) // 1. petlja
    {
        $c[] = $a[$i];
        $c[] = $b[$i];
    }

    for ($i = $k; $i < count($a); $i++) // 2. petlja
    {
        $c[] = $a[$i];
    }
    for ($i = $k; $i < count($b); $i++) // 3. petlja
    {
        $c[] = $b[$i];
    }

    var_dump($c);

    // 1. slucaj: Niz a ima vise elemenata od niza b
    // Izvrsava se petlja 1 i petlja 2

    // 2. slucaj: Niz b ima vise elemenata od niza a
    // Izvrsava se petlja 1 i petlja 3

    // 3. slucaj: Niz a i b imaju isti broj elemenata
    // Izvrsava se samo 1. petlja


?>