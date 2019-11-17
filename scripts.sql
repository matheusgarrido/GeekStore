-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2019 às 20:17
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbgeekstore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `idProduto` int(10) UNSIGNED NOT NULL,
  `tamanho` varchar(3) NOT NULL,
  `qtdEstoque` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`idProduto`, `tamanho`, `qtdEstoque`) VALUES
(1, 'P', 0),
(1, 'M', 0),
(1, 'G', 0),
(1, 'GG', 0),
(2, 'P', 0),
(2, 'M', 0),
(2, 'G', 0),
(2, 'GG', 0),
(3, 'P', 0),
(3, 'M', 0),
(3, 'G', 0),
(3, 'GG', 0),
(4, 'P', 0),
(4, 'M', 0),
(4, 'G', 0),
(4, 'GG', 0),
(5, 'P', 0),
(5, 'M', 0),
(5, 'G', 0),
(5, 'GG', 0),
(6, 'P', 0),
(6, 'M', 0),
(6, 'G', 0),
(6, 'GG', 0),
(7, 'P', 0),
(7, 'M', 0),
(7, 'G', 0),
(7, 'GG', 0),
(8, 'P', 0),
(8, 'M', 0),
(8, 'G', 0),
(8, 'GG', 0),
(9, 'P', 0),
(9, 'M', 0),
(9, 'G', 0),
(9, 'GG', 0),
(10, 'P', 0),
(10, 'M', 0),
(10, 'G', 0),
(10, 'GG', 0),
(11, 'P', 0),
(11, 'M', 0),
(11, 'G', 0),
(11, 'GG', 0),
(12, 'P', 0),
(12, 'M', 0),
(12, 'G', 0),
(12, 'GG', 0),
(13, 'P', 0),
(13, 'M', 0),
(13, 'G', 0),
(13, 'GG', 0),
(14, 'P', 0),
(14, 'M', 0),
(14, 'G', 0),
(14, 'GG', 0),
(15, 'P', 0),
(15, 'M', 0),
(15, 'G', 0),
(15, 'GG', 0),
(16, 'P', 0),
(16, 'M', 0),
(16, 'G', 0),
(16, 'GG', 0),
(17, 'P', 0),
(17, 'M', 0),
(17, 'G', 0),
(17, 'GG', 0),
(18, 'P', 0),
(18, 'M', 0),
(18, 'G', 0),
(18, 'GG', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`idMarca`, `nome`, `descricao`) VALUES
(1, 'Marvel', ''),
(2, 'DC', ''),
(3, 'Star Wars', ''),
(4, 'Harry Potter', ''),
(5, 'Game of Thrones', ''),
(6, 'Looney Tunes', ''),
(7, 'Turma da Mônica', ''),
(8, 'Disney', ''),
(9, 'Rick and Morty', ''),
(10, 'Stranger Things', ''),
(11, 'Riverdale', ''),
(12, 'Naruto', ''),
(13, 'Dragon Ball', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` float UNSIGNED NOT NULL,
  `marca` int(10) UNSIGNED NOT NULL,
  `tipo` int(10) UNSIGNED NOT NULL,
  `cor` varchar(50) NOT NULL,
  `tecido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nome`, `preco`, `marca`, `tipo`, `cor`, `tecido`) VALUES
(1, 'Avengers Endgame', 59.9, 1, 1, 'Preto', '50% Algodão 50% Poliéster'),
(2, 'Batman Logo', 59.9, 2, 2, 'Preto', '100% Algodão'),
(3, 'Cascão', 59.9, 3, 7, 'Cinza', '100% Algodão'),
(4, 'Cebolinha', 129.9, 7, 4, 'Vermelho', '100% Algodão'),
(5, 'Capitão América Escudo Marvel', 49.9, 1, 1, 'Preto', '50% Algodão 50% Poliéster'),
(6, 'Rick And Morty Nave', 49.9, 9, 5, 'Branco', '100% Algodão'),
(7, 'Aba Reta Hulk', 69.9, 1, 7, 'Cinza', '100% Algodão'),
(8, 'Aba Curva Superman', 79.9, 2, 3, 'Preto', '50% Algodão 50% Poliéster'),
(9, 'Malévola Meme', 119.9, 8, 2, 'Verde', '100% Algodão'),
(10, 'Vingadores', 39.9, 1, 4, 'Preto', '50% Algodão 50% Poliéster'),
(11, 'Capitã Marvel Uniforme', 116.9, 1, 3, 'Azul', '100% Algodão'),
(12, 'Riverdale Vixens', 39.9, 11, 6, 'Preto', '100% Algodão'),
(13, 'Dragon Ball Super', 59.9, 13, 1, 'Preto', '100% Algodão'),
(14, 'Stranger Things Hawkins', 59.9, 10, 1, 'Preto', '100% Algodão'),
(15, 'Avengers', 59.9, 1, 1, 'Preto', '100% Algodão'),
(16, 'Superman', 59.9, 2, 1, 'Preto', '100% Algodão'),
(17, 'Harry Potter', 59.9, 4, 1, 'Preto', '100% Algodão'),
(18, 'Looney Tunes Pernalonga', 59.9, 6, 1, 'Preto', '100% Algodão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`idTipo`, `nome`) VALUES
(1, 'Camiseta Comum'),
(2, 'Camiseta com Manga'),
(3, 'Camiseta Dupla Face'),
(4, 'Baby Look'),
(5, 'Jaqueta Bomber'),
(6, 'Pijama'),
(7, 'Baby Body');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices para tabela `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`),
  ADD KEY `marca` (`marca`),
  ADD KEY `tipo` (`tipo`);

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idTipo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `marca`
--
ALTER TABLE `marca`
  MODIFY `idMarca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`idProduto`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`marca`) REFERENCES `marca` (`idMarca`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`idTipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
