-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 06 déc. 2020 à 21:10
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
-- Base de données : `venuscare`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `CIN` varchar(16) NOT NULL,
  `NOM` varchar(19) NOT NULL,
  `PRENOM` varchar(16) NOT NULL,
  `SPECIALITE` varchar(16) NOT NULL,
  `PASS` varchar(50) NOT NULL,
  `SALAIRE` int(10) NOT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `doctors`
--

INSERT INTO `doctors` (`CIN`, `NOM`, `PRENOM`, `SPECIALITE`, `PASS`, `SALAIRE`) VALUES
('12121210', 'test', 'aa', 'aaa', '12345671', 1200),
('12345666', '12tt', 'ttt', 'AA', '12345670', 0),
('12345669', '12te', 't', 'AA', '12345678', 3),
('12345678', 'dd', 'yy', 'ttt', '23145678', 222);

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `CIN` varchar(16) NOT NULL,
  `NOM` varchar(16) NOT NULL,
  `PRENOM` varchar(16) NOT NULL,
  `ADRESSE` varchar(20) NOT NULL,
  `PASS` varchar(50) NOT NULL,
  PRIMARY KEY (`CIN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`CIN`, `NOM`, `PRENOM`, `ADRESSE`, `PASS`) VALUES
('12345671', 'AA', 'AA', 'AA', '12345670'),
('12345678', 't', '12tt', 'RUE faucheaux', '12345670'),
('95227678', 'seif', 'Ben Salah', 'soukra', '12345678');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_rdv` date NOT NULL,
  `heure` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `etat` enum('en cours','annulee','confirmee','') NOT NULL,
  `id_docteur` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id`, `date_rdv`, `heure`, `enabled`, `etat`, `id_docteur`, `id_patient`) VALUES
(10, '2020-06-17', '02:13', 0, 'en cours', 2, 2),
(11, '2012-03-01', '11:00', 0, 'en cours', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `password`, `email`, `role`, `spec`, `name`, `phone`) VALUES
(1, 'kimou', 'titou', 'titou@titou.titou', 'admin', 'null', 'taiem hilali', '28128302'),
(2, 'doc', 'doc', 'doc@doc.doc', 'docteur', 'gynecologue', 'taiem hilali', '075565455'),
(3, 'test', 'test', 'test', 'docteur', 'gynecologue', 'tayef hilali', '28128302');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
