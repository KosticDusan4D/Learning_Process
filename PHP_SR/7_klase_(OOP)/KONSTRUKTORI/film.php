<?php

class Film{
    private $naslov;
    private $reziser;
    private $godinaIzdanja;

    //KONSTRUKTOR
    public function __construct($naslov, $reziser, $godina){
        $this->setNaslov($naslov);
        $this->setReziser($reziser);
        $this->setGodinaIzdanja($godina);
    }

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

$f2 = new Film("Lajanje na zvezde", "Zdravko Sotra", 1998);


echo "<p>Naslov filma je: {$f2->getNaslov()}, reziser je {$f2->getReziser()}, a godina izdavanja je {$f2->getGodinaIzdanja()}.</p>";


?>