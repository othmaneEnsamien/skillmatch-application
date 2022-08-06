-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 août 2022 à 13:10
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sofreco`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE `competences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intitule_competence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `intitule_competence`, `created_at`, `updated_at`) VALUES
(172, 'ORMES', '2022-08-05 12:21:58', '2022-08-05 12:21:58'),
(173, 'SOLAIR', '2022-08-05 12:22:21', '2022-08-05 12:22:21'),
(174, 'GRAPA', '2022-08-05 12:22:40', '2022-08-05 12:22:40'),
(176, 'GPDN', '2022-08-05 12:23:30', '2022-08-05 12:23:30'),
(177, 'MAJ DIO', '2022-08-05 12:23:54', '2022-08-05 12:23:54'),
(178, 'Planning', '2022-08-05 12:24:17', '2022-08-05 12:24:17'),
(179, 'Reporting', '2022-08-05 12:24:32', '2022-08-05 12:24:32'),
(180, 'Orientation Client', '2022-08-05 12:24:52', '2022-08-05 12:24:52'),
(181, 'Connaissance des Infra', '2022-08-05 12:25:23', '2022-08-05 12:25:23'),
(182, 'Gestion des risques', '2022-08-05 12:25:48', '2022-08-05 12:25:48'),
(183, 'Déploiement', '2022-08-05 12:26:04', '2022-08-05 12:26:04'),
(184, 'Customisation', '2022-08-05 12:26:21', '2022-08-05 12:26:21'),
(185, 'Stockage', '2022-08-05 12:26:39', '2022-08-05 12:26:39'),
(186, 'Réservation des ports switch', '2022-08-05 12:27:29', '2022-08-05 12:27:29'),
(187, 'Configuration des ports', '2022-08-05 12:27:52', '2022-08-05 12:27:52'),
(188, 'Configuration de la carte IDRAC', '2022-08-05 12:28:10', '2022-08-05 12:28:10'),
(189, 'Ouverture des ports', '2022-08-05 12:28:31', '2022-08-05 12:28:31'),
(190, 'Recette Ilot ERDC ', '2022-08-05 12:28:47', '2022-08-05 12:28:47'),
(191, 'Recette Ilot RSI', '2022-08-05 12:29:05', '2022-08-05 12:29:05'),
(192, 'Ouverture de flix', '2022-08-05 12:29:22', '2022-08-05 12:29:22'),
(193, 'Déploiement des RP', '2022-08-05 12:29:42', '2022-08-05 12:29:42'),
(194, 'Déploiement des VIPs', '2022-08-05 12:30:03', '2022-08-05 12:30:03'),
(195, 'Déploiement des LB', '2022-08-05 12:30:23', '2022-08-05 12:30:23'),
(196, 'Swan Debug', '2022-08-05 12:30:45', '2022-08-05 12:30:45'),
(197, 'Nouveau matériel', '2022-08-05 12:31:12', '2022-08-05 12:31:12'),
(198, 'Livraison pour stock', '2022-08-05 12:31:40', '2022-08-05 12:31:40'),
(199, 'Extension de matériel', '2022-08-05 12:31:54', '2022-08-05 12:31:54'),
(200, 'Sortie de matériel ', '2022-08-05 12:32:09', '2022-08-05 12:32:09'),
(201, 'Recette Ilot ERCI', '2022-08-05 12:32:31', '2022-08-05 12:32:31'),
(202, 'Recette Ilot ERAP', '2022-08-05 12:32:49', '2022-08-05 12:32:49'),
(204, '', '2022-08-05 14:13:44', '2022-08-05 14:13:44'),
(205, 'DAOline', '2022-08-05 14:15:09', '2022-08-05 14:15:09'),
(206, 'Déploiement', '2022-08-05 14:15:18', '2022-08-05 14:15:18'),
(207, 'Ouverture des ports', '2022-08-05 14:15:26', '2022-08-05 14:15:26'),
(208, 'Déploiement des RP', '2022-08-05 14:15:38', '2022-08-05 14:15:38'),
(209, 'Swan Debug', '2022-08-05 14:15:47', '2022-08-05 14:15:47'),
(211, 'Configuration de la carte IDRAC', '2022-08-05 14:16:30', '2022-08-05 14:16:30'),
(212, 'Swan Debug', '2022-08-05 14:16:37', '2022-08-05 14:16:37'),
(213, '', '2022-08-05 14:16:39', '2022-08-05 14:16:39'),
(214, 'Connaissance des Infra', '2022-08-05 14:16:53', '2022-08-05 14:16:53'),
(215, 'Nouveau matériel', '2022-08-05 14:17:25', '2022-08-05 14:17:25'),
(216, 'Recette Ilot ERCI', '2022-08-05 14:17:33', '2022-08-05 14:17:33'),
(217, 'Customisation', '2022-08-05 14:17:56', '2022-08-05 14:17:56'),
(218, 'Nouveau matériel', '2022-08-05 14:18:07', '2022-08-05 14:18:07'),
(219, 'Swan Debug', '2022-08-05 14:18:16', '2022-08-05 14:18:16'),
(220, 'Sortie de matériel ', '2022-08-05 14:18:49', '2022-08-05 14:18:49'),
(221, 'MAJ DIO', '2022-08-05 15:56:02', '2022-08-05 15:56:02');

