<?php

class Pacijent{
    private $ime; //umesto var ide public ili private ako zelimo da definisemo
    private $visina;
    private $tezina;

    //KONSTRUKTOR - AUTOMATSKI POSTAVLJA PARAMETRE/POLJA
    public function __construct($i, $v, $t){
        $this->setIme($i);
        $this->setVisina($v);
        $this->setTezina($t);
    }

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


$pac = new Pacijent("Milica", 183, 75); //Prilikom kreiranja novog objekta automatski se poziva konstruktor

$pac1 = new Pacijent("Milan", 190, 90);
$pac2 = new Pacijent("Marko", 121, 30);



//NIZ OBJEKATA
$pacijentiNiz = array($pac, $pac1, $pac2);

?>