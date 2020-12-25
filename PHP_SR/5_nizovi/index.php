<?php

    //Bez nizova:
    $cars1 = "Volvo";
    $cars2 = "BMW";
    $cars3 = "Toyota";

    //SA NIZOVIMA:
    $cars = array("Volvo", "BMW", "Toyota");
    // Elementi niza: "Volvo", "BMW", "Toyota"
    // Indeksni elementi: 0, 1, 2

    echo $cars1;
    echo "<br>";
    var_dump($cars1); // var_dump uglavnom sluzi za debugging i informacije
    echo "<br>";
    var_dump($cars);

    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";

    echo "<hr>";

    $cars[5] = "Audi";
    $cars[1] = "Peugeot";
    echo "<p>$cars[0]</p>";
    echo "<p>$cars[1]</p>";
    echo "<p>$cars[2]</p>";
    // echo "<p>$cars[3]</p>"; // Elementi niza kojima nije dodeljen index (vrednost) je besmisleno pristupati jer izbacuje gresku
    // echo "<p>$cars[4]</p>";
    echo "<p>$cars[5]</p>";

    //Kreiranje niza polaznika - Primer
    $polaznici = array();
    $polaznici [] = "Marko";
    $polaznici [] = "Marija";
    $polaznici [] = "Ivana";
    $polaznici [] = "Goran";
    $polaznici [] = "Vladan";
    var_dump($polaznici);

    $duzina = count($polaznici); //vraca broj elemenata niza
    for($i = 0; $i < $duzina; $i++)
    {
        echo "<p>$polaznici[$i]</p>";
    }

    echo "<hr>";

    //1. ZADATAK Ispisati sve elemente niza od 5 stringova.

    $mobtel = array ("Samsung", "iPhone", "Xiaomi", "Huawei", "Motorola");
    $duzina = count($mobtel);
    
    for($i = 0; $i < $duzina; $i++)
    {
        echo "<p>$mobtel[$i]</p>";
    }

    echo "<hr>";

    //2. ZADATAK Odrediti zbir elemenata celobrojnog niza.
    $brojevi = array(1, 7, 10, 15, 20, 50);
    $duzina = count($brojevi);
    $suma = 0;

    for ($i = 0; $i < $duzina; $i++)
    {
        $suma += $brojevi[$i];
    }
    echo $suma;

    echo "<hr>";

    //3. ZADATAK Odrediti srednju vrednost elemenata celobrojnog niza.

?>