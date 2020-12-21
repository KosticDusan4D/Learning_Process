<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ugnjezdeno grananje</title>
</head>
<body>

    <?php

     //20. ZADATAK Učitati dva cela broja i ispitati da li je veći od njih paran. 
        
        $br1 = 2;
        $br2 = 0;

        if($br1 > $br2)
        {
            echo "Broj $br1 je veci";
            if($br1 % 2 == 0)
            {
                echo " i paran je";
            }
            else
            {
                echo " i neparan je";
            }
        }
        elseif ($br2 > $br1)
        {
            echo "Broj $br2 je veci";
            if($br2 % 2 == 0)
            {
                echo " i paran je";
            }
            else
            {
                echo " i neparan je";
            }
        }
        else
        {
            echo "Brojevi $br1 i $br2 su jednaki";
        }

    ?>

</body>
</html>