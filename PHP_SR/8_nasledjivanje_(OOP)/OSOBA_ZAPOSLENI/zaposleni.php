<?php

    require_once "osoba.php";

    class Zaposleni extends Osoba{
        protected $plata;
        protected $pozicija;

        //Konstruktor
        public function __construct($ime, $prezime, $godinaRodjenja, $plata, $pozicija){
            parent::__construct($ime, $prezime, $godinaRodjenja);
            $this->setPlata($plata);
            $this->setPozicija($pozicija);
        }

        //Seteri
        public function setPlata($plata){
            $this->plata = $plata;
        }
        public function setPozicija($pozicija){
            if($pozicija == "ekonomista"){
                echo "<p>Zaposlen u ekonomskom sektoru.</p>";
            }
            else{
                $this->pozicija = $pozicija;
            }
        }

        //Geteri
        public function getPlata(){
            return $this->plata;
        }
        public function getPozicija(){
            return $this->pozicija;
        }

        //Metode
        public function stampajZaposleni(){
            echo "
            <ul>
                <li>Ime: {$this->getIme()}</li>
                <li>Prezime: {$this->getPrezime()}</li>
                <li>Godina rodjenja: {$this->getGodinaRodjenja()}</li>
                <li>Plata: {$this->getPlata()} €</li>
                <li>{$this->getPozicija()}</li>
            </ul>
            ";
        }
    }

?>