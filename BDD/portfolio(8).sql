-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 nov. 2021 à 10:55
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

DROP TABLE IF EXISTS `activite`;
CREATE TABLE IF NOT EXISTS `activite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bloc_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B87555155582E9C0` (`bloc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `bloc_id`, `code`, `libelle`) VALUES
(1, 1, 'B1.1', 'Gestion du patrimoine informatique'),
(2, 1, 'B1.2', 'Réponse aux incidents et aux demandes d\'assistance et d\'évolution'),
(3, 1, 'B1.3', 'Développement de la présence en ligne de l\'organisation'),
(4, 1, 'B1.4', 'Travail en mode projet'),
(5, 1, 'B1.5', 'Mise à disposition des utilisateurs d\'un service informatique'),
(6, 1, 'B1.6', 'Organisation de son développement professionnel'),
(7, 2, 'B2.1SISR', 'Conception d\'une solution d\'infrastructure'),
(8, 2, 'B2.2SISR', 'Installation, test et déploiement d\'une solution d\'infrastructure réseau'),
(9, 2, 'B2.3SISR', 'Exploitation, dépannage et supervision d\'une solution d\'infrastructure réseau'),
(10, 3, 'B2.1SLAM', 'Conception et développement d\'une solution applicative'),
(11, 3, 'B2.2SLAM', 'Maintenance corrective ou évolutive d\'une solution applicative'),
(12, 3, 'B2.3SLAM', 'Gestion des données'),
(13, 4, 'B3.1', 'Protection des données à caractère personnel'),
(14, 4, 'B3.2', 'Préservation de l\'identité numérique de l\'organisation'),
(15, 4, 'B3.3', 'Sécurisation des équipements et des usages des utilisateurs '),
(16, 4, 'B3.4', 'Garantie de la disponibilité, de l\'intégrité et de la confidentialité des services informatiques et des données de l\'organisation face à des cyberattaques'),
(17, 4, 'B3.5SISR', 'Cybersécurisation d\'une infrastructure réseau, d\'un système, d\'un service'),
(18, 4, 'B3.5SLAM', 'Cybersécurisation d\'une solution applicative et de son développement');

-- --------------------------------------------------------

--
-- Structure de la table `bloc`
--

DROP TABLE IF EXISTS `bloc`;
CREATE TABLE IF NOT EXISTS `bloc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bloc`
--

INSERT INTO `bloc` (`id`, `code`, `libelle`) VALUES
(1, 'B1', 'Support et mise à disposition de services informatiques'),
(2, 'B2A', 'SISR : Administration des systèmes et des réseaux'),
(3, 'B2B', 'SLAM : Conception et développement d’applications'),
(4, 'B3', 'Cybersécurité des services informatiques');

-- --------------------------------------------------------

--
-- Structure de la table `cadre`
--

DROP TABLE IF EXISTS `cadre`;
CREATE TABLE IF NOT EXISTS `cadre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cadre`
--

INSERT INTO `cadre` (`id`, `libelle`) VALUES
(1, 'Équipe'),
(2, 'Seul');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enseignant_id` int(11) DEFAULT NULL,
  `rp_id` int(11) NOT NULL,
  `commentaire` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_commentaire` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_67F068BCE455FCC0` (`enseignant_id`),
  KEY `IDX_67F068BCB70FF80C` (`rp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `enseignant_id`, `rp_id`, `commentaire`, `date_commentaire`) VALUES
(1, 7, 12, 'Corriger les fautes d\'orthographe', '2021-06-15'),
(2, 8, 12, 'revoir le contexte', '2021-06-15'),
(3, 7, 12, 'xssxsqxqs', '2021-06-18'),
(4, 7, 12, 'revoir les activités', '2021-06-18'),
(7, 7, 16, 'fdfvdsfvcsd', '2021-07-07'),
(8, 7, 13, 'commenta', '2021-07-01'),
(9, 7, 13, 'commenta', '2021-07-01'),
(10, 7, 13, 'commentaire', '2021-07-01'),
(11, 7, 13, 'ppppppppppp', '2021-07-01');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activite_id` int(11) NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_94D4687F9B0F88B1` (`activite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `activite_id`, `code`, `libelle`) VALUES
(1, 1, 'C1.1.1', 'Recensement et identification des ressources numériques'),
(2, 1, 'C1.1.2', 'Exploitation des référentiels, normes et standards adoptés par le prestataire informatique'),
(3, 1, 'C1.1.3', 'Mise en place et vérification des niveaux d\'habilitation associés à un service'),
(4, 1, 'C1.1.4', 'Vérification des conditions de la continuité d\'un service informatique'),
(5, 1, 'C1.1.5', 'Gestion des sauvegardes'),
(6, 1, 'C1.1.6', 'Vérification du respect des règles d\'utilisation des ressources numériques'),
(7, 2, 'C1.2.1', 'Collecte, suivi et orientation des demandes'),
(8, 2, 'C1.2.2', 'Traitement des demandes concernant les applicatifs, services réseau et système'),
(9, 2, 'C1.2.3', 'Traitement des demandes concernant les applications'),
(10, 3, 'C1.3.1', 'Participation à la valorisation de l\'image de l\'organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques'),
(11, 3, 'C1.3.2', 'Référencement des services en ligne de l\'organisation et mesure de leur visibilité'),
(12, 3, 'C1.3.4', 'Participation à l\'évolution d\'un site Web exploitant les données de l\'organisation'),
(13, 4, 'C1.4.1', 'Analyse des objectifs et des modalités d\'organisation d\'un projet'),
(14, 4, 'C1.4.2', 'Planification des activités'),
(15, 5, 'C1.5.1', 'Test d\'intégration et d\'acceptation d\'un service'),
(16, 5, 'C1.5.2', 'Déploiement d\'un service'),
(17, 5, 'C1.5.3', 'Accompagnement des utilisateurs dansla mise en place d\'un service'),
(18, 6, 'C1.6.1', 'Mise en place de son environnement d\'apprentissage personnel'),
(19, 6, 'C1.6.2', 'Mise en œuvre d\'outils et de stratégie veille informationnelle'),
(20, 6, 'C1.6.3', 'Gestion de son identité professionnelle'),
(21, 7, 'C2.1.1R', 'Analyse d\'un besoin exprimé et de son contexte juridique'),
(22, 7, 'C2.1.2R', 'Étude de l\'impact d\'une évolution d\'un élément d\'infrastructure sur le système informatique'),
(23, 7, 'C2.1.3R', 'Élaboration d\'un dossier de choix d\'une solution d\'infrastructure et rédaction des spécifications techniques'),
(24, 7, 'C2.1.4R', 'Choix des éléments nécessaires pour assurer la qualité et la disponibilité d\'un service'),
(25, 7, 'C2.1.5R', 'Maquettage et prototypage d\'une solution d\'infrastructure permettant d\'atteindre la qualité de service attendue'),
(26, 7, 'C2.1.6R', 'Détermination et préparation des tests nécessaires à la validation de la solution d\'infrastructure retenue'),
(27, 8, 'C2.2.1R', 'Installation et configuration d\'éléments d\'infrastructure'),
(28, 8, 'C2.2.2R', 'Installation et configuration des éléments nécessaires pour assurer la continuité des services'),
(29, 8, 'C2.2.3R', 'Installation et configuration des éléments nécessaires pour assurer la qualité de service(QoS)'),
(30, 8, 'C2.2.4R', 'Rédaction ou mise à jour de la documentation technique et utilisateur d\'une solution d\'infrastructure'),
(31, 8, 'C2.2.5R', 'Test d\'intégration et d\'acceptation d\'une solution d\'infrastructure'),
(32, 8, 'C2.2.6R', 'Déploiement d\'une solution d\'infrastructure'),
(33, 9, 'C2.3.1R', 'Administration sur site et à distance des éléments d\'une infrastructure'),
(34, 9, 'C2.3.2R', 'Automatisation des tâches d\'administration'),
(35, 9, 'C2.3.3R', 'Gestion des indicateurs et des fichiers d\'activité des éléments d\'une infrastructure'),
(36, 9, 'C2.3.4R', 'Identification, qualification, évaluation et réaction face à un incident ou à un problème'),
(37, 9, 'C2.3.5R', 'Évaluation, maintien et amélioration de la qualité d\'un service'),
(38, 10, 'C2.1.1D', 'Analyse d\'un besoin exprimé et de son contexte juridique'),
(39, 10, 'C2.1.2D', 'Participation à la conception de l\'architecture d\'une solution applicative'),
(40, 10, 'C2.1.3D', 'Modélisation d\'une solution applicative'),
(41, 10, 'C2.1.4D', 'Exploitation des ressources du cadre applicatif(framework)'),
(42, 10, 'C2.1.5D', 'Identification, développement, utilisation ou adaptation de composants logiciels'),
(43, 10, 'C2.1.6D', 'Exploitation des technologies Web et mobile pour mettre en œuvre les échanges entre applications'),
(44, 10, 'C2.1.7D', 'Utilisation de composants d\'accès aux données'),
(45, 10, 'C2.1.8D', 'Intégration continue des versions d\'une solution applicative'),
(46, 10, 'C2.1.9D', 'Réalisation des tests nécessaires à la validation ou à la mise en production d\'éléments adaptés ou développés'),
(47, 10, 'C2.1.10D', 'Rédaction des documentations technique et d\'utilisation d\'une solution applicative'),
(48, 10, 'C2.1.11D', 'Exploitation des fonctionnalités d\'un environnement de développement et de tests'),
(49, 11, 'C2.2.1D', 'Évaluation de la qualité d\'une solution applicative'),
(50, 11, 'C2.2.2D', 'Recueil, analyse et mise à jour d\'informations sur une version d\'une solution applicative'),
(51, 11, 'C2.2.3D', 'Analyse et correction d\'un dysfonctionnement'),
(52, 11, 'C2.2.4D', 'Mise à jour de documentations technique et d\'utilisation d\'une solution applicative'),
(53, 11, 'C2.2.5D', 'Élaboration et réalisation de tests des éléments mis à jour'),
(54, 12, 'C2.3.1D', 'Exploitation de données à l\'aide d\'un langage de requêtes'),
(55, 12, 'C2.3.2D', 'Développement de fonctionnalités applicatives au sein d\'un SGBD'),
(56, 12, 'C2.3.3D', 'Conception ou adaptation d\'une base de données'),
(57, 12, 'C2.3.4D', 'Administration et déploiement d\'une base de données'),
(58, 13, 'C3.1.1', 'Recensement des traitements sur les données à caractère personnel au sein de l\'organisation'),
(59, 13, 'C3.1.2', 'Identification des risques liés à la collecte, au traitement, au stockage et à la diffusion des données à caractère personne'),
(60, 13, 'C3.1.3', 'Application de la réglementation en matière de collecte, de traitement et de conservation des données à caractère personnel'),
(61, 13, 'C3.1.4', 'Sensibilisation des utilisateurs à la protection des données à caractère personnel '),
(62, 14, 'C3.2.1', 'Protection de l\'identité numérique d\'une organisation'),
(63, 14, 'C3.2.2', 'Déploiement de moyens appropriés de preuve électronique'),
(64, 15, 'C3.3.1', 'Information des utilisateurs sur les risques associés à l\'utilisation d\'une ressource numérique et promotion des bons usages à adopter'),
(65, 15, 'C3.3.2', 'Identification des menaces et mise en œuvre des défenses appropriées'),
(66, 15, 'C3.3.3', 'Gestion des accès et des privilèges appropriés'),
(67, 15, 'C3.3.4', 'Vérification de l\'efficacité de la protection'),
(68, 16, 'C3.4.1', 'Caractérisation des risques liés à l\'utilisation malveillante d\'un service informatique'),
(69, 16, 'C3.4.2', 'Recensement des conséquences d\'une perte de disponibilité, d\'intégrité ou de confidentialité'),
(70, 16, 'C3.4.3', 'Identification des obligations légales qui s\'imposent en matière d\'archivage et de protection des données de l\'organisation'),
(71, 16, 'C3.4.4', 'Organisation de la collecte et de la conservation de la preuve électronique'),
(72, 16, 'C3.4.5', 'Application des procédures garantissant le respect des obligations légales'),
(73, 17, 'C3.5.1R', 'Vérification des éléments contribuant à la sûreté d\'une infrastructure informatique'),
(74, 17, 'C3.5.2R', 'Prise en compte de la sécurité dans un projet de mise en œuvre d\'une solution dinfrastructure'),
(75, 17, 'C3.5.3R', 'Mise en œuvre et vérification de la conformité d\'une infrastructure à un référentiel, une norme ou un standard participant à la sécurité'),
(76, 17, 'C3.5.4R', 'Prévention des attaques'),
(77, 17, 'C3.5.5R', 'Détection des actions malveillantes'),
(78, 17, 'C3.5.6R', 'Analyse d\'incidents de sécurité, proposition et mise en œuvrede contre-mesures'),
(79, 18, 'C3.5.1D', 'Vérification des éléments contribuant à la qualité d\'un développement informatique'),
(80, 18, 'C3.5.2D', 'Prise en compte de la sécurité dans un projet de développement d\'une solution applicative'),
(81, 18, 'C3.5.3D', 'Mise en œuvre et vérification de la conformité d\'une solution applicative et de son développement à un référentiel, une norme ou un standard de sécurité'),
(82, 18, 'C3.5.4D', 'Prévention des attaques'),
(83, 18, 'C3.5.5D', 'Analyse des connexions (logs)'),
(84, 18, 'C3.5.6D', 'Analyse d\'incidents de sécurité, proposition et mise en œuvre de contre-mesures');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210519150430', '2021-05-19 15:04:52', 465),
('DoctrineMigrations\\Version20210519163823', '2021-05-19 16:38:35', 72),
('DoctrineMigrations\\Version20210520115935', '2021-05-20 11:59:51', 538),
('DoctrineMigrations\\Version20210520130535', '2021-05-20 13:05:40', 73),
('DoctrineMigrations\\Version20210521161236', '2021-05-21 16:12:45', 322),
('DoctrineMigrations\\Version20210521161736', '2021-05-21 16:17:41', 426),
('DoctrineMigrations\\Version20210521163108', '2021-05-21 16:31:16', 399),
('DoctrineMigrations\\Version20210522113230', '2021-05-22 11:32:41', 192),
('DoctrineMigrations\\Version20210522114911', '2021-05-22 11:49:19', 172),
('DoctrineMigrations\\Version20210522130121', '2021-05-22 13:01:26', 145),
('DoctrineMigrations\\Version20210525172058', '2021-05-25 17:21:18', 147),
('DoctrineMigrations\\Version20210525194327', '2021-05-25 19:43:41', 1537),
('DoctrineMigrations\\Version20210525200943', '2021-05-25 20:09:50', 225),
('DoctrineMigrations\\Version20210528133401', '2021-05-28 13:34:43', 296),
('DoctrineMigrations\\Version20210602204005', '2021-06-02 20:40:13', 319),
('DoctrineMigrations\\Version20210602210138', '2021-06-02 21:01:50', 256),
('DoctrineMigrations\\Version20210603112735', '2021-06-03 11:27:40', 225),
('DoctrineMigrations\\Version20210603121008', '2021-06-03 12:10:15', 142),
('DoctrineMigrations\\Version20210603122113', '2021-06-03 12:22:50', 202),
('DoctrineMigrations\\Version20210603122302', '2021-06-03 12:23:12', 138),
('DoctrineMigrations\\Version20210603134647', '2021-06-03 13:46:56', 144),
('DoctrineMigrations\\Version20210909114252', '2021-09-09 11:43:19', 331),
('DoctrineMigrations\\Version20210913121428', '2021-09-13 12:14:38', 204),
('DoctrineMigrations\\Version20210916133814', '2021-09-16 13:40:21', 247),
('DoctrineMigrations\\Version20210916141406', '2021-09-16 14:14:13', 351),
('DoctrineMigrations\\Version20210916144734', '2021-09-16 14:47:45', 148),
('DoctrineMigrations\\Version20210916162816', '2021-09-16 16:28:27', 191),
('DoctrineMigrations\\Version20210922090949', '2021-09-22 09:10:03', 167);

-- --------------------------------------------------------

--
-- Structure de la table `domaine_tache`
--

DROP TABLE IF EXISTS `domaine_tache`;
CREATE TABLE IF NOT EXISTS `domaine_tache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domaine_tache`
--

INSERT INTO `domaine_tache` (`id`, `libelle`) VALUES
(1, 'Administration'),
(2, 'Analyse du besoin'),
(3, 'Auto-formation, suivre une formation'),
(4, 'Automatisation de t&acirc;che'),
(5, 'Base de données'),
(6, 'Configuration'),
(7, 'Déploiement'),
(8, 'Développement'),
(9, 'Documentation'),
(10, 'Exploitation'),
(11, 'Formation utilisateurs'),
(12, 'Gestion de parc'),
(13, 'Gestion de projet'),
(14, 'Help-Desk / Support'),
(15, 'Installation'),
(16, 'Interface'),
(17, 'Inventaire'),
(18, 'Mise au point'),
(19, 'Matériel'),
(20, 'Migration'),
(21, 'Maintenance'),
(22, 'Modélisation'),
(23, 'Observation'),
(24, 'Planification '),
(25, 'Recherche d\'informations'),
(26, 'Réunion, concertation, conférence'),
(27, 'Sauvegarde, restauration'),
(28, 'Sécurisation'),
(29, 'Tests, démarche de tests'),
(30, 'Gestion des utilisateurs'),
(31, 'Validation');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matiere_id` int(11) DEFAULT NULL,
  `niveau_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_81A72FA1F46CD258` (`matiere_id`),
  KEY `IDX_81A72FA1B3E9C81` (`niveau_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `nom`, `prenom`, `matiere_id`, `niveau_id`) VALUES
