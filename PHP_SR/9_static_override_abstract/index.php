<?php

    require_once "kredit.php";
    require_once "ObicanKredit.php";
    require_once "AmortizovanKredit.php";

    //15. i 16. SLAJD ZADATAK

    $krediti = array();

    for($i = 0; $i < 6; $i++){
        $br = rand(0,2);
        
        // if($br == 0){
        //     $krediti[$i] = new Kredit(10, 1000, 1, "Kes kredit");
        // }
        if($br == 1){
            $krediti[$i] = new ObicanKredit(20, 2000, 2);
        }
        else{
            $krediti[$i] = new AmortizovanKredit(30, 3000, 3);
        }
    }

    foreach($krediti as $kredit){
        $kredit->stampajKredit();
        echo "<p>" . get_class($kredit) . "</p>";//Ovo se ja zezam, isprobavam  ugradjenu f-ju
    }

?>