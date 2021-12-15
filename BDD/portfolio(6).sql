-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 déc. 2021 à 08:30
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('DoctrineMigrations\\Version20211213153420', '2021-12-13 15:34:24', 47696),
('DoctrineMigrations\\Version20211213153936', '2021-12-13 15:39:39', 1276),
('DoctrineMigrations\\Version20211215080222', '2021-12-15 08:02:27', 4291),
('DoctrineMigrations\\Version20211215082043', '2021-12-15 08:20:48', 2691),
('DoctrineMigrations\\Version20211215082223', '2021-12-15 08:22:27', 188),
('DoctrineMigrations\\Version20211215082654', '2021-12-15 08:26:59', 1912),
('DoctrineMigrations\\Version20211215082746', '2021-12-15 08:27:52', 278),
('DoctrineMigrations\\Version20211215082933', '2021-12-15 08:29:39', 1384);

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
  `matiere_id` int(11) DEFAULT NULL,
  `niveau_id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_81A72FA1F46CD258` (`matiere_id`),
  KEY `IDX_81A72FA1B3E9C81` (`niveau_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `matiere_id`, `niveau_id`, `nom`, `prenom`) VALUES
(7, 1, 2, 'ANNOUCHE', 'Zakina'),
(8, 1, 3, 'GUERINET', 'Serge'),
(9, 2, 3, 'CATROS', 'Anne'),
(10, 2, 3, 'DUPONT', 'Thomasss'),
(11, 4, 1, 'BLIMER', 'marie');

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
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(72, 1, 1, 1, 'DEBIL', 'Lutr', '2021-07-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 2, 1, 1, 'Renault', 'Victor', '2002-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 2, 1, 1, 'Rousseau', 'Florian', '2002-04-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 2, 1, 1, 'Depoilly', 'Antonin', '2002-04-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 2, 1, 1, 'Boulin', 'Loan', '2002-05-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupe_type_id` int(11) DEFAULT NULL,
  `libelle` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projet_def_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4B98C2132B6BDD` (`groupe_type_id`),
  KEY `IDX_4B98C21D6911079` (`projet_def_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `groupe_type_id`, `libelle`, `projet_def_id`) VALUES
