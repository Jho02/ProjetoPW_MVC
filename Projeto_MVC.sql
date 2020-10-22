CREATE DATABASE Projeto_MVC;

use Projeto_MVC;


select * from usuario;


CREATE TABLE Usuario (
idUsuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
userName VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(50) NOT NULL,
tipo VARCHAR (20) NOT NULL DEFAULT 'usuario',
ativo BOOL NOT NULL DEFAULT true,
cpf VARCHAR(14) NOT NULL UNIQUE );

INSERT INTO usuario 
(nome, email , userName, senha, cpf)
VALUES 
('José Ferreira','joseferreira@gmail.com','jose','123','44020034332') ,
('Joao Ferreira','joaoferreira@gmail.com','joao','123','22040066735552');

use projeto_mvc;