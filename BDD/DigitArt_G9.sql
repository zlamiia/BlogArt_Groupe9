-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 12 fév. 2023 à 23:12
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(7, '2023-02-10 12:54:19', 'Bordeaux : L’Univers de Dalí et Gaudí sous les projecteurs des Bassins des Lumières', 'Ne le regardez pas, vivez-le ! Dans le quartier des Bassins à flots à Bordeaux se cache un centre d’art numérique sans égal : Les Bassins des Lumières. Cet espace propose une expérience immersive du 3 février 2023 au 7 janvier 2024. Un plongeon dans l’univers de l\'art à travers le numérique est annoncé. C’était réellement une opportunité unique pour découvrir les œuvres de Dali et Gaudi sous un nouvel angle. Qu’on habite à Bordeaux où qu’on y fasse une simple visite, c’est une activité pour toute la famille qui est à saisir.', 'La découverte des œuvres de Dali et Gaudi comme jamais auparavant.', 'Au cœur de Bordeaux se trouvent les Bassins des Lumières, le centre d’art numérique au passé insolite. C’est au départ une base sous-marine qui fût construite par les nazis durant la Seconde guerre mondiale, en utilisant comme main d’œuvre des prisonniers de guerre.\r\nAujourd’hui, on y rend hommage à tous ceux qui ont dû bâtir ce lieu. L’espace est finalement une effigie de leur souffrance. C’était sans compter sur les nombreux essais qui visaient à faire des bassins un lieu de culture, comme le tournage d’une scène pour un film de Jean Cayrol, un lieu pour une pièce de théâtre et une galerie d’exposition pure et dure. Mais à présent, il s’illumine aux mille et une couleurs pour nous émerveiller et nous transporter dans des mondes tout aussi spectaculaires les uns que les autres. Ses projecteurs donnent vie aux œuvres de grands maîtres de l’art.\r\nL’objectif des Bassins des Lumières est de nous permettre de découvrir l’art numérique de manière ludique et accessible. Cette combinaison de la technologie et de l’art contribue à la création d’expériences immersives qui dépassent les limites de notre observation classique d’une œuvre d’art. On se retrouve plongés dans un univers digital créatif et on y découvre les œuvres de manière interactive.', 'Le rassemblement de deux icônes pour vous offrir un voyage hors du temps.', 'C’est une célébration de l’art de deux grands artistes qui aura lieu à partir de ce 3 février 2023. L’exposition qui anime les Bassins des Lumières rend honneur à deux grands noms que Barcelone ait connus ce dernier siècle, Dali et Gaudi, peut-être que vous en avez entendu parler. Ce que l’on peut dire c’est que pour le coup, nous n’avons pas été déçus. C’est avec Dali que l’on va finir plongé dans un monde défiant toute forme de réalité. Un royaume aux limites mêmes de l’imaginaire. Ce n’est pas pour autant que Antoni Gaudi est en reste, il nous dévoilera tout son génie à travers son univers construit autour des formes et des couleurs.\r\nC’est plus de 60 années de création qui nourrissent cette exposition. L’Énigme sans fin et L’Architecte de l’imaginaire, respectivement, l’exposition de Salvador Dali et d\'Antoni Gaudi, sont proposées. Voilà les deux programmes à l’affiche qui pour le coup ne nous laisseront pas de marbre : un programme long qui plonge dans le travail de Dali, et le programme court, démontre l’architecture de Gaudi.\r\nMais bon, que serait un spectacle de lumières sans son, c’est pour accentuer l’immersion que le groupe Pink Floyd et leur musique planante viendront s’ajouter pour nous offrir une expérience dont on ne peut vraiment pas ressortir indifférent.\r\n', 'Les technologies immersives : entre expérience et innovation.', 'Les technologies immersives telles que la réalité virtuelle et la réalité augmentée se combinent avec l’art numérique pour nous offrir une expérience de visualisation unique et immersive. Les artistes numériques peuvent ainsi utiliser ces technologies pour explorer de nouvelles formes d’expression et créer des œuvres interactives qui nous impliquent, nous spectateurs. C’est sur ces technologies que s’appuient les expositions immersives. Mêlées à l’art, ces dernières nous offrent une connexion hors du commun avec ces productions.\r\n\r\nL’art numérique comprend des œuvres créées à partir de technologies numériques. Il s’intègre inévitablement dans ces expositions immersives. \r\n\r\nEn combinant ces technologies immersives avec l\'art numérique, les expositions immersives proposent une expérience de l\'art unique et innovante. Cela m’a réellement permis de me plonger dans un monde virtuel et de voir des œuvres d\'art numérique en action dans le monde réel.\r\n', 'L’exposition de Dali et Gaudi aux Bassins des Lumières de Bordeaux est une occasion en or pour vous d’explorer les univers fascinants de ces grands artistes du XXe siècle. Les Bassins des Lumières vous accueillent de 10h à 19h d\'avril à septembre et pendant les vacances scolaires, avec des nocturnes les vendredis et samedis jusqu\'à 21h. D\'octobre à mars et hors vacances scolaires, les horaires d’ouverture sont de 10h à 18h avec des nocturnes les vendredis et samedis jusqu\'à 20h. Toutes les informations nécessaires pour préparer votre visite sont disponibles sur le site web des Bassins des Lumières.', '/src/images/uploads/63e63cd82d95ebassins.png', 1),
(8, '2023-02-10 12:54:00', '“De la vidéo de plongée à l’art numérique : le parcours d’un créateur”', 'Dans un monde où les outils numériques se multiplient, il peut être difficile de se démarquer en tant qu’artiste. Cependant, pour notre invité d\'aujourd\'hui, ce qui a commencé comme un simple stage de licence a rapidement évolué en une passion pour la création de vidéos. Découvrez comment sa formation et son parcours professionnel l’ont influencé dans son travail d’artiste digital. ', 'Notre invité d’aujourd’hui a commencé sa carrière dans les arts numériques par hasard.', 'Il y a cinq ou six ans, Valentin Amélineau a débuté comme marketeur en tant que stagiaire dans un club de plongée en Indonésie, où il a été chargé de faire des vidéos. Il a rapidement pris goût à la création de vidéos et s’est formé sur place à Adobe Premiere Pro. Bien qu\'il n\'ait pas reçu de formation artistique, l\'auto-apprentissage en ligne lui a permis de développer son style et de se faire connaître sur Internet. Valentin considère l\'art numérique comme une opportunité d\'expression et de découverte de soi. Il a également découvert que Photoshop offre une liberté de création largement supérieure à de la simple retouche photo. Cette prise de conscience peut vous encourager à explorer des projets que vous n\'aviez jamais osé faire auparavant.\r\n\r\nIl se passionne pour la nature, la galaxie et aime se retrouver à la plage en été et à Genève en hiver. Toutefois, il souhaite découvrir d\'autres environnements et rencontrer d\'autres personnes pour développer ses idées. Il a considéré l\'option de vivre de sa création, mais il estime que cela nécessiterait une spécialisation. Valentin n\'a pas envie d\'être freelance, car cela nécessite également des compétences commerciales, ce qui lui semble difficile. Sa partie préférée est la création, pas la vente.\r\n', 'Formation et parcours professionnel : une influence sur le travail d’artiste digital', 'Son premier emploi dans un cabinet de conseil en finance n\'a pas été satisfaisant car il ne correspondait pas à ses aspirations. C\'est ainsi qu\'il a décidé de se consacrer à son côté artistique. Pour lui, le travail en tant qu\'artiste digital dépend de la définition de travail. Il déclare  : “Pour moi, un artiste devient vraiment un artiste lorsqu’il consacre sa vie à son art et crée des sentiments et des sensations chez les gens, même s\'il ne gagne pas d\'argent.” Cela implique que pour réussir dans le monde de l’art, il faut être prêt à dédier tout son temps et son énergie à sa création et à son développement artistique.\r\n\r\nIl a créé diverses collaborations en travaillant avec de nombreux autres artistes. Son objectif, avant tout, est de se faire plaisir et non pas d\'obtenir un résultat obligatoire. Si l\'objectif était de gagner de l\'argent, il ne pourrait pas avoir la liberté créative qu\'il a maintenant. Pour lui, un artiste fait avancer la société en montrant ses idées, en faisant réagir les gens et en créant des sensations. Si un artiste devient populaire, c\'est une combinaison de chance et de travail, mais cela ne doit pas être le but de toute une vie. \r\n', 'L’avenir de l’art numérique : une vision passionnante et effrayante', 'Valentin reconnaît que les nouveaux outils et plateformes permettent aux artistes de se faire connaître sur la scène mondiale, mais aussi de se mesurer à une concurrence accrue. L\'accès à ces technologies permet à n\'importe qui de devenir créatif, même sans formation technique ou créative, ce qui peut être considéré comme injuste pour les artistes professionnels. En effet, les avis divergent sur ce genre d’I.A. Certains disent que cela va engendrer la disparition des artistes, d’autres que cela ouvrira de nouvelles portes, mais notre artiste digital a un avis plutôt partagé sur la question, déclarant qu’ “à la fois, c’est excitant et [qu’]à la fois ça fait peur” estimant que les créateurs numériques ne seront pas remplacés par l’ordinateur avant un bon moment. \r\n\r\nLes nouvelles technologies ont un impact considérable sur la création artistique. Les algorithmes et l\'intelligence artificielle peuvent influencer et améliorer le processus de création. L\'outil digital permet d\'explorer de nouvelles idées et de les développer sans aucune limite. Les nouvelles technologies sont considérées comme des outils incroyables pour les artistes, même si tous ne les utilisent pas encore.\r\n', 'L’art numérique est un domaine passionnant et en constante évolution, qui offre de nombreuses opportunités pour les créateurs. Notre entretien avec Valentin Amélineau nous a permis de découvrir comment il a commencé dans ce domaine et les influences qui ont marqué son parcours. Il nous a également partagé ses perspectives sur l’avenir de l’art numérique, qui peut être à la fois si attrayant, néanmoins si terrifiant.\r\nNotre artiste digital, qui donne des cours et crée des campagnes de communication pour ses clients, nous montre qu’il est possible de se forger un parcours dans ce domaine en dépit de la concurrence croissante. Il décrit son travail comme une façon de faire passer un message et de faire vivre une expérience à son public.\r\n\r\nIl est clair que l’art numérique est un domaine riche et passionnant qui offre de nombreuses opportunités pour les artistes créatifs. Que vous soyez un débutant ou un artiste accompli, il y a toujours de nouvelles choses à explorer et à découvrir. L’avenir de l’art numérique est fascinant et incertain, mais avec les bonnes compétences et une vision claire, il est possible de faire partie de cette évolution et de marquer son empreinte dans ce domaine.\r\n', '/src/images/uploads/63e63f05dbaf5valentin-photo.png', 2),
(9, '2023-02-10 13:04:00', 'Work in Progress', 'Work in Progress', 'Work in Progress', 'Work in Progress', 'Work in Progress', 'Work in Progress', 'Work in Progress', 'Work in Progress', 'Work in Progress', '/src/images/uploads/63e64150a24d4cover.png', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `numStat`) VALUES
(6, 'Pedro', 'Barros', 'pbarros', '$2y$10$4PvMkG9T9LZi1cpkhuPY0.LOqApTPnnXHasLmabS6MEHMnNWXalD6', 'pedro@gmail.com', '2023-02-12 22:36:21', 1),
(7, 'Kevin', 'Imart', 'kev', '$2y$10$zj2TJKOBV1wmlyAnfg0WEOWNLUMfrO8MlO75AeWl6JCles2JrfZUW', 'kevin@gmail.com', '2023-02-12 22:54:56', 3);

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `motcle`
--

INSERT INTO `motcle` (`numMotCle`, `libMotCle`) VALUES
(1, 'Bordeaux');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `thematique`
--

INSERT INTO `thematique` (`numThem`, `libThem`) VALUES
(1, 'L\'événement'),
(2, 'L\'acteur-clé'),
(3, 'Le mouvement émergeant'),
(4, 'L\'insolite / le clin d\'oeil');

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
