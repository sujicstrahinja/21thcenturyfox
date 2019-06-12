-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 10:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21thcenturyfox`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Comedy', '2019-03-19 15:35:17', '2019-03-19 15:35:17'),
(2, 'Action', '2019-03-19 15:35:22', '2019-03-19 15:35:22'),
(3, 'Horror', '2019-03-19 15:35:26', '2019-03-19 15:35:26'),
(4, 'Adventure', '2019-03-19 16:27:52', '2019-03-19 16:27:52'),
(5, 'Drama', '2019-03-19 16:27:56', '2019-03-19 16:27:56'),
(6, 'Fantasy', '2019-03-19 16:39:03', '2019-03-19 16:39:03'),
(7, 'Sci-Fi', '2019-03-19 16:49:55', '2019-03-19 16:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `genre_movie`
--

CREATE TABLE `genre_movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre_id` int(10) UNSIGNED NOT NULL,
  `movie_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genre_movie`
--

INSERT INTO `genre_movie` (`id`, `genre_id`, `movie_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 4, 3, NULL, NULL),
(5, 2, 4, NULL, NULL),
(6, 4, 4, NULL, NULL),
(7, 7, 4, NULL, NULL),
(8, 2, 5, NULL, NULL),
(9, 4, 5, NULL, NULL),
(10, 7, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id`, `name`, `href`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '2019-03-24 15:57:09', '2019-03-24 15:57:20'),
(2, 'Movies', 'movies', '2019-03-24 15:58:24', '2019-03-24 15:58:24'),
(3, 'Contact', 'contact', '2019-03-24 15:58:31', '2019-03-24 15:58:31'),
(4, 'About Me', 'about_me', '2019-03-24 15:58:39', '2019-03-24 15:58:39'),
(5, 'Admin Panel', 'admin/user', '2019-03-24 15:59:16', '2019-03-24 16:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Pera', 'Peric', 'pera@gmail.com', 'Zasto', 'Zato', '2019-03-24 17:01:34', '2019-03-24 17:01:34'),
(2, 'Pera', 'Peric', 'pera@gmail.com', 'Zasto', 'Zato', '2019-03-24 17:01:53', '2019-03-24 17:01:53'),
(3, 'Pera', 'Peric', 'pera@gmail.com', 'Zasto', 'zato', '2019-03-24 17:02:46', '2019-03-24 17:02:46'),
(4, 'Pera', 'Peric', 'pera@gmail.com', 'Zasto', 'zato', '2019-03-24 17:03:13', '2019-03-24 17:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_19_163318_create_genre_movie_table', 1),
(2, '2019_03_19_163318_create_genre_table', 1),
(3, '2019_03_19_163318_create_link_table', 1),
(4, '2019_03_19_163318_create_message_table', 1),
(5, '2019_03_19_163318_create_movie_table', 1),
(6, '2019_03_19_163318_create_role_table', 1),
(7, '2019_03_19_163318_create_subscription_table', 1),
(8, '2019_03_19_163318_create_user_table', 1),
(9, '2019_03_19_163328_create_foreign_keys', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_link` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `viewed` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `description`, `headline`, `image`, `thumbnail`, `youtube_link`, `year`, `featured`, `rating`, `viewed`, `created_at`, `updated_at`) VALUES
(1, 'Central Intelligence', 'Calvin Joyner was voted in high school the guy most likely to succeed. 20 years later he\'s an accountant. As his high school reunion approaches, he tries to make contact with his old schoolmates. And someone named Bob Stone contacts him. He says that he was known as Robbie Weirdicht in school. Calvin remembers that he was picked on, as a matter of fact after an extremely nasty prank he left school. They agree to meet and Calvin is surprised by how much he has changed. Bob asks Calvin to help him out. He says yes and the next thing he knows some men burst into his home. They\'re CIA, the one in charge is looking for Stone, she says he\'s a rogue agent. When they can\'t find Bob they leave. Later he approaches Calvin telling him, he is not a rogue agent, he\'s trying to find a person known as the Black Badger who is planning to sell some information that in the wrong hands can be disastrous. so he needs Calvin\'s help to stop him. Calvin\'s not sure whom he should believe.', 'Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. Claiming to be on a top-secret ...', '4.jpg', 'm9.jpg', 'MxEw3elSJ8M', 2016, 1, 6.30, 500000, '2019-03-19 15:51:35', '2019-03-19 15:51:35'),
(2, 'The Legend of Tarzan', 'Following his parents\' death in Africa, John Clayton has been be raised by an ape, was known by the name Tarzan, but eventually left Africa and for his parents\' home in England, along with the woman he fell in love with and married, Jane Porter. He is asked by Belgian King Leopold to go to Africa to see what he has done there to help the country.<span> Initially, he refuses. But an American, George Washington Williams, wants him to accept so he can accompany him. He says that Leopold might be committing all sorts of atrocities to achieve his goal, like slavery. Clayton agrees and his wife insists that she accompany him because she misses Africa. When they arrive, a man named Rom, who works for Leopold, attacks their village and captures Tarzan and Jane. With Washington\'s help he escapes and sets out to rescue Jane by going across the jungle. Washington joins him despite being told that he might not make it.</span>', 'Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.', '5.jpg', 'm3.jpg', 'Aj7ty6sViiU', 2016, 0, 6.30, 550000, '2019-03-19 16:27:42', '2019-03-20 13:27:37'),
(3, 'Avatar', 'When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge\'s intentions of driving off the native humanoid \"Na\'vi\" in order to mine for the precious material scattered throughout their rich woodland. In exchange for the spinal surgery that will fix his legs, Jake gathers intel for the cooperating military unit spearheaded by gung-ho Colonel Quaritch, while simultaneously attempting to infiltrate the Na\'vi people with the use of an \"avatar\" identity. While Jake begins to bond with the native tribe and quickly falls in love with the beautiful alien Neytiri, the restless Colonel moves forward with his ruthless extermination tactics, forcing the soldier to take a stand - and fight back in an epic battle for the fate of Pandora.', 'A paraplegic marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.', 'avatar.jpg', 'avtr.jpg', '6ziBFh3V1aM', 2009, 1, 7.80, 3000000, '2019-03-19 16:38:50', '2019-03-19 16:38:50'),
(4, 'Independence', 'Two decades after the freak alien invasion that nearly destroyed mankind a new threat emerges. This Alien mothership is more than twice the size as the last one and once again, the world\'s armies must band together to save the world. Do they have enough firepower or will this battle change and will aliens take over?', 'Two decades after the first Independence Day invasion, Earth is faced with a new extra-Solar threat. But will mankind\'s new space defenses be enough?', '3.jpg', 'idResu.jpg', 'LbduDRH2m2M', 2016, 0, 5.20, 300000, '2019-03-19 16:51:11', '2019-03-19 16:51:11'),
(5, 'X-Men', 'Since the dawn of civilization, he was worshiped as a god. Apocalypse, the first and most powerful mutant from Marvel\'s X-Men universe, amassed the powers of many other mutants, becoming immortal and invincible. Upon awakening after thousands of years, he is disillusioned with the world as he finds it and recruits a team of powerful mutants, including a disheartened Magneto, to cleanse mankind and create a new world order, over which he will reign. As the fate of the Earth hangs in the balance, Raven with the help of Professor X must lead a team of young X-Men to stop their greatest nemesis and save mankind from complete destruction.', 'In the 1980s the X-Men must defeat an ancient all-powerful mutant, En Sabah Nur, who intends to thrive through bringing destruction to the world.', 'Xmen.jpg', 'xm.jpg', 'COvnHv42T-A', 2016, 1, 7.00, 800000, '2019-03-19 17:09:25', '2019-03-19 17:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-03-22 16:32:52', '2019-03-22 16:32:52'),
(2, 'user', '2019-03-22 16:32:55', '2019-03-22 16:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'zika@gmail', '2019-03-24 16:49:32', '2019-03-24 16:49:32'),
(2, 'pera@gmail.com', '2019-03-24 16:50:14', '2019-03-24 16:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'miroljub', 'miroljub@gmail.com', 'fe031f4cb9e80f03fe35161867e094c8', 2, '2019-03-24 12:55:33', '2019-03-25 19:41:44'),
(2, 'daca', 'daca@gmail.com', 'd0aeeef9a9aeddbaa999b7b65101b3a1', 1, '2019-03-24 14:38:29', '2019-03-25 19:41:59'),
(6, 'pera', 'pera@gmail.com', 'd0aeeef9a9aeddbaa999b7b65101b3a1', 2, '2019-03-25 19:22:56', '2019-03-25 19:41:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genre_name_unique` (`name`);

--
-- Indexes for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_movie_genre_id_foreign` (`genre_id`),
  ADD KEY `genre_movie_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_name_unique` (`name`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_unique` (`name`),
  ADD UNIQUE KEY `user_email_unique` (`email`),
  ADD KEY `user_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genre_movie`
--
ALTER TABLE `genre_movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD CONSTRAINT `genre_movie_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `genre_movie_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
