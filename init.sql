CREATE DATABASE IF NOT EXISTS pres;
CREATE USER IF NOT EXISTS 'user1'@'%' IDENTIFIED BY '123';
GRANT SELECT,UPDATE,INSERT ON pres.* TO 'user1'@'%';
FLUSH PRIVILEGES;
USE `pres`;
CREATE TABLE IF NOT EXISTS animals (
  species VARCHAR(100) NOT NULL, 
  habitat VARCHAR(50) NOT NULL, 
  lifespan_years INT (10) NOT NULL
);

INSERT INTO animals (species, habitat, lifespan_years) 
VALUES 
  (
    'Tiger', 'Jungle', 
    20
  ), 
  (
    'Penguin', 'Antarctica', 
    15
  ), 
  (
    'Elephant', 'Savanna', 
    60
  );

