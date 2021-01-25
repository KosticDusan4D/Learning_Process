<?php

    require_once "sportista.php";

    class Kosarkas extends Sportista{
        protected $poeni;

        //Konstruktor
        public function __construct($ime, $prezime, $godRodjenja, $grad, $poeni){
            parent::__construct($ime, $prezime, $godRodjenja, $grad);
            $this->setPoeni($poeni);
        }

        //Seteri
        public function setPoeni($poeni){
            $this->poeni = $poeni;
        }

        //Geteri
        public function getPoeni(){
            return $this->poeni;
        }

        //Metode
        public function stampajKosarkas(){
            echo "
            <ul>
                <li>Ime: {$this->getIme()}</li>
                <li>Prezime: {$this->getPrezime()}</li>
                <li>Godina rodjenja: {$this->getGodRodjenja()}</li>
                <li>Grad: {$this->getGrad()}</li>
                <li>Poeni na poslednjim mecevima: " . implode(", ", $this->poeni) . "</li>
            </ul>
            ";
        }

        public function prosekPoena(){
            $suma = 0;
            foreach($this->poeni as $p){
                $suma += $p;
            }
            return $suma/count($this->poeni);
        }
    }

?>