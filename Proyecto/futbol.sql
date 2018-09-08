CREATE TABLE futbol.presidente(
	rut_p varchar(30),
	nombre_p varchar(30),
	apellido_p varchar(30),
	primary key(rut_p)
);

CREATE TABLE futbol.equipo(
	id_equipo integer,
	nombre_e varchar(30),
	ciudad varchar(30),
	nombre_entrenador varchar(30),
	apellido_entrenador varchar(30),
	rut_p varchar(30),	
	foreign key(rut_p) references futbol.presidente(rut_p),
	primary key(id_equipo)
);

CREATE TABLE futbol.administra(
	rut_p varchar(30),
	id_equipo integer,
	ano_inicio_periodo integer,
	foreign key(rut_p) references futbol.presidente(rut_p),
	foreign key(id_equipo) references futbol.equipo(id_equipo)
);

CREATE TABLE futbol.jugador(
	rut_j varchar(30),
	nombre_j varchar(30),
	apellido_j varchar(30),
	fecha_nacimiento varchar(30),
	pais varchar(30),
	posicion varchar(30),
	id_equipo integer,
	foreign key(id_equipo) references futbol.equipo(id_equipo),
	primary key(rut_j)
);

CREATE TABLE futbol.torneo(
	id_t integer,
	nombre_t varchar(100),
	ano_t integer,
	primary key(id_t)	
);

CREATE TABLE futbol.estadistica_j(
	id_e integer,
	rut_j varchar(30),
	id_equipo integer,
	id_t integer,
	cantidad_partidos_club integer,
	goles integer,	
	tarjeta_a integer,
	tarjeta_r integer,
	foreign key(id_t) references futbol.torneo(id_t),
	foreign key(id_equipo) references futbol.equipo(id_equipo),
	foreign key(rut_j) references futbol.jugador(rut_j),
	primary key(id_e)
);

CREATE TABLE futbol.seleccion_nacional(
	nombre_seleccion varchar(30),
	nombre_entrenador_s varchar(30),
	apellido_entrenador_s varchar(30),
	primary	key(nombre_seleccion)
);

CREATE TABLE futbol.juega_s(
	rut_j varchar(30),
	nombre_seleccion varchar(30),		
	cantidad_partidos integer,	
	goles integer,		
	ano_debut integer,
	foreign	key(nombre_seleccion) references futbol.seleccion_nacional(nombre_seleccion),
	foreign key(rut_j) references futbol.jugador(rut_j)
);

CREATE TABLE futbol.premio(
	id_p integer,
	nombre_premio varchar(100),	
	primary key(id_p)
);

CREATE TABLE futbol.gana(
	rut_j varchar(30),
	id_p integer,
	tipo varchar(30),
	id_t integer,
	foreign key(rut_j) references futbol.jugador(rut_j),
	foreign key(id_p) references futbol.premio(id_p),
	foreign key(id_t) references futbol.torneo(id_t)
);

CREATE TABLE futbol.juega_t(
	id_t integer,
	rut_j varchar(30),
	foreign key(id_t) references futbol.torneo(id_t),
	foreign key(rut_j) references futbol.jugador(rut_j)
);

CREATE TABLE futbol.sancion(
	id_sancion integer,
	rut_j varchar(30),
	ano_s integer,
	tipo_sancion varchar(200),
	descripcion varchar(200),
	cantidad_partidos_sancionado integer,	
	foreign key(rut_j) references futbol.jugador(rut_j),
	primary key(id_sancion)
);
