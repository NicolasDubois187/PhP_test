-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 07 mars 2022 à 17:16
-- Version du serveur : 10.7.3-MariaDB
-- Version de PHP : 8.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exo_myBlog`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`title`, `content`, `author`, `id`, `created_at`) VALUES
('mon premier article', '      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda enim mollitia sint molestias natus eaque corrupti repellendus dolore reprehenderit sequi voluptatum sit tenetur deserunt, delectus vero voluptates temporibus ratione eos modi repudiandae soluta? Cupiditate, voluptate magni! Dolorem, sed ratione perferendis quod impedit ad id est tempore rerum omnis. Provident, inventore sapiente obcaecati quis asperiores odio sed dicta impedit rem error repellendus unde aliquam! Placeat accusamus, ad saepe sed deleniti rem ex iste ab sapiente nobis nulla tempora assumenda impedit aliquam consequatur iusto voluptas qui pariatur delectus quisquam eligendi inventore! Praesentium, similique corrupti quisquam ut aperiam repellendus esse dolorum quos nesciunt omnis, ea alias quo hic eveniet culpa nam numquam sed modi ratione labore fugiat vitae et illum? Quibusdam nemo tempora eligendi dicta! Molestiae odit unde nisi at praesentium dolore obcaecati neque, ut ex, eveniet sit recusandae itaque dolorum, similique optio ducimus exercitationem dignissimos beatae dicta! Repellendus provident praesentium ipsa aliquid?', 'Gab', 1, '2022-02-28 23:00:00'),
('Second poste', '      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda enim mollitia sint molestias natus eaque corrupti repellendus dolore reprehenderit sequi voluptatum sit tenetur deserunt, delectus vero voluptates temporibus ratione eos modi repudiandae soluta? Cupiditate, voluptate magni! Dolorem, sed ratione perferendis quod impedit ad id est tempore rerum omnis. Provident, inventore sapiente obcaecati quis asperiores odio sed dicta impedit rem error repellendus unde aliquam! Placeat accusamus, ad saepe sed deleniti rem ex iste ab sapiente nobis nulla tempora assumenda impedit aliquam consequatur iusto voluptas qui pariatur delectus quisquam eligendi inventore! Praesentium, similique corrupti quisquam ut aperiam repellendus esse dolorum quos nesciunt omnis, ea alias quo hic eveniet culpa nam numquam sed modi ratione labore fugiat vitae et illum? Quibusdam nemo tempora eligendi dicta! Molestiae odit unde nisi at praesentium dolore obcaecati neque, ut ex, eveniet sit recusandae itaque dolorum, similique optio ducimus exercitationem dignissimos beatae dicta! Repellendus provident praesentium ipsa aliquid?', 'John', 2, '2022-02-28 23:00:00'),
('3ème', '      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda enim mollitia sint molestias natus eaque corrupti repellendus dolore reprehenderit sequi voluptatum sit tenetur deserunt, delectus vero voluptates temporibus ratione eos modi repudiandae soluta? Cupiditate, voluptate magni! Dolorem, sed ratione perferendis quod impedit ad id est tempore rerum omnis. Provident, inventore sapiente obcaecati quis asperiores odio sed dicta impedit rem error repellendus unde aliquam! Placeat accusamus, ad saepe sed deleniti rem ex iste ab sapiente nobis nulla tempora assumenda impedit aliquam consequatur iusto voluptas qui pariatur delectus quisquam eligendi inventore! Praesentium, similique corrupti quisquam ut aperiam repellendus esse dolorum quos nesciunt omnis, ea alias quo hic eveniet culpa nam numquam sed modi ratione labore fugiat vitae et illum? Quibusdam nemo tempora eligendi dicta! Molestiae odit unde nisi at praesentium dolore obcaecati neque, ut ex, eveniet sit recusandae itaque dolorum, similique optio ducimus exercitationem dignissimos beatae dicta! Repellendus provident praesentium ipsa aliquid?', 'toto', 3, '2022-02-28 23:00:00'),
('4ème titre', '      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda enim mollitia sint molestias natus eaque corrupti repellendus dolore reprehenderit sequi voluptatum sit tenetur deserunt, delectus vero voluptates temporibus ratione eos modi repudiandae soluta? Cupiditate, voluptate magni! Dolorem, sed ratione perferendis quod impedit ad id est tempore rerum omnis. Provident, inventore sapiente obcaecati quis asperiores odio sed dicta impedit rem error repellendus unde aliquam! Placeat accusamus, ad saepe sed deleniti rem ex iste ab sapiente nobis nulla tempora assumenda impedit aliquam consequatur iusto voluptas qui pariatur delectus quisquam eligendi inventore! Praesentium, similique corrupti quisquam ut aperiam repellendus esse dolorum quos nesciunt omnis, ea alias quo hic eveniet culpa nam numquam sed modi ratione labore fugiat vitae et illum? Quibusdam nemo tempora eligendi dicta! Molestiae odit unde nisi at praesentium dolore obcaecati neque, ut ex, eveniet sit recusandae itaque dolorum, similique optio ducimus exercitationem dignissimos beatae dicta! Repellendus provident praesentium ipsa aliquid?', 'titi', 4, '2022-03-01 09:34:24'),
('5ème titre', '      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda enim mollitia sint molestias natus eaque corrupti repellendus dolore reprehenderit sequi voluptatum sit tenetur deserunt, delectus vero voluptates temporibus ratione eos modi repudiandae soluta? Cupiditate, voluptate magni! Dolorem, sed ratione perferendis quod impedit ad id est tempore rerum omnis. Provident, inventore sapiente obcaecati quis asperiores odio sed dicta impedit rem error repellendus unde aliquam! Placeat accusamus, ad saepe sed deleniti rem ex iste ab sapiente nobis nulla tempora assumenda impedit aliquam consequatur iusto voluptas qui pariatur delectus quisquam eligendi inventore! Praesentium, similique corrupti quisquam ut aperiam repellendus esse dolorum quos nesciunt omnis, ea alias quo hic eveniet culpa nam numquam sed modi ratione labore fugiat vitae et illum? Quibusdam nemo tempora eligendi dicta! Molestiae odit unde nisi at praesentium dolore obcaecati neque, ut ex, eveniet sit recusandae itaque dolorum, similique optio ducimus exercitationem dignissimos beatae dicta! Repellendus provident praesentium ipsa aliquid?', 'osef', 6, '2022-03-01 11:15:41');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(150) NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `roles`) VALUES
(1, 'admin@admin.com', '$2y$10$ZVJuBWJD9MZuv3.YUSxMfOVG.gp2MCvLGmrEhmcjzpYLEcXfjOmom', 'A');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