(1, 1, 'SIO 2020-2022', NULL),
(2, 1, 'SIO 2021-2023', NULL),
(3, 2, 'TD sur Javascript', NULL),
(4, 1, 'SLAM 2020-2022', NULL),
(5, 1, 'SISR 2020-2022', NULL),
(6, 1, 'SLAM 2021-2023', NULL),
(7, 1, 'SISR 2021-2023', NULL),
(8, 2, 'EQUIDA FLORIAN ANTONIN', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `groupe_type`
--

DROP TABLE IF EXISTS `groupe_type`;
CREATE TABLE IF NOT EXISTS `groupe_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe_type`
--

INSERT INTO `groupe_type` (`id`, `libelle`) VALUES
(1, 'Section'),
(2, 'TD');

-- --------------------------------------------------------

--
-- Structure de la table `groupe_user`
--

DROP TABLE IF EXISTS `groupe_user`;
CREATE TABLE IF NOT EXISTS `groupe_user` (
  `groupe_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`groupe_id`,`user_id`),
  KEY `IDX_257BA9FE7A45358C` (`groupe_id`),
  KEY `IDX_257BA9FEA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groupe_user`
--

INSERT INTO `groupe_user` (`groupe_id`, `user_id`) VALUES
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(4, 74),
(4, 75),
(5, 73),
(5, 76);

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
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_time_post` datetime NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5A8A6C8D714819A0` (`type_id_id`),
  KEY `IDX_5A8A6C8DA76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `post_groupe`
--

DROP TABLE IF EXISTS `post_groupe`;
CREATE TABLE IF NOT EXISTS `post_groupe` (
  `post_id` int(11) NOT NULL,
  `groupe_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`,`groupe_id`),
  KEY `IDX_349B68444B89032C` (`post_id`),
  KEY `IDX_349B68447A45358C` (`groupe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet_def`
--

DROP TABLE IF EXISTS `projet_def`;
CREATE TABLE IF NOT EXISTS `projet_def` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groupe_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D91B58607A45358C` (`groupe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projet_def`
--

INSERT INTO `projet_def` (`id`, `date_debut`, `date_fin`, `libelle`, `groupe_id`) VALUES
(1, '2021-11-09', '2021-11-25', 'PROJET EQUIDA', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `projet_def_enseignant`
--

DROP TABLE IF EXISTS `projet_def_enseignant`;
CREATE TABLE IF NOT EXISTS `projet_def_enseignant` (
  `projet_def_id` int(11) NOT NULL,
  `enseignant_id` int(11) NOT NULL,
  PRIMARY KEY (`projet_def_id`,`enseignant_id`),
  KEY `IDX_2F3C3EC6D6911079` (`projet_def_id`),
  KEY `IDX_2F3C3EC6E455FCC0` (`enseignant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet_def_matiere`
--

DROP TABLE IF EXISTS `projet_def_matiere`;
CREATE TABLE IF NOT EXISTS `projet_def_matiere` (
  `projet_def_id` int(11) NOT NULL,
  `matiere_id` int(11) NOT NULL,
  PRIMARY KEY (`projet_def_id`,`matiere_id`),
  KEY `IDX_C9795E2CD6911079` (`projet_def_id`),
  KEY `IDX_C9795E2CF46CD258` (`matiere_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet_equipe`
--

DROP TABLE IF EXISTS `projet_equipe`;
CREATE TABLE IF NOT EXISTS `projet_equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `groupe_id` int(11) DEFAULT NULL,
  `projet_def_id` int(11) DEFAULT NULL,
  `libelle` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6E00A437A45358C` (`groupe_id`),
  KEY `IDX_6E00A43D6911079` (`projet_def_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projet_equipe_ressource`
--

DROP TABLE IF EXISTS `projet_equipe_ressource`;
CREATE TABLE IF NOT EXISTS `projet_equipe_ressource` (
  `projet_equipe_id` int(11) NOT NULL,
  `ressource_id` int(11) NOT NULL,
  PRIMARY KEY (`projet_equipe_id`,`ressource_id`),
  KEY `IDX_DEA0C23F4E78FC5D` (`projet_equipe_id`),
  KEY `IDX_DEA0C23FFC6CD52A` (`ressource_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
CREATE TABLE IF NOT EXISTS `ressource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`id`, `nom`, `lien`) VALUES
(1, 'photo projet', 'https://images.unsplash.com/photo-1620325867502-221cfb5faa5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1457&q=80'),
(2, 'photo projet 2', 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'),
(3, 'outils', 'https://images.unsplash.com/photo-1452860606245-08befc0ff44b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');

-- --------------------------------------------------------

--
-- Structure de la table `ressource_groupe`
--

DROP TABLE IF EXISTS `ressource_groupe`;
CREATE TABLE IF NOT EXISTS `ressource_groupe` (
  `ressource_id` int(11) NOT NULL,
  `groupe_id` int(11) NOT NULL,
  PRIMARY KEY (`ressource_id`,`groupe_id`),
  KEY `IDX_EEF85F9CFC6CD52A` (`ressource_id`),
  KEY `IDX_EEF85F9C7A45358C` (`groupe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressource_post`
--

DROP TABLE IF EXISTS `ressource_post`;
CREATE TABLE IF NOT EXISTS `ressource_post` (
  `ressource_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`ressource_id`,`post_id`),
  KEY `IDX_AA356C04FC6CD52A` (`ressource_id`),
  KEY `IDX_AA356C044B89032C` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `cadre_id` int(11) DEFAULT NULL,
  `niveau_rp_id` int(11) DEFAULT NULL,
  `etudiant_id` int(11) DEFAULT NULL,
  `enseignant_id` int(11) DEFAULT NULL,
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
  KEY `IDX_CD578B79308DA90` (`cadre_id`),
  KEY `IDX_CD578B752680A6A` (`niveau_rp_id`),
  KEY `IDX_CD578B7DDEAB1A3` (`etudiant_id`),
  KEY `IDX_CD578B7E455FCC0` (`enseignant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 1, 1, NULL, 'trop bien');

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
  `rue` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_tuteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_tuteur` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_tuteur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `duree` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hor_lun` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_mar` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_mer` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_jeu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_ven` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hor_sam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C27C9369DDEAB1A3` (`etudiant_id`),
  KEY `IDX_C27C9369E455FCC0` (`enseignant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `stage`
--

INSERT INTO `stage` (`id`, `etudiant_id`, `enseignant_id`, `nom_entreprise`, `siret`, `code_naf`, `num_rue`, `copos`, `rue`, `ville`, `nom_tuteur`, `tel_tuteur`, `mail_tuteur`, `lieu`, `sujet`, `service`, `date_debut`, `date_fin`, `duree`, `hor_lun`, `hor_mar`, `hor_mer`, `hor_jeu`, `hor_ven`, `hor_sam`) VALUES
(1, 53, 7, 'Agrial', '12222', '1111Z', '12', 'qsdd', 'qsd', 'dsqdqs', 'Durand Benoit', '0101010101', 'bdurand@agrial.fr', 'Caen', 'evolution application de gestion des vaches', NULL, '2021-09-05', '2021-09-29', '6', '12-13', NULL, NULL, NULL, NULL, NULL),
(2, 53, 7, 'Cardif', 'dqsd', '1234Z', '45', '14100', '', 'hjgjhghj', 'Thibaul', '020202020', 'jjj@gmail.com', 'Paris', 'dev', 'Etudes', '2021-09-13', '2021-09-14', '6', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(11, 8, 2, 1, 'premieres vues twig', 0.25),
(13, 1, 1, 1, 'test', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_post`
--

DROP TABLE IF EXISTS `type_post`;
CREATE TABLE IF NOT EXISTS `type_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_post`
--

INSERT INTO `type_post` (`id`, `libelle`) VALUES
(1, 'texte'),
(2, 'sondage');

-- --------------------------------------------------------

--
-- Structure de la table `type_projet`
--

DROP TABLE IF EXISTS `type_projet`;
CREATE TABLE IF NOT EXISTS `type_projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_projet`
--

INSERT INTO `type_projet` (`id`, `libelle`) VALUES
(1, 'Développement'),
(2, 'Réseau'),
(3, 'B1'),
(4, 'B2'),
(5, 'B3'),
(6, 'ADP');

-- --------------------------------------------------------

--
-- Structure de la table `type_projet_projet_def`
--

DROP TABLE IF EXISTS `type_projet_projet_def`;
CREATE TABLE IF NOT EXISTS `type_projet_projet_def` (
  `type_projet_id` int(11) NOT NULL,
  `projet_def_id` int(11) NOT NULL,
  PRIMARY KEY (`type_projet_id`,`projet_def_id`),
  KEY `IDX_E4B7ACD1B407C362` (`type_projet_id`),
  KEY `IDX_E4B7ACD1D6911079` (`projet_def_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etudiant_id` int(11) DEFAULT NULL,
  `enseignant_id` int(11) DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `statut` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  UNIQUE KEY `UNIQ_8D93D649DDEAB1A3` (`etudiant_id`),
  UNIQUE KEY `UNIQ_8D93D649E455FCC0` (`enseignant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `etudiant_id`, `enseignant_id`, `email`, `roles`, `password`, `token`, `created_at`, `statut`) VALUES
(42, 53, NULL, 'zakina.annouche@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$TmwvaXIuNU1sQ2xRQW50MA$J5op76KZTt6yGe935emLQfyZMKV4KIAq9pmdA7pZ1Uc', '-XLGgnWrfDJ8j53To1T9a3URkHgpRS4X9MS05ctcX-0', '2021-09-10 00:00:00', 'AC'),
(43, 54, NULL, 'nayah.cauvin@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$N2lrQzUzemxKMi56U0Ivdw$/f14CBtnNddIXrZt92q6onq56RN78J4tpAdasC6CPnc', 'DFxjXHDzmOvsKPLxmaM-lViZVhczDboCyxJ4l0nWgHs', '2021-09-12 17:10:36', 'AC'),
(53, 64, NULL, 'zakina.rostand@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$T04yZXV1bHhSRjIuRTVDNA$/cQjoQstMZz3tUb3vL1bdlxXgPsdN5kv4m/iOa/b6Ek', 'twhiI7YrLFGZPB-gaVvTTi4XI3Lwzpg73XOtT4LmJZs', NULL, 'AC'),
(55, NULL, NULL, 'adminOld@rostand.fr', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$WmFxUXhMejhLOUdCdExaRg$MXVJKf5Csrt69EJO806fErrkYxp3qQxWDghLSKnweyI', NULL, NULL, 'AC'),
(57, NULL, 7, 'zakina.annouche@ac-normandie.fr', '[\"ROLE_ENSEIGNANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$ODRIc0FzYmRRdm02WFlOLw$9yQFgPIq9ntrUwUNWE4CUujfkEHTg8Sa9EPNCWwYGJs', NULL, NULL, 'AC'),
(58, NULL, 8, 'serge.guerinet@adresse.com', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$UDJjRWlQNXkxYVNjNmtOMw$kb2aydJWRH5rmPokRtbtQ9iQeMe03oN9N6q7HY2/ulg', NULL, NULL, 'AC'),
(59, NULL, 9, 'anne.catros@adresse.com', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$bGFCS0pRWGxXb3doRHFsZQ$C4TABUz9FJQGJznOB94HILzwdhyC1gYpcYewqvTodac', NULL, NULL, 'AC'),
(60, NULL, 10, 'thomas.dupont@adresse.com', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$STd0amlXeUltODVHWTZjSg$QadRZptnB44ibIWZ1DCRf1fRhYMtKjsVRE2QoxFjoi0', NULL, NULL, 'AC'),
(61, 65, NULL, 'zakina.spammy@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$3j2xyoKHtPxaA4o6YKlBwQ$PcHeDwr4pYN16UFXoucp3b2s8ySKWbPyhMRrc5EBC0A', '2Q4g5-dT1v23D3XSHDM9PsGVJFk6WXGYQ8BKdwXcaK4', NULL, 'AR'),
(64, 68, NULL, 'serge.guerinet@ac-normandie.fr', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$JhluzhWUMBf089mBKbk8Tw$NAyhSWcOtrWmN1HLslR81WnRavoWIIjtnZXOY2jCTkI', 'e-kesYzKcObUXdXycxdCBewehhCzWiRbMFs9AXD_DQw', NULL, 'AC'),
(66, 70, NULL, 'hojob31557@bbsaili.com', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$N2xBSnBsUkZsaTVWS2I0QQ$ygtJt5CYs5OL+71hXBSsQHwdx/18HECE8+e1QmUkEeo', NULL, '2021-06-23 11:23:26', 'AR'),
(67, NULL, 11, 'marie.blimer@rostand.fr', '[\"ROLE_ENSEIGNANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$MmV6OWlXZUhiVFRtQ3ZEZw$g/eId2PsAXXrY78DiCNXJ06tsCnl6JIEzoYe6wcbdtk', NULL, NULL, 'AC'),
(68, NULL, NULL, 'nomportequiu', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$VzBGenc0cjVoS3AuTlQ4MA$V/KwNLdahuV5fBlGyLUhrNRcrlD2wUjMC+7r9dDmIBs', 'q8VknP5Ep2QN1u9WvSU2bW_fitDLiBYk0DO6iyymaHk', '2021-08-21 15:46:53', 'AR'),
(69, 72, NULL, 'gihon18926@kibwot.com', '[\"ROLE_ETUDIANT\"]', '$argon2i$v=19$m=65536,t=4,p=1$QlFZd1FoZXdJTHRRY1ZvTQ$ijitt278ygry5IT5x8r+UIvRE76UMKWOEocWJtD88yE', NULL, '2021-08-21 17:24:10', 'AC'),
(72, NULL, NULL, 'admin@rostand.fr', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$cWpjcXc1NkVCa29sZGtWTw$sWGMdvzujruwR975yMtIMDRRUQ1d/qUoU4jqdRiq9Gc', NULL, NULL, 'AC'),
(73, 73, NULL, 'victorrenault87@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$WTF6dnJmUlQxejVQTjIvSQ$DtO05tExfVktb3XFzSqY9tmNJt0qK0HMRqFSnXfF2HA', NULL, '2021-11-29 12:37:45', 'AC'),
(74, 74, NULL, 'flo.rousseau14210@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$TDBHeDRuMHhQcHY3NHZvWg$W7ltaO70W7RNEBHfWf5N87XfRTzw6NzrGdIC/BOBNdE', NULL, '2021-11-29 12:38:34', 'AC'),
(75, 75, NULL, 'antonindpy@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$SmFnUm00LlBJZkRSeGpZQg$OsghZBnxVSenG9QL339dkSG9BuEmCn87CGlypZcuLIQ', NULL, '2021-11-29 12:39:12', 'AC'),
(76, 76, NULL, 'loanboulin@gmail.com', '[\"ROLE_ETUDIANT\"]', '$argon2id$v=19$m=65536,t=4,p=1$RjU3WkxQajBVQUhaU256Vg$XUk8N2yfbNf9dk/stFDr85EPloopl0U1H7OXDIw/kPg', NULL, '2021-11-29 12:39:38', 'AC');

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
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `FK_4B98C2132B6BDD` FOREIGN KEY (`groupe_type_id`) REFERENCES `groupe_type` (`id`),
  ADD CONSTRAINT `FK_4B98C21D6911079` FOREIGN KEY (`projet_def_id`) REFERENCES `projet_def` (`id`);

--
-- Contraintes pour la table `groupe_user`
--
ALTER TABLE `groupe_user`
  ADD CONSTRAINT `FK_257BA9FE7A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_257BA9FEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_5A8A6C8D714819A0` FOREIGN KEY (`type_id_id`) REFERENCES `type_post` (`id`),
  ADD CONSTRAINT `FK_5A8A6C8DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `post_groupe`
--
ALTER TABLE `post_groupe`
  ADD CONSTRAINT `FK_349B68444B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_349B68447A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `production`
--
ALTER TABLE `production`
  ADD CONSTRAINT `FK_D3EDB1E0B70FF80C` FOREIGN KEY (`rp_id`) REFERENCES `rp` (`id`);

--
-- Contraintes pour la table `projet_def`
--
ALTER TABLE `projet_def`
  ADD CONSTRAINT `FK_D91B58607A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`);

--
-- Contraintes pour la table `projet_def_enseignant`
--
ALTER TABLE `projet_def_enseignant`
  ADD CONSTRAINT `FK_2F3C3EC6D6911079` FOREIGN KEY (`projet_def_id`) REFERENCES `projet_def` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2F3C3EC6E455FCC0` FOREIGN KEY (`enseignant_id`) REFERENCES `enseignant` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `projet_def_matiere`
--
ALTER TABLE `projet_def_matiere`
  ADD CONSTRAINT `FK_C9795E2CD6911079` FOREIGN KEY (`projet_def_id`) REFERENCES `projet_def` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C9795E2CF46CD258` FOREIGN KEY (`matiere_id`) REFERENCES `matiere` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `projet_equipe`
--
ALTER TABLE `projet_equipe`
  ADD CONSTRAINT `FK_6E00A437A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `FK_6E00A43D6911079` FOREIGN KEY (`projet_def_id`) REFERENCES `projet_def` (`id`);

--
-- Contraintes pour la table `projet_equipe_ressource`
--
ALTER TABLE `projet_equipe_ressource`
  ADD CONSTRAINT `FK_DEA0C23F4E78FC5D` FOREIGN KEY (`projet_equipe_id`) REFERENCES `projet_equipe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DEA0C23FFC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `ressource_groupe`
--
ALTER TABLE `ressource_groupe`
  ADD CONSTRAINT `FK_EEF85F9C7A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_EEF85F9CFC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ressource_post`
--
ALTER TABLE `ressource_post`
  ADD CONSTRAINT `FK_AA356C044B89032C` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_AA356C04FC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`) ON DELETE CASCADE;

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
-- Contraintes pour la table `type_projet_projet_def`
--
ALTER TABLE `type_projet_projet_def`
  ADD CONSTRAINT `FK_E4B7ACD1B407C362` FOREIGN KEY (`type_projet_id`) REFERENCES `type_projet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E4B7ACD1D6911079` FOREIGN KEY (`projet_def_id`) REFERENCES `projet_def` (`id`) ON DELETE CASCADE;

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
