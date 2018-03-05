-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 10:08 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `jobtype_id` int(11) NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `surname`, `age`, `jobtype_id`, `experience`, `about`, `school`, `phone`, `created_at`, `updated_at`) VALUES
(7, 'Strujko', 'Strujić', 35, 5, 'mjesecno', 'Inženjer sa 8 godina rada u struci, većinom za državne firme.', 'Diplomirani inženjer telekomunikacija', '091234567', '2017-05-29 11:31:13', '2017-05-29 11:31:13'),
(8, 'Lijenko', 'Lijenić', 31, 1, 'dnevno', 'Tražim posao za preko ljeta. Ako može u struci super, ako ne opet dobro. Nepoznam puno tehnologija međutim spreman sam napraviti što se od mene traži ukoliko je i plaća na mjestu.', 'VSS', '099876543', '2017-05-29 11:37:43', '2017-05-29 11:37:43'),
(9, 'Umišljenko', 'Umišljenić', 39, 1, 'poIzvrsenomPoslu', 'Više jezika kodiram nego što ih govorim. Dobitnik nagrade za najperspektivnijeg mladog developera u Zagrebu 2006. godine. Vjerojatno znam više od ikoga na ovoj stranici.', 'ETH', '098555222', '2017-05-29 11:42:03', '2017-05-29 11:42:03'),
(10, 'Mobilko', 'Mobilkić', 24, 2, 'mjesecno', 'Završio sam FER, u slobodno vrijeme se bavim izradom igrica i aplikacija za iOS.', 'FER', '095434565', '2017-05-29 11:49:34', '2017-05-29 11:49:34'),
(12, 'Javko', 'Javkić', 30, 1, 'mjesecno', 'Bivši ferovac, dobitnik "Lončara" i rektorove nagrade 2009. godine. Odlično se snalazim u izradi web aplikacija i igrica te se u slobodno vrijeme bavim izradom istih.', 'FER', '099888777', '2017-05-29 12:08:41', '2017-05-29 12:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `employee_language`
--

CREATE TABLE `employee_language` (
  `employee_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_skill`
--

CREATE TABLE `employee_skill` (
  `employee_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtype_id` int(11) NOT NULL,
  `numemployees` int(11) NOT NULL,
  `numjobs` int(11) NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `name`, `jobtype_id`, `numemployees`, `numjobs`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Singleton Labs', 1, 120, 8, 'Mi smo tvrka sa dugogodišnjom tradicijom u izradi web aplikacija. Uvijek smo u potrazi za mladim entuzijastičnim programerima, te ukoliko ste zainteresirani za rad u poticajnoj okolini svakako nam se obratite. Pozdrav!', '2017-05-29 10:51:49', '2017-05-29 10:51:49'),
(2, 'Optimized', 2, 40, 4, 'Bavimo se izradom mobilnih aplikacija za strano i domaće tržište. Trenutno, glavni projekt na kojem radimo je mobilna aplikacija za pomoć pri učenju stranih jezika.', '2017-05-29 10:55:39', '2017-05-29 10:55:39'),
(3, 'Droid Devs', 1, 25, 2, 'Mi smo mala tvrtka koja iza sebe ima mnoštvo velikih projekata i zadovoljnih klijenata. Sjedište nam je u Njemačkoj, a ukoliko želite znati više o nama slobodno nas kontaktirajte na email.', '2017-05-29 11:00:57', '2017-05-29 11:00:57'),
(4, 'Električar', 4, 12, 1, 'Mala smo tvrtka iz Osijeka koja se bavi testiranjem i održavanjem elektrana. Ukoliko ste mladi inženjer koji se ne boji rada na terenu, ne tražite dalje!', '2017-05-29 11:08:37', '2017-05-29 11:08:37'),
(5, 'CodeExpert', 1, 8, 2, 'Mlada smo tvrka, ali vjerujte da stojimo u korak sa snažnijim konkurentima.', '2017-05-29 11:19:28', '2017-05-29 11:19:28'),
(6, 'Edison', 5, 50, 5, 'Tvrtka smo koja se bavi moderniziranjem svijeta telekomunikacija. Radimo na velikim projektima koji zahtijevaju visoki stupanj odgovornosti i učinkovitosti.', '2017-05-29 11:26:11', '2017-05-29 11:26:11'),
(11, 'Workbit', 1, 60, 5, 'Zagrebačka smo tvrtka koja u izradi svojih web-aplikacija izrazito pazi na kvalitetu koda i testiranje. Osim toga, želimo da se ugodno osjećate u okruženju te, jednom u 6 mjeseci idemo na more na team-building.', '2017-05-29 12:00:01', '2017-05-29 12:00:01'),
(13, 'Typedef ', 2, 60, 5, 'Tvrtka smo koja se bavi gotovo isključivo projektima za strano tržište. Težimo na izvrsnosti, kako među zaposlenicima, tako i kad radimo ono što najbolje znamo.', '2017-05-29 12:34:05', '2017-05-29 12:34:05'),
(14, 'Nano Solutions', 1, 40, 5, 'Zagrebačka firma koja se bavi izradom web aplikacija. Uredi nam se nalaze na vrlo atraktivnoj lokaciji', '2017-05-29 13:34:30', '2017-05-29 13:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `requiredexperience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtype_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `startdate`, `enddate`, `payment`, `description`, `salary`, `requiredexperience`, `jobtype_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-04-01', '2018-04-04', 'dnevno', 'Tražimo mlade programere koji se dobro snalaze u Railsu. Fleksibilno radno vrijeme, te mogućnost trajnog zapošljavanja ukoliko se iskažete.', 250, 'Srednje', 1, '2018-01-29 11:53:29', '2018-01-29 11:53:29'),
(2, 2, '2018-02-21', '2018-03-22', 'mjesecno', 'U potrazi smo za developerima koji se dobro snalaze u iOS-u kako bi nam pomogli pri testiranju aplikacije za učenje stranih jezika. Za više informacija, u tražilicu upišite Rosetta Stone.', 8000, 'Srednje', 2, '2018-01-23 11:58:06', '2018-01-29 11:58:06'),
(3, 3, '2018-03-23', '2018-04-17', 'mjesecno', 'Ako izvrsno poznajete objektno orjentiranu paradigmu te u alatima poput Jave i Android Studia, javite nam se za potencijalnu suradnju.', 11000, 'Visoko', 1, '2018-01-29 12:04:26', '2018-01-29 12:04:26'),
(4, 4, '2018-05-12', '2018-10-28', 'dnevno', 'Potrebno nam je 5 inženjera koji će nadgledati obnovu dijela kompleksa bioelektrane u Osijeku.', 200, 'Srednje', 4, '2018-02-24 12:12:57', '2017-02-24 12:12:57'),
(5, 1, '2018-02-28', '2018-04-02', 'dnevno', 'U potrazi smo za developerima/developericama koji će upotpuniti naš tim u narednim danima jer radimo na nekoliko novih projekata.', 300, 'Visoko', 1, '2018-02-27 12:16:30', '2018-02-28 12:16:30'),
(6, 5, '2018-03-19', '2018-04-18', 'mjesecno', 'Tražimo developere za rad na manjim projektima koji su već u tijeku ili će tek započeti u narednim tjednima.', 6000, 'Srednje', 1, '2018-02-25 12:21:13', '2018-02-25 12:21:13'),
(7, 2, '2018-04-11', '2018-11-03', 'mjesecno', 'Ako želite raditi na velikim projektima za strane klijente, a pritom se namjeravate truditi i pomoći nam u usavršavanju već postojećih aplikacija, javite nam se!', 10000, 'Visoko', 2, '2017-12-29 12:23:45', '2017-12-29 12:23:45'),
(8, 6, '2018-03-16', '2018-06-29', 'mjesecno', 'Tražimo iskusnog inženjera telekomunikacija za vođenje projekta održavanja mrežne infrastrukture Hrvatskog Telekoma.', 9500, 'Visoko', 5, '2017-11-29 12:28:33', '2017-11-29 12:28:33'),
(9, 2, '2018-05-05', '2018-09-24', 'mjesecno', 'Tražimo developere koji se snalaze u objektno orjentiranoj paradigmi za rad na manjim projektima.', 8000, 'Srednje', 2, '2018-01-11 12:56:10', '2018-01-11 12:56:10'),
(10, 11, '2018-04-17', '2018-08-27', 'mjesecno', 'Tražimo studente viših godina za testiranje manjih web-aplikacija razvijenih u proteklim mjesecima.', 6000, 'Nisko', 1, '2018-01-20 13:01:39', '2018-01-20 13:01:39'),
(11, 13, '2018-05-20', '2018-10-21', 'mjesecno', 'U potrazi smo za senior JavaScript developerom, budući da je postojeći otišao raditi u naš ured u New Yorku.', 14000, 'Visoko', 2, '2018-02-01 13:37:12', '2018-02-01 13:37:12'),
(12, 6, '2018-05-26', '2018-07-17', 'dnevno', 'Tražimo zaposlenike za rad na projektu za B.net koji se tiče ugradnje optičkih kablova u splitske kvartove. Primamo i studente viših godina tehnoloških fakulteta', 300, 'Srednje', 5, '2018-02-05 13:48:15', '2018-02-05 13:48:15'),
(15, 14, '2018-05-30', '2018-04-23', 'mjesecno', 'Tražimo studente/studentice viših godina tehnoloških fakulteta koji će raditi na testiranju baza podataka neke od naših web aplikacija.', 8000, 'Srednje', 1, '2018-01-13 14:47:58', '2017-01-13 14:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `jobtypes`
--

CREATE TABLE `jobtypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobtypes`
--

INSERT INTO `jobtypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'WebAplikacije', NULL, NULL),
(2, 'MobilneAplikacije', NULL, NULL),
(3, 'Strojarstvo', NULL, NULL),
(4, 'Elektrotehnika', NULL, NULL),
(5, 'Telekomunikacije', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_language`
--

CREATE TABLE `job_language` (
  `job_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_language`
--

INSERT INTO `job_language` (`job_id`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 1, NULL, NULL),
(3, 2, NULL, NULL),
(3, 3, NULL, NULL),
(4, 2, NULL, NULL),
(4, 3, NULL, NULL),
(5, 2, NULL, NULL),
(5, 3, NULL, NULL),
(5, 4, NULL, NULL),
(6, 2, NULL, NULL),
(6, 4, NULL, NULL),
(7, 1, NULL, NULL),
(7, 2, NULL, NULL),
(8, 1, NULL, NULL),
(8, 4, NULL, NULL),
(9, 1, NULL, NULL),
(9, 2, NULL, NULL),
(10, 1, NULL, NULL),
(10, 2, NULL, NULL),
(11, 1, NULL, NULL),
(12, 2, NULL, NULL),
(13, 1, NULL, NULL),
(14, 1, NULL, NULL),
(15, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_skill`
--

CREATE TABLE `job_skill` (
  `job_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_skill`
--

INSERT INTO `job_skill` (`job_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(2, 3, NULL, NULL),
(3, 4, NULL, NULL),
(3, 5, NULL, NULL),
(3, 6, NULL, NULL),
(4, 7, NULL, NULL),
(4, 8, NULL, NULL),
(4, 6, NULL, NULL),
(5, 1, NULL, NULL),
(5, 9, NULL, NULL),
(5, 10, NULL, NULL),
(5, 11, NULL, NULL),
(6, 12, NULL, NULL),
(6, 13, NULL, NULL),
(6, 11, NULL, NULL),
(6, 9, NULL, NULL),
(7, 2, NULL, NULL),
(7, 3, NULL, NULL),
(7, 4, NULL, NULL),
(8, 4, NULL, NULL),
(8, 6, NULL, NULL),
(8, 14, NULL, NULL),
(9, 2, NULL, NULL),
(9, 3, NULL, NULL),
(9, 4, NULL, NULL),
(10, 9, NULL, NULL),
(10, 10, NULL, NULL),
(10, 11, NULL, NULL),
(10, 12, NULL, NULL),
(11, 9, NULL, NULL),
(11, 15, NULL, NULL),
(11, 16, NULL, NULL),
(11, 17, NULL, NULL),
(12, 7, NULL, NULL),
(12, 6, NULL, NULL),
(12, 18, NULL, NULL),
(13, 19, NULL, NULL),
(13, 20, NULL, NULL),
(13, 21, NULL, NULL),
(14, 19, NULL, NULL),
(14, 20, NULL, NULL),
(14, 21, NULL, NULL),
(15, 19, NULL, NULL),
(15, 20, NULL, NULL),
(15, 21, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Engleski', '2017-05-29 10:53:29', '2017-05-29 10:53:29'),
(2, 'Njemački', '2017-05-29 10:58:06', '2017-05-29 10:58:06'),
(3, 'Francuski', '2017-05-29 11:04:26', '2017-05-29 11:04:26'),
(4, 'Talijanski', '2017-05-29 11:16:30', '2017-05-29 11:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2017_05_15_201223_create_employers_table', 1),
(64, '2017_05_15_201341_create_employees_table', 1),
(65, '2017_05_15_204530_create_jobs_table', 1),
(66, '2017_05_15_204635_create_jobtypes_table', 1),
(67, '2017_05_15_204650_create_languages_table', 1),
(68, '2017_05_15_204707_create_skills_table', 1),
(69, '2017_05_15_204921_create_towns_table', 1),
(70, '2017_05_28_125634_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('uonrg142.ixz@20mail.eu', '$2y$10$ZnYUAM8JJqBEBwQST79HRuSJ5o6g8LGcfforfa1QFNZT7RRqxFQhW', '2017-05-29 13:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `reviewer` int(11) NOT NULL,
  `reviewee` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewer`, `reviewee`, `grade`, `description`, `created_at`, `updated_at`) VALUES
(1, 7, 6, 5, 'Primljen sam na posao za koji sam se prijavio u roku od 3 dana. Zaista sam zadovoljan kako sa samom tvrtkom tako i odnosom među kolegama. Sve pohvale! :)', '2017-05-29 11:34:25', '2017-05-29 11:34:25'),
(2, 8, 3, 1, 'Poslao sam im svoj životopis, na što sam dobio odgovor da nisam dovoljno kompetentan. Sramota!!!', '2017-05-29 11:39:19', '2017-05-29 11:39:19'),
(3, 9, 3, 5, 'Odlična tvrtka, super radno okruženje. Radio sam za njih samo na praksi, ali ekipa je za svaku preporuku.', '2017-05-29 11:45:10', '2017-05-29 11:45:10'),
(4, 9, 1, 4, 'Imao priliku dvije godine raditi za Infinum. Više sam nego zadovoljan okruženjem a i osobnim napretkom u to vrijeme. Doduše, uglavnom su stavovi o Infinumu vrlo polarizirani i oprečni, nisam siguran zašto. Meni je bilo vrlo dobro :)', '2017-05-29 11:47:26', '2017-05-29 11:47:26'),
(5, 10, 3, 5, 'Odlična tvrtka, interesantan i "drugačiji" tim, mogućnost napretka. Zaista nemate što više tražiti.', '2017-05-29 11:51:47', '2017-05-29 11:51:47'),
(6, 10, 1, 4, 'Radio sam na nekoliko manjih projekata u spomenutoj firmi kao senior developer. Okruženje je zaista dobro, oprema također, međutim kvaliteta napisanog koda bi mogla biti i bolja.', '2017-05-29 11:53:48', '2017-05-29 11:53:48'),
(7, 2, 10, 5, 'Kolega, zaista ste se iskazali te Vam zahvaljujemo što ste odabrali nas za svojeg poslodavca. Žao nam je što ste bili prisiljeni otići, no ovim putem želimo poručiti ostalim poslodavcima da odabirom Vas zasigurno neće pogriješiti.', '2017-05-29 11:58:02', '2017-05-29 11:58:02'),
(8, 11, 9, 5, 'Kolega je u nas radio na jednom od većih projekata te je uvelike doprinuo njegovom razvoju.', '2017-05-29 12:03:08', '2017-05-29 12:03:08'),
(9, 11, 8, 2, 'Uvaženog gospodina smo zaposlili na kraće vrijeme prošlo ljeto, te se nadamo da je poradio na svojim sposobnostima i stavu kojeg bi nerijetko zauzimao prema svojim kolegama. Pozdrav!', '2017-05-29 12:04:50', '2017-05-29 12:04:50'),
(10, 12, 11, 5, 'Dobra tvrtka, dobar tim, dobra plaća.', '2017-05-29 12:10:01', '2017-05-29 12:10:01'),
(11, 12, 2, 5, 'Radio sam za kolege u njihovoj poslovnici u Zagrebu. Mogu odgovorno reći da usprkos manjem broju zaposlenika i ostvarenog prihoda u odnosu na odijel u Zagrebu ne zaostaju ni u kojem smislu.', '2017-05-29 12:11:57', '2017-05-29 12:11:57'),
(12, 12, 5, 4, 'Radio sam za kolege prethodno ljeto. Dobro su se odnosili prema meni, međutim volio bih kad bi radno vrijeme bilo fleksibilnije. Inače sam zadovoljan. Pozdrav!', '2017-05-29 12:12:55', '2017-05-29 12:12:55'),
(13, 12, 3, 5, 'Čim sam došao, dobio sam kao službeni uređaj najnoviji Dellov XPS 13. Zaista sam bio iznenađen.', '2017-05-29 12:14:22', '2017-05-29 12:14:22'),
(14, 12, 1, 3, 'Za moj ukus, atmosfera je preopuštena. Svjestan sam da to može zvučati smješno, no ponekad bih volio da se poslu pristupa ozbiljnije.', '2017-05-29 12:15:41', '2017-05-29 12:15:41'),
(15, 1, 12, 5, 'Izrazito smo zadovoljni sa kolegom, naročito sa činjenicom da je toliko samostalan da mu je dovoljno reći što se od njega zahtijeva, te rezultat uvijek bude prezentiran u dogovorenom roku i obliku. Samo naprijed!', '2017-05-29 12:17:54', '2017-05-29 12:17:54'),
(16, 1, 9, 5, 'Ne dozvolite da vas kolegin sarkastični profil zavara. U nas je radio na nekolicini projekata te sa zaista svaki put iskazao u najboljem svjetlu.', '2017-05-29 12:19:20', '2017-05-29 12:19:20'),
(17, 1, 8, 3, 'Kolega nije nimalo kao itko sa kim smo dosad imali priliku raditi. Sposoban je, međutim ponekad mu fali malo volje. Ne dajte se obeshrabriti!', '2017-05-29 12:21:35', '2017-05-29 12:21:35'),
(18, 2, 12, 5, 'Kolege iz Infinuma se nisu mogli bolje izraziti. Potpisujemo sve!', '2017-05-29 12:22:47', '2017-05-29 12:22:47'),
(19, 13, 10, 4, 'Kolega je jako dobar u onome što radi. Nadamo se da će te se po povratku u Hrvatsku vratiti na staro mjesto. Čekamo vas!', '2017-05-29 12:38:59', '2017-05-29 12:38:59'),
(20, 6, 7, 4, 'Kolega je odgovoran, iskusan i zna što radi. Nama je pomogao, nadamo se da će jednom i vama. Pozdrav!', '2017-05-29 12:40:12', '2017-05-29 12:40:12'),
(21, 12, 13, 5, 'Po mojoj skromnoj procjeni jedna od boljih tvrtki u Lijepoj Našoj koja se bavi razvojem mobilnih aplikacija. Nažalost, imao sam priliku za njih raditi samo na jednom projektu, međutim zaista se nadam da će mi se opet otvoriti ta vrata. Srdačan pozdrav!', '2017-05-29 12:55:48', '2017-05-29 12:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ruby on Rails', '2017-05-29 10:53:29', '2017-05-29 10:53:29'),
(2, 'Swift', '2017-05-29 10:58:06', '2017-05-29 10:58:06'),
(3, 'XCode', '2017-05-29 10:58:06', '2017-05-29 10:58:06'),
(4, 'Java', '2017-05-29 11:04:26', '2017-05-29 11:04:26'),
(5, 'Android Studio', '2017-05-29 11:04:26', '2017-05-29 11:04:26'),
(6, 'C', '2017-05-29 11:04:26', '2017-05-29 11:04:26'),
(7, 'Matlab', '2017-05-29 11:12:57', '2017-05-29 11:12:57'),
(8, 'VHDL', '2017-05-29 11:12:57', '2017-05-29 11:12:57'),
(9, 'JavaScript', '2017-05-29 11:16:30', '2017-05-29 11:16:30'),
(10, 'Node.js', '2017-05-29 11:16:30', '2017-05-29 11:16:30'),
(11, 'Angular', '2017-05-29 11:16:30', '2017-05-29 11:16:30'),
(12, 'PHP', '2017-05-29 11:21:13', '2017-05-29 11:21:13'),
(13, 'Laravel', '2017-05-29 11:21:13', '2017-05-29 11:21:13'),
(14, 'Wireshark', '2017-05-29 11:28:33', '2017-05-29 11:28:33'),
(15, 'JQuery', '2017-05-29 12:37:12', '2017-05-29 12:37:12'),
(16, 'ReactJS', '2017-05-29 12:37:12', '2017-05-29 12:37:12'),
(17, 'Angular2', '2017-05-29 12:37:12', '2017-05-29 12:37:12'),
(18, 'Power Wizard', '2017-05-29 12:48:16', '2017-05-29 12:48:16'),
(19, 'MySQL', '2017-05-29 13:42:37', '2017-05-29 13:42:37'),
(20, 'MariaDB', '2017-05-29 13:42:37', '2017-05-29 13:42:37'),
(21, 'SQLite', '2017-05-29 13:42:37', '2017-05-29 13:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `towns`
--

CREATE TABLE `towns` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `towns`
--

INSERT INTO `towns` (`id`, `created_at`, `updated_at`) VALUES
('Zagreb', '2017-05-29 10:51:49', '2017-05-29 10:51:49'),
('Split', '2017-05-29 10:55:38', '2017-05-29 10:55:38'),
('Osijek', '2017-05-29 11:08:37', '2017-05-29 11:08:37'),
('Rijeka', '2017-05-29 11:19:27', '2017-05-29 11:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `usertype`, `town_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'singletonlabs@example.com', '$2y$10$mR/T40B.qQqcz.kFI5dha.Jv93wJfSuDrcl8QfWsQTDCaOdCdcxQm', 'employer', 'Zagreb', 'IBFmK5dPNuQAUYzOmR3mp5lXS6Gd8VY0lyRmtE5PgyOKseVyUfSxBVppWwkp', '2017-05-29 10:51:49', '2017-05-29 10:51:49'),
(2, 'optimized@example.com', '$2y$10$sEeJl6v6hVb/MlbQEHtSPu7WUjy4suRCYICngP21dOjvxbhbZaHy2', 'employer', 'Split', 'NfymFZ5KO4O5B57ZF2EvXIu5WdjXeAGAKU2ItxCdg6uVhh7mdXdpmHuSgp2Q', '2017-05-29 10:55:39', '2017-05-29 10:55:39'),
(3, 'droiddevs@example.com', '$2y$10$ys3AkR2pVWf9L3tp7.qBJO3eK3iymK5bJcyKyCvbLoUhLMqMG.tRy', 'employer', 'Zagreb', 'VjaKdl3ycINIBZ264urVc1GMe5tq7sJxQ3NiRfaaFYGQvRxkVgIletMJNIXp', '2017-05-29 11:00:57', '2017-05-29 11:00:57'),
(4, 'c170779@mvrht.net', '$2y$10$vpSyBzqdXloSnr7P3.4GC..DYFzNi0d9mglGYFfdjxjiL..9QEWRe', 'employer', 'Osijek', '7Z3SldaKAtPJf5NKml4dHZEABWwTvo5efRb0fzynP46xYX1GrhKz4196plG2', '2017-05-29 11:08:37', '2017-05-29 11:08:37'),
(5, 'codeexpert@example.com', '$2y$10$nVP3iqYkHKIY8/ikW4SbFuZKQBVlYfZxBI5Rtw9b.v9hqc4WT03vC', 'employer', 'Rijeka', 'AzS7fxcnlE2D0MhDvcor0qKbIllDzq6bUd4uScfTMvzC83yudlKCQ4iiaQzR', '2017-05-29 11:19:28', '2017-05-29 11:19:28'),
(6, 'edison@mvrht.net', '$2y$10$4aX7TwHVw/n5AF7Ems9DBOxgJrZ.VooCfpayDhn0RTF06Frfor4Bq', 'employer', 'Split', '9l57XffXtCjNYcvIzgZsaydvhhy0XwTNO642RB5R9g15kC2GfuomzYxjxChS', '2017-05-29 11:26:11', '2017-05-29 11:26:11'),
(7, 'hgwxqkcv.l4e@20mm.eu', '$2y$10$zvRBIAARz3CbQMNypHJb.Om/WNK1C0j3UIUmSjO9OJVC2HtCvBM9y', 'employee', 'Split', '3BMVvxpDKyKwCWz9iOG4lYA0wAumBqniZWSEoFaaW6AFHenpZarnmnmD4i2n', '2017-05-29 11:31:13', '2017-05-29 11:31:13'),
(8, 'lijenko@example.com', '$2y$10$0dg9WRPMM09LLTpeX858L.HeGLjydudazeYgCt82gaZxVgmfhgWgK', 'employee', 'Zagreb', '9fL18QarMaXvSUMfAo1SsrFfQdhnX6RmRCw2UW5ooegyMY4KR1B4IOponG1h', '2017-05-29 11:37:43', '2017-05-29 11:37:43'),
(9, 'umisljenko@example.com', '$2y$10$dTNdx38b7s8e2GzFqPBlhebEufoPfjy.ycRzjL4vVKqK4u83ABarS', 'employee', 'Zagreb', '8l43gqmcnDdgnFqwcYwd3UEzBviwFILrJU1AUHdmK35ahZvOxPLU9fe4f14B', '2017-05-29 11:42:03', '2017-05-29 11:42:03'),
(10, 'mobilko@example.com', '$2y$10$it0A3aJqv4IAWbfyvz0Q7OQOZ8l9TSPXQOLkEaBYbmF3ro7Fct4rm', 'employee', 'Zagreb', 'uuXISPvTamFIqdefdkS25CuoDtCZYLxtIY4pQXeTEM5HVjj7kJNrmaLbOXNw', '2017-05-29 11:49:34', '2017-05-29 11:49:34'),
(11, 'workbit@example.com', '$2y$10$4WKZTD/eF.CeKOA3VA6QKuDhvSQ6niwGLBEGMfJfazkWZXnXrd0CS', 'employer', 'Zagreb', 'HgK7gdddKicDfUKN54Pf2mpMhfaGpvU2TdgcQm1loysYvcANKEhIgJacfKvF', '2017-05-29 12:00:01', '2017-05-29 12:00:01'),
(12, 'javko@example.com', '$2y$10$HL3HCfjmge6us6UQMz2t6.AfP6PfS9ZwyLlccg9h5TfIzecrnNYn6', 'employee', 'Zagreb', '93mqwvkgk1oCGFWgXNXVsJIPGIIXvOiXHrqjFVbYHolGwz0OsW25bT2RuPcY', '2017-05-29 12:08:41', '2017-05-29 12:08:41'),
(13, 'typedef@example.com', '$2y$10$Ko9syBlSpgNBVtkW2Cr4pugJDdmTwzO2on2CvVfYGtU6UjyepwdHS', 'employer', 'Zagreb', 'dygibqaP4vaWo03O73X4tHgcOoATRmcSzi5aRD0cSPYJWiaGfEzJTNxBjuRn', '2017-05-29 12:34:05', '2017-05-29 12:34:05'),
(14, 'nanosolutions@20mail.eu', '$2y$10$y0qOJBbU2wjO6egJlly8/.IKWXNgqtvF4nZ2x3T4q7ameQKo573Yi', 'employer', 'Zagreb', 'XyTytxXur1cHo1JyLoxheZ5HyWhXi2s1ddEJk2Y23eZ3FOqa0mQIF4mid8KI', '2017-05-29 13:34:30', '2017-05-29 13:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_jobtype_id_foreign` (`jobtype_id`);

--
-- Indexes for table `employee_language`
--
ALTER TABLE `employee_language`
  ADD PRIMARY KEY (`employee_id`,`language_id`),
  ADD KEY `employee_language_language_id_foreign` (`language_id`);

--
-- Indexes for table `employee_skill`
--
ALTER TABLE `employee_skill`
  ADD PRIMARY KEY (`employee_id`,`skill_id`),
  ADD KEY `employee_skill_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employers_jobtype_id_foreign` (`jobtype_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_jobtype_id_foreign` (`jobtype_id`),
  ADD KEY `jobs_employer_id_foreign` (`employer_id`);

--
-- Indexes for table `jobtypes`
--
ALTER TABLE `jobtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_language`
--
ALTER TABLE `job_language`
  ADD PRIMARY KEY (`job_id`,`language_id`),
  ADD KEY `job_language_language_id_foreign` (`language_id`);

--
-- Indexes for table `job_skill`
--
ALTER TABLE `job_skill`
  ADD PRIMARY KEY (`job_id`,`skill_id`),
  ADD KEY `job_skill_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_name_unique` (`name`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_name_unique` (`name`);

--
-- Indexes for table `towns`
--
ALTER TABLE `towns`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jobtypes`
--
ALTER TABLE `jobtypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
