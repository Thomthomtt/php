-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2023 às 02:03
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
-- Banco de dados: `bd_prod`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_categoria`
--

CREATE TABLE `prd_categoria` (
  `id_categoria` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_departamento`
--

CREATE TABLE `prd_departamento` (
  `id_departamento` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_marca`
--

CREATE TABLE `prd_marca` (
  `id_marca` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_preco_venda`
--

CREATE TABLE `prd_preco_venda` (
  `id_preco_venda` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `preco_venda` float NOT NULL,
  `data_validade_inicial` date NOT NULL,
  `data_validade_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_produto`
--

CREATE TABLE `prd_produto` (
  `id_produto` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_unidade_medida` int(11) NOT NULL,
  `especificacao_tecnica` varchar(260) NOT NULL,
  `status` varchar(260) NOT NULL,
  `peso_bruto` int(11) NOT NULL,
  `peso_liquido` int(11) NOT NULL,
  `qtd_mult` int(11) NOT NULL,
  `qtd_min` int(11) NOT NULL,
  `cod_barra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_produto_similar`
--

CREATE TABLE `prd_produto_similar` (
  `id_produto` int(11) NOT NULL,
  `id_produto_similar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_subcategoria`
--

CREATE TABLE `prd_subcategoria` (
  `id_subcategoria` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prd_unidade_medida`
--

CREATE TABLE `prd_unidade_medida` (
  `id_unidade_medida` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `prd_categoria`
--
ALTER TABLE `prd_categoria`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Índices para tabela `prd_departamento`
--
ALTER TABLE `prd_departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Índices para tabela `prd_marca`
--
ALTER TABLE `prd_marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Índices para tabela `prd_preco_venda`
--
ALTER TABLE `prd_preco_venda`
  ADD PRIMARY KEY (`id_preco_venda`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `prd_produto`
--
ALTER TABLE `prd_produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_subcategoria` (`id_subcategoria`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_unidade_medida` (`id_unidade_medida`);

--
-- Índices para tabela `prd_produto_similar`
--
ALTER TABLE `prd_produto_similar`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_produto_similar` (`id_produto_similar`);

--
-- Índices para tabela `prd_subcategoria`
--
ALTER TABLE `prd_subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`);

--
-- Índices para tabela `prd_unidade_medida`
--
ALTER TABLE `prd_unidade_medida`
  ADD PRIMARY KEY (`id_unidade_medida`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `prd_categoria`
--
ALTER TABLE `prd_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prd_departamento`
--
ALTER TABLE `prd_departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prd_marca`
--
ALTER TABLE `prd_marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prd_preco_venda`
--
ALTER TABLE `prd_preco_venda`
  MODIFY `id_preco_venda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prd_produto`
--
ALTER TABLE `prd_produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prd_produto_similar`
--
ALTER TABLE `prd_produto_similar`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prd_subcategoria`
--
ALTER TABLE `prd_subcategoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prd_unidade_medida`
--
ALTER TABLE `prd_unidade_medida`
  MODIFY `id_unidade_medida` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `prd_categoria`
--
ALTER TABLE `prd_categoria`
  ADD CONSTRAINT `prd_categoria_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `prd_departamento` (`id_departamento`);

--
-- Limitadores para a tabela `prd_preco_venda`
--
ALTER TABLE `prd_preco_venda`
  ADD CONSTRAINT `prd_preco_venda_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `prd_produto` (`id_produto`);

--
-- Limitadores para a tabela `prd_produto`
--
ALTER TABLE `prd_produto`
  ADD CONSTRAINT `prd_produto_ibfk_1` FOREIGN KEY (`id_subcategoria`) REFERENCES `prd_subcategoria` (`id_subcategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
