-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 04 déc. 2020 à 08:59
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `curae`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
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
-- Déchargement des données de la table `doctor`
--

INSERT INTO `doctor` (`CIN`, `NOM`, `PRENOM`, `SPECIALITE`, `PASS`, `SALAIRE`) VALUES
('12121210', 'test', 'aa', 'aaa', '12345671', 1200),
('12345666', '12tt', 'ttt', 'AA', '12345670', 0),
('12345669', '12te', 't', 'AA', '12345678', 3),
('12345678', 'dd', 'yy', 'ttt', '23145678', 222);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `CIN` varchar(16) NOT NULL,
  `NOM` varchar(16) NOT NULL,
  `PRENOM` varchar(16) NOT NULL,
  `ADRESSE` varchar(20) NOT NULL,
  `PASS` varchar(50) NOT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`CIN`, `NOM`, `PRENOM`, `ADRESSE`, `PASS`) VALUES
('12345671', 'AA', 'AA', 'AA', '12345670'),
('12345678', 't', '12tt', 'RUE faucheaux', '12345670'),
('95227678', 'seif', 'Ben Salah', 'soukra', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
