
DROP DATABASE IF EXISTS Eatababy;

CREATE DATABASE Eatababy;
use Eatababy;

-- Table des réservations
CREATE TABLE reservation (
    id_reservation INT AUTO_INCREMENT PRIMARY KEY,
    date_reservation DATE NOT NULL,
    heure TIME NOT NULL,
    nom_client VARCHAR(50) NOT NULL,
    telephone CHAR(10),
    nombre_personnes INT NOT NULL
);

-- Table des tables de restaurant
CREATE TABLE tables_restaurant (
    id_table INT AUTO_INCREMENT PRIMARY KEY,
    numero_table INT UNIQUE NOT NULL,
    statut ENUM('libre', 'réservée') DEFAULT 'libre',
    id_reservation INT,
    FOREIGN KEY (id_reservation) REFERENCES reservation(id_reservation)
);

-- Table des ingrédients
CREATE TABLE ingredients (
    id_ingredient INT AUTO_INCREMENT PRIMARY KEY,
    nom_ingredient VARCHAR(100) NOT NULL,
    image_ingredients VARCHAR(255) NOT NULL
);

-- Table des plats personnalisés (un plat correspond à une commande)
CREATE TABLE bebe (
    id_bebe INT AUTO_INCREMENT PRIMARY KEY,
    id_table INT NOT NULL,
    nom_bebe VARCHAR(50) NOT NULL,
    image_bebe VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_table) REFERENCES tables_restaurant(id_table)
);

-- Table intermédiaire pour lier les plats aux ingrédients choisis
CREATE TABLE bebe_ingredients (
    id_bebe INT NOT NULL,
    id_ingredient INT NOT NULL,
    PRIMARY KEY (id_bebe, id_ingredient),
    FOREIGN KEY (id_bebe) REFERENCES bebe(id_bebe) ON DELETE CASCADE,
    FOREIGN KEY (id_ingredient) REFERENCES ingredients(id_ingredient)
);


