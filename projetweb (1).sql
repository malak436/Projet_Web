-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 jan. 2021 à 10:48
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
  `image` text NOT NULL,
  `dateAjout` date NOT NULL,
  `dateModif` date NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `idbesoin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idbesoin` (`idbesoin`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`id`, `titre`, `email`, `tel`, `description`, `dateCrea`, `adresse`, `image`, `dateAjout`, `dateModif`, `etat`, `idbesoin`) VALUES
(32, 'association1                                                                                        ', 'association@gmail.com', 12345678, '     test', '2021-01-02', 'tunis', 'C:\\wamp64\\www\\malak_finale\\final\\view\\front_malak\\img\\associ-img\\associ1.jpg', '2021-01-02', '2021-01-01', 0, 3),
(33, 'malak_association                                                                                   ', 'associ2@gmail.com', 12345612, '       association', '2020-12-02', 'sousse', 'C:\\wamp64\\www\\malak_finale\\final\\view\\back_malak\\assets\\img\\doctor-thumb-03.jpg', '2021-01-02', '2021-01-02', 0, 3),
(34, 'association3', 'association3@gmail.com', 98667896, 'test validation', '2017-01-26', 'sousse', 'C:\\wamp64\\www\\malak_finale\\final\\view\\back_malak\\assets\\img\\doctor-thumb-04.jpg', '2021-01-02', '2021-01-02', 1, 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `besoins`
--

INSERT INTO `besoins` (`id`, `nom`, `description`) VALUES
(3, 'lucratif', '  malakesprit'),
(15, 'humaine', ' mmmmmb'),
(16, 'esprit', 'espritvalidation');

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
  `etat` tinyint(1) NOT NULL,
  `idtype` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idtype` (`idtype`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centre`
--

INSERT INTO `centre` (`id`, `nom_centre`, `adresse`, `email`, `tel`, `dateAjout`, `dateModif`, `etat`, `idtype`) VALUES
(10, 'centre2', 'tunis', 'hbenmansour@gmail.com', 123546, '2020-12-13', '2020-12-13', 1, 2),
(12, 'centremalak', 'tunis', 'mm@ml', 98665810, '2020-12-30', '2020-12-30', 1, 11),
(13, 'pagination', 'sousse', 'figo@gmail.com', 14556555, '2021-01-01', '2021-01-02', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `date_com` datetime NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_post` (`id_post`),
  KEY `id_patient` (`id_patient`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `comment`, `date_com`, `id_post`, `id_patient`) VALUES
(2, 'patient', 'question', '2020-12-17 17:52:49', 3, 1),
(11, 'XXX', 'bonjour', '2021-01-03 10:11:02', 8, 1),
(7, 'patientX', 'tester votre comment', '2021-01-02 23:43:50', 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id_patient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id_patient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `post` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_post` datetime NOT NULL,
  `id_patient` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patint` (`id_patient`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `categorie`, `post`, `image`, `date_post`, `id_patient`) VALUES
(8, 'esprit', 'Developement personnel', 'Projet_Web: venus Curae', 'img/blog/general.png', '2021-01-03 00:45:13', 1),
(6, 'test', 'Grossesse', 'maalak', 'img/blog/general.png', '2020-12-17 19:17:26', 1),
(7, 'malak_esprit', 'Grossesse', '', 'img/blog/general.png', '2021-01-03 10:12:27', 1);

-- --------------------------------------------------------

--
-- Structure de la table `rating_info`
--

DROP TABLE IF EXISTS `rating_info`;
CREATE TABLE IF NOT EXISTS `rating_info` (
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_action` varchar(30) NOT NULL,
  UNIQUE KEY `UC_rating_info` (`user_id`,`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rating_info`
--

INSERT INTO `rating_info` (`user_id`, `post_id`, `rating_action`) VALUES
(1, 5, 'like'),
(1, 6, 'like'),
(1, 7, 'dislike'),
(1, 8, 'like'),
(7, 4, 'dislike'),
(7, 5, 'like');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `nom`, `description`) VALUES
(2, 'PMA', 'sante'),
(3, 'sante', 'association de sante'),
(11, 'esprit_sante', ' esprit');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
