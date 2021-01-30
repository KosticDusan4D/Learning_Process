<?php

    require_once "kredit.php";
    require_once "ObicanKredit.php";
    require_once "AmortizovanKredit.php";

    Kredit::setDefaultBrGod(-5);
    Kredit::setPodGodKamata(-25);

    $k1 = new Kredit(-5, 1001, 2, "Kes kredit");
    $k1->stampajKredit();

    echo "<hr>";
    
    $k2 = new Kredit(10, 2000, -3, "Refinansiranje"); //-3 je prepravio na 5 jer smo gore definisali
    $k2->stampajKredit();

    $k3 = new Kredit(15, 1000, 7, "bla bla bla");

    unset($k1, $k2); //ponistava objekat

    echo "<hr>";

    echo "Broj aktivnih kredita je: " . Kredit::getBrojKredita();

    $k = Kredit::DEFAULT_OSNOVICA + 3;
    echo "<p>Broj godina + 3 = $k</p>";

    echo "<hr>";

    echo "<p>Obican kredit:</p>";
    $k4 = new ObicanKredit(35, 8000, 10);
    $k4->stampajKredit();
    echo "Mesecna rata je: " . $k4->mesecnaRata();

    echo "<hr>";
    
    echo "<p>Amortizovan kredit:</p>";
    $k5 = new AmortizovanKredit(25, 600, 2);
    $k5->stampajKredit();
    echo "Mesecna rata je: " . $k5->mesecnaRata();

    echo "<hr>";

    $k6 = new ObicanKredit(20, 1000, 2);
    $mr1 = $k6->mesecnaRata();
    echo "<p>Mesecna rata za obican kredit je: $mr1.</p>";

    $k7 = new AmortizovanKredit(20, 1000, 2);
    $mr2 = $k7->mesecnaRata();
    echo "<p>Mesecna rata za obican kredit je: $mr2.</p>";

    echo "<hr>";

    $krediti = array($k3, $k4, $k5, $k6, $k7);

    foreach($krediti as $kredit){
        /*
        if($kredit objekat klase ObicanKredit){
            $kredit->mesecnaRataObican();
        }
        elseif($kredit objekat klase AmortizovanKredit){
            $kredit->mesecnaRataAmortizovan();
        }
        elseif($kredit objekat klase kredit){
            //Radi nesto sa ovim objektom ili ga preskoci
        }
        */
        $kredit->stampajKredit();
    }

    echo "<hr>";

    echo get_class($k6); // POZIVA IME KLASE KOJOJ PRIPADA OBJEKAT
    


?>