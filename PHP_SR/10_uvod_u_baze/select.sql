#Odredjivanje koja baza podataka ce se koristiti, od

# Iz tabele customers procitati sve kolone
SELECT * FROM customers;

# Iz tabele customers procitati samo imena i godine
SELECT name, age FROM customers;

# Iz tabele customers procitati samo imena i godine (ovo je u slucaju da nismo selektovali bazu, pa sa delom shop. govorimo koja baza da se pokrene)
SELECT name, age FROM shop.customers;

# Iz tabele customers procitati samo plate
SELECT salary FROM customers;

# Dodavanje redova u tabelu tasks
INSERT INTO `tasks`(`task_id`, `title`, `start_date`, `due_date`, `status`, `description`, `priority`) 
VALUES 
(2,'Cas iz ITBootcampa','2021-02-01','2021-02-01',1,'Cas iz baza podataka','1'),
(3,'Ciscenje','2021-01-20', NULL,0,'Usisivac u ruke',0),
(4,'Kupi hleb','2021-02-02', '2021-02-02',2,'Inace ces ostati gladan',0);


# Iz tabele tasks procitati sve kolone
SELECT * FROM tasks;

        --NIKAKO APOSTROF, VEC BACK TICKS ``
# Iz tabele tasks procitati naziv, status i prioritet
SELECT title, `status`, `priority` FROM tasks;

--Dohvatiti sve razlicite godine korisnika (OVO hvata razlicite vrednosti, npr nece da prikaze 4 puta 23 ako ih ima toliko nego 1)
SELECT DISTINCT `age` FROM `customers`

--Dodavanje novih korisnika tako da se ponavljaju vrednosti nekih kolona
INSERT INTO `customers`(`id`, `name`, `adress`, `age`, `salary`, `active`, `state`, `number_of_visits`) VALUES
(10, 'Bojan', 'Nemanjina 12', 54, 600, 0, 'Srbija', 15)
(11, 'Vuk', 'Vizantijski bulevar 32/15', 31, 732, 0, 'Srbija', 22)

-- Dohvatiti sva razlicita imena korisnika
SELECT DISTINCT `name` FROM `customers`;

-- Dohvatiti sva razlicita imena i adrese korisnika (KADA KOMBINACIJA KOJU TRAZIMO TREBA BITI RAZLICITA, A NE SAMO I POJEDINACNE KOLONE)
SELECT DISTINCT `name`, `adress` FROM `customers` 

-- Dohvatiti sve razlicite drzave
SELECT DISTINCT `state` FROM `customers`;