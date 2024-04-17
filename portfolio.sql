-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 06 avr. 2024 à 17:29
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `consentement`
--

DROP TABLE IF EXISTS `consentement`;
CREATE TABLE IF NOT EXISTS `consentement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `consent` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `consentement`
--

INSERT INTO `consentement` (`id`, `consent`, `nom`, `prenom`, `objet`, `date`) VALUES
(1, 'Oui', 'Renard', 'Terence', 'qfeqfqfqf', '2024-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `sous_titre`
--

DROP TABLE IF EXISTS `sous_titre`;
CREATE TABLE IF NOT EXISTS `sous_titre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `texte` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sous_titre`
--

INSERT INTO `sous_titre` (`id`, `texte`) VALUES
(1, 'Consomme plus de 3go par semaine'),
(2, 'Stack Overflow, je t\'aime'),
(3, 'Ctrl+C, Ctrl+V, et ça plante !'),
(4, 'Couleur verte insuffisante dans ce Portfolio...'),
(5, 'L\'URL du site n\'est pas 127.0.0.1'),
(6, 'Connaît des jeux inconnus du monde entier'),
(7, 'A sûrement dû oublier un point-virgule quelque part'),
(8, 'Nom random et incohérent pour la classe CSS : Check'),
(9, 'Inspecteur malgré lui, cherchant le criminel dans le but d\'effacer sa ligne'),
(10, 'Passe beaucoup trop de temps sur le PC, l\'employé idéal à coup sûr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
