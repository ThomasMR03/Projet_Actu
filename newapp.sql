-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 05 Avril 2017 à 09:21
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `newapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(25) CHARACTER SET utf8 NOT NULL,
  `contenu` longtext NOT NULL,
  `date_creation` date NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `auteur` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date_creation`, `category_id`, `auteur`, `img`) VALUES
(1, 'Bienvenue sur mon site ', 'Je vous souhaite la bienvenue sur mon site web, vous pourrez y retrouver une multitude d''articles sur le jeux-vidéo Dofus !', '2017-03-28', 3, 'CaptainFire03', ''),
(9, 'Update du site', 'Le site affiche désormais correctement la date et l''heure !', '2017-03-29', 3, 'CaptainFire03', ''),
(10, 'Forum en création', 'Ce site migre peu à peu vers un format (Forum)', '2017-03-30', 1, 'CaptainFire03', ''),
(13, 'Nouveau Design', 'Un nouveau design est en cours de création', '2017-04-03', 3, 'CaptainFire03', ''),
(15, 'Test Image', 'Test', '2017-04-03', 1, 'CaptainFire03', 'https://img.hebus.com/hebus_2008/01/05/preview/080105175018_77.jpg'),
(16, 'Test', 'Test', '2017-04-03', 1, 'CaptainFire03', 'https://lh4.ggpht.com/wKrDLLmmxjfRG2-E-k5L5BUuHWpCOe4lWRF7oVs1Gzdn5e5yvr8fj-ORTlBF43U47yI=w300');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `messageCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `titre`, `messageCat`) VALUES
(1, 'Infos', 0),
(2, 'Fake News', 0),
(3, 'Nouveautés', 0);

-- --------------------------------------------------------

--
-- Structure de la table `forumMessage`
--

CREATE TABLE `forumMessage` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sujet_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `forumMessage`
--

INSERT INTO `forumMessage` (`id`, `message`, `sujet_id`, `category_id`) VALUES
(1, 'Bonjour', 1, 1),
(2, 'Hello', 2, 0),
(3, 'Hello 2', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `forumSujet`
--

CREATE TABLE `forumSujet` (
  `id` int(11) NOT NULL,
  `titre` varchar(25) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `forumSujet`
--

INSERT INTO `forumSujet` (`id`, `titre`, `category_id`) VALUES
(1, 'Test', 1),
(2, 'FAQ', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `membre_rang` enum('visiteur','inscrit','modo','admin') DEFAULT 'inscrit',
  `message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `date_de_naissance`, `membre_rang`, `message`) VALUES
(1, 'CaptainFire03', 'c955a0060768c59720af5c02a18797717a4aeda1', '1995-10-19', 'admin', 0),
(2, 'Seizuko', 'f8728f2c3d5b7e7529ebeadc434d5db085fa47ee', '1995-03-22', 'admin', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forumMessage`
--
ALTER TABLE `forumMessage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forumSujet`
--
ALTER TABLE `forumSujet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `forumMessage`
--
ALTER TABLE `forumMessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `forumSujet`
--
ALTER TABLE `forumSujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
