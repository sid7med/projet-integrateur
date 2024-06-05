-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 02 juin 2024 à 21:04
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

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
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `matricule` int(10) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `niveaux` varchar(2) DEFAULT NULL CHECK (`niveaux` in ('l1','l2','l3')),
  `semester` varchar(2) DEFAULT NULL CHECK (`semester` in ('s1','s2','s3','s4','s5','s6'))
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
(1, 'SupNum', 'dsdfngfn', 'dfbdfbdgn', 'b dgbdgnfg', 'bdfbdgbd', 'sdfdfbdf', '2', 'bgbgfbs', '  dfbrgtsrhsr', 'dfbdfnsf', 1, 'supnum@supnum.mr', 'bdfnsrher');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `is_valid` tinyint(1) NOT NULL,
  `code` int(6) NOT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `is_valid`, `code`, `role`) VALUES
(2, NULL, '21001@supnum.mr', 'ef797c8118f02dfb6496', 1, 0, ''),
(58, NULL, '21057@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(59, NULL, '21058@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(60, NULL, '21059@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(61, NULL, '21060@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(62, NULL, '21061@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(63, NULL, '21062@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(64, NULL, '21063@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(65, NULL, '21064@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(66, NULL, '21065@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(67, NULL, '21066@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(82, NULL, '21081@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(83, NULL, '21082@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(84, NULL, '21083@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(85, NULL, '21084@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(86, NULL, '21085@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(87, NULL, '21086@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(88, NULL, '21087@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(89, NULL, '21088@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(90, NULL, '21089@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(91, NULL, '21090@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(92, NULL, '21091@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(93, NULL, '21092@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(94, NULL, '21093@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(95, NULL, '21094@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(96, NULL, '21095@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(97, NULL, '21096@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(98, NULL, '21097@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(99, NULL, '21098@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(100, NULL, '21099@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(101, NULL, '21100@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(103, NULL, '22001@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(104, NULL, '22002@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(105, NULL, '22003@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(106, NULL, '22004@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(107, NULL, '22005@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(108, NULL, '22006@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(109, NULL, '22007@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(110, NULL, '22008@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(111, NULL, '22009@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(112, NULL, '22010@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(113, NULL, '22011@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(114, NULL, '22012@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(115, NULL, '22013@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(116, NULL, '22014@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(117, NULL, '22015@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(118, NULL, '22016@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(119, NULL, '22017@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(120, NULL, '22018@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(121, NULL, '22019@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(122, NULL, '22020@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(123, NULL, '22021@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(124, NULL, '22022@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(125, NULL, '22023@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(126, NULL, '22024@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(127, NULL, '22025@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(128, NULL, '22026@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(129, NULL, '22027@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(130, NULL, '22028@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(131, NULL, '22029@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(132, NULL, '22030@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(133, NULL, '22031@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(134, NULL, '22032@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(135, NULL, '22033@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(136, NULL, '22034@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(137, NULL, '22035@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(138, NULL, '22036@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(139, NULL, '22037@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(140, NULL, '22038@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(141, NULL, '22039@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(142, NULL, '22040@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(143, NULL, '22041@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(144, NULL, '22042@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(145, NULL, '22043@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(146, NULL, '22044@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(147, NULL, '22045@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(148, NULL, '22046@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(149, NULL, '22047@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(150, NULL, '22048@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(151, NULL, '22049@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(152, NULL, '22050@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(153, NULL, '22051@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(154, NULL, '22052@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(155, NULL, '22053@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(156, NULL, '22054@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(157, NULL, '22055@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(158, NULL, '22056@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(159, NULL, '22057@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(160, NULL, '22058@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(161, NULL, '22059@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(162, NULL, '22060@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(163, NULL, '22061@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(164, NULL, '22062@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(165, NULL, '22063@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(166, NULL, '22064@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(167, NULL, '22065@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(168, NULL, '22066@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(169, NULL, '22067@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(170, NULL, '22068@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(171, NULL, '22069@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(172, NULL, '22070@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(173, NULL, '22071@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(174, NULL, '22072@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(175, NULL, '22073@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(176, NULL, '22074@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(177, NULL, '22075@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(178, NULL, '22076@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(179, NULL, '22077@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(180, NULL, '22078@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(181, NULL, '22079@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(182, NULL, '22080@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(183, NULL, '22081@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(184, NULL, '22082@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(185, NULL, '22083@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(186, NULL, '22084@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(187, NULL, '22085@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(188, NULL, '22086@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(189, NULL, '22087@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(190, NULL, '22088@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(191, NULL, '22089@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(192, NULL, '22090@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(193, NULL, '22091@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(194, NULL, '22092@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(195, NULL, '22093@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(196, NULL, '22094@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(197, NULL, '22095@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(198, NULL, '22096@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(199, NULL, '22097@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(200, NULL, '22098@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(201, NULL, '22099@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(202, NULL, '22100@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(203, NULL, '22101@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(204, NULL, '23001@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(205, NULL, '23002@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(206, NULL, '23003@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(207, NULL, '23004@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(208, NULL, '23005@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(209, NULL, '23006@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(210, NULL, '23007@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(211, NULL, '23008@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(212, NULL, '23009@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(213, NULL, '23010@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(214, NULL, '23011@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(215, NULL, '23012@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(216, NULL, '23013@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(217, NULL, '23014@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(218, NULL, '23015@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(219, NULL, '23016@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(220, NULL, '23017@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(221, NULL, '23018@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(222, NULL, '23019@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(223, NULL, '23020@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(224, NULL, '23021@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(225, NULL, '23022@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(226, NULL, '23023@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(227, NULL, '23024@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(228, NULL, '23025@supnum.mr', '6b86b273ff34fce19d6b', 1, 0, '1'),
(229, NULL, '23026@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(230, NULL, '23027@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(231, NULL, '23028@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(232, NULL, '23029@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(233, NULL, '23030@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(234, NULL, '23031@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(235, NULL, '23032@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(236, NULL, '23033@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(237, NULL, '23034@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(238, NULL, '23035@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(239, NULL, '23036@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(240, NULL, '23037@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(241, NULL, '23038@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(242, NULL, '23039@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(243, NULL, '23040@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(244, NULL, '23041@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(245, NULL, '23042@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '1'),
(246, NULL, '23043@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(247, NULL, '23044@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(248, NULL, '23045@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(249, NULL, '23046@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(250, NULL, '23047@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(251, NULL, '23048@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(252, NULL, '23049@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(253, NULL, '23050@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(254, NULL, '23051@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(255, NULL, '23052@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(256, NULL, '23053@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(257, NULL, '23054@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(258, NULL, '23055@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(259, NULL, '23056@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(260, NULL, '23057@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(261, NULL, '23058@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(262, NULL, '23059@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(263, NULL, '23060@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(264, NULL, '23061@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(265, NULL, '23062@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(266, NULL, '23063@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(267, NULL, '23064@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(268, NULL, '23065@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(269, NULL, '23066@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(270, NULL, '23067@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(271, NULL, '23068@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(272, NULL, '23069@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(273, NULL, '23070@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(274, NULL, '23071@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(275, NULL, '23072@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(276, NULL, '23073@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(277, NULL, '23074@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(278, NULL, '23075@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(279, NULL, '23076@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(280, NULL, '23077@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(281, NULL, '23078@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(282, NULL, '23079@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(283, NULL, '23080@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(284, NULL, '23081@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(285, NULL, '23082@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(286, NULL, '23083@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(287, NULL, '23084@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(288, NULL, '23085@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(289, NULL, '23086@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(290, NULL, '23087@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(291, NULL, '23088@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(292, NULL, '23089@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(293, NULL, '23090@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(294, NULL, '23091@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(295, NULL, '23092@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(296, NULL, '23093@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(297, NULL, '23094@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(298, NULL, '23095@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(299, NULL, '23096@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(300, NULL, '23097@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(301, NULL, '23098@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(302, NULL, '23099@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(303, NULL, '23100@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(304, NULL, '23101@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(305, NULL, '23102@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(306, NULL, '23103@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(307, NULL, '23104@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(308, NULL, '23105@supnum.mr', 'e3b0c44298fc1c149afb', 0, 0, '3'),
(309, 'sidi', '21001@supnum.mr', '', 0, 0, ''),
(310, 'sidi', '23097@supnum.mr', 'asderftgyuj', 0, 0, 'part'),
(311, 'sidi', '21001@supnum.mr', 'asdfghj', 0, 0, 'part'),
(312, 'sidi', '21001@supnum.mr', 'asdfghj', 0, 0, 'part'),
(313, 'sidi', '21001@supnum.mr', 'asdfghj', 0, 0, 'part'),
(314, 'sidi', '21001@supnum.mr', 'asdfghj', 0, 0, 'part'),
(315, 'sidi', '21001@supnum.mr', 'asdfghj', 0, 0, 'part'),
(316, '', '21026@supnum.mr', '1234', 0, 0, 'prof'),
(317, '', '21026@supnum.mr', '1234', 0, 0, 'prof'),
(318, '', '21027@supnum.mr', '1234', 0, 0, 'prof'),
(319, '', '21028@supnum.mr', '2345', 0, 0, 'part'),
(320, '', '21001@supnum.mr', '1234', 0, 0, 'part'),
(321, '', '21001@supnum.mr', '1234', 0, 0, 'prof'),
(322, '', '21001@supnum.mr', '12345', 0, 0, 'prof'),
(323, '', '21001@supnum.mr', '1234', 0, 0, 'Utilisateur'),
(324, '', '21001@supnum.mr', '2345', 0, 0, 'Utilisateur'),
(325, '', 'lallemamine0@gmail.com', '1234', 0, 0, 'part');

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
(30, 'zeiny', 'babw', 'LARK/FL', 12345677, '', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`compte_id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `internships`
--
ALTER TABLE `internships`
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
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `compte_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `internships`
--
ALTER TABLE `internships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Contraintes pour les tables déchargées
--

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
