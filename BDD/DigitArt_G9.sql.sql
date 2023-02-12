-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 12 fév. 2023 à 22:55
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogart23`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `numArt` int NOT NULL AUTO_INCREMENT,
  `dtCreArt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) DEFAULT NULL,
  `libChapoArt` text,
  `libAccrochArt` varchar(100) DEFAULT NULL,
  `parag1Art` text,
  `libSsTitr1Art` varchar(100) DEFAULT NULL,
  `parag2Art` text,
  `libSsTitr2Art` varchar(100) DEFAULT NULL,
  `parag3Art` text,
  `libConclArt` text,
  `urlPhotArt` varchar(70) DEFAULT NULL,
  `numThem` int NOT NULL,
  PRIMARY KEY (`numArt`),
  KEY `ARTICLE_FK` (`numArt`),
  KEY `FK_ASSOCIATION_1` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `numCom` int NOT NULL AUTO_INCREMENT,
  `dtCreCom` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT '0',
  `dtModCom` timestamp NULL DEFAULT NULL,
  `notifComKOAff` text,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int NOT NULL,
  `numMemb` int NOT NULL,
  PRIMARY KEY (`numCom`),
  KEY `COMMENT_FK` (`numCom`),
  KEY `FK_ASSOCIATION_2` (`numArt`),
  KEY `FK_ASSOCIATION_3` (`numMemb`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `likeart`
--

DROP TABLE IF EXISTS `likeart`;
CREATE TABLE IF NOT EXISTS `likeart` (
  `numMemb` int NOT NULL,
  `numArt` int NOT NULL,
  `likeA` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`numMemb`,`numArt`),
  KEY `LIKEART_FK` (`numMemb`,`numArt`),
  KEY `FK_LIKEART1` (`numArt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `numMemb` int NOT NULL AUTO_INCREMENT,
  `prenomMemb` varchar(70) NOT NULL,
  `nomMemb` varchar(70) NOT NULL,
  `pseudoMemb` varchar(70) NOT NULL,
  `passMemb` varchar(70) NOT NULL,
  `eMailMemb` varchar(100) NOT NULL,
  `dtCreaMemb` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numStat` int NOT NULL,
  PRIMARY KEY (`numMemb`),
  KEY `MEMBRE_FK` (`numMemb`),
  KEY `FK_ASSOCIATION_4` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `numStat`) VALUES
(60, 'Admin', 'Admin', 'admin1', '$2y$10$lI.D5W6DOVlCmpco0AgLpu/hwLzY/DaHCEs3sLYjR6UMsUTFThioi', 'emailadmin1@gmail.com', '2023-02-12 22:41:48', 1),
(61, 'Louis', 'Dupont', 'louisdpnt', '$2y$10$EbKfx3TpMy/WxWFrsEcwUOZF6SjQfVjtcIld/rMyyk2sAVvAU/DDu', 'louis.dupont@gmail.com', '2023-02-12 22:42:18', 3);

-- --------------------------------------------------------

--
-- Structure de la table `motcle`
--

DROP TABLE IF EXISTS `motcle`;
CREATE TABLE IF NOT EXISTS `motcle` (
  `numMotCle` int NOT NULL AUTO_INCREMENT,
  `libMotCle` varchar(60) NOT NULL,
  PRIMARY KEY (`numMotCle`),
  KEY `MOTCLE_FK` (`numMotCle`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `motclearticle`
--

DROP TABLE IF EXISTS `motclearticle`;
CREATE TABLE IF NOT EXISTS `motclearticle` (
  `numArt` int NOT NULL,
  `numMotCle` int NOT NULL,
  PRIMARY KEY (`numArt`,`numMotCle`),
  KEY `MOTCLEARTICLE_FK` (`numArt`),
  KEY `MOTCLEARTICLE2_FK` (`numMotCle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `numStat` int NOT NULL AUTO_INCREMENT,
  `libStat` varchar(25) NOT NULL,
  PRIMARY KEY (`numStat`),
  KEY `STATUT_FK` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`numStat`, `libStat`) VALUES
(1, 'Administrateur'),
(2, 'Modérateur'),
(3, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `thematique`
--

DROP TABLE IF EXISTS `thematique`;
CREATE TABLE IF NOT EXISTS `thematique` (
  `numThem` int NOT NULL AUTO_INCREMENT,
  `libThem` varchar(60) NOT NULL,
  PRIMARY KEY (`numThem`),
  KEY `THEMATIQUE_FK` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `thematique`
--

INSERT INTO `thematique` (`numThem`, `libThem`) VALUES
(1, 'L\'événement'),
(2, 'L\'acteur-clé');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `thematique` (`numThem`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `likeart`
--
ALTER TABLE `likeart`
  ADD CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `statut` (`numStat`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `motcle` (`numMotCle`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
