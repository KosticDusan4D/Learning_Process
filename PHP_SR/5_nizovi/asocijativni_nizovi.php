<?php

    //Prvi nacin zadavanja asocijativnih nizova
    $age = array(
        "Pera" => 43,
        "Mika" => 26,
        "Lazar" => 22
    );

    var_dump($age);
    echo "<br>";
    echo $age["Pera"];

    // Drugi nacin zadavanja asocijativnih nizova
    echo "<br>";
    $godine["Rasa"] = 50;
    $godine["Zika"] = 18;
    $godine["Milica"] = 24;
    var_dump($godine);

    foreach($age as $key => $value)
    {
        echo "<p>Element sa kljucem $key ima vrednost $value</p>";
    }

    foreach($godine as $k => $v)
    {
        echo "<p>Element iz niza godine sa kljucem $k ima vrednosti $v</p>";
    }

    foreach($godine as $v)
    {
        echo "<p>Element iz niza godine ima vrednosti $v</p>";
    }

    //foreach petlja moze da se koristi i za indeksne nizove
    $brojevi = array(4, -9, 3.3, 9.04, -13);
    foreach($brojevi as $broj)
    {
        echo $broj . "&nbsp;";
    }
    echo "<br>";

    foreach ($brojevi as $i => $broj)
    {
        echo "<p>Broj sa indeksom $i ima vrednost $broj</p>";
    }

                echo "<hr>";

    // 1. ZADATAK 
    echo "<p style='font-weight: bold;'>1. zadatak</p>";

    $automobili = array(
        "Audi A3" => 2004,
        "Opel Astra" => 2018,
        "Fiat Punto" => 2000,
        "Opel Corsa" => 2003,
        "Ford Focus" => 2015,
        "Peugeot 508" => 2007
    );

    //Ispisati sve automobile, kao i njihova godišta.
    foreach($automobili as $marka => $godiste)
    {
        echo "<p>Automobil $marka proizveden $godiste. godine</p>";
    }

    echo "<br>";

    //Ispisati automobile koji su stariji od 10 godina.
    $trenutnaGodina = date('Y');
    echo $trenutnaGodina;
    foreach ($automobili as $marka => $godiste)
    {
        if($trenutnaGodina - $godiste > 10)
        {
            echo "<p>Automobil $marka stariji je od 10 godina</p>";
        }
    }

    echo "<br>";

    //Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.
    foreach($automobili as $marka => $godiste)
    {
        if(strpos($marka, "Opel") !== false && $godiste >= 2000)
        {
            echo "<p>Automobil $marka proizveden je posle 2000. godine</p>";
        }
    }

    // 2. ZADATAK Dat je niz elemenata u obliku ImeOsobe/Visina.
    echo "<p style='font-weight: bold;'>2. zadatak</p>";

    $visOsb = array(
        "Dusan" => 194,
        "Marko" => 185,
        "Marija" => 165,
        "Zoran" => 200,
        "Vladan" => 175,
        "Ivana" => 169,
        "Jovan" => 200,
    );

                echo "<hr>";

    // 3. ZADATAK Ispisati sve osobe sa njihovim visinama.
    echo "<p style='font-weight: bold;'>3. zadatak</p>";

    foreach($visOsb as $ImeOsobe => $visina)
    {
        echo "<p>$ImeOsobe je visok/a $visina.</p>";
    }

                echo "<hr>";

    // 4. ZADATAK Ispisati sve natprosečno visoke osobe.
    echo "<p style='font-weight: bold;'>4. zadatak</p>";

    $suma = 0;
    $duzina = count($visOsb);
    foreach ($visOsb as $ImeOsobe => $visina)
    {
        $suma += $visina;
    }
    
    $prosVis = $suma / $duzina;

    foreach ($visOsb as $ImeOsobe => $visina)
    {
        if($visina > $prosVis)
        {
            echo "<p>Natprosecno je visok/a $ImeOsobe sa visinom od $visina.</p>";
        }
    }

                echo "<hr>";

    // 5. ZADATAK Ispisati sve osobe koje imaju maksimalnu visinu.
    echo "<p style='font-weight: bold;'>5. zadatak</p>";
    
    $max = 0;

    foreach ($visOsb as $ImeOsobe => $visina)
    {
        $max = $visina;
        
    }
    foreach ($visOsb as $ImeOsobe => $visina)
    {
        if ($max == $visina)
        {
            echo "<p>Maksimalnu visinu $visina ima $ImeOsobe</p>";
        }
    }

                echo "<hr>";

    // 6. ZADATAK Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.
    echo "<p style='font-weight: bold;'>6. zadatak</p>";

    foreach($visOsb as $ImeOsobe => $visina)
    {
        if($visina < $prosVis && strpos($ImeOsobe, "V") === 0)
        {
            echo "<p>Osoba sa visinom ispod proseka i ime joj pocinje na 'V' je $ImeOsobe sa visinom $visina</p>";
        }
    }



?>