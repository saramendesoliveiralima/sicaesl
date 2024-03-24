create database dbsicae;

use dbsicae;

create table tbusuario
(id_usuario int not null auto_increment,
cpf varchar (11) not null,
nome varchar (100) not null,
senha varchar (200) not null,
email varchar (100) not null,
perfil ENUM ('ADMIN') not null,
status ENUM ('ATIVO','INATIVO') not null,
primary key(id_usuario));

create table tbempresa
(id_empresa int not null auto_increment,
cnpj varchar (14) not null,
razaosocial varchar (200) not null,
nomefantasia varchar (200),
ramodeatividade varchar (100),
logradouro varchar (200), 
numero varchar (10),
complemento varchar (150),
bairro varchar (100),
cidade varchar (100),
uf varchar (5),
pais varchar (100),
cep varchar (8),
tel1 varchar (20),
tel2 varchar (20),
email varchar (100),
site varchar (200),
status ENUM ("ATIVA","INATIVA"),
primary key (id_empresa));
