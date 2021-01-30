<?php

    require_once "kredit.php";

    class AmortizovanKredit extends Kredit{
        const TIP = "Amortizovan kredit";

        public function __construct($godKamata, $osnovica, $brGod){
            parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
        }

        /*
        public function mesecnaRataAmortizovan(){
            $osnovica = $this->getOsnovica();
            $brGodina = $this->getBrGod();
            $godisnjaKamata = $this->getGodKamata();
            
            $mesecnaKamata = $godisnjaKamata / 12 / 100;
            $stepen = (1 + $mesecnaKamata)**($brGodina*12);
            $mesecnaRata = ($osnovica * $mesecnaKamata * $stepen)/($stepen -1);
            return $mesecnaRata;
        }
        */
        
        // override
        public function mesecnaRata(){
            $osnovica = $this->getOsnovica();
            $brGodina = $this->getBrGod();
            $godisnjaKamata = $this->getGodKamata();
            
            $mesecnaKamata = $godisnjaKamata / 12 / 100;
            $stepen = (1 + $mesecnaKamata)**($brGodina*12);
            $mesecnaRata = ($osnovica * $mesecnaKamata * $stepen)/($stepen -1);
            return $mesecnaRata;
        }
    }

?>