-- --------------------------------------------------------

--
-- Structure de la table `competence_project`
--

CREATE TABLE `competence_project` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `competence_id` bigint(20) UNSIGNED DEFAULT NULL,
  `niveau_requis_projet` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competence_project`
--

INSERT INTO `competence_project` (`id`, `project_id`, `competence_id`, `niveau_requis_projet`, `created_at`, `updated_at`) VALUES
(453, 208, 205, 2, '2022-08-05 14:15:09', '2022-08-05 14:15:09'),
(454, 208, 206, 3, '2022-08-05 14:15:18', '2022-08-05 14:15:18'),
(455, 208, 207, 3, '2022-08-05 14:15:26', '2022-08-05 14:15:26'),
(456, 208, 208, 2, '2022-08-05 14:15:38', '2022-08-05 14:15:38'),
(457, 208, 209, 3, '2022-08-05 14:15:47', '2022-08-05 14:15:47'),
(459, 209, 211, 3, '2022-08-05 14:16:30', '2022-08-05 14:16:30'),
(460, 209, 212, 3, '2022-08-05 14:16:37', '2022-08-05 14:16:37'),
(461, 209, 214, 2, '2022-08-05 14:16:53', '2022-08-05 14:16:53'),
(462, 209, 215, 2, '2022-08-05 14:17:25', '2022-08-05 14:17:25'),
(463, 209, 216, 3, '2022-08-05 14:17:33', '2022-08-05 14:17:33'),
(464, 209, 217, 3, '2022-08-05 14:17:56', '2022-08-05 14:17:56'),
(465, 210, 218, 2, '2022-08-05 14:18:07', '2022-08-05 14:18:07'),
(466, 210, 219, 2, '2022-08-05 14:18:16', '2022-08-05 14:18:16'),
(467, 210, 220, 1, '2022-08-05 14:18:49', '2022-08-05 14:18:49'),
(468, 221, 221, 4, '2022-08-05 15:56:02', '2022-08-05 15:56:02');

-- --------------------------------------------------------

--
-- Structure de la table `competence_user`
--

CREATE TABLE `competence_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `competence_id` bigint(20) UNSIGNED NOT NULL,
  `niveau` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `competence_user`
--

INSERT INTO `competence_user` (`id`, `user_id`, `competence_id`, `niveau`, `created_at`, `updated_at`) VALUES
(163, 10, 184, NULL, '2022-08-05 14:19:09', '2022-08-05 14:19:09'),
(164, 10, 184, 4, '2022-08-05 14:19:09', '2022-08-05 14:19:09'),
(165, 10, 189, NULL, '2022-08-05 14:19:18', '2022-08-05 14:19:18'),
(166, 10, 189, 3, '2022-08-05 14:19:18', '2022-08-05 14:19:18'),
(167, 9, 188, NULL, '2022-08-05 14:20:47', '2022-08-05 14:20:47'),
(168, 9, 188, 4, '2022-08-05 14:20:47', '2022-08-05 14:20:47'),
(169, 9, 177, NULL, '2022-08-05 14:22:49', '2022-08-05 14:22:49'),
(170, 9, 177, 4, '2022-08-05 14:22:49', '2022-08-05 14:22:49'),
(171, 9, 220, NULL, '2022-08-05 14:23:30', '2022-08-05 14:23:30'),
(172, 9, 220, 4, '2022-08-05 14:23:30', '2022-08-05 14:23:30'),
(173, 8, 179, NULL, '2022-08-05 15:43:20', '2022-08-05 15:43:20'),
(174, 8, 179, 3, '2022-08-05 15:43:20', '2022-08-05 15:43:20'),
(175, 8, 212, NULL, '2022-08-05 15:43:36', '2022-08-05 15:43:36'),
(176, 8, 212, 4, '2022-08-05 15:43:36', '2022-08-05 15:43:36'),
(179, 8, 177, NULL, '2022-08-05 15:56:21', '2022-08-05 15:56:21'),
(180, 8, 177, 4, '2022-08-05 15:56:21', '2022-08-05 15:56:21');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2022_07_18_200310_create_tags_table', 2),
(23, '2014_10_12_000000_create_users_table', 3),
(24, '2014_10_12_100000_create_password_resets_table', 3),
(25, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(26, '2019_08_19_000000_create_failed_jobs_table', 3),
(27, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(28, '2022_07_11_184458_create_sessions_table', 3),
(29, '2022_07_15_115247_refresh', 3),
(30, '2022_07_16_185748_create_competences_table', 3),
(31, '2022_07_19_184734_create_pivot_table_competence_user', 4),
(32, '2022_07_19_190157_create_competences_table', 5),
(35, '2022_07_19_190440_create_pivot_table_competence_user', 6),
(36, '2022_07_19_183624_create_competence_users_table', 7),
(42, '2022_07_20_145345_create_competences_table', 8),
(43, '2022_07_20_145420_create_pivot_competence_user_table', 8),
(44, '2022_07_22_033136_create_projects_table', 9),
(45, '2022_07_22_034021_create_pivot_project_user_table', 10),
(50, '2022_07_22_102741_create_pivot_competence_project_table', 12),
(51, '2022_07_25_130748_create_pivot_competence_project_table', 13),
(52, '2022_07_25_162806_create_pivot_competence_project_table', 14),
(53, '2022_07_22_093757_create_tasks_table', 15),
(54, '2022_07_22_094020_create_pivot_competence_task_table', 15),
(55, '2022_07_25_132753_add_etat_to_users_table', 15);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intitule_projet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `intitule_projet`, `created_at`, `updated_at`) VALUES
(208, 'Déploiement des VMs', '2022-08-05 12:34:00', '2022-08-05 12:34:00'),
(209, 'Déploiement des Lames pré-provisionnées', '2022-08-05 12:34:19', '2022-08-05 12:34:19'),
(210, 'Ouverture des flux', '2022-08-05 12:34:44', '2022-08-05 12:34:44'),
(211, 'Déploiement des serveurs physiques rack', '2022-08-05 12:35:06', '2022-08-05 12:35:06'),
(212, 'Déploiement des RP', '2022-08-05 12:35:25', '2022-08-05 12:35:25'),
(213, 'Déploiement des LB', '2022-08-05 12:35:43', '2022-08-05 12:35:43'),
(214, 'Déploiement des VIPs', '2022-08-05 12:36:14', '2022-08-05 12:36:14'),
(215, 'Déploiement des châssis', '2022-08-05 12:37:17', '2022-08-05 12:37:17'),
(216, 'Déploiement des lames client en DC', '2022-08-05 12:37:37', '2022-08-05 12:37:37'),
(217, 'Déploiement des îlots techniques', '2022-08-05 12:37:52', '2022-08-05 12:37:52'),
(218, 'Déménagement des serveurs physiques rack', '2022-08-05 12:38:07', '2022-08-05 12:38:07'),
(219, 'Déménagement des lames', '2022-08-05 12:38:27', '2022-08-05 12:38:27'),
(220, 'Déploiement des Clusters dédiés', '2022-08-05 12:38:57', '2022-08-05 12:38:57'),
(221, 'Debug Flux', '2022-08-05 12:39:13', '2022-08-05 12:39:13'),
(222, 'Devis clients', '2022-08-05 12:39:28', '2022-08-05 12:39:28'),
(223, 'Tapis rouge', '2022-08-05 12:39:46', '2022-08-05 12:39:46');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('B2613jBaadGMqDLLw3wxKgOH4AHwQ1U1ZcGNFtGb', 7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiNTI5T2c4ZkxmQ09VRFdMT205ZlJTNkRxNzhqMHJFSHcycm9PNHZwaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9qZXRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NztzOjQ6InR5cGUiO3M6MzoiQURNIjt9', 1659784195),
('UpuLq3OJGCe7cYyX9giaTA1pFGcxSNhIGNylebcl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWkRva3FZaWJocFpoTzN2dzFtSHRPYUNlblE4SWtSM290eDFHellrcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1659784058);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'USR FOR USER AND ADM FOR ADMIN',
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_integration` date DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `etat` enum('annuler','valider') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'annuler'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `type`, `prenom`, `nom`, `email`, `specialite`, `date_integration`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `email_verified_at`, `remember_token`, `profile_photo_path`, `created_at`, `updated_at`, `etat`) VALUES
(7, 'ADM', 'Super', 'admin', 'admin@gmail.com', 'administrateur', '2022-07-27', '$2y$10$gqz48xFp4ARAzFjIFY3vEuwaCJCqCIJ7EvouhUMW/p/YB3HSj4TXe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 15:34:04', '2022-07-25 15:34:04', 'annuler'),
(8, 'USR', 'elkhaddar', 'othmane', 'othmane.elkhaddar@gmail.com', 'developpement web', '2022-07-06', '$2y$10$La5sDd3HGyZYKR7MdjRr/OL10Iu4AC3UiusdlVZ7iH/7g8dQJo8ta', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 16:24:57', '2022-07-27 13:06:28', 'valider'),
(9, 'USR', 'user', 'user1', 'user1@gmail.com', 'developpement web', '2022-07-27', '$2y$10$bdoQoB7Bw2mxxJHTzafNDOaG0r9zt6IFAHOEBVRD19/2DGNACcBwC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 20:13:47', '2022-07-29 20:15:33', 'valider'),
(10, 'USR', 'us', 'user 2', 'user2@gmail.com', 'electric', '2022-07-14', '$2y$10$Gc5sZUsAkKm1BSs.lissi.haXXUEd3aKwYWkr9RcFiFbY1YxPg3XK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 20:15:09', '2022-07-29 20:15:31', 'valider'),
(11, 'USR', 'user3', 'user3', 'user3@gmail.com', 'developpement web', '2022-08-29', '$2y$10$3ZyJBlLaY/hpveapSoRoWe/Bq6xqEQ0vGecowJtzWy4q2jPgViiei', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-03 15:27:43', '2022-08-03 15:27:43', 'annuler'),
(12, 'USR', 'user 4', 'user 4', 'user4@gmail.com', 'developpement web', '2022-08-08', '$2y$10$Y.aL4TjdDDW5KGJq8CVbWehOzfPZLANymXnRpTmv3YM0WMVB0BrgG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-03 15:28:26', '2022-08-03 15:28:26', 'annuler'),
(13, 'USR', 'user5', 'user5', 'user5@gmail.com', 'electric', '2022-08-23', '$2y$10$y/H/Pt6E/AuHFaMA.ltaT.K3jHoKsyAcv7NkjeysN0cXmeqQ82YwK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-03 15:29:25', '2022-08-03 15:29:25', 'annuler');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competences`
--
ALTER TABLE `competences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competence_project`
--
ALTER TABLE `competence_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `competence_project_project_id_foreign` (`project_id`),
  ADD KEY `competence_project_competence_id_foreign` (`competence_id`);

--
-- Index pour la table `competence_user`
--
ALTER TABLE `competence_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `competence_user_user_id_foreign` (`user_id`),
  ADD KEY `competence_user_competence_id_foreign` (`competence_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competences`
--
ALTER TABLE `competences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT pour la table `competence_project`
--
ALTER TABLE `competence_project`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=469;

--
-- AUTO_INCREMENT pour la table `competence_user`
--
ALTER TABLE `competence_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `competence_project`
--
ALTER TABLE `competence_project`
  ADD CONSTRAINT `competence_project_competence_id_foreign` FOREIGN KEY (`competence_id`) REFERENCES `competences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `competence_project_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `competence_user`
--
ALTER TABLE `competence_user`
  ADD CONSTRAINT `competence_user_competence_id_foreign` FOREIGN KEY (`competence_id`) REFERENCES `competences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `competence_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
