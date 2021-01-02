-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 déc. 2020 à 19:15
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `volantaryphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

DROP TABLE IF EXISTS `mission`;
CREATE TABLE IF NOT EXISTS `mission` (
  `idtypemiss` int(255) NOT NULL,
  `nombremiss` int(255) NOT NULL,
  `mission` varchar(255) NOT NULL,
  PRIMARY KEY (`idtypemiss`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mission`
--

INSERT INTO `mission` (`idtypemiss`, `nombremiss`, `mission`) VALUES
(55, 645, 'vdsvvsd'),
(444, 6, 'hjklmp'),
(555, 5, 'dscsdcsdc'),
(588, 8, 'sdvsvsDV'),
(777, 777, ':^^u;mgjyjo,');

-- --------------------------------------------------------

--
-- Structure de la table `volontaire`
--

DROP TABLE IF EXISTS `volontaire`;
CREATE TABLE IF NOT EXISTS `volontaire` (
  `cin` int(25) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `tel` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `typemiss` int(255) NOT NULL,
  PRIMARY KEY (`cin`),
  KEY `typemiss` (`typemiss`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `volontaire`
--

INSERT INTO `volontaire` (`cin`, `nom`, `prenom`, `tel`, `email`, `typemiss`) VALUES
(57, 'mmm', 'malak', 777, 'mmmm', 4),
(58, 'mmm', 'malak', 777, 'mmmm', 4),
(59, 'bb', 'malak', 78, 'bbbbb', 1),
(60, 'sdfds', 'malak', 59584123, 'medali.bouderbala@esprit.tn', 1),
(61, 'cqscqs', 'cqscqc', 59584123, 'Arourou097@gmail.com', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
