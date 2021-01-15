<?php

function mojaFunkcija(){
    echo "<p>Hello World!</p>";
}

mojaFunkcija(); //ovako se poziva funkcija
mojaFunkcija();

//echo unutar echo-a pravi problem i ne moze se pozvati ovako:
echo "<p>Funkcija kaze: mojaFunkcija()</p>";

function horizontalnaLinija(){
    echo "<hr>";
}
horizontalnaLinija();


//Funkcija sa jednim prosledjena argumenta (parametra)

//FUNKCIJA "VIDI" SAMO PROMENLJIVE KOJE SU JOJ PROSLEDJENE ILI SU UNUTAR FUNKCIJE DEFINISANE. TAKODJE ONE PROMENLJIVE KOJE SU DEFINISANE U FUNKCIJI, VIDLJIVE SU SAMO U FUNKCIJI A NE I VAN NJE.

function ispisiTekst($tekst){
    $smajli = ":)";
    echo "<p>Prosledili ste tekst: $tekst $smajli</p>";
}

ispisiTekst("Festina lente!");
ispisiTekst("Zuri polako!");

$t = "Vuk dlaku menja ali ne i cud.";
ispisiTekst($t);

$b = 5;
ispisiTekst($b);

horizontalnaLinija();

//Funkcija sa dva prosledjena argumenta (parametra)

function ispisiKorisnika($ime, $prezime){
    echo "<p>Ulogovani korisnik je: <i>$ime $prezime</i></p>";
}

ispisiKorisnika("Stefan", "Stanimirovic");
ispisiKorisnika("Jelena", "Matejic");
$ime = "Milena";
$prez = "Djordjevic";
ispisiKorisnika($ime, $prez);

horizontalnaLinija();

//Funkcija za 3 prosledjena parametra
function ispisiKorisnikaIgodine($ime, $prezime, $god){
    if($god<0 || $god>120 || $ime=="" || $prezime==""){
        echo "<p>Neispravno uneti podaci.</p>";
    }
    else{
        echo "<p>Korisnik $ime $prezime ima $god godina.</p>";
    }
    
}

ispisiKorisnikaIgodine("Jelena", "Matejic", 26);

horizontalnaLinija();

//Funkcija koja vraca vrednosti
function zbir($br1, $br2){
    $z = $br1 + $br2;
    return $z;
}

echo zbir(7, 3.5);

echo "<p> Zbir brojeva iznosi";
echo zbir(5.3, 7.2);
echo "</p>";

echo "<h3> Zbir brojeva iznosi ";
echo zbir(5.3, 7.2);
echo "</h3>";

//Zadatak: Izracunati zbir 3 broja koriscenjem funkcije zbir
$b1 = 5;
$b2 = 6;
$b3 = 7;

$zbirB1B2 = zbir($b1, $b2);
$zbirB1B2B3 = zbir($zbirB1B2, $b3);

echo "<p>$b1 + $b2 + $b3 = $zbirB1B2B3</p>";

//2. nacin za zbir 3 broja
$zbirB1B2B3 = zbir(zbir($b1, $b2), $b3);
echo "<p>$b1 + $b2 + $b3 = $zbirB1B2B3</p>";

//Zbir 5 brojeva
$zb5 = zbir(zbir(zbir(5, 6), zbir(7, 8)), 9);
echo "<p>$zb5</p>";


horizontalnaLinija();
//1. ZADATAK Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan. Pozvati funkciju i testirati njen rad.
echo "<p>1. Zadatak</p>";

function neparan($n){
    if($n % 2 == 0)
    {
        return false; // Cim se desi return, funkcija se prekida
    }
    else
    {
        return true;
    }
}


if (neparan(-13))
{
    echo "<p>Broj je neparan</p>";
}
else
{
    echo "<p>Broj je paran</p>";
}

horizontalnaLinija();
//2. ZADATAK  Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja. Pozvati funkcije i testirati njihov rad.
echo "<p>2. Zadatak</p>";

function maks2($br1, $br2){
    if($br1 > $br2)
    {
        return $br1;
    }
    else
    {
        return $br2;
    }
}

echo "<p> Veci je broj ";
echo maks2(15, 10);
echo "</p>";

function maks4($brA, $brB, $brC, $brD){
    // 1. nacin
    // $maksAB = maks2($brA, $brB);
    // $maksCD = maks2($brC, $brD);
    // $maks = maks2($maksAB, $maksCD);
    // return $maks;
    
    //2. nacin
    $maks = maks2(maks2($brA, $brB), maks2($brC, $brD));
    return $maks;

}

echo "<p> Najveci je broj ";
echo maks4(11, 19, 5, 8);
echo "</p>";

horizontalnaLinija();
//3.ZADATAK Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike. Pozvati funkciju i testirati je za različite url adrese.
echo "<p>3. Zadatak</p>";

function slika($url){
    echo "<p><img src='$url'></p>";
}

slika("https://www.stickees.com/files/avatars/male-avatars/1697-andrew-sticker.png");


horizontalnaLinija();
//4. ZADATAK Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč. Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je.
echo "<p>4. Zadatak</p>";

function obojenaRec($boja, $rec){
    echo "<p style='color:$boja;'>$rec</p>";
}

obojenaRec("blue", "Nebo");

horizontalnaLinija();
//5. ZADATAK Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju
echo "<p>5. Zadatak</p>";

