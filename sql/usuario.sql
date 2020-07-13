CREATE TABLE USUARIO
(
ci varchar(15) NOT NULL ,
clave varchar(65),
PRIMARY KEY(ci),
INDEX (ci),
FOREIGN KEY (ci) REFERENCES IDENTIFICADOR(ci)
)

-- Insertando elementos
insert into USUARIO values('12394085','123456')
insert into USUARIO values('98765432','123456')
insert into USUARIO values('55533322','admin123')