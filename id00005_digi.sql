-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Gegenereerd op: 06 jan 2016 om 13:52
-- Serverversie: 5.5.44-cll-lve
-- PHP-versie: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id00005_digi`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `attendees`
--

CREATE TABLE `attendees` (
  `id` int(10) UNSIGNED NOT NULL,
  `voornaam` text NOT NULL,
  `achternaam` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `ref` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `attendees`
--

INSERT INTO `attendees` (`id`, `voornaam`, `achternaam`, `email`, `ref`, `created_at`, `updated_at`) VALUES
(3, 'WOuter', 'Rikkerink', 'wouter@styleshift.nl', '', '2015-11-09 18:58:52', '2015-12-03 19:36:41'),
(8, 'Hil', 'Meijerink', 'emmen@qjobs.nl', 'mcml2', '2015-11-10 16:40:09', '2015-12-02 10:35:21'),
(9, 'Katinka', 'Hamming', 'klhamming@gmail.com', 'mcml2', '2015-11-10 17:47:30', '2015-12-02 10:43:30'),
(10, 'Peter', 'Groen', 'peterwgroen@solcon.nl', '', '2015-11-10 17:51:28', '2015-11-13 11:04:59'),
(11, 'Frans', 'Kluijtmans', 'contactus@enjoy-forever.nl', '', '2015-11-10 17:54:27', '2015-11-13 11:04:59'),
(12, 'Fokke', 'Hoogterp', 'fokke@fokkehoogterp.nl', '', '2015-11-10 18:15:16', '2015-11-13 11:04:59'),
(13, 'Marielle', 'De leeuw', 'marielledeleeuw@gmail.com', '', '2015-11-10 18:21:18', '2015-11-13 11:04:59'),
(14, 'Judith', 'Hompe', 'judith@lavievirtueel.nl', '', '2015-11-10 18:27:14', '2015-11-13 11:04:59'),
(15, 'Frans', 'de Kerf', 'dekerf@home.nl', '', '2015-11-10 18:58:14', '2015-11-13 11:04:59'),
(16, 'Selim', 'Karaman', 'info@foodnu.nl', '', '2015-11-10 18:59:15', '2015-11-13 11:04:59'),
(17, 'Barlina', 'Meulman', 'bmeulman11@gmail.com', '', '2015-11-10 19:03:49', '2015-11-13 11:04:59'),
(18, 'Tjeerd', 'Derkink', 'done@tjeerdderkink.com', '', '2015-11-10 19:07:12', '2015-11-13 11:04:59'),
(19, 'Jody', 'Simons', 'info@totalexercise.nl', '', '2015-11-10 20:01:32', '2015-11-13 11:04:59'),
(20, 'Martine', 'Floor', 'martine@mbee.nl', '', '2015-11-10 20:13:05', '2015-11-13 11:04:59'),
(21, 'Marc', 'Bijl', 'newoceans@icloud.com', '', '2015-11-10 20:37:19', '2015-11-13 11:04:59'),
(22, 'Theo', 'Splinter', 'info@pcs-neurofeedback.nl', '', '2015-11-10 21:19:28', '2015-12-01 17:07:36'),
(23, 'René', 'Taling', 'r.taling1@upcmail.nl', 'mcml2', '2015-11-10 21:47:53', '2015-12-02 11:32:10'),
(24, 'Jaap', 'Witte', 'info@witteborg.nl', '', '2015-11-11 06:50:16', '2015-11-13 11:04:59'),
(25, 'Minh', 'Vu', 'ashmindo@hotmail.com', '', '2015-11-11 06:59:40', '2015-11-13 11:04:59'),
(26, 'Simone', 'Schaap', 'Simonevira.schaap@gmail.com', '', '2015-11-11 07:18:46', '2015-11-13 11:04:59'),
(27, 'Iris', 'Laser', 'iris.laser@treatwell.nl', '', '2015-11-11 08:00:41', '2015-11-13 11:04:59'),
(28, 'Marry', 'van Veen', 'marryvanveen@gmail.com', '', '2015-11-11 08:04:33', '2015-11-13 11:04:59'),
(29, 'Parsifal', 'asdf', 'p.tritsch@gmail.com', '', '2015-11-11 08:46:32', '2015-11-13 11:04:59'),
(30, 'Frans', 'Heijne', 'fheijne@gmail.com', '', '2015-11-11 09:02:27', '2015-11-13 11:04:59'),
(31, 'Danielle', 'Beijer', 'albomax1@icloud.com', '', '2015-11-11 09:08:28', '2015-11-13 11:04:59'),
(32, 'Josip', 'Pezer', 'j.pezer@succesgids.nl', '', '2015-11-11 09:21:52', '2015-11-13 11:04:59'),
(33, 'Suzanne', 'VW', 'nf@greenscope.nl', '', '2015-11-11 09:24:24', '2015-11-13 11:04:59'),
(34, 'Mathijs', 'Bos', 'info@mathijsbos.nl', '', '2015-11-11 10:04:55', '2015-11-13 11:04:59'),
(35, 'Renate', 'Lambrix', 'renatevdz@hotmail.com', '', '2015-11-11 10:31:31', '2015-11-13 11:04:59'),
(36, 'Bonny', 'de Git', 'bonnydegit@gmail.com', '', '2015-11-11 11:58:39', '2015-11-13 11:04:59'),
(37, 'Merle', 'Degreef', 'merledeg@hotmail.com', '', '2015-11-11 12:06:48', '2015-11-13 11:04:59'),
(38, 'Petra', 'Boelens', 'petraboelens@planet.nl', '', '2015-11-11 13:28:11', '2015-11-13 11:04:59'),
(39, 'Jaldhara', 'Groeneveld', 'briantenjaldhara@gmail.com', '', '2015-11-11 13:48:08', '2015-11-13 11:04:59'),
(40, 'Yfke', 'Metz', 'yfke@liefkemagazine.nl', '', '2015-11-11 14:07:19', '2015-11-13 11:04:59'),
(41, 'Steve', 'Verelst', 'steve.smartoffice@gmail.com', '', '2015-11-11 14:10:29', '2015-11-13 11:04:59'),
(42, 'Marleen', 'Kulk', 'info@marleenkulk.nl', 'mcml3', '2015-11-11 14:19:16', '2015-12-04 09:24:40'),
(43, 'Sandra', 'Alblas', 'info@virtusan.nl', '', '2015-11-11 14:27:35', '2015-11-13 11:04:59'),
(44, 'Myrthe', 'Johansen', 'jelamy@hotmail.com', '', '2015-11-11 15:36:06', '2015-11-13 11:04:59'),
(45, 'Robert', 'Luimes', 'luimes@hotmail.de', '', '2015-11-11 20:04:00', '2015-11-13 11:04:59'),
(46, 'Mariska', 'Booda', 'info@woordenzin.nl', '', '2015-11-11 20:33:18', '2015-11-13 11:04:59'),
(47, 'Suzanne', 'van Woerkom', 'info@hsmlifecoaching.nl', '', '2015-11-11 22:19:39', '2015-11-13 11:04:59'),
(48, 'Bernadette', 'Ann', 'subshines4dette@hotmail.com', '', '2015-11-11 23:32:26', '2015-11-13 11:04:59'),
(49, 'Dineke', 'Kuilder', 'info@mediationtwenterand.nl', '', '2015-11-12 08:23:19', '2015-11-13 11:04:59'),
(50, 'Bob', 'Koning', 'b.koning@two-o.com', '', '2015-11-12 09:29:58', '2015-11-13 11:04:59'),
(51, 'Jurgen', 'Van Daal', 'info@tegelhuijs.nl', '', '2015-11-12 09:51:53', '2015-11-13 11:04:59'),
(52, 'nicole', 'smit', 'n.smit@quicknet.nl', '', '2015-11-12 11:33:50', '2015-11-18 18:21:29'),
(53, 'Mark', 'Peeters', 'info@heroictales.nl', '', '2015-11-12 14:17:11', '2015-11-13 11:04:59'),
(54, 'michael', 'kogelman', 'info@trouwringenvoordeel.nl', 'mcml3', '2015-11-12 17:23:36', '2015-12-04 09:17:34'),
(55, 'Amanda', 'van Stam', 'amandavanstam@hotmail.com', '', '2015-11-12 19:47:54', '2015-11-13 11:04:59'),
(56, 'Iris', 'Portier', 'irisportier@gmail.com', '', '2015-11-12 20:56:26', '2015-11-13 11:04:59'),
(57, 'Lesley', 'Meuwese', 'lesley.meuwese@hotmail.com', '', '2015-11-12 21:55:46', '2015-11-13 11:04:59'),
(58, 'Tamara', 'Schroder', 'info@believeintamarafashion.nl', '', '2015-11-13 07:37:17', '2015-11-13 11:04:59'),
(59, 'Peggy', 'Sloote', 'peggy-79@hotmail.com', '', '2015-11-13 08:55:48', '2015-11-13 11:04:59'),
(60, 'Jody', 'Bakker', 'jody@jlb-agency.com', '', '2015-11-13 09:29:05', '2015-11-13 11:04:59'),
(61, 'Peter', 'Groen', 'peterwgroen@solcon.nl', '', '2015-11-13 10:12:36', '2015-11-13 11:04:59'),
(62, 'Hein', 'Oderkerk', 'elly@hartforher.nl', '', '2015-11-13 10:46:05', '2015-11-13 11:04:59'),
(65, 'Jan ', 'Booiman', 'jbooiman@home.nl', '', '2015-11-13 12:25:32', '2015-11-13 12:25:32'),
(66, 'Anne', 'Jellema', 'anne.jellema@cstrong.nl', '', '2015-11-13 15:20:42', '2015-11-13 15:20:42'),
(67, 'Els', 'Brouwer', 'e-brouwer@planet.nl', '', '2015-11-13 16:08:37', '2015-11-13 16:08:37'),
(68, 'Wil', 'Brand', 'wmpc.brand@gmail.com', '', '2015-11-13 16:34:58', '2015-12-01 16:24:55'),
(69, 'Annet', 'van Prooijen', 'a.prooijen@kpnplanet.nl', '', '2015-11-13 17:38:28', '2015-11-13 17:38:28'),
(70, 'Sonja', 'Paul', 'sonja-01@live.nk', '', '2015-11-13 19:10:49', '2015-11-13 19:10:49'),
(71, 'Sonja', 'Paul', 'sonja-01@live.nl', '', '2015-11-13 19:11:39', '2015-11-13 19:11:39'),
(72, 'Amanda', 'V Rijssen', 'atvanrijssen@gmail.com', '', '2015-11-13 21:04:05', '2015-11-13 21:04:05'),
(73, 'Hidde', 'De vries', 'hidde32@gmail.com', '', '2015-11-14 08:30:45', '2015-11-14 08:30:45'),
(74, 'Rob', 'Marrevee', 'info@robmarrevee.nl', '', '2015-11-14 08:33:15', '2015-11-14 08:33:15'),
(75, 'Wim', 'Gaalman', 'wgaalman@gmail.com', 'MCml3', '2015-11-14 09:24:52', '2015-11-18 17:25:16'),
(76, 'Corine', 'Bos', 'corine5@xs4all.nl', 'MCml', '2015-11-14 09:30:26', '2015-11-14 09:30:26'),
(77, 'Jacqueline', 'appel', 'info@kicoja.nl', 'MCml', '2015-11-14 10:51:22', '2015-11-14 10:51:22'),
(78, 'Hanneke', 'van Kammen', 'hanvank@gmail.com', 'MCml', '2015-11-14 12:25:03', '2015-11-14 12:25:03'),
(79, 'coen', 'koert', 'coenietje@hotmail.com', 'mcml2', '2015-11-14 12:38:10', '2015-12-02 10:55:42'),
(80, 'lesley', 'meuwese', 'lesley.meuwese@hotmail.nl', '', '2015-11-14 14:20:22', '2015-11-14 14:20:22'),
(81, 'Sandra', 'Banse', 'info@totaalbalans.net', '', '2015-11-14 15:01:53', '2015-11-14 15:01:53'),
(82, 'Diana', 'Oome', 'hetbezigebijtje@hotmail.com', '', '2015-11-14 15:09:55', '2015-11-14 15:09:55'),
(83, 'Joost', 'Van der Helden ', 'joostvanderhelden@hotmail.com', '', '2015-11-14 15:46:31', '2015-11-14 15:46:31'),
(84, 'Astrid', 'Zwetsloot', 'astrid_zwetsloot@hotmail.com', 'mcml2', '2015-11-14 16:14:16', '2015-12-02 11:52:09'),
(85, 'Widia', 'de Jong-Baldewsing', 'stecwf@Gmail.com', '', '2015-11-14 18:36:22', '2015-11-14 18:36:22'),
(86, 'Veronika', 'Rutten', 'info@squffbags.com', '', '2015-11-14 18:45:23', '2015-11-14 18:45:23'),
(87, 'Edwin', 'Weevers', 'edweev@gmail.com', '', '2015-11-14 19:05:11', '2015-11-14 19:05:11'),
(88, 'Marcel', 'Klein Breteler', 'mkb@ovatio.nl', 'MCml', '2015-11-14 20:59:56', '2015-11-14 20:59:56'),
(89, 'Renate', 'Winkel', 'renate.winkel@live.nl', '', '2015-11-14 21:02:13', '2015-11-14 21:02:13'),
(90, 'Jean-Pierre', 'Timmermans', 'jean-pierre@poemaraw.nl', '', '2015-11-14 21:12:15', '2015-11-14 21:12:15'),
(91, 'Cor', 'van Laar', 'info@modemanagement.nl', '', '2015-11-14 21:45:35', '2015-11-14 21:45:35'),
(92, 'Michelle', 'Rozenhart', 'michelle@michellerozenhart.nl', '', '2015-11-14 23:09:56', '2015-11-14 23:09:56'),
(93, 'Michelle', 'Rozenhart', 'michellerozenhart@gmail.com', '', '2015-11-14 23:11:49', '2015-11-14 23:11:49'),
(94, 'Benny', 'Tielen', 'benny.tielen1@telenet.be', '', '2015-11-15 08:03:28', '2015-11-15 08:03:28'),
(95, 'Urias', 'Rahakbauw', 'urias.online@gmail.com', '', '2015-11-15 09:04:19', '2015-11-15 09:04:19'),
(96, 'Mariette', 'Dekroon', 'mariette@kiflow.nl', '', '2015-11-15 09:20:45', '2015-11-15 09:20:45'),
(97, 'Laurens', 'van Heter', 'laurens_van_heteren@hotmail.com', '', '2015-11-15 10:30:03', '2015-11-15 10:30:03'),
(98, 'Hein', 'Oderkerk', 'hein.oderkerk@gmail.com', 'MCml', '2015-11-15 15:50:33', '2015-11-15 15:50:33'),
(99, 'Rob', 'Tolhuijsen', 'robtolhuijsen@gmail.com', 'MCml', '2015-11-15 16:30:51', '2015-11-15 16:30:51'),
(100, 'Marcel', 'Wiegerinck', 'marcelwiegerinck@gmail.com', '', '2015-11-15 18:25:56', '2015-11-15 18:25:56'),
(101, 'Pieter', 'Huisman ', 'phu@elpee.net', '', '2015-11-15 18:32:37', '2015-12-02 05:51:14'),
(102, 'Gerjo', 'Baartman', 'gerjo@coffeetainment.nl', 'MCml', '2015-11-15 19:22:59', '2015-11-15 19:22:59'),
(103, 'Irene', 'van den Oever', 'irene.vandenoever@gmail.com', '', '2015-11-15 19:23:42', '2015-11-15 19:23:42'),
(104, 'mj', 'bakker', 'mjbakker@quicknet.nl', 'mcml2', '2015-11-15 21:25:54', '2015-12-02 11:28:37'),
(105, 'tijs', 'jagers', 'tijs@flaxwax.com', '', '2015-11-15 21:29:50', '2015-11-15 21:29:50'),
(106, 'Isabelle ', 'De Wit', 'iesje55@hotmail.com', '', '2015-11-15 22:48:23', '2015-11-15 22:48:23'),
(107, 'Marleen', 'van der Put', 'marleen@ves.nl', 'herhaling', '2015-11-15 23:08:48', '2015-12-14 15:56:22'),
(108, 'Glenn', 'Tielen', 'glenn_tielen@hotmail.com', 'hp_u', '2015-11-16 05:33:49', '2015-11-16 05:33:49'),
(109, 'Margaretha', 'Koops', 'maragrethamore@gmail.com', '', '2015-11-16 07:52:33', '2015-11-16 07:52:33'),
(110, 'Margriet', 'Euverman', 'sawima@live.nl', '', '2015-11-16 07:54:29', '2015-11-16 07:54:29'),
(111, 'Wilma', 'van der Laan', 'wilmavanderlaan@castagne.nl', '', '2015-11-16 08:10:01', '2015-11-16 08:10:01'),
(112, 'Miquel', 'van Duin', 'miqueldelano@hotmail.com', 'MCml', '2015-11-16 09:03:56', '2015-11-16 09:03:56'),
(114, 'saskia', 'bussink', 'saskiabussink@yahoo.com', 'MCml', '2015-11-16 09:38:02', '2015-11-16 09:38:02'),
(118, 'AE', 'Kruska', 'akruska@gmail.com', '', '2015-11-16 11:59:24', '2015-11-16 11:59:24'),
(119, 'Anette', 'Kouwenberg', 'anettekouwenberg@online.nl', '', '2015-11-16 12:11:26', '2015-11-16 12:11:26'),
(121, 'jeffry', 'van Slijpe', 'jeffry@grashoreca.nl', 'K0Hs', '2015-11-16 15:59:01', '2015-11-16 15:59:01'),
(123, 'Edwin', 'Weevers', 'edweev@zonnet.nl', '', '2015-11-16 18:29:37', '2015-11-16 18:29:37'),
(124, 'filip', 'kook', 'fstyle@live.nl', '', '2015-11-16 18:39:42', '2015-11-16 18:39:42'),
(125, 'Bas', 'Vogel', 'vogelkookt@gmail.vom', 'K0Hs', '2015-11-16 18:39:54', '2015-11-16 18:39:54'),
(126, 'pascal', 'steenhuis', 'pascal@smallwonders.eu', 'K0Hs', '2015-11-16 19:14:23', '2015-11-16 19:14:23'),
(127, 'Rosanne', 'Simons', 'rosannesimons@hotmail.com', '', '2015-11-16 19:38:13', '2015-11-16 19:38:13'),
(128, 'Shanour', 'Moens', 'shanour@lekkersinhuis.nl', 'K0Hs', '2015-11-16 19:58:56', '2015-11-16 19:58:56'),
(129, 'richard', 'prein', 'richard47@hotmail.nl', '', '2015-11-16 20:27:27', '2015-11-16 20:27:27'),
(130, 'Han ', 'Rutten', 'han.rutten@bewegenwerkt.nl', 'K0Hs', '2015-11-16 20:51:24', '2015-11-16 20:51:24'),
(131, 'Jeroen', 'van Anholt', 'jeroen.van.anholt@planet.nl', 'K0Hs', '2015-11-16 22:01:16', '2015-11-16 22:01:16'),
(132, 'Matthieu ', 'van den Assem', 'info@2seasonsbeach.com', 'mcml3', '2015-11-16 23:24:17', '2015-12-04 09:32:31'),
(133, 'eric', 'van ginkel', 'info@gardeblanche.com', 'K0Hs', '2015-11-17 06:58:46', '2015-11-17 06:58:46'),
(134, 'sjaak', 'Borsboom', 'Sborsboom@gmail.com', 'K0Hs', '2015-11-17 07:39:50', '2015-11-17 07:39:50'),
(135, 'Siebrig', 'van Heel', 'suebrig@hotmail.com', '', '2015-11-17 07:53:56', '2015-11-17 07:53:56'),
(136, 'Dorien', 'Beekers', 'info@wereldzaak.com', 'K0Hs', '2015-11-17 08:25:52', '2015-11-17 08:25:52'),
(137, 'Carlo', 'Haan', 'carlo_haan@msn.com', 'MCml3', '2015-11-17 08:34:39', '2015-11-18 14:25:56'),
(138, 'Genia', 'Verstrate', 'geniaverstrate@gmail.com', 'MCml2', '2015-11-17 09:12:43', '2015-11-17 09:12:43'),
(139, 'Marloes', 'Buchholtz', 'info@marloesbuchholtz.nl', '', '2015-11-17 09:37:36', '2015-12-02 21:08:55'),
(140, 'Niña', 'Vw', 'enjoymooi@gmail.com', 'MCml2', '2015-11-17 09:48:13', '2015-11-17 09:48:13'),
(141, 'Pascal', 'Tjong A Hung', 'ptjongahung@jacanaresort.com', '', '2015-11-17 10:32:39', '2015-11-17 10:32:39'),
(142, 'Harm', 'Hesselink', 'info@planning4u.nl', 'mcml2', '2015-11-17 10:44:45', '2015-12-02 18:06:06'),
(143, 'Dj', 'Dj', 'd.mokhtar@chello.nl', 'MCml2', '2015-11-17 11:07:06', '2015-11-17 11:07:06'),
(144, 'Linda', 'Schlosser', 'info@lisch-bikes.nl', '', '2015-11-17 11:09:31', '2015-11-17 11:09:31'),
(145, 'Hans', 'van Hasselt', 'hjvhasselt@kpnmail.nl', 'MCml2', '2015-11-17 14:59:08', '2015-11-17 14:59:08'),
(146, 'Felice', 'Bachofner', 'fbach@casema.nl', '', '2015-11-17 17:16:19', '2015-11-17 17:16:19'),
(147, 'Ania ', 'Wegorska ', 'aniadivers@gmail.com', '', '2015-11-17 20:36:03', '2015-11-17 20:36:03'),
(148, 'Cleopatr', 'Thijm', 'cleopatrathijm@gmail.com', 'MCml2', '2015-11-17 21:36:17', '2015-11-17 21:36:17'),
(149, 'Gerdy', 'Rijnbeek', 'gerdy@leidraad.info', 'mcml2', '2015-11-17 22:58:32', '2015-12-02 12:19:58'),
(151, 'Jeffrey', 'Scholten', 'jscholten84@gmail.com', '', '2015-11-18 10:15:22', '2015-11-18 10:15:22'),
(152, 'jacqueline', 'van den bosch', 'jacqueline.vandenbosch@allencarr.nl', 'K0Hs', '2015-11-18 11:55:33', '2015-11-18 12:32:50'),
(153, 'Alex', 'Schulp', 'Alex.schulp@upcmail.nl', '', '2015-11-18 13:39:53', '2015-11-18 13:39:53'),
(154, 'reinder', 'deinum', 'info@vandeinum.nl', 'MCml3', '2015-11-18 14:04:15', '2015-11-18 14:04:15'),
(155, 'leonie', 'zieverink', 'info@crea-beas.nl', 'MCml3', '2015-11-18 14:34:54', '2015-11-18 14:34:54'),
(156, 'Aaltje', 'Leusink', 'info@dekaasbank.nl', 'MCml3', '2015-11-18 14:38:20', '2015-11-18 14:38:20'),
(157, 'Paul', 'ma', 'driver68nl@hotmail.com', 'MCml3', '2015-11-18 15:09:33', '2015-11-18 15:09:33'),
(158, 'Hans', 'Wijnhoff', 'info@haweoutdoor.nl', 'MCml3', '2015-11-18 15:19:52', '2015-11-18 15:19:52'),
(159, 'Ellen', 'Goorhuis', 'ellengoorhui17@hotmail.com', '', '2015-11-18 15:34:55', '2015-11-18 15:34:55'),
(160, 'Jeroen', 'Otto', 'jeroen.otto@zonnet.nl', 'MCml3', '2015-11-18 15:53:29', '2015-11-18 15:53:29'),
(161, 'ton', 'Smits', 'tw~smits@home.nl', '', '2015-11-18 16:05:33', '2015-11-18 16:05:33'),
(162, 'Charlotte', 'van Voorst', 'charlotte6_93@hotmail.com', '', '2015-11-18 16:16:18', '2015-12-04 11:01:01'),
(163, 'jan', 'booiman', 'info@puntslab.nl', 'mcml2', '2015-11-18 16:29:46', '2015-12-02 10:54:44'),
(164, 'Annabelle', 'Hage', 'hage.annabelle@gmail.com', 'MCml3', '2015-11-18 17:15:36', '2015-11-18 17:15:36'),
(165, 'Ewout', 'van Doorn', 'ewout@dbct.nl', 'MCml3', '2015-11-18 17:49:24', '2015-11-18 17:49:24'),
(166, '', '', 'inf0@totalexercise.nl', 'telaataangemeld', '2015-11-18 18:15:39', '2015-11-18 18:15:39'),
(169, 'Rick', 'Mandoeng', 'info@fotorick.nl', 'MCml3', '2015-11-18 18:25:10', '2015-11-18 18:25:10'),
(170, '', '', 'selim_karaman@hotmail.com', 'telaataangemeld', '2015-11-18 18:30:40', '2015-11-18 18:30:40'),
(171, '', '', 'linda@lisch.nl', 'telaataangemeld', '2015-11-18 18:30:43', '2015-11-18 18:30:43'),
(172, '', '', 'sunshines4dette@hotmail.com', 'telaataangemeld', '2015-11-18 18:30:53', '2015-11-18 18:30:53'),
(173, '', '', 'troydemac@hotmail.com', 'telaataangemeld', '2015-11-18 18:31:05', '2015-11-18 18:31:05'),
(174, '', '', 'michelle@michellerozenhart.com', 'telaataangemeld', '2015-11-18 18:31:36', '2015-11-18 18:31:36'),
(175, '', '', 'flanger69@gmail.com', 'telaataangemeld', '2015-11-18 18:48:07', '2015-11-18 18:48:07'),
(176, '', '', 'yennhi@poemaraw.nl', 'telaataangemeld', '2015-11-18 18:53:39', '2015-11-18 18:53:39'),
(177, '', '', 'annettedevries@flp.com', 'telaataangemeld', '2015-11-18 19:58:21', '2015-11-18 19:58:21'),
(178, '', '', 'x@x.com', 'telaataangemeld', '2015-11-18 20:01:46', '2015-11-18 20:01:46'),
(179, 'Paul', 'Heymering ', 'p.e.heymering@gmail.com', 'MCml3', '2015-11-19 07:58:51', '2015-11-19 07:58:51'),
(180, '', '', 'ellengoorhuis17@hotmail.com', 'telaataangemeld', '2015-11-20 15:16:33', '2015-11-20 15:16:33'),
(183, 'Jeroen', 'Venderbosch', 'jeroenvenderbosch@hotmail.com', '7GVWFA', '2015-11-24 13:45:35', '2016-01-06 12:15:58'),
(184, 'Jeroen', 'Venderbosch', 'jeroen@digitusmarketing.nl', '', '2015-11-24 13:46:09', '2016-01-06 13:28:10'),
(185, 'Yoghurt', 'SoSmexy', 'rogier@digitusmarketing.nl', 'herhaling', '2015-11-24 13:53:58', '2015-12-12 15:53:53'),
(186, 'Parsifal', 'Tritsch', 'parsifal@digitusmarketing.nl', 'herhaling', '2015-11-24 14:27:39', '2015-12-12 15:50:06'),
(187, 'Jeroen', 'Venderbosch', 'testing@digitusmarketing.nl', '', '2015-11-24 18:01:41', '2015-12-29 15:36:12'),
(188, 'Harold ', 'Arp ', 'info@voetpunt.nl', '', '2015-11-24 18:55:22', '2015-11-24 18:55:22'),
(189, 'Frans', 'Kluijtmans', 'frans@dekluijtjes.net', '', '2015-11-24 19:52:48', '2015-11-24 19:52:48'),
(190, 'Conchita', 'van Dijk', 'conchita.van.dijk@gmail.com', '', '2015-11-24 20:37:27', '2015-11-24 20:37:27'),
(191, 'GERARD ', 'TRITSCH', 'G.TRITSCH1950@GMAIL.COM', '', '2015-11-24 22:36:53', '2015-11-24 22:36:53'),
(192, 'Maarten', 'Ruisch', 'maartenruisch@gmail.com', '', '2015-11-24 23:02:42', '2015-11-24 23:02:42'),
(193, 'Klaasje', 'Schepers', 'kschepers3@gmail.com', '', '2015-11-25 09:02:44', '2015-11-25 09:02:44'),
(194, 'Szelim', 'Man', 'szelim.man@gmail.com', '', '2015-11-25 20:17:22', '2015-11-25 20:17:22'),
(195, 'Monika ', 'Firmanty ', 'monika@c-log.be', '', '2015-11-25 21:13:38', '2015-11-25 21:13:38'),
(196, 'Patrick', 'Van Riel', 'patvanriel@gmail.com', '', '2015-11-25 21:23:44', '2015-11-25 21:23:44'),
(197, 'Bram', 'Steeman', 'modoromarketing@gmail.com', 'herhaling', '2015-11-25 22:32:02', '2015-12-12 22:17:35'),
(198, 'eddy', 'delmoitie', 'eddy.delmoitie@outlook.com', '', '2015-11-26 10:44:26', '2015-11-26 10:44:26'),
(199, 'Rudy', 'cornelis', 'cornelisrudy@gmail.com', '', '2015-11-26 11:07:35', '2015-11-26 11:07:35'),
(200, 'Gemma', 'Schierbeek', 'gemma@beeldigbeeld.nl', '', '2015-11-26 12:21:06', '2015-11-26 12:21:06'),
(201, 'Chantal', 'Fijnenberg', 'info@madebyc.nl', '', '2015-11-26 13:51:26', '2015-11-26 13:51:26'),
(202, 'Alain', 'Wauters', 'wauters.alain2@telenet.be', '', '2015-11-26 19:43:35', '2015-11-26 19:43:35'),
(203, 'Sandra', 'Bats', 'jjbats@gmail.com', '', '2015-11-26 20:41:38', '2015-11-26 20:41:38'),
(204, 'Luca', 'Cardella', 'luca.cardella1@gmail.com', 'herhaling', '2015-11-26 20:43:20', '2015-12-12 22:18:34'),
(205, 'Geert', 'Van De Velde', 'geert@vd-velde.be', '', '2015-11-27 07:11:07', '2015-11-27 07:11:07'),
(206, 'nicole', 'de bruijn', 'nicole@eaglearch.nl', '', '2015-11-27 07:45:40', '2015-11-27 07:45:40'),
(207, 'Patricia', 'O\'Brien', 'patricia.obrien@checkmarketing.be', '', '2015-11-27 08:19:13', '2015-11-27 08:19:13'),
(208, 'cindy', 'van droogenbroek', 'cindy@media-vision.be', '', '2015-11-27 08:45:13', '2015-11-27 08:45:13'),
(209, 'AB', 'De Vries', 'annebartdevries@gmail.com', '', '2015-11-27 09:27:14', '2015-11-27 09:27:14'),
(210, 'Erwin', 'Koeneman', 'info@earsafety.nl', '', '2015-11-27 09:55:19', '2015-11-27 09:55:19'),
(211, 'Kris', 'Vanhuyse', 'kris@netcrew.be', '', '2015-11-27 13:07:12', '2015-11-27 13:07:12'),
(212, 'Roy', 'Snep', 'sneponline@gmail.com', '', '2015-11-27 17:50:50', '2015-11-27 17:50:50'),
(213, 'dony', 'mechels', 'dony35@msn.com', '', '2015-11-27 18:21:35', '2015-11-27 18:21:35'),
(214, 'Peter ', 'Pijlman', 'info@studiopijlman.nl', '', '2015-11-27 20:34:11', '2015-12-04 07:20:22'),
(215, 'Richard', 'Jeltema', 'r.jeltema@hotmail.nl', '', '2015-11-28 08:54:38', '2015-11-28 08:54:38'),
(216, 'peter', 'schmitz', 'info@techkoop.nl', '', '2015-11-28 10:57:39', '2015-11-28 10:57:39'),
(217, 'Jellle', 'Drijver', 'info+fbwebinardigitusmarketing@megaexposure.nl', '', '2015-11-28 12:40:04', '2015-11-28 12:40:04'),
(218, 'Jeanette', 'Niehof', 'jeanette.niehof@gmail.com', '', '2015-12-01 17:25:32', '2015-12-01 17:25:32'),
(219, 'Rita', 'Lamens', 'rita.lamens@planet.nl', 'herhaling', '2015-12-01 17:26:17', '2015-12-13 18:31:10'),
(220, 'Ellen', 'Guleij', 'ellen.guleij@personaltouchtravel.nl', 'herhaling', '2015-12-01 17:48:31', '2015-12-12 17:57:31'),
(221, 'Carla', 'Bos', 'cabos@live.nl', '', '2015-12-01 18:28:42', '2015-12-01 18:28:42'),
(222, 'Denise', 'Oerlemans', 'info@deniseoerlemans.nl', '', '2015-12-01 19:04:23', '2015-12-01 19:04:23'),
(223, 'Linda', 'Water', 'zeger.sloot@planet.nl', '', '2015-12-01 19:23:44', '2015-12-01 19:23:44'),
(224, 'Judy', 'de Koningh', 'judy.de.koningh@hotmail.com', '', '2015-12-01 21:20:30', '2015-12-01 21:20:30'),
(225, 'Charissa', 'van der Vlies', 'chacha1975@gmail.com', 'herhaling', '2015-12-02 06:57:04', '2015-12-13 07:54:17'),
(226, 'Erna', 'Basten ', 'ebasten23@hotmail.com', '', '2015-12-02 07:39:30', '2015-12-02 07:39:30'),
(227, 'mariella', 'yella', 'mariella.pichotte@gmail.com', '', '2015-12-02 07:56:21', '2015-12-02 07:56:21'),
(228, 'Marita', 'van der Gouw', 'maritavandergouw@gmail.com', '', '2015-12-02 11:21:02', '2015-12-02 11:21:02'),
(229, 'Manon', 'Marges', 'manon.hgvsm@gmail.com', 'mcml2', '2015-12-02 18:53:55', '2015-12-02 18:53:55'),
(230, 'Miquel ', 'Van Duin', 'info@duin-interior.com', '', '2015-12-03 06:35:43', '2015-12-03 06:35:43'),
(231, 'Hanneke ', 'De Boer', 'hannekedeboer65@gmail.com', '', '2015-12-03 07:34:04', '2015-12-03 07:34:04'),
(232, 'Wilbert', 'Boon', 'info@wilbertboon.nl', '', '2015-12-03 07:55:57', '2015-12-03 07:55:57'),
(233, 'Richard', 'Dudkiewicz', 'rdudkiewicz@gmail.com', '', '2015-12-03 10:03:20', '2015-12-03 10:03:20'),
(234, 'Jordy', 'Klein Schaarsberg', 'jordy@contekstcommunicatie.nl', '', '2015-12-03 11:32:47', '2015-12-03 11:32:47'),
(235, 'Wouter', 'Vanhove', 'wouter@verwo.be', '', '2015-12-03 14:39:37', '2015-12-03 14:39:37'),
(236, 'Hannekeq', 'de Jong', 'info@lavieonline.nl', '', '2015-12-03 17:15:54', '2015-12-03 17:15:54'),
(237, 'fijke', 'willemse', 'fijkewillemse@hotmail.com', 'herhaling', '2015-12-03 17:50:03', '2015-12-13 15:42:44'),
(238, 'Joel', 'M.', 'joelmoesker@gmail.com', '', '2015-12-03 17:54:26', '2015-12-03 17:54:26'),
(239, 'steven', 'de jong', 'stevendejong@outlook.com', '', '2015-12-03 20:42:18', '2015-12-03 20:42:18'),
(240, 'Peter ', 'Pijlman', 'pptbpress@hotmail.com', '', '2015-12-04 07:20:13', '2015-12-04 07:20:13'),
(241, 'Annelene', 'Ammerlaan', 'alg.ammerlaan@kpnmail.nl', 'herhaling', '2015-12-04 07:24:10', '2015-12-12 16:47:46'),
(242, 'Peter Paul', 'Both', 'pmboth61@hotmail.com', 'mcml2', '2015-12-04 09:04:52', '2015-12-04 09:04:52'),
(243, 'Anitha', 'Van duin ', 'hartenlucht@gmail.com', 'mcml3', '2015-12-04 09:25:26', '2015-12-04 09:25:26'),
(244, 'Cecille', 'de Jong', 'cgmdejong@gmail.com', 'mcml3', '2015-12-04 09:43:36', '2015-12-04 09:43:36'),
(245, 'Allard', 'Nammensma', 'allard@nammensma.com', 'mcml3', '2015-12-04 09:56:08', '2015-12-04 09:56:08'),
(246, 'mirella', 'Fila Cloosterman', 'mirella@filora.nl', 'mcml3', '2015-12-04 09:59:27', '2015-12-04 09:59:27'),
(247, 'Eelco', 'Nammensma', 'eenamm@gmail.com', '', '2015-12-04 10:22:33', '2015-12-04 10:59:54'),
(248, 'Jody', 'Simons', 'info@totakexercise.nl', 'mcml3', '2015-12-04 10:27:34', '2015-12-04 10:27:34'),
(249, 'lesley ', 'weinberg', 'info@body-perfection.nl', 'mcml3', '2015-12-04 10:45:16', '2015-12-04 10:45:16'),
(250, 'Tom', 'Knol', 'tom@sayyeah.nl', '', '2015-12-04 10:53:11', '2015-12-04 10:53:11'),
(251, '', '', 'h.arp@home.nl', 'telaataangemeld', '2015-12-04 11:00:24', '2015-12-04 11:00:24'),
(252, 'IRis', 'Ulrich', 'irisulrich@hotmail.com', '', '2015-12-04 11:10:13', '2015-12-04 11:10:13'),
(253, 'Hubèr', 'Buijsman', 'info@gezondfit.nl', 'herhaling', '2015-12-04 11:13:56', '2015-12-13 16:13:07'),
(254, '', '', 'michaelkogelman74@gmail.com', 'telaataangemeld', '2015-12-04 11:15:19', '2015-12-04 11:15:19'),
(255, 'Simone', 'Hanegraaff', 'simone@hanegraaff.nl', 'mcml2', '2015-12-04 11:17:12', '2015-12-04 11:17:12'),
(256, 'Tim', 'De Wint', 'timlagestreep01@hotmail.com', '', '2015-12-04 11:27:18', '2015-12-04 11:27:18'),
(257, 'fokke', 'hoogterp', 'fokke@fokkhoogterp.nl', 'mcml3', '2015-12-04 11:29:22', '2015-12-04 11:29:22'),
(258, '', '', 'peterwschmitz@yahoo.com', 'telaataangemeld', '2015-12-04 12:09:27', '2015-12-04 12:09:27'),
(259, '', '', 'ellen.guleij@gmail.com', 'herhaling', '2015-12-12 17:56:55', '2015-12-12 17:56:55');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `attendee_webinar`
--

CREATE TABLE `attendee_webinar` (
  `id` int(10) UNSIGNED NOT NULL,
  `attendee_id` int(10) UNSIGNED NOT NULL,
  `webinar_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `attendee_webinar`
--

INSERT INTO `attendee_webinar` (`id`, `attendee_id`, `webinar_id`) VALUES
(8, 183, 3),
(9, 184, 3),
(10, 185, 3),
(11, 186, 3),
(12, 187, 3),
(13, 188, 3),
(14, 107, 3),
(15, 87, 3),
(16, 189, 3),
(17, 190, 3),
(18, 191, 3),
(19, 192, 3),
(20, 193, 3),
(21, 194, 3),
(22, 195, 3),
(23, 196, 3),
(24, 197, 3),
(25, 198, 3),
(26, 199, 3),
(27, 200, 3),
(28, 201, 3),
(29, 202, 3),
(30, 203, 3),
(31, 204, 3),
(32, 205, 3),
(33, 206, 3),
(34, 207, 3),
(35, 208, 3),
(36, 209, 3),
(37, 210, 3),
(38, 211, 3),
(39, 212, 3),
(40, 213, 3),
(41, 214, 3),
(42, 215, 3),
(43, 216, 3),
(44, 217, 3),
(45, 119, 3),
(46, 16, 3),
(47, 68, 3),
(48, 22, 3),
(49, 218, 3),
(50, 219, 3),
(51, 220, 3),
(52, 221, 3),
(53, 222, 3),
(54, 223, 3),
(55, 224, 3),
(56, 101, 3),
(57, 225, 3),
(58, 226, 3),
(59, 227, 3),
(60, 8, 3),
(61, 9, 3),
(62, 163, 3),
(63, 79, 3),
(64, 228, 3),
(65, 104, 3),
(66, 23, 3),
(67, 84, 3),
(68, 149, 3),
(69, 142, 3),
(70, 229, 3),
(71, 139, 3),
(72, 230, 3),
(73, 231, 3),
(74, 232, 3),
(75, 41, 3),
(76, 80, 3),
(77, 14, 3),
(78, 233, 3),
(79, 234, 3),
(80, 235, 3),
(81, 236, 3),
(82, 237, 3),
(83, 238, 3),
(84, 3, 3),
(85, 239, 3),
(86, 240, 3),
(87, 241, 3),
(88, 242, 3),
(89, 54, 3),
(90, 42, 3),
(91, 243, 3),
(92, 132, 3),
(93, 244, 3),
(94, 245, 3),
(95, 246, 3),
(96, 247, 3),
(97, 248, 3),
(98, 162, 3),
(99, 249, 3),
(100, 250, 3),
(101, 251, 3),
(102, 252, 3),
(103, 253, 3),
(104, 254, 3),
(105, 255, 3),
(106, 256, 3),
(107, 257, 3),
(108, 258, 3),
(109, 183, 3),
(110, 183, 3),
(111, 259, 3),
(112, 184, 4),
(113, 183, 4),
(114, 187, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bedrijfsgegevens`
--

CREATE TABLE `bedrijfsgegevens` (
  `id` int(10) UNSIGNED NOT NULL,
  `bedrijfsnaam` text NOT NULL,
  `aanhef` text NOT NULL,
  `adres` varchar(150) NOT NULL,
  `postcode` varchar(150) NOT NULL,
  `mobiel` text NOT NULL,
  `telefoonnummer` text NOT NULL,
  `woonplaats` text NOT NULL,
  `land` text NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bedrijfsgegevens`
--

INSERT INTO `bedrijfsgegevens` (`id`, `bedrijfsnaam`, `aanhef`, `adres`, `postcode`, `mobiel`, `telefoonnummer`, `woonplaats`, `land`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Talencoach', 'M', 'Kloveniersburgwal 138', '1012 cz', '888', '555', 'Amsterdam', 'NL', 212, '2015-10-21 18:23:43', '2015-10-21 18:23:43'),
(5, 'Enjoy Forever Lifestyle', 'M', 'Graan 33', '6461RB', '0624119507', '0458883904', 'Kerkrade', 'NL', 44, '2015-10-21 18:59:10', '2015-10-21 18:59:10'),
(6, 'Enjoy Forever Lifestyle', 'M', 'Graan 33', '6461RB', '0624119507', '0458883904', 'Kerkrade', 'NL', 44, '2015-10-21 19:00:04', '2015-10-21 19:00:04'),
(8, 'talencoach', 'M', 'kloveniersburgwal ', '1012 CZ', 'aaa', '021 6253231', 'Amsterdam', 'NL', 212, '2015-10-21 19:18:26', '2015-10-21 19:18:26'),
(9, 'Leidraad', 'F', 'Hoge Rijndijk 19', '2382 AA', '0644548489', '071-5767454', 'Zoeterwoude', 'NL', 54, '2015-10-21 19:22:04', '2015-10-21 19:22:04'),
(10, 'Praktijk Icarus', 'F', 'Delftse Jaagpad 37', '2324 AA', '0651481084', '0718852421', 'Leiden', 'NL', 61, '2015-10-21 19:28:04', '2015-10-21 19:28:04'),
(11, 'Praktijk Icarus', 'F', 'Delftse Jaagpad 37', '2324AA', '06481084', '0718852421', 'Leiden', 'NL', 61, '2015-10-21 19:36:50', '2015-10-21 19:36:50'),
(14, 'Massagepraktijk Herma "Lekker in je vel"', 'F', 'Lochemseweg 96', '7217 RJ', '0620451116', '0573459807', 'Harfsen', 'NL', 226, '2015-10-21 20:04:18', '2015-10-21 20:04:18'),
(15, 'Briant & Jaldhara', 'F', 'Gravin Juliana van Stolberglaan 31 / Box D58', '2263AB', '0639495060', '0639495060', 'Leidschendam', 'NL', 240, '2015-10-21 20:10:33', '2015-10-21 20:10:33'),
(16, 'Nog geen bedrijfsnaam', 'F', 'Karel de Grotelaan 25', '5615SP', '06-38411463', '', 'Eindhoven', 'NL', 55, '2015-10-21 20:57:25', '2015-10-21 20:57:25'),
(17, 'BreinVitaal Psychologen', 'M', 'Florijnstr 12', '6532RD', '+31638017652', '+31638017652', 'Nijmegen', 'NL', 209, '2015-10-24 11:46:10', '2015-10-24 11:46:10'),
(18, 'MatriXmethode Instituut', 'F', 'St. Annabrinkstraat 10', '7491XK', '', '06 1252 4110', 'Delden', 'NL', 107, '2015-10-25 20:17:31', '2015-10-25 20:17:31'),
(47, 'Marleen Kulk - Kijk op vormgeving', 'F', 'Valkstraat 17', '7581 EJ', '0636142152', '0636142152', 'Losser', 'NL', 270, '2015-11-18 20:53:05', '2015-11-18 20:53:05'),
(48, 'G.I.D.S bv', 'M', 'Havezatheweg 4', '7596 MT ', '0653-882385', '', 'Rossum', 'NL', 271, '2015-11-18 21:15:02', '2015-11-18 21:15:02'),
(49, 'Marleen Kulk - Kijk op vormgeving', 'F', 'Valkstraat 17', '7581 EJ', '0636142152', '0636142152', 'Losser', 'NL', 270, '2015-11-18 21:42:11', '2015-11-18 21:42:11'),
(65, 'Marckmann', 'M', 'digituscursustraat 1', '7552VV', '+31621469068', '+31621469068', 'Hengelo', 'NL', 276, '2015-11-23 15:40:31', '2015-12-04 10:15:49'),
(67, 'Marckmann', 'M', 'digitustestcursus 1', '7552 JR', '', '', 'Hengelo', 'NL', 4, '2015-11-25 12:45:43', '2015-11-25 12:45:43'),
(75, 'Marckmann', 'M', 'digitustestcursus 1', '7552 JR', '', '', 'Hengelo', 'NL', 278, '2015-11-29 14:11:25', '2015-11-29 14:11:25'),
(76, '', 'M', '', '', '', '', '', 'NL', 279, '2015-12-03 19:57:43', '2015-12-03 19:57:43');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `benodigdheden`
--

CREATE TABLE `benodigdheden` (
  `id` int(10) UNSIGNED NOT NULL,
  `sportschoolnaam` varchar(255) NOT NULL,
  `sportschool_id` int(10) UNSIGNED DEFAULT NULL,
  `aanmeldemail` varchar(250) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `foto4` varchar(255) DEFAULT NULL,
  `foto5` varchar(255) DEFAULT NULL,
  `waaromsportschool` text NOT NULL,
  `teamfoto` varchar(255) DEFAULT NULL,
  `welkomstpagina` text NOT NULL,
  `bedankpagina` text NOT NULL,
  `recensie1_foto` varchar(255) DEFAULT NULL,
  `recensie2_foto` varchar(255) DEFAULT NULL,
  `recensie3_foto` varchar(255) DEFAULT NULL,
  `recensie4_foto` varchar(255) DEFAULT NULL,
  `recensie5_foto` varchar(255) DEFAULT NULL,
  `recensie6_foto` varchar(255) DEFAULT NULL,
  `recensie1_tekst` text,
  `recensie2_tekst` text,
  `recensie3_tekst` text,
  `recensie4_tekst` text,
  `recensie5_tekst` text,
  `recensie6_tekst` text,
  `recensie1_naam` varchar(255) DEFAULT NULL,
  `recensie2_naam` varchar(255) DEFAULT NULL,
  `recensie3_naam` varchar(255) DEFAULT NULL,
  `recensie4_naam` varchar(255) DEFAULT NULL,
  `recensie5_naam` varchar(255) DEFAULT NULL,
  `recensie6_naam` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `benodigdheden`
--

INSERT INTO `benodigdheden` (`id`, `sportschoolnaam`, `sportschool_id`, `aanmeldemail`, `logo`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `waaromsportschool`, `teamfoto`, `welkomstpagina`, `bedankpagina`, `recensie1_foto`, `recensie2_foto`, `recensie3_foto`, `recensie4_foto`, `recensie5_foto`, `recensie6_foto`, `recensie1_tekst`, `recensie2_tekst`, `recensie3_tekst`, `recensie4_tekst`, `recensie5_tekst`, `recensie6_tekst`, `recensie1_naam`, `recensie2_naam`, `recensie3_naam`, `recensie4_naam`, `recensie5_naam`, `recensie6_naam`, `created_at`, `updated_at`) VALUES
(1, 'Digitus Marketing', NULL, '', 'images/tabapps/digitus-marketing/DIGITUS_logo_def.png', 'images/tabapps/digitus-marketing/slides/Bloomsbury_Gym_Highres.jpg', 'images/tabapps/digitus-marketing/slides/fill-in-blank-1.jpg', 'images/tabapps/digitus-marketing/slides/fill-in-blank-2.jpg', 'images/tabapps/digitus-marketing/slides/gym-rowing-machine-exercise.jpeg', 'images/tabapps/digitus-marketing/slides/rest2.jpg', 'putn1\r\npunt2\r\npunt3\r\npunt4\r\npunt5', 'images/tabapps/digitus-marketing/teamfoto/squirrel_zpsedcdfeca.jpg~original.jpg', 'tekst welkomstpagina', 'Tekst bedankpagina', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '2015-05-16 14:10:28', '2015-05-16 14:10:28'),
(4, 'Hart for her', NULL, 'caro@hartforher.nl', 'images/tabapps/hart-for-her/banner.jpg', 'images/tabapps/hart-for-her/slides/JORD20150518-055.jpg', 'images/tabapps/hart-for-her/slides/JORD20150518-068.jpg', 'images/tabapps/hart-for-her/slides/JORD20150518-079.jpg', 'images/tabapps/hart-for-her/slides/JORD20150518-104.jpg', 'images/tabapps/hart-for-her/slides/JORD20150518-127.jpg', '1.	Alleen voor vrouwen\r\n2.	30 minuten workout; efficiënt en effectief\r\n3.	Kleinschalig, waardoor persoonlijk\r\n4.	Centraal en veilig gelegen in Culemborg\r\n5.	Naast trainen om fit en gezond te worden, ook gezelligheid\r\n6.	De apparaten zijn gebruiksvriendelijk en 100% veilig voor de gewrichten; geen spierpijn!\r\n7.	Afwisselend circuit\r\n8.	Binnen komen/trainen wanneer het jou uitkomt', NULL, 'Ervaar het zelf, vraag direct een gratis proefles aan!', 'Bedankt!', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '2015-05-31 12:01:15', '2015-05-31 12:01:15'),
(5, 'Burning Heart', 1, 'info@burning-heart.nl', 'images/tabapps/burning-heart/banner.jpg', 'images/tabapps/burning-heart/slides/slide-1.jpg', 'images/tabapps/burning-heart/slides/slide-2.jpg', 'images/tabapps/burning-heart/slides/slide-3.jpg', 'images/tabapps/burning-heart/slides/slide-6.jpg', 'images/tabapps/burning-heart/slides/slide-8.jpg', 'De familiesportschool van \'t Gooi\r\nDe meest complete Fitness van Hilversum\r\nKickboksen voor iedereen\r\nZak- en Conditietraining\r\nPersonal Training\r\nCrossfight\r\nJudo, The New Gentle Way\r\nMMA, Krav Maga, Boksen\r\nStraatzelfverdediging', NULL, '7 dagen GRATIS alle sporten', 'Bedankt voor je aanvraag!\r\n\r\nLeuk dat je 7 dagen bij ons komt sporten.\r\nWij nemen z.s.m. contact met je op via het opgegeven telefoonnummer of emailadres\r\n\r\nNodig je vrienden uit om ook gratis 7 dagen te komen sporten!', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '2015-06-07 12:44:31', '2015-06-09 08:38:27'),
(6, 'SportZenter', NULL, 'info@sportzenter.nl', 'images/tabapps/sportzenter/banner.png', 'images/tabapps/sportzenter/slides/11038995_290785784379216_6627204754976122262_o.jpg', 'images/tabapps/sportzenter/slides/11049492_290785781045883_2700021458703478555_o.jpg', 'images/tabapps/sportzenter/slides/11053638_290785834379211_8967637131844833996_o.jpg', 'images/tabapps/sportzenter/slides/10999005_290785897712538_1275424138126086922_o.jpg', 'images/tabapps/sportzenter/slides/11011004_290785827712545_6246799653177614561_o.jpg', 'Persoonlijke aandacht,\r\nBeleving,\r\nProfessionele begeleiding,\r\nWellness-faciliteiten,\r\nHygiënische en schone omgeving,\r\nLeuke en gezellige klantenkring,\r\nTotaaladvies m.b.t. voedings- en leefwijze,\r\nAlles op het gebied van bewegen en afslanken onder één dak', 'images/tabapps/sportzenter/teamfoto/groepsfoto2.jpg', 'Probeer binnen één maand alles één keer uit voor een fitter en gezonder leven!', 'Bedankt en tot snel!', NULL, NULL, NULL, NULL, NULL, NULL, 'Onlangs heb ik de knoop doorgehakt en ben ik begonnen bij SportZenter. Dit is voor mij één van de beste keuzes geweest in jaren. Ik krijg er uitstekende begeleiding op het gebied van voeding en het gebruik van de apparatuur. Het trainen met de Milon Cirkel heeft mij in combinatie met meer kennis van voeding in een korte tijd geholpen super resultaten te bereiken. Bovenal is de sfeer ongedwongen, wordt er gelachen en is het gewoon gezellig!', 'Sporten is één van mijn passies en bij SportZenter is alles aanwezig. Bij binnenkomst ervaar ik al de sportieve gezelligheid. Na het sporten nog even ontspannen in de sauna en tot slot een kopje koffie in de huiskamer. Het personeel is deskundig, enthousiast en hulpvaardig. Ik hoop hier nog jaren te kunnen blijven sporten!', 'Gisteren weer een heerlijk avondje Milon gedaan en het voelt werkelijk geweldig! In 35 minuten je hele lichaam trainen en je voelt je er 100% fitter door. En dat in het met afstand mooiste fitnesscentrum van Venray en omstreken. De sfeer is erg goed en ontspannen met een vriendelijk, leuk en gemotiveerd team.', 'Nu wij met pensioen zijn genieten we volop van de mogelijkheden die SportZenter ons biedt. Eerst beginnen met het op peil houden van onze conditie met de Milon Cirkel en de groepslessen en daarna heerlijk ontspannen in de sauna. Het enthousiaste team zorgt voor gezelligheid en vakkundige begeleiding. SportZenter is top en we hebben hier onze draai gevonden!', 'Sinds maart ben ik begonnen met sporten bij SportZenter op de Milon Cirkel en wat ze zeggen is waar: veel meer energie en kracht, fitter en aanzienlijk gewichtsverlies. Het sporten is zo verslavend dat ik nu ook meerdere groepslessen volg. Het is hier heerlijk sporten en je wordt goed begeleid door ervaren trainers. Een echte aanrader! ', '', 'Luc, 30 jaar', 'Annie, 61 jaar', 'Gordon, 43 jaar', 'Jan en Kees, 65 en 63 jaar', 'Christel, 46 jaar', '', '2015-06-08 13:59:01', '2015-06-08 14:08:14'),
(7, 'Healthclub Julien', NULL, 'info@healthclubjulien.nl', 'images/tabapps/healthclub-julien/logo.png', 'images/tabapps/healthclub-julien/slides/slide-1.jpg', 'images/tabapps/healthclub-julien/slides/slide-2.JPG', 'images/tabapps/healthclub-julien/slides/slide-3.jpg', 'images/tabapps/healthclub-julien/slides/slide-4.jpg', 'images/tabapps/healthclub-julien/slides/slide-5.jpg', 'Ruime openingstijden (80 uur open), Ruim aanbod aan activiteiten (+/- 20), ook Outdoor, Hoogtetraining; astma- en diabetesprogramma, vitaliteitsprogramma, Afslankprogramma met bewezen concept, Samenwerkende partners in gezondheid onder één dak, Kinderdagopvang, Groot parkeerterrein met gratis parkeren', 'images/tabapps/healthclub-julien/teamfoto/Over_ons_Header.jpg', 'Maak gratis kennis met Healthclub Juliën!\n\nVraag gratis en vrijblijvend een proefweek aan!', 'Bedankt voor je aanvraag!\n\nLeuk dat je geïnteresseerd bent in Healthclub Juli&euml;n!\n\nWij nemen z.s.m. contact met je op via het opgegeven telefoonnummer en/of email adres.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '2015-06-12 14:58:27', '2015-06-12 14:58:27'),
(10, 'Hart for her Amsterdam Oost', NULL, 'elly@hartforher.nl', 'images/tabapps/hart-for-her-amsterdam-oost/HartForHerlogo_Hoge Resolutie.jpg', 'images/tabapps/hart-for-her-amsterdam-oost/slides/IMAG1958_1.jpg', 'images/tabapps/hart-for-her-amsterdam-oost/slides/VIDEO0107_01_0000006121_1.jpg', 'images/tabapps/hart-for-her-amsterdam-oost/slides/VIDEO0137_05_0000021225_1.jpg', 'images/tabapps/hart-for-her-amsterdam-oost/slides/VIDEO0137_14_-000000001_2_1.jpg', 'images/tabapps/hart-for-her-amsterdam-oost/slides/VIDEO0140_0000018791_1.jpg', 'Alleen voor vrouwen\r\n30 minuten muzikale gezellige workout: efficiënt en effectief\r\nKleinschalig en persoonlijk\r\nDe apparaten zijn gebruiksvriendelijk en 100% veilig voor de gewrichten; geen spierpijn!\r\nAfwisselend, het verveelt nooit\r\nGezellig trainen wanneer het jou uitkomt in een huiselijke sfeer\r\nProfessionele begeleiding met veel persoonlijke aandacht\r\n\r\n', 'images/tabapps/hart-for-her-amsterdam-oost/teamfoto/foto elly.jpg', '(Zie voorbeeld Hart for her Culemborg)\r\n\r\nIn het rondje links boven moet staan:\r\nEvery day \r\nLadies day!\r\n\r\nDe onderstaande tekst willen we ook zo houden:\r\nLichaamsbeweging verhoogt\r\nde kwaliteit van het leven!\r\n\r\nDe button gratis proefles:\r\nWillen we zelf kunnen aanpassen\r\n\r\nBij vraag direct proefles aan, willen wij hebben:\r\nJa, ik profiteer!\r\n\r\n(zie mail van rogier)', '', NULL, NULL, NULL, NULL, NULL, NULL, 'Heel erg bedankt voor de goede en gezellige begeleiding. Door jou ben ik helemaal sportief geworden. Thanks!', 'Vandaag gemeten en jawel.....9 cm kwijt in de buikomvang met de BetterBelly. Top gewoon! Een echte aanrader voor iedereen. ', 'Elke week hier komen is een feest!! Goede begeleiding, gezellige club vrouwen. Ik geniet van deze hart for her.', 'Na het sporten voel ik me fitter voor de hele dag. Ik ben blij dat hart for her in de buurt zit. Geen spiegels, alleen vrouwen en een leuke begeleiding. Wat wil je nog meer?', '4 kilo afgevallen in korte tijd en mijn jurk zit als gegoten. Dankzij de stimulerende woorden van Elly heb ik het volgehouden.', 'Nooit had ik kunnen bedenken dat ik zo enthousiast zou worden over sporten! Vaak heb ik mezelf voorgenomen om thuis aan de gang te gaan, maar helaas dat werkt niet. Nu bij Elly, bij hart for her een manier gevonden om vroeg in de ochtend een paar keer per week flink te bewegen. Al je spieren worden gebruikt en je kunt lekker jezelf zijn. Jong of oud het maakt bij hart for her niet uit, iedereen is welkom!', '', '', '', '', '', '', '2015-07-23 06:47:30', '2015-07-23 06:47:30'),
(11, 'Judith\'s Dance Point', NULL, 'info@danseninweert.nl', 'images/tabapps/judiths-dance-point/banner.png', 'images/tabapps/judiths-dance-point/slides/slide-1.jpg', 'images/tabapps/judiths-dance-point/slides/slide-2.jpg', 'images/tabapps/judiths-dance-point/slides/slide-3.jpg', 'images/tabapps/judiths-dance-point/slides/slide-4.jpg', NULL, 'Professioneel opgeleidde leraren, IDTA gediplomeerd (International Dance Teacher Associaton) met een pedagogische en didactische achtergrond.,\r\nWij zijn gecertificeerd voor: AALO bodyshape instructor, Zumba, Zumba Step, Drums Alive en Bokwa.,\r\nGezelligheid en ontspanning staan bij ons hoog in het vaandel.,\r\nMooie grote zaal met zitjes en een gezellige  bar.,\r\nWarme en ontspannen sfeer.,\r\nBreed scala aan dansstijlen.,', 'images/tabapps/judiths-dance-point/teamfoto/wtv 2.jpg', 'Leer op een leuke manier stijldansen in een gezellige sfeer!\r\nMeld je aan voor een proefles stijldansen.', 'Bedankt voor je aanvraag!', NULL, NULL, NULL, NULL, NULL, NULL, 'Een super goede dansschool. Leuke mensen en het is er altijd heel gezellig!!', 'Top dansschool met top leraren! Als je dansen wilt leren in de omgeving van weert, moet je hier zijn!!', '', '', '', '', 'Sylvia Boonmann', 'Jeroen Koene', '', '', '', '', '2015-07-23 09:04:14', '2015-07-23 09:04:14'),
(12, 'One Fitness Weesp', NULL, 'weesp@onefitness.nl', 'images/tabapps/one-fitness-weesp/h1.png', 'images/tabapps/one-fitness-weesp/slides/DSC_1258.JPG', 'images/tabapps/one-fitness-weesp/slides/DSC_1254.JPG', 'images/tabapps/one-fitness-weesp/slides/DSC_1252.JPG', 'images/tabapps/one-fitness-weesp/slides/DSC_1246.JPG', 'images/tabapps/one-fitness-weesp/slides/2013-01-26 08.48.09.jpg', 'Professionele begeleiding\r\nPrettige sfeer\r\nLaagdrempelig\r\nGezellig\r\nVeel verschillende mogelijkheden\r\n', 'images/tabapps/one-fitness-weesp/teamfoto/DSC_1239.JPG', 'One Fitness Weesp is het Fitnesscentrum in Weesp waar reële doelen worden omgezet in resultaten. Onder deskundige begeleiding wordt een persoonlijk programma opgesteld en/of kan worden deelgenomen aan verschillende groepslessen. Bij One Fitness Weesp wordt veel Personal Training gegeven door trainers met verschillende specialiteiten. \r\n\r\nTevens kan na afloop van een training een drankje genuttigd worden in onze gezellige Lounge.\r\n\r\nOok voor een deskundige manueel- en fysiotherapeut, gericht voedingsadvies en gebruik van zonnebanken bent u aan het juiste adres.', 'Bedankt voor de getoonde interesse! We zullen spoedig contact met u opnemen om kennis te maken bij One Fitness Weesp.', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '2015-07-24 14:58:11', '2015-07-24 14:58:11'),
(13, 'Danscentrum La Passe', NULL, 'lapasse@gmail.com', 'images/tabapps/danscentrum-la-passe/LaPasse_Logo_def.jpg', NULL, NULL, NULL, NULL, NULL, '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '2015-08-14 14:48:06', '2015-08-14 14:48:06'),
(14, 'Total Exercise', NULL, 'info@totalexercise.nl', 'images/tabapps/total-exercise/total-logo.png', 'images/tabapps/total-exercise/slides/1.jpg', 'images/tabapps/total-exercise/slides/2.jpg', 'images/tabapps/total-exercise/slides/3.jpg', 'images/tabapps/total-exercise/slides/4.jpg', 'images/tabapps/total-exercise/slides/6.jpg', '1.	Veel afwisselende sportlessen (Outdoor Fitness, trailrunning, HIIT, Tabata, Kettlebell, etc)\r\n2.	Verschillende locaties\r\n3.	Blessure behandeling/ preventie\r\n4.	Small-group training\r\n5.	Obstacle Course training (mud Masters, Strong Viking, etc)\r\n6.	De instructie geschied volgens de “3-pijlers”. (Houding, Techniek & Functioneel belasten)\r\n7.	Wordt fysiek maar ook mentaal sterker', 'images/tabapps/total-exercise/teamfoto/7.jpg', 'Wil jij doelen halen en ben jij bereid om tot het uiterste te gaan?\r\n\r\nMeld dan direct aan voor een GRATIS proefweek!\r\n', 'Bedankt voor het aanmelden voor de PROEFWEEK!\r\n\r\nWe zien elkaar snel.\r\n', 'images/tabapps/total-exercise/recensies/Gerard.jpg', 'images/tabapps/total-exercise/recensies/Wouter.jpg', 'images/tabapps/total-exercise/recensies/Dennis.jpg', 'images/tabapps/total-exercise/recensies/Gina.jpg', 'images/tabapps/total-exercise/recensies/Debora.jpg', 'images/tabapps/total-exercise/recensies/Mirjam.jpg', 'Trainen bij Jody (Total Exercise) is een combinatie van duidelijke en inspirerende uitleg van iemand die er veel verstand en plezier in heeft Hij weet de lesstof goed te verwoorden en de lessen zijn voor iedereen duideliijk. Kortom lekker afzien met leuke groep mensen en inspirerende trainer, een aanrader!', 'Trainen bij Jody (Total Exercise) is je doelen behalen en tijdens dat proces ook heel veel plezier beleven, hierdoor kijk je altijd weer uit naar een volgende training.\r\nJody onderscheid zich doordat bij hem het mentale aspect steeds weer heel sterk naar voren komt, hierdoor train je met meer motivatie, zelfvertrouwen en fun!\r\n\r\nIk zou iedereen aanraden eens een kijkje te gaan nemen bij Total Exercise om het zelf te beleven!', 'De afwisselen trainingen, leuk groep mede sporters, en enthousiasme, motivatie, stimulatie, begeleiding van Jody heeft mij doen besluiten om een half jaar abonnement af te nemen bij Total Exercise.\r\n\r\nEn met wat voor een resultaat, nu exact vijf maanden later, 6 februari 2015, ben ik 21,6 kilo afgevallen, fysiek sterker dan ooit.  Jody blijft je uitdagen, motiveren en begeleiden om je grenzen op te zoeken, te verleggen en je voorgenomen doelstellingen te behalen.\r\n\r\nIedereen die dan ook overweegt af te willen vallen in combinatie met het fysiek fitter en/sterker worden, raad ik dan ook van  harte, Total Exercise aan.', 'Behalve de fantastische training die hij me geeft, die echt zijn vruchten afwerpt, heeft Jody ook mijn rug behandeld. Ik was na 1 behandeling zo goed als klachtenvrij!! Top Jody!!', 'Ben je op zoek naar een afwisselende training in de buitenlucht op verschillende locaties? Of wil je trainen voor een obstacle run? Wil je met een leuke groep mensen trainen? Dan moet je bij Total Exercise zijn! Jody zorgt er tijdens de training voor dat je alles uit jezelf haalt! Ik sport nu ongeveer twee jaar bij Total Exercise en doe het nog steeds met veel plezier!', 'Met of zonder sportachtergrond, goed of slecht, dik of dun maakt niet uit, jody weet iedereen op een goede manier te motiveren om te sporten! Geen enkele les is hetzelfde dus saai is het nooit!!', 'Gerard', 'Wouter', 'Dennis', 'Gina', 'Debora', 'Mirjam', '2015-09-02 11:32:58', '2015-09-02 15:22:49');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelpaginas`
--

CREATE TABLE `bestelpaginas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` text NOT NULL,
  `slogan` text NOT NULL,
  `intro_tekst` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bestelpaginas`
--

INSERT INTO `bestelpaginas` (`id`, `titel`, `slogan`, `intro_tekst`, `created_at`, `updated_at`) VALUES
(1, 'SUCCESVOLLE FACEBOOK TIJDLIJNACTIES\r\n', 'ONTDEK HOE JIJ EENVOUDIG ELK PRODUCT, DIENST OF EVENEMENT, WANNEER HET JOU UITKOMT, ONDER DE AANDACHT BRENGT OP FACEBOOK!', 'In deze cursus ontdek je dé nummer 1 bewezen strategie om meer bereik, naamsbekendheid en mond-tot-mond reclame te creëeren voor jouw business! De cursus is gebaseerd op bijna 5 jaar ervaring, waarin deze strategie zich keer op keer bewezen heeft. Je hebt 24/7 en levenslang toegang tot de cursus.\r\n\r\n', '2015-11-20 11:31:34', '0000-00-00 00:00:00'),
(2, 'FACEBOOK ADVERTENTIE GEHEIMEN\r\n', 'ONTDEK HOE JE SNEL EN EENVOUDIG FACEBOOK ADVERTENTIES OPZET WAARMEE JIJ POTENTIËLE KLANTEN OMZET IN BETALENDE KLANTEN, KEER OP KEER!\r\n\r\n', 'Facebook advertenties zijn super effectief. Wat wij merken bij veel klanten, is dat ze wel eens hadden geadverteerd, en vervolgens zeiden "Facebook advertenties werken niet". Dit komt omdat ze hun advertenties verkeerd hadden ingericht. Dan is het natuurlijk logisch dat ze niet werken. Alles wat je nodig hebt is de juiste strategie met een duidelijke doelstelling, weten welke doelgroep je wil aanspreken en hoe je pakkende advertenties maakt.', '2015-11-23 16:39:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelpagina_product`
--

CREATE TABLE `bestelpagina_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `bestelpagina_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bestelpagina_product`
--

INSERT INTO `bestelpagina_product` (`id`, `product_id`, `bestelpagina_id`) VALUES
(1, 1, 1),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `caseklant_zaak`
--

CREATE TABLE `caseklant_zaak` (
  `id` int(10) UNSIGNED NOT NULL,
  `caseklant_id` int(10) UNSIGNED NOT NULL,
  `zaak_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `caseklant_zaak`
--

INSERT INTO `caseklant_zaak` (`id`, `caseklant_id`, `zaak_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 4, 5),
(6, 5, 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cases`
--

CREATE TABLE `cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `uitgelichte_afbeelding` varchar(255) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `klant` varchar(255) NOT NULL,
  `link_klant` varchar(255) NOT NULL,
  `link_project` varchar(255) NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `dienst_id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `excerpt` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `cases`
--

INSERT INTO `cases` (`id`, `logo`, `uitgelichte_afbeelding`, `titel`, `slug`, `klant`, `link_klant`, `link_project`, `categorie_id`, `user_id`, `dienst_id`, `content`, `excerpt`, `created_at`, `updated_at`) VALUES
(1, 'images/cases/logo.jpg', 'images/cases/Anytime-Fitness-GymMembershipFees.jpg', 'Facebook campagne Anytime Fitness', 'facebook-campagne-anytime-fitness', 'Anytime Fitness', 'http://www.anytimefitness.nl', 'http://www.anytimefitness.nl', 1, 3, 1, '<span>Anytime Fitness is de grootste en snelst-groeiende, 24-uurs, co-ed\r\nfitness franchise ter wereld. Sinds de oprichting in Amerika in 2002 is Anytime\r\nFitness in een razendsnel tempo gegroeid. Momenteel is Anytime Fitness\r\nuitgegroeid tot een wereldwijd concept met meer dan 2000 clubs in oa Amerika,\r\nCanada, Australië, Nieuw-Zeeland, Mexico, Japan, India, Spanje, Nederland en\r\nhet Verenigd Koninkrijk. <span><br>\r\n<br>\r\nAnytime Fitness Goor vroeg ons naar de mogelijkheden om via Facebook in contact\r\nte komen met nieuwe leden voor hun club en die van een aantal mede franchisenemers.\r\nHet volgende concept hebben we opzet en uitgevoerd.<br>\r\n</span><b><span><br>\r\n</span></b></span><h3>Doel van de campagne</h3><span>Het doel van de campagne is om via Facebook in contact te komen met\r\ngebruikers die willen sporten. Geïnteresseerde gebruikers kunnen via Facebook\r\neenvoudig een 7-dagen pas aanvragen. <br>\r\n<br>\r\n</span><h3>Hoe kunnen gebruikers precies een 7-dagen pas\r\naanvragen?</h3><span>Gebruikers kunnen via een <a target="_blank" rel="nofollow" href="http://www.digitusmarketing.nl/diensten/facebook-tabapps">Facebook\r\napp</a>&nbsp;een 7-dagen pas aanvragen. Een Facebook app is een soort (mini)website\r\nop een Facebook pagina. Gebruikers vragen een 7-dagen pas aan door hun naam, e-mailadres\r\nen telefoonnummer in te vullen. Deze gegevens ontvangt de desbetreffende\r\nAnytime Fitness vestiging direct per mail, om contact op te nemen met de\r\ngeïnteresseerde.</span>Hoe brengen we de Facebook\r\napp onder de aandacht?<br>We tonen advertenties in het\r\nnieuwsoverzicht van Facebook gebruikers die binnen de doelgroep van de\r\ndesbetreffende Anytime Fitness vestiging vallen. Doelgroepen worden\r\ngeselecteerd aan de hand van woonplaats, leeftijd en interesses. Gebruikers\r\nworden vanuit de advertentie doorverwezen naar de Facebook app.\r\n\r\n<br><b><br></b><h3>Advertenties met sociale\r\ncontext</h3>Door advertenties te richten\r\nop vrienden van fans kunnen advertenties weergegeven worden met sociale\r\ncontext.\r\n\r\n<br><b><br></b><h3>Taggen van vrienden in een\r\nreactie bevorderen</h3><span>Als je iemand tagt, creëer je een link naar zijn of haar\r\nprofiel/tijdlijn, de ‘getagde’ gebruiker ontvangt hier een melding van. Deze\r\nfunctie wordt door gebruikers steeds vaker gebruikt om een Facebook vriend op\r\nde hoogte te stellen van een grappig of interessant bericht. Om taggen te bevorderen hebben we een aantal\r\nadvertentie teksten geschreven waarbij de naam van een vriend of vriendin\r\nontbreekt. Bijv. “<i>Ik wil Anytime Fitness\r\ngraag uitproberen met ____.</i>”.</span>\r\n\r\n<br><b><br></b><h3>Resultaten</h3><b>€ 470,21 </b><span>advertentie budget besteed\r\nover 3 maanden.<b><br>\r\n</b></span><b>144.556</b><span> advertentieweergaven.<br>\r\n<b>59.763</b></span><b> </b><span>unieke gebruikers bereikt.<b><br>\r\n72 -</b> 7-dagen pas aanvragen.<br>\r\nGemiddeld <b>€ 6,53</b> per 7-dagen pas\r\naanvraag.<br>\r\n</span><span><br>\r\n<br>\r\n</span>', '<span>Anytime Fitness is de grootste en snelst-groeiende, 24-uurs, co-ed\r\nfitness franchise ter wereld. Sinds de oprichting in Amerika in 2002 is Anytime\r\nFitness in een razendsnel tempo gegroeid. Momenteel is Anytime Fitness\r\nuitgegroeid tot een wer...', '2015-07-19 15:40:29', '2015-09-16 13:35:47'),
(2, 'images/cases/Ibora Logo.png', 'images/cases/Ibora Banner.png', 'Facebook Campagne + Tab-app Ibora Zant', 'facebook-campagne-tab-app-ibora-zant', 'Ibora Zant', 'http://www.iborazant.nl', 'http://www.iborazant.nl', 1, 3, 1, '<div>Ibora Zant is ondernemer en\r\ncoach. Ibora helpt, ondersteunt en leert therapeuten, coaches en trainers om\r\nsuccesvol te worden. Veel therapeuten, coaches en trainers hebben een passie\r\nvoor het helpen van mensen. Dit kan wel eens ten koste gaan van hun eigen\r\nfinanciële vrijheid. Ibora helpt hen om succesvol te worden, zonder hun passie\r\nen kernwaarden uit het oog te verliezen.<br><br>Ibora vroeg ons om haar seminar \'Van Passie Naar Overvloed\' op 26 &amp; 27 september 2015&nbsp;onder de aandacht te brengen via&nbsp;Facebook.</div><h3>Doel van de campagne</h3><div>Het doel van de campagne is\r\nvia Facebook het seminar promoten en leads verzamelen om Ibora\'s mailinglijst uit te breiden.</div><h3>Hoe</h3><div>Wij hebben de volgende\r\nstrategie bedacht;</div><span>\r\nVia een Facebook tab kunnen gebruikers voor een periode van 2 weken aan een\r\nprijsvraag meedoen. Gedurende deze 2 weken, selecteert Ibora elke dag 1\r\nwinnaar, die gratis bij haar seminar aanwezig mag zijn. Om mee te doen, moeten\r\ngebruikers hun voornaam, achternaam en e-mail adres invullen. Zodat zij via\r\nmail hun ticket voor het seminar kunnen ontvangen, en Ibora haar mailing lijst\r\nkan uitbreiden.<br><br>Zie hieronder de tab die we voor Ibora ontwikkeld hebben:<br><img alt="" src="http://www.digitusmarketing.nl/images/media/Ibora Zant Tab.png"><br><br></span>Om het seminar te promoten,\r\nen meer gebruikers op de Facebook tab met de prijsvraag te krijgen, hebben we\r\neen advertentie campagne opgezet.<br><br>Zie\r\nhieronder een voorbeeld van een van de advertenties die wij bij verschillende\r\ndoelgroepen in het nieuwsoverzicht laten weergeven. Wanneer mensen op de\r\nadvertentie klikken, zullen zij op de tab terecht komen.<br><img alt="" src="http://www.digitusmarketing.nl/images/media/Ibora Zant Ad.png"><br><br><h3>Resultaten</h3><div><b>€150,-</b>\r\nadvertentie budget besteed over een periode van 2 weken.</div><span>\r\n<b>24.329</b> advertentie weergaven (Betaalde weergaven).<br>\r\n<b>17.011</b> unieke personen bereikt.<br>\r\n<b>13.354</b> unieke personen bereikt (betaald).<br>\r\n<b>3.657</b> unieke personen bereikt\r\norganisch (gratis).<br>\r\n<b>205</b> conversies (prijsvraag\r\ndeelnemers).<br>\r\n<b>€0,73</b> kosten per conversie (kosten\r\nper deelname).<br><br><img alt="" src="http://www.digitusmarketing.nl/images/media/Ibora Zant Resultaten1.png"><br><br></span><span>Om het kort samen te\r\nvatten, heeft Ibora voor een advertentie budget van <b>€150,-</b>, haar seminar bij <b>17.011</b>\r\nunieke personen onder de aandacht gebracht. Heeft zij haar mailinglijst uitgebreid met <b>205</b> e-mail adressen, waarvan er 14 winnaars\r\nwaren die gratis toegang tot haar seminar hebben gekregen.<br></span>De campagne heeft geleid tot een aantal van <b>56</b> verkochte tickets.', '<div>Ibora Zant is ondernemer en\r\ncoach. Ibora helpt, ondersteunt en leert therapeuten, coaches en trainers om\r\nsuccesvol te worden. Veel therapeuten, coaches en trainers hebben een passie\r\nvoor het helpen van mensen. Dit kan kan wel eens ten koste g...', '2015-09-16 11:22:36', '2015-12-18 17:05:04'),
(3, 'images/cases/Logo Erna Basten.png', 'images/cases/Erna Basten Banner.jpg', 'Facebook Campagne Praktijk Erna Basten', 'facebook-campagne-praktijk-erna-basten', 'Praktijk Erna Basten', 'http://www.praktijkernabasten.nl', 'http://www.praktijkernabasten.nl', 1, 3, 1, 'Erna Basten is\r\nveranderingstherapeut. Zij helpt vrouwen van weinig energie naar bruisend van\r\nenergie, van zwaarmoedig naar gelukkig, van altijd tijd te kort naar meer rust\r\nin hun leven.<br>\r\n<br>\r\nErna vroeg ons om door middel van Facebook in contact te komen met potentiële\r\nklanten.<br><br><h3><span>Doel van de campagne<br></span></h3>Het doel van de campagne is\r\nom via Facebook in contact te komen met potentiële klanten. Dit wordt gedaan\r\nmet behulp van een éénmalige gratis inzichtsessie.<br><br><h3>Hoe</h3>Via een Facebook tab kunnen\r\ngebruikers zich aanmelden voor een gratis inzichtsessie met Erna. Om zich aan\r\nte melden, moeten gebruikers hun naam, e-mail adres en telefoonnummer invullen.\r\nVervolgens neemt Erna contact met hen op om een inzichtsessie in te plannen.<br><br>Zie\r\nhieronder de tab die we voor Erna ontwikkeld hebben:<br><img alt="" src="http://www.digitusmarketing.nl/images/media/Erna Basten Tab.png"><br><br>Om de gratis inzichtsessie\r\nte promoten, en meer Facebook gebruikers op de tab te krijgen, hebben we een\r\nadvertentie campagne opgezet.\r\n\r\nZie hieronder een voorbeeld van een van de\r\nadvertenties die we bij verschillende doelgroepen in het nieuwsoverzicht\r\nweergeven. Wanneer mensen op de advertentie klikken zullen zij op de tab\r\nterecht komen.<br><img alt="" src="http://www.digitusmarketing.nl/images/media/Erna Basten Ad.png"><br><br><h3>Resultaten</h3><b>€94,79</b><span>\r\nadvertentie budget besteed over een periode van 2 weken.<br>\r\n<b>16.944</b> advertentie weergaven\r\n(Betaalde weergaven).<br>\r\n<b>8.270</b> unieke personen bereikt (Betaald).<br>\r\n<b>17</b>&nbsp;conversies (klanten\r\ndie in de praktijk komen voor een inzichtsessie).<br>\r\n<b>€5,58</b>&nbsp;kosten per (betaalde) conversie.<br></span><br>Bovenstaand zijn alleen de\r\nstatistieken van de betaalde weergaven, bereikte personen en conversies.\r\nUiteraard brengt een campagne als deze ook veel organische (gratis) weergaven,\r\nbereikte personen en conversies met zich mee. In totaal zijn er <b>26&nbsp;</b>conversies uit deze campagne voortgekomen.<br><br><h3>Erna\'s recensie:</h3><i>"</i><span><i>Dank je wel voor de fijne samenwerking!</i><br></span><i>Alhoewel ik nog wel twijfelde of ik deze investering nu wel moest gaan doen heb ik het toch gedaan. En ik ben blij! Ook heel blij dat het nu afgelopen is want het is druk! Maar dat is alleen maar goed. Ik kon niet verwachten dat er zoveel mensen contact op gingen nemen. Mijn investering is er al lang uit. SUPER!"</i><b><br></b>', '<span>Erna Basten is\r\nveranderingstherapeut. Zij helpt vrouwen van weinig energie naar bruisend van\r\nenergie, van zwaarmoedig naar gelukkig, van altijd tijd te kort naar meer rust\r\nin hun leven.<br>\r\n<br>\r\nErna vroeg ons om door middel van Facebook i...', '2015-09-16 14:30:28', '2015-10-05 10:35:09'),
(4, 'images/cases/LogoFCR.png', 'images/cases/FCR Banner.png', 'Facebook Campagne Fitnesscentrum Roden', 'facebook-campagne-fitnesscentrum-roden', 'Fitnesscentrum Roden', 'http://www.fitnesscentrumroden.nl', 'http://www.fitnesscentrumroden.nl', 1, 3, 1, '<span>Fitnesscentrum Roden, de mooiste en meest\r\ncomplete fitnessclub in de regio. Behalve\r\nfitnesscentrum en sportschool is Fitnesscentrum Roden hét adres voor zwemles,\r\nafvallen, fysiofitness, personal training, sauna, pedicure, massage en\r\nzonnebank. Fitnesscentrum Roden voldoet aan de hoogste keurings eisen van:\r\nLandelijke Erkenningsregeling Fitness (LERF) en Vereniging Exlusieve\r\nSportcentra (VES).<br></span><br>Bert de eigenaar van\r\nFitnesscentrum Roden vroeg ons om een complete online marketing strategie voor\r\nhem op te zetten aan de hand van zijn wensen. Met als hoofddoel nieuwe leden\r\naantrekken.<br><br>Samen met een van\r\nonze partners hebben we een compleet nieuwe website opgezet en een Google\r\nAdwords Remarketing campagne die beiden volledig geoptimaliseerd zijn voor\r\nconversies. Daarnaast hebben we voor alle activiteiten bij Fitnesscentrum Roden\r\nFacebook campagnes opgezet, ook gericht op het aantrekken van nieuwe leden.<br><br>In deze case zullen\r\nwe 1 Facebook campagne laten zien, zodat je een idee hebt hoe dit in zijn werk\r\ngaat.\r\n\r\n<br><b><br></b><h3>Doel van de campagne\r\n</h3>Het doel is om door\r\nmiddel van Facebook campagnes in combinatie met de website nieuwe leden aan te\r\ntrekken. Dit wordt gedaan met behulp van een gratis proefweek sporten bij\r\nFitnesscentrum Roden.<br><br>Per activiteit kan\r\nBert ons bellen om de campagne aan of uit te zetten, afhankelijk van of er nog\r\nruimte is voor nieuwe leden of dat deze activieit al vol zit.\r\n\r\n<br><b><br></b><h3>Hoe</h3>Mensen kunnen zich op\r\nde website via een formulier aanmelden voor een proefweek. Door het bezoeken\r\nvan specifieke activeiten op de website tonen mensen interesse, zij zullen door\r\nGoogle Adwords remarketing, advertenties van een proefweek voor de betreffende\r\nactiveit te zien krijgen.<br><br>Zie hieronder een\r\naanmeldformulier op de website: <br><img alt="" src="http://www.digitusmarketing.nl/images/media/FCR AanmeldForm.png"><br><br>Per activiteit\r\ndraaien er verschillende advertenties op Facebook, specifiek gericht op\r\nrelevante doelgroepen voor elke activeit.<br><br>Zie hieronder 1 van\r\nde advertenties voor de Milon Cirkel:\r\n\r\n<br><img alt="" src="http://www.digitusmarketing.nl/images/media/FCR Ad 1 Milon.png"><br><b><br></b><h3>Resultaten</h3>Zie hieronder de\r\nresultaten van de Milon Cirkel, van 25-08-2015 t/m 06-09-2015.<br><span><b><img alt="" src="http://www.digitusmarketing.nl/images/media/FCR Milon Aug.png"><br><br>€95,54</b>&nbsp;<span>advertentie\r\nbudget besteed over een periode van 2 weken.<br>\r\n<b>6232</b>&nbsp;unieke personen bereikt (Alleen\r\nbetaald, hier komen nog organisch en viraal bereikte personen bij).<br>\r\n<b>34</b>&nbsp;conversies\r\n(Alleen betaald, hier komen nog de organische en virale conversies bij).<br>\r\n<b>€2,81</b>&nbsp;kosten\r\nper betaalde conversie.<br></span></span><b><br></b><h3>Bert’s\r\nRecensie:</h3>“De eerste resultaten\r\nvan onze samenwerking zijn een feit en ....bovenverwachting!!!!!!<br><span>Hierbij mijn wel\r\ngemeende getuigenis:<br>\r\nDe jongens van Digitus Marketing denken mee, zijn creatief en werken met passie\r\nvoor hun vak! De eerste campagnes waren meteen raak, eindelijk weer grip op de\r\ninstroom van nieuwe klanten!”</span>\r\n\r\n&nbsp;', '<span>Fitnesscentrum Roden, de mooiste en meest\r\ncomplete fitnessclub in de regio. Behalve\r\nfitnesscentrum en sportschool is Fitnesscentrum Roden hét adres voor zwemles,\r\nafvallen, fysiofitness, personal training, sauna, pedicure, massage en\r\nzonneb...', '2015-11-20 12:45:48', '2015-12-18 13:50:14'),
(5, 'images/cases/LogoFCR.png', 'images/cases/FCR Banner.png', 'Fotowedstrijd Fitnesscentrum Roden', 'fotowedstrijd-fitnesscentrum-roden', 'Fitnesscentrum Roden', 'http://www.fitnesscentrumroden.nl', 'http://www.fitnesscentrumroden.nl', 1, 3, 1, '<span>Fitnesscentrum Roden, de mooiste en meest\r\ncomplete fitnessclub in de regio. <span>Behalve\r\nfitnesscentrum en sportschool is Fitnesscentrum Roden hét adres voor zwemles,\r\nafvallen, fysiofitness, personal training, sauna, pedicure, massage en\r\nzonnebank. Fitnesscentrum Roden voldoet aan de hoogste keurings eisen van:\r\nLandelijke Erkenningsregeling Fitness (LERF) en Vereniging Exlusieve\r\nSportcentra (VES).<br><br></span></span><span>Bert de eigenaar van\r\nFitnesscentrum Roden vroeg ons om tijdens de open week van Fitnesscentrum Roden\r\neen ludieke actie op te zetten en zo zijn bereik en naamsbekendheid te\r\nvergroten.<br><br></span><h3>Doel van de campagne</h3><span>Het doel van de\r\ncampagne is om via social media zoveel mogelijk mensen in de regio te bereiken\r\nen daarmee de naamsbekendheid nog verder uit te breiden.<br><br></span><h3>Hoe</h3><span>Tijdens\r\nde openweek is er een fotowedstrijd gehouden onder iedereen die tijdens deze\r\nweek langs kwam (zowel leden als niet-leden). Er zijn 2 borden in de club\r\nneergezet, 1 met een gespierd mannen lichaam en 1 met een gespierd vrouwen\r\nlichaam. Deelnemers van de fotowedstrijd konden achter dit bord gaan staan om\r\neen foto van zichzelf te maken.<br><br></span><img alt="" src="http://www.digitusmarketing.nl/images/media/Foto1.jpg"><br><br><span>Om\r\ndeel te nemen aan de fotowedstrijd, konden mensen hun foto via de website en\r\neen Facebook tab uploaden.&nbsp;<br></span><br><img alt="" src="http://www.digitusmarketing.nl/images/media/FCR Wedstrijd.png"><br><br><span>Om het\r\nbereik van deze ludieke actie te bevorderen, konden mensen ook via Facebook,\r\nTwitter en Instagram deelnemen door hun foto te plaatsen met\r\n#FitnessCentrumRoden. Deze foto’s werden automatisch toegevoegd aan de\r\nwedstrijd. Op deze manier zorgden bezoekers van de open week met veel plezier\r\nvoor ontzettend veel naamsbekendheid, beter kan het niet!&nbsp;<br></span><br><img alt="" src="http://www.digitusmarketing.nl/images/media/FCR Inzendingen.png"><br><br>Uiteraard werd deze actie nog ondersteund door een Facebook campagne.<br><br><h3>Resultaten</h3><span>Met een\r\ncampagne/actie als deze, zijn de resultaten natuurlijk niet te meten. Maar je\r\nkunt natuurlijk wél nagaan wanneer bezoekers tijdens een open week via\r\nFacebook, Instragram en Twitter foto’s verspreiden met #FitnessCentrumRoden,\r\nvoor hoeveel bereik, naamsbekendheid en mond-tot-mond reclame dit zorgt.<br><br></span><h3>Bert\'s Recensie:</h3>“De eerste resultaten\r\nvan onze samenwerking zijn een feit en ....bovenverwachting!!!!!!\r\n\r\n<br><span>Hierbij mijn wel\r\ngemeende getuigenis:<br>\r\nDe jongens van Digitus Marketing denken mee, zijn creatief en werken met passie\r\nvoor hun vak! De eerste campagnes waren meteen raak, eindelijk weer grip op de\r\ninstroom van nieuwe klanten!”</span>', '<span>Fitnesscentrum Roden, de mooiste en meest\r\ncomplete fitnessclub in de regio. <span>Behalve\r\nfitnesscentrum en sportschool is Fitnesscentrum Roden hét adres voor zwemles,\r\nafvallen, fysiofitness, personal training, sauna, pedicure, massage en\r\n...', '2015-11-20 14:04:07', '2015-12-18 13:49:46'),
(6, 'images/cases/Logo.jpg', 'images/cases/Itoshii banner.png', 'Facebook Tijdlijnactie Itoshii Zwolle', 'facebook-tijdlijnactie-itoshii-zwolle', 'Itoshii Zwolle', 'http://www.itoshii.nl', 'http://www.itoshii.nl', 1, 3, 1, '<span>Itoshii is een Japans ‘all you\r\ncan eat restaurant’. Bij Itoshii kunt je onbeperkt eten tegen een vaste lage\r\nprijs. Itoshii is gevestigd in Zwolle, Lisse en Hoofddorp. Het Japans woord\r\n‘itoshii’ betekent ‘geliefd’. Als je van Japans eten houdt of als je het eens\r\nwilt proberen, dan ben je bij Itoshii meer dan welkom.<br></span><span><br>Itoshii Zwolle houdt elke donderdag een ladies night, waar\r\nvrouwen voor een gereduceerde prijs onbeperkt kunnen genieten van de japanse\r\nkeuken. Itoshii Zwolle wilde graag de ladies night onder de aandacht brengen\r\nvia Facebook.<br><br></span><h3>Doel van de campagne</h3><span>Het doel van de campagne is om via Facebook&nbsp;zoveel mogelijk bereik en naamsbekendheid&nbsp;te\r\ngenereren waarbij de ladies night onder de aandacht gebracht wordt.<br><br></span><h3>Hoe</h3><span>Door middel van een\r\ntijdlijnactie brachten we de ladies night onder de aandacht, waarbij we op een\r\ncreatieve manier vroegen om interactie van Facebook gebruikers, om het\r\norganisch en virale bereik een enorme boost te geven. Daarnaast hebben we voor\r\nhet betaalde bereik een budget van €40,- ingezet.<br><br></span><span>Zie hieronder de\r\ntijdlijnactie inclusief resultaten:<br><img alt="" src="http://www.digitusmarketing.nl/images/media/Itoshii Tijdlijnactie.png"><br><br></span><h3>Resultaten</h3><span><b>€40,-</b><span>\r\nadvertentie budget besteed over een periode van 2 dagen.<b><br>\r\n57.242</b> bereikte personen.<br>\r\n<b>513</b> likes op eigen bericht (<b>643</b> likes totaal).<br>\r\n<b>1.006</b> reacties op eigen bericht (<b>1.572</b> reacties totaal).<br>\r\n<b>124</b> shares van het eigen bericht (<b>140</b> totaal).<br></span></span><span><br>En als leuke bonus <b>488</b> pagina likes erbij in de 2 dagen dat de tijdlijnactie gedraaid\r\nheeft.</span><br>', '<span>Itoshii is een Japans ‘all you\r\ncan eat restaurant’. Bij Itoshii kunt je onbeperkt eten tegen een vaste lage\r\nprijs. Itoshii is gevestigd in Zwolle, Lisse en Hoofddorp. Het Japans woord\r\n‘itoshii’ betekent ‘geliefd’. Als je van Japa...', '2015-11-20 15:36:28', '2015-11-20 15:36:28'),
(7, 'images/cases/Logo.png', 'images/cases/Banner.png', 'Facebook Campagne Soulparty', 'facebook-campagne-soulparty', 'Soulparty', 'http://soulparty.net', 'http://soulparty.net', 1, 3, 1, 'Beleef de seventies opnieuw en je\r\nkan niet anders dan dansen tijdens onze unieke en spetterende Soulparty\r\nCelebration in Ouwehands Dierenpark in Rhenen. Hét ouderwets gezellige avondje\r\nuit in een sfeervolle ambiance met de discosfeer van toen. You should be\r\ndancing op de grote verlichte discovloer uit de film Saturday Night Fever met\r\nde discobeats uit de jaren 80 en de heerlijke soulmuziek van Motown uit de\r\nseventies. Onze dansers en danseressen geven een extra feestelijk tintje aan de\r\nCelebration.\r\n\r\n<br><span><br>Aris Jan Bos van Soulparty had al\r\neen eigen Facebook campagne staan voor de kaartverkoop van het Soulparty\r\nevenement, maar kon zijn resultaten niet inzien. Ook zag hij niet genoeg\r\nkaartverkopen binnenkomen na het opzetten van de campagne. Naar aanleiding\r\ndaarvan heeft hij een strategiesessie aangevraagd. Uit de strategiesessie is\r\nvoortgekomen dat wij de campagne helemaal hebben omgegooid, geoptimaliseerd en\r\nde resultaten meetbaar hebben gemaakt.<br><br></span><h3>Doel van de campagne</h3><div>Het doel van de campagne was om zoveel mogelijk kaartverkopen\r\nte realiseren voor het Soulparty evenement.</div><br><h3>Hoe</h3>Via de website van\r\nSoulparty kunnen mensen kaarten bestellen voor het evenement. Door middel van\r\nFacebook advertenties worden mensen naar de bestelpagina op de website\r\ngestuurd. Mensen die interesse hebben getoond door de bestelpagina te bezoeken\r\nmaar nog geen tickets hebben besteld, werden ook opnieuw bereikt met Facebook\r\nremarketing.\r\n\r\n<br><span><br>Zie hieronder de advertentie voor de vroegboekkorting:<br></span><span><img alt="" src="http://www.digitusmarketing.nl/images/media/Ad 1 - Vroegboekkorting.png"><br><br><br></span><span>Zie\r\nhieronder de advertentie die we in hebben gezet toen bijna alle tickets\r\nuitverkocht waren:<br></span><img alt="" src="http://www.digitusmarketing.nl/images/media/Ad 2 - Nog enkele tickets beschikbaar.png"><br><br><span>Met\r\nals resultaat dat alle kaarten waren uitverkocht en Aris Jan de omslagfoto\r\nheeft moeten wijzigen:<br></span><img alt="" src="http://www.digitusmarketing.nl/images/media/UITVERKOCHT.png"><img alt=""><br><h3>Resultaten</h3><span>Hieronder\r\nde resultaten van de betaalde campagne, uiteraard komen er uit een campagne als\r\ndeze ook ontzettend veel organisch en virale resultaten.<br></span><img alt="" src="http://www.digitusmarketing.nl/images/media/Cijfers uit de campange.png"><br><br><span><b>€212,07</b><span>&nbsp;<span>advertentie budget besteed over een periode\r\nvan 2 weken.<br>\r\n<b>18.821</b>&nbsp;unieke personen bereikt (Alleen betaald, hier komen nog\r\norganisch en viraal bereikte personen bij).<br>\r\n<b>55</b>&nbsp;conversies (Alleen betaald, hier komen nog de organische en\r\nvirale conversies bij).<br>\r\n<b>€3,86</b>&nbsp;kosten per betaalde conversie.<br><br></span></span></span><h3>Aris Jan\'s recensie:</h3>“Ik dacht dat ik het zelf\r\nwel redelijk begreep, dat adverteren op Facebook. Ik bereikte wel een heleboel\r\nmensen via Facebook maar had geen inzicht in wat het mij opleverde.\r\n\r\nIk heb een strategiesessie aangevraagd bij Digitus Marketing om\r\neens kritsich naar mijn Facebook-campagne te kijken. Samen met Parsifal heb ik\r\ntijdens de strategiesessie mijn campagne doorgenomen.\r\n\r\n<br><br><span>De basis had ik wel redelijk voor elkaar. Parsifal gaf mij een\r\nhele hoop tips en verbeterpunten, voornamelijk&nbsp;in de\r\nadvertenties en de doelgroepen die ik had geselecteerd. En hij vertelde mij hoe\r\nik kon achterhalen hoeveel mensen vanuit mijn Facebook-campagne tickets\r\nbestellen.<br></span>\r\n\r\n<br>Ook vertelde hij mij dat\r\nwe de mensen die de website hebben bezocht (en dus interesse hebben getoond)\r\nopnieuw moesten bereiken door middel van Facebook Remarketing. Dit heeft mij\r\nook veruit het meeste rendement opgeleverd.\r\n\r\n<br><span><br>Na de\r\nwaardevolle tips te hebben toegepast (samen met Parsifal), was het evenement De\r\nSoulparty nog eerder uitverkocht dan voorheen! Ik ben blij dat ik de keuze heb\r\ngemaakt om de strategiesessie aan te vragen. Ik ga vanaf nu zeker al mijn\r\ncampagnes bij Digitus Marketing neerleggen!"</span><br>', 'Beleef de seventies opnieuw en je\r\nkan niet anders dan dansen tijdens onze unieke en spetterende Soulparty\r\nCelebration in Ouwehands Dierenpark in Rhenen. Hét ouderwets gezellige avondje\r\nuit in een sfeervolle ambiance met de discosfeer van toen. Yo...', '2015-12-18 13:25:38', '2015-12-18 13:28:16'),
(8, 'images/cases/Unit Logo.png', 'images/cases/Unit Banner.png', 'Facebook Campagne + Tab-app The Unit', 'facebook-campagne-tab-app-the-unit', 'the Unit - Strength & Conditioning', 'http://www.theunitsc.nl', 'http://www.theunitsc.nl', 1, 3, 1, 'The Unit is dé no-nonsense gym van Heerenveen en omgeving. The\r\nUnit staat voor verbinden. We verbinden verschillende disciplines én mensen\r\ndoor te werken met kleine groepen waarbij persoonlijke aandacht,\r\nplezier&nbsp;en resultaat gegarandeerd is. The Unit: Inspiration, Motivation,\r\nDedication.\r\n\r\n<br><span><br>Anne Bart de Vries van the Unit vroeg ons om via Facebook\r\ninschrijvingen te realiseren voor hun Kickstart Challenge. De Kickstart Challenge\r\nis bedoelt voor mannen en vrouwen tussen de 25 en 35 jaar, die gemotiveerd zijn\r\nom in januari een knallende start te maken en in 4 weken tijd maximaal\r\nresultaat willen boeken op het gebied van kracht, conditie, voeding en\r\npersoonlijke ontwikkeling.<br><br></span><h3>Doel van de campagne</h3><span>Het doel van de campagne\r\nwas om de Kickstart Challenge te vullen met 10 gemotiveerde mannen en vrouwen\r\ntussen de 25 en 35 jaar en affiniteit hebben met sport.<br></span><br><h3>Hoe</h3><span>We hebben de volgende\r\nstrategie bedacht:<br>\r\nVia een Facebook tab-app kunnen Facebook gebruikers zich inschrijven voor de\r\nKickstart Challenge. Om de challenge exclusief te houden, konden mensen zich\r\naanmelden tot een deadline, de periode om aan te melden heeft 2 weken geduurd. Daarnaast\r\nhebben we natuurlijk een Facebook advertentie campagne gedraaid om zoveel\r\nmogelijk mensen naar de tab-app te verwijzen, ook deze campagne heeft 2 weken\r\ngedraaid.</span>\r\n\r\n<br><span><br>Zie hieronder de tab-app:<br></span><img alt="" src="http://www.digitusmarketing.nl/images/media/Unit Tab.png"><br><br>Om de Kickstart Challenge\r\nonder de aandacht te brengen bij mannen en vrouwen tussen de 25 en 35 in\r\nomgeving Heerenveen, &nbsp;en mensen naar de\r\ntab-app te verwijzen hebben we de volgende advertenties ingezet:\r\n\r\n<br><span><br>Foto advertentie:<br></span><img alt="" src="http://www.digitusmarketing.nl/images/media/Unit Ad 1.png"><br><br>Video advertentie:<br><span><img alt="" src="http://www.digitusmarketing.nl/images/media/Unit Ad 2.png"><br></span><h3>Resultaten</h3><span>Het mooie aan\r\ndeze campagne was, dat er veel shares, likes en reacties kwamen. Waardoor het\r\norganisch/virale bereik ontzettend veel extra bereik heeft opgeleverd, dit zie\r\nje ook terug in de resultaten.<br></span><br><span><b>€85,93,-</b>&nbsp;advertentie budget besteed over\r\neen periode van 2 weken.</span>\r\n\r\n<br><span><b>16.853</b><span>&nbsp;totaal\r\naantal unieke personen bereikt.<br>\r\n<b>5.077</b>&nbsp;unieke personen bereikt (betaald).<br>\r\n<b>11.776</b>&nbsp;unieke personen bereikt organisch/viraal (gratis).<br>\r\n<b>12</b>&nbsp;betaalde conversies (inschrijvingen vanuit de advertenties).<br>\r\n<b>5</b> gratis conversies (inschrijvingen\r\nvanuit het organisch &amp; virale bereik).<br>\r\n<b>€7,16</b>&nbsp;kosten per betaalde conversie (kosten per inschrijving vanuit\r\nde advertenties).<br><br><img alt="" src="http://www.digitusmarketing.nl/images/media/Resultaten the Unit.png"><br><br></span></span><span>Om het samen te vatten, hebben we <b>17</b>\r\ninschrijvingen gerealiseerd voor de Kickstart Challenge, terwijl er maar 10\r\nplekken beschikbaar waren! En als extra bonus de naamsbekendheid een enorme\r\nboost gegeven, door <b>16.853</b> unieke personen\r\nte bereiken die binnen de doelgroep van the Unit vallen.<br><br></span><h3>Anne Bart\'s recensie:</h3><br>“De samenwerking met het team van digitus marketing is meer\r\ndan geslaagd en de investering waard! Met een investering is het de bedoeling\r\ndat het meer dan terug verdiend wordt. Dit is zeker gebeurd. Je levert de\r\ninformatie aan, de jongens bouwen de campagne, denken goed met je mee om alles\r\ner uit te halen wat er in zit! Meer dan tevreden over deze samenwerking en denk\r\nook niet de laatste! ”', 'The Unit is dé no-nonsense gym van Heerenveen en omgeving. The\r\nUnit staat voor verbinden. We verbinden verschillende disciplines én mensen\r\ndoor te werken met kleine groepen waarbij persoonlijke aandacht,\r\nplezier en resultaat gegarandeerd is...', '2015-12-18 16:08:14', '2015-12-23 12:23:40');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `case_klanten`
--

CREATE TABLE `case_klanten` (
  `id` int(10) UNSIGNED NOT NULL,
  `klantnaam` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `case_klanten`
--

INSERT INTO `case_klanten` (`id`, `klantnaam`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Anytime Fitness', 'anytime-fitness', 'images/cases/logo.jpg', '2015-11-22 14:03:36', '0000-00-00 00:00:00'),
(2, 'Ibora Zant', 'ibora-zant', 'images/cases/Ibora Logo.png', '2015-11-22 14:03:52', '0000-00-00 00:00:00'),
(3, 'Praktijk Erna Basten', 'praktijk-erna-basten', 'images/cases/Logo Erna Basten.png', '2015-11-22 14:04:19', '0000-00-00 00:00:00'),
(4, 'Fitnesscentrum Roden', 'fitnesscentrum-roden', 'images/cases/Logo.png', '2015-11-22 14:04:19', '0000-00-00 00:00:00'),
(5, 'Itoshii Zwolle', 'itoshii-zwolle', 'images/cases/Logo.jpg', '2015-11-22 14:04:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorieen`
--

CREATE TABLE `categorieen` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `categorieen`
--

INSERT INTO `categorieen` (`id`, `naam`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '2015-05-13 13:02:23', '2015-05-13 13:02:23'),
(2, 'WhatsApp', '2015-05-22 10:40:54', '2015-05-22 10:40:54');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cursussen`
--

CREATE TABLE `cursussen` (
  `id` int(10) UNSIGNED NOT NULL,
  `afbeelding` varchar(250) DEFAULT NULL,
  `naam` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `salespage_url` varchar(250) NOT NULL,
  `uitgelicht_hoofdstuk_id` int(10) UNSIGNED NOT NULL,
  `uitgelicht_video_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `cursussen`
--

INSERT INTO `cursussen` (`id`, `afbeelding`, `naam`, `slug`, `content`, `salespage_url`, `uitgelicht_hoofdstuk_id`, `uitgelicht_video_id`, `created_at`, `updated_at`) VALUES
(1, 'images/cursussen/1/Cursus-cover.png', 'Slimme Facebook Marketing voor Sportscholen', 'slimme-facebook-marketing-voor-sportscholen', 'Heb je een vraag of is er iets niet duidelijk? Neem dan contact op met <a href="mailto:parsifal@digitusmarketing.nl" target="_blank">parsifal@digitusmarketing.nl</a>.', '', 1, 11, '2015-05-13 13:04:24', '2015-06-12 14:21:10'),
(3, 'images/cursussen/3/videocursus-cover.jpg', 'Facebook advertentie geheimen', 'facebook-advertentie-geheimen', '<p>Heb je een vraag of is er iets niet duidelijk? Neem dan contact op met <a href="mailto:parsifal@digitusmarketing.nl" target="_blank">parsifal@digitusmarketing.nl</a>.</p>\r\n\r\n<h2>Raadpleeg het Facebook helpcentrum</h2>\r\n<p>\r\n<a href="https://www.facebook.com/help/364458366957655/" target="_blank" class="btn btn-success">Facebook helpcentrum</a>\r\n</p>', '21oktober', 10, 46, '2015-10-01 13:52:50', '2015-10-22 13:15:14'),
(4, 'images/cursussen/4/videocursus-cover.jpg', 'Succesvolle Tijdlijnacties', 'succesvolle-tijdlijnacties', 'Heb je een vraag of is er iets niet duidelijk? Neem dan contact op met <a href="mailto:parsifal@digitusmarketing.nl" target="_blank">parsifal@digitusmarketing.nl</a>.', '', 16, 86, '2015-11-17 10:53:01', '2015-11-17 16:50:33');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cursus_user`
--

CREATE TABLE `cursus_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `cursus_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `cursus_user`
--

INSERT INTO `cursus_user` (`id`, `cursus_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 1, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 1, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 1, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 1, 13, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 1, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 1, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 1, 237, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 3, 237, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 3, 44, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 3, 212, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 3, 54, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 3, 61, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 3, 226, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 3, 240, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 3, 55, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 3, 245, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 3, 209, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 3, 107, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 3, 251, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 3, 260, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 3, 246, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 4, 269, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 4, 271, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 4, 270, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 4, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 4, 272, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 4, 274, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 4, 275, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 3, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 4, 277, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 3, 278, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 4, 278, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 4, 276, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cursus_video`
--

CREATE TABLE `cursus_video` (
  `id` int(10) UNSIGNED NOT NULL,
  `cursus_id` int(10) UNSIGNED NOT NULL,
  `video_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `cursus_video`
--

INSERT INTO `cursus_video` (`id`, `cursus_id`, `video_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `diensten`
--

CREATE TABLE `diensten` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `titel` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `diensten`
--

INSERT INTO `diensten` (`id`, `icon`, `titel`, `slug`, `label`, `content`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-pencil', 'Adverteren op Facebook', 'adverteren-op-facebook', 'dienst', '<p>Het <strong>juiste bericht</strong> onder de aandacht bij de <strong>juiste doelgroep</strong> op het <strong>juiste moment</strong>!</p>\r\n<p><img src="../../../images/media/fb-mobile-ad.png" alt="" width="810" height="330" /></p>\r\n<p>&nbsp;</p>\r\n<p>Wil jij Facebook inzetten om meer omzet te genereren? Twijfel je nog of je Facebook Marketing&nbsp;moet uitbesteden of er zelf mee aan de slag gaat?</p>\r\n<p>Dit is heel herkenbaar! Adverteren op Facebook kan iedereen leren. Maar zonder de juiste strategie is het zonde van je tijd en geld.</p>\r\n<p>Wij zien vaak ondernemers die meer met Facebook Marketing willen doen, maar ze hebben g&eacute;&eacute;n idee hoe. Wie is precies mijn doelgroep en hoe bereik ik die? Hoe zet ik effectieve Facebook advertenties op? Wat kost het eigenlijk? En vooral: hoe achterhaal ik het resultaat van mijn advertenties?</p>\r\n<p><strong>Wij helpen jou om maximaal rendement uit Facebook te halen!</strong></p>\r\n<h3>Wat kan ik bereiken met Facebook Marketing?</h3>\r\n<p>Of je nu meer naamsbekendheid wilt, meer producten/diensten wilt verkopen of je imago een boost wilt geven; met de juiste strategie is Facebook een ongelofelijk effectief medium om jouw doelstellingen te realiseren.</p>\r\n<h3>De juiste boodschap bij de juiste doelgroep</h3>\r\n<p>De grote kracht van Facebook is dat het de mogelijkheid biedt om advertenties toe te spitsen op hele specifieke doelgroepen. Hier missen de meeste mensen enorme kansen. De kunst is om de juiste boodschap bij de juiste doelgroep onder de aandacht te brengen.</p>\r\n<h3>Waarom Digitus Marketing?</h3>\r\n<p>Omdat wij ons al meer dan 4 jaar volledig focussen op Facebookmarketing, hebben wij de juiste kennis in huis om jouw Facebook campagne tot een groot succes te maken. Aan de hand van de doelgroep(en) brengen wij de wensen en behoeftes in kaart. Door deze in de advertenties te communiceren, trekken we eenvoudig de aandacht van jouw doelgroep.</p>\r\n<h3>Wil jij contact met specialisten met een enorme passie voor Facebook Marketing?</h3>\r\n<p>Wij vertellen jou hoe jij Facebook Marketing effectief in kunt zetten om maximaal rendement uit jouw advertenties te halen.</p>\r\n<p>&nbsp;</p>', '2015-05-13 13:55:38', '2015-10-27 16:52:50'),
(2, 'fa fa-plus', 'Facebook tabapps', 'facebook-tabapps', 'dienst', '<h3>Facebook Marketing met tabs!</h3>\r\n<p>Wil jij Facebook inzetten om mensen binnen jouw doelgroep specifieke acties te laten uitvoeren, die nergens op Facebook mogelijk zijn? Dan is het interessant om naar de mogelijkheden van Facebook tabs te kijken</p>\r\n<h3>Wanneer moet ik gebruik maken van een Facebook tab?</h3>\r\n<p>Je wil niet langer alleen afhankelijk zijn van Facebook. Je wil gegevens verkrijgen, zoals e-mailadressen en/of telefoonnummers om in contact te komen met nieuwe klanten.</p>\r\n<h3>Er zijn verschillende strategie&euml;n waarmee je gegevens kunt verkrijgen.</h3>\r\n<p><strong>Waarde bieden.</strong> Onderzoek het probleem bij jouw doelgroep. Speel hier op in door iets gratis weg te geven. Hetgeen dat jij gratis weggegeeft laat zien dat jij de oplossing biedt voor het probleem. Nu sta je in contact en kun je vervolgstappen ondernemen. Dit kun je doen doormiddel van een:</p>\r\n<ul>\r\n<li>Gratis e-book</li>\r\n<li>Gratis videoserie</li>\r\n<li>Gratis proefles</li>\r\n<li>Gratis sessie</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Kortingsactie.</strong> Promoot jouw kortingsactie op Facebook en verzamel direct e-mailadressen. Zo kun je jouw volgende actie, via de mail versturen naar iedereen die ge&iuml;nteresserd is in jouw product of dienst. Dit kun je doen doormiddel van een:</p>\r\n<ul>\r\n<li>Coupon actie</li>\r\n<li>Groep deal</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Amusement (winactie). </strong>Facebook heeft haar succes grotendeels te danken aan de vele populaire spelletjes. Speel in op de populariteit van spelletjes op Facebook en verzamel NAW gegevens van gebruikers binnen jouw doelgroep.</p>\r\n<ul>\r\n<li>Quiz</li>\r\n<li>Poll / Enqu&ecirc;te</li>\r\n<li>Prijsvraag</li>\r\n<li>Puzzel</li>\r\n<li>Foto- of videowedstrijd</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Welke Facebook Marketing strategie past het best bij jouw bedrijf? Neem vrijblijvend contact op, wij denken met je mee en vertellen je waarmee jij het beste resultaat behaalt.</p>', '2015-05-13 13:56:08', '2015-10-27 16:53:56'),
(3, 'fa fa-bullhorn', 'Live trainingen', 'live-trainingen', 'training', '<h3>Workshop of Seminar op locatie?</h3>\r\n<p>Wil je bij jou op locatie een workshop of seminar organiseren over Facebook Marketing? Neem dan contact met ons op via het formulier onder aan deze pagina om de mogelijkheden te bespreken.</p>\r\n<p>&nbsp;</p>\r\n<h3>Hieronder vind je enkele foto\'s van seminars, webinars &amp; workshops</h3>\r\n<div class="col-md-12"><img class="col-md-6" src="../../../images/media/Webinar 21 Oktober.png" alt="" />\r\n<p class="col-md-6">Facebook Marketing Webinar 21 oktober 2015</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n<hr />\r\n<div class="col-md-12"><img class="col-md-6" src="../../../images/media/facebook-presentatie-25-06-2015.jpg" alt="" />\r\n<p class="col-md-6">Presentatie Facebook Marketing&nbsp;25 juni 2015</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n<hr />\r\n<div class="col-md-12"><img class="col-md-6" src="../../../images/media/facebook-seminar-16-04-2015.jpg" alt="" />\r\n<p class="col-md-6">Facebook Marketing Seminar 16 april 2015</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n<hr />\r\n<div class="col-md-12"><img class="col-md-6" src="../../../images/media/facebook-seminar-20-03-2015-2.jpg" alt="" />\r\n<p class="col-md-6">Facebook Marketing Seminar 20 maart 2015</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n<hr />\r\n<div class="col-md-12"><img class="col-md-6" src="../../../images/media/facebook-seminar-20-02-2015.jpg" alt="" />\r\n<p class="col-md-6">Facebook Marketing Seminar 20 februari 2015</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n<hr />\r\n<div class="col-md-12"><img class="col-md-6" src="../../../images/media/facebook-workshop-18-09-2015.jpg" alt="" />\r\n<p class="col-md-6">Facebook workshop 18 sept 2014</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n<hr />\r\n<div class="col-md-12"><img class="col-md-6" src="../../../images/media/facebook-workshop-18-11-2015.jpg" alt="" />\r\n<p class="col-md-6">Facebook workshop 18 nov 2014</p>\r\n</div>\r\n<div class="clearfix">&nbsp;</div>\r\n<hr />\r\n<div class="clearfix">&nbsp;</div>', '2015-05-13 13:56:24', '2015-10-27 16:45:03'),
(4, 'fa fa-play-circle-o', 'Video trainingen', 'video-trainingen', 'training', '', '2015-05-13 13:57:11', '2015-07-19 15:22:11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL,
  `naam` text NOT NULL,
  `slug` varchar(150) NOT NULL,
  `slogan_titel` text NOT NULL,
  `slogan_tekst` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `downloads` varchar(10) NOT NULL,
  `pdf` varchar(500) NOT NULL,
  `form_link` varchar(250) NOT NULL,
  `form_u` varchar(250) NOT NULL,
  `form_id` varchar(250) NOT NULL,
  `form_token` varchar(250) NOT NULL,
  `form_field1` varchar(250) NOT NULL,
  `form_field2` varchar(250) NOT NULL,
  `form_field3` varchar(250) DEFAULT NULL,
  `form_field4` varchar(250) DEFAULT NULL,
  `field1_placeholder` text NOT NULL,
  `field2_placeholder` text NOT NULL,
  `field3_placeholder` text,
  `field4_placeholder` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ebooks`
--

INSERT INTO `ebooks` (`id`, `active`, `naam`, `slug`, `slogan_titel`, `slogan_tekst`, `image`, `downloads`, `pdf`, `form_link`, `form_u`, `form_id`, `form_token`, `form_field1`, `form_field2`, `form_field3`, `form_field4`, `field1_placeholder`, `field2_placeholder`, `field3_placeholder`, `field4_placeholder`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'Slimme Facebook Marketing voor Sportscholen', 'slimme-facebook-marketing-voor-sportscholen', 'Hoe krijg je meer leden in jouw sportschool via Facebook?', 'Ontdek het nu, en download direct het e-book gratis!', '../images/digitus/ebooks/ebook-marketing-sportschool.png', '327', '', '//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=05d5ebe554&c=?', '4385a7e4ded2873d14cf34514', '05d5ebe554', 'b_4385a7e4ded2873d14cf34514_05d5ebe554', 'MERGE0', 'MERGE1', 'MERGE2', 'MERGE3', 'Email adres..', 'Naam..', 'Bedrijfsnaam..', 'Telefoonnummer..', '0000-00-00 00:00:00', '2015-11-02 12:18:27', NULL),
(2, 0, 'De Basis Van Een Succesvolle Facebook Pagina In 16 Stappen', 'de-basis-van-een-succesvolle-facebook-pagina-in-16-stappen', 'De Basis Van Een Succesvolle Facebook Pagina In 16 Stappen', 'Pas de tips uit dit e-book toe om optimaal gebruik te maken van de mogelijkheden die Facebook paginabeheerders biedt.', '../images/digitus/ebooks/ebook-plank.png', '423', '', '//facebook.us7.list-manage.com//subscribe/post-json?id=421d31f82f&c=?', '4385a7e4ded2873d14cf34514', '421d31f82f', 'b_4385a7e4ded2873d14cf34514_421d31f82f', 'EMAIL', 'NAAM', '', '', 'Email..', 'Naam..', '', '', '2015-07-15 10:22:26', '2015-12-04 12:47:18', NULL),
(5, 0, 'Titel van het ebook', 'titel-van-ebook', 'Slogan titel van het ebook', 'Slogan tekst van het ebook', 'images/digitus/ebooks/advies-gesprek.png', '188', 'uploads/ebooks/(VERSIE-OUD)-De-Basis-Van-Een-Succesvolle-Facebook-Pagina-In-16-Stappen.pdf', '//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=05d5ebe554&c=?', '4385a7e4ded2873d14cf34514', '05d5ebe554', 'b_4385a7e4ded2873d14cf34514_05d5ebe554', 'NAAM', 'EMAIL', 'BNAAM', 'TELEFOON', 'Naam..', 'Email..', 'Bedrijfsnaam..', 'Telefoonnummer..', '2015-07-17 09:50:25', '2015-07-17 14:57:01', '2015-07-17 14:57:01'),
(6, 0, 'De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen', 'de-basis-van-een-succesvolle-facebook-pagina-in-10-stappen-oud', 'De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen', 'Facebook verandert ontzettend snel daarom hebben we ons e-book weer geüpdate.', 'images/digitus/ebooks/ebook-succesvolle-facebook-pagina-10-stappen.png', '0', '', '//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=96e70beaed&c=?', '4385a7e4ded2873d14cf34514', '96e70beaed', 'b_4385a7e4ded2873d14cf34514_96e70beaed', 'MERGE1', 'MERGE0', 'MERGE2', '', 'Voornaam..', 'Email..', 'Achternaam..', '', '2015-10-29 15:13:51', '2015-12-01 14:42:08', '2015-12-01 14:42:08'),
(7, 1, 'De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen', 'de-basis-van-een-succesvolle-facebook-pagina-in-10-stappen', 'De Basis Van Een Succesvolle Facebook Pagina In 10 Stappen', 'Pas de tips uit dit e-book toe om optimaal gebruik te maken van de mogelijkheden die Facebook paginabeheerders biedt.', 'images/digitus/ebooks/ebook-succesvolle-facebook-pagina-10-stappen.png', '1178', '', '//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=234c875e36&c=?', '4385a7e4ded2873d14cf34514', '234c875e36', 'b_4385a7e4ded2873d14cf34514_234c875e36', 'MERGE0', 'MERGE1', 'MERGE2', '', 'Email..', 'Voornaam..', 'Achternaam..', '', '2015-12-01 14:41:54', '2016-01-02 00:33:58', NULL),
(8, 0, 'Hoe De Meest Succesvolle Ondernemers Facebook Inzetten Als Marketing Machine!', 'de-7-redenen-waarom-jouw-facebook-advertenties-niet-genoeg-klanten-opleveren', 'Hoe De Meest Succesvolle Ondernemers Facebook Inzetten Als Marketing Machine', '7 direct te implementeren geheimen die jouw business naar een volgend niveau brengen', 'images/digitus/ebooks/Hoe-De-Meest-Succesvolle-Ondernemers-Facebook-Inzetten-Als-Marketing-Machine.png', '0', 'uploads/ebooks/pdf_server.php?file=De-Basis-Van-Een-Succesvolle-Facebook-Pagina-In-10-Stappen', '//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=4f1ed62cf7&c=?', '4385a7e4ded2873d14cf34514', '4f1ed62cf7', 'b_4385a7e4ded2873d14cf34514_4f1ed62cf7', 'MERGE0', 'MERGE1', 'MERGE2', NULL, 'Email..', 'Voornaam..', 'Achternaam..', NULL, '2015-12-23 10:07:39', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hoofdstukken`
--

CREATE TABLE `hoofdstukken` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` text NOT NULL,
  `shortname` text NOT NULL,
  `cursus_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `hoofdstukken`
--

INSERT INTO `hoofdstukken` (`id`, `naam`, `shortname`, `cursus_id`, `created_at`, `updated_at`) VALUES
(1, 'Introductie', 'introductie', 1, '2015-10-16 11:06:00', '2015-05-28 09:12:29'),
(2, 'Basis', 'basis', 1, '2015-10-16 11:06:07', '2015-05-28 09:12:36'),
(4, 'Aan De Slag', 'aan-de-slag', 1, '2015-10-16 11:06:28', '2015-05-28 09:12:44'),
(10, 'Strategie - Van Facebook gebruiker naar klant', 'strategie-van-facebook-gebruiker-naar-klant', 3, '2015-10-20 12:03:43', '2015-10-20 12:03:43'),
(11, 'Hoe werkt adverteren op Facebook?', 'hoe-werkt-adverteren-op-facebook', 3, '2015-10-20 12:03:58', '2015-10-20 12:03:58'),
(12, 'Juiste doelstelling en doelgroepen voor maximaal rendement', 'juiste-doelstelling-en-doelgroepen-voor-maximaal-rendement', 3, '2015-10-20 12:04:17', '2015-10-20 12:04:17'),
(13, 'Geavanceerde doelgroepen', 'geavanceerde-doelgroepen', 3, '2015-10-20 12:04:32', '2015-10-20 12:04:32'),
(14, 'Effectieve Facebook advertenties samenstellen', 'effectieve-facebook-advertenties-samenstellen', 3, '2015-10-20 12:04:47', '2015-10-20 12:04:47'),
(15, 'Resultaten optimaliseren voor meer resultaat en lagere kosten', 'resultaten-optimaliseren-voor-meer-resultaat-en-lagere-kosten', 3, '2015-10-20 12:06:02', '2015-10-20 12:06:02'),
(16, 'De Theorie Achter Het Bereik Op Facebook', 'de-theorie-achter-het-bereik-op-facebook', 4, '2015-11-18 14:56:39', '2015-11-18 14:56:39'),
(17, 'Je Tijdlijnactie Voorbereiden', 'je-tijdlijnactie-voorbereiden', 4, '2015-11-18 14:56:57', '2015-11-18 14:56:57'),
(18, 'Je Tijdlijnactie Samenstellen', 'je-tijdlijnactie-samenstellen', 4, '2015-11-18 14:57:16', '2015-11-18 14:57:16'),
(19, 'Je Tijdlijnactie Promoten', 'je-tijdlijnactie-promoten', 4, '2015-11-18 14:57:36', '2015-11-18 14:57:36'),
(20, 'Winnaar(s) Selecteren & Bekend Maken', 'winnaars-selecteren-bekend-maken', 4, '2015-11-18 14:58:57', '2015-11-18 14:58:57'),
(21, 'BONUS', 'bonus', 4, '2015-11-24 14:33:37', '2015-11-24 14:33:37');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `titel` text NOT NULL,
  `alt` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `images`
--

INSERT INTO `images` (`id`, `url`, `titel`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'images/media/handelend als.png', 'Handelend als', '', '2015-05-19 13:18:00', '2015-05-19 13:18:00'),
(3, 'images/media/publiek uitbreiden contactpersonen importeren.png', 'Contactpersonen importeren', '', '2015-05-19 13:22:21', '2015-05-19 13:22:21'),
(4, 'images/media/emailcontactpersonen uitnodigen.png', 'Emailcontactpersonen uitnodigen', '', '2015-05-19 13:24:25', '2015-05-19 13:24:25'),
(5, 'images/media/e-mailcontactpersonen uitnodigen selecteren.png', 'Emailcontactpersonen selecteren', '', '2015-05-19 13:25:11', '2015-05-19 13:25:11'),
(6, 'images/media/voorbeeld uitnodiging.png', 'Voorbeeld uitnodiging', '', '2015-05-19 13:26:21', '2015-05-19 13:26:21'),
(7, 'images/media/publiek uitbreiden vrienden uitnodigen.png', 'Vrienden uitnodigen', '', '2015-05-19 13:28:48', '2015-05-19 13:28:48'),
(8, 'images/media/vrienden uitnodigen zoek in alle vrienden.png', 'Zoek in alle vrienden', '', '2015-05-19 13:29:45', '2015-05-19 13:29:45'),
(9, 'images/media/Voorbeeld uitnodiging melding.png', 'Voorbeeld uitnodigen melding', '', '2015-05-19 13:30:19', '2015-05-19 13:30:19'),
(10, 'images/media/vrienden uitnodigen op pagina.png', 'Vrienden uitnodigen op pagina', '', '2015-05-19 13:36:54', '2015-05-19 13:36:54'),
(11, 'images/media/Wat kost dat dan.png', 'Wat kost dat dan', '', '2015-05-19 15:19:44', '2015-05-19 15:19:44'),
(12, 'images/media/Stap 1.jpg', 'Stap 1', '', '2015-05-20 15:11:44', '2015-05-20 15:11:44'),
(13, 'images/media/FB Pagina onzichtbaar maken.png', 'Facebook pagina onzichtbaar maken', '', '2015-05-20 15:15:14', '2015-05-20 15:15:14'),
(14, 'images/media/Interesselijst maken 28.png', 'Interesselijst maken', '', '2015-05-20 15:17:20', '2015-05-20 15:17:20'),
(15, 'images/media/Interesse lijst naam geven.png', 'Interesselijst naam geven', '', '2015-05-20 15:18:36', '2015-05-20 15:18:36'),
(16, 'images/media/Zoek naar de naam van je interesselijst.png', 'Zoek je interesselijst', '', '2015-05-20 15:20:32', '2015-05-20 15:20:32'),
(18, 'images/media/Interesselijst terugvinden.png', 'Interesselijst terugvinden', '', '2015-05-20 15:23:26', '2015-05-20 15:23:26'),
(19, 'images/media/Melding pagina niet gepubliceerd.png', 'Melding pagina niet gepubliceerd', '', '2015-05-20 15:24:52', '2015-05-20 15:24:52'),
(20, 'images/media/introducingsaved2.png', 'Introducing save 2', '', '2015-05-21 08:24:16', '2015-05-21 08:24:16'),
(21, 'images/media/introducingsave3.png', 'Introducing save 3', '', '2015-05-21 08:26:13', '2015-05-21 08:26:13'),
(22, 'images/media/Facebook chat uitschakelen.png', 'Facebook chat uitschakelen', '', '2015-05-21 09:30:04', '2015-05-21 09:30:04'),
(23, 'images/media/Stap 2 chat uitschakelen.png', 'Chat uitschakelen', '', '2015-05-21 09:38:42', '2015-05-21 09:38:42'),
(24, 'images/media/Chat geluiden uitschakelen.png', 'Chat geluiden uitschakelen', '', '2015-05-21 09:40:47', '2015-05-21 09:40:47'),
(25, 'images/media/melding 1.png', 'Meldingen gelezen', '', '2015-05-21 09:52:33', '2015-05-21 09:52:33'),
(26, 'images/media/melding 2.png', 'Toekomstige melding uitschakelen', '', '2015-05-21 09:54:49', '2015-05-21 09:54:49'),
(27, 'images/media/melding 3.png', 'Geen meldingen meer ontvangen', '', '2015-05-21 09:56:05', '2015-05-21 09:56:05'),
(28, 'images/media/Download newsfeed Eradictaor 1.png', 'Download newsfeed eradictor', '', '2015-05-21 10:04:38', '2015-05-21 10:04:38'),
(29, 'images/media/Download newsfeed Eradictor 2.png', 'Download newsfeed eradictor 2', '', '2015-05-21 10:07:11', '2015-05-21 10:07:11'),
(30, 'images/media/SNP_9721C573E41777FBA43E1498AD084E3B160C_2696434_en_v2.png', 'Google Chrome menu knop', '', '2015-05-21 10:09:25', '2015-05-21 10:09:25'),
(31, 'images/media/Download newsfeed Eradictor 3.png', 'Download newsfeed eradictor 3', '', '2015-05-21 10:10:43', '2015-05-21 10:10:43'),
(32, 'images/media/Download newsfeed Eradictor 4.png', 'Download newsfeed eradictor 4', '', '2015-05-21 10:11:57', '2015-05-21 10:11:57'),
(33, 'images/media/Zijbalk verbergen 2.png', 'Zijbalk verbergen', '', '2015-05-21 10:47:17', '2015-05-21 10:47:17'),
(34, 'images/media/Apps blokkeren 1.png', 'Apps blokkeren 1', '', '2015-05-21 11:00:36', '2015-05-21 11:00:36'),
(35, 'images/media/Apps blokkeren 2.png', 'Apps blokkeren 2', '', '2015-05-21 11:02:13', '2015-05-21 11:02:13'),
(36, 'images/media/Apps vriend blokkeren 3.png', 'Apps blokkeren 3', '', '2015-05-21 11:04:43', '2015-05-21 11:04:43'),
(37, 'images/media/Apps blokkeren 4.png', 'Apps blokkeren 4', '', '2015-05-21 11:05:02', '2015-05-21 11:05:02'),
(38, 'images/media/Bericht later 1.png', 'Bericht later 1', '', '2015-05-21 11:17:23', '2015-05-21 11:17:23'),
(39, 'images/media/Bericht later 2.png', 'Bericht later 2', '', '2015-05-21 11:17:42', '2015-05-21 11:17:42'),
(40, 'images/media/bericht later 3.png', 'Bericht later 3', '', '2015-05-21 11:17:59', '2015-05-21 11:17:59'),
(41, 'images/media/fans en fans.png', 'Fans en Fans', '', '2015-05-21 11:46:33', '2015-05-21 11:46:33'),
(42, 'images/media/happy_face_raising_eyebrows_hg_clr.gif', 'hm he', '', '2015-05-21 11:47:43', '2015-05-21 11:47:43'),
(43, 'images/media/Ik wil dit niet zien.png', 'Ik wil dit niet zien', '', '2015-05-21 12:04:17', '2015-05-21 12:04:17'),
(44, 'images/media/Ik wil dit niet zien 2.png', 'Ik wil dit niet zien 2', '', '2015-05-21 12:04:35', '2015-05-21 12:04:35'),
(45, 'images/media/Waarom wil je dit niet zien.png', 'Waarom wil je dit niet zien', '', '2015-05-21 12:04:54', '2015-05-21 12:04:54'),
(46, 'images/media/Vrienden en vind ik leuks beheren.png', 'vrienden en vind ik leuks beheren', '', '2015-05-21 12:05:19', '2015-05-21 12:05:19'),
(47, 'images/media/Wanneer zijn mijn fans online.png', 'Wanneer zijn mijn fans online', '', '2015-05-21 12:21:31', '2015-05-21 12:21:31'),
(48, 'images/media/Insights.gif', 'Insights gif', '', '2015-05-21 12:22:00', '2015-05-21 12:22:00'),
(49, 'images/media/Fans online KG.png', 'Fans online', '', '2015-05-21 12:22:37', '2015-05-21 12:22:37'),
(50, 'images/media/Bericht plannen 1.png', 'Bericht plannen 1', '', '2015-05-21 12:32:07', '2015-05-21 12:32:07'),
(51, 'images/media/Bericht plannen 3.png', 'Bericht plannen 2', '', '2015-05-21 12:32:26', '2015-05-21 12:32:26'),
(52, 'images/media/Bericht plannen 4.png', 'Bericht plannen 3', '', '2015-05-21 12:32:44', '2015-05-21 12:32:44'),
(53, 'images/media/Bericht plannen 5.png', 'Bericht plannen 4', '', '2015-05-21 12:33:03', '2015-05-21 12:33:03'),
(54, 'images/media/Bericht plannen 6.png', 'Bericht plannen 5', '', '2015-05-21 12:33:25', '2015-05-21 12:33:25'),
(55, 'images/media/10734305_305231486354371_1420997165_n.jpg', 'Facebook tiger bericht', '', '2015-05-21 13:29:57', '2015-05-21 13:29:57'),
(56, 'images/media/10574680_668605413252737_118053656_n.jpeg', 'Facebook kubus werk', '', '2015-05-21 13:30:19', '2015-05-21 13:30:19'),
(57, 'images/media/Voorbeeld onderzoek Facebook 20150.png', 'Voorbeeld onderzoek facebook', '', '2015-05-21 13:31:40', '2015-05-21 13:31:40'),
(58, 'images/media/Voorbeeld Facebook tab digitus.png', 'Voorbeeld facebook app digitus', '', '2015-05-21 15:07:14', '2015-05-21 15:07:14'),
(59, 'images/media/DollarShaveClubSignUp650dfd.jpg', 'Dollar shave club', '', '2015-05-21 15:07:35', '2015-05-21 15:07:35'),
(60, 'images/media/Tab voorbeeld digitus gratis e-book.png', 'ebook tab', '', '2015-05-21 15:08:04', '2015-05-21 15:08:04'),
(61, 'images/media/iOSDestination.jpg', 'call to action mobiel', '', '2015-05-21 15:08:47', '2015-05-21 15:08:47'),
(62, 'images/media/CreateACallToActionButton.jpg', 'create call to action', '', '2015-05-21 15:09:34', '2015-05-21 15:09:34'),
(63, 'images/media/Facebook search 1.png', 'Facebook searc 1', '', '2015-05-21 15:48:14', '2015-05-21 15:48:14'),
(64, 'images/media/Facebook search 2.png', 'Facebook search 2', '', '2015-05-21 15:49:09', '2015-05-21 15:49:09'),
(65, 'images/media/1 SellSomething650.jpg', 'Sell something', '', '2015-05-22 09:30:41', '2015-05-22 09:30:41'),
(66, 'images/media/2 SellSomethingForm.jpg', 'Sell something 2', '', '2015-05-22 09:31:05', '2015-05-22 09:31:05'),
(67, 'images/media/1 einddatum bericht Facebook.png', 'Einddatum bericht Facebook', '', '2015-05-22 09:36:33', '2015-05-22 09:36:33'),
(68, 'images/media/2 einddatum bericht Facebook.png', 'Einddatum bericht Facebook 2', '', '2015-05-22 09:37:02', '2015-05-22 09:37:02'),
(69, 'images/media/3 einddatum bericht Facebook.png', 'Einddatum bericht Facebook 3', '', '2015-05-22 09:37:26', '2015-05-22 09:37:26'),
(70, 'images/media/1 Advertentie richten op interesse.png', 'Advertentie richten op interesses', '', '2015-05-22 09:41:58', '2015-05-22 09:41:58'),
(71, 'images/media/2 Advertentie richten op interesse.png', 'Advertentie richten op interesses 2', '', '2015-05-22 09:42:40', '2015-05-22 09:42:40'),
(72, 'images/media/3 Advertentie richten op interesse.png', 'Advertentie richten op interesses 3', '', '2015-05-22 09:43:33', '2015-05-22 09:43:33'),
(73, 'images/media/Call to action in omslagfoto 123.jpg', 'Call to action omslagfoto', '', '2015-05-22 09:46:19', '2015-05-22 09:46:19'),
(74, 'images/media/1 Toplinks link berichten voorbeeld.png', 'Toplinks link berichten', '', '2015-05-22 09:52:57', '2015-05-22 09:52:57'),
(75, 'images/media/2 Toplinks voorbeeld.png', 'Toplinks link berichten 2', '', '2015-05-22 09:53:20', '2015-05-22 09:53:20'),
(76, 'images/media/Facebook__Helped_By_Autoplay__Passes_YouTube_For_Desktop_Video_Views_For_First_Time-800x337.jpg', 'Facebook vs Youtube', '', '2015-05-22 09:58:26', '2015-05-22 09:58:26'),
(77, 'images/media/1 Video tabblad op Facebook.png', 'Video tabblad op Facebook', '', '2015-05-22 10:01:59', '2015-05-22 10:01:59'),
(78, 'images/media/youtube-channel voorbeeld.png', 'YouTube kanaal videos', '', '2015-05-22 10:03:18', '2015-05-22 10:03:18'),
(79, 'images/media/1 uitgelichte video toevoegen.png', 'Uitgelichte video toevoegen', '', '2015-05-22 10:04:38', '2015-05-22 10:04:38'),
(80, 'images/media/Uitgelichte Video info gedeelte Marco Polo voorbeeld.png', 'Uitgelichte video info gedeelte voorbeelde', '', '2015-05-22 10:06:16', '2015-05-22 10:06:16'),
(81, 'images/media/Whatsapp web 1.png', 'WhatsApp web 1', '', '2015-05-22 10:20:35', '2015-05-22 10:20:35'),
(82, 'images/media/Whatsapp web 2 .png', 'WhatsApp web 2', '', '2015-05-22 10:21:03', '2015-05-22 10:21:03'),
(83, 'images/media/WhatsApp Web 3.jpg', 'WhatsApp web 3', '', '2015-05-22 10:21:29', '2015-05-22 10:21:29'),
(84, 'images/media/fb-mobile-ad.png', 'Facebook Mobiele Advertentie voorbeeld', '', '2015-06-12 10:36:24', '2015-06-12 10:36:24'),
(85, 'images/media/Digitus-Marketing-Logo_NW1024x1024.png', 'Logo', '', '2015-06-18 15:07:06', '2015-06-18 15:07:06'),
(86, 'images/media/Bedrijven en Organisaties.jpg', 'Bedrijven en Organisaties', '', '2015-06-18 15:15:19', '2015-06-18 15:15:19'),
(87, 'images/media/Lokale Bedrijven.jpg', 'Lokale Bedrijven', '', '2015-06-18 15:15:34', '2015-06-18 15:15:34'),
(88, 'images/media/Omslagfoto.png', 'Omslagfoto', '', '2015-06-18 15:15:47', '2015-06-18 15:15:47'),
(89, 'images/media/Subcategorieen.png', 'Subcategorieen', '', '2015-06-18 15:15:59', '2015-06-18 15:15:59'),
(90, 'images/media/VideoUploaden.png', 'Video Uploaden', '', '2015-06-19 14:01:24', '2015-06-19 14:01:24'),
(91, 'images/media/Toevoegen.png', 'Aanzet tot actie toevoegen', '', '2015-06-19 14:01:42', '2015-06-19 14:01:42'),
(94, 'images/media/Reach1.png', 'Reach 1', '', '2015-06-23 11:42:57', '2015-06-23 11:43:17'),
(95, 'images/media/Reach2.jpg', 'Reach 2', '', '2015-06-23 11:43:08', '2015-06-23 11:43:08'),
(96, 'images/media/facebook-presentatie-25-06-2015.jpg', 'Facebook presentatie 25-06-2015', '', '2015-07-19 14:38:39', '2015-07-19 14:38:39'),
(97, 'images/media/facebook-seminar-16-04-2015.jpg', 'Facebook seminar 16-04-2015', '', '2015-07-19 14:41:16', '2015-07-19 14:41:16'),
(98, 'images/media/facebook-seminar-20-02-2015.jpg', 'Facebook seminar 20-02-2015', '', '2015-07-19 14:42:12', '2015-07-19 14:42:12'),
(99, 'images/media/facebook-seminar-20-03-2015.jpg', 'Facebook seminar 20-03-2015', '', '2015-07-19 14:43:10', '2015-07-19 14:43:10'),
(100, 'images/media/facebook-seminar-20-03-2015-2.jpg', 'Facebook seminar 20-03-2015-2', '', '2015-07-19 14:44:56', '2015-07-19 14:44:56'),
(101, 'images/media/facebook-workshop-18-11-2015.jpg', 'Facebook workshop 18-11-2015', '', '2015-07-19 14:45:50', '2015-07-19 14:45:50'),
(102, 'images/media/facebook-workshop-18-09-2015.jpg', 'Facebook workshop 18-09-2015', '', '2015-07-19 14:46:35', '2015-07-19 14:46:35'),
(103, 'images/media/Knop.png', 'Facebook Call to Action knop', '', '2015-07-28 08:25:43', '2015-07-28 08:25:43'),
(104, 'images/media/Video met call to action.png', 'Video Call to Action', '', '2015-07-28 08:46:31', '2015-07-28 08:46:31'),
(106, 'images/media/Uitgelichte Video Bewerken.png', 'Uitgelichte Video Bewerken', '', '2015-08-05 11:47:38', '2015-08-05 11:47:38'),
(107, 'images/media/Uitgelichte Video Toevoegen.png', 'Uitgelichte Video Toevoegen', '', '2015-08-05 11:47:54', '2015-08-05 11:47:54'),
(108, 'images/media/Uitgelichte Video.png', 'Uitgelichte Video', '', '2015-08-05 11:48:07', '2015-08-05 11:48:07'),
(109, 'images/media/Video.png', 'Video', '', '2015-08-05 11:48:21', '2015-08-05 11:48:21'),
(110, 'images/media/Videos.png', 'Videos', '', '2015-08-05 11:48:32', '2015-08-05 11:48:32'),
(112, 'images/media/Bericht Plannen.png', 'Bericht Plannen', '', '2015-08-12 13:41:31', '2015-08-12 13:41:31'),
(113, 'images/media/Chinatuin Tijdlijnactie.png', 'Chinatuin Tijdlijnactie', '', '2015-08-12 13:41:49', '2015-08-12 13:41:49'),
(114, 'images/media/Facebook Question Table.png', 'Facebook Vragen Overzicht', '', '2015-08-12 13:42:02', '2015-08-12 13:42:02'),
(115, 'images/media/Frequentie.png', 'Frequentie', '', '2015-08-12 13:42:16', '2015-08-12 13:42:16'),
(116, 'images/media/Subway Call to Action.jpg', 'Subway Facebook Call to Action', '', '2015-08-12 13:42:34', '2015-08-12 13:42:34'),
(117, 'images/media/Bericht Plannen2.png', 'Bericht Plannen 2', '', '2015-08-19 10:44:29', '2015-08-19 10:44:29'),
(118, 'images/media/Pagina Onzichtbaar Maken.png', 'Pagina Onzichtbaar Maken', '', '2015-08-19 11:26:46', '2015-08-19 11:26:46'),
(119, 'images/media/Opties.jpg', 'Opties', '', '2015-08-19 15:10:33', '2015-08-19 15:10:33'),
(120, 'images/media/Contacten uploaden.png', 'Contacten uploaden', '', '2015-08-19 15:10:46', '2015-08-19 15:10:46'),
(121, 'images/media/Contactpersonen uitnodigen.png', 'Contactpersonen uitnodigen', '', '2015-08-19 15:10:57', '2015-08-19 15:10:57'),
(122, 'images/media/Email contacten uitnodigen.png', 'Email contacten uitnodigen', '', '2015-08-19 15:11:08', '2015-08-19 15:11:08'),
(123, 'images/media/Uitnodigen.png', 'Uitnodigen', '', '2015-08-19 15:11:18', '2015-08-19 15:11:18'),
(124, 'images/media/Uitnodigingen verzenden.png', 'Uitnodigingen verzenden', '', '2015-08-19 15:11:29', '2015-08-19 15:11:29'),
(125, 'images/media/Vrienden uitnodigen.png', 'Vrienden uitnodigen', '', '2015-08-19 15:11:46', '2015-08-19 15:11:46'),
(127, 'images/media/Carousel Ad Mobiel 1.jpg', 'Carousel Ad Mobiel 1', '', '2015-08-21 12:41:50', '2015-08-21 12:41:50'),
(128, 'images/media/Carousel Ad Mobiel 2.jpg', 'Carousel Ad Mobiel 2', '', '2015-08-21 12:42:00', '2015-08-21 12:42:00'),
(129, 'images/media/Carousel Ad Mobiel 3.jpg', 'Carousel Ad Mobiel 3', '', '2015-08-21 12:42:10', '2015-08-21 12:42:10'),
(130, 'images/media/Carousel Ad Voorbeeld 1.png', 'Carousel Ad Voorbeeld 1', '', '2015-08-21 12:42:29', '2015-08-21 12:42:29'),
(131, 'images/media/Carousel Ad Voorbeeld 2.png', 'Carousel Ad Voorbeeld 2', '', '2015-08-21 12:42:42', '2015-08-21 12:42:42'),
(132, 'images/media/Carousel Ad Voorbeeld 3.png', 'Carousel Ad Voorbeeld 3', '', '2015-08-21 12:42:58', '2015-08-21 12:42:58'),
(133, 'images/media/Carousel Ad.png', 'Carousel Ad', '', '2015-08-21 12:43:09', '2015-08-21 12:43:09'),
(135, 'images/media/Pijl naar aanzet tot actie knop.png', 'Pijl naar aanzet tot actie knop', 'Pijl naar aanzet tot actie knop', '2015-08-21 12:47:14', '2015-08-21 12:47:14'),
(136, 'images/media/Remarketing Tabel.jpg', 'Remarketing tabel', '', '2015-08-21 15:22:08', '2015-08-21 15:22:08'),
(137, 'images/media/Als eerste weergeven.png', 'Als eerste weergeven', '', '2015-08-21 15:50:33', '2015-08-21 15:50:33'),
(138, 'images/media/Als eerste weergeven2.png', 'Als eerste weergeven 2', '', '2015-08-21 15:50:48', '2015-08-21 15:50:48'),
(139, 'images/media/Voorkeuren voor nieuwsoverzicht.png', 'Voorkeuren nieuwsoverzicht', '', '2015-08-21 15:51:05', '2015-08-21 15:51:05'),
(140, 'images/media/Voorkeuren voor nieuwsoverzicht2.png', 'Voorkeuren nieuwsoverzicht 2', '', '2015-08-21 15:51:13', '2015-08-21 15:51:13'),
(142, 'images/media/Facebook wijziging.jpg', 'Facebook Wijziging', '', '2015-09-02 11:13:11', '2015-09-02 11:13:11'),
(143, 'images/media/Mobile before after.png', 'Mobile before after', '', '2015-09-02 12:39:18', '2015-09-02 12:39:18'),
(144, 'images/media/Ibora Zant Ad.png', 'Ibora Zant Ad', '', '2015-09-16 11:16:24', '2015-09-16 11:16:24'),
(145, 'images/media/Ibora Zant Resultaten1.png', 'Ibora Zant Resultaten', '', '2015-09-16 11:16:40', '2015-09-16 11:16:40'),
(146, 'images/media/Ibora Zant Tab.png', 'Ibora Zant Tab', '', '2015-09-16 11:16:52', '2015-09-16 11:16:52'),
(147, 'images/media/Erna Basten Tab.png', 'Erna Basten Tab', '', '2015-09-16 14:26:44', '2015-09-16 14:26:44'),
(148, 'images/media/Erna Basten Ad.png', 'Erna Basten Ad', '', '2015-09-16 14:27:43', '2015-09-16 14:27:43'),
(151, 'images/media/Burning Heart Facebook Tab.png', 'Burning Heart Facebook Tab', 'Burning Heart Facebook Tab', '2015-09-17 10:54:40', '2015-09-17 10:54:40'),
(152, 'images/media/Hart for Her Facebook Tab.png', 'Hart for Her Facebook Tab', 'Hart for Her Facebook Tab', '2015-09-17 10:55:16', '2015-09-17 10:55:16'),
(153, 'images/media/Facebook Campagne Resultaten1.png', 'Facebook Campagne Resultaten1', 'Facebook Campagne Resultaten', '2015-09-17 12:37:19', '2015-09-17 12:37:19'),
(154, 'images/media/Facebook Campagne Resultaten2.png', 'Facebook Campagne Resultaten2', 'Facebook Campagne Resultaten', '2015-09-17 12:38:03', '2015-09-17 12:38:03'),
(155, 'images/media/Facebook Campagne Resultaten3.png', 'Facebook Campagne Resultaten3', 'Facebook Campagne Resultaten', '2015-09-17 12:38:18', '2015-09-17 12:38:18'),
(156, 'images/media/Facebook Campagne Resultaten4.png', 'Facebook Campagne Resultaten4', 'Facebook Campagne Resultaten', '2015-09-17 12:38:29', '2015-09-17 12:38:29'),
(157, 'images/media/Facebook Campagne Resultaten5.png', 'Facebook Campagne Resultaten5', 'Facebook Campagne Resultaten', '2015-09-17 12:38:41', '2015-09-17 12:38:41'),
(158, 'images/media/Jan.png', 'Jan', 'Jan', '2015-09-21 15:03:51', '2015-09-21 15:03:51'),
(159, 'images/media/Facebook Carousel Ad 1.png', 'Facebook Carousel Ad 1', '', '2015-09-23 11:20:20', '2015-09-23 11:20:20'),
(160, 'images/media/Facebook Carousel Ad 2.png', 'Facebook Carousel Ad 2', '', '2015-09-23 11:20:36', '2015-09-23 11:20:36'),
(161, 'images/media/Facebook Link Ad 1.png', 'Facebook Link Ad 1', '', '2015-09-23 11:20:50', '2015-09-23 11:20:50'),
(162, 'images/media/Facebook Link Ad 2.png', 'Facebook Link Ad 2', '', '2015-09-23 11:21:00', '2015-09-23 11:21:00'),
(163, 'images/media/Facebook Link Ad 3.png', 'Facebook Link Ad 3', '', '2015-09-23 11:21:12', '2015-09-23 11:21:12'),
(164, 'images/media/Facebook Link Ad 4.png', 'Facebook Link Ad 4', '', '2015-09-23 11:21:23', '2015-09-23 11:21:23'),
(165, 'images/media/Facebook Link Ad 5.png', 'Facebook Link Ad 5', '', '2015-09-23 11:21:33', '2015-09-23 11:21:33'),
(166, 'images/media/Facebook Link Ad 6.png', 'Facebook Link Ad 6', '', '2015-09-23 11:21:46', '2015-09-23 11:21:46'),
(167, 'images/media/Facebook Link Ad 7.png', 'Facebook Link Ad 7', '', '2015-09-23 11:21:57', '2015-09-23 11:21:57'),
(168, 'images/media/Facebook Link Ad 8.png', 'Facebook Link Ad 8', '', '2015-09-23 11:22:08', '2015-09-23 11:22:08'),
(169, 'images/media/Facebook Link Ad Mobiel 1.png', 'Facebook Link Ad Mobiel 1', '', '2015-09-23 11:22:20', '2015-09-23 11:22:20'),
(170, 'images/media/Facebook Link Ad Mobiel 2.png', 'Facebook Link Ad Mobiel 2', '', '2015-09-23 11:22:31', '2015-09-23 11:22:31'),
(171, 'images/media/Facebook Video Ad 1.png', 'Facebook Video Ad 1', '', '2015-09-23 11:22:43', '2015-09-23 11:22:43'),
(173, 'images/media/Erna.png', 'Erna', '', '2015-09-24 14:38:21', '2015-09-24 14:38:21'),
(174, 'images/media/Banner Sportscholen Actie.png', 'Banner Sportscholen Actie', '', '2015-09-24 15:01:48', '2015-09-24 15:01:48'),
(175, 'images/media/Webinar 21 Oktober.png', 'Facebook Marketing Webinar', '', '2015-10-27 15:05:10', '2015-10-27 15:05:10'),
(176, 'images/media/FCR AanmeldForm.png', 'FCR Aanmeldformulier', '', '2015-11-20 12:42:40', '2015-11-20 12:42:40'),
(177, 'images/media/FCR Ad 1 Milon.png', 'FCR Ad Milon Cirkel', '', '2015-11-20 12:43:37', '2015-11-20 12:43:37'),
(178, 'images/media/FCR Milon Aug.png', 'FCR Resultaten1', '', '2015-11-20 12:44:38', '2015-11-20 12:44:38'),
(179, 'images/media/Foto1.jpg', 'FCR inzending1', '', '2015-11-20 14:00:55', '2015-11-20 14:00:55'),
(180, 'images/media/FCR Wedstrijd.png', 'FCR Wedstrijd', '', '2015-11-20 14:01:52', '2015-11-20 14:01:52'),
(181, 'images/media/FCR Inzendingen.png', 'FCR Inzendingen', '', '2015-11-20 14:02:43', '2015-11-20 14:02:43'),
(182, 'images/media/Itoshii Tijdlijnactie.png', 'Itoshii Facebook Tijdlijnactie', '', '2015-11-20 15:35:13', '2015-11-20 15:35:13'),
(183, 'images/media/Ad 1 - Vroegboekkorting.png', 'Soulparty 1', '', '2015-12-18 13:16:05', '2015-12-18 13:16:05'),
(184, 'images/media/Ad 2 - Nog enkele tickets beschikbaar.png', 'Soulparty 2', '', '2015-12-18 13:16:42', '2015-12-18 13:16:42'),
(185, 'images/media/UITVERKOCHT.png', 'Soulparty 3', '', '2015-12-18 13:17:19', '2015-12-18 13:17:19'),
(186, 'images/media/Cijfers uit de campange.png', 'Soulparty Facebook Campagne', '', '2015-12-18 13:19:10', '2015-12-18 13:19:10'),
(187, 'images/media/Unit Tab.png', 'Unit Facebook Tab-app', '', '2015-12-18 16:04:02', '2015-12-18 16:04:02'),
(188, 'images/media/Unit Ad 1.png', 'Unit Ad 1', '', '2015-12-18 16:05:04', '2015-12-18 16:05:04'),
(189, 'images/media/Unit Ad 2.png', 'Unit Ad 2', '', '2015-12-18 16:05:41', '2015-12-18 16:05:41'),
(190, 'images/media/Resultaten the Unit.png', 'Unit Resultaten', '', '2015-12-18 16:06:57', '2015-12-18 16:06:57');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `punt_1` text NOT NULL,
  `punt_2` text NOT NULL,
  `punt_3` text,
  `punt_4` text,
  `punt_5` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `modules`
--

INSERT INTO `modules` (`id`, `titel`, `image`, `punt_1`, `punt_2`, `punt_3`, `punt_4`, `punt_5`, `created_at`, `updated_at`) VALUES
(1, 'Module 1 - Strategie - Van Facebook gebruiker naar klant.\r\n', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_DVD1.png', 'Hoe jij Facebook inzet om meer klanten aan te trekken en niet langer jouw tijd verdoet.\r\n', 'Hoe je de juiste doelgroep aanspreekt en het maximale uit Facebook haalt.\r\n', 'Waar jouw landingspagina aan MOET voldoen om meer aanmeldingen/inschrijvingen te realiseren!\r\n', 'Waarom de meeste mensen verkeerd gebruik maken van Facebook.\r\n', NULL, '2015-11-20 11:32:38', '0000-00-00 00:00:00'),
(2, 'Module 2 - Hoe werkt adverteren op Facebook?\r\n', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_DVD2.png', 'Maak kennis met het geheime wapen voor Facebook advertenties.\r\n', 'Uit welke 3 onderdelen een Facebook campage bestaat en hoe je deze slim gebruikt.\r\n', 'Wat precies het verschil is tussen een Facebook advertentie en een bericht.\r\n', 'Hoe je jouw Facebook advertentie binnen 2 seconden OOK toont op Instagram (NIEUW).\r\n', NULL, '2015-11-20 11:33:08', '0000-00-00 00:00:00'),
(3, 'Module 3 - Juiste doelstelling en doelgroepen voor maximaal rendement.\r\n', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_DVD3.png', 'Hoe je Facebook Pagina statistieken gebruikt om meer inzicht te krijgen in jouw doelgroep.\r\n', 'Hoe je met de Facebook Power editor UREN tijd bespaart (je zal versteld staan).\r\n', 'Hoe je een campagne samenstelt waarmee je je focust op omzet.\r\n', 'Hoe je er voor zorgt dat jouw campagnes overzichtelijk zijn en je altijd alles kunt terugvinden.\r\n', NULL, '2015-11-20 11:33:27', '0000-00-00 00:00:00'),
(4, 'Module 3.1 - Geavanceerde doelgroepen\r\n', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_DVD3.png', 'Hoe je jouw advertenties richt op Fans van andere Facebook pagina’s (profiteer van het budget dat zij al hebben besteed).\r\n', 'Hoe je advertenties richt op Facebook gebruikers die jouw website hebben bezocht.\r\n', 'Hoe je jouw advertenties richt op gebruikers aan de hand van telefoonnummers en/of e-mailadressen.\r\n', 'Hoe je eenvoudig een doelgroep maakt van Facebook gebruikers met een soortgelijkprofiel als jouw klanten.\r\n', 'Hoe je schrikbarend veel te weten kunt komen over jouw doelgroep op Facebook.\r\n', '2015-11-20 11:33:59', '0000-00-00 00:00:00'),
(5, 'Module 4 - Effectieve Facebook advertenties samenstellen\r\n', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_DVD4.png', 'Hoe jij meer leestekens in jouw advertentie teksten kunt verwerken dan andere adverteerders.\r\n', 'Wat een ‘Dark Post’ is en hoe je hiermee een advertentie samenstelt en koppelt aan verschillende doelgroepen (binnen 5 minuten).\r\n', 'Hoe je onweerstaanbare advertenties samenstelt (tekst en afbeelding tips).\r\n', 'Wat de nummer één reden is dat advertenties worden afgekeurd en jij er voor zorgt dat het jou nooit (meer)zal overkomen.\r\n', NULL, '2015-11-20 11:34:19', '0000-00-00 00:00:00'),
(6, 'Module 5 - Resultaten optimaliseren voor meer resultaat en lagere kosten.\n', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_DVD5.png', 'Hoe je snel inzicht krijgt in de resultaten van jouw Facebook campagnes.\n', 'Welke statistieken belangrijk zijn om jouw campagnes te optimaliseren.\n', 'Hoe je aan de hand van jouw campagne nog meer te weten kunt komen over jouw doelgroep!\n', NULL, NULL, '2015-11-20 11:34:37', '0000-00-00 00:00:00'),
(7, 'Module 1 - De Theorie Achter Het Bereik Op Facebook', 'http://www.digitusmarketing.nl/images/site/webinar/tijdlijnacties/Digitus_Marketing_Succesvolle_Tijdlijnacties_DVD1.png', 'De termen nieuwsoverzicht en tijdlijn wat betekenen ze precies?', 'Welke 3 factoren invloed hebben op het bereik van jouw berichten.', 'Op welke 3 manieren je Facebook gebruikers kunt bereiken?', 'Hoe je met een tijdlijnactie maximaal profiteert van de 3 manieren waarop je gebruikers kunt bereiken.', 'Wat Facebook zegt over tijdlijnacties.', '2015-11-26 15:55:39', '0000-00-00 00:00:00'),
(8, 'Module 2 - Je Tijdlijnactie Voorbereiden', 'http://www.digitusmarketing.nl/images/site/webinar/tijdlijnacties/Digitus_Marketing_Succesvolle_Tijdlijnacties_DVD2.png', 'Drie regels waaraan je je moet houden bij het kiezen van een prijs.', 'Wat is een goede looptijd voor een tijdlijnactie?', 'Regels: wat mag wel, wat mag niet en wat is verstandig?', 'Wat je kunt bereiken met je tijdlijnactie.', NULL, '2015-11-26 15:56:51', '0000-00-00 00:00:00'),
(9, 'Module 3 - Je Tijdlijnactie Samenstellen', 'http://www.digitusmarketing.nl/images/site/webinar/tijdlijnacties/Digitus_Marketing_Succesvolle_Tijdlijnacties_DVD3.png', 'Wat er in jouw tijdlijnactie MOET staan.', 'Hoe je voorkomt dat jouw tijdlijnactie wordt afgekeurd', 'Hoe een afbeelding het bereik kan bevorderen', '3 tips om nog meer uit jouw tijdlijnactie te halen', NULL, '2015-11-26 15:57:10', '0000-00-00 00:00:00'),
(10, 'Module 4 - Je Tijdlijnactie Promoten', 'http://www.digitusmarketing.nl/images/site/webinar/tijdlijnacties/Digitus_Marketing_Succesvolle_Tijdlijnacties_DVD4.png', 'Hoe je een advertentie account aanmaakt en een betalingsmethode koppelt', 'Hoe je jouw tijdlijnactie promoot op Facebook', 'Hoe je je tijdlijnactie promoot met de “Bericht Promoten” knop', 'Hoe je je tijdlijnactie promoot met Facebook Power Editor', NULL, '2015-11-26 15:57:34', '0000-00-00 00:00:00'),
(11, 'Module 5 - Winaar(s) Selecteren & Bekend Maken', 'http://www.digitusmarketing.nl/images/site/webinar/tijdlijnacties/Digitus_Marketing_Succesvolle_Tijdlijnacties_DVD5.png', 'Hoe je eerlijk een willekeurige winnaar selecteert', 'Tips over hoe je de winnaar bepaalt aan de hand van een reactie, like of foto', 'Wat er in het bericht moet staan waarin jij de winnaar(s) bekendmaakt', NULL, NULL, '2015-11-26 15:57:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `module_product`
--

CREATE TABLE `module_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `module_product`
--

INSERT INTO `module_product` (`id`, `product_id`, `module_id`) VALUES
(1, 1, 7),
(2, 1, 8),
(3, 1, 9),
(4, 1, 10),
(5, 1, 11),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 2, 5),
(11, 2, 6),
(12, 3, 1),
(13, 3, 2),
(14, 3, 3),
(15, 3, 4),
(16, 3, 5),
(17, 3, 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  `status` text NOT NULL,
  `bedrag` varchar(50) NOT NULL,
  `betaalmethode` text NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pakket_id` int(10) DEFAULT NULL,
  `cursus_id` int(10) UNSIGNED DEFAULT NULL,
  `betaling_datum` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `status`, `bedrag`, `betaalmethode`, `order_id`, `user_id`, `pakket_id`, `cursus_id`, `betaling_datum`, `created_at`, `updated_at`) VALUES
(18, 'tr_WFAhgZ6QHa', '', '363', 'ideal', '11015134935-1', 1, NULL, NULL, '2015-10-01 18:23:41', '2015-10-01 11:49:35', '2015-11-18 19:55:05'),
(19, 'tr_8Zyu46z3qJ', 'paid', '363', 'ideal', '11015174330-75', 75, NULL, NULL, '2015-10-01 17:43:35', '2015-10-01 15:43:30', '2015-10-01 15:43:36'),
(20, 'tr_EzMLRYum3G', 'paid', '363', 'ideal', '21015123721-88', 88, NULL, NULL, '2015-10-02 12:37:28', '2015-10-02 10:37:22', '2015-10-02 10:37:28'),
(21, 'tr_2Kk8VZKFXQ', 'paid', '363', 'ideal', '21015131017-91', 91, NULL, NULL, '2015-10-02 13:10:23', '2015-10-02 11:10:18', '2015-10-02 11:10:23'),
(22, 'tr_XSTGPGMcsc', 'expired', '363', 'ideal', '21015163309-92', 92, NULL, NULL, '0000-00-00 00:00:00', '2015-10-02 14:33:09', '2015-10-02 14:50:04'),
(23, 'tr_UGna3B38H9', 'paid', '363', 'ideal', '21015163310-92', 92, NULL, NULL, '2015-10-02 16:37:20', '2015-10-02 14:33:11', '2015-10-02 14:37:20'),
(24, 'tr_YwcdyeWR3A', 'paid', '363', 'ideal', '21015163529-92', 92, NULL, NULL, '2015-10-02 16:36:35', '2015-10-02 14:35:29', '2015-10-02 14:36:35'),
(25, 'tr_ek5KwWXtFP', 'paid', '363', 'ideal', '21015163657-92', 92, NULL, NULL, '2015-10-02 16:37:02', '2015-10-02 14:36:57', '2015-10-02 14:37:03'),
(26, 'tr_cSaE8WacTS', 'paid', '363', 'ideal', '21015164420-93', 93, NULL, NULL, '2015-10-02 16:44:27', '2015-10-02 14:44:21', '2015-10-02 14:44:27'),
(27, 'tr_JC5aLQaXJG', '', '238.37', 'ideal', '151015173130-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-10-15 15:31:30', '2015-10-15 15:31:30'),
(28, 'tr_U4Zmebw3me', '', '359.37', 'ideal', '151015173146-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-10-15 15:31:46', '2015-10-15 15:31:46'),
(29, 'tr_3MHje3eFc3', 'open', '238.37', 'ideal', '151015174006-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-10-15 15:40:07', '2015-10-15 15:40:25'),
(30, 'tr_NPx8rpnYNu', '', '238.37', 'ideal', '151015174230-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-10-15 15:42:30', '2015-10-15 15:42:30'),
(31, 'tr_NAMkv2mhyh', '', '238.37', 'ideal', '161015100151-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-10-16 08:01:51', '2015-10-16 08:01:51'),
(32, 'tr_V9KK52ExuG', '', '238.37', 'ideal', '161015100317-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-10-16 08:03:17', '2015-10-16 08:03:17'),
(33, 'tr_NLeSP5qgCj', '', '359.37', 'ideal', '161015101439-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-10-16 08:14:39', '2015-10-16 08:14:39'),
(34, 'tr_aGuZZ4j4KV', 'paid', '238.37', 'ideal', '161015105218-1', 1, 1, NULL, '2015-10-16 11:08:31', '2015-10-16 08:52:18', '2015-10-16 09:08:31'),
(35, 'tr_mbYx7i52cv', 'paid', '238.37', 'ideal', '161015105305-1', 1, 1, NULL, '2015-10-16 11:09:18', '2015-10-16 08:53:06', '2015-10-16 09:09:18'),
(36, 'tr_39kMBYXjPk', 'paid', '359.37', 'mistercash', '161015110126-1', 1, 2, NULL, '2015-10-16 11:11:39', '2015-10-16 09:01:27', '2015-10-16 09:11:39'),
(37, 'tr_H6pBpsBCju', 'paid', '238.37', 'paypal', '161015111114-1', 1, 1, NULL, '2015-10-16 11:11:17', '2015-10-16 09:11:14', '2015-10-16 09:11:17'),
(38, 'tr_UEcTrcUcPM', 'paid', '359.37', 'ideal', '161015111425-1', 1, 2, NULL, '2015-10-16 11:14:32', '2015-10-16 09:14:26', '2015-10-16 09:14:32'),
(39, 'tr_tLASCPkk2R', 'paid', '1210', 'ideal', '201015133833-1', 1, 4, NULL, '2015-10-20 13:38:41', '2015-10-20 11:38:33', '2015-10-20 11:38:41'),
(40, 'tr_r9udMUicTA', 'paid', '1208.185', 'ideal', '211015124107-93', 93, 4, NULL, '2015-10-21 12:41:14', '2015-10-21 10:41:08', '2015-10-21 10:41:14'),
(41, 'tr_Yr4ZvndhhJ', 'paid', '1208.185', 'ideal', '211015124444-93', 93, 4, NULL, '2015-10-21 12:44:47', '2015-10-21 10:44:44', '2015-10-21 10:44:48'),
(42, 'tr_zeuDmDwpKf', 'expired', '242', 'ideal', '211015131734-93', 93, 6, NULL, '0000-00-00 00:00:00', '2015-10-21 11:17:34', '2015-10-21 11:34:05'),
(43, 'tr_zSgUy8YdsL', 'paid', '242', 'ideal', '211015131900-93', 93, 6, NULL, '2015-10-21 13:19:07', '2015-10-21 11:19:00', '2015-10-21 11:19:08'),
(44, 'tr_UAefuHSHxU', 'paid', '242', 'ideal', '211015132148-93', 93, 6, NULL, '2015-10-21 13:21:52', '2015-10-21 11:21:49', '2015-10-21 11:21:52'),
(45, 'tr_vtqzdsYZvr', 'paid', '242', 'ideal', '211015132335-93', 93, 6, NULL, '2015-10-21 13:23:41', '2015-10-21 11:23:35', '2015-10-21 11:23:41'),
(46, 'tr_gS4MvVQsBm', 'paid', '242', 'ideal', '211015132858-93', 93, 6, NULL, '2015-10-21 13:29:07', '2015-10-21 11:28:58', '2015-10-21 11:29:07'),
(47, 'tr_HJrCA5kEBT', 'paid', '242', 'ideal', '211015133139-93', 93, 6, NULL, '2015-10-21 13:31:42', '2015-10-21 11:31:39', '2015-10-21 11:31:43'),
(48, 'tr_ZJcA7VDR3d', 'paid', '359.37', 'ideal', '211015135100-237', 237, 2, NULL, '2015-10-21 13:51:05', '2015-10-21 11:51:00', '2015-10-21 11:51:05'),
(49, 'tr_zmBigVKcTA', 'paid', '242', 'ideal', '211015135253-237', 237, 6, NULL, '2015-10-21 13:52:57', '2015-10-21 11:52:53', '2015-10-21 11:52:57'),
(50, 'tr_hkxNAQdsrp', 'paid', '238.37', 'ideal', '211015141603-237', 237, 1, NULL, '2015-10-21 14:17:52', '2015-10-21 12:16:03', '2015-10-21 12:17:52'),
(51, 'tr_zyuwgsHRSr', 'expired', '238.37', '', '211015202342-212', 212, 1, NULL, '0000-00-00 00:00:00', '2015-10-21 18:23:43', '2015-10-21 18:40:08'),
(52, 'tr_N2XXM5vAqA', 'expired', '359.37', '', '211015205910-44', 44, 2, NULL, '0000-00-00 00:00:00', '2015-10-21 18:59:10', '2015-10-21 19:30:13'),
(53, 'tr_J4PTFELUhA', 'paid', '359.37', '', '211015210003-44', 44, 2, NULL, '2015-10-21 21:01:25', '2015-10-21 19:00:03', '2015-10-21 19:01:25'),
(54, 'tr_zWABZrwbEs', 'expired', '238.37', 'ideal', '211015211457-4', 4, 1, NULL, '0000-00-00 00:00:00', '2015-10-21 19:14:58', '2015-10-21 19:31:10'),
(55, 'tr_yRjtFJyk2g', 'paid', '238.37', '', '211015211825-212', 212, 1, NULL, '2015-10-21 21:19:43', '2015-10-21 19:18:25', '2015-10-21 19:19:44'),
(56, 'tr_Ks73cTpMSa', 'paid', '238.37', '', '211015212204-54', 54, 1, NULL, '2015-10-21 21:28:04', '2015-10-21 19:22:04', '2015-10-21 19:28:05'),
(57, 'tr_t8NGtWX2iF', 'expired', '238.37', '', '211015212804-61', 61, 1, NULL, '0000-00-00 00:00:00', '2015-10-21 19:28:04', '2015-10-21 19:59:11'),
(58, 'tr_Psij9nGbd9', 'paid', '238.37', '', '211015213649-61', 61, 1, NULL, '2015-10-21 21:42:42', '2015-10-21 19:36:50', '2015-10-21 19:42:42'),
(59, 'tr_B2MrmzMjEg', 'expired', '238.37', 'mistercash', '211015220130-4', 4, 1, NULL, '0000-00-00 00:00:00', '2015-10-21 20:01:30', '2015-10-21 20:33:06'),
(60, 'tr_G8aKhE8tZv', 'expired', '238.37', 'mistercash', '211015220152-4', 4, 1, NULL, '0000-00-00 00:00:00', '2015-10-21 20:01:52', '2015-10-21 20:33:08'),
(61, 'tr_ejmwSPjH6M', 'paid', '238.37', 'ideal', '211015220418-226', 226, 1, NULL, '2015-10-21 22:05:34', '2015-10-21 20:04:18', '2015-10-21 20:05:35'),
(62, 'tr_KbBhvAAabh', 'paid', '359.37', '', '211015221032-240', 240, 2, NULL, '2015-10-21 22:12:37', '2015-10-21 20:10:32', '2015-10-21 20:12:37'),
(63, 'tr_EM4fNMz2PK', 'paid', '238.37', 'ideal', '211015225724-55', 55, 1, NULL, '2015-10-21 22:59:08', '2015-10-21 20:57:25', '2015-10-21 20:59:08'),
(64, 'tr_cr5R79QQtt', 'expired', '242', 'ideal', '211015234537-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-10-21 21:45:37', '2015-10-21 22:02:05'),
(65, 'tr_KkjVkNVaMR', 'expired', '242', 'ideal', '211015234746-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-10-21 21:47:47', '2015-10-21 22:04:04'),
(66, 'tr_BFaTbnxpPs', 'expired', '242', 'mistercash', '211015234752-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-10-21 21:47:53', '2015-10-21 22:19:08'),
(67, 'tr_PCDxgBBDNY', 'expired', '242', 'ideal', '211015234846-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-10-21 21:48:47', '2015-10-21 22:05:04'),
(68, 'tr_6QySKXzh7j', 'paid', '238.37', '', '241015134610-209', 209, 1, NULL, '2015-10-24 13:47:56', '2015-10-24 11:46:10', '2015-10-24 11:47:56'),
(69, 'tr_FXKG4wmhdb', 'paid', '359.37', '', '251015211730-107', 107, 2, NULL, '2015-10-25 21:19:23', '2015-10-25 20:17:31', '2015-10-25 20:19:24'),
(70, 'tr_UvyiJRBf7q', 'expired', '242', 'ideal', '301015164829-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-10-30 15:48:29', '2015-10-30 16:05:05'),
(71, 'tr_pkmNY3AfKR', 'expired', '242', 'ideal', '301015164845-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-10-30 15:48:45', '2015-10-30 16:05:07'),
(72, 'tr_YBUDutruAw', 'expired', '242', 'ideal', '51115153556-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-11-05 14:35:56', '2015-11-05 14:52:06'),
(73, 'tr_bSvcHWqeNW', 'expired', '242', 'ideal', '91115155628-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-11-09 14:56:28', '2015-11-09 15:13:05'),
(74, 'tr_dNMYtvspeZ', 'expired', '242', 'mistercash', '91115155720-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-11-09 14:57:20', '2015-11-09 15:29:06'),
(75, 'tr_A5y7x4KAL8', 'expired', '242', 'paypal', '91115155725-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-11-09 14:57:28', '2015-11-09 15:28:05'),
(76, 'tr_YSNerERcHu', 'expired', '242', 'ideal', '101115194015-1', 1, 6, NULL, '0000-00-00 00:00:00', '2015-11-10 18:40:15', '2015-11-10 18:57:03'),
(77, 'tr_Mz7NbaKpg7', 'expired', '722.37', 'ideal', '111115133851-4', 4, 2, NULL, '0000-00-00 00:00:00', '2015-11-11 12:38:52', '2015-11-11 12:55:06'),
(78, 'tr_t8S8uLcKm2', '', '722.37', 'ideal', '111115142119-246', 246, 2, NULL, '0000-00-00 00:00:00', '2015-11-11 13:21:19', '2015-11-11 13:22:48'),
(79, 'tr_gGU6wYTGZA', '', '722.37', 'ideal', '111115143022-246', 246, 2, NULL, '0000-00-00 00:00:00', '2015-11-11 13:30:22', '2015-11-11 13:32:01'),
(80, 'tr_5RLmR4JBcA', '', '722.37', 'ideal', '111115143235-246', 246, 2, NULL, '0000-00-00 00:00:00', '2015-11-11 13:32:35', '2015-11-11 13:36:53'),
(81, 'tr_npm55dgHHH', '', '722.37', 'ideal', '111115143744-246', 246, 2, NULL, '0000-00-00 00:00:00', '2015-11-11 13:37:44', '2015-11-11 13:41:48'),
(82, 'tr_3xLpriYuDB', '', '601.37', 'ideal', '111115144224-259', 259, 1, NULL, '0000-00-00 00:00:00', '2015-11-11 13:42:25', '2015-11-11 13:43:45'),
(83, 'tr_rtyprZdNMS', 'paid', '601.37', 'ideal', '111115144428-259', 259, 1, NULL, '2015-11-11 19:12:55', '2015-11-11 13:44:29', '2015-11-11 18:12:56'),
(84, 'tr_YsSp2EXqdw', 'paid', '601.37', 'ideal', '111115145754-259', 259, 1, NULL, '2015-11-11 15:26:07', '2015-11-11 13:57:54', '2015-11-11 14:26:07'),
(85, 'tr_ULASA9mtMv', 'paid', '601.37', 'ideal', '111115152229-259', 259, 1, NULL, '2015-11-11 15:22:33', '2015-11-11 14:22:29', '2015-11-11 14:22:33'),
(86, 'tr_Af6KKrcFkJ', 'paid', '242', 'ideal', '111115152347-259', 259, 6, NULL, '2015-11-11 15:23:53', '2015-11-11 14:23:47', '2015-11-11 14:23:53'),
(87, 'tr_u3aR4AiRhf', 'paid', '601.37', 'ideal', '12111595817-246', 246, 1, NULL, '2015-11-12 09:58:24', '2015-11-12 08:58:17', '2015-11-12 08:58:25'),
(88, 'tr_2yBycuKFsV', 'expired', '56.87', 'ideal', '171115123706-259', 259, NULL, NULL, '0000-00-00 00:00:00', '2015-11-17 11:37:06', '2015-11-17 11:54:04'),
(89, 'tr_H5n9GVZwhC', 'expired', '56.87', 'ideal', '171115123750-259', 259, NULL, NULL, '0000-00-00 00:00:00', '2015-11-17 11:37:51', '2015-11-17 11:54:05'),
(90, 'tr_M8NWrrrsKB', 'paid', '177.87', 'ideal', '171115123844-259', 259, NULL, NULL, '2015-11-17 12:38:49', '2015-11-17 11:38:44', '2015-11-17 11:38:49'),
(91, 'tr_Htpd2PFkAZ', 'paid', '177.87', 'ideal', '171115124132-264', 264, NULL, NULL, '2015-11-17 12:41:36', '2015-11-17 11:41:32', '2015-11-17 11:41:36'),
(92, 'tr_vAMRhC2z9B', 'paid', '177.87', 'ideal', '171115124409-264', 264, NULL, NULL, '2015-11-17 12:44:13', '2015-11-17 11:44:09', '2015-11-17 11:44:14'),
(93, 'tr_vUjYv9xAAH', 'paid', '177.87', 'ideal', '171115124512-264', 264, NULL, NULL, '2015-11-17 12:46:19', '2015-11-17 11:45:12', '2015-11-17 11:46:19'),
(94, 'tr_ew34HPr4UD', 'paid', '177.87', 'ideal', '171115124609-264', 264, NULL, NULL, '2015-11-17 12:46:23', '2015-11-17 11:46:09', '2015-11-17 11:46:23'),
(95, 'tr_ZERaZR7qCd', 'paid', '177.87', 'paypal', '181115103159-265', 265, NULL, NULL, '2015-11-18 10:32:03', '2015-11-18 09:31:59', '2015-11-18 09:32:04'),
(96, 'tr_63sNz7AwUP', 'paid', '177.87', 'mistercash', '181115104704-266', 266, NULL, NULL, '2015-11-18 10:47:15', '2015-11-18 09:47:04', '2015-11-18 09:47:15'),
(97, 'tr_tPLNMgNATJ', 'paid', '177.87', 'ideal', '181115105442-267', 267, NULL, NULL, '2015-11-18 10:54:46', '2015-11-18 09:54:42', '2015-11-18 09:54:46'),
(98, 'tr_YGxMH76jdF', 'paid', '177.87', 'mistercash', '181115114109-268', 268, NULL, NULL, '2015-11-18 11:41:11', '2015-11-18 10:41:09', '2015-11-18 10:41:12'),
(99, 'tr_BLVuq2EqBT', 'paid', '177.87', 'ideal', '181115123004-269', 269, NULL, NULL, '2015-11-18 12:30:08', '2015-11-18 11:30:04', '2015-11-18 11:30:08'),
(100, 'tr_HSVeABk5Y5', 'paid', '177.87', 'ideal', '181115123256-269', 269, NULL, NULL, '2015-11-18 12:32:59', '2015-11-18 11:32:56', '2015-11-18 11:33:00'),
(101, 'tr_4r97JLmDWv', 'paid', '177.87', 'ideal', '181115123409-269', 269, NULL, NULL, '2015-11-18 12:34:13', '2015-11-18 11:34:10', '2015-11-18 11:34:13'),
(102, 'tr_9gDZESGA5z', 'paid', '177.87', 'ideal', '181115124528-269', 269, NULL, NULL, '2015-11-18 12:45:33', '2015-11-18 11:45:28', '2015-11-18 11:45:33'),
(103, 'tr_DpaBNVBwMv', 'paid', '177.87', 'ideal', '181115124913-269', 269, NULL, NULL, '2015-11-18 12:49:19', '2015-11-18 11:49:14', '2015-11-18 11:49:19'),
(104, 'tr_d3sKbkmpAc', 'paid', '177.87', 'ideal', '181115125105-269', 269, NULL, NULL, '2015-11-18 12:51:09', '2015-11-18 11:51:05', '2015-11-18 11:51:09'),
(105, 'tr_sY4xk9UhQn', '', '177.87', 'ideal', '181115151415-1', 1, NULL, NULL, '2015-11-18 15:14:19', '2015-11-18 14:14:15', '2015-11-18 15:50:19'),
(106, 'tr_qvaSYHMqzB', 'expired', '177.87', 'ideal', '181115193716-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-11-18 18:37:16', '2015-11-18 18:54:05'),
(107, 'tr_jUbdEmFv6f', 'cancelled', '177.87', 'paypal', '181115215302-270', 270, NULL, NULL, '0000-00-00 00:00:00', '2015-11-18 20:53:05', '2015-11-18 20:57:00'),
(108, 'tr_78vcFeyQyk', 'paid', '177.87', 'ideal', '181115221501-271', 271, NULL, NULL, '2015-11-18 22:18:06', '2015-11-18 21:15:01', '2015-11-18 21:18:06'),
(109, 'tr_TDWUp69tU8', 'paid', '177.87', 'paypal', '181115224208-270', 270, NULL, NULL, '2015-11-18 22:42:27', '2015-11-18 21:42:10', '2015-11-18 21:42:27'),
(110, 'tr_BWv9arz8aC', 'cancelled', '238.37', 'ideal', '19111500148-1', 1, NULL, NULL, '0000-00-00 00:00:00', '2015-11-18 23:01:49', '2015-11-18 23:02:39'),
(111, 'tr_ER8Ec9nHJ2', '', '419.87', 'ideal', '231115132508-1', 1, NULL, 4, '0000-00-00 00:00:00', '2015-11-23 12:25:09', '2015-11-23 12:25:16'),
(112, 'tr_ZYaAaAbhk5', '', '419.87', 'ideal', '231115133655-1', 1, NULL, 4, '0000-00-00 00:00:00', '2015-11-23 12:36:55', '2015-11-23 12:40:08'),
(113, 'tr_RSSkp2zpn3', 'paid', '419.87', 'ideal', '231115134611-1', 1, NULL, 4, '2015-11-23 13:46:15', '2015-11-23 12:46:11', '2015-11-23 12:46:15'),
(114, 'tr_LNBBE2DhAq', 'paid', '238.37', 'ideal', '231115143657-1', 1, NULL, 4, '2015-11-23 14:37:04', '2015-11-23 13:36:57', '2015-11-23 13:37:04'),
(115, 'tr_zmBBrE5J3x', 'expired', '419.87', 'ideal', '231115152700-273', 273, NULL, 4, '0000-00-00 00:00:00', '2015-11-23 14:27:00', '2015-11-23 14:44:06'),
(116, 'tr_ErZYumxnxk', 'expired', '298.87', 'ideal', '231115154338-269', 269, NULL, 4, '0000-00-00 00:00:00', '2015-11-23 14:43:38', '2015-11-23 15:00:07'),
(117, 'tr_LvkBCtJjDG', 'paid', '298.87', 'ideal', '231115154352-269', 269, NULL, 4, '2015-11-23 15:48:13', '2015-11-23 14:43:53', '2015-11-23 14:48:14'),
(118, 'tr_uDWWUXn9Yf', 'paid', '298.87', 'ideal', '231115155013-269', 269, NULL, 4, '2015-11-23 15:50:18', '2015-11-23 14:50:13', '2015-11-23 14:50:18'),
(119, 'tr_kXUcyvndyE', 'paid', '298.87', 'ideal', '231115160616-269', 269, NULL, 4, '2015-11-23 16:06:21', '2015-11-23 15:06:16', '2015-11-23 15:06:22'),
(120, 'tr_8wpaBmgjSF', 'paid', '298.87', 'ideal', '231115161316-269', 269, NULL, 4, '2015-11-23 16:13:20', '2015-11-23 15:13:16', '2015-11-23 15:13:20'),
(121, 'tr_7292fU6M85', 'paid', '298.87', 'ideal', '231115161524-269', 269, NULL, 4, '2015-11-23 16:15:29', '2015-11-23 15:15:24', '2015-11-23 15:15:30'),
(122, 'tr_MEF3u4cvBg', 'paid', '298.87', 'ideal', '231115161641-269', 269, NULL, 4, '2015-11-23 16:16:45', '2015-11-23 15:16:42', '2015-11-23 15:16:46'),
(123, 'tr_2QBqYWGHNe', 'paid', '298.87', 'ideal', '231115162021-269', 269, NULL, 4, '2015-11-23 16:20:25', '2015-11-23 15:20:21', '2015-11-23 15:20:25'),
(124, 'tr_7sadJjBzpu', 'paid', '298.87', 'ideal', '231115163111-274', 274, NULL, 4, '2015-11-23 16:31:17', '2015-11-23 15:31:12', '2015-11-23 15:31:17'),
(125, 'tr_ef5B4PeJ3Y', 'paid', '298.87', 'ideal', '231115163658-275', 275, NULL, 4, '2015-11-23 16:37:02', '2015-11-23 15:36:58', '2015-11-23 15:37:03'),
(126, 'tr_QNPEA7TBBS', 'paid', '298.87', 'ideal', '231115164030-276', 276, NULL, 4, '2015-11-23 16:40:34', '2015-11-23 15:40:30', '2015-11-23 15:40:35'),
(127, 'tr_2vf4G7uMPY', 'paid', '298.87', 'ideal', '231115164217-276', 276, NULL, 4, '2015-11-23 16:42:21', '2015-11-23 15:42:17', '2015-11-23 15:42:21'),
(128, 'tr_b965sUq9mg', 'paid', '964.37', 'ideal', '251115134542-4', 4, NULL, 3, '2015-11-25 13:45:49', '2015-11-25 12:45:42', '2015-11-25 12:45:49'),
(129, 'tr_v2bKFzmirg', 'paid', '964.37', 'ideal', '251115135722-4', 4, NULL, 3, '2015-11-25 13:57:26', '2015-11-25 12:57:23', '2015-11-25 12:57:26'),
(130, 'tr_XfCMhAH9Ug', 'paid', '298.87', 'ideal', '251115135814-4', 4, NULL, 4, '2015-11-25 13:58:20', '2015-11-25 12:58:14', '2015-11-25 12:58:21'),
(131, 'tr_mMMcZ89kG3', 'paid', '298.87', 'ideal', '251115144109-4', 4, NULL, 4, '2015-11-25 14:41:14', '2015-11-25 13:41:09', '2015-11-25 13:41:14'),
(132, 'tr_Yxju3Sg4jA', 'expired', '298.87', 'ideal', '251115145403-4', 4, NULL, 4, '0000-00-00 00:00:00', '2015-11-25 13:54:03', '2015-11-25 14:11:05'),
(133, 'tr_DXwW4NRU6G', 'paid', '298.87', 'ideal', '251115145420-4', 4, NULL, 4, '2015-11-25 14:54:24', '2015-11-25 13:54:20', '2015-11-25 13:54:24'),
(134, 'tr_U4sjmrVBmy', 'paid', '964.37', 'ideal', '251115145553-4', 4, NULL, 3, '2015-11-25 14:55:59', '2015-11-25 13:55:54', '2015-11-25 13:55:59'),
(135, 'tr_uBCX9Nhvg9', 'paid', '964.37', 'ideal', '271115162311-4', 4, NULL, 3, '2015-11-27 16:23:16', '2015-11-27 15:23:11', '2015-11-27 15:23:17'),
(136, 'tr_T7qDq9h5nk', 'paid', '298.87', 'ideal', '271115163748-4', 4, NULL, 4, '2015-11-27 16:37:57', '2015-11-27 15:37:48', '2015-11-27 15:37:57'),
(137, 'tr_fucJ3fMdnH', 'paid', '298.87', 'ideal', '291115151124-278', 278, NULL, 4, '2015-11-29 15:11:32', '2015-11-29 14:11:24', '2015-11-29 14:11:32'),
(138, 'tr_2vBHkbcPwz', 'paid', '964.37', 'ideal', '291115151921-278', 278, NULL, 3, '2015-11-29 15:19:26', '2015-11-29 14:19:21', '2015-11-29 14:19:27'),
(139, 'tr_WZpBAujQet', 'paid', '298.87', 'ideal', '291115152135-278', 278, NULL, 4, '2015-11-29 15:21:39', '2015-11-29 14:21:35', '2015-11-29 14:21:39'),
(140, 'tr_CGZsmBJgz2', 'paid', '298.87', 'ideal', '291115153720-278', 278, NULL, 4, '2015-11-29 15:37:26', '2015-11-29 14:37:21', '2015-11-29 14:37:26'),
(141, 'tr_p37BJvh7jW', 'paid', '298.87', 'ideal', '291115154912-278', 278, NULL, 4, '2015-11-29 15:49:18', '2015-11-29 14:49:13', '2015-11-29 14:49:18'),
(142, 'tr_X63urUxdh9', 'expired', '298.87', 'ideal', '291115154932-278', 278, NULL, 4, '0000-00-00 00:00:00', '2015-11-29 14:49:32', '2015-11-29 15:22:06'),
(143, 'tr_ibrzA7eAkg', 'cancelled', '298.87', 'ideal', '291115155851-278', 278, NULL, 4, '0000-00-00 00:00:00', '2015-11-29 14:58:51', '2015-11-29 14:58:56'),
(144, 'tr_sW7XUsWUV5', 'cancelled', '298.87', 'ideal', '291115160258-278', 278, NULL, 4, '0000-00-00 00:00:00', '2015-11-29 15:02:58', '2015-11-29 15:03:02'),
(145, 'tr_3AgtU5erSB', 'paid', '298.87', 'ideal', '291115160451-278', 278, NULL, 4, '2015-11-29 16:04:56', '2015-11-29 15:04:52', '2015-11-29 15:04:56'),
(146, 'tr_RncDgJ5dai', 'paid', '298.87', 'ideal', '291115160524-278', 278, NULL, 4, '2015-11-29 16:05:28', '2015-11-29 15:05:25', '2015-11-29 15:05:29'),
(147, 'tr_Ev6a2HaZVS', 'paid', '298.87', 'ideal', '291115160757-278', 278, NULL, 4, '2015-11-29 16:08:03', '2015-11-29 15:07:58', '2015-11-29 15:08:04'),
(148, 'tr_UfTaztinCe', 'cancelled', '298.87', 'ideal', '291115160851-278', 278, NULL, 4, '0000-00-00 00:00:00', '2015-11-29 15:08:51', '2015-11-29 15:08:55'),
(149, 'tr_Y7in2XBWiN', 'expired', '298.87', 'ideal', '291115160915-278', 278, NULL, 4, '0000-00-00 00:00:00', '2015-11-29 15:09:15', '2015-11-29 15:51:06'),
(150, 'tr_UAHWpABWYC', 'paid', '298.87', 'ideal', '291115172254-276', 276, NULL, 4, '2015-11-29 17:23:00', '2015-11-29 16:22:55', '2015-11-29 16:23:01'),
(151, 'tr_v8SgCjZsBE', 'cancelled', '298.87', 'ideal', '301115142050-276', 276, NULL, 4, '0000-00-00 00:00:00', '2015-11-30 13:20:50', '2015-11-30 13:22:39'),
(152, 'tr_ECDXrjCWAZ', 'paid', '298.87', 'ideal', '301115151740-276', 276, NULL, 4, '2015-11-30 15:17:44', '2015-11-30 14:17:40', '2015-11-30 14:17:44'),
(153, 'tr_L29DB8GnNL', 'expired', '298.87', 'ideal', '301115154349-276', 276, NULL, 4, '0000-00-00 00:00:00', '2015-11-30 14:43:49', '2015-11-30 15:00:07'),
(154, 'tr_jfmJruTAUs', 'paid', '298.87', 'ideal', '301115154359-276', 276, NULL, 4, '2015-11-30 15:44:12', '2015-11-30 14:43:59', '2015-11-30 14:44:13'),
(155, 'tr_5BRtWrUdcA', 'cancelled', '298.87', 'ideal', '301115154533-276', 276, NULL, 4, '0000-00-00 00:00:00', '2015-11-30 14:45:33', '2015-11-30 15:10:44'),
(156, 'tr_sV5aqk4KLw', 'paid', '298.87', 'ideal', '301115161054-276', 276, NULL, 4, '2015-11-30 16:10:59', '2015-11-30 15:10:54', '2015-11-30 15:10:59'),
(157, 'tr_X2dEbnR6Ct', 'cancelled', '298.87', 'ideal', '301115161116-276', 276, NULL, 4, '0000-00-00 00:00:00', '2015-11-30 15:11:17', '2015-11-30 15:11:21'),
(158, 'tr_mraDwS6EGD', 'paid', '298.87', 'ideal', '11215131426-276', 276, NULL, 4, '2015-12-01 13:14:31', '2015-12-01 12:14:27', '2015-12-01 12:14:31'),
(159, 'tr_dj2CYACYXM', 'paid', '298.87', 'ideal', '11215131741-276', 276, NULL, 4, '2015-12-01 13:18:49', '2015-12-01 12:17:41', '2015-12-01 12:18:49'),
(160, 'tr_qpFgkFTGX3', 'paid', '298.87', 'ideal', '11215131818-276', 276, NULL, 4, '2015-12-01 13:19:24', '2015-12-01 12:18:18', '2015-12-01 12:19:25'),
(161, 'tr_iV3vSHczSm', 'paid', '298.87', 'ideal', '11215131858-276', 276, NULL, 4, '2015-12-01 13:19:01', '2015-12-01 12:18:58', '2015-12-01 12:19:01'),
(162, 'tr_699JNXUgAD', 'expired', '964.37', 'ideal', '31215205742-279', 279, NULL, 3, '0000-00-00 00:00:00', '2015-12-03 19:57:42', '2015-12-03 20:14:08'),
(163, 'tr_BhcJrzBYSs', 'expired', '964.37', 'ideal', '31215210131-279', 279, NULL, 3, '0000-00-00 00:00:00', '2015-12-03 20:01:32', '2015-12-03 20:18:13'),
(164, 'tr_xkB7RJkuMY', 'expired', '964.37', 'ideal', '31215210144-279', 279, NULL, 3, '0000-00-00 00:00:00', '2015-12-03 20:01:44', '2015-12-03 20:18:11'),
(165, 'tr_2U5kX8QNBZ', 'expired', '964.37', 'ideal', '31215210240-279', 279, NULL, 3, '0000-00-00 00:00:00', '2015-12-03 20:02:40', '2015-12-03 20:19:05'),
(166, 'tr_AfxhpMQsLg', 'cancelled', '419.87', 'ideal', '41215111548-276', 276, NULL, 4, '0000-00-00 00:00:00', '2015-12-04 10:15:49', '2015-12-04 10:16:11');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rogier@digitusmarketing.nl', '2672473d0945911454f6c8eeb8fd23bd4c685f2cd6bf711a1cad098dc8375898', '2015-08-14 11:40:17'),
('jeroenvenderbosch@hotmail.com', 'e6f291c000d56c85ef84bdcb8945cba820bc38f7a8dcf070aba2ff56d82e9876', '2015-10-20 11:58:37');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `plans`
--

INSERT INTO `plans` (`id`, `naam`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Member', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Gratis Demo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Member Webinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `snippet` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `uitgelichte_afbeelding` varchar(255) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `titel`, `content`, `snippet`, `slug`, `user_id`, `categorie_id`, `uitgelichte_afbeelding`, `published_at`, `created_at`, `updated_at`) VALUES
(6, 'Hoe Je Facebook Vrienden Kunt Uitnodigen Om Fan Te Worden Van Jouw Facebook Pagina!', '<p>Heb je een bedrijfspagina en wil je jouw Facebook vrienden uitnodigen om fan te worden? Onderneem dan de volgende stappen:<br /> <br /> Ervan uitgaand dat je een bedrijfspagina aangemaakt hebt via jouw persoonlijke profiel, ga je, als je ingelogd bent met je persoonlijk profiel, naar de bedrijfspagina. Er zijn meerdere mogelijkheden om je vrienden uit te nodigen. Ik behandel de 2&nbsp;makkelijkste en snelste mogelijkheden hieronder. Alle voorbeelden worden behandeld als persoon, op een bedrijfspagina.<br /> <br /> Let dus goed op dat je rechtsbovenin Facebook je eigen naam ziet en niet die van je bedrijfspagina. (zie afbeelding)</p>\r\n<p><img src="../../../images/media/handelend%20als.png" alt="" width="810" height="119" /></p>\r\n<p>Wanneer je op je bedrijfspagina bent, klik je rechtsonderin de omslagfoto op&nbsp;<img src="../../../images/media/Opties.jpg" alt="" width="20" height="6" />.</p>\r\n<p>Vervolgens zijn er 2 mogelijkheden waarmee je vrienden kan uitnodigen om jouw bedrijfspagina te liken.</p>\r\n<ul>\r\n<li>Vrienden uitnodigen</li>\r\n<li>E-mail contactpersonen uitnodigen</li>\r\n</ul>\r\n<p><img src="../../../images/media/Uitnodigen.png" alt="" width="225" height="275" /></p>\r\n<p>Ik zal beide mogelijkheden uitleggen.</p>\r\n<h3>Vrienden uitnodigen om je Facebook pagina te liken</h3>\r\n<p>Wanneer je hebt geklikt op <strong>Vrienden uitnodigen</strong> krijg je een nieuw venster te zien. Selecteer hier alle vrienden die je wil uitnodigen om jouw pagina te liken.</p>\r\n<p><img src="../../../images/media/Vrienden uitnodigen.png" alt="" width="788" height="590" /></p>\r\n<p>Klik vervolgens op <strong>Uitnodigingen versturen</strong>.</p>\r\n<h3>E-mail contactpersonen uitnodigen om je Facebook pagina te liken</h3>\r\n<p>Wanneer je hebt gekozen voor E-mailcontactpersonen uitnodigen, zul je een nieuw venster te zien krijgen.</p>\r\n<p><img src="../../../images/media/Email contacten uitnodigen.png" alt="" width="502" height="529" /></p>\r\n<p>Klik op <strong>Contacten uitnodigen</strong> achter de e-mail dienst waar je een bestand van hebt ge&euml;xporteerd. Staat jouw e-mail dienst er niet tussen, of heb je een tekst of excel bestand, dan kun je kiezen voor <strong>Bestand met contactpersonen</strong>.</p>\r\n<p>Klik op bestand kiezen en selecteer jouw e-mail contacten bestand. Daarna klik je op <strong>Contacten oploaden</strong>.</p>\r\n<p><img src="../../../images/media/Contacten uploaden.png" alt="" width="444" height="204" /></p>\r\n<p>Er komt een nieuw venster tevoorschijn, waarin je kan selecteren welke e-mail contacten je een uitnodiging wil sturen.</p>\r\n<p><img src="../../../images/media/Contactpersonen uitnodigen.png" alt="" width="501" height="493" /></p>\r\n<p>Klik op <strong>Voorbeeld van uitnodiging</strong>.</p>\r\n<p>Je zult weer een nieuw venster te zien krijgen met het voorbeeld van de uitnodiging.</p>\r\n<p><img src="../../../images/media/Uitnodigingen verzenden.png" alt="" width="696" height="388" /></p>\r\n<p>Als je jouw e-mail contacten die nog geen gebruik maken van Facebook ook wil uitnodigen, vergeet dan onderaan niet te selecteren <strong>Ik ben gemachtigd om uitnodigingen te sturen naar de e-mailadressen die ik heb ge&iuml;mporteerd.</strong></p>\r\n<p>Als laatste stap klik je op <strong>Verzenden</strong>.</p>\r\n<p>&nbsp;</p>\r\n<p>Dit waren de 2 mogelijkheden waarop je jouw contacten kunt uitnodigen om jouw Facebook pagina te liken.</p>\r\n<p>Vond je dit handig of wil je ergens meer over weten?<br />Laat het ons weten via onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a> of in een bericht hier onder.</p>', 'Heb je een bedrijfspagina en wil je jouw Facebook vrienden uitnodigen om fan te worden? Onderneem dan de volgende stappen:  Ervan uitgaand dat je een bedrijfspagina aangemaakt hebt via jouw persoonlijke profiel, ga je, als je ingelogd bent met je persoonl', 'hoe-je-facebook-vrienden-kunt-uitnodigen-om-fan-te-worden-van-jouw-facebook-pagina', 2, 1, 'images/blogposts/publiek-uitbreiden-vrienden-uitnodigen.png', '2014-06-13 15:34:22', '2015-05-19 13:00:27', '2015-08-19 15:34:22'),
(7, '10 Redenen Waarom Je Geen Like, Share En Win Actie Moet Doen!', '<h3>De waarheid over LIKE SHARE EN WIN acties!</h3>\r\n<p>Ben je van plan om een LIKE SHARE EN WIN actie te lanceren? Lees dan het eerste deel van dit artikel! Ben je opzoek naar een manier om je Facebook pagina een boost te geven? Lees dan het hele artikel en ontdek wat je kunt doen om op sociale wijze in contact te komen met meer Facebook gebruikers.<br /><br /></p>\r\n<h3>Hier 10 redenen:</h3>\r\n<div>\r\n<ol>\r\n<li>Je bereikt veel meer onge&iuml;nteresseerde gebruikers dan wel ge&iuml;nteresseerde gebruikers. Als ik het heb over onge&iuml;nteresseerde gebruikers, heb ik het over gebruikers die niet ge&iuml;nteresseerd zijn in jouw bedrijf, product en/of dienst, maar alleen iets gratis willen winnen.</li>\r\n<li>De meeste gebruikers die mee doen aan LIKE SHARE EN WIN acties, zijn alleen ge&iuml;nteresseerd in de prijs, niet in jouw bedrijf. Als de winnaar(s) bekend worden gemaakt, zijn er zelfs gebruikers die je Facebook pagina weer dis-liken. Dislikes hebben negatieve invloed op het (organische/gratis) bereik van toekomstige berichten.</li>\r\n<li>Gebruikers die zich ergeren aan berichten, kunnen deze verbergen en/of markeren als SPAM. Dit heeft ook negatieve invloed op de het (organische/gratis) bereik van toekomstige berichten!</li>\r\n<li>LIKE SHARE EN WIN acties zijn niet sociaal. Geloof het of niet, er zijn zelfs mensen die een apart Facebook account aanmaken om deel te nemen aan LIKE SHARE EN WIN acties.</li>\r\n<li>Je wordt echt niet serieus genomen! Facebook gebruikers weten ondertussen ook dat het doel van een LIKE SHARE EN WIN actie is om meer likes te krijgen.</li>\r\n<li>Naamsbekendheid of irritatie? Er zijn veel gebruikers die zich irriteren aan LIKE SHARE EN WIN acties zonder dat je het weet! Dit kan negatieve invloed hebben op het imago van je bedrijf.</li>\r\n<li>Het is niet toegestaan om gebruikers te vragen je bericht te delen en deze hiervoor te belonen. De kans bestaat dat je pagina wordt opgeheven door Facebook (deze kans is wel heel erg klein).</li>\r\n<li>Je kunt advertenties richten op je&nbsp;fans&nbsp;of op&nbsp;vrienden van fans. Binnen deze doelgroep(en) scoren advertenties vele malen beter dan bij een onbekend publiek en brengen hierdoor lagere kosten met zich mee. Als jouw Facebook fans geen klanten of ge&iuml;nteresseerde gebruikers zijn, vallen er een aantal effectieve advertentie strategie&euml;n, die je in de toekomst zeker wil toepassen, af.</li>\r\n<li>Facebook gaat over interactie, de meeste gebruikers die je pagina liken om iets te winnen, zullen nooit meer reageren op je berichten en zullen na een tijdje jouw berichten ook niet meer in hun nieuwsoverzicht te zien krijgen!</li>\r\n<li>De meeste gebruikers die deelnemen aan LIKE SHARE EN WIN acties zijn niet van plan ooit geld uit te geven aan &eacute;&eacute;n van jouw producten en/of diensten.</li>\r\n</ol>\r\n</div>\r\n<h3>&nbsp;</h3>\r\n<p>&nbsp;</p>\r\n<h3>3 Nadelen voor gebruikers die deelnemen aan LIKE SHARE en WIN acties</h3>\r\n<div>\r\n<ol>\r\n<li>Niet alle gebruikers die een bericht delen, kunnen worden achterhaald. Alleen gebruikers die de Facebook privacy instellingen van berichten op openbaar hebben ingesteld, zijn te achterhalen.</li>\r\n<li>Je vraagt gebruikers om je pagina te liken. Helaas zijn niet alle gebruikers die je pagina geliked hebben, te achterhalen. Het overzicht van Facebook waar je kunt achterhalen wie je pagina heeft geliked, geeft alleen de laatste 300 tot 400 fans weer.</li>\r\n<li>Facebook vrienden van gebruikers die dit soort berichten delen, ergeren zich aan aan de LIKE SHARE EN WIN acties. Ook dit kan negatieve invloed hebben op het imago van je bedrijf.</li>\r\n</ol>\r\nIk ben benieuwd hoe jij denkt over Facebook LIKE SHARE EN WIN acties.. Ik heb zelf een hekel aan Like, share &amp; win acties en markeer ze bijna altijd als spam, tenzij ik het bedrijf of de eigenaar ken, dan stuur ik vaak een bericht.<br /><br /></div>\r\n<h3>GEEN LIKE SHARE EN WIN acties? Wat dan wel?</h3>\r\n<div>Tijdlijn acties! Facebook heeft in maart 2013 de beleidsregels aangepast. V&oacute;&oacute;r maart 2013 was het niet toegestaan om acties te voeren via de tijdlijn. Acties mochten alleen gevoerd worden via Facebook tab apps en winnaars moesten op de hoogte worden gebracht via e-mail.</div>\r\n<p>&nbsp;</p>\r\n<h3>Wat is een tijdlijn actie?</h3>\r\n<div>Een tijdlijn actie is een bericht waarbij gebruikers wordt gevraagd om een actie uit te voeren op het bericht om kans te maken op een prijs. Verderop leg ik uit wat wel en niet is toegestaan. Het belangrijkste doel van een tijdlijn actie is interactie (reacties, shares en likes op het bericht) waardoor een bericht viraal (pietje heeft gereageerd op de foto van &hellip;.) meer Facebook gebruikers bereikt. Hieronder enkele voorbeelden:</div>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/220590068065222/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/220590068065222/?type=1">\r\n<p>Wil jij samen met onze personal trainer een doel stellen en 3 maanden keihard trainen om dit te realiseren? Dan ben jij...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/220590068065222/?type=1">dinsdag 19 november 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/HorecaPersoneel.biz/posts/345570068913794:0" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/HorecaPersoneel.biz/posts/345570068913794:0">\r\n<p>Win een dinercheque van &euro;150,- voor jouw favoriete restaurant!Wij zijn opzoek naar de meest gewaardeerde...</p>\r\nPosted by <a href="https://www.facebook.com/HorecaPersoneel.biz">Horecapersoneel.biz</a> on <a href="https://www.facebook.com/HorecaPersoneel.biz/posts/345570068913794:0">woensdag 27 november 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/KingsWokBeckum/photos/a.441059495930722.77934272.416793005024038/614302008606469/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/KingsWokBeckum/photos/a.441059495930722.77934272.416793005024038/614302008606469/?type=1">\r\n<p>Win een all-in buffet voor 2 personen bij Kings Wok! Maak een foto van jouw kerstboom en/of kerstversiering en plaats...</p>\r\nPosted by <a href="https://www.facebook.com/KingsWokBeckum">Kings Wok</a> on <a href="https://www.facebook.com/KingsWokBeckum/photos/a.441059495930722.77934272.416793005024038/614302008606469/?type=1">dinsdag 17 december 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<h3>Wat mag wel en wat mag niet?</h3>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s;">Je mag:</strong></p>\r\n<ul style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.999979019165px; vertical-align: baseline; list-style: disc inside none; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vragen om een reactie op een bericht (Laat in de reacties hieronder weten waarom jij zou moeten winnen).</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vragen om een like op een bericht (Like dit bericht en maak kans op ___).</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vragen om een like op een reactie (De reactie met de meeste/minste stemmen/likes wint).</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vragen om een bericht op de tijdlijn van je pagina te plaatsen.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Winnaars bekend maken via je Facebook pagina.</li>\r\n</ul>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s;">Je mag niet:</strong></p>\r\n<ul style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.999979019165px; vertical-align: baseline; list-style: disc inside none; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vragen om je pagina te liken (het is niet mogelijk om<span class="Apple-converted-space">&nbsp;</span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s;">alle</strong><span class="Apple-converted-space">&nbsp;</span>fans te achterhalen).</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vragen om een bericht of je pagina te delen (Het is niet altijd mogelijk om te achterhalen wie het bericht heeft gedeeld).</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vragen om zichzelf of anderen te taggen.</li>\r\n</ul>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><em style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: italic; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s;">(LET OP: bovenstaande mag je wel vragen maar<span class="Apple-converted-space">&nbsp;</span><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s;">niet</strong><span class="Apple-converted-space">&nbsp;</span>als voorwaarde stellen om iets te winnen).</em><br style="box-sizing: border-box;" />Bekijk hier de<span class="Apple-converted-space">&nbsp;</span><a style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: #428bca; text-decoration: underline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; background: none 0px 0px repeat scroll rgba(0, 0, 0, 0);" href="https://fbcdn-dragon-a.akamaihd.net/hphotos-ak-ash3/851577_158705844322839_2031667568_n.pdf" target="_blank">offici&euml;le richtlijnen van Facebook</a>.</p>\r\n<h3>Wat wil je bereiken met de tijdlijn actie?</h3>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Voordat je een tijdlijn actie opzet is het belangrijk om van te voren &eacute;&eacute;n of meerdere doelen te stellen. Zoals:</p>\r\n<ul style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.999979019165px; vertical-align: baseline; list-style: disc inside none; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Betrokkenheid met Facebook fans/gebruikers vergroten.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">(nieuw)Product/dienst onder de aandacht brengen.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">In contact komen met vrienden van fans/klanten.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Bereik vergroten.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Feedback over een product of dienst verzamelen.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3>Wat moet er in je tijdlijn actie staan?</h3>\r\n<ul style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.999979019165px; vertical-align: baseline; list-style: disc inside none; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Wat gebruikers kunnen winnen.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Wat je moet doen om deel te nemen.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Hoe de winnaar wordt gekozen.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Hoe/waar/wanneer de winnaar(s) bekend wordt gemaakt.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Vrijwaring van Facebook:<br style="box-sizing: border-box;" />&ldquo;Deze promotie is op geen enkele manier verbonden met Facebook en is op geen enkele wijze gesponsord, ondersteund of georganiseerd door Facebook.&rdquo;</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><em style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: italic; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 21.4285488128662px; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s;">Extra:</strong><span class="Apple-converted-space">&nbsp;</span>Als je de moeite doet om een zo kort en eenvoudig mogelijke tijdlijn actie te schrijven, zodat het gehele bericht in &eacute;&eacute;n keer leesbaar is zonder dat gebruikers op &lsquo;lees meer&rsquo; hoeven te klikken, is het jammer om dit te laten verpesten door de Facebook vrijwaring. Afhankelijk van de grootte van de pagina zou ik overwegen om dit toe te voegen. Het is een offici&euml;le regel maar zolang LIKE SHARE EN WIN acties niet worden bestraft maak ik me geen zorgen ;) .</em></p>\r\n<p>&nbsp;</p>\r\n<p><em style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: italic; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 21.4285488128662px; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">TIP: Een oplossing hiervoor is om de voorwaarden op je website te plaatsen en een link naar de pagina te verwerken in het bericht. Voorbeeld: www.website.nl/voorwaarden.</em></p>\r\n<p>&nbsp;</p>\r\n<h3>TIPS voor een succesvolle tijdlijn actie!</h3>\r\n<ul style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: 19.999979019165px; vertical-align: baseline; list-style: disc inside none; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Bepaal je doel(en).</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Houd het zo kort en simpel mogelijk.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Bedenk een actie die gerelateerd is aan jouw merk.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Bedenk een relevante prijs voor je fans/doelgroep.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Maak het gebruikers zo eenvoudig mogelijk om deel te nemen.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Geef gebruikers voldoende tijd om deel te nemen (minimaal 1 week).</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Maak gebruik van Facebook advertenties.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Beperk de looptijd van de actie om irritatie te voorkomen, zeker als je gebruik maakt van Facebook advertenties.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Niemand zit er op te wachten om 10 keer het zelfde bericht te zien.</li>\r\n<li style="box-sizing: border-box; margin: 11px 0px; padding: 5px 5px 5px 30px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 1.3; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; min-height: 15px;">Testen, testen en testen. Test verschillende tijdlijn acties om er achter te komen wat bij jouw fans het beste werkt.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3>Wat kost het om een tijdlijn actie te promoten?</h3>\r\n<p><img src="../images/media/Wat kost dat dan.png" alt="" width="623" height="254" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Wij zijn gek op tijdlijn acties!</h3>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Wij zijn gek op tijdlijn acties en helpen jou graag om betrokkenheid te generen met huidige fans en in contact te komen met Facebook gebruikers die ge&iuml;nteresseerd zijn in jouw bedrijf, product en/of dienst. Wil je graag hulp bij het opzetten en promoten van een succesvolle tijdlijn actie?<span class="Apple-converted-space">&nbsp;</span><a style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-family: inherit; font-size: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; color: #428bca; text-decoration: underline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; background: none 0px 0px repeat scroll rgba(0, 0, 0, 0);" title="Digitus Marketing Contact" href="../../../contact" target="_blank">Neem dan contact op</a>.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; border: 0px; font-family: Roboto, serif; font-size: 15px; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: inherit; line-height: inherit; vertical-align: baseline; transition: all 0.1s ease-in-out 0s; -webkit-transition: all 0.1s ease-in-out 0s; color: #231f20; letter-spacing: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff;">Wil je meer weten over tijdlijnacties of heb je vragen? Neem gerust contact met ons op via tel. nr. 085 - 003 02 56 of laat het ons weten via onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a>.</p>\r\n<p>&nbsp;</p>', 'De waarheid over LIKE SHARE EN WIN acties!\r\nBen je van plan om een LIKE SHARE EN WIN actie te lanceren? Lees dan het eerste deel van dit artikel! Ben je opzoek naar een manier om je Facebook pagina een boost te geven? Lees dan het hele artikel en ontdek w', '10-redenen-waarom-je-geen-like-share-en-win-actie-moet-doen', 1, 1, 'images/blogposts/begging-for-likes.jpg', '2018-06-03 13:27:56', '2015-05-19 14:04:41', '2015-11-17 14:27:56');
INSERT INTO `posts` (`id`, `titel`, `content`, `snippet`, `slug`, `user_id`, `categorie_id`, `uitgelichte_afbeelding`, `published_at`, `created_at`, `updated_at`) VALUES
(8, 'Waar Een Succesvolle Facebook Tijdlijn Actie Toe Kan Leiden', '<h3>Wat is een tijdlijn actie?</h3>\r\n<p>Een tijdlijn actie is een bericht waarbij gebruikers wordt gevraagd om een actie uit te voeren <strong>op het bericht</strong> om kans te maken op een prijs. Het belangrijkste doel van een tijdlijn actie is interactie (reacties, likes op bericht), waardoor een bericht viraal (pietje heeft gereageerd op de foto van ...) meer Facebook gebruikers bereikt.</p>\r\n<p>Ik heb het hier <strong>niet</strong> over <a href="../10-redenen-waarom-je-geen-like-share-en-win-actie-moet-doen" target="_blank">Like Share en Win acties</a>!</p>\r\n<p>&nbsp;</p>\r\n<h3>Tijdlijn actie Anytime Fitness Goor</h3>\r\n<p>In samenwerking met Anytime Fitness Goor hebben we een Facebook tijdlijn actie gelanceerd. Het doel van de tijdlijn actie was de dienst, personal training, onder de aandacht brengen. We mochten twee mensen blij maken met <strong>3 maanden lang gratis personal training</strong>. We zijn nu bijna 4 maanden verder en het resultaat is geweldig!</p>\r\n<p>De tijdlijn actie had een looptijd van 6 dagen. We vroegen gebruikers om in een reactie aan te geven wat zij in 3 maanden tijd zouden willen bereiken, om zo kans te maken op een gratis personal training voor 3 maanden.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/220590068065222/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/220590068065222/?type=1">\r\n<p>Wil jij samen met onze personal trainer een doel stellen en 3 maanden keihard trainen om dit te realiseren? Dan ben jij...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/220590068065222/?type=1">dinsdag 19 november 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p><strong>Betrokken gebruikers: </strong>511 gebruikers<br /><strong>Klikken op berichten:</strong> 1063<br /><strong>Organisch bereik (gratis): </strong>1844 gebruikers<br /><strong>Betaald bereik (&euro;30,- tegoed)</strong>: 3912 gebruikers<br /><strong>Totaal bereik: </strong>5756 gebruikers</p>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p>Het succes van een tijdlijn actie is niet afhankelijk van het aantal Facebook gebruikers die worden bereikt. Succes wordt behaald door de juiste gebruikers te bereiken.</p>\r\n<p>De onderstaande Facebook campagne richt zich op fans, vrienden van fans, vrienden van gebruikers die het bericht leuk vinden en vrienden van gebruikers die hebben gereageerd op het bericht. En binnen een bepaalde straal rondom Anytime Fitness Goor wonen.</p>\r\n<p><img src="../images/media/Wat kost dat dan.png" alt="" width="623" height="254" /></p>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<h3>De winnaars bekend maken:</h3>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/posts/221348047989424" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/posts/221348047989424">\r\n<p>De 2 winnaars van onze Facebook tijdlijn actie zijn: Carla Beumers en Gea Dahles! Gefeliciteerd! Jullie winnen beide een...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/posts/221348047989424">maandag 25 november 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<h3>Een kijkje achter de schermen</h3>\r\n<p>Terwijl de winnaars keihard aan het trainen waren, werden de fans van Anytime Fitness Goor op de hoogte gehouden door zo nu en dan een kijkje achter de schermen te laten zien. De winnaars werden constant aangemoedigd en gemotiveerd door vrienden, familie en fans van Anytime Fitness Goor.</p>\r\n<p>&amp;nsbp;</p>\r\n<h3>Introductie:</h3>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/221546527969576/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/221546527969576/?type=1">\r\n<p>Gisteren heeft onze PT winnaar Carla Beumer kennis gemaakt met Maxim.Maandag zullen we eerst starten met een...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/221546527969576/?type=1">woensdag 27 november 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/221641537960075/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/221641537960075/?type=1">\r\n<p>Vandaag heeft de andere PT winnares Gea Dahles kennis gemaakt met Rody.Donderdag zullen we ook met haar eerst starten...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/221641537960075/?type=1">donderdag 28 november 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<h3>Eerste meting:</h3>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/videos/693724123992706/" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/videos/693724123992706/">\r\n<p>Carla Beumer heeft onder begeleiding van Maxim haar eerste metingen gehad. Met haar dosis wilskracht en enthousiasme...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/videos/693724123992706/">woensdag 18 december 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/videos/224248504366045/" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/videos/224248504366045/">\r\n<p>Vandaag 2 weken op weg met Gea Dahles onze PT winnares!En vanochtend ons eerste weeg moment gehad na de...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/videos/224248504366045/">donderdag 19 december 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<h3>Tweede meting:</h3>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/225501267574102/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/225501267574102/?type=1">\r\n<p>Vandaag weer een meting gehad met PT winnares Carla Beumer.Met Maxim hebben ze weer een geweldige resultaat geboekt....</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/225501267574102/?type=1">maandag 30 december 2013</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.196320697158826.1073741826.169961639794732/226091220848440/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.196320697158826.1073741826.169961639794732/226091220848440/?type=1">\r\n<p>Vandaag 2e meting gehad met Gea Dahles! Niet alleen is ze al ruim 4kg kwijt, ook is ze al flink wat centimeters kwijt en...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.196320697158826.1073741826.169961639794732/226091220848440/?type=1">zondag 5 januari 2014</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<h3>3e meting:</h3>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/posts/230615780395984" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/posts/230615780395984">\r\n<p>Vandaag weer een personal training + weeg moment met onze PT winnares Gea Dahles en trainer Rody de Jonge.Gea is weer 3,5 kg verloren en momenteel al ruim 11kg kwijt!Goed bezig Gea!!</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/posts/230615780395984">woensdag 12 februari 2014</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<h3>Eindresultaat:</h3>\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/232196706904558/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/232196706904558/?type=1">\r\n<p>WINNARES 3 mnd Personal Training met Gea Dahles!Gea Dahles heeft na aanleiding van een mooi bericht op onze facebook...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/232196706904558/?type=1">donderdag 27 februari 2014</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<div id="fb-root">&nbsp;</div>\r\n<script>// <![CDATA[\r\n(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, \'script\', \'facebook-jssdk\'));\r\n// ]]></script>\r\n<div class="fb-post" data-href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/232897960167766/?type=1" data-width="500">\r\n<div class="fb-xfbml-parse-ignore">\r\n<blockquote cite="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/232897960167766/?type=1">\r\n<p>WINNARES 3 mnd Personal TrainingMijn naam is Carla Beumer, eind november 2013 zag ik een oproepje hier staan, hierin...</p>\r\nPosted by <a href="https://www.facebook.com/AnytimeFitnessGoor">Anytime Fitness Goor</a> on <a href="https://www.facebook.com/AnytimeFitnessGoor/photos/a.170312373092992.5934.169961639794732/232897960167766/?type=1">woensdag 5 maart 2014</a></blockquote>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<hr />\r\n<p>&nbsp;</p>\r\n<p><strong>Mijn complimenten voor de personal trainers en de winnaars die samen dit geweldige resultaat hebben geboekt!</strong></p>\r\n<h3>Wil je zelf ook een tijdlijn actie lanceren?</h3>\r\n<p>Heb je na het lezen van dit artikel ook inspiratie gekregen om een tijdlijn actie te lanceren? Dan heb ik hier een aantal tips voor je:</p>\r\n<ul>\r\n<li>Bepaal je doel(en)</li>\r\n<li>Houd het zo kort en simpel mogelijk</li>\r\n<li>Bedenk een actie die gerelateerd is aan jouw merk</li>\r\n<li>Bedenk een relevante prijs voor je fans/doelgroep</li>\r\n<li>Maak het gebruikers zo eenvoudig mogelijk om deel te nemen</li>\r\n<li>Geef gebruikers voldoende tijd om deel te nemen (1 week)</li>\r\n<li>Maak gebruik van Facebook advertenties voor maximaal resultaat</li>\r\n<li>Beperk de looptijd van de actie om irritatie te voorkomen, zeker als je gebruik maakt van Facebook advertenties</li>\r\n<li>Niemand zit er op te wachten om 10 keer het zelfde bericht te zien</li>\r\n<li>Testen, testen en testen. Test verschillende tijdlijn acties om er achter te komen wat bij jouw fans het beste werkt</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3>Wij zijn gek op tijdlijn acties!</h3>\r\n<p>Wij zijn gek op tijdlijn acties en helpen jou graag om betrokkenheid te genereren met huidige fans en in contact te komen met Facebook gebruikers die ge&iuml;nteresseerd zijn in jouw bedrijf, product en/of dienst. Wil je graag hulp bij het opzetten en promoten van een succesvolle tijdlijn actie? Neem dan contact op.</p>', 'Wat is een tijdlijn actie?\r\nEen tijdlijn actie is een bericht waarbij gebruikers wordt gevraagd om een actie uit te voeren op het bericht om kans te maken op een prijs. Het belangrijkste doel van een tijdlijn actie is interactie (reacties, likes op berich', 'waar-een-succesvolle-facebook-tijdlijn-actie-toe-kan-leiden', 2, 1, 'images/blogposts/iStock_000015676634Small-646x363.jpg', '2018-06-03 13:27:38', '2015-05-19 15:31:57', '2015-11-17 14:27:38'),
(9, 'Hoe Je In 5 Minuten Een Facebook Test Pagina Maakt', '<p>Als je een Facebook pagina beheert, heb je dit vast meegemaakt. Je plaatst een bericht maar deze komt er net niet zo uit te zien als je had gewild. Om dit te voorkomen kun je een test pagina maken. In dit blogbericht leg ik je stap voor stap uit hoe je in ongeveer 5 minuten een <strong>Facebook test pagina</strong> maakt die onzichtbaar is voor iedereen <strong>behalve</strong> de paginabeheerders.</p>\r\n<p>&nbsp;</p>\r\n<h3>Stap 1: Maak een nieuwe Facebook pagina aan</h3>\r\n<p>Ga naar: <a href="https://www.facebook.com/pages/create" target="_blank">https://www.facebook.com/pages/create</a> om een nieuwe pagina aan te maken (de gegevens die je hier invult mogen uiteraard fictief zijn).</p>\r\n<p>&nbsp;</p>\r\n<p><img src="../images/media/Stap 1.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><em><strong>Tip:</strong> Voeg een opvallende profielfoto toe zodat je de test pagina direct herkent, het is mij een keer overkomen dat ik een bericht van de verkeerde pagina heb verwijderd omdat ik dacht dat ik op de test pagina zat.</em></p>\r\n<p>&nbsp;</p>\r\n<h3>Stap 2: Maak de pagina onzichtbaar</h3>\r\n<p>Ga naar de test pagina die je zojuist hebt aangemaakt.</p>\r\n<ol>\r\n<li>Klik boven aan je pagina op <strong>Instellingen</strong></li>\r\n<li>Klik (links) op <strong>Algemeen</strong></li>\r\n<li>Klik op <strong>Zichtbaarheid van pagina</strong> en vink het hokje voor \'<strong>Publicatie van pagina ongedaan maken</strong>\' aan</li>\r\n</ol>\r\n<p><img src="../images/media/Pagina Onzichtbaar Maken.png" alt="" />&nbsp;</p>\r\n<h3>Stap 3: Maak een interesselijst</h3>\r\n<p>Facebook filtert berichten waardoor je de berichten die je op je test pagina plaatst niet altijd te zien krijgt in je nieuwsoverzicht. Door een interesselijst te maken en je test pagina hier aan toe te voegen, voorkom je dat je tijd verspilt aan het zoeken naar je test bericht in je nieuwsoverzicht tussen alle andere berichten.</p>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>Ga naar <a href="https://www.facebook.com/bookmarks/interests" target="_blank">https://www.facebook.com/bookmarks/interests</a> om een interesselijst te maken.</li>\r\n<li>Klik op [+ Lijst maken]<img src="../images/media/Interesselijst maken 28.png" alt="" /></li>\r\n<li>Zoek naar de testpagina door de naam van de pagina in te typen, klik de test pagina aan en klik op volgende.<img src="../images/media/Zoek naar de naam van je interesselijst.png" alt="" /></li>\r\n<li>Geef de interesselijst een naam</li>\r\n<li>Maak de interesselijst priv&eacute; door de optie [<strong>Alleen ik</strong>] aan te klikken en klik op [<strong>Klaar</strong>]<img src="../images/media/Interesse lijst naam geven.png" alt="" /></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p><strong>Belangrijk:</strong> Beheer je een Facebook pagina met meerdere pagina beheerders? Laat de andere paginabeheerders bovenstaande stappen dan ook uitvoeren.</p>\r\n<p>&nbsp;</p>\r\n<h3>Je vindt de interesse lijst als volgt terug:</h3>\r\n<p>Ga naar de homepagina door linksboven op het Facebook logo te klikken. Je vind je interesselijst(en) onder het gedeelte interesses. Als je de &lsquo;test pagina interesselijst&rsquo; hier niet ziet staan klik je op &lsquo;meer&rsquo; om alle interesse lijsten te bekijken.</p>\r\n<p><img src="../images/media/Interesselijst terugvinden.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Stap 4: Controleren</h3>\r\n<p>Als je onderstaande melding bovenaan de test pagina ziet staan weet je zeker dat je pagina niet is gepubliceerd. Dit houdt in dat alleen jij en andere paginabeheerders deze pagina en de berichten kunnen zien.</p>\r\n<p><img src="../images/media/Melding pagina niet gepubliceerd.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Je kunt aan de slag met je Facebook test pagina</h3>\r\n<p>Plaats een bericht op de test pagina en ga vervolgens naar de interesselijst om het bericht te bekijken. Ziet deze er uit zoals je had verwacht? Dan kun je dit bericht nu ook plaatsen op je Facebook pagina zodat je fans dit bericht ook kunnen zien.</p>\r\n<p>(Het is niet mogelijk om het bericht direct vanaf de testpagina te delen op je Facebook pagina. Je zult de tekst moeten kopi&euml;ren en dezelfde afbeelding moeten uploaden op je Facebook pagina)</p>\r\n<p>&nbsp;</p>\r\n<p>Als je hiermee aan de slag gaat en twijfelt of je het wel goed doet, laat het dan weten via onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a> of laat een bericht achter onder deze blog.&nbsp;Ik help je graag opweg!</p>', 'Als je een Facebook pagina beheert, heb je dit vast meegemaakt. Je plaatst een bericht maar deze komt er net niet zo uit te zien als je had gewild. Om dit te voorkomen kun je een test pagina maken. In dit blogbericht leg ik je stap voor stap uit hoe je in', 'hoe-je-in-5-minuten-een-facebook-test-pagina-maakt', 2, 1, 'images/blogposts/facebook-test-pagina.png', '2014-08-19 11:30:43', '2015-05-20 15:26:03', '2015-08-19 11:30:43'),
(10, '[Facebook Update] Facebook Introduceert Save!', '<p>Deze functie maakt het mogelijk om link berichten, pagina&rsquo;s, muziek, boeken, film\'s, TV shows en evenementen op te slaan en later te bekijken. Berichten die je opslaat worden niet gedeeld, tenzij je er voor kiest om deze te delen.</p>\r\n<p>Let op: Dit geldt niet voor <strong>Tekst updates</strong>, <strong>Foto\'s</strong> en <strong>video\'s</strong>.</p>\r\n<p>&nbsp;</p>\r\n<h3>Eenmaal opslaan, overal bekijken.</h3>\r\n<p>Stel je zit achter je computer en ziet een artikel voorbij komen die je wil lezen maar je hebt niet voldoende tijd. Sla het bericht op en je kunt het later eenvoudig terug vinden op je mobiele telefoon.</p>\r\n<p>&nbsp;</p>\r\n<p><img src="../images/media/introducingsaved2.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Save is voor Web en Apps.</h3>\r\n<p>Save is beschikbaar voor iedereen op Webbrowsers, iOS en Android apparaten en zal in de komende dagen beschikbaar zijn voor iedereen. Wij hebben het zojuist even getest. Als je je taalinstellingen wijzigd naar English(US) is het al mogelijk om gebruik te maken van deze functie.</p>\r\n<p>&nbsp;</p>\r\n<h3>Facebook helpt je herinneren.</h3>\r\n<p>Link berichten die je opslaat om later te bekijken kunnen tussentijds ook in in je nieuwsoverzicht worden weergegeven.</p>\r\n<p>&nbsp;</p>\r\n<p><img src="../images/media/introducingsave3.png" alt="" /></p>\r\n<p>bron: <a>http://newsroom.fb.com/news/2014/07/introducing-save-on-facebook/</a></p>\r\n<p>&nbsp;</p>\r\n<h3>Wat vind jij van Save?</h3>\r\n<p>Facebook kondigde al een hele tijd geleden aan dat ze deze functie wilden toevoegen. Eigenlijk apart dat deze functie er tot nu, niet was. Ik ben er in ieder geval heel erg blij mee. Wat vind jij van deze functie, denk je er gebruik van te gaan maken?</p>', 'Deze functie maakt het mogelijk om link berichten, pagina&rsquo;s, muziek, boeken, film\'s, TV shows en evenementen op te slaan en later te bekijken. Berichten die je opslaat worden niet gedeeld, tenzij je er voor kiest om deze te delen.\r\nLet op: Dit geldt', 'facebook-update-facebook-introduceert-save', 2, 1, 'images/blogposts/introducingsave-1.png', '2014-07-22 08:27:46', '2015-05-21 08:27:46', '2015-05-22 12:50:38'),
(11, '6 Tips Om Te Voorkomen Dat Je Wordt Afgeleid Op Facebook', '<p><strong>We worden allemaal wel eens afgeleid op Facebook</strong>. Dit is niet gek, aangezien Facebook de mogelijkheid heeft om de website en apps op meer dan een miljard gebruikers te testen, hierdoor weet Facebook dondersgoed waar jij graag op klikt. <strong>Als ondernemer wil je je tijd optimaal besteden</strong>. Daarom hebben wij een aantal tips en tools op een rijtje gezet die je kunt toepassen om te voorkomen dat je wordt afgeleid.</p>\r\n<p>&nbsp;</p>\r\n<h3>Herken jij &eacute;&eacute;n van deze situaties?</h3>\r\n<ul>\r\n<li>Je bezoekt Facebook omdat je iets wilde doen en 5 minuten later realiseer je dat je iets heel anders aan het doen bent.</li>\r\n<li>Je zit achter je computer en voor je het weet zit je weer in het nieuwsoverzicht te scrollen.</li>\r\n<li>Je hebt Facebook aanstaan en iemand begint te chatten, je bent nieuwsgierig wie het is en wat er wordt gezegd. Ja, en dan zit je weer te chatten..</li>\r\n<li>Je ziet een interessant artikel voorbij komen, en&nbsp;wil het later lezen maar bent bang dat je het vergeet of niet terug kunt vinden. Dan nu maar lezen..</li>\r\n<li>Wanneer je een melding ziet ben je nieuwsgierig en kijk je wat er in staat. En daar ben je weer afgeleid.</li>\r\n<li>(schaamteloos) je zit op Facebook ziet een foto van een leuke dame/man, je klikt op de profielfoto, volgende, volgende, ohnee daar ga je weer..</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><strong>Ja? Lees dan verder ;)</strong></p>\r\n<p>&nbsp;</p>\r\n<h3>Tip 1: Facebook Messenger/chat uitschakelen</h3>\r\n<p>Chatten is leuk maar leidt ontzettend af. Chatten is ook best verslavend, dit heb ik zelf ervaren in de tijd van MSN messenger. Als mijn moeder om 18:00 uur zei dat het eten klaar was had ik nog een half uur tijd nodig om iedereen te vertellen dat ik ging eten. Gelukkig gebruik ik Facebook messenger niet zo intensief meer als MSN destijds. Ik gebruik Facebook Messenger nog wel maar heb mijn instellingen zo ingesteld dat ik de kans om afgeleid te worden minimaliseer.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Hoe je voorkomt dat je wordt afgeleid door Facebook Messenger:</strong></p>\r\n<p><strong>Stap 1:&nbsp;</strong>Chat uitschakelen</p>\r\n<p>Klik rechtsonder op het tandwieltje en klik vervolgens op [Chat uitschakelen]</p>\r\n<p><img src="../images/media/Facebook chat uitschakelen.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Stap 2: </strong>Vervolgens heb je de mogelijkheid om te bepalen voor wie je de chat wil uitschakelen. Kies de eerste optie om de chat voor alle vrienden uit te schakelen.</p>\r\n<p><img src="../images/media/Stap 2 chat uitschakelen.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>LET OP:</strong> Wanneer iemand een chatbericht stuurt, wordt dit weergegeven in het&nbsp;postvak IN en kun je dit bericht later lezen. Hier krijg je wel een melding van bij je berichten, dit is helaas niet uit te schakelen.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Stap 3:</strong> Chat geluiden uitschakelen</p>\r\n<p>Klik rechtsonder op het tandwieltje en klik vervolgens op [Chatgeluiden]. Wanneer je <strong>geen</strong> vinkje voor Chatgeluiden ziet staan, heb je de chatgeluiden uitgeschakeld.</p>\r\n<p><img src="../images/media/Chat geluiden uitschakelen.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Tip 2: Meldingen over een bericht waarop je hebt gereageerd uitschakelen.</h3>\r\n<p>Je reageert op een bericht en vervolgens krijg je telkens een melding wanneer iemand anders op dit bericht reageert. Dit kan handig zijn als je reacties van anderen wilt bijhouden, maar het leidt af. Gelukkig is het vrij eenvoudig om deze meldingen uit te schakelen.</p>\r\n<p><strong>Onderneem de volgende stappen om meldingen van reacties op een bericht waarop jij hebt gereageerd uit te schakelen.</strong></p>\r\n<p><strong>Stap 1:</strong> Houd je muis op de melding. Er verschijnt een kruisje, klik hierop.</p>\r\n<p><img src="../images/media/melding 1.png" alt="" /></p>\r\n<p><strong>Stap 2:</strong> Er wordt gevraagd of je toekomstige meldingen over dit bericht wil uitschakelen. Klik op [Uitschakelen]</p>\r\n<p><img src="../images/media/melding 2.png" alt="" /></p>\r\n<p>Klaar..</p>\r\n<p><img src="../images/media/melding 3.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Tip 3: Facebook nieuwsoverzicht uitschakelen (mijn favoriet).</h3>\r\n<p><strong>LET OP:</strong> Alleen beschikbaar voor Google Chrome Webbrowser! Download Google Chrome <a href="http://www.google.nl/intl/nl/chrome/browser/" target="_blank">hier</a>.</p>\r\n<p>Het nieuwsoverzicht. ONGELOFELIJK verleidelijk om even snel een kijkje te nemen en voor je het weet ben je een kwartier verder en ben je vergeten wat je ook alweer wou doen. Ik kan me eigenlijk niet voorstellen dat jou dit nooit is overkomen. Gelukkig is er een geweldige (gratis) tool die ik nu al een aantal maanden gebruik en deze bevalt heel erg goed.</p>\r\n<p><strong>Hoe je de News Feed Eradicator installeert en voorkomt dat je wordt meegesleurd in het nieuwsoverzicht.</strong></p>\r\n<p><strong>Stap 1: </strong><a href="https://chrome.google.com/webstore/detail/news-feed-eradicator-for/fjcldmjmjhkklehbacihaiopjklihlgg?utm_source=gmail" target="_blank">Download News Feed Eradicator for Facebook hier</a></p>\r\n<p><strong>Stap 2: </strong>Klik op [+GRATIS]</p>\r\n<p><img src="../images/media/Download newsfeed Eradictaor 1.png" alt="" /></p>\r\n<p><strong>Stap 3:</strong> Klik op [Toevoegen]</p>\r\n<p><img src="../images/media/Download newsfeed Eradictor 2.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Wanneer je de News feed eradicator hebt ge&iuml;nstalleerd is deze direct ingeschakeld. Ga naar Facebook om te kijken of er berichten in het nieuwsoverzicht worden weergegeven. Als het goed is zie je een Quote.</p>\r\n<p>&nbsp;</p>\r\n<h3>Newsfeed Eradicator Uitschakelen/Inschakelen</h3>\r\n<p>Onderneem de volgende stappen om de newsfeed Eradicator in- of uit te schakelen:</p>\r\n<p>&nbsp;</p>\r\n<p>Klik op het Chrome-menu <img src="../images/media/SNP_9721C573E41777FBA43E1498AD084E3B160C_2696434_en_v2.png" alt="" /> in de browserwerkbalk. Selecteer [Extra] en klik vervolgens op [Extensies].</p>\r\n<p><img src="../images/media/Download newsfeed Eradictor 3.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>De Newsfeed Eradicator is ingeschakeld wanneer er een vinkje staat voor [ingeschakeld]</p>\r\n<p><img src="../images/media/Download newsfeed Eradictor 4.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>LET OP:</strong> Wanneer je de Newsfeed Eradicator uitschakelt moet je Facebook.com eerst opnieuw laden voordat je weer berichten te zien krijgt.</p>\r\n<p>&nbsp;</p>\r\n<h3>Tip 4: Facebook Ticker verbergen</h3>\r\n<p>De ticker vind je rechts op Facebook, hier wordt van vrienden een kort verslag getoond wanneer zij een actie uitvoeren. Geniaal bedacht van Facebook want het werkt en leidt dus af! Ik heb de ticker al zo lang uitgeschakeld dat ik net even moest kijken of deze er nog wel zat. Maar hij zit er nog ;).</p>\r\n<p><strong>LET OP:</strong> Wanneer je de News Feed Eradicator inschakelt wordt de ticker ook automatisch verborgen.</p>\r\n<p><strong>Als je berichten in het nieuwsoverzicht wilt blijven zien maar de ticker wilt verbergen kan dat door de volgende stappen te ondernemen.</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Stap 1:</strong> Klik rechtsonder op het tandwieltje en klik vervolgens op [Zijbalk verbergen]</p>\r\n<p>&nbsp;<img src="../images/media/Zijbalk verbergen 2.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Stap 2 (tip):</strong> Ook kun je de ticker verbergen door de &lsquo;balk&rsquo; tussen de Chat en de Ticker helemaal naar boven te schuiven.</p>\r\n<p>&nbsp;</p>\r\n<h3>Tip 5: Facebook uitnodigingen voor spelletjes blokkeren</h3>\r\n<p>Een van de grootste ergernissen op Facebook zijn de spelletjes uitnodigingen. Als je zelf geen spelletjes speelt en hier ook niet ge&iuml;nteresseert in bent is het best irritant en zonde van je tijd om hierdoor afgeleid te worden. Helaas is het is niet mogelijk om uitnodigingen van spelletjes met &eacute;&eacute;n muisklik uit te schakelen. Dit heeft waarschijnlijk te maken met het feit dat Facebook haar succes mede te danken heeft aan spelletjes als Candy Crush en Farm Heroes Saga.</p>\r\n<p><br /><strong>Onderneem de volgende stappen om uitnodigingen van de meest populaire spelletjes te voorkomen.</strong></p>\r\n<p><strong>Stap 1:</strong> Klik op het pijltje rechtsboven in Facebook en klik vervolgens op [Instellingen]</p>\r\n<p><img src="../images/media/Apps blokkeren 1.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Stap 2:</strong> Klik links op [Blokkeren]</p>\r\n<p><img src="../images/media/Apps blokkeren 2.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Er zijn twee opties!</strong></p>\r\n<ul>\r\n<li>Je kunt uitnodigingen van specifieke vrienden blokkeren.<br /><br /><img src="../images/media/Apps vriend blokkeren 3.png" alt="" /></li>\r\n<li>&nbsp;Je kunt de apps blokkeren</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Ik kan je niet vertellen welke vrienden je moet blokkeren maar wel welke spelletjes je het beste kunt blokkeren.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Stap 3:</strong> Scroll helemaal naar beneden, je ziet het kopje <strong>Apps blokkeren</strong>. Voeg onderstaande apps toe</p>\r\n<p><img src="../images/media/Apps blokkeren 4.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Hier een overzicht van de spelletjes. Voeg deze toe aan de lijst met geblokkeerde apps:</p>\r\n<p><strong>Tip: Gebruik kopi&euml;ren en plakken!</strong></p>\r\n<ul>\r\n<li>Candy Crush Saga</li>\r\n<li>Solitaire Blitz</li>\r\n<li>Words With Friends</li>\r\n<li>Birthdays</li>\r\n<li>Magic Land</li>\r\n<li>Gardentopia</li>\r\n<li>ubble Safari</li>\r\n<li>FarmVille</li>\r\n<li>FarmVille 2</li>\r\n<li>Monster World</li>\r\n<li>Diamond Dash - Trucos</li>\r\n<li>FarmVille</li>\r\n<li>ChefVille</li>\r\n<li>Buggle</li>\r\n<li>Superball</li>\r\n<li>Pepper Panic Saga</li>\r\n<li>Monster buster</li>\r\n<li>candy dash</li>\r\n<li>Candy Crush Soda Saga</li>\r\n<li>Texas HoldEm Poker</li>\r\n<li>Farm Heroes Saga</li>\r\n<li>Jelly mania</li>\r\n<li>Diamond Digger Saga</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3>Tip 6: Lees interessante berichten wanneer het beter uitkomt.</h3>\r\n<p>Je komt een interessant bericht of artikel tegen in het nieuwsoverzicht. Het komt niet zo goed uit, je wilt het later lezen maar dan vergeet je het of je kunt het bericht niet meer terug vinden omdat je niet meer precies weet welke pagina dit bericht had geplaatst. Herkenbaar?</p>\r\n<p><a href="../../../blog/facebook-update-facebook-introduceert-save" target="_blank">Facebook Save</a> biedt de mogelijkheid om link berichten, pagina&rsquo;s, muziek, boeken, film\'s, TV shows en evenementen op te slaan en later te bekijken.</p>\r\n<p><strong>Let op:</strong> Dit geldt niet voor <strong>Tekst updates</strong>, <strong>Foto\'s</strong> en <strong>video\'s</strong>.</p>\r\n<p>Ik bepaal graag zelf wat ik later wil bekijken ;). Dit trucje werkt met alle berichten!</p>\r\n<p>&nbsp;</p>\r\n<h3>Onderneem de volgende stappen om een bericht op Facebook later terug te lezen.</h3>\r\n<p>Klik onder het bericht op [Delen]</p>\r\n<p><img src="../images/media/Bericht later 1.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Kies er vervolgens voor om het bericht te delen [Op je eigen tijdlijn]</p>\r\n<p><img src="../images/media/Bericht later 2.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>En kies er voor om het bericht alleen te delen met jezelf door voor de optie [Alleen ik] te kiezen.</p>\r\n<p><img src="../images/media/bericht later 3.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Als je nu naar je persoonlijke Facebook profiel gaat, zie je het bericht op je eigen tijdlijn staan (alleen jij ziet dit).</p>\r\n<p>&nbsp;</p>\r\n<h3>Waren deze tips waardevol?</h3>\r\n<p>Ik ben heel erg benieuwd wat je van bovenstaande tips vond. Heb je nog vragen en/of opmerkingen?<br />Laat het ons weten op Facebook of laat onder deze blog een reactie achter.</p>', 'We worden allemaal wel eens afgeleid op Facebook. Dit is niet gek, aangezien Facebook de mogelijkheid heeft om de website en apps op meer dan een miljard gebruikers te testen, hierdoor weet Facebook dondersgoed waar jij graag op klikt. Als ondernemer wil ', '6-tips-om-te-voorkomen-dat-je-wordt-afgeleid-op-facebook', 2, 1, 'images/blogposts/Cover.png', '2014-07-24 13:50:31', '2015-05-21 10:17:12', '2015-07-27 13:50:31'),
(12, 'De #1 Valkuil Voor Facebook Paginabeheerders.', '<p>Ik zie veel paginabeheerders die zich te veel focussen op het verzamelen van zo veel mogelijk Facebook fans. Het hebben van veel fans is onder de bedrijven op Facebook een soort statussymbool geworden.<strong> Met deze strategie sla je als pagina beheerder de plank compleet mis</strong>. Op de korte en lange termijn zal deze strategie tegen je werken.</p>\r\n<p>&nbsp;</p>\r\n<h3>Focus je op relevante fans</h3>\r\n<p>Met relevante fans bedoel ik gebruikers die binnen jouw doelgroep vallen. Om de waarde hiervan in te zien kan ik deze het best onderverdelen in 3 categorie&euml;n.</p>\r\n<ul>\r\n<li><strong>Potenti&euml;le klanten</strong>. Mensen die binnen je doelgroep vallen maar nog geen klant zijn.</li>\r\n<li><strong>Klanten</strong>. Mensen die al producten en/of diensten van je afnemen.</li>\r\n<li><strong>Ambassadeurs</strong>. Mensen (niet in alle gevallen klanten) die enthousiast zijn over jouw product en/of dienst en jou aanraden bij mensen in hun netwerk.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p><img src="../images/media/fans en fans.png" alt="" /></p>\r\n<p>Facebook biedt bedrijven de mogelijkheid om relaties op te bouwen &eacute;n te onderhouden met een hele groep mensen. Hoe interessant zou Facebook zijn als je je volledig zou <strong>focussen op het cre&euml;ren van ambassadeurs</strong>?</p>\r\n<p><img src="../images/media/happy_face_raising_eyebrows_hg_clr.gif" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Hoe kom ik in contact met relevante Facebook fans?</h3>\r\n<p>Om in contact te komen met relevante Facebook fans moet je de behoeftes en interesses van je doelgroep in kaart brengen. Wanneer je dit hebt gedaan kun je hier op inspelen. Samengevat moet je dus deze twee vragen beantwoorden:</p>\r\n<ol>\r\n<li>Wie is mijn doelgroep?</li>\r\n<li>Wat kan ik voor mijn doelgroep betekenen?</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<h3>Ik zal je opweg helpen:</h3>\r\n<p><strong>1. Wie is mijn doelgroep.</strong></p>\r\n<p>Onderzoek voor jezelf, wie jouw klanten zijn.</p>\r\n<ul>\r\n<li>Waar wonen zij?</li>\r\n<li>Hoe oud zijn zij?</li>\r\n<li>Wat is hun geslacht?</li>\r\n<li>Wat is hun burgerlijke status?</li>\r\n<li>Wat voor werk doen zij?</li>\r\n<li>Wat zijn hun hobby\'s?</li>\r\n<li>Wat is hun inkomen?</li>\r\n<li>Wat zijn hun interesses?</li>\r\n<li>Waaraan hebben zij behoefte?</li>\r\n<li>Wat zijn hun knelpunten?</li>\r\n</ul>\r\n<p><em>Hebben zij huisdieren? Zou voor een dierenwinkel bijvoorbeeld wel handig zijn om te weten.</em></p>\r\n<p>Probeer dit zo specifiek mogelijk te doen.</p>\r\n<p><strong>2. Wat kan ik voor mij doelgroep betekenen?</strong></p>\r\n<p>Aan de hand van bovenstaande informatie ga je afvragen wat jij voor je doelgroep kunt betekenen.</p>\r\n<p>Hoe kun je jouw doelgroep aan de hand van de behoeftes en interesses die zij hebben;</p>\r\n<ul>\r\n<li>Informeren</li>\r\n<li>Motiveren</li>\r\n<li>Amuseren</li>\r\n<li>Inspireren</li>\r\n<li>Activeren</li>\r\n</ul>\r\n<p>Wanneer je dit duidelijk hebt kun je beginnen met het bedenken of delen van interessante berichten voor je doelgroep.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Tip:</strong> Je hoeft niet alles zelf te bedenken. Je kunt ook interessante artikelen van andere websites delen op je Facebook pagina.</p>\r\n<p>&nbsp;</p>\r\n<h3>Vergelijk je Facebook pagina met een TV -of Radio zender.</h3>\r\n<p>TV -en radio zenders richten zich ook op een bepaalde doelgroep, achterhalen de interesses en behoeftes en spelen hier op in. Door dit te doen trekken zij kijkers/luisteraars aan, die binnen dezelfde doelgroep vallen. <strong>RTL 7 - Meer voor mannen</strong> is hier een goed voorbeeld van.</p>\r\n<p><strong>Quote: "Every company is its own TV station, magazine and newspaper" ~<a href="http://www.convinceandconvert.com/social-media-strategy/18-social-media-quotes/" target="_blank">Jay Bear</a></strong></p>\r\n<p>Bied eerst waarde door in te spelen op interesses en behoeftes en plaats eventueel tussendoor promotionele berichten (zeker niet te veel). Elke doelgroep is anders, je zult dus zelf moeten testen wat bij jouw fans het best werkt. Het kan heel goed zijn dat jouw fans opzoek zijn naar een leuke aanbieding.</p>\r\n<p>&nbsp;</p>\r\n<h3>Feedback nodig?</h3>\r\n<p>Als je hiermee aan de slag gaat en twijfelt of je het wel goed doet, laat het dan weten via onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a> of laat een bericht achter onder deze blog.&nbsp;Ik help je graag opweg!</p>', 'Ik zie veel paginabeheerders die zich te veel focussen op het verzamelen van zo veel mogelijk Facebook fans. Het hebben van veel fans is onder de bedrijven op Facebook een soort statussymbool geworden. Met deze strategie sla je als pagina beheerder de pla', 'de-1-valkuil-voor-facebook-paginabeheerders', 2, 1, 'images/blogposts/valkuil.png', '2014-07-31 12:04:57', '2015-05-21 11:57:12', '2015-07-27 12:04:57'),
(13, 'Hoe Je Facebook Laat Weten Welke Berichten Je Niet Wilt Zien.', '<p>Zie jij op Facebook ook regelmatig berichten voorbij komen waarbij je ge&iuml;rriteerd raakt? Facebook is tot op de dag van vandaag druk bezig met het optimaliseren van het nieuwsoverzicht, met als doel gebruikers de meest relevante berichten te tonen. In dit artikel vertel ik je kort wat je moet doen wanneer je een bericht in je nieuwsoverzicht te zien krijgt waaraan je je irriteert.</p>\r\n<p>&nbsp;</p>\r\n<h3>Wat je moet doen wanneer je ge&iuml;rriteerd raakt door een bericht in je nieuwsoverzicht.</h3>\r\n<p>Stap 1: Klik op het icoontje rechtsboven in het bericht dat je irriteert. Klik vervolgens op \'ik wil dit niet zien\' (anoniem).</p>\r\n<p><img src="../images/media/Ik wil dit niet zien.png" alt="" /></p>\r\n<p>Wanneer je dit hebt gedaan ben in je in principe klaar. Als je wilt kun je nog aangeven waarom je dit bericht niet wilt zien.</p>\r\n<p>&nbsp;</p>\r\n<p>Stap 2 : Wil je nog aangeven waarom je dit bericht niet wilt zien? Klik dan op &ldquo;waarom wil je dit niet zien&rsquo;.</p>\r\n<p><img src="../images/media/Ik wil dit niet zien 2.png" alt="" /></p>\r\n<p>Stap 3: Geef aan waarom je dit bericht niet wilt zien.</p>\r\n<p><img src="../images/media/Waarom wil je dit niet zien.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Vrienden verwijderen en pagina&rsquo;s disliken (ontvolgen).</h3>\r\n<p>Uiteindelijk zijn wij zelf verantwoordelijk voor de berichten die wij in ons nieuwsoverzicht te zien krijgen (met uitzondering van advertenties). Wij kiezen er tenslotte zelf voor wie we als vriend toevoegen en welke pagina&rsquo;s we liken/volgen. Als je nieuwsoverzicht echt chaotisch is, adviseer ik je om eens door al je vrienden en pagina&rsquo;s die je hebt geliked heen te scrollen.</p>\r\n<p>Om je vrienden of de pagina&acute;s die je hebt geliked terug te vinden ga je naar je eigen tijdlijn (je Facebook profiel). Je vindt je Facebook vrienden en pagina&rsquo;s die je hebt geliked hier in een overzicht terug:</p>\r\n<p><img src="../images/media/Vrienden en vind ik leuks beheren.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Heb je vragen of is er iets niet helemaal duidelijk? Voel je vrij om je vraag hieronder te stellen.</p>', 'Zie jij op Facebook ook regelmatig berichten voorbij komen waarbij je ge&iuml;rriteerd raakt? Facebook is tot op de dag van vandaag druk bezig met het optimaliseren van het nieuwsoverzicht, met als doel gebruikers de meest relevante berichten te tonen. In', 'hoe-je-facebook-laat-weten-welke-berichten-je-niet-wilt-zien', 2, 1, 'images/blogposts/Facebook-ik-wil-dit-niet-zien.png', '2014-10-08 12:09:15', '2015-05-21 12:09:15', '2015-05-22 12:52:39'),
(14, 'Hoe je kunt zien Wanneer Fans Online Zijn en hoe je hier eenvoudig op inspeelt om zo veel mogelijk Fans te Bereiken.', '<p>"Hoe kan ik zien wanneer mijn fans online zijn?" Is een vraag die je als paginabeheerder vast wel eens hebt gesteld. In dit artikel lees je hoe je achterhaalt wanneer je fans online zijn en hoe je er voor kunt zorgen dat je berichten op je juiste tijdstip op Facebook worden geplaatst zonder dat jij zelf achter Facebook zit.</p>\r\n<p>&nbsp;</p>\r\n<h3>Hoe achterhaal ik wanneer mijn fans online zijn?</h3>\r\n<p>Klik bovenaan op het kopje [Statistieken] --&gt; [Berichten] --&gt; [Wanneer zijn je fans online]. Je krijgt direct een week overzicht te zien met het totaal aantal fans die per dag online zijn. Door je muis over de dagen heen te bewegen zie je de verschillende tijden wanneer je fans online zijn.</p>\r\n<p><img src="../images/media/Wanneer zijn mijn fans online.png" alt="" /></p>\r\n<p><img src="../images/media/Insights.gif" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Voorbeeld: Als je naar deze statistieken van onze pagina kijkt zie je dat de meeste fans om 12:00 uur online zijn en dit aantal blijft ongeveer gelijk tot 22:00 uur. Aan de hand van deze gegevens kunnen we de conclusie trekken dat het niet verstandig is om voor 12:00 of na 22:00 berichten te plaatsen op onze pagina.</p>\r\n<p>&nbsp;</p>\r\n<p><img src="../images/media/Fans online KG.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Let er wel op; de gegevens die je hier vindt zijn van de afgelopen week,&nbsp;elke week kan anders zijn. Het is verstandig om hier regelmatig naar te kijken wanneer je een bericht op je pagina wil delen.</p>\r\n<p><strong>Extra:</strong> <em>Wat ik ook heel erg interessant vind, is om uit te rekenen hoeveel procent van je Facebook fans per dag actief zijn. Aantal actieve fans (dag) / Totaal aantal fans x 100 = &hellip; % van je fans die (per dag) actief zijn op Facebook.</em></p>\r\n<p>&nbsp;</p>\r\n<h3>Hoe plan ik berichten in voor een later tijdstip?</h3>\r\n<p>Je zit natuurlijk niet altijd op het zelfde tijdstip als je fans op Facebook. Gelukkig heeft Facebook hier ook over na gedacht en heb je de mogelijkheid om berichten vooruit te plannen. Hier stap voor stap hoe je een bericht inplant.</p>\r\n<p>&nbsp;</p>\r\n<h3>1. Klik in het gedeelte waar je een bericht typt.</h3>\r\n<p>&nbsp;<img src="../images/media/Bericht plannen 1.png" alt="" width="493" /></p>\r\n<p>&nbsp;</p>\r\n<h3>2. Klik op het pijltje naast \'Publiceren\' en vervolgens op \'Plannen\'.</h3>\r\n<p>&nbsp;<img src="../../../images/media/Bericht Plannen.png" alt="" width="0" height="0" /><img src="../../../images/media/Bericht Plannen.png" alt="" width="493" height="227" />&nbsp;</p>\r\n<h3>&nbsp;</h3>\r\n<h3>3. Voer de datum en tijd in wanneer je het bericht wil laten publiceren.</h3>\r\n<p>&nbsp;<img src="../../../images/media/Bericht Plannen2.png" alt="" width="344" height="195" /></p>\r\n<h3>4. Klik als je klaar bent op \'plannen\'.</h3>\r\n<p>&nbsp;</p>\r\n<h3>5. Klik op bericht bekijken om je ingeplande bericht te wijzigen of te verwijderen.</h3>\r\n<p>&nbsp;<img src="../images/media/Bericht plannen 6.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>TIP:</strong> Houd er wel rekening mee dat er meer paginabeheerders zijn die dit trucje kennen. In sommige gevallen kan het verstandig zijn om je bericht niet tijdens piektijden te plaatsen maar net iets eerder of later. Dit is voor alle pagina\'s anders, mijn advies is om te testen wat voor jou het best werkt.</p>\r\n<p>&nbsp;</p>\r\n<h3>Feedback</h3>\r\n<p>Ik ben heel erg benieuwd wat je van bovenstaande tips vond. Heb je nog vragen en/of opmerkingen?<br />Laat het ons weten op onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a> of laat onder deze blog een reactie achter.</p>', '"Hoe kan ik zien wanneer mijn fans online zijn?" Is een vraag die je als paginabeheerder vast wel eens hebt gesteld. In dit artikel lees je hoe je achterhaalt wanneer je fans online zijn en hoe je er voor kunt zorgen dat je berichten op je juiste tijdstip', 'hoe-je-kunt-zien-wanneer-fans-online-zijn-en-hoe-je-hier-eenvoudig-op-inspeelt-om-zo-veel-mogelijk-fans-te-bereiken', 2, 1, 'images/blogposts/Fans-online-digitus.png', '2014-10-08 10:56:41', '2015-05-21 12:38:26', '2015-08-19 10:56:41');
INSERT INTO `posts` (`id`, `titel`, `content`, `snippet`, `slug`, `user_id`, `categorie_id`, `uitgelichte_afbeelding`, `published_at`, `created_at`, `updated_at`) VALUES
(15, 'Fysiotherapie Kleinman: Zit jij wel eens langer dan een uur achtereen op je computer?', '<p>Als je dit artikel zit te lezen doe je dit zeer waarschijnlijk op je computer/laptop, tablet of smartphone. Maar zit je zeer frequent of wel eens langer dan een uur achtereen op je computer te werken, te internetten, te facebooken of te gamen? Dan is dit artikel mogelijk interessant voor je.</p>\r\n<h3>Voorkom overbelasting van je spieren.</h3>\r\n<p>Als we rustig denken te zitten achter een computer/laptop of met een tablet of smartphone in de hand dan gebruiken we toch nog zeer veel spieren in ons lichaam. Dit is maar goed ook want als dit niet het geval zou zijn, dan zouden we als een plumpudding in elkaar zakken. Gebruiken we deze spieren echter te lang achter elkaar of op een verkeerde manier dan kunnen ze overbelast raken. En dit kan op zijn beurt weer o.a. pijnklachten tot gevolg hebben. Het is dus belangrijk om niet te lang in &eacute;&eacute;n houding te zitten en om goed op je houding te letten. Het eerste is vrij eenvoudig (wat heet eenvoudig) te tackelen. Het tweede vraagt wat meer inzicht en informatie.</p>\r\n<p>&nbsp;</p>\r\n<h3>Vergeet niet te bewegen.</h3>\r\n<p>In vakjargon praten deskundigen vaak over &lsquo;regelmatig vertreden&rsquo;. In de praktijk komt het er op neer dat ik mensen adviseer om hun werkplek / computerplek elk uur voor een aantal (5) minuten te verlaten. Dus loop even naar de printer of naar een collega, pak wat te drinken, ga naar het toilet of strek zo maar even de benen.</p>\r\n<p><strong>Tip:</strong> Drink tijdens je werk c.q. het computeren veel water; je zal dan automatisch een keer (of vaker) naar het toilet moeten.</p>\r\n<p>Het effect van in beweging komen is dat je spieren uit de eenzijdige houding komen, aan het werk moeten (andere bewegingen) wat op zijn beurt de doorbloeding in je hele lichaam weer stimuleert.</p>\r\n<p>&nbsp;</p>\r\n<h3>3 belangrijke adviezen.</h3>\r\n<p>Een ergonomisch verantwoorde computerplek moet voldoen aan heel wat eisen en richtlijnen, en om ze allemaal hier te beschrijven gaat veel te ver. Ik zal me dus beperken tot een paar belangrijke adviezen.</p>\r\n<ol>\r\n<li>Allereerst is het belangrijk om te zorgen voor een goede (bureau)stoel, welke voldoende steun moet geven en goed moet aansluiten. Hierbij moet je o.a. denken aan de hoogte van de stoel, de diepte van de zitting, een goede rugsteun (lendensteun) en armleggers; En bij voorkeur ook nog allemaal verstelbaar.</li>\r\n<li>Wat ook van belang is, is de hoogte van het beeldscherm en de afstand waarop deze staat. Het beeldscherm moet vooral niet te dichtbij staan en moet op een dusdanige hoogte staan dat de eerste regel van je beeldscherm zich op ooghoogte bevindt. Als je dit weet dan merk je al meteen dat een laptop dus geen geschikt ding is om lang achter te zitten. Volgens de Arbowet mogen beeldscherm en toetsenbord zelfs niet eens aan elkaar zitten en moet een laptop dan ook voorzien zijn van een los beeldscherm of los toetsenbord. De eenvoudigste oplossing voor als je een laptop hebt is een laptopstandaard in combinatie met een losse muis en los toetsenbord.</li>\r\n<li>Tenslotte is het belangrijk dat je goed op je houding let. Zit rechtop, trek je schouders niet op, houd je bovenarmen langs je lichaam en leg je toetsenbord recht voor je neer (en niet te ver weg).</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>Veel en lang werken / internetten met een tablet of smartphone vraagt weer om heel andere adviezen en als ik dit nu zou toelichten zou dit geen artikel/blog blijven maar een boekwerk worden. Dus ik sluit af met de oproep om vragen met betrekking tot dit onderwerp gerust te stellen onder dit bericht of op mijn <a href="https://www.facebook.com/FysiotherapieKleinman" target="_blank">Facebook pagina Fysiotherapie Kleinman</a>.</p>\r\n<p>Neem voor m,eer informatie een kijkje op <a href="http://www.fysiotherapiekleinman.nl" target="_blank">www.fysiotherapiekleinman.nl</a></p>', 'Als je dit artikel zit te lezen doe je dit zeer waarschijnlijk op je computer/laptop, tablet of smartphone. Maar zit je zeer frequent of wel eens langer dan een uur achtereen op je computer te werken, te internetten, te facebooken of te gamen? Dan is dit ', 'fysiotherapie-kleinman-zit-jij-wel-eens-langer-dan-een-uur-achtereen-op-je-computer', 2, 1, 'images/blogposts/Fysiotherapie-Kleinman--Voorkomen-beter-dan-genezen.png', '2014-10-10 13:02:01', '2015-05-21 13:02:01', '2015-05-22 12:54:03'),
(16, 'Hoe jij je voorbereidt op Facebook Marketing in 2015.', '<p>Wellicht heb je er destijds iets over gehoord. Facebook heeft in januari 2015 een nieuwsoverzicht update doorgevoerd die nu ook het&nbsp;<strong>organisch (gratis) bereik</strong>&nbsp;van promotionele berichten verder beperkt. Marketeers die zich met Facebook Marketing bezig houden hadden dit aan zien komen en zijn hier natuurlijk van op de hoogte. Maar de doorsnee ondernemer heeft geen idee wat hier gaande is en dat vind ik wel zorgelijk. In dit blog bericht leg ik uit hoe je jouw strategie hierop aanpast.</p>\r\n<p>&nbsp;</p>\r\n<h3>Facebook is het zat!</h3>\r\n<p>Facebook gaf, met het aankondigen van deze update, een heel duidelijk signaal af! Wie niet wil luisteren moet maar voelen. Dat is hoe deze boodschap naar mijn mening overkwam. Facebook is paginabeheerders zat die:</p>\r\n<ul>\r\n<li>Het promoten van berichten proberen te ontwijken ten koste van de gebruikers ervaring op Facebook.</li>\r\n<li>Zo veel mogelijk fans verzamelen om deze vervolgens lastig te vallen met promotionele berichten.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h3>Wat doet Facebook hier precies aan?</h3>\r\n<p>Facebook dringt het organische (gratis) bereik van het volgende type berichten terug:</p>\r\n<ul>\r\n<li>Berichten die aansporen om een product aan te schaffen of een app te installeren.</li>\r\n<li>Berichten die kortingen en wedstrijden promoten zonder duidelijke context.</li>\r\n<li>Berichten die exact dezelfde inhoud bevatten als advertenties.</li>\r\n</ul>\r\n<p>In het nieuwsbericht waarin Facebook dit naar buiten bracht gaf Facebook deze 2 berichten als voorbeeld:</p>\r\n<p><img src="../images/media/10734305_305231486354371_1420997165_n.jpg" alt="" /></p>\r\n<p><img src="../images/media/10574680_668605413252737_118053656_n.jpeg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Er is geen plek voor irritante promotionele berichten op Facebook.</h3>\r\n<p>Voor elke gebruiker zijn er elke dag gemiddeld 1500 berichten van vrienden, kennissen, pagina&rsquo;s en groepen. Hiervan worden er gemiddeld 300 getoond. Er moet dus flink worden gefilterd! Het is vrij logisch dat Facebook de berichten die zorgen voor de meeste irritatie er uit filtert, toch?</p>\r\n<p>&nbsp;</p>\r\n<h3>Om Facebook te begrijpen moet je je in Facebook verplaatsen.</h3>\r\n<p>Gebruikers behouden en actief houden is voor Facebook prioriteit nummer 1. Het doel is om gebruikers zo veel mogelijk tijd door te laten brengen op Facebook. Logisch want zonder actieve gebruikers is Facebook niet meer interessant voor bedrijven. Als er geen gebruikers meer zijn dan lopen de bedrijven ook weg.</p>\r\n<p>Uit onderzoek van Facebook blijkt dat gebruikers meer relevante berichten willen zien van vrienden en pagina&rsquo;s. Berichten van pagina&rsquo;s met promotionele inhoud worden door gebruikers vaker ervaren als irritant. Als je je afvraagt hoe dit onderzoek wordt gedaan, zie onderstaand voorbeeld:</p>\r\n<p><img src="../images/media/Voorbeeld onderzoek Facebook 20150.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Betekent dit dat Facebook het betaalde bereik van promotionele berichten ook beperkt of duurder maakt?</h3>\r\n<p>Nee. Net als bij Google Adwords worden de kosten hoger wanneer een advertentie als niet interessant wordt gezien door de gebruiker. De kosten worden voor het grootste deel gebaseerd op de populariteit van een bericht. Als je een bericht promoot dat niemand interessant vindt, gaan de kosten omhoog. Zorg er daarom voor dat het bericht relevant is voor de doelgroep waaronder je deze promoot.</p>\r\n<p>Uit het onderzoek van Facebook blijkt ook dat gebruikers advertenties meer waarderen. De reden hiervan is dat Facebook controle heeft op hoeveel en welke advertenties er worden getoond. Facebook beperkt het aantal advertenties per dag en voorkomt dat gebruikers irrelevante advertenties/berichten te zien krijgen.</p>\r\n<p>&nbsp;</p>\r\n<h3>Wat betekent dit voor mij als Facebook paginabeheerder?</h3>\r\n<p>Dit is niet de eerste keer - en ook zeker niet de laatste keer - dat Facebook een update doorvoert die het bereik van Facebook pagina&rsquo;s beperkt. Dit betekent voor veel paginabeheerders dat het de hoogste tijd is hun strategie aan te passen.</p>\r\n<p>Het is heel simpel! Als jij goed bent voor de gebruiker, dan is Facebook goed voor jou. En het allermooiste is, als jij goed bent voor de gebruiker dan ben je ook goed voor je bedrijf.</p>\r\n<p>&nbsp;</p>\r\n<h3>Hoe speel ik hier dan het best op in?</h3>\r\n<p>Wat je je als eerste moet afvragen, voordat je tijd en geld in Facebook stopt is: Wie is mijn doelgroep? Waarom zitten zij op Facebook? Wat heb ik te bieden, waar mijn doelgroep iets aan heeft? Waar houdt mijn doelgroep zich mee bezig? Deel ik relevante informatie voor mijn doelgroep?</p>\r\n<p>&nbsp;</p>\r\n<p>Ik heb hier een 6 onmisbare tips voor je:</p>\r\n<ol>\r\n<li>Focus je alleen op relevante fans!</li>\r\n<li>Focus je op waardevolle content voor jouw doelgroep (zo trek je relevante fans aan).</li>\r\n<li>Speel in op wat nu actueel is en ligt binnen de interesses van jouw doelgroep.</li>\r\n<li>Wees sociaal, laat zien wat er bij jou achter de schermen gebeurt.</li>\r\n<li>Reserveer advertentie tegoed om bovenstaande en promotionele berichten onder de aandacht te brengen. Als je bovenstaande stappen volgt zijn de advertentie kosten minimaal.</li>\r\n<li>Zorg dat je niet afhankelijk blijft van Facebook. Houd ook contact met je doelgroep via andere kanalen zoals e-mail.</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p><em>Even voor de duidelijkheid. Dit is niet nieuw. Dit is altijd al zo geweest en blijft ook altijd relevant, &oacute;&oacute;k als Facebook weer iets verandert. Ik zeg het gewoon nog een keer. &ldquo;Zolang jij goed bent voor gebruiker, is Facebook goed voor jou&rdquo;.</em></p>\r\n<p>&nbsp;</p>\r\n<p>Ik ben benieuwd wat jij van deze update vindt. Heb je nog vragen/opemerkingen? Laat&nbsp;het ons weten via onze <a title="Facebook Digitus Marketing" href="../../../" target="_blank">Facebook pagina</a>.</p>', 'Wellicht heb je er destijds iets over gehoord. Facebook heeft in januari 2015 een nieuwsoverzicht update doorgevoerd die nu ook het&nbsp;organisch (gratis) bereik&nbsp;van promotionele berichten verder beperkt. Marketeers die zich met Facebook Marketing b', 'hoe-jij-je-voorbereidt-op-facebook-marketing-in-2015', 2, 1, 'images/blogposts/People-First.png', '2014-11-29 12:51:02', '2015-05-21 13:47:23', '2015-08-19 11:51:02'),
(17, 'Een Van Facebook\'s Beste Updates Tot Nu Toe; De Call To Action Knop!', '<p>Dit is goed nieuws! Het is al een hele tijd geleden dat ik zo enthousiast werd over een update! Dit was ook wel nodig. Zeker na de <a href="../../../blog/hoe-jij-je-voorbereid-op-facebook-marketing-in-2015" target="_blank">update waarin Facebook aankondigde dat het organisch (gratis) bereik van promotionele berichten verder zal dalen</a>. De hoogste tijd om paginabeheerders weer tegemoet te komen.</p>\r\n<p>&nbsp;</p>\r\n<h3>Nieuwe call to action knop!</h3>\r\n<p>Oke, wat gaat er veranderen? Wellicht heb je de &lsquo;klik hier&rsquo; knop in onze omslagfoto al eens gezien. Het doel van deze knop is, gebruikers doorverwijzen naar de Facebook tab om ons e-book te downloaden. <strong>Deze knop is binnenkort overbodig</strong>!</p>\r\n<p>(Het nadeel is namelijk dat gebruikers die op de &lsquo;klik hier&rsquo; knop klikken, vervolgens weer op een link in de beschrijving van de omslagfoto moeten klikken om naar de Facebook tab te gaan.)</p>\r\n<p><img src="../images/media/Voorbeeld Facebook tab digitus.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Facebook komt met een update die het mogelijk maakt om als paginabeheerder een knop toe te voegen die gebruikers direct doorverwijst naar een bestemming, die jij als paginabeheerder bepaalt. Je kunt gebruikers doorverwijzen naar een Facebook tab of naar je eigen website. Aan jou de keuze!</p>\r\n<p>&nbsp;</p>\r\n<h3>Call to action knop op computers.</h3>\r\n<p>De knop zal op computers links van de vind-ik-leuk knop in de omslagfoto worden weergegeven.</p>\r\n<p><img src="../images/media/DollarShaveClubSignUp650dfd.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Call to action knop ook op mobiele apparaten!</h3>\r\n<p>Het allerbeste nieuws is dat de nieuwe \'call to action\' knop OOK op mobiele apparaten zal worden weergegeven. Facebook tabs (zie hieronder de tab *Gratis e-book*) worden niet op mobiele apparaten weergegeven.</p>\r\n<p><img src="../images/media/Tab voorbeeld digitus gratis e-book.png" alt="" /></p>\r\n<p>De knop wordt op mobiele apparaten onder het telefoonnummer weergegeven. Dit geldt in ieder geval voor pagina&rsquo;s die vallen onder de categorie &lsquo;lokale bedrijven&rsquo;. Ik heb nog geen voorbeelden op andere pagina&rsquo;s gezien.</p>\r\n<p>&nbsp;</p>\r\n<p><img src="../images/media/iOSDestination.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Keuze uit 7 verschillende knoppen</h3>\r\n<p>Je kunt niet zelf bepalen wat er op de knop staat. Facebook geeft 7 opties waaruit je kunt kiezen. Dit zullen de verschillende knoppen zijn waar we straks uit kunnen kiezen. Ik doe een poging om de Engelse knoppen te vertalen. Het is altijd weer een verrassing wat Facebook er in het Nederlands van maakt.</p>\r\n<ul>\r\n<li>Boek&nbsp;nu</li>\r\n<li>Contact met ons opnemen</li>\r\n<li>App gebruiken</li>\r\n<li>Game spelen</li>\r\n<li>Shoppen</li>\r\n<li>Registreren</li>\r\n<li>Video bekijken</li>\r\n</ul>\r\n<p>Hier de knoppen zoals aangekondigd door Facebook:</p>\r\n<ul>\r\n<li>Book now</li>\r\n<li>Contact us</li>\r\n<li>Use app</li>\r\n<li>Play game</li>\r\n<li>Shop now</li>\r\n<li>Sign up</li>\r\n<li>Watch video</li>\r\n</ul>\r\n<p>Vervolgens kun je zelf een link toevoegen waar gebruikers naar worden doorverwezen wanneer ze op de knop klikken.</p>\r\n<p><img src="../images/media/CreateACallToActionButton.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>Het inzetten van Facebook tabs wordt nu nog interessanter.</h3>\r\n<p>Met deze updates wordt het inzetten van Facebook tabs nog interessanter. De meeste gebruikers, gebruiken Facebook voornamelijk via mobiele apparaten. Dit biedt nieuwe kansen om gebruikers vanuit mobiele apparaten naar Facebook tabs te leiden.</p>\r\n<p>&nbsp;</p>\r\n<p><a href="mailto:info@digitusmarketing.nl?subject=Meer%20informatie%20over%20Facebook%20tabs%20%20-Skype%20of%20Google%20Hangout%20gesprek%20plannen.%20" target="_blank">Benieuwd hoe Facebook tabs ingezet worden om meer omzet te genereren? Stuur mij een mailtje om een Skype of Google Hangout gespek in te plannen.</a></p>\r\n<p>&nbsp;</p>\r\n<h3>&nbsp;</h3>\r\n<p>Laat het via onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a> weten wat jij er van vindt of als je vragen hebt!</p>', 'Dit is goed nieuws! Het is al een hele tijd geleden dat ik zo enthousiast werd over een update! Dit was ook wel nodig. Zeker na de update waarin Facebook aankondigde dat het organisch (gratis) bereik van promotionele berichten verder zal dalen. De hoogste', 'een-van-facebooks-beste-updates-tot-nu-toe-de-call-to-action-knop', 2, 1, 'images/blogposts/CALL-TO-ACTIONN!.png', '2014-12-16 09:11:32', '2015-05-21 15:23:19', '2015-09-04 08:11:32'),
(18, 'De 7 Laatste Facebook Updates Om Enthousiast Van Te Worden!', '<p>Facebook is flink aan de weg aan het timmeren. Na het lezen van dit artikel ben je weer op de hoogte van de laatste updates en is het wel duidelijk dat Facebook nog lang geen verleden tijd is!</p>\r\n<p>&nbsp;</p>\r\n<h3>1. Facebook search</h3>\r\n<p>Facebook search maakt het mogelijk om berichten terug te vinden aan de hand van zoekwoorden. Amerikaanse Facebook gebruikers kunnen er al enige tijd gebruik van maken. Gebruikers uit andere landen kunnen er gebruik van maken door de taal instellingen te wijzigen naar English(US). Facebook&rsquo;s zoekmachine is nu een feit!</p>\r\n<p><img src="../images/media/Facebook search 1.png" alt="" /></p>\r\n<p><a href="http://search.fb.com" target="_blank">http://search.fb.com</a></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Belangrijk:</strong> Berichten die met een beperkt publiek gedeeld zijn, kun je niet terug vinden. Stel dat jij op Facebook een bericht alleen met je vrienden deelt, dan kunnen gebruikers die niet met jou bevriend zijn, dit bericht niet terug vinden in Facebook search.</p>\r\n<p><strong>Zoekresultaat voorbeeld:</strong></p>\r\n<p><img src="../images/media/Facebook search 2.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>2. &ldquo;Sell Something&rdquo; berichttype in Facebook groepen.</h3>\r\n<p>Er wordt flink gehandeld binnen Facebook groepen. Facebook maakt het gebruikers eenvoudiger om aan te geven dat ze iets willen verkopen binnen een Facebook groep. Om deze reden wordt er op dit moment een &ldquo;Sell Something&rdquo; berichttype getest binnen enkele Facebook groepen.</p>\r\n<p><img src="../images/media/1 SellSomething650.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Gebruikers kunnen bij dit berichttype het product, de prijs, de productomschrijving en een afbeelding toevoegen.</p>\r\n<p><img src="../images/media/2 SellSomethingForm.jpg" alt="" /></p>\r\n<p>Voor bedrijven is dit een goede ontwikkeling op lange termijn. Gebruikers zullen op deze manier gaan wennen om aankopen te doen binnen Facebook. Een volgende stap zou bijvoorbeeld kunnen zijn dat gebruikers een betalingsmethode koppelen waardoor betalen via Facebook eenvoudiger wordt.</p>\r\n<p>&nbsp;</p>\r\n<h3>3. Een einddatum toevoegen aan een bericht.</h3>\r\n<p>Facebook geeft paginabeheerders de mogelijkheid om een einddatum toe te voegen aan een bericht. Dit houd in: na de einddatum zal het bericht niet langer in het nieuwsoverzicht van gebruikers worden getoond. Het gepubliceerde bericht blijft echter wel op de tijdlijn van de pagina staan.</p>\r\n<p>Stel dat je als paginabeheerder van een restaurant de daghap op Facebook plaatst en het bericht wordt bij iemand de volgende dag in zijn of haar nieuwsoverzicht getoond. Dan is deze informatie niet meer relevant.</p>\r\n<p><strong>Wil jij graag een einddatum aan je bericht(en) toevoegen?</strong><br />Zo doe je dat:</p>\r\n<p><strong>Stap 1.</strong></p>\r\n<p><img src="../images/media/1 einddatum bericht Facebook.png" alt="" /></p>\r\n<p><strong>Stap 2.</strong></p>\r\n<p><img src="../images/media/2 einddatum bericht Facebook.png" alt="" /></p>\r\n<p><strong>Stap 3.</strong></p>\r\n<p><img src="../images/media/3 einddatum bericht Facebook.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>4. Berichten richten op interesses.</h3>\r\n<p>Om het paginabeheerders eenvoudiger te maken om de juiste gebruikers te bereiken, heeft Facebook deze functie uitgebreid. Met deze functie kun je berichten richten op gebruikers die jouw pagina en andere specifieke pagina&rsquo;s leuk vinden. Deze optie is vooral interessant wanneer je een bericht over een specifiek onderwerp plaatst, waar niet al jouw fans ge&Iacute;nteresseerd zijn.</p>\r\n<p><strong>Wil jij ook graag je berichten richten op gebruikers met specifieke interesses?</strong><br />Zo doe je dat:</p>\r\n<p><strong>Stap 1.</strong></p>\r\n<p><img src="../images/media/1 Advertentie richten op interesse.png" alt="" /></p>\r\n<p><strong>Stap 2.</strong></p>\r\n<p><img src="../images/media/2 Advertentie richten op interesse.png" alt="" /></p>\r\n<p><strong>Stap 3.</strong></p>\r\n<p><img src="../images/media/3 Advertentie richten op interesse.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<h3>5. Call to action knop in omslagfoto\'s</h3>\r\n<p>Facebook rolt op dit moment een update uit die het mogelijk maakt om als paginabeheerder een knop toe te voegen in de omslagfoto. Deze knop verwijst gebruikers direct door naar een bestemming, die jij als paginabeheerder bepaalt. Je kunt gebruikers bijvoorbeeld doorverwijzen naar een Facebook tab of naar je eigen website.</p>\r\n<p><img src="../images/media/Call to action in omslagfoto 123.jpg" alt="" /></p>\r\n<p>Lees hier meer over in deze blog: <a href="../blog/een-van-facebooks-beste-updates-tot-nu-toe-de-call-to-action-knop" target="_blank">http://www.digitusmarketing.nl/blog/een-van-facebooks-beste-updates-tot-nu-toe-de-call-to-action-knop</a></p>\r\n<p>&nbsp;</p>\r\n<h3>6. Beter inzicht in website bezoekers vanuit Facebook.</h3>\r\n<p>Link berichten zijn enorm populair op Facebook. Als jouw doel is om gebruikers naar jouw website te leiden, dan is het verstandig om gebruik te maken van een link- bericht. Een link-bericht is het berichttype dat gebruikers verwijst naar een webpagina wanneer er op de afbeelding wordt geklikt.</p>\r\n<p>Facebook maakt het met deze functie inzichtelijker hoeveel websitebezoekers je aantrekt, welk apparaat en besturingssysteem er wordt gebruikt en ook welke Facebook pagina&acute;s jouw link-berichten hebben gedeeld op hun pagina.</p>\r\n<p>&nbsp;<img src="../images/media/1 Toplinks link berichten voorbeeld.png" alt="" /></p>\r\n<p>In onderstaand screenshot zie je dat <a href="https://www.facebook.com/ibora.zant" target="_blank">Ibora Zant</a> deze link heeft gedeeld.</p>\r\n<p><img src="../images/media/2 Toplinks voorbeeld.png" alt="" /></p>\r\n<p>Wij hebben deze functie pas ingesteld en zijn er nog mee aan het testen. Je kunt deze functie instellen via <a href="http://www.facebook.com/insights" target="_blank">www.Facebook.com/insights</a>. Dit vereist wel enige technische kennis. Heb je hier een vraag over? Mail dan naar <a href="mailto:jeroen@digitusmarketing.nl?subject=Ik%20heb%20een%20vraag%20Toplinks" target="_blank">jeroen@digitusmarketing.nl</a>.</p>\r\n<p>Super handig om in contact te komen met partners en te zien wat het effect is!</p>\r\n<p>&nbsp;</p>\r\n<h3>7. Facebook voert updates door om video weergaven te bevorderen.</h3>\r\n<p>Er worden steeds meer video&rsquo;s geupload en bekeken op Facebook. Op dit moment worden er (volgens socialbakers) meer video&rsquo;s door bedrijven op Facebook geupload dan op YouTube. Wow!</p>\r\n<p><img src="../images/media/Facebook__Helped_By_Autoplay__Passes_YouTube_For_Desktop_Video_Views_For_First_Time-800x337.jpg" alt="" /></p>\r\n<p>Via: <a href="http://www.socialbakers.com/blog/2335-facebook-video-is-now-bigger-than-youtube-for-brands" target="_blank">socialbakers</a></p>\r\n<p>Facebook speelt op dit moment een beetje &ldquo;vals&rdquo; omdat Facebook overduidelijk voorrang geeft aan video&rsquo;s (die op Facebook worden geupload) ten opzicht van andere berichtypes. Ik zie regelmatig meerdere video&rsquo;s achter elkaar in mijn nieuwsoverzicht zonder dat er een ander berichttype tussen zit.</p>\r\n<p>&nbsp;</p>\r\n<h3>Nieuw tabblad voor video\'s (lijkt verdacht veel op YouTube)</h3>\r\n<p>Facebook heeft pagina&rsquo;s voorzien van een tabblad speciaal voor video&rsquo;s die worden geupload op Facebook. Deze ziet lijkt verdacht veel op het video overzicht op YouTube, kijk maar:</p>\r\n<h3>Video tabblad op Facebook:</h3>\r\n<p><img src="../images/media/1 Video tabblad op Facebook.png" alt="" /></p>\r\n<h3>YouTube kanaal:</h3>\r\n<p><img src="../images/media/youtube-channel voorbeeld.png" alt="" /></p>\r\n<p>Zoek de verschillen ;).</p>\r\n<p>&nbsp;</p>\r\n<h3>Uitgelichte video op Facebook pagina\'s</h3>\r\n<p>Ook heeft Facebook nu de mogelijkheid toegevoegd om een video boven aan je pagina te tonen in het info gedeelte. Dit kun je doen door een uitgelichte video toe te voegen.</p>\r\n<p><img src="../images/media/1 uitgelichte video toevoegen.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>Zo ziet een uitgelichte video er uit:</strong></p>\r\n<p><img src="../images/media/Uitgelichte Video info gedeelte Marco Polo voorbeeld.png" alt="" /></p>\r\n<p>Dat waren de laatste 7 updates waar ik heel erg enthousiast van word. Ik ben heel erg benieuwd wat jij hier van vindt. Deel jouw mening hieronder of op onze Facebook pagina.</p>', 'Facebook is flink aan de weg aan het timmeren. Na het lezen van dit artikel ben je weer op de hoogte van de laatste updates en is het wel duidelijk dat Facebook nog lang geen verleden tijd is!\r\n&nbsp;\r\n1. Facebook search\r\nFacebook search maakt het mogelij', 'de-7-laatste-facebook-updates-om-enthousiast-van-te-worden', 2, 1, 'images/blogposts/7-updates-bericht.png', '2015-01-22 16:45:09', '2015-05-21 15:45:09', '2015-05-22 12:56:03'),
(19, 'Zo Installeer Je Whatsapp Op Je Computer', '<p>Ik heb zojuist WhatsApp op mijn computer ge&iuml;nstalleerd. Het is super eenvoudig is kost niet meer dan een minuut tijd. Ik heb direct screenshots gemaakt en laat je hier zien welke stappen ik moest doorlopen.</p>\r\n<p><strong>Belangrijk:</strong></p>\r\n<ul>\r\n<li>WhatsApp is <strong>niet</strong> beschikbaar voor iPhone gebruikers.</li>\r\n<li>WhatsApp is alleen beschikbaar in je Google Chrome browser. Als je de Google Chrome browser nog niet hebt ge&iuml;nstalleerd kan dat via: <a href="https://www.google.com/chrome" target="_blank">https://www.google.com/chrome</a></li>\r\n<li>Let er op dat je de nieuwste versie van WhatsApp hebt.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>Surf op je computers naar <a href="https://web.whatsapp.com/" target="_blank">https://web.whatsapp.com</a></li>\r\n<li>Open WhatsApp op je smartphone</li>\r\n<li>Ga naar het menu.</li>\r\n<li><img src="../images/media/Whatsapp web 1.png" alt="" width="450" height="800" /></li>\r\n<li>Klik op "WhatsApp Web"</li>\r\n<li><img src="../images/media/Whatsapp web 2 .png" alt="" width="450" height="800" /></li>\r\n<li>Scan de QR code (op je computer) die je ziet staan op de webpagina van WhatsApp.</li>\r\n<li><img src="../images/media/WhatsApp Web 3.jpg" alt="" width="450" height="800" /></li>\r\n</ol>\r\n<p>Klaar!</p>\r\n<p>Om WhatsApp te opnenen surf je naar: <a href="https://web.whatsapp.com/" target="_blank">https://web.whatsapp.com</a></p>\r\n<p>Voordelen:</p>\r\n<ul>\r\n<li>Foto\'s die ik van klanten via WhatsApp ontvang kan ik nu eenvoudig op mijn computer opslaan.</li>\r\n<li>Ik kan een stuk sneller typen op mijn computer. Dat scheelt weer tijd.</li>\r\n</ul>\r\n<p>Nadelen:</p>\r\n<ul>\r\n<li>Ik zie geen mogelijkheid om meldingen uit te schakelen.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Ik zal het eerst even moeten gebruiken om er achter te komen hoe handig het nou echt is. Denk jij veel gebruik te gaan maken van WhatsApp op jouw computer?</p>', 'Ik heb zojuist WhatsApp op mijn computer ge&iuml;nstalleerd. Het is super eenvoudig is kost niet meer dan een minuut tijd. Ik heb direct screenshots gemaakt en laat je hier zien welke stappen ik moest doorlopen.\r\nBelangrijk:\r\n\r\nWhatsApp is niet beschikbaa', 'zo-installeer-je-whatsapp-op-je-computer', 2, 2, 'images/blogposts/whatsapp-op-pc-plaatje.png', '2015-01-23 11:28:41', '2015-05-22 10:28:41', '2015-05-22 12:56:20'),
(20, 'Facebook Update “Sell Something” Berichttype In Facebook Groepen.', '<p>Er wordt flink gehandeld binnen Facebook groepen. Facebook gaat het gebruikers eenvoudiger maken om aan te geven dat ze iets willen verkopen binnen een Facebook groep.</p>\r\n<p>In mijn laatste blog "<a href="../blog/de-7-laatste-facebook-updates-om-enthousiast-van-te-worden" target="_blank">De 7 Laatste Facebook Updates Om Enthousiast Van Te Worden</a>" vertelde ik dat Facebook een nieuw berichttype aan het testen was binnen een beperkt aantal Facebook groepen.</p>\r\n<p>Het is nu officieel! Het nieuwe berichttype &lsquo;Sell Something&rsquo; zal worden doorgevoerd.</p>\r\n<p><img src="../images/media/1 SellSomething650.jpg" alt="" /></p>\r\n<p>Facebook groepsbeheerders die leden van de groep gebruik willen laten maken van dit nieuwe berichttype kunnen een aanvraag indienen bij Facebook via: <a title="https://www.facebook.com/help/contact/317809975082848" href="https://www.facebook.com/help/contact/317809975082848" target="_blank">https://www.facebook.com/help/contact/317809975082848</a></p>\r\n<p>Groepsleden kunnen bij dit berichttype het product, de prijs, de productomschrijving en een afbeelding toevoegen.</p>\r\n<p><img src="../images/media/2 SellSomethingForm.jpg" alt="" /></p>\r\n<p><strong>Voor bedrijven is dit een goede ontwikkeling op lange termijn.</strong></p>\r\n<p>Gebruikers zullen op deze manier gaan wennen om aankopen te doen binnen Facebook. Een volgende stap zou bijvoorbeeld kunnen zijn dat gebruikers een betalingsmethode koppelen waardoor betalen via Facebook eenvoudiger wordt.</p>\r\n<p>Ik vind het prachtig om te zien hoe Facebook continu blijft komen met nieuwe updates om het platform te verbeteren.</p>\r\n<p>Wat vind jij van deze update?</p>', 'Er wordt flink gehandeld binnen Facebook groepen. Facebook gaat het gebruikers eenvoudiger maken om aan te geven dat ze iets willen verkopen binnen een Facebook groep.\r\nIn mijn laatste blog "De 7 Laatste Facebook Updates Om Enthousiast Van Te Worden" vert', 'facebook-update-sell-something-berichttype-in-facebook-groepen', 2, 1, 'images/blogposts/Facebook-groepen.png', '2015-02-11 11:53:49', '2015-05-22 10:53:49', '2015-05-22 12:56:39'),
(23, '3 simpele stappen naar een professionele Facebook pagina', '<p>Facebook is in het huidige tijdperk niet meer weg te denken. Ga eens bij jezelf na, hoeveel mensen je kent die nog g&eacute;&eacute;n gebruik maken van Facebook. Daarbij komt ook nog eens uit de cijfers van Facebook naar voren dat de gemiddelde gebruiker maarliefst 15 keer per dag Facebook opent.</p>\r\n<h3>Waarom een Facebook pagina professioneel moet overkomen</h3>\r\n<p>Vroeger ging bijna alles via mond-tot-mond reclame. Toen kwam er het internet, waar veel ondernemers nog zeiden &ldquo;wij hebben geen website nodig&rdquo;, kan ik nu geen ondernemer meer bedenken die geen website heeft.</p>\r\n<p>Hetzelfde geldt voor Facebook. Gelukkig zien de meeste ondernemers de waarde van Facebook al in. Het gebruik van Facebook is in 2015 w&eacute;&eacute;r gestegen met 8% ten opzichte van 2014. Onder de leeftijden van 65 tot en met 79 is het Facebook gebruik gestegen met 23%. Waar we bij de leeftijdsgroep van 80+ een stijging van 10% zien ten opzichte van vorig jaar.</p>\r\n<p>Facebook is te vergelijken met de traditionele mond-tot-mond reclame, maar met de digitale snelheid van een website. Facebook gebruikers&nbsp;kunnen &lsquo;liken&rsquo;, &lsquo;sharen, &lsquo;comments&rsquo; plaatsen en &lsquo;taggen&rsquo; zodat hun vrienden dit binnen 1 seconde te zien krijgen. Daar bovenop is er ook nog de mogelijkheid om te adverteren. Adverteren werkt veruit het best, mits het juist wordt ingezet. In een latere blogpost ga ik hier gedetailleerd op in.</p>\r\n<h3>De 3 stappen naar een professionele Facebook pagina</h3>\r\n<p>Ik denk dat het ondertussen wel duidelijk is waarom ik er van overtuigd ben dat een Facebook pagina er strak uit moet zien&nbsp;:).<br /> Laten we het hebben over de 3 simpele stappen om jouw Facebook pagina een professionele uitstraling te geven. Achteraf zul je denken &ldquo;was het zo simpel&rdquo;, maar helaas kom ik nog vaak genoeg tegen dat ondernemers hier niet bewust over na hebben gedacht.<br /><br /><strong>1. Omslagfoto<br /> </strong>De omslagfoto wordt groot weergegeven en is het eerste wat een Facebook gebruiker ziet. Daarom is het belangrijk om hiermee direct een sterke indruk te maken.<br /> <br /> Zorg ervoor dat de omslagfoto een indruk geeft van jouw bedrijf, hoe het er uit ziet, wat je wil uitstralen of wat je onder de aandacht wil brengen. Gebruik weinig tekst in de omslagfoto, een afbeelding zegt meer dan duizend woorden.</p>\r\n<p>De afmetingen die Facebook gebruikt voor omslagfotos zijn: <u>851</u> <u>p</u><u>i</u><u>x</u><u>els</u> bij <u>315</u> <u>p</u><u>i</u><u>x</u><u>els</u>. Gebruik deze afmetingen om ervoor te zorgen dat de foto niet bij geschaald wordt. Als bestandstype kun je het best <u>.PNG</u> gebruiken, zodat de kwaliteit van de foto behouden blijft.</p>\r\n<p><img src="../../images/media/Omslagfoto.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>2. Profielfoto.<br /></strong>Regelmatig kom ik bedrijven tegen die een normale foto als profielfoto gebruiken. Hier kun je veruit het best jouw bedrijfslogo voor gebruiken. Hiermee cre&euml;er je logoherkenning.<strong><br /> <br /> </strong>Facebook gebruikers zien jouw profielfoto het vaakst voorbij komen in het klein in hun nieuwsoverzicht. Dus als vrienden &lsquo;liken&rsquo;, &lsquo;sharen, &lsquo;comments&rsquo; plaatsen of &lsquo;taggen&rsquo;. En natuurlijk als je zelf berichten of advertenties plaatst.<br /> <br /> Zorg er voor dat je geen extra tekst in de profielfoto verwerkt, zodat het logo duidelijk te zien is.<br /> <br /> De lengte en breedte van de profielfoto moeten gelijk aan elkaar zijn. De minimale afmetingen zijn <u>180 pixels</u> bij <u>180 pixels</u> en de maximale afmetingen zijn <u>960 pixels</u> bij <u>960 pixels</u>,&nbsp;voor de hoogste kwaliteit.<br /> Gebruik als bestandstype <u>.PNG</u>&nbsp;voor de hoogste kwaliteit.</p>\r\n<p>&nbsp;<img src="../../images/media/Digitus-Marketing-Logo_NW1024x1024.png" alt="" width="300" height="300" /></p>\r\n<p>&nbsp;</p>\r\n<p><strong>3. Categorie.</strong> <br /> Het is belangrijk om de juiste categorie waar jouw bedrijf onder valt in te stellen. Hierdoor kunnen Facebook gebruikers belangrijke informatie direct zien op jouw pagina. Als het belangrijk is dat Facebook gebruikers&nbsp;jouw adres, telefoonnummer en openingstijden kunnen zien kies je voor &lsquo;<u>Lokale bedrijven&rsquo;</u>.</p>\r\n<p><img src="../../images/media/Lokale Bedrijven.jpg" alt="" /></p>\r\n<p>Zijn het adres, telefoonnummer en openingstijden minder belangrijk, dan kies je voor &lsquo;<u>Bedrijven en Organisaties</u>&rsquo;. Het voordeel hiervan is dat je een korte beschrijving kunt toevoegen die Facebook gebruikers&nbsp;te zien krijgen.</p>\r\n<p><img src="../../images/media/Bedrijven en Organisaties.jpg" alt="" /></p>\r\n<p><strong>3.1 Subcategorie&euml;n<br /> </strong>Subcategorie&euml;n worden onder de bedrijfsnaam op de omslagfoto weergegeven. Er worden maximaal 3 subcategorie&euml;n weergegeven. Je hebt wel de mogelijkheid om er meer dan 3 in te stellen.</p>\r\n<p>Door de juiste subcategorie&euml;n toe te voegen vergroot je de vindbaarheid van jouw pagina binnen de zoekfunctie van Facebook.</p>\r\n<p><img src="../../images/media/Subcategorieen.png" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p>Dit waren de 3 stappen. Kom je er bij 1 van de stappen niet uit, of weet je niet hoe je het moet wijzigen? Download dan ons e-book \'<a title="E-book Succesvolle Facebook Pagina in 16 stappen" href="http://woobox.com/q7rbzi" target="_blank">Succesvolle Facebook pagina in 16 stappen</a>\'. Hierin kun je alles vinden wat je nodig hebt.</p>\r\n<p>Nu je Facebook pagina er strak uitziet is het van belang het bereik en de naamsbekendheid van jouw bedrijf te vergroten op Facebook. In een volgende blog zal ik dit onderwerp behandelen. Like ons op <a title="Digitus Marketing op Facebook" href="http://www.facebook.com/DigitusMarketing" target="_blank">Facebook</a> om niets te missen!</p>', 'Facebook is in het huidige tijdperk niet meer weg te denken. Ga eens bij jezelf na, hoeveel mensen je kent die nog g&eacute;&eacute;n gebruik maken van Facebook. Daarbij komt ook nog eens uit de cijfers van Facebook naar voren dat de gemiddelde gebruiker ', '3-simpele-stappen-naar-een-professionele-facebook-pagina', 3, 1, 'images/blogposts/facebook-mobile.jpg', '2015-07-31 11:41:40', '2015-06-19 08:31:06', '2015-07-31 11:41:40'),
(24, 'Hoe zet ik videos op Facebook in om gebruikers naar mijn website te leiden?', '<p>Het is alweer een tijd geleden dat Facebook updates heeft doorgevoerd, waardoor video\'s die op Facebook worden ge&uuml;pload meer bereik genereren. Hierdoor is het n&oacute;g interessanter geworden om video\'s in te zetten. De perfecte kans om een \'call to action\' (aanzet tot actie) te gaan gebruiken aan het eind van je video\'s.</p>\r\n<p>Wanneer je een video op jouw bedrijfspagina upload, kun je aan het eind van de video een &lsquo;aanzet tot actie&rsquo; knop toevoegen. Dit is een knop waar Facebook gebruikers op kunnen klikken om naar een door jou bepaalde pagina geleid te worden.</p>\r\n<p>In dit blogbericht laat ik je zien hoe je een \'aanzet tot actie\' knop aan het eind van jouw video toevoegt.</p>\r\n<h3><br />Hoe voeg je een call to action aan het eind van jouw video toe?</h3>\r\n<p><strong>1.</strong>&nbsp;In het gedeelte waar je een bericht kunt plaatsen, klik je bovenaan op <strong>Foto/video.</strong> Vervolgens selecteer je de video die je wilt uploaden.</p>\r\n<p><img src="../../images/media/VideoUploaden.png" alt="" width="500" height="108" /></p>\r\n<p><strong>2.&nbsp;</strong>Klik onder de video op <strong>Aanzet tot actie toevoegen</strong>.</p>\r\n<p><img src="../../images/media/Toevoegen.png" alt="" width="499" height="295" /></p>\r\n<p><strong>3.&nbsp;</strong>Klik op <strong>Geen knop </strong>en selecteer die tekst die je wil gebruiken voor de aanzet tot actie knop.</p>\r\n<p><img src="../../images/media/Knop.png" alt="" width="500" height="437" /></p>\r\n<p>In dit voorbeeld heb ik voor <strong>Meer informatie</strong> gekozen.</p>\r\n<p><strong>4.&nbsp;</strong>Bij <strong>URL (vereist)</strong> voer je de link in waar je de Facebook gebruikers die jouw video hebben bekeken naartoe wilt leiden.<br />Optioneel kun je nog bij <strong>Kop</strong> en <strong>Linkbeschrijving</strong> een aagepaste tekst invoeren.</p>\r\n<p><strong>5.</strong>&nbsp;Vervolgens klik je op&nbsp;<strong>Publiceren</strong> om het videobericht met \'aanzet tot actie\' knop te plaatsen.</p>\r\n<p>Wanneer je net zoals ik hebt gekozen voor de knop <strong>Meer informatie</strong>, zullen Facebook gebruikers het volgende zien aan het eind van je video:<br /><img src="../../../images/media/Video met call to action.png" alt="Facebook Video Call to Action" width="469" height="260" /></p>\r\n<p>Zodra Facebook gebruikers op <strong>Meer informatie</strong> klikken, zullen ze worden doorverwezen naar de door jou ingestelde webpagina.</p>\r\n<p>&nbsp;Als je alle stappen correct hebt gevolgd, heb je nu succesvol een aanzet tot actie knop aan het eind van je video toegevoegd!<br /><br /></p>\r\n<p>Heb je nog vragen en/of wil je meer weten?&nbsp;Laat&nbsp;een bericht achter op&nbsp;onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a> of onder deze blog.</p>', 'Het is alweer een tijd geleden dat Facebook updates heeft doorgevoerd, waardoor video\'s die op Facebook worden ge&uuml;pload meer bereik genereren. Hierdoor is het n&oacute;g interessanter geworden om video\'s in te zetten. De perfecte kans om een \'call to', 'hoe-zet-ik-videos-op-facebook-in-om-gebruikers-naar-mijn-website-te-leiden', 3, 1, 'images/blogposts/calltoaction2.png', '2015-08-26 08:25:07', '2015-06-19 14:37:36', '2015-09-04 08:25:07'),
(25, 'Hoe je meer bereik en naamsbekendheid krijgt via Facebook', '<p>Vaak krijg ik de vraag: &ldquo;Hoe krijg ik meer likes?&rdquo;. Wat vaak vergeten wordt is dat likes opzich niet veel waard zijn. Facebook gebruikers die jouw pagina liken noemen we fans, het is van belang dat likes afkomstig zijn van Facebook gebruikers die daadwerkelijk binnen jouw doelgroep vallen of ge&iuml;nteresseerd zijn in jouw diensten of producten.<br /> Wat de meeste ondernemers eigenlijk bedoelen met &ldquo;hoe krijg ik meer likes?&rdquo; is, &ldquo;hoe vergroot ik mijn bereik en naamsbekendheid op Facebook?&rdquo;. Wanneer je gaat&nbsp;focussen op bereik en naamsbekendheid, zul je zien dat je automatisch meer likes krijgt van&nbsp;<span style="text-decoration: underline;">relevante</span> fans!</p>\r\n<h3>Hoe bereik je meer Facebook gebruikers en breid je dus jouw naamsbekendheid uit?</h3>\r\n<p>Er zijn 3 manieren om Facebook gebruikers te bereiken:<br /> 1. Organisch<br /> 2. Viraal<br /> 3. Betaald</p>\r\n<p>In dit blogbericht zal ik gedetailleerd in gaan op het organisch en viraal bereik. De tips die ik geef voor organisch en viraal bereik kun je uiteraard ook toepassen bij berichten die je promoot of bij advertenties. Uiteindelijk werkt betaald bereik veruit het best, hier zal ik dieper op in gaan in een volgend blog bericht.</p>\r\n<h3>Populariteit</h3>\r\n<p><img src="../../images/media/Reach2.jpg" alt="" width="770" height="350" /></p>\r\n<p>Allereerst is het belangrijk om te weten dat de populariteit van een bericht de sleutel naar meer bereik is. De populariteit van een bericht wordt bepaalt door het aantal likes, shares, comments en kliks op het bericht. Kortom hoe populairder het bericht, hoe meer bereik. Dit is ook handig om te weten bij berichten die je promoot of bij advertenties, hierdoor worden de promotiekosten lager.</p>\r\n<h3>Organisch bereik</h3>\r\n<p>Organisch bereik is het bereik dat Facebook jou &lsquo;gratis&rsquo; geeft. Fans van jouw bedrijfspagina zullen automatisch berichten die jij plaatst in hun nieuwsoverzicht te zien krijgen. Niet-fans kunnen natuurlijk ook op jouw pagina kijken en het bericht zien, dit valt ook onder organisch bereik.</p>\r\n<h3>Viraal bereik</h3>\r\n<p>Viraal bereikte gebruikers zien jouw bericht omdat 1 van hun Facebook vrienden een actie heeft uitgevoerd op jouw bericht. Dus wanneer Facebook gebruikers jouw bericht liken, sharen of een comment plaatsen zullen hun vrienden dit te zien krijgen in het nieuwsoverzicht.</p>\r\n<p>Om het virale bereik te vergroten is het belangrijk om op een creatieve manier Facebook gebruikers te stimuleren te liken, sharen of commenten (populariteit). Hou er rekening mee dat het <u>niet</u> is toegestaan om Facebook gebruikers te vragen om jouw <u>pagina te liken</u> of het <u>bericht te delen</u> in ruil <u>voor een prijs</u>. Het is <u>wel</u> toegestaan om Facebook gebruikers te vragen het <u>betreffende bericht te liken of commenten</u> in <u>ruil voor een prijs</u>. Dit wordt ook wel een tijdlijnactie genoemd. In een later blog bericht zal ik gaan behandelen hoe je een succesvolle tijdlijn actie op Facebook opzet, om hier maximaal rendement uit te halen.</p>\r\n<p>Uiteraard is het <u>wel </u>toegestaan om Facebook gebruikers te vragen om jouw pagina te liken of het bericht te sharen wanneer je dit doet zonder een prijs weg te geven.</p>\r\n<p>Het virale bereik wordt sinds de zomer 2013 niet meer apart weergegeven in de Facebook statistieken. Wanneer je als pagina beheerder het bereik bekijkt, zullen de viraal bereikte Facebook gebruikers bij de organisch bereikte gebruikers opgeteld worden.</p>\r\n<h3>Berichten plaatsen</h3>\r\n<p>Bij het plaatsen van berichten (of advertenties) is het belangrijk om waarde te bieden aan de Facebook gebruikers die jouw bericht lezen. Zorg ervoor dat je niet zomaar berichten plaatst om &lsquo;berichten te plaatsen&rsquo;. Bedenk ook voor jezelf wat het doel is van het bericht. Gaat het bijvoorbeeld om relaties onderhouden met huidge fans, meer bereik of potenti&euml;le klanten bereiken.</p>\r\n<p>Berichten die je plaatst moeten altijd onder 1 of meer van de volgende categorie&euml;n vallen:</p>\r\n<ul>\r\n<li><strong>Informatie</strong></li>\r\n<li><strong>Educatie</strong></li>\r\n<li><strong>Amusement</strong></li>\r\n</ul>\r\n<p>Bij <strong>informatie</strong> kun je denken aan aangepaste openingstijden of nieuwe diensten en producten die je uit gaat brengen of uit gebracht hebt.</p>\r\n<p>Bij <strong>educatie </strong>kun je denken aan leuke tips of feitjes die te maken hebben met de branche waarin jouw bedrijf actief is.</p>\r\n<p>Bij <strong>amusement</strong> kun je denken aan het delen van video&rsquo;s of afbeeldingen die je hebt gevonden op het internet, en te maken hebben met jouw branche. Wat ook erg goed werkt zijn &lsquo;achter de schermen&rsquo; video&rsquo;s of foto&rsquo;s. Mensen willen graag zien hoe het er aan toe gaat binnen het bedrijf waar ze klant (of Facebook fan) van zijn.</p>\r\n<h3>Call-to-Action</h3>\r\n<p><img src="../../images/media/Reach1.png" alt="" width="594" height="414" /></p>\r\n<p>Probeer zo vaak mogelijk je berichten af te sluiten met een call-to-action. Een call-to-action houdt in dat je Facebook gebruikers vraagt om een bepaalde actie uit te voeren.</p>\r\n<p>Een aantal voorbeelden:<br /> - Herken jij jezelf hierin? Like dit bericht of laat het ons weten in de comments.<br /> - Herken jij iemand hierin? Tag diegene in de comments.<br /> - Vond jij dit nuttig, like ons dan om op de hoogte te blijven.<br /> - Waar zou jij dit product voor gebruiken? Laat het ons weten in de comments.</p>\r\n<p>En ga zo maar door, er zijn genoeg call-to-action methodes om meer interactie op jouw berichten te krijgen. Waardoor je jouw virale bereik een keiharde boost geeft. Let er wel op dat je geen call-to-action gaat forceren, gebruik het alleen als het aansluit op het bericht. Een goede tip; hou het &lsquo;sociaal&rsquo;, vraag Facebook gebruikers geen dingen die je ook niet aan jouw familie, vrienden of kennissen zou vragen.</p>\r\n<h3>Betaald bereik</h3>\r\n<p>Uiteraard bereik je met advertentie tegoed verreweg de meeste Facebook gebruikers. Je kunt binnen jouw advertentiesets uiterst specifiek de (sub)doelgroepen bereiken die jij wil.</p>\r\n<p>Het best is om bij advertenties alle tips toe te passen die ik in dit blog bericht besproken heb, zo maak je jouw advertentie populairder. De eerste focus van Facebook is de tevredenheid van de gebruiker, zodat zoveel mogelijk mensen op Facebook blijven en (nog) meer mensen Facebook gaan gebruiken. Op deze manier houdt Facebook het interessant voor ondernemers om te blijven adverteren.</p>\r\n<p>Hoe populairder een advertentie is, dus hoe meer acties Facebook gebruikers uitvoeren op een advertentie, hoe relevanter Facebook de advertentie vindt voor de doelgroep. Als een advertentie relevant is voor de door jou geselecteerde doelgroepen, komt dit ten goede van de ervaring van de Facebook gebruiker. Hierdoor zul je zien dat de advertentie kosten lager worden. Kortom, <u>Hoe relevanter de advertentie is voor de doelgroep, hoe lager de advertentie kosten voor hetzelfde (of zelfs meer) bereik.</u></p>\r\n<p>In een later blog bericht zal ik dieper in gaan op adverteren op Facebook.</p>\r\n<p>&nbsp;Wanneer je gaat&nbsp;focussen op bereik en naamsbekendheid, en de tips uit deze blog toepast, zul je zien dat je automatisch meer likes krijgt van&nbsp;<span style="text-decoration: underline;">relevante</span> fans!</p>\r\n<p>&nbsp;</p>\r\n<p>Vond je dit handig en/of wil je niets missen? Like ons dan op <a title="Digitus Marketing Facebook" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook</a>!</p>', 'Vaak krijg ik de vraag: &ldquo;Hoe krijg ik meer likes?&rdquo;. Wat vaak vergeten wordt is dat likes opzich niet veel waard zijn. Facebook gebruikers die jouw pagina liken noemen we fans, het is van belang dat likes afkomstig zijn van Facebook gebruikers ', 'hoe-je-meer-bereik-en-naamsbekendheid-krijgt-via-facebook', 3, 1, 'images/blogposts/Facebook-Bereik-Naamsbekendheid.png', '2015-08-19 11:33:45', '2015-06-23 12:07:20', '2015-11-05 12:33:45');
INSERT INTO `posts` (`id`, `titel`, `content`, `snippet`, `slug`, `user_id`, `categorie_id`, `uitgelichte_afbeelding`, `published_at`, `created_at`, `updated_at`) VALUES
(26, 'Hoe voeg je een uitgelichte video toe aan je Facebook pagina?', '<p>In het digitale en social media tijdperk, zijn video&rsquo;s niet meer weg te denken. Omdat video&rsquo;s een steeds grotere rol spelen op Facebook, is het hoog tijd om daar op in te spelen!</p>\r\n<p>Aan de linkerkant van elke Facebook pagina, staat het canvas &ldquo;Info&rdquo; waar de bedrijfsinfo getoond wordt. Binnen dit canvas kun je een video uitlichten, waardoor deze altijd zichtbaar is voor elke Facebook gebruiker die jouw pagina bezoekt.</p>\r\n<p>Waarschijnlijk weten de meesten van jullie dit al, maar helaas zie ik t&eacute; weinig pagina beheerders hier gebruik van maken. Daarom zal ik je in dit blog bericht laten zien hoe je een uitgelichte toevoegt.</p>\r\n<h3>Hoe voeg je een uitgelichte video toe?</h3>\r\n<ol>\r\n<li>Ga naar je Facebook pagina. <br /> (Voeg de video aan je pagina toe die je wilt uitlichten als je dit nog niet gedaan hebt).</li>\r\n<li>Klik onder de omslagfoto op <strong>Video&rsquo;s</strong>. Zie je dit niet staan? Klik dan op <strong>Meer</strong> en vervolgens op <strong>Video&rsquo;s</strong>.<br /><img src="../../images/media/Videos.png" alt="" /><br /><br /></li>\r\n<li>Klik op <strong>Uitgelichte video toevoegen</strong>.<br /> <img src="../../images/media/Uitgelichte Video.png" alt="" /></li>\r\n<li>Selecteer de video die je wilt uitlichten.</li>\r\n<li>Klik op <strong>Uitgelichte video toevoegen</strong>.<br /><img src="../../images/media/Uitgelichte Video Toevoegen.png" alt="" /></li>\r\n</ol>\r\n<p>Wanneer je nu naar je tijdlijn gaat zul je zien dat er in het canvas &ldquo;Info&rdquo; jouw uitgelichte video staat! Zie het voorbeeld hieronder.<br /><img src="../../images/media/Video.png" alt="" /></p>\r\n<p>&nbsp;Wanneer je al een uitgelichte video hebt en deze wilt wijzigen of verwijderen, volg dan dezelfde stappen en vervang Stap 3 met het volgende;</p>\r\n<ul>\r\n<li>Klik op de &ldquo;bewerk knop&rdquo; en kies voor <strong>Uitgelichte video wijzigen</strong> of <strong>Geen uitgelichte video weergeven</strong>.<br /><img src="../../images/media/Uitgelichte Video Bewerken.png" alt="" /></li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>Dit was het korte stappenplan om een uitgelichte video toe te voegen aan jouw Facebook pagina :).</p>\r\n<p>Kom je ergens niet uit of heb je andere vragen? Laat een bericht achter op onze <a title="Digitus Marketing Facebook" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook</a> pagina of onder deze blog.</p>', 'In het digitale en social media tijdperk, zijn video&rsquo;s niet meer weg te denken. Omdat video&rsquo;s een steeds grotere rol spelen op Facebook, is het hoog tijd om daar op in te spelen!\r\nAan de linkerkant van elke Facebook pagina, staat het canvas &l', 'hoe-voeg-je-een-uitgelichte-video-toe-aan-je-facebook-pagina', 3, 1, 'images/blogposts/facebook-video.jpg', '2018-08-05 12:10:58', '2015-08-05 11:56:33', '2015-08-05 12:10:58'),
(27, '7 manieren om betrokkenheid van je fans te vergroten', '<p>Facebook is eenvoudig, je gooit een bericht op je tijdlijn, en de reacties, likes en shares stromen binnen, toch? Dit is natuurlijk waar elke ondernemer op hoopt als hij/zij begint met Facebook. Helaas werkt het in de praktijk niet zo eenvoudig.</p>\r\n<p>De meeste ondernemers geven op, nadat ze niet de verwachte resultaten behalen, ondanks ze wel regelmatig berichten plaatsen.</p>\r\n<p>Het is nu eenmaal de keiharde waarheid dat Facebook gebruikers niet continu zitten te wachten op berichten over hoe goed jouw producten of diensten zijn. Geef ze eens ongelijk, mensen worden de hele dag overvallen met reclames op TV, radio, krant en reclameborden. Ook alleen maar links naar andere websites plaatsen heeft weinig zin. Natuurlijk is het goed om jouw producten of diensten onder de aandacht te brengen, of waardevolle links te plaatsen, maar zorg voor afwisseling in je berichten.</p>\r\n<p>Bij het plaatsen van berichten moet je niet alleen denken aan hoe relevant de informatie is voor jouw branche, maar ook of jouw fans zich hierin kunnen verplaatsen. Ik zal je hieronder 7 methodes laten zien die door succesvolle Facebook pagina&rsquo;s over de hele wereld worden toegepast.</p>\r\n<h3>1. Stel vragen</h3>\r\n<p>Vragen stellen is een super goede manier om interactie te cre&euml;ren met je fans. Het is een van de makkelijkste methodes om je fans op jouw berichten te laten reageren.</p>\r\n<p>Er zijn ontzettend veel manieren om vragen te stellen, hieronder zie je een overzichtje die ik heb gevonden met een aantal goede voorbeelden.</p>\r\n<p><img src="../../images/media/Facebook Question Table.png" alt="" width="678" height="388" /></p>\r\n<h3>2. Tijdstip wanneer je berichten plaatst</h3>\r\n<p>De timing van je berichten is heel belangrijk. Het heeft natuurlijk geen zin om berichten te plaatsen wanneer het grootste gedeelte van jouw fans aan het werk is of slaapt.</p>\r\n<p>Zo is bijvoorbeeld voor de meeste branches vlak na etenstijd een geschikte tijd om berichten te plaatsen.</p>\r\n<p>Een handige functie van Facebook is dat je berichten alvast kan maken en plannen wanneer ze geplaatst moeten worden. Wanneer je een bericht maakt, kun je klikken op &ldquo;Publiceren&rdquo;, maar je kunt ook klikken op het pijltje ernaast om een bericht in te plannen. Zie het voorbeeld hieronder.</p>\r\n<p><img src="../../images/media/Bericht Plannen.png" alt="" width="493" height="227" /></p>\r\n<h3>3. Afbeeldingen</h3>\r\n<p>We kennen allemaal het gezegde: &ldquo;Een foto zegt meer dan 1000 woorden&rdquo;, Op Facebook is het misschien wel meer waard dan 1000 woorden.</p>\r\n<p>Afbeeldingen vallen veel meer op en wekken meer interesse dan alleen tekst of links.</p>\r\n<p>Foto&rsquo;s kun je ook goed combineren met vragen, wat jouw fans er van vinden. Of bijvoorbeeld wanneer je meerdere foto&rsquo;s plaatst, welke foto zij het leukst vinden.</p>\r\n<h3>4. Tijdlijnacties</h3>\r\n<p>Met een tijdlijnactie bedoel ik niet een &ldquo;Like, Share &amp; Win&rdquo; actie zoals je waarschijnlijk al vaak genoeg langs ziet komen op Facebook. Met een tijdlijnactie bedoel ik op een creatieve manier om interactie vragen met jouw fans. Dit doe je door een simpele vraag te stellen, die betrekking heeft tot jouw bedrijf. Een vraag die iedereen kan beantwoorden met zijn eigen mening.</p>\r\n<p>Op deze manier stimuleer je niet alleen betrokkenheid door 1 of meerdere personen te belonen, maar zorg je er ook voor dat ze met plezier een like, share of reactie plaatsen. Daarnaast zullen ze gegarandeerd terugkomen naar jouw pagina om te zien of ze gewonnen hebben.</p>\r\n<p>Bekijk het blogbericht <a title="Tijdlijnacties in plaats van Like Share &amp; Win Acties" href="../../../blog/10-redenen-waarom-je-geen-like-share-en-win-actie-moet-doen" target="_blank">10 Redenen Waarom Je Geen Like Share En Win Actie Moet Doen!</a> Voor een uitgebreide uitleg over tijdlijnacties.</p>\r\n<p>Zie de afbeelding hieronder voor een voorbeeld van een tijdlijnactie.</p>\r\n<p><img src="../../images/media/Chinatuin Tijdlijnactie.png" alt="" width="495" height="975" /></p>\r\n<h3>5. Crowdsourcing voor het beantwoorden van vragen</h3>\r\n<p>Waarom zou je zelf vragen beantwoorden als jouw fans deze ook kunnen beantwoorden?</p>\r\n<p>Je zult er versteld van staan hoeveel reacties je zult krijgen, als je jouw fans vragen stelt waar ze zichzelf in herkennen.</p>\r\n<p>En het is ook nog eens heel simpel uit te voeren. Wanneer je een vraag binnenkrijgt, plaats je hem als volgt op jouw Facebook pagina:<br /> Wie kan ... helpen met de volgende vraag; Vraag....?</p>\r\n<h3>6. Call to Action</h3>\r\n<p>Met een call to action, oftewel een aanzet tot actie, zorg je ervoor dat jouw fans reageren of een actie uitvoeren zoals jij dat wil.</p>\r\n<p>Vaak zie ik ondernemers berichten plaatsen zonder call to action, waar ze dit wel hadden moeten doen, super zonde! Mensen reageren nu eenmaal beter/sneller wanneer ze &lsquo;uitleg&rsquo; krijgen wat ze moeten doen.</p>\r\n<p>Hier een paar voorbeelden:</p>\r\n<ul>\r\n<li>Like dit bericht als je ___.</li>\r\n<li>Laat in de comments weten waar jij dit voor zou gebruiken.</li>\r\n</ul>\r\n<p>Hier een voorbeeld van Subway, hoe ze dit gecombineerd hebben met een foto.</p>\r\n<p><img src="../../images/media/Subway Call to Action.jpg" alt="" width="652" height="847" /></p>\r\n<h3>7. Frequentie van berichten</h3>\r\n<p>Zorg ervoor dat je regelmatig waardevolle of entertainende berichten plaatst voor je fans. Probeer dit minimaal 1x per week te doen.</p>\r\n<p>Let er wel op dat je niet te veel berichten plaatst. Het verschilt natuurlijk per bedrijf. Probeer voor jezelf te testen wat het best voor jou werkt.</p>\r\n<p>In een onderzoek van buddymedia.com blijkt dat bedrijven die maximaal 1 a 2 berichten per dag plaatsen, meer betrokkenheid van hun fans krijgen dan bedrijven die 3 of meer berichten per dag plaatsen.</p>\r\n<p><img src="../../images/media/Frequentie.png" alt="Bericht Frequentie" width="652" height="400" /></p>\r\n<p>&nbsp;</p>\r\n<p>Dit waren de 7 tips! Wat voor de een werkt, werkt niet altijd voor een ander. Dus probeer voor jezelf te testen wat het best voor jou werkt. Dit zijn allemaal bewezen strategie&euml;n die meer betrokkenheid genereren, die door succesvolle Facebook pagina\'s over de hele wereld worden toegepast.</p>\r\n<p>Omdat je met deze methodes jouw fans op een persoonlijke manier benadert, zul je veel meer betrokkenheid van je fans&nbsp;krijgen. Daarnaast is het ook nog eens mooi meegenomen dat meer betrokkenheid voor meer gratis bereik zorgt!</p>\r\n<p>Vond je dit handig of wil je niets missen? Like ons dan op <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook</a>!</p>', 'Facebook is eenvoudig, je gooit een bericht op je tijdlijn, en de reacties, likes en shares stromen binnen, toch? Dit is natuurlijk waar elke ondernemer op hoopt als hij/zij begint met Facebook. Helaas werkt het in de praktijk niet zo eenvoudig.\r\nDe meest', '7-manieren-om-betrokkenheid-van-je-fans-te-vergroten', 3, 1, 'images/blogposts/Betrokkenheid.png', '2015-08-12 15:22:04', '2015-08-12 13:50:58', '2015-08-12 15:22:04'),
(28, 'Ken je dit advertentietype al?', '<p>Sinds 11 mei 2015 heeft Facebook carousel advertenties beschikbaar gesteld op alle apparaten. Met carousel advertenties kun je meerdere afbeeldingen en links in 1 advertentie verwerken. Dit is ideaal als je meerdere producten/diensten onder de aandacht wil brengen met 1 advertentie. Of om juist 1 product/dienst uitgebreider onder de aandacht te brengen.</p>\r\n<p>Volgens Facebook: &ldquo;Advertisers have seen carousel link ads drive 30-50% lower cost-per-conversion and 20-30% lower cost-per-click than single-image link ads.&rdquo; Vertaald in het nederlands: Carousel advertenties zorgen voor 30-50% lagere kosten per conversie en voor 20-30% lagere kosten per klik (naar bijvoorbeeld je productpagina of landingspagina).<br /> Bron: Facebook.com/business</p>\r\n<p>De cijfers spreken voor zich, laten we het hebben over de carousel advertenties.</p>\r\n<h3>Wat zijn carousel advertenties?</h3>\r\n<p>Facebook carousel advertenties zijn het &lsquo;nieuwe&rsquo; type advertenties van Facebook waarmee je als adverteerder 3 tot 5 mini advertenties maakt binnen 1 advertentie. Elke mini advertentie heeft zijn eigen afbeelding, beschrijving en link naar een landingspagina. Uiteraard kun je ze ook allemaal naar dezelfde landingspagina linken wanneer je 1 product of dienst onder de aandacht brengt met meerdere afbeeldingen en beschrijvingen.</p>\r\n<p>Carousel advertenties zijn super geschikt om jouw producten/diensten onder de aandacht te brengen EN je naamsbekendheid te vergroten.<br />Hieronder een voorbeeld van een carousel advertentie op desktop:</p>\r\n<p><img src="../../images/media/Carousel Ad.png" alt="" width="480" height="405" /></p>\r\n<p>Hieronder een voorbeeld van een carousel advertentie op mobiel:</p>\r\n<p><img src="../../images/media/Carousel Ad Mobiel 1.jpg" alt="" width="676" height="380" /></p>\r\n<p>Zoals je kunt zien hebben desktop gebruikers de pijltjes aan de linker en rechterzijde waarmee ze de afbeeldingen kunnen bekijken. Mobiele gebruikers kunnen simpelweg &lsquo;swipen&rsquo; om de afbeeldingen te bekijken.</p>\r\n<p><strong>Tip: </strong>Je kunt er voor kiezen om zelf te bepalen in welke volgorde de afbeeldingen worden weergegeven. Maar je kunt er ook voor kiezen dat Facebook dit voor jou optimaliseert. Facebook zorgt er dan voor dat de afbeeldingen op volgorde worden weergegeven van best scorende tot minst goed scorende.</p>\r\n<h3>Advertentie specificaties</h3>\r\n<p>Dit zijn de specificaties waar jouw advertenties aan moeten voldoen, niet alleen om ze er goed uit te laten zien, maar ook zodat ze niet worden afgekeurd door Facebook.</p>\r\n<ul>\r\n<li>De afbeeldingen moeten minstens 600 bij 600 pixels zijn (vierkant).</li>\r\n<li>Advertentie tekst maximaal 90 karakters (zelfde als normale ads).</li>\r\n<li>Koptekst maximaal 25 karakters (zelfde als normale ads).</li>\r\n<li>Link beschrijving maximaal 30 karakters (zelfde als normale ads).</li>\r\n</ul>\r\n<h3>Hoe je Carousel Advertenties in zet</h3>\r\n<p>Toen Facebook carousel advertenties net lanceerde, werd er veel gesproken over hoe goed deze in te zetten zijn voor webshops. Maar in elke branche lopen carousel advertenties als een trein. Of als een draaimolen op zaterdagmiddag (ik zal jullie mijn slechte grappen besparen, laten we verder gaan).</p>\r\n<p><strong>Verschillende producten of diensten<br /> </strong>Je kunt met carousel advertenties heel gemakkelijk verschillende producten of diensten onder de aandacht brengen. Waarbij elke afbeelding + beschrijving doorverwijst naar de bijbehorende product- of landings-pagina.</p>\r\n<p>Zie hieronder een voorbeeld van een zaak die schoenen en handtassen verkoopt.</p>\r\n<p><img src="../../images/media/Carousel Ad Mobiel 3.jpg" alt="" width="676" height="301" /></p>\r\n<p><strong>1 product of dienst<br /> </strong>Ook is een carousel advertentie super geschikt om 1 product of dienst onder de aandacht te brengen. Gebruik dit advertentie type om een verhaal te vertellen of simpelweg de voordelen van jouw product of dienst te benadrukken.</p>\r\n<p>Zie hieronder een voorbeeld van hoe Mini dit gedaan heeft.</p>\r\n<p><img src="../../images/media/Carousel Ad Mobiel 2.jpg" alt="" width="676" height="353" /></p>\r\n<h3>Bonus tips</h3>\r\n<p>Toen ik nog in de sales zat, heb ik mijzelf en later mijn sales team aangeleerd om altijd te verkopen op de &lsquo;waarom&rsquo; en niet op de &lsquo;wat&rsquo;. Wat ik hiermee bedoel te zeggen, probeer het niet constant over jouw product of dienst te hebben, maar de &lsquo;waarom&rsquo; vanuit de potenti&euml;le klant. Waarom zouden zij jouw product of dienst afnemen? Wat zijn de voordelen die ze er er uit halen? (Dit geldt natuurlijk niet alleen voor carousel advertenties).</p>\r\n<p>Ik zal je een paar voorbeelden geven.</p>\r\n<p><strong>Hotel<br /> </strong>Carousel ads zijn ideaal om verschillende hotelkamers, faciliteiten en restaurant te laten zien. Niets mis mee om het zo te doen, maar daarmee onderscheid je jezelf niet van de concurrentie.</p>\r\n<p>Hieronder zie je een voorbeeld van een hotel in New Orleans, waar ze laten zien wat er allemaal te doen is in de buurt van het hotel.</p>\r\n<p><img src="../../images/media/Carousel Ad Voorbeeld 1.png" alt="" width="493" height="367" /></p>\r\n<p><strong>Makelaardij<br /> </strong>Als makelaar wil je jouw beste vastgoed onder de aandacht brengen, zodat de juiste mensen dit te zien krijgen. Maar wanneer mensen op zoek zijn naar een huis, kijken ze naar veel meer factoren dan alleen het huis zelf.</p>\r\n<p>Hieronder zie je een voorbeeld van een carousel advertentie van een makelaar die laat zien wat er in de buurt van de woning te doen is en wat voor scholen er zijn.</p>\r\n<p><img src="../../images/media/Carousel Ad Voorbeeld 2.png" alt="" width="495" height="377" /></p>\r\n<p><strong>Restaurant<br /> </strong>Klanten willen graag foto&rsquo;s van het restaurant zien, en foto&rsquo;s waar het eten op staat. Hoge kwaliteit foto&rsquo;s van borden met eten werken nou eenmaal erg goed.</p>\r\n<p>Maargoed, dit is wat de concurrentie ook doet.</p>\r\n<p>Mensen kiezen steeds bewuster als het aankomt op eten, ze willen weten waar het vandaan komt en hoe het bereid wordt.<br /> Zie hieronder een voorbeeld van een restaurant dat stap voor stap laat zien waar hun vlees vandaan komt en hoe het bereid wordt, hiermee onderscheiden ze zich qua marketing sterk van hun concurrentie.</p>\r\n<p><img src="../../images/media/Carousel Ad Voorbeeld 3.png" alt="" width="492" height="368" /></p>\r\n<p>Dit lijken me toch een paar goede voorbeelden van de &lsquo;waarom&rsquo; in plaats van de &lsquo;wat&rsquo; :).</p>\r\n<h3>Custom Audience Pixel</h3>\r\n<p>Voor de Facebook pagina beheerders die al bekend zijn met de Custom Audience Pixel zijn carousel ads n&oacute;g interessanter. De mensen die hier nog niet bekend mee zijn adviseer ik om contact met ons op te nemen hierover. Of wachten tot ik het blogbericht over de Custom Audience Pixel ga schrijven.</p>\r\n<p>Een voordeel van de Custom Audience Pixel is dat je jouw advertenties onder andere kunt richten op mensen die je website hebben bezocht, of zelfs specifieke pagina&rsquo;s.</p>\r\n<p>Wanneer een potenti&euml;le klant jouw producten heeft bekeken, maar nog geen klant is geworden, kun je hem heel specifiek een carousel advertentie laten zien, waarin verschillende producten staan binnen dezelfde categorie als de producten die hij bekeken heeft op jouw website.</p>\r\n<p>&nbsp;</p>\r\n<p>Ik ben door de stof heen, het was weer een hoop informatie, maar ik weet zeker dat je er meer rendement mee behaalt!</p>\r\n<p>Is er iets onduidelijk voor je, je bent lang niet de enige, neem gerust contact op :).</p>\r\n<p>Ik zou het super tof vinden als je onder deze blog of op onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a> laat weten wat je er van vond! En vergeet ons niet te liken op <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook</a>!</p>', 'Sinds 11 mei 2015 heeft Facebook carousel advertenties beschikbaar gesteld op alle apparaten. Met carousel advertenties kun je meerdere afbeeldingen en links in 1 advertentie verwerken. Dit is ideaal als je meerdere producten/diensten onder de aandacht wi', 'ken-je-dit-advertentietype-al', 3, 1, 'images/blogposts/Carousel.png', '2015-10-27 11:02:51', '2015-08-21 13:14:12', '2015-10-27 11:02:51'),
(29, 'Hoe je jouw website bezoekers bereikt via Facebook', '<p>In dit blogbericht wil ik je vertellen, hoe jij doormiddel van Facebook advertenties gebruikers kunt bereiken die jouw website hebben bezocht.</p>\r\n<p>Ga eens bij jezelf na, hoe interessant het voor jou is, om Facebook gebruikers te bereiken die eerder interesse hebben getoond door het bezoeken van jouw website?</p>\r\n<p>DIT KAN! Met Facebook&rsquo;s zogenoemde &lsquo;Website Custom Audience&rsquo;. Voor de online marketing bikkels onder ons zal dit vast geen nieuws zijn, maar de meeste ondernemers die niet in de online marketing branche zitten weten hier weinig tot niets van af. Tijd voor verandering als je het mij vraagt!</p>\r\n<h3>Voor de mensen bekend met Website Custom Audience</h3>\r\n<p>Voorheen werd er gebruik gemaakt van 2 pixels, namelijk:</p>\r\n<ul>\r\n<li><strong>Website Audience Pixel</strong><br /> Door middel van deze pixel, kon je in je advertentie campagnes aangepaste doelgroepen aanmaken. Hiermee kon je Facebook gebruikers bereiken die jouw website hadden bezocht, of specifieke pagina&rsquo;s hadden bezocht.</li>\r\n<li><strong>Conversie Pixel<br /> </strong>Met deze pixel kon je de resultaten van je campagne meten en dus optimaliseren. Daarnaast kon je hiermee ook conversies meten.</li>\r\n</ul>\r\n<p>Aangezien Facebook nooit zal stoppen met het verbeteren van haar advertentieplatform, hebben ze dus ook de pixels ge-update. Deze 2 pixels hebben ze samen gevoegd in 1 pixel. Hoewel je in het verleden ook al per productpagina op je website een aangepaste doelgroep kon maken, wilde dit nog wel eens voor problemen zorgen als je een erg grote website had met veel producten. Dit is nu allemaal opgelost, en de pixel wordt ook vele malen sneller geladen.</p>\r\n<h3>Wat kun je allemaal met de nieuwe pixel?</h3>\r\n<p>Hieronder laat ik je de functies nog apart zien, zoals de pixels voorheen waren. Alle functies die ik hieronder uitleg, zijn nu verwerkt in 1 nieuwe verbeterde pixel.</p>\r\n<h4>Voorheen website audience pixel</h4>\r\n<ul>\r\n<li>Mensen die je website hebben bezocht, opnieuw terughalen naar je website om een aankoop te doen. (Dit kun je zelfs verdelen in groepen die specifieke pagina&rsquo;s hebben bezocht.</li>\r\n<li>Een zogenoemde &lsquo;Look-a-like&rsquo; doelgroep toevoegen. Dit betekent dat je mensen kunt bereiken die jouw website niet bezocht hebben, maar vergelijkbaar zijn met jouw website bezoekers. (Denk bijv. aan zelfde interesses, leeftijdscategorie, internet gedrag)</li>\r\n<li>Website bezoekers uitsluiten voor je (volgende) campagnes, mocht je deze niet nogmaals willen bereiken met je advertenties.</li>\r\n</ul>\r\n<h4>Voorheen conversie pixel</h4>\r\n<ul>\r\n<li>Resultaten van je campagne meten om vervolgens je campagne te optimaliseren voor betere resultaten.</li>\r\n<li>Wanneer je een campagne draait met als doel conversies (sales), houdt de pixel bij hoeveel conversies je hebt gemaakt t.o.v. het aantal bereikte personen. Ook zet de pixel de conversies en het advertentiebudget tegenover elkaar, om jou te laten zien hoeveel een conversie gemiddeld kost.</li>\r\n</ul>\r\n<h4>Voorbeeld</h4>\r\n<p>Om het wat duidelijker te maken zal ik je een voorbeeld geven.</p>\r\n<p>Stel je hebt een dierenwinkel, dan wil je natuurlijk niet dat mensen met een konijn, advertenties over honden te zien krijgen. Wanneer je de Facebook pixel op jouw website hebt staan, kun je heel specifiek mensen bereiken met advertenties naar jouw keuze.</p>\r\n<p>Persoon A heeft een pagina over konijnen producten op jouw website bezocht. Vervolgens zorg jij ervoor dat deze persoon alleen advertenties te zien krijgt die te maken hebben met producten voor konijnen.</p>\r\n<p>Terwijl persoon B, die een pagina over honden bezocht heeft, alleen advertenties met betrekking tot honden te zien krijgt, en niet de advertenties over konijnen.</p>\r\n<h3>Remarketing</h3>\r\n<p>De pixel is uiterst geschikt voor remarketing. Wanneer je bijvoorbeeld een campagne hebt draaien, die naar een bepaalde productpagina leidt, zullen mensen die op de productpagina zijn geweest, &lsquo;onthouden&rsquo; worden door de pixel. Hierdoor kun je daar super krachtig op in spelen.</p>\r\n<p>Nu kun je dus &lsquo;koude&rsquo; Facebook gebruikers jouw oorspronkelijke advertenties laten zien. Terwijl je de gebruikers die al op jouw productpagina zijn geweest, andere advertenties laten zien, om andere koopsignalen te triggeren.</p>\r\n<p>Zie hieronder een schema hoe je jouw website bezoekers opnieuw bereikt door middel van remarketing.</p>\r\n<p><img src="../../images/media/Remarketing Tabel.jpg" alt="" width="500" height="500" /></p>\r\n<p>Ook houdt de pixel (oude conversie pixel) bij, wie er op de bevestigingspagina van de bestelling is geweest. Zodat jij deze mensen kunt uitsluiten van jouw doelgroep, waardoor mensen die jouw product of dienst al besteld hebben, de advertentie niet nog een keer te zien krijgen.</p>\r\n<p>&nbsp;</p>\r\n<p>Deze functies zijn natuurlijk niet nieuw. Maar omdat Facebook ze verbeterd heeft en in 1 pixel verwerkt heeft, is het juist nu helemaal interessant om hier gebruik van te gaan maken. Al met al ben ik super enthousiast over deze functies van Facebook. Toen ik er achter kwam dat dit allemaal mogelijk is, kreeg het begrip &lsquo;Facebook Marketing&rsquo; een hele nieuwe dimensie voor mij.</p>\r\n<p>Ik hoop in ieder geval dat ik alles duidelijk heb overgebracht, ik heb geprobeerd om alles zoveel mogelijk in &lsquo;jip en janneke&rsquo; taal te houden :).</p>\r\n<p>Er is natuurlijk een grote kans dat je jouw website beheerder nodig hebt om de pixel te plaatsen op je website.</p>\r\n<p>Mocht er iets onduidelijk zijn of heb je vragen? Neem gerust contact met ons op of laat het ons weten via onze <a title="Facebook Digitus Marketing" href="http://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a>!</p>', 'In dit blogbericht wil ik je vertellen, hoe jij doormiddel van Facebook advertenties gebruikers kunt bereiken die jouw website hebben bezocht.\r\nGa eens bij jezelf na, hoe interessant het voor jou is, om Facebook gebruikers te bereiken die eerder interesse', 'hoe-je-jouw-website-bezoekers-bereikt-via-facebook', 3, 1, 'images/blogposts/facebook-custom-audience.png', '2018-08-21 09:38:51', '2015-08-21 15:23:03', '2015-10-27 10:38:51'),
(30, 'Hoe je er voor zorgt dat je bovenaan in jouw fan\'s nieuwsoverzicht komt', '<p>Facebook heeft een tijdje terug een nieuwe optie ge&iuml;ntroduceerd. Waarmee gebruikers zelf kunnen instellen welke berichten van vrienden, groepen en pagina&rsquo;s hun prioriteit hebben. Dit is goed nieuws voor pagina&rsquo;s die waardevolle informatie bieden, zodat fans jouw berichten prioriteit kunnen geven.</p>\r\n<p>Wij van Digitus Marketing kunnen er maar niet genoeg op hameren dat elke post waardevol moet zijn. Het heeft geen zin om berichten te plaatsen om maar berichten te plaatsen, of omdat je misschien een tijdje niets geplaatst hebt.</p>\r\n<p>Dat gezegd te hebben, zal ik je laten zien hoe je als Facebook gebruiker berichten van personen, groepen en pagina&rsquo;s kunt prioriteren. Zorg er voor dat je jouw fans laat zien hoe dit moet, zodat ze jouw pagina ook kunnen prioriteren. (Deel gerust dit blogbericht als je zelf geen tijd hebt om het uit te leggen).</p>\r\n<h3>Methode 1</h3>\r\n<p>De makkelijkste manier is direct naar je Facebook pagina te gaan.<br /> 1. Klik op de <strong>Vind ik leuk</strong> knop.<br /> 2. En klik op <strong>Als eerste weergeven</strong>.</p>\r\n<p><img src="../../images/media/Als eerste weergeven.png" alt="" width="228" height="359" /></p>\r\n<h3>Methode 2</h3>\r\n<p>Dan is er nog de uitgebreide manier. Hier krijg je een lijst te zien met alle personen, groepen en pagina&rsquo;s die je volgt.</p>\r\n<ol>\r\n<li>Klik rechts bovenin op Facebook op het pijltje naar beneden.</li>\r\n<li>2. Klik op <strong>Voorkeuren voor nieuwsoverzicht</strong>.<img src="../../images/media/Voorkeuren voor nieuwsoverzicht.png" alt="" width="240" height="447" /><br /><br /></li>\r\n<li>Er komt een nieuw venster tevoorschijn. Hier kun je aan de linkerkant sorteren op personen, groepen en pagina&rsquo;s. Vervolgens zie je aan de rechterkant alles wat je volgt.<br /><br /><img src="../../images/media/Voorkeuren voor nieuwsoverzicht2.png" alt="" width="600" height="650" /><br /><br /></li>\r\n<li>Aan de rechterkant kun je per persoon, groep of pagina klikken op de <strong>Volgend</strong> knop.</li>\r\n<li>Klik daarna op <strong>Als eerste weergeven</strong>, om de desbetreffende pagina bovenaan je nieuwsoverzicht weer te laten geven zodra zij een nieuw bericht plaatsen.<br /><br /><img src="../../images/media/Als eerste weergeven2.png" alt="" width="600" height="650" /></li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<p>Zoals je in het voorbeeld kan zien heb ik dit onder andere gedaan bij &lsquo;Social Media Examiner&rsquo; en de &lsquo;Internet Marketing Universiteit&rsquo;.</p>\r\n<p>Zolang je waardevolle informatie biedt aan jouw fans, zullen ze graag jouw berichten als eerst willen zien in hun nieuwsoverzicht. Vertel ze dus hoe ze jouw pagina toevoegen aan hun &lsquo;Als eerste weergeven&rsquo;, zodat je zeker weet dat ze dit doen. Deel gerust dit bericht als je zelf geen tijd hebt om het aan jouw fans uit te leggen.</p>\r\n<p>&nbsp;</p>\r\n<p>Vond je dit handig of heb je ergens een vraag over? Laat het ons weten via onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a>!</p>', 'Facebook heeft een tijdje terug een nieuwe optie ge&iuml;ntroduceerd. Waarmee gebruikers zelf kunnen instellen welke berichten van vrienden, groepen en pagina&rsquo;s hun prioriteit hebben. Dit is goed nieuws voor pagina&rsquo;s die waardevolle informatie', 'hoe-je-er-voor-zorgt-dat-je-bovenaan-in-jouw-fans-nieuwsoverzicht-komt', 3, 1, 'images/blogposts/Prioriteren.jpg', '2018-08-21 16:03:43', '2015-08-21 16:03:43', '2015-08-21 16:03:43'),
(31, 'Hoe je video\'s op Facebook inzet om leads te genereren', '<p>2015 is h&eacute;t jaar van video&rsquo;s op Facebook. Uit de statistieken van Facebook blijkt dat in het eerste kwartaal van 2015 gemiddeld 4 miljard video&rsquo;s per dag werden bekeken, PER DAG. Ja, ik moest het zelf ook even 2 keer lezen, maar je leest het goed, 4 miljard video weergaven per dag (totaal van gratis en betaalde weergaven).</p>\r\n<p>10 feitjes over video&rsquo;s op social media:</p>\r\n<ul>\r\n<li>50% van alle kijkers, kijkt de video af als deze maximaal 1 minuut duurt.</li>\r\n<li>92% van mobiele kijkers, deelt videos met anderen (publiekelijk en priv&eacute;).</li>\r\n<li>65% van de kijkers bezoekt de website van de adverteerder na het afkijken van de video.</li>\r\n<li>70% van de marketing professionals geeft aan dat video&rsquo;s een betere conversie genereren dan welk medium dan ook.</li>\r\n<li>Een video in een e-mail verhoogt de doorklik ratio met 200 tot 300%.</li>\r\n<li>De gemiddelde internet gebruiker blijft 88% langer op een website met video&rsquo;s.</li>\r\n<li>64% van de consumenten koopt een product sneller na er een video over bekeken te hebben.</li>\r\n<li>59% bekijkt liever een video in plaats van een een tekst lezen (als deze beiden op dezelfde pagina staan).</li>\r\n<li>Een video op je landingspagina kan je conversie verhogen tot 80%.</li>\r\n<li>Tot nu toe zetten maar 24% van de bedrijven video&rsquo;s in voor marketing, waarom zou jij hier niet op in spelen?</li>\r\n</ul>\r\n<p>Ik neem aan dat je nu net zo&nbsp;overtuigd bent als ik om video&rsquo;s in te gaan zetten om leads te genereren :).</p>\r\n<p>Zoals we vaker hebben gezegd en ook zullen blijven doen, Facebook vindt het ontzettend belangrijk dat je waardevolle informatie onder de aandacht brengt bij de juiste doelgroep. Zolang je dit doet, zul je zien dat Facebook jouw bereik automatisch vergroot. Doe je dit niet zul je een stuk minder bereik hebben. Daarnaast is het ook nog eens zo, hoe relevanter je advertenties zijn voor jouw doelgroep, dat de advertentie kosten n&oacute;g lager worden. Zo kun je al snel video weergaven genereren voor &euro;0,01 per weerave.</p>\r\n<h3>Wat je moet weten over Facebook video advertenties</h3>\r\n<ul>\r\n<li>Plaats je video direct op Facebook. Kopieer niet een link van youtube of andere websites.</li>\r\n<li>Nadat de video voor 3 seconden is afgespeeld, telt het als een weergave.</li>\r\n<li>Video&rsquo;s worden automatisch afgespeeld in het nieuwsoverzicht van gebruikers (zonder geluid). Dus als iemand er langs scrollt wordt de video afgespeeld, zodra diegene erop klikt zal het geluid geactiveerd worden.</li>\r\n<li>Bij het aanmaken van de campagne, selecteer je &ldquo;Video weergaven&rdquo; als doel.</li>\r\n<li>Zodra je de advertenties hebt draaien, geeft Facebook je cijfers van de resultaten. Je kunt zelfs zien hoelang de video gemiddeld wordt afgespeeld.</li>\r\n<li>Bij advertenties met afbeeldingen, geldt de 20% tekst regel, afbeeldingen mogen niet meer dan 20% tekst bevatten. Dit geldt ook voor de miniatuurafbeelding van de video. En ook voor de eerste 30 seconden van de video.</li>\r\n<li>Ik adviseer je om een&nbsp;&lsquo;Call to action&rsquo; oftewel een &lsquo;aanzet tot actie&rsquo; toe te voegen aan het eind van je video. Een knop waar kijkers op kunnen klikken en worden doorverwezen naar jouw Facebook tab of website, zodat mensen zich aanmelden of een product of dienst afnemen.<br />Sterker nog, dit moet je gewoon doen, je zult zien dat het veel meer conversies oplevert als je een call to action toe voegt.</li>\r\n</ul>\r\n<p style="padding-left: 30px;">Hoe je een call to action aan je video toevoegt vind je in dit blogbericht:<br /><a title="Facebook Video Call to Action" href="../../../blog/hoe-zet-ik-videos-op-facebook-in-om-gebruikers-naar-mijn-website-te-leiden" target="_blank">Hoe zet ik videos op Facebook in om gebruikers naar mijn website te leiden?</a></p>\r\n<h3>Tips voor goede video advertenties</h3>\r\n<ul>\r\n<li>Zorg ervoor dat je zeker weet dat jouw video advertenties er strak uitzien in het mobiele nieuwsoverzicht, de meeste weergaven komen van mobiele gebruikers. Daarbij komt nog eens, als mobiele gebruikers de video aanklikken om hem te bekijken, wordt deze automatisch in het volledige scherm weergegeven.</li>\r\n<li>Aangezien de video&rsquo;s afspelen zonder geluid totdat iemand er op klikt, moet je ervoor zorgen dat je in de eerste 3 seconden de aandacht pakt!</li>\r\n<li>Zorg ervoor dat je jouw doelgroep entertaint en waarde biedt, terwijl je jouw product presenteert.</li>\r\n<li>Wees er zeker van dat je een call to action toevoegt aan je video, dit zorgt voor een veel betere conversie. Laat kijkers tijdens de video zien&nbsp;waar en wanneer ze moeten klikken.</li>\r\n<li>Je hebt niet per definitie een professionele video set nodig, zolang je er maar voor zorgt dat je de aandacht pakt!</li>\r\n</ul>\r\n<h3>Conversies en/of leads uit je video advertenties halen</h3>\r\n<p>Nu wil je natuurlijk weten hoe je conversies uit jouw video advertenties haalt.</p>\r\n<p>Ik zal je een stappenplan laten zien hoe je dit ijzersterk kunt aanpakken.</p>\r\n<ol>\r\n<li>Maak een video waarin je verteld over de voordelen van jouw product of dienst, en hoe dit de &lsquo;problemen&rsquo; van jouw doelgroep oplost. Plaats deze video GRATIS op jouw Facebook pagina. Op deze manier cre&euml;er je een band met je doelgroep. En je zorgt voor betrokkenheid van relevante Facebook gebruikers, waardoor je advertenties betere resultaten zullen opleveren.<br /><br /></li>\r\n<li>Maak een advertentie campagne voor dezelfde (of een nieuwe) video en stel de juiste doelgroep in.<br /> <u>BELANGRIJK</u>: Wees er zeker van dat je een call-to-action aan je video toevoegt, die gebruikers doorverwijst naar jouw sales/landings-pagina. Voeg eventueel ook de losse link naar de desbetreffende pagina toe in je advertentie. (Wanneer je een video toevoegt via je smartphone, is het nog niet mogelijk een call-to-action toe te voegen 04-09-2015).<br /><br /></li>\r\n<li>Stop de video advertentie nadat je hem een tijdje hebt laten draaien. En zet een nieuwe video advertentie op, met een doelgerichte boodschap (bijv. dat het aanbod niet lang meer geldt). Of doe dit met een standaard link advertentie. Zorg er in ieder geval voor dat mensen op jouw landingspagina terecht komen door het cre&euml;ren van urgentie, omdat het aanbod niet lang meer geldig zal zijn.</li>\r\n</ol>\r\n<p>Afhankelijk van hoeveel weergaven je eerste video advertentie (stap 2) had, kun je ervoor kiezen om de nieuwe advertentie alleen te promoten onder alle Facebook gebruikers die de eerste video advertentie gezien hebben. Of je kunt hem promoten onder de brede&nbsp;doelgroep&nbsp;die je bij de eerste video advertentie had.</p>\r\n<p>Het doel hiervan is om conversies te genereren, nadat je vertrouwen hebt opgebouwd door het eerste video bericht.</p>\r\n<p>Bij de&nbsp;laatste advertentie, stel je bij de campagne als doel in &ldquo;Website conversies&rdquo; om zoveel mogelijk Facebook gebruikers op jouw landingspagina te krijgen die hun gegevens achter laten (leads).</p>\r\n<p>Met deze strategie zijn mensen sneller geneigd om iets van je te kopen, aangezien je vertrouwen hebt opgebouwd met de eerste 2 video&rsquo;s.&nbsp;Door deze strategie toe te passen, bouw je natuurlijk ook aan je naamsbekendheid.</p>\r\n<h3>Nog maar het begin</h3>\r\n<p>Dit is nog maar het begin van de hele Facebook video revolutie!&nbsp;Facebook heeft nog genoeg voor ons in petto als het aankomt op het bereiken van onze doelgroepen&nbsp;door middel van Facebook video advertenties.</p>\r\n<p>Zoals de meesten al weten is Facebook ontzettend druk bezig met het boosten van het aantal weergaven tegen erg lage kosten.</p>\r\n<p>&nbsp;Dus mocht je er nog niks mee hebben gedaan, zou ik zeggen ga aan de slag met het testen en optimaliseren van Facebook video advertenties!</p>\r\n<p>Heb je vragen of wil je graag jouw resultaten delen? Laat het ons weten via onze <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook pagina</a>!</p>', '2015 is h&eacute;t jaar van video&rsquo;s op Facebook. Uit de statistieken van Facebook blijkt dat in het eerste kwartaal van 2015 gemiddeld 4 miljard video&rsquo;s per dag werden bekeken, PER DAG. Ja, ik moest het zelf ook even 2 keer lezen, maar je lees', 'hoe-je-videos-op-facebook-inzet-om-leads-te-genereren', 3, 1, 'images/blogposts/Facebook-video-2.png', '2015-09-09 09:57:58', '2015-08-24 11:24:03', '2015-12-16 10:57:58'),
(32, 'Zo zullen Facebook pagina\'s er binnenkort uit zien', '<p>Er komen wijzigingen aan voor Facebook pagina&rsquo;s!&nbsp;Op het moment van schrijven heeft Facebook hier nog niets over naar buiten gebracht (02-09-2015). Maar er zijn al verschillende pagina beheerders&nbsp;die de wijzigingen ondervonden hebben.</p>\r\n<p>Zoals het er in mijn ogen naar uitziet, is dit &eacute;&eacute;n van de stappen om het voor bedrijven nog eenvoudiger te maken om bezoekers van hun Facebook pagina een actie uit te laten voeren. In deze update doet Facebook er alles aan om de call to action knop opvallender te maken en dus meer kliks hierop te realiseren.</p>\r\n<p>Hier een overzicht van de wijzigingen (zie de nummers in de foto\'s):</p>\r\n<ol>\r\n<li>Profiel foto wordt een stuk kleiner. Deze zal ook niet meer onder de omslagfoto uit steken.</li>\r\n<li>De tabbladen onder de omslagfoto worden&nbsp;uitgelijnd naar links.</li>\r\n<li>Pagina titel en categorie worden kleiner weergegeven.</li>\r\n<li>De call to action knop wordt een stuk opvallender. Deze zal groter en blauw worden. Ook zal dit de enige knop zijn die nog over de omslag foto valt.</li>\r\n<li>Alle andere knoppen zoals; &lsquo;vind ik leuk&rsquo;, &lsquo;volgen&rsquo; en &lsquo;bericht&rsquo; zullen onder de omslagfoto komen in plaats van er overheen.</li>\r\n</ol>\r\n<p>Zie hieronder een vergelijking van de oude layout van pagina&rsquo;s ten opzichte van de nieuwe.</p>\r\n<p><img src="../../images/media/Facebook wijziging.jpg" alt="" /></p>\r\n<p>&nbsp;</p>\r\n<p><img src="../../images/media/Mobile before after.png" alt="" /></p>\r\n<p>Er komen gegarandeerd meer wijzigen aan. Facebook heeft aangegeven dat ze Facebook pagina&rsquo;s in september 2015 onder de loep nemen om meer verbeteringen toe te passen.</p>\r\n<p>Al met al is dit natuurlijk een super goede update voor elke ondernemer en/of pagina beheerder. Hierdoor kun je nog meer conversies, website bezoekers of sales genereren door middel van de call to action knop.</p>\r\n<p>&nbsp;</p>\r\n<p>Zodra hier meer over bekend is, zal ik het jullie direct laten weten. Like ons op <a title="Facebook Digitus Marketing" href="https://www.facebook.com/DigitusMarketing" target="_blank">Facebook</a> om op de hoogte te blijven!</p>', 'Er komen wijzigingen aan voor Facebook pagina&rsquo;s!&nbsp;Op het moment van schrijven heeft Facebook hier nog niets over naar buiten gebracht (02-09-2015). Maar er zijn al verschillende pagina beheerders&nbsp;die de wijzigingen ondervonden hebben.\r\nZoal', 'zo-zullen-facebook-paginas-er-binnenkort-uit-zien', 3, 1, 'images/blogposts/Zo-zullen-Facebook-pagina\'s-er-binnenkort-uitziet.png', '2015-09-02 12:54:53', '2015-09-01 11:47:47', '2015-09-02 12:54:53');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `image` varchar(250) NOT NULL,
  `prijs_normaal` text NOT NULL,
  `prijs_normaal_tot` datetime NOT NULL,
  `prijs_aanbieding` text NOT NULL,
  `prijs_aanbieding_tot` datetime NOT NULL,
  `prijs_herhaling` text NOT NULL,
  `prijs_herhaling_tot` datetime NOT NULL,
  `omschrijving` text NOT NULL,
  `wefact_product_id_normaal` varchar(15) NOT NULL,
  `wefact_product_id_aanbieding` varchar(15) NOT NULL,
  `wefact_product_id_herhaling` varchar(15) NOT NULL,
  `cursus_id` int(10) NOT NULL,
  `plan_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `naam`, `slug`, `image`, `prijs_normaal`, `prijs_normaal_tot`, `prijs_aanbieding`, `prijs_aanbieding_tot`, `prijs_herhaling`, `prijs_herhaling_tot`, `omschrijving`, `wefact_product_id_normaal`, `wefact_product_id_aanbieding`, `wefact_product_id_herhaling`, `cursus_id`, `plan_id`, `created_at`, `updated_at`) VALUES
(1, 'Succesvolle Tijdlijnacties', 'succesvolle-tijdlijnacties', 'http://www.digitusmarketing.nl/images/site/webinar/tijdlijnacties/Digitus_Marketing_Videocursus_Tijdlijnacties.png', '347', '2015-11-18 23:59:59', '147', '2015-11-23 14:20:00', '197', '2015-11-23 15:00:00', 'Cursus Succesvolle Tijdlijnacties', 'P0030', 'P0033', 'P0034', 4, 2, '2015-11-20 11:30:26', '0000-00-00 00:00:00'),
(2, 'FACEBOOK ADVERTENTIE GEHEIMEN\r\n', 'facebook-advertentie-geheimen123', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_Videocursus.png', '595', '0000-00-00 00:00:00', '297', '2015-11-23 17:00:00', '397', '2015-11-23 23:00:00', 'Facebook advertentie geheimen', 'P0012', 'P0010', 'P0011', 3, 2, '2015-11-23 16:24:39', '0000-00-00 00:00:00'),
(3, 'Facebook Advertentie Geheimen\n', 'facebook-advertentie-geheimen', 'http://www.digitusmarketing.nl/images/site/webinar/ads-geheimen/Digitus_Marketing_Videocursus.png', '797', '0000-00-00 00:00:00', '397', '2015-11-23 17:00:00', '497', '2015-11-23 23:00:00', 'Cursus Facebook Advertentie Geheimein', 'P0023', 'P0035', 'P0022', 3, 4, '2015-11-23 16:30:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `productrecensies`
--

CREATE TABLE `productrecensies` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `productrecensies`
--

INSERT INTO `productrecensies` (`id`, `naam`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Erna Basten', 'Alhoewel ik nog wel twijfelde of ik deze investering nu wel moest gaan doen heb ik het toch gedaan. En ik ben blij! Ook heel blij dat het nu afgelopen is want het is druk! Maar dat is alleen maar goed. Ik kon niet verwachten dat er zoveel mensen contact op gingen nemen. Mijn investering is er al lang uit. SUPER!', 'images/digitus/recensies/erna-basten.jpg', '2015-11-26 15:08:43', '0000-00-00 00:00:00'),
(2, 'Bert de Groot', 'De eerste resultaten van onze samenwerking zijn een geit en ....bovenverwachting!!!!! Hierbij mijn wel gemeende getuigenis. "De jongens van Digitus Marketing denken mee, zijn creatief en werken met passie voor hun vak! De eerte campagnes waren meteen raak, eindelijk weer grip op de instroom van nieuwe klanten!"', 'images/digitus/recensies/bert-de-groot.jpg', '2015-11-26 15:12:10', '0000-00-00 00:00:00'),
(3, 'Gusta Hazelhorst', 'Laatst dacht ik o ja, ook maar weer eens een tijdlijnactie opzetten. En wow... Nog maar enkele uren geleden en nu al meer dan 100 reacties. Parsifal Tritsch, bedankt weer voor je opfrisser!', '/images/digitus/recensies/gusta-hazelhorst.jpg', '2015-12-01 16:33:55', '0000-00-00 00:00:00'),
(4, 'René Taling', 'Ik ben met jullie videocursus aan de slag gegaan en ik wil jullie een compliment maken over de waardevolle informatie in de cursus en over hoe jullie met mijn vragen omgaan.\n<br/><br/>\nIk ervaar dit als zeer prettig!\n<br/><br/>\n\nNou dat was het wel, laat de nieuwe klanten nu maar binnenstromen.', '/images/digitus/recensies/rene-taling.jpg', '2015-12-01 16:39:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `productrecensie_salespage`
--

CREATE TABLE `productrecensie_salespage` (
  `id` int(10) UNSIGNED NOT NULL,
  `salespage_id` int(10) UNSIGNED NOT NULL,
  `productrecensie_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `productrecensie_salespage`
--

INSERT INTO `productrecensie_salespage` (`id`, `salespage_id`, `productrecensie_id`) VALUES
(6, 2, 4),
(8, 1, 3),
(9, 2, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_salespage`
--

CREATE TABLE `product_salespage` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `salespage_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product_salespage`
--

INSERT INTO `product_salespage` (`id`, `product_id`, `salespage_id`) VALUES
(1, 1, 1),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_webinar`
--

CREATE TABLE `product_webinar` (
  `id` int(10) UNSIGNED NOT NULL,
  `webinar_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product_webinar`
--

INSERT INTO `product_webinar` (`id`, `webinar_id`, `product_id`) VALUES
(1, 1, 1),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recensies`
--

CREATE TABLE `recensies` (
  `id` int(10) UNSIGNED NOT NULL,
  `klantnaam` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `bedrijf` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `uitgelicht` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `recensies`
--

INSERT INTO `recensies` (`id`, `klantnaam`, `content`, `bedrijf`, `link`, `image`, `uitgelicht`, `created_at`, `updated_at`) VALUES
(1, 'Gabriel A.', 'Een goeie service, prijs, kwaliteit, en bereikbaarheid en dus voor elke ondernemer aan te raden die zijn bedrijf promoten wil. Digitus Marketing een dikke tien!', 'Suntime Zonnestudio', 'http://www.suntimezonnestudio.nl', NULL, 1, '2015-05-13 14:19:03', '2015-05-13 14:19:03'),
(2, 'Alex ter H.', 'We willen jullie bedanken voor de goede samenwerking en jullie inzet voor Horecapersoneel.\r\n\r\nHet heeft ons vele nieuwe inschrijvingen opgeleverd.', 'Horecapersoneel.biz', 'http://www.horecapersoneel.biz', NULL, 1, '2015-05-13 14:19:21', '2015-05-13 14:19:21'),
(3, 'Cultuurcoach Enschede', 'Bedankt voor de snelle en duidelijke hulp bij het omzetten van mijn persoonlijke profiel naar een bedrijfspagina!', 'Cultuurcoach Enschede', 'https://www.facebook.com/CultuurinEnschede', NULL, 1, '2015-05-13 14:19:38', '2015-05-13 14:19:38'),
(4, 'F. Lie Kie Sang', 'Ik heb jullie tips van het e-book stapsgewijs even nagelopen en diverse wijzigingen gemaakt op mijn pagina. Zonder jullie e-book had ik dit niet opgemerkt. Dank je wel voor de uitleg.', 'Duikschool Lie Kie Sang', 'https://www.facebook.com/DuikschoolLieKieSang', NULL, 1, '2015-05-13 14:19:58', '2015-05-13 14:19:58'),
(5, 'Mandy S.', 'Digitus Marketing heeft mij altijd goed geholpen en geadviseerd over hoe ik dingen het best kan aanpakken op Facebook. Ze staan altijd voor je klaar, zitten vol creativiteit en hebben altijd een oplossing. Ondernemers met passie!', 'Xandi.nl', 'https://www.facebook.com/Xandinl', NULL, 1, '2015-05-13 14:20:15', '2015-05-13 14:20:15'),
(6, 'Kim M.', 'Hulp uit een onverwachtse hoek! Heel erg behulpzaam en aardig top!\r\n\r\nIk was al een tijdje ontevreden over mijn Facebook pagina Luna Serena, die ik heb aangemaakt en bijhoud. Nu kwam ik via via in contact met Digitus Marketing. Een van hen heeft mij echt super geholpen met mijn pagina . Als je ooit problemen hebt met je Facebook pagina raad ik je aan om contact op te nemen met Digitus Marketing.', 'Luna Serena', 'https://www.facebook.com/pages/Luna-Serena/351550194874598', NULL, 1, '2015-05-13 14:20:33', '2015-05-13 14:20:33'),
(7, 'Rob K.', 'Digitus Marketing is de kracht achter het succes van de Facebook pagina van BBQ Restaurant Ziësta', 'Ziësta BBQ Restaurant', 'https://www.facebook.com/ziestaBBQ', NULL, 1, '2015-05-13 14:21:24', '2015-05-13 14:21:24'),
(8, 'Gusta H.', 'Deze mensen hebben kennis van zaken, zijn bijzonder klantvriendelijk, reageren snel en tonen betrokkenheid bij de klant. Absoluut een aanrader dus!', 'Cooking at Home', 'https://www.facebook.com/Cookingathome', NULL, 1, '2015-05-13 14:22:15', '2015-05-13 14:22:15'),
(9, 'Hans de B.', 'Digitus Marketing vind ik een bedrijf dat echt vanuit de consument denkt en ook op die manier naar de markt kijkt. In de trant van: wat is voor mij bruikbaar en waar word ik en daarmee mijn cliënt/relatie \'beter\' van. Niet a priori uit hoofde van winstbejag maar meer vanuit de gedachte dat als je weet waar je mee bezig bent en je dat zo effectief mogelijk doet en heel scherp in de gaten houdt wat jijzelf als consument wilt, dan komt de rest \'vanzelf\'.', 'Hans de Boers Mental Coaching', 'https://www.facebook.com/HansDeBoersMentalCoach', NULL, 1, '2015-05-13 14:22:46', '2015-05-13 14:24:58');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `naam`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Member', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Webinar', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `salespages`
--

CREATE TABLE `salespages` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` text NOT NULL,
  `slogan` text NOT NULL,
  `intro_titel` text NOT NULL,
  `intro_tekst` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `salespages`
--

INSERT INTO `salespages` (`id`, `titel`, `slogan`, `intro_titel`, `intro_tekst`, `created_at`, `updated_at`) VALUES
(1, 'Succesvolle Tijdlijnacties\n', 'Ontdek hoe jij eenvoudig elk product, dienst of evenement, wanneer het jou uitkomt, onder de aandacht brengt op Facebook!', '\n\n', 'In deze cursus ontdek je dé nummer 1 bewezen strategie om meer bereik, naamsbekendheid en mond-tot-mond reclame te creëeren voor jouw business! De cursus is gebaseerd op bijna 5 jaar ervaring, waarin deze strategie zich keer op keer bewezen heeft. Je hebt 24/7 en levenslang toegang tot de cursus.', '2015-11-20 11:35:48', '0000-00-00 00:00:00'),
(2, 'Facebook Advertentie Geheimen', 'Ontdek hoe je snel en eenvoudig Facebook advertenties opzet waarmee jij potentiële klanten omzet in betalende klanten, keer op keer!', 'Heb je nog niet geadverteerd op Facebook, of ben je het zat om telkens te gokken of jouw advertenties aanslaan? En ben jij klaar om te ontdekken hoe je de meest effectieve advertenties opzet tegen de laagste kosten?\r\n\r\n', 'Facebook advertenties zijn super effectief. Wat wij merken bij veel klanten, is dat ze wel eens hadden geadverteerd, en vervolgens zeiden "Facebook advertenties werken niet". Dit komt omdat ze hun advertenties verkeerd hadden ingericht. Dan is het natuurlijk logisch dat ze niet werken. Alles wat je nodig hebt is de juiste strategie met een duidelijke doelstelling, weten welke doelgroep je wil aanspreken en hoe je pakkende advertenties maakt.', '2015-11-23 16:27:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sportscholen`
--

CREATE TABLE `sportscholen` (
  `id` int(10) UNSIGNED NOT NULL,
  `naam` varchar(250) NOT NULL,
  `aanmeldingen` int(10) NOT NULL DEFAULT '0',
  `laatste_aanmelding` datetime NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `sportscholen`
--

INSERT INTO `sportscholen` (`id`, `naam`, `aanmeldingen`, `laatste_aanmelding`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'burning heart', 13, '2015-09-14 21:06:31', 7, '2015-06-23 13:37:44', '2015-09-14 19:06:31'),
(2, 'SportZenter', 0, '0000-00-00 00:00:00', NULL, '2015-07-01 12:40:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `trainingen`
--

CREATE TABLE `trainingen` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` int(10) NOT NULL,
  `label` text NOT NULL,
  `titel` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `dienst_id` int(10) DEFAULT NULL,
  `training_datum` datetime NOT NULL,
  `training_tijd_van` time DEFAULT NULL,
  `training_tijd_tot` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `trainingen`
--

INSERT INTO `trainingen` (`id`, `active`, `label`, `titel`, `content`, `image`, `dienst_id`, `training_datum`, `training_tijd_van`, `training_tijd_tot`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'livetraining', 'Test training', 'testen met wat content', '#', 3, '2015-07-30 19:30:00', '00:00:00', '00:00:00', '2015-07-28 15:28:09', '2015-10-27 14:50:09', NULL),
(2, 0, 'livetraining', 'Facebook Workshop', '', '#', 3, '2014-11-18 19:00:00', '00:00:00', '00:00:00', '2015-07-30 15:36:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `afbeelding` varchar(255) NOT NULL,
  `over` text NOT NULL,
  `functie` text,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `verloopdatum` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `benodigd_id` int(10) UNSIGNED DEFAULT NULL,
  `sportschool_id` int(10) UNSIGNED DEFAULT NULL,
  `tab_app` varchar(255) NOT NULL,
  `tab_app_link` varchar(255) NOT NULL,
  `klantnummer` int(11) NOT NULL,
  `conversiepixel` int(11) NOT NULL DEFAULT '0',
  `ref` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `voornaam`, `achternaam`, `email`, `password`, `afbeelding`, `over`, `functie`, `facebook`, `twitter`, `googleplus`, `linkedin`, `role_id`, `plan_id`, `verloopdatum`, `last_login`, `benodigd_id`, `sportschool_id`, `tab_app`, `tab_app_link`, `klantnummer`, `conversiepixel`, `ref`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jeroen', 'Venderbosch', 'jeroen@digitusmarketing.nl', '$2y$10$oPGy6JFnj3cOyxywOJsMQ.SpToutz3P46Hry0UbwvHVplc72D6Ew2', 'images/users/jeroen.png', 'Jeroen Venderbosch is een leergierige internet marketeer met passie voor techniek. Hij werkt internet marketing concepten uit, meet en optimaliseert de resultaten.', 'Web Development Specialist', 'https://www.facebook.com/Jvenderbosch', '#', '', '', 1, 2, '0000-00-00 00:00:00', '2015-11-30 13:11:00', 1, NULL, '', '', 0, 0, NULL, 'GyCtWlPSHKRKX5ynDKlN7dqjUh873srq2VGRFSql7ABxyiE66EfMlsSVBLVJ', '2015-05-13 13:01:12', '2015-11-30 13:11:00'),
(2, 'Parsifal', 'Tritsch', 'parsifal@digitusmarketing.nl', '$2y$10$BEhv4tqBBDl/8JJcJ6eOfe3w.JW3/Az/qk.ngQMFqc4WNMBzUSVKC', 'images/users/parsifal.png', 'Parsifal Tritsch bedenkt concepten en social media strategieën, hij schrijft dagelijks content voor bedrijven en spreekt tijdens leerzame Facebook seminars en Workshops. Zijn interesse ligt vooral bij de psychologie achter online communicatie.', 'Facebook Marketing Expert', 'https://www.facebook.com/parsifal.tritsch', '', '', '', 1, 1, '0000-00-00 00:00:00', '2015-10-25 09:24:22', NULL, NULL, '', '', 0, 0, NULL, NULL, '2015-05-19 11:40:55', '2015-10-25 09:24:22'),
(3, 'Rogier', 'van Voorst', 'rogier@digitusmarketing.nl', '$2y$10$lpWFM0N/CPs/ESa5NiAQ/uQrAhTtcxcN4.UapEC2WyKUBj27XKJN2', 'images/users/rogier.png', 'Rogier van Voorst is verantwoordelijk voor Facebook campagnes en lead management. Hij is communicatief zeer vaardig. Zijn kracht zit in zijn perfectionisme en zijn groot empatisch vermogen. Zijn visie: “The moment you stop improving, is the moment you stop being the best”.', 'Product Launch Manager', 'https://www.facebook.com/rogiervanV', '#', '', '', 1, 1, '0000-00-00 00:00:00', '2015-10-24 20:17:28', NULL, NULL, '', '', 0, 0, NULL, 'SuQ4lJRTZ9Yi6OCII2Py3P78Hr0vnaFIbT6jyUgGTzFF2dYx1WoCUS8Ujms2', '2015-05-19 11:47:30', '2015-12-23 12:23:47'),
(4, 'Jeroen', 'Venderbosch', 'jeroenvenderbosch@hotmail.com', '$2y$10$/QLEqsuGl32totUgPb7zHeumGzdw4ldIQ7REVSfKDoDsPB92SaWvq', 'images/users/4/Pink-Elephant-40074825733.jpg', '', NULL, '', '', '', '', 2, 4, '0000-00-00 00:00:00', '2015-11-27 15:23:48', 5, NULL, 'Bezig', 'http://woobox.com/nd4847, http://woobox.com/7ttcjt', 419, 1, NULL, 'yBMKSyrwBGoXpATFMbgaqW1fWoRyjhEt0BIdp4C5M0IcpiPv6HpWJ1D4pdSO', '2015-05-19 11:49:47', '2015-11-27 15:23:48'),
(7, 'Rene', 'Taling', 'r.taling1@upcmail.nl', '$2y$10$3FdQQasNMpFVtTv5OONH2eAEevC.GSNDnVdY8PajN5pdvIUUnyDpq', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-11-20 10:06:43', 5, 1, 'Online', 'http://woobox.com/m8dvg4', 422, 1, NULL, 'DvVRa7Pi8xgQUQ4Qia32ptYgCR41cxfikULo3x7O9X7eOfUQ2yC8vW2DO8SK', '2015-06-12 15:06:41', '2015-11-20 12:39:37'),
(8, 'Caro', 'van Zutphen', 'caro@hartforher.nl', '$2y$10$xdQj4ojMUptOjkrcJxnb...v6NIMqxl6UFwZsem.PCjzsAKG8e6y2', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-06-24 14:23:51', 4, NULL, 'Online', 'http://woobox.com/p38qzo', 423, 0, NULL, 'vCm3vgE6Vmc3JMLDdonHa1lVKwmYZquRLk7CXvRvhyvUQIDKMlbvjkobjAj2', '2015-06-12 15:09:24', '2015-06-24 14:23:51'),
(9, 'Monique', 'van der Slikke', 'monique@healthclubjulien.nl', '$2y$10$qtgPQ8cCLcoU2MBk1m8mCO.qdBe7k04ddBNJ0wjzBzEFeD8L2Gz72', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-06-19 20:36:07', 7, NULL, 'Online', 'http://woobox.com/efaoum', 424, 0, NULL, 'jXYKas0AtYLQh5WQ94ra4RXjMId1chERkM4TK6ZFXcIDGMqJ5BTqrCuD41py', '2015-06-17 13:18:59', '2015-06-19 20:36:07'),
(10, 'Petra', 'Hendriks', 'info@sportzenter.nl', '$2y$10$/3/ryfsn/B2LS4zCuTAFCuURU.li4KeXpg3oj.kl4mqoKLwUHluty', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-07-13 05:08:18', 6, NULL, 'Online', 'http://woobox.com/ymb9c7', 425, 0, NULL, '8YKAEDC14tKHtJwQ98ooy0KET3kwMuletZZ8WUluHgx9W6KDX9FOL7SX2kN4', '2015-07-01 14:20:57', '2015-07-13 05:09:17'),
(11, 'Heki', 'Flyff', 'heki_flyff@hotmail.com', '$2y$10$nfovMMDr7oSAslt70b0UBO/dDOOyi4nSaYJUevyM7ezz56pgbbnn.', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-10-23 11:54:44', 13, NULL, 'Offline', '#', 426, 0, NULL, 'EKCs5VlpTuwHww5tlp9dkC0NUw3Bo4WkbxFOGaYbX3HeVl9DZSnmYgLekno9', '2015-07-20 07:12:33', '2015-10-23 11:54:44'),
(12, 'Jeroen', 'Cornet', 'jeroen@onefitness.nl', '$2y$10$EKxi0vCbHpwxyKGZag68WOc0qsj1FAMAGytZxHFG9QhV4h.U2urQm', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-07-31 15:54:04', 12, NULL, 'Online', 'http://woobox.com/4on6z3', 427, 0, NULL, 'BaOTujeKEMtg42xcIkVFGgreeJBmGJdKPrnFUAuBjAf5cjjEgcEXE8NQfr44', '2015-07-20 09:48:26', '2015-08-03 09:37:33'),
(13, 'Elly', 'Oderkerk', 'elly@hartforher.nl', '$2y$10$UbSzA0pkZRFHbB4W8ogvpOiKVaP9A7P4wXB6/nLEUD.1lyHTIFKhq', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-09-25 15:57:23', 10, NULL, 'Online', 'http://woobox.com/6dh3yy', 428, 1, NULL, 'QdrUAtIseAKLwHNWpI7Z0zLrJLIjSbXCKpweS6ACc8QvqG9jI3YGO5WyPD5Q', '2015-07-20 10:33:52', '2015-09-25 16:10:41'),
(14, 'Judith', 'Strating', 'info@danseninweert.nl', '$2y$10$9JrxMrKYQD5G428N2im19eo6AWGvIi/fVzFPlwnSXtBOzCifUfRqe', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-11-06 09:13:52', 11, NULL, 'Online', 'http://woobox.com/nd4847, http://woobox.com/7ttcjt', 429, 0, NULL, 'SSLlDQmVfepvm0M5yIFV5AF0SiMJM2rk2YyXEl8dsrS61H0sLEOqv4czdBtk', '2015-07-24 11:30:36', '2015-11-06 09:13:52'),
(15, 'Jody', 'Simons', 'info@totalexercise.nl', '$2y$10$Rod39tA1T89/BCQJZ8wYN.0hp/90d/t03o6KSCY7/b3WmmYZq29HK', '', '', NULL, '', '', '', '', 2, 2, '0000-00-00 00:00:00', '2015-09-02 08:55:23', 14, NULL, 'Online', 'http://woobox.com/84525d', 430, 1, NULL, 'MFmrgPw0ZSXaYjlNuOXmSm7tyYiUJZhuPNlRrKUF0JmklUud2zkfLoAkajTT', '2015-08-10 09:59:26', '2015-09-09 11:48:07'),
(44, 'Frans', 'Kluijtmans', 'contactus@enjoy-forever.nl', '$2y$10$toJdNzcS5kPLa2yDM8JqzeveuICp6X634.1fY9VK1CwGY.8Tpm4Jm', 'images/users/44/Schermafbeelding+2015-10-20+om+13.40.41.png', '', NULL, '', '', '', '', 4, 4, '0000-00-00 00:00:00', '2015-12-15 09:17:20', NULL, NULL, '', '', 0, 0, NULL, 'hQn1LNr88Z5rRqUFDua1osgNOADk0XDb28mCYUjNADA0Dh0Fy9FiDLGDWsJE', '2015-09-28 15:08:29', '2015-12-15 09:17:20'),
(54, 'Gerdy', 'Rijnbeek', 'gerdy@leidraad.info', '$2y$10$En3k5pAG2S1R9nUtCMUJpO7tB0wFbFlDiWDw.kpAmJiQc0D9r1McC', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-11-07 22:44:56', NULL, NULL, '', '', 0, 0, NULL, 'n4m7yHfJJ6CoyBJFK8fAaMc18pfEseOIhDxnyszsoOJaHkCOFOWV6F3GlkqW', '2015-09-29 20:05:14', '2015-11-07 22:44:56'),
(55, 'Marguerite', 'Schiffmacher', 'schiffmar@gmail.com', '$2y$10$sy8Cq07JK02U5E53K00.5.cW0WtHgnFgSAObsLHo33ahuLlJowzte', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-10-21 17:28:51', NULL, NULL, '', '', 0, 0, NULL, NULL, '2015-09-29 21:36:28', '2015-10-21 20:59:10'),
(61, 'Anneke', 'Van der Togt', 'amvdtogt@hotmail.com', '$2y$10$Hxr0LLMYhUX3/G3kGA.UsOrQXP49TTfgVKn2VyPy4xLj38ahMRrEy', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-12-28 16:47:12', NULL, NULL, '', '', 0, 0, NULL, 'ISleGdPSYunqMLQYtTLKHT3fPbz29fHtvDEtIb1VV2YaM4zWpYl6SVhc4cQD', '2015-09-30 19:25:55', '2015-12-28 16:47:12'),
(107, 'Ingrid', 'Stoop', 'Ingrid@matrixmethode.nl', '$2y$10$j/JS8WGSp4MDlVzsg0hhfuNLcUpAxNd84twtDPUpuxAD9jE0iooA2', '', '', NULL, '', '', '', '', 4, 4, '0000-00-00 00:00:00', '2015-12-04 16:04:00', NULL, NULL, '', '', 0, 0, NULL, 'anyz5s64HAeDdmEb0YWEUOf1piZZJcZvnoXm3DbS560a8ViKwKgjkHsxeWdN', '2015-10-05 15:09:35', '2015-12-04 16:04:00'),
(209, 'Peter Paul', 'Both', 'pmboth61@hotmail.com', '$2y$10$TnoLezIW9qlg4Bc8DP72Jep38MMz0RdxOfT7EzzuxjcHDwnb.jazi', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-12-23 11:20:56', NULL, NULL, '', '', 0, 0, NULL, NULL, '2015-10-17 07:26:05', '2015-12-23 11:20:56'),
(212, 'Albert', 'Both', 'albertboth@dutchflownow.nl', '$2y$10$Lup4.1KcoYDwG0LPgTlD4eUGWa93.SI5b9fLj8hFaVgB314vUMRzC', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-10-21 17:46:44', NULL, NULL, '', '', 0, 0, NULL, NULL, '2015-10-17 18:59:23', '2015-10-21 19:19:46'),
(226, 'Herma', 'van den Enk', 'info@massagepraktijkherma.nl', '$2y$10$YtSuTDlf8bFd5nlkqbp3QuWQNpAOns7HkrotapsFD1fxw3rfgvU/S', 'images/users/226/Herma+van+den+Enk-Fiets.jpg', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-11-18 08:49:51', NULL, NULL, '', '', 0, 0, NULL, '42V9qHqPJuNyuQN2aKZtVtaJ06cZQKJrB2GiBJqAxz60RdNbH41ajDwScAAX', '2015-10-20 10:16:03', '2015-11-18 08:51:35'),
(240, 'Jaldhara', 'Groeneveld', 'welcome@briant.nl', '$2y$10$zu/AVBHGyUcF0dzUbH4gGeB65Bb4sAOYt3k0YdO.1X411WLnintaq', '', '', NULL, '', '', '', '', 4, 4, '0000-00-00 00:00:00', '2015-12-27 15:39:24', NULL, NULL, '', '', 0, 0, NULL, 'PNiDgYHEz1kEF1My34MDwKXQIhHTqGCcIMIAlxlGBYHlfohqCqgNCD3PNtiz', '2015-10-21 16:54:59', '2015-12-27 15:39:24'),
(245, 'Tamara ', 'Van de Weyer', 'tamara-vdw@live.be', '$2y$10$r9ASO//kJYvA6YyaTa4JyuVve3rZvbbWxlUCJG5qAOEV.VtQbAsOu', '', '', NULL, '', '', '', '', 4, 4, '0000-00-00 00:00:00', '2015-10-23 07:50:58', NULL, NULL, 'Geen', '', 431, 0, NULL, 'qYci1UGeFlzaj49CkrM9OBWfCl16mEikDiSQRQU8z8d5xZd5S9arwFNwpmqF', '2015-10-22 10:32:38', '2015-10-23 07:52:39'),
(251, 'Anette', 'Kouwenberg', 'anettekouwenberg@online.nl', '$2y$10$S.j0TXLc3dc3oTA2ZtU2EeTGA2jZhv/QRN0SEzmJrwkzSl.LN7bxO', '', '', NULL, '', '', '', '', 4, 4, '0000-00-00 00:00:00', '2015-11-27 17:45:01', NULL, NULL, 'Geen', '', 432, 0, NULL, 'BP1fcJ5l90LhZnLMQ8ao6m5SKMPYyg4IJ7njMkCovCtxZDqLY5b3CDslNLFZ', '2015-11-03 14:10:22', '2015-11-27 17:45:01'),
(260, 'Bram ', 'Tomesen', 'bramtomesen@yahoo.com', '$2y$10$lsjOQODBare0zlu4zVqtQOw2yD6Cg0lbo3tJJKhknQirZWIFSrna2', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, 'Geen', '#', 433, 0, NULL, NULL, '2015-11-10 15:05:51', '2015-11-10 15:05:51'),
(270, 'Marleen', 'Kulk', 'info@marleenkulk.nl', '$2y$10$qmbJMIHpczcGtbCGxM9FweXYjPLnGkTv8mMPpzaL4iY/tXJ4LdxcK', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-11-24 15:39:24', NULL, NULL, '', '', 0, 0, '', 'gHrTAc8eSSzmbxP8a957ew8CcNYgovPsFCcu8CRkMsfcyN5IHXHNrFk8niFg', '2015-11-18 20:53:02', '2015-11-24 15:39:24'),
(271, 'Wim', 'Gaalman', 'wgaalman@gmail.com', '$2y$10$3/BorD6RaOaXYIpvnv4MEuchzl9ASDb/MztPV0lB3fN2//7SnXfgG', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2016-01-05 14:03:42', NULL, NULL, '', '', 0, 0, 'MCml3', 'jN0xxyWXZPGCWJ9yl1gtc47wEveWL80P5bXrVAaYnZLBzbpjucUJqDORWiRm', '2015-11-18 21:15:01', '2016-01-05 14:03:42'),
(272, 'Han', 'Rutten', 'han.rutten@bewegenwerkt.nl', '$2y$10$JQ86SJzTmIFa2f1Ry1ZkZeljqvZMMDmHa3XK5GjXnP1OJfTEZKkmC', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-12-22 08:58:34', NULL, NULL, 'Geen', '', 434, 0, 'K0Hs', 'L0txt9Et4yU9DsqnpsEL0rgeM6Nz6QIKEJuOBj5brkPkUhHGWZMcUa20qhLn', '2015-11-20 11:08:42', '2015-12-22 08:58:34'),
(276, 'Jeroen', 'Venderbosch', 'testing@digitusmarketing.nl', '$2y$10$qe5IoINa9VpotM/xcBGUc.G/i1fYOrp3sMoQkrGaCVIrOkfWiMYzm', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '2015-11-23 15:43:58', NULL, NULL, '', '', 0, 0, NULL, NULL, '2015-11-23 15:40:30', '2015-12-04 10:15:49'),
(277, 'Pascal', 'Tjong A Hung', 'ptjongahung@jacanaresort.com', '$2y$10$TgyxB4y2IooTYCYs9bXxoulqf8855YYUfQGSdnStNNHeF.QnpUv6e', '', '', NULL, '', '', '', '', 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, 'Geen', '', 435, 0, NULL, NULL, '2015-11-27 10:43:47', '2015-11-27 10:43:47'),
(278, 'Jeroen', 'Marckmann', 'aanmeldingen@digitusmarketing.nl', '$2y$10$YK7NG/UN/yhqakTrW3SJ6eBF3QTjUJjEWk3V2NZXle1CXQTKN8ptC', '', '', NULL, '', '', '', '', 4, 4, '0000-00-00 00:00:00', '2015-11-29 14:29:50', NULL, NULL, '', '', 0, 0, NULL, NULL, '2015-11-29 14:11:24', '2015-11-29 14:29:50'),
(279, '', '', '', '', '', '', NULL, '', '', '', '', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL, '', '', 0, 0, NULL, NULL, '2015-12-03 19:57:42', '2015-12-03 19:57:42');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `thumbnail` varchar(250) DEFAULT NULL,
  `titel` text NOT NULL,
  `tool1_tekst` text,
  `tool1_link` varchar(250) DEFAULT NULL,
  `tool2_tekst` text,
  `tool2_link` varchar(250) DEFAULT NULL,
  `tool3_tekst` text,
  `tool3_link` varchar(250) DEFAULT NULL,
  `tool4_tekst` text,
  `tool4_link` varchar(250) DEFAULT NULL,
  `plan_id` int(10) UNSIGNED NOT NULL,
  `hoofdstuk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `videos`
--

INSERT INTO `videos` (`id`, `link`, `thumbnail`, `titel`, `tool1_tekst`, `tool1_link`, `tool2_tekst`, `tool2_link`, `tool3_tekst`, `tool3_link`, `tool4_tekst`, `tool4_link`, `plan_id`, `hoofdstuk_id`, `created_at`, `updated_at`) VALUES
(1, '<iframe src="https://player.vimeo.com/video/129101245" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', 'images/cursus/videos/1/video-thumb.jpg', '1. Waarom een video cursus?', '', '', '', '', '', '', '', '', 3, 1, '2015-05-16 14:20:48', '2015-05-31 15:02:30'),
(11, '<iframe src="https://player.vimeo.com/video/129103241" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Wat zijn de voordelen van adverteren op Facebook?', '', '', '', '', '', '', '', '', 3, 1, '2015-05-28 11:45:45', '2015-05-31 15:02:39'),
(12, '<iframe src="https://player.vimeo.com/video/129104051" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Welke advertentie methoden biedt Facebook en welke gaan wij gebruiken', '', '', '', '', '', '', '', '', 3, 1, '2015-05-28 11:46:22', '2015-05-31 15:02:47'),
(13, '<iframe src="https://player.vimeo.com/video/129106069" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Uit welke 3 onderdelen bestaat een Facebook campagne', '', '', '', '', '', '', '', '', 3, 2, '2015-05-28 12:37:27', '2015-05-31 15:02:56'),
(14, '<iframe src="https://player.vimeo.com/video/129107425" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Wat kost adverteren op Facebook', '', '', '', '', '', '', '', '', 3, 2, '2015-05-28 12:59:08', '2015-05-31 15:03:04'),
(15, '<iframe src="https://player.vimeo.com/video/129108798" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Waar wordt mijn advertentie weergegeven op Facebook', '', '', '', '', '', '', '', '', 3, 2, '2015-05-28 13:02:16', '2015-05-31 15:03:13'),
(16, '<iframe src="https://player.vimeo.com/video/129109308" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Wat is het verschil tussen een advertentie en een bericht in het nieuwsoverzicht', '', '', '', '', '', '', '', '', 3, 2, '2015-05-28 13:04:54', '2015-05-31 15:03:21'),
(17, '<iframe src="https://player.vimeo.com/video/129448194" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '5. Welke advertentietypes kan ik gebruiken om conversies / leads te genereren', '', '', '', '', '', '', '', '', 3, 2, '2015-05-28 13:12:20', '2015-06-01 15:40:28'),
(18, '<iframe src="https://player.vimeo.com/video/129198476" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Hoe maak ik een advertentie account', '', '', '', '', '', '', '', '', 3, 4, '2015-05-29 11:47:11', '2015-05-31 15:02:19'),
(19, '<iframe src="https://player.vimeo.com/video/129207156" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Hoe maak ik een conversie pixel en wat moet ik hiermee doen', 'Conversiepixel', 'http://www.facebook.com/ads/manage', '', '', '', '', '', '', 3, 4, '2015-05-29 11:59:54', '2015-06-12 14:01:35'),
(20, '<iframe src="https://player.vimeo.com/video/130541270" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Waar moet ik beginnen om een Facebook campagne op te zetten', '', '', '', '', '', '', '', '', 3, 4, '2015-05-29 12:00:32', '2015-06-12 13:17:02'),
(21, '<iframe src="https://player.vimeo.com/video/129209986" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Welke doelstelling moet ik kiezen om leads te genereren', '', '', '', '', '', '', '', '', 3, 4, '2015-05-29 12:02:48', '2015-05-31 15:04:00'),
(22, '<iframe src="https://player.vimeo.com/video/129349894" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '5. Waar vind ik de URL die gebruikers naar mijn Facebook tab leidt', '', '', '', '', '', '', '', '', 3, 4, '2015-05-29 12:10:13', '2015-05-31 15:11:20'),
(23, '<iframe src="https://player.vimeo.com/video/130541990" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '6. Hoe moet ik mijn campagne noemen om het overzichtelijk te houden', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:09:29', '2015-06-12 13:26:52'),
(24, '<iframe src="https://player.vimeo.com/video/130542849" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '7. Hoe selecteer ik de juiste locatie(s)', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:10:32', '2015-06-12 13:37:03'),
(25, '<iframe src="https://player.vimeo.com/video/130544596" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '8. Wat je moet weten over het selecteren van de juiste leeftijd', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:11:00', '2015-06-12 13:54:34'),
(26, '<iframe src="https://player.vimeo.com/video/129350438" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '9. Welke interesses zijn interessant om te selecteren Gezondheid', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:12:25', '2015-05-31 15:12:25'),
(27, '<iframe src="https://player.vimeo.com/video/129350846" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '10. Wat kan ik selecteren bij de optie gedrag', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:12:53', '2015-05-31 15:12:53'),
(28, '<iframe src="https://player.vimeo.com/video/129351073" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '11. Wat houdt de optie connecties in en wat kan ik hiermee', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:13:20', '2015-05-31 15:13:20'),
(29, '<iframe src="https://player.vimeo.com/video/129352435" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '12. Waar moet ik rekening mee houden bij het kiezen van een budget', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:13:44', '2015-05-31 15:13:44'),
(30, '<iframe src="https://player.vimeo.com/video/129353005" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '13. Hoeveel advertentietegoed moet ik inzetten per advertentie set', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:14:14', '2015-05-31 15:14:14'),
(31, '<iframe src="https://player.vimeo.com/video/129353432" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '14. Moet ik ook iets instellen bij geavanceerde opties', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:15:18', '2015-05-31 15:15:18'),
(32, '<iframe src="https://player.vimeo.com/video/129353652" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '15. - Hoe moet ik mijn advertentie set noemen om het overzichtelijk te houden', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:15:46', '2015-05-31 15:15:46'),
(33, '<iframe src="https://player.vimeo.com/video/129361770" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '16. Één afbeelding, meerdere afbeeldingen of een video', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:24:51', '2015-05-31 16:49:23'),
(34, '<iframe src="https://player.vimeo.com/video/129449375" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '17. Inspiratie voor een pakkende koptekst', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:25:24', '2015-06-01 15:44:55'),
(35, '<iframe src="https://player.vimeo.com/video/129355572" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '18. Inspiratie voor een krachtige tekst', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:25:46', '2015-06-12 14:23:26'),
(36, '<iframe src="https://player.vimeo.com/video/129356105" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '19. Welke aanzet tot actie knop moet ik kiezen', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:26:10', '2015-05-31 15:26:10'),
(37, '<iframe src="https://player.vimeo.com/video/129526161" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '20. Inspiratie voor een linkbeschrijving.', '', '', '', '', '', '', '', '', 3, 4, '2015-05-31 15:37:07', '2015-06-02 11:25:07'),
(38, '<iframe src="https://player.vimeo.com/video/129357387" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '21. Wat is de 20% tekst regel en hoe voorkom ik dat mijn advertentie wordt afgekeurd', 'Raster', 'http://www.digitusmarketing.nl/images/tools/raster.png', '', '', '', '', '', '', 3, 4, '2015-05-31 15:37:29', '2015-06-12 14:24:15'),
(39, '<iframe src="https://player.vimeo.com/video/129528995" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '22. Hoe maak ik met Canva.com een passende afbeelding voor mijn advertentie.', 'Canva.com', 'http://www.canva.com', 'Raster', '../images/tools/raster.png', '', '', '', '', 3, 4, '2015-06-02 11:27:34', '2015-06-02 11:34:10'),
(40, '<iframe src="https://player.vimeo.com/video/129531955" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '23. Hoe stel ik een link advertentie met één afbeelding samen', '', '', '', '', '', '', '', '', 3, 4, '2015-06-02 11:28:56', '2015-06-02 11:28:56'),
(41, '<iframe src="https://player.vimeo.com/video/129541287" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '24. Hoe stel ik een link advertentie met meerdere afbeeldingen samen', '', '', '', '', '', '', '', '', 3, 4, '2015-06-02 12:19:57', '2015-06-02 12:19:57'),
(42, '<iframe src="https://player.vimeo.com/video/129544694" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '25. Hoe stel ik een video advertentie samen met aanzet tot actie', '', '', '', '', '', '', '', '', 3, 4, '2015-06-02 12:36:58', '2015-06-02 12:36:58'),
(46, '<iframe src="https://player.vimeo.com/video/143130268" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Hoe werkt de Facebook strategie om meer klanten te krijgen', '', '', '', '', '', '', '', '', 3, 10, '2015-10-21 12:44:21', '2015-10-21 12:46:00'),
(47, '<iframe src="https://player.vimeo.com/video/143131297" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Wie wil je precies bereiken', '', '', '', '', '', '', '', '', 3, 10, '2015-10-21 12:49:20', '2015-10-21 12:49:20'),
(48, '<iframe src="https://player.vimeo.com/video/143131461" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Voorbeelden specifieke doelgroep', '', '', '', '', '', '', '', '', 3, 10, '2015-10-21 12:52:40', '2015-10-21 12:52:40'),
(49, '<iframe src="https://player.vimeo.com/video/143131751" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Ideeën voor jouw klanten magneet', '', '', '', '', '', '', '', '', 3, 10, '2015-10-21 12:55:02', '2015-10-21 12:55:02'),
(50, '<iframe src="https://player.vimeo.com/video/143131991" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '5. 4 tips voor een succesvolle landingspagina', '', '', '', '', '', '', '', '', 3, 10, '2015-10-21 12:58:54', '2015-10-21 12:58:54'),
(51, '<iframe src="https://player.vimeo.com/video/143133982" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Uit welke 3 onderdelen bestaat een Facebook campagne', '', '', '', '', '', '', '', '', 3, 11, '2015-10-21 13:28:11', '2015-10-21 13:28:11'),
(52, '<iframe src="https://player.vimeo.com/video/143135679" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Wat is het verschil tussen een advertentie en een bericht in het nieuwsoverzicht', '', '', '', '', '', '', '', '', 3, 11, '2015-10-21 13:30:35', '2015-10-21 13:30:35'),
(53, '<iframe src="https://player.vimeo.com/video/143135877" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Waar wordt mijn advertentie weergegeven op Facebook', '', '', '', '', '', '', '', '', 3, 11, '2015-10-21 13:32:21', '2015-10-21 13:32:21'),
(54, '<iframe src="https://player.vimeo.com/video/143136077" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Wat kost adverteren op Facebook', '', '', '', '', '', '', '', '', 3, 11, '2015-10-21 13:34:13', '2015-10-21 13:34:13'),
(55, '<iframe src="https://player.vimeo.com/video/143136253" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '5. Welke advertentie methoden biedt Facebook en welke gaan wij gebruiken', '', '', '', '', '', '', '', '', 3, 11, '2015-10-21 13:39:42', '2015-10-21 13:39:42'),
(56, '<iframe src="https://player.vimeo.com/video/143136952" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '6. Waarom power editor', '', '', '', '', '', '', '', '', 3, 11, '2015-10-21 13:46:09', '2015-10-21 13:46:09'),
(57, '<iframe src="https://player.vimeo.com/video/143137696" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Advertentie account aanmaken en een betalings methode koppelen', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 13:51:22', '2015-10-21 13:51:22'),
(58, '<iframe src="https://player.vimeo.com/video/143138343" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Slimme truc om veel tijd te besparen met Power editor', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 13:59:19', '2015-10-21 13:59:19'),
(59, '<iframe src="https://player.vimeo.com/video/143139156" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Wat is een conversie pixel', 'Voorbeeld pixel', 'http://www.digitusmarketing.nl/images/tools/voorbeeld-pixelcode.jpg', '', '', '', '', '', '', 3, 12, '2015-10-21 14:03:06', '2015-10-21 15:42:52'),
(60, '<iframe src="https://player.vimeo.com/video/143139669" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Hoe je meer inzicht krijgt in jouw doelgroep via Facebook pagina statistieken', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:04:56', '2015-10-21 14:04:56'),
(61, '<iframe src="https://player.vimeo.com/video/143139897" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '5. Hoe je jouw advertentieset richt op gebruikers aan de hand van hun locatie, leeftijd en geslacht', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:11:04', '2015-10-21 14:11:04'),
(62, '<iframe src="https://player.vimeo.com/video/143140649" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '6. Hoe en wanneer je gebruik moet maken van de optie "Meer demografische gegevens"', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:13:34', '2015-10-21 14:13:34'),
(63, '<iframe src="https://player.vimeo.com/video/143140915" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '7. Hoe en wanneer je gebruik moet maken van de optie "Connecties"', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:15:14', '2015-10-21 14:15:14'),
(64, '<iframe src="https://player.vimeo.com/video/143141090" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '8. Hoe en wanneer je gebruik moet maken van de optie "Interesses"', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:16:43', '2015-10-21 14:16:43'),
(65, '<iframe src="https://player.vimeo.com/video/143141294" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '9. Hoe en wanneer je gebruik moet maken van de optie "Gedrag"', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:19:13', '2015-10-21 14:19:13'),
(66, '<iframe src="https://player.vimeo.com/video/143141614" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '10. Hoeveel advertentietegoed moet ik inzetten per advertentie set', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:22:06', '2015-10-21 14:22:06'),
(67, '<iframe src="https://player.vimeo.com/video/143141973" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '11. Wat je moet weten over budget en planning binnen jouw advertentie set', '', '', '', '', '', '', '', '', 3, 12, '2015-10-21 14:25:10', '2015-10-21 14:25:10'),
(68, '<iframe src="https://player.vimeo.com/video/143142321" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Welke advertentie types kan ik gebruiken om conversies te genereren', '', '', '', '', '', '', '', '', 3, 14, '2015-10-21 14:28:12', '2015-10-21 14:40:26'),
(69, '<iframe src="https://player.vimeo.com/video/143142666" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Wat is een Dark Post en hoe stel ik deze samen', '', '', '', '', '', '', '', '', 3, 14, '2015-10-21 14:33:44', '2015-10-21 14:40:38'),
(70, '<iframe src="https://player.vimeo.com/video/143143304" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Inspiratie voor een krachtige tekst', '', '', '', '', '', '', '', '', 3, 14, '2015-10-21 14:35:45', '2015-10-21 14:40:50'),
(71, '<iframe src="https://player.vimeo.com/video/143143507" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Inspiratie voor de advertentie afbeelding', '', '', '', '', '', '', '', '', 3, 14, '2015-10-21 14:37:12', '2015-10-21 14:41:00'),
(72, '<iframe src="https://player.vimeo.com/video/143143668" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '5. Inspiratie voor een pakkende koptekst', '', '', '', '', '', '', '', '', 3, 14, '2015-10-21 14:38:52', '2015-10-21 14:41:12'),
(73, '<iframe src="https://player.vimeo.com/video/143143864" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '6. Welke aanzet tot actie knop moet ik kiezen', '', '', '', '', '', '', '', '', 3, 14, '2015-10-21 14:40:10', '2015-10-21 14:41:23'),
(74, '<iframe src="https://player.vimeo.com/video/143144162" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '7. Inspiratie voor de linkbeschrijving', '', '', '', '', '', '', '', '', 3, 14, '2015-10-21 14:42:36', '2015-10-21 14:42:36'),
(75, '<iframe src="https://player.vimeo.com/video/143144334" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '8. Wat is de 20% tekst regel en hoe voorkom ik dat mijn advertentie wordt afgekeurd', '20 % Raster', 'http://www.digitusmarketing.nl/images/tools/raster-1200x628-link-advertentie.png', '', '', '', '', '', '', 3, 14, '2015-10-21 14:43:42', '2015-11-17 19:31:33'),
(76, '<iframe src="https://player.vimeo.com/video/143151961" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Wat is Facebook audience insights en hoe maak je hier gebruik van', '', '', '', '', '', '', '', '', 2, 13, '2015-10-21 15:54:34', '2015-10-21 15:54:34'),
(77, '<iframe src="https://player.vimeo.com/video/143152373" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Hoe je jouw advertenties richt op Facebook gebruikers die jouw website hebben bezocht', '', '', '', '', '', '', '', '', 2, 13, '2015-10-21 15:55:30', '2015-10-21 15:55:30'),
(78, '<iframe src="https://player.vimeo.com/video/143152389" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Hoe je jouw advertenties richt gebruikers aan de hand van email adressen of telefoonnummers.', '', '', '', '', '', '', '', '', 2, 13, '2015-10-21 15:56:28', '2015-10-21 15:56:28'),
(79, '<iframe src="https://player.vimeo.com/video/143152397" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Hoe je vergelijkebare doelgroepen maakt', '', '', '', '', '', '', '', '', 2, 13, '2015-10-21 15:57:19', '2015-10-21 15:57:19'),
(80, '<iframe src="https://player.vimeo.com/video/143153612" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Waar vind ik een overzicht van de resultaten van mijn campagne', '', '', '', '', '', '', '', '', 3, 15, '2015-10-21 15:58:43', '2015-10-21 15:58:43'),
(81, '<iframe src="https://player.vimeo.com/video/143153613" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Hoe achterhaal ik de resultaten van mijn campange (Advertentie set)', '', '', '', '', '', '', '', '', 3, 15, '2015-10-21 16:01:02', '2015-10-21 16:01:02'),
(82, '<iframe src="https://player.vimeo.com/video/143153611" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Hoe achterhaal ik de resultaten van mijn campange (Advertentie)', '', '', '', '', '', '', '', '', 3, 15, '2015-10-21 16:01:49', '2015-10-21 16:01:49'),
(83, '<iframe src="https://player.vimeo.com/video/146121799" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. De Termen Nieuwsoverzicht En Tijdlijn Wat Betekenen Ze Precies', '', '', '', '', '', '', '', '', 3, 16, '2015-11-18 15:03:00', '2015-11-18 15:03:00'),
(84, '<iframe src="https://player.vimeo.com/video/146123126" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Welke 3 (hoofd)factoren invloed hebben op het bereik van berichten.', '', '', '', '', '', '', '', '', 3, 16, '2015-11-18 15:07:30', '2015-11-18 15:07:30'),
(85, '<iframe src="https://player.vimeo.com/video/146123522" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Op welke 3 manieren je Facebook gebruikers kunt bereiken', '', '', '', '', '', '', '', '', 3, 16, '2015-11-18 15:09:58', '2015-11-18 15:09:58'),
(86, '<iframe src="https://player.vimeo.com/video/146123820" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Wat is een tijdlijnactie', '', '', '', '', '', '', '', '', 3, 16, '2015-11-18 15:12:05', '2015-11-18 15:12:05'),
(87, '<iframe src="https://player.vimeo.com/video/146124054" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '5. Hoe je maximaal profiteert van de 3 manieren van bereik.', '', '', '', '', '', '', '', '', 3, 16, '2015-11-18 15:14:20', '2015-11-18 15:14:20'),
(88, '<iframe src="https://player.vimeo.com/video/146124286" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '6. Wat Facebook zegt over tijdlijnacties', '', '', '', '', '', '', '', '', 3, 16, '2015-11-18 15:15:47', '2015-11-18 15:15:47'),
(89, '<iframe src="https://player.vimeo.com/video/146124482" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Wat je kunt bereiken met een tijdlijnactie', '', '', '', '', '', '', '', '', 3, 17, '2015-11-18 15:21:41', '2015-11-18 15:21:41'),
(90, '<iframe src="https://player.vimeo.com/video/146125220" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Regels wat mag wel en wat mag niet', '', '', '', '', '', '', '', '', 3, 17, '2015-11-18 15:24:30', '2015-11-18 15:24:30'),
(91, '<iframe src="https://player.vimeo.com/video/146125549" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. 3 regels waaraan je je moet houden bij het kiezen van een prijs', '', '', '', '', '', '', '', '', 3, 17, '2015-11-18 15:29:48', '2015-11-18 15:29:48'),
(92, '<iframe src="https://player.vimeo.com/video/146126249" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Hoe je de juiste looptijd voor je tijdlijnactie bepaalt.', '', '', '', '', '', '', '', '', 3, 17, '2015-11-18 15:32:08', '2015-11-18 15:32:08'),
(93, '<iframe src="https://player.vimeo.com/video/146126536" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Wat er in jouw tijdlijnactie moet staan', '', '', '', '', '', '', '', '', 3, 18, '2015-11-18 15:35:15', '2015-11-18 15:35:15'),
(94, '<iframe src="https://player.vimeo.com/video/146126957" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Hoe je voorkomt dat jouw tijdlijnactie wordt afgekeurd', 'Raster tool', 'http://www.digitusmarketing.nl/images/tools/Raster-1200x900.png', 'canva.com', 'http://www.canva.com', '', '', '', '', 3, 18, '2015-11-18 15:40:13', '2015-11-18 16:12:01'),
(95, '<iframe src="https://player.vimeo.com/video/146127561" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Hoe een afbeelding het bereik kan bevorderen', '', '', '', '', '', '', '', '', 3, 18, '2015-11-18 15:42:15', '2015-11-18 15:42:15'),
(96, '<iframe src="https://player.vimeo.com/video/146127793" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. 3 tips om nog meer uit jouw tijdlijnactie te halen', '', '', '', '', '', '', '', '', 3, 18, '2015-11-18 15:45:49', '2015-11-18 15:45:49'),
(97, '<iframe src="https://player.vimeo.com/video/146134342" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Hoe je jouw tijdlijnactie promoot op Facebook', '', '', '', '', '', '', '', '', 3, 19, '2015-11-18 16:33:55', '2015-11-18 16:33:55'),
(98, '<iframe src="https://player.vimeo.com/video/146134582" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Tijdlijnactie promoten met de ‘Bericht Promoten’ knop', '', '', '', '', '', '', '', '', 3, 19, '2015-11-18 16:35:28', '2015-11-18 16:35:28'),
(99, '<iframe src="https://player.vimeo.com/video/143137696" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '3. Advertentie account aanmaken en een betalings methode koppelen', '', '', '', '', '', '', '', '', 3, 19, '2015-11-18 16:38:44', '2015-11-18 16:38:44'),
(100, '<iframe src="https://player.vimeo.com/video/146138867" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '4. Tijdlijnactie promoten met de Facebook Power Editor', '', '', '', '', '', '', '', '', 3, 19, '2015-11-18 17:27:26', '2015-11-18 17:27:26'),
(101, '<iframe src="https://player.vimeo.com/video/146141898" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '1. Tips om de winnaar te selecteren', '', '', '', '', '', '', '', '', 3, 20, '2015-11-18 17:32:48', '2015-11-18 17:32:48'),
(102, '<iframe src="https://player.vimeo.com/video/146142573" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', NULL, '2. Wat er in het bericht moet staan waarin jij de winaar(s) bekendmaakt', '', '', '', '', '', '', '', '', 3, 20, '2015-11-18 17:34:08', '2015-11-18 17:34:08'),
(103, '', NULL, 'Zeven creatieve ideeën voor tijdlijnacties', 'Download pdf', 'http://www.digitusmarketing.nl/uploads/cursusbonus/Zeven-creatieve-ideeën-voor-tijdlijnacties.pdf', '', '', '', '', '', '', 3, 21, '2015-11-24 14:36:51', '2015-11-24 14:36:51');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinarforms`
--

CREATE TABLE `webinarforms` (
  `id` int(10) UNSIGNED NOT NULL,
  `form_u` varchar(250) NOT NULL,
  `form_id` varchar(250) NOT NULL,
  `form_action` varchar(250) NOT NULL,
  `form_token` varchar(250) NOT NULL,
  `form_field1` varchar(50) NOT NULL,
  `form_field2` varchar(50) NOT NULL,
  `form_field3` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinarforms`
--

INSERT INTO `webinarforms` (`id`, `form_u`, `form_id`, `form_action`, `form_token`, `form_field1`, `form_field2`, `form_field3`, `created_at`, `updated_at`) VALUES
(1, '4385a7e4ded2873d14cf34514', '1fecd3b68b', '//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=1fecd3b68b&c=?', 'b_4385a7e4ded2873d14cf34514_1fecd3b68b', 'MERGE1', 'MERGE2', 'MERGE0', '2015-11-24 10:35:05', '0000-00-00 00:00:00'),
(2, '4385a7e4ded2873d14cf34514', 'd7f557edf4', '//digitusmarketing.us7.list-manage.com/subscribe/post-json?id=d7f557edf4&c=?', 'b_4385a7e4ded2873d14cf34514_d7f557edf4', 'MERGE1', 'MERGE2', 'MERGE0', '2015-12-24 13:26:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinarherhalingen`
--

CREATE TABLE `webinarherhalingen` (
  `id` int(10) UNSIGNED NOT NULL,
  `vimeo_link` varchar(500) NOT NULL,
  `herhaling_start_tijd` datetime NOT NULL,
  `herhaling_eind_tijd` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinarherhalingen`
--

INSERT INTO `webinarherhalingen` (`id`, `vimeo_link`, `herhaling_start_tijd`, `herhaling_eind_tijd`, `created_at`, `updated_at`) VALUES
(1, '<iframe id="iframe" src="https://player.vimeo.com/video/148720868" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', '2015-12-12 00:00:00', '2015-12-19 23:59:59', '2015-12-12 14:41:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinarkalenders`
--

CREATE TABLE `webinarkalenders` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` text NOT NULL,
  `content` text NOT NULL,
  `kalender_titel` text NOT NULL,
  `ical` varchar(250) NOT NULL,
  `outlook` varchar(250) NOT NULL,
  `google_calendar` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinarkalenders`
--

INSERT INTO `webinarkalenders` (`id`, `titel`, `content`, `kalender_titel`, `ical`, `outlook`, `google_calendar`, `created_at`, `updated_at`) VALUES
(1, 'Aanmelding succesvol!\r\n', 'Jouw plekje is gereserveerd! :)', 'Voeg dit exclusieve online event toe aan jouw agenda en zorg er voor dat je het niet mist!', 'http://www.digitusmarketing.nl/uploads/webinar/Live-Vraag-en-Antwoord-Webinar-Digitus-Marketing.ics', 'http://www.digitusmarketing.nl/uploads/webinar/Live-Vraag-en-Antwoord-Webinar-Digitus-Marketing.ics', 'https://www.google.com/calendar/event?action=TEMPLATE&text=Live+Vraag+en+Antwoord+Webinar+Digitus+Marketing&dates=20151204T110000Z/20151204T130000Z&details=Wij+verheugen+ons+al+op+het+online+event!%0A+%0AHoud+je+mailbox+in+de+gaten,+we+sturen+je+tijdig+een+email+met+daarin+alle+informatie+dat+nodig+is+om+het+online+event+bij+te+wonen.%0A+%0AWe+zien+je+snel!%0A+%0A-+Parsifal+Tritsch+en+Rogier+van+Voorst&location=http://www.digitusmarketing.nl/knettergek/webinar', '2015-11-24 12:49:57', '0000-00-00 00:00:00'),
(2, 'Jouw aanmelding voor de masterclass is succesvol ontvangen! ', 'Tof dat je wil investeren in Facebook om jouw business te laten groeien. Zorg ervoor dat je pen en papier bij de hand hebt tijdens de masterclass, want we gaan jou laten zien hoe jij in contact komt met jouw potentiële klanten, je mailinglijst uitbreidt, en je naamsbekendheid een enorme boost geeft!', 'Voeg hieronder de masterclass toe aan je agenda, zodat je hem zeker niet mist!', 'http://www.digitusmarketing.nl/uploads/webinar/Live-Vraag-en-Antwoord-Webinar-Digitus-Marketing.ics', 'http://www.digitusmarketing.nl/uploads/webinar/Live-Vraag-en-Antwoord-Webinar-Digitus-Marketing.ics', 'https://www.google.com/calendar/event?action=TEMPLATE&text=Live+Masterclass+Facebook+Advertentie+Geheimen&dates=20160119T090000Z/20160119T110000Z&details=Wij+verheugen+ons+al+op+de+live+masterclass!%0A+%0AHoud+je+mailbox+in+de+gaten,+we+sturen+je+tijdig+een+email+met+daarin+alle+informatie+dat+nodig+is+om+de+masterclass+bij+te+wonen.%0A+%0AWe+zien+je+snel!%0A+%0A-+Parsifal+Tritsch+en+Rogier+van+Voorst&location=http://www.digitusmarketing.nl/fb-geheimen-live/live', '2015-12-30 13:11:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinarrecensies`
--

CREATE TABLE `webinarrecensies` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinarrecensies`
--

INSERT INTO `webinarrecensies` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'http://www.digitusmarketing.nl/uploads/webinar/recensies/Webinar-Recensie-Annelene.png', '2015-11-24 14:56:15', '0000-00-00 00:00:00'),
(2, 'http://www.digitusmarketing.nl/uploads/webinar/recensies/Webinar-Recensie-Katinka.png', '2015-11-24 14:56:31', '0000-00-00 00:00:00'),
(3, 'http://www.digitusmarketing.nl/uploads/webinar/recensies/Webinar-Recensie-Marielle.png', '2015-11-24 14:56:44', '0000-00-00 00:00:00'),
(4, 'http://www.digitusmarketing.nl/uploads/webinar/recensies/Webinar-Recensie-Marloes.png', '2015-11-24 14:56:58', '0000-00-00 00:00:00'),
(5, 'http://www.digitusmarketing.nl/uploads/webinar/recensies/aris-jan.jpg', '2015-12-24 15:51:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinars`
--

CREATE TABLE `webinars` (
  `id` int(10) UNSIGNED NOT NULL,
  `titel` text NOT NULL,
  `slogan` text NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ogimage` varchar(250) NOT NULL,
  `welkom_titel` text NOT NULL,
  `welkomst_tekst` text,
  `youtube_live_url` varchar(250) NOT NULL,
  `chat_titel` text NOT NULL,
  `chat_tekst` text NOT NULL,
  `chat_url` varchar(250) NOT NULL,
  `host1_u_id` int(10) UNSIGNED NOT NULL,
  `host2_u_id` int(10) UNSIGNED NOT NULL,
  `aanmeld_header_titel` text,
  `aanmeld_punt` text,
  `aanmeld_punt1` text,
  `aanmeld_punt2` text,
  `aanmeld_punt3` text,
  `aanmeld_punt4` text,
  `aanmeld_punt5` text,
  `aanmeld_punt6` text,
  `aanmeld_punt7` text,
  `aanmeld_punt8` text,
  `aanmeld_punt9` text,
  `aanmeld_punt10` text,
  `aanmeld_footer` text,
  `webinar_start_tijd` datetime NOT NULL,
  `webinar_eind_tijd` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinars`
--

INSERT INTO `webinars` (`id`, `titel`, `slogan`, `slug`, `ogimage`, `welkom_titel`, `welkomst_tekst`, `youtube_live_url`, `chat_titel`, `chat_tekst`, `chat_url`, `host1_u_id`, `host2_u_id`, `aanmeld_header_titel`, `aanmeld_punt`, `aanmeld_punt1`, `aanmeld_punt2`, `aanmeld_punt3`, `aanmeld_punt4`, `aanmeld_punt5`, `aanmeld_punt6`, `aanmeld_punt7`, `aanmeld_punt8`, `aanmeld_punt9`, `aanmeld_punt10`, `aanmeld_footer`, `webinar_start_tijd`, `webinar_eind_tijd`, `created_at`, `updated_at`) VALUES
(1, 'De Theorie Achter Het Bereik Op Facebook', 'Hoe Je Vanaf Nú Keer Op Keer Meer Mensen Bereikt Dan Je Ooit Gedaan Hebt', 'superboosts-222', '', 'Welkom bij ons webinar', NULL, 'https://www.youtube.com/embed/RRxGXOCbsXk?modestbranding=1&showinfo=0', 'Chat', '', 'https://tlk.io/digitusmarketing', 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-10-24 12:00:00', '2015-10-24 13:00:00', '2015-11-12 20:28:18', '0000-00-00 00:00:00'),
(2, 'Exclusief Facebook Marketing Webinar', 'Voor traininers, coaches en therapeuten', 'exclusief-facebook-marketing-webinar-222', '', '', NULL, 'https://www.youtube.com/embed/RRxGXOCbsXk?showinfo=0', '', '', 'https://tlk.io/digitusmarketing', 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-10-21 19:00:00', '2015-10-21 20:00:00', '2015-11-23 16:19:46', '0000-00-00 00:00:00'),
(3, 'Live Vraag & Antwoord Webinar ', 'Krijg live antwoord op al jouw vragen over omzet genereren via Facebook.', 'knettergek', '/uploads/webinar/ogfoto/Knettergek-share-afbeelding.png', '', NULL, 'https://www.youtube.com/embed/RRxGXOCbsXk?showinfo=0', '', '', 'https://tlk.io/knettergek', 2, 3, 'Wij zijn zo knettergek dat we tijdens onze vakantie het live “Vraag & Antwoord Webinar” organiseren om al jouw vragen te beantwoorden specifiek gericht op jouw situatie!', 'Deze vragen gaan we onder andere behandelen:', 'Wat is de meest gemaakte (fatale) fout bij het maken van een campagne?', 'Hoe achterhaal ik hoeveel omzet mijn campagne oplevert?', 'Hoe bereik/maak ik een doelgroep die vergelijkbaar is met mijn huidige klanten?', 'Hoe bereik ik mensen die interesse hebben getoond door mijn website te bezoeken maar nog niet over zijn gegaan tot aankoop?', 'Hoe kan ik mijn doelgroep het best onderzoeken en bepalen?', 'Hoe richt ik advertenties op fans/klanten van mijn concurrent?', 'Ik heb een lijst van e-mail adressen en/of telefoonnummers, hoe bereik ik deze mensen via Facebook?', NULL, NULL, NULL, 'Dit webinar wordt LIVE gehouden vanuit onze vakantiebestemming, tijdens dit webinar geven wij antwoord op al jouw vragen over Facebook Marketing. <b>Dus zorg dat je erbij bent!</b> (Dit webinar wordt opgenomen)', '2015-12-29 11:50:00', '2015-12-29 18:00:00', '2015-11-24 09:26:36', '0000-00-00 00:00:00'),
(4, 'Live Masterclass', '\nHoe De Meest Succesvolle Ondernemers Facebook Inzetten Als Marketing Machine', 'fb-geheimen-live', '/uploads/webinar/ogfoto/Knettergek-share-afbeelding.png', '', NULL, 'https://www.youtube.com/embed/RRxGXOCbsXk?showinfo=0', '', '', 'https://tlk.io/knettergek', 2, 3, 'Tijdens deze masterclass ontdek je hoe jij meer klanten en omzet uit Facebook haalt door deze geheimen eenvoudig in de praktijk te brengen!', 'Tijdens de Online Masterclass ontdek je:', 'Welke strategie wij voor onze klanten gebruiken om hun omzet te vermenigvuldigen', 'Hoe jij advertenties maakt die 10x meer klanten opleveren!', 'Twee simpele doelgroep technieken waar 99% van de ondernemers niet van weet.', 'Hoe jij met elke lancering meer winst genereert dan de vorige!', 'Hoe jij 5x meer uit jouw advertentie budget haalt en 10x meer resultaat behaalt dan jouw concurrenten.', 'Hoe jij jouw bereik en fans doorlopend boost (zonder dat je je hier mee bezig houdt).', 'Waarom er nog steeds ‘ondernemers’ zijn die denken dat Facebook niet werkt.', NULL, NULL, NULL, 'Tijdens de Online Masterclass ontdek je waarom deze geheime technieken zo waardevol en onmisbaar zijn, <b>en hoe wij jou gaan helpen om deze 7 technieken binnen 14 dagen, stap voor stap, in de praktijk te brengen</b> (met 100% focus op meer klanten en omzet) en jouw business naar een compleet nieuw niveau brengt!', '2016-01-19 10:00:00', '2016-01-19 12:00:00', '2015-11-24 09:26:36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinar_webinarform`
--

CREATE TABLE `webinar_webinarform` (
  `id` int(10) UNSIGNED NOT NULL,
  `webinar_id` int(10) UNSIGNED NOT NULL,
  `webinarform_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinar_webinarform`
--

INSERT INTO `webinar_webinarform` (`id`, `webinar_id`, `webinarform_id`) VALUES
(1, 3, 1),
(2, 4, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinar_webinarherhaling`
--

CREATE TABLE `webinar_webinarherhaling` (
  `id` int(10) UNSIGNED NOT NULL,
  `webinar_id` int(10) UNSIGNED NOT NULL,
  `webinarherhaling_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinar_webinarherhaling`
--

INSERT INTO `webinar_webinarherhaling` (`id`, `webinar_id`, `webinarherhaling_id`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinar_webinarkalender`
--

CREATE TABLE `webinar_webinarkalender` (
  `id` int(10) UNSIGNED NOT NULL,
  `webinar_id` int(10) UNSIGNED NOT NULL,
  `webinarkalender_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinar_webinarkalender`
--

INSERT INTO `webinar_webinarkalender` (`id`, `webinar_id`, `webinarkalender_id`) VALUES
(1, 3, 1),
(2, 4, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `webinar_webinarrecensie`
--

CREATE TABLE `webinar_webinarrecensie` (
  `id` int(10) UNSIGNED NOT NULL,
  `webinar_id` int(10) UNSIGNED NOT NULL,
  `webinarrecensie_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `webinar_webinarrecensie`
--

INSERT INTO `webinar_webinarrecensie` (`id`, `webinar_id`, `webinarrecensie_id`) VALUES
(1, 3, 1),
(2, 3, 2),
(3, 3, 3),
(4, 3, 4),
(5, 4, 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `attendee_webinar`
--
ALTER TABLE `attendee_webinar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `attendee_webinar_webinar_id_foreign` (`webinar_id`) USING BTREE,
  ADD KEY `attendee_webinar_attendee_id_foreign` (`attendee_id`) USING BTREE;

--
-- Indexen voor tabel `bedrijfsgegevens`
--
ALTER TABLE `bedrijfsgegevens`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `benodigdheden`
--
ALTER TABLE `benodigdheden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `benodigdheden_sportschool_id_foreign` (`sportschool_id`);

--
-- Indexen voor tabel `bestelpaginas`
--
ALTER TABLE `bestelpaginas`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `bestelpagina_product`
--
ALTER TABLE `bestelpagina_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_bestelpagina_product_id_foreign` (`product_id`) USING BTREE,
  ADD KEY `product_bestelpagina_bestelpagina_id_foreign` (`bestelpagina_id`) USING BTREE;

--
-- Indexen voor tabel `caseklant_zaak`
--
ALTER TABLE `caseklant_zaak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `caseklant_zaak_caseklant_id_foreign` (`caseklant_id`) USING BTREE,
  ADD KEY `caseklant_zaak_zaak_id_foreign` (`zaak_id`) USING BTREE;

--
-- Indexen voor tabel `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cases_categorie_id_foreign` (`categorie_id`),
  ADD KEY `cases_user_id_foreign` (`user_id`);

--
-- Indexen voor tabel `case_klanten`
--
ALTER TABLE `case_klanten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `categorieen`
--
ALTER TABLE `categorieen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cursussen`
--
ALTER TABLE `cursussen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `cursus_user`
--
ALTER TABLE `cursus_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursus_user_cursus_id_foreign` (`cursus_id`),
  ADD KEY `cursus_user_user_id_foreign` (`user_id`);

--
-- Indexen voor tabel `cursus_video`
--
ALTER TABLE `cursus_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursus_video_cursus_id_foreign` (`cursus_id`),
  ADD KEY `cursus_video_video_id_foreign` (`video_id`);

--
-- Indexen voor tabel `diensten`
--
ALTER TABLE `diensten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexen voor tabel `hoofdstukken`
--
ALTER TABLE `hoofdstukken`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursus_id` (`cursus_id`);

--
-- Indexen voor tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `module_product`
--
ALTER TABLE `module_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_module_product_id_foreign` (`product_id`) USING BTREE,
  ADD KEY `product_module_module_id_foreign` (`module_id`) USING BTREE;

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_categorie_id_foreign` (`categorie_id`);

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `productrecensies`
--
ALTER TABLE `productrecensies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `productrecensie_salespage`
--
ALTER TABLE `productrecensie_salespage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productrecensie_salespage_productrecensie_id_foreign` (`productrecensie_id`) USING BTREE,
  ADD KEY `productrecensie_salespage_salespage_id_foreign` (`salespage_id`) USING BTREE;

--
-- Indexen voor tabel `product_salespage`
--
ALTER TABLE `product_salespage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_salespage_product_id_foreign` (`product_id`) USING BTREE,
  ADD KEY `product_salespage_salespage_id_foreign` (`salespage_id`) USING BTREE;

--
-- Indexen voor tabel `product_webinar`
--
ALTER TABLE `product_webinar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webinar_product_product_id_foreign` (`product_id`) USING BTREE,
  ADD KEY `webinar_product_webinar_id_foreign` (`webinar_id`) USING BTREE;

--
-- Indexen voor tabel `recensies`
--
ALTER TABLE `recensies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `salespages`
--
ALTER TABLE `salespages`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `sportscholen`
--
ALTER TABLE `sportscholen`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `sportscholen_user_id_foreign` (`user_id`) USING BTREE;

--
-- Indexen voor tabel `trainingen`
--
ALTER TABLE `trainingen`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_benodigd_id_foreign` (`benodigd_id`),
  ADD KEY `users_plan_id_foreign` (`plan_id`);

--
-- Indexen voor tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_plan_id_foreign` (`plan_id`),
  ADD KEY `videos_hoofdstuk_id_foreign` (`hoofdstuk_id`) USING BTREE;

--
-- Indexen voor tabel `webinarforms`
--
ALTER TABLE `webinarforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexen voor tabel `webinarherhalingen`
--
ALTER TABLE `webinarherhalingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `webinarkalenders`
--
ALTER TABLE `webinarkalenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `webinarrecensies`
--
ALTER TABLE `webinarrecensies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `webinars`
--
ALTER TABLE `webinars`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `webinar_webinarform`
--
ALTER TABLE `webinar_webinarform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webinar_webinarform_webinar_id_foreign` (`webinar_id`) USING BTREE,
  ADD KEY `webinar_webinarform_webinarform_id_foreign` (`webinarform_id`) USING BTREE;

--
-- Indexen voor tabel `webinar_webinarherhaling`
--
ALTER TABLE `webinar_webinarherhaling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webinar_id` (`webinar_id`),
  ADD KEY `webinarherhaling_id` (`webinarherhaling_id`);

--
-- Indexen voor tabel `webinar_webinarkalender`
--
ALTER TABLE `webinar_webinarkalender`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webinar_webinarkalender_webinar_id_foreign` (`webinar_id`) USING BTREE,
  ADD KEY `webinar_webinarkalender_webinarkalender_id_foreign` (`webinarkalender_id`) USING BTREE;

--
-- Indexen voor tabel `webinar_webinarrecensie`
--
ALTER TABLE `webinar_webinarrecensie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `webinar_webinarrecensie_webinar_id_foreign` (`webinar_id`) USING BTREE,
  ADD KEY `webinar_webinarrecensie_webinarrecensie_id_foreign` (`webinarrecensie_id`) USING BTREE;

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `attendees`
--
ALTER TABLE `attendees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;
--
-- AUTO_INCREMENT voor een tabel `attendee_webinar`
--
ALTER TABLE `attendee_webinar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT voor een tabel `bedrijfsgegevens`
--
ALTER TABLE `bedrijfsgegevens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT voor een tabel `benodigdheden`
--
ALTER TABLE `benodigdheden`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT voor een tabel `bestelpaginas`
--
ALTER TABLE `bestelpaginas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `bestelpagina_product`
--
ALTER TABLE `bestelpagina_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `caseklant_zaak`
--
ALTER TABLE `caseklant_zaak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `case_klanten`
--
ALTER TABLE `case_klanten`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `categorieen`
--
ALTER TABLE `categorieen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `cursussen`
--
ALTER TABLE `cursussen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `cursus_user`
--
ALTER TABLE `cursus_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT voor een tabel `cursus_video`
--
ALTER TABLE `cursus_video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `diensten`
--
ALTER TABLE `diensten`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `hoofdstukken`
--
ALTER TABLE `hoofdstukken`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT voor een tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;
--
-- AUTO_INCREMENT voor een tabel `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `module_product`
--
ALTER TABLE `module_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT voor een tabel `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `productrecensies`
--
ALTER TABLE `productrecensies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `productrecensie_salespage`
--
ALTER TABLE `productrecensie_salespage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `product_salespage`
--
ALTER TABLE `product_salespage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `product_webinar`
--
ALTER TABLE `product_webinar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `recensies`
--
ALTER TABLE `recensies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `salespages`
--
ALTER TABLE `salespages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `sportscholen`
--
ALTER TABLE `sportscholen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `trainingen`
--
ALTER TABLE `trainingen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
--
-- AUTO_INCREMENT voor een tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT voor een tabel `webinarforms`
--
ALTER TABLE `webinarforms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `webinarherhalingen`
--
ALTER TABLE `webinarherhalingen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `webinarkalenders`
--
ALTER TABLE `webinarkalenders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `webinarrecensies`
--
ALTER TABLE `webinarrecensies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT voor een tabel `webinars`
--
ALTER TABLE `webinars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `webinar_webinarform`
--
ALTER TABLE `webinar_webinarform`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `webinar_webinarherhaling`
--
ALTER TABLE `webinar_webinarherhaling`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `webinar_webinarkalender`
--
ALTER TABLE `webinar_webinarkalender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT voor een tabel `webinar_webinarrecensie`
--
ALTER TABLE `webinar_webinarrecensie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `attendee_webinar`
--
ALTER TABLE `attendee_webinar`
  ADD CONSTRAINT `attendee_webinar_ibfk_2` FOREIGN KEY (`webinar_id`) REFERENCES `webinars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attendee_webinar_ibfk_3` FOREIGN KEY (`attendee_id`) REFERENCES `attendees` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `bestelpagina_product`
--
ALTER TABLE `bestelpagina_product`
  ADD CONSTRAINT `bestelpagina_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `producten` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bestelpagina_product_ibfk_2` FOREIGN KEY (`bestelpagina_id`) REFERENCES `bestelpaginas` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `caseklant_zaak`
--
ALTER TABLE `caseklant_zaak`
  ADD CONSTRAINT `caseklant_zaak_ibfk_1` FOREIGN KEY (`caseklant_id`) REFERENCES `case_klanten` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `caseklant_zaak_ibfk_2` FOREIGN KEY (`zaak_id`) REFERENCES `cases` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `hoofdstukken`
--
ALTER TABLE `hoofdstukken`
  ADD CONSTRAINT `hoofdstukken_cursus_id_foreign` FOREIGN KEY (`cursus_id`) REFERENCES `cursussen` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `module_product`
--
ALTER TABLE `module_product`
  ADD CONSTRAINT `module_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `producten` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `module_product_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `productrecensie_salespage`
--
ALTER TABLE `productrecensie_salespage`
  ADD CONSTRAINT `productrecensie_salespage_ibfk_1` FOREIGN KEY (`salespage_id`) REFERENCES `salespages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productrecensie_salespage_ibfk_2` FOREIGN KEY (`productrecensie_id`) REFERENCES `productrecensies` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `product_salespage`
--
ALTER TABLE `product_salespage`
  ADD CONSTRAINT `product_salespage_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `producten` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_salespage_ibfk_2` FOREIGN KEY (`salespage_id`) REFERENCES `salespages` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `product_webinar`
--
ALTER TABLE `product_webinar`
  ADD CONSTRAINT `product_webinar_ibfk_1` FOREIGN KEY (`webinar_id`) REFERENCES `webinars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_webinar_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `producten` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`hoofdstuk_id`) REFERENCES `hoofdstukken` (`id`);

--
-- Beperkingen voor tabel `webinar_webinarform`
--
ALTER TABLE `webinar_webinarform`
  ADD CONSTRAINT `webinar_webinarform_ibfk_1` FOREIGN KEY (`webinar_id`) REFERENCES `webinars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `webinar_webinarform_ibfk_2` FOREIGN KEY (`webinarform_id`) REFERENCES `webinarforms` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `webinar_webinarherhaling`
--
ALTER TABLE `webinar_webinarherhaling`
  ADD CONSTRAINT `webinar_webinarherhaling_ibfk_2` FOREIGN KEY (`webinarherhaling_id`) REFERENCES `webinarherhalingen` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `webinar_webinarherhaling_ibfk_1` FOREIGN KEY (`webinar_id`) REFERENCES `webinars` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `webinar_webinarkalender`
--
ALTER TABLE `webinar_webinarkalender`
  ADD CONSTRAINT `webinar_webinarkalender_ibfk_1` FOREIGN KEY (`webinar_id`) REFERENCES `webinars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `webinar_webinarkalender_ibfk_2` FOREIGN KEY (`webinarkalender_id`) REFERENCES `webinarkalenders` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `webinar_webinarrecensie`
--
ALTER TABLE `webinar_webinarrecensie`
  ADD CONSTRAINT `webinar_webinarrecensie_ibfk_1` FOREIGN KEY (`webinar_id`) REFERENCES `webinars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `webinar_webinarrecensie_ibfk_2` FOREIGN KEY (`webinarrecensie_id`) REFERENCES `webinarrecensies` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
