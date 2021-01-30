<?php

    abstract class Student{
        protected $ime;
        protected $osvojeniESPB;
        protected $prosecnaOcena;

        //Konstruktor
        public function __construct($ime, $osvojeniESPB, $prosecnaOcena){
            $this->setIme($ime);
            $this->setOsvojeniESPB($osvojeniESPB);
            $this->setProsecnaOcena($prosecnaOcena);
        }

        //Seteri
        public function setIme($ime){
            $this->ime = $ime;
        }
        public function setOsvojeniESPB($osvojeniESPB){
            if($this->osvojeniESPB<0){
                $this->osvojeniESPB = 0;
            }
            elseif($this->osvojeniESPB>300){
                $this->osvojeniESPB = 300;
            }
            else{
                $this->osvojeniESPB = $osvojeniESPB;
            }
        }
        public function setProsecnaOcena($prosecnaOcena){
            $this->prosecnaOcena = $prosecnaOcena;
        }

        //Geteri
        public function getIme(){
            return $this->ime;
        }
        public function getOsvojeniESPB(){
            return $this->osvojeniESPB;
        }
        public function getProsecnaOcena(){
            return $this->prosecnaOcena;
        }

        //Metode
        public function stampaj(){
            echo "
                <ul>
                    <li>Ime studenta: $this->ime</li>
                    <li>Osvojeni ESPB: $this->osvojeniESPB</li>
                    <li>Prosecna ocena: $this->prosecnaOcena</li>
                </ul>
            ";
        }

        abstract function skolarina($espb);
        abstract function prijavaIspita();
    }

?>