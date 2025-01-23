CREATE DATABASE airbnb;

CREATE TABLE type(
    idType INT PRIMARY KEY AUTO_INCREMENT ,
    type VARCHAR(50)
);


CREATE TABLE admin (
    idAdmin INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    mdp VARCHAR(50)
);
CREATE TABLE habitation(
    idHabitation INT PRIMARY KEY AUTO_INCREMENT ,
    idType INT,
    nbChambre INT,
    loyer DOUBLE,
    quartier VARCHAR(50),
    photo VARCHAR(50),
    `desc` VARCHAR(100),
    FOREIGN KEY (idType) REFERENCES type(idType)
);

CREATE TABLE photo (
    idPhoto INT PRIMARY KEY AUTO_INCREMENT,
    idHabitation INT ,
    photo VARCHAR(50),
    FOREIGN KEY (idHabitation) REFERENCES habitation(idHabitation)
);
CREATE TABLE client(
    idClient INT PRIMARY KEY AUTO_INCREMENT ,
    email VARCHAR(50),
    nom VARCHAR(50),
    mdp VARCHAR(50),
    num INT 
);
CREATE TABLE reservation (
    idReservation INT PRIMARY KEY AUTO_INCREMENT,
    idClient INT ,
    idHabitation INT,
    date_Entre DATE,
    date_Sortie DATE,
    FOREIGN KEY (idClient) REFERENCES client(idClient),
     FOREIGN KEY (idHabitation) REFERENCES habitation(idHabitation)
);
-- Insérer des types d'habitation
INSERT INTO type (type) VALUES 
('Maison'),
('Appartement'),
('Studio');

-- Insérer des habitations
INSERT INTO habitation (idType, nbChambre, loyer, quartier, photo, `desc`) VALUES 
(1, 3, 500000.00, 'Analamahitsy', NULL, 'Maison spacieuse avec jardin'),
(2, 2, 300000.00, 'Ambanidia', NULL, 'Appartement moderne, proche centre-ville'),
(3, 1, 200000.00, 'Andohalo', NULL, 'Studio confortable avec belle vue');

-- Insérer des clients
INSERT INTO client (email, nom, mdp, num) VALUES 
('tiana@mail.com', 'Rasolofomanana', 'pass123', 345678901),
('hery@mail.com', 'Randrianantenaina', 'secure456', 332214567),
('miora@mail.com', 'Ravelojaona', 'miora789', 320987654);

-- Insérer des administrateurs
INSERT INTO admin (nom, mdp) VALUES 
('Admin1', 'adminpass1'),
('Admin2', 'adminpass2');

-- Insérer des réservations
INSERT INTO reservation (idClient, date_Entre, date_Sortie) VALUES 
(1, '2025-02-01 14:00:00', '2025-02-10 12:00:00'),
(2, '2025-03-05 10:00:00', '2025-03-15 11:00:00'),
(3, '2025-04-10 09:00:00', '2025-04-20 10:00:00');






