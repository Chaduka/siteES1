-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 02-Dez-2016 às 05:16
-- Versão do servidor: 5.5.53-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `setores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `companiaaerea`
--

CREATE TABLE IF NOT EXISTS `companiaaerea` (
  `codComp` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCompania` varchar(255) NOT NULL,
  PRIMARY KEY (`codComp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `espacos`
--

CREATE TABLE IF NOT EXISTS `espacos` (
  `codEspaco` int(11) NOT NULL AUTO_INCREMENT,
  `nomeTerminal` varchar(255) DEFAULT NULL,
  `nomeCompania` varchar(255) DEFAULT NULL,
  `espacos` int(4) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`codEspaco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estacionamento`
--

CREATE TABLE IF NOT EXISTS `estacionamento` (
  `codEst` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `lotacao` int(4) NOT NULL,
  `categoria a` int(1) NOT NULL DEFAULT '0',
  `categoria b` int(1) NOT NULL DEFAULT '0',
  `categoria c` int(1) NOT NULL DEFAULT '0',
  `categoria d` int(1) NOT NULL DEFAULT '0',
  `categoria e` int(1) NOT NULL DEFAULT '0',
  `pgto_manual` int(1) NOT NULL DEFAULT '0',
  `pgto_auto` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codEst`),
  KEY `cod` (`codEst`),
  KEY `pgto_manual` (`pgto_auto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `terminal`
--

CREATE TABLE IF NOT EXISTS `terminal` (
  `codTerm` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `pisos` int(2) NOT NULL,
  `tipoTerminal` varchar(13) NOT NULL,
  `qtdeEspacos` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codTerm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
