-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2023 às 21:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_prod`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `estcivil` varchar(50) NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Ativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `nome`, `sobrenome`, `estcivil`, `sexo`, `login`, `senha`, `data`, `status`) VALUES
(28, 'Thomaz', 'Gomes', 'divorciado', 'masculino', 'Thom', '202cb962ac59075b964b07152d234b70', '2023-11-24', 'Ativo'),
(29, 'Tatata', 'Tototo', 'viuvo', 'feminino', 'thota', '202cb962ac59075b964b07152d234b70', '2023-11-24', 'Ativo'),
(30, 'Ketlin', 'lala', 'Solteiro', 'Masculino', 'thomazgt39@gmail.com', '82d5984c2a2ad4c62caf1dd073b1c91c', '2023-11-24', 'Ativo'),
(31, 'sd', 'sd', 'viuvo', 'masculino', 'sd', '6226f7cbe59e99a90b5cef6f94f966fd', '2023-11-24', 'Ativo'),
(32, 'rty', 'rty', 'divorciado', 'masculino', 'ytuy', 'f614be5c658acd76f5c71592b6ec09e6', '2023-11-24', 'Ativo'),
(33, 'yutyu', 'truyerty', 'separado', 'Masculino', 'rty', 'e1671797c52e15f763380b45e841ec32', '2023-11-24', 'Ativo'),
(34, 'tyui', 'yui', 'separado', 'masculino', 'yui', '9ad1252b56be85b420261ea0ff1920e5', '2023-11-24', 'Ativo'),
(35, 'tyui', 'tyui', 'casado', 'Feminino', 'ytui', '4eff0335928a2d0e92f38ea9bb56d72b', '2023-11-24', 'Ativo'),
(36, 'Thomaz ', 'Andrade', 'solteiro', 'masculino', 'Thomthom', '202cb962ac59075b964b07152d234b70', '2023-11-24', 'Ativo'),
(37, 'Thomaz ', 'Gomes jesus', 'solteiro', 'feminino', 'thomthom', '81dc9bdb52d04dc20036dbd8313ed055', '2023-11-24', 'Ativo'),
(38, 'Thomaz', 'Gomes jesus', 'solteiro', 'masculino', 'thomthom', '81dc9bdb52d04dc20036dbd8313ed055', '2023-11-24', 'Ativo'),
(39, 'Thomaz', 'Gomes jesus', 'solteiro', 'masculino', 'thomthom', '81dc9bdb52d04dc20036dbd8313ed055', '2023-11-24', 'Ativo'),
(40, 'Thomaz', 'Gomes jesus', 'solteiro', 'masculino', 'thomthom', '81dc9bdb52d04dc20036dbd8313ed055', '2023-11-24', 'Ativo'),
(41, 'Thomaz', 'Gomes jesus', 'casado', 'feminino', 'thomthom', '81dc9bdb52d04dc20036dbd8313ed055', '2023-11-24', 'Ativo'),
(42, 'Thomaz', 'Gomes jesus', 'casado', 'feminino', 'thomthom', '81dc9bdb52d04dc20036dbd8313ed055', '2023-11-24', 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
