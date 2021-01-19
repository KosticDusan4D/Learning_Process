<?php
    require_once "pacijent.php";

    $pacijent1 = new Pacijent("Bojan", 195, 100);
    $pacijent2 = new Pacijent("Marija", 165, 55);
    $pacijent3 = new Pacijent("Srdjan", 184, 98);

    $nizPacijenata = array($pacijent1, $pacijent2, $pacijent3);

    //Ispisati podatke o pacijentu sa najmanjom težinom.

    function najlaksiPacijent($pacijenti){
        $j = $pacijenti[0];
        $minTezina = $j->getTezina();
        foreach($pacijenti as $pac){
            if($minTezina > $pac->getTezina()){
                $minTezina = $pac->getTezina();
            }
        }
        
        foreach($pacijenti as $pac){
            if($minTezina == $pac->getTezina()){
                $pac->stampaj();
                break;
            }
        }
    }

    echo "Podaci od pacijentu sa najmanjom tezinom su:";
    echo najlaksiPacijent($nizPacijenata);

    echo "<hr>";

    // Ispisati podatke o pacijentu sa najvećom bmi vrednošću.

    function najveciBmi($pacijenti){
        $maxBmi = 0;
        
        foreach($pacijenti as $pac){
            if($pac->bmi($pac) > $maxBmi){
                $maxBmi = $pac->bmi($pac);
            }
        }

        foreach($pacijenti as $pac){
            if($maxBmi == $pac->bmi($pac)){
                $pac->stampaj();
                break;
            }
        }
    }

    echo "Podaci od pacijentu sa najvecim BMI indeksom su:";
    echo najveciBmi($nizPacijenata);

    echo "<hr>";

    // Ispisati sve pacijente čije ime sadrži slovo A.

    function sadrziA($pacijenti){
        foreach($pacijenti as $pac){
            if(strpos ($pac->getIme(), "a") !== false || strpos ($pac->getIme(), "a") !== false){
                $pac->stampaj();
            }
        }
    }

    echo "Pacijenti cije ime sadrzi slovo 'A' su:";
    echo sadrziA($nizPacijenata);

    echo "<hr>";

    // Napraviti funkciju srednjaVisina kojoj se prosleđuje niz pacijenata a koja određuje i vraća sredju visinu pacijenta

    function srednjaVisina($pacijenti){
        $suma = 0;
        $brojac = 0;
        foreach($pacijenti as $pac){
            $suma += $pac->getVisina();
            $brojac++;
        }
        return $suma/$brojac;
    }

    echo "Srednja visina pacijenata je: " . srednjaVisina($nizPacijenata);




?>