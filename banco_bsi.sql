-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2019 às 01:36
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
  `consumo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aparatodomestico`
--

INSERT INTO `aparatodomestico` (`id`, `aparato`, `id_residencia`, `consumo`) VALUES
(7, 'TV', 4, 700),
(8, 'Geladeira', 4, 800),
(9, 'Ar-condicionado', 4, 200),
(10, 'Geladeira', 5, 100),
(11, 'Microondas', 5, 400),
(12, '10', 5, 2),
(13, '7', 4, 1),
(14, '7', 4, 213),
(15, '10', 5, 12313),
(16, '7', 4, 123),
(17, '7', 4, 123),
(18, '7', 4, 123),
(19, '9', 4, 123),
(20, '7', 4, 12344455),
(21, '8', 4, 12313),
(22, '7', 4, 123),
(23, 'Computador', 6, 10),
(24, 'TV', 6, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_federacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumo_agua`
--

CREATE TABLE `consumo_agua` (
  `id_residencia` int(11) NOT NULL,
  `consumo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `consumo_agua`
--

INSERT INTO `consumo_agua` (`id_residencia`, `consumo`) VALUES
(4, 123),
(4, 123),
(4, 123),
(4, 546654);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consumo_eletrico`
--

CREATE TABLE `consumo_eletrico` (
  `id_residencia` int(11) NOT NULL,
  `id_aparato` int(11) NOT NULL,
  `tempo_consumo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `consumo_eletrico`
--

INSERT INTO `consumo_eletrico` (`id_residencia`, `id_aparato`, `tempo_consumo`) VALUES
(4, 9, 123),
(4, 7, 12344455),
(4, 8, 12313),
(4, 7, 123),
(4, 7, 12313),
(5, 11, 555555),
(4, 8, 9809),
(6, 23, 10),
(6, 24, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `habitante`
--

CREATE TABLE `habitante` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `nascimento` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `habitante`
--

INSERT INTO `habitante` (`id`, `nome`, `sobrenome`, `nascimento`, `sexo`) VALUES
(23, '222', '222', '2222-02-22', 'Masculino'),
(24, 'TEAST1', '12', '2222-02-22', 'Masculino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `morador`
--

CREATE TABLE `morador` (
  `id_habitante` int(11) NOT NULL,
  `id_residencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `morador`
--

INSERT INTO `morador` (`id_habitante`, `id_residencia`) VALUES
(12, 1),
(17, 1),
(21, 1),
(23, 4),
(24, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `residencia`
--

CREATE TABLE `residencia` (
  `id` int(11) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `metragem` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `id_cidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

--
-- Extraindo dados da tabela `residencia`
--

INSERT INTO `residencia` (`id`, `endereco`, `numero`, `complemento`, `metragem`, `cidade`, `id_cidade`) VALUES
(4, 'Sete', '7', 'sete7', '700', 'Curitiba', NULL),
(5, 'Oito', '8', 'oito8', '800', 'Curitiba', NULL),
(6, 'RESIDENCIA DA ZUERA', '123456', 'APARTAMENTO 92', '120000', 'Curitiba', NULL),
(7, 'Avenida da zoa', '123', 'Zoa pakas', '123455', 'Curitiba', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade_federacao`
--

CREATE TABLE `unidade_federacao` (
  `id` int(11) NOT NULL,
  `siga` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `email`, `senha`) VALUES
(1, '123', '123', 'd9b1d7db4cd6e70935368a1efb10e377'),
(2, 'dd', 'ddd', '11ddbaf3386aea1f2974eee984542152'),
(3, 'aaa', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808');

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
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `habitante`
--
ALTER TABLE `habitante`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `morador`
--
ALTER TABLE `morador`
  ADD KEY `id_residencia_idx` (`id_residencia`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residencia`
--
ALTER TABLE `residencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cidade_idx` (`id_cidade`);

--
-- Indexes for table `unidade_federacao`
--
ALTER TABLE `unidade_federacao`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `habitante`
--
ALTER TABLE `habitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residencia`
--
ALTER TABLE `residencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unidade_federacao`
--
ALTER TABLE `unidade_federacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
