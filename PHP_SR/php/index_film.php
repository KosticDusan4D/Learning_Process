<?php

//FUNKCIJE ZA POZIVANJE DRUGIH FAJLOVA
    //include "film.php"; // Ako dati fajl ne postoji, onda ignorise tu gresku i nastavlja dalje
    //require "film.php"; // Ako dati fajl ne postoji, generise gresku i prekida izvrsenje programa
    //include_once "film.php"; // Isto kao include, samo proverava da li je dati fajl vec ukljucen, i ako jeste, ne ukljucuje ga ponovo
    require_once "film.php"; //Isto kao require, samo proverava da li je dati fajl vec ukljucen, i ako jeste, ne ukljucuje ga ponovo

    $film1 = new Film("Kill Bill", "Quentin Tarantino", 2003, 8.7);
    $film1->stampaj();
    echo "<hr>";
    $film2 = new Film("Titanik", "James Cameron", 1997, 9.2);
    $film2->stampaj();
    echo "<hr>";
    $film3 = new Film("300", "Zack Snyder", 2006, 7.6);
    $film3->stampaj();
    echo "<hr>";
    $film4 = new Film("Bekstvo iz Sosenka", "Frank Darabont", 1994, 9.5);
    $film4->stampaj();
    echo "<hr>";
    $filmovi = array($film4, $film1, $film2, $film3);

    //Ispisati filmove koji su izasli u 21. veku
    function filmovi21Vek($films){
        foreach($films as $film){
            if($film->getGodinaIzdanja() > 2000){
                $film->stampaj();
            }
        }
    }

    echo "<p>Filmovi koji su izasli u 21. veku su:</p>";
    filmovi21Vek($filmovi);

    echo "<hr>";

    // Odrediti prosecnu ocenu svih filmova

    function prosecnaOcena($films){
        $suma = 0;
        foreach($films as $film){
            $suma += $film->getOcena();
        }
        $n = count($films);
        if($n > 0){
            $arsr = $suma / $n;
        }
        else{
            $arsr = $suma; //ako nema filmova suma ostaje 0
        }
        return $arsr;
    }

    echo "Prosecna ocena svih filmova je: " . prosecnaOcena($filmovi);

    echo "<hr>";

    // Odrediti najbolje ocenjeni film

    function ispisNajboljeOcenjenog($films){
        $maxOcena = 0;
        foreach($films as $film){
            if($film->getOcena() > $maxOcena){
                $maxOcena = $film->getOcena();
            }
        }

        foreach($films as $film){
            if($maxOcena == $film->getOcena()){
                $film->stampaj();
                //break AKO zelimo da prekinemo kad nadjemo jedan film sa tom maxOcenom, u slucaju da ih ima vise sa istom ocenom(najvisom)
            }
        }
    }

    echo "Najbolje ocenjeni film:";
    echo ispisNajboljeOcenjenog($filmovi);



?>