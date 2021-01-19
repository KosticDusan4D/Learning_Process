<?php

    class Film{
        private $naslov;
        private $reziser;
        private $godinaIzdanja;
        private $ocene;

        //KONSTTRUKTOR
        public function __construct($n, $r, $g, $o){
            $this->setNaslov($n);
            $this->setReziser($r);
            $this->setGodinaIzdanja($g);
            $this->setOcene($o);
        }

        //SETERI
        public function setNaslov($n){
            $this->naslov = $n;
        }
        public function setReziser($r){
            $this->reziser = $r;
        }
        public function setGodinaIzdanja($g){
            if($g > 1900){
                $this->godinaIzdanja = $g;
            }
            else{
                echo "Niste ispravno uneli godinu";
            }
        }
        public function setOcene($o){
            $this->ocene = $o;
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
        public function getOcene(){
            return $this->ocene;
        }

        function stampaj(){
            echo "
            <table>
                <tr>
                    <td>Naslov filma:</td>
                    <td>$this->naslov</td>
                </tr>
                <tr>
                    <td>Reziser filma:</td>
                    <td>$this->reziser</td>
                </tr>
                <tr>
                    <td>Godina filma:</td>
                    <td>$this->godinaIzdanja</td>
                </tr>
                <tr>
                    <td>Ocena filma:</td>
                    <td>$this->ocene</td>
                </tr>
            </table>
            ";
        }

        function prosek(){
            $suma = 0;
            for($i=0; $i<count(getOcene()); $i++){
                $suma += $o[$i];
            }
            $prosek = $suma/count(getOcene());
            return $prosek;
        }
    }


?>