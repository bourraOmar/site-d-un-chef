CREATE DATABASE IF NOT EXISTS chaf_cuisine;
USE chaf_cuisine;


CREATE TABLE IF NOT EXISTS role (
    id_role INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(150) NOT NULL
);


CREATE TABLE IF NOT EXISTS plat (
    id_plate INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(50),
    description TEXT,
    plats_image VARCHAR(255),
    price FLOAT
);


CREATE TABLE IF NOT EXISTS menu (
    id_menu INT PRIMARY KEY AUTO_INCREMENT,
    id_plate INT NOT NULL,
    name_plate VARCHAR(100) NOT NULL,
    description TEXT,
    menu_image VARCHAR(255),
    price FLOAT,
    plats INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_plate) REFERENCES plat(id_plate) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS client (
    id_client INT PRIMARY KEY AUTO_INCREMENT,
    id_role INT NOT NULL,
    name VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    FOREIGN KEY (id_role) REFERENCES role(id_role) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS reservation (
    id_reservation INT PRIMARY KEY AUTO_INCREMENT,
    id_client INT NOT NULL,
    id_menu INT NOT NULL,
    date_reservation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statut ENUM('en_attente', 'acceptee', 'refusee') DEFAULT 'en_attente',
    FOREIGN KEY (id_client) REFERENCES client(id_client) ON DELETE CASCADE,
    FOREIGN KEY (id_menu) REFERENCES menu(id_menu) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS menu_plat (
    id_menu INT NOT NULL,
    id_plate INT NOT NULL,
    PRIMARY KEY (id_menu, id_plate),
    FOREIGN KEY (id_menu) REFERENCES menu(id_menu) ON DELETE CASCADE,
    FOREIGN KEY (id_plate) REFERENCES plat(id_plate) ON DELETE CASCADE
);
