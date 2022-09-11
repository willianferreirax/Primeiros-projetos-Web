create database banco_php;
USE banco_php;

CREATE TABLE usuarios
(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(64) NOT NULL,
	email VARCHAR(64)NOT NULL,
	idade SMALLINT NOT NULL,
	sexo VARCHAR(1) NOT NULL,
	estado_civil VARCHAR(16) NOT NULL,
	humanas TINYINT NOT NULL,
	exatas TINYINT NOT NULL,
	biologicas TINYINT NOT NULL,
	senha VARCHAR(32) NOT NULL,
	PRIMARY KEY(id)

)