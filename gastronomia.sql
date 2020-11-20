-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Nov-2018 às 00:56
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastronomia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

CREATE TABLE `promocoes` (
  `id` int(5) NOT NULL,
  `local` varchar(50) NOT NULL,
  `nome_prato` varchar(60) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `num_pessoas` int(2) NOT NULL,
  `preco` float(9,2) NOT NULL,
  `usuario_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `promocoes`
--

INSERT INTO `promocoes` (`id`, `local`, `nome_prato`, `descricao`, `num_pessoas`, `preco`, `usuario_id`) VALUES
(5, 'casa', 'frango', 'frangoos', 2, 4.00, 1),
(6, 'Faarr', 'Feijoada', 'Feijoada feijoosa', 8, 32.00, 4),
(8, 'Venda', 'Pantegod', 'panetone', 4, 222.00, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(4) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Pedro Pedroso Pedrias', 'ppp@gmail.com', 'd3ce9efea6244baa7bf718f12dd0c331'),
(4, 'Maicon Michael Mike', 'MmM@gmail.com', '35399dceba61a9de3a6b8db700cc7af2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `promocoes`
--
ALTER TABLE `promocoes`
  ADD CONSTRAINT `promocoes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
