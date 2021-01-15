<?php

class Pacijent{
    private $ime; //umesto var ide public ili private ako zelimo da definisemo
    private $visina;
    private $tezina;

    //SETERI - SET METODE
    public function setIme($i){
        $this->ime = $i;
    }

    public function setVisina($v){
        if($v > 0 && $v < 250){
            $this->visina = $v;
        }
        else{
            echo "Visina mora biti izmedju 0cm i 250cm.";
            $this->visina = 100;
        }
    }

    public function setTezina($t){
        if($t>0 && $t<450){
            $this->tezina = $t;
        }
        else{
            echo "Neispravno uneta tezina.";
        }
    }

    //GETERI - GET METODE
    public function getIme(){
        return $this->ime;
    }

    public function getVisina(){
        return $this->visina;
    }

    public function getTezina(){
        return $this->tezina;
    }

    //ispred metode ide private ili public
    public function stampaj(){
        echo "<p>Ime pacijenta: $this->ime</p>";
        echo "<p>Visina pacijenta: $this->visina cm</p>";
        echo "<p>tezina pacijenta: $this->tezina kg</p>";
    }
    public function bmi(){
        return $this->tezina / ($this->visina/100)**2;
    }
    public function kritican(){
        $bmiOsobe = $this->bmi();

        if($bmiOsobe<15 || $bmiOsobe>40){
            return true;
        }
        else{
            return false;
        }
    }
}


// $pacijent1 = new Pacijent();
// $pacijent1->ime = "Dusan";
// $pacijent1->visina = 194;
// $pacijent1->tezina = 155;
// $pacijent1->stampaj();
// echo "BMI pacijenta je: " . $pacijent1->bmi();
// if($pacijent1->kritican()){
//     echo "<p>Osoba ima kritican BMI.</p>";
// }
// else{
//     echo "<p>Osoba nema kritican BMI.</p>";
// }

// echo "<hr>";

// $pacijent2 = new Pacijent();
// $pacijent2->ime = "Nikola";
// $pacijent2->visina = 180;
// $pacijent2->tezina = 80;
// $pacijent2->stampaj();
// echo "BMI pacijenta je: " . $pacijent2->bmi();
// if($pacijent2->kritican()){
//     echo "<p>Osoba ima kritican BMI.</p>";
// }
// else{
//     echo "<p>Osoba nema kritican BMI.</p>";
// }

// echo "<hr>";

// $pacijent3 = new Pacijent();
// $pacijent3->ime = "Jelena";
// $pacijent3->visina = 170;
// $pacijent3->tezina = 60;
// $pacijent3->stampaj();
// echo "BMI pacijenta je: " . $pacijent3->bmi();
// if($pacijent3->kritican()){
//     echo "<p>Osoba ima kritican BMI.</p>";
// }
// else{
//     echo "<p>Osoba nema kritican BMI.</p>";
// }

$pac4 = new Pacijent();
// $pac4->ime = "Ana"; NE moze da se pristupi jer je private i ide greska
$pac4->stampaj(); // Moze da se pristupi jer je public

$pac4->setIme("Ana");
$pac4->setVisina(174);
$pac4->setTezina(65);
$pac4->stampaj();
echo "Ime pac2 pacijenta je: " . $pac4->getIme();




?>