<?php

class Film{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;

    //SETERI
    public function setNaslov($naslov){
        $this->naslov = $naslov;
    }
    public function setReziser($reziser){
        $this->reziser = $reziser;
    }
    public function setGodinaIzdanja($godina){
        if($godina > 1900){
            $this->godinaIzdanja = $godina;
        }
        else{
            echo "Niste ispravno uneli godinu";
        }
    }

    //GETERI
    public function getNaslov(){
        return $this->naslov;
    }
    public function getReziser(){
        return $this->reziser;
    }
    public function getGodinaIzdanja(){
        return $this->godinaIzdanja;
    }

    function stampaj(){
        echo "<p>Naslov filma: $this->naslov</p>";
        echo "<p>Reziser filma: $this->reziser</p>";
        echo "<p>Godina izdanja: $this->godinaIzdanja</p>";
    }
}

// $f1 = new Film();
// $f1->naslov = "Lajanje na zvezde";
// $f1->reziser = "Srdjan Dragojevic";
// $f1->godinaIzdanja = "1993. godina";
// $f1->stampaj();

$f2 = new Film();
$f2->setNaslov("Lajanje na zvezde");
$f2->setReziser("Zdravko Sotra");
$f2->setGodinaIzdanja(1998);

echo "<p>Naslov filma je: {$f2->getNaslov()}, reziser je {$f2->getReziser()}, a godina izdavanja je {$f2->getGodinaIzdanja()}.</p>";


?>