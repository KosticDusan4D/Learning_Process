<?php

    class Osoba{
        private $ime;
        private $prezime;
        private $godinaRodjenja;

        //Konstruktor
        public function __construct($ime, $prezime, $godinaRodjenja){
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setGodinaRodjenja($godinaRodjenja);
        }

        //Seteri
        public function setIme($ime){
            $this->ime = $ime;
        }
        public function setPrezime($prezime){
            $this->prezime = $prezime;
        }
        public function setGodinaRodjenja($godinaRodjenja){
            $this->godinaRodjenja = $godinaRodjenja;
        }

        //Geteri
        public function getIme(){
            return $this->ime;
        }
        public function getPrezime(){
            return $this->prezime;
        }
        public function getGodinaRodjenja(){
            return $this->godinaRodjenja;
        }

        //Metode
        public function stampaj(){
            echo "
            <ul>
                <li>Ime: {$this->getIme()}</li>
                <li>Prezime: {$this->getPrezime()}</li>
                <li>Godina rodjenja: {$this->getGodinaRodjenja()}</li>
            </ul>
            ";
        }
    }

?>