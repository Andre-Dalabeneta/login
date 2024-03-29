-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Nov-2019 às 20:12
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senai`
--
DROP DATABASE IF EXISTS `senai`;
CREATE DATABASE IF NOT EXISTS `senai` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `senai`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `nomeCompleto` varchar(100) NOT NULL,
  `nomeDoUsuario` varchar(45) NOT NULL,
  `emailUsuario` varchar(45) NOT NULL,
  `senhaDoUsuario` char(40) NOT NULL,
  `dataCriado` date NOT NULL,
  `cadastroUrl` varchar(200) NOT NULL,
  `token` char(10) NOT NULL,
  `tempoDeVida` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nomeCompleto`, `nomeDoUsuario`, `emailUsuario`, `senhaDoUsuario`, `dataCriado`, `cadastroUrl`, `token`, `tempoDeVida`) VALUES
(0, 'andre andre', 'andre', 'andre@andre', '601f1889667efaebb33b8c12572835da3f027f78', '2019-11-18', 'https://i.ytimg.com/vi/SxQ55rOowXs/maxresdefault.jpg', '', '2019-11-18 22:05:32'),
(0, 'andre zikavirus', 'dede vaxcaino', 'andre@uol.org', '601f1889667efaebb33b8c12572835da3f027f78', '2019-11-18', 'https://i.ytimg.com/vi/M5_3DywAWwk/maxresdefault.jpg', '', '2019-11-18 22:07:36'),
(0, 'andre zikavirus', 'dede_vaxcaino', 'andre@uol', '601f1889667efaebb33b8c12572835da3f027f78', '2019-11-18', 'https://i.ytimg.com/vi/M5_3DywAWwk/maxresdefault.jpg', '', '2019-11-18 22:07:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
