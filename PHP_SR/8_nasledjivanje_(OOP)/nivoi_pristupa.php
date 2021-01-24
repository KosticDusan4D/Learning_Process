<?php

    class Vozilo{
        private $privatnoPolje = "Priv";
        protected $protectedPolje = "Prot";
        public $javnoPolje = "Publ";

        
    }

    $v = new Vozilo();
    // $v->privatnoPolje = "Privatno polje"; Greska, ne moze izvan klase da se pristupi privatnom polju
    // $v->protectedPolje = "Protected polje"; Greska, ne moze izvan klase da se pristupi protected polju
    $v->javnoPolje = "javno polje - public"; // Moze izvan klase da se pristupi protected polju

    class Automobil extends Vozilo{

        public function stampaj(){
            // echo $this->privatnoPolje; // Ne moze da procita privatno polje
            echo $this->protectedPolje; // Protected polju mozemo pristupiti u klasi naslednici
            echo $this->javnoPolje; // Public polju mozemo pristupiti u klasi naslednici
        }

       
        
    }

    class Motor extends Vozilo{
        public function stampaj(){
            echo "<p>Privatno polje je {$this->privatnoPolje} <br>
            Protected polje je {$this->protectedPolje} <br>
            Javno polje je {$this->javnoPolje} <br></p>";
        }

        public function proba(){
            $this->protectedPolje = "Tomos";
        }

        function pisiProtected(){
            echo $this->protectedPolje;
        }
    }

    $a = new Automobil();
    $a->stampaj();

    echo "<hr>";

    $m= new Motor();
    $m->stampaj();

    echo "<hr>";

    $m->proba();
    $m->stampaj();

    echo "<hr>";

    $v = new Vozilo();
    $m->pisiProtected();

?>