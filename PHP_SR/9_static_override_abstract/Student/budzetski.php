<?php
    require_once "student.php";

    class Budzetski extends Student{

        //Konstruktor
        public function __construct($ime, $osvojeniESPB, $prosecnaOcena){
            parent::__construct($ime, $osvojeniESPB, $prosecnaOcena);
        }

        //Metode
        public function skolarina($osvojeniESPB){
            return (300 - $this->osvojeniESPB) * 2000;
        }
        public function prijavaIspita(){
            echo "<p>Prijava ispita je 100 dinara.</p>";
        }
    }

?>