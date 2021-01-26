<?php

    require_once "kredit.php";

    class ObicanKredit extends Kredit{

        public const TIP = "Obican kredit";

        //Konstruktor
        public function __construct($godKamata, $osnovica, $brGod){
            parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
        }

        public function mesecnaRataObican(){
            $osnovica = $this->getOsnovica();
            $brGodina = $this->getBrGod();
            $godisnjaKamata = $this->getGodKamata();
            $mesecnaRata = (($osnovica + ($osnovica * $brGodina * ($godisnjaKamata / 100)))/($brGodina * 12));
            return $mesecnaRata;
        }
    }

?>