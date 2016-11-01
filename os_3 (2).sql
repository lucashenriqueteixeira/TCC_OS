-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2016 às 22:52
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `os_3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendente`
--

CREATE TABLE `atendente` (
  `idAtendente` int(10) UNSIGNED NOT NULL,
  `idEndereco` int(10) UNSIGNED NOT NULL,
  `NomeAtendente` varchar(255) DEFAULT NULL,
  `CPFAtendente` varchar(14) DEFAULT NULL,
  `SexoAtendente` varchar(1) DEFAULT NULL,
  `CargoAtendente` varchar(15) DEFAULT NULL,
  `DTNAtendente` date DEFAULT NULL,
  `TelefoneAtendente` varchar(20) DEFAULT NULL,
  `StatusAtendente` varchar(15) DEFAULT NULL,
  `SenhaAtendente` varchar(100) DEFAULT NULL,
  `LoginAtendente` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atendente`
--

INSERT INTO `atendente` (`idAtendente`, `idEndereco`, `NomeAtendente`, `CPFAtendente`, `SexoAtendente`, `CargoAtendente`, `DTNAtendente`, `TelefoneAtendente`, `StatusAtendente`, `SenhaAtendente`, `LoginAtendente`) VALUES
(1, 1, 'Gustavo Silva', '123.456.789-99', 'm', 'Administrador', '2002-09-24', '(31) 39383-8383', 'Ativo', '9f1cb52df1029b12a08ed61d988b8fb1', 'admin'),
(2, 8, 'lUCAS', '..-', 'f', 'Administrador', '0000-00-00', '(B', 'Ativo', '87b74622a6c0aa8f495a5628930c71f7', 'KJB'),
(3, 9, 'khv5', '46', 'm', 'Administrador', '1992-08-23', '(65) 4', 'Ativo', '2990cd103da68712710c4a3c27f76b6d', '4'),
(4, 10, 'khv5', '123.331.231-23', 'm', 'callcenter', '1992-04-24', '(12) 31231-2312', 'Ativo', '6a5fb24f28a50cf34031a2d785b62524', '4'),
(5, 11, 'khv5', '754.654.545-64', 'm', 'Administrador', '0000-00-00', '(65) 46546-5465', 'Ativo', '8ab40a44e11350aa26a05b2a751fc06b', '465'),
(6, 12, 'ouh', '56', 'm', 'Administrador', '0000-00-00', '(56', 'Ativo', 'd370b4246f3dc410b9cd8c9de78f7470', '5'),
(7, 15, 'teste ajax', '123.123.123-12', 'm', 'Administrador', '0000-00-00', '(12) 31231-2312', 'Ativo', '28450254ffb397d86692767f637de31a', 'yug'),
(8, 16, 'este ajax265', '465', 'f', 'Administrador', '0000-00-00', '(456', 'Ativo', 'c7f536ec519329c91e33703eda3b897b', '56465'),
(9, 17, 'lucas ajax', '87..-68', 'm', 'Administrador', '0000-00-00', '(765', 'Ativo', '24cae0dd03da3df2cf8ee4cc84f3eaf2', '765');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `ProtocoloAtendimento` int(10) UNSIGNED NOT NULL,
  `NumeroConta` int(10) UNSIGNED NOT NULL,
  `idAtendente` int(10) UNSIGNED NOT NULL,
  `DescServico` text,
  `OBSAtendimento` text,
  `StatusAtendimento` varchar(15) DEFAULT NULL,
  `DataAberturaAtendimento` date DEFAULT NULL,
  `HoraAberturaAtendimento` time DEFAULT NULL,
  `DataFechamentoAtendimento` date DEFAULT NULL,
  `HoraFechamento` time DEFAULT NULL,
  `TipoServicoAtendimento` varchar(255) DEFAULT NULL,
  `PrioridadeAtendimento` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`ProtocoloAtendimento`, `NumeroConta`, `idAtendente`, `DescServico`, `OBSAtendimento`, `StatusAtendimento`, `DataAberturaAtendimento`, `HoraAberturaAtendimento`, `DataFechamentoAtendimento`, `HoraFechamento`, `TipoServicoAtendimento`, `PrioridadeAtendimento`) VALUES
(1, 4, 1, 'descricao', 'observacao', 'status', '2016-10-04', '01:00:00', '2016-10-04', '00:22:00', 'tipo', 'prioridade'),
(2, 12, 1, 'descricao', 'observação', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(3, 12, 1, 'descricao', 'observação', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(4, 12, 1, 'descricao', 'observação', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(5, 12, 1, 'descritivo', 'observativo\r\n', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(6, 12, 1, 'descritivo', 'observativo\r\n', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(7, 12, 1, 'qsdqsd', 'asd\r\n', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(8, 12, 1, 'Cu aberto cagou groço e entupiu o vaso e o encanamento da rua', 'O cliente é viado.', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(9, 12, 1, 'asjdb', 'kjbdcfk', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(10, 12, 1, 'asjdb', 'kjbdcfk', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(11, 12, 1, 'asjdb', 'kjbdcfk', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'ALTA'),
(12, 12, 1, 'jhhv', 'jhv\r\n', NULL, '0000-00-00', '00:20:16', NULL, NULL, NULL, 'Selecione...');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `NumeroConta` int(10) UNSIGNED NOT NULL,
  `idEndereco` int(10) UNSIGNED NOT NULL,
  `NomeCliente` varchar(255) DEFAULT NULL,
  `CPF_CNPJ` varchar(25) DEFAULT NULL,
  `SexoCliente` varchar(1) DEFAULT NULL,
  `DTNCliente` date DEFAULT NULL,
  `TelefoneCliente` varchar(20) DEFAULT NULL,
  `StatusCliente` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`NumeroConta`, `idEndereco`, `NomeCliente`, `CPF_CNPJ`, `SexoCliente`, `DTNCliente`, `TelefoneCliente`, `StatusCliente`) VALUES
(38, 337, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(39, 338, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(40, 339, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(41, 340, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(42, 341, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(43, 342, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(44, 343, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(45, 344, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(46, 345, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-3333', 'ativo'),
(47, 346, 'Lucas Henrique Teixeira Coelho Dias', '', 'm', '0000-00-00', '(33) 33333-333', 'ativo'),
(48, 347, '678', '.76.6/', 'm', '0000-00-00', '(87) 67867-8', 'ativo'),
(49, 348, '54654654', '', 'm', '0000-00-00', '(64) 65465', 'ativo'),
(50, 349, '65', '67.5', 'm', '0000-00-00', '(675', 'ativo'),
(51, 350, '786786', '87.6', 'm', '0000-00-00', '(87) 6786', 'ativo'),
(52, 351, 'lcuas', '87.6', 'm', '0000-00-00', '(87) 6786', 'ativo'),
(53, 352, 'liqhwf', '87.6', 'm', '0000-00-00', '(87) 6786', 'ativo'),
(54, 353, 'hguyt', '65.4', 'm', '0000-00-00', '(', 'ativo'),
(55, 354, 'kjkg', '76.576.576/5671-45', 'm', '0000-00-00', '(76) 57656-7576', 'ativo'),
(56, 355, 'kjhjkhj', '', 'm', '0000-00-00', '(76) 57656-7576', 'ativo'),
(57, 356, '24234234', '', 'm', '0000-00-00', '(76) 57656-7576', 'ativo'),
(58, 357, '65756756', '76.5', 'm', '0000-00-00', '(76) 57657-6', 'ativo'),
(59, 358, '56756''5765''765''57', '5', 'm', '0000-00-00', '(76', 'ativo'),
(60, 359, 'ugi', '../', 'm', '0000-00-00', '(t', 'ativo'),
(61, 360, 'ytut', '../', 'm', '0000-00-00', '(57) 6567576', 'ativo'),
(62, 361, 'trtrtyrtyr', '76.567.576', 'm', '0000-00-00', '(75) 765', 'ativo'),
(63, 362, 'u675', '5', 'm', '0000-00-00', '(57) 65765', 'ativo'),
(64, 363, '5665765', '76', 'm', '0000-00-00', '(76) 57657-6', 'ativo'),
(65, 364, '575765', '567', 'm', '0000-00-00', '(76) 5765', 'ativo'),
(66, 365, 'Lucas Henrique Teixeira Coelho Dias', '22.2', 'm', '0000-00-00', '(22) 22222-2222', 'ativo'),
(67, 366, 'lucas henrique teixiera colho dias', '', 'm', '0000-00-00', '(65) 46546-54', 'ativo'),
(68, 367, 'turtyr', '../r', 'm', '0000-00-00', '(', 'ativo'),
(69, 368, 'turtyr', '../r', 'm', '0000-00-00', '(', 'ativo'),
(70, 369, '7545646', '56.456.4564', 'm', '0000-00-00', '(65) 465465', 'ativo'),
(71, 370, 'lucas henrlqh', '65.4./6541-46', 'm', '0000-00-00', '(65) 46546-5456', 'ativo'),
(72, 371, 'lucas henrlqh', '', 'm', '0000-00-00', '(23) 42423-4234', 'ativo'),
(73, 372, '67454654564', '65.546.54', 'm', '0000-00-00', '(65) 46546-54', 'ativo'),
(74, 373, '65', '456', 'm', '0000-00-00', '(465', 'ativo'),
(75, 374, 'lucas', '65.4', 'm', '0000-00-00', '(65) 46546', 'ativo'),
(76, 375, 'lucas', '65.465.4', 'm', '0000-00-00', '(65) 4654', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idEndereco` int(10) UNSIGNED NOT NULL,
  `NumeroCasa` int(10) UNSIGNED DEFAULT NULL,
  `Complemento` varchar(10) DEFAULT NULL,
  `Logradouro` varchar(255) DEFAULT NULL,
  `Bairro` varchar(255) DEFAULT NULL,
  `Cidade` varchar(255) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`idEndereco`, `NumeroCasa`, `Complemento`, `Logradouro`, `Bairro`, `Cidade`, `UF`) VALUES
