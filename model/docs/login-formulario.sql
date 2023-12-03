create database login_formulario
use login_formulario

CREATE TABLE `usuario` (
  `codUsuario` int primary key AUTO_INCREMENT NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL
)