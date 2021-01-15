<?php
function horizontalnaLinija(){
    echo "<hr>";
}
?>



<?php
class Auto{
    // POLJA
    private $marka = "Fiat";
    private $boja = "teget";
    private $imaKrov = true;

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

//Kreiranje objekata se vrsi izvan klase
// $auto1 = new Auto();
// echo $auto1->marka; //ispis polja
// $auto1->marka = "Smart"; //dodela vrednosti polju
// echo "<br>";
// echo $auto1->marka;
// echo "<br>";
// echo $auto1->imaKrov;
// echo "<br>";
// $auto1->sviraj();

// $auto2 = new Auto();
// echo $auto2->marka;
// $auto2->sviraj();

$auto3 = new Auto();
$auto3->setMarka("Land Rover");
$auto3->setBoja("plava");
$auto3->setImaKrov(1);

echo "Korisnik vozi auto {$auto3->getMarka()}, boja automobila je {$auto3->getBoja()}";





?>