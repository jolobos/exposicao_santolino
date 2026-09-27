-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/09/2026 às 20:09
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
(1, 'BEATRIZ DA SILVEIRA BORGES', 11, 'm', 1, 0, 'Arco-iris', ''),
(2, 'BELLA DE CASTILHOS DIAS', 11, 'm', 2, 1, 'Familia', 'Felicidade'),
(3, 'BENÍCIO VARELA ROSA ', 11, 'm', 3, 2, 'Toniel e eu jogando bola', 'Amor'),
(4, 'BERNARDO DE MEDEIROS', 11, 'm', 5, 3, 'Coração', 'Engraçado'),
(5, 'EDUARDO BRITES HAJAR', 11, 'm', 4, 5, 'Caverna', 'Alegria'),
(6, ' EMANUEL ZULIANI DE OLIVEIRA', 11, 'm', 6, 6, 'Familia', 'Amor'),
(7, ' GAEL DOS SANTOS SCARPINI TESSLER', 11, 'm', 7, 7, 'Eu, minha irmã e o meu pai', 'Felicidade'),
(8, 'HENRIQUE DE SOUZA BRAGA', 11, 'm', 8, 0, 'Eu e a arvore', ''),
(9, 'HIAGO RHAVI DE LIMA DE ARAUJO', 11, 'm', 9, 8, 'Eu!', 'Amor de uma arvore'),
(10, 'ISAAC BROCCA LEITE', 11, 'm', 10, 0, 'Minha casa e eu dentro', '0'),
(11, 'JOAO MIGUEL RATAJENSKI DA SILVA', 11, 'm', 11, 10, 'Papai e mamãe', 'Alegria'),
(12, 'Joaquim Silveira de Sá', 11, 'm', 12, 11, 'Eu!', 'Alegria'),
(13, 'José Miguel Tramontes Teixeira Melo', 11, 'm', 13, 0, 'Eu e a familia', '0'),
(14, 'KAINÃ SILVEIRA BARBOSA', 11, 'm', 14, 13, 'Minha Casa', 'Graça'),
(15, 'Kalu Milan Roncalla', 11, 'm', 15, 14, 'Coração e arco-iris', 'Amor'),
(16, 'RAUL DA ROCHA REZENDE', 11, 'm', 16, 17, 'Eu, minha avó e o pai', 'Alegria'),
(17, 'ANTONELLA PEREIRA REZENDE', 11, 'm', 0, 0, '', ''),
(18, 'BERNARDO FRAGA PINHEIRO', 11, 'm', 0, 4, '', 'Alegria'),
(19, 'ISADORA DA CRUZ BATISTA', 11, 'm', 0, 9, '', 'Alegria'),
(20, 'JOSUE LONGHI DOS SANTOS', 11, 'm', 0, 12, '', 'Alegria'),
(21, 'LAUREN LAUREANO DE BITENCOURT', 11, 'm', 0, 15, '', 'Raiva'),
(22, 'PEDRO DOS SANTOS BARBOSA', 11, 'm', 0, 16, '', 'Alegria'),
(23, 'AGATHA LORENA DO NASCIMENTO DA SILVA', 12, 'm', 0, 1, '', 'Feliz'),
(24, 'ANA CLARA VIEIRA DIAS', 12, 'm', 1, 2, 'Uma cruz com corações', 'Amor'),
(25, 'Bianca Beé Silva', 12, 'm', 0, 3, '', 'Esperança'),
(26, 'Chloe de Moura Silveira', 12, 'm', 2, 4, 'Um coração com J', 'Amor'),
(27, 'GAEL SERAFIM DO NASCIMENTO ', 12, 'm', 3, 5, 'Uma nave espacial', 'Feliz'),
(28, 'ISABELA MENDES SILVEIRA', 12, 'm', 4, 7, 'Uma careta', 'Sono'),
(29, 'Isabelly Morais do Amaral ', 12, 'm', 5, 8, 'Bandeira do Brasil', 'Amor'),
(30, 'JOAO VITOR CARMO DE MELO', 12, 'm', 6, 9, 'Arco-iris', 'Anciedade'),
(31, 'LUCAS SILVEIRA DA SILVA', 12, 'm', 7, 10, 'Praia com arco-iris', 'Feliz'),
(32, 'MARIA CECÍLIA VALIM KROTH', 12, 'm', 0, 0, '', ''),
(33, 'MAYA MOURA MIGUELETI', 12, 'm', 8, 11, 'Uma obra de arte', 'Nojo e raiva'),
(34, 'Maysa Teixeira Souza da Silva', 12, 'm', 0, 12, '', 'Felicidade'),
(35, 'MIGUEL PEDROSO SIQUEIRA', 12, 'm', 9, 13, 'Dois pesos de coração', 'Muito Feliz'),
(36, 'MIGUEL SANTOS MARTINS ', 12, 'm', 11, 15, 'Uma paisagem', 'Feliz e amor'),
(37, 'MIGUEL SILVEIRA PORT', 12, 'm', 10, 14, 'O céu!', 'Feliz'),
(38, 'Murilo Silva dos Santos', 12, 'm', 0, 16, '', 'Amor'),
(39, 'Noah da Silva Lutz', 12, 'm', 12, 0, 'Peixe voador', ''),
(40, 'SOPHIA PAIM DIAS', 12, 'm', 0, 17, '', 'Animação'),
(41, 'VICENTE MARTINS DE SOUZA', 12, 'm', 13, 18, 'Eu em casa na piscina', 'Animação'),
(42, 'ICARO MACHADO VERONESE SALAZAR PEREIRA', 12, 'm', 0, 6, '', 'Esperança'),
(44, 'Alice da Rosa de Jesus', 13, 'm', 1, 1, 'Arco-iris', 'Amor'),
(45, ' Alice de Moraes Kirch', 13, 'm', 2, 2, 'Eu e o meu pai', 'Raiva'),
(46, 'ANA LUISA ROSA VENTURINI', 13, 'm', 3, 3, 'Minha casa e meus pais', 'Feliz'),
(47, 'EMMANUEL SOUZA CARNEIRO ', 13, 'm', 4, 0, 'Eu e a familia', ''),
(48, 'GABRIEL SOUZA LILGE', 13, 'm', 5, 4, 'Eu e a minha familia, e o cachorro', 'Felicidade'),
(49, 'Guillermo Brognoli Bianchi', 13, 'm', 6, 5, 'Eu e o meu pai caminhando', 'Raivinha'),
(50, ' HEITOR VANDERLEI MACHADO ROCHA', 13, 'm', 7, 6, 'Eu e a minha casa', 'Alegria'),
(51, 'HELENA DA ROSA DALOLLI DE SOUZA', 13, 'm', 0, 7, '', 'Feliz e brava'),
(52, 'HELENA PORTO', 13, 'm', 8, 8, 'Eu e o meu pai', 'Animação'),
(53, 'HELOISE APOLINARIO DAITX NUNES', 13, 'm', 9, 9, 'Um coração e arco-iris', 'Amor'),
(54, 'Isadora de Medeiros de Lima ', 13, 'm', 10, 10, 'Eu mesma!', 'Felicidade'),
(55, 'ISIS MEIRELES RIBEIRO', 13, 'm', 11, 11, 'Eu mesma!', 'Brava'),
(56, 'JOAQUIM CONSTANTE RODRIGUES', 13, 'm', 12, 12, 'Minha mãe', 'Feliz'),
(57, 'LARA DAITX ALVES', 13, 'm', 13, 13, 'Eu e minha familia', 'Brava'),
(58, 'LIVIA CARDOSO CORREA', 13, 'm', 0, 14, '', 'Animação'),
(59, 'Lorenzo Klering Prim ', 13, 'm', 14, 15, 'Eu e os corações', 'Amor'),
(60, 'LUCCA VARGAS PRATES', 13, 'm', 15, 16, 'Minha familia', 'Feliz'),
(61, 'Maria Luiza Teixeira Pavão', 13, 'm', 16, 17, 'Minha casa', 'Felicidade'),
(62, 'MIGUEL SOUZA GOMES ', 13, 'm', 17, 18, 'Uma casa', 'Alegria'),
(63, 'MILENA GONCALVES SILVEIRA DA SILVA', 13, 'm', 18, 19, 'Minha casa', 'Feliz'),
(64, 'PEDRO CARDOZO MAIA', 13, 'm', 19, 20, 'Indo para o Uruguai', 'Felicidade'),
(65, 'YASMIM OLIVEIRA FERULA', 13, 'm', 20, 21, 'Eu e a minha familia na pracinha', 'Insegura');

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
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
