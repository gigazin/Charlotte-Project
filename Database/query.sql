CREATE DATABASE projeto_charlotte;

use projeto_charlotte;

CREATE TABLE administrador(
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    login VARCHAR(45) NOT NULL,
    senha VARCHAR(45) NOT NULL
);

INSERT INTO administrador (nome,login,senha) VALUES ('administrador','admin','admin');

CREATE TABLE coordenador(
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    cidade VARCHAR(45) NOT NULL,
    cpf VARCHAR(45) NOT NULL
);

CREATE TABLE entregador(
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    turno VARCHAR(45) NOT NULL,
    cidade VARCHAR(45) NOT NULL,
    veiculo VARCHAR(45) NOT NULL,
    bonificacao TINYINT(1) NOT NULL,
    salario DOUBLE NOT NULL,
    idcoordenador INTEGER NOT NULL,
    FOREIGN KEY (idcoordenador) REFERENCES coordenador (id)
);