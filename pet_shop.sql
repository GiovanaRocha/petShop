-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2019 às 19:09
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_shop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cod` int(11) NOT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cidade` varchar(70) DEFAULT NULL,
  `bairro` varchar(70) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `estado` varchar(20) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `rua` varchar(70) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cod` int(11) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `imgAdc` varchar(50) DEFAULT NULL,
  `imgLogo` varchar(50) DEFAULT NULL,
  `cnpj` varchar(50) DEFAULT NULL,
  `login` varchar(70) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`estado`, `bairro`, `cidade`, `cep`, `rua`, `numero`, `cod`, `logo`, `imgAdc`, `imgLogo`, `cnpj`, `login`, `senha`, `nome`) VALUES
('', '', '', 0, 'Rua Mancio Da Maria Conceicao', 5644, 6, '', '', 'Penguins.jpg', '', 'adm', 'adm', 'cachoro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `cod` int(11) NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `raca` varchar(50) DEFAULT NULL,
  `cod_cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet_servico`
--

CREATE TABLE `pet_servico` (
  `data` varchar(20) DEFAULT NULL,
  `hora` varchar(20) DEFAULT NULL,
  `cod_servico` int(11) DEFAULT NULL,
  `cod_pet` int(11) DEFAULT NULL,
  `cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet_veterinario`
--

CREATE TABLE `pet_veterinario` (
  `hora` varchar(20) DEFAULT NULL,
  `cod_pet` int(11) DEFAULT NULL,
  `cod_veterinario` int(11) DEFAULT NULL,
  `cod` int(11) NOT NULL,
  `data` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod`, `img`, `nome`, `preco`, `descricao`) VALUES
(6, '000c016d34ff41e245b69c67f22c83ff.jpg', '1', 1, '1'),
(7, '5415c7fe534a63366b48d388f204c328.jpg', '2', 2, '2'),
(9, '28f4e638fbcacc4dcf40a55c12a218d0.jpg', 'Ração', 42, 'Carne e Frango'),
(10, '79958cabcbd8ab4afe3279374677ede2.jpg', 'Coleira', 5, 'Coleiras de couro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `cod` int(11) NOT NULL,
  `preco` double DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinario`
--

CREATE TABLE `veterinario` (
  `nome` varchar(50) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `cod` int(11) NOT NULL,
  `imgVet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veterinario`
--

INSERT INTO `veterinario` (`nome`, `descricao`, `cod`, `imgVet`) VALUES
('Giovana', 'eu sou muito linda, beijos', 5, 'Lighthouse.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_cliente` (`cod_cliente`);

--
-- Indexes for table `pet_servico`
--
ALTER TABLE `pet_servico`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_servico` (`cod_servico`),
  ADD KEY `cod_pet` (`cod_pet`);

--
-- Indexes for table `pet_veterinario`
--
ALTER TABLE `pet_veterinario`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `cod_pet` (`cod_pet`),
  ADD KEY `cod_veterinario` (`cod_veterinario`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `veterinario`
--
ALTER TABLE `veterinario`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet_servico`
--
ALTER TABLE `pet_servico`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet_veterinario`
--
ALTER TABLE `pet_veterinario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `veterinario`
--
ALTER TABLE `veterinario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `cliente` (`cod`);

--
-- Limitadores para a tabela `pet_servico`
--
ALTER TABLE `pet_servico`
  ADD CONSTRAINT `pet_servico_ibfk_1` FOREIGN KEY (`cod_servico`) REFERENCES `servico` (`cod`),
  ADD CONSTRAINT `pet_servico_ibfk_2` FOREIGN KEY (`cod_pet`) REFERENCES `pet` (`cod`);

--
-- Limitadores para a tabela `pet_veterinario`
--
ALTER TABLE `pet_veterinario`
  ADD CONSTRAINT `pet_veterinario_ibfk_1` FOREIGN KEY (`cod_pet`) REFERENCES `pet` (`cod`),
  ADD CONSTRAINT `pet_veterinario_ibfk_2` FOREIGN KEY (`cod_veterinario`) REFERENCES `veterinario` (`cod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
