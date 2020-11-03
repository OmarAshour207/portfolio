-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 01:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `ar_description`, `en_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه وصف عننا بلعربيه', 'About description in english About description in english About description in english About description in english About description in english About description in english', 'FSfNN3SMwrsuGbIIoi086fIEehwedIpP66AR7hgJ.png', '2020-08-10 15:21:56', '2020-11-01 08:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `ar_author`, `en_author`, `ar_title`, `en_title`, `ar_content`, `en_content`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'أسم المؤلف بالعربيه', 'Natus modi velit ape', 'عنوان المقال بالعربيه', 'In do enim voluptate', '<p>محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;محتوي المقال بالعربيه&nbsp;</p>', '<p>Dolorem optio, id, v.</p>', 'Accusamus commodo un', 'Neque tempor aut cup', 'j4PMmXvaiBqFySH3i1xXoBqWTzudP96dDTAkZEml.jpeg', '2020-08-12 16:40:39', '2020-11-01 09:39:59'),
(2, 'أسم المؤلف بالعربيه', 'Natus modi velit ape', 'عنوان المقال بالعربيه', 'In do enim voluptate', '<p>محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه</p>', '<p>Dolorem optio, id, v.</p>', 'Accusamus commodo un', 'Neque tempor aut cup', 'j4PMmXvaiBqFySH3i1xXoBqWTzudP96dDTAkZEml.jpeg', '2020-08-12 16:40:39', '2020-08-12 16:40:39'),
(3, 'أسم المؤلف بالعربيه', 'Natus modi velit ape', 'عنوان المقال بالعربيه', 'In do enim voluptate', '<p>محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه&nbsp;محتوي المقال بالانجليزيه</p>', '<p>Dolorem optio, id, v.</p>', 'Accusamus commodo un', 'Neque tempor aut cup', 'j4PMmXvaiBqFySH3i1xXoBqWTzudP96dDTAkZEml.jpeg', '2020-08-12 16:40:39', '2020-08-12 16:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'omar', '01117541513', 'omar@gmail.com', 'how are you ?', '2020-09-06 22:48:21', '2020-09-06 22:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `ar_description`, `en_description`, `created_at`, `updated_at`) VALUES
(1, '<p>Beatae tempore, amet.</p>', '<p>Consequuntur quia co.</p>', '2020-08-12 15:39:09', '2020-08-12 15:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_notifications`
--

CREATE TABLE `contact_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_notifications`
--

