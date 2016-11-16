-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-11-16 09:52:07
-- 伺服器版本: 10.1.9-MariaDB
-- PHP 版本： 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `laravel_admin`
--

-- --------------------------------------------------------

--
-- 資料表結構 `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(10) NOT NULL,
  `typeid` int(4) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `filedata` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `cn_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cn_content` text COLLATE utf8_unicode_ci,
  `eng_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

-- --------------------------------------------------------

--
-- 資料表結構 `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'W',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Laravel', 'laravel@lara.com', '$2y$10$AtcALJffP8tVobVlennR1.Xb0Lkl.k/FmH3/E/3a8YoLoLbz1cCy6', 'W', '0mkkj6uE1Ftw2cgGoiiw7k0ryfP18IMmUdrgCl16fWYpbTmV0TbDAbn11UYT', NULL, '2016-10-29 05:24:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `admins_password_resets`
--

CREATE TABLE `admins_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `picture` text COLLATE utf8_unicode_ci,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

--
-- 資料表的匯出資料 `banner`
--

INSERT INTO `banner` (`id`, `picture`, `title`, `content`, `status`, `rank`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, '19859.jpg', '測試', '測試', 1, 1, '2016-11-03 23:50:28', NULL, '2016-11-03 23:50:28');

-- --------------------------------------------------------

--
-- 資料表結構 `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `typeid` int(4) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `filedata` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `cn_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cn_content` text COLLATE utf8_unicode_ci,
  `eng_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

-- --------------------------------------------------------

--
-- 資料表結構 `faq`
--

CREATE TABLE `faq` (
  `id` int(10) NOT NULL,
  `typeid` int(4) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `filedata` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `cn_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cn_content` text COLLATE utf8_unicode_ci,
  `eng_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_10_18_131257_create_admins_table', 1),
(4, '2016_10_18_131630_create_admins_passowrd_resets_table', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `typeid` int(4) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `filedata` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `cn_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cn_content` text COLLATE utf8_unicode_ci,
  `eng_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`id`, `typeid`, `title`, `filedata`, `content`, `cn_title`, `cn_content`, `eng_title`, `eng_content`, `status`, `rank`, `created_at`, `updated_at`, `deleted_at`, `keywords`, `description`) VALUES
(2, NULL, '最新消息', NULL, '<p>最新消息</p>\r\n', NULL, NULL, NULL, NULL, 0, 1, '2016-11-02 06:20:18', '2016-11-02 06:20:18', NULL, '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `service`
--

CREATE TABLE `service` (
  `id` int(10) NOT NULL,
  `typeid` int(4) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `filedata` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `cn_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cn_content` text COLLATE utf8_unicode_ci,
  `eng_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

-- --------------------------------------------------------

--
-- 資料表結構 `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `picture` text COLLATE utf8_unicode_ci,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

-- --------------------------------------------------------

--
-- 資料表結構 `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) NOT NULL,
  `typeid` int(4) DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '分類編號',
  `filedata` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci,
  `cn_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cn_content` text COLLATE utf8_unicode_ci,
  `eng_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eng_content` text COLLATE utf8_unicode_ci,
  `status` int(4) NOT NULL DEFAULT '0',
  `rank` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `keywords` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='選單類別';

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Laravel', 'laravel@lara.com', '$2y$10$i3YFw9m82NLzNe/50A8yZeF7.jS4wn4oiAlE9sVFp3kWWi8VCz0Rm', '3o231mDie8Zab2QHm2pZDUNaOlApxv1nJm5JkazF6tVMFj58BGuCeegUs2kN', NULL, '2016-10-29 05:39:01');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- 資料表索引 `admins_password_resets`
--
ALTER TABLE `admins_password_resets`
  ADD KEY `admins_password_resets_email_index` (`email`),
  ADD KEY `admins_password_resets_token_index` (`token`);

--
-- 資料表索引 `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- 資料表索引 `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用資料表 AUTO_INCREMENT `service`
--
ALTER TABLE `service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
