<?php

    $br = 5;

    if($br <= 10)
    {
        echo "<p> Broj prve desetice </p>";
    }
    elseif ($br <= 20)
    {
        echo "<p> Broj druge desetice </p>";
    }
    else 
    {
        echo "<p> Broj je veci od druge desetice </p>";
    }

    echo "<p> Kraj prvog grananja. </p>";


//8. ZADATAK Preuzeti koji je dan u nedelji sa računara i ispitati da li je to radni dan ili je u pitanju vikend.

    $dan = date ("w"); // 0 je nedelje, 1 je ponedeljak ....6 je subota
    if($dan == 0)
    {
        echo "<p>Vikend</p>";
    }
    elseif($dan == 6)
    {
        echo "<p>Vikend</p>";
    }
    else
    {
        echo "<p>Radni dan</p>";
    }

//9. ZADATAK Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, dobar dan za vreme manje od 18 sati popodne i u ostalim slučajevima ispisati dobro veče.

    $vreme = date("G");
    
    if($vreme <= 12)
    {
        echo "<p>Dobro jutro</p>";
    }
    elseif($vreme <= 18)
    {
        echo "<p>Dobar dan</p>";
    }
    else
    {
        echo "<p>Dobro vece</p>";
    }

//10. ZADATAK Uporediti dva uneta datuma i ispisati koji od njih je raniji.

    $d1 = 10;
    $m1 = 9;
    $g1 = 2020;
    $d2 = 21;
    $m2 = 3;
    $g2 = 2020;

    if($g1 < $g2)
    {
        echo "<p> Raniji datum je $d1.$m1.$g1</p>";
    }
    elseif($g2 < $g1)
    {
        echo "<p> Raniji datum je $d2.$m2.$g2</p>";
    }
    elseif($m1 < $m2)
    {
        echo "<p> Raniji datum je $d1.$m1.$g1</p>";
    }
    elseif($m2 < $m1)
    {
        echo "<p> Raniji datum je $d2.$m2.$g2</p>";
    }
    elseif($d1 < $d2)
    {
        echo "<p> Raniji datum je $d1.$m1.$g1</p>";
    }
    elseif($d2 < $d1)
    {
        echo "<p> Raniji datum je $d2.$m2.$g2</p>";
    }
    else 
    {
        echo "Datumi su isti";
    }

//11. ZADATAK Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.

    //$vreme je vec pravljeno gore, tj preuzeto od prethodnog zadatka 

    if($vreme < 9)
    {
        echo "<p>Ne radi</p>";
    }
    elseif ($vreme >= 17)
    {
        echo "<p>Ne radi</p>";
    }
    else
    {
        echo "<p>Radi</p>";
    }

//12. ZADATAK Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.

    $p1 = 20;
    $k1 = 22;

    $p2 = 20;
    $k2 = 22;

    if($k1 < $p2)
    {
        echo "<p> Ne preklapaju se.</p>";
    }
    elseif($k2 < $p1)
    {
        echo "<p> Ne preklapaju se.</p>"; 
    }
    else
    {
        echo "<p> Preklapaju se.</p>"; 
    }

//14. ZADATAK  Za uneti broj ispisati da li je deljiv sa 3 ili ne.

    $broj = -4;

    if ($broj % 3 == 0)
    {
        echo "<p> Broj $broj je deljiv brojem 3</p>";
    }
    else
    {
        echo "<p> Broj $broj nije deljiv brojem 3</p>";
    }

//16.ZADATAK  Za uneti broj ispitati da li je on manji ili veći od nule. Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, a ukoliko je veći od nule ispisati njegov sledbenik.

    $broj = 0;
    if($broj <= 0)
    {
        $prethodnik = $broj -1;
        echo "<p>$prethodnik</p>";
    }
    else
    {
        $sledbenik = $broj + 1;
        echo "<p>$sledbenik</p>";
    }

//17. ZADATAK Za tri uneta broja ispisati koji od njih je najveći, koji od njih je srednji, a koji od nih je najmanji.

    $a = 1;
    $b = 2;
    $c = 3;

    if($a > $b)
    {
        
    }

//18. ZADATAK Za učitani broj ispitati da li je ceo.

    $broj = -1.5;
    if ($broj == round($broj))
    {
        echo "<p>Broj $broj je ceo</p>";
    }
    else
    {
        echo "<p>Broj $broj nije ceo</p>";
    }

?>