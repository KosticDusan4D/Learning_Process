<?php

    require_once "kredit.php";

    Kredit::setDefaultBrGod(-5);
    Kredit::setPodGodKamata(-25);

    $k1 = new Kredit(-5, 1000, 2, "Kes kredit");
    $k1->stampajKredit();

    echo "<hr>";
    
    $k2 = new Kredit(10, 2000, -3, "Refinansiranje"); //-3 je prepravio na 5 jer smo gore definisali
    $k2->stampajKredit();

?>