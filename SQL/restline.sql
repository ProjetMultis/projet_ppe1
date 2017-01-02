-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 30 Décembre 2016 à 14:48
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
-- Doublure de structure pour la vue `affichagemenu`
--
CREATE TABLE `affichagemenu` (
`idResto` int(10)
,`nomResto` varchar(30)
,`imageResto` varchar(50)
,`nomMenu` char(100)
,`prixMenu` decimal(10,2)
,`ingredientsMenu` varchar(400)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `affichagerestaurant`
--
CREATE TABLE `affichagerestaurant` (
`idResto` int(10)
,`nomResto` varchar(30)
,`nomVille` varchar(50)
,`nomRegion` varchar(50)
,`libelle` varchar(50)
,`imageResto` varchar(50)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `affichageunrestaurant`
--
CREATE TABLE `affichageunrestaurant` (
`nomResto` varchar(30)
,`nomVille` varchar(50)
,`nomRegion` varchar(50)
,`libelle` varchar(50)
,`imageResto` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(10) NOT NULL,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `emailClient`, `numTelClient`, `cp`, `rue`) VALUES
(1, 'titi', 'toto@gmail.com', 647895612, 78180, '30 rue des blaireaux');

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

--
-- Contenu de la table `effectuer`
--

INSERT INTO `effectuer` (`idResto`, `idMenu`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `formatunrestaurant`
--
CREATE TABLE `formatunrestaurant` (
`idResto` int(10)
,`nomResto` varchar(30)
,`nbTables` int(5)
,`nbCouverts` int(5)
,`telResto` int(10)
,`heureOuv` time
,`heureFer` time
,`ferExceptionnelle` varchar(100)
,`imageResto` varchar(50)
,`libelle` varchar(50)
,`catPrix` varchar(30)
);

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
(2, 'Langoustines soufflees chez Le Duc', '60.00', 'Langoustines, sauce pimente'),
(3, 'Foie de veau de Correze cuit epais', '40.00', 'Foie de veau, sauce citron'),
(4, 'Souffle au chocolat', '8.00', 'Chocolat'),
(5, 'Tarte aux fraises', '19.00', 'Fraise, pates'),
(6, 'Clafoutis aux fruits de saison', '13.00', 'Clafoutis, orange, fraises, framboises'),
(7, 'Tarte tatin', '13.00', 'Creme fraiche, tarte tatin'),
(8, 'Paris-Brest', '9.00', 'Creme, lait'),
(9, 'Jambon blanc, truffe, spaghetti au parmesan', '89.00', 'Jambon de paris, truffe, spaghetti, pates, parmesan');

-- --------------------------------------------------------

--
-- Structure de la table `particulier`
--

CREATE TABLE `particulier` (
  `idClient` int(10) NOT NULL,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `particulier`
--

INSERT INTO `particulier` (`idClient`, `nomClient`, `emailClient`, `numTelClient`, `cp`, `rue`, `prenom`) VALUES
(1, 'titi', 'toto@gmail.com', 647895612, 78180, '30 rue des blaireaux', 'toto');

--
-- Déclencheurs `particulier`
--
DELIMITER $$
CREATE TRIGGER `Professionnel` BEFORE INSERT ON `particulier` FOR EACH ROW begin
  declare nbc, nbe int;
  select count(*) into nbc
  from client
  where idClient = new.idClient;

    if nbc = 0
      then
        insert into client values(new.idClient, new.nomClient, new.emailClient, new.numTelClient, new.cp, new.rue);
    END if;
    select count(*) into nbe
    from Professionnel
    where idClient = new.idClient;

    if nbe > 0
      then
        SIGNAL SQLSTATE'45000'
        set message_text = 'il est profesionnel';
    END if;
    END
$$
DELIMITER ;

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
  `idClient` int(10) NOT NULL,
  `nomClient` varchar(30) DEFAULT NULL,
  `emailClient` varchar(40) DEFAULT NULL,
  `numTelClient` int(10) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `rue` varchar(50) DEFAULT NULL,
  `numSiret` varchar(35) DEFAULT NULL,
  `nomContact` varchar(20) DEFAULT NULL,
  `prenomContact` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déclencheurs `professionnel`
--
DELIMITER $$
CREATE TRIGGER `Particulier` BEFORE INSERT ON `professionnel` FOR EACH ROW begin
    declare nbc, nbe int;
    select count(*) into nbc
    from client
    where idClient = new.idClient;

      if nbc = 0
        then
          insert into client values(new.idClient, new.nomClient, new.emailClient, new.numTelClient, new.cp, new.rue);
      END if;
      select count(*) into nbe
      from Particulier
      where idClient = new.idClient;

      if nbe > 0
        then
          SIGNAL SQLSTATE'45000'
          set message_text = 'il est particulier';
      END if;
      END
$$
DELIMITER ;

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
(1, 'Ile de France'),
(2, 'PACA'),
(3, 'Bretagne'),
(4, 'Normandie'),
(5, 'Hauts-de-France'),
(6, 'Occitanie'),
(7, 'Nouvelle-Aquitaine'),
(8, 'Grand-Est'),
(9, 'Pays de la Loire'),
(10, 'Centre-Val de Loire'),
(11, 'Bourgogne-Franche-Comté'),
(12, 'Auvergne-Rhône-Alpes'),
(13, 'Corse'),
(14, 'Ile de France'),
(15, 'PACA'),
(16, 'Bretagne'),
(17, 'Normandie'),
(18, 'Hauts-de-France'),
(19, 'Occitanie'),
(20, 'Nouvelle-Aquitaine'),
(21, 'Grand-Est'),
(22, 'Pays de la Loire'),
(23, 'Centre-Val de Loire'),
(24, 'Bourgogne-Franche-Comté'),
(25, 'Auvergne-Rhône-Alpes'),
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
  `imageResto` varchar(50) DEFAULT NULL,
  `idTypeResto` int(20) NOT NULL,
  `cpVille` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `restaurant`
--

INSERT INTO `restaurant` (`idResto`, `nomResto`, `nbTables`, `nbCouverts`, `telResto`, `heureOuv`, `heureFer`, `ferExceptionnelle`, `imageResto`, `idTypeResto`, `cpVille`) VALUES
(1, 'Amere', 15, 8, 120454678, '09:00:00', '22:00:00', NULL, 'image/amere.jpg', 2, 75001),
(2, 'Fulgurance', 10, 8, 145802316, '08:00:00', '22:00:00', NULL, 'image/Fulgurance.jpg', 2, 93200),
(3, 'Les Arlots', 12, 10, 479234556, '08:00:00', '22:00:00', NULL, 'image/les_arlots.jpg', 3, 45530),
(4, 'Onoto', 11, 12, 101520302, '08:00:00', '22:00:00', NULL, 'image/Onoto.jpg', 4, 94400),
(5, 'La cave de l os moelle', 20, 6, 245788963, '10:00:00', '23:00:00', NULL, 'image/la_cave_a_los_m.JPG', 3, 92600),
(6, 'Les marches', 19, 8, 325687945, '10:00:00', '23:00:00', NULL, 'image/les_marches.jpg', 4, 29200),
(7, 'Le Bon saint pourcain', 18, 14, 456789632, '10:00:00', '23:00:00', NULL, 'image/le_bon_saint_pourcains.jpg', 4, 92100),
(8, 'Le baratin', 25, 14, 123456789, '08:00:00', '23:00:00', NULL, 'image/le_baratin.jpg', 4, 92200),
(9, 'la fourchette', 22, 6, 145789663, '08:00:00', '22:00:00', NULL, 'image/la_fourchette.jpg', 2, 75001);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `selectcontacteparticulier`
--
CREATE TABLE `selectcontacteparticulier` (
`idClient` int(10)
,`nomClient` varchar(30)
,`emailClient` varchar(40)
,`numTelClient` int(10)
,`cp` int(5)
,`rue` varchar(50)
,`prenom` varchar(30)
,`auteurCom` varchar(50)
,`sujetCom` varchar(50)
,`texteCom` varchar(100)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `selectcontacteprofessionnel`
--
CREATE TABLE `selectcontacteprofessionnel` (
`idClient` int(10)
,`nomClient` varchar(30)
,`emailClient` varchar(40)
,`numTelClient` int(10)
,`cp` int(5)
,`rue` varchar(50)
,`numSiret` varchar(35)
,`nomContact` varchar(20)
,`prenomContact` varchar(20)
,`auteurCom` varchar(50)
,`sujetCom` varchar(50)
,`texteCom` varchar(100)
);

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
  `cpVille` int(5) NOT NULL,
  `nomVille` varchar(50) DEFAULT NULL,
  `idRegion` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`cpVille`, `nomVille`, `idRegion`) VALUES
(75001, 'Paris', 1),
(93200, 'Saint-Denis', 1),
(45530, 'Vitry au Loges', 3),
(94400, 'Vitry-sur-', 4),
(92600, 'Asnieres-sur-Seine', 5),
(92100, 'Boulogne-Billancourt', 6),
(92200, 'Neuilly-sur-Seine', 7),
(13001, 'Marseille', 8),
(29200, 'Brest', 9),
(66100, 'Perpignan', 10),
(59000, 'Lille', 11),
(67000, 'Strasbourg', 12),
(69001, 'Lyon', 13),
(33000, 'Bordeaux', 14),
(63000, 'Clermont-Ferrand', 15),
(14000, 'Caen', 16),
(21000, 'Dijon', 17),
(95330, 'Domont', 18),
(91000, 'Evry', 19),
(74400, 'Chamonix Mont Blanc', 20);

-- --------------------------------------------------------

--
-- Structure de la vue `affichagemenu`
--
DROP TABLE IF EXISTS `affichagemenu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `affichagemenu`  AS  (select `r`.`idResto` AS `idResto`,`r`.`nomResto` AS `nomResto`,`r`.`imageResto` AS `imageResto`,`m`.`nomMenu` AS `nomMenu`,`m`.`prixMenu` AS `prixMenu`,`m`.`ingredientsMenu` AS `ingredientsMenu` from ((`restaurant` `r` join `effectuer` `e`) join `menu` `m`) where ((`r`.`idResto` = `e`.`idResto`) and (`e`.`idMenu` = `m`.`idMenu`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `affichagerestaurant`
--
DROP TABLE IF EXISTS `affichagerestaurant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `affichagerestaurant`  AS  (select `r`.`idResto` AS `idResto`,`r`.`nomResto` AS `nomResto`,`v`.`nomVille` AS `nomVille`,`re`.`nomRegion` AS `nomRegion`,`tr`.`libelle` AS `libelle`,`r`.`imageResto` AS `imageResto` from (((`ville` `v` join `region` `re`) join `typeresto` `tr`) join `restaurant` `r`) where ((`tr`.`idTypeResto` = `r`.`idTypeResto`) and (`r`.`cpVille` = `v`.`cpVille`) and (`v`.`idRegion` = `re`.`idRegion`)) order by `r`.`nomResto`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `affichageunrestaurant`
--
DROP TABLE IF EXISTS `affichageunrestaurant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `affichageunrestaurant`  AS  (select `r`.`nomResto` AS `nomResto`,`v`.`nomVille` AS `nomVille`,`re`.`nomRegion` AS `nomRegion`,`tr`.`libelle` AS `libelle`,`r`.`imageResto` AS `imageResto` from (((`ville` `v` join `region` `re`) join `typeresto` `tr`) join `restaurant` `r`) where ((`tr`.`idTypeResto` = `r`.`idTypeResto`) and (`r`.`cpVille` = `v`.`cpVille`) and (`v`.`idRegion` = `re`.`idRegion`) and (`tr`.`nbEtoiles` = 5)) order by `r`.`nomResto`) ;

-- --------------------------------------------------------

--
-- Structure de la vue `formatunrestaurant`
--
DROP TABLE IF EXISTS `formatunrestaurant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `formatunrestaurant`  AS  (select `r`.`idResto` AS `idResto`,`r`.`nomResto` AS `nomResto`,`r`.`nbTables` AS `nbTables`,`r`.`nbCouverts` AS `nbCouverts`,`r`.`telResto` AS `telResto`,`r`.`heureOuv` AS `heureOuv`,`r`.`heureFer` AS `heureFer`,`r`.`ferExceptionnelle` AS `ferExceptionnelle`,`r`.`imageResto` AS `imageResto`,`tr`.`libelle` AS `libelle`,`tr`.`catPrix` AS `catPrix` from (`typeresto` `tr` join `restaurant` `r`) where (`tr`.`idTypeResto` = `r`.`idTypeResto`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `selectcontacteparticulier`
--
DROP TABLE IF EXISTS `selectcontacteparticulier`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `selectcontacteparticulier`  AS  (select `par`.`idClient` AS `idClient`,`par`.`nomClient` AS `nomClient`,`par`.`emailClient` AS `emailClient`,`par`.`numTelClient` AS `numTelClient`,`par`.`cp` AS `cp`,`par`.`rue` AS `rue`,`par`.`prenom` AS `prenom`,`c`.`auteurCom` AS `auteurCom`,`c`.`sujetCom` AS `sujetCom`,`c`.`texteCom` AS `texteCom` from (`commentaires` `c` join `particulier` `par`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `selectcontacteprofessionnel`
--
DROP TABLE IF EXISTS `selectcontacteprofessionnel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `selectcontacteprofessionnel`  AS  (select `pro`.`idClient` AS `idClient`,`pro`.`nomClient` AS `nomClient`,`pro`.`emailClient` AS `emailClient`,`pro`.`numTelClient` AS `numTelClient`,`pro`.`cp` AS `cp`,`pro`.`rue` AS `rue`,`pro`.`numSiret` AS `numSiret`,`pro`.`nomContact` AS `nomContact`,`pro`.`prenomContact` AS `prenomContact`,`c`.`auteurCom` AS `auteurCom`,`c`.`sujetCom` AS `sujetCom`,`c`.`texteCom` AS `texteCom` from (`commentaires` `c` join `professionnel` `pro`)) ;

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
-- Index pour la table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`numSemaine`);

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
  MODIFY `idClient` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
