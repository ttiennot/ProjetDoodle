-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 01 avr. 2023 à 12:07
-- Version du serveur : 10.5.18-MariaDB-0+deb11u1
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `doodle`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `hash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `creneau`
--

CREATE TABLE `creneau` (
  `idUser` int(11) NOT NULL,
  `idCalendrier` int(11) NOT NULL,
  `matin` varchar(10) NOT NULL,
  `midi` varchar(10) NOT NULL,
  `aprem` varchar(10) NOT NULL,
  `soir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `idCalendrier` int(11) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `plage` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `idCalendrier`, `nom`, `plage`, `color`) VALUES
(2, NULL, 'caca', 'matin', 'FF00FF'),
(3, NULL, 'tibo', 'aprem', 'FF00HH'),
(4, NULL, 'htghgfh', 'matin', 'HH12FF'),
(5, NULL, 'rezezzrtzetzetze', 'matin', 'HH12FF'),
(6, NULL, 'dsdsqd', 'matin', 'HH12FF'),
(7, NULL, '', '', ''),
(8, NULL, 'sdfqfdsqufdsqiuf', 'matin', 'HH12FF'),
(9, NULL, 'reytututt', 'matin', 'HH12FF'),
(10, NULL, 'dsdsdsdsdsd', 'matin', 'HH12FF'),
(11, NULL, 'dsdsdsdsdsdsdsdsd', 'matin', 'HH12FF'),
(12, NULL, 'uhfduhdfhdfhdfhdufhfudhudf', 'matin', 'HH12FF'),
(13, NULL, 'dsdsqdsqdsqdsq', 'matin', 'HH12FF'),
(14, NULL, 'coucou', 'matin', 'HH12FF'),
(15, NULL, 'klklj', 'matin', 'HH12FF'),
(16, NULL, 'dsds', 'matin', 'HH12FF'),
(17, NULL, 'trfhgfh', 'matin', 'HH12FF'),
(18, NULL, 'fdsfsdfsd', 'matin', 'HH12FF'),
(19, NULL, 'atgahahah', 'matin', 'HH12FF'),
(20, NULL, 'titoune8z', 'matin', 'HH12FF'),
(21, NULL, 'fdfdfdf', 'matin', 'HH12FF');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`);

--
-- Index pour la table `creneau`
--
ALTER TABLE `creneau`
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idCalendrier` (`idCalendrier`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCalendrier` (`idCalendrier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD CONSTRAINT `calendrier_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `creneau`
--
ALTER TABLE `creneau`
  ADD CONSTRAINT `creneau_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `creneau_ibfk_2` FOREIGN KEY (`idCalendrier`) REFERENCES `calendrier` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idCalendrier`) REFERENCES `calendrier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
