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
    strpos($str1, $str2) - Funkcija koja "trazi" $str2 u $str1.
    Rezultat koji se vraca:
    1) Ako se $str2 nalazi u $str1 tada funkcija vraca POZICIJU prvog pojavljivanja
    (0, 1, 2, 3, 4,....) - NEKI CEO BROJ
    2) Ako se $str2 ne nalazi u $str1, tada funkcija vraca FALSE - LOGICKU VREDNOST
    */
    /*Kako pitati da li se u stringu $str pojavljuje karakter "a"?
    */
    
    if (strrpos ("Ponedeljak", "P") !== false)
    {
        echo "Nalazi se string 'P'";
    }


?>