-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 07 déc. 2023 à 18:45
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `monsiteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `bac` varchar(255) NOT NULL,
  `travail_serieux` varchar(255) NOT NULL,
  `absence` varchar(255) NOT NULL,
  `attitude_comportement` varchar(255) NOT NULL,
  `etude_superieur` varchar(255) NOT NULL,
  `avis_pp` varchar(255) NOT NULL,
  `avis_proviseur` varchar(255) NOT NULL,
  `lettre_motivation` longtext NOT NULL,
  `remarque` longtext NOT NULL,
  `note_jury` varchar(255) NOT NULL,
  `statut_dossier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `bac`, `travail_serieux`, `absence`, `attitude_comportement`, `etude_superieur`, `avis_pp`, `avis_proviseur`, `lettre_motivation`, `remarque`, `note_jury`, `statut_dossier`) VALUES
(1, 'Dupont', 'Jean', 'BAC PRO', 'Oui (+1)', 'Non (-1)', 'Oui (dossier refusé !!)', 'Oui (+1)', 'insuf. (-1)', 'AB (+1)', 'AB (+1)', 'X', '12', 'Dossier refuser'),
(2, 'Dupont', 'Mathilde', 'BAC GENERAL', 'Non (-1)', 'Non (-1)', 'Non (+1)', 'Oui (+1)', 'B (+2)', 'AB (+1)', 'AB (+1)', 'X', '14', 'Dossier accepté'),
(3, 'Dupont', 'Max', 'BAC PRO', 'Oui (+1)', 'Oui (-2 ou dossier refusé)', 'Non (+1)', 'Non (+0)', 'Negatif (-2)', 'insuf. (-1)', 'AB (+1)', 'X', '7', 'Dossier a ré-examiner');

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`, `profession`) VALUES
(1, 'Dupont', 'Henry', 'DupontHenry@gmail.com', 'DupontHenry123', 'Evaluateur'),
(2, 'Dupont', 'Enzo', 'DupontEnzo@gmail.com', 'DupontEnzo123', 'Secretaire'),
(3, 'Dupont', 'Maxime', 'DupontMaxime@gmail.com', 'DupontMaxime123', 'Administrateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
