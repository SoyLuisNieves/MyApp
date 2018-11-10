drop database if exists qro;
create database if not exists qro;
use qro;

create table actividades(
	id_actividad int(11) auto_increment,
	titulo varchar(65) not null,
	lugar varchar(150) not null,
	fecha date not null,
	descripcion longtext not null,
	categoria varchar(20) not null,
	nombre_id varchar(40) not null,
	imagen varchar(255) not null,
	primary key(id_actividad)
)Engine = InnoDb;

create table gastronomias(
	id_gastronomia int(11) auto_increment,
	titulo varchar(65) not null,
	lugar varchar(150) not null,
	fecha date not null,
	descripcion longtext not null,
	categoria varchar(20) not null,
	nombre_id varchar(40) not null,
	imagen varchar(255) not null,
	primary key(id_gastronomia)
)Engine = InnoDb;

create table eventos(
	id_evento int(11) auto_increment,
	titulo varchar(65) not null,
	lugar varchar(150) not null,
	fecha date not null,
	descripcion longtext not null,
	categoria varchar(20) not null,
	nombre_id varchar(40) not null,
	imagen varchar(255) not null,
	primary key(id_evento)
)Engine = InnoDb;

create table reportes(
	id_reporte int(11) auto_increment,
	categoria varchar(20) not null,
	id_post int(11) not null,
	titulo varchar(60) not null,
	comentario longtext not null,
	nombre_id varchar(40) not null,
	imagen varchar(255) not null,
	primary key(id_reporte)
)Engine = InnoDb;

create table usuarios(
	id_usuario tinyint auto_increment,
	usuario varchar(70) not null,
	password varchar(64) not null,
	primary key(id_usuario)
)Engine = InnoDb;

insert into usuarios(usuario,password) values('administrador','passadministrador');