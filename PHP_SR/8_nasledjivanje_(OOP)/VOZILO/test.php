<?php

    require_once "vozilo.php";
    require_once "automobil.php";
    require_once "kamion.php";
    require_once "motocikl.php";

    $v = new Vozilo("dron", "bela");
    $v->ispisiVozilo();

    $a = new Automobil("Karavan", "crvena", 5);
    $a->ispisiAutomobil();
    $a->ispisiVozilo();

    $k = new Kamion("Kamion sa prikolicom", "Sivo - crvena", "18 tona", 16);
    $k->stampaj();

    echo "<hr>";

    $m = new Motocikl("Motocikl - Sportski", "crna", "1000ccm", "100kW(136KS)");
    $m->stampaj();


?>