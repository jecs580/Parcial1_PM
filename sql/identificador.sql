
CREATE TABLE IDENTIFICADOR
(
ci varchar(15) NOT NULL,
nombre varchar(100),
fechaNac date,
codResd varchar(6),
imageURL varchar(200),
color_fondo varchar(10),
PRIMARY KEY (ci)
)

-- Insertando elementos
-- Actualizado
insert into IDENTIFICADOR values('12394085', 'Jorge Enrique Callisaya Sanchez','1996-09-02','01','https://pbs.twimg.com/profile_images/1025095012290371584/vkmK9pt5.jpg', null)
insert into IDENTIFICADOR values('98765432', 'Danitza Callisaya','1993-07-17','01','https://www.online-image-editor.com/styles/2019/images/power_girl.png',null)
insert into IDENTIFICADOR values('55533322', 'Carlos Mendosa','1985-01-10','02','https://i0.pngocean.com/files/831/88/865/user-profile-computer-icons-user-interface-mystique.jpg',null)



