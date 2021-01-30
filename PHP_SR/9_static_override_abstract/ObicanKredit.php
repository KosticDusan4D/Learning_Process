<?php

    require_once "kredit.php";

    class ObicanKredit extends Kredit{

        public const TIP = "Obican kredit";

        //Konstruktor
        public function __construct($godKamata, $osnovica, $brGod){
            parent::__construct($godKamata, $osnovica, $brGod, self::TIP);
        }

        /*
        public function mesecnaRataObican(){
            $osnovica = $this->getOsnovica();
            $brGodina = $this->getBrGod();
            $godisnjaKamata = $this->getGodKamata();
            $mesecnaRata = (($osnovica + ($osnovica * $brGodina * ($godisnjaKamata / 100)))/($brGodina * 12));
            return $mesecnaRata;
        }
        UKOLIKO IME METODE OSTANE mesecnaRataObican(), TO ZNACI DA IZVEDENA KLASA ObicanKredit POSEDUJE I METODU:
        - mesecnaRata() KOJU JE NASLEDILA IZ OSNOVNE KLASE Kredit,
        - mesecnaRataObican() KOJA JE SAMO NJENA METODA.
        RESENJE JE DA IZVEDENA KLASA NE NUDI NOVU METODU, NEGO DA NUDI VARIJANTU METODE IZ OSNOVNE KLASE.
        */
        
        // override
        public function mesecnaRata(){
            $osnovica = $this->getOsnovica();
            $brGodina = $this->getBrGod();
            $godisnjaKamata = $this->getGodKamata();
            $mesecnaRata = (($osnovica + ($osnovica * $brGodina * ($godisnjaKamata / 100)))/($brGodina * 12));
            return $mesecnaRata;
        }
    }

?>