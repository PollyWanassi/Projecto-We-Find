-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2023 às 07:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE `bairros` (
  `id` int(11) NOT NULL,
  `nome_bairro` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `provincia` varchar(55) NOT NULL,
  `id_bairro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `id` int(11) NOT NULL,
  `valor_negociado` double NOT NULL,
  `imovel_id` int(11) NOT NULL,
  `inclino_id` int(11) NOT NULL,
  `senhorio_id` int(11) NOT NULL,
  `tipo_contrato` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `id` int(11) NOT NULL,
  `tipo` varchar(55) NOT NULL,
  `preco` double NOT NULL,
  `endereco` varchar(55) NOT NULL,
  `comentarios` text NOT NULL,
  `cidade` int(11) NOT NULL,
  `fotos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `natureza_contrato`
--

CREATE TABLE `natureza_contrato` (
  `tipo_contrato` varchar(55) NOT NULL CHECK (`tipo_contrato` = ('aluguel' or 'compra_venda'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tipo_usuario` varchar(55) NOT NULL CHECK (`tipo_usuario` = ('senhorio' or 'inclino'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usario`
--

CREATE TABLE `usario` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `sobrenome` varchar(55) NOT NULL,
  `senha` varchar(55) NOT NULL,
  `tipo_usuario` varchar(55) NOT NULL,
  `telefone` int(13) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bairros`
--
ALTER TABLE `bairros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bairro` (`id_bairro`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imovel_id` (`imovel_id`),
  ADD KEY `contrato_ibfk_1` (`inclino_id`),
  ADD KEY `senhorio_id` (`senhorio_id`),
  ADD KEY `tipo_contrato` (`tipo_contrato`);

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cidade` (`cidade`);

--
-- Índices para tabela `natureza_contrato`
--
ALTER TABLE `natureza_contrato`
  ADD PRIMARY KEY (`tipo_contrato`);

--
-- Índices para tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tipo_usuario`);

--
-- Índices para tabela `usario`
--
ALTER TABLE `usario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bairros`
--
ALTER TABLE `bairros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usario`
--
ALTER TABLE `usario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cidade`
--
ALTER TABLE `cidade`
  ADD CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`id_bairro`) REFERENCES `bairros` (`id`);

--
-- Limitadores para a tabela `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`inclino_id`) REFERENCES `usario` (`id`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`senhorio_id`) REFERENCES `usario` (`id`),
  ADD CONSTRAINT `contrato_ibfk_3` FOREIGN KEY (`tipo_contrato`) REFERENCES `natureza_contrato` (`tipo_contrato`);

--
-- Limitadores para a tabela `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `imovel_ibfk_1` FOREIGN KEY (`cidade`) REFERENCES `cidade` (`id`);

--
-- Limitadores para a tabela `usario`
--
ALTER TABLE `usario`
  ADD CONSTRAINT `usario_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`tipo_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
