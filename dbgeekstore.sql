-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2019 às 02:13
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

CREATE DATABASE dbgeekstore;

USE dbgeekstore;

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
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `idMarca` int(10) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`idMarca`, `nome`) VALUES
(1, 'Marvel'),
(2, 'DC'),
(3, 'Star Wars'),
(4, 'Harry Potter'),
(5, 'Game of Thrones'),
(6, 'Looney Tunes'),
(7, 'Turma da Mônica'),
(8, 'Disney'),
(9, 'Rick and Morty'),
(10, 'Stranger Things'),
(11, 'Riverdale'),
(12, 'Naruto'),
(13, 'Dragon Ball');

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
  `tecido` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nome`, `preco`, `marca`, `tipo`, `cor`, `tecido`) VALUES
(1, 'Avengers Endgame', 59.9, 1, 1, 'Preto', '50% Algodão 50% Poliéster'),
(2, 'Batman Logo', 59.9, 2, 1, 'Preto', '100% Algodão'),
(3, 'Cascão', 59.9, 7, 7, 'Amarelo', '100% Algodão'),
(4, 'Cebolinha', 59.9, 7, 7, 'Verde', '100% Algodão'),
(5, 'Capitão América Escudo Marvel', 49.9, 1, 4, 'Preto', '50% Algodão 50% Poliéster'),
(6, 'Rick And Morty Nave', 49.9, 9, 4, 'Preto', '100% Algodão'),
(7, 'Aba Reta Capitão América', 69.9, 1, 8, 'Azul', '100% Poliéster'),
(8, 'Aba Curva Superman', 69.9, 2, 8, 'Azul', '100% Poliéster'),
(9, 'Malévola Meme', 119.9, 8, 3, 'Preto', '100% Algodão'),
(10, 'Vingadores', 119.9, 1, 3, 'Preto', '50% Algodão 50% Poliéster'),
(11, 'Capitã Marvel Uniforme', 79.9, 1, 2, 'Azul', '100% Algodão'),
(12, 'Riverdale Vixens', 79.9, 11, 2, 'Branco', '100% Algodão'),
(13, 'Dragon Ball Super', 59.9, 13, 5, 'Laranja', '93% Poliéster 6% Viscose 1% Elastano Manga 55% Poliéster 45% Algodão'),
(14, 'Stranger Things Hawkins', 59.9, 10, 5, 'Preto', '93% Poliéster 6% Viscose 1% Elastano Manga 55% Poliéster 45% Algodão'),
(15, 'Avengers', 59.9, 1, 9, 'Preto', '100% Algodão'),
(16, 'Superman', 59.9, 2, 9, 'Vermelho', '100% Algodão'),
(17, 'Harry Potter', 59.9, 4, 6, 'Branco', '62% Algodão 28% Poliamida 05% Elastano 05% Elastodieno'),
(18, 'Looney Tunes Pernalonga', 59.9, 6, 6, 'Cinza', '62% Algodão 28% Poliamida 05% Elastano 05% Elastodieno'),
(19, 'Batgirl Uniforme', 59.9, 2, 7, 'Cinza', '100% Algodão'),
(20, 'Mickey', 59.9, 8, 7, 'Vermelho', '100% Algodão'),
(21, 'Minnie', 59.9, 8, 7, 'Vermelho', '100% Algodão'),
(22, 'Mônica', 59.9, 7, 7, 'Azul', '100% Algodão'),
(23, 'Game Of Thrones Dracarys', 49.9, 5, 4, 'Preto', '100% Algodão'),
(24, 'Marvel Logo', 49.9, 1, 4, 'Vermelho', '100% Algodão'),
(25, 'Rei Leão Scar', 49.9, 8, 4, 'Preto', '100% Algodão'),
(26, 'Star Wars', 49.9, 3, 4, 'Preto', '100% Algodão'),
(27, 'Stranger Things Eleven', 49.9, 10, 4, 'Preto', '100% Algodão'),
(28, 'Aba Curva Arlequina', 69.9, 2, 8, 'Vermelho', '100% Poliéster'),
(29, 'Aba Curva Batman', 69.9, 2, 8, 'Preto', '100% Poliéster'),
(30, 'Aba Curva Harry Potter Grifinória', 69.9, 4, 8, 'Vermelho', '100% Poliéster'),
(31, 'Aba Curva Justiceiro', 69.9, 1, 8, 'Preto', '100% Poliéster'),
(32, 'Aba Reta Hulk', 69.9, 1, 8, 'Preto', '100% Poliéster'),
(33, 'Capitão América Uniforme', 59.9, 1, 1, 'Azul', '100% Algodão'),
(34, 'Harley Quinn', 59.9, 2, 1, 'Cinza', '100% Algodão'),
(35, 'Marvel Logo', 59.9, 1, 1, 'Vermelho', '100% Algodão'),
(36, 'Pantera Negra', 59.9, 1, 1, 'Preto', '100% Algodão'),
(37, 'Riverdale Serpents', 59.9, 11, 1, 'Preto', '100% Algodão'),
(38, 'Stranger Things Poster', 59.9, 10, 1, 'Preto', '100% Algodão'),
(39, 'Vingadores Ultimato Uniforme', 59.9, 1, 1, 'Preto', '100% Algodão'),
(40, 'Captain Marvel', 119.9, 1, 3, 'Preto', '100% Algodão'),
(41, 'Game Of Thrones Trono', 119.9, 5, 3, 'Marrom', '100% Algodão'),
(42, 'Harry Potter Grifinória', 119.9, 4, 3, 'Preto', '100% Algodão'),
(43, 'Naruto Aldeia Da Folha E Akatsuki', 119.9, 12, 3, 'Preto', '100% Algodão'),
(44, 'Star Wars The Last Jedi', 119.9, 3, 3, 'Preto', '100% Algodão'),
(47, 'Justiceiro Frank Castle', 59.9, 1, 5, 'Preto', '93% Poliéster 6% Viscose 1% Elastano Manga 55% Poliéster 45% Algodão'),
(48, 'Batman', 59.9, 2, 9, 'Preto', '100% Algodão'),
(49, 'Capitão América', 59.9, 1, 9, 'Azul', '100% Algodão'),
(50, 'Harry Potter Edwiges', 59.9, 4, 9, 'Branco', '100% Algodão'),
(51, 'Harry Potter Hogwarts', 59.9, 4, 9, 'Preto', '100% Algodão'),
(52, 'Homem de Ferro', 59.9, 1, 9, 'Vermelho', '100% Algodão'),
(53, 'Star Wars Darth Vader', 59.9, 3, 9, 'Preto', '100% Algodão'),
(54, 'Star Wars Yoda', 59.9, 3, 9, 'Verde', '100% Algodão');

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
(1, 'Camiseta'),
(2, 'Camiseta com Manga'),
(3, 'Camiseta Dupla Face'),
(4, 'Baby Look'),
(5, 'Jaqueta'),
(6, 'Pijama'),
(7, 'Baby Body'),
(8, 'Boné'),
(9, 'Meias');

--
-- Índices para tabelas despejadas
--

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
  MODIFY `idProduto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idTipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

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
