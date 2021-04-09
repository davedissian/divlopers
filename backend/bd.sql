create schema divlopers;

use divlopers;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cpf` char(11) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `sexo` char(1) NOT NULL,
  `senha` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `contato` (
    `id` int not null AUTO_INCREMENT PRIMARY KEY,
    `email` varchar(80) not null,
    `telefone` varchar(12) not null,
    `mensagem` varchar(500) not null
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;