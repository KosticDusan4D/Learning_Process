<?php

    require_once "student.php";
    require_once "samofinansirajuci.php";
    require_once "budzetski.php";

    $s1 = New Samofinansirajuci("Jovan", 152, 8.5);
    $s2 = New Budzetski("Milica", 265 , 7.4);
    $s3 = New Samofinansirajuci("Ljubica", 152, 6.9);
    $s4 = New Budzetski("Bojan", 260, 9.1);

    $studenti = array($s1, $s2, $s3, $s4);

    //Odrediti studenta koji plaća najveću školarinu. Za svakog studenta kao broj ESPB bodova koje prijavljuje u narednoj školskoj godini staviti kao neki random ceo broj između 35 i 60.
    $skolarine = array();
    for($i = 0; $i < count($studenti); $i++){
        $rand = rand(35,60);
        $skolarine[$i] = $studenti[$i]->skolarina($rand);
        echo "<p>Broj upisanih bodova: $rand, a skolarina je $skolarine[$i]</p>"; //Ovaj ispis sam radio da bih lakse testirao, tj. da vidim sta se desava, a nisam obrisao kako bi i vi videli zbog provere
    }

    echo "<hr>";

    function najvecaSkolarina($studenti, $skolarine){
        $maxSkolarina = $skolarine[0];
        foreach($skolarine as $skolarina){
            if($maxSkolarina < $skolarina){
                $maxSkolarina = $skolarina;
            }
        }
        
        for($i=35; $i<=60; $i++){
            if($maxSkolarina == $studenti[0]->skolarina($i)){
                $studenti[0]->stampaj();
                break;
            }
            elseif($maxSkolarina == $studenti[1]->skolarina($i)){
                $studenti[1]->stampaj();
                break;
            }
            elseif($maxSkolarina == $studenti[2]->skolarina($i)){
                $studenti[2]->stampaj();
                break;
            }
            elseif($maxSkolarina == $studenti[3]->skolarina($i)){
                $studenti[3]->stampaj();
                break;
            }
        }
    }
    echo "<p>Najvecu skolarinu placa:</p>";
    najvecaSkolarina($studenti, $skolarine);

    echo "<hr>";

    //Odrediti prosečnu školarinu svih studenata.
    function prosecnaSkolarina($skolarine){
        $suma = 0;
        for($i = 0; $i<count($skolarine); $i++){
            $suma += $skolarine[$i];
        }
        return $suma/count($skolarine);
    }

    $prSk = prosecnaSkolarina($skolarine);
    echo "<p>Prosecna skolarina je $prSk dinara.</p>";

    echo "<hr>";

    //Odrediti prosečan odnos visine školarine i broja osvojenih ESPB bodova.

    function odnosSkolarineESPB($studenti, $skolarine){
        $suma = 0;
        foreach($studenti as $student){
            $suma += $student->getOsvojeniESPB();
        }
        $prosekESPB = $suma/count($studenti);

        return prosecnaSkolarina($skolarine)/$prosekESPB;
    }

    $odnos = odnosSkolarineESPB($studenti, $skolarine);
    echo "<p>Prosecan odnos osvojenih ESPB bodova i skolarine je: $odnos</p>";

    echo "<hr>";

    //Odrediti studenta sa minimalnim brojem osvojenih ESPB. Ako ima više takvih studenata, vratiti onog koji plaća najveću školarinu (ako ima i više takvih, vratiti bilo kog).
    
    function minESPB($studenti, $skolarine){
        $minESPB = $studenti[0]->getOsvojeniESPB();
        
        for($i = 0; $i < count($studenti); $i++){
            if($minESPB > $studenti[$i]->getOsvojeniESPB()){
                $minESPB = $studenti[$i]->getOsvojeniESPB();
            }
        }
        
        $maxSkolarina = $skolarine[0];
        $student = $studenti[0];
        for($i = 0; $i<count($studenti); $i++){
            if($minESPB == $studenti[$i]->getOsvojeniESPB()){
                if($maxSkolarina < $skolarine[$i]){
                    $maxSkolarina = $skolarine[$i];
                    $student = $studenti[$i];
                }
            }
        }
        return $student;
    }

    echo "<p>Student sa minimalnim brojem osvojenih ESPB bodova ili ukoliko su jednaki onaj ko placa vecu skolarinu je: </p>";
    minESPB($studenti, $skolarine)->stampaj();

?>