drop database wikifpe;
create database wikifpe;
use  wikifpe;



create table campus(
id_campus int,
nome_campus varchar (50),
primary key (id_campus)
);

	
create table usuario(
id_usu int auto_increment,
matricula varchar(15) not null,
nome_completo varchar(30) not null,
apelido varchar(20),
email varchar(30) not null,
senha varchar(100) not null,
campus int,
primary key (id_usu, campus),
foreign key (campus) references campus (id_campus)

);

create table pergunta(
	id_pergunta int auto_increment,
	id_usuario int,
	titulo varchar (100) not null,
    descricao text (5000000) not null,
    primary key (id_pergunta, id_usuario),
    foreign key  (id_usuario) references usuario (id_usu)
);

create table faleConosco (
	id_faleConosco int auto_increment,
	nome varchar (30) not null,
	email varchar (30 not null,
	comentario varchar(150) not null,
	primary key (id_faleConosco)
);
 