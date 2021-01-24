<?php

    require_once "vozilo.php";

    class Motocikl extends Vozilo{
        private $kubikaza;
        protected $konjaza;

        //Konstruktor
        public function __construct($tip, $boja, $kubikaza, $konjaza){
            parent::__construct($tip, $boja);
            $this->setKubikaza($kubikaza);
            $this->setKonjaza($konjaza);
        }

        //Seteri
        public function setKubikaza($kubikaza){
            $this->kubikaza = $kubikaza;
        }
        public function setKonjaza($konjaza){
            $this->konjaza = $konjaza;
        }

        //Geteri
        public function getKubikaza(){
            return $this->kubikaza;
        }
        public function getKonjaza(){
            return $this->konjaza;
        }

        //Metode
        function stampaj(){
            echo "
            <ul>
                <li>Tip: {$this->getTip()}</li>
                <li>Boja: {$this->getBoja()}</li>
                <li>Kubikaza: {$this->getKubikaza()}</li>
                <li>Konjaza: {$this->getKonjaza()}</li>
            </ul>
            ";
        }
    }

?>