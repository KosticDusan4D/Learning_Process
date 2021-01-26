<?php

    class Kredit{
        protected $godKamata;
        protected $osnovica;
        protected $brGod;
        protected $tip;

        private static $defaultBrGod; //static se dodaje, a moze biti i private,protected ili public
        private static $podGodKamata;
        private static $brojKredita = 0;

        public const DEFAULT_OSNOVICA = 1000;
    
        //Konstruktor
        public function __construct($godKamata, $osnovica, $brGod, $tip){
            $this->setGodKamata($godKamata);
            $this->setOsnovica($osnovica);
            $this->setBrGod($brGod);
            $this->setTip($tip);
            self::$brojKredita++;
        }

        //Destruktor
        public function __destruct(){
            self::$brojKredita--;
        }

        //Seteri
        public function setGodKamata($godKamata){
            if($godKamata <= 0){
                $this->godKamata = self::$podGodKamata;
            }
            elseif($godKamata <= 100){
                $this->godKamata = $godKamata;
            }
            else{
                $this->godKamata = self::$podGodKamata;
            }
        }
        public function setOsnovica($osnovica){
            if($osnovica>self::DEFAULT_OSNOVICA){
                $this->osnovica = $osnovica;
            }
            else{
                $this->osnovica = self::DEFAULT_OSNOVICA;
            }
        }
        public function setBrGod($brGod){
            if($brGod>0){
                $this->brGod = ceil($brGod); //Da se zaokruzuje broj godina na veci jer se trazi u zadatku
            }
            else{
                $this->brGod = self::$defaultBrGod; //Kada smo unutar klase moze da se pristupi statickom polju sa self:: , a van klase se navodi ime klase:: u ovom slucaju Kredit::.
            }
        }
        public function setTip($tip){
            $this->tip = $tip; //if(is_string($tip)) ovim moze da se pita da li je string
        }
        public static function setDefaultBrGod($brGod){
            if($brGod > 0){
                self::$defaultBrGod == ceil($brGod);
            }
            else{
                self::$defaultBrGod = 5;
            }
        }
        public static function setPodGodKamata($godKamata){
            if($godKamata < 20){
                self::$podGodKamata = 20;
            }
            elseif($godKamata <= 100){
                self::$podGodKamata = $godKamata;
            }
            else{
                self::$podGodKamata = 100;
            }
        }

        //Geteri
        public function getGodKamata(){
            return $this->godKamata;
        }
        public function getOsnovica(){
            return $this->osnovica;
        }
        public function getBrGod(){
            return $this->brGod;
        }
        public function getTip(){
            return $this->tip;
        }
        public static function getDefaultBrGod(){
            return self::$defaultBrGod;
        }
        public static function getPodGodKamata(){
            return self::$podGodKamata;
        }
        public static function getBrojKredita(){
            return self::$brojKredita;
        }

        //Metode
        public function stampajKredit(){
            echo "
            <ul>
                <li>Godisnja kamatna stopa: {$this->getGodKamata()}%</li>
                <li>Osnovica: {$this->getOsnovica()}</li>
                <li>Broj godina otplate: {$this->getBrGod()}</li>
                <li>Tip kredita: {$this->getTip()}</li>
            </ul>
            ";
        }
    }


?>