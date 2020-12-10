-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 10 déc. 2020 à 19:18
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `dateCrea` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dateAjout` date NOT NULL,
  `dateModif` date NOT NULL,
  `etat` varchar(50) NOT NULL,
  `idbesoin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idbesoin` (`idbesoin`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`id`, `titre`, `email`, `tel`, `description`, `dateCrea`, `adresse`, `image`, `dateAjout`, `dateModif`, `etat`, `idbesoin`) VALUES
(1, 'malak', 'bbb', 12, 'bbbbb', '2020-12-08', 'ccc', 'C:\\Users\\malak_6\\Desktop\\2.jpg', '2020-12-09', '2020-12-08', 'inactive', 2),
(5, 'malakbenmansour', 'hbenmansour@gmail.com', 123, 'sante', '2020-12-10', 'beb khadhra', 'C:\\Users\\malak_6\\Desktop\\2.jpg', '2020-12-10', '2020-11-10', 'active', 2),
(7, 'association tunisienne de la sante et reproduction', 'atsr@atsrtn.org', 71856987, ' sante et reproduction pour les femmes tunisiennes', '2020-12-10', 'beb khadhra', 'C:\\Users\\malak_6\\Desktop\\2.jpg', '2020-12-10', '2020-12-07', 'inactive', 2);

-- --------------------------------------------------------




--
-- Structure de la table `besoins`
--

DROP TABLE IF EXISTS `besoins`;
CREATE TABLE IF NOT EXISTS `besoins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `besoins`
--

INSERT INTO `besoins` (`id`, `nom`, `description`) VALUES
(2, 'humaine', '777777'),
(3, 'lucratif', 'malakmalak');

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

DROP TABLE IF EXISTS `centre`;
CREATE TABLE IF NOT EXISTS `centre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_centre` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `dateAjout` date NOT NULL,
  `dateModif` date NOT NULL,
  `etat` varchar(100) NOT NULL,
  `idtype` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idtype` (`idtype`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centre`
--

INSERT INTO `centre` (`id`, `nom_centre`, `adresse`, `email`, `tel`, `dateAjout`, `dateModif`, `etat`, `idtype`) VALUES
(1, 'aaa', 'aaa', 'aa', 777, '2020-12-08', '2020-01-08', 'inactive', 0),
(3, '2', 'aa', 'aaaa', 987, '2020-12-08', '2020-12-08', 'inactive', 2),
(4, '2', 'malakk', 'hbenmansour@gmail.com', 123, '2020-12-08', '2020-12-08', 'active', 2),
(5, '2', 'bbb', 'hbenmansour@gmail.com', 123, '2020-12-09', '2020-12-09', 'inactive', 2),
(6, '1', 'aaa', 'hbenmansour@gmail.com', 123, '2020-12-09', '2020-12-10', 'inactive', 1),
(7, 'malak', 'ekbel', 'hbenmansour@gmail.com', 123, '2020-12-09', '2020-12-09', 'inactive', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`, `description`) VALUES
(1, 'loisir', 'mmmm'),
(2, 'PMA', 'vvv'),
(3, 'sante', 'association de sante');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `association1`
--
ALTER TABLE `association1`
  ADD CONSTRAINT `fk_associ` FOREIGN KEY (`idbesoin`) REFERENCES `besoins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
