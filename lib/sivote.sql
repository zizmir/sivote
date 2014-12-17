-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 15 Décembre 2014 à 09:44
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sivote`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `titre` varchar(300) NOT NULL,
  `article` varchar(300) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `article`, `id_user`) VALUES
(1, 'google', 'si on cree un genre de google application!!', 0),
(2, 'greve', 'Moi je dit on devrais faire une greve un jour de greve double action!!', 0),
(3, 'Crepe', 'Je declare que lundi c''est jour des crepes!!', 0),
(5, 'Linux', ' Reduire le prix du systeme d''exploitation linux de 50% !!', 0),
(6, 'Word', ' Word est un fantastique editeur de texte ''-''', 0),
(8, 'kazimir', ' On a bientot finit le site', 0);

-- --------------------------------------------------------

--
-- Structure de la table `util`
--

CREATE TABLE IF NOT EXISTS `util` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `pwd` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `util`
--

INSERT INTO `util` (`id_user`, `pseudo`, `pwd`) VALUES
(1, 'mbark', 'root'),
(2, 'user', ''),
(3, 'blek', ''),
(5, 'kazimir', ''),
(6, 'kazimir', 'PH5176Gr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
