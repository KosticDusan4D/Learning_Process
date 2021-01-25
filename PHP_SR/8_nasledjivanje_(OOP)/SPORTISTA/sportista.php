<?php

    class Sportista{
        private $ime;
        private $prezime;
        private $godRodjenja;
        private $grad;

        //Konstruktor
        public function __construct($ime, $prezime, $godRodjenja, $grad){
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setGodRodjenja($godRodjenja);
            $this->setGrad($grad);
        }

        //Seteri
        public function setIme($ime){
            $this->ime = $ime;
        }
        public function setPrezime($prezime){
            $this->prezime = $prezime;
        }
        public function setGodRodjenja($godRodjenja){
            $this->godRodjenja = $godRodjenja;
        }
        public function setGrad($grad){
            $this->grad = $grad;
        }

        //Geteri
        public function getIme(){
            return $this->ime;
        }
        public function getPrezime(){
            return $this->prezime;
        }
        public function getGodRodjenja(){
            return $this->godRodjenja;
        }
        public function getGrad(){
            return $this->grad;
        }

        //Metode
        public function stampajSportista(){
            echo "
            <ul>
                <li>Ime: {$this->getIme()}</li>
                <li>Prezime: {$this->getPrezime()}</li>
                <li>Godina rodjenja: {$this->getGodRodjenja()}</li>
                <li>Grad: {$this->getGrad()}</li>
            </ul>
            ";
        }
    }

?>