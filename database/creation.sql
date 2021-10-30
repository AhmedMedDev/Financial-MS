-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 12:46 PM
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
  `rank_of_bro` int(11) NOT NULL,
  `address` text NOT NULL,
  `national_id` varchar(50) NOT NULL,
  `monthly_expenses` int(11) NOT NULL,
  `bus_expenses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `child_name`, `child_image`, `parent`, `phone`, `date`, `notes`, `date_of_birth`, `gender`, `nationality`, `religion`, `num_of_bro`, `rank_of_bro`, `address`, `national_id`, `monthly_expenses`, `bus_expenses`) VALUES
(46, 'جوسيت', 'child_image_defualt.png', 'مؤمن عقلة', '+8321936738584', '2015-06-23 00:00:00', NULL, '2002-09-25', 'ذكر', 'ليبى', 'مسيحى', 2, 2, '3153 شارع أنزور العلامي\nغرب الطفيلة', '8459295850', 7902, 2309),
(47, 'اماندا', 'child_image_defualt.png', 'كاترين الطويسات', '+3006658440138', '2002-06-21 00:00:00', NULL, '2013-05-05', 'ذكر', 'كويتى', 'مسلم', 1, 3, '30 شارع وليد الوشاح\nالسلط', '420769076X', 4860, 4533),
(48, 'عماد الدين', 'child_image_defualt.png', 'فهمي البلبيسي', '+2867309034675', '2004-01-04 00:00:00', NULL, '1979-10-14', 'ذكر', 'مصرى', 'مسيحى', 6, 5, '5362 شارع آلاء الردايدة\nشمال غور الصافي', '2708770179', 4360, 1968),
(49, 'ميان', 'child_image_defualt.png', 'فكتور الصنات', '+4187751949742', '1974-10-07 00:00:00', NULL, '1976-03-25', 'ذكر', 'مصرى', 'مسيحى', 6, 2, '81 شارع هانيا العلامي\nجنوب صويلح', '917402678X', 2670, 3865),
(50, 'راجح', 'child_image_defualt.png', 'المهندس إياد العلامي', '+6383236014105', '2010-02-05 00:00:00', NULL, '1971-09-14', 'ذكر', 'مصرى', 'مسيحى', 0, 1, '0858 شارع أسيد الشطناوي\nشمال بيت راس', '411729508X', 4084, 1942),
(51, 'ساري', 'child_image_defualt.png', 'الدكتورة مسعدة الرفاعي', '+6489159213257', '1973-08-26 00:00:00', NULL, '2019-01-09', 'انثى', 'ليبى', 'مسيحى', 5, 2, '62048 شارع نجلاء الصمادي\nبيت راس', '2774689570', 2201, 3727),
(52, 'راجح', 'child_image_defualt.png', 'المهندسة حصه الرفاعي', '+1648337713646', '1972-09-30 00:00:00', NULL, '1990-05-27', 'انثى', 'ليبى', 'مسيحى', 1, 3, '29 شارع سلام المصري بناية رقم 55\nغرب الكرك', '7311010578', 7288, 1687),
(53, 'بانا', 'child_image_defualt.png', 'عبد الناصر ابو يوسف', '+4216601419799', '2018-07-12 00:00:00', NULL, '2016-06-21', 'انثى', 'ليبى', 'مسيحى', 2, 5, '4660 شارع ميناس وادي\nام قصير', '7512093691', 3250, 1192),
(54, 'عرفات', 'child_image_defualt.png', 'انوار السلطية', '+6220147785558', '1982-08-03 00:00:00', NULL, '2002-02-14', 'انثى', 'مصرى', 'مسيحى', 2, 2, '12115 شارع اويس العدوان شقة رقم. 51\nوسط الهاشمية', '4986711490', 7068, 3417),
(55, 'مهدي', 'child_image_defualt.png', 'روزان الروسان', '+7869213277941', '1983-09-25 00:00:00', NULL, '1977-07-10', 'انثى', 'ليبى', 'مسيحى', 4, 2, '03516 شارع صليبا عباد\nشرق غور الصافي', '3872061291', 3289, 1509),
(56, 'معين', 'child_image_defualt.png', 'وسن الرفاعي', '+2330718610695', '1974-04-20 00:00:00', NULL, '2015-05-11', 'انثى', 'كويتى', 'مسيحى', 6, 2, '61883 شارع ميرنا وادي شقة رقم. 06\nمعان', '2887633708', 4412, 3372),
(57, 'صبره', 'child_image_defualt.png', 'جاسمن ابوالحاج', '+9561592629053', '1989-05-14 00:00:00', NULL, '1989-01-02', 'انثى', 'كويتى', 'مسيحى', 4, 5, '7541 شارع غصون المشاهره\nساكب', '8802149992', 7331, 4901),
(58, 'بشارة', 'child_image_defualt.png', 'رواء الشريف', '+6118315898237', '2017-03-13 00:00:00', NULL, '2000-01-14', 'انثى', 'مصرى', 'مسيحى', 2, 4, '8292 شارع مراد الدعجة بناية رقم 33\nالرمثا', '4840519382', 6251, 2410),
(59, 'نيفين', 'child_image_defualt.png', 'عثمان عباد', '+1681892239755', '1999-04-22 00:00:00', NULL, '1999-03-29', 'انثى', 'كويتى', 'مسيحى', 4, 5, '39465 شارع شوان المشاهره\nغور الصافي', '5765976751', 5290, 2346),
(60, 'نهيدة', 'child_image_defualt.png', 'المهندس إياد الزوربا', '+9789571811036', '2021-06-07 00:00:00', NULL, '2001-08-14', 'انثى', 'كويتى', 'مسلم', 2, 4, '2739 شارع مينا الغريب\nشرق كريمه', '0553688340', 2367, 1058);

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
  `email` varchar(150) DEFAULT NULL,
  `national_id` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `religion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `qualification`, `phone`, `salary`, `avatar`, `start_date`, `date_of_birth`, `email`, `national_id`, `address`, `religion`) VALUES
(138, 'رحمه الحجايا', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+4924799405157', 4775, '\'default.png\'', '1972-03-20', '2000-06-28', 'shami.mutaz@example.com', '5016248834', '82 شارع عبادة الشامي\nشمال المفرق', 'مسيحى'),
(139, 'هنادي البلبيسي', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+8222371613306', 2497, '\'default.png\'', '2007-12-11', '1977-01-28', 'tmelhem@example.org', '8964090527', '8221 شارع زياد الريماوي شقة رقم. 00\nالقويسمة', 'مسلم'),
(140, 'رائد الروسان', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+7307414926146', 6293, '\'default.png\'', '1985-08-01', '2017-08-10', 'zaloum.bashar@example.com', '5979789200', '90679 شارع صمود الشمالي بناية رقم 88\nغرب الحصن', 'مسيحى'),
(141, 'مؤتمن الطويل', 'اخصائى', 'بكالوريوس تربية ', '+8258883745305', 3028, '\'default.png\'', '1975-01-04', '2016-05-13', 'yazan39@example.org', '5102284983', '60017 شارع بدوان السيوف بناية رقم 38\nشرق كفرنجه', 'مسيحى'),
(142, 'عبيدالله الصرايرة', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+4692006650670', 4214, '\'default.png\'', '1993-10-14', '2014-02-28', 'tkanaan@example.com', '2039141243', '1889 شارع صالح الضمور بناية رقم 21\nالحصن', 'مسلم'),
(143, 'كلوديت المجالي', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+6388660901225', 6424, '\'default.png\'', '1993-02-02', '1973-08-20', 'nhamad@example.org', '3178453792', '3715 شارع سمعان العمرية بناية رقم 90\nشمال ايدون', 'مسلم'),
(144, 'الآنسة سعاد الصمادي', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+1050718420904', 7586, '\'default.png\'', '1989-09-04', '2001-01-05', 'ahmad.rabee@example.com', '1076558844', '58303 شارع انتظار بني صقر\nجنوب ايدون', 'مسلم'),
(145, 'ايسر بني حسن', 'اخصائى', 'بكالوريوس تربية ', '+3146109423958', 2106, '\'default.png\'', '1990-03-02', '1991-11-26', 'abd77@example.org', '6400140387', '42892 شارع انعام ابو يوسف شقة رقم. 30\nشمال القويسمة', 'مسلم'),
(146, 'بيداء ابو سعده', 'اخصائى', 'بكالوريوس تربية ', '+7835046975785', 2109, '\'default.png\'', '1986-12-27', '1997-11-29', 'jabbas@example.com', '2866167872', '61681 شارع رامز عناسوة شقة رقم. 88\nالمشارع', 'مسيحى'),
(147, 'رسلان سحاب', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+6511865103516', 7943, '\'default.png\'', '1979-06-22', '2016-04-07', 'fobaisi@example.com', '4958065474', '43 شارع رحمه الرشدان بناية رقم 10\nالعقبة', 'مسيحى'),
(148, 'عزيز العنانبه', 'اخصائى', 'بكالوريوس تربية ', '+3932684628447', 6771, '\'default.png\'', '1990-01-29', '1998-07-23', 'hamad.yazan@example.org', '3878099622', '17922 شارع جمزه العناسوة\nشمال الشهيد عزمي', 'مسيحى'),
(149, 'صابرين السحاقات', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+6265245808539', 4886, '\'default.png\'', '1983-12-20', '1999-12-06', 'saleem44@example.net', '0652584497', '48 شارع جمانة السلطية بناية رقم 28\nمرج الحمام', 'مسلم'),
(150, 'اماندا الفاخوري', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+6051901267160', 3837, '\'default.png\'', '2017-12-01', '2011-12-13', 'kabbadi@example.org', '7286002600', '1625 شارع عبد الفناطسة\nالجبيهه', 'مسيحى'),
(151, 'بهاء البلبيسي', 'اخصائى', 'بكالوريوس تربية ', '+9727828921045', 7604, '\'default.png\'', '1990-12-12', '2018-02-08', 'amr93@example.com', '3457239487', '14 شارع سمعان العلامي بناية رقم 69\nالزرقاء', 'مسيحى'),
(152, 'اشراق عجلون', 'اخصائى', 'ليسانس اداب وتربيه قسم علم نفس', '+4491831522675', 6937, '\'default.png\'', '2012-09-12', '1996-09-06', 'babulebbeh@example.net', '5326915170', '35140 شارع ميس الحجايا\nجنوب ايدون', 'مسيحى');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ِahmed said', 'admin@admin.com', NULL, '$2y$10$vAbz1yIW/8/3LtlyaC23iOZzuNlt4rtWOWuDJpQRTSoUyaYI21L3e', '0RFSty4vyruLWtFNFl4UK8uIn64YaS6DE1IfHPoObN7WRHPr4OMhBTOdAL5e', '2021-10-25 19:33:19', '2021-10-25 19:33:19'),
(2, 'Harvest-HR', 'algeniefoun@gmail.com', NULL, '$2y$10$eEuQP9eDZ6t6JSZDClkZSeZw6XKSO6d3wmI4J8RT8Oi1ZmUOlYneW', NULL, '2021-10-25 21:08:27', '2021-10-25 21:08:27'),
(3, 'ahmed', 'ahmed@ahmed.com', NULL, '$2y$10$WpUOOz7TLXNmZcoLxBNHjOyuchtf9PEQQd0YB3wkvzmGa7WodyFQm', NULL, '2021-10-28 05:03:09', '2021-10-28 05:03:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `attendance_lists`
--
ALTER TABLE `attendance_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `delay_deductions`
--
ALTER TABLE `delay_deductions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_operations`
--
ALTER TABLE `financial_operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `individual_sessions`
--
ALTER TABLE `individual_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries_received`
--
ALTER TABLE `salaries_received`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `salary_changes`
--
ALTER TABLE `salary_changes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
