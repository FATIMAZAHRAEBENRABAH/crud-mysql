-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 16 fév. 2022 à 18:42
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `data`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `matricule` char(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `departement` varchar(20) NOT NULL,
  `salaire` decimal(20,0) NOT NULL,
  `fonction` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`matricule`, `nom`, `prenom`, `date_naissance`, `departement`, `salaire`, `fonction`) VALUES
('', '', '', '0000-00-00', '', '0', ''),
('100', 'harrak', 'SALMA', '2003-02-26', 'ZAZAE', '15000', 'programmeur'),
('1231', 'Fatima', 'Benrabah', '2002-11-13', 'RH', '100000', 'DW'),
('150', 'harrak', 'souhaia', '2003-02-26', 'nnn', '15000', 'programmeur'),
('154', 'ghhfrf', 'rttyft', '4552-05-08', 'gffg', '1245', 'rtgre'),
('200', 'harrak', 'SALMA', '2003-02-26', '', '15000', 'programmeur'),
('400', 'harrak', 'SALMA', '2003-02-26', 'ZAZAE', '15000', 'programmeur'),
('788', 'fati', 'yityt', '2003-02-26', 'nnn', '15000', 'programmeur'),
('897', 'harrak', 'SALMA', '2003-02-26', 'ZAZAE', '15000', 'programmeur'),
('Fatima', 'Benrabah', '', '0000-00-00', '', '0', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`matricule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
