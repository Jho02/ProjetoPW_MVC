CREATE DATABASE Projeto_MVC;

CREATE TABLE Usuario (
idUsuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
userName VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(50) NOT NULL,
tipo VARCHAR (20) NOT NULL,
ativo BOOL NOT NULL DEFAULT true,
cpf VARCHAR(14) NOT NULL UNIQUE );


INSERT INTO usuario 
(nome, email , userName, senha, tipo, cpf)
VALUES ('José Ferreira','jose','joseferreira@gmail.com','jose123','usuario','44020034332');

INSERT INTO usuario 
(nome, email , username, senha, tipo, cpf)
VALUES ('Joao Ferreira','joao','joaoferreira@gmail.com','joao123','usuario','22040066735552');

INSERT INTO Usuario 
(nome , username, senha, tipo, cpf)
VALUES ('José Ferreira','jose','jose123','usuario','4402003432');


