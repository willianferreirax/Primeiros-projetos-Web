-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Set-2018 às 03:51
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_tecnico`
--
create database bd_tecnico;
use bd_tecnico;
-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `rm` int(11) NOT NULL,
  `nome_do_aluno` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `nome_da_turma` varchar(255) DEFAULT NULL,
  `sexo` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`rm`, `nome_do_aluno`, `endereco`, `rg`, `nome_da_turma`, `sexo`) VALUES
(1, 'Isabela Nogueira', 'Rua Rio Manuel Alves', '581234560', '2 LogÃ­stica', 'F');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `nome_do_curso` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_do_curso`, `descricao`) VALUES
(1, 'Informática', 'Curso tecnico que prepara os alunos profissionalmente para o mercado de trabalho para a area de informatica, desenvolvendo programas e aplicativos com diversas linguagens e realizando manutenção de computadores.'),
(2, 'Logísica', 'Curso tecnico que prepara os alunos profissionalmente para o mercado de trabalho para a area de logistica, os fazendo ter conhecimento de desempenhar gestão de estoque, transporte e planejamentos de operações institucionais e empresariais.'),
(3, 'Administração', 'Curso tecnico que prepara os alunos profissionalmente para o mercado de trabalho para a area de administração, gerenciando a área administrativa de instituições desempenhando o controle de trabalho em empresas tais como seus direcionamentos.'),
(4, 'Contabilidade', 'Curso tecnico que prepara os alunos profissionalmente para o mercado de trabalho para a area de contabilidade, fazendo com que estes possam desempenhar o processo de gerenciamento administrativo e de contabilidades de diversas empresas e instituições.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(11) NOT NULL,
  `nome_da_disciplina` varchar(255) NOT NULL,
  `matricula_do_professor` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `matricula_do_professor` int(11) NOT NULL,
  `nome_do_professor` varchar(255) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`matricula_do_professor`, `nome_do_professor`, `rg`, `cpf`, `endereco`, `login`, `senha`, `sexo`) VALUES
(1, 'root', '123456789', '12345678911', 'xxxxxxxxxxxxxx', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'M');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `nome_da_turma` varchar(255) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `sala` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`nome_da_turma`, `id_curso`, `sala`) VALUES
('1 Informática', 1, '11'),
('2 Informática', 1, '12'),
('3 Informática', 1, '13'),
('1 Logística', 2, '8'),
('2 Logística', 2, '9'),
('3 Logística', 2, '14'),
('1 Administração', 3, '10'),
('2 Administração', 3, '7'),
('3 Administração', 3, '16'),
('1 Contabilidade', 4, '15'),
('2 Contabilidade', 4, '6'),
('3 Contabilidade', 4, '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`rm`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`),
  ADD KEY `disciplina` (`matricula_do_professor`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`matricula_do_professor`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`nome_da_turma`),
  ADD KEY `turma` (`id_curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `rm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `matricula_do_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
