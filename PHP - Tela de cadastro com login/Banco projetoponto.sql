-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Abr-2021 às 18:06
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoponto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_ponto`
--

CREATE TABLE `registro_ponto` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `horaEntrada` time NOT NULL,
  `horaSaida` time NOT NULL,
  `justificativa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `registro_ponto`
--

INSERT INTO `registro_ponto` (`id`, `id_usuario`, `data`, `horaEntrada`, `horaSaida`, `justificativa`) VALUES
(2, 2, '2021-04-10', '08:00:00', '18:00:00', 'Versionamento'),
(3, 2, '2021-04-13', '08:30:00', '18:10:00', 'Versionamento'),
(4, 2, '2021-04-15', '09:30:00', '19:00:00', 'Versionamento'),
(5, 2, '2021-12-25', '08:04:00', '18:05:00', 'Prod. Conteúdo'),
(6, 2, '2013-05-25', '09:50:00', '15:30:00', 'Versionamento'),
(7, 2, '2015-09-08', '09:55:00', '10:20:00', 'Prod. Conteúdo'),
(8, 2, '2015-09-08', '09:55:00', '10:20:00', 'Prod. Conteúdo'),
(9, 2, '2015-09-08', '09:55:00', '10:20:00', 'Prod. Conteúdo'),
(10, 2, '2021-05-26', '07:50:00', '19:00:00', 'Versionamento'),
(11, 2, '2021-05-26', '07:50:00', '19:00:00', 'Versionamento'),
(20, 2, '2021-04-16', '08:55:00', '17:56:00', 'Versionamento'),
(21, 2, '2021-04-05', '08:00:00', '18:00:00', 'Versionamento'),
(22, 2, '2021-05-05', '08:08:00', '18:08:00', 'Prod. Conteúdo'),
(23, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(24, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(25, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(26, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(27, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(28, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(29, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(30, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(31, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(32, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(33, 2, '2021-05-06', '08:50:00', '18:00:00', 'Versionamento'),
(34, 2, '2021-05-25', '08:00:00', '09:00:00', 'Prod. Conteúdo'),
(35, 2, '2021-05-25', '08:00:00', '09:00:00', 'Prod. Conteúdo'),
(36, 2, '2021-05-26', '08:08:00', '09:09:00', 'Prod. Conteúdo'),
(37, 2, '2021-05-26', '08:08:00', '09:09:00', 'Prod. Conteúdo'),
(38, 2, '2021-04-05', '08:00:00', '18:00:00', 'Versionamento'),
(39, 2, '2021-05-25', '08:00:00', '18:00:00', 'Prod. Conteúdo'),
(40, 2, '2021-05-05', '08:00:00', '18:00:00', 'Prod. Conteúdo'),
(41, 2, '2021-05-06', '08:00:00', '18:00:00', 'Prod. Conteúdo'),
(42, 2, '2021-05-07', '08:00:00', '10:00:00', 'Prod. Conteúdo'),
(43, 2, '2021-05-08', '08:00:00', '10:00:00', 'Prod. Conteúdo'),
(44, 2, '2021-05-09', '09:05:00', '18:05:00', 'Prod. Conteúdo'),
(45, 2, '2021-05-26', '08:08:00', '09:09:00', 'Prod. Conteúdo'),
(46, 2, '2021-04-01', '08:50:00', '18:00:00', 'Prod. Conteúdo'),
(47, 2, '2021-04-01', '08:50:00', '18:00:00', 'Prod. Conteúdo'),
(48, 2, '2021-04-01', '08:50:00', '18:00:00', 'Prod. Conteúdo'),
(49, 2, '2021-04-01', '08:00:00', '10:00:00', 'Prod. Conteúdo'),
(50, 2, '2021-09-01', '08:50:00', '18:30:00', 'Empréstimo'),
(51, 2, '2021-09-02', '08:00:00', '18:00:00', 'Capacitação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`) VALUES
(2, 'cassio@ponto.com', 'cassio123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `registro_ponto`
--
ALTER TABLE `registro_ponto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `registro_ponto`
--
ALTER TABLE `registro_ponto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `registro_ponto`
--
ALTER TABLE `registro_ponto`
  ADD CONSTRAINT `registro_ponto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
