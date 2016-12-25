-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 23 Décembre 2016 à 22:00
-- Version du serveur :  5.6.32-1+deb.sury.org~xenial+0.1
-- Version de PHP :  7.0.13-3+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `idselfie` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `com` text NOT NULL,
  `comdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `idselfie`, `pseudo`, `com`, `comdate`) VALUES
(9, 0, 'chris', 'coucou', '2016-12-22'),
(10, 24, 'chris', 'coucou', '2016-12-22'),
(11, 33, 'Test', 'Blabla blabla', '2016-12-23'),
(12, 33, 'hop', 'Nice pic !', '2016-12-23'),
(13, 33, 'Chris', 'La tête d\'élise mdr ! (c\'est un test)', '2016-12-23'),
(14, 33, 'ch', 'coucou', '2016-12-23'),
(15, 33, 'TestComment', 'Blabla ', '2016-12-23');

-- --------------------------------------------------------

--
-- Structure de la table `iplikendislike`
--

CREATE TABLE `iplikendislike` (
  `id` int(11) NOT NULL,
  `idselfie` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `iplikendislike`
--

INSERT INTO `iplikendislike` (`id`, `idselfie`, `ip`) VALUES
(1375, 54, '127.0.0.1'),
(1376, 55, '127.0.0.1'),
(1377, 51, '127.0.0.1'),
(1378, 29, '127.0.0.1');

-- --------------------------------------------------------

--
-- Structure de la table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `islike` int(11) NOT NULL,
  `dontlike` int(11) NOT NULL,
  `adddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `participant`
--

INSERT INTO `participant` (`id`, `pseudo`, `email`, `img`, `islike`, `dontlike`, `adddate`) VALUES
(21, 'fran', 'francoisandrze@gmail.com', 'zelda.jpg', 0, 1, '2016-11-20'),
(22, 'Christianemo', 'elise.daudenthun@outlook.fr', '20161221_135017.jpg', 1, 999, '2016-12-18'),
(24, 'Mettadict', 'elise.daudenthun@outlook.fr', '20161221_140025.jpg', 1, 2, '2016-12-18'),
(26, 'ChristianMusclor', 'elise.daudenthun@outlook.fr', '20161221_133944.jpg', 1, 2, '2016-12-18'),
(27, 'ChristianBg', 'elise.daudenthun@outlook.fr', '20161221_134128.jpg', 0, 2, '2016-11-27'),
(28, 'ChristianTard', 'elise.daudenthun@outlook.fr', '20161221_133850.jpg', 0, 2, '2016-12-11'),
(29, 'ChristianStar', 'elise.daudenthun@outlook.fr', '20161221_133555.jpg', 4, 3, '2016-12-22'),
(30, 'Mettaprie', 'elise.daudenthun@outlook.fr', '20161221_135342.jpg', 3, 3, '2016-12-22'),
(32, 'Metaposé', 'elise.daudenthun@outlook.fr', '20161221_140025.jpg', 0, 2, '2016-12-04'),
(33, 'Megaami', 'elise.daudenthun@outlook.fr', '20161221_135716.jpg', 2, 1, '2016-12-18'),
(35, 'fran62', 'francoisandrze@gmail.com', 'zelda.jpg', 0, 0, '2016-12-18'),
(39, 'Megami', 'elise.daudenthun@outlook.fr', '20161221_134157.jpg', 0, 0, '2016-12-18'),
(40, 'Hxjcjc', 'elise.daudenthun@outlook.fr', 'Snapchat-27015670.jpg', 0, 0, '2016-12-18'),
(41, 'Igigi', 'elise.daudenthun@outlook.fr', '20161221_140025.jpg', 1, 0, '2016-12-18'),
(42, 'Igigi', 'elise.daudenthun@outlook.fr', '20161221_140025.jpg', 0, 0, '2016-12-18'),
(43, 'ChristianTard', 'elise.daudenthun@outlook.fr', '20161221_133850.jpg', 1, 3, '2016-12-22'),
(44, 'ChristianBG', 'elise.daudenthun@outlook.fr', '20161221_134128.jpg', 0, 0, '2016-12-18'),
(45, 'ChristianMusclor', 'elise.daudenthun@outlook.fr', '20161221_133944.jpg', 3, 1, '2016-12-22'),
(46, 'Megamiprison', 'elise.daudenthun@outlook.fr', '20161221_135716.jpg', 2, 1, '2016-12-22'),
(47, 'Megamiprison', 'elise.daudenthun@outlook.fr', '20161221_135716.jpg', 3, 1, '2016-12-22'),
(48, 'Metaprie', 'elise.daudenthun@outlook.fr', '20161221_135342.jpg', 1, 2, '2016-12-22'),
(49, 'Metalheure', 'elise.daudenthun@outlook.fr', '20161221_134349.jpg', 3, 1, '2016-12-22'),
(50, 'Chrichri', 'elise.daudenthun@outlook.fr', '20161221_133555.jpg', 3, 0, '2016-12-22'),
(51, 'Moietrechrichri', 'elise.daudenthun@outlook.fr', '20161221_133850.jpg', 2, 3, '2016-12-22'),
(52, 'ChrisNemo', 'elise.daudenthun@outlook.fr', '20161221_135017.jpg', 5, 0, '2016-12-22'),
(53, 'Selff', 'chopin@fred.com', 'image.jpg', 3, 0, '2016-12-23'),
(54, 'François le Français', 'franandrze@gmail.com', 'DSC_0001.JPG', 4, 0, '2016-12-23'),
(55, 'Chris', 'chris@gmail.com', 'DSC_0002.JPG', 8, 2, '2016-12-23'),
(56, 'Max', 'max@gmail.com', 'DSC_0001.JPG', 0, 0, '2016-12-23');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `iplikendislike`
--
ALTER TABLE `iplikendislike`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `iplikendislike`
--
ALTER TABLE `iplikendislike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1379;
--
-- AUTO_INCREMENT pour la table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
