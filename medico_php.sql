-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Set-2020 às 13:10
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `medico_php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `nome` varchar(5000) NOT NULL,
  `crm` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `especialidade01` varchar(255) NOT NULL,
  `especialidade02` varchar(255) NOT NULL,
  `especialidade03` varchar(255) NOT NULL,
  `especialidade04` varchar(255) NOT NULL,
  `especialidade05` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`id`, `nome`, `crm`, `telefone`, `especialidade01`, `especialidade02`, `especialidade03`, `especialidade04`, `especialidade05`) VALUES
(1, 'Caio Loureiro', '0123456789', '(47) 9 8804-6845', 'CLINICA MEDICA', 'CIRURGIA CARDIACA', 'INEXISTENTE', 'INEXISTENTE', 'INEXISTENTE'),
(2, 'Grasiele', '9876543210', '(47) 9 9904-7742', 'CIRURGIA GERAL', 'CIRURGIA PLÁSTICA', 'INEXISTENTE', 'INEXISTENTE', 'INEXISTENTE'),
(4, 'Júlia', '456789', '47 6666 6666', 'ALERGOLOGIA', 'ANGIOLOGIA', 'BUCO MAXILO', 'INEXISTENTE', 'INEXISTENTE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
