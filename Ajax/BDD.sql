-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 22 fév. 2022 à 14:16
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `async_await`
--

-- --------------------------------------------------------

--
-- Structure de la table `myTable`
--

CREATE TABLE `myTable` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `myTable`
--

INSERT INTO `myTable` (`id`, `name`, `phone`, `email`, `address`) VALUES
(1, 'Kasper Jenkins', '(555) 433-7254', 'neque@icloud.com', '140-7874 Leo. Ave'),
(2, 'Stuart Snider', '1-746-288-7185', 'mi.aliquam@protonmail.edu', 'Ap #420-4973 Lacus. Rd.'),
(3, 'Whitney Pitts', '(838) 367-8332', 'mauris.non@hotmail.edu', 'Ap #667-3867 Neque. Av.'),
(4, 'Jermaine Baldwin', '1-795-452-5108', 'pede.suspendisse.dui@protonmail.com', '5024 At, Rd.'),
(5, 'Danielle Collins', '1-438-853-5941', 'nulla.integer@yahoo.ca', 'Ap #596-242 Pharetra Rd.'),
(6, 'Patience Cohen', '(686) 546-5247', 'dui.fusce.aliquam@google.net', 'P.O. Box 865, 5734 Ornare, Ave'),
(7, 'Amanda Maynard', '1-683-480-9748', 'auctor.nunc@protonmail.edu', 'Ap #362-7487 In Street'),
(8, 'Nasim Vaughn', '(280) 698-2667', 'curabitur.consequat.lectus@aol.net', 'Ap #293-3869 Donec Av.'),
(9, 'Jolene George', '1-547-381-0843', 'risus.nulla@protonmail.com', 'P.O. Box 919, 6725 Sit Road'),
(10, 'Dorothy Blankenship', '(175) 662-1883', 'ligula.aliquam@hotmail.edu', 'Ap #805-2534 Mauris St.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `myTable`
--
ALTER TABLE `myTable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `myTable`
--
ALTER TABLE `myTable`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
