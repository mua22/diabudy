-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2018 at 06:58 AM
-- Server version: 5.6.23-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usmanliv_diabudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_id` int(11) NOT NULL,
  `meta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `ratingcount` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `slug`, `author`, `description`, `theme_id`, `meta`, `tags`, `rating`, `ratingcount`, `created_at`, `updated_at`) VALUES
(6, 1, 'Best Practices to Manage Diabetes', 'best-practices-to-manage-diabetes', 'Usman Akram', 'In this Blog, I have comprehensively discussed the ways in which one can manage diabetes. You are the one who manages your diabetes day by day. Talk to your doctor about how you can best care for your diabetes to stay healthy.', 1, 'Diabetes', 'Diabetes', 0, 0, '2018-01-19 19:56:52', '2018-01-19 19:59:23'),
(8, 1, 'Diabetics Exercise Routines', 'diabetics-exercise-routines', 'Usman Akram', 'This blog is about how exercise can help diabetics maintain a healthier lifestyle. You may have heard people say they have “a touch of diabetes” or that their “sugar is a little high.” These words suggest that diabetes is not a serious disease. That is not correct. Diabetes is serious, but you can learn to manage it.', 1, 'Exercise', 'Exercise,diabetes', 0, 0, '2018-01-19 20:03:55', '2018-01-19 20:17:14'),
(10, 2, 'Eating habits and Diabetes', 'eating-habits-and-diabetes-1', 'Usama Kamran', 'This blog is about how eating healthy can help you manage diabetics.', 1, 'Diet', 'Diet', 4, 1, '2018-01-19 20:08:47', '2018-01-20 13:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `parent_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, 'Great Read!!!!!', '2018-01-19 20:44:16', '2018-01-19 20:44:16'),
(2, 3, 3, 1, 'I agree!', '2018-01-19 20:46:15', '2018-01-19 20:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dislikes`
--

INSERT INTO `dislikes` (`id`, `type`, `object_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'thread', 1, 4, '2018-01-20 05:43:02', '2018-01-20 05:43:02');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `forum_category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `parent_id`, `forum_category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Upcoming Features', 'upcoming-features', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(2, 1, 1, 'Changes To Layout', 'changes-to-layout', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(3, 1, 1, 'New Features', 'new-features', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(4, 1, 1, 'Updates to Privacy Policy', 'updates-to-privacy-policy', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(5, 1, 1, 'About', 'about', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(6, NULL, 1, 'Changes to Privacy Policy', 'changes-to-privacy-policy', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(7, 6, 1, 'How Privacy Policy affects you', 'how-privacy-policy-affects-you', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(8, NULL, 1, 'Terms and Services', 'terms-and-services', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(9, 8, 1, 'What are Terms and Services', 'what-are-terms-and-services', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(10, NULL, 1, 'Events', 'events', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(11, 10, 1, 'New Events', 'new-events', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(12, 10, 1, 'Annual Diabetic Meet up', 'annual-diabetic-meet-up', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(13, NULL, 2, 'Managing Diabetes', 'managing-diabetes', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(14, 13, 2, 'How to manage diabetes', 'how-to-manage-diabetes', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(15, 13, 2, 'How to cure diabetes', 'how-to-cure-diabetes', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(16, 13, 2, 'Know more', 'know-more', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(17, NULL, 2, 'Type 1 Diabetics', 'type-1-diabetics', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(18, 17, 2, 'Type 1 subforum 1', 'type-1-subforum-1', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(19, 17, 2, 'Type 1 subforum 2', 'type-1-subforum-2', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(20, NULL, 2, 'Type 2 Diabetics', 'type-2-diabetics', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(21, 20, 2, 'Type 2 subforum 1', 'type-2-subforum-1', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(22, 17, 2, 'Type 2 subforum 2', 'type-2-subforum-2', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(23, NULL, 3, 'Layout Bugs', 'layout-bugs', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(24, 23, 3, 'Report us bugs', 'report-us-bugs', '2018-01-13 16:30:01', '2018-01-13 16:30:01'),
(25, NULL, 3, 'Complaints & Suggestions', 'complaints-suggestions', '2018-01-13 16:30:01', '2018-01-13 16:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `forum_categories`
--

CREATE TABLE `forum_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forum_categories`
--

INSERT INTO `forum_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Announcements', 'announcements', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(2, 'General Discussions', 'general-discussions', '2018-01-13 16:30:00', '2018-01-13 16:30:00'),
(3, 'Report Bugs', 'report-bugs', '2018-01-13 16:30:00', '2018-01-13 16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `type`, `object_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'post', 3, 2, '2018-01-19 20:24:31', '2018-01-19 20:24:31'),
(4, 'post', 3, 1, '2018-01-19 20:29:42', '2018-01-19 20:29:42'),
(5, 'thread', 2, 3, '2018-01-19 20:40:26', '2018-01-19 20:40:26'),
(6, 'post', 3, 4, '2018-01-20 05:39:33', '2018-01-20 05:39:33'),
(7, 'thread', 1, 4, '2018-01-20 05:42:53', '2018-01-20 05:42:53'),
(8, 'thread', 1, 4, '2018-01-20 05:42:55', '2018-01-20 05:42:55'),
(9, 'thread', 1, 4, '2018-01-20 05:42:57', '2018-01-20 05:42:57'),
(10, 'thread', 1, 4, '2018-01-20 05:42:59', '2018-01-20 05:42:59'),
(11, 'thread', 3, 6, '2018-01-21 23:19:56', '2018-01-21 23:19:56'),
(16, 'post', 4, 2, '2018-02-06 16:40:06', '2018-02-06 16:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `disk` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extension` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aggregate_type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `disk`, `directory`, `filename`, `extension`, `mime_type`, `aggregate_type`, `size`, `created_at`, `updated_at`) VALUES
(1, 'diabudy', 'users/admin', '5a5a897083476', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(2, 'diabudy', 'users/ukabthebest', '5a5a89712fac1', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(3, 'diabudy', 'users/goldner-jennings', '5a5a897165bbf', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(4, 'diabudy', 'users/ushanahan', '5a5a89718b1f1', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(5, 'diabudy', 'users/renner-jenifer', '5a5a89719e073', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(6, 'diabudy', 'users/pierre-shanahan', '5a5a8971b0f97', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(7, 'diabudy', 'users/lwilkinson', '5a5a8971d6c70', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(8, 'diabudy', 'users/arely-mitchell', '5a5a8971ea24e', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:25', '2018-01-13 17:34:25'),
(9, 'diabudy', 'users/rippin-aletha', '5a5a8972087f3', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(10, 'diabudy', 'users/moen-erling', '5a5a897226b47', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(11, 'diabudy', 'users/streich-fay', '5a5a897239222', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(12, 'diabudy', 'users/botsford-eloy', '5a5a89724c0c4', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(13, 'diabudy', 'users/torey34', '5a5a89725ef82', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(14, 'diabudy', 'users/leila74', '5a5a897271e2e', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(15, 'diabudy', 'users/palma52', '5a5a8972853d3', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(16, 'diabudy', 'users/rachelle97', '5a5a897297bb1', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(17, 'diabudy', 'users/qeffertz', '5a5a8972aaa61', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(18, 'diabudy', 'users/kuhlman-cole', '5a5a8972d39ac', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(19, 'diabudy', 'users/zulauf-adolfo', '5a5a8972f0eae', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:26', '2018-01-13 17:34:26'),
(20, 'diabudy', 'users/haskell95', '5a5a89730fb8c', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(21, 'diabudy', 'users/willms-nedra', '5a5a89732555c', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(22, 'diabudy', 'users/beichmann', '5a5a89733b4d1', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(23, 'diabudy', 'users/jillian05', '5a5a89734ddd2', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(24, 'diabudy', 'users/ugulgowski', '5a5a897368e36', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(25, 'diabudy', 'users/jody-lakin', '5a5a89737e830', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(26, 'diabudy', 'users/ulices96', '5a5a89739171d', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(27, 'diabudy', 'users/sally-jakubowski', '5a5a8973a45be', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(28, 'diabudy', 'users/mschmidt', '5a5a8973c2919', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(29, 'diabudy', 'users/okeefe-caesar', '5a5a8973d4fe7', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(30, 'diabudy', 'users/xhackett', '5a5a8973e7ec2', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:27', '2018-01-13 17:34:27'),
(31, 'diabudy', 'users/christ16', '5a5a897406b2c', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(32, 'diabudy', 'users/abe38', '5a5a897424e43', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(33, 'diabudy', 'users/arely-greenfelder', '5a5a897442478', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(34, 'diabudy', 'users/alice67', '5a5a89745af4c', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(35, 'diabudy', 'users/gerhold-tyra', '5a5a8974701cd', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(36, 'diabudy', 'users/rod01', '5a5a8974869fb', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(37, 'diabudy', 'users/jude-bogisich', '5a5a897498a83', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(38, 'diabudy', 'users/mpurdy', '5a5a8974ab98c', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(39, 'diabudy', 'users/ford22', '5a5a8974d9cc0', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(40, 'diabudy', 'users/jarrett-white', '5a5a8974f1d5a', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:28', '2018-01-13 17:34:28'),
(41, 'diabudy', 'users/oswaldo49', '5a5a8975109d9', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(42, 'diabudy', 'users/odie02', '5a5a8975238c3', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(43, 'diabudy', 'users/fmcglynn', '5a5a897541c86', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(44, 'diabudy', 'users/laila-rice', '5a5a8975542de', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(45, 'diabudy', 'users/markus-torp', '5a5a897569d0d', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(46, 'diabudy', 'users/terrell-miller', '5a5a89757f7ab', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(47, 'diabudy', 'users/malachi-collins', '5a5a8975a544a', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(48, 'diabudy', 'users/tnader', '5a5a8975c7c1d', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(49, 'diabudy', 'users/cschaefer', '5a5a8975de080', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:29', '2018-01-13 17:34:29'),
(50, 'diabudy', 'users/alexandrine-goldner', '5a5a8975f3aa6', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(51, 'diabudy', 'users/bert10', '5a5a897625a3c', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(52, 'diabudy', 'users/alysha79', '5a5a897638557', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(53, 'diabudy', 'users/frederick51', '5a5a89764b31a', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(54, 'diabudy', 'users/anastasia16', '5a5a8976696a3', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(55, 'diabudy', 'users/diamond-lebsack', '5a5a89767bd75', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(56, 'diabudy', 'users/larkin-britney', '5a5a8976942ae', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(57, 'diabudy', 'users/brennon24', '5a5a8976a7159', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(58, 'diabudy', 'users/torphy-reuben', '5a5a8976c57d2', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(59, 'diabudy', 'users/corrine21', '5a5a8976da725', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:30', '2018-01-13 17:34:30'),
(60, 'diabudy', 'users/mante-alvera', '5a5a897711886', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(61, 'diabudy', 'users/wmedhurst', '5a5a89772473e', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(62, 'diabudy', 'users/mcclure-nicholas', '5a5a89773cc70', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(63, 'diabudy', 'users/ludie27', '5a5a89774fb16', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(64, 'diabudy', 'users/raymond60', '5a5a8977629c1', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(65, 'diabudy', 'users/uromaguera', '5a5a8977758b4', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(66, 'diabudy', 'users/sroob', '5a5a897788751', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(67, 'diabudy', 'users/drew-kub', '5a5a89779b5fc', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(68, 'diabudy', 'users/hahn-shaniya', '5a5a8977ae4ee', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(69, 'diabudy', 'users/zokeefe', '5a5a8977d1aa0', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(70, 'diabudy', 'users/xboyle', '5a5a8977e4584', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:31', '2018-01-13 17:34:31'),
(71, 'diabudy', 'users/dante87', '5a5a89780321e', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(72, 'diabudy', 'users/cassie86', '5a5a8978160d8', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(73, 'diabudy', 'users/akautzer', '5a5a897828f86', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(74, 'diabudy', 'users/alexis-connelly', '5a5a89783e976', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(75, 'diabudy', 'users/cgottlieb', '5a5a89786a212', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(76, 'diabudy', 'users/wilton-konopelski', '5a5a8978b0fde', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(77, 'diabudy', 'users/kaylah11', '5a5a8978d6739', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(78, 'diabudy', 'users/eweber', '5a5a8978e8dd7', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:32', '2018-01-13 17:34:32'),
(79, 'diabudy', 'users/aaron25', '5a5a89790d0b3', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(80, 'diabudy', 'users/corrine38', '5a5a89791ff71', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(81, 'diabudy', 'users/blick-santa', '5a5a897932df7', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(82, 'diabudy', 'users/tlebsack', '5a5a897945cfa', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(83, 'diabudy', 'users/macejkovic-nikki', '5a5a897958be0', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(84, 'diabudy', 'users/brody40', '5a5a89796ba33', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(85, 'diabudy', 'users/lyric-willms', '5a5a89797e98a', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(86, 'diabudy', 'users/hermiston-wava', '5a5a8979943b1', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(87, 'diabudy', 'users/qwilderman', '5a5a8979b247a', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(88, 'diabudy', 'users/buckridge-joan', '5a5a8979d8094', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(89, 'diabudy', 'users/botsford-carter', '5a5a8979eaaba', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:33', '2018-01-13 17:34:33'),
(90, 'diabudy', 'users/fondricka', '5a5a897a09726', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(91, 'diabudy', 'users/consuelo-boehm', '5a5a897a1f110', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(92, 'diabudy', 'users/maxime56', '5a5a897a31fec', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(93, 'diabudy', 'users/skiles-jane', '5a5a897a44ea4', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(94, 'diabudy', 'users/samanta-mclaughlin', '5a5a897a5a8f2', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(95, 'diabudy', 'users/homenick-eusebio', '5a5a897a6d7c5', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(96, 'diabudy', 'users/audra-strosin', '5a5a897a80619', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(97, 'diabudy', 'users/orin09', '5a5a897a934ab', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(98, 'diabudy', 'users/senger-abbigail', '5a5a897ab157e', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(99, 'diabudy', 'users/bobbie25', '5a5a897ad7520', 'jpeg', 'image/jpeg', 'image', 32808, '2018-01-13 17:34:34', '2018-01-13 17:34:34'),
(104, 'diabudy', 'users/ukabthebest', 'diabudyfavicon', 'png', 'image/png', 'image', 3619, '2018-01-14 03:38:12', '2018-01-14 03:38:12'),
(107, 'diabudy', 'users/usamakamran-1', 'IMAG0285', 'jpg', 'image/jpeg', 'image', 3630266, '2018-01-14 04:59:32', '2018-01-14 04:59:32'),
(108, 'diabudy', 'users/usamakamran', 'diabudyfavicon', 'png', 'image/png', 'image', 3619, '2018-01-14 05:01:03', '2018-01-14 05:01:03'),
(109, 'diabudy', 'users/ikhan', 'Capture4', 'PNG', 'image/png', 'image', 58293, '2018-01-19 18:01:06', '2018-01-19 18:01:06'),
(110, 'diabudy', 'blogs/best-practices-to-manage-diabetes', 'blog1', 'jpg', 'image/jpeg', 'image', 68963, '2018-01-19 20:00:21', '2018-01-19 20:00:21'),
(111, 'diabudy', 'blogs/diabetics-exercise-routines', 'blog2', 'jpg', 'image/jpeg', 'image', 11993, '2018-01-19 20:04:59', '2018-01-19 20:04:59'),
(112, 'diabudy', 'blogs/eating-habits-and-diabetes-1', 'blog3', 'jpg', 'image/jpeg', 'image', 11473, '2018-01-19 20:09:49', '2018-01-19 20:09:49'),
(113, 'diabudy', 'users/usmanakram', 'sir', 'jpg', 'image/jpeg', 'image', 30546, '2018-01-19 20:15:13', '2018-01-19 20:15:13'),
(114, 'diabudy', 'blogs/diabetics-exercise-routines', 'umair', 'png', 'image/png', 'image', 105443, '2018-01-19 20:21:58', '2018-01-19 20:21:58'),
(115, 'diabudy', 'users/usamakamran', 'profile', 'jpg', 'image/jpeg', 'image', 36807, '2018-01-19 20:58:33', '2018-01-19 20:58:33'),
(116, 'diabudy', 'blogs/eating-habits-and-diabetes-1', 'profile', 'jpg', 'image/jpeg', 'image', 36807, '2018-01-21 23:26:01', '2018-01-21 23:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `mediables`
--

CREATE TABLE `mediables` (
  `media_id` int(10) UNSIGNED NOT NULL,
  `mediable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mediable_id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mediables`
--

INSERT INTO `mediables` (`media_id`, `mediable_type`, `mediable_id`, `tag`, `order`) VALUES
(4, 'App\\Models\\User', 4, 'profilepicture', 1),
(5, 'App\\Models\\User', 5, 'profilepicture', 1),
(6, 'App\\Models\\User', 6, 'profilepicture', 1),
(7, 'App\\Models\\User', 7, 'profilepicture', 1),
(8, 'App\\Models\\User', 8, 'profilepicture', 1),
(9, 'App\\Models\\User', 9, 'profilepicture', 1),
(10, 'App\\Models\\User', 10, 'profilepicture', 1),
(11, 'App\\Models\\User', 11, 'profilepicture', 1),
(12, 'App\\Models\\User', 12, 'profilepicture', 1),
(13, 'App\\Models\\User', 13, 'profilepicture', 1),
(14, 'App\\Models\\User', 14, 'profilepicture', 1),
(15, 'App\\Models\\User', 15, 'profilepicture', 1),
(16, 'App\\Models\\User', 16, 'profilepicture', 1),
(17, 'App\\Models\\User', 17, 'profilepicture', 1),
(18, 'App\\Models\\User', 18, 'profilepicture', 1),
(19, 'App\\Models\\User', 19, 'profilepicture', 1),
(20, 'App\\Models\\User', 20, 'profilepicture', 1),
(21, 'App\\Models\\User', 21, 'profilepicture', 1),
(22, 'App\\Models\\User', 22, 'profilepicture', 1),
(23, 'App\\Models\\User', 23, 'profilepicture', 1),
(24, 'App\\Models\\User', 24, 'profilepicture', 1),
(25, 'App\\Models\\User', 25, 'profilepicture', 1),
(26, 'App\\Models\\User', 26, 'profilepicture', 1),
(27, 'App\\Models\\User', 27, 'profilepicture', 1),
(28, 'App\\Models\\User', 28, 'profilepicture', 1),
(29, 'App\\Models\\User', 29, 'profilepicture', 1),
(30, 'App\\Models\\User', 30, 'profilepicture', 1),
(31, 'App\\Models\\User', 31, 'profilepicture', 1),
(32, 'App\\Models\\User', 32, 'profilepicture', 1),
(33, 'App\\Models\\User', 33, 'profilepicture', 1),
(34, 'App\\Models\\User', 34, 'profilepicture', 1),
(35, 'App\\Models\\User', 35, 'profilepicture', 1),
(36, 'App\\Models\\User', 36, 'profilepicture', 1),
(37, 'App\\Models\\User', 37, 'profilepicture', 1),
(38, 'App\\Models\\User', 38, 'profilepicture', 1),
(39, 'App\\Models\\User', 39, 'profilepicture', 1),
(40, 'App\\Models\\User', 40, 'profilepicture', 1),
(41, 'App\\Models\\User', 41, 'profilepicture', 1),
(42, 'App\\Models\\User', 42, 'profilepicture', 1),
(43, 'App\\Models\\User', 43, 'profilepicture', 1),
(44, 'App\\Models\\User', 44, 'profilepicture', 1),
(45, 'App\\Models\\User', 45, 'profilepicture', 1),
(46, 'App\\Models\\User', 46, 'profilepicture', 1),
(47, 'App\\Models\\User', 47, 'profilepicture', 1),
(48, 'App\\Models\\User', 48, 'profilepicture', 1),
(49, 'App\\Models\\User', 49, 'profilepicture', 1),
(50, 'App\\Models\\User', 50, 'profilepicture', 1),
(51, 'App\\Models\\User', 51, 'profilepicture', 1),
(52, 'App\\Models\\User', 52, 'profilepicture', 1),
(53, 'App\\Models\\User', 53, 'profilepicture', 1),
(54, 'App\\Models\\User', 54, 'profilepicture', 1),
(55, 'App\\Models\\User', 55, 'profilepicture', 1),
(56, 'App\\Models\\User', 56, 'profilepicture', 1),
(57, 'App\\Models\\User', 57, 'profilepicture', 1),
(58, 'App\\Models\\User', 58, 'profilepicture', 1),
(59, 'App\\Models\\User', 59, 'profilepicture', 1),
(60, 'App\\Models\\User', 60, 'profilepicture', 1),
(61, 'App\\Models\\User', 61, 'profilepicture', 1),
(62, 'App\\Models\\User', 62, 'profilepicture', 1),
(63, 'App\\Models\\User', 63, 'profilepicture', 1),
(64, 'App\\Models\\User', 64, 'profilepicture', 1),
(65, 'App\\Models\\User', 65, 'profilepicture', 1),
(66, 'App\\Models\\User', 66, 'profilepicture', 1),
(67, 'App\\Models\\User', 67, 'profilepicture', 1),
(68, 'App\\Models\\User', 68, 'profilepicture', 1),
(69, 'App\\Models\\User', 69, 'profilepicture', 1),
(70, 'App\\Models\\User', 70, 'profilepicture', 1),
(71, 'App\\Models\\User', 71, 'profilepicture', 1),
(72, 'App\\Models\\User', 72, 'profilepicture', 1),
(73, 'App\\Models\\User', 73, 'profilepicture', 1),
(74, 'App\\Models\\User', 74, 'profilepicture', 1),
(75, 'App\\Models\\User', 75, 'profilepicture', 1),
(76, 'App\\Models\\User', 76, 'profilepicture', 1),
(77, 'App\\Models\\User', 77, 'profilepicture', 1),
(78, 'App\\Models\\User', 78, 'profilepicture', 1),
(79, 'App\\Models\\User', 79, 'profilepicture', 1),
(80, 'App\\Models\\User', 80, 'profilepicture', 1),
(81, 'App\\Models\\User', 81, 'profilepicture', 1),
(82, 'App\\Models\\User', 82, 'profilepicture', 1),
(83, 'App\\Models\\User', 83, 'profilepicture', 1),
(84, 'App\\Models\\User', 84, 'profilepicture', 1),
(85, 'App\\Models\\User', 85, 'profilepicture', 1),
(86, 'App\\Models\\User', 86, 'profilepicture', 1),
(87, 'App\\Models\\User', 87, 'profilepicture', 1),
(88, 'App\\Models\\User', 88, 'profilepicture', 1),
(89, 'App\\Models\\User', 89, 'profilepicture', 1),
(90, 'App\\Models\\User', 90, 'profilepicture', 1),
(91, 'App\\Models\\User', 91, 'profilepicture', 1),
(92, 'App\\Models\\User', 92, 'profilepicture', 1),
(93, 'App\\Models\\User', 93, 'profilepicture', 1),
(94, 'App\\Models\\User', 94, 'profilepicture', 1),
(95, 'App\\Models\\User', 95, 'profilepicture', 1),
(96, 'App\\Models\\User', 96, 'profilepicture', 1),
(97, 'App\\Models\\User', 97, 'profilepicture', 1),
(98, 'App\\Models\\User', 98, 'profilepicture', 1),
(99, 'App\\Models\\User', 99, 'profilepicture', 1),
(104, 'App\\Models\\User', 2, 'profilepicture', 1),
(107, 'App\\Models\\User', 105, 'profilepicture', 1),
(108, 'App\\Models\\User', 104, 'profilepicture', 1),
(109, 'App\\Models\\User', 109, 'profilepicture', 1),
(110, 'App\\Models\\Blog', 6, 'thumbnail', 1),
(111, 'App\\Models\\Blog', 8, 'thumbnail', 1),
(112, 'App\\Models\\Blog', 10, 'thumbnail', 1),
(113, 'App\\Models\\User', 1, 'profilepicture', 1),
(114, 'App\\Models\\Post', 3, 'thumbnail', 1),
(115, 'App\\Models\\User', 3, 'profilepicture', 1),
(116, 'App\\Models\\Post', 4, 'thumbnail', 1);

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
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2017_04_16_022247_entrust_setup_tables', 1),
(38, '2017_08_03_234812_create_blogs_table', 1),
(39, '2017_08_04_091048_create_themes_table', 1),
(40, '2017_08_04_134926_create_readings_table', 1),
(41, '2017_09_19_055357_create_posts_table', 1),
(42, '2017_09_19_055729_create_comments_table', 1),
(43, '2017_09_19_055921_create_likes_table', 1),
(44, '2017_10_11_101552_create_ratings_table', 1),
(45, '2017_10_12_011704_create_forum_categories_table', 1),
(46, '2017_10_12_011823_create_forums_table', 1),
(47, '2017_10_12_011835_create_topics_table', 1),
(48, '2017_10_12_011844_create_threads_table', 1),
(49, '2017_11_15_074633_create_dislikes_table', 1),
(50, '2017_11_20_163758_create_notifications_table', 1),
(51, '2017_11_21_155236_create_mediable_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('027b2e0a-9225-4ac7-a63c-a1a9eef91a6b', 'App\\Notifications\\BlogPostLikeNotification', 1, 'App\\Models\\User', '{\"post_id\":3,\"post_title\":\"Getting yourself ready to start Exercising\",\"post_author\":1,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Getting yourself ready to start Exercising\",\"link\":\"\\/blogs\\/diabetics-exercise-routines\\/posts\\/getting-yourself-ready-to-start-exercising\"}', '2018-01-19 20:23:45', '2018-01-19 20:23:06', '2018-01-19 20:23:45'),
('0592d030-25af-436e-bc49-3efaa6d86067', 'App\\Notifications\\ThreadReplyNotification', 3, 'App\\Models\\User', '{\"parent_thread_id\":3,\"child_thread_id\":4,\"threadOwner\":3,\"threadRespondant\":6,\"notification\":\"Muhammad Umair replied to your forum post\",\"link\":\"\\/forums\\/events\\/topic\\/diabudy-annual-meet?page=1#lastpost\"}', NULL, '2018-01-21 23:21:01', '2018-01-21 23:21:01'),
('3a401a1b-97df-4073-afe5-5c9950f03db7', 'App\\Notifications\\BlogPostLikeNotification', 1, 'App\\Models\\User', '{\"post_id\":3,\"post_title\":\"Getting yourself ready to start Exercising\",\"post_author\":1,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Getting yourself ready to start Exercising\",\"link\":\"\\/blogs\\/diabetics-exercise-routines\\/posts\\/getting-yourself-ready-to-start-exercising\"}', '2018-01-19 20:25:44', '2018-01-19 20:24:31', '2018-01-19 20:25:44'),
('5c937f6f-5e09-462c-bcb9-ddc876dca468', 'App\\Notifications\\BlogPostLikeNotification', 2, 'App\\Models\\User', '{\"post_id\":4,\"post_title\":\"Eating Healthy\",\"post_author\":2,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Eating Healthy\",\"link\":\"\\/blogs\\/eating-habits-and-diabetes-1\\/posts\\/eating-healthy\"}', '2018-02-06 16:40:01', '2018-01-21 23:29:21', '2018-02-06 16:40:01'),
('64169c54-61c1-433c-8582-9bb7925baf03', 'App\\Notifications\\BlogPostCommentNotification', 1, 'App\\Models\\User', '{\"post_id\":3,\"post_title\":\"Getting yourself ready to start Exercising\",\"post_author\":1,\"comment_by\":3,\"notification\":\"Usama Kamran commented on your post Getting yourself ready to start Exercising\",\"link\":\"\\/blogs\\/diabetics-exercise-routines\\/posts\\/getting-yourself-ready-to-start-exercising\"}', '2018-01-19 20:59:23', '2018-01-19 20:46:15', '2018-01-19 20:59:23'),
('658cf254-4009-4adc-a822-6dc8eff00779', 'App\\Notifications\\BlogPostCommentNotification', 1, 'App\\Models\\User', '{\"post_id\":3,\"post_title\":\"Getting yourself ready to start Exercising\",\"post_author\":1,\"comment_by\":1,\"notification\":\"Usman Akram commented on your post Getting yourself ready to start Exercising\",\"link\":\"\\/blogs\\/diabetics-exercise-routines\\/posts\\/getting-yourself-ready-to-start-exercising\"}', '2018-01-19 20:59:23', '2018-01-19 20:44:16', '2018-01-19 20:59:23'),
('834db56f-de78-4a56-9d4b-010189cfae36', 'App\\Notifications\\BlogPostLikeNotification', 2, 'App\\Models\\User', '{\"post_id\":4,\"post_title\":\"Eating Healthy\",\"post_author\":2,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Eating Healthy\",\"link\":\"\\/blogs\\/eating-habits-and-diabetes-1\\/posts\\/eating-healthy\"}', '2018-02-06 16:40:01', '2018-01-21 23:29:36', '2018-02-06 16:40:01'),
('8630b6af-72c8-4944-83e6-420d2db33b93', 'App\\Notifications\\BlogPostLikeNotification', 2, 'App\\Models\\User', '{\"post_id\":4,\"post_title\":\"Eating Healthy\",\"post_author\":2,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Eating Healthy\",\"link\":\"\\/blogs\\/eating-habits-and-diabetes-1\\/posts\\/eating-healthy\"}', NULL, '2018-02-06 16:40:06', '2018-02-06 16:40:06'),
('ce307f68-6ea9-4b2f-824a-b17c8249a968', 'App\\Notifications\\BlogPostLikeNotification', 2, 'App\\Models\\User', '{\"post_id\":4,\"post_title\":\"Eating Healthy\",\"post_author\":2,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Eating Healthy\",\"link\":\"\\/blogs\\/eating-habits-and-diabetes-1\\/posts\\/eating-healthy\"}', '2018-01-21 23:29:01', '2018-01-21 23:28:43', '2018-01-21 23:29:01'),
('d325a57c-98a1-4cea-91f0-9f1856ea7bdf', 'App\\Notifications\\BlogPostLikeNotification', 1, 'App\\Models\\User', '{\"post_id\":3,\"post_title\":\"Getting yourself ready to start Exercising\",\"post_author\":1,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Getting yourself ready to start Exercising\",\"link\":\"\\/blogs\\/diabetics-exercise-routines\\/posts\\/getting-yourself-ready-to-start-exercising\"}', '2018-01-19 20:24:21', '2018-01-19 20:23:53', '2018-01-19 20:24:21'),
('ea2898db-ff53-48d8-aab0-759aacc1cf69', 'App\\Notifications\\BlogPostLikeNotification', 1, 'App\\Models\\User', '{\"post_id\":3,\"post_title\":\"Getting yourself ready to start Exercising\",\"post_author\":1,\"liked_by\":4,\"notification\":\"Ayaz Rafiq likes your post Getting yourself ready to start Exercising\",\"link\":\"\\/blogs\\/diabetics-exercise-routines\\/posts\\/getting-yourself-ready-to-start-exercising\"}', NULL, '2018-01-20 05:39:33', '2018-01-20 05:39:33'),
('ea6617a8-cd08-4184-8124-18d07ab970f8', 'App\\Notifications\\BlogPostLikeNotification', 1, 'App\\Models\\User', '{\"post_id\":3,\"post_title\":\"Getting yourself ready to start Exercising\",\"post_author\":1,\"liked_by\":1,\"notification\":\"Usman Akram likes your post Getting yourself ready to start Exercising\",\"link\":\"\\/blogs\\/diabetics-exercise-routines\\/posts\\/getting-yourself-ready-to-start-exercising\"}', '2018-01-19 20:32:54', '2018-01-19 20:29:42', '2018-01-19 20:32:54'),
('f1dc231d-e3cd-4cfc-a1b5-6f1d24d6f3d3', 'App\\Notifications\\BlogPostLikeNotification', 2, 'App\\Models\\User', '{\"post_id\":4,\"post_title\":\"Eating Healthy\",\"post_author\":2,\"liked_by\":2,\"notification\":\"Usama Kamran likes your post Eating Healthy\",\"link\":\"\\/blogs\\/eating-habits-and-diabetes-1\\/posts\\/eating-healthy\"}', '2018-01-21 23:26:22', '2018-01-21 23:26:10', '2018-01-21 23:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'make page', 'make page', 'ability to make pages', NULL, NULL),
(2, 'make blog', 'make blog', 'ability to make blogs', NULL, NULL),
(3, 'delete user', 'delete user', 'ability to delete users', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentcount` int(11) NOT NULL,
  `likecount` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `blog_id`, `user_id`, `title`, `slug`, `abstract`, `commentcount`, `likecount`, `views`, `content`, `created_at`, `updated_at`) VALUES
(3, 8, 1, 'Getting yourself ready to start Exercising', 'getting-yourself-ready-to-start-exercising', 'Instead of simply diving into a tough exercise routine. Learn how to lean into perfection.', 2, 3, 0, '<p>If you suffer from a lower back condition&mdash;like a&nbsp;<a href=\"https://www.spine-health.com/conditions/herniated-disc/lumbar-herniated-disc\" title=\"Lumbar Herniated Disc: What You Should Know\">lumbar herniated disc</a>&nbsp;or&nbsp;<a href=\"https://www.spine-health.com/conditions/spinal-stenosis/what-spinal-stenosis\" title=\"What is Spinal Stenosis?\">spinal stenosis</a>&mdash;your doctor will likely recommend exercise as part of your treatment program.&nbsp;<a href=\"https://embed.widencdn.net/img/veritas/qij1ves3gb/576x324px/AdobeStock_74444800.jpeg?u=at8tiu&amp;use=idsla&amp;k=c\"><img alt=\"\" src=\"https://embed.widencdn.net/img/veritas/qij1ves3gb/576x324px/AdobeStock_74444800.jpeg?u=at8tiu&amp;use=idsla&amp;k=c\" style=\"height:324px; width:576px\" /></a></p>\r\n\r\n<p>But what should you do if your exercise regimen exacerbates your lower back condition? Should you work through the pain?</p>', '2018-01-19 20:21:58', '2018-01-20 05:39:38'),
(4, 10, 2, 'Eating Healthy', 'eating-healthy', 'Always eat healthy', 0, 1, 0, '<p>Eat Healthy!</p>', '2018-01-21 23:26:01', '2018-02-06 16:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `object_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `type`, `user_id`, `object_id`, `rating`, `created_at`, `updated_at`) VALUES
(2, 'blog', 2, 10, 4, '2018-01-20 13:18:57', '2018-01-20 13:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `readings`
--

CREATE TABLE `readings` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upperbloodpressure` int(11) DEFAULT NULL,
  `lowerbloodpressure` int(11) DEFAULT NULL,
  `medicinename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dose` int(11) DEFAULT NULL,
  `testtime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodglucose` int(11) DEFAULT NULL,
  `a1c` double(8,2) DEFAULT NULL,
  `exercisetype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exercisetime` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `readings`
--

INSERT INTO `readings` (`id`, `userid`, `type`, `upperbloodpressure`, `lowerbloodpressure`, `medicinename`, `dose`, `testtime`, `bloodglucose`, `a1c`, `exercisetype`, `exercisetime`, `created_at`, `updated_at`) VALUES
(32, 7, 'medication', NULL, NULL, NULL, 123, NULL, NULL, NULL, NULL, NULL, '2018-01-22 09:55:53', '2018-01-22 09:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', 'super power in all realms', NULL, NULL),
(2, 'patient', 'Patient', 'This user is a patient', NULL, NULL),
(3, 'consultant', 'Consultant', 'This user is a consultant', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` int(10) UNSIGNED NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upvotes` int(11) NOT NULL DEFAULT '0',
  `downvotes` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `topic_id`, `user_id`, `parent_id`, `reply`, `upvotes`, `downvotes`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, '<p>Wouldn&#39;t it be awesome if we could have some flying horses and some rainbows? Imagine what that could do for DiaBudy!</p>', 4, 1, '2018-01-19 20:34:20', '2018-01-20 05:43:02'),
(2, 2, 1, NULL, '<p>We invite you all to Comsats University on 22nd January, 2018! We will be conducting seminars on diabetes and <strong>FREE REFRESHMENTS</strong>!</p>', 1, 0, '2018-01-19 20:37:46', '2018-01-19 20:40:26'),
(3, 2, 3, NULL, '<p>WOW!! That is so amazing!<br />\r\nI will try my best to spread the message and be there myself as well!</p>', 1, 0, '2018-01-19 20:40:05', '2018-01-21 23:19:56'),
(4, 2, 6, 3, '<p>yar presentation miss krwa k ider jain gy... free refreshment ha :D&nbsp;</p>', 0, 0, '2018-01-21 23:21:01', '2018-01-21 23:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(10) UNSIGNED NOT NULL,
  `forum_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `replies` int(11) NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `forum_id`, `user_id`, `name`, `slug`, `replies`, `views`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Feature Request: I would love to have more rainbows', 'feature-request-i-would-love-to-have-more-rainbows', 0, 0, '2018-01-19 20:34:20', '2018-01-19 20:34:20'),
(2, 10, 1, 'DiaBudy Annual Meet', 'diabudy-annual-meet', 0, 0, '2018-01-19 20:37:46', '2018-01-19 20:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebookID` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `facebookID`, `username`, `slug`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0', 'usmanakram', 'usmanakram', 'Usman Akram', 'usman.akram@gmail.com', '$2y$10$KxxN10ui.PHBOzjWzQARWuVnjPtmdPWD1jnAXw6zEK/A5tMF1adVO', NULL, '2018-01-19 19:53:26', '2018-01-19 19:53:26'),
(2, '0', 'ukabthebest', 'ukabthebest', 'Usama Kamran', 'ukabthebest@gmail.com', '$2y$10$3uSvH6nBMbBKW2pzoOFAROM/z1qUfDtOWSpf7iYcNcqLbhS7NJI4i', '4cBrBf6Fi9QYDZ6VpIA00BCTm60BmXIXje60GHsajiLW6Jd8Px6WI5fNn04j', '2018-01-19 20:06:59', '2018-01-19 20:06:59'),
(3, '1570882552933123', 'UsamaKamran', 'usamakamran', 'Usama Kamran', 'ukabthebest@hotmail.com', '$2y$10$vHP/fhIL4Z945Gn1gzvmZOEydN4iVZb2j2FCdEw71iQzJijkKrq2G', NULL, '2018-01-19 20:39:10', '2018-01-19 20:39:10'),
(4, '1550808638341681', 'AyazRafiq', 'ayazrafiq', 'Ayaz Rafiq', '1550808638341681', '$2y$10$mT9XduIXAjohmTxlBOXOCeiUVTgL/8OXKRSR9R4mARWRiJZmfh3ue', '8MaxIVsL529Mx0WmH5XGTDHzSHy8R9lxSVDtFNpNpUPLHpR3p3bGdQrfvxXu', '2018-01-20 05:38:36', '2018-01-20 05:38:36'),
(5, '1608616165893405', 'MuhammadHumzaILyas', 'muhammadhumzailyas', 'Muhammad Humza ILyas', 'humxadhillon@gmail.com', '$2y$10$iFK4L1yECbY70AKsYVYLR./nrG7RLISpGoBjNMa0YZS6IcPu21uny', NULL, '2018-01-21 17:27:52', '2018-01-21 17:27:52'),
(6, '1986873654866938', 'MuhammadUmair', 'muhammadumair', 'Muhammad Umair', 'ddp-fa13-bcs-104@ciitlahore.edu.pk', '$2y$10$jgyLXJ3WQh8Z2ZPTV6y1aulvwlyzdkwER96txx0Mm5T9JLNv7IpMK', NULL, '2018-01-21 22:12:41', '2018-01-21 22:12:41'),
(7, '0', 'Aftab', 'aftab', 'Dr Aftab', 'aftab@a.com', '$2y$10$mjoStf8cDPcis5WhdmlMGeAm3Lp5lA0sXYx3o6msDFnUKVK93EoLm', NULL, '2018-01-22 09:43:20', '2018-01-22 09:43:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dislikes_user_id_foreign` (`user_id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forums_parent_id_foreign` (`parent_id`),
  ADD KEY `forums_forum_category_id_foreign` (`forum_category_id`);

--
-- Indexes for table `forum_categories`
--
ALTER TABLE `forum_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_disk_directory_filename_extension_unique` (`disk`,`directory`,`filename`,`extension`),
  ADD KEY `media_disk_directory_index` (`disk`,`directory`),
  ADD KEY `media_aggregate_type_index` (`aggregate_type`);

--
-- Indexes for table `mediables`
--
ALTER TABLE `mediables`
  ADD PRIMARY KEY (`media_id`,`mediable_type`,`mediable_id`,`tag`),
  ADD KEY `mediables_mediable_id_mediable_type_index` (`mediable_id`,`mediable_type`),
  ADD KEY `mediables_tag_index` (`tag`),
  ADD KEY `mediables_order_index` (`order`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_blog_id_foreign` (`blog_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `readings`
--
ALTER TABLE `readings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `readings_userid_foreign` (`userid`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `threads_topic_id_foreign` (`topic_id`),
  ADD KEY `threads_user_id_foreign` (`user_id`),
  ADD KEY `threads_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_forum_id_foreign` (`forum_id`),
  ADD KEY `topics_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `forum_categories`
--
ALTER TABLE `forum_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `readings`
--
ALTER TABLE `readings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`),
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD CONSTRAINT `dislikes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `forums`
--
ALTER TABLE `forums`
  ADD CONSTRAINT `forums_forum_category_id_foreign` FOREIGN KEY (`forum_category_id`) REFERENCES `forum_categories` (`id`),
  ADD CONSTRAINT `forums_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `forums` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mediables`
--
ALTER TABLE `mediables`
  ADD CONSTRAINT `mediables_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `readings`
--
ALTER TABLE `readings`
  ADD CONSTRAINT `readings_userid_foreign` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `threads`
--
ALTER TABLE `threads`
  ADD CONSTRAINT `threads_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `threads` (`id`),
  ADD CONSTRAINT `threads_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`),
  ADD CONSTRAINT `threads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_forum_id_foreign` FOREIGN KEY (`forum_id`) REFERENCES `forums` (`id`),
  ADD CONSTRAINT `topics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
