<?php
    require_once "film2.php";

    $film1 = new Film("Kill Bill", "Quentin Tarantino", 2003, [8.5, 9.1, 6.6]);
    $film2 = new Film("Titanik", "James Cameron", 1997, [9.2, 5.5, 8.9]);
    $film3 = new Film("300", "Zack Snyder", 2006, [7.6, 8.1, 4.3]);
    $film4 = new Film("Bekstvo iz Sosenka", "Frank Darabont", 1994, [9.5, 9.7, 8.5]);

    echo $film1->prosek();
    




?>