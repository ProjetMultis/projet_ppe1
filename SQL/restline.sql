-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 17 Novembre 2016 à 17:08
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restline`
--

-- --------------------------------------------------------

--
-- Structure de la table `accepter`
--

CREATE TABLE `accepter` (
  `idPaiement` int(10) NOT NULL,
  `idResto` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(10) NOT NULL,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `adresseClient` varchar(100) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `emailClient`, `adresseClient`, `numTelClient`) VALUES
(1, 'feride', 'feride@hotmail.fr', '30 rue des cerisier', 130254678);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `idCom` int(10) NOT NULL,
  `auteurCom` varchar(50) DEFAULT NULL,
  `sujetCom` varchar(50) DEFAULT NULL,
  `texteCom` varchar(100) DEFAULT NULL,
  `idClient` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`idCom`, `auteurCom`, `sujetCom`, `texteCom`, `idClient`) VALUES
(1, 'admin', 'Premiers commentaires', 'Ceci est le premiers commentaires de l?administrateurs', 1);

-- --------------------------------------------------------

--
-- Structure de la table `correspondre`
--

CREATE TABLE `correspondre` (
  `idMenu` int(10) NOT NULL,
  `idReservation` int(10) NOT NULL,
  `numSemaine` int(2) NOT NULL,
  `pourcentage` decimal(5,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

CREATE TABLE `effectuer` (
  `idResto` int(10) NOT NULL,
  `idMenu` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(10) NOT NULL,
  `nomMenu` char(100) DEFAULT NULL,
  `prixMenu` decimal(10,2) DEFAULT NULL,
  `ingredientsMenu` varchar(400) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`idMenu`, `nomMenu`, `prixMenu`, `ingredientsMenu`) VALUES
(1, 'Poulet de Bresse aux gousses d ail et foie gras', '120.00', 'Poulet ail foie gras sauce magique'),
(2, 'langoustines soufflées chez Le Duc', '60.00', 'Langoustines, sauce pimenté'),
(3, 'Foie de veau de Corrèze cuit épais', '40.00', 'Foie de veau, sauce citron'),
(4, 'Soufflé au chocolat', '8.00', 'Chocolat'),
(5, 'Tarte aux fraises', '19.00', 'Fraise, pâtes'),
(6, 'Clafoutis aux fruits de saison', '13.00', 'Clafoutis, orange, fraises, framboises'),
(7, 'Tarte tatin', '13.00', 'Crème fraiche, tarte tatin'),
(8, 'Paris-Brest', '9.00', 'Crème, lait'),
(9, 'Jambon blanc, truffe, spaghetti au parmesan', '89.00', 'Jambon de paris, truffe, spaghetti, pâtes, parmesan');

-- --------------------------------------------------------

--
-- Structure de la table `particulier`
--

CREATE TABLE `particulier` (
  `idClient` int(10) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `adresseClient` varchar(100) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `particulier`
--

INSERT INTO `particulier` (`prenom`, `nomClient`, `emailClient`, `adresseClient`, `numTelClient`, `idClient`) VALUES
('mery', 'feride', 'feride@hotmail.fr', '30 rue des cerisier', 130254678, 1);

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

CREATE TABLE `periode` (
  `numSemaine` int(11) NOT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `periode`
--

INSERT INTO `periode` (`numSemaine`, `dateDebut`, `dateFin`) VALUES
(1, '2016-11-17', '2016-12-17');

-- --------------------------------------------------------

--
-- Structure de la table `professionnel`
--

CREATE TABLE `professionnel` (
  `numSiret` varchar(35) DEFAULT NULL,
  `nomContact` varchar(20) DEFAULT NULL,
  `prenomContact` varchar(20) DEFAULT NULL,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `adresseClient` varchar(100) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL,
  `idClient` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `professionnel`
--

INSERT INTO `professionnel` (`numSiret`, `nomContact`, `prenomContact`, `nomClient`, `emailClient`, `adresseClient`, `numTelClient`, `idClient`) VALUES
('732 829 320 00074', 'rudy', 'mouloud', 'feride', 'feride@hotmail.fr', '30 rue des cerisier', 130254678, 1);

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idRegion` int(10) NOT NULL,
  `nomRegion` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`idRegion`, `nomRegion`) VALUES
(8, NULL),
(7, NULL),
(6, NULL),
(5, NULL),
(9, NULL),
(10, 'Ile de France'),
(11, 'PACA'),
(12, 'Bretagne'),
(13, 'Normandie'),
(14, 'Hauts-de-France'),
(15, 'Occitanie'),
(16, 'Nouvelle-Aquitaine'),
(17, 'Grand-Est'),
(18, 'Pays de la Loire'),
(19, 'Centre-Val de Loire'),
(20, 'Bourgogne-Franche-Comté'),
(21, 'Auvergne-Rhône-Alpes'),
(22, 'Corse'),
(23, 'Ile de France'),
(24, 'PACA'),
(25, 'Bretagne'),
(26, 'Normandie'),
(27, 'Hauts-de-France'),
(28, 'Occitanie'),
(29, 'Nouvelle-Aquitaine'),
(30, 'Grand-Est'),
(31, 'Pays de la Loire'),
(32, 'Centre-Val de Loire'),
(33, 'Bourgogne-Franche-Comté'),
(34, 'Auvergne-Rhône-Alpes'),
(35, 'Corse');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idReservation` int(10) NOT NULL,
  `dateReservation` date DEFAULT NULL,
  `heureReservation` time DEFAULT NULL,
  `nbPersonnes` int(5) DEFAULT NULL,
  `idResto` int(10) NOT NULL,
  `idClient` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`idReservation`, `dateReservation`, `heureReservation`, `nbPersonnes`, `idResto`, `idClient`) VALUES
(1, '2016-11-17', '09:00:00', 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `idResto` int(10) NOT NULL,
  `nomResto` varchar(30) DEFAULT NULL,
  `nbTables` int(5) DEFAULT NULL,
  `nbCouverts` int(5) DEFAULT NULL,
  `telResto` int(10) DEFAULT NULL,
  `heureOuv` time DEFAULT NULL,
  `heureFer` time DEFAULT NULL,
  `ferExceptionnelle` varchar(100) DEFAULT NULL,
  `imageResto` varchar(30) DEFAULT NULL,
  `idTypeResto` int(20) NOT NULL,
  `cpVille` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `restaurant`
--

INSERT INTO `restaurant` (`idResto`, `nomResto`, `nbTables`, `nbCouverts`, `telResto`, `heureOuv`, `heureFer`, `ferExceptionnelle`, `imageResto`, `idTypeResto`, `cpVille`) VALUES
(1, 'Amere', 15, 8, 120454678, '09:00:00', '22:00:00', NULL, NULL, 1, 1),
(2, 'Fulgurance', 10, 8, 145802316, '08:00:00', '22:00:00', NULL, NULL, 2, 2),
(3, 'Les Arlots', 12, 10, 479234556, '08:00:00', '22:00:00', NULL, NULL, 3, 3),
(4, 'Onoto', 11, 12, 101520302, '08:00:00', '22:00:00', NULL, NULL, 4, 4),
(5, 'La cave de l os moelle', 20, 6, 245788963, '10:00:00', '23:00:00', NULL, NULL, 5, 5),
(6, 'Les marches', 19, 8, 325687945, '10:00:00', '23:00:00', NULL, NULL, 6, 6),
(7, 'Le Bon saint pourcain', 18, 14, 456789632, '10:00:00', '23:00:00', NULL, NULL, 7, 7),
(8, 'Le baratin', 25, 14, 123456789, '08:00:00', '23:00:00', NULL, NULL, 8, 8);

-- --------------------------------------------------------

--
-- Structure de la table `typepaiement`
--

CREATE TABLE `typepaiement` (
  `idPaiement` int(10) NOT NULL,
  `libellePaiement` char(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typepaiement`
--

INSERT INTO `typepaiement` (`idPaiement`, `libellePaiement`) VALUES
(1, 'carte bleu'),
(2, 'espece'),
(3, 'cheque');

-- --------------------------------------------------------

--
-- Structure de la table `typeresto`
--

CREATE TABLE `typeresto` (
  `idTypeResto` int(20) NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  `catPrix` varchar(30) DEFAULT NULL,
  `nbEtoiles` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typeresto`
--

INSERT INTO `typeresto` (`idTypeResto`, `libelle`, `catPrix`, `nbEtoiles`) VALUES
(1, 'italien', 'Moyenne gammes', 3),
(2, 'Francais', 'Haute gammes', 5),
(3, 'Espagnole', 'Bas de gammes', 2),
(4, 'Allemand', 'Moyenne gammes', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `cpVille` char(5) NOT NULL,
  `nomVille` varchar(50) DEFAULT NULL,
  `idRegion` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`cpVille`, `nomVille`, `idRegion`) VALUES
('75001', 'Paris', 1),
('93200', 'Saint-Denis', 2),
('45530', 'Vitry au Loges', 3),
('94400', 'Vitry-sur-', 4),
('92600', 'Asnieres-sur-Seine', 5),
('92100', 'Boulogne-Billancourt', 6),
('92200', 'Neuilly-sur-Seine', 7),
('13001', 'Marseille', 8),
('29200', 'Brest', 9),
('66100', 'Perpignan', 10),
('59000', 'Lille', 11),
('67000', 'Strasbourg', 12),
('69001', 'Lyon', 13),
('33000', 'Bordeaux', 14),
('63000', 'Clermont-Ferrand', 15),
('14000', 'Caen', 16),
('21000', 'Dijon', 17),
('95330', 'Domont', 18),
('91000', 'Evry', 19),
('74400', 'Chamonix Mont Blanc', 20);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `accepter`
--
ALTER TABLE `accepter`
  ADD PRIMARY KEY (`idPaiement`,`idResto`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`idCom`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `correspondre`
--
ALTER TABLE `correspondre`
  ADD PRIMARY KEY (`idMenu`,`idReservation`,`numSemaine`);

--
-- Index pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD PRIMARY KEY (`idResto`,`idMenu`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Index pour la table `particulier`
--
ALTER TABLE `particulier`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`numSemaine`);

--
-- Index pour la table `professionnel`
--
ALTER TABLE `professionnel`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idRegion`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idReservation`),
  ADD KEY `idResto` (`idResto`),
  ADD KEY `idClient` (`idClient`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`idResto`),
  ADD KEY `idTypeResto` (`idTypeResto`),
  ADD KEY `cpVille` (`cpVille`);

--
-- Index pour la table `typepaiement`
--
ALTER TABLE `typepaiement`
  ADD PRIMARY KEY (`idPaiement`);

--
-- Index pour la table `typeresto`
--
ALTER TABLE `typeresto`
  ADD PRIMARY KEY (`idTypeResto`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`cpVille`),
  ADD KEY `idRegion` (`idRegion`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `idCom` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `periode`
--
ALTER TABLE `periode`
  MODIFY `numSemaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idRegion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idReservation` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `idResto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `typepaiement`
--
ALTER TABLE `typepaiement`
  MODIFY `idPaiement` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `typeresto`
--
ALTER TABLE `typeresto`
  MODIFY `idTypeResto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
