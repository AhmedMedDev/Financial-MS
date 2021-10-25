-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 06:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harvest_financial`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `absences`
-- (See below for the actual view)
--
CREATE TABLE `absences` (
`employee_id` bigint(20) unsigned
,`avatar` varchar(150)
,`name` varchar(50)
,`position` varchar(50)
,`day_price` int(11)
,`salary` float
,`date` date
,`month` int(11)
,`time` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `absences_deductions`
--

CREATE TABLE `absences_deductions` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `is_deduction` tinyint(1) NOT NULL DEFAULT 1,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_lists`
--

CREATE TABLE `attendance_lists` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `is_attende` tinyint(1) NOT NULL,
  `delay_min` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `month` int(11) GENERATED ALWAYS AS (month(`date`)) VIRTUAL,
  `time` varchar(50) GENERATED ALWAYS AS (cast(`date` as time)) VIRTUAL,
  `day` int(11) GENERATED ALWAYS AS (dayofmonth(`date`)) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `child_image` varchar(150) NOT NULL DEFAULT 'child_image_defualt.png',
  `parent` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `notes` varchar(250) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `num_of_bro` int(11) NOT NULL,
  `rank_of_bro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `child_name`, `child_image`, `parent`, `phone`, `date`, `notes`, `date_of_birth`, `gender`, `nationality`, `religion`, `num_of_bro`, `rank_of_bro`) VALUES
(21, 'شش', 'child_image_defualt.png', 'ششش', '111', '2021-10-23 00:00:00', NULL, '2021-10-23', 'انثى', 'ششش', 'مسلم', 2, 2),
(22, 'ششش', 'child_image_defualt.png', 'ششش', '1111', '2021-10-23 00:00:00', NULL, '2021-10-23', 'ذكر', 'شش', 'مسلم', 2, 2),
(23, 'شش', 'child_image_defualt.png', 'شش', '11', '2021-10-23 00:00:00', NULL, '2021-10-23', 'ذكر', 'شش', 'مسلم', 2, 2),
(24, 'aa', 'child_image_defualt.png', 'aaa', '111', '2021-10-23 00:00:00', NULL, '2021-10-23', 'ذكر', 'qqq', 'مسلم', 1, 1),
(25, 'aa', 'child_image_defualt.png', 'aa', '11', '2021-10-23 00:00:00', NULL, '2021-10-23', 'ذكر', 'qq', 'مسلم', 1, 1),
(26, 'aa', 'child_image_defualt.png', 'aa', '11', '2021-10-23 00:00:00', NULL, '2021-10-23', 'ذكر', 'aa', 'مسلم', 2, 2),
(27, 'aaaaaaaaaaaaaa', 'child_image_defualt.png', 'aa', '11', '2021-10-23 00:00:00', NULL, '2021-10-23', 'ذكر', 'aa', 'مسلم', 1, 1),
(28, 'aa', 'child_image_defualt.png', 'aa', '11', '2021-10-24 00:00:00', NULL, '2021-10-24', 'ذكر', 'aa', 'مسلم', 1, 1),
(29, 'aaa', 'child_image_defualt.png', 'aaaa', '111', '2021-02-25 00:00:00', NULL, '2021-10-25', 'ذكر', 'aaa', 'مسلم', 11, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `delaies`
-- (See below for the actual view)
--
CREATE TABLE `delaies` (
`employee_id` bigint(20) unsigned
,`avatar` varchar(150)
,`name` varchar(50)
,`day_price` int(11)
,`total_delay` decimal(32,0)
,`month` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `delay_deductions`
--

CREATE TABLE `delay_deductions` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `is_deduction` tinyint(1) NOT NULL DEFAULT 1,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `salary` float NOT NULL,
  `avatar` varchar(150) NOT NULL DEFAULT '''default.png''',
  `start_date` varchar(30) DEFAULT NULL,
  `day_price` int(11) GENERATED ALWAYS AS (`salary` / 26) VIRTUAL,
  `date_of_birth` date NOT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `qualification`, `phone`, `salary`, `avatar`, `start_date`, `date_of_birth`, `email`) VALUES
(72, 'تويا حسن', 'اخصائى', 'تربية عين شمس', '0122353648', 3400, '\'default.png\'', '2021-10-23', '2000-10-10', ''),
(74, 'محمد حسن', 'اخصائى ضحك', 'هندسة', '01552290548', 5000, '\'default.png\'', '2021-10-23', '2001-09-20', NULL),
(75, 'Baxter Logan', 'Enim veniam fuga P', 'Beatae eligendi even', '+1 (485) 764-7872', 7600, '\'default.png\'', '2020-12-12', '2020-12-12', ''),
(76, 'aa', 'aa', 'qqqqq', '11', 11, '\'default.png\'', '2021-10-25', '2021-10-25', NULL);

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
-- Table structure for table `financial_operations`
--

CREATE TABLE `financial_operations` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `client` varchar(150) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1:import, 0:export',
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `month` int(11) GENERATED ALWAYS AS (month(`date`)) VIRTUAL,
  `receipt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `financial_operations`
