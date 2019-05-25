-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2019 às 15:34
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_lixo`
--

CREATE TABLE `cadastro_lixo` (
  `id` int(11) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `logradouro` varchar(30) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `descricao` varchar(140) DEFAULT NULL,
  `foto` varchar(140) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_lixo`
--

INSERT INTO `cadastro_lixo` (`id`, `latitude`, `longitude`, `logradouro`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `descricao`, `foto`) VALUES
(8, -11.236708, -37.431694, 'Rua São Caetano', '459', 'Centro', '49200-000', 'Estância', 'Sergipe', 'gfg', 'imagens/COLORIDO PNG LOGO GIL.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_lixo`
--
ALTER TABLE `cadastro_lixo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_lixo`
--
ALTER TABLE `cadastro_lixo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
