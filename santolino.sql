-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/09/2026 às 17:31
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `santolino`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_aluno` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `turma` int(11) NOT NULL,
  `turno` varchar(1) NOT NULL,
  `fluid` int(4) NOT NULL,
  `splash` int(4) NOT NULL,
  `desc_fluid` varchar(150) NOT NULL,
  `desc_splash` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id_aluno`, `nome`, `turma`, `turno`, `fluid`, `splash`, `desc_fluid`, `desc_splash`) VALUES
(1, 'BEATRIZ DA SILVEIRA BORGES', 11, 'm', 1, 0, 'Arco-iris', '0'),
(2, 'BELLA DE CASTILHOS DIAS', 11, 'm', 2, 0, 'Familia', '0'),
(3, 'BENÍCIO VARELA ROSA ', 11, 'm', 3, 0, 'Toniel e eu jogando bola', '0'),
(4, 'BERNARDO DE MEDEIROS', 11, 'm', 5, 0, 'Coração', '0'),
(5, 'EDUARDO BRITES HAJAR', 11, 'm', 4, 0, 'Caverna', '0'),
(6, ' EMANUEL ZULIANI DE OLIVEIRA', 11, 'm', 6, 0, 'Familia', '0'),
(7, ' GAEL DOS SANTOS SCARPINI TESSLER', 11, 'm', 7, 0, 'Eu, minha irmã e o meu pai', '0'),
(8, 'HENRIQUE DE SOUZA BRAGA', 11, 'm', 8, 0, 'Eu e a arvore', '0'),
(9, 'HIAGO RHAVI DE LIMA DE ARAUJO', 11, 'm', 9, 0, 'Eu!', '0'),
(10, 'ISAAC BROCCA LEITE', 11, 'm', 10, 0, 'Minha casa e eu dentro', '0'),
(11, 'JOAO MIGUEL RATAJENSKI DA SILVA', 11, 'm', 11, 0, 'Papai e mamãe', '0'),
(12, 'Joaquim Silveira de Sá', 11, 'm', 12, 0, 'Eu!', '0'),
(13, 'José Miguel Tramontes Teixeira Melo', 11, 'm', 13, 0, 'Eu e a familia', '0'),
(14, 'KAINÃ SILVEIRA BARBOSA', 11, 'm', 14, 0, 'Minha Casa', '0'),
(15, 'Kalu Milan Roncalla', 11, 'm', 15, 0, 'Coração e arco-iris', '0'),
(16, 'RAUL DA ROCHA REZENDE', 11, 'm', 16, 0, 'Eu, minha avó e o pai', '0');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
