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
-- Structure de la table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `CIN` varchar(16) NOT NULL,
  `NOM` varchar(19) NOT NULL,
  `PRENOM` varchar(16) NOT NULL,
  `SPECIALITE` varchar(16) NOT NULL,
  `PASS` varchar(50) NOT NULL,
  `SALAIRE` int(10) NOT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `doctor`
--

INSERT INTO `doctor` (`CIN`, `NOM`, `PRENOM`, `SPECIALITE`, `PASS`, `SALAIRE`) VALUES
('12121210', 'test', 'aa', 'aaa', '12345671', 1200),
('12345666', '12tt', 'ttt', 'AA', '12345670', 0),
('12345669', '12te', 't', 'AA', '12345678', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
