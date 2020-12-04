-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Décembre 2020 à 22:14
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `curae`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `CIN` varchar(16) NOT NULL,
  `NOM` varchar(16) NOT NULL,
  `PRENOM` varchar(16) NOT NULL,
  `ADRESSE` varchar(20) NOT NULL,
  `PASS` varchar(50) NOT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`CIN`, `NOM`, `PRENOM`, `ADRESSE`, `PASS`) VALUES
('12345671', 'AA', 'AA', 'AA', '12345670'),
('12345678', 't', '12tt', 'RUE faucheaux', '12345670'),
('95227678', 'seif', 'Ben Salah', 'soukra', '12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
