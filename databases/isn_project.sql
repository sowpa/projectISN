-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Juin 2017 à 21:54
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
  `description_long` text NOT NULL,
  `suivi` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `titre`, `description`, `id_teacher`, `ville`, `active`, `description_long`, `suivi`) VALUES
(24, 'Lorem ipsum dolor sit amet', 'In tale liber interpretaris vis, vel te paulo soleat offendit. Et maluisset percipitur nec. Cu prompta indoctum usu, no menandri indoctum facilisis sea. Sumo veri ad per, cibo ullamcorper et vix.', 1, 'Lille', 1, 'Lorem ipsum dolor sit amet, no vix accusam abhorreant cotidieque. Vel paulo similique theophrastus ei. Eu vel rebum omittantur, altera minimum referrentur te sed. No senserit moderatius vel. Te quo veri adolescens.\n\nVelit debitis adversarium et sed. Ea ferri rationibus sit, pri cetero disputationi ut, tempor volutpat omittantur ad eos. Ad mei impedit constituam, mea ut porro atomorum voluptaria, nam no tollit honestatis. Duo soluta putent id. Per solum libris persequeris an, at per liber harum dicam.', 0),
(23, 'Lorem ipsum', 'Ne vidit malis dicat qui, te error mucius fabellas vix. Deleniti deterruisset cu sea, sea nulla ancillae officiis ei. Sed eu nullam tempor. Usu no torquatos cotidieque dissentiunt, assum ridens vituperata cu qui. No pri epicurei lucilius liberavisse, te vix nullam patrioque. Nam eu nisl enim.', 1, 'Toulouse', 1, 'Lorem ipsum dolor sit amet, no vix accusam abhorreant cotidieque. Vel paulo similique theophrastus ei. Eu vel rebum omittantur, altera minimum referrentur te sed. No senserit moderatius vel. Te quo veri adolescens.\n\nVelit debitis adversarium et sed. Ea ferri rationibus sit, pri cetero disputationi ut, tempor volutpat omittantur ad eos. Ad mei impedit constituam, mea ut porro atomorum voluptaria, nam no tollit honestatis. Duo soluta putent id. Per solum libris persequeris an, at per liber harum dicam.', 0),
(25, 'Soleat inermis', 'In tale liber interpretaris vis, vel te paulo soleat offendit. Et maluisset percipitur nec. Cu prompta indoctum usu, no menandri indoctum facilisis sea. Sumo veri ad per, cibo ullamcorper et vix.', 1, 'Saint-Denis', 1, 'Lorem ipsum dolor sit amet, no vix accusam abhorreant cotidieque. Vel paulo similique theophrastus ei. Eu vel rebum omittantur, altera minimum referrentur te sed. No senserit moderatius vel. Te quo veri adolescens.\n\nVelit debitis adversarium et sed. Ea ferri rationibus sit, pri cetero disputationi ut, tempor volutpat omittantur ad eos. Ad mei impedit constituam, mea ut porro atomorum voluptaria, nam no tollit honestatis. Duo soluta putent id. Per solum libris persequeris an, at per liber harum dicam.', 0),
(26, 'dissentiet pro', 'Agam prima consul ei vix, ut sint dolore mediocrem vis', 1, 'Paris', 0, 'Lorem ipsum dolor sit amet, no vix accusam abhorreant cotidieque. Vel paulo similique theophrastus ei. Eu vel rebum omittantur, altera minimum referrentur te sed. No senserit moderatius vel. Te quo veri adolescens.\n\nVelit debitis adversarium et sed. Ea ferri rationibus sit, pri cetero disputationi ut, tempor volutpat omittantur ad eos. Ad mei impedit constituam, mea ut porro atomorum voluptaria, nam no tollit honestatis. Duo soluta putent id. Per solum libris persequeris an, at per liber harum dicam.', 2),
(22, 'Decore latine qui ut.', 'Ne vidit malis dicat qui, te error mucius fabellas vix. Deleniti deterruisset cu sea, sea nulla ancillae officiis ei. Sed eu nullam tempor. Usu no torquatos cotidieque dissentiunt, assum ridens vituperata cu qui. No pri epicurei lucilius liberavisse, te vix nullam patrioque. Nam eu nisl enim.', 1, 'Paris', 1, 'Lorem ipsum dolor sit amet, no vix accusam abhorreant cotidieque. Vel paulo similique theophrastus ei. Eu vel rebum omittantur, altera minimum referrentur te sed. No senserit moderatius vel. Te quo veri adolescens.\n\nVelit debitis adversarium et sed. Ea ferri rationibus sit, pri cetero disputationi ut, tempor volutpat omittantur ad eos. Ad mei impedit constituam, mea ut porro atomorum voluptaria, nam no tollit honestatis. Duo soluta putent id. Per solum libris persequeris an, at per liber harum dicam.', 0),
(27, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, ad eos case elitr, eu sed quod cibo democritum. His cu iusto scripta quaeque, sit paulo clita an.', 2, 'Roma', 1, 'Lorem ipsum dolor sit amet, ad eos case elitr, eu sed quod cibo democritum. His cu iusto scripta quaeque, sit paulo clita an. Accusam reprimique cu quo. Quo te suas docendi. Eos te nemore blandit. Sed ei odio luptatum expetendis.\r\n\r\nDuo dictas viderer aperiri ne, pri vocent consequuntur ea. Liber dicit deseruisse et duo. Voluptua reprehendunt sed te. Cu mea detraxit consectetuer. Qui te elit perfecto vituperatoribus.\r\n\r\nTe est hinc nulla iuvaret, enim meis honestatis mel ne, eu sed nulla ludus adipisci. ', 0),
(28, 'An inani appareat', 'An inani appareat accommodare vix, eum veritus percipit tractatos at, duo soleat accommodare eu.', 2, 'Paris', 1, 'Facer laoreet philosophia nec te, duo natum autem no. Prima veniam prodesset cum ea, solum tibique ea vim. Veniam option conclusionemque vel an, duo dictas maiestatis quaerendum ne, ius dissentiunt philosophia an. Per dicat congue in, reque delenit expetendis vix at. Vide voluptua intellegat pri et, ut mei insolens delicata reprehendunt. Et dico dictas repudiare mea, no pro nulla abhorreant.', 0),
(29, 'Purto paulo', 'Purto paulo ne usu. Ius probo adipiscing in, no clita explicari vel.', 2, 'Perpignan', 1, 'Purto paulo ne usu. Ius probo adipiscing in, no clita explicari vel. Has at sonet nobis nostrum. Percipitur temporibus et usu, paulo ullamcorper nam in. No odio vitae ridens sit, pri ea meliore volumus oportere. Omnes mentitum scriptorem pro ea, tale magna ludus has no. Ex laudem lucilius necessitatibus vel, et dolore epicuri vel.\r\n\r\nNec porro tibique ne, usu cu munere deseruisse, sea at quod odio aeque. Ei dictas cetero meliore nam, torquatos complectitur ad nam. At mei sapientem qualisque maluisset, ut errem honestatis instructior usu.', 0);

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
(1, 'Gabriel Colson', 'gabrielcolson@hotmail.fr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'default.png', 6, 0, 1, '02816572676030'),
(2, 'Gabriel93', 'gabrielcolson93@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'default.png', 3, 0, 1, '07460456520788');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