INSERT INTO `contact_notifications` (`id`, `name`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'omar', 'Sent Message', 1, '2020-09-06 22:48:21', '2020-09-06 22:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'hTzBLc8cwL8i65y5rJBWjLI7uW9NmhtJBDwXizNR.png', '2020-08-11 13:22:32', '2020-08-11 13:22:32');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_27_122405_create_sliders_table', 1),
(5, '2020_07_27_150345_create_services_table', 1),
(6, '2020_07_28_111253_create_abouts_table', 1),
(7, '2020_07_28_111604_create_testimonials_table', 1),
(8, '2020_07_28_112621_create_contacts_table', 1),
(9, '2020_07_28_151051_create_blogs_table', 1),
(10, '2020_07_28_175733_create_team_members_table', 1),
(11, '2020_07_29_140143_create_projects_table', 1),
(12, '2020_08_04_091617_create_website_settings_table', 1),
(13, '2020_08_04_114528_create_logos_table', 1),
(14, '2020_08_10_124838_create_visitors_table', 1),
(17, '2020_08_12_113818_create_themes_table', 2),
(18, '2020_08_12_172309_create_contactuses_table', 2),
(19, '2020_09_07_002025_create_contact_notifications_table', 3);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'لقب المشروع بالعربيه', 'Dolore harum pariatu', 'وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه', 'english description english description english description english description english description english description english description', 'Exercitationem persp', 'Aut dolorem nulla et', 'U9ax8BTzPoTDF6XcDVcm9CQhrlIehNu7q4ZGbM4G.jpeg', '2020-08-12 15:55:55', '2020-11-01 08:37:50'),
(2, 'لقب المشروع بالعربيه', 'Dolore harum pariatu', 'وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه', 'Reprehenderit simil', 'Exercitationem persp', 'Aut dolorem nulla et', 'U9ax8BTzPoTDF6XcDVcm9CQhrlIehNu7q4ZGbM4G.jpeg', '2020-08-12 15:55:55', '2020-08-12 15:55:55'),
(3, 'لقب المشروع بالعربيه', 'Dolore harum pariatu', 'وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه وصف المشروع بالعربيه', 'Reprehenderit simil', 'Exercitationem persp', 'Aut dolorem nulla et', 'U9ax8BTzPoTDF6XcDVcm9CQhrlIehNu7q4ZGbM4G.jpeg', '2020-08-12 15:55:55', '2020-08-12 15:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'لقب الخدمه بالعربيه', 'Delectus veniam vo', 'وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه', 'Accusamus rem minus', 'ميتا تاج بالعربيه', 'Nostrum tempor sunt', 'ASYVRvCSVklxP1u3Jt4xfin88wRwDlpIeJlFkzTZ.jpeg', '2020-08-12 14:30:04', '2020-11-01 08:20:00'),
(2, 'لقب الخدمه بالعربيه', 'Delectus veniam vo', 'وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه', 'Accusamus rem minus', 'Exercitation delenit', 'Nostrum tempor sunt', 'ASYVRvCSVklxP1u3Jt4xfin88wRwDlpIeJlFkzTZ.jpeg', '2020-08-12 14:30:04', '2020-08-12 14:30:04'),
(3, 'لقب الخدمه بالعربيه', 'Delectus veniam vo', 'وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه', 'Accusamus rem minus', 'Exercitation delenit', 'Nostrum tempor sunt', 'ASYVRvCSVklxP1u3Jt4xfin88wRwDlpIeJlFkzTZ.jpeg', '2020-08-12 14:30:04', '2020-08-12 14:30:04'),
(4, 'لقب الخدمه بالعربيه', 'Delectus veniam vo', 'وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه', 'Accusamus rem minus', 'Exercitation delenit', 'Nostrum tempor sunt', 'ASYVRvCSVklxP1u3Jt4xfin88wRwDlpIeJlFkzTZ.jpeg', '2020-08-12 14:30:04', '2020-08-12 14:30:04'),
(5, 'لقب الخدمه بالعربيه', 'Delectus veniam vo', 'وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه', 'Accusamus rem minus', 'Exercitation delenit', 'Nostrum tempor sunt', 'ASYVRvCSVklxP1u3Jt4xfin88wRwDlpIeJlFkzTZ.jpeg', '2020-08-12 14:30:04', '2020-08-12 14:30:04'),
(6, 'لقب الخدمه بالعربيه', 'Delectus veniam vo', 'وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه وصف الخدمه باللغه العربيه', 'Accusamus rem minus', 'Exercitation delenit', 'Nostrum tempor sunt', 'ASYVRvCSVklxP1u3Jt4xfin88wRwDlpIeJlFkzTZ.jpeg', '2020-08-12 14:30:04', '2020-08-12 14:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `ar_title`, `en_title`, `ar_description`, `en_description`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p>لقب بالعرربيه للسلايدر</p>', '<p>Perspiciatis, volupt.</p>', '<h3>وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;</h3>', '<h3>Qui voluptas at enim.</h3>', 'mKXWVCRH70LvvkzZlcYvhOQ0jLeS5Lf7v0QNN5FH.jpeg', '2020-08-11 15:26:04', '2020-11-01 08:17:56'),
(2, '<p>لقب بالعرربيه للسلايدر</p>', '<p>Natus qui qui offici.</p>', '<h3>وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;</h3>', '<p>Quia saepe saepe con.</p>', 'kd4N2KusE1Y3RZ0uJP75vmpid83jS6aDjG1bwysB.jpeg', '2020-08-11 15:26:23', '2020-08-26 10:44:44'),
(3, '<p>لقب بالعرربيه للسلايدر</p>', '<p>Maxime voluptate ips.</p>', '<h3>وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;وصف عربي&nbsp;</h3>', '<p>Officia in est reici.</p>', 'TJRUD1dBGapvJgUCbj16HCGOXxc8raMiUp4EHpfA.jpeg', '2020-08-11 15:26:41', '2020-08-26 10:44:57');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`id`, `ar_name`, `en_name`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'أسم الفريق بالعربيه', 'Irene Brewer', 'لقب فريق العمل بالعربيه', 'Ut qui corrupti qua', 'تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه', 'Porro delectus tota', 'Qui fuga Reprehende', 'Laboris eu tempora m', 'VQdun4lLYj3aTypkTW27tQjdMMWhFTeRQ7jyigrr.jpeg', '2020-08-12 16:40:07', '2020-11-01 09:07:37'),
(2, 'أسم الفريق بالعربيه', 'Irene Brewer', 'لقب فريق العمل بالعربيه', 'Ut qui corrupti qua', 'تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه تقيييم العميل بالعربيه', 'Porro delectus tota', 'Qui fuga Reprehende', 'Laboris eu tempora m', 'VQdun4lLYj3aTypkTW27tQjdMMWhFTeRQ7jyigrr.jpeg', '2020-08-12 16:40:07', '2020-11-01 09:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `ar_name`, `en_name`, `ar_title`, `en_title`, `ar_description`, `en_description`, `ar_meta_tag`, `en_meta_tag`, `image`, `created_at`, `updated_at`) VALUES
(1, 'اسم المراجعه بالعربيه', 'Vivian Hamilton', 'لقب المراجعه بالعربيه', 'Fugiat aut aut odit', 'وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه', 'consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi. Totam mollitia incidunt vero cupiditate obcaecati', 'Ut aut voluptatem q', 'Ut provident ullam', 'xGfEEuIm1Wvj2ZmIeyyrZOTnrvkz3Idq8XwGNbrQ.jpeg', '2020-08-12 16:41:12', '2020-11-01 08:55:10'),
(2, 'اسم المراجعه بالعربيه', 'Vivian Hamilton', 'لقب المراجعه بالعربيه', 'Fugiat aut aut odit', 'وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه', 'consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi. Totam mollitia incidunt vero cupiditate obcaecati', 'Ut aut voluptatem q', 'Ut provident ullam', 'xGfEEuIm1Wvj2ZmIeyyrZOTnrvkz3Idq8XwGNbrQ.jpeg', '2020-08-12 16:41:12', '2020-08-12 16:41:12'),
(3, 'اسم المراجعه بالعربيه', 'Vivian Hamilton', 'لقب المراجعه بالعربيه', 'Fugiat aut aut odit', 'وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه وصف المراجعه بالعربيه', 'consectetur adipisicing elit. Totam mollitia incidunt vero cupiditate obcaecati iusto tempora unde! Numquam officiis, quae adipisci quam laudantium nulla modi. adipisci quam laudantium nulla modi. Totam mollitia incidunt vero cupiditate obcaecati', 'Ut aut voluptatem q', 'Ut provident ullam', 'xGfEEuIm1Wvj2ZmIeyyrZOTnrvkz3Idq8XwGNbrQ.jpeg', '2020-08-12 16:41:12', '2020-08-12 16:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `ar_title`, `en_title`, `status`, `created_at`, `updated_at`) VALUES
(5, 'الأول', 'first', 0, '2020-08-26 09:20:19', '2020-11-01 09:42:51'),
(6, 'الثاني', 'second', 0, '2020-08-26 09:20:20', '2020-11-01 09:52:34'),
(7, 'الثالث', 'third', 0, '2020-08-26 09:20:20', '2020-11-01 10:05:47'),
(8, 'الرابع', 'fourth', 0, '2020-08-26 09:20:20', '2020-11-01 10:07:45'),
(9, 'الخامس', 'fifth', 0, '2020-08-26 09:20:20', '2020-11-01 10:19:55'),
(10, 'السادس', 'sixth', 0, '2020-08-26 09:20:20', '2020-11-01 10:26:26'),
(11, 'السابع', 'seventh', 0, '2020-08-26 09:20:20', '2020-11-01 10:33:26'),
(12, 'الثامن', 'eighth', 1, '2020-08-26 09:20:20', '2020-11-01 10:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Omar Abdalaziz', 'admin@app.com', NULL, '$2y$10$1.bKA/0RCVLi53l4nqQweu.t4NxgRYtWjdXpyOp.JGGmpBl7Pngpq', 'DAZWZfckgxdaaJTKDARNmEFy0ZgICxynbf9Ahvgs.png', NULL, '2020-08-10 14:33:58', '2020-08-10 15:20:08'),
(4, 'omar', 'omar@gmail.com', NULL, '$2y$10$74SjSZn34ZiEDraA.x7d1uivr2RU.unJA0jFyirgGJuWTXs3jTgV2', NULL, NULL, '2020-08-10 14:49:22', '2020-08-10 14:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'home',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `page`, `created_at`, `updated_at`) VALUES
(1504, '127.0.0.1', 'home', '2020-08-12 14:10:39', '2020-08-13 14:10:39'),
(1511, '127.0.0.1', 'about', '2020-08-14 18:47:13', '2020-08-14 18:47:13'),
(1512, '127.0.0.1', 'home', '2020-08-12 21:13:24', '2020-08-14 18:47:22'),
(1518, '127.0.0.1', 'blogs', '2020-08-14 19:16:15', '2020-08-14 19:16:15'),
(1519, '127.0.0.1', 'projects', '2020-08-14 19:16:19', '2020-08-14 19:16:19'),
(1520, '127.0.0.1', 'services', '2020-08-14 19:16:21', '2020-08-14 19:16:21'),
(1521, '127.0.0.1', 'contact-us', '2020-08-13 19:16:54', '2020-08-14 19:16:54'),
(1522, '127.0.0.1', 'contact-us', '2020-08-14 19:18:03', '2020-08-14 19:18:03'),
(1523, '127.0.0.1', 'home', '2020-08-16 16:19:46', '2020-08-16 16:19:46'),
(1524, '127.0.0.1', 'home', '2020-08-26 09:05:14', '2020-08-26 09:05:14'),
(1525, '127.0.0.1', 'about', '2020-08-26 09:07:18', '2020-08-26 09:07:18'),
(1526, '127.0.0.1', 'services', '2020-08-26 13:26:48', '2020-08-26 13:26:48'),
(1527, '127.0.0.1', 'projects', '2020-08-26 14:10:14', '2020-08-26 14:10:14'),
(1528, '127.0.0.1', 'blogs', '2020-08-26 14:25:01', '2020-08-26 14:25:01'),
(1529, '127.0.0.1', 'contact-us', '2020-08-26 15:04:11', '2020-08-26 15:04:11'),
(1530, '127.0.0.1', 'home', '2020-08-27 01:22:17', '2020-08-27 01:22:17'),
(1531, '127.0.0.1', 'home', '2020-09-03 00:53:22', '2020-09-03 00:53:22'),
(1532, '127.0.0.1', 'home', '2020-09-06 22:24:22', '2020-09-06 22:24:22'),
(1533, '127.0.0.1', 'contact-us', '2020-09-06 22:24:44', '2020-09-06 22:24:44'),
(1534, '127.0.0.1', 'home', '2020-11-01 08:10:04', '2020-11-01 08:10:04'),
(1535, '127.0.0.1', 'services', '2020-11-01 08:36:30', '2020-11-01 08:36:30'),
(1536, '127.0.0.1', 'about', '2020-11-01 08:43:27', '2020-11-01 08:43:27'),
(1537, '127.0.0.1', 'projects', '2020-11-01 09:38:16', '2020-11-01 09:38:16'),
(1538, '127.0.0.1', 'blogs', '2020-11-01 09:38:25', '2020-11-01 09:38:25'),
(1539, '127.0.0.1', 'contact-us', '2020-11-01 09:41:17', '2020-11-01 09:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_filter` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `page_filter`, `color`, `created_at`, `updated_at`) VALUES
(1, '\"a:8:{i:0;s:5:\\\"about\\\";i:1;s:12:\\\"our_projects\\\";i:2;s:8:\\\"contacts\\\";i:3;s:12:\\\"our_services\\\";i:4;s:4:\\\"stat\\\";i:5;s:12:\\\"team_members\\\";i:6;s:12:\\\"testimonials\\\";i:7;s:11:\\\"latest_blog\\\";}\"', 1, '2020-08-10 14:33:58', '2020-08-10 14:33:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_notifications`
--
ALTER TABLE `contact_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_notifications`
--
ALTER TABLE `contact_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1540;

--
-- AUTO_INCREMENT for table `website_settings`
--
ALTER TABLE `website_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
