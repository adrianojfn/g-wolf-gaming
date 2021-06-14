SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gwolfgaming`
--
CREATE DATABASE IF NOT EXISTS `gwolfgaming` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gwolfgaming`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `email_marketing`
--

DROP TABLE IF EXISTS `email_marketing`;
CREATE TABLE IF NOT EXISTS `email_marketing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `form_contato`
--

DROP TABLE IF EXISTS `form_contato`;
CREATE TABLE IF NOT EXISTS `form_contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_topico`
--

DROP TABLE IF EXISTS `mensagens_topico`;
CREATE TABLE IF NOT EXISTS `mensagens_topico` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo_msg` varchar(3000) NOT NULL,
  `autor_msg` varchar(255) NOT NULL,
  `img_autor_msg` varchar(255) DEFAULT NULL,
  `data_msg` datetime NOT NULL,
  `topico_msg` varchar(255) NOT NULL,
  PRIMARY KEY (`id_msg`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagens_topico`
--

INSERT INTO `mensagens_topico` (`id_msg`, `conteudo_msg`, `autor_msg`, `img_autor_msg`, `data_msg`, `topico_msg`) VALUES
(1, 'Curti muito o primeiro boss, mecânica divertida. Difícil de passar, mas se fosse fácil não teria graça!', 'Adriano França', NULL, '2021-06-14 11:59:20', 'Primeiro Boss'),
(2, 'Chefe final do enredo de Death Wisdom e o líder da Máfia Alemã. Boa finalização, um boss muito hard, nunca tinha visto igual.', 'Bill Gates', NULL, '2021-06-14 12:14:56', 'Terceiro Boss');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(255) NOT NULL,
  `email_usuario` varchar(255) NOT NULL,
  `dt_nascimento_usuario` date NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `imagem_usuario` longblob,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `dt_nascimento_usuario`, `senha_usuario`, `imagem_usuario`) VALUES
(8, 'Bill Gates', 'billgates@gmail.com', '1985-10-28', 'bill123', ''),
(7, 'Adriano França', 'adriano@gmail.com', '2003-07-27', 'adriano123', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
