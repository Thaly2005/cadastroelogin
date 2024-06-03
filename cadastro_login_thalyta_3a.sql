-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/06/2024 às 13:58
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_login_thalyta_3a`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `caduser`
--

CREATE TABLE `caduser` (
  `idcadUser` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipoUser` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblogin`
--

CREATE TABLE `tblogin` (
  `idtbLogin` int(11) NOT NULL,
  `dtHoraLogin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cadUser_idcadUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `caduser`
--
ALTER TABLE `caduser`
  ADD PRIMARY KEY (`idcadUser`);

--
-- Índices de tabela `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`idtbLogin`),
  ADD KEY `cadUser_idcadUser` (`cadUser_idcadUser`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblogin`
--
ALTER TABLE `tblogin`
  ADD CONSTRAINT `tblogin_ibfk_1` FOREIGN KEY (`cadUser_idcadUser`) REFERENCES `caduser` (`idcadUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
