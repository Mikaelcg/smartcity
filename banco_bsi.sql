-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8888
-- Generation Time: Mar 22, 2019 at 01:23 AM
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
  `id_residencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aparatodomestico`
--

INSERT INTO `aparatodomestico` (`id`, `aparato`, `id_residencia`) VALUES
(1, 'nome', 1);

-- --------------------------------------------------------

--
-- Table structure for table `habitante`
--

CREATE TABLE `habitante` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `nascimento` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `habitante`
--

INSERT INTO `habitante` (`id`, `nome`, `sobrenome`, `nascimento`, `sexo`) VALUES
(1, '123', '123', '1322-03-12', 'Masculino'),
(2, 'Lucas', 'Santos', '1999-03-08', 'Masculino'),
(3, '', '', '', ''),
(4, '123', '123', '2222-02-22', 'Masculino'),
(5, 'mikrls', 'fsd', '1212-12-12', 'Masculino');

-- --------------------------------------------------------

--
-- Table structure for table `residencia`
--

CREATE TABLE `residencia` (
  `id` int(11) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `metragem` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Dumping data for table `residencia`
--

INSERT INTO `residencia` (`id`, `endereco`, `numero`, `complemento`, `metragem`, `cidade`) VALUES
(1, '123', '123', '123', '123', 'Curitiba');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aparatodomestico`
--
ALTER TABLE `aparatodomestico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `habitante`
--
ALTER TABLE `habitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `residencia`
--
ALTER TABLE `residencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aparatodomestico`
--
ALTER TABLE `aparatodomestico`
  ADD CONSTRAINT `id_residencia` FOREIGN KEY (`id_residencia`) REFERENCES `residencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
