create database Pesquisa;
	use Pesquisa
create table Aluno (
id int AUTO_INCREMENT,
matricula varchar(20),
nome varchar(50),
email varchar(40),
senha varchar(10),
situacao tinyint(1),
pontuacao int,
nivel varchar(10),
data_Alteracao timestamp,
primary key(id)
);

create table Professor (
id int AUTO_INCREMENT,
matricula varchar(20),
nome varchar(50),
email varchar(40),
senha varchar(10),
situacao tinyint(1),
data_Alteracao timestamp,
primary key(id)
);

create table Problema (
id int AUTO_INCREMENT,
desc_Problema text(50000),
id_Professor int,
classificacao varchar(10),
data_Alteracao timestamp,
primary key(id),
foreign key (id_Professor) references Professor(id)
);

create table Gabarito (
id int AUTO_INCREMENT,
desc_Gabarito text(10000),
id_Problema int,
data_Alteracao timestamp,
primary key (id),
foreign key (id_Problema) references Problema (id)
);

create table Resposta_Aluno (
id int AUTO_INCREMENT,
desc_Resposta_Aluno text(10000),
id_Aluno int,
data_Alteracao timestamp,
primary key (id),
foreign key (id_Aluno) references Aluno (id)
);

