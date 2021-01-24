<?php
    require_once "vozilo.php";

    class Automobil extends Vozilo{

        private $brSedista;

        //Konstruktor
        public function __constructor($tip, $boja, $brSedista){
            //Moguce je pozivati roditeljske setere ali nije prakticno. Prakticnije je pozvati roditeljski konstruktor.
            //$this->setTip($tip);
            //$this->setBoja($boja);
            parent::__construct($tip, $boja);
            $this->setBrSedista($brSedista);
        }

        //Seteri - samo za sopstvena polja
        public function setBrSedista($brSedista){
            $this->brSedista = $brSedista;
        }

        //Geteri - samo za sopstvena polja
        public function getBrSedista(){
            return $this->brSedista;
        }

        //Metode
        public function ispisiAutomobil(){
            echo "<p>Automobil u pokretu</p>";
        }
    }

?>