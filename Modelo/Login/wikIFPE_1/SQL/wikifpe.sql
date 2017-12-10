--drop database wikifpe;
create database wikifpe;
use  wikifpe;



create table campus(
	id_campus int,
	nome_campus varchar (50),
	primary key (id_campus)
) character set  'utf8';

	
create table usuario(
	id_usu int auto_increment,
	matricula varchar(15) not null,
	nome_completo varchar(30) not null,
	apelido varchar(20) not null,
	email varchar(30) not null,
	senha varchar(100) not null,
	campus int,
	primary key (id_usu),
	foreign key (campus) references campus (id_campus)

) character set  'utf8';

create table pergunta(
	id_pergunta int auto_increment,
	id_usuario int,
	titulo varchar (100) not null,
    descricao text (5000000) not null,
    primary key (id_pergunta),
    foreign key  (id_usuario) references usuario (id_usu)
) 	character set  'utf8';

create table faleConosco (
	id_faleConosco int auto_increment,
	nome varchar (30) not null,
	email varchar (30) not null,
	comentario varchar(150) not null,
	primary key (id_faleConosco)
) character set  'utf8';


insert into campus values
 (1, 'Jaboatão dos Guararapes'),
 (2, 'Recife'),
 (3, 'Paulista'),
 (4, 'Abreu e Lima'),
 (5, 'Cabo de Santo Agostinho'),
 (6, 'Igarassu'),
 (7, 'Palmares'),
 (8, 'Afogados da Ingazeira'),
 (9, 'Caruaru'),
 (10, 'Ipojuca'),
 (11, 'Barreiros'),
 (12, 'EAD'),
 (13, 'Pesqueira'),
 (14, 'Belo Jardim'),
 (15, 'Garanhuns'),
 (16, 'Olinda'),
 (17, 'Recife'),
 (18, 'Vitoria de Santo Antão');
