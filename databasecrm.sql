-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Máquina: localhost:3306
-- Data de Criação: 20-Out-2015 às 13:01
-- Versão do servidor: 5.5.45-cll
-- versão do PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `cowpt_cake`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anegocio`
--

CREATE TABLE IF NOT EXISTS `anegocio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `nif` varchar(50) DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL,
  `codigopostal` varchar(50) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `anegocio_id` int(11) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientes_1_idx` (`anegocio_id`),
  KEY `fk_clientes_2_idx` (`estado_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `credencias`
--

CREATE TABLE IF NOT EXISTS `credencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `credici` varchar(9999) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_credencias_1_idx` (`clientes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ver` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL,
  `projectos_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mensagens_1_idx` (`users_id`),
  KEY `fk_mensagens_2_idx` (`projectos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template` varchar(150) DEFAULT NULL,
  `vars` text,
  `user_id` int(11) DEFAULT '0',
  `state` int(11) DEFAULT '1',
  `created` datetime DEFAULT '0000-00-00 00:00:00',
  `modified` datetime DEFAULT '0000-00-00 00:00:00',
  `tracking_id` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `opestado`
--

CREATE TABLE IF NOT EXISTS `opestado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opestado` varchar(45) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_UNIQUE` (`order`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `oportunidades`
--

CREATE TABLE IF NOT EXISTS `oportunidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `tiposoportunidade_id` int(11) NOT NULL,
  `origemvenda_id` int(11) NOT NULL,
  `descri` varchar(255) DEFAULT NULL,
  `obs` varchar(8000) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `opestado_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clientes_key` (`clientes_id`),
  KEY `fk_oportunidades_2_idx` (`users_id`),
  KEY `fk_oportunidades_4_idx` (`opestado_id`),
  KEY `fk_oportunidades_1` (`origemvenda_id`),
  KEY `fk_oportunidades_2` (`tiposoportunidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamentos`
--

CREATE TABLE IF NOT EXISTS `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oportunidades_id` int(11) DEFAULT NULL,
  `produtos_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orcamentos_1_idx` (`oportunidades_id`),
  KEY `fk_orcamentos_2_idx` (`produtos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `origemvenda`
--

CREATE TABLE IF NOT EXISTS `origemvenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origens` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descric` varchar(255) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `tiposoportunidade_id` int(11) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_produtos_1_idx` (`tiposoportunidade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `progresso`
--

CREATE TABLE IF NOT EXISTS `progresso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estados` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projectos`
--

CREATE TABLE IF NOT EXISTS `projectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `projectend` datetime DEFAULT NULL,
  `descri` varchar(8000) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clientes_key` (`clientes_id`),
  KEY `users_key` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE IF NOT EXISTS `receitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` int(11) DEFAULT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `estadorec` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_receitas_1_idx` (`clientes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE IF NOT EXISTS `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `taskend` datetime DEFAULT NULL,
  `descri` varchar(255) DEFAULT NULL,
  `projectos_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `progresso_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tarefas_1_idx` (`progresso_id`),
  KEY `fk_tarefas_1_idx1` (`users_id`),
  KEY `fk_tarefas_2_idx` (`projectos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tiposoportunidade`
--

CREATE TABLE IF NOT EXISTS `tiposoportunidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipos` varchar(255) DEFAULT NULL,
  `descri` varchar(255) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `cakeadmin` int(11) DEFAULT '0',
  `request_key` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_clientes_1` FOREIGN KEY (`anegocio_id`) REFERENCES `anegocio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clientes_2` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `credencias`
--
ALTER TABLE `credencias`
  ADD CONSTRAINT `fk_credencias_1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `fk_mensagens_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mensagens_2` FOREIGN KEY (`projectos_id`) REFERENCES `projectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `oportunidades`
--
ALTER TABLE `oportunidades`
  ADD CONSTRAINT `fk_oportunidades_1` FOREIGN KEY (`origemvenda_id`) REFERENCES `origemvenda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_oportunidades_2` FOREIGN KEY (`tiposoportunidade_id`) REFERENCES `tiposoportunidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_oportunidades_3` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_oportunidades_4` FOREIGN KEY (`opestado_id`) REFERENCES `opestado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD CONSTRAINT `fk_orcamentos_1` FOREIGN KEY (`oportunidades_id`) REFERENCES `oportunidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orcamentos_2` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_produtos_1` FOREIGN KEY (`tiposoportunidade_id`) REFERENCES `tiposoportunidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `projectos`
--
ALTER TABLE `projectos`
  ADD CONSTRAINT `projectos_ibfk_1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `projectos_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `receitas`
--
ALTER TABLE `receitas`
  ADD CONSTRAINT `fk_receitas_1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD CONSTRAINT `fk_tarefas_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarefas_2` FOREIGN KEY (`projectos_id`) REFERENCES `projectos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarefas_3` FOREIGN KEY (`progresso_id`) REFERENCES `progresso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
