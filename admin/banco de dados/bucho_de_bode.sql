-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Mar-2019 às 22:04
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bucho_de_bode`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Administração', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atracao`
--

CREATE TABLE `atracao` (
  `id` int(11) NOT NULL,
  `banner` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atracao`
--

INSERT INTO `atracao` (`id`, `banner`) VALUES
(7, '733cbe733e35a811d447f1b5cb27d97a.jpg'),
(8, 'a3b28ce7ec95ed9e0a4d0abaff3d036a.jpg'),
(9, '084dee346b48cd114e876443107157e5.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int(11) NOT NULL,
  `nome_comida` varchar(200) NOT NULL,
  `preco_comida` double NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesas`
--

CREATE TABLE `mesas` (
  `id` int(11) NOT NULL,
  `nome_reservista` varchar(200) NOT NULL,
  `mesa` varchar(250) NOT NULL,
  `data` varchar(250) NOT NULL,
  `status` enum('reservada','naoreservada') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesas`
--

INSERT INTO `mesas` (`id`, `nome_reservista`, `mesa`, `data`, `status`) VALUES
(1, '', 'Mesa 1', '', 'naoreservada'),
(2, '', 'Mesa 2', '', 'naoreservada'),
(3, '', 'Mesa 3', '', 'naoreservada'),
(4, '', 'Mesa 4', '', 'naoreservada'),
(5, '', 'Mesa 5', '', 'naoreservada'),
(6, '', 'Mesa 6', '', 'naoreservada'),
(7, '', 'Mesa 7', '', 'naoreservada'),
(8, '', 'Mesa 8', '', 'naoreservada'),
(9, '', 'Mesa 9', '', 'naoreservada'),
(10, '', 'Mesa 10', '', 'naoreservada'),
(11, '', 'Mesa 11', '', 'naoreservada'),
(12, '', 'Mesa 12', '', 'naoreservada'),
(13, '', 'Mesa 13', '', 'naoreservada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indexes for table `atracao`
--
ALTER TABLE `atracao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome_comida` (`nome_comida`);

--
-- Indexes for table `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `atracao`
--
ALTER TABLE `atracao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
