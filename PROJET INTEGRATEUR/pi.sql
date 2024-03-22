a-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 mars 2024 à 08:41
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
-- Base de données : `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Structure de la table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Structure de la table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Structure de la table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Déchargement des données de la table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"relation_lines\":\"true\",\"snap_to_grid\":\"off\",\"angular_direct\":\"direct\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Structure de la table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Structure de la table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Structure de la table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Déchargement des données de la table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"p i\",\"table\":\"users\"},{\"db\":\"p i\",\"table\":\"utilisateur\"},{\"db\":\"tst_con\",\"table\":\"tst\"},{\"db\":\"p i\",\"table\":\"compte\"}]');

-- --------------------------------------------------------

--
-- Structure de la table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Structure de la table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Structure de la table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Structure de la table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Déchargement des données de la table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-03-22 07:41:20', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"fr\"}');

-- --------------------------------------------------------

--
-- Structure de la table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Structure de la table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Index pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Index pour la table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Index pour la table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Index pour la table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Index pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Index pour la table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Index pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Index pour la table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Index pour la table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Index pour la table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Index pour la table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Index pour la table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Index pour la table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Index pour la table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de données : `p i`
--
CREATE DATABASE IF NOT EXISTS `p i` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `p i`;

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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `is_valid` tinyint(1) NOT NULL,
  `code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `is_valid`, `code`) VALUES
(2, '21001@supnum.mr', '12345678', 0, 0),
(3, '21002@supnum.mr', '', 0, 0),
(4, '21003@supnum.mr', '', 0, 0),
(5, '21004@supnum.mr', '', 0, 0),
(6, '21005@supnum.mr', '', 0, 0),
(7, '21006@supnum.mr', '', 0, 0),
(8, '21007@supnum.mr', '', 0, 0),
(9, '21008@supnum.mr', '', 0, 0),
(10, '21009@supnum.mr', '', 0, 0),
(11, '21010@supnum.mr', '', 0, 0),
(12, '21011@supnum.mr', '', 0, 0),
(13, '21012@supnum.mr', '', 0, 0),
(14, '21013@supnum.mr', '', 0, 0),
(15, '21014@supnum.mr', '', 0, 0),
(16, '21015@supnum.mr', '', 0, 0),
(17, '21016@supnum.mr', '', 0, 0),
(18, '21017@supnum.mr', '', 0, 0),
(19, '21018@supnum.mr', '', 0, 0),
(20, '21019@supnum.mr', '', 0, 0),
(21, '21020@supnum.mr', '', 0, 0),
(22, '21021@supnum.mr', '', 0, 0),
(23, '21022@supnum.mr', '', 0, 0),
(24, '21023@supnum.mr', '', 0, 0),
(25, '21024@supnum.mr', '', 0, 0),
(26, '21025@supnum.mr', '', 0, 0),
(27, '21026@supnum.mr', '', 0, 0),
(28, '21027@supnum.mr', '', 0, 0),
(29, '21028@supnum.mr', '', 0, 0),
(30, '21029@supnum.mr', '', 0, 0),
(31, '21030@supnum.mr', '', 0, 0),
(32, '21031@supnum.mr', '', 0, 0),
(33, '21032@supnum.mr', '', 0, 0),
(34, '21033@supnum.mr', '', 0, 0),
(35, '21034@supnum.mr', '', 0, 0),
(36, '21035@supnum.mr', '', 0, 0),
(37, '21036@supnum.mr', '', 0, 0),
(38, '21037@supnum.mr', '', 0, 0),
(39, '21038@supnum.mr', '', 0, 0),
(40, '21039@supnum.mr', '', 0, 0),
(41, '21040@supnum.mr', '', 0, 0),
(42, '21041@supnum.mr', '', 0, 0),
(43, '21042@supnum.mr', '', 0, 0),
(44, '21043@supnum.mr', '', 0, 0),
(45, '21044@supnum.mr', '', 0, 0),
(46, '21045@supnum.mr', '', 0, 0),
(47, '21046@supnum.mr', '', 0, 0),
(48, '21047@supnum.mr', '', 0, 0),
(49, '21048@supnum.mr', '', 0, 0),
(50, '21049@supnum.mr', '', 0, 0),
(51, '21050@supnum.mr', '', 0, 0),
(52, '21051@supnum.mr', '', 0, 0),
(53, '21052@supnum.mr', '', 0, 0),
(54, '21053@supnum.mr', '', 0, 0),
(55, '21054@supnum.mr', '', 0, 0),
(56, '21055@supnum.mr', '', 0, 0),
(57, '21056@supnum.mr', '', 0, 0),
(58, '21057@supnum.mr', '', 0, 0),
(59, '21058@supnum.mr', '', 0, 0),
(60, '21059@supnum.mr', '', 0, 0),
(61, '21060@supnum.mr', '', 0, 0),
(62, '21061@supnum.mr', '', 0, 0),
(63, '21062@supnum.mr', '', 0, 0),
(64, '21063@supnum.mr', '', 0, 0),
(65, '21064@supnum.mr', '', 0, 0),
(66, '21065@supnum.mr', '', 0, 0),
(67, '21066@supnum.mr', '', 0, 0),
(68, '21067@supnum.mr', '', 0, 0),
(69, '21068@supnum.mr', '', 0, 0),
(70, '21069@supnum.mr', '', 0, 0),
(71, '21070@supnum.mr', '', 0, 0),
(72, '21071@supnum.mr', '', 0, 0),
(73, '21072@supnum.mr', '', 0, 0),
(74, '21073@supnum.mr', '', 0, 0),
(75, '21074@supnum.mr', '', 0, 0),
(76, '21075@supnum.mr', '', 0, 0),
(77, '21076@supnum.mr', '', 0, 0),
(78, '21077@supnum.mr', '', 0, 0),
(79, '21078@supnum.mr', '', 0, 0),
(80, '21079@supnum.mr', '', 0, 0),
(81, '21080@supnum.mr', '', 0, 0),
(82, '21081@supnum.mr', '', 0, 0),
(83, '21082@supnum.mr', '', 0, 0),
(84, '21083@supnum.mr', '', 0, 0),
(85, '21084@supnum.mr', '', 0, 0),
(86, '21085@supnum.mr', '', 0, 0),
(87, '21086@supnum.mr', '', 0, 0),
(88, '21087@supnum.mr', '', 0, 0),
(89, '21088@supnum.mr', '', 0, 0),
(90, '21089@supnum.mr', '', 0, 0),
(91, '21090@supnum.mr', '', 0, 0),
(92, '21091@supnum.mr', '', 0, 0),
(93, '21092@supnum.mr', '', 0, 0),
(94, '21093@supnum.mr', '', 0, 0),
(95, '21094@supnum.mr', '', 0, 0),
(96, '21095@supnum.mr', '', 0, 0),
(97, '21096@supnum.mr', '', 0, 0),
(98, '21097@supnum.mr', '', 0, 0),
(99, '21098@supnum.mr', '', 0, 0),
(100, '21099@supnum.mr', '', 0, 0),
(101, '21100@supnum.mr', '', 0, 0),
(103, '22001@supnum.mr', '', 0, 0),
(104, '22002@supnum.mr', '', 0, 0),
(105, '22003@supnum.mr', '', 0, 0),
(106, '22004@supnum.mr', '', 0, 0),
(107, '22005@supnum.mr', '', 0, 0),
(108, '22006@supnum.mr', '', 0, 0),
(109, '22007@supnum.mr', '', 0, 0),
(110, '22008@supnum.mr', '', 0, 0),
(111, '22009@supnum.mr', '', 0, 0),
(112, '22010@supnum.mr', '', 0, 0),
(113, '22011@supnum.mr', '', 0, 0),
(114, '22012@supnum.mr', '', 0, 0),
(115, '22013@supnum.mr', '', 0, 0),
(116, '22014@supnum.mr', '', 0, 0),
(117, '22015@supnum.mr', '', 0, 0),
(118, '22016@supnum.mr', '', 0, 0),
(119, '22017@supnum.mr', '', 0, 0),
(120, '22018@supnum.mr', '', 0, 0),
(121, '22019@supnum.mr', '', 0, 0),
(122, '22020@supnum.mr', '', 0, 0),
(123, '22021@supnum.mr', '', 0, 0),
(124, '22022@supnum.mr', '', 0, 0),
(125, '22023@supnum.mr', '', 0, 0),
(126, '22024@supnum.mr', '', 0, 0),
(127, '22025@supnum.mr', '', 0, 0),
(128, '22026@supnum.mr', '', 0, 0),
(129, '22027@supnum.mr', '', 0, 0),
(130, '22028@supnum.mr', '', 0, 0),
(131, '22029@supnum.mr', '', 0, 0),
(132, '22030@supnum.mr', '', 0, 0),
(133, '22031@supnum.mr', '', 0, 0),
(134, '22032@supnum.mr', '', 0, 0),
(135, '22033@supnum.mr', '', 0, 0),
(136, '22034@supnum.mr', '', 0, 0),
(137, '22035@supnum.mr', '', 0, 0),
(138, '22036@supnum.mr', '', 0, 0),
(139, '22037@supnum.mr', '', 0, 0),
(140, '22038@supnum.mr', '', 0, 0),
(141, '22039@supnum.mr', '', 0, 0),
(142, '22040@supnum.mr', '', 0, 0),
(143, '22041@supnum.mr', '', 0, 0),
(144, '22042@supnum.mr', '', 0, 0),
(145, '22043@supnum.mr', '', 0, 0),
(146, '22044@supnum.mr', '', 0, 0),
(147, '22045@supnum.mr', '', 0, 0),
(148, '22046@supnum.mr', '', 0, 0),
(149, '22047@supnum.mr', '', 0, 0),
(150, '22048@supnum.mr', '', 0, 0),
(151, '22049@supnum.mr', '', 0, 0),
(152, '22050@supnum.mr', '', 0, 0),
(153, '22051@supnum.mr', '', 0, 0),
(154, '22052@supnum.mr', '', 0, 0),
(155, '22053@supnum.mr', '', 0, 0),
(156, '22054@supnum.mr', '', 0, 0),
(157, '22055@supnum.mr', '', 0, 0),
(158, '22056@supnum.mr', '', 0, 0),
(159, '22057@supnum.mr', '', 0, 0),
(160, '22058@supnum.mr', '', 0, 0),
(161, '22059@supnum.mr', '', 0, 0),
(162, '22060@supnum.mr', '', 0, 0),
(163, '22061@supnum.mr', '', 0, 0),
(164, '22062@supnum.mr', '', 0, 0),
(165, '22063@supnum.mr', '', 0, 0),
(166, '22064@supnum.mr', '', 0, 0),
(167, '22065@supnum.mr', '', 0, 0),
(168, '22066@supnum.mr', '', 0, 0),
(169, '22067@supnum.mr', '', 0, 0),
(170, '22068@supnum.mr', '', 0, 0),
(171, '22069@supnum.mr', '', 0, 0),
(172, '22070@supnum.mr', '', 0, 0),
(173, '22071@supnum.mr', '', 0, 0),
(174, '22072@supnum.mr', '', 0, 0),
(175, '22073@supnum.mr', '', 0, 0),
(176, '22074@supnum.mr', '', 0, 0),
(177, '22075@supnum.mr', '', 0, 0),
(178, '22076@supnum.mr', '', 0, 0),
(179, '22077@supnum.mr', '', 0, 0),
(180, '22078@supnum.mr', '', 0, 0),
(181, '22079@supnum.mr', '', 0, 0),
(182, '22080@supnum.mr', '', 0, 0),
(183, '22081@supnum.mr', '', 0, 0),
(184, '22082@supnum.mr', '', 0, 0),
(185, '22083@supnum.mr', '', 0, 0),
(186, '22084@supnum.mr', '', 0, 0),
(187, '22085@supnum.mr', '', 0, 0),
(188, '22086@supnum.mr', '', 0, 0),
(189, '22087@supnum.mr', '', 0, 0),
(190, '22088@supnum.mr', '', 0, 0),
(191, '22089@supnum.mr', '', 0, 0),
(192, '22090@supnum.mr', '', 0, 0),
(193, '22091@supnum.mr', '', 0, 0),
(194, '22092@supnum.mr', '', 0, 0),
(195, '22093@supnum.mr', '', 0, 0),
(196, '22094@supnum.mr', '', 0, 0),
(197, '22095@supnum.mr', '', 0, 0),
(198, '22096@supnum.mr', '', 0, 0),
(199, '22097@supnum.mr', '', 0, 0),
(200, '22098@supnum.mr', '', 0, 0),
(201, '22099@supnum.mr', '', 0, 0),
(202, '22100@supnum.mr', '', 0, 0),
(203, '22101@supnum.mr', '', 0, 0),
(204, '23001@supnum.mr', '', 0, 0),
(205, '23002@supnum.mr', '', 0, 0),
(206, '23003@supnum.mr', '', 0, 0),
(207, '23004@supnum.mr', '', 0, 0),
(208, '23005@supnum.mr', '', 0, 0),
(209, '23006@supnum.mr', '', 0, 0),
(210, '23007@supnum.mr', '', 0, 0),
(211, '23008@supnum.mr', '', 0, 0),
(212, '23009@supnum.mr', '', 0, 0),
(213, '23010@supnum.mr', '', 0, 0),
(214, '23011@supnum.mr', '', 0, 0),
(215, '23012@supnum.mr', '', 0, 0),
(216, '23013@supnum.mr', '', 0, 0),
(217, '23014@supnum.mr', '', 0, 0),
(218, '23015@supnum.mr', '', 0, 0),
(219, '23016@supnum.mr', '', 0, 0),
(220, '23017@supnum.mr', '', 0, 0),
(221, '23018@supnum.mr', '', 0, 0),
(222, '23019@supnum.mr', '', 0, 0),
(223, '23020@supnum.mr', '', 0, 0),
(224, '23021@supnum.mr', '', 0, 0),
(225, '23022@supnum.mr', '', 0, 0),
(226, '23023@supnum.mr', '', 0, 0),
(227, '23024@supnum.mr', '', 0, 0),
(228, '23025@supnum.mr', '1', 0, 0),
(229, '23026@supnum.mr', '', 0, 0),
(230, '23027@supnum.mr', '', 0, 0),
(231, '23028@supnum.mr', '', 0, 0),
(232, '23029@supnum.mr', '', 0, 0),
(233, '23030@supnum.mr', '', 0, 0),
(234, '23031@supnum.mr', '', 0, 0),
(235, '23032@supnum.mr', '', 0, 0),
(236, '23033@supnum.mr', '', 0, 0),
(237, '23034@supnum.mr', '', 0, 0),
(238, '23035@supnum.mr', '', 0, 0),
(239, '23036@supnum.mr', '', 0, 0),
(240, '23037@supnum.mr', '', 0, 0),
(241, '23038@supnum.mr', '', 0, 0),
(242, '23039@supnum.mr', '', 0, 0),
(243, '23040@supnum.mr', '', 0, 0),
(244, '23041@supnum.mr', '', 0, 0),
(245, '23042@supnum.mr', '', 0, 0),
(246, '23043@supnum.mr', '', 0, 0),
(247, '23044@supnum.mr', '', 0, 0),
(248, '23045@supnum.mr', '', 0, 0),
(249, '23046@supnum.mr', '', 0, 0),
(250, '23047@supnum.mr', '', 0, 0),
(251, '23048@supnum.mr', '', 0, 0),
(252, '23049@supnum.mr', '', 0, 0),
(253, '23050@supnum.mr', '', 0, 0),
(254, '23051@supnum.mr', '', 0, 0),
(255, '23052@supnum.mr', '', 0, 0),
(256, '23053@supnum.mr', '', 0, 0),
(257, '23054@supnum.mr', '', 0, 0),
(258, '23055@supnum.mr', '', 0, 0),
(259, '23056@supnum.mr', '', 0, 0),
(260, '23057@supnum.mr', '', 0, 0),
(261, '23058@supnum.mr', '', 0, 0),
(262, '23059@supnum.mr', '', 0, 0),
(263, '23060@supnum.mr', '', 0, 0),
(264, '23061@supnum.mr', '', 0, 0),
(265, '23062@supnum.mr', '', 0, 0),
(266, '23063@supnum.mr', '', 0, 0),
(267, '23064@supnum.mr', '', 0, 0),
(268, '23065@supnum.mr', '', 0, 0),
(269, '23066@supnum.mr', '', 0, 0),
(270, '23067@supnum.mr', '', 0, 0),
(271, '23068@supnum.mr', '', 0, 0),
(272, '23069@supnum.mr', '', 0, 0),
(273, '23070@supnum.mr', '', 0, 0),
(274, '23071@supnum.mr', '', 0, 0),
(275, '23072@supnum.mr', '', 0, 0),
(276, '23073@supnum.mr', '', 0, 0),
(277, '23074@supnum.mr', '', 0, 0),
(278, '23075@supnum.mr', '', 0, 0),
(279, '23076@supnum.mr', '', 0, 0),
(280, '23077@supnum.mr', '', 0, 0),
(281, '23078@supnum.mr', '', 0, 0),
(282, '23079@supnum.mr', '', 0, 0),
(283, '23080@supnum.mr', '', 0, 0),
(284, '23081@supnum.mr', '', 0, 0),
(285, '23082@supnum.mr', '', 0, 0),
(286, '23083@supnum.mr', '', 0, 0),
(287, '23084@supnum.mr', '', 0, 0),
(288, '23085@supnum.mr', '', 0, 0),
(289, '23086@supnum.mr', '', 0, 0),
(290, '23087@supnum.mr', '', 0, 0),
(291, '23088@supnum.mr', '', 0, 0),
(292, '23089@supnum.mr', '', 0, 0),
(293, '23090@supnum.mr', '', 0, 0),
(294, '23091@supnum.mr', '', 0, 0),
(295, '23092@supnum.mr', '', 0, 0),
(296, '23093@supnum.mr', '', 0, 0),
(297, '23094@supnum.mr', '', 0, 0),
(298, '23095@supnum.mr', '', 0, 0),
(299, '23096@supnum.mr', '', 0, 0),
(300, '23097@supnum.mr', '', 0, 0),
(301, '23098@supnum.mr', '', 0, 0),
(302, '23099@supnum.mr', '', 0, 0),
(303, '23100@supnum.mr', '', 0, 0),
(304, '23101@supnum.mr', '', 0, 0),
(305, '23102@supnum.mr', '', 0, 0),
(306, '23103@supnum.mr', '', 0, 0),
(307, '23104@supnum.mr', '', 0, 0),
(308, '23105@supnum.mr', '', 0, 0);

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
(13, '', '', 'sfdl;f, ', 12343034, 'wefrlrg,', NULL, NULL),
(14, 'dfklar', 'wqsdfrgh', 'dsfxgbch', 12345677, '', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`compte_id`);

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
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_id_users` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`compte_id`);
--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `tst_1`
--

CREATE TABLE `tst_1` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tst_1`
--
ALTER TABLE `tst_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tst_1`
--
ALTER TABLE `tst_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Base de données : `tst_con`
--
CREATE DATABASE IF NOT EXISTS `tst_con` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tst_con`;

-- --------------------------------------------------------

--
-- Structure de la table `tst`
--

CREATE TABLE `tst` (
  `id` int(11) NOT NULL,
  `nom` varchar(10) DEFAULT NULL,
  `prenom` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tst`
--

INSERT INTO `tst` (`id`, `nom`, `prenom`) VALUES
(1, 'zeiny', 'cheikh'),
(11, 'tahra ', 'wefio;f'),
(12, 'zeiny', 'babw');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tst`
--
ALTER TABLE `tst`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tst`
--
ALTER TABLE `tst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
