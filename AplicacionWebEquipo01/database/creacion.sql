create database horashmis;

use database;

create table eventos (
	id int(11) auto_increment primary key,
	Nombre text,
	fecha date,
	hora text,
	tipo text,
	aforo int(11),
	descripcion text
);

insert into eventos (Nombre, fecha, hora, tipo, aforo, descripcion)
	values ('La obra', '2014-07-28', '21:30', 'Teatro', 250, 'La mejor obra nunca vista');
insert into eventos (Nombre, fecha, hora, tipo, aforo, descripcion)
	values ('Concierto Bisbal', '2014-07-14', '22:00', 'Musica', 2000, 'Concierto musical de David Bisbal en Vera (Almería)');
