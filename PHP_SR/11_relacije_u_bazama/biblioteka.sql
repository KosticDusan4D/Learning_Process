-- Kreiranje baze biblioteka
CREATE DATABASE biblioteka;

-- Kreiranje tabele CLANOVI
CREATE TABLE clanovi(
	id INT PRIMARY KEY,
    ime VARCHAR(45) NOT NULL,
    Prezime VARCHAR(45) NOT NULL,
    Adresa VARCHAR(45) NOT NULL,
    telefon VARCHAR(45)
);

-- Unos podataka u tabelu CLANOVI
INSERT INTO `clanovi`(`id`, `ime`, `Prezime`, `Adresa`, `telefon`) VALUES
(1, "Bojan", "Bojanic", "Jug Bogdanova 15", "06011111111"),
(2, "Mihajlo", "Mihajlovic", "Toplicina 16b", "06122222222"),
(3, "Zarko", "Zarkovic", "Ucitelj Milina 1", "06633333333"),
(4, "Dusan", "Stefanovic", "Boljsevicka 14", "0641234556");

-- Kreiranje tabele KNJIGE
CREATE TABLE knjige(
	id INT PRIMARY KEY,
    naslov VARCHAR(255) NOT NULL
);

-- Unos podataka u tabelu KNJIGE
INSERT INTO knjige(`id`,`naslov`) VALUES
(1, "Gospodar prstenova KOMPLET"),
(2, "Guliverova putovanja"),
(3, "Alhemicar"),
(4, "Medvedi na putu"),
(5, "Orlovi rano lete");

-- Kreiranje tabele ZADUZENJE i povezivanje 1:N vezom
CREATE TABLE zaduzenje(
	id INT,
    datum DATE,
    vratio TINYINT(1) DEFAULT 0,
    clanovi_id INT,
    knjige_id INT,
    FOREIGN KEY(clanovi_id) REFERENCES clanovi(id),
    FOREIGN KEY(knjige_id) REFERENCES knjige(id)
);

-- Unos podataka u tabelu ZADUZENJE
INSERT INTO `zaduzenje`(`id`, `datum`, `vratio`, `clanovi_id`, `knjige_id`) VALUES
(1, "2021-01-01", 1, 2, 3);

-- Kreiranje tabele ZANR
CREATE TABLE zanr(
	id INT PRIMARY KEY,
    naziv VARCHAR(45)
);

-- Unos podataka u tabelu ZANR
INSERT INTO `zanr`(`id`, `naziv`) VALUES
(1, "Drama"),
(2, "Komedija"),
(3, "Tragedija"),
(4, "Basne"),
(5, "Bajke");

--Pravljenje tabele KNJIGE_HAS_ZANR i povezivanje M:N vezom izmedju njih
CREATE TABLE knjige_has_zanr(
	knjige_id INT,
    zanr_id INT,
    FOREIGN KEY(knjige_id) REFERENCES knjige(id),
    FOREIGN KEY(zanr_id) REFERENCES zanr(id)
);

-- Unos podataka u medju tabelu KNJIGE_HAS_ZANR
INSERT INTO knjige_has_zanr(`knjige_id`,`zanr_id`) VALUES
(1, 1),
(2, 5),
(3, 2),
(4, 1),
(5, 2);

-- Kreiranje tabele PISAC
CREATE TABLE pisac(
	id INT PRIMARY KEY,
    ime_prezime VARCHAR(45) NOT NULL,
    biografija TEXT,
    god_rodj YEAR
);

-- Unos podataka u tabelu PISAC
INSERT INTO pisac(id, ime_prezime, biografija, god_rodj) VALUES
(1, "Stefan Stefanovic", "Bla bla bla bla bla bla bla bla bla bla BLA", 1912),
(2, "JRR. Tolkien", "Doktor za fantastiku", 1901),
(3, "Paolo Koeljo", "Cikica sa bradom koji pise dobre knjige", 1955),
(4, "Branko Copic", "Nije neka knjiga ali aj lektira je bila", 1911),
(5, "Djordje Djordjevic", "Bla bla bla bla bla bla bla bla bla bla BLA", 1944);

--Pravljenje tabele PISAC_HAS_KNJIGE i povezivanje M:N vezom izmedju njih
CREATE TABLE pisac_has_knjige(
	pisac_id INT,
    knjige_id INT,
    FOREIGN KEY(pisac_id) REFERENCES pisac(id),
    FOREIGN KEY(knjige_id) REFERENCES knjige(id)
);

-- Unos u tabelu PISAC_HAS_KNJIGE
INSERT INTO `pisac_has_knjige`(`pisac_id`, `knjige_id`) VALUES 
(1, 4),
(5, 4),
(2, 1),
(3, 3),
(4, 5),
(5, 2);