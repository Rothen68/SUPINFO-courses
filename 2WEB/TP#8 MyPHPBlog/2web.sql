-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 05 Juin 2015 à 13:22
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `2web`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `postID` int(255) unsigned NOT NULL,
  `userID` int(255) unsigned NOT NULL,
  `publicationDate` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `body`, `postID`, `userID`, `publicationDate`) VALUES
(2, 'test', 5, 1, 1433497619),
(3, 'test', 5, 1, 1433497631),
(7, 'blop', 5, 1, 1433497775),
(6, 'test', 0, 1, 1433497742),
(8, 'test', 5, 1, 1433498111),
(9, 'test', 5, 1, 1433498117),
(10, 'test', 9, 1, 1433500261),
(11, 'test', 9, 1, 1433500301),
(12, 'test', 9, 1, 1433500339),
(13, 'test', 9, 1, 1433500392);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `publicationDate` int(11) NOT NULL,
  `userID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `publicationDate`, `userID`) VALUES
(5, 'blop', 'blop', 1433433227, 1),
(4, 'test', 'test', 1433432356, 1),
(6, ':title', ':body', 1433490718, 1),
(7, 'blop blop', 'kamui', 1433490811, 1),
(8, 'kamui', 'kamui', 1433497500, 1),
(9, 'myPost', 'MyBody', 1433500251, 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`) VALUES
(1, 'test@test.com', '1234', 'Prénom', 'NOM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