(1, 102, NULL, 'Rio tapajos', 'nossa senhora de fatima', 'Nova Lima', 'mg'),
(2, NULL, NULL, 'Rua de belem', 'Nao sei', 'nao sei tambem', 'mg'),
(3, NULL, NULL, 'nao sei', 'nossa senhora de fatima', 'n', 'Se'),
(4, NULL, NULL, 'a', 'm', 'm', 'Se'),
(5, NULL, NULL, 'a', 'a', 'Nova Lima', 'ac'),
(6, NULL, NULL, '1', '1', '1', 'Se'),
(7, 24, NULL, 'rio tapajos', 'ja deu', 'seu cu', 'mg'),
(8, 2234, NULL, 'KJB', 'KJB', 'KJB', 'Se'),
(9, 654, NULL, '564', '56', '465', 'Se'),
(10, 134234, NULL, '564', '56', '465', 'Se'),
(11, 654, NULL, '654', '564', '654', 'Se'),
(12, 5, NULL, '675', '765', '7', 'Se'),
(13, NULL, NULL, 'guy', 'gyu', 'guyg', 'Se'),
(14, NULL, NULL, 'guy', 'gyu', 'guyg', 'Se'),
(15, 12312, NULL, 'iyt', 'yug', 'uyg', 'Se'),
(16, 456, NULL, '465', '465', '465', 'Se'),
(17, 576, NULL, '76', '576', '5', 'Se'),
(18, NULL, NULL, '67', '567', '576', 'Se'),
(19, NULL, NULL, '456', '465', '465', 'Se'),
(20, NULL, NULL, '456', '465', '465', 'Se'),
(21, NULL, NULL, '5465', '564', '654', 'Se'),
(22, NULL, NULL, '5465', '564', '654', 'Se'),
(23, NULL, NULL, '5465', '564', '654', 'Se'),
(24, NULL, NULL, '5465', '564', '654', 'Se'),
(25, NULL, NULL, '5465', '564', '654', 'Se'),
(26, NULL, NULL, '5465', '564', '654', 'Se'),
(27, NULL, NULL, '5465', '564', '654', 'Se'),
(28, NULL, NULL, '54564564', '564', '564', 'Se'),
(29, NULL, NULL, '54564564', '564', '564', 'Se'),
(30, NULL, NULL, '54564564', '564', '564', 'Se'),
(31, NULL, NULL, '54564564', '564', '564', 'Se'),
(32, NULL, NULL, '654', '654', '654', 'Se'),
(33, NULL, NULL, '654', '654', '654', 'Se'),
(34, NULL, NULL, '654', '654', '654', 'Se'),
(35, NULL, NULL, '654', '654', '654', 'Se'),
(36, NULL, NULL, '654', '654', '654', 'Se'),
(37, NULL, NULL, '654', '654', '654', 'Se'),
(38, NULL, NULL, '654', '654', '654', 'Se'),
(39, NULL, NULL, '654', '654', '654', 'Se'),
(40, NULL, NULL, '654', '654', '654', 'Se'),
(41, NULL, NULL, '654', '654', '654', 'Se'),
(42, NULL, NULL, '654', '654', '654', 'Se'),
(43, NULL, NULL, '654', '654', '654', 'Se'),
(44, NULL, NULL, '654', '654', '654', 'Se'),
(45, NULL, NULL, '654', '654', '654', 'Se'),
(46, NULL, NULL, '654', '654', '654', 'Se'),
(47, NULL, NULL, '654', '654', '654', 'Se'),
(48, NULL, NULL, '654', '654', '654', 'Se'),
(49, NULL, NULL, '654', '654', '654', 'Se'),
(50, NULL, NULL, '654', '654', '654', 'Se'),
(51, NULL, NULL, '654', '654', '654', 'Se'),
(52, NULL, NULL, '654', '654', '654', 'Se'),
(53, NULL, NULL, '654', '654', '654', 'Se'),
(54, NULL, NULL, '654', '654', '654', 'Se'),
(55, NULL, NULL, '654', '654', '654', 'Se'),
(56, NULL, NULL, '654', '654', '654', 'Se'),
(57, NULL, NULL, '654', '654', '654', 'Se'),
(58, NULL, NULL, '654', '654', '654', 'Se'),
(59, NULL, NULL, '654', '654', '654', 'Se'),
(60, NULL, NULL, 'vhg', 'hg', 'vhg', 'Se'),
(61, NULL, NULL, 'vhg', 'hg', 'vhg', 'Se'),
(62, NULL, NULL, 'vhg', 'hg', 'vhg', 'Se'),
(63, NULL, NULL, 'vhg', 'hg', 'vhg', 'Se'),
(64, NULL, NULL, '354', '543', '543', 'Se'),
(65, NULL, NULL, 'ghj', 'hjg', 'hjg', 'Se'),
(66, NULL, NULL, 'ghj', 'jhg', 'hjg', 'Se'),
(67, NULL, NULL, 'tut', 'tyutuyu', 'yt', 'Se'),
(68, NULL, NULL, 'uyt', 'uyt', 'uyt', 'Se'),
(69, NULL, NULL, 'tuyt', 'tuyt', 'uyt', 'Se'),
(70, NULL, NULL, '3453453453', '3543', '5435', 'sp'),
(71, NULL, NULL, 'tu', 'tuytuytuytyutuytuytuy', 'tuy', 'Se'),
(72, NULL, NULL, 'tu', 'tuytuytuytyutuytuytuy', 'tuy', 'Se'),
(73, NULL, NULL, 'tu', 'tuytuytuytyutuytuytuy', 'tuy', 'Se'),
(74, NULL, NULL, '5465456456', '654', '564', 'Se'),
(75, NULL, NULL, '5465456456', '654', '564', 'Se'),
(76, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, NULL, NULL, NULL),
(81, NULL, NULL, NULL, NULL, NULL, NULL),
(82, NULL, NULL, NULL, NULL, NULL, NULL),
(83, NULL, NULL, NULL, NULL, NULL, NULL),
(84, NULL, NULL, NULL, NULL, NULL, NULL),
(85, NULL, NULL, NULL, NULL, NULL, NULL),
(86, NULL, NULL, NULL, NULL, NULL, NULL),
(87, NULL, NULL, NULL, NULL, NULL, NULL),
(88, NULL, NULL, NULL, NULL, NULL, NULL),
(89, NULL, NULL, NULL, NULL, NULL, NULL),
(90, NULL, NULL, NULL, NULL, NULL, NULL),
(91, NULL, NULL, NULL, NULL, NULL, NULL),
(92, NULL, NULL, NULL, NULL, NULL, NULL),
(93, NULL, NULL, '765', '5765', '765', 'Se'),
(94, NULL, NULL, '765', '5765', '765', 'Se'),
(95, NULL, NULL, '765', '5765', '765', 'Se'),
(96, NULL, NULL, '765', '5765', '765', 'Se'),
(97, NULL, NULL, '765', '5765', '765', 'Se'),
(98, NULL, NULL, '765', '5765', '765', 'Se'),
(99, NULL, NULL, '765', '5765', '765', 'Se'),
(100, NULL, NULL, 'ryt', 'ryt', 'ryt', 'rj'),
(101, NULL, NULL, 'ryt', 'ryt', 'ryt', 'rj'),
(102, NULL, NULL, 'ryt', 'ryt', 'ryt', 'rj'),
(103, NULL, NULL, '44', '4', '4', 'Se'),
(104, NULL, NULL, '44', '4', '4', 'Se'),
(105, NULL, NULL, '44', '4', '4', 'Se'),
(106, NULL, NULL, '44', '4', '4', 'Se'),
(107, NULL, NULL, '33', '33', '3', 'Se'),
(108, NULL, NULL, '33', '33', '3', 'Se'),
(109, NULL, NULL, '33', '33', '3', 'Se'),
(110, NULL, NULL, '4', '4', '4', 'Se'),
(111, NULL, NULL, '4', '4', '4', 'Se'),
(112, NULL, NULL, '4', '4', '4', 'Se'),
(113, NULL, NULL, '4', '4', '4', 'Se'),
(114, NULL, NULL, '4', '4', '4', 'Se'),
(115, NULL, NULL, '4', '4', '4', 'Se'),
(116, NULL, NULL, '45454', '456', '45', 'Se'),
(117, NULL, NULL, '45454', '456', '45', 'Se'),
(118, NULL, NULL, '456456456', '45', '45', 'Se'),
(119, NULL, NULL, '657', '765', '765', 'Se'),
(120, NULL, NULL, '657', '765', '765', 'Se'),
(121, NULL, NULL, '657', '765', '765', 'Se'),
(122, NULL, NULL, '657', '765', '765', 'Se'),
(123, NULL, NULL, '657', '765', '765', 'Se'),
(124, NULL, NULL, '657', '765', '765', 'Se'),
(125, NULL, NULL, '657', '765', '765', 'Se'),
(126, NULL, NULL, '657', '765', '765', 'Se'),
(127, NULL, NULL, '657', '765', '765', 'Se'),
(128, NULL, NULL, '657', '765', '765', 'Se'),
(129, NULL, NULL, '657', '765', '765', 'Se'),
(130, NULL, NULL, '657', '765', '765', 'Se'),
(131, NULL, NULL, '657', '765', '765', 'Se'),
(132, NULL, NULL, '657', '765', '765', 'Se'),
(133, NULL, NULL, '657', '765', '765', 'Se'),
(134, NULL, NULL, '657', '765', '765', 'Se'),
(135, NULL, NULL, '657', '765', '765', 'Se'),
(136, NULL, NULL, '657', '765', '765', 'Se'),
(137, NULL, NULL, '657', '765', '765', 'Se'),
(138, NULL, NULL, '657', '765', '765', 'Se'),
(139, NULL, NULL, '657', '765', '765', 'Se'),
(140, NULL, NULL, '657', '765', '765', 'Se'),
(141, NULL, NULL, '657', '765', '765', 'Se'),
(142, NULL, NULL, '657', '765', '765', 'Se'),
(143, NULL, NULL, '657', '765', '765', 'Se'),
(144, NULL, NULL, '657', '765', '765', 'Se'),
(145, NULL, NULL, '657', '765', '765', 'Se'),
(146, NULL, NULL, '657', '765', '765', 'Se'),
(147, NULL, NULL, '657', '765', '765', 'Se'),
(148, NULL, NULL, '657', '765', '765', 'Se'),
(149, NULL, NULL, '657', '765', '765', 'Se'),
(150, NULL, NULL, '657', '765', '765', 'Se'),
(151, NULL, NULL, '657', '765', '765', 'Se'),
(152, NULL, NULL, '657', '765', '765', 'Se'),
(153, NULL, NULL, '657', '765', '765', 'Se'),
(154, NULL, NULL, '657', '765', '765', 'Se'),
(155, NULL, NULL, '657', '765', '765', 'Se'),
(156, NULL, NULL, '657', '765', '765', 'Se'),
(157, NULL, NULL, '657', '765', '765', 'Se'),
(158, NULL, NULL, '657', '765', '765', 'Se'),
(159, NULL, NULL, '657', '765', '765', 'Se'),
(160, NULL, NULL, '657', '765', '765', 'Se'),
(161, NULL, NULL, '657', '765', '765', 'Se'),
(162, NULL, NULL, '657', '765', '765', 'Se'),
(163, NULL, NULL, '657', '765', '765', 'Se'),
(164, NULL, NULL, '657', '765', '765', 'Se'),
(165, NULL, NULL, '657', '765', '765', 'Se'),
(166, NULL, NULL, '657', '765', '765', 'Se'),
(167, NULL, NULL, '657', '765', '765', 'Se'),
(168, NULL, NULL, '657', '765', '765', 'Se'),
(169, NULL, NULL, '657', '765', '765', 'Se'),
(170, NULL, NULL, '657', '765', '765', 'Se'),
(171, NULL, NULL, '657', '765', '765', 'Se'),
(172, NULL, NULL, '657', '765', '765', 'Se'),
(173, NULL, NULL, '657', '765', '765', 'Se'),
(174, NULL, NULL, '657', '765', '765', 'Se'),
(175, NULL, NULL, '657', '765', '765', 'Se'),
(176, NULL, NULL, '657', '765', '765', 'Se'),
(177, NULL, NULL, '657', '765', '765', 'Se'),
(178, NULL, NULL, '657', '765', '765', 'Se'),
(179, NULL, NULL, '657', '765', '765', 'Se'),
(180, NULL, NULL, '657', '765', '765', 'Se'),
(181, NULL, NULL, '657', '765', '765', 'Se'),
(182, NULL, NULL, '657', '765', '765', 'Se'),
(183, NULL, NULL, '657', '765', '765', 'Se'),
(184, NULL, NULL, '657', '765', '765', 'Se'),
(185, NULL, NULL, '657', '765', '765', 'Se'),
(186, NULL, NULL, '657', '765', '765', 'Se'),
(187, NULL, NULL, '657', '765', '765', 'Se'),
(188, NULL, NULL, '657', '765', '765', 'Se'),
(189, NULL, NULL, '657', '765', '765', 'Se'),
(190, NULL, NULL, '657', '765', '765', 'Se'),
(191, NULL, NULL, '657', '765', '765', 'Se'),
(192, NULL, NULL, '657', '765', '765', 'Se'),
(193, NULL, NULL, '657', '765', '765', 'Se'),
(194, NULL, NULL, '657', '765', '765', 'Se'),
(195, NULL, NULL, '657', '765', '765', 'Se'),
(196, NULL, NULL, '657', '765', '765', 'Se'),
(197, NULL, NULL, '657', '765', '765', 'Se'),
(198, NULL, NULL, '657', '765', '765', 'Se'),
(199, NULL, NULL, '657', '765', '765', 'Se'),
(200, NULL, NULL, '657', '765', '765', 'Se'),
(201, NULL, NULL, '657', '765', '765', 'Se'),
(202, NULL, NULL, '657', '765', '765', 'Se'),
(203, NULL, NULL, '657', '765', '765', 'Se'),
(204, NULL, NULL, '657', '765', '765', 'Se'),
(205, NULL, NULL, '657', '765', '765', 'Se'),
(206, NULL, NULL, '657', '765', '765', 'Se'),
(207, NULL, NULL, '657', '765', '765', 'Se'),
(208, NULL, NULL, '657', '765', '765', 'Se'),
(209, NULL, NULL, '657', '765', '765', 'Se'),
(210, NULL, NULL, '657', '765', '765', 'Se'),
(211, NULL, NULL, '657', '765', '765', 'Se'),
(212, NULL, NULL, '657', '765', '765', 'Se'),
(213, NULL, NULL, '657', '765', '765', 'Se'),
(214, NULL, NULL, '657', '765', '765', 'Se'),
(215, NULL, NULL, '657', '765', '765', 'Se'),
(216, NULL, NULL, '657', '765', '765', 'Se'),
(217, NULL, NULL, '657', '765', '765', 'Se'),
(218, NULL, NULL, '657', '765', '765', 'Se'),
(219, NULL, NULL, '657', '765', '765', 'Se'),
(220, NULL, NULL, '657', '765', '765', 'Se'),
(221, NULL, NULL, '657', '765', '765', 'Se'),
(222, NULL, NULL, '657', '765', '765', 'Se'),
(223, NULL, NULL, '657', '765', '765', 'Se'),
(224, NULL, NULL, '657', '765', '765', 'Se'),
(225, NULL, NULL, '657', '765', '765', 'Se'),
(226, NULL, NULL, '657', '765', '765', 'Se'),
(227, NULL, NULL, '657', '765', '765', 'Se'),
(228, NULL, NULL, '657', '765', '765', 'Se'),
(229, NULL, NULL, '657', '765', '765', 'Se'),
(230, NULL, NULL, '657', '765', '765', 'Se'),
(231, NULL, NULL, '657', '765', '765', 'Se'),
(232, NULL, NULL, '657', '765', '765', 'Se'),
(233, NULL, NULL, 'y54654', '64', '654', 'Se'),
(234, NULL, NULL, 'y54654', '64', '654', 'Se'),
(235, NULL, NULL, 'y54654', '64', '654', 'Se'),
(236, NULL, NULL, 'y54654', '64', '654', 'Se'),
(237, NULL, NULL, 'y54654', '64', '654', 'Se'),
(238, NULL, NULL, 'y54654', '64', '654', 'Se'),
(239, NULL, NULL, 'y54654', '64', '654', 'Se'),
(240, NULL, NULL, 'y54654', '64', '654', 'Se'),
(241, NULL, NULL, 'y54654', '64', '654', 'Se'),
(242, NULL, NULL, 'y54654', '64', '654', 'Se'),
(243, NULL, NULL, 'y54654', '64', '654', 'Se'),
(244, NULL, NULL, 'y54654', '64', '654', 'Se'),
(245, NULL, NULL, 'y54654', '64', '654', 'Se'),
(246, NULL, NULL, 'y54654', '64', '654', 'Se'),
(247, NULL, NULL, 'y54654', '64', '654', 'Se'),
(248, NULL, NULL, 'y54654', '64', '654', 'Se'),
(249, NULL, NULL, 'y54654', '64', '654', 'Se'),
(250, NULL, NULL, 'y54654', '64', '654', 'Se'),
(251, NULL, NULL, '678', '876', '87687', 'Se'),
(252, NULL, NULL, '678', '876', '87687', 'Se'),
(253, NULL, NULL, '678', '876', '87687', 'Se'),
(254, NULL, NULL, 'tyu', 'tuy', 'tuy', 'Se'),
(255, NULL, NULL, 'tyu', 'tuy', 'tuy', 'Se'),
(256, NULL, NULL, '55', '456', '465', 'Se'),
(257, NULL, NULL, '55', '456', '465', 'Se'),
(258, NULL, NULL, 'iug', 'iug', 'iug', 'Se'),
(259, NULL, NULL, 'iug', 'iug', 'iug', 'Se'),
(260, NULL, NULL, '765', '765', '765', 'Se'),
(261, NULL, NULL, '765', '765', '765', 'Se'),
(262, NULL, NULL, '765', '765', '765', 'Se'),
(263, NULL, NULL, '765', '765', '765', 'Se'),
(264, NULL, NULL, '765', '765', '765', 'Se'),
(265, NULL, NULL, '765', '765', '765', 'Se'),
(266, NULL, NULL, '765', '765', '765', 'Se'),
(267, NULL, NULL, '765', '765', '765', 'Se'),
(268, NULL, NULL, '765', '765', '765', 'Se'),
(269, NULL, NULL, '765', '765', '765', 'Se'),
(270, NULL, NULL, '765', '765', '765', 'Se'),
(271, NULL, NULL, '765', '765', '765', 'Se'),
(272, NULL, NULL, '765', '765', '765', 'Se'),
(273, NULL, NULL, '765', '765', '765', 'Se'),
(274, NULL, NULL, '765', '765', '765', 'Se'),
(275, NULL, NULL, '765', '765', '765', 'Se'),
(276, NULL, NULL, '765', '765', '765', 'Se'),
(277, NULL, NULL, '765', '765', '765', 'Se'),
(278, NULL, NULL, '765', '765', '765', 'Se'),
(279, NULL, NULL, '765', '765', '765', 'Se'),
(280, NULL, NULL, '765', '765', '765', 'Se'),
(281, NULL, NULL, '765', '765', '765', 'Se'),
(282, NULL, NULL, '765', '765', '765', 'Se'),
(283, NULL, NULL, '765', '765', '765', 'Se'),
(284, NULL, NULL, '765', '765', '765', 'Se'),
(285, NULL, NULL, '765', '765', '765', 'Se'),
(286, NULL, NULL, '765', '765', '765', 'Se'),
(287, NULL, NULL, '765', '765', '765', 'Se'),
(288, NULL, NULL, '765', '765', '765', 'Se'),
(289, NULL, NULL, '765', '765', '765', 'Se'),
(290, NULL, NULL, '765', '765', '765', 'Se'),
(291, NULL, NULL, '765', '765', '765', 'Se'),
(292, NULL, NULL, '765', '765', '765', 'Se'),
(293, NULL, NULL, '765', '765', '765', 'Se'),
(294, NULL, NULL, '765', '765', '765', 'Se'),
(295, NULL, NULL, '765', '765', '765', 'Se'),
(296, NULL, NULL, '765', '765', '765', 'Se'),
(297, NULL, NULL, '765', '765', '675', 'Se'),
(298, NULL, NULL, '765', '765', '675', 'Se'),
(299, NULL, NULL, '765', '765', '765765', 'Se'),
(300, NULL, NULL, '54354354', '543', '543', 'Se'),
(301, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(302, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(303, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(304, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(305, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(306, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(307, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(308, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(309, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(310, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(311, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(312, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(313, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(314, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(315, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(316, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(317, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(318, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(319, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(320, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(321, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(322, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(323, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(324, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(325, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(326, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(327, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(328, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(329, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(330, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(331, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(332, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(333, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(334, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(335, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(336, NULL, NULL, '7564654564654', '654654', '65465465', 'Se'),
(337, NULL, NULL, '222', '22', '2', 'Se'),
(338, NULL, NULL, '222', '22', '2', 'Se'),
(339, NULL, NULL, '222', '22', '2', 'Se'),
(340, NULL, NULL, '222', '22', '2', 'Se'),
(341, NULL, NULL, '222', '22', '2', 'Se'),
(342, NULL, NULL, '222', '22', '2', 'Se'),
(343, NULL, NULL, '222', '22', '2', 'Se'),
(344, NULL, NULL, '222', '22', '2', 'Se'),
(345, NULL, NULL, '222', '22', '2', 'Se'),
(346, NULL, NULL, '222', '22', '2', 'Se'),
(347, NULL, NULL, 'tyu', 'tyu', 'tyu', 'Se'),
(348, NULL, NULL, '56465465', '5646', '546', 'Se'),
(349, NULL, NULL, '76', '576', '5', 'Se'),
(350, NULL, NULL, '87678678', '876', '876', 'Se'),
(351, NULL, NULL, '87678678', '876', '876', 'Se'),
(352, NULL, NULL, '87678678', '876', '876', 'Se'),
(353, NULL, NULL, '64', '564', '654', 'Se'),
(354, NULL, NULL, '64', '564', '654', 'Se'),
(355, NULL, NULL, '64', '564', '654', 'Se'),
(356, NULL, NULL, '64', '564', '654', 'Se'),
(357, NULL, NULL, '675765', '576', '576', 'Se'),
(358, NULL, NULL, '576', '76', '576', 'Se'),
(359, NULL, NULL, 'y', 'yuy', 'tuy', 'Se'),
(360, NULL, NULL, '56', '576', '576', 'Se'),
(361, NULL, NULL, '76565675', '5', '67576', 'Se'),
(362, NULL, NULL, '76', '76', '5675', 'Se'),
(363, NULL, NULL, '5675', '567', '577', 'Se'),
(364, NULL, NULL, '567', '576', '57', 'Se'),
(365, NULL, NULL, '43234', '432', '432', 'Se'),
(366, NULL, NULL, '6565465', '654654', '654654', 'Se'),
(367, NULL, NULL, 'ryt', 'ryt', 'ryt', 'rj'),
(368, NULL, NULL, 'ryt', 'ryt', 'ryt', 'rj'),
(369, NULL, NULL, '654654', '654654', '654654', 'Se'),
(370, NULL, NULL, '6754564654', '654', '654', 'Se'),
(371, NULL, NULL, '6754564654', '654', '654', 'Se'),
(372, NULL, NULL, '654564', '654', '654', 'Se'),
(373, NULL, NULL, '465', '46', '5465', 'Se'),
(374, NULL, NULL, '75454564', '6546', '54', 'Se'),
(375, NULL, NULL, '465', '4654', '654', 'Se'),
(376, 33434, NULL, 'nao sei', 'descubra', 'de ninguem', 'mg'),
(377, 532432, NULL, '123123', '4324', '432432', 'Se'),
(378, 543, NULL, '543543', '54', '354', 'Se');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipes`
--

CREATE TABLE `equipes` (
  `idEquipes` int(10) UNSIGNED NOT NULL,
  `NomeEquipe` varchar(10) DEFAULT NULL,
  `CidadeAtendida` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'faael', 'faelcalves@hotmail.com', 'Hello world!'),
(2, 'Fulano', 'fulano@dominio.com', 'Olá Mundo!'),
(3, 'lucas', 'lucas@lucas.com', 'lucas'),
(4, 'gustavo', 'gustavo@gustavo.com', 'gustavo'),
(5, 'qweq', 'lu@lu.com', 'werwerwerwerwerwerrrrrrrr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemservico`
--

CREATE TABLE `ordemservico` (
  `OrdemServico` int(10) UNSIGNED NOT NULL,
  `idEquipes` int(10) UNSIGNED NOT NULL,
  `ProtocoloAtendimento` int(10) UNSIGNED NOT NULL,
  `DataAbertura` date DEFAULT NULL,
  `HoraAbertura` time DEFAULT NULL,
  `Equipamentos` varchar(255) DEFAULT NULL,
  `DataFechamento` date DEFAULT NULL,
  `HoraFechamento` time DEFAULT NULL,
  `ObsOS` text,
  `StatusOS` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionalcampo`
--

CREATE TABLE `profissionalcampo` (
  `idProfissionalCampo` int(10) UNSIGNED NOT NULL,
  `idEndereco` int(10) UNSIGNED NOT NULL,
  `idEquipes` int(10) UNSIGNED DEFAULT NULL,
  `NomeProfissional` varchar(255) DEFAULT NULL,
  `CPFProfissional` varchar(14) DEFAULT NULL,
  `SexoProfissional` varchar(1) DEFAULT NULL,
  `TelefoneProfissional` varchar(20) DEFAULT NULL,
  `DTNProfissional` date DEFAULT NULL,
  `StatusProfissional` varchar(15) DEFAULT NULL,
  `LoginProfissional` varchar(11) DEFAULT NULL,
  `SenhaProfissional` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `profissionalcampo`
--

INSERT INTO `profissionalcampo` (`idProfissionalCampo`, `idEndereco`, `idEquipes`, `NomeProfissional`, `CPFProfissional`, `SexoProfissional`, `TelefoneProfissional`, `DTNProfissional`, `StatusProfissional`, `LoginProfissional`, `SenhaProfissional`) VALUES
(15, 377, NULL, 'bernado', '123.123.123', 'm', '(12) 33123-123', '0000-00-00', 'Ativo', 'admin', '9f1cb52df1029b12a08ed61d988b8fb1'),
(16, 378, NULL, 'lucas', '544.3543', 'm', '(543', '0000-00-00', 'Ativo', '1', '89e755a0e04923265f1fb5a67a316f99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendente`
--
ALTER TABLE `atendente`
  ADD PRIMARY KEY (`idAtendente`),
  ADD KEY `Atendente_FKIndex1` (`idEndereco`);

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`ProtocoloAtendimento`),
  ADD KEY `Atendimento_FKIndex1` (`idAtendente`),
  ADD KEY `Atendimento_FKIndex2` (`NumeroConta`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`NumeroConta`),
  ADD KEY `Clientes_FKIndex1` (`idEndereco`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idEndereco`);

--
-- Indexes for table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`idEquipes`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordemservico`
--
ALTER TABLE `ordemservico`
  ADD PRIMARY KEY (`OrdemServico`),
  ADD KEY `OrdemServico_FKIndex1` (`idEquipes`),
  ADD KEY `OrdemServico_FKIndex2` (`ProtocoloAtendimento`);

--
-- Indexes for table `profissionalcampo`
--
ALTER TABLE `profissionalcampo`
  ADD PRIMARY KEY (`idProfissionalCampo`),
  ADD KEY `ProfissionalCampo_FKIndex1` (`idEquipes`),
  ADD KEY `ProfissionalCampo_FKIndex2` (`idEndereco`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atendente`
--
ALTER TABLE `atendente`
  MODIFY `idAtendente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `ProtocoloAtendimento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `NumeroConta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idEndereco` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=379;
--
-- AUTO_INCREMENT for table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `idEquipes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ordemservico`
--
ALTER TABLE `ordemservico`
  MODIFY `OrdemServico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profissionalcampo`
--
ALTER TABLE `profissionalcampo`
  MODIFY `idProfissionalCampo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
