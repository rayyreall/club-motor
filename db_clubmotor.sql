CREATE DATABASE db_clubmotor;

USE db_clubmotor;


CREATE TABLE users (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(75) NOT NULL UNIQUE,
    email VARCHAR(150) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(150)
);


INSERT INTO users () VALUES (null, 'admin', 'admin@gmail.com', 'admin', 'Ini Admin