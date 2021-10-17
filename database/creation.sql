-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 12:40 PM
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

--
-- Dumping data for table `absences_deductions`
--

INSERT INTO `absences_deductions` (`id`, `employee_id`, `is_deduction`, `date`) VALUES
(16, 54, 1, '2021-10-15'),
(17, 55, 1, '2021-10-15'),
(18, 52, 1, '2021-10-16');

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

--
-- Dumping data for table `attendance_lists`
--

INSERT INTO `attendance_lists` (`id`, `employee_id`, `is_attende`, `delay_min`, `date`) VALUES
(26, 52, 1, 0, '2021-10-15 18:07:52'),
(27, 53, 1, 0, '2021-10-15 18:07:55'),
(28, 54, 0, 0, '2021-10-15 18:08:00'),
(29, 55, 0, 0, '2021-10-15 18:08:02'),
(30, 56, 1, 120, '2021-10-15 18:12:54'),
(31, 57, 1, 60, '2021-10-15 18:15:21'),
(32, 58, 1, 0, '2021-10-15 18:15:23'),
(33, 52, 0, 0, '2021-10-16 00:39:33'),
(34, 53, 0, 0, '2021-10-16 00:39:36'),
(35, 55, 1, 66, '2021-10-16 00:40:57'),
(36, 54, 1, 50, '2021-10-16 00:40:59'),
(37, 52, 1, 0, '2021-10-17 10:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `childrens`
--

CREATE TABLE `childrens` (
  `id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `child_image` varchar(150) NOT NULL DEFAULT 'child_image_defualt.png',
  `parent` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `notes` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `child_name`, `child_image`, `parent`, `phone`, `date`, `notes`) VALUES
(15, 'Odysseus Cameron', 'child_image_defualt.png', 'Laboriosam sunt sun', '01223135', '2021-10-15 16:50:32', 'Quia qui eum dolorum'),
(16, 'Shay Munoz', 'child_image_defualt.png', 'Harum ut eos enim et', '01223153233', '2021-10-15 19:01:16', 'Doloremque irure lab');

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

--
-- Dumping data for table `delay_deductions`
--

INSERT INTO `delay_deductions` (`id`, `employee_id`, `is_deduction`, `month`) VALUES
(5, 56, 1, 10),
(6, 54, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `avatar` varchar(150) NOT NULL DEFAULT 'default.png',
  `salary` float NOT NULL,
  `start_date` varchar(30) DEFAULT NULL,
  `day_price` int(11) GENERATED ALWAYS AS (`salary` / 26) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `email`, `phone`, `avatar`, `salary`, `start_date`) VALUES
(52, 'Thane Nelson', 'Necessitatibus debit', 'lopecilif@mailinator.com', '01228978135', 'uploads/employee/avatar/default.png', 96, '12-Nov-2007'),
(53, 'Alana Greenholt', 'wintheiser', 'yundt.norma@example.net', '4169', 'https://lorempixel.com/283/241/?27929', 6248, '1987-01-27'),
(54, 'Gregg Russel', 'kessler', 'dach.wilhelmine@example.net', '4772', 'https://lorempixel.com/283/241/?90265', 5693, '1978-03-21'),
(55, 'Prof. Spencer Klein', 'hartmann', 'hauck.cesar@example.net', '5276', 'https://lorempixel.com/283/241/?72040', 4699, '2019-10-20'),
(56, 'Alberto Nader', 'gusikowski', 'josefa17@example.com', '4634', 'https://lorempixel.com/283/241/?38526', 3160, '2006-03-21'),
(57, 'Prof. Wilbert Lehner V', 'ratke', 'purdy.tony@example.com', '2664', 'https://lorempixel.com/283/241/?31212', 3232, '1985-07-13'),
(58, 'Cheyanne Schneider DVM', 'jacobi', 'isac.simonis@example.net', '2372', 'https://lorempixel.com/283/241/?46110', 4245, '1993-05-29'),
(59, 'Claude Hessel III', 'yundt', 'rkuhlman@example.org', '6430', 'https://lorempixel.com/283/241/?90942', 4438, '1970-11-18'),
(60, 'Fabian Corkery', 'maggio', 'hjacobi@example.org', '3201', 'https://lorempixel.com/283/241/?80674', 4655, '1998-01-02'),
(61, 'Dr. Cara Bednar', 'satterfield', 'torp.kellen@example.net', '5792', 'https://lorempixel.com/283/241/?25193', 2540, '1988-10-07'),
(62, 'Monroe Runolfsdottir', 'smitham', 'noah46@example.org', '5526', 'https://lorempixel.com/283/241/?27846', 4094, '1981-02-15'),
(63, 'Judson D\'Amore', 'larson', 'zieme.zachary@example.net', '6706', 'https://lorempixel.com/283/241/?41783', 4076, '2013-04-02'),
(64, 'Dr. Yoshiko Hoppe V', 'monahan', 'mccullough.clovis@example.org', '5789', 'https://lorempixel.com/283/241/?24650', 7318, '1997-07-02'),
(65, 'Spencer Cartwright', 'stehr', 'qspinka@example.com', '2582', 'https://lorempixel.com/283/241/?52896', 3095, '2008-10-18'),
(66, 'Rubie McDermott', 'champlin', 'hermann.hulda@example.net', '4379', 'https://lorempixel.com/283/241/?61735', 6645, '1989-03-03'),
(67, 'Lukas Lind', 'hill', 'fschmidt@example.net', '3752', 'https://lorempixel.com/283/241/?33993', 5373, '1983-09-24');

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
  `month` int(11) GENERATED ALWAYS AS (month(`date`)) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `financial_operations`
--

INSERT INTO `financial_operations` (`id`, `amount`, `client`, `reason`, `status`, `date`) VALUES
(75, 93, 'Temporibus non qui i', 'Quod totam mollitia ', 0, '2021-10-15 17:29:23'),
(76, 71, 'Thane Nelson', 'Aspernatur est ut es', 0, '2021-10-15 17:30:56'),
(77, 4, 'Thane Nelson', 'Aspernatur vel tenet', 0, '2021-10-15 17:34:16'),
(78, 94, 'other', 'Saepe sunt ipsum qu', 0, '2021-10-15 18:07:26'),
(79, 12, 'Thane Nelson', 'Labore esse volupta', 0, '2021-10-15 18:09:02'),
(80, 44, 'Porro natus voluptas', 'Elit id labore eaqu', 1, '2021-10-15 18:43:20'),
(81, 96, 'Thane Nelson', 'received salary 10', 0, '2021-10-15 20:43:31'),
(82, 6248, 'Alana Greenholt', 'received salary 10', 0, '2021-10-15 20:49:56'),
(83, 55, 'اخر', 'ششش', 0, '2021-10-16 02:32:51'),
(84, 5601.75, 'Gregg Russel', 'received salary 10', 0, '2021-10-17 12:37:06');

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
(6, 15, 52, 5626, 0, '2021-10-15 15:14:51');

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

--
-- Dumping data for table `salaries_received`
--

INSERT INTO `salaries_received` (`id`, `employee_id`, `is_received`, `month`) VALUES
(18, 52, 1, 10),
(19, 53, 1, 10),
(20, 54, 1, 10);

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
(42, 54, -219, 'absences deductions for 2021-10-15', '2021-10-15 18:08:54', 0),
(43, 55, -181.5, 'absences deductions for 2021-10-15', '2021-10-15 18:08:56', 0),
(44, 54, 219, 'aaaaaa', '2021-10-15 18:11:44', 1),
(45, 56, -122, 'delay deduction for 10', '2021-10-15 18:13:18', 0),
(46, 52, -4, 'absences deductions for 2021-10-16', '2021-10-17 10:36:26', 0),
(47, 54, -91.25, 'delay deduction for 10', '2021-10-17 10:36:44', 0);

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

CREATE VIEW `absences`  AS  select `employees`.`id` AS `employee_id`,`employees`.`avatar` AS `avatar`,`employees`.`name` AS `name`,`employees`.`day_price` AS `day_price`,`employees`.`salary` AS `salary`,cast(`attendance_lists`.`date` as date) AS `date`,`attendance_lists`.`month` AS `month`,`attendance_lists`.`time` AS `time` from (`employees` join `attendance_lists` on(`employees`.`id` = `attendance_lists`.`employee_id`)) where `attendance_lists`.`is_attende` = 0 and `attendance_lists`.`month` = month(curdate()) and !(`attendance_lists`.`employee_id` in (select `absences_deductions`.`employee_id` from `absences_deductions` where `absences_deductions`.`date` = cast(`attendance_lists`.`date` as date))) ;

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `attendance_lists`
--
ALTER TABLE `attendance_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `delay_deductions`
--
ALTER TABLE `delay_deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_operations`
--
ALTER TABLE `financial_operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `individual_sessions`
--
ALTER TABLE `individual_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries_received`
--
ALTER TABLE `salaries_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `salary_changes`
--
ALTER TABLE `salary_changes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
