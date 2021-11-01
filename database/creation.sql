-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 03:14 PM
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

--
-- Dumping data for table `attendance_lists`
--

INSERT INTO `attendance_lists` (`id`, `employee_id`, `is_attende`, `delay_min`, `date`) VALUES
(72, 227, 0, 0, '2021-10-30 15:42:24'),
(73, 228, 0, 0, '2021-10-30 15:42:36'),
(74, 229, 0, 0, '2021-10-30 15:42:50');

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
  `monthly_expenses` varchar(20) NOT NULL,
  `bus_expenses` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `childrens`
--

INSERT INTO `childrens` (`id`, `child_name`, `child_image`, `parent`, `phone`, `date`, `notes`, `date_of_birth`, `gender`, `nationality`, `religion`, `num_of_bro`, `rank_of_bro`, `address`, `national_id`, `monthly_expenses`, `bus_expenses`) VALUES
(46, 'جوسيت', 'child_image_defualt.png', 'مؤمن عقلة', '+8321936738584', '2015-06-23 00:00:00', NULL, '2002-09-25', 'ذكر', 'ليبى', 'مسيحى', 2, 2, '3153 شارع أنزور العلامي\nغرب الطفيلة', '8459295850', '7902', '2309'),
(47, 'اماندا', 'child_image_defualt.png', 'كاترين الطويسات', '+3006658440138', '2002-06-21 00:00:00', NULL, '2013-05-05', 'ذكر', 'كويتى', 'مسلم', 1, 3, '30 شارع وليد الوشاح\nالسلط', '420769076X', '4860', '4533'),
(48, 'عماد الدين', 'child_image_defualt.png', 'فهمي البلبيسي', '+2867309034675', '2004-01-04 00:00:00', NULL, '1979-10-14', 'ذكر', 'مصرى', 'مسيحى', 6, 5, '5362 شارع آلاء الردايدة\nشمال غور الصافي', '2708770179', '4360', '1968'),
(49, 'ميان', 'child_image_defualt.png', 'فكتور الصنات', '+4187751949742', '1974-10-07 00:00:00', NULL, '1976-03-25', 'ذكر', 'مصرى', 'مسيحى', 6, 2, '81 شارع هانيا العلامي\nجنوب صويلح', '917402678X', '2670', '3865'),
(50, 'راجح', 'child_image_defualt.png', 'المهندس إياد العلامي', '+6383236014105', '2010-02-05 00:00:00', NULL, '1971-09-14', 'ذكر', 'مصرى', 'مسيحى', 0, 1, '0858 شارع أسيد الشطناوي\nشمال بيت راس', '411729508X', '4084', '1942'),
(51, 'ساري', 'child_image_defualt.png', 'الدكتورة مسعدة الرفاعي', '+6489159213257', '1973-08-26 00:00:00', NULL, '2019-01-09', 'انثى', 'ليبى', 'مسيحى', 5, 2, '62048 شارع نجلاء الصمادي\nبيت راس', '2774689570', '2201', '3727'),
(52, 'راجح', 'child_image_defualt.png', 'المهندسة حصه الرفاعي', '+1648337713646', '1972-09-30 00:00:00', NULL, '1990-05-27', 'انثى', 'ليبى', 'مسيحى', 1, 3, '29 شارع سلام المصري بناية رقم 55\nغرب الكرك', '7311010578', '7288', '1687'),
(53, 'بانا', 'child_image_defualt.png', 'عبد الناصر ابو يوسف', '+4216601419799', '2018-07-12 00:00:00', NULL, '2016-06-21', 'انثى', 'ليبى', 'مسيحى', 2, 5, '4660 شارع ميناس وادي\nام قصير', '7512093691', '3250', '1192'),
(54, 'عرفات', 'child_image_defualt.png', 'انوار السلطية', '+6220147785558', '1982-08-03 00:00:00', NULL, '2002-02-14', 'انثى', 'مصرى', 'مسيحى', 2, 2, '12115 شارع اويس العدوان شقة رقم. 51\nوسط الهاشمية', '4986711490', '7068', '3417'),
(55, 'مهدي', 'child_image_defualt.png', 'روزان الروسان', '+7869213277941', '1983-09-25 00:00:00', NULL, '1977-07-10', 'انثى', 'ليبى', 'مسيحى', 4, 2, '03516 شارع صليبا عباد\nشرق غور الصافي', '3872061291', '3289', '1509'),
(56, 'معين', 'child_image_defualt.png', 'وسن الرفاعي', '+2330718610695', '1974-04-20 00:00:00', NULL, '2015-05-11', 'انثى', 'كويتى', 'مسيحى', 6, 2, '61883 شارع ميرنا وادي شقة رقم. 06\nمعان', '2887633708', '4412', '3372'),
(57, 'صبره', 'child_image_defualt.png', 'جاسمن ابوالحاج', '+9561592629053', '1989-05-14 00:00:00', NULL, '1989-01-02', 'انثى', 'كويتى', 'مسيحى', 4, 5, '7541 شارع غصون المشاهره\nساكب', '8802149992', '7331', '4901'),
(58, 'بشارة', 'child_image_defualt.png', 'رواء الشريف', '+6118315898237', '2017-03-13 00:00:00', NULL, '2000-01-14', 'انثى', 'مصرى', 'مسيحى', 2, 4, '8292 شارع مراد الدعجة بناية رقم 33\nالرمثا', '4840519382', '6251', '2410'),
(59, 'نيفين', 'child_image_defualt.png', 'عثمان عباد', '+1681892239755', '1999-04-22 00:00:00', NULL, '1999-03-29', 'انثى', 'كويتى', 'مسيحى', 4, 5, '39465 شارع شوان المشاهره\nغور الصافي', '5765976751', '5290', '2346'),
(60, 'نهيدة', 'child_image_defualt.png', 'المهندس إياد الزوربا', '+9789571811036', '2021-06-07 00:00:00', NULL, '2001-08-14', 'انثى', 'كويتى', 'مسلم', 2, 4, '2739 شارع مينا الغريب\nشرق كريمه', '0553688340', '2367', '1058');

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
  `date_of_birth` varchar(30) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `national_id` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `religion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `qualification`, `phone`, `salary`, `avatar`, `start_date`, `date_of_birth`, `email`, `national_id`, `address`, `religion`) VALUES
(227, 'تويا حسن عبد المنعم محمد', 'ادارى', 'بكالوريس تربية علوم انجليزى', '012277137942', 3500, '\'default.png\'', '7/10/2019', '15/4/1994', 'toyahassan16@gmail.com', '29404150101401', '132 شارع الترعة البولاقية _ شبرا _القاهرة ', 'مسلمة'),
(228, 'Bahaa Desouky Abd Elnabi', 'اخصائي تخاطب ', 'خدمة إجتماعية ', '01002742982', 20000, '\'default.png\'', '15/6/2019', '16/10/1982', 'desoukyb@gmail.com', '28210161701891', '84 عبدالشافي محمد الحي السابع مدينة نصر ', 'مسلم'),
(229, 'إيمان أمين أحمد ', 'اخصائيه اكاديمي', 'ليسانس اداب وتربيه قسم علم نفس', '1019126816', 1800, '\'default.png\'', '21/8/2021', '٢٠/١٠/١٩٩١', 'emanamin91.88@gmail.com', '29110200104225', '٤٩ شارع رقم ٢٠ مساكن حلميه الزيتون', 'مسلمه'),
(230, 'ايمان رجب حسن بخيت', 'قرآن ', 'ليسانس تربية جامعة الازهر', '01009814314', 1800, '\'default.png\'', '28/3/2021', '15/12/1994', 'Emyhassan1512@gmail.com', '29412152404722', 'محافظة المنيا _مركز ديرمواس\nحاليا   مدينةنصر الحي السابع   شارع  المحكمة', 'مسلمة'),
(231, 'شيماء أحمد مصطفى السيد بدير', 'أخصائية أكاديمي( عربي،حساب)', 'بكالوريوس خدمة إجتماعية', '1066026351', 2000, '\'default.png\'', '٢٠٢١/١٠/١٨', '١٩٩٠/١٠/١١', 'Shaimaabedair1990@gmail.com', '29010111600303', '٤ خلوصي منيل الروضة', 'مسلمة'),
(232, 'نورهان عاطف عبد السميع', 'اخصائيه تخاطب', 'اداب قسم علم نفس جامعه القاهره', '1025013146', 1700, '\'default.png\'', '٢٠٢١/١٠/١٧', '١٩٩٩/٣/٩', 'noraatef664@gmail.com', '29903090103589', '٣٧ شارع محمد صالح مدينه النور الزاويه الحمرا', 'مسلمه'),
(233, 'تقى ناصر صلاح الدين عبد الجواد', 'اخصائيه تاهيل حركى ', 'بكالوريوس تربية رياضية جامعه حلوان', '01113731878', 2000, '\'default.png\'', '٢٠٢١/١٠/٦', '١٩٩٩/٣/٢١', 'tokaanasser99@gmail.com', '29903210104789', '٩٨ شارع الشركات الاميريه البلد الزاويه الحمراء', 'مسلمه'),
(234, 'عبير ابراهيم السيد احمد الديب', 'اخصائيه تنميه مهارات', 'بكالوريوس تربيه خاصه', '01022587769', 1700, '\'default.png\'', '19/10/2021', '1/9/1997', 'beroibraheem5@gmail.com', '29709011513369', 'ش. ترعه الجبل      عين شمس الغربيه', 'مسلمه'),
(235, 'محمد عبد الوهاب حمزة محمد ', 'أخصائي تنمية مهارات ', 'ليسانس تربية وتربية خاصة ', '01555373920', 2000, '\'default.png\'', '16/10/2021', '17/3/1998', 'abdalwhabmohamed340@gmail.com', '29803173400092', 'الالف مسكن  شارع العطار ', 'مسلم'),
(236, 'عبير محمد مأمون عبدالفتاح ', 'اخصائيه تنميه مهارات', 'بكالوريوس خدمه اجتماعيه جامعه حلوان ', '01142690600', 2200, '\'default.png\'', '3/11/2019', '20/4/1995', '01142690600', '29504200102964', '10ش محمد نصر من ش المطراوي  . المطريه ', 'مسلمه '),
(237, 'Mariam Adel sayed saeed', 'Teacher english', 'Faculty of Arts history Ain shams uni', '01023457049', 1800, '\'default.png\'', '15/8/2021', '9/7/1999', 'Mariam.adel.ma1209@gmail.com', '29907090103967', 'Naser city\nAl-hai asher \nSaqr qorish \nع٥٣ ب٤٤', 'Muslim'),
(238, 'فدوى عصام الدين مصطفي عماره', 'تأهيل حركي ووظيفي', 'بكالوريوس تجارة ', '1001551153', 3500, '\'default.png\'', '٤/٣/٢٠٢٠', '٥/٨/١٩٩٢', 'hazem_lovefadwa@yahoo.com ', '29208051500848', '١شارع محمد بدر كوبرى القبة ', 'مسلمه'),
(239, 'نسمة أحمد السيد صاحى', 'اخصائى تخاطب ', 'ليسانس اداب ', '01100158152', 3000, '\'default.png\'', '15_6_2019 ', '4_1_1988', 'nesmasahy@gmail.com', '288010141302583', 'التجمع الخامس   شارع التسعين  الشمالي', 'مسلم'),
(240, 'ندى احمد فتحي ', 'أخصائية صعوبات تعلم وتنمية مهارات ', 'ليسانس آداب علم نفس ', '1158006792', 2800, '\'default.png\'', '٦-٢٠١٩', '١٧-٩-١٩٩', 'nodyonline30@gmail.com', '29209170101788', '١٧ ش محمد عبده  منشية جبريل المعادي ', 'مسلم '),
(241, 'مصطفى السيد حسن محمود', 'اداري', 'بكالوريوس خدمه اجتماعيه', '1069048456', 3000, '\'default.png\'', '2019', '4/3/1985', 'mostafamessi966@gmail.com', '28503040104353', '١٤ ش على الطحاوي المطريه', 'مسلم'),
(242, 'ايناس حسن محمد حسن', 'أخصائيه تخاطب دمج', 'ليسانس  الحقوق', '+201050366599', 4000, '\'default.png\'', '21/8/2019', '1.7.1981', 'Enas8001@gmail.com ', '28107010109285', 'B10مدينتي', 'مسلمه'),
(243, 'فوزيه حمدي  حسن', ' ناني ومشرفت باص', ' اعدادي', '01094860300', 2700, '\'default.png\'', '2019/9/10', '1997/9/28', 'ليس لدي', '29709280100526', ' مدينت نصرالحي  الثامن اخر مصطفي النحاس ', 'مسلمه'),
(244, 'Omnıa hassan Abd elmonem', 'Nursery teacher', 'Faculty of Archeology, Cairo University', '01023540181', 1800, '\'default.png\'', '25/9/2020', '23/2/1998', 'Oh8451922@gmail.com ', '29802230101149', 'Shubra street ', 'Muslim'),
(245, 'ابتسام المطراوي عبد السميع عبد ربه', 'اخصائية تخاطب', 'ليسانس آداب جامعة عين شمس ', '1149313196', 2200, '\'default.png\'', '٢٨/٨/٢٠١٩', '١/١٢/١٩٩٢', 'Basma bosbos', '29212010101961', '٣٠شارع سعد خميس عين شمس الغربيه', 'مسلمة'),
(246, 'اماني ربيع محمد عثمان ', 'اخصائيه تكامل حسي ', 'خدمة اجتماعية جامعة حلوان.دبلومة ذو احتياجات خاصه ', '01093651151', 2500, '\'default.png\'', 'شهر 10 ', '١٢/٣/١٩٩٢', 'amanyrabei4@gmail.com', '29203120104401', 'شارع ابو بكر الصديق أمام مدرسة الفتح المرج الجديده ', 'مسلمة '),
(247, 'جيهان فتحى اورنى محمد', 'نانى', 'تانية ثاوى عام', '01063443247', 3000, '\'default.png\'', 'غير معلوم', '1978-01-01', 'jyhanf452@gmail.com', '27801010104267', 'ش على ابن ابى طالب متفرع من شارع احد مدينة نصر', 'مسلم'),
(248, 'نجلاء فتحى اورنى محمد', 'نانى', 'تانية ثاوى عام', '01032462920', 2000, '\'default.png\'', 'غير معلوم', '1976-9-28', 'jyhanf452@gmail.com', '27801010104267', 'ش على ابن ابى طالب متفرع من شارع احد مدينة نصر', 'مسلم'),
(249, 'امنيه رافت خيرت احمد', 'اخصائي تخاطب', 'بكالوريوس خدمه اجتماعيه', '01025634882', 1600, '\'default.png\'', 'اغسطس 2021', '671992', 'omniarafaat6792@gmail.com', '29207062402388', 'العباسيه 12 مدرسه ولى العهد', 'مسلم'),
(250, 'سيد محمد سيد محمد ', 'سيارة توصيل ', 'معهد الدراسات البيولوجية ', '01096222418', 4500, '\'default.png\'', '٣٠ اغسطس ٢٠٢١ ', '١٦ اكتوبر ١٩٦٦', 'sayed161066@gmail.com', '26610160102471', '١٦ شارع عبدالعزيز نصار متفرع من القومية العربية إمبابة الجيزة ', 'مسلم '),
(251, 'شيماء كمال محمد', 'اخصائية تخاطب ', 'اداب ،(حاصلة علي دبلومة معالج لغة وكلام عين شمس )', '01156960542', 2000, '\'default.png\'', '1/3/2021', '6/7/1997', 'shimaa.kamal97@yahoo.com', '29707062101887', '1ش الشوربجي فيصل ', 'مسلمة'),
(252, 'أية الله ثروت محمد جمال الدين', 'اخصائي تنمية مهارات', 'ليسانس دراسات إنسانية', '01092508985', 1800, '\'default.png\'', '17/10/2021', '6/6/1993', 'ayatharwatyoyo@gmail.com', '29306068801185', 'مدينه نصر     ', 'مسلمة');

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
(1, 'admin', 'Harvest@admin.com', NULL, '$2y$10$vAbz1yIW/8/3LtlyaC23iOZzuNlt4rtWOWuDJpQRTSoUyaYI21L3e', '0RFSty4vyruLWtFNFl4UK8uIn64YaS6DE1IfHPoObN7WRHPr4OMhBTOdAL5e', '2021-10-25 19:33:19', '2021-10-25 19:33:19'),
(2, 'Harvest-HR', 'algeniefoun@gmail.com', NULL, '$2y$10$eEuQP9eDZ6t6JSZDClkZSeZw6XKSO6d3wmI4J8RT8Oi1ZmUOlYneW', NULL, '2021-10-25 21:08:27', '2021-10-25 21:08:27'),
(3, 'ahmed', 'admin@admin.com', NULL, '$2y$10$WpUOOz7TLXNmZcoLxBNHjOyuchtf9PEQQd0YB3wkvzmGa7WodyFQm', NULL, '2021-10-28 05:03:09', '2021-10-28 05:03:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

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