(7, 'ANNOUCHE', 'Zakina', 1, 2),
(8, 'GUERINET', 'Serge', 1, 3),
(9, 'CATROS', 'Anne', 2, 3),
(10, 'DUPONT', 'Thomasss', 2, 3),
(11, 'BLIMER', 'marie', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_id` int(11) DEFAULT NULL,
  `niveau_id` int(11) DEFAULT NULL,
  `specialite_id` int(11) DEFAULT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naiss` date DEFAULT NULL,
  `mobile` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_rue` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rue` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copos` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_717E22E3139DF194` (`promotion_id`),
  KEY `IDX_717E22E3B3E9C81` (`niveau_id`),
  KEY `IDX_717E22E32195E0F0` (`specialite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `promotion_id`, `niveau_id`, `specialite_id`, `nom`, `prenom`, `date_naiss`, `mobile`, `sexe`, `num_rue`, `rue`, `copos`, `ville`, `chemin_photo`) VALUES
(53, 1, 1, 2, 'ANNOUCHE', 'Zakina', '1995-07-21', NULL, NULL, NULL, 'rue des lilas', '14123', 'IFS', NULL),
(54, 1, 1, 1, 'CAUVIN', 'Nayah', '1992-09-05', NULL, NULL, NULL, 'impasse du Clos Chaumont', '14123', 'IFS', NULL),
(64, 1, 1, 1, 'ROSTAND', 'Zakina', '2021-05-20', NULL, NULL, NULL, 'de rostand', NULL, NULL, NULL),
(65, 1, 1, 1, 'SPAMMY', 'Zakina', '2021-06-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 1, 1, 1, 'GUERINET', 'Serge', '1968-06-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 1, 1, 1, 'DULONG', 'Hijab', '2021-06-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 1, 1, 1, 'DEBIL', 'Lutr', '2021-07-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

DROP TABLE IF EXISTS `jour`;
CREATE TABLE IF NOT EXISTS `jour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jour`
--

INSERT INTO `jour` (`id`, `code`, `nom`) VALUES
(1, 'Lu', 'Lundi'),
(2, 'Ma', 'Mardi'),
(3, 'Me', 'Mercredi'),
(4, 'Je', 'Jeudi'),
(5, 'Ve', 'Vendredi'),
(6, 'Sa', 'Samedi');

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`id`, `libelle`) VALUES
(1, 'Centre de formation'),
(2, 'Organisation');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `code`, `libelle`) VALUES
(1, 'MTI', 'Méthodes et techniques informatiques'),
(2, 'CEJM', 'Culture économique, juridique et managériale'),
(3, 'JUR', 'Juridique'),
(4, 'ANG', 'Anglais'),
(5, 'MAT', 'Mathématiques'),
(6, 'EFR', 'Culture Générale et expression');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_long` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`, `nom_long`) VALUES
(1, 'SIO1', '1ère année'),
(2, 'SIO2', '2ème année'),
(3, 'NONE', '1ère année et 2ème année');

-- --------------------------------------------------------

--
-- Structure de la table `niveau_rp`
--

DROP TABLE IF EXISTS `niveau_rp`;
CREATE TABLE IF NOT EXISTS `niveau_rp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `niveau_rp`
--

INSERT INTO `niveau_rp` (`id`, `libelle`) VALUES
(1, 'Observé'),
(2, 'Mis en oeuvre'),
(3, 'Pratiqué'),
(4, 'Maîtrisé'),
(5, 'Expert');

-- --------------------------------------------------------

--
-- Structure de la table `production`
--

DROP TABLE IF EXISTS `production`;
CREATE TABLE IF NOT EXISTS `production` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rp_id` int(11) DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D3EDB1E0B70FF80C` (`rp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `production`
--

INSERT INTO `production` (`id`, `rp_id`, `designation`, `url`) VALUES
(1, 12, 'prod real 12', 'url à définir'),
(2, 12, 'production 2 rp 12', 'url production 2 rp 122'),
(3, 12, 'production 3 rp 12', 'url production 3 rp 12v'),
(4, 16, 'le lien vers une prod', 'url vers une prod'),
(5, 13, 'drrrr', 'url prod');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annee` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `annee`, `statut`) VALUES
(1, '2020-2022', 'AC'),
(2, '2021-2023', 'AC');

-- --------------------------------------------------------

--
-- Structure de la table `reset_password_request`
--

DROP TABLE IF EXISTS `reset_password_request`;
CREATE TABLE IF NOT EXISTS `reset_password_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hashed_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_7CE748AA76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(1, 42, 'reaX7Z7DBsYNc0l6tZdB', 'vEDjEbMVRjCiCy9zFhLY0kXDMwsc3vVGAefLn/VFkJU=', '2021-08-19 14:29:21', '2021-08-19 15:29:21'),
(2, 61, 'Fyc1TvNG5yNAYm4pk7Cg', 'IQXezCP10LZSvDABlnSYYEY4/r7Shb8QRRV/qMis1YQ=', '2021-08-21 15:39:52', '2021-08-21 16:39:52'),
(3, 68, 'dBobScV22DAQk0XzILL5', 'nsxNVKd3HOaZ7KxCegAxThb3GL87jNdP/jjbhMC5Ro0=', '2021-08-21 16:50:43', '2021-08-21 17:50:43');

-- --------------------------------------------------------

--
-- Structure de la table `rp`
--

DROP TABLE IF EXISTS `rp`;
CREATE TABLE IF NOT EXISTS `rp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localisation_id` int(11) DEFAULT NULL,
  `statut_id` int(11) DEFAULT NULL,
  `source_id` int(11) NOT NULL,
  `etudiant_id` int(11) DEFAULT NULL,
  `enseignant_id` int(11) DEFAULT NULL,
  `cadre_id` int(11) DEFAULT NULL,
  `niveau_rp_id` int(11) DEFAULT NULL,
  `libcourt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `besoin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `environnement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_modif` date DEFAULT NULL,
  `archivage` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD578B7C68BE09C` (`localisation_id`),
  KEY `IDX_CD578B7F6203804` (`statut_id`),
  KEY `IDX_CD578B7953C1C61` (`source_id`),
  KEY `IDX_CD578B7DDEAB1A3` (`etudiant_id`),
  KEY `IDX_CD578B7E455FCC0` (`enseignant_id`),
  KEY `IDX_CD578B79308DA90` (`cadre_id`),
  KEY `IDX_CD578B752680A6A` (`niveau_rp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rp`
--

INSERT INTO `rp` (`id`, `localisation_id`, `statut_id`, `source_id`, `etudiant_id`, `enseignant_id`, `cadre_id`, `niveau_rp_id`, `libcourt`, `besoin`, `date_debut`, `date_fin`, `environnement`, `moyen`, `date_modif`, `archivage`) VALUES
(12, 1, 2, 1, 53, 8, 1, 1, 'analyse besoin client', 'aaabbbcx', '2021-04-28', '2021-06-02', 'aaa xcxc', 'aaa', '2021-06-18', 1),
(13, 1, 3, 1, 53, NULL, 1, 1, 'real zak 2', 'aaa', '2021-04-28', '2021-06-02', 'aaa', 'aaa', '2021-05-31', 0),
(14, 1, 1, 1, 53, NULL, 1, 1, 'rp 3 zak', 'cdvx', '2021-05-27', '2021-05-28', 'vxv', 'cv', '2021-05-31', 0),
(16, 1, 1, 1, 54, NULL, 1, 1, 'etude comparative hébergeurs', 'héberger le site client', '2021-06-16', '2021-06-18', 'windows', 'pc', '2021-06-18', 0);

-- --------------------------------------------------------

--
-- Structure de la table `rpactivite`
--

DROP TABLE IF EXISTS `rpactivite`;
CREATE TABLE IF NOT EXISTS `rpactivite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activite_id` int(11) NOT NULL,
  `rp_id` int(11) NOT NULL,
  `commentaire` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_3CC2747A9B0F88B1` (`activite_id`),
  KEY `IDX_3CC2747AB70FF80C` (`rp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rpactivite`
--

INSERT INTO `rpactivite` (`id`, `activite_id`, `rp_id`, `commentaire`) VALUES
(30, 4, 14, 'projet scrum'),
(31, 7, 14, 'mise en place des postes'),
(32, 3, 13, 'site webc'),
(33, 3, 12, 'commentaire activite'),
(35, 4, 16, 'travail avec un binome et post-it'),
(36, 2, 16, 'production tyu'),
(38, 3, 12, 'activte b13'),
(39, 1, 13, 'descrip activi B11');

-- --------------------------------------------------------

--
-- Structure de la table `semaine_stage`
--

DROP TABLE IF EXISTS `semaine_stage`;
CREATE TABLE IF NOT EXISTS `semaine_stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stage_id` int(11) NOT NULL,
  `num_semaine` int(11) NOT NULL,
  `apprentissage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_877C1C32298D193` (`stage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `semaine_stage`
--

INSERT INTO `semaine_stage` (`id`, `stage_id`, `num_semaine`, `apprentissage`, `bilan`) VALUES
(1, 1, 1, 'prise en main du fk symfo', 'trop bien');

-- --------------------------------------------------------

--
-- Structure de la table `source`
--

DROP TABLE IF EXISTS `source`;
CREATE TABLE IF NOT EXISTS `source` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `source`
--

INSERT INTO `source` (`id`, `libelle`) VALUES
(1, 'B1'),
(2, 'B2'),
(3, 'B3'),
(4, 'ADP'),
(5, 'STAGE1'),
(6, 'STAGE2');

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

DROP TABLE IF EXISTS `specialite`;
CREATE TABLE IF NOT EXISTS `specialite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialite`
--

INSERT INTO `specialite` (`id`, `code`, `nom`) VALUES
(1, 'A', 'SISR'),
(2, 'B', 'SLAM'),
(3, 'B', 'NONE');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

DROP TABLE IF EXISTS `stage`;
CREATE TABLE IF NOT EXISTS `stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etudiant_id` int(11) NOT NULL,
  `enseignant_id` int(11) DEFAULT NULL,
  `nom_entreprise` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siret` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_naf` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_rue` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copos` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_tuteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_tuteur` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_tuteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `duree` int(11) NOT NULL,
  `hor_lun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_mar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_mer` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_jeu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_ven` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_sam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rue` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C27C9369DDEAB1A3` (`etudiant_id`),
  KEY `IDX_C27C9369E455FCC0` (`enseignant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`id`, `etudiant_id`, `enseignant_id`, `nom_entreprise`, `siret`, `code_naf`, `num_rue`, `copos`, `ville`, `nom_tuteur`, `tel_tuteur`, `mail_tuteur`, `lieu`, `sujet`, `service`, `date_debut`, `date_fin`, `duree`, `hor_lun`, `hor_mar`, `hor_mer`, `hor_jeu`, `hor_ven`, `hor_sam`, `rue`) VALUES
(1, 53, 7, 'Agrial', '12222', '1111Z', '12', 'qsdd', 'dsqdqs', 'Durand Benoit', '0101010101', 'bdurand@agrial.fr', 'Caen', 'evolution application de gestion des vaches', NULL, '2021-09-05', '2021-09-29', 5, '12-13', NULL, NULL, NULL, NULL, NULL, 'qsd'),
(2, 53, 7, 'Cardif', 'dqsd', '1234Z', '45', '14100', 'hjgjhghj', 'Thibaul', '020202020', 'jjj@gmail.com', 'Paris', 'dev', 'Etudes', '2021-09-13', '2021-09-14', 6, '1', '1', '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`id`, `libelle`) VALUES
(1, 'Création'),
(2, 'En attente'),
(3, 'Commentée'),
(4, 'Validée');

-- --------------------------------------------------------

--
-- Structure de la table `tache_semaine`
--

DROP TABLE IF EXISTS `tache_semaine`;
CREATE TABLE IF NOT EXISTS `tache_semaine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domaine_tache_id` int(11) NOT NULL,
  `jour_id` int(11) NOT NULL,
  `semaine_stage_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B11BB55F6542D8E6` (`domaine_tache_id`),
  KEY `IDX_B11BB55F220C6AD0` (`jour_id`),
  KEY `IDX_B11BB55FE928EFB1` (`semaine_stage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tache_semaine`
--

INSERT INTO `tache_semaine` (`id`, `domaine_tache_id`, `jour_id`, `semaine_stage_id`, `description`, `duree`) VALUES
(1, 1, 1, 1, 'installation du fk', 0.5),
(2, 3, 1, 1, 'installation des composant', 0.5),
(3, 8, 1, 1, 'ajout de composer', 0.25),
(4, 8, 2, 1, 'tests des controllers et entites', 0.5),
(5, 2, 3, 1, 'étude du cahier des charges', 0.4),
(10, 8, 3, 1, 'dev des entités et migration en bdd', 0.3),
(11, 8, 2, 1, 'premieres vues twig', 0.25);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etudiant_id` int(11) DEFAULT NULL,
  `enseignant_id` int(11) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `statut` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  UNIQUE KEY `UNIQ_8D93D649DDEAB1A3` (`etudiant_id`),
  UNIQUE KEY `UNIQ_8D93D649E455FCC0` (`enseignant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `etudiant_id`, `enseignant_id`, `token`, `created_at`, `statut`) VALUES
(42, 'zakina.annouche@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$TmwvaXIuNU1sQ2xRQW50MA$J5op76KZTt6yGe935emLQfyZMKV4KIAq9pmdA7pZ1Uc', 53, NULL, '-XLGgnWrfDJ8j53To1T9a3URkHgpRS4X9MS05ctcX-0', '2021-09-10 00:00:00', 'AC'),
(43, 'nayah.cauvin@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$N2lrQzUzemxKMi56U0Ivdw$/f14CBtnNddIXrZt92q6onq56RN78J4tpAdasC6CPnc', 54, NULL, 'DFxjXHDzmOvsKPLxmaM-lViZVhczDboCyxJ4l0nWgHs', '2021-09-12 17:10:36', 'AC'),
(53, 'zakina.rostand@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$dGJ6and2cTUzSlJUcmZDZg$uJdI4JHTIQbWgBuynhn+VR1jWZOxL1uQSyflFOgKzkk', 64, NULL, 'twhiI7YrLFGZPB-gaVvTTi4XI3Lwzpg73XOtT4LmJZs', NULL, 'AC'),
(55, 'adminOld@rostand.fr', '[\"ROLE_ADMIN\"]', '$argon2i$v=19$m=65536,t=4,p=1$TllMN1ltcjVyOVh5cFFRVQ$N9rJHnsHuEOIBxAc3H6U2dbC2nK71Qc70qOT7fRE48Y', NULL, NULL, NULL, NULL, 'AC'),
(57, 'zakina.annouche@ac-normandie.fr', '[\"ROLE_ENSEIGNANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$ODRIc0FzYmRRdm02WFlOLw$9yQFgPIq9ntrUwUNWE4CUujfkEHTg8Sa9EPNCWwYGJs', NULL, 7, NULL, NULL, 'AC'),
(58, 'serge.guerinet@adresse.com', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$UDJjRWlQNXkxYVNjNmtOMw$kb2aydJWRH5rmPokRtbtQ9iQeMe03oN9N6q7HY2/ulg', NULL, 8, NULL, NULL, 'AC'),
(59, 'anne.catros@adresse.com', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$bGFCS0pRWGxXb3doRHFsZQ$C4TABUz9FJQGJznOB94HILzwdhyC1gYpcYewqvTodac', NULL, 9, NULL, NULL, 'AC'),
(60, 'thomas.dupont@adresse.com', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$STd0amlXeUltODVHWTZjSg$QadRZptnB44ibIWZ1DCRf1fRhYMtKjsVRE2QoxFjoi0', NULL, 10, NULL, NULL, 'AC'),
(61, 'zakina.spammy@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$3j2xyoKHtPxaA4o6YKlBwQ$PcHeDwr4pYN16UFXoucp3b2s8ySKWbPyhMRrc5EBC0A', 65, NULL, '2Q4g5-dT1v23D3XSHDM9PsGVJFk6WXGYQ8BKdwXcaK4', NULL, 'AR'),
(64, 'serge.guerinet@ac-normandie.fr', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$JhluzhWUMBf089mBKbk8Tw$NAyhSWcOtrWmN1HLslR81WnRavoWIIjtnZXOY2jCTkI', 68, NULL, 'e-kesYzKcObUXdXycxdCBewehhCzWiRbMFs9AXD_DQw', NULL, 'AC'),
(66, 'hojob31557@bbsaili.com', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$N2xBSnBsUkZsaTVWS2I0QQ$ygtJt5CYs5OL+71hXBSsQHwdx/18HECE8+e1QmUkEeo', 70, NULL, NULL, '2021-06-23 11:23:26', 'AR'),
(67, 'marie.blimer@rostand.fr', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$MmV6OWlXZUhiVFRtQ3ZEZw$g/eId2PsAXXrY78DiCNXJ06tsCnl6JIEzoYe6wcbdtk', NULL, 11, NULL, NULL, 'AC'),
(68, 'nomportequiu', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$VzBGenc0cjVoS3AuTlQ4MA$V/KwNLdahuV5fBlGyLUhrNRcrlD2wUjMC+7r9dDmIBs', NULL, NULL, 'q8VknP5Ep2QN1u9WvSU2bW_fitDLiBYk0DO6iyymaHk', '2021-08-21 15:46:53', 'AR'),
(69, 'gihon18926@kibwot.com', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$QlFZd1FoZXdJTHRRY1ZvTQ$ijitt278ygry5IT5x8r+UIvRE76UMKWOEocWJtD88yE', 72, NULL, NULL, '2021-08-21 17:24:10', 'AC'),
(72, 'admin@rostand.fr', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$cWpjcXc1NkVCa29sZGtWTw$sWGMdvzujruwR975yMtIMDRRUQ1d/qUoU4jqdRiq9Gc', NULL, NULL, NULL, NULL, 'AC');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `FK_B87555155582E9C0` FOREIGN KEY (`bloc_id`) REFERENCES `bloc` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BCB70FF80C` FOREIGN KEY (`rp_id`) REFERENCES `rp` (`id`),
  ADD CONSTRAINT `FK_67F068BCE455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `competence`
--
ALTER TABLE `competence`
  ADD CONSTRAINT `FK_94D4687F9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `FK_81A72FA1B3E9C81` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`),
  ADD CONSTRAINT `FK_81A72FA1F46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_717E22E3139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`),
  ADD CONSTRAINT `FK_717E22E32195E0F0` FOREIGN KEY (`specialite_id`) REFERENCES `specialite` (`id`),
  ADD CONSTRAINT `FK_717E22E3B3E9C81` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`);

--
-- Contraintes pour la table `production`
--
ALTER TABLE `production`
  ADD CONSTRAINT `FK_D3EDB1E0B70FF80C` FOREIGN KEY (`rp_id`) REFERENCES `rp` (`id`);

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `rp`
--
ALTER TABLE `rp`
  ADD CONSTRAINT `FK_CD578B752680A6A` FOREIGN KEY (`niveau_rp_id`) REFERENCES `niveau_rp` (`id`),
  ADD CONSTRAINT `FK_CD578B79308DA90` FOREIGN KEY (`cadre_id`) REFERENCES `cadre` (`id`),
  ADD CONSTRAINT `FK_CD578B7953C1C61` FOREIGN KEY (`source_id`) REFERENCES `source` (`id`),
  ADD CONSTRAINT `FK_CD578B7C68BE09C` FOREIGN KEY (`localisation_id`) REFERENCES `localisation` (`id`),
  ADD CONSTRAINT `FK_CD578B7DDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`),
  ADD CONSTRAINT `FK_CD578B7E455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`),
  ADD CONSTRAINT `FK_CD578B7F6203804` FOREIGN KEY (`statut_id`) REFERENCES `statut` (`id`);

--
-- Contraintes pour la table `rpactivite`
--
ALTER TABLE `rpactivite`
  ADD CONSTRAINT `FK_3CC2747A9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`),
  ADD CONSTRAINT `FK_3CC2747AB70FF80C` FOREIGN KEY (`rp_id`) REFERENCES `rp` (`id`);

--
-- Contraintes pour la table `semaine_stage`
--
ALTER TABLE `semaine_stage`
  ADD CONSTRAINT `FK_877C1C32298D193` FOREIGN KEY (`stage_id`) REFERENCES `stage` (`id`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK_C27C9369DDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`),
  ADD CONSTRAINT `FK_C27C9369E455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`);

--
-- Contraintes pour la table `tache_semaine`
--
ALTER TABLE `tache_semaine`
  ADD CONSTRAINT `FK_B11BB55F220C6AD0` FOREIGN KEY (`jour_id`) REFERENCES `jour` (`id`),
  ADD CONSTRAINT `FK_B11BB55F6542D8E6` FOREIGN KEY (`domaine_tache_id`) REFERENCES `domaine_tache` (`id`),
  ADD CONSTRAINT `FK_B11BB55FE928EFB1` FOREIGN KEY (`semaine_stage_id`) REFERENCES `semaine_stage` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649DDEAB1A3` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`),
  ADD CONSTRAINT `FK_8D93D649E455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
