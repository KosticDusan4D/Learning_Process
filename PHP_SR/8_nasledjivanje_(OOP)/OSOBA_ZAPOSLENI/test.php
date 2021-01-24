<?php

    require_once "osoba.php";
    require_once "zaposleni.php";


    $o = new Osoba("Lazar", "Kotromanic", 1990);
    $o->stampaj();

    echo "<hr>";

    $z1 = new Zaposleni("Stefan", "Jakovljevic", 1994, 450, "ekonomista");
    $z2 = new Zaposleni("Jovan", "Ciric", 1986, 550, "Junior Web Developer");
    $z3 = new Zaposleni("Stefan", "Jakovljevic", 1994, 600, "Pravnik");
    $z1->stampajZaposleni();

    echo "<hr>";

    $radnici = array($z1, $z2, $z3);

    function prosekPlate($radnici){
        $suma = 0;
        foreach($radnici as $zaposleni){
            $suma += $zaposleni->getPlata();
        }
        return $suma/count($radnici);
    }

    echo "Prosek plate svih zaposlenih je: " . prosekPlate($radnici);
    

?>