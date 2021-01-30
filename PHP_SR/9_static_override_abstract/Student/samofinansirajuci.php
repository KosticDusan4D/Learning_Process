<?php
    require_once "student.php";

    class Samofinansirajuci extends Student{

        //Konstruktor
        public function __construct($ime, $osvojeniESPB, $prosecnaOcena){
            parent::__construct($ime, $osvojeniESPB, $prosecnaOcena);
        }

        //Metode
        public function skolarina($espb){
            if($this->prosecnaOcena < 8){
                return 1900 * $espb;
            }
            else{
                return 1600 * $espb;
            }
        }
        public function prijavaIspita(){
            echo "<p>Prijava ispita je 400 dinara.</p>";
        }
    }

?>