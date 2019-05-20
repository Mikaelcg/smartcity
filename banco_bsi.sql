-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2019 às 02:30
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

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
-- Estrutura da tabela `aparatodomestico`
--

CREATE TABLE `aparatodomestico` (
  `id` int(11) NOT NULL,
  `aparato` varchar(45) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `potencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aparatodomestico`
--

INSERT INTO `aparatodomestico` (`id`, `aparato`, `id_residencia`, `potencia`) VALUES
(28, '1', 5, 13),
(29, '1', 5, 100),
(31, '1', 4, 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumo_agua`
--

CREATE TABLE `consumo_agua` (
  `id` int(11) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `consumo` float NOT NULL,
  `data_consumo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumo_eletrico`
--

CREATE TABLE `consumo_eletrico` (
  `id` int(11) NOT NULL,
  `id_residencia` int(11) NOT NULL,
  `id_aparato` int(11) NOT NULL,
  `tempo_consumo` int(11) NOT NULL,
  `data_consumo` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `consumo_eletrico`
--

INSERT INTO `consumo_eletrico` (`id`, `id_residencia`, `id_aparato`, `tempo_consumo`, `data_consumo`) VALUES
(26, 5, 29, 2, '19/05/2019'),
(27, 5, 28, 1, '01/03/2019'),
(28, 5, 28, 3, '11/04/2019'),
(29, 5, 28, 3, '14/05/2019'),
(30, 5, 29, 3, '09/04/2019'),
(31, 5, 28, 5, '08/02/2019'),
(32, 4, 31, 1, '01/01/2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `habitante`
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
-- Extraindo dados da tabela `habitante`
--

INSERT INTO `habitante` (`id`, `nome`, `sobrenome`, `nascimento`, `sexo`, `id_residencia`) VALUES
(52, 'Mikael', 'Gallucci', '03/06/1998', 'masculino', 4),
(53, 'fsdf', 'sdfdsf', '05/28/2019', 'masculino', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `residencia`
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
-- Extraindo dados da tabela `residencia`
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
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `confirmado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `confirmado`) VALUES
(10, '123', 'mikagallucci@hotmail.com', '202cb962ac59075b964b07152d234b70', 0),
(11, '123', 'mikagallucci@hotmail.com', '202cb962ac59075b964b07152d234b70', 0),
(12, 'lol', '123@aaa.com', '9cdfb439c7876e703e307864c9167a15', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consumo_eletrico`
--
ALTER TABLE `consumo_eletrico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `habitante`
--
ALTER TABLE `habitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
