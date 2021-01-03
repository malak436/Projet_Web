-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 03 jan. 2021 à 09:48
-- Version du serveur :  5.5.8
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `venuscare`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idcat` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_cat` varchar(50) NOT NULL,
  PRIMARY KEY (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcat`, `libelle_cat`) VALUES
(1, 'Seminaire'),
(2, 'produit'),
(3, 'gestions'),
(4, 'abcd');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `nbrparticipants` int(11) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `datedebut` varchar(20) NOT NULL,
  `datefin` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `nbrevue` int(11) NOT NULL,
  `idcat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idcatevent` (`idcat`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `titre`, `description`, `nbrparticipants`, `lieu`, `datedebut`, `datefin`, `img`, `nbrevue`, `idcat`) VALUES
(12, 'mr', ' mlgdserrfgregvqrgrqbregvergvq', 5, 'tunis', '15/12/2020', '26/12/2020', 'event2.jpg', 0, 3),
(13, 'aaaaaaaaaaaaaaaa', ' cvvc', 0, 'tunis', '22/12/2020', '21/12/2020', 'logo-de-grossesse-22644937.jpg', 0, 1),
(29, 'sdfc', 'dzefgh', 50, 'sfdgf', '21/12/2020', '30/12/2020', 'doctor-thumb-05.jpg', 0, 2),
(30, 'ahmed', ' nbk', 0, 'bizert', '18/12/2020', '29/12/2020', 'doctor-thumb-04.jpg', 0, 1),
(31, 'sdfc', ' bjljbkl', 3, 'tunis', '15/12/2020', '28/12/2020', 'doctor-thumb-01.jpg', 0, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `idcatevent` FOREIGN KEY (`idcat`) REFERENCES `categorie` (`idcat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
