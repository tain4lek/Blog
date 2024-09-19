CREATE DATABASE Blog;
USE Blog;

CREATE TABLE usuario (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(50) NOT NULL,
    email varchar(255)  NOT NULL,
    senha varchar(60) NOT NULL,
    data_criacao datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    ativo tinyint NOT NULL DEFAULT '0',
    adm tinyint NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
);

CREATE TABLE post(
    id              INT NOT NULL AUTO_INCREMENT,
    titulo          VARCHAR(255) NOT NULL,
    texto           TEXT NOT NULL,
    usuario_id      INT NOT NULL,
    data_criacao    DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    data_postagem   DATETIME NOT NULL,
    PRIMARY KEY(id),
    KEY fk_post_usuario_idx (usuario_id),
    CONSTRAINT FK_UsuarioPost FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);





































