--

INSERT INTO `financial_operations` (`id`, `amount`, `client`, `reason`, `status`, `date`, `receipt`) VALUES
(99, 111, 'aaa', 'aaaa', 1, '2021-10-25 03:03:02', '1111'),
(100, 111, 'Baxter Logan', 'aaa', 0, '2021-10-25 03:06:17', '111'),
(101, 11, 'Baxter Logan', 'aa', 0, '2021-08-25 00:00:00', '11');

-- --------------------------------------------------------

--
-- Table structure for table `individual_sessions`
--

CREATE TABLE `individual_sessions` (
  `id` int(11) NOT NULL,
  `children_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `remaining` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `month` int(11) GENERATED ALWAYS AS (month(`date`)) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `individual_sessions`
--

INSERT INTO `individual_sessions` (`id`, `children_id`, `employee_id`, `amount`, `remaining`, `date`) VALUES
(12, 29, 74, 111, 111, '2021-10-25 01:24:50'),
(13, 27, 75, 11, 11, '2021-10-25 01:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Stand-in structure for view `salaries`
-- (See below for the actual view)
--
CREATE TABLE `salaries` (
`employee_id` bigint(20) unsigned
,`avatar` varchar(150)
,`name` varchar(50)
,`position` varchar(50)
,`main_salary` float
,`total_extra` double
,`total_deduction` double
);

-- --------------------------------------------------------

--
-- Table structure for table `salaries_received`
--

CREATE TABLE `salaries_received` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `is_received` tinyint(1) NOT NULL DEFAULT 1,
  `month` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salary_changes`
--

CREATE TABLE `salary_changes` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `reason` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `month` int(11) GENERATED ALWAYS AS (month(`date`)) VIRTUAL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary_changes`
--

INSERT INTO `salary_changes` (`id`, `employee_id`, `amount`, `reason`, `date`, `status`) VALUES
(56, 74, 300, 'aaa', '2021-10-24 16:22:20', 1),
(57, 74, 211, 'aaa', '2021-10-24 16:34:25', 1),
(58, 72, 4000, 'aaaa', '2021-09-24 22:00:00', 1),
(59, 74, -111, 'aaa', '2021-10-25 00:50:11', 0),
(61, 75, -11, 'aa', '2021-01-24 22:00:00', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `salary_changes_emp`
-- (See below for the actual view)
--
CREATE TABLE `salary_changes_emp` (
`change_id` int(11)
,`employee_id` int(11)
,`name` varchar(50)
,`avatar` varchar(150)
,`amount` float
,`reason` varchar(150)
,`date` timestamp
,`month` int(11)
,`status` tinyint(1)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sessions`
-- (See below for the actual view)
--
CREATE TABLE `sessions` (
`session_id` int(11)
,`amount` int(11)
,`remaining` int(11)
,`date` timestamp
,`month` int(11)
,`children_id` int(11)
,`child_name` varchar(100)
,`employee_id` int(11)
,`emp_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_changes`
-- (See below for the actual view)
--
CREATE TABLE `total_changes` (
`employee_id` int(11)
,`total_change` double
,`month` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_delaies`
-- (See below for the actual view)
--
CREATE TABLE `total_delaies` (
`employee_id` int(11)
,`total_delay` decimal(32,0)
,`month` int(11)
,`day_price` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure for view `absences`
--
DROP TABLE IF EXISTS `absences`;

CREATE VIEW `absences`  AS  select `employees`.`id` AS `employee_id`,`employees`.`avatar` AS `avatar`,`employees`.`name` AS `name`,`employees`.`position` AS `position`,`employees`.`day_price` AS `day_price`,`employees`.`salary` AS `salary`,cast(`attendance_lists`.`date` as date) AS `date`,`attendance_lists`.`month` AS `month`,`attendance_lists`.`time` AS `time` from (`employees` join `attendance_lists` on(`employees`.`id` = `attendance_lists`.`employee_id`)) where `attendance_lists`.`is_attende` = 0 and `attendance_lists`.`month` = month(curdate()) and !(`attendance_lists`.`employee_id` in (select `absences_deductions`.`employee_id` from `absences_deductions` where `absences_deductions`.`date` = cast(`attendance_lists`.`date` as date))) ;

-- --------------------------------------------------------

--
-- Structure for view `delaies`
--
DROP TABLE IF EXISTS `delaies`;

CREATE VIEW `delaies`  AS  select `employees`.`id` AS `employee_id`,`employees`.`avatar` AS `avatar`,`employees`.`name` AS `name`,`employees`.`day_price` AS `day_price`,`total_delaies`.`total_delay` AS `total_delay`,`total_delaies`.`month` AS `month` from (`employees` join `total_delaies` on(`employees`.`id` = `total_delaies`.`employee_id`)) where `total_delaies`.`total_delay` <> 0 and !(`employees`.`id` in (select `delay_deductions`.`employee_id` from `delay_deductions` where `delay_deductions`.`month` = (select month(curdate())))) ;

-- --------------------------------------------------------

--
-- Structure for view `salaries`
--
DROP TABLE IF EXISTS `salaries`;

CREATE VIEW `salaries`  AS  select `employees`.`id` AS `employee_id`,`employees`.`avatar` AS `avatar`,`employees`.`name` AS `name`,`employees`.`position` AS `position`,`employees`.`salary` AS `main_salary`,(select sum(`salary_changes`.`amount`) from `salary_changes` where `salary_changes`.`employee_id` = `employees`.`id` and `salary_changes`.`status` = 1) AS `total_extra`,(select sum(`salary_changes`.`amount`) from `salary_changes` where `salary_changes`.`employee_id` = `employees`.`id` and `salary_changes`.`status` = 0) AS `total_deduction` from `employees` where !(`employees`.`id` in (select `salaries_received`.`employee_id` from `salaries_received` where `salaries_received`.`month` = (select month(curdate())))) ;

-- --------------------------------------------------------

--
-- Structure for view `salary_changes_emp`
--
DROP TABLE IF EXISTS `salary_changes_emp`;

CREATE VIEW `salary_changes_emp`  AS  select `salary_changes`.`id` AS `change_id`,`salary_changes`.`employee_id` AS `employee_id`,`employees`.`name` AS `name`,`employees`.`avatar` AS `avatar`,`salary_changes`.`amount` AS `amount`,`salary_changes`.`reason` AS `reason`,`salary_changes`.`date` AS `date`,`salary_changes`.`month` AS `month`,`salary_changes`.`status` AS `status` from (`employees` join `salary_changes` on(`employees`.`id` = `salary_changes`.`employee_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sessions`
--
DROP TABLE IF EXISTS `sessions`;

CREATE VIEW `sessions`  AS  select `individual_sessions`.`id` AS `session_id`,`individual_sessions`.`amount` AS `amount`,`individual_sessions`.`remaining` AS `remaining`,`individual_sessions`.`date` AS `date`,`individual_sessions`.`month` AS `month`,`individual_sessions`.`children_id` AS `children_id`,`childrens`.`child_name` AS `child_name`,`individual_sessions`.`employee_id` AS `employee_id`,`employees`.`name` AS `emp_name` from ((`individual_sessions` join `childrens` on(`childrens`.`id` = `individual_sessions`.`children_id`)) join `employees` on(`employees`.`id` = `individual_sessions`.`employee_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `total_changes`
--
DROP TABLE IF EXISTS `total_changes`;

CREATE VIEW `total_changes`  AS  select `salary_changes`.`employee_id` AS `employee_id`,sum(`salary_changes`.`amount`) AS `total_change`,`salary_changes`.`month` AS `month` from `salary_changes` group by `salary_changes`.`employee_id`,`salary_changes`.`month` ;

-- --------------------------------------------------------

--
-- Structure for view `total_delaies`
--
DROP TABLE IF EXISTS `total_delaies`;

CREATE VIEW `total_delaies`  AS  select `attendance_lists`.`employee_id` AS `employee_id`,sum(`attendance_lists`.`delay_min`) AS `total_delay`,`attendance_lists`.`month` AS `month`,(select `employees`.`day_price` from `employees` where `employees`.`id` = `attendance_lists`.`employee_id`) AS `day_price` from `attendance_lists` group by `attendance_lists`.`employee_id`,`attendance_lists`.`month` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absences_deductions`
--
ALTER TABLE `absences_deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_lists`
--
ALTER TABLE `attendance_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delay_deductions`
--
ALTER TABLE `delay_deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_operations`
--
ALTER TABLE `financial_operations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual_sessions`
--
ALTER TABLE `individual_sessions`
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
-- Indexes for table `salaries_received`
--
ALTER TABLE `salaries_received`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_changes`
--
ALTER TABLE `salary_changes`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `absences_deductions`
--
ALTER TABLE `absences_deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `attendance_lists`
--
ALTER TABLE `attendance_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `delay_deductions`
--
ALTER TABLE `delay_deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_operations`
--
ALTER TABLE `financial_operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `individual_sessions`
--
ALTER TABLE `individual_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries_received`
--
ALTER TABLE `salaries_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `salary_changes`
--
ALTER TABLE `salary_changes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
