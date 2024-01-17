-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 14 jan. 2024 à 13:50
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wiki`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(28, 'ai', '2024-01-09 19:18:28', '2024-01-13 22:49:40'),
(30, 'mustapha', '2024-01-10 10:55:45', '2024-01-13 23:13:50'),
(31, 'badi', '2024-01-10 10:55:52', '2024-01-13 23:17:54');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_name`, `created_at`, `updated_at`) VALUES
(2, 'html', '2024-01-10 08:17:20', '2024-01-10 08:17:20'),
(5, 'python', '2024-01-10 08:18:39', '2024-01-10 08:18:39'),
(8, ' GO', '2024-01-10 08:21:24', '2024-01-10 08:21:24'),
(10, 'VSC', '2024-01-10 08:42:27', '2024-01-10 08:42:27');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usrImage` varchar(255) DEFAULT 'profile.png',
  `is_admin` tinyint(1) DEFAULT 0,
  `joining_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `usrImage`, `is_admin`, `joining_date`) VALUES
(39, 'muta', 'a@gmail.com', '$2y$10$QFGuSdKYBRoAGyH8BhJyKufXYrbwoa9JW39YR4nJTaT6/hkms5/Ju', 'profile.png', 0, '2024-01-08 19:44:31'),
(40, 'badi', 'badi@gmail.com', '123', 'profile.png', 0, '2024-01-11 15:47:38'),
(41, 'cobek', 'kumenuze@mailinator.com', '$2y$10$abx5JF5I.SPMuxZWTTMLpOSgnua3ioQ2YH4yfXWy/oc/jwM4GZSiS', 'profile.png', 1, '2024-01-12 11:15:25'),
(44, 'nekity', 'vylozulemi@mailinator.com', '$2y$10$iH7lEth2qvVVFWEafJAFv.8LrAT0D5RaIu9/do.m5/SO6zwpI2CdG', 'profile.png', 0, '2024-01-12 11:16:22'),
(45, 'qevex', 'juka@mailinator.com', '$2y$10$jJcpKxFtwT3VcboLtQfREOizJnqDSeweDgoiQ2mhXgm85IVRNbVme', 'profile.png', 0, '2024-01-12 11:22:34'),
(46, 'nupuroza', 'cibul@mailinator.com', '$2y$10$mgJkhFAasacQEFgbcLzXNOHLNp.tTJpN53BJgUqHme99iU8CfSywu', 'profile.png', 0, '2024-01-12 11:23:47'),
(47, 'mokob', 'labi@mailinator.com', '$2y$10$pETUSh3KCyNHAQelUPRPAuR.rqUFSeeYZ/z5JzSZ5x9aAk93jAzjC', 'profile.png', 0, '2024-01-12 12:37:17'),
(48, 'oma', 'oma@gmail.com', '$2y$10$1kF7ZmEkdsQV1xHCU2ezV.5ndtcmk1Yw2gRUb/IiQhzEzIRvz4X0a', 'profile.png', 0, '2024-01-12 12:37:51'),
(49, 'zapylida', 'pozu@mailinator.com', '$2y$10$n1NUKSbjiznk0CrzHbQw4OuxjUrP1GeTxwIi2lpPmLw.a7l5o4FmC', 'profile.png', 0, '2024-01-12 12:51:07'),
(50, 'wubaz', 'luqym@mailinator.com', '$2y$10$Jesp8S7tMKAW5i1BdfCuNOeY20z8aES9WKhin3L6Onu2U1yXdos8W', 'profile.png', 0, '2024-01-12 12:58:57'),
(51, 'qubujehu', 'hyviby@mailinator.com', '$2y$10$itpRHaEG68JUqX2Dn5R7PO48LUIBLCEsVMXz6Q8dTVBDIyqBQJQLO', 'profile.png', 0, '2024-01-12 13:01:00'),
(52, 'wixumepi', 'vynyhym@mailinator.com', '$2y$10$EX7PGAJS1Ilct/48cxtSxePLOfCR.7BCZvfEPKKm23cRb6JVAkJ0W', 'profile.png', 0, '2024-01-12 13:02:09'),
(53, 'lodevi', 'cytugozywi@mailinator.com', '$2y$10$OxAYk.h5.hlTOQu3cgO2q.bTYo7ZHRYZJszyfKr1Dre7UmY8XPn2G', 'profile.png', 0, '2024-01-12 13:13:44'),
(54, 'zowuxuno', 'zorahomyde@mailinator.com', '$2y$10$ZwHa6bNcmzxDwV0eaBx.MeV0i3jEkKTYW8U55ABxKht5J74cYMJ9m', 'profile.png', 0, '2024-01-12 14:09:14'),
(55, 'kutomebiwy', 'vokumavoma@mailinator.com', '$2y$10$/KCOchOr10SbnMtpvTFKmuEsPBCVxIbUY8rTsysvxhxmGxEhosQGW', 'profile.png', 0, '2024-01-12 14:36:37'),
(56, 'sokarozumu', 'tisyzuv@mailinator.com', '$2y$10$L.Tjpnxegop4wN4wOhecrOQRx0.vSY/M67ba7Ix5fOJC4g4NY4Y4S', 'profile.png', 0, '2024-01-12 18:12:51'),
(57, 'daxevutob', 'nuquker@mailinator.com', '$2y$10$pgri7htQdAD0dJXmsJBsI.X2wTagxohRe3TM2essulOP9PuGCUxeK', 'profile.png', 0, '2024-01-12 20:02:54'),
(58, 'rywutozyn', 'putuhyn@mailinator.com', '$2y$10$nBG1lshrAtyms9NOCHBiyOwPmGp9cZiVC6We3Bovv98msnBzGOKt6', NULL, 0, '2024-01-12 22:27:40'),
(59, 'dupoqecuty', 'mubuz@mailinator.com', '$2y$10$03tsqUbvG1YJOeDzWBYgHuIZ6Y0.AWfi8uG0/Z2cL6CQgW63usB.O', NULL, 0, '2024-01-13 08:56:15'),
(60, 'dowur', 'citic@mailinator.com', '$2y$10$AvJDMQPR8uzocZEdsg/O1uWztL72XFtytrXF/dLdzqy.LhqbCKJZK', NULL, 0, '2024-01-13 10:27:26'),
(61, 'nixuxi', 'xaroteroq@mailinator.com', '$2y$10$1nTAbohPQdpfI97hcvlqcuo2Eni8sgiFMFGNZ.CoxUZD2BSDqas4a', NULL, 0, '2024-01-13 10:27:37'),
(62, 'difom', 'kovytuzy@mailinator.com', '$2y$10$ooKmRONEgZtYdY9rPQLJjuZKBSKBwEin6/uPltjOoJrxkWRTzkfIO', NULL, 0, '2024-01-13 19:54:42'),
(63, 'gyzeqymaw', 'miniqani@mailinator.com', '$2y$10$b5rLbh.yfFiBassxG2WxT.W2uJHu.KE3i3XLyhjGfnOUiI9MpGXKu', NULL, 0, '2024-01-14 11:04:54'),
(64, 'dirycebyd', 'kipux@mailinator.com', '$2y$10$qty/crfzr959VUNlgvEkNugpbUHOcHdPEcYW4fnXCkOg6dPK2Xx2K', 'profile.png', 0, '2024-01-14 11:14:27'),
(66, 'hewosuxa', 'jexufuzydi@mailinator.com', '$2y$10$ui.EJcGVwIqNyTHnc8GvJuhNYcAgZI5jMIFAziQ4Ijnq7eVc96CCC', 'profile.png', 0, '2024-01-14 11:14:44');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `wiki`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `wiki` (
`wiki_id` int(11)
,`title` varchar(255)
,`content` text
,`wikImage` varchar(255)
,`user_id` int(11)
,`category_id` int(11)
,`created_at` timestamp
,`updated_at` timestamp
,`is_deleted` tinyint(1)
,`username` varchar(255)
,`usrImage` varchar(255)
,`category_name` varchar(255)
,`tag_names` mediumtext
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `wikia`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `wikia` (
`wiki_id` int(11)
,`title` varchar(255)
,`content` text
,`wikImage` varchar(255)
,`user_id` int(11)
,`category_id` int(11)
,`created_at` timestamp
,`updated_at` timestamp
,`is_deleted` tinyint(1)
,`username` varchar(255)
,`usrImage` varchar(255)
,`category_name` varchar(255)
,`tag_names` mediumtext
);

-- --------------------------------------------------------

--
-- Structure de la table `wikis`
--

CREATE TABLE `wikis` (
  `wiki_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `wikImage` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `wikis`
--

INSERT INTO `wikis` (`wiki_id`, `title`, `content`, `wikImage`, `user_id`, `category_id`, `created_at`, `updated_at`, `is_deleted`) VALUES
(39, 'Aute inventore ducimjkbmk', 'Harum sunt labore in', '65a00c9b49bd0_0_gYoVqT1eGN6NT5EX.jpg', 56, 28, '2024-01-12 20:33:06', '2024-01-14 09:21:18', 1),
(43, 'top ', 'Quam dolores quis su', '1_64ooGdFNG4KXu5Hs0JE5Nw.png', 61, 31, '2024-01-13 10:47:01', '2024-01-13 23:26:12', 0),
(44, 'test', 'Eu adipisci libero l', '0_SklfpfBm5zX07hrP.png', 62, 31, '2024-01-13 19:55:24', '2024-01-14 09:21:15', 0),
(46, 'Eos ut sed ipsam ni', 'Minus nisi numquam b', '1_d41v0LCPk7uIG0okVZ_kCQ.png', 63, 30, '2024-01-14 11:05:16', '2024-01-14 11:05:16', 0),
(47, 'Voluptas sint labore', 'Adipisci inventore f', '1_64ooGdFNG4KXu5Hs0JE5Nw.png', 64, 30, '2024-01-14 11:15:00', '2024-01-14 11:15:00', 0),
(48, 'Quo lorem sit porro ', 'Magnam repudiandae e', '65a00a015162b_wiki_logo.png.webp', 64, 30, '2024-01-14 12:08:49', '2024-01-14 12:08:49', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wikitags`
--

CREATE TABLE `wikitags` (
  `wiki_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `wikitags`
--

INSERT INTO `wikitags` (`wiki_id`, `tag_id`) VALUES
(2, 5),
(2, 10),
(3, 8),
(4, 10),
(6, 2),
(6, 5),
(6, 8),
(6, 10),
(7, 2),
(7, 5),
(7, 8),
(7, 10),
(12, 10),
(13, 10),
(14, 8),
(14, 10),
(15, 2),
(15, 5),
(15, 8),
(16, 5),
(17, 2),
(17, 8),
(17, 10),
(18, 2),
(18, 8),
(19, 8),
(19, 10),
(20, 5),
(20, 10),
(21, 5),
(21, 8),
(21, 10),
(22, 2),
(22, 5),
(23, 5),
(23, 10),
(24, 5),
(24, 8),
(25, 2),
(25, 8),
(26, 5),
(26, 8),
(27, 5),
(27, 10),
(28, 5),
(29, 5),
(29, 8),
(30, 5),
(30, 10),
(31, 8),
(32, 8),
(33, 5),
(33, 8),
(34, 2),
(34, 5),
(35, 5),
(36, 10),
(37, 5),
(37, 10),
(38, 2),
(38, 10),
(39, 2),
(39, 5),
(39, 8),
(39, 10),
(40, 5),
(41, 2),
(41, 5),
(41, 8),
(42, 10),
(43, 2),
(43, 8),
(44, 5),
(45, 8),
(46, 8),
(47, 8),
(48, 5),
(48, 10);

-- --------------------------------------------------------

--
-- Structure de la vue `wiki`
--
DROP TABLE IF EXISTS `wiki`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `wiki`  AS SELECT `wikis`.`wiki_id` AS `wiki_id`, `wikis`.`title` AS `title`, `wikis`.`content` AS `content`, `wikis`.`wikImage` AS `wikImage`, `wikis`.`user_id` AS `user_id`, `wikis`.`category_id` AS `category_id`, `wikis`.`created_at` AS `created_at`, `wikis`.`updated_at` AS `updated_at`, `wikis`.`is_deleted` AS `is_deleted`, `users`.`username` AS `username`, `users`.`usrImage` AS `usrImage`, `categories`.`category_name` AS `category_name`, group_concat(`tags`.`tag_name` order by `tags`.`tag_name` ASC separator ', ') AS `tag_names` FROM ((((`wikis` join `users` on(`wikis`.`user_id` = `users`.`user_id`)) join `categories` on(`wikis`.`category_id` = `categories`.`category_id`)) left join `wikitags` on(`wikis`.`wiki_id` = `wikitags`.`wiki_id`)) left join `tags` on(`wikitags`.`tag_id` = `tags`.`tag_id`)) WHERE `wikis`.`is_deleted` = 0 GROUP BY `wikis`.`wiki_id` ORDER BY `wikis`.`updated_at` DESC ;

-- --------------------------------------------------------

--
-- Structure de la vue `wikia`
--
DROP TABLE IF EXISTS `wikia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`` SQL SECURITY DEFINER VIEW `wikia`  AS SELECT `wikis`.`wiki_id` AS `wiki_id`, `wikis`.`title` AS `title`, `wikis`.`content` AS `content`, `wikis`.`wikImage` AS `wikImage`, `wikis`.`user_id` AS `user_id`, `wikis`.`category_id` AS `category_id`, `wikis`.`created_at` AS `created_at`, `wikis`.`updated_at` AS `updated_at`, `wikis`.`is_deleted` AS `is_deleted`, `users`.`username` AS `username`, `users`.`usrImage` AS `usrImage`, `categories`.`category_name` AS `category_name`, group_concat(`tags`.`tag_name` order by `tags`.`tag_name` ASC separator ', ') AS `tag_names` FROM ((((`wikis` join `users` on(`wikis`.`user_id` = `users`.`user_id`)) join `categories` on(`wikis`.`category_id` = `categories`.`category_id`)) left join `wikitags` on(`wikis`.`wiki_id` = `wikitags`.`wiki_id`)) left join `tags` on(`wikitags`.`tag_id` = `tags`.`tag_id`)) GROUP BY `wikis`.`wiki_id` ORDER BY `wikis`.`updated_at` DESC ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD UNIQUE KEY `tag_name` (`tag_name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `wikis`
--
ALTER TABLE `wikis`
  ADD PRIMARY KEY (`wiki_id`),
  ADD KEY `wikis_ibfk_2` (`category_id`),
  ADD KEY `wikis_ibfk_1` (`user_id`);

--
-- Index pour la table `wikitags`
--
ALTER TABLE `wikitags`
  ADD PRIMARY KEY (`wiki_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `wikis`
--
ALTER TABLE `wikis`
  MODIFY `wiki_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `wikis`
--
ALTER TABLE `wikis`
  ADD CONSTRAINT `wikis_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `wikis_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