function recenica1($recenica){
    for($i=15; $i<36; $i+=5)
    {
        echo "<p style='font-size: ${i}px;'>$recenica</p>";
    }
}

recenica1("Ovo je recenica.");


horizontalnaLinija();
//6. ZADATAK Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.
echo "<p>6. Zadatak</p>";

function recenica2($font){
    echo "<p style='font-size: ${font}px'>Ovo je recenica2 za 6. zadatak.</p>";
}

recenica2(30);

horizontalnaLinija();
//7. ZADATAK Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.
echo "<p>7. Zadatak</p>";

function aritmeticka($n, $m){
    $arsr =($n + $m)/2;
    return $arsr;
}

echo aritmeticka(5, 55);

horizontalnaLinija();
//8. ZADATAK Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m. Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.
echo "<p>8. Zadatak</p>";

function aritmetickaCifre($n, $m){
    $suma = 0;
    $brBrojeva = 0;
    for($i = $n; $i <= $m; $i++)
    {
        if($i % 10 == 3)
        {
            $suma += $i;
            $brBrojeva ++;
        }
    }
    $arsr = $suma / $brBrojeva;
    return $arsr;
}

$n = 5;
$m = 35;

echo "<p>Prosek brojeva sa poslednjom cifrom 3 u intervalu od $n do $m je ";
echo aritmetickaCifre($n, $m);
echo "</p>";

horizontalnaLinija();
//9. ZADATAK Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami. Napišite funkciju praksa kojoj se prosleđuju brojevi n i a. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu. Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).
echo "<p>9. Zadatak</p>";

function praksa($n, $a, $d){
    $ukPlata = $a;
    for($i = 2; $i <= $n; $i++) //prvog meseca ne prima povisicu, pa je zato ovako
    {
        $ukPlata += $a + $d;
    }
    return $ukPlata;
}

$n = 6;
$a = 5000;
$d = 3000;

echo "<p>Osnovna plata je $a dinara, a ukoliko vredno radite dobicete svakog meseca bonus od $d dinara, sto cini ukupan iznos za $n meseci od ";
echo praksa($n, $a, $d);
echo " dinara.</p>";


// KAD BI SE DODAVALO BONUS NA PLATU SVAKOG MESECA, TJ DA SE POVECAVA
function praksa1($n, $a, $d){
    $ukPlata = 0;
    for($i = 0; $i < $n; $i++)
    {
        $ukPlata += $a + $i * $d;
    }
    return $ukPlata;

}

echo praksa1($n, $a, $d);

horizontalnaLinija();
//10. ZADATAK Napraviti niz celih brojeva. Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka. Pozvati funkciju i testirati je.
echo "<p>10. Zadatak</p>";

$niz = array(1, 4, 5, 7, 8, 11, 12, 15, 22, 23);

for($i = 0; $i < count($niz); $i++)
{
    //RADILO I OVAKO ALI SAMO AKO FUNKCIJA VRACA VREDNOST $n
    // $n = $niz[$i];
    // // echo neparan($n) . ","; 
    // if(neparan($n) != false)
    // {
    //     echo neparan($n) . ",";
    // }
    if(neparan($niz[$i]))
    {
        echo "$niz[$i], ";
    }
}


horizontalnaLinija();
//11. ZADATAK Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz. Pozvati funkciju i testirati je.
echo "<p>11. Zadatak</p>";

function brojNeparnih($niz){
    $brNeparnih = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if(neparan($niz[$i]))
        {
            $brNeparnih++;
        }
    }
    return $brNeparnih;
}

echo brojNeparnih($niz);

horizontalnaLinija();
//12. ZADATAK U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. Testirati implementirani kod.
echo "<p>12. Zadatak</p>";

$merenja = array(
    "10.1.2021." => -17,
    "11.1.2021." => -5,
    "12.1.2021." => -15,
    "13.1.2021." => 3,
    "14.1.2021." => -12
);

function najnizaTemp($merenja){
    $temperature = array_values($merenja);
    $najniza = $temperature[0];
    $i = 0;

    foreach($merenja as $key=>$value){
        if($najniza >= $value){
            $najniza = $value;
            $datumNajniza = $key;
            $danNajniza = $i;
        }
        $i++;
    }
    $dani = array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak");
    echo "<p style='color: blue;'>$dani[$danNajniza] $datumNajniza $najniza</p>";
}

najnizaTemp($merenja);

function najvisaTemp($merenja){
    $temperature = array_values($merenja);
    $najvisa = $temperature[0];
    $i = 0;

    foreach($merenja as $key=>$value){
        if($najvisa <= $value){
            $najvisa = $value;
            $datumNajvisa = $key;
            $danNajvisa = $i;
        }
        $i++;
    }
    // echo "<p style='color: red;'>$datumNajvisa $najvisa</p>";
    $dani = array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak");
    echo "<p style='color: red;'>$dani[$danNajvisa] $datumNajvisa $najvisa</p>";
}

najvisaTemp($merenja);

horizontalnaLinija();
//13. ZADATAK Dat je niz rečenica. Napraviti funkciju ili više njih kako biste zelenom bojom ispisali sve palindromske rečenice iz niza rečenica, a crvenom bojom ispisati sve ostale rečenice. Rečenica je palindromska ukoliko se isto čita slava na desno i sdesna na levo (neračunajući razmake).
echo "<p>13. Zadatak</p>";




?>
