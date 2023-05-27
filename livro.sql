-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/05/2023 às 18:40
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `canaldoti`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `nome` varchar(5000) NOT NULL,
  `alunos` mediumtext NOT NULL,
  `code` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id`, `nome`, `alunos`, `code`) VALUES
(1, 'Code Clean', '0', ''),
(2, 'Engenharia de Software', '0', ''),
(3, 'Fulano de Tal', '', ''),
(4, '20232505', '<div class=\"row mt-3\">\r\n	<div class=\"col\">\r\n		<nav aria-label=\"breadcrumb\">\r\n			<ol class=\"breadcrumb\">\r\n				<li class=\"breadcrumb-item\" aria-current=\"page\">\r\n					<a href=\"https://descomplica.jacad.com.br/academico/docs/;jsessionid=E7FD9B3062719DC1C038687604399BFB\">\r\n						Início\r\n					</a>\r\n				</li>\r\n				<li class=\"breadcrumb-item active\" aria-current=\"page\">\r\n					10126DC002R5758 <span class=\"badge badge-success\">Este documento foi emitido nesta IES</span>\r\n				</li>\r\n			</ol>\r\n		</nav>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"row mt-2\">\r\n	<div class=\"col\">\r\n	\r\n		<div class=\"card\">\r\n			<h4 class=\"card-header\">\r\n				Detalhes deste documento\r\n			</h4>\r\n			<div class=\"row\">\r\n				<div class=\"col-lg-8 col-xl-8 col-md-8 col-sm-12 pr-0\">\r\n					<ul class=\"list-group list-group-flush\">\r\n						<li class=\"list-group-item\">\r\n							<strong>Código:</strong> 10126DC002R5758\r\n						</li>\r\n						<li class=\"list-group-item\">\r\n							<strong>Título:</strong> Diploma\r\n						</li>\r\n						<li class=\"list-group-item\">\r\n							<strong>Descrição:</strong> Certificado gerado para a aluna Daniela Ribeiro Monteiro, RM: 95285 para o curso MBA em Big Data e Inteligência Competitiva - CM1\r\n						</li>\r\n						<li class=\"list-group-item\">\r\n							<strong>Documento emitido pelo sistema em:</strong> 08/08/2022 08:01\r\n						</li>\r\n					</ul>				\r\n				</div>\r\n				\r\n				<div class=\"col-lg-4 col-xl-4 col-md-4 col-sm-12 pl-md-0\">\r\n					<ul class=\"list-group list-group-flush\">\r\n						\r\n							<li class=\"list-group-item\">\r\n								<strong>Proprietário:</strong> Daniela Ribeiro Monteiro\r\n							</li>\r\n						\r\n						\r\n						\r\n							<li class=\"list-group-item\">\r\n								<strong>CPF:</strong> 10126DC002R5758\r\n							</li>\r\n						\r\n						\r\n						\r\n							<li class=\"list-group-item\">\r\n								<strong>RG:</strong> 113690838\r\n							</li>\r\n						\r\n						\r\n						<li class=\"list-group-item\"></li>\r\n					</ul>				\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"row mt-2\">\r\n	<div class=\"col\">\r\n		<div class=\"card\">\r\n			<div class=\"card-body\">\r\n				<div class=\"alert alert-warning\" role=\"alert\">\r\n					<p>\r\n					<strong>Atenção!</strong>\r\n					<br/>\r\n					Para mantermos a conformidade com a <strong>Lei Geral de Proteção de Dados (LGDP)</strong>, você deverá entrar em contato com IES para obter mais informações \r\n					a respeito deste documento e do proprietário do mesmo.\r\n					</p>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>\r\n', '<div class=\"row mt-3\">\r\n		<div class=\"col\">\r\n			<div class=\"row\">\r\n				<div class=\"col\">\r\n					<div class=\"card\">\r\n						<h5 class=\"card-header\">\r\n							Cópia carbono deste documento\r\n						</h5>\r\n						<div class=\"card-body\">\r\n							<div id=\"pdf\" class=\"validador-documento-pdf pdfobject-container\">\r\n								<div class=\"alert alert-info\" role=\"alert\">\r\n									Você precisa ter um leitor PDF instalado em seu computador e integrado ao seu navegador para pré-visualizar este documento.\r\n								</div>\r\n								<iframe src=\"https://drive.google.com/file/d/1ynC7ralnK7d6B8rVNsrTHyVnw_xVF2Gj/preview\" width=\"300\" height=\"420\" allow=\"autoplay\"></iframe>\r\n								\r\n							\r\n							</div>\r\n						</div>\r\n					</div>\r\n				</div>\r\n			</div>\r\n		</div>\r\n	</div>');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
