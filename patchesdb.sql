-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Wrz 2019, 21:21
-- Wersja serwera: 10.1.22-MariaDB
-- Wersja PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `patchesdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adminstable`
--

CREATE TABLE `adminstable` (
  `idAdminsTable` int(11) NOT NULL,
  `loginAdmin` varchar(200) NOT NULL,
  `passAdmin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `adminstable`
--

INSERT INTO `adminstable` (`idAdminsTable`, `loginAdmin`, `passAdmin`) VALUES
(1, 'patryk', '$2y$10$xImh5ilB4a7fg6Nni9kTzOUr8NZtMpBrZ70Wih8Y/tCsG8cZ5AbKK'),
(43, 'OpTo', '$2y$10$vwVdk.ABlU//2zfyhyPRF.rUaMx/tS8tsPhW0yHhxo1LTZ6arTNi.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `building`
--

CREATE TABLE `building` (
  `idBuilding` int(11) NOT NULL,
  `BuildingName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `building`
--

INSERT INTO `building` (`idBuilding`, `BuildingName`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `commonpart`
--

CREATE TABLE `commonpart` (
  `idCommonPart` int(11) NOT NULL,
  `Company` varchar(200) DEFAULT NULL,
  `Product` varchar(200) DEFAULT NULL,
  `VLAN` varchar(200) DEFAULT NULL,
  `Patchcord` varchar(200) DEFAULT NULL,
  `ClientSocketsNo` varchar(200) DEFAULT NULL,
  `RoomNo` varchar(200) DEFAULT NULL,
  `ACL` varchar(45) DEFAULT NULL,
  `Description` varchar(10000) DEFAULT NULL,
  `Action` varchar(10000) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `commonpart`
--

INSERT INTO `commonpart` (`idCommonPart`, `Company`, `Product`, `VLAN`, `Patchcord`, `ClientSocketsNo`, `RoomNo`, `ACL`, `Description`, `Action`) VALUES
(1, '24 Group  Sp. z o.o.', 'kros elektryczny', '217', '3602', '274', '0', '0', '0', '0'),
(2, 'Blastlab', 'kros elektryczny', '1', '15', '0', '0', '0', '0', '0'),
(3, 'Master Telecom', 'kros elektryczny', '15', '1499', '#DODATEK?', '0', '0', '0', ''),
(4, 'Master Telecom', 'kros elektryczny', '16', '1767', '0', '0', '0', '0', ''),
(5, 'Microsity', 'kros elektryczny', '80', '3638', '0', '0', '0', 'poÅ›rednio przechodzi przez router', ''),
(6, 'ap', 'b', 'c', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `devices`
--

CREATE TABLE `devices` (
  `idDevices` int(11) NOT NULL,
  `Room` varchar(45) DEFAULT NULL,
  `Wardrobe` varchar(45) DEFAULT NULL,
  `U` varchar(45) DEFAULT NULL,
  `Model` varchar(45) DEFAULT NULL,
  `Signature` varchar(45) NOT NULL,
  `IP` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `devices`
--

INSERT INTO `devices` (`idDevices`, `Room`, `Wardrobe`, `U`, `Model`, `Signature`, `IP`) VALUES
(1, '5.18', 'KD4.0', '33', 'DES 3052', 'PCPD6030', '192.168.102.220'),
(2, '5.18', 'KD4.0', '13', 'Panel', 'panel 9', '0'),
(3, '2.49', 'B3', '0', 'DES 3028', 'Nestor05', '192.168.102.95'),
(4, '2.49', 'B2', '0', 'serwer Dell PowerEdge', '8231', '91.221.27.132'),
(5, '2.49', 'B1', '29', 'DGS 3120 24TC', 'PCPD6017', '192.168.102.158'),
(9, '2.49', 'C8', '30', 'DGS 3120 24TC', '6000', '0'),
(12, '2.49', 'C8', '30', 'DGS 3120 24TC', '4644', '0'),
(13, '2.49', 'B4', '21', 'HP Proliant DL360 G7', '8155', '0'),
(14, '2.49', 'C4', '29', 'DGS 3120 24TC', 'PCPD6141', '192.168.102.156'),
(15, '2.49', 'C3', '17', 'Supermicro', '8304', '0'),
(16, '5.18', 'C4', '29', 'DGS 3120 24TC', 'PCPD6141', '192.168.102.156'),
(17, '2.49', 'B3', '34', 'DGS 3120 24TC', 'PCPD6151', 'jakis'),
(18, '2.49', 'C8', '30', 'DGS 3120 24TC', '6000', 'nn'),
(19, 'KD9', 'KD9', '30', 'DES 3028', '4644', '192.168.102.200'),
(20, '', 'KD4.0', '', 'Panel1111', '', '0'),
(21, '5.18', 'KD4.0', '', 'Panel', '', '0'),
(22, '', 'B4', '21', 'HP Proliant DL360 G7', '', '0'),
(23, '', 'B2', '0', 'serwer Dell PowerEdge', '', '91.221.27.132'),
(24, '', 'C8', '30', 'DGS 3120 24TC', '', '0'),
(26, '', 'C8', '30', '', '6000', 'nn'),
(28, '2.49', 'B4', '21', 'HP Proliant DL360 G7', '8155', '132323'),
(29, '5.18', 'KD4.0', '13', 'Panel', 'panel9', '0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failedadminslogins`
--

CREATE TABLE `failedadminslogins` (
  `idFailedAdminsLogins` int(11) NOT NULL,
  `executedQuerys` varchar(2000) NOT NULL,
  `IPAddress` varchar(45) NOT NULL,
  `hourdate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `failedadminslogins`
--

INSERT INTO `failedadminslogins` (`idFailedAdminsLogins`, `executedQuerys`, `IPAddress`, `hourdate`) VALUES
(1, 'efdkfjkd`', '::1', ''),
(2, 'patryk', '::1', ''),
(3, 'patryk', '::1', ''),
(4, 'patryk', '::1', '12:01:50 23.10.2017');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `faileduserslogins`
--

CREATE TABLE `faileduserslogins` (
  `idFailedUsersLogins` int(11) NOT NULL,
  `executedQuerys` varchar(2000) NOT NULL,
  `IPAddress` varchar(45) NOT NULL,
  `hourdate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `faileduserslogins`
--

INSERT INTO `faileduserslogins` (`idFailedUsersLogins`, `executedQuerys`, `IPAddress`, `hourdate`) VALUES
(1, 'hfhdjdk', '91.221.221.93', ''),
(2, 'jakis1', '192.168.0.122', '12.11.2017 '),
(3, 'awe', '10.111.12.1', '03.11.2017 ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `firstpart`
--

CREATE TABLE `firstpart` (
  `idFirstPart` int(11) NOT NULL,
  `Port1` varchar(45) DEFAULT NULL,
  `Building_idBuilding` int(11) NOT NULL,
  `Devices_idDevices` int(11) NOT NULL,
  `CommonPart_idCommonPart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `firstpart`
--

INSERT INTO `firstpart` (`idFirstPart`, `Port1`, `Building_idBuilding`, `Devices_idDevices`, `CommonPart_idCommonPart`) VALUES
(1, '48', 1, 1, 1),
(2, '21', 1, 3, 2),
(3, '3', 3, 5, 3),
(4, '14', 3, 5, 4),
(5, '9', 1, 9, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logsofadmins`
--

CREATE TABLE `logsofadmins` (
  `idLogsOfAdmins` int(11) NOT NULL,
  `executedQuerys` varchar(2000) NOT NULL,
  `IPAddress` varchar(45) NOT NULL,
  `hourdate` varchar(45) NOT NULL,
  `AdminsTable_idAdminsLogs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `logsofadmins`
--

INSERT INTO `logsofadmins` (`idLogsOfAdmins`, `executedQuerys`, `IPAddress`, `hourdate`, `AdminsTable_idAdminsLogs`) VALUES
(21, ': logowanie', '::1', '', 1),
(22, ': wylogowanie', '::1', '', 1),
(23, ': logowanie', '::1', '', 1),
(24, ': wylogowanie', '::1', '', 1),
(27, ': logowanie', '::1', '', 1),
(28, ': wylogowanie', '::1', '', 1),
(29, ': logowanie', '::1', '', 1),
(30, ': wylogowanie', '::1', '', 1),
(31, ': logowanie', '::1', '', 1),
(32, ': wylogowanie', '::1', '', 1),
(33, ': logowanie', '::1', '', 1),
(34, ': wylogowanie', '::1', '', 1),
(35, ': logowanie', '::1', '', 1),
(36, ': wylogowanie', '::1', '', 1),
(37, ': logowanie', '::1', '', 1),
(38, ': wylogowanie', '::1', '', 1),
(39, ': logowanie', '::1', '', 1),
(40, ': wylogowanie', '::1', '', 1),
(41, ': logowanie', '::1', '', 1),
(42, ': wylogowanie', '::1', '', 1),
(43, ': logowanie', '::1', '', 1),
(44, ': wylogowanie', '::1', '', 1),
(45, ': logowanie', '::1', '', 1),
(46, ': wylogowanie', '::1', '', 1),
(47, ': logowanie', '::1', '', 1),
(48, ': wylogowanie', '::1', '', 1),
(49, ': logowanie', '::1', '', 1),
(50, ': wylogowanie', '::1', '', 1),
(51, ': logowanie', '::1', '', 1),
(52, ': wylogowanie', '::1', '', 1),
(53, ': logowanie', '::1', '', 1),
(54, ': wylogowanie', '::1', '', 1),
(55, ': logowanie', '::1', '', 1),
(56, ': wylogowanie', '::1', '', 1),
(57, ': logowanie', '::1', '', 1),
(58, ': wylogowanie', '::1', '', 1),
(59, ': logowanie', '::1', '', 1),
(60, ': wylogowanie', '::1', '', 1),
(61, ': logowanie', '::1', '', 1),
(62, ': wylogowanie', '::1', '', 1),
(63, ': logowanie', '::1', '', 1),
(64, ': wylogowanie', '::1', '', 1),
(65, ': logowanie', '::1', '', 1),
(66, ': wylogowanie', '::1', '', 1),
(67, ': logowanie', '::1', '', 1),
(68, ': wylogowanie', '::1', '', 1),
(69, ': logowanie', '::1', '', 1),
(70, ': wylogowanie', '::1', '', 1),
(71, ': logowanie', '::1', '', 1),
(72, ': wylogowanie', '::1', '', 1),
(73, ': logowanie', '::1', '', 1),
(74, ': wylogowanie', '::1', '', 1),
(75, ': logowanie', '::1', '', 1),
(76, ': wylogowanie', '::1', '', 1),
(77, ': logowanie', '::1', '', 1),
(78, ': wylogowanie', '::1', '', 1),
(79, ': logowanie', '::1', '', 1),
(80, ': wylogowanie', '::1', '', 1),
(81, ': logowanie', '::1', '', 1),
(82, ': wylogowanie', '::1', '', 1),
(83, ': logowanie', '::1', '', 1),
(84, ': wylogowanie', '::1', '', 1),
(85, ': logowanie', '::1', '', 1),
(86, ': wylogowanie', '::1', '', 1),
(87, ': logowanie', '::1', '', 1),
(88, ': wylogowanie', '::1', '', 1),
(89, ': logowanie', '::1', '', 1),
(90, ': wylogowanie', '::1', '', 1),
(91, ': logowanie', '::1', '', 1),
(92, '', '::1', '', 1),
(93, '', '::1', '', 1),
(94, ': dodanie administratora', '::1', '', 1),
(95, ': dodanie administratora admin987', '::1', '', 1),
(96, ': dodanie administratora admin1020', '::1', '', 1),
(97, ': wylogowanie', '::1', '', 1),
(102, ': logowanie', '::1', '', 1),
(106, ': dodanie administratora: admin10000', '::1', '', 1),
(108, ': usuniÄ™cie administratora: admin1020', '::1', '', 1),
(109, ': wylogowanie', '::1', '', 1),
(110, ': logowanie', '::1', '', 1),
(111, ': usuniÄ™cie administratora: admin987', '::1', '', 1),
(112, ': usuniÄ™cie administratora: administartorke', '::1', '', 1),
(113, ': edytowanie administratora o numerze id: 42', '::1', '', 1),
(114, ': edytowanie administratora o numerze id: 42', '::1', '', 1),
(115, ': wylogowanie', '::1', '', 1),
(123, ': logowanie', '::1', '', 1),
(124, ': usuniÄ™cie administratora: adminekOPTO', '::1', '', 1),
(125, ': usuniÄ™cie administratora: adminekOPTO', '::1', '', 1),
(126, ': usuniÄ™cie administratora: adminekOPTO', '::1', '', 1),
(127, ': usuniÄ™cie administratora: adminekOPTO', '::1', '', 1),
(128, ': edytowanie administratora o numerze id: 42', '::1', '', 1),
(129, ': wylogowanie', '::1', '', 1),
(132, ': logowanie', '::1', '', 1),
(133, ': usuniÄ™cie administratora: adminekOPTO', '::1', '', 1),
(134, ': usuniÄ™cie administratora: adminekOPTO', '::1', '', 1),
(135, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(136, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(137, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(138, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(139, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(140, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(141, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(142, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(143, ': usuniÄ™cie administratora: adminbistrator', '::1', '', 1),
(144, ': dodanie uÅ¼ytkownika: patryk', '::1', '', 1),
(145, ': wylogowanie', '::1', '', 1),
(146, ': logowanie', '::1', '', 1),
(147, ': dodanie uÅ¼ytkownika: drugi', '::1', '', 1),
(148, ': edytowanie uÅ¼ytkownik o numerze id: 2', '::1', '', 1),
(149, ': edytowanie uÅ¼ytkownika o numerze id: 2', '::1', '', 1),
(150, ': edytowanie uÅ¼ytkownika o numerze id: 2', '::1', '', 1),
(151, ': usuniÄ™cie uÅ¼ytkownika: OPto', '::1', '', 1),
(152, ': wylogowanie', '::1', '', 1),
(153, ': logowanie', '::1', '', 1),
(154, ': wylogowanie', '::1', '', 1),
(155, ': logowanie', '::1', '', 1),
(156, ': wylogowanie', '::1', '', 1),
(157, ': logowanie', '::1', '', 1),
(158, ': wylogowanie', '::1', '', 1),
(159, ': logowanie', '::1', '', 1),
(160, ': dodanie uÅ¼ytkownika: user2', '::1', '', 1),
(161, ': edytowanie uÅ¼ytkownika o numerze id: 2', '::1', '', 1),
(162, ': edytowanie uÅ¼ytkownika o numerze id: 2', '::1', '', 1),
(163, ': dodanie uÅ¼ytkownika: user3', '::1', '', 1),
(164, ': wylogowanie', '::1', '', 1),
(165, ': logowanie', '::1', '', 1),
(166, ': dodanie administratora: admin100', '::1', '', 1),
(167, ': edytowanie administratora o numerze id: 41', '::1', '', 1),
(168, ': usuniÄ™cie administratora: adminek123', '::1', '', 1),
(169, ': wylogowanie', '::1', '', 1),
(170, ': logowanie', '::1', '', 1),
(171, ': edytowanie administratora o numerze id: 39', '::1', '', 1),
(172, ': edytowanie uÅ¼ytkownika o numerze id: 3', '::1', '', 1),
(173, ': dodanie uÅ¼ytkownika: usfuluser', '::1', '', 1),
(174, ': dodanie administratora: admin1111', '::1', '', 1),
(175, ': edytowanie administratora o numerze id: 42', '::1', '', 1),
(176, ': dodanie urzÄ…dzenia: PCPD6017', '::1', '', 1),
(177, ': dodanie urzÄ…dzenia: PCPD6017', '::1', '', 1),
(178, ': wylogowanie', '::1', '', 1),
(179, ': logowanie', '::1', '', 1),
(180, ': logowanie', '::1', '', 1),
(181, ': wylogowanie', '::1', '', 1),
(182, ': logowanie', '::1', '', 1),
(183, ': dodanie urzÄ…dzenia: 6000', '::1', '', 1),
(184, ': dodanie urzÄ…dzenia: 6000', '::1', '', 1),
(185, ': dodanie urzÄ…dzenia: 6000', '::1', '', 1),
(186, ': dodanie urzÄ…dzenia: 6000', '::1', '', 1),
(187, ': dodanie urzÄ…dzenia: 6000', '::1', '', 1),
(188, ': dodanie urzÄ…dzenia: 6', '::1', '', 1),
(189, ': dodanie urzÄ…dzenia: 3', '::1', '', 1),
(190, ': edytowanie urzÄ…dzenia o numerze id: 777', '::1', '', 1),
(191, ': edytowanie urzÄ…dzenia o numerze id: 12', '::1', '', 1),
(192, ': wylogowanie', '::1', '', 1),
(193, ': logowanie', '::1', '', 1),
(194, ': usuniÄ™cie urzÄ…dzenia o numerze id: 11', '::1', '', 1),
(195, ': usuniÄ™cie urzÄ…dzenia o numerze id: 10', '::1', '', 1),
(196, ': usuniÄ™cie urzÄ…dzenia o numerze id: 6', '::1', '', 1),
(197, ': usuniÄ™cie urzÄ…dzenia o numerze id: 7', '::1', '', 1),
(198, ': usuniÄ™cie urzÄ…dzenia o numerze id: 8', '::1', '', 1),
(199, ': usuniÄ™cie urzÄ…dzenia o numerze id: 2', '::1', '', 1),
(200, ': usuniÄ™cie urzÄ…dzenia o numerze id: 2', '::1', '', 1),
(201, ': usuniÄ™cie urzÄ…dzenia o numerze id: 2', '::1', '', 1),
(202, ': wylogowanie', '::1', '', 1),
(203, ': logowanie', '::1', '', 1),
(204, ': edytowanie urzÄ…dzenia o numerze id: 1', '::1', '', 1),
(205, ': wylogowanie', '::1', '', 1),
(206, ': logowanie', '::1', '', 1),
(207, ': edytowanie budynek o numerze id: 3', '::1', '', 1),
(208, ': edytowanie budynek o numerze id: 3', '::1', '', 1),
(209, ': dodanie budynku: D', '::1', '', 1),
(210, ': wylogowanie', '::1', '', 1),
(211, ': logowanie', '::1', '', 1),
(212, ': wylogowanie', '::1', '', 1),
(213, ': logowanie', '::1', '', 1),
(214, ': wylogowanie', '::1', '', 1),
(215, ': logowanie', '::1', '', 1),
(216, ': wylogowanie', '::1', '', 1),
(217, ': logowanie', '::1', '', 1),
(218, ': dodanie polaczenia o numerze ID: 3', '::1', '', 1),
(219, ': dodanie poÅ‚Ä…czenia o numerze ID: 5', '::1', '', 1),
(220, ': wylogowanie', '::1', '', 1),
(221, ': logowanie', '::1', '', 1),
(222, ': dodanie poÅ‚Ä…czenia o numerze ID: 6', '::1', '', 1),
(223, ': dodanie poÅ‚Ä…czenia o numerze ID: 7', '::1', '', 1),
(224, ': wylogowanie', '::1', '', 1),
(225, ': logowanie', '::1', '', 1),
(226, ': wylogowanie', '::1', '', 1),
(227, ': logowanie', '::1', '', 1),
(228, ': wylogowanie', '::1', '', 1),
(229, ': logowanie', '::1', '', 1),
(230, ': wylogowanie', '::1', '', 1),
(231, ': logowanie', '::1', '', 1),
(232, ': wylogowanie', '::1', '', 1),
(233, ': logowanie', '::1', '', 1),
(234, ': wylogowanie', '::1', '', 1),
(235, ': logowanie', '::1', '', 1),
(236, ': wylogowanie', '::1', '', 1),
(237, ': logowanie', '::1', '', 1),
(238, ': wylogowanie', '::1', '', 1),
(239, ': logowanie', '::1', '', 1),
(240, ': wylogowanie', '::1', '', 1),
(241, ': logowanie', '::1', '', 1),
(242, ': wylogowanie', '::1', '', 1),
(243, ': logowanie', '::1', '', 1),
(244, ': wylogowanie', '::1', '', 1),
(245, ': logowanie', '::1', '', 1),
(246, ': edytowanie poÅ‚Ä…czenia o numerze ID: 7', '::1', '', 1),
(247, ': edytowanie poÅ‚Ä…czenia o numerze ID: 7', '::1', '', 1),
(248, ': usuniÄ™cie krosu o numerze id: 7', '::1', '', 1),
(249, ': usuniÄ™cie krosu o numerze id: 7', '::1', '', 1),
(250, ': usuniÄ™cie krosu o numerze id: 6', '::1', '', 1),
(251, ': przywrÃ³cenie krosu o numerze id: 6', '::1', '', 1),
(252, ': edytowanie poÅ‚Ä…czenia o numerze ID: 6', '::1', '', 1),
(253, ': usuniÄ™cie krosu o numerze id: 6', '::1', '', 1),
(254, ': przywrÃ³cenie krosu o numerze id: 6', '::1', '', 1),
(255, ': usuniÄ™cie krosu o numerze id: 6', '::1', '', 1),
(256, ': usuniÄ™cie budynku o numerze id: 4', '::1', '', 1),
(257, ': edytowanie urzÄ…dzenia o numerze id: 17', '::1', '', 1),
(258, ': edytowanie wspÃ³lnej czÄ™Å›ci krosu o numerze id: 2', '::1', '', 1),
(259, ': edytowanie wspÃ³lnej czÄ™Å›ci krosu o numerze id: 2', '::1', '', 1),
(260, ': wylogowanie', '::1', '', 1),
(261, ': logowanie', '::1', '', 1),
(262, ': wylogowanie', '::1', '', 1),
(263, ': logowanie', '::1', '', 1),
(264, ': logowanie', '::1', '', 1),
(265, ': logowanie', '::1', '', 1),
(266, ': logowanie', '::1', '', 1),
(267, ': wylogowanie', '::1', '', 1),
(268, ': logowanie', '::1', '', 1),
(269, ': edytowanie poÅ‚Ä…czenia o numerze ID: 4', '::1', '', 1),
(270, ': przywrÃ³cenie krosu o numerze id: 6', '::1', '', 1),
(271, ': edytowanie poÅ‚Ä…czenia o numerze ID: 4', '::1', '', 1),
(272, ': usuniÄ™cie krosu o numerze id: 6', '::1', '', 1),
(273, ': przywrÃ³cenie krosu o numerze id: 5', '::1', '', 1),
(274, ': edytowanie budynek o numerze id: 3', '::1', '', 1),
(275, ': edytowanie budynek o numerze id: 3', '::1', '', 1),
(276, ': dodanie budynku: D', '::1', '', 1),
(277, ': usuniÄ™cie budynku o numerze id: 4', '::1', '', 1),
(278, ': usuniÄ™cie urzÄ…dzenia o numerze id: 18', '::1', '', 1),
(279, ': edytowanie urzÄ…dzenia o numerze id: 17', '::1', '', 1),
(280, ': dodanie administratora: adminOP', '::1', '', 1),
(281, ': usuniÄ™cie administratora: adminOP', '::1', '', 1),
(282, ': edytowanie uÅ¼ytkownika o numerze id: 4', '::1', '', 1),
(283, ': usuniÄ™cie uÅ¼ytkownika: usfulus', '::1', '', 1),
(284, ': wylogowanie', '::1', '', 1),
(285, ': logowanie', '::1', '', 1),
(286, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(287, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(288, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(289, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(290, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(291, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 1', '::1', '', 1),
(292, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 1', '::1', '', 1),
(293, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '', 1),
(294, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '', 1),
(295, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(296, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(297, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(298, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(299, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(300, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(301, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(302, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '', 1),
(303, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '', 1),
(304, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '', 1),
(305, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '', 1),
(306, ': wylogowanie', '::1', '', 1),
(307, ': logowanie', '::1', '', 1),
(308, ': wylogowanie', '::1', '', 1),
(309, ': logowanie', '::1', '', 1),
(310, ': wylogowanie', '::1', '', 1),
(311, ': logowanie', '::1', '', 1),
(312, ': wylogowanie', '::1', '', 1),
(313, ': logowanie', '::1', '', 1),
(314, ': wylogowanie', '::1', '', 1),
(315, ': logowanie', '::1', '', 1),
(316, ': wylogowanie', '::1', '', 1),
(317, ': logowanie', '::1', '', 1),
(318, ': wylogowanie', '::1', '', 1),
(319, ': logowanie', '::1', '', 1),
(320, ': wylogowanie', '::1', '', 1),
(321, ': logowanie', '::1', '', 1),
(322, ': usuniÄ™cie urzÄ…dzenia o numerze id: 27', '::1', '', 1),
(323, ': wylogowanie', '::1', '', 1),
(324, ': logowanie', '::1', '', 1),
(325, ': wylogowanie', '::1', '', 1),
(326, ': logowanie', '::1', '', 1),
(327, ': wylogowanie', '::1', '', 1),
(328, ': logowanie', '::1', '', 1),
(329, ': wylogowanie', '::1', '', 1),
(330, ': logowanie', '::1', '', 1),
(331, ': logowanie', '::1', '', 1),
(332, ': wylogowanie', '::1', '12:01:38 23.10.2017', 1),
(333, ': logowanie', '::1', '12:02:21 23.10.2017', 1),
(334, ': edytowanie poÅ‚Ä…czenia o numerze ID: 1', '::1', '12:07:31 23.10.2017', 1),
(335, ': edytowanie poÅ‚Ä…czenia o numerze ID: 1', '::1', '12:08:02 23.10.2017', 1),
(336, ': edytowanie wspÃ³lnej czÄ™Å›ci krosu o numerze id: 5', '::1', '12:15:14 23.10.2017', 1),
(337, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '12:19:20 23.10.2017', 1),
(338, ': edytowanie pierwszej czÄ™Å›ci krosu o numerze id: 5', '::1', '12:19:40 23.10.2017', 1),
(339, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '12:20:03 23.10.2017', 1),
(340, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '12:20:22 23.10.2017', 1),
(341, ': usuniÄ™cie krosu o numerze id: 5', '::1', '12:20:53 23.10.2017', 1),
(342, ': przywrÃ³cenie krosu o numerze id: 5', '::1', '12:21:09 23.10.2017', 1),
(343, ': edytowanie budynek o numerze id: 3', '::1', '12:21:30 23.10.2017', 1),
(344, ': edytowanie budynek o numerze id: 3', '::1', '12:21:41 23.10.2017', 1),
(345, ': dodanie budynku: D', '::1', '12:21:46 23.10.2017', 1),
(346, ': usuniÄ™cie budynku o numerze id: 4', '::1', '12:21:57 23.10.2017', 1),
(347, ': edytowanie urzÄ…dzenia o numerze id: 25', '::1', '12:23:36 23.10.2017', 1),
(348, ': usuniÄ™cie urzÄ…dzenia o numerze id: 25', '::1', '12:23:53 23.10.2017', 1),
(349, ': edytowanie administratora o numerze id: 42', '::1', '12:24:19 23.10.2017', 1),
(350, ': usuniÄ™cie administratora: admin11112212', '::1', '12:24:29 23.10.2017', 1),
(351, ': dodanie administratora: OPTO', '::1', '12:24:51 23.10.2017', 1),
(352, ': edytowanie uÅ¼ytkownika o numerze id: 5', '::1', '12:25:20 23.10.2017', 1),
(353, ': usuniÄ™cie uÅ¼ytkownika: userowicz', '::1', '12:27:21 23.10.2017', 1),
(354, ': dodanie uÅ¼ytkownika: userowicz', '::1', '12:27:40 23.10.2017', 1),
(355, ': usuniÄ™cie uÅ¼ytkownika: userowicz', '::1', '12:27:51 23.10.2017', 1),
(356, ': dodanie poÅ‚Ä…czenia o numerze ID: 6', '::1', '12:29:15 23.10.2017', 1),
(357, ': usuniÄ™cie krosu o numerze id: 6', '::1', '12:29:35 23.10.2017', 1),
(358, ': wylogowanie', '::1', '15:01:27 23.10.2017', 1),
(359, ': logowanie', '::1', '07:53:52 24.10.2017', 1),
(360, ': logowanie', '::1', '10:24:35 24.10.2017', 1),
(361, ': wylogowanie', '::1', '14:10:47 24.10.2017', 1),
(362, ': logowanie', '::1', '14:06:10 25.10.2017', 1),
(363, ': wylogowanie', '::1', '15:18:56 25.10.2017', 1),
(364, ': logowanie', '::1', '15:30:53 25.10.2017', 1),
(365, ': wylogowanie', '::1', '17:08:16 25.10.2017', 1),
(366, ': logowanie', '::1', '12:03:25 27.10.2017', 1),
(367, ': wylogowanie', '::1', '17:09:17 27.10.2017', 1),
(368, ': logowanie', '::1', '07:34:44 30.10.2017', 1),
(369, ': edytowanie poÅ‚Ä…czenia o numerze ID: 2', '::1', '10:58:42 30.10.2017', 1),
(370, ': edytowanie poÅ‚Ä…czenia o numerze ID: 2', '::1', '11:00:29 30.10.2017', 1),
(371, ': wylogowanie', '::1', '11:33:37 30.10.2017', 1),
(372, ': logowanie', '::1', '10:30:59 31.10.2017', 1),
(373, ': wylogowanie', '::1', '10:52:34 31.10.2017', 1),
(374, ': logowanie', '::1', '10:52:44 31.10.2017', 1),
(375, ': edytowanie poÅ‚Ä…czenia o numerze ID: 5', '::1', '11:11:58 31.10.2017', 1),
(376, ': edytowanie poÅ‚Ä…czenia o numerze ID: 5', '::1', '11:30:53 31.10.2017', 1),
(377, ': edytowanie poÅ‚Ä…czenia o numerze ID: 5', '::1', '11:31:27 31.10.2017', 1),
(378, ': wylogowanie', '::1', '14:27:42 31.10.2017', 1),
(379, ': logowanie', '::1', '11:27:41 03.11.2017', 1),
(380, ': edytowanie wspÃ³lnej czÄ™Å›ci krosu o numerze id: 2', '::1', '12:43:32 03.11.2017', 1),
(381, ': edytowanie wspÃ³lnej czÄ™Å›ci krosu o numerze id: 2', '::1', '12:43:43 03.11.2017', 1),
(382, ': edytowanie wspÃ³lnej czÄ™Å›ci krosu o numerze id: 4', '::1', '12:56:16 03.11.2017', 1),
(383, ': edytowanie wspÃ³lnej czÄ™Å›ci krosu o numerze id: 4', '::1', '12:56:21 03.11.2017', 1),
(384, ': wylogowanie', '::1', '16:10:46 03.11.2017', 1),
(385, ': logowanie', '::1', '10:09:30 09.11.2017', 1),
(386, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '12:43:27 09.11.2017', 1),
(387, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 6', '::1', '12:43:34 09.11.2017', 1),
(388, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 1', '::1', '12:44:18 09.11.2017', 1),
(389, ': edytowanie drugiej czÄ™Å›ci krosu o numerze id: 1', '::1', '12:44:27 09.11.2017', 1),
(390, ': przywrÃ³cenie krosu o numerze id: 7', '::1', '14:11:45 09.11.2017', 1),
(391, ': usuniÄ™cie krosu o numerze id: 7', '::1', '14:11:53 09.11.2017', 1),
(392, ': wylogowanie', '::1', '14:56:03 09.11.2017', 1),
(393, ': logowanie', '::1', '12:49:04 10.11.2017', 1),
(394, ': przywrÃ³cenie krosu o numerze id: 7', '::1', '13:03:00 10.11.2017', 1),
(395, ': usuniÄ™cie krosu o numerze id: 7', '::1', '13:03:09 10.11.2017', 1),
(396, ': wylogowanie', '::1', '17:33:05 10.11.2017', 1),
(397, ': logowanie', '::1', '08:21:49 13.11.2017', 1),
(398, ': edytowanie budynek o numerze id: 1', '::1', '08:43:51 13.11.2017', 1),
(399, ': edytowanie budynek o numerze id: 1', '::1', '08:43:57 13.11.2017', 1),
(400, ': dodanie budynku: D', '::1', '08:48:37 13.11.2017', 1),
(401, ': usuniÄ™cie budynku o numerze id: 5', '::1', '08:48:44 13.11.2017', 1),
(402, ': dodanie budynku: E', '::1', '08:50:18 13.11.2017', 1),
(403, ': usuniÄ™cie budynku o numerze id: 6', '::1', '08:50:23 13.11.2017', 1),
(404, ': usuniÄ™cie administratora: admin2137', '::1', '11:14:01 13.11.2017', 1),
(405, ': edytowanie administratora o numerze id: 43', '::1', '11:14:14 13.11.2017', 1),
(406, ': dodanie administratora: papaj2137', '::1', '11:14:32 13.11.2017', 1),
(407, ': edytowanie administratora o numerze id: 39', '::1', '11:22:48 13.11.2017', 1),
(408, ': usuniÄ™cie administratora: administrant', '::1', '11:23:07 13.11.2017', 1),
(409, ': usuniÄ™cie administratora: admin', '::1', '11:42:53 13.11.2017', 1),
(410, ': usuniÄ™cie administratora: papaj2137', '::1', '11:43:00 13.11.2017', 1),
(411, ': edytowanie uÅ¼ytkownika o numerze id: 5', '::1', '11:47:40 13.11.2017', 1),
(412, ': usuniÄ™cie uÅ¼ytkownika: user', '::1', '11:47:56 13.11.2017', 1),
(413, ': wylogowanie', '::1', '14:42:00 13.11.2017', 1),
(414, ': logowanie', '::1', '13:42:07 15.11.2017', 1),
(415, ': wylogowanie', '::1', '13:44:14 15.11.2017', 1),
(416, ': logowanie', '::1', '21:13:17 27.09.2019', 1),
(417, ': wylogowanie', '::1', '21:14:21 27.09.2019', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logsofusers`
--

CREATE TABLE `logsofusers` (
  `idLogsOfUsers` int(11) NOT NULL,
  `executedQuerys` varchar(2000) NOT NULL,
  `IPAddress` varchar(45) NOT NULL,
  `hourdate` varchar(45) NOT NULL,
  `UsersTable_idUsersLogs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `logsofusers`
--

INSERT INTO `logsofusers` (`idLogsOfUsers`, `executedQuerys`, `IPAddress`, `hourdate`, `UsersTable_idUsersLogs`) VALUES
(1, ': logowanie', '91.221.34.20', '', 2),
(2, 'logowanie', '91.100.210.32', 'data1', 1),
(3, 'logowanie', '10.0.0.1', 'data21', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oldcommonpart`
--

CREATE TABLE `oldcommonpart` (
  `idOldCommonPart` int(11) NOT NULL,
  `Company` varchar(200) DEFAULT NULL,
  `Product` varchar(200) DEFAULT NULL,
  `VLAN` varchar(200) DEFAULT NULL,
  `Patchcord` varchar(200) DEFAULT NULL,
  `ClientSocketsNo` varchar(200) DEFAULT NULL,
  `RoomNo` varchar(200) DEFAULT NULL,
  `ACL` varchar(45) DEFAULT NULL,
  `Description` varchar(10000) DEFAULT NULL,
  `Action` varchar(10000) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `oldcommonpart`
--

INSERT INTO `oldcommonpart` (`idOldCommonPart`, `Company`, `Product`, `VLAN`, `Patchcord`, `ClientSocketsNo`, `RoomNo`, `ACL`, `Description`, `Action`) VALUES
(6, 'prÃ³bna', 'kros elektryczny', '300', '3000', '0', '0', '0', 'prÃ³bne poÅ‚Ä…czenie', ''),
(7, 'prÃ³ba', 'fiber', '400', '3875', '0', '0', '0', 'prÃ³bne poÅ‚Ä…czenie 2', 'dzial');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oldfirstpart`
--

CREATE TABLE `oldfirstpart` (
  `idOldFirstPart` int(11) NOT NULL,
  `Port1` varchar(45) DEFAULT NULL,
  `Building_idBuilding` int(11) NOT NULL,
  `Devices_idDevices` int(11) NOT NULL,
  `OldCommonPart_idOldCommonPart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `oldfirstpart`
--

INSERT INTO `oldfirstpart` (`idOldFirstPart`, `Port1`, `Building_idBuilding`, `Devices_idDevices`, `OldCommonPart_idOldCommonPart`) VALUES
(6, '12', 3, 17, 6),
(7, '10', 2, 5, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oldsecondpart`
--

CREATE TABLE `oldsecondpart` (
  `idOldSecondPart` int(11) NOT NULL,
  `Port2` varchar(45) DEFAULT NULL,
  `Building_idBuilding` int(11) NOT NULL,
  `Devices_idDevices` int(11) NOT NULL,
  `OldCommonPart_idOldCommonPart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `oldsecondpart`
--

INSERT INTO `oldsecondpart` (`idOldSecondPart`, `Port2`, `Building_idBuilding`, `Devices_idDevices`, `OldCommonPart_idOldCommonPart`) VALUES
(3, '11', 3, 12, 6),
(7, '223', 3, 2, 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `secondpart`
--

CREATE TABLE `secondpart` (
  `idSecondPart` int(11) NOT NULL,
  `Port2` varchar(45) DEFAULT NULL,
  `Building_idBuilding` int(11) NOT NULL,
  `Devices_idDevices` int(11) NOT NULL,
  `CommonPart_idCommonPart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `secondpart`
--

INSERT INTO `secondpart` (`idSecondPart`, `Port2`, `Building_idBuilding`, `Devices_idDevices`, `CommonPart_idCommonPart`) VALUES
(1, '17', 1, 2, 1),
(2, '11', 1, 4, 2),
(3, '1', 3, 13, 4),
(4, '2', 1, 15, 5),
(6, '2', 1, 13, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userstable`
--

CREATE TABLE `userstable` (
  `idUsersTable` int(11) NOT NULL,
  `loginUser` varchar(200) NOT NULL,
  `passUser` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `userstable`
--

INSERT INTO `userstable` (`idUsersTable`, `loginUser`, `passUser`) VALUES
(1, 'patryk', '$2y$10$pLJ.ZfRQhMnglghfQh66be9c6Vsee0zV71E8u8w/6woaikuSXxIYG'),
(2, 'user123', '$2y$10$DMT4IeMrrmTv6NoBLfl2kOU0d4TKiIuWxrBIwMRF9FHbwpdTCQYlS'),
(5, 'userekOP', '$2y$10$FBHCOCmFXsrpWZmFf8RsuuASGdF8TJhfR9J4A54NbERwpVYlQtJvi');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `adminstable`
--
ALTER TABLE `adminstable`
  ADD PRIMARY KEY (`idAdminsTable`),
  ADD UNIQUE KEY `idadminLogs_UNIQUE` (`idAdminsTable`),
  ADD UNIQUE KEY `loginAdmin_UNIQUE` (`loginAdmin`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`idBuilding`),
  ADD UNIQUE KEY `idBuilding_UNIQUE` (`idBuilding`),
  ADD UNIQUE KEY `Buildingcol_UNIQUE` (`BuildingName`);

--
-- Indexes for table `commonpart`
--
ALTER TABLE `commonpart`
  ADD PRIMARY KEY (`idCommonPart`),
  ADD UNIQUE KEY `idClientProducts_UNIQUE` (`idCommonPart`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`idDevices`),
  ADD UNIQUE KEY `idSwitches_UNIQUE` (`idDevices`);

--
-- Indexes for table `failedadminslogins`
--
ALTER TABLE `failedadminslogins`
  ADD PRIMARY KEY (`idFailedAdminsLogins`),
  ADD UNIQUE KEY `idFaildLogins_UNIQUE` (`idFailedAdminsLogins`);

--
-- Indexes for table `faileduserslogins`
--
ALTER TABLE `faileduserslogins`
  ADD PRIMARY KEY (`idFailedUsersLogins`),
  ADD UNIQUE KEY `idFaildLogins_UNIQUE` (`idFailedUsersLogins`);

--
-- Indexes for table `firstpart`
--
ALTER TABLE `firstpart`
  ADD PRIMARY KEY (`idFirstPart`,`Building_idBuilding`,`Devices_idDevices`,`CommonPart_idCommonPart`),
  ADD UNIQUE KEY `idFirstPart_UNIQUE` (`idFirstPart`),
  ADD KEY `fk_FirstPart_Building1_idx` (`Building_idBuilding`),
  ADD KEY `fk_FirstPart_Devices1_idx` (`Devices_idDevices`),
  ADD KEY `fk_FirstPart_CommonPart1_idx` (`CommonPart_idCommonPart`);

--
-- Indexes for table `logsofadmins`
--
ALTER TABLE `logsofadmins`
  ADD PRIMARY KEY (`idLogsOfAdmins`,`AdminsTable_idAdminsLogs`),
  ADD UNIQUE KEY `idLogsOfAdmin_UNIQUE` (`idLogsOfAdmins`),
  ADD KEY `fk_LogsOfAdmins_AdminsTable1_idx` (`AdminsTable_idAdminsLogs`);

--
-- Indexes for table `logsofusers`
--
ALTER TABLE `logsofusers`
  ADD PRIMARY KEY (`idLogsOfUsers`,`UsersTable_idUsersLogs`),
  ADD UNIQUE KEY `idLogsOfUsers_UNIQUE` (`idLogsOfUsers`),
  ADD KEY `fk_LogsOfUsers_UsersTable1_idx` (`UsersTable_idUsersLogs`);

--
-- Indexes for table `oldcommonpart`
--
ALTER TABLE `oldcommonpart`
  ADD PRIMARY KEY (`idOldCommonPart`),
  ADD UNIQUE KEY `idClientProducts_UNIQUE` (`idOldCommonPart`);

--
-- Indexes for table `oldfirstpart`
--
ALTER TABLE `oldfirstpart`
  ADD PRIMARY KEY (`idOldFirstPart`,`Building_idBuilding`,`Devices_idDevices`,`OldCommonPart_idOldCommonPart`),
  ADD UNIQUE KEY `idFirstPart_UNIQUE` (`idOldFirstPart`),
  ADD KEY `fk_FirstPart_Building1_idx` (`Building_idBuilding`),
  ADD KEY `fk_OldFirstPart_Devices1_idx` (`Devices_idDevices`),
  ADD KEY `fk_OldFirstPart_OldCommonPart1_idx` (`OldCommonPart_idOldCommonPart`);

--
-- Indexes for table `oldsecondpart`
--
ALTER TABLE `oldsecondpart`
  ADD PRIMARY KEY (`idOldSecondPart`,`Building_idBuilding`,`Devices_idDevices`,`OldCommonPart_idOldCommonPart`),
  ADD UNIQUE KEY `idFirstPart_UNIQUE` (`idOldSecondPart`),
  ADD KEY `fk_SecondPart_Building1_idx` (`Building_idBuilding`),
  ADD KEY `fk_OldSecondPart_Devices1_idx` (`Devices_idDevices`),
  ADD KEY `fk_OldSecondPart_OldCommonPart1_idx` (`OldCommonPart_idOldCommonPart`);

--
-- Indexes for table `secondpart`
--
ALTER TABLE `secondpart`
  ADD PRIMARY KEY (`idSecondPart`,`Building_idBuilding`,`Devices_idDevices`,`CommonPart_idCommonPart`),
  ADD UNIQUE KEY `idFirstPart_UNIQUE` (`idSecondPart`),
  ADD KEY `fk_SecondPart_Building1_idx` (`Building_idBuilding`),
  ADD KEY `fk_SecondPart_Devices1_idx` (`Devices_idDevices`),
  ADD KEY `fk_SecondPart_CommonPart1_idx` (`CommonPart_idCommonPart`);

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
  ADD PRIMARY KEY (`idUsersTable`),
  ADD UNIQUE KEY `idUsersLogs_UNIQUE` (`idUsersTable`),
  ADD UNIQUE KEY `UsersLog_UNIQUE` (`loginUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `adminstable`
--
ALTER TABLE `adminstable`
  MODIFY `idAdminsTable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT dla tabeli `building`
--
ALTER TABLE `building`
  MODIFY `idBuilding` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `commonpart`
--
ALTER TABLE `commonpart`
  MODIFY `idCommonPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `devices`
--
ALTER TABLE `devices`
  MODIFY `idDevices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT dla tabeli `failedadminslogins`
--
ALTER TABLE `failedadminslogins`
  MODIFY `idFailedAdminsLogins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT dla tabeli `faileduserslogins`
--
ALTER TABLE `faileduserslogins`
  MODIFY `idFailedUsersLogins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `firstpart`
--
ALTER TABLE `firstpart`
  MODIFY `idFirstPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `logsofadmins`
--
ALTER TABLE `logsofadmins`
  MODIFY `idLogsOfAdmins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=418;
--
-- AUTO_INCREMENT dla tabeli `logsofusers`
--
ALTER TABLE `logsofusers`
  MODIFY `idLogsOfUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `oldcommonpart`
--
ALTER TABLE `oldcommonpart`
  MODIFY `idOldCommonPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `oldfirstpart`
--
ALTER TABLE `oldfirstpart`
  MODIFY `idOldFirstPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `oldsecondpart`
--
ALTER TABLE `oldsecondpart`
  MODIFY `idOldSecondPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `secondpart`
--
ALTER TABLE `secondpart`
  MODIFY `idSecondPart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `userstable`
--
ALTER TABLE `userstable`
  MODIFY `idUsersTable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `firstpart`
--
ALTER TABLE `firstpart`
  ADD CONSTRAINT `fk_FirstPart_Building1` FOREIGN KEY (`Building_idBuilding`) REFERENCES `building` (`idBuilding`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FirstPart_CommonPart1` FOREIGN KEY (`CommonPart_idCommonPart`) REFERENCES `commonpart` (`idCommonPart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FirstPart_Devices1` FOREIGN KEY (`Devices_idDevices`) REFERENCES `devices` (`idDevices`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `logsofadmins`
--
ALTER TABLE `logsofadmins`
  ADD CONSTRAINT `fk_LogsOfAdmins_AdminsTable1` FOREIGN KEY (`AdminsTable_idAdminsLogs`) REFERENCES `adminstable` (`idAdminsTable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `logsofusers`
--
ALTER TABLE `logsofusers`
  ADD CONSTRAINT `fk_LogsOfUsers_UsersTable1` FOREIGN KEY (`UsersTable_idUsersLogs`) REFERENCES `userstable` (`idUsersTable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `oldfirstpart`
--
ALTER TABLE `oldfirstpart`
  ADD CONSTRAINT `fk_FirstPart_Building10` FOREIGN KEY (`Building_idBuilding`) REFERENCES `building` (`idBuilding`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OldFirstPart_Devices1` FOREIGN KEY (`Devices_idDevices`) REFERENCES `devices` (`idDevices`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OldFirstPart_OldCommonPart1` FOREIGN KEY (`OldCommonPart_idOldCommonPart`) REFERENCES `oldcommonpart` (`idOldCommonPart`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `oldsecondpart`
--
ALTER TABLE `oldsecondpart`
  ADD CONSTRAINT `fk_OldSecondPart_Devices1` FOREIGN KEY (`Devices_idDevices`) REFERENCES `devices` (`idDevices`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OldSecondPart_OldCommonPart1` FOREIGN KEY (`OldCommonPart_idOldCommonPart`) REFERENCES `oldcommonpart` (`idOldCommonPart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SecondPart_Building10` FOREIGN KEY (`Building_idBuilding`) REFERENCES `building` (`idBuilding`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `secondpart`
--
ALTER TABLE `secondpart`
  ADD CONSTRAINT `fk_SecondPart_Building1` FOREIGN KEY (`Building_idBuilding`) REFERENCES `building` (`idBuilding`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SecondPart_CommonPart1` FOREIGN KEY (`CommonPart_idCommonPart`) REFERENCES `commonpart` (`idCommonPart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SecondPart_Devices1` FOREIGN KEY (`Devices_idDevices`) REFERENCES `devices` (`idDevices`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
