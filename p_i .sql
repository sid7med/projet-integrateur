-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 juin 2024 à 00:03
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `p_i`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminstrateur`
--

CREATE TABLE `adminstrateur` (
  `id` int(6) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `adminstrateur`
--

INSERT INTO `adminstrateur` (`id`, `email`, `password`) VALUES
(1, 'zeiny@gmail.com', '1');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `compte_id` int(11) NOT NULL,
  `Entrprise` varchar(50) DEFAULT NULL,
  `Etudiant` varchar(50) DEFAULT NULL,
  `proffeseur` varchar(50) DEFAULT NULL,
  `Admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `encadrant`
--

CREATE TABLE `encadrant` (
  `id` int(11) NOT NULL,
  `id_professeur` int(11) DEFAULT NULL,
  `id_pi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `encadrant`
--

INSERT INTO `encadrant` (`id`, `id_professeur`, `id_pi`) VALUES
(7, 4, 23),
(8, 3, 29),
(9, 3, 30),
(10, 3, 31),
(11, 4, 31),
(12, 4, 32);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `Nom_enterprise` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Domaine_activite` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nom_profitionelle` varchar(255) NOT NULL,
  `logo` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `Nom_enterprise`, `Adresse`, `Domaine_activite`, `Email`, `Nom_profitionelle`, `logo`) VALUES
(0, 'zeini cheikh', '42M5+PGV, Mauritanie', '', '', '', ''),
(0, '', '', '', '', '', ''),
(0, 'BMCI', '42M5+PGV, Mauritanie', '?', 'test.@gmail.com', 'zeini cheikh', ''),
(0, 'zeini cheikh', '42M5+PGV, Mauritanie', '?', 'test.@gmail.com', 'zeini cheikh', ''),
(0, 'zeini cheikh', '42M5+PGV, Mauritanie', '?', 'test.@gmail.com', 'zeini cheikh', ''),
(0, 'pubg', '42M5+PGV, Mauritanie', '?', 'pubg@gmail.mr', 'zeini cheikh', ''),
(0, 'FIFA', '42M5+PGV, Mauritanie', 'Game', 'fifa@gmail.com', 'zeini cheikh', ''),
(0, 'ROKSTAR', '42M5+PGV, Mauritanie', 'game', 'rokstar@gmail.cpm', 'zeini cheikh', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `matricule` int(10) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `niveaux` varchar(2) DEFAULT NULL CHECK (`niveaux` in ('l1','l2','l3')),
  `semester` varchar(2) DEFAULT NULL CHECK (`semester` in ('s1','s2','s3','s4','s5','s6')),
  `lead` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `matricule`, `nom`, `prenom`, `niveaux`, `semester`, `lead`) VALUES
(31, 23025, 'zeiny', 'cheikh', 'l1', 's1', 0),
(32, 23042, 'zeiny', 'cheikh', 'l1', 's1', 0),
(33, 23043, 'azize', 'df8iuhckxz', 'l1', 's5', 0),
(34, 23027, 'ahmed', 'babw', 'l3', 's5', 1);

-- --------------------------------------------------------

--
-- Structure de la table `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `niveaux` enum('L1','L2','L3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `internships`
--

CREATE TABLE `internships` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `internship_subject` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `technologies` varchar(255) NOT NULL,
  `remuneration` varchar(255) NOT NULL,
  `deliverables` varchar(255) NOT NULL,
  `num_interns` int(11) NOT NULL,
  `applicant_comment` varchar(255) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `internships`
--

INSERT INTO `internships` (`id`, `company_name`, `contact`, `address`, `internship_subject`, `field`, `description`, `duration`, `technologies`, `remuneration`, `deliverables`, `num_interns`, `applicant_comment`, `comments`) VALUES
(1, 'SupNum', 'dsdfngfn', 'dfbdfbdgn', 'b dgbdgnfg', 'bdfbdgbd', 'sdfdfbdf', '2', 'bgbgfbs', '  dfbrgtsrhsr', 'dfbdfnsf', 1, 'supnum@supnum.mr', 'bdfnsrher'),
(2, 'BMCI', '1234563219', 'zeiny@gmail.com', 'DEV MOBILE', 'GAME', 'GAME MOBILE', '6 mois', 'JAVA JS ', '10%', '?', 4, 'mechyne vihe', 'bay bay'),
(3, 'Zeiny_DEV', '12345674', 'dar_na3ime', 'game_mobile', 'game', 'we', ' 6 mois', 'c# js', '10%', '0', 1, 'sdcfvgbnhmj', '1');

-- --------------------------------------------------------

--
-- Structure de la table `membres_group`
--

CREATE TABLE `membres_group` (
  `id` int(11) NOT NULL,
  `id_etudiant` int(11) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `tel` int(8) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`, `prenom`, `tel`, `email`) VALUES
(3, 'azize', 'elbechi', 30349394, '23047@gmail.com'),
(4, 'zeiny', 'cheikh', 30524849, '23025@gmail.com'),
(5, 'ahmed', 'sidi mouhamed', 12345678, '23027@supnum.mr'),
(6, 'sidi med', 'saike', 12345678, '23087@supnum.mr'),
(7, 'ahmed', 'sidi mouhamed', 12345678, '23027@supnum.mr'),
(8, 'sidi med', 'saike', 12345678, '23087@supnum.mr');

-- --------------------------------------------------------

--
-- Structure de la table `p_i`
--

CREATE TABLE `p_i` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `technologie` varchar(255) DEFAULT NULL,
  `semester` enum('S2','S3','S4','S5') DEFAULT NULL,
  `annee` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `p_i`
--

INSERT INTO `p_i` (`id`, `titre`, `description`, `technologie`, `semester`, `annee`) VALUES
(23, 'getion des stage', 'test', 'php', 'S2', 2024),
(24, 'getion de bourse ', 'test_p_i', 'python', 'S2', 2025),
(25, 'getion de bube ', 'geton de bub', 'java', 'S2', 2025),
(26, 'getion des stage', 'dafbgdfnhjmgnhfbgd', 'JAVA', '', 2024),
(27, 'getion des stage', 'sadfgnhmj', 'JAVA', 'S3', 2024),
(28, 'getion des stage', 'sadfgnhmj', 'JAVA', 'S3', 2024),
(29, 'getion des stage', 'wefrgbrhnjmk,', 'JAVA', 'S4', 2024),
(30, 'sdfgbhnjkml,', 'xrtyguihjok', 'rfygyuhjkl;', 'S3', 2024),
(31, 'getion des stage', 'fgbrhnjmgxvcx', 'rfygyuhjkl;', 'S2', 2024),
(32, 'getion des stage', 'zeuy ', 'JAVA', 'S4', 2024);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `is_valid` tinyint(1) NOT NULL,
  `code` int(6) NOT NULL,
  `role` int(11) DEFAULT 3
) ;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `is_valid`, `code`, `role`) VALUES
(2, '21001@supnum.mr', '1', 1, 0, 3),
(3, '21002@supnum.mr', '', 0, 0, 3),
(4, '21003@supnum.mr', '', 0, 0, 3),
(5, '21004@supnum.mr', '', 0, 0, 3),
(6, '21005@supnum.mr', '', 0, 0, 3),
(7, '21006@supnum.mr', '', 0, 0, 3),
(8, '21007@supnum.mr', '', 0, 0, 3),
(9, '21008@supnum.mr', '', 0, 0, 3),
(10, '21009@supnum.mr', '', 0, 0, 3),
(11, '21010@supnum.mr', '', 0, 0, 3),
(12, '21011@supnum.mr', '', 0, 0, 3),
(13, '21012@supnum.mr', '', 0, 0, 3),
(14, '21013@supnum.mr', '', 0, 0, 3),
(15, '21014@supnum.mr', '', 0, 0, 3),
(16, '21015@supnum.mr', '', 0, 0, 3),
(17, '21016@supnum.mr', '', 0, 0, 3),
(18, '21017@supnum.mr', '', 0, 0, 3),
(19, '21018@supnum.mr', '', 0, 0, 3),
(20, '21019@supnum.mr', '', 0, 0, 3),
(21, '21020@supnum.mr', '', 0, 0, 3),
(22, '21021@supnum.mr', '', 0, 0, 3),
(23, '21022@supnum.mr', '', 0, 0, 3),
(24, '21023@supnum.mr', '', 0, 0, 3),
(25, '21024@supnum.mr', '', 0, 0, 3),
(26, '21025@supnum.mr', '', 0, 0, 3),
(27, '21026@supnum.mr', '', 0, 0, 3),
(28, '21027@supnum.mr', '', 0, 0, 3),
(29, '21028@supnum.mr', '', 0, 0, 3),
(30, '21029@supnum.mr', '', 0, 0, 3),
(31, '21030@supnum.mr', '', 0, 0, 3),
(32, '21031@supnum.mr', '', 0, 0, 3),
(33, '21032@supnum.mr', '', 0, 0, 3),
(34, '21033@supnum.mr', '', 0, 0, 3),
(35, '21034@supnum.mr', '', 0, 0, 3),
(36, '21035@supnum.mr', '', 0, 0, 3),
(37, '21036@supnum.mr', '', 0, 0, 3),
(38, '21037@supnum.mr', '', 0, 0, 3),
(39, '21038@supnum.mr', '', 0, 0, 3),
(40, '21039@supnum.mr', '', 0, 0, 3),
(41, '21040@supnum.mr', '', 0, 0, 3),
(42, '21041@supnum.mr', '', 0, 0, 3),
(43, '21042@supnum.mr', '', 0, 0, 3),
(44, '21043@supnum.mr', '', 0, 0, 3),
(45, '21044@supnum.mr', '', 0, 0, 3),
(46, '21045@supnum.mr', '', 0, 0, 3),
(47, '21046@supnum.mr', '', 0, 0, 3),
(48, '21047@supnum.mr', '', 0, 0, 3),
(49, '21048@supnum.mr', '', 0, 0, 3),
(50, '21049@supnum.mr', '', 0, 0, 3),
(51, '21050@supnum.mr', '', 0, 0, 3),
(52, '21051@supnum.mr', '', 0, 0, 3),
(53, '21052@supnum.mr', '', 0, 0, 3),
(54, '21053@supnum.mr', '', 0, 0, 3),
(55, '21054@supnum.mr', '', 0, 0, 3),
(56, '21055@supnum.mr', '', 0, 0, 3),
(57, '21056@supnum.mr', '', 0, 0, 3),
(58, '21057@supnum.mr', '', 0, 0, 3),
(59, '21058@supnum.mr', '', 0, 0, 3),
(60, '21059@supnum.mr', '', 0, 0, 3),
(61, '21060@supnum.mr', '', 0, 0, 3),
(62, '21061@supnum.mr', '', 0, 0, 3),
(63, '21062@supnum.mr', '', 0, 0, 3),
(64, '21063@supnum.mr', '', 0, 0, 3),
(65, '21064@supnum.mr', '', 0, 0, 3),
(66, '21065@supnum.mr', '', 0, 0, 3),
(67, '21066@supnum.mr', '', 0, 0, 3),
(68, '21067@supnum.mr', '', 0, 0, 3),
(69, '21068@supnum.mr', '', 0, 0, 3),
(70, '21069@supnum.mr', '', 0, 0, 3),
(71, '21070@supnum.mr', '', 0, 0, 3),
(72, '21071@supnum.mr', '', 0, 0, 3),
(73, '21072@supnum.mr', '', 0, 0, 3),
(74, '21073@supnum.mr', '', 0, 0, 3),
(75, '21074@supnum.mr', '', 0, 0, 3),
(76, '21075@supnum.mr', '', 0, 0, 3),
(77, '21076@supnum.mr', '', 0, 0, 3),
(78, '21077@supnum.mr', '', 0, 0, 3),
(79, '21078@supnum.mr', '', 0, 0, 3),
(80, '21079@supnum.mr', '', 0, 0, 3),
(81, '21080@supnum.mr', '', 0, 0, 3),
(82, '21081@supnum.mr', '', 0, 0, 3),
(83, '21082@supnum.mr', '', 0, 0, 3),
(84, '21083@supnum.mr', '', 0, 0, 3),
(85, '21084@supnum.mr', '', 0, 0, 3),
(86, '21085@supnum.mr', '', 0, 0, 3),
(87, '21086@supnum.mr', '', 0, 0, 3),
(88, '21087@supnum.mr', '', 0, 0, 3),
(89, '21088@supnum.mr', '', 0, 0, 3),
(90, '21089@supnum.mr', '', 0, 0, 3),
(91, '21090@supnum.mr', '', 0, 0, 3),
(92, '21091@supnum.mr', '', 0, 0, 3),
(93, '21092@supnum.mr', '', 0, 0, 3),
(94, '21093@supnum.mr', '', 0, 0, 3),
(95, '21094@supnum.mr', '', 0, 0, 3),
(96, '21095@supnum.mr', '', 0, 0, 3),
(97, '21096@supnum.mr', '', 0, 0, 3),
(98, '21097@supnum.mr', '', 0, 0, 3),
(99, '21098@supnum.mr', '', 0, 0, 3),
(100, '21099@supnum.mr', '', 0, 0, 3),
(101, '21100@supnum.mr', '', 0, 0, 3),
(103, '22001@supnum.mr', '', 0, 0, 3),
(104, '22002@supnum.mr', '', 0, 0, 3),
(105, '22003@supnum.mr', '', 0, 0, 3),
(106, '22004@supnum.mr', '', 0, 0, 3),
(107, '22005@supnum.mr', '', 0, 0, 3),
(108, '22006@supnum.mr', '', 0, 0, 3),
(109, '22007@supnum.mr', '', 0, 0, 3),
(110, '22008@supnum.mr', '', 0, 0, 3),
(111, '22009@supnum.mr', '', 0, 0, 3),
(112, '22010@supnum.mr', '', 0, 0, 3),
(113, '22011@supnum.mr', '', 0, 0, 3),
(114, '22012@supnum.mr', '', 0, 0, 3),
(115, '22013@supnum.mr', '', 0, 0, 3),
(116, '22014@supnum.mr', '', 0, 0, 3),
(117, '22015@supnum.mr', '', 0, 0, 3),
(118, '22016@supnum.mr', '', 0, 0, 3),
(119, '22017@supnum.mr', '', 0, 0, 3),
(120, '22018@supnum.mr', '', 0, 0, 3),
(121, '22019@supnum.mr', '', 0, 0, 3),
(122, '22020@supnum.mr', '', 0, 0, 3),
(123, '22021@supnum.mr', '', 0, 0, 3),
(124, '22022@supnum.mr', '', 0, 0, 3),
(125, '22023@supnum.mr', '', 0, 0, 3),
(126, '22024@supnum.mr', '', 0, 0, 3),
(127, '22025@supnum.mr', '', 0, 0, 3),
(128, '22026@supnum.mr', '', 0, 0, 3),
(129, '22027@supnum.mr', '', 0, 0, 3),
(130, '22028@supnum.mr', '', 0, 0, 3),
(131, '22029@supnum.mr', '', 0, 0, 3),
(132, '22030@supnum.mr', '', 0, 0, 3),
(133, '22031@supnum.mr', '', 0, 0, 3),
(134, '22032@supnum.mr', '', 0, 0, 3),
(135, '22033@supnum.mr', '', 0, 0, 3),
(136, '22034@supnum.mr', '', 0, 0, 3),
(137, '22035@supnum.mr', '', 0, 0, 3),
(138, '22036@supnum.mr', '', 0, 0, 3),
(139, '22037@supnum.mr', '', 0, 0, 3),
(140, '22038@supnum.mr', '', 0, 0, 3),
(141, '22039@supnum.mr', '', 0, 0, 3),
(142, '22040@supnum.mr', '', 0, 0, 3),
(143, '22041@supnum.mr', '', 0, 0, 3),
(144, '22042@supnum.mr', '', 0, 0, 3),
(145, '22043@supnum.mr', '', 0, 0, 3),
(146, '22044@supnum.mr', '', 0, 0, 3),
(147, '22045@supnum.mr', '', 0, 0, 3),
(148, '22046@supnum.mr', '', 0, 0, 3),
(149, '22047@supnum.mr', '', 0, 0, 3),
(150, '22048@supnum.mr', '', 0, 0, 3),
(151, '22049@supnum.mr', '', 0, 0, 3),
(152, '22050@supnum.mr', '', 0, 0, 3),
(153, '22051@supnum.mr', '', 0, 0, 3),
(154, '22052@supnum.mr', '', 0, 0, 3),
(155, '22053@supnum.mr', '', 0, 0, 3),
(156, '22054@supnum.mr', '', 0, 0, 3),
(157, '22055@supnum.mr', '', 0, 0, 3),
(158, '22056@supnum.mr', '', 0, 0, 3),
(159, '22057@supnum.mr', '', 0, 0, 3),
(160, '22058@supnum.mr', '', 0, 0, 3),
(161, '22059@supnum.mr', '', 0, 0, 3),
(162, '22060@supnum.mr', '', 0, 0, 3),
(163, '22061@supnum.mr', '', 0, 0, 3),
(164, '22062@supnum.mr', '', 0, 0, 3),
(165, '22063@supnum.mr', '', 0, 0, 3),
(166, '22064@supnum.mr', '', 0, 0, 3),
(167, '22065@supnum.mr', '', 0, 0, 3),
(168, '22066@supnum.mr', '', 0, 0, 3),
(169, '22067@supnum.mr', '', 0, 0, 3),
(170, '22068@supnum.mr', '', 0, 0, 3),
(171, '22069@supnum.mr', '', 0, 0, 3),
(172, '22070@supnum.mr', '', 0, 0, 3),
(173, '22071@supnum.mr', '', 0, 0, 3),
(174, '22072@supnum.mr', '', 0, 0, 3),
(175, '22073@supnum.mr', '', 0, 0, 3),
(176, '22074@supnum.mr', '', 0, 0, 3),
(177, '22075@supnum.mr', '', 0, 0, 3),
(178, '22076@supnum.mr', '', 0, 0, 3),
(179, '22077@supnum.mr', '', 0, 0, 3),
(180, '22078@supnum.mr', '', 0, 0, 3),
(181, '22079@supnum.mr', '', 0, 0, 3),
(182, '22080@supnum.mr', '', 0, 0, 3),
(183, '22081@supnum.mr', '', 0, 0, 3),
(184, '22082@supnum.mr', '', 0, 0, 3),
(185, '22083@supnum.mr', '', 0, 0, 3),
(186, '22084@supnum.mr', '', 0, 0, 3),
(187, '22085@supnum.mr', '', 0, 0, 3),
(188, '22086@supnum.mr', '', 0, 0, 3),
(189, '22087@supnum.mr', '', 0, 0, 3),
(190, '22088@supnum.mr', '', 0, 0, 3),
(191, '22089@supnum.mr', '', 0, 0, 3),
(192, '22090@supnum.mr', '', 0, 0, 3),
(193, '22091@supnum.mr', '', 0, 0, 3),
(194, '22092@supnum.mr', '', 0, 0, 3),
(195, '22093@supnum.mr', '', 0, 0, 3),
(196, '22094@supnum.mr', '', 0, 0, 3),
(197, '22095@supnum.mr', '', 0, 0, 3),
(198, '22096@supnum.mr', '', 0, 0, 3),
(199, '22097@supnum.mr', '', 0, 0, 3),
(200, '22098@supnum.mr', '', 0, 0, 3),
(201, '22099@supnum.mr', '', 0, 0, 3),
(202, '22100@supnum.mr', '', 0, 0, 3),
(203, '22101@supnum.mr', '', 0, 0, 3),
(204, '23001@supnum.mr', '', 0, 0, 3),
(205, '23002@supnum.mr', '', 0, 0, 3),
(206, '23003@supnum.mr', '', 0, 0, 3),
(207, '23004@supnum.mr', '', 0, 0, 3),
(208, '23005@supnum.mr', '', 0, 0, 3),
(209, '23006@supnum.mr', '', 0, 0, 3),
(210, '23007@supnum.mr', '', 0, 0, 3),
(211, '23008@supnum.mr', '', 0, 0, 3),
(212, '23009@supnum.mr', '', 0, 0, 3),
(213, '23010@supnum.mr', '', 0, 0, 3),
(214, '23011@supnum.mr', '', 0, 0, 3),
(215, '23012@supnum.mr', '', 0, 0, 3),
(216, '23013@supnum.mr', '', 0, 0, 3),
(217, '23014@supnum.mr', '', 0, 0, 3),
(218, '23015@supnum.mr', '', 0, 0, 3),
(219, '23016@supnum.mr', '', 0, 0, 3),
(220, '23017@supnum.mr', '', 0, 0, 3),
(221, '23018@supnum.mr', '', 0, 0, 3),
(222, '23019@supnum.mr', '', 0, 0, 3),
(223, '23020@supnum.mr', '', 0, 0, 3),
(224, '23021@supnum.mr', '', 0, 0, 3),
(225, '23022@supnum.mr', '', 0, 0, 3),
(226, '23023@supnum.mr', '', 0, 0, 3),
(227, '23024@supnum.mr', '', 0, 0, 3),
(228, '23025@supnum.mr', '1', 1, 0, 1),
(229, '23026@supnum.mr', '', 0, 0, 3),
(230, '23027@supnum.mr', '', 0, 0, 3),
(231, '23028@supnum.mr', '', 0, 0, 3),
(232, '23029@supnum.mr', '', 0, 0, 3),
(233, '23030@supnum.mr', '', 0, 0, 3),
(234, '23031@supnum.mr', '', 0, 0, 3),
(235, '23032@supnum.mr', '', 0, 0, 3),
(236, '23033@supnum.mr', '', 0, 0, 3),
(237, '23034@supnum.mr', '', 0, 0, 3),
(238, '23035@supnum.mr', '', 0, 0, 3),
(239, '23036@supnum.mr', '', 0, 0, 3),
(240, '23037@supnum.mr', '', 0, 0, 3),
(241, '23038@supnum.mr', '', 0, 0, 3),
(242, '23039@supnum.mr', '', 0, 0, 3),
(243, '23040@supnum.mr', '', 0, 0, 3),
(244, '23041@supnum.mr', '', 0, 0, 3),
(245, '23042@supnum.mr', '', 0, 0, 1),
(246, '23043@supnum.mr', '', 0, 0, 3),
(247, '23044@supnum.mr', '', 0, 0, 3),
(248, '23045@supnum.mr', '', 0, 0, 3),
(249, '23046@supnum.mr', '', 0, 0, 3),
(250, '23047@supnum.mr', '', 0, 0, 3),
(251, '23048@supnum.mr', '', 0, 0, 3),
(252, '23049@supnum.mr', '', 0, 0, 3),
(253, '23050@supnum.mr', '', 0, 0, 3),
(254, '23051@supnum.mr', '', 0, 0, 3),
(255, '23052@supnum.mr', '', 0, 0, 3),
(256, '23053@supnum.mr', '', 0, 0, 3),
(257, '23054@supnum.mr', '', 0, 0, 3),
(258, '23055@supnum.mr', '', 0, 0, 3),
(259, '23056@supnum.mr', '', 0, 0, 3),
(260, '23057@supnum.mr', '', 0, 0, 3),
(261, '23058@supnum.mr', '', 0, 0, 3),
(262, '23059@supnum.mr', '', 0, 0, 3),
(263, '23060@supnum.mr', '', 0, 0, 3),
(264, '23061@supnum.mr', '', 0, 0, 3),
(265, '23062@supnum.mr', '', 0, 0, 3),
(266, '23063@supnum.mr', '', 0, 0, 3),
(267, '23064@supnum.mr', '', 0, 0, 3),
(268, '23065@supnum.mr', '', 0, 0, 3),
(269, '23066@supnum.mr', '', 0, 0, 3),
(270, '23067@supnum.mr', '', 0, 0, 3),
(271, '23068@supnum.mr', '', 0, 0, 3),
(272, '23069@supnum.mr', '', 0, 0, 3),
(273, '23070@supnum.mr', '', 0, 0, 3),
(274, '23071@supnum.mr', '', 0, 0, 3),
(275, '23072@supnum.mr', '', 0, 0, 3),
(276, '23073@supnum.mr', '', 0, 0, 3),
(277, '23074@supnum.mr', '', 0, 0, 3),
(278, '23075@supnum.mr', '', 0, 0, 3),
(279, '23076@supnum.mr', '', 0, 0, 3),
(280, '23077@supnum.mr', '', 0, 0, 3),
(281, '23078@supnum.mr', '', 0, 0, 3),
(282, '23079@supnum.mr', '', 0, 0, 3),
(283, '23080@supnum.mr', '', 0, 0, 3),
(284, '23081@supnum.mr', '', 0, 0, 3),
(285, '23082@supnum.mr', '', 0, 0, 3),
(286, '23083@supnum.mr', '', 0, 0, 3),
(287, '23084@supnum.mr', '', 0, 0, 3),
(288, '23085@supnum.mr', '', 0, 0, 3),
(289, '23086@supnum.mr', '', 0, 0, 3),
(290, '23087@supnum.mr', '', 0, 0, 3),
(291, '23088@supnum.mr', '', 0, 0, 3),
(292, '23089@supnum.mr', '', 0, 0, 3),
(293, '23090@supnum.mr', '', 0, 0, 3),
(294, '23091@supnum.mr', '', 0, 0, 3),
(295, '23092@supnum.mr', '', 0, 0, 3),
(296, '23093@supnum.mr', '', 0, 0, 3),
(297, '23094@supnum.mr', '', 0, 0, 3),
(298, '23095@supnum.mr', '', 0, 0, 3),
(299, '23096@supnum.mr', '', 0, 0, 3),
(300, '23097@supnum.mr', '', 0, 0, 3),
(301, '23098@supnum.mr', '', 0, 0, 3),
(302, '23099@supnum.mr', '', 0, 0, 3),
(303, '23100@supnum.mr', '', 0, 0, 3),
(304, '23101@supnum.mr', '', 0, 0, 3),
(305, '23102@supnum.mr', '', 0, 0, 3),
(306, '23103@supnum.mr', '', 0, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `libelle` varchar(50) NOT NULL,
  `id_compte` int(11) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `adresse`, `tel`, `libelle`, `id_compte`, `id_users`) VALUES
(26, 'zeiny', 'babw', 'fljgdt/dk', 12345678, '', NULL, NULL),
(27, 'zeiny', 'wargfbs', 'sdfgdhfjg', 12345677, '', NULL, NULL),
(28, 'zeiny', 'cheikh', 'sfdl;f, ', 12345678, '', NULL, NULL),
(29, '', '', 'sdfgdhfjg', 12345677, 'EWZRTXHRCYJTU', NULL, NULL),
(30, 'zeiny', 'babw', 'LARK/FL', 12345677, '', NULL, NULL),
(31, '', '', '', 0, '', NULL, NULL),
(32, '', '', 'LARK/FL', 12345677, 'EWZRTXHRCYJTU', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminstrateur`
--
ALTER TABLE `adminstrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`compte_id`);

--
-- Index pour la table `encadrant`
--
ALTER TABLE `encadrant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_professeur` (`id_professeur`),
  ADD KEY `id_pi` (`id_pi`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_etudiant` (`id_etudiant`);

--
-- Index pour la table `internships`
--
ALTER TABLE `internships`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres_group`
--
ALTER TABLE `membres_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_etudiant` (`id_etudiant`),
  ADD KEY `id_group` (`id_group`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `p_i`
--
ALTER TABLE `p_i`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compte_id` (`id_compte`),
  ADD KEY `fk_id_users` (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adminstrateur`
--
ALTER TABLE `adminstrateur`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `compte_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `encadrant`
--
ALTER TABLE `encadrant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `membres_group`
--
ALTER TABLE `membres_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `p_i`
--
ALTER TABLE `p_i`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `encadrant`
--
ALTER TABLE `encadrant`
  ADD CONSTRAINT `encadrant_ibfk_1` FOREIGN KEY (`id_professeur`) REFERENCES `professeur` (`id`),
  ADD CONSTRAINT `encadrant_ibfk_2` FOREIGN KEY (`id_pi`) REFERENCES `p_i` (`id`);

--
-- Contraintes pour la table `group`
--
ALTER TABLE `group`
  ADD CONSTRAINT `fk_etudiant` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id`);

--
-- Contraintes pour la table `membres_group`
--
ALTER TABLE `membres_group`
  ADD CONSTRAINT `membres_group_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`id`),
  ADD CONSTRAINT `membres_group_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `group` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_id_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`compte_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
