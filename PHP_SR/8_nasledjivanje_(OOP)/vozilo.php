<?php


    class Vozilo{
        private $boja;
        private $tip;

        //Konstruktor
        public function __construct($b, $t){
            $this->setBoja($b);
            $this->setTip($t);
        }

        //Seteri
        public function setBoja($b){
            $this->boja = $b;
        }
        public function setTip($t){
            $this->tip = $t;
        }

        //Geteri
        public function getBoja(){
            return $this->boja;
        }
        public function getTip(){
            return $this->tip;
        }

        public function voziVozilo(){
            echo "<p>Vozilo u pokretu</p>";
        }
    }

    class Automobil extends Vozilo{
        //Automobil nasledjuje sve NE privatno iz klase vozilo
        
        public function voziAutomobil(){
            $this->voziVozilo();
            echo "<p>Automobil u pokretu boje {$this->getBoja()}</p>";
        }
    }

    $v = new Vozilo("bela", "dron");
    $v->voziVozilo();
    echo "<hr>";

    $a = new Automobil("zelena", "automobil");
    $a->voziVozilo(); // klasa naslednica pristupa roditeljskoj metodi
    echo $a->getBoja(); // klasa naslednica pristupa roditeljskom geteru
    $a->setBoja("teget"); //klasa naslednica pristupa roditeljskom seteru
    echo " " . $a->getBoja();
    $a->voziAutomobil();

?>