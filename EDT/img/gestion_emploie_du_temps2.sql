-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 25 mai 2022 à 19:34
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_emploie_du_temps`
--

-- --------------------------------------------------------

--
-- Structure de la table `disponibilité_enseignant`
--

CREATE TABLE `disponibilité_enseignant` (
  `id_dis` int(11) NOT NULL,
  `jour` enum('samedi','dimanche','lundi','mardi','mercredi','jeudi') NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `id_ens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `disponibilité_lieux`
--

CREATE TABLE `disponibilité_lieux` (
  `id_dis` int(11) NOT NULL,
  `jour` enum('samedi','dimanche','lundi','mardi','mercredi','jeudi') NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `id_lieux` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `edt`
--

CREATE TABLE `edt` (
  `id_edt` int(11) NOT NULL,
  `lib_edt` varchar(255) NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `edt`
--

INSERT INTO `edt` (`id_edt`, `lib_edt`, `id_groupe`) VALUES
(1, 'A1', 17),
(2, 'A2', 18),
(3, 'A3', 19),
(4, 'A4', 20),
(5, 'B1', 21),
(6, 'B2', 22),
(7, 'B3', 23),
(8, 'B4', 24),
(9, 'A1', 25),
(10, 'A2', 26),
(11, 'A3', 27),
(12, 'A4', 28),
(13, 'B1', 29),
(14, 'B2', 30),
(15, 'B3', 31),
(16, 'B4', 32),
(17, 'A1', 33),
(18, 'A2', 34),
(19, 'A3', 35),
(20, 'A4', 36),
(21, 'B1', 37),
(22, 'B2', 38),
(23, 'B3', 39),
(24, 'B4', 40),
(25, 'A1', 41),
(26, 'A2', 42),
(27, 'A3', 43),
(28, 'A4', 44),
(29, 'B1', 45),
(30, 'B2', 46),
(31, 'B3', 47),
(32, 'B4', 48),
(33, 'G1', 49),
(34, 'G2', 50),
(35, 'G3', 51),
(36, 'G1', 52),
(37, 'G2', 53),
(38, 'G3', 54),
(39, 'G1', 55),
(40, 'G2', 56),
(41, 'G3', 57),
(42, 'G1', 58),
(43, 'G2', 59),
(44, 'G3', 60);

-- --------------------------------------------------------

--
-- Structure de la table `edt_ens`
--

CREATE TABLE `edt_ens` (
  `id_ed_ens` int(11) NOT NULL,
  `lib_edt_ens` varchar(255) NOT NULL,
  `id_ens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `edt_ens`
--

INSERT INTO `edt_ens` (`id_ed_ens`, `lib_edt_ens`, `id_ens`) VALUES
(1, 'edtTALEMDjamel', 10),
(2, 'edtGADOUCHEHania', 11),
(3, 'edtAKILALKarim', 12);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_ens` int(11) NOT NULL,
  `nom_ens` varchar(50) NOT NULL,
  `prenom_ens` varchar(50) NOT NULL,
  `email_ens` varchar(50) NOT NULL,
  `date_naiss_ens` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_ens`, `nom_ens`, `prenom_ens`, `email_ens`, `date_naiss_ens`) VALUES
(10, 'TALEM', 'Djamel', 'talebdjamel@gmail.com', '1980-05-24'),
(11, 'GADOUCHE', 'Hania', 'gadouchehania@gmail.com', '1981-05-13'),
(12, 'AKILAL', 'Karim', 'akilalkarim@gmail.com', '1979-05-26');

--
-- Déclencheurs `enseignant`
--
DELIMITER $$
CREATE TRIGGER `T_edt_enseignant` AFTER INSERT ON `enseignant` FOR EACH ROW insert into edt_ens values('',concat('edt',new.nom_ens,new.prenom_ens),new.id_ens)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `T_ens_utilisateur` AFTER INSERT ON `enseignant` FOR EACH ROW insert into utilisateur values(new.id_ens,'ens',concat(new.nom_ens,'_',new.prenom_ens),concat(new.prenom_ens,new.date_naiss_ens))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `ens_mod`
--

CREATE TABLE `ens_mod` (
  `id_mod` int(11) NOT NULL,
  `id_ens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ens_mod`
--

INSERT INTO `ens_mod` (`id_mod`, `id_ens`) VALUES
(5, 10),
(8, 11);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etd` int(11) NOT NULL,
  `nom_etd` varchar(255) NOT NULL,
  `prenom_etd` varchar(255) NOT NULL,
  `email_etd` varchar(255) NOT NULL,
  `date_naiss_etd` date NOT NULL,
  `id_grp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déclencheurs `etudiant`
--
DELIMITER $$
CREATE TRIGGER `T_etd_utilisateur` AFTER INSERT ON `etudiant` FOR EACH ROW insert into utilisateur values(new.id_etd,'etd',concat(new.nom_etd,'_',new.prenom_etd),concat(new.prenom_etd,new.date_naiss_etd))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_for` int(11) NOT NULL,
  `nom_for` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_for`, `nom_for`) VALUES
(1, 'informatique RN'),
(2, 'systeme information'),
(3, 'réseau ');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id_grp` int(11) NOT NULL,
  `lib_grp` varchar(255) NOT NULL,
  `id_sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id_grp`, `lib_grp`, `id_sec`) VALUES
(17, 'A1', 5),
(18, 'A2', 5),
(19, 'A3', 5),
(20, 'A4', 5),
(21, 'B1', 6),
(22, 'B2', 6),
(23, 'B3', 6),
(24, 'B4', 6),
(25, 'A1', 7),
(26, 'A2', 7),
(27, 'A3', 7),
(28, 'A4', 7),
(29, 'B1', 8),
(30, 'B2', 8),
(31, 'B3', 8),
(32, 'B4', 8),
(33, 'A1', 9),
(34, 'A2', 9),
(35, 'A3', 9),
(36, 'A4', 9),
(37, 'B1', 10),
(38, 'B2', 10),
(39, 'B3', 10),
(40, 'B4', 10),
(41, 'A1', 11),
(42, 'A2', 11),
(43, 'A3', 11),
(44, 'A4', 11),
(45, 'B1', 12),
(46, 'B2', 12),
(47, 'B3', 12),
(48, 'B4', 12),
(49, 'G1', 13),
(50, 'G2', 13),
(51, 'G3', 13),
(52, 'G1', 14),
(53, 'G2', 14),
(54, 'G3', 14),
(55, 'G1', 15),
(56, 'G2', 15),
(58, 'G1', 16),
(59, 'G2', 16);

--
-- Déclencheurs `groupe`
--
DELIMITER $$
CREATE TRIGGER `T_groupe_edt` AFTER INSERT ON `groupe` FOR EACH ROW insert into edt VALUES('',new.lib_grp,new.id_grp)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

CREATE TABLE `lieux` (
  `id_lieux` int(11) NOT NULL,
  `lib_lieux` varchar(255) NOT NULL,
  `type` enum('amphi','salle_td','salle_tp') NOT NULL,
  `block` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieux`
--

INSERT INTO `lieux` (`id_lieux`, `lib_lieux`, `type`, `block`) VALUES
(2, 'amphi 10', 'amphi', NULL),
(3, 'amphi 11', 'amphi', NULL),
(4, 'amphi 13', 'amphi', NULL),
(5, 'amphi 14', 'amphi', NULL),
(6, 'amphi 16', 'amphi', NULL),
(7, 'amphi 22', 'amphi', NULL),
(8, 'amphi 23', 'amphi', NULL),
(9, 'amphi 24', 'amphi', NULL),
(10, 'amphi 26', 'amphi', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_mod` int(11) NOT NULL,
  `nom_mod` varchar(255) NOT NULL,
  `lib_mod` varchar(5) NOT NULL,
  `nb_cours` int(11) NOT NULL,
  `nb_td` int(11) NOT NULL,
  `nb_tp` int(11) NOT NULL,
  `id_sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_mod`, `nom_mod`, `lib_mod`, `nb_cours`, `nb_td`, `nb_tp`, `id_sem`) VALUES
(5, 'ANALYSE 2', 'analy', 2, 2, 0, 12),
(6, 'ALGEBRE 1', 'ALG', 2, 2, 0, 12),
(7, 'ADMINISTRATION BASE DONNÉES ', 'ABDD', 2, 0, 1, 17),
(8, 'BASE DE DONNÉES ', 'BDD', 2, 1, 1, 16),
(9, 'ALGORITHME 1 ', 'ALGO ', 2, 2, 0, 12),
(10, 'ANGLAIS', 'ANGLA', 1, 1, 0, 12),
(11, 'SYSTÈME EXPLOITATION 1\r\n', 'SE', 2, 2, 0, 12),
(12, 'ÉLECTRICITÉ ', 'ELEC', 2, 1, 0, 12),
(13, 'ANALYSE 2', 'ANALY', 2, 2, 0, 13),
(14, 'ALGEBRE 2', 'ALG2', 2, 2, 0, 13),
(15, 'ALGORITHME 2', 'ALGO2', 2, 2, 0, 13),
(16, 'ARCHITECTURE DES ORDINATEURS 2', 'ARCHI', 2, 2, 0, 13),
(17, 'BUREAUTIQUE ET WEB', 'BWEB', 1, 0, 1, 12),
(18, 'ÉLECTRONIQUE ', 'ÉLECT', 2, 2, 0, 13),
(19, 'SYSTÈME EXPLOITATION 2', 'SE2', 2, 1, 1, 13),
(20, 'ARCHITECTURE DES ORDINATEURS 1', 'ARCHI', 2, 2, 0, 12),
(21, 'MÉCANIQUE DE POINT', 'MÉCAN', 2, 1, 0, 13),
(22, 'STRUCTURE FICHIER ET STRUCTURE DE DONNÉES ', 'SFSD', 2, 1, 1, 14),
(23, 'ARCHITECTURE DES ORDINATEURS 2', 'ARCHI', 2, 2, 0, 14),
(24, 'ALGEBRE 3', 'ALG3', 2, 2, 0, 14),
(25, 'ANALYSE 3', 'ANALY', 2, 2, 0, 14),
(26, 'ÉLECTRONIQUE 2', 'ÉLECT', 2, 2, 0, 14),
(27, 'PROBABILITÉS ET STATISTIQUES 1 ', 'PROBA', 1, 1, 0, 14),
(28, 'ECONOMIE ENTREPRISE', 'ECONO', 1, 1, 0, 14),
(29, 'ANGLAIS 2', 'ANGLA', 1, 1, 0, 14),
(30, 'PROGRAMMATION ORIENTÉE OBJET ', 'POO', 2, 1, 1, 15),
(31, 'SYSTÈME INFORMATION ', 'SI', 2, 1, 0, 15),
(32, 'ANALYSE 4', 'ANALY', 2, 2, 0, 15),
(33, 'LOGIQUE MATHÉMATIQUE ', 'LM', 2, 1, 0, 15),
(34, 'OPTIQUE ET ONDES ÉLECTROMAGNÉTIQUE ', 'OPTIQ', 2, 1, 0, 15),
(35, 'PROJET PLURIDISCIPLINAIRE ', 'PROJE', 1, 0, 1, 15),
(36, 'PROBABILITÉ ET STATISTIQUES 2', 'PROBA', 2, 1, 0, 15),
(37, 'ANGLAIS 3', 'ALNGL', 1, 1, 0, 15);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_pro` int(11) NOT NULL,
  `lib_promo` varchar(50) NOT NULL,
  `annee` int(11) NOT NULL,
  `id_sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_pro`, `lib_promo`, `annee`, `id_sem`) VALUES
(9, 'RNS1', 2023, 12),
(10, 'RNS2', 2023, 13),
(11, 'RNS3', 2023, 14),
(12, 'RNS4', 2023, 15),
(13, 'SIS5', 2023, 16),
(14, 'SIS6', 2023, 17),
(15, 'RXS5', 2023, 18),
(16, 'RXS6', 2023, 19);

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_sea` int(11) NOT NULL,
  `type` enum('cours','td','tp') NOT NULL,
  `jour` enum('SAMEDI','DIMANCHE','LUNDI','MARDI','MERCREDI','JEUDI') NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `id_grp` int(11) NOT NULL,
  `id_lieux` int(11) NOT NULL,
  `id_ens` int(11) NOT NULL,
  `id_mod` int(11) NOT NULL,
  `id_edt` int(11) NOT NULL,
  `id_edt_ens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déclencheurs `seance`
--
DELIMITER $$
CREATE TRIGGER `T_dispo_ens_delete` BEFORE DELETE ON `seance` FOR EACH ROW delete from disponibilité_enseignant WHERE old.jour=jour and old.heure_debut=heure_debut and old.heure_fin=heure_fin and old.id_ens=id_ens
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `T_dispo_enseignant` AFTER INSERT ON `seance` FOR EACH ROW insert into disponibilité_enseignant VALUES('',new.jour,new.heure_debut,new.heure_fin,new.id_ens)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `T_dispo_lieux` AFTER INSERT ON `seance` FOR EACH ROW insert into disponibilité_lieux values('',new.jour,new.heure_debut,new.heure_fin,new.id_lieux)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `T_dispo_lieux_delete` BEFORE DELETE ON `seance` FOR EACH ROW DELETE from disponibilité_lieux where old.jour=disponibilité_lieux.jour AND old.heure_debut=disponibilité_lieux.heure_debut AND old.heure_fin=disponibilité_lieux.heure_fin AND old.id_lieux=disponibilité_lieux.id_lieux
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE `section` (
  `id_sec` int(11) NOT NULL,
  `lib_sec` varchar(255) NOT NULL,
  `nbr_groupe` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `section`
--

INSERT INTO `section` (`id_sec`, `lib_sec`, `nbr_groupe`, `id_pro`) VALUES
(5, 'A', 4, 9),
(6, 'B', 4, 9),
(7, 'A', 4, 10),
(8, 'B', 4, 10),
(9, 'A', 4, 11),
(10, 'B', 4, 11),
(11, 'A', 4, 12),
(12, 'B', 4, 12),
(13, 'A', 3, 13),
(14, 'A', 3, 14),
(15, 'A', 2, 15),
(16, 'A', 2, 16);

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `id_sem` int(11) NOT NULL,
  `lib_sem` enum('S1','S2','S3','S4','S5','S6','S7','S8','S9','S10') NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_for` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`id_sem`, `lib_sem`, `date_debut`, `date_fin`, `id_for`) VALUES
(12, 'S1', '2022-09-10', '2023-06-16', 1),
(13, 'S2', '2022-09-10', '2023-06-16', 1),
(14, 'S3', '2022-09-10', '2023-06-16', 1),
(15, 'S4', '2022-09-10', '2023-06-16', 1),
(16, 'S5', '2022-09-10', '2023-06-16', 2),
(17, 'S6', '2022-09-10', '2023-06-16', 2),
(18, 'S5', '2022-09-10', '2023-06-16', 3),
(19, 'S6', '2022-09-10', '2023-06-16', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_uti` int(11) NOT NULL,
  `type` enum('admin','etd','ens') NOT NULL,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `disponibilité_enseignant`
--
ALTER TABLE `disponibilité_enseignant`
  ADD PRIMARY KEY (`id_dis`),
  ADD KEY `disponibilité_enseignant_ibfk_1` (`id_ens`);

--
-- Index pour la table `disponibilité_lieux`
--
ALTER TABLE `disponibilité_lieux`
  ADD PRIMARY KEY (`id_dis`),
  ADD KEY `disponibilité_lieux_ibfk_1` (`id_lieux`);

--
-- Index pour la table `edt`
--
ALTER TABLE `edt`
  ADD PRIMARY KEY (`id_edt`);

--
-- Index pour la table `edt_ens`
--
ALTER TABLE `edt_ens`
  ADD PRIMARY KEY (`id_ed_ens`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_ens`);

--
-- Index pour la table `ens_mod`
--
ALTER TABLE `ens_mod`
  ADD PRIMARY KEY (`id_mod`,`id_ens`),
  ADD KEY `id_ens` (`id_ens`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etd`),
  ADD KEY `id_grp` (`id_grp`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_for`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id_grp`),
  ADD KEY `groupe_ibfk_1` (`id_sec`);

--
-- Index pour la table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`id_lieux`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_mod`),
  ADD KEY `module_ibfk_1` (`id_sem`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `promotion_ibfk_1` (`id_sem`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_sea`),
  ADD KEY `id_grp` (`id_grp`),
  ADD KEY `id_mod` (`id_mod`),
  ADD KEY `id_ens` (`id_ens`),
  ADD KEY `id_lieux` (`id_lieux`),
  ADD KEY `id_edt` (`id_edt`),
  ADD KEY `id_edt_ens` (`id_edt_ens`);

--
-- Index pour la table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_sec`),
  ADD KEY `section_ibfk_1` (`id_pro`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_sem`),
  ADD KEY `semestre_ibfk_1` (`id_for`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_uti`,`type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `disponibilité_enseignant`
--
ALTER TABLE `disponibilité_enseignant`
  MODIFY `id_dis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `disponibilité_lieux`
--
ALTER TABLE `disponibilité_lieux`
  MODIFY `id_dis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT pour la table `edt`
--
ALTER TABLE `edt`
  MODIFY `id_edt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `edt_ens`
--
ALTER TABLE `edt_ens`
  MODIFY `id_ed_ens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_ens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_for` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id_grp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `id_lieux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id_mod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_sea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT pour la table `section`
--
ALTER TABLE `section`
  MODIFY `id_sec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id_sem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `disponibilité_enseignant`
--
ALTER TABLE `disponibilité_enseignant`
  ADD CONSTRAINT `disponibilité_enseignant_ibfk_1` FOREIGN KEY (`id_ens`) REFERENCES `enseignant` (`id_ens`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `disponibilité_lieux`
--
ALTER TABLE `disponibilité_lieux`
  ADD CONSTRAINT `disponibilité_lieux_ibfk_1` FOREIGN KEY (`id_lieux`) REFERENCES `lieux` (`id_lieux`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ens_mod`
--
ALTER TABLE `ens_mod`
  ADD CONSTRAINT `ens_mod_ibfk_1` FOREIGN KEY (`id_mod`) REFERENCES `module` (`id_mod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ens_mod_ibfk_2` FOREIGN KEY (`id_ens`) REFERENCES `enseignant` (`id_ens`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `groupe_ibfk_1` FOREIGN KEY (`id_sec`) REFERENCES `section` (`id_sec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_sem`) REFERENCES `semestre` (`id_sem`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`id_sem`) REFERENCES `semestre` (`id_sem`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `seance_ibfk_1` FOREIGN KEY (`id_grp`) REFERENCES `groupe` (`id_grp`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_ibfk_2` FOREIGN KEY (`id_mod`) REFERENCES `module` (`id_mod`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_ibfk_3` FOREIGN KEY (`id_ens`) REFERENCES `enseignant` (`id_ens`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_ibfk_4` FOREIGN KEY (`id_lieux`) REFERENCES `lieux` (`id_lieux`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_ibfk_5` FOREIGN KEY (`id_edt`) REFERENCES `edt` (`id_edt`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `seance_ibfk_6` FOREIGN KEY (`id_edt_ens`) REFERENCES `edt_ens` (`id_ed_ens`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Contraintes pour la table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `promotion` (`id_pro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `semestre`
--
ALTER TABLE `semestre`
  ADD CONSTRAINT `semestre_ibfk_1` FOREIGN KEY (`id_for`) REFERENCES `formation` (`id_for`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
