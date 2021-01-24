<?php

    class Vozilo{
        //Polja
        private $tip;
        private $boja;

        //Konstruktor
        public function __construct($tip, $boja){
            $this->setTip($tip);
            $this->setBoja($boja);
        }

        //Seteri
        public function setTip($tip){
            $this->tip = $tip;
        }
        public function setBoja($boja){
            $this->boja = $boja;
        }

        //Geteri
        public function getTip(){
            return $this->tip;
        }
        public function getBoja(){
            return $this->boja;
        }

        //Metode
        public function ispisiVozilo(){
            echo "<p>Vozilo u pokretu</p>";
        }
    }

?>