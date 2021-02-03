-- Iz tabele customers, pročitati sve klijente: koji dolaze iz Srbije
SELECT *
FROM `customers`
WHERE `state`='Srbija';

-- Iz tabele customers, pročitati sve klijente: koji imaju platu 500
SELECT *
FROM `customers`
WHERE `salary`=500

-- Iz tabele customers, pročitati sve klijente: koji imaju platu manju od 500
SELECT `id`, `name`, `salary`
FROM `customers`
WHERE `salary`<500;

-- Iz tabele customers, pročitati sve klijente: koji imaju platu vecu od 500
SELECT `id`, `name`, `salary`
FROM `customers`
WHERE `salary`>500;

-- Iz tabele customers, pročitati sve klijente: koji imaju platu izmedju 300 i 800
SELECT *
FROM `customers` 
WHERE `salary`BETWEEN 300 AND 800;

-- Iz tabele customers. procitati sva imena koja su u skupu (Ana, Bojana, Vuk)
SELECT `id`, `name`
FROM `customers` 
WHERE `ime` IN ("Ana", "Bojana", "Vuk");

-- Iz tabele tasks, pročitati sve zadatke: Čiji je status aktivan (1)
SELECT * 
FROM `tasks` 
WHERE `status`>=1;

-- Iz tabele tasks, pročitati sve zadatke: Čiji je prioritet nizak (0)
SELECT * 
FROM `tasks` 
WHERE `status`=0;

-- Obzirom da smo napisali i 2 sa status evo provere i za njega:
SELECT * 
FROM `tasks` 
WHERE `status`=2;

-- Iz tabele customers, pročitati sve klijente: Koji su iz Srbije, Rumunije ili Bugarske,
SELECT * 
FROM `customers` 
WHERE `state`='Srbija';

SELECT * 
FROM `customers` 
WHERE `state`='bugarska';

SELECT * 
FROM `customers` 
WHERE `state`='Rumunija';


-- Iz tabele customers, pročitati sve klijente: Koju potiču iz zemlje koja počinje na slovo “S”.
SELECT `id`, `name`, `state`
FROM `customers` 
WHERE `state` LIKE "S%" -- S% je kad treba samo da pocinje na slovo S a ostatak nas ne zanima

-- Varijacija na temu samo za adresu da pocinje na slovo B
SELECT `id`, `name`, `adress`
FROM `customers` 
WHERE `adress` LIKE "B%";
-- Da sadrzi slovo B bilo gde ide pre i posle %
SELECT `id`, `name`, `adress`
FROM `customers` 
WHERE `adress` LIKE "%B%";


-- Iz tabele tasks, pročitati sve zadatke: Čiji id pripada skupu {1, 4, 8, 12},
SELECT * 
FROM `tasks` 
WHERE `task_id` IN (1, 4, 8, 12)

-- Iz tabele tasks, pročitati sve zadatke: Čiji je početak veći od 2019-01-01,
SELECT * 
FROM `tasks` 
WHERE `start_date`>'2019-01-01';

-- Iz tabele tasks, pročitati sve zadatke: Čiji je status različit od neaktivan.
SELECT * 
FROM `tasks` 
WHERE `status`!=0;

-- Procitati sve aktivne korisnike i ogranici na 2, tj selektovati prva 2
-- LIMIT broj; SLUZI DA PRIKAZE ODREDJENI BROJ REDOVA
SELECT * 
FROM `customers` 
WHERE `active`=1
LIMIT 2

-- Selektovati sve kupce koji se zovu "Bojana", imaju preko "25" godina i imaju platu 300
SELECT *
FROM `customers`
WHERE `name`="Bojana" AND `age`>25 AND `salary`>300;

-- Selektovati sve kupce koji nisu aktivni:
-- 1. nacin
SELECT *
FROM `customers`
WHERE `active` !=1;

-- 2. nacin
SELECT *
FROM `customers`
WHERE `active` <>1

-- 3.nacin
SELECT *
FROM `customers`
WHERE NOT `active`=1;

-- Selektovati sve kupce iz Srbije koji nisu aktivni
SELECT *
FROM `customers`
WHERE `state`="Srbija" AND NOT `active`=1;

-- Iz tabele customers, pročitati sve klijente: Koji su iz Srbije a plata je 600,
SELECT *
FROM `customers`
WHERE `state`="Srbija" AND `salary`=600;

-- Iz tabele customers, pročitati sve klijente: Čije ime počinje na A ili imaju manje od 30god.
SELECT *
FROM `customers`
WHERE `name`="A%" OR `age`<30; --RADI ALI NIJE OK BEZ LIKE

SELECT *
FROM `customers`
WHERE `name` LIKE "A%" OR `age`<30; -- OVO JE ISPRAVNO

