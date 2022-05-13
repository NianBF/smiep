CREATE DATABASE categoria;
USE categoria;
CREATE TABLE categoria (
  idCategoria int PRIMARY KEY auto_increment,
	id_cat INT not null,
	nCategoria VARCHAR(50) NOT NULL,
  descripcion varchar(100) not null
);
