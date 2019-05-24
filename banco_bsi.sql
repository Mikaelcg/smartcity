-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2019 at 01:39 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_bsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `aparatodomestico`
--

CREATE TABLE `aparatodomestico` (
  `id` int(11) NOT NULL,
  `aparato` varchar(45) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `potencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aparatodomestico`
--

INSERT INTO `aparatodomestico` (`id`, `aparato`, `id_residencia`, `potencia`) VALUES
(28, '1', 5, 13),
(29, '1', 5, 100),
(31, '1', 4, 123);

-- --------------------------------------------------------

--
-- Table structure for table `consumo_agua`
--

CREATE TABLE `consumo_agua` (
  `id` int(11) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `quantidade_litros` int(11) NOT NULL,
  `data_consumo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consumo_agua`
--

INSERT INTO `consumo_agua` (`id`, `id_residencia`, `quantidade_litros`, `data_consumo`) VALUES
(1, 7, 123, '23/05/2019');

-- --------------------------------------------------------

--
-- Table structure for table `consumo_combustivel`
--

CREATE TABLE `consumo_combustivel` (
  `id_residencia` int(11) NOT NULL,
  `quantidade_litros` int(11) NOT NULL,
  `data_consumo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consumo_combustivel`
--

INSERT INTO `consumo_combustivel` (`id_residencia`, `quantidade_litros`, `data_consumo`) VALUES
(6, 124, '23/05/2019'),
(9, 2222, '23/05/2019');

-- --------------------------------------------------------

--
-- Table structure for table `consumo_eletrico`
--

CREATE TABLE `consumo_eletrico` (
  `id` int(11) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `id_aparato` int(11) NOT NULL,
  `tempo_consumo` int(11) NOT NULL,
  `data_consumo` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consumo_eletrico`
--

INSERT INTO `consumo_eletrico` (`id`, `id_residencia`, `id_aparato`, `tempo_consumo`, `data_consumo`) VALUES
(26, 5, 29, 2, '19/05/2019'),
(27, 5, 28, 1, '01/03/2019'),
(28, 5, 28, 3, '11/04/2019'),
(29, 5, 28, 3, '14/05/2019'),
(30, 5, 29, 3, '09/04/2019'),
(31, 5, 28, 5, '08/02/2019'),
(32, 4, 31, 1, '01/01/2019'),
(33, 5, 29, 2, '23/05/2019');

-- --------------------------------------------------------

--
-- Table structure for table `habitante`
--

CREATE TABLE `habitante` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `nascimento` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `id_residencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `habitante`
--

INSERT INTO `habitante` (`id`, `nome`, `sobrenome`, `nascimento`, `sexo`, `id_residencia`) VALUES
(52, 'Mikael', 'Gallucci', '03/06/1998', 'masculino', 4),
(53, 'fsdf', 'sdfdsf', '05/28/2019', 'masculino', 9),
(54, 'Joao', 'Joao', '03/12/2014', 'masculino', 5);

-- --------------------------------------------------------

--
-- Table structure for table `producao_lixo`
--

CREATE TABLE `producao_lixo` (
  `id` int(11) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `quantidade_litros` int(11) NOT NULL,
  `data_consumo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producao_lixo`
--

INSERT INTO `producao_lixo` (`id`, `id_residencia`, `quantidade_litros`, `data_consumo`) VALUES
(1, 5, 323, '23/05/2019');

-- --------------------------------------------------------

--
-- Table structure for table `residencia`
--

CREATE TABLE `residencia` (
  `id` int(11) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `area` int(11) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Dumping data for table `residencia`
--

INSERT INTO `residencia` (`id`, `endereco`, `numero`, `complemento`, `area`, `cidade`) VALUES
(4, 'Sete', 7, 'sete7', 700, 'Curitiba'),
(5, 'Oito', 8, 'oito8', 800, 'Curitiba'),
(6, 'RESIDENCIA DA ZUERA', 123456, 'APARTAMENTO 92', 120000, 'Curitiba'),
(7, 'Avenida da zoa', 123, 'Zoa pakas', 123455, 'Curitiba'),
(9, 'localhost', 123, 'Zoa pakas', 123, 'curitiba'),
(10, 'localhost', 123, 'Zoa pakas', 123, 'curitiba'),
(11, 'Avenida da zoa', 123, 'Zoa pakas', 123, 'curitiba'),
(12, '123', 213, '213', 213, 'curitiba'),
(13, '123', 213, '213', 213, 'curitiba'),
(14, '123', 213, '213', 213, 'curitiba'),
(15, '123', 213, '213', 213, 'curitiba'),
(16, '123', 213, '213', 213, 'curitiba'),
(17, '123', 213, '213', 213, 'curitiba'),
(18, '123', 213, '213', 213, 'curitiba'),
(19, '123', 213, '213', 213, 'curitiba'),
(20, '123', 213, '213', 213, 'curitiba');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `confirmado` tinyint(4) NOT NULL,
  `codigo_confirmacao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `confirmado`, `codigo_confirmacao`) VALUES
(10, '123', 'mikagallucci@hotmail.com', '202cb962ac59075b964b07152d234b70', 0, ''),
(11, '123', 'mikagallucci@hotmail.com', '202cb962ac59075b964b07152d234b70', 0, ''),
(12, 'lol', '123@aaa.com', '9cdfb439c7876e703e307864c9167a15', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aparatodomestico`
--
ALTER TABLE `aparatodomestico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_residencia_idx` (`id_residencia`);

--
-- Indexes for table `consumo_agua`
--
ALTER TABLE `consumo_agua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumo_eletrico`
--
ALTER TABLE `consumo_eletrico`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `habitante`
--
ALTER TABLE `habitante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producao_lixo`
--
ALTER TABLE `producao_lixo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residencia`
--
ALTER TABLE `residencia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aparatodomestico`
--
ALTER TABLE `aparatodomestico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `consumo_agua`
--
ALTER TABLE `consumo_agua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consumo_eletrico`
--
ALTER TABLE `consumo_eletrico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `habitante`
--
ALTER TABLE `habitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `producao_lixo`
--
ALTER TABLE `producao_lixo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `residencia`
--
ALTER TABLE `residencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
