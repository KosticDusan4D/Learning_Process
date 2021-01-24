<?php
    require_once "vozilo.php";

    class Kamion extends Vozilo{
        private $nosivost;
        private $brojTockova;

        //Konstruktor
        public function __construct($tip, $boja, $nosivost, $brojTockova){
            parent::__construct($tip, $boja);
            $this->setNosivost($nosivost);
            $this->setBrojTockova($brojTockova);

        }

        //Seteri
        public function setNosivost($nosivost){
            $this->nosivost = $nosivost;
        }
        public function setBrojTockova($brojTockova){
            $this->brojTockova = $brojTockova;
        }

        //Geteri
        public function getNosivost(){
            return $this->nosivost;
        }
        public function getBrojTockova(){
            return $this->brojTockova;
        }

        //Metode
        public function stampaj(){
            echo "
            <ul>
                <li>Tip: {$this->getTip()}</li>
                <li>Boja: {$this->getBoja()}</li>
                <li>Nosivost: {$this->getNosivost()}</li>
                <li>Broj tockova: {$this->getBrojTockova()}</li>
            </ul>
            ";
        }
    }

?>