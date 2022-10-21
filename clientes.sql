-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Fev-2021 às 17:44
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `CadastroClientes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
`nome` VARCHAR( 60 ) NOT NULL ,
`email` VARCHAR( 60 ) NOT NULL ,
`sexo` VARCHAR( 10 ) NOT NULL ,
`ddd` INT( 2 ) ,
`telefone` INT( 8 ) ,
`endereço` VARCHAR( 70 ) NOT NULL ,
`cidade` VARCHAR( 20 ) NOT NULL ,
`estado` VARCHAR( 2 ) NOT NULL ,
`bairro` VARCHAR( 20 ) NOT NULL ,
`país` VARCHAR( 20 ) NOT NULL ,
`login` VARCHAR( 12 ) NOT NULL ,
`senha` VARCHAR( 12 ) NOT NULL ,
`news` VARCHAR( 8 ) ,
`id` INT( 200 ) AUTO_INCREMENT ,
UNIQUE (`id` ) );

--
-- Extraindo dados da tabela `clientes`
--