-- Iz tabele tasks, pročitati sve zadatke: Čiji je status različit od aktivan i prioritet visok,
SELECT * 
FROM `tasks` 
WHERE `status`!=1 AND `priority`>0;

-- Iz tabele tasks, pročitati sve zadatke: Čiji datum nije veći od 2019-01-01.
SELECT * 
FROM `tasks` 
WHERE `start_date`<'2019-01-01' AND `due_date`<'2019-01-01';

-- Iz tabele tasks, pročitati sve zadatke: Čiji datum je veći od 2019-01-01.
SELECT * 
FROM `tasks` 
WHERE `start_date`>'2019-01-01' AND `due_date`>'2019-01-01';

-- Selektovati id, ime i broj godina iz tabele customers i sortirati podatke prema broju godina RASTUCE
SELECT `id`, `name`, `age`
FROM `customers`  
ORDER BY `age`  ASC

-- Selektovati id, ime i broj godina iz tabele customers i sortirati podatke prema broju godina OPADAJUCE
SELECT `id`, `name`, `age`
FROM `customers`  
ORDER BY `age`  DESC

-- Selektovati id, ime i broj godina iz tabele customers i sortirati podatke prema imenu RASTUCE
SELECT `id`, `name`, `age`
FROM `customers`  
ORDER BY `name` ASC;

-- Selektovati id, ime i broj godina iz tabele customers i sortirati podatke prema imenu kao prvom prioritetu, a zatim po drugom prioritetu id RASTUCE
SELECT `id`, `name`, `age`
FROM `customers`  
ORDER BY `name` ASC, `id` ASC;

-- Selektovati id, ime i broj kupovina onog kupca koji je imao najvise kupovina
SELECT `id`, `name`, `number_of_visits`
FROM `customers`  
ORDER BY `number_of_visits` DESC
LIMIT 1;

-- Selektovati id, ime i broj kupovina onog kupca koji je imao najvise kupovina i ima ispod 25 godina
SELECT `id`, `name`, `number_of_visits`
FROM `customers`
WHERE `age`<25
ORDER BY `number_of_visits` DESC
LIMIT 1;

-- Selektovati minimalan broj godina iz tabele customers
SELECT MIN(`age`)
FROM `customers`
-- Prepravka MIN(`age`) u "Najmanji broj godina"
SELECT MIN(`age`) AS "Najmanji broj godina"
FROM `customers`

-- Selektovati maksimalan broj godina iz tabele customers
SELECT MAX(`age`)
FROM `customers`
-- Prepravka MIN(`age`) u "Najveci broj godina"
SELECT MAX(`age`) AS "Najveci broj godina"
FROM `customers`

-- Selektovati id, ime i broj godina najmladje osobe iz tabele customers
SELECT `id`, `name`, `adress`, MIN(`age`) AS "Najmanji broj godina"
FROM `customers`

-- Selektovati id, ime i broj godina najmladje osobe iz tabele customers koja se zove Bojana
SELECT `id`, `name`, `adress`, MIN(`age`) AS "Najmanji broj godina"
FROM `customers`
WHERE `name` LIKE "Bojana";

-- Prebrojati kupce izmedju 25 i 50 godina
SELECT COUNT(`age`) AS "Osobe izmedju 25 i 50"
FROM `customers`
WHERE `age` BETWEEN 25 AND 50;

-- Prosecna starost svih kupaca sa AVG
SELECT AVG(`age`) AS "Prosecna starost svih kupaca je"
FROM `customers`

-- Suma svih poseta prodavnice sa SUM
SELECT SUM(`number_of_visits`) AS "Prodavnica je imala ukupno poseta"
FROM `customers`;

-- Broj razlicitih imena kupaca
SELECT COUNT(DISTINCT`name`) AS "Broj razlicitih imena"
FROM `customers`;

-- Prosecna starost kupaca izmedju 25 i 50 godina
SELECT AVG(`age`) AS "Prosecna starost kupaca izmedju 25 i 50 godina"
FROM `customers` 
WHERE `age` BETWEEN 25 AND 50;

-- Dodatak, malo komplikovanije
SELECT name AS "Porodica", SUM(salary) AS "Suma plata po porodici"
FROM customers
GROUP BY name


-- U tabeli customers odrediti: Broj radnika
SELECT COUNT(`id`) AS "Broj radnika"
FROM `customers`;

-- U tabeli customers odrediti: Minimalnu platu
SELECT MIN(`salary`) AS "Minimalna plata"
FROM `customers`;

-- U tabeli customers odrediti: Maksimalnu platu
SELECT MAX(`salary`) AS "Minimalna plata"
FROM `customers`;

-- U tabeli customers odrediti: Ukupnu platu
SELECT SUM(`salary`) AS "Ukupna plata svih radnika"
FROM `customers`;

-- U tabeli customers odrediti: Prosečnu platu
SELECT AVG(`salary`) AS "Prosecna plata svih radnika"
FROM `customers`;


