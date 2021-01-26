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

    $k4 = new ObicanKredit(35, 8000, 10);
    $k4->stampajKredit();
    echo "Mesecna rata je: " . $k4->mesecnaRataObican();

    echo "<hr>";

    $k5 = new AmortizovanKredit(25, 600, 2);
    $k5->stampajKredit();
    echo "Mesecna rata je: " . $k5->mesecnaRataAmortizovan();
    


?>