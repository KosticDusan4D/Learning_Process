<?php

    //Napravih i ovu test stranu da testiram klasu i podklasu, pa kad sam vec napravio nisam hteo da brisem da bi i vi lakse videli i testirali. Pozdrav :)

    require_once "sportista.php";
    require_once "kosarkas.php";

    $kosarkas1 = new Kosarkas("Vlade", "Divac", 1968, "Prijepolje", [32, 12, 38, 15, 20]);
    $kosarkas2 = new Kosarkas("Pedja", "Stojakovic", 1977, "Pozega", [25, 41, 30, 14]);
    $kosarkas3 = new Kosarkas("Aleksandar", "Djordjevic", 1967, "Beograd", [40, 20, 14, 16, 5, 17, 14]);

    $kosarkasi = array($kosarkas1, $kosarkas2, $kosarkas3);
    
    foreach($kosarkasi as $kosarkas){
        $kosarkas->stampajKosarkas();
    }

    echo "<hr>";

    function najviseUtakmica($kosarkasi){
        $kosarkasMax = $kosarkasi[0];
        $max = count($kosarkasMax->getPoeni());

        foreach($kosarkasi as $kosarkas){
            $brUtakmica = count($kosarkas->getPoeni());
            if($brUtakmica > $max){
                $kosarkasMax = $kosarkas;
                $max = $brUtakmica;
            }
        }
        return $kosarkasMax;
    }

    $najviseUtakmicaKosarkas = najviseUtakmica($kosarkasi);
    $najviseUtakmicaKosarkas->stampajKosarkas();

    echo "<hr>";

    function najvisePoena($kosarkasi){
        $kosarkasMax = $kosarkasi[0];
        $poeni = $kosarkasi[0]->getPoeni(); //Za prvog kosarkasa uzima niz poena
        $max = $poeni[0]; //Iz uzetog niza uzima poene na prvoj utakmici

        foreach($kosarkasi as $k){
            $poeni = $k->getPoeni();
            foreach($poeni as $p){
                if($p > $max){
                    $max = $p;
                    $kosarkasMax = $k;
                }
            }
        }
        return $kosarkasMax;
    }

    najvisePoena($kosarkasi)->stampajKosarkas();

    echo "<hr>";

    function najviseProsecnoPoena($kosarkasi){
        $kosarkasAvgMax = $kosarkasi[0];
        $avgMax = $kosarkasAvgMax->prosekPoena();
        foreach($kosarkasi as $k){
            if($k->prosekPoena() > $avgMax){
                $avgMax = $k->prosekPoena();
                $kosarkasAvgMax = $k;
            }
        }
        return $kosarkasAvgMax;
    }

    najviseProsecnoPoena($kosarkasi)->stampajKosarkas();
    

?>