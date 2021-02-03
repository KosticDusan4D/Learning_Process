
#Komanda za kreiranje baze:
CREATE DATABASE moja_druga_baza;

#Brisanje baze:
DROP DATABASE moja_druga_baza;
DROP DATABASE moja_prva_baza;

#Pravljenje baze kroz SQL
CREATE DATABASE skola	
CHARACTER SET utf16 COLLATE 	utf16_slovenian_ci;

#Kreiranje tabele u bazi:
CREATE TABLE studenti(
	ime VARCHAR(30),  predstavlja duzine promenljivih
    prezime VARCHAR(50)
);

$BAZA shop
CREATE DATABASE shop;

#Kreiranje tabele customer u bazi shop
CREATE TABLE customers(
	id INT PRIMARY KEY,     primary key - kombinuje i not null i unique
    name VARCHAR(25) NOT NULL,
    adress VARCHAR(255),
    age INT,
    salary DECIMAL(18, 2) DEFAULT 500   (18, 2)- koliko brojeva pre, a koliko posle zareza
);

#Kreiranje tabele tasks u bazi shop
CREATE TABLE IF NOT EXISTS tasks(
	task_id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    start_date DATE,
    due_date DATE,
    status TINYINT DEFAULT 0,
    description TEXT
);

#Dodavanje kolone u tabelu customers
ALTER TABLE customers
ADD active BOOLEAN;

ALTER TABLE customers
ADD state VARCHAR(90);

ALTER TABLE customers
ADD number_of_visits TINYINT;

#Dodavanje kolone u tabelu tasks
ALTER TABLE tasks
ADD priority TINYINT DEFAULT 0;

#Brisanje kolone (brise se kolona sa svim podacima)

#Promena kolone description u tabeli tasks
ALTER TABLE tasks
MODIFY COLUMN description VARCHAR(255) NOT NULL;

#Unos podataka (novog korisnika) u tabelu customers
INSERT INTO customers(id, name, age, adress, state, salary, number_of_visits, active)
VALUES(1, "Ana", 23, "Narodnih heroja 25a", "Srbija", 430, 3, 1);

#Mogu se podaci i unositi bez navodjenja reda INSERT INTO ali se mora znaci tacan redosled unosa
INSERT INTO customers
VALUES(2, "Bojana", "Bulevar Nemanjica 22", 54, 720, 1, "Srbija", 5);

#Unos putem dugmeta insert
INSERT INTO `customers`(`id`, `name`, `adress`, `age`, `salary`, `active`, `state`, `number_of_visits`) 
VALUES (3,"Vuk","Vizantijski bulevar 32/15",27,382,0,"Srbija",1);

#Unos vise redova odjednom
INSERT INTO customers
VALUES(4, "Goran", "Visegradska 45", 40, 780, 1, "Srbija", 6),
(5, "Dejan", "Studenicka bb", 52, 1050, 1, "Srbija", 12)

INSERT INTO customers 
VALUES (6, "Dusan", "Kralja Stefana Prvovencanog 18", 26, 150, 1, "Srbija", 22),
(7, "Jovan", "Nemanjina 12", 35, 1150, 0, "Srbija", 1),
(8, "Bojan", "Prvomajska 12", 18, 1150, 0, "Srbija", 11)

#Kad se neka izostavi (u ovom slucaju salary)
INSERT INTO customers(id, name, age, adress, state, number_of_visits, active)
VALUES(9, "Rodja", 45, "Obilicev venac", "Srbija", 3, 1);