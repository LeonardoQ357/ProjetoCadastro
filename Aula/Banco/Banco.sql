-- Arquivo de criação do banco de dados

DROP DATABASE IF EXISTS projeto1;

CREATE DATABASE projeto1;
USE projeto1;

CREATE TABLE usuario(
	id_usuario int(4) PRIMARY KEY auto_increment,
	nome_usuario varchar(50) NOT NULL,
    email_usuario varchar(50) NOT NULL,
    fone_usuario varchar(30) NULL,
    senha varchar(30) NOT NULL,
    foto varchar(100) NULL 
);
/*
-- INSERIR DADOS
INSERT INTO usuario
(nome_usuario, fone_usuario, email_usuario, senha)
VALUES ('CÁSSIO','(18) 3622-9046','cassio@mail.com', '1234');

-- LISTAR DADOS
SELECT * FROM usuario;

-- ALTERAR DADOS
UPDATE usuario SET nome_usuario = "Zezinho",
				   email_usuario = "ze@mail.com"
WHERE id_usuario = 1;
*/