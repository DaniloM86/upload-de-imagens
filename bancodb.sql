
CREATE DATABASE imagens;

USE imagens;

CREATE TABLE tb_imagem(
    id_imagem int AUTO_INCREMENT PRIMARY KEY,
    nome_imagem VARCHAR(40)
)DEFAULT charset utf8;