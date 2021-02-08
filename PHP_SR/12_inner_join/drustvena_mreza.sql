-- INNER JOIN

-- Ne mogu se selektovati tabele koje nemaju veze izmedju njih, samo one koje imaju relacije izmedju samih tabela.

-- Selektovati naslove objava i komentare za te naslove objava
SELECT objave.naslov_objave, komentari.tekst_komentara
FROM objave
INNER JOIN komentari
ON objave.id=komentari.objave_id;

-- Selektovati korisnicka imena i njihove adrese
SELECT korisnici.korisnicko_ime, profili.adresa
FROM korisnici
INNER JOIN profili
ON korisnici.id=profili.korisnik_id;

-- Selektovati sve naslove objava, kategorije kojima pripadaju i komentare
SELECT objave.naslov_objave, kategorije.naziv, komentari.tekst_komentara
FROM kategorije
INNER JOIN kategorije_has_objave
ON kategorije.id = kategorije_has_objave.kategorije_id
INNER JOIN objave
ON kategorije_has_objave.objave_id = objave.id
INNER JOIN komentari
ON objave.id = komentari.objave_id;

-- Selektovati sve naslove objava, kategorije kojima pripadaju i komentare, tako da kategorija bude sport
-- Moze i WHERE da se ubaci kao u primeru dole
SELECT objave.naslov_objave, kategorije.naziv, komentari.tekst_komentara
FROM kategorije
INNER JOIN kategorije_has_objave
ON kategorije.id = kategorije_has_objave.kategorije_id
INNER JOIN objave
ON kategorije_has_objave.objave_id = objave.id
INNER JOIN komentari
ON objave.id = komentari.objave_id
WHERE kategorije.naziv LIKE "sport"; -- "zabava" itd

-- Ukoliko zelimo da preimenujemo nazive kolona u prikazu kao sto smo i ranije koristili moze da se ubaci i AS
SELECT objave.naslov_objave AS 'Objava', kategorije.naziv AS 'kategorija', komentari.tekst_komentara AS 'komentar'
FROM kategorije
INNER JOIN kategorije_has_objave
ON kategorije.id = kategorije_has_objave.kategorije_id
INNER JOIN objave
ON kategorije_has_objave.objave_id = objave.id
INNER JOIN komentari
ON objave.id = komentari.objave_id
WHERE kategorije.naziv LIKE "sport";