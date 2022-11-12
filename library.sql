-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 12:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_date` date NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `cover_page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `isbn`, `revision_number`, `published_date`, `publisher`, `author`, `date_added`, `cover_page`, `genre`, `created_at`, `updated_at`) VALUES
(3, 'AUwal Kasim Book', '999-2220-2222', '12355555', '2001-01-22', 'Vel itaque aperiam q', 'Ullamco proident la', '2022-11-11', '1668242529Test.png', 'Quod nulla anim porr', '2022-11-11 03:08:47', '2022-11-12 07:42:09'),
(4, 'Harry Porter', '6689-3433', '450', '2022-11-05', 'Auwal Kasim Comapny', 'Test1', '2022-11-11', '1668143428Test.png', 'Action', '2022-11-11 04:10:28', '2022-11-11 04:10:28'),
(5, 'Maite Stout', 'Et excepteur est de', '685', '1978-01-23', 'Facilis quo praesent', 'Nostrum commodo quis', '2022-11-11', '1668173951IMG_1962.JPG', 'Culpa minim dolor am', '2022-11-11 12:39:11', '2022-11-11 12:39:11'),
(6, 'One Man Village', '222-223-112', '0', '1990-02-02', 'Nigerian People', 'Samd', '2022-11-11', '1668190966Test.png', 'Action', '2022-11-11 17:22:46', '2022-11-11 17:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_10_204937_create_books_table', 2),
(6, '2022_11_11_034851_add_cover_page_to_books', 3),
(7, '2022_11_11_053331_create_user_books_table', 4),
(8, '2022_11_11_102629_add_status_to_user_books', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` bigint(20) UNSIGNED NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneNumber`, `user_type_id`, `passport`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Erich', 'rugiquzo@mailinator.com', '+1 (737) 474-1065', 2, 'C:\\Users\\Auwal Kasim Adam\\AppData\\Local\\Temp\\phpAAE7.tmp', NULL, '$2y$10$aJf9m8Ym17Fw/ZIuKKAVROtp/dWsWnh.uNHXnRqfRLXh1o0tEm8Vm', NULL, '2022-11-10 19:03:03', '2022-11-10 19:03:03'),
(2, 'auwal Kasim', 'kaseemauwal501@gmail.com', '08022330022', 1, 'auwal.jpg', NULL, '$2y$10$C1sLVmdK57rwxzDbU3MRkez7NI/CpF.OPQ6ZRLbaEtX7y82JudjWS', NULL, '2022-11-10 19:57:14', '2022-11-10 19:57:14'),
(3, 'Auwal Kasim Adam', 'kasimauwala@gmail.com', '09022003322', 2, '1668242442CamScanner 10-19-2022 16.25_1.jpg', NULL, '$2y$10$.QzsCltPmdRHyqXPVEyRceRF0PjVRyvJlUJMI39zq2Nr5Awj47iw2', NULL, '2022-11-11 16:01:14', '2022-11-12 07:40:42'),
(4, 'Davis', 'julaqi@mailinator.com', '+1 (589) 826-3628', 2, NULL, NULL, '$2y$10$VS3edYvV5TtKgi5.BQFMDuOQUQb0b08gEZIIR.o8HaLhoM0417tdu', NULL, '2022-11-11 17:19:09', '2022-11-11 17:19:09'),
(5, 'Veronica', 'xobedec@mailinator.com', '+1 (123) 796-6242', 1, '16682440851667409670600.jpg', NULL, '$2y$10$1so6msKB3WcHj0bkc.YUSOGOiqh.asKw9/jZLCHKF6PkKg3DujHBi', NULL, '2022-11-12 08:05:21', '2022-11-12 08:08:05'),
(6, 'Read 1', 'reader@online.com', '08066335544', 2, NULL, NULL, '$2y$10$4l7kAtgM1guQgbQfzyu2CejBqvnu8ACJkPGpJXr4CYW8e8W2Hi0ba', NULL, '2022-11-12 10:08:13', '2022-11-12 10:08:13'),
(8, 'Librarian 4', 'librarian@online.com', '08063740352', 1, NULL, NULL, '$2y$10$g99cU54h64Gf2loVW.qkk.HAAzXqQt.x80fm2SXTZB9LuDottVtbC', NULL, '2022-11-12 10:13:06', '2022-11-12 10:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_books`
--

CREATE TABLE `user_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) NOT NULL,
  `checked_in` date NOT NULL,
  `checked_out` date NOT NULL DEFAULT '2022-11-11',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_books`
--

INSERT INTO `user_books` (`id`, `user_id`, `book_id`, `checked_in`, `checked_out`, `created_at`, `updated_at`, `status`) VALUES
(15, 3, 4, '2022-11-12', '2022-11-22', '2022-11-12 07:13:45', '2022-11-12 07:14:43', 1),
(16, 3, 5, '2022-11-12', '2022-11-22', '2022-11-12 07:14:28', '2022-11-12 07:25:45', 1),
(17, 3, 3, '2022-11-12', '2022-11-22', '2022-11-12 07:14:51', '2022-11-12 07:15:02', 1),
(18, 3, 4, '2022-11-12', '2022-11-22', '2022-11-12 07:22:51', '2022-11-12 08:16:41', 1),
(19, 3, 5, '2022-11-12', '2022-11-22', '2022-11-12 07:25:49', '2022-11-12 07:25:49', 0),
(20, 3, 3, '2022-11-12', '2022-11-22', '2022-11-12 08:16:10', '2022-11-12 08:17:55', 1),
(21, 3, 4, '2022-11-12', '2022-11-22', '2022-11-12 08:17:18', '2022-11-12 08:17:50', 1),
(22, 3, 3, '2022-11-12', '2022-11-22', '2022-11-12 08:17:58', '2022-11-12 08:17:58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phonenumber_unique` (`phoneNumber`);

--
-- Indexes for table `user_books`
--
ALTER TABLE `user_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_books`
--
ALTER TABLE `user_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
