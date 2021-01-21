<?php
    require_once "film2.php";

    $film1 = new Film("Kill Bill", "Quentin Tarantino", 2003, [8.5, 9.1, 6.6]);//8.066
    $film2 = new Film("Titanik", "James Cameron", 1997, [9.2, 5.5, 8.9]);//7.86
    $film3 = new Film("300", "Zack Snyder", 2006, [7.6, 8.1, 4.3]);//6.66
    $film4 = new Film("Bekstvo iz Sosenka", "Frank Darabont", 1994, [9.5, 9.7, 8.5]);//9.23

    $filmovi = array($film1, $film2, $film3, $film4);

    function vekFilmova($filmovi, $vek){
        foreach($filmovi as $film){
            // if($vek==21 && $film->getGodinaIzdanja()>=2000){
            //     $film->stampaj();
            // }
            // elseif($vek==20 && $film->getGodinaIzdanja()<2000){
            //     $film->stampaj();
            // }
            //UNIVERZALNIJE
            $godIzdanja = $film->getGodinaIzdanja();
            $vekIzdanja = ceil($godIzdanja/100);
            if($vekIzdanja == $vek){
                $film->stampaj();
            }
        }
    }

    vekFilmova($filmovi, 20);

    echo "<hr>";

    function prosecnaOcena($filmovi){
        $suma = 0;
        foreach($filmovi as $film){
            $suma += $film->prosek();
        }
        $n = count($filmovi);
        if($n > 0){ //Proverava da li niz ocena filmova nije prazan
            return $suma/$n;
        }
        else{
            return $suma;
        }
    }
    
    echo prosecnaOcena($filmovi);

    echo "<hr>";

    // function najboljeOcenjeni($filmovi){
    //     $najbolji = 0;
    //     foreach($filmovi as $film){
    //         $najbolji = $film->prosek();
    //         if($film->prosek() > $najbolji){
    //             $najbolji = $film->prosek();
    //         }
    //     }
    //     // return $najbolji;
    //     foreach($filmovi as $film){
    //         if($najbolji == $film->prosek()){
    //             $film->stampaj();
    //             break;
    //         }
    //     }
    //     return $najbolji;
    // }
    // echo "<p>Najbolje ocenjeni film je:</p>";
    // najboljeOcenjeni($filmovi);

    function najboljeOcenjeni($filmovi){
        $maxOcena = $filmovi[0]->prosek();
        $filmNajbolji = $filmovi[0];
        for($i = 1; $i<count($filmovi); $i++){
            if($filmovi[$i]->prosek() > $maxOcena){
                $maxOcena = $filmovi[$i]->prosek();
                $filmNajbolji = $filmovi[$i];
            }
        }
        return $filmNajbolji;
    }

    $nf = najboljeOcenjeni($filmovi);
    echo "<p>Najbolje ocenjeni film je:</p>";
    $nf->stampaj();


    echo "<hr>";

    // function osrednjiFilm($filmovi){
    //     $prosekSvih = prosecnaOcena($filmovi);
    //     $k = $filmovi[0];
        
    //     foreach($filmovi as $film){
    //         $prvi = $k->prosek();
    //         $najblizi = abs($prosekSvih - $prvi);
    //         $c = abs($prosekSvih - $film->prosek());
    //         if($najblizi > $c){
    //             $najblizi = $c;
    //         }
    //     }
    //     foreach($filmovi as $film){
    //         $c = abs($prosekSvih - $film->prosek());
    //         if($najblizi == $c){
    //             $film->stampaj();
    //         }
    //     }
    // }

    // echo "<p>Najblizi prosecnoj oceni svih filmova je:</p>";
    // osrednjifilm($filmovi);

    function osrednjiFilm($niz) {
        $prosek = prosecnaOcena($niz);
        $najblizaVrednost = abs($niz[0]->prosek() - $prosek);
        $najbliziFilm = $niz[0];
        for($i = 1; $i < count($niz); $i++) {
            $vrednostFilmaI = abs($niz[$i]->prosek() - $prosek);
            if($vrednostFilmaI < $najblizaVrednost) {
                $najblizaVrednost = $vrednostFilmaI;
                $najbliziFilm = $niz[$i];
            }
        }
        return $najbliziFilm;
    }

    $pf = osrednjiFilm($filmovi);
    echo "<p>Najblizi prosecnoj oceni svih filmova je:</p>";
    $pf->stampaj();

    echo "<hr>";

    function najmanjaOcenaNajboljeg($niz){
        $najboljiFilm = najboljeOcenjeni($niz);
        $ocene = $najboljiFilm->getOcene();
        $minOcena = $ocene[0];
        for($i=1; $i<count($ocene); $i++){
            if($ocene[$i] < $minOcena){
                $minOcena = $ocene[$i];
            }
        }
        return $minOcena;
    }

    $mo = najmanjaOcenaNajboljeg($filmovi);
    echo "<p>Najmanja ocena najbolje ocenjenog filma je: $mo</p>";

    echo "<hr>";

    function najmanjaOcena($niz){
        $ocenePrviFilm = $niz[0]->getOcene();
        $minOcena = $ocenePrviFilm[0]; //prva ocena prvog filma i proglasavamo je minimalnom
        foreach($niz as $film){
            $ocene = $film->getOcene();
            foreach($ocene as $o){
                if($o < $minOcena){
                    $minOcena = $o;
                }
            }
        }
        return $minOcena;
    }
    
    $o = najmanjaOcena($filmovi);
    echo "<p>Najmanja ocena koju je dobio bilo koji film je $o.</p>";

    

    




?>