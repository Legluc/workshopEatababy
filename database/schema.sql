-- sql
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
    statut ENUM('libre', 'occupée', 'réservée') DEFAULT 'libre',
    id_reservation INT,
    FOREIGN KEY (id_reservation) REFERENCES reservation(id_reservation)
);

-- Table des ingrédients
CREATE TABLE ingredients (
    id_ingredient INT AUTO_INCREMENT PRIMARY KEY,
    nom_ingredient VARCHAR(100) NOT NULL,
    categorie VARCHAR(50), 
);

-- Table des plats personnalisés (un plat correspond à une commande)
CREATE TABLE plats (
    id_plat INT AUTO_INCREMENT PRIMARY KEY,
    id_table INT NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_table) REFERENCES tables_restaurant(id_table)
);

-- Table intermédiaire pour lier les plats aux ingrédients choisis
CREATE TABLE plat_ingredients (
    id_plat INT NOT NULL,
    id_ingredient INT NOT NULL,
    PRIMARY KEY (id_plat, id_ingredient),
    FOREIGN KEY (id_plat) REFERENCES plats(id_plat) ON DELETE CASCADE,
    FOREIGN KEY (id_ingredient) REFERENCES ingredients(id_ingredient)
);


