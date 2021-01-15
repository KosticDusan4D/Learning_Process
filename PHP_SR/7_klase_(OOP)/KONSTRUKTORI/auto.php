
<?php
class Auto{
    // POLJA
    private $marka = "Fiat";
    private $boja = "teget";
    private $imaKrov = true;

    //KONSTRUKTOR
    public function __construct($m, $b, $k){
        $this->setMarka($m);
        $this->setBoja($b);
        $this->setImaKrov($k);
    }

    //SETERI
    public function setMarka($m){
        $this->marka = $m;
    }
    public function setBoja($b){
        if($b == "plava" || $b == "crvena" || $b == "zelena" || $b == "crna"){
            $this->boja = $b;
        }
        else{
            echo "Niste obelezili jednu od ponudjenih boja";
        }
    }
    public function setImaKrov($k){
        if($k == 1 || $k==0){
            $this->imaKrov = $k;
        }
        else{
            echo "Niste obelezili da li zelite kabriolet ili ne.";
        }
        
    }

    //GETERI
    public function getMarka(){
        return $this->marka;
    }
    public function getBoja(){
        return $this->boja;
    }
    public function getImaKrov(){
        return $this->imaKrov;
    }

    //METODI
    function Sviraj(){
        echo "<p>$this->marka Beep! Beep!</p>";
    }
}

$auto = new Auto("Yugo", "crvena", 1);

echo "Korisnik vozi auto {$auto->getMarka()}, boja automobila je {$auto->getBoja()}.";





?>