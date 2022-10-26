CREATE DATABASE  pweb;
USE pweb;

CREATE TABLE usuario(
idu int auto_increment,
ci int,
nombre varchar(20),
apellido varchar(20),
pass varchar(100),
PRIMARY KEY(idu));

CREATE TABLE grupo(
idg int auto_increment,
nombre VARCHAR(4),
materia enum('BD','BD2','Prog.2','P.Web'),
PRIMARY KEY(idg));

CREATE TABLE estudiante(
ide int auto_increment,
idu int,
idg int,
FOREIGN KEY(idu) REFERENCES usuario(idu),
FOREIGN KEY(idg) REFERENCES grupo(idg),
PRIMARY KEY(ide));

CREATE TABLE promedio(
idp int auto_increment,
ide int,
periodo enum('M/A','M/J/J','A/S','final'),
nota int,
FOREIGN KEY(ide) REFERENCES estudiante(ide),
PRIMARY KEY(idp));


insert into usuario (ci, nombre, apellido, pass) values
(19123456,'Mengano', 'de Tal', "1"),
(19234567,'Sultano', 'de Tal', "1"),
(19312345,'Ben', 'Once', "1"),
(29412345,'Fulano', 'de Tal', "1"),
(29512345,'Ale', 'Van Tarse', "1"),
(39612345,'Elsa', 'Pato', "1"),
(39712345,'Susana', 'Horia', "1"),
(49812345,'Esteban', 'Quito', "1"),
(49912345,'N. L. C.', 'Jhon', "1"),
(59223456,'Elsa', 'Lame', "1"),
(59323456,'Elsa', 'Payo', "1"),
(69523456,'Homero', 'Sinson', "1"),
(16423456,'Lisa', 'Sinson', "1"),
(15223456,'Barto', 'Sinson', "1"),
(14123456,'Margerine', 'Sinson', "1"),
(23123456,'Mengana', 'de Tallez', "1"),
(22123456,'Sultana', 'de Tallez', "1"),
(21123456,'Bruno', 'Diez', "1");


insert into grupo (nombre, materia) values
('2BA', 'BD'),
('3BA', 'BD2'),
('3BB', 'P.Web');

insert into estudiante (idu, idg) values
(1,1),
(4,1),
(7,1),
(10,1),
(13,1),
(16,1),
(2,2),
(5,2),
(8,2),
(11,2),
(14,2),
(17,2),
(3,3),
(6,3),
(9,3),
(12,3),
(15,3),
(18,3);

insert into promedio (ide, periodo, nota) values
(1,'M/A',12),
(4,'M/A',7),
(7,'M/A',2),
(10,'M/A',7),
(13,'M/A',12),
(16,'M/A',1),
(2,'M/A',2),
(5,'M/A',4),
(8,'M/A',1),
(11,'M/A',8),
(14,'M/A',4),
(17,'M/A',11),
(3,'M/A',10),
(6,'M/A',12),
(9,'M/A',2),
(12,'M/A',9),
(15,'M/A',8),
(18,'M/A',1),
(1,'M/J/J',10),
(4,'M/J/J',3),
(7,'M/J/J',11),
(10,'M/J/J',9),
(13,'M/J/J',2),
(16,'M/J/J',6),
(2,'M/J/J',11),
(5,'M/J/J',2),
(8,'M/J/J',1),
(11,'M/J/J',12),
(14,'M/J/J',4),
(17,'M/J/J',6),
(3,'M/J/J',8),
(6,'M/J/J',6),
(9,'M/J/J',11),
(12,'M/J/J',4),
(15,'M/J/J',2),
(18,'M/J/J',9),
(1,'A/S',7),
(4,'A/S',12),
(7,'A/S',2),
(10,'A/S',11),
(13,'A/S',6),
(16,'A/S',12),
(2,'A/S',4),
(5,'A/S',1),
(8,'A/S',7),
(11,'A/S',12),
(14,'A/S',5),
(17,'A/S',7),
(3,'A/S',7),
(6,'A/S',8),
(9,'A/S',6),
(12,'A/S',2),
(15,'A/S',8),
(18,'A/S',3);