-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 22 Juin 2023 à 13:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `administrateur`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE IF NOT EXISTS `administrateurs` (
  `nom` varchar(75) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `mot_de_passe` varchar(75) NOT NULL,
  `poste` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateurs`
--

INSERT INTO `administrateurs` (`nom`, `prenom`, `email`, `mot_de_passe`, `poste`) VALUES
('DAO', 'Razak', 'razakdao019@gmail.com', '$2y$10$fEfe4Xl42hEqhj4tLMF0EOWiH5XO2aehpzO.4b..moONrmhk1y0Iq', 'directeur');

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `ID` int(75) NOT NULL AUTO_INCREMENT,
  `nom` varchar(75) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telephone` varchar(75) NOT NULL,
  `mot_de_passe` varchar(75) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `parent`
--

INSERT INTO `parent` (`ID`, `nom`, `prenom`, `email`, `telephone`, `mot_de_passe`) VALUES
(11, 'Ouedraogo', 'Sadia', 'kaboresadia12@gmail.com', '61999980', '$2y$10$eY3Z4xiCphwpdyYVrytHGOlu5nDVR.8pScb8PgWRSOzlJs1qxCjgq'),
(12, 'Ouedraogo', 'Sadia', 'kaboresadia12@gmail.com', '61956856', '$2y$10$70Cpkkju2CRg3ZOuGR/vceiBU.wIX.RSnvUNwusb8JzyCGjvK6jC6');

-- --------------------------------------------------------

--
-- Structure de la table `table_eleves`
--

CREATE TABLE IF NOT EXISTS `table_eleves` (
  `ID` int(75) NOT NULL AUTO_INCREMENT,
  `nom` varchar(75) NOT NULL,
  `prenom` varchar(75) NOT NULL,
  `age` varchar(75) NOT NULL,
  `classe` varchar(75) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `table_eleves`
--

INSERT INTO `table_eleves` (`ID`, `nom`, `prenom`, `age`, `classe`) VALUES
(2, 'DAO', 'Razak', '22', '3Ã¨me');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
