DROP DATABASE IF EXISTS frozen_food ;

CREATE DATABASE frozen_food;

USE frozen_food;

CREATE TABLE product(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
    photo LONGTEXT default null,
    desk TEXT,
    nutrisi varchar(255),
    serving_size varchar(255),
    id_distributor INT);
 
CREATE TABLE distributor(
	id INT AUTO_INCREMENT PRIMARY KEY,
    distributor VARCHAR(255),
    address TEXT);
    
ALTER TABLE product ADD FOREIGN KEY (id_distributor) REFERENCES distributor(id);

INSERT INTO product(name, desk, nutrisi, serving_size, id_distributor) values
('Froz-Chicken','Daging Ayam Yang Dibekukan','239 kalori per 100 gram','100 gram','1') 