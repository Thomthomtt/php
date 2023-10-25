-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2023 às 02:29
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `php_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
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
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id`, `nome`, `sobrenome`, `estcivil`, `sexo`, `login`, `senha`, `data`, `status`) VALUES
(1, '', '', '', '', 'Ativo', '', '0000-00-00', 'Ativo'),
(2, '', '', '', '', 'Ativo', '', '0000-00-00', 'Ativo'),
(3, '', '', '', '', 'Ativo', '', '0000-00-00', 'Ativo'),
(4, 'Nome', 'Sobrenome', 'Login', 'Senha', 'Ativo', '', '0000-00-00', 'Ativo'),
(5, 'Nome', 'Sobrenome', 'Login', 'Senha', 'Ativo', '', '0000-00-00', 'Ativo'),
(6, 'Nome', 'Sobrenome', 'Login', 'Senha', 'Ativo', '', '0000-00-00', 'Ativo'),
(7, 'Shania', 'Lopes', 'Shalo', '123', 'Ativo', '', '0000-00-00', 'Ativo'),
(8, 'Nome', 'Sobrenome', 'Casado', 'Masc', 'login', '123456', '2023-10-04', 'Ativo'),
(9, 'Nome', 'Sobrenome', 'feminino', '', 'Login', 'Senha', '0000-00-00', 'Ativo'),
(10, 'Nome', 'Sobrenome', 'feminino', '', 'Login', 'Senha', '0000-00-00', 'Ativo'),
(11, 'Nome', 'Sobrenome', 'masculino', '', 'Login', 'Senha', '0000-00-00', 'Ativo'),
(12, 'Nome', 'Sobrenome', 'masculino', '', 'Login', 'Senha', '0000-00-00', 'Ativo'),
(13, 'Nome', 'Sobrenome', 'feminino', '', 'Login', 'Senha', '0000-00-00', 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
