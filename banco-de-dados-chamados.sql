create database gerenciar_chamados_matheusV;
use gerenciar_chamados_matheusV;

create table CLiente(
	id_cliente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome_cliente VARCHAR(45) NOT NULL,
    email_cliente VARCHAR(45) NOT NULL,
    telefone_cliente INT NOT NULL
);

CREATE TABLE Chamados (
	id_chamado INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	descicao_problema VARCHAR(100) NOT NULL,
    criticidade VARCHAR(20),
    criticidade VARCHAR(20) NOT NULL,
    data_abertura DATE,
    fk_cliente INT NOT NULL,
    FOREIGN KEY (fk_cliente) references Cliente(id_cliente)
);

CREATE TABLE Colaborador (
	id_colaborador INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome_colaborador VARCHAR(45) NOT NULL
);