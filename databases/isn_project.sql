-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 14 Avril 2017 à 22:17
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `isn_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `description_long` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `titre`, `description`, `id_teacher`, `ville`, `active`, `description_long`) VALUES
(20, 'super fun  ', 'dskjf qsdf qsf dq ffds ', 12, 'Paname', 1, 'S/DKJ NKJQ SFDKLJFKJLmqkjsdf g jkqkmjf\r\nqmkjqùkljqsdf jk\r\nqùqmkjsdqjfk\r\nq \r\n*qkqsdjf \r\nq qmkjjfd qs\r\nqlsd fqsdf $\r\nqsdf qqsdf '),
(18, 'drtyd', 'rtdyydrt tyiyy d', 8, 'dtryd', 1, ' sdrty srtysrt ysrty srty srty sr yuhgjjkvjhgj dty'),
(19, ' vbhxt yu', 'xfhgtxfty xfyh ', 12, 'xfg xy ', 1, 'sxrty srt u rtdy rst ydsrtysrr thrxwh'),
(16, 'hjh', 'jff ', 8, 'hkhk', 1, 'dtyu dthj dtj'),
(17, 'dtyu', 'dtyudtyu  d', 8, 'dtyu', 1, 'd tyudtyu '),
(10, '12343', 'RKUHZAKFBDSLJF HBS', 10, '12345', 1, 'FD?FVWXJK ZE RD'),
(11, 'df', 'wdfgwdfgwdfg', 8, 'dfgdfg', 1, 'rd tq&lt;se rqZRFDWSDFGDF GWDFG WDFGW WF WDFGW FD'),
(12, 'wsddf', 'wsd', 8, 'w&lt;sdf', 1, 'wsdfwsdf wdsf wsd f'),
(13, 'wsdf', 'wsdfwsdfws', 8, 'wsdfw', 1, 'xcvxfgh tjfg jwtwxcg'),
(14, 'wdfg hgdf fg', 'xfgh xfg hw&lt;stqzettgfxh', 8, ' gxfhxfghxcvhb njgf xfg', 1, ' xdfgh wdrtgwsdgf dfgrd \r\nest wdrko w\r\n wrd\r\n^lowdry h'),
(15, '12343', 'dr jhgk wdf hdfg', 8, 'jioè-r(', 1, 'dfhgdg dwfgsetes tht jfxfgh ');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `credit` int(11) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL DEFAULT '0',
  `confirmed` int(11) NOT NULL,
  `confirmkey` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `password`, `avatar`, `credit`, `admin`, `confirmed`, `confirmkey`) VALUES
(8, 'test1234', 'test123@hotmail.fr', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '8.jpg', 0, 0, 0, ''),
(7, 'Gabriel', 'gabrielcolson93200@gmail.com', 'f3a8340d9cd6207c6c544736c0341883a5fdc8df', '7.jpg', 0, 0, 0, ''),
(9, 'Maknae93', 'billy.vang27@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '9.jpg', 0, 0, 0, ''),
(10, 'seccour1', 'seccour@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '10.jpg', 0, 0, 0, ''),
(12, 'Gabriel Colson', 'gabrielcolson@hotmail.fr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '12.jpg', 0, 0, 0, '05899935027245'),
(15, 'gabdu93', 'gabrielcolson93@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'default.png', 0, 0, 1, '14302917156303');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
