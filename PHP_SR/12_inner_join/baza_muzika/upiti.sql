-- 1. Izlistati sve nazive kompozicije i imena kompozitora koji su ih komponovali.
SELECT kompozicije.naziv AS 'Naziv kompozicije', kompozitori.ime AS 'Ime', kompozitori.prezime AS 'prezime'
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id;

-- 2. Izlistati sve nazive kompozicija, nazive perioda, kao i trajanje kompozicija.
SELECT kompozicije.naziv AS 'Naziv kompozicije', periodi.naziv AS 'Period', kompozicije.trajanje AS 'Trajanje'
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id;

-- 2.a. Izlistati sve nazive kompozicija, nazive perioda, kao i trajanje kompozicija i poredjati ih od najduze ka najkracoj kompoziciji
SELECT kompozicije.naziv AS 'Naziv kompozicije', periodi.naziv AS 'Period', kompozicije.trajanje AS 'Trajanje'
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
ORDER BY kompozicije.trajanje DESC;

-- 3. Izlistati sve kompozicije i njihove kompozitore, tako da su kompozicije nastale između 1700. i 1800. godine.
SELECT kompozicije.naziv AS 'Kompozicija', kompozitori.ime AS 'ime', kompozitori.prezime 'prezime'
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id
WHERE kompozicije.god BETWEEN 1700 AND 1800;

-- 5. Izlistati sve instrumente koji u svom opisu sadrže reč „udaraljke“ ili „duvački“.
SELECT naziv AS 'Naziv instrumenta'
FROM instrumenti
WHERE opis LIKE 'udaraljke' OR opis LIKE 'duvački';
-- Drugi nacin
SELECT naziv AS 'Naziv instrumenta'
FROM instrumenti
WHERE opis IN ('udaraljke','duvački');

-- 6. Izlistati sve instraumente koji u svom nazivu sadrže reč "viol
SELECT naziv AS 'Naziv instrumenta'
FROM instrumenti
WHERE naziv LIKE '%viol%'

-- 7. Izlistati sve kompozicije koje pripadaju baroku ili romantizmu.
SELECT kompozicije.naziv AS 'Naziv kompozicije', periodi.naziv AS 'Period'
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
WHERE periodi.naziv LIKE "barok" OR periodi.naziv LIKE "romantizam";

-- 8. Izlistati sve nazive kompozicija koje pripadaju baroknom stilu.
SELECT kompozicije.naziv AS 'Naziv kompozicije', periodi.naziv AS 'Period'
FROM kompozicije
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
WHERE periodi.naziv LIKE "barok";

-- 9. Izlistati sve kompozicije koje je komponovao Bethoven.
SELECT kompozicije.naziv AS 'Kompozicije koje je komponovao Bethoven'
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id
WHERE kompozitori.prezime LIKE "%Bethoven%";

-- 10. Izlistati sve kompozitore koji su komponovali makar jednu od kompozicija iz tabele kompozicije
SELECT kompozitori.ime, kompozitori.prezime
FROM kompozicije
INNER JOIN kompozicije_has_kompozitori
ON kompozicije.id = kompozicije_has_kompozitori.kompozicije_id
INNER JOIN kompozitori
ON kompozicije_has_kompozitori.kompozitori_id = kompozitori.id;
-- Drugi nacin
SELECT kompozitori.ime, kompozitori.prezime
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id;


-- MOZE DA SE PISE I SKRACENO OVAKO KADA SE DODA AS (alias)
SELECT k.naziv, i.naziv
FROM kompozicije AS k
INNER JOIN kompozicije_has_instrumenti AS ki
ON k.id = ki.kompozicije_id
INNER JOIN instrumenti AS i
ON ki.instrumenti_id = i.id;

-- 10 DRUGI SLAJD Prikazati najdužu kompoziciju, dužinu njenog trajanja, kompozitora koji ju je komponovao i period kome pripada. 
SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime, kompozitori.prezime, periodi.naziv AS 'Period'
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
ORDER BY kompozicije.trajanje DESC
LIMIT 1;
-- Drugi nacin sa podupitom za prikaz najduzeg trajanje
SELECT kompozicije.naziv, kompozicije.trajanje, kompozitori.ime, kompozitori.prezime, periodi.naziv
FROM kompozitori
INNER JOIN kompozicije_has_kompozitori
ON kompozitori.id = kompozicije_has_kompozitori.kompozitori_id
INNER JOIN kompozicije
ON kompozicije_has_kompozitori.kompozicije_id = kompozicije.id
INNER JOIN periodi
ON kompozicije.periodi_id = periodi.id
WHERE kompozicije.trajanje = (SELECT MAX(kompozicije.trajanje) FROM kompozicije);